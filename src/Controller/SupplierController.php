<?php

// namespace App\Controller;

// use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
// use Symfony\Component\HttpFoundation\Response;
// use Symfony\Component\Routing\Annotation\Route;

// class SupplierController extends AbstractController
// {
//     #[Route('/supplier', name: 'app_supplier')]
//     public function index(): Response
//     {
//         return $this->render('supplier/index.html.twig', [
//             'controller_name' => 'SupplierController',
//         ]);
//     }
// }

namespace App\Controller;

use App\Entity\Supplier;
use App\Form\SupplierType;
use App\Repository\SupplierRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class SupplierController extends AbstractController
{
    #[Route('/supplier', name: 'app_supplier')]
    public function index(SupplierRepository $supplierRepository): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        $supplier = $supplierRepository->findBy([], ['createdAt' => 'DESC']);
        return $this->render('supplier/index.html.twig', ['suppliers' => $supplier]);
    }

    #[Route('/supplier/create', name: 'app_supplier_create', methods: 'GET|POST')]
    public function create(Request $request, EntityManagerInterface $em): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        $supplier = new Supplier;
        $form = $this->createForm(SupplierType::class, $supplier);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $product->setUser($this->getUser());
            $em->persist($supplier);
            $em->flush();

            $this->addFlash('success', 'supplier succefully created !');

            return $this->redirectToRoute('app_supplier');
        }

        return $this->render('supplier/create.html.twig', [
            'formSuppliers' => $form->createView()
        ]);
    }

    #[Route('/supplier/{id<[0-9]+>}', name: 'app_supplier_details', methods: 'GET')]
    public function show(Supplier  $supplier): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        return $this->render('supplier/show.html.twig', compact('supplier'));
    }

    #[Route('/supplier/{id<[0-9]+>}/edit}', name: 'app_supplier_edit', methods: 'GET|POST')]
    public function edit(Supplier $supplier, EntityManagerInterface $em, Request $request): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        $form = $this->createForm(SupplierType::class, $supplier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            $this->addFlash('success', 'supplier succefully updated !');
            return $this->redirectToRoute('app_supplier');
        }

        return $this->render('supplier/edit.html.twig', [
            'supplier' => $supplier,
            'formEditSuppliers' => $form->createView()
        ]);
    }

    #[Route('/supplier/{id<[0-9]+>}', name: 'app_supplier_delete', methods: 'DELETE|POST')]
    public function delete(Supplier $supplier, EntityManagerInterface $em, Request $request): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        if ($this->isCsrfTokenValid('supplier_deletion' . $supplier->getId(), $request->request->get('csrf_token'))) {
            $em->remove($supplier);
            $em->flush();
            $this->addFlash('info', 'supplier succefully deleted !');
        }

        return $this->redirectToRoute('app_supplier');
    }
}
