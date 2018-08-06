<?php

namespace App\Controller;

use App\Entity\Applications;
use App\Repository\ApplicationsRepository;
use App\Repository\MenusRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\Dotenv\Dotenv;
use Symfony\Component\HttpKernel\KernelInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Validator\Validation;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints as Assert;

use App\Entity\Comments;
use Symfony\Component\HttpFoundation\JsonResponse;


class IndexController extends Controller
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
     * @Route("/paginate_apps", name="paginate_apps", methods="GET|POST")
     */
    public function paginate(Request $request)
    {
        $length = $request->get('length');
        $length = $length && ($length!=-1)?$length:0;

        $type = $request->get('type');

        $start = $request->get('start');
        $start = $length?($start && ($start!=-1)?$start:0)/$length:0;

        $search = $request->get('search');
        $filters = [
            'query' => @$search['value']
        ];

        $apps = $this->getDoctrine()->getRepository(Applications::class)->search(
            $filters, $start, $length, true, $type
        );

        $output = array(
            'data' => array(),
            'recordsFiltered' => count($this->getDoctrine()->getRepository(Applications::class)->search($filters, 0, false, true, $type)),
            'recordsTotal' => count($this->getDoctrine()->getRepository(Applications::class)->search(array(), 0, false, true, $type))
        );


        foreach ($apps as $app) {
            $output['data'][] = [
                'id' => $app->getId(),
                'name' => '<a href="'.$this->generateUrl('applications', array('id' => $app->getId())).'">'.$app->getName().'</a>',
                'description' => substr($app->getDescription(), 0, 60)."..",
                'img' => '<img class="myImg" style="max-width: 100px; " title="'.$app->getName().'"  src="images/apps/'.$app->getImg().'"/>',
                'url' => '<a href="'.$app->getUrl().'">'.$app->getUrl().'</a>',
                'type' => $app->getType(),
                'download_count' => $app->getDownloadCount()
               // 'created_at' => $app->getCreatedAt()->format('Y-m-d h:i:s'),
            ];
        }

        return new Response(json_encode($output), 200, ['Content-Type' => 'application/json']);

    }



    /**
     * @Route("/", name="index")
     */
    public function index(MenusRepository $menusRepository)
    {
        return $this->render('index/index.html.twig', [
            'key' => $this->key,
            'menus' => $menusRepository->findAll()
        ]);
    }


    /**
     * @Route("/contact_us_email", name="contact_us_email", methods="GET|POST")
     */
    public function contact_us_email(Request $request, \Swift_Mailer $mailer)
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

        return $this->render('index/index.html.twig', ['errors' => $errors, 'key' => $this->key]);
    }

    /**
     * @Route("applications/{id}", name="applications", methods="GET|POST")
     */
    public function applications(Request $request, Applications $applications){

        $comments = $applications->getComments();

        $com = [];
        foreach ($comments as $comment){
            $com[$comment->getParentId()][] = $comment;
        }

        return $this->render('index/application.html.twig', ['application' => $applications, 'comments' => $com]);
    }

    /**
     * @Route("store_comment", name="store_comment", methods="POST")
     */
    public function storeComment(Request $request, ApplicationsRepository $rep){


        $data = [];
        $data['name'] = $request->get('name');
        $data['email'] = $request->get('email');
        $data['site'] = $request->get('site');
        $data['text'] = $request->get('text');
        $data['application_id'] = $request->get('comment_post_ID');
        $data['parent_id'] = $request->get('comment_parent');

        $application = $rep->find($data['application_id']);

        $entityManager = $this->getDoctrine()->getManager();
        $comment = new Comments();

        $comment->setName($data['name']);
        $comment->setEmail($data['email']);
        $comment->setSite($data['site']);
        $comment->setText($data['text']);
        $comment->setApplication($application);
        $comment->setParentId($data['parent_id']);
        $comment->setCreatedAt(new \DateTime());
        $comment->setUpdatedAt(new \DateTime());

        $entityManager->persist($comment);

        $entityManager->flush($comment);

        $data['id'] = $comment->getId();
        $data['hash'] = md5($data['email']);
        $data['created_at'] = $comment->getCreatedAt();

        $view_comment = $this->renderView('index/content_one_comment.html.twig', ['data' => $data]);

        return new JsonResponse(['success' => TRUE, 'comment' => $view_comment, 'data' => $data]);

    }

}
