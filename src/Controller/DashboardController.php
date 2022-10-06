<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{

    #[Route('/dashboard', name: 'app_dashboard')]
    public function index(): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        return $this->render('dashboard/index.html.twig');
    }

    //     #[Route('/posts', name: 'app_admin_post_index')]
    //     public function postIndex(): Response
    //     {
    //         $this->denyAccessUnlessGranted('ROLE_USER');
    //         return $this->render('admin/index.html.twig');
    //     }
}
