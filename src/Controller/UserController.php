<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use PhpParser\Node\Scalar\MagicConst\Dir;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\Validator\Validation;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints as Assert;

use Symfony\Component\Dotenv\Dotenv;
use Symfony\Component\HttpKernel\KernelInterface;

/**
 * @Route("/user")
 */
class UserController extends Controller
{
     private $mail_to;
     private $key;

    public function __construct(KernelInterface $kernel)
    {
        $this->kernel = $kernel;
        $envFile = $this->kernel->getProjectDir()."/.env";
        if (file_exists($envFile)) {
            (new Dotenv(dirname($envFile)))->load($envFile);
            $this->mail_to = getenv('MAIL_TO');
            $this->key = getenv('KEY');
        }
    }

    /**
     * @Route("/paginate", name="paginate", methods="GET|POST")
     */
    public function paginate(Request $request)
    {
        $length = $request->get('length');
        $length = $length && ($length!=-1)?$length:0;

        $start = $request->get('start');
        $start = $length?($start && ($start!=-1)?$start:0)/$length:0;

        $search = $request->get('search');
        $filters = [
            'query' => @$search['value']
        ];

        $users = $this->getDoctrine()->getRepository(User::class)->search(
            $filters, $start, $length
        );

        $output = array(
            'data' => array(),
            'recordsFiltered' => count($this->getDoctrine()->getRepository(User::class)->search($filters, 0, false)),
            'recordsTotal' => count($this->getDoctrine()->getRepository(User::class)->search(array(), 0, false))
        );

        foreach ($users as $user) {
            $output['data'][] = [
                'id' => $user->getId(),
                'name' => $user->getName(),
                'created_at' => $user->getCreatedAt()->format('Y-m-d'),
            ];
        }

        return new Response(json_encode($output), 200, ['Content-Type' => 'application/json']);

    }


    /**
     * @Route("/contact_us", name="contact_us", methods="GET|POST")
     */
    public function contact_us(Request $request, \Swift_Mailer $mailer)
    {
        $name = $request->get('name');
        $email = $request->get('email');
        $text = $request->get('text');

        $validator = Validation::createValidator();
        $errors = [];

        $nameConstraint = new NotBlank();

        $violations = $validator->validate(
            $name, $nameConstraint
        );

        if (count($violations) > 0 ){
            $errors['name'] = $violations[0]->getMessage();
        }

        $emailConstraint = array(new Assert\Email(), new NotBlank() );

        $violations = $validator->validate(
            $email, $emailConstraint
        );

        if (count($violations) > 0 ) {
            $errors['email'] = $violations[0]->getMessage();
        }

        $textConstraint = new NotBlank();

        $violations = $validator->validate(
            $text, $textConstraint
        );

        if (count($violations) > 0 ) {
            $errors['text'] = $violations[0]->getMessage();
        }


        if(count($errors) == 0 ){
            $message = (new \Swift_Message($name))
                ->setFrom($email)
                ->setTo($this->mail_to)
                ->setBody(
                    $this->renderView(
                        'emails/index.html.twig', ['text' => $text]
                    ),
                    'text/html'
                );

            $mailer->send($message);
        }

        return $this->render('user/index.html.twig', ['errors' => $errors, 'key' => $this->key]);
    }

        /**
     * @Route("/", name="user_index", methods="GET")
     */
    public function index(UserRepository $userRepository): Response
    {
        return $this->render('user/index.html.twig', ['users' => $userRepository->findAll(), 'key' => $this->key]);
    }

    /**
     * @Route("/new", name="user_new", methods="GET|POST")
     */
    public function new(Request $request): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('user_index');
        }

        return $this->render('user/new.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="user_show", methods="GET")
     */
    public function show(User $user): Response
    {
        return $this->render('user/show.html.twig', ['user' => $user]);
    }

    /**
     * @Route("/{id}/edit", name="user_edit", methods="GET|POST")
     */
    public function edit(Request $request, User $user): Response
    {
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('user_edit', ['id' => $user->getId()]);
        }

        return $this->render('user/edit.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="user_delete", methods="DELETE")
     */
    public function delete(Request $request, User $user): Response
    {
        if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($user);
            $em->flush();
        }

        return $this->redirectToRoute('user_index');
    }

    /**
     * @Route("/list", name="user_list")
     */
    public function indexAction()
    {
        return  $this->render('AcmeDemoBundle:User:index.html.twig',array());
    }


}
