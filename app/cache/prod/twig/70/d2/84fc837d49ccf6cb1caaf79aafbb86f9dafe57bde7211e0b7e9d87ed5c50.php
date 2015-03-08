<?php

/* ::template-guild.html.twig */
class __TwigTemplate_70d284fc837d49ccf6cb1caaf79aafbb86f9dafe57bde7211e0b7e9d87ed5c50 extends Twig_Template
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
            'right' => array($this, 'block_right'),
            'actualite' => array($this, 'block_actualite'),
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
        // line 83
        echo "        </style>

<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css\">
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css\">

        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>

<ul class=\"nav  nav-tabs nav-justified\" role=\"tablist\">
<li role=\"presentation\"><a href=\"";
        // line 93
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\"> Home </a> </li> 
<li role=\"presentation\"> <a href=\"";
        // line 94
        echo $this->env->getExtension('routing')->getPath("show_profile");
        echo "\"> Profile </a> </li>
<li role=\"presentation\"> <a href=\"";
        // line 95
        echo $this->env->getExtension('routing')->getPath("guild_home");
        echo "\"> Guilde </a> </li>
";
        // line 96
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
            // line 97
            echo "<!-- <li>  
<a href=\"#\"> Mon profile </a> 
</li> -->
<li>
<a href=\"";
            // line 101
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\"> Deconnection </a> 
</li>
 ";
        } else {
            // line 104
            echo "<li>
<a href=\"#\"> S'incrire </a>
</li>
<li>
<a href=\"";
            // line 108
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\"> Se Connecter </a>
</li>
";
        }
        // line 111
        echo "</ul>


<div class=\"row\">
  <div class=\"col-md-1 space\">
  </div>
  <div class=\"col-md-8 space well\">

<h2>";
        // line 119
        $this->displayBlock('titre', $context, $blocks);
        echo "</h2>

    ";
        // line 121
        $this->displayBlock('content', $context, $blocks);
        // line 124
        echo "  </div>

  <div class=\"col-md-2 space\">
        ";
        // line 127
        $this->displayBlock('right', $context, $blocks);
        // line 130
        echo "  </div>
</div>

    ";
        // line 133
        $this->displayBlock('actualite', $context, $blocks);
        // line 136
        echo "
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
        margin: 50px 0px 20px 0px !important;
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

    #acme_guildbundle_guildpost_message{
        width: 400px;
    }
    #form-input{
        float: right;
        position: relative;
    }

    .border{
        border: 2px solid black;
    }
        #cand-count {
        background-color: red;
        color: white;
        text-align: center;
        margin-right: 2px;
        border-radius: 20%;
        padding: 2px;
    }

        ";
    }

    // line 119
    public function block_titre($context, array $blocks = array())
    {
        echo " Titre par default!! ";
    }

    // line 121
    public function block_content($context, array $blocks = array())
    {
        // line 122
        echo "
    ";
    }

    // line 127
    public function block_right($context, array $blocks = array())
    {
        // line 128
        echo "
        ";
    }

    // line 133
    public function block_actualite($context, array $blocks = array())
    {
        // line 134
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "::template-guild.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 134,  237 => 133,  232 => 128,  229 => 127,  224 => 122,  221 => 121,  215 => 119,  139 => 10,  136 => 9,  130 => 5,  124 => 136,  122 => 133,  117 => 130,  115 => 127,  110 => 124,  108 => 121,  103 => 119,  93 => 111,  87 => 108,  81 => 104,  75 => 101,  69 => 97,  67 => 96,  63 => 95,  59 => 94,  55 => 93,  47 => 88,  40 => 83,  38 => 9,  31 => 5,  25 => 1,);
    }
}
