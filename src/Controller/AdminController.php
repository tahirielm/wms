<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{

    #[Route('/admin', name: 'app_admin_index')]
    public function index(): Response
    {
        return $this->redirectToRoute('app_dashboard');
    }

    //     #[Route('/posts', name: 'app_admin_post_index')]
    //     public function postIndex(): Response
    //     {
    //         $this->denyAccessUnlessGranted('ROLE_USER');
    //         return $this->render('admin/index.html.twig');
    //     }
}
