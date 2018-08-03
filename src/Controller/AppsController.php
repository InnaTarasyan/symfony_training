<?php

namespace App\Controller;

use App\Entity\Apps;
use App\Form\AppsType;
use App\Repository\AppsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/apps")
 */
class AppsController extends Controller
{
    /**
     * @Route("/", name="apps_index", methods="GET")
     */
    public function index(AppsRepository $appsRepository): Response
    {
        return $this->render('apps/index.html.twig', ['apps' => $appsRepository->findAll()]);
    }

    /**
     * @Route("/new", name="apps_new", methods="GET|POST")
     */
    public function new(Request $request): Response
    {
        $app = new Apps();
        $form = $this->createForm(AppsType::class, $app);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($app);
            $em->flush();

            return $this->redirectToRoute('apps_index');
        }

        return $this->render('apps/new.html.twig', [
            'app' => $app,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="apps_show", methods="GET")
     */
    public function show(Apps $app): Response
    {
        return $this->render('apps/show.html.twig', ['app' => $app]);
    }

    /**
     * @Route("/{id}/edit", name="apps_edit", methods="GET|POST")
     */
    public function edit(Request $request, Apps $app): Response
    {
        $form = $this->createForm(AppsType::class, $app);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('apps_edit', ['id' => $app->getId()]);
        }

        return $this->render('apps/edit.html.twig', [
            'app' => $app,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="apps_delete", methods="DELETE")
     */
    public function delete(Request $request, Apps $app): Response
    {
        if ($this->isCsrfTokenValid('delete'.$app->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($app);
            $em->flush();
        }

        return $this->redirectToRoute('apps_index');
    }
}
