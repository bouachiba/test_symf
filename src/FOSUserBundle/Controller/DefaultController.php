<?php

namespace FOSUserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use  FOSUserBundle\Entity\Contact;
class DefaultController extends Controller
{
    /**
     * @Route("/addContact/{email}/{adresse}/{siteWeb}{telephone}")
     */
    public function addContactAction($email,$adresse,$siteWeb,$telephone)
    {
        $cont=new Contact();
        $email->setEmail($email);
        $adresse->setAdresse($adresse);
        $siteWeb->setSiteWeb($siteWeb);
        $telephone->setTelephone($telephone);
        $em= $this->getDoctrine()->getManager();
        $em->persist($cont);
        $em->flush();
        
        return array('contact'=>$cont);
    }
    
    
    
    
    
    /**
     * @Route("/listeContact,name=liste")
     */
    public function listContactAction($email,$adresse,$siteWeb,$telephone)
    {
        //recuperer la liste des contacts
        $contact=$this->getDoctrine()->getRepository("FOSUserBundle:Contact")->findAll();
        
        return array('contact'=>$contact);
    }
    
    
      /**
     * @Route("/formContact")
       *@Tamplate()
     */
    public function formContactAction(Request $request)
    {
        $cont=new Contact();
       $form=$this->createFormeBuilder($cont)
               ->add('email','text')
               ->add('adresse','text')
               ->add('siteWeb','text')
               ->add('telephone','text')
               ->add('Ajouter','submit')
               ->getForm();
               $form->handleRequest($request);
               if($form->isValid()){
                   
                   $em=$this->getDoctrine->getManager();
                   $em->persist();
                   $em->flush();
                   //REDIRECTION VERS listContact
                  return  $this->redirect($this->generateUrl("liste"));
                   
               }
        return array('f'=>$forme->createView());
    }
    
}
