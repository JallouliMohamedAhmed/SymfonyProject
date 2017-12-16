<?php

namespace esprit\EspritBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('espritEspritBundle:Default:index.html.twig', array('name' => $name));
    }
}
