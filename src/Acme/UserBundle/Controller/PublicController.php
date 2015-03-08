<?php

namespace Acme\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

use Acme\UserBundle\Entity\User;

class PublicController extends Controller
{
    public function indexAction()
    {
        return $this->render("UserBundle:Public:index.html.twig");
    }


    public function MonProfileAction()
    {


    	$username=$this->get('security.context')->getToken()->getUser()->getUserName();
    	$userid=$this->get('security.context')->getToken()->getUser()->getId();

        return $this->render("UserBundle:Public:monprofile.html.twig", 
        	array('lol' => $username) );
        
    }

    public function AllUsersAction(){

        $userid=$this->get('security.context')->getToken()->getUser()->getId();

        $Users = $this->getDoctrine()
        ->getRepository('UserBundle:User')
        ->findAll();

        

        $Gmembres = $this->getDoctrine()
        ->getRepository('GuildBundle:GuildMembres')
        ->findby(   array(  'userid' => $userid )  );


/*        
        $Gmembres = $this->getDoctrine()
        ->getRepository('GuildBundle:GuildMembres')
        ->findby(array('userid' => $));

*/

/*        var_dump($Users);*/



    return $this->render("UserBundle:Public:AllUsers.html.twig", array('Users' => $Users, )
        );
    }
      

}
