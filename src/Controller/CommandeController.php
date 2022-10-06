<?php

// namespace App\Controller;

// use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
// use Symfony\Component\HttpFoundation\Response;
// use Symfony\Component\Routing\Annotation\Route;

// class CommandeController extends AbstractController
// {
//     #[Route('/commande', name: 'app_commande')]
//     public function index(): Response
//     {
//         return $this->render('commande/index.html.twig', [
//             'controller_name' => 'CommandeController',
//         ]);
//     }
// }

namespace App\Controller;

use App\Entity\Commande;
use App\Form\CommandeType;
use App\Repository\CommandeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class CommandeController extends AbstractController
{
    #[Route('/commande', name: 'app_commande')]
    public function index(CommandeRepository $commandeRepository): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        $commande = $commandeRepository->findBy([], ['createdAt' => 'DESC']);
        return $this->render('commande/index.html.twig', ['commandes' => $commande]);
    }

    #[Route('/commande/create', name: 'app_commande_create', methods: 'GET|POST')]
    public function create(Request $request, EntityManagerInterface $em): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        $commande = new Commande;
        $form = $this->createForm(CommandeType::class, $commande);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $product->setUser($this->getUser());
            $em->persist($commande);
            $em->flush();

            $this->addFlash('success', 'commande succefully created !');

            return $this->redirectToRoute('app_commande');
        }

        return $this->render('commande/create.html.twig', [
            'formCommandes' => $form->createView()
        ]);
    }

    #[Route('/commande/{id<[0-9]+>}', name: 'app_commande_details', methods: 'GET')]
    public function show(Commande  $commande): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        return $this->render('commande/show.html.twig', compact('commande'));
    }

    #[Route('/commande/{id<[0-9]+>}/edit}', name: 'app_commande_edit', methods: 'GET|POST')]
    public function edit(Commande $commande, EntityManagerInterface $em, Request $request): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        $form = $this->createForm(CommandeType::class, $commande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            $this->addFlash('success', 'commande succefully updated !');
            return $this->redirectToRoute('app_commande');
        }

        return $this->render('commande/edit.html.twig', [
            'commande' => $commande,
            'formEditCommandes' => $form->createView()
        ]);
    }

    #[Route('/commande/{id<[0-9]+>}', name: 'app_commande_delete', methods: 'DELETE|POST')]
    public function delete(Commande $commande, EntityManagerInterface $em, Request $request): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        if ($this->isCsrfTokenValid('commande_deletion' . $commande->getId(), $request->request->get('csrf_token'))) {
            $em->remove($commande);
            $em->flush();
            $this->addFlash('info', 'commande succefully deleted !');
        }

        return $this->redirectToRoute('app_commande');
    }
}
