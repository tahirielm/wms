<?php

namespace App\Controller;

use App\Entity\Inventory;
use App\Form\InventoryType;
use App\Repository\InventoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class InventoryController extends AbstractController
{
    #[Route('/inventory', name: 'app_inventory')]
    public function index(InventoryRepository $inventoryRepository): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        $inventory = $inventoryRepository->findBy([], ['createdAt' => 'DESC']);
        return $this->render('inventory/index.html.twig', ['inventorys' => $inventory]);
    }

    #[Route('/inventory/create', name: 'app_inventory_create', methods: 'GET|POST')]
    public function create(Request $request, EntityManagerInterface $em): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        $inventory = new Inventory;
        $form = $this->createForm(InventoryType::class, $inventory);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $inventory->setUser($this->getUser());
            $em->persist($inventory);
            $em->flush();

            $this->addFlash('success', 'Inventory succefully created !');

            return $this->redirectToRoute('app_inventory');
        }

        return $this->render('inventory/create.html.twig', [
            'formInventorys' => $form->createView()
        ]);
    }

    #[Route('/inventory/{id<[0-9]+>}', name: 'app_inventory_details', methods: 'GET')]
    public function show(Inventory  $inventory): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        return $this->render('inventory/show.html.twig', compact('inventory'));
    }

    #[Route('/inventory/{id<[0-9]+>}/edit}', name: 'app_inventory_edit', methods: 'GET|POST')]
    public function edit(Inventory $inventory, EntityManagerInterface $em, Request $request): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        $form = $this->createForm(InventoryType::class, $inventory);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            $this->addFlash('success', 'Inventory succefully updated !');
            return $this->redirectToRoute('app_inventory');
        }

        return $this->render('inventory/edit.html.twig', [
            'inventory' => $inventory,
            'formEditInventorys' => $form->createView()
        ]);
    }

    #[Route('/inventory/{id<[0-9]+>}', name: 'app_inventory_delete', methods: 'DELETE|POST')]
    public function delete(Inventory $inventory, EntityManagerInterface $em, Request $request): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        if ($this->isCsrfTokenValid('inventory_deletion' . $inventory->getId(), $request->request->get('csrf_token'))) {
            $em->remove($inventory);
            $em->flush();
            $this->addFlash('info', 'Inventory succefully deleted !');
        }

        return $this->redirectToRoute('app_inventory');
    }
}
