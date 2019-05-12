<?php
// src/Controller/StaffController.php

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\HttpFoundation\Session\Session;
use AppBundle\Entity\staff;


/**
 * @Route("/staff")
 */
class StaffController extends AbstractController
{
  /**
   * @Route("/{page}", name="oc_stuff_index", requirements={"page" = "\d+"}, defaults={"page" = 1})
   */
  public function index($page)
  {

    if ($page < 1) {
      throw $this->createNotFoundException('Page "'.$page.'" inexistante.');
    }

    // Ici, on récupérera la liste des personnes

    $repository = $this->getDoctrine()->getManager()->getRepository('AppBundle:staff');
    $staff=$repository->findAll();
    // on fait appeler le template
    return $this->render('staff/staffList.html.twig',$staff);
  }




  /**
   * @Route("/view/{id}", name="oc_staff_view", requirements={"id" = "\d+"})
   */
  public function view($id)
  {
    $errors= $authenticationUtils->getLastAuthenticationError();


    // Ici, on récupérera la personne correspondante à l'id $id
    $repository = $this->getDoctrine()->getManager()->getRepository('AppBundle:staff');
    $staff=$repository->find($id);
    $calendar=$staff->getCalendar();

    return $this->render('SOSDiderot/profil.html.twig', [
        'id' => $id,'staff' => $staff,'calendar' => $calendar
    ]);
  }


  /**
   * @Route("/edit/{id}", name="oc_staff_edit", requirements={"id" = "\d+"})
   */
  public function edit($id, Request $request)
  {
    // Ici, on récupérera la personne correspondante à $id

    // Même mécanisme que pour l'ajout
    if ($request->isMethod('POST')) {
      $this->addFlash('notice', 'Annonce bien modifiée.');

      return $this->redirectToRoute('oc_staff_view', ['id' => 5]);
    }

    return $this->render('staff/edit.html.twig');
  }

  /**
   * @Route("/delete/{id}", name="oc_staff_delete", requirements={"id" = "\d+"})
   */
  public function delete($id)
  {
    // Ici, on récupérera la personne correspondant à $id

    // Ici, on gérera la suppression de la personne en question

    return $this->render('staff/delete.html.twig');
  }


    /**
     * @Route("/loginPro", name="loginPro")
     */
    public function SOSLoginPro(Request $request, AuthenticationUtils $authenticationUtils)
    {
        $errors= $authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();
        // replace this example code with whatever you need
        return $this->render('SOSDiderot/connexionPro.html.twig',array(
          'errors'=>$errors,
          'last_username'=>$lastUsername,
        ));
    }



  /**
   * @Route("/add", name="add")
   */
  public function add(Request $request,\Swift_Mailer $mailer, UserPasswordEncoderInterface $encoder)
  {
    $user = new staff();
    if ($request->isMethod('post')){

      $data=$request->request->all();
      $user->setName($data['nom']);
      $user->setFirstName($data['prenom']);
      $user->setEmail($data['email']);
      $encoded = $encoder->encodePassword($user, $data['password']);
      $user->setPassword($encoded);
      $user->setUfr($data['ufr']);
      $user->setService($data['service']);
      $user->setJob($data['job']);
      $em= $this->getDoctrine()->getManager();

      $em->persist($user);
      $em->flush();


      $message = (new \Swift_Message('Hello Email'))
      ->setFrom('send@example.com')
      ->setTo($data['email']);
       $mailer->send($message);


      $this->addFlash(
          'success',
          'Votre inscription à été pris en compte'
        );
      return $this->redirectToRoute('login');

    }

      return $this->render('SOSDiderot/inscriptionPro.html.twig');
  }
}
