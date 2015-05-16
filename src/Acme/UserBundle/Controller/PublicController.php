<?php

namespace Acme\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityRepository;
use Acme\UserBundle\Entity\User;

class PublicController extends Controller
{
    public function indexAction()
    {

        // La requête SQL
        $sql = "SELECT COUNT(id) AS countg FROM guild ; ";
        // Construction de l'objet ResultSetMapping
        $rsm = new \Doctrine\ORM\Query\ResultSetMapping;
        // On définie quel champs doit être retourné dans la réponse
        $rsm->addScalarResult('countg', 'countg');
        // On récupère les résultats
        $em=$this->getDoctrine()->getManager();
        $nbguild = $em
        ->createNativeQuery($sql, $rsm)
        ->getScalarResult();

        $sql = "SELECT COUNT(id) AS countu FROM utilisateur ; ";
        // Construction de l'objet ResultSetMapping
        $rsm = new \Doctrine\ORM\Query\ResultSetMapping;
        // On définie quel champs doit être retourné dans la réponse
        $rsm->addScalarResult('countu', 'countu');
        // On récupère les résultats
        $em=$this->getDoctrine()->getManager();
        $nbuser = $em
        ->createNativeQuery($sql, $rsm)
        ->getScalarResult();

        $nbguild = $nbguild[0]['countg'];
        $nbuser = $nbuser[0]['countu'];

        /*var_dump($nbguild[0]['countg']);
        var_dump($nbuser[0]['countu']);*/

        return $this->render("UserBundle:Public:index.html.twig", 
            array(
                'countu' => $nbuser,
                'countg' => $nbguild,
                )
            );
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
