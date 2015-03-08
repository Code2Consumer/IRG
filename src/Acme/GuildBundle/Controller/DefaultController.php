<?php

namespace Acme\GuildBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('GuildBundle:Default:index.html.twig', array('name' => $name));
    }
}
