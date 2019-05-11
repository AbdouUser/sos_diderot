<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{

  /**
     * @Route("/", name="SOSDiderotpage")
     */
    public function SOSDiderotAction(Request $request)
    {  $session = $request->getSession();
       $session->set('headerName', 'header-anonym.html.twig');
        // replace this example code with whatever you need
        return $this->render('SOSDiderot/SOSDiderot.html.twig');
    }
    

}
