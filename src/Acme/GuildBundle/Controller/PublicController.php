<?php

namespace Acme\GuildBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Acme\GuildBundle\Form\GuildType;
use Acme\GuildBundle\Form\PlaningType;
use Acme\GuildBundle\Form\ParticipantType;
use Acme\GuildBundle\Form\CandidatureType;
use Acme\GuildBundle\Form\GuildMembresType;
use Acme\GuildBundle\Form\GuildPostType;
use Acme\GuildBundle\Entity\Guild;
use Acme\GuildBundle\Entity\Planing;
use Acme\GuildBundle\Entity\Participant;
use Acme\GuildBundle\Entity\Candidature;
use Acme\GuildBundle\Entity\GuildMembres;
use Acme\GuildBundle\Entity\GuildPost;
use Acme\UserBundle\Entity\User;



class PublicController extends Controller
{


/* 
          $userid=$this->get('security.context')->getToken()->getUser()->getId();
        $em=$this->getDoctrine()->getManager();
        $repository=$this->getDoctrine()->getRepository('GuildBundle:GuildMembres');
        $access = $repository->findBy(array( 'guildid' => $GuildId,
        'userid' => $userid ));
        if (!empty($access)) {



        } else {
        return $this->render("GuildBundle:Public:access-denied.html.twig");
        }
        */

    public function indexAction()
    {   
        $em=$this->getDoctrine()->getManager();
        $repository=$this->getDoctrine()->getRepository('GuildBundle:Guild');
        $allguild = $repository->findAll();
        
        return $this->render("GuildBundle:Public:index.html.twig",
            array(   'allguild'=> $allguild  ));
    }


