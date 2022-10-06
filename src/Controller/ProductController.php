<?php

namespace App\Controller;

use App\Entity\Product;
use App\Form\ProductType;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class ProductController extends AbstractController
{
    #[Route('/product', name: 'app_product')]
    public function index(ProductRepository $productRepository): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        $product = $productRepository->findBy([], ['createdAt' => 'DESC']);
        return $this->render('product/index.html.twig', ['products' => $product]);
    }

    #[Route('/product/create', name: 'app_product_create', methods: 'GET|POST')]
    public function create(Request $request, EntityManagerInterface $em): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        $product = new Product;
        $form = $this->createForm(ProductType::class, $product);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $product->setUser($this->getUser());
            $em->persist($product);
            $em->flush();

            $this->addFlash('success', 'Product succefully created !');

            return $this->redirectToRoute('app_product');
        }

        return $this->render('product/create.html.twig', [
            'formProducts' => $form->createView()
        ]);
    }

    #[Route('/product/{id<[0-9]+>}', name: 'app_product_details', methods: 'GET')]
    public function show(Product  $product): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        return $this->render('product/show.html.twig', compact('product'));
    }

    #[Route('/product/{id<[0-9]+>}/edit}', name: 'app_product_edit', methods: 'GET|POST')]
    public function edit(Product $product, EntityManagerInterface $em, Request $request): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            $this->addFlash('success', 'Product succefully updated !');
            return $this->redirectToRoute('app_product');
        }

        return $this->render('product/edit.html.twig', [
            'product' => $product,
            'formEditProducts' => $form->createView()
        ]);
    }

    #[Route('/product/{id<[0-9]+>}', name: 'app_product_delete', methods: 'DELETE|POST')]
    public function delete(Product $product, EntityManagerInterface $em, Request $request): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        if ($this->isCsrfTokenValid('product_deletion' . $product->getId(), $request->request->get('csrf_token'))) {
            $em->remove($product);
            $em->flush();
            $this->addFlash('info', 'Product succefully deleted !');
        }

        return $this->redirectToRoute('app_product');
    }
}
