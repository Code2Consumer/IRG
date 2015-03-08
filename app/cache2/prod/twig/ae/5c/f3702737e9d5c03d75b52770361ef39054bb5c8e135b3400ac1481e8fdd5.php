<?php

/* GuildBundle:Public:postuler.html.twig */
class __TwigTemplate_ae5cf3702737e9d5c03d75b52770361ef39054bb5c8e135b3400ac1481e8fdd5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::template.html.twig");

        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_titre($context, array $blocks = array())
    {
        echo " Postuler: ";
        echo twig_escape_filter($this->env, (isset($context["GuildName"]) ? $context["GuildName"] : null), "html", null, true);
        echo " ";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
<br> 
<br> 


";
        // line 13
        if (((isset($context["postulant"]) ? $context["postulant"] : null) == null)) {
            // line 14
            echo "
<form action=\" ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("guild_postuler", array("GuildId" => (isset($context["GuildId"]) ? $context["GuildId"] : null), "GuildName" => (isset($context["GuildName"]) ? $context["GuildName"] : null))), "html", null, true);
            echo " \" method=\"POST\">

";
            // line 17
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
            echo "

<input type=\"submit\">

</form>


</form>

";
        } else {
            // line 27
            echo "
<p class=\"btn-primary btn-lg success\">

<span class=\"glyphicon glyphicon-ok\">  </span>

Candidature envoyé 

";
        }
        // line 35
        echo "

";
    }

    public function getTemplateName()
    {
        return "GuildBundle:Public:postuler.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 35,  70 => 27,  57 => 17,  52 => 15,  49 => 14,  47 => 13,  40 => 8,  37 => 7,  29 => 5,);
    }
}
