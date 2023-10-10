<?php

namespace App\Controller;

use App\Repository\ProjectsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProjectsController extends AbstractController
{
    #[Route('/projects', name: 'projects')]
    public function index(ProjectsRepository $pr): Response
    {
        $pojects = $pr->findAll();
        return $this->render('projects/index.html.twig', [
            'project' => $pojects,
        ]);
    }
}
