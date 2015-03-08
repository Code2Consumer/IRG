<?php

/* ::template.html.twig */
class __TwigTemplate_37c27a0ab63ea22699bca02c2ba349204cbdc7689658fe680cc0941db90e53a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'titre' => array($this, 'block_titre'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <!-- Latest compiled and minified CSS -->


                    <style type=\"text/css\">";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 64
        echo "        </style>

<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css\">
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css\">

        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>

<ul class=\"nav  nav-tabs nav-justified\" role=\"tablist\">
<li role=\"presentation\"><a href=\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\"> Home </a> </li> 
<li role=\"presentation\"> <a href=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("show_profile");
        echo "\"> Profile </a> </li>
<li role=\"presentation\"> <a href=\"";
        // line 76
        echo $this->env->getExtension('routing')->getPath("messagerie_homepage");
        echo "\"> Messagerie </a> </li>
<li role=\"presentation\"> <a href=\"";
        // line 77
        echo $this->env->getExtension('routing')->getPath("guild_home");
        echo "\"> Guilde </a> </li>
";
        // line 78
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 79
            echo "<!-- <li>  
<a href=\"#\"> Mon profile </a> 
</li> -->
<li>
<a href=\"";
            // line 83
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\"> Deconnection </a> 
</li>
 ";
        } else {
            // line 86
            echo "<li>
<a href=\"#\"> S'incrire </a>
</li>
<li>
<a href=\"";
            // line 90
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\"> Se Connecter </a>
</li>
";
        }
        // line 93
        echo "</ul>



<div class=\"well space\">
<h2>";
        // line 98
        $this->displayBlock('titre', $context, $blocks);
        echo "</h2>

    ";
        // line 100
        $this->displayBlock('content', $context, $blocks);
        // line 103
        echo "</div>



    </body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo " InRealGame";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "
    .menue{
        left: 0;
        right: 0;
        top:0;
        margin: auto;

        text-align: center;
    }

    .container{
        margin: 50px 20px 50px 20px;
        height: auto;
        border: solid black 2px;
    }

    .space{
        margin: 50px 30px 50px 30px !important;
    }
    .align-center{
        left: 0;
        right: 0;
        margin: auto;
        position: absolute;
    }

    label{
        margin-left: 50px;
        margin-right: 150px;
        width: 150px;
    }

    input{
       text-align: center;
    }

    .width{
        font-weight: 600;
    }


    table{
        text-align: center;
    }

    .day-case{
        border: 1px solid black;
        width: 100px;
        position: relative;
        display: inline-table;
        height: 150px;
    }

        ";
    }

    // line 98
    public function block_titre($context, array $blocks = array())
    {
        echo " ";
    }

    // line 100
    public function block_content($context, array $blocks = array())
    {
        // line 101
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "::template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 101,  190 => 100,  184 => 98,  127 => 10,  124 => 9,  118 => 5,  109 => 103,  107 => 100,  102 => 98,  95 => 93,  89 => 90,  83 => 86,  77 => 83,  71 => 79,  69 => 78,  65 => 77,  61 => 76,  57 => 75,  53 => 74,  45 => 69,  38 => 64,  36 => 9,  29 => 5,  23 => 1,);
    }
}
