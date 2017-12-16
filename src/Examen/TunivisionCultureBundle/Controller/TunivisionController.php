<?php
/**
 * Created by PhpStorm.
 * User: jallouli
 * Date: 03/12/17
 * Time: 13:03
 */

namespace Examen\TunivisionCultureBundle\Controller;


use Examen\TunivisionCultureBundle\Entity\Evenement;
use Examen\TunivisionCultureBundle\Form\EvenementType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TunivisionController extends Controller
{
    function addAction(Request $request){
        $evenement=new Evenement();
        $form=$this->createForm(EvenementType::class,$evenement);
        $form->handleRequest($request);
        if ($form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($evenement);
            $em->flush();
            return $this->redirectToRoute('ajoutEvenement');
        }
        return $this->render('TunivisionCultureBundle:Tunivision:Ajout.html.twig',array('form'=>$form->createView()));
    }
}