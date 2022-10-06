<?php

// namespace App\Controller;

// use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
// use Symfony\Component\HttpFoundation\Response;
// use Symfony\Component\Routing\Annotation\Route;

// class ClientController extends AbstractController
// {
//     #[Route('/client', name: 'app_client')]
//     public function index(): Response
//     {
//         return $this->render('client/index.html.twig', [
//             'controller_name' => 'ClientController',
//         ]);
//     }
// }

namespace App\Controller;

use App\Entity\Client;
use App\Form\ClientType;
use App\Repository\ClientRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class ClientController extends AbstractController
{
    #[Route('/client', name: 'app_client')]
    public function index(ClientRepository $clientRepository): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        $client = $clientRepository->findBy([], ['createdAt' => 'DESC']);
        return $this->render('client/index.html.twig', ['clients' => $client]);
    }

    #[Route('/client/create', name: 'app_client_create', methods: 'GET|POST')]
    public function create(Request $request, EntityManagerInterface $em): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        $client = new Client;
        $form = $this->createForm(ClientType::class, $client);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $product->setUser($this->getUser());
            $em->persist($client);
            $em->flush();

            $this->addFlash('success', 'client succefully created !');

            return $this->redirectToRoute('app_client');
        }

        return $this->render('client/create.html.twig', [
            'formClients' => $form->createView()
        ]);
    }

    #[Route('/client/{id<[0-9]+>}', name: 'app_client_details', methods: 'GET')]
    public function show(Client  $client): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        return $this->render('client/show.html.twig', compact('client'));
    }

    #[Route('/client/{id<[0-9]+>}/edit}', name: 'app_client_edit', methods: 'GET|POST')]
    public function edit(Client $client, EntityManagerInterface $em, Request $request): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        $form = $this->createForm(ClientType::class, $client);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            $this->addFlash('success', 'client succefully updated !');
            return $this->redirectToRoute('app_client');
        }

        return $this->render('client/edit.html.twig', [
            'client' => $client,
            'formEditClients' => $form->createView()
        ]);
    }

    #[Route('/client/{id<[0-9]+>}', name: 'app_client_delete', methods: 'DELETE|POST')]
    public function delete(Client $client, EntityManagerInterface $em, Request $request): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        if ($this->isCsrfTokenValid('client_deletion' . $client->getId(), $request->request->get('csrf_token'))) {
            $em->remove($client);
            $em->flush();
            $this->addFlash('info', 'client succefully deleted !');
        }

        return $this->redirectToRoute('app_client');
    }
}
