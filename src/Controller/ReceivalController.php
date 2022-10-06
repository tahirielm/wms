<?php

namespace App\Controller;

use App\Entity\Receival;
use App\Form\ReceivalType;
use App\Repository\ReceivalRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class ReceivalController extends AbstractController
{
    #[Route('/receival', name: 'app_receival')]
    public function index(ReceivalRepository $receivalRepository): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        $receival = $receivalRepository->findBy([], ['createdAt' => 'DESC']);
        return $this->render('receival/index.html.twig', ['receivals' => $receival]);
    }

    #[Route('/receival/create', name: 'app_receival_create', methods: 'GET|POST')]
    public function create(Request $request, EntityManagerInterface $em): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        $receival = new Receival;
        $form = $this->createForm(ReceivalType::class, $receival);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $receival->setUser($this->getUser());
            $em->persist($receival);
            $em->flush();

            $this->addFlash('success', 'Receival succefully created !');

            return $this->redirectToRoute('app_receival');
        }

        return $this->render('receival/create.html.twig', [
            'formReceivals' => $form->createView()
        ]);
    }

    #[Route('/receival/{id<[0-9]+>}', name: 'app_receival_details', methods: 'GET')]
    public function show(Receival  $receival): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        return $this->render('receival/show.html.twig', compact('receival'));
    }

    #[Route('/receival/{id<[0-9]+>}/edit}', name: 'app_receival_edit', methods: 'GET|POST')]
    public function edit(Receival $receival, EntityManagerInterface $em, Request $request): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        $form = $this->createForm(ReceivalType::class, $receival);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            $this->addFlash('success', 'Receival succefully updated !');
            return $this->redirectToRoute('app_receival');
        }

        return $this->render('receival/edit.html.twig', [
            'receival' => $receival,
            'formEditReceivals' => $form->createView()
        ]);
    }

    #[Route('/receival/{id<[0-9]+>}', name: 'app_receival_delete', methods: 'DELETE|POST')]
    public function delete(Receival $receival, EntityManagerInterface $em, Request $request): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        if ($this->isCsrfTokenValid('receival_deletion' . $receival->getId(), $request->request->get('csrf_token'))) {
            $em->remove($receival);
            $em->flush();
            $this->addFlash('info', 'Receival succefully deleted !');
        }

        return $this->redirectToRoute('app_receival');
    }
}
