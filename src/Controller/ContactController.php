<?php

namespace App\Controller;

use App\Form\ContactType;
use App\Entity\Contact;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]
    public function index(Request $request, ManagerRegistry $formul): Response
    {

        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $manager = $formul->getManager();
            $manager->persist($contact);
            $manager->flush();
            return $this->redirectToRoute("app_contact");
        }





        return $this->render('contact/index.html.twig', [
            "formulaire" => $form->createView()
        ]);
    }





}
