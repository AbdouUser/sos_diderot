<?php
// src/Controller/RdvController.php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/Rdv")
 */
class RdvController extends AbstractController
{
  /**
   * @Route("/{page}", name="oc_Rdv_index", requirements={"page" = "\d+"}, defaults={"page" = 1})
   */
  public function index($page)
  {
    if ($page < 1) {
      // On déclenche une exception NotFoundHttpException, cela va afficher
      // une page d'erreur 404 (qu'on pourra personnaliser plus tard d'ailleurs)
      throw $this->createNotFoundException('Page "'.$page.'" inexistante.');
    }

    // Ici, on récupérera la liste des rdv, puis on la passera au template

    // Mais pour l'instant, on ne fait qu'appeler le template
    return $this->render('Rdv/index.html.twig');
  }

  /**
   * @Route("/view/{id}", name="oc_Rdv_view", requirements={"id" = "\d+"})
   */
  public function view($id)
  {
    // Ici, on récupérera le rdv correspondant à l'id $id

    return $this->render('Rdv/view.html.twig', [
        'id' => $id,
    ]);
  }

  /**
   * @Route("/add", name="oc_Rdv_add")
   */
  public function add(Request $request)
  {
    // La gestion d'un formulaire est particulière, mais l'idée est la suivante :

    // Si la requête est en POST, c'est que le visiteur a soumis le formulaire
    if ($request->isMethod('POST')) {
      // Ici, on s'occupera de la création et de la gestion du formulaire

      $this->addFlash('notice', 'etudiant bien enregistrée.');

      // Puis on redirige vers la page de visualisation de cet etudiant
      return $this->redirectToRoute('oc_Rdv_view', ['id' => 5]);
    }

    // Si on n'est pas en POST, alors on affiche le formulaire
    return $this->render('Rdv/add.html.twig');
  }

  /**
   * @Route("/edit/{id}", name="oc_Rdv_edit", requirements={"id" = "\d+"})
   */
  public function edit($id, Request $request)
  {
    // Ici, on récupérera le rdv correspondant à $id

    // Même mécanisme que pour l'ajout
    if ($request->isMethod('POST')) {
      $this->addFlash('notice', 'etudiant bien modifiée.');

      return $this->redirectToRoute('oc_Rdv_view', ['id' => 5]);
    }

    return $this->render('Rdv/edit.html.twig');
  }

  /**
   * @Route("/delete/{id}", name="oc_Rdv_delete", requirements={"id" = "\d+"})
   */
  public function delete($id)
  {
    // Ici, on récupérera le rdv correspondant à $id

    // Ici, on gérera la suppression de le rdv en question

    return $this->render('Rdv/delete.html.twig');
  }
}

