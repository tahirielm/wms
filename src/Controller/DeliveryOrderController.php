<?php

// namespace App\Controller;

// use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
// use Symfony\Component\HttpFoundation\Response;
// use Symfony\Component\Routing\Annotation\Route;

// class DeliveryOrderController extends AbstractController
// {
//     #[Route('/deliveryorder', name: 'app_deliveryorder')]
//     public function index(): Response
//     {
//         return $this->render('deliveryorder/index.html.twig', [
//             'controller_name' => 'DeliveryOrderController',
//         ]);
//     }
// }

namespace App\Controller;

use App\Entity\DeliveryOrder;
use App\Form\DeliveryOrderType;
use App\Repository\DeliveryOrderRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class DeliveryOrderController extends AbstractController
{
    #[Route('/deliveryorder', name: 'app_deliveryorder')]
    public function index(DeliveryOrderRepository $deliveryorderRepository): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        $deliveryorder = $deliveryorderRepository->findBy([], ['createdAt' => 'DESC']);
        return $this->render('deliveryorder/index.html.twig', ['deliveryorders' => $deliveryorder]);
    }

    #[Route('/deliveryorder/create', name: 'app_deliveryorder_create', methods: 'GET|POST')]
    public function create(Request $request, EntityManagerInterface $em): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        $deliveryorder = new DeliveryOrder;
        $form = $this->createForm(DeliveryOrderType::class, $deliveryorder);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $product->setUser($this->getUser());
            $em->persist($deliveryorder);
            $em->flush();

            $this->addFlash('success', 'deliveryorder succefully created !');

            return $this->redirectToRoute('app_deliveryorder');
        }

        return $this->render('deliveryorder/create.html.twig', [
            'formDeliveryOrders' => $form->createView()
        ]);
    }

    #[Route('/deliveryorder/{id<[0-9]+>}', name: 'app_deliveryorder_details', methods: 'GET')]
    public function show(DeliveryOrder  $deliveryorder): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        return $this->render('deliveryorder/show.html.twig', compact('deliveryorder'));
    }

    #[Route('/deliveryorder/{id<[0-9]+>}/edit}', name: 'app_deliveryorder_edit', methods: 'GET|POST')]
    public function edit(DeliveryOrder $deliveryorder, EntityManagerInterface $em, Request $request): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        $form = $this->createForm(DeliveryOrderType::class, $deliveryorder);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            $this->addFlash('success', 'deliveryorder succefully updated !');
            return $this->redirectToRoute('app_deliveryorder');
        }

        return $this->render('deliveryorder/edit.html.twig', [
            'deliveryorder' => $deliveryorder,
            'formEditDeliveryOrders' => $form->createView()
        ]);
    }

    #[Route('/deliveryorder/{id<[0-9]+>}', name: 'app_deliveryorder_delete', methods: 'DELETE|POST')]
    public function delete(DeliveryOrder $deliveryorder, EntityManagerInterface $em, Request $request): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        if ($this->isCsrfTokenValid('deliveryorder_deletion' . $deliveryorder->getId(), $request->request->get('csrf_token'))) {
            $em->remove($deliveryorder);
            $em->flush();
            $this->addFlash('info', 'deliveryorder succefully deleted !');
        }

        return $this->redirectToRoute('app_deliveryorder');
    }
}
