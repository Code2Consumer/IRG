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

        // Guildid

        return $this->render("UserBundle:Public:index.html.twig", 
            array(
                'countu' => $nbuser,
                'countg' => $nbguild,
                )
            );
    }

    public function ShowAllMyGuildsAction(){

        $userid=$this->get('security.context')->getToken()->getUser()->getId();
       $sql = "SELECT *
                FROM guild G, guildmembres M
                WHERE G.id=M.Guildid
                AND M.userid = ".$userid.";";

        // Construction de l'objet ResultSetMapping
        $rsm = new \Doctrine\ORM\Query\ResultSetMapping;

        // On définie quel champs doit être retourné dans la réponse
        $rsm->addScalarResult('id', 'id');
        $rsm->addScalarResult('Guild_name', 'name');
        $rsm->addScalarResult('GM', 'GM');
        $rsm->addScalarResult('CoGM', 'CoGM');
        $rsm->addScalarResult('GM_id', 'GM_id');
        $rsm->addScalarResult('MMO_Principale', 'MMO_Principale');
        $rsm->addScalarResult('Serveur', 'Serveur');
        $rsm->addScalarResult('Guildid', 'Guildid');
        $rsm->addScalarResult('userid', 'userid');
        $rsm->addScalarResult('username', 'username');

        // On récupère les résultats
        $em=$this->getDoctrine()->getManager();
        $mesguilds = $em
        ->createNativeQuery($sql, $rsm)
        ->getScalarResult();



        return $this->render("UserBundle:Public:allmyguilds.html.twig", 
            array(   'allguild'=> $mesguilds  ) );
    }

    public function ShowAllGuildsCreatedAction(){
        $username=$this->get('security.context')->getToken()->getUser()->getUserName();
        $userid=$this->get('security.context')->getToken()->getUser()->getId();
       $sql = "SELECT *
                FROM guild
                WHERE GM = '".$username."';";

        // Construction de l'objet ResultSetMapping
        $rsm = new \Doctrine\ORM\Query\ResultSetMapping;

        // On définie quel champs doit être retourné dans la réponse
        $rsm->addScalarResult('id', 'id');
        $rsm->addScalarResult('Guild_name', 'name');
        $rsm->addScalarResult('GM', 'GM');
        $rsm->addScalarResult('CoGM', 'CoGM');
        $rsm->addScalarResult('GM_id', 'GM_id');
        $rsm->addScalarResult('MMO_Principale', 'MMO_Principale');
        $rsm->addScalarResult('Serveur', 'Serveur');
        $rsm->addScalarResult('Guildid', 'Guildid');
        $rsm->addScalarResult('userid', 'userid');
        $rsm->addScalarResult('username', 'username');

        // On récupère les résultats
        $em=$this->getDoctrine()->getManager();
        $mesguilds = $em
        ->createNativeQuery($sql, $rsm)
        ->getScalarResult();



        return $this->render("UserBundle:Public:allmycreatedguild.html.twig", 
            array(   'allguild'=> $mesguilds  ) );
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
