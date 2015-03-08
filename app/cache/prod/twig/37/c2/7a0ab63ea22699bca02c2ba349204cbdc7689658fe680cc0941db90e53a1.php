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
        // line 63
        echo "        </style>

<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css\">
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css\">

        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>

<ul class=\"nav  nav-tabs nav-justified\" role=\"tablist\">
<li role=\"presentation\"><a href=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\"> Home </a> </li> 
<li role=\"presentation\"> <a href=\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("show_profile");
        echo "\"> Profile </a> </li>
<li role=\"presentation\"> <a href=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("guild_home");
        echo "\"> Guilde </a> </li>
";
        // line 76
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
            // line 77
            echo "<!-- <li>  
<a href=\"#\"> Mon profile </a> 
</li> -->
<li>
<a href=\"";
            // line 81
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\"> Deconnection </a> 
</li>
 ";
        } else {
            // line 84
            echo "<li>
<a href=\"#\"> S'incrire </a>
</li>
<li>
<a href=\"";
            // line 88
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\"> Se Connecter </a>
</li>
";
        }
        // line 91
        echo "</ul>



<div class=\"well space\">
<h2>";
        // line 96
        $this->displayBlock('titre', $context, $blocks);
        echo "</h2>

    ";
        // line 98
        $this->displayBlock('content', $context, $blocks);
        // line 101
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

    // line 96
    public function block_titre($context, array $blocks = array())
    {
        echo " ";
    }

    // line 98
    public function block_content($context, array $blocks = array())
    {
        // line 99
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
        return array (  188 => 99,  185 => 98,  179 => 96,  123 => 10,  120 => 9,  114 => 5,  105 => 101,  103 => 98,  98 => 96,  91 => 91,  85 => 88,  79 => 84,  73 => 81,  67 => 77,  65 => 76,  61 => 75,  57 => 74,  53 => 73,  45 => 68,  38 => 63,  36 => 9,  29 => 5,  23 => 1,);
    }
}
