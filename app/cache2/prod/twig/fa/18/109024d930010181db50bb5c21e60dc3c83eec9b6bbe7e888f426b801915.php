<?php

/* UserBundle:Public:base.html.twig */
class __TwigTemplate_fa18109024d930010181db50bb5c21e60dc3c83eec9b6bbe7e888f426b801915 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
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
                    <style type=\"text/css\">";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 34
        echo "        </style>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
";
        // line 38
        $this->displayBlock('body', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('javascripts', $context, $blocks);
        // line 57
        echo "
    </body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo " InRealGame";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "
    .menue{
        left: 0;
        right: 0;
        margin: auto;
        position: absolute;
        text-align: center;
    }

    .container{
        margin: 0 30px 20px;px 30px;
        height: auto;
        border: solid black 2px;
    }

    ul, li{
        display : inline;
        list-style-type : none;
    }

    li{
        padding: 15px;
        margin: -3;
        border: 2px solid black;
    }

        ";
    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        // line 39
        echo "
<ul class=\"menue\">
<li>Acceuille</li>
<li>Profile</li>
<li>Guild</li>
<li> Connection / Déconnection </li>
</ul>



";
        // line 49
        $this->displayBlock('content', $context, $blocks);
        // line 52
        echo "

";
    }

    // line 49
    public function block_content($context, array $blocks = array())
    {
        // line 50
        echo "
";
    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "UserBundle:Public:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 56,  123 => 50,  120 => 49,  114 => 52,  112 => 49,  100 => 39,  97 => 38,  67 => 7,  64 => 6,  58 => 5,  52 => 57,  50 => 56,  47 => 55,  45 => 38,  39 => 35,  36 => 34,  34 => 6,  30 => 5,  24 => 1,);
    }
}
