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


        <style type=\"text/css\">
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 64
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
<!-- <li role=\"presentation\"> <a href=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("messagerie_homepage");
        echo "\"> Messagerie </a> </li> -->
<li role=\"presentation\"> <a href=\"";
        // line 76
        echo $this->env->getExtension('routing')->getPath("guild_home");
        echo "\"> Guilde </a> </li>
";
        // line 77
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 78
            echo "<!-- <li>  
<a href=\"#\"> Mon profile </a> 
</li> -->
<li>
<a href=\"";
            // line 82
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\"> Deconnection </a> 
</li>
 ";
        } else {
            // line 85
            echo "<li>
<a href=\"#\"> S'incrire </a>
</li>
<li>
<a href=\"";
            // line 89
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\"> Se Connecter </a>
</li>
";
        }
        // line 92
        echo "</ul>



<div class=\"well space\">
<h2>";
        // line 97
        $this->displayBlock('titre', $context, $blocks);
        echo "</h2>

    ";
        // line 99
        $this->displayBlock('content', $context, $blocks);
        // line 102
        echo "</div>



    </body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo " InRealGame";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
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

    // line 97
    public function block_titre($context, array $blocks = array())
    {
        echo " ";
    }

    // line 99
    public function block_content($context, array $blocks = array())
    {
        // line 100
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
        return array (  192 => 100,  189 => 99,  183 => 97,  127 => 11,  124 => 10,  118 => 5,  109 => 102,  107 => 99,  102 => 97,  95 => 92,  89 => 89,  83 => 85,  77 => 82,  71 => 78,  69 => 77,  65 => 76,  61 => 75,  57 => 74,  53 => 73,  45 => 68,  39 => 64,  37 => 10,  29 => 5,  23 => 1,);
    }
}
