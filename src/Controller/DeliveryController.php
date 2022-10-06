<?php

namespace App\Controller;

use App\Entity\Delivery;
use App\Form\DeliveryType;
use App\Repository\DeliveryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class DeliveryController extends AbstractController
{
    #[Route('/delivery', name: 'app_delivery')]
    public function index(DeliveryRepository $deliveryRepository): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        $delivery = $deliveryRepository->findBy([], ['createdAt' => 'DESC']);
        return $this->render('delivery/index.html.twig', ['deliverys' => $delivery]);
    }

    #[Route('/delivery/create', name: 'app_delivery_create', methods: 'GET|POST')]
    public function create(Request $request, EntityManagerInterface $em): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        $delivery = new Delivery;
        $form = $this->createForm(DeliveryType::class, $delivery);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $delivery->setUser($this->getUser());
            $em->persist($delivery);
            $em->flush();

            $this->addFlash('success', 'Delivery succefully created !');

            return $this->redirectToRoute('app_delivery');
        }

        return $this->render('delivery/create.html.twig', [
            'formDeliverys' => $form->createView()
        ]);
    }

    #[Route('/delivery/{id<[0-9]+>}', name: 'app_delivery_details', methods: 'GET')]
    public function show(Delivery  $delivery): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        return $this->render('delivery/show.html.twig', compact('delivery'));
    }

    #[Route('/delivery/{id<[0-9]+>}/edit}', name: 'app_delivery_edit', methods: 'GET|POST')]
    public function edit(Delivery $delivery, EntityManagerInterface $em, Request $request): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        $form = $this->createForm(DeliveryType::class, $delivery);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            $this->addFlash('success', 'Delivery succefully updated !');
            return $this->redirectToRoute('app_delivery');
        }

        return $this->render('delivery/edit.html.twig', [
            'delivery' => $delivery,
            'formEditDeliverys' => $form->createView()
        ]);
    }

    #[Route('/delivery/{id<[0-9]+>}', name: 'app_delivery_delete', methods: 'DELETE|POST')]
    public function delete(Delivery $delivery, EntityManagerInterface $em, Request $request): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        if ($this->isCsrfTokenValid('delivery_deletion' . $delivery->getId(), $request->request->get('csrf_token'))) {
            $em->remove($delivery);
            $em->flush();
            $this->addFlash('info', 'Delivery succefully deleted !');
        }

        return $this->redirectToRoute('app_delivery');
    }
}
