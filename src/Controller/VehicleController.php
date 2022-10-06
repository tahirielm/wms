<?php

namespace App\Controller;

use App\Entity\Vehicle;
use App\Form\VehicleType;
use App\Repository\VehicleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class VehicleController extends AbstractController
{
    #[Route('/vehicle', name: 'app_vehicle')]
    public function index(VehicleRepository $vehicleRepository): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        $vehicle = $vehicleRepository->findBy([], ['createdAt' => 'DESC']);
        return $this->render('vehicle/index.html.twig', ['vehicles' => $vehicle]);
    }

    #[Route('/vehicle/create', name: 'app_vehicle_create', methods: 'GET|POST')]
    public function create(Request $request, EntityManagerInterface $em): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        $vehicle = new Vehicle;
        $form = $this->createForm(VehicleType::class, $vehicle);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $product->setUser($this->getUser());
            $em->persist($vehicle);
            $em->flush();

            $this->addFlash('success', 'vehicle succefully created !');

            return $this->redirectToRoute('app_vehicle');
        }

        return $this->render('vehicle/create.html.twig', [
            'formVehicles' => $form->createView()
        ]);
    }

    #[Route('/vehicle/{id<[0-9]+>}', name: 'app_vehicle_details', methods: 'GET')]
    public function show(Vehicle  $vehicle): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        return $this->render('vehicle/show.html.twig', compact('vehicle'));
    }

    #[Route('/vehicle/{id<[0-9]+>}/edit}', name: 'app_vehicle_edit', methods: 'GET|POST')]
    public function edit(Vehicle $vehicle, EntityManagerInterface $em, Request $request): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        $form = $this->createForm(VehicleType::class, $vehicle);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            $this->addFlash('success', 'vehicle succefully updated !');
            return $this->redirectToRoute('app_vehicle');
        }

        return $this->render('vehicle/edit.html.twig', [
            'vehicle' => $vehicle,
            'formEditVehicles' => $form->createView()
        ]);
    }

    #[Route('/vehicle/{id<[0-9]+>}', name: 'app_vehicle_delete', methods: 'DELETE|POST')]
    public function delete(Vehicle $vehicle, EntityManagerInterface $em, Request $request): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        if ($this->isCsrfTokenValid('vehicle_deletion' . $vehicle->getId(), $request->request->get('csrf_token'))) {
            $em->remove($vehicle);
            $em->flush();
            $this->addFlash('info', 'vehicle succefully deleted !');
        }

        return $this->redirectToRoute('app_vehicle');
    }
}
