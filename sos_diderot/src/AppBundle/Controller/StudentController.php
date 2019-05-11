<?php
// src/Controller/StudentController.php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\HttpFoundation\Session\Session;
use AppBundle\Entity\student;

/**
 * @Route("/student")
 */
class StudentController extends AbstractController
{
  /**
   * @Route("/{page}", name="oc_Student_index", requirements={"page" = "\d+"}, defaults={"page" = 1})
   */
  public function index($page)
  {
    // On ne sait pas combien de pages il y a
    // Mais on sait qu'une page doit être supérieure ou égale à 1
    if ($page < 1) {
      // On déclenche une exception NotFoundHttpException, cela va afficher
      // une page d'erreur 404 (qu'on pourra personnaliser plus tard d'ailleurs)
      throw $this->createNotFoundException('Page "'.$page.'" inexistante.');
    }

    // Ici, on récupérera la liste des etudiants, puis on la passera au template

    // Mais pour l'instant, on ne fait qu'appeler le template
    return $this->render('Student/index.html.twig');
  }

  /**
   * @Route("/view/{id}", name="oc_Student_view", requirements={"id" = "\d+"})
   */
  public function view($id)
  {
    // Ici, on récupérera l'etudiant correspondant à l'id $id

    return $this->render('Student/view.html.twig', [
        'id' => $id,
    ]);
  }

  /**
   * @Route("/add", name="oc_Student_add")
   */
  public function add(Request $request)
  {
    // La gestion d'un formulaire est particulière, mais l'idée est la suivante :

    // Si la requête est en POST, c'est que le visiteur a soumis le formulaire
    if ($request->isMethod('POST')) {
      // Ici, on s'occupera de la création et de la gestion du formulaire

      $this->addFlash('notice', 'etudiant bien enregistrée.');

      // Puis on redirige vers la page de visualisation de cet etudiant
      return $this->redirectToRoute('oc_Student_view', ['id' => 5]);
    }

    // Si on n'est pas en POST, alors on affiche le formulaire
    return $this->render('Student/add.html.twig');
  }

  /**
   * @Route("/edit/{id}", name="oc_Student_edit", requirements={"id" = "\d+"})
   */
  public function edit($id, Request $request)
  {
    // Ici, on récupérera l'etudiant correspondant à $id

    // Même mécanisme que pour l'ajout
    if ($request->isMethod('POST')) {
      $this->addFlash('notice', 'etudiant bien modifiée.');

      return $this->redirectToRoute('oc_Student_view', ['id' => 5]);
    }

    return $this->render('Student/edit.html.twig');
  }

  /**
   * @Route("/delete/{id}", name="oc_Student_delete", requirements={"id" = "\d+"})
   */
  public function delete($id)
  {
    // Ici, on récupérera l'etudiant correspondant à $id

    // Ici, on gérera la suppression de l'etudiant en question

    return $this->render('Student/delete.html.twig');
  }

  /**
     * @Route("/login", name="login")
     */
    public function SOSLogin(Request $request, AuthenticationUtils $authenticationUtils)
    {
        $errors= $authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();
        // replace this example code with whatever you need
        return $this->render('SOSDiderot/connexion.html.twig',array(
          'errors'=>$errors,
          'last_username'=>$lastUsername,
        ));
    }


    /**
     * @Route("/inscription", name="inscription")
     */
    public function SOSInscription(Request $request,\Swift_Mailer $mailer, UserPasswordEncoderInterface $encoder)
    {
		  $user = new student();
      if ($request->isMethod('post')){

    		$data=$request->request->all();
    		$user->setName($data['nom']);
        $user->setFirstName($data['prenom']);
        $user->setEmail($data['email']);
        $user->setIne($data['ine']);
        $encoded = $encoder->encodePassword($user, $data['password']);
        $user->setPassword($encoded);
        $user->setFormation("non renseigné");
        $user->setUniversity("non renseigné");

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

        return $this->render('SOSDiderot/inscription.html.twig');
    }
}