    public function FirstPageAction($GuildId)
    {   
        $userid=$this->get('security.context')->getToken()->getUser()->getId();
        $username=$this->get('security.context')->getToken()->getUser()->getUserName();

        $repository=$this->getDoctrine()->getRepository('GuildBundle:GuildMembres');
        $access = $repository->findBy(array( 'guildid' => $GuildId,
        'userid' => $userid ));


        if (!empty($access)) {

        $Guild = $this->getDoctrine()
        ->getRepository('GuildBundle:Guild')
        ->find($GuildId);
/* ZAK DEBUT DE TESTE */
/*
        $Users = $this->getDoctrine()
        ->getRepository('UserBundle:User')
        ->findAll();

        var_dump($Users);
        die();
        // $Users;
*/
/* ZAK DEBUT DE TESTE */


        $GuildPost=new GuildPost();
        $GuildPost->setGuildId($GuildId);
        $GuildPost->setUserName($username);
        $GuildPost->setUserId($userid);
        $form=$this->createForm(new GuildPostType(), $GuildPost);


        $em=$this->getDoctrine()->getManager();

        $request=$this->getRequest();
        if($request->isMethod('POST')){
         $form->bind($request);
         $a=$form->getData();
         $em->persist($a);
        $em->flush();
        return $this->redirect($this->generateUrl('guild_first_page', array( 'GuildId' => $GuildId ) ));
                }

        $repository=$this->getDoctrine()->getRepository('GuildBundle:GuildPost');
        $GuildPost= $repository->findBy(array( 'guildId' => $GuildId));

$query = $em->createQuery('
            SELECT COUNT(u.id)
            FROM GuildBundle:Candidature u
            WHERE u.guildId = :id')->setParameter('id', $GuildId);

    $nbcandidature = $query->getResult();
    $nbcandidature=$nbcandidature['0'];
    $nbcandidature=$nbcandidature['1'];


        return $this->render("GuildBundle:Public:firstpage.html.twig",
            array(
                'guild' => $Guild,
                'form' => $form->createView(), 
                'GuildPost' => $GuildPost,
                'cand' => $nbcandidature,
            ));


        } else {
        return $this->render("GuildBundle:Public:access-denied.html.twig");
        }
    }


    public function CreationAction()
    {
/*        $username=$this->get('security.context')->getToken()->getUser()->getUserName();
        $username=$this->get('security.context')->getToken()->getUser()->getId();*/
    

                $username=$this->get('security.context')->getToken()->getUser()->getUserName();
                $userid=$this->get('security.context')->getToken()->getUser()->getId();

                $em=$this->getDoctrine()->getManager();
                $guild= new Guild();
                $guild->setGM($username);
                $guild->setGMId($userid);

                $form=$this->createForm(new GuildType(), $guild);

                $request=$this->getRequest();
                if($request->isMethod('POST')){
                    $form->bind($request);
                    $a=$form->getData();
                    $em->persist($a);
                    $em->flush();
                    $b=new GuildMembres();
                    $b->setGuildId($a->getid())->setUserName($username)->setUserId($userid);
                    $em->persist($b);
                    $em->flush();
                    return $this->redirect($this->generateUrl('guild_first_page', array( 'GuildId' => $a->getid()) ));
                }

                return $this->render("GuildBundle:Public:creation.html.twig", 
                    array( 'form' => $form->createView() ));
            
    }




    public function AddEventAction($GuildId)
    {
        $userid=$this->get('security.context')->getToken()->getUser()->getId();
        $em=$this->getDoctrine()->getManager();
        $repository=$this->getDoctrine()->getRepository('GuildBundle:GuildMembres');
        $access = $repository->findBy(array( 'guildid' => $GuildId,
        'userid' => $userid ));
        if (!empty($access)) {

                $username=$this->get('security.context')->getToken()->getUser()->getUserName();
                $auteurId=$this->get('security.context')->getToken()->getUser()->getId();
                $em=$this->getDoctrine()->getManager();
                $event= new Planing();
                $event->setGuildId($GuildId);
                $event->setAuteurId($auteurId);
                $event->setAuteurname($username);
                $form=$this->createForm(new PlaningType(), $event);

                $request=$this->getRequest();
                if($request->isMethod('POST')){
                    $form->bind($request);
                    $a=$form->getData();
                    $em->persist($a);
                    $em->flush();
                    return $this->redirect($this->generateUrl('guild_first_page', array( 'GuildId' => $a->getGuildId() ) ));
                }
                return $this->render("GuildBundle:Public:neweven.html.twig", 
                    array(
                        'form' => $form->createView(),
                        'GuildId' => $GuildId,)
                        );

        } else {
        return $this->render("GuildBundle:Public:access-denied.html.twig");
        }
    }



    public function ShowMembresAction($GuildId)
    {
        $userid=$this->get('security.context')->getToken()->getUser()->getId();
        $em=$this->getDoctrine()->getManager();
        $repository=$this->getDoctrine()->getRepository('GuildBundle:GuildMembres');
        $access = $repository->findBy(array( 'guildid' => $GuildId,
        'userid' => $userid ));
        if (!empty($access)) {

        $Gmembres = $this->getDoctrine()
        ->getRepository('GuildBundle:GuildMembres')
        ->findby(array('guildid' => $GuildId));

        return $this->render("GuildBundle:Public:showmembre.html.twig",
            array( 'allmembres' => $Gmembres));

        } else {
        return $this->render("GuildBundle:Public:access-denied.html.twig");
        }
    }


    public function ShowEventAction($GuildId, $EventId)
    {
        $userid=$this->get('security.context')->getToken()->getUser()->getId();
        $em=$this->getDoctrine()->getManager();
        $repository=$this->getDoctrine()->getRepository('GuildBundle:GuildMembres');
        $access = $repository->findBy(array( 'guildid' => $GuildId,
        'userid' => $userid ));
        if (!empty($access)) {

        $em=$this->getDoctrine()->getManager();
        $event = $this->getDoctrine()
        ->getRepository('GuildBundle:Planing')
        ->findById(
            array('guildId' => $GuildId,
                    'id' => $EventId));

        $username=$this->get('security.context')->getToken()->getUser()->getUserName();
        $userid=$this->get('security.context')->getToken()->getUser()->getId();

        $inscrit= new Participant();
        $inscrit=$this->getDoctrine()
        ->getRepository('GuildBundle:Participant')
        ->findBy(
            array('userId' => $userid,
                    'eventId' => $EventId));


        $allinscrit=new Participant();
        $allinscrit=$this->getDoctrine()
        ->getRepository('GuildBundle:Participant')
        ->findBy(array('eventId' => $EventId));

        $Participant= new Participant();
        $Participant->setUserId($userid);
        $Participant->setUserName($username);
        $Participant->setEventId($EventId);
        $form=$this->createForm(new ParticipantType(), $Participant);

        $request=$this->getRequest();
                if($request->isMethod('POST')){
                    $form->bind($request);
                    $a=$form->getData();
                    $em->persist($a);
                    $em->flush();
        return $this->redirect($this->generateUrl('guild_show_event', array( 'GuildId' => $GuildId, 
                            'EventId' => $EventId , ) ));
        }

        return $this->render("GuildBundle:Public:showevent.html.twig",
            array(  'event' => $event,
                    'form' => $form->createView(),
                    'GuildId' => $GuildId,
                    'EventId' => $EventId,
                    'inscrit' => $inscrit,
                    'allinscrit' => $allinscrit,
                ));

        } else {
        return $this->render("GuildBundle:Public:access-denied.html.twig");
        }
    }


    public function PlaningAction($GuildId)
    {   $userid=$this->get('security.context')->getToken()->getUser()->getId();
        $em=$this->getDoctrine()->getManager();
        $repository=$this->getDoctrine()->getRepository('GuildBundle:GuildMembres');
        $access = $repository->findBy(array( 'guildid' => $GuildId,
        'userid' => $userid ));
        if (!empty($access)) {

        $em=$this->getDoctrine()->getManager();
        $planing = $this->getDoctrine()
        ->getRepository('GuildBundle:Planing')
        ->findBy(
            array('guildId' => $GuildId));
        $moisactuel=\Date('m');
        $moiss = mktime( 0, 0, 0, $moisactuel, 1, 2014 ); 
        $nombresdejours=date("t",$moiss);

        return $this->render("GuildBundle:Public:planing.html.twig", array(
                'event' => $planing,
                'nbj' => $nombresdejours,
                'GuildId' => $GuildId,
            ));


        } else {
        return $this->render("GuildBundle:Public:access-denied.html.twig");
        }
    }


    public function MonProfileAction()
    {
        $username=$this->get('security.context')->getToken()->getUser()->getUserName();
        $username=$this->get('security.context')->getToken()->getUser()->getId();

        return $this->render("UserBundle:Public:monprofile.html.twig", 
            array(
                'lol' => $username
                )
            );}


    public function PostulerAction($GuildId, $GuildName)
    {

      $username=$this->get('security.context')->getToken()->getUser()->getUserName();
    $userid=$this->get('security.context')->getToken()->getUser()->getId();

     $em=$this->getDoctrine()->getManager();
     $candidature= new Candidature();
     $candidature->setGuildId($GuildId);
     $candidature->setGuildName($GuildName);
     $candidature->setUserId($userid);
     $candidature->setUserName($username);
     $candidature->setSituation("En attente");
     $form=$this->createForm(new CandidatureType(), $candidature);

    $postulant= new Candidature();
        $postulant=$this->getDoctrine()
        ->getRepository('GuildBundle:Candidature')
        ->findBy(
            array('userId' => $userid,
                    'guildId' => $GuildId));

    $request=$this->getRequest();
    if($request->isMethod('POST')){
     $form->bind($request);
    $a=$form->getData();
    $em->persist($a);
    $em->flush();
    return $this->redirect($this->generateUrl('guild_postuler', array( 'GuildId' => $GuildId,
                                                    'GuildName' => $GuildName, ) ));
    }

        return $this->render("GuildBundle:Public:postuler.html.twig", 
            array(
                'form' => $form->createView(),
                'GuildId' => $GuildId, 
                 'GuildName' => $GuildName,
                 'postulant' => $postulant,
                )
            );
    }

        public function AllCandidaturesAction($GuildId)
        {
                      $userid=$this->get('security.context')->getToken()->getUser()->getId();
        $em=$this->getDoctrine()->getManager();
        $repository=$this->getDoctrine()->getRepository('GuildBundle:GuildMembres');
        $access = $repository->findBy(array( 'guildid' => $GuildId,
        'userid' => $userid ));
        if (!empty($access)) {

        $candidatures=$this->getDoctrine()
        ->getRepository('GuildBundle:Candidature')
        ->findBy(
            array('guildId' => $GuildId));

        return $this->render("GuildBundle:Public:allcandidatures.html.twig", 
            array(
                'GuildId' => $GuildId, 
                 'candidatures' => $candidatures,
                )
            );


        } else {
        return $this->render("GuildBundle:Public:access-denied.html.twig");
        }
        }


        public function ShowCandidatureAction($GuildId, $CandidatureId)
        {


        $userid=$this->get('security.context')->getToken()->getUser()->getId();
        $em=$this->getDoctrine()->getManager();
        $repository=$this->getDoctrine()->getRepository('GuildBundle:GuildMembres');
        $access = $repository->findBy(array( 'guildid' => $GuildId,
        'userid' => $userid ));
        if (!empty($access)) {

        $userId=$this->get('security.context')->getToken()->getUser()->getId();
        $username=$this->get('security.context')->getToken()->getUser()->getUserName();

        $candidature=$this->getDoctrine()
        ->getRepository('GuildBundle:Candidature')
        ->findBy(
            array('id' => $CandidatureId));


        $membre=new GuildMembres();
        $membre->setUserId($candidature['0']->getUserId());
        $membre->setUserName($candidature["0"]->getUserName());
        $membre->setGuildId($candidature['0']->getGuildId());

        $form=$this->createForm(new GuildMembresType(), $membre);

        $em=$this->getDoctrine()->getManager();

        $request=$this->getRequest();
                if($request->isMethod('POST')){
                    $form->bind($request);
                    $a=$form->getData();
                    $em->remove($candidature['0']);
                    $em->persist($a);
                    $em->flush();
                    return $this->redirect($this->generateUrl('guild_show_allcandidatures', array( 'GuildId' => $a->getGuildId() ) ));
                }
        return $this->render("GuildBundle:Public:showcandidature.html.twig", 
            array( 'candidature' => $candidature,
                'form' => $form->createView(),
                'CandidatureId' => $CandidatureId,
                'GuildId' => $GuildId,
            ));
        } else {return $this->render("GuildBundle:Public:access-denied.html.twig");}
        }




        public function CanAccess($UserId, $GuildId){
        $userId=$this->get('security.context')->getToken()->getUser()->getId();
        $em=$this->getDoctrine()->getManager();
        $membre = $this->getDoctrine()
        ->getRepository('GuildBundle:GuildMembres')
        ->findById(
            array('guildId' => $GuildId,
                    'userid' => $UserId));
        if (isset($membre)) {
            return true;
        } else {
            return false;
        }
         
        }

/*                // La requête SQL
        $sql = "SELECT * FROM guild where id = 12 ; ";
        // Construction de l'objet ResultSetMapping
        $rsm = new \Doctrine\ORM\Query\ResultSetMapping;
        // On définie quel champs doit être retourné dans la réponse
        $rsm->addScalarResult('id', 'id');
        $rsm->addScalarResult('GM', 'GM');
        // On récupère les résultats
        $em=$this->getDoctrine()->getManager();
        $id = $em
        ->createNativeQuery($sql, $rsm)
        ->getScalarResult();*/
}
