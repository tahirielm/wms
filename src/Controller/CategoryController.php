<?php

// namespace App\Controller;

// use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
// use Symfony\Component\HttpFoundation\Response;
// use Symfony\Component\Routing\Annotation\Route;

// class CategoryController extends AbstractController
// {
//     #[Route('/category', name: 'app_category')]
//     public function index(): Response
//     {
//         return $this->render('category/index.html.twig', [
//             'controller_name' => 'CategoryController',
//         ]);
//     }
// }

namespace App\Controller;

use App\Entity\Category;
use App\Form\CategoryType;
use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class CategoryController extends AbstractController
{
    #[Route('/category', name: 'app_category')]
    public function index(CategoryRepository $categoryRepository): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        $category = $categoryRepository->findBy([], ['createdAt' => 'DESC']);
        return $this->render('category/index.html.twig', ['categories' => $category]);
    }

    #[Route('/category/create', name: 'app_category_create', methods: 'GET|POST')]
    public function create(Request $request, EntityManagerInterface $em): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        $category = new Category;
        $form = $this->createForm(CategoryType::class, $category);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $product->setUser($this->getUser());
            $em->persist($category);
            $em->flush();

            $this->addFlash('success', 'Category succefully created !');

            return $this->redirectToRoute('app_category');
        }

        return $this->render('category/create.html.twig', [
            'formCategories' => $form->createView()
        ]);
    }

    #[Route('/category/{id<[0-9]+>}', name: 'app_category_details', methods: 'GET')]
    public function show(Category  $category): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        return $this->render('category/show.html.twig', compact('category'));
    }

    #[Route('/category/{id<[0-9]+>}/edit}', name: 'app_category_edit', methods: 'GET|POST')]
    public function edit(Category $category, EntityManagerInterface $em, Request $request): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        $form = $this->createForm(CategoryType::class, $category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            $this->addFlash('success', 'category succefully updated !');
            return $this->redirectToRoute('app_category');
        }

        return $this->render('category/edit.html.twig', [
            'category' => $category,
            'formEditCategories' => $form->createView()
        ]);
    }

    #[Route('/category/{id<[0-9]+>}', name: 'app_category_delete', methods: 'DELETE|POST')]
    public function delete(Category $category, EntityManagerInterface $em, Request $request): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        if ($this->isCsrfTokenValid('category_deletion' . $category->getId(), $request->request->get('csrf_token'))) {
            $em->remove($category);
            $em->flush();
            $this->addFlash('info', 'category succefully deleted !');
        }

        return $this->redirectToRoute('app_category');
    }
}
