<?php

namespace Acme\MessagerieBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\MessagerieBundle\Form\MessageType;
use Acme\MessagerieBundle\Entity\Message;

class DefaultController extends Controller
{
    public function indexAction(){

    	$username=$this->get('security.context')->getToken()->getUser()->getUserName();
    	$userid=$this->get('security.context')->getToken()->getUser()->getId();

    	$messages = $this->getDoctrine()
        ->getRepository('MessagerieBundle:Message')
        ->findBy( array( 'idDest' => $userid) );

        $form=$this->createForm(new MessageType());

        $request=$this->getRequest();
        if($request->isMethod('POST')){
         $form->bind($request);
         $a=$form->getData();
         $DestName = $a->getnameDest();
         
        $User = $this->getDoctrine()
        ->getRepository('UserBundle:User')
        ->findBy( array('username' => $DestName) );


        if ( !empty($User) ) {
	         $a->setidDest($User[0]->getid())
	         ->setnameEnv($username)
	         ->setidEnv($userid)
	         ->setvue(false);
	         $em=$this->getDoctrine()->getManager();
	         $em->persist($a);
	        $em->flush();

        } else {
        	$info = "Ce destinataire n'existe pas.";
	        return $this->render("MessagerieBundle:Default:new_message.html.twig",
	            array(  'form' => $form->createView(), 'infotext'=> $info, ));
        }
        

    	}

        return $this->render('MessagerieBundle:Default:index.html.twig', array( 'messages' =>  $messages));
    }

    public function nouveau_messageAction(){
    	$username=$this->get('security.context')->getToken()->getUser()->getUserName();
    	$userid=$this->get('security.context')->getToken()->getUser()->getId();

    	$Message = new Message();

        $Message->setidEnv($userid);
        $Message->setnameEnv($username);
        $Message->setvue(0);

        $form=$this->createForm(new MessageType(), $Message);

        $request=$this->getRequest();
        if($request->isMethod('POST')){
         $form->bind($request);
         $a=$form->getData();
         var_dump($a);
         $em->persist($a);
        $em->flush();
        return $this->redirect($this->generateUrl('messagerie_homepage'));
                }

        return $this->render("MessagerieBundle:Default:new_message.html.twig",
            array(
                'form' => $form->createView(),
            ));

    }

    public function read_messageAction($id_message){

    	$userid=$this->get('security.context')->getToken()->getUser()->getId();

    	$message = $this->getDoctrine()
        ->getRepository('MessagerieBundle:Message')
        ->findBy( array( 'id' => $id_message) );

        if ($message[0]->getidDest() == $userid) {
        	return $this->render('MessagerieBundle:Default:liremessage.html.twig', array('message' => $message));
        } else {
        	return $this->render("GuildBundle:Public:access-denied.html.twig");
        }
    }

    public function repondreAction($id_destinataire){
    	$username=$this->get('security.context')->getToken()->getUser()->getUserName();
    	$userid=$this->get('security.context')->getToken()->getUser()->getId();

    	$User = $this->getDoctrine()
        ->getRepository('UserBundle:User')
        ->findBy( array('id' => $id_destinataire ) );


    	$Message = new Message();

        $Message->setidEnv($userid);
        $Message->setnameEnv($username);
        $Message->setnameDest( $User[0]->getusername() );
        $Message->setidDest( $User[0]->getId() );
        $Message->setvue(0);

        $form=$this->createForm(new MessageType(), $Message);



    	        return $this->render('MessagerieBundle:Default:new_message.html.twig', array( 'form' => $form->createView(),
    	        	'destinataire' => $id_destinataire ) );
    }

}
