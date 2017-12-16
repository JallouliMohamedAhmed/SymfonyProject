<?php

namespace Examen\TunivisionCultureBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('TunivisionCultureBundle:Default:index.html.twig', array('name' => $name));
    }
}
