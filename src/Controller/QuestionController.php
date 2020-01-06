<?php

namespace App\Controller;
use App\Entity\Question;
use App\Entity\Categorie;
use App\Entity\Reponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\CsvEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\HttpFoundation\Request;

class QuestionController extends AbstractController
{
    /**
     * @Route("quiz/question", name="question")
     */
    public function index()
    {
      $questions = $this->getDoctrine()->getRepository(Question::class)->findAll();
      return $this->render('question/index.html.twig', array('questions' => $questions));
    }


    /**
     * @Route("quiz/question/{id}/{id_q}", name="question_by_catego")
     */
     public function show(Request $request,$id,$id_q)
     {
       $catego_id = $this->getDoctrine()->getRepository(Categorie::class)->find($id);
       $question_id = $this->getDoctrine()->getRepository(Question::class)->find($id_q);
       $questions = $this->getDoctrine()->getRepository(Question::class)->findby(
         ['idCategorie' => $catego_id ,
          'id' => $id_q]);
       $reponses = $this->getDoctrine()->getRepository(Reponse::class)->findby(
         ['idQuestion' => $questions]);
       $reponse_1 = $this->getDoctrine()->getRepository(Reponse::class)->findOneby(
         ['idQuestion'=> $question_id,
          'reponseExpected' => 1]);
           $user_c = $request->request->get('options');
           $flag = 2;
           if($user_c != ""){
             if($reponse_1->getReponse() === $user_c)
             {
               $flag = 1;
             }
             elseif($reponse_1->getReponse() != $user_c)
             {
               $flag = 0;
             }
           }
       // $serializer = new Serializer([new ObjectNormalizer()], [new CsvEncoder()]);
       // $data = $serializer->decode(file_get_contents('/home/weijie/lampstack-7.3.11-0/apache2/htdocs/sftest/questions.csv'),'csv');
       // dump($data);
         return $this->render('question/show.html.twig',array(
          'question_by_catego'=> $questions,
          'options_by_question'=> $reponses,
          'id_catego'=> $catego_id,
          'id_question' => $question_id,
          'reponse_1' => $reponse_1,
          'flag' =>$flag));
     }
}
