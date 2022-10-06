<?php

namespace App\Controller;

use App\Entity\Stockage;
use App\Form\StockageType;
use App\Repository\StockageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class StockageController extends AbstractController
{
    #[Route('/stockage', name: 'app_stockage')]
    public function index(StockageRepository $stockageRepository): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        $stockage = $stockageRepository->findBy([], ['createdAt' => 'DESC']);
        return $this->render('stockage/index.html.twig', ['stockages' => $stockage]);
    }

    #[Route('/stockage/create', name: 'app_stockage_create', methods: 'GET|POST')]
    public function create(Request $request, EntityManagerInterface $em): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        $stockage = new Stockage;
        $form = $this->createForm(StockageType::class, $stockage);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $product->setUser($this->getUser());
            $em->persist($stockage);
            $em->flush();

            $this->addFlash('success', 'stockage succefully created !');

            return $this->redirectToRoute('app_stockage');
        }

        return $this->render('stockage/create.html.twig', [
            'formStockages' => $form->createView()
        ]);
    }

    #[Route('/stockage/{id<[0-9]+>}', name: 'app_stockage_details', methods: 'GET')]
    public function show(Stockage  $stockage): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        return $this->render('stockage/show.html.twig', compact('stockage'));
    }

    #[Route('/stockage/{id<[0-9]+>}/edit}', name: 'app_stockage_edit', methods: 'GET|POST')]
    public function edit(Stockage $stockage, EntityManagerInterface $em, Request $request): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        $form = $this->createForm(StockageType::class, $stockage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            $this->addFlash('success', 'stockage succefully updated !');
            return $this->redirectToRoute('app_stockage');
        }

        return $this->render('stockage/edit.html.twig', [
            'stockage' => $stockage,
            'formEditStockages' => $form->createView()
        ]);
    }

    #[Route('/stockage/{id<[0-9]+>}', name: 'app_stockage_delete', methods: 'DELETE|POST')]
    public function delete(Stockage $stockage, EntityManagerInterface $em, Request $request): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        if ($this->isCsrfTokenValid('stockage_deletion' . $stockage->getId(), $request->request->get('csrf_token'))) {
            $em->remove($stockage);
            $em->flush();
            $this->addFlash('info', 'stockage succefully deleted !');
        }

        return $this->redirectToRoute('app_stockage');
    }
}
