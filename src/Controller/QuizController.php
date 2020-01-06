<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Entity\Question;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class QuizController extends AbstractController
{
    /**
     * @Route("/quiz", name="quiz")
     */
    public function index()
    {

        $categories = $this->getDoctrine()->getRepository(Categorie::class)->findAll();
        return $this->render('home/quiz.html.twig', array('categories' => $categories));
    }

}
