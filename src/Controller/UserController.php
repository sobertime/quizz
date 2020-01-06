<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\User;
use App\Form\RegistrationType;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserController extends AbstractController
{
    /**
     * @Route("/user", name="user")
     */
    public function inscription(Request $request,ObjectManager $manager,UserPasswordEncoderInterface $encoder)
    {
      $user = new User();
      $form = $this->createForm(RegistrationType::class,$user);
      $form->handleRequest($request);
      if($form->isSubmitted() && $form->isValid()){
        $hash_password = $encoder->encodePassword($user, $user->getPassword());
        $user->setPassword($hash_password);
        $manager->persist($user);
        $manager->flush();

        return $this->redirectToRoute('login');
      }
      return $this->render('user/index.html.twig',[
        'form' => $form->createView()
      ]);
    }
    /**
    * @Route("/login",name="login")
    */
    public function login()
  {
    return $this->render('user/login.html.twig');
  }
  /**
  * @Route("/logout",name="logout")
  */
  public function logout(){}

  /**
  * @Route("/profil",name="profil")
  */
  public function profil(){
    return $this->render('user/profil.html.twig');
  }
  /**
  * @Route("/profil/edit",name="edit")
  */
  public function edit(){
    return $this->render('user/edit.html.twig');
  }
}
