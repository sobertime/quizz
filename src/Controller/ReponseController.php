<?php

namespace App\Controller;

use App\Entity\Question;
use App\Entity\Categorie;
use App\Entity\Reponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ReponseController extends AbstractController
{
    /**
     * @Route("/reponse", name="reponse")
     */
    public function index()
    {
        return $this->render('reponse/index.html.twig', [
            'controller_name' => 'ReponseController',
        ]);
    }
}
