<?php
// src/Controller/CalendarController.php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("/Calendar")
 */
class CalendarController extends AbstractController
{
  /**
   * @Route("/{page}", name="oc_Calendar_index", requirements={"page" = "\d+"}, defaults={"page" = 1})
   */
  public function index($page)
  {
   
  }

  /**
   * @Route("/view/{id}", name="oc_Calendar_view", requirements={"id" = "\d+"})
   */
  public function view($id)
  {
    // Ici, on récupérera l'Calendrier correspondante à l'id du personnel $id

    return $this->render('Calendar/view.html.twig', [
        'id' => $id,
    ]);
  }

  /**
   * @Route("/add", name="oc_Calendar_add")
   */
  public function add(Request $request)
  {
    // La gestion d'un formulaire est particulière, mais l'idée est la suivante :

    // Si la requête est en POST, c'est que le visiteur a soumis le formulaire
    if ($request->isMethod('POST')) {
      // Ici, on s'occupera de la création et de la gestion du formulaire

      $this->addFlash('notice', 'Calendrier bien enregistrée.');

      // Puis on redirige vers la page de visualisation de cettte Calendrier
      return $this->redirectToRoute('oc_Calendar_view', ['id' => 5]);
    }

    // Si on n'est pas en POST, alors on affiche le formulaire
    return $this->render('Calendar/add.html.twig');
  }

  /**
   * @Route("/edit/{id}", name="oc_Calendar_edit", requirements={"id" = "\d+"})
   */
  public function edit($id, Request $request)
  {
    // Ici, on récupérera l'Calendrier correspondante à $id

    // Même mécanisme que pour l'ajout
    if ($request->isMethod('POST')) {
      $this->addFlash('notice', 'Calendrier bien modifiée.');

      return $this->redirectToRoute('oc_Calendar_view', ['id' => 5]);
    }

    return $this->render('Calendar/edit.html.twig');
  }

  /**
   * @Route("/delete/{id}", name="oc_Calendar_delete", requirements={"id" = "\d+"})
   */
  public function delete($id)
  {
    // Ici, on récupérera l'Calendrier correspondant à $id

    // Ici, on gérera la suppression de l'Calendrier en question

    return $this->render('Calendar/delete.html.twig');
  }
}

