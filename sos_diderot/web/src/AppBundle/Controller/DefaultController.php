<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{

  /**
     * @Route("/", name="SOSDiderotpage", methods={ "GET" })
     */
    public function SOSDiderotAction(Request $request)
    {  $session = $request->getSession();
       $session->set('headerName', 'header-anonym.html.twig');
        // replace this example code with whatever you need
        return $this->render('SOSDiderot/SOSDiderot.html.twig');
    }


    /**
     * @Route("/", name="search_", methods={ "POST" })
     */
    public function SOSPSearch(Request $request)
    {
        $univs = [
            'Université Paris Diderot' => 'p7',
            'Université Paris Descarte' => 'p6',
            'Institut de Physique du Globe de Paris' => 'p5',
        ];
        $servs = [
            'Médecine de prévention' => 'sente',
            'Professeur' => 'prof',
            'responsable pédagogique' => 'resp',
            'Scolarité' => 'sch',
            'Service des sports' => 'spr',
            'Assistant social' => 'secr',
        ];

        $univ = $request->request->get('univ');
        $serv = $request->request->get('choices-single-defaul');

        if(array_key_exists($univ, $univs)) {
            $univ = $univs[$univ];
        }
        if(array_key_exists($serv, $servs)) {
            $serv = $servs[$serv];
        }

        $result = $this->getDoctrine()->getManager()->getRepository('AppBundle:staff')->search($univ, $serv);

        // replace this example code with whatever you need
        return $this->render('SOSDiderot/result.html.twig', ['result' => $result]);
    }
}
