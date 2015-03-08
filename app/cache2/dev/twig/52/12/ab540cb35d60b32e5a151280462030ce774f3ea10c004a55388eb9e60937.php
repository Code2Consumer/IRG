<?php

/* GuildBundle:Public:neweven.html.twig */
class __TwigTemplate_5212ab540cb35d60b32e5a151280462030ce774f3ea10c004a55388eb9e60937 extends Twig_Template
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

    // line 3
    public function block_titre($context, array $blocks = array())
    {
        echo " Créez Votre Evenement";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
<br> 
<br>


<form action=\" ";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("guild_new_event", array("GuildId" => (isset($context["GuildId"]) ? $context["GuildId"] : $this->getContext($context, "GuildId")))), "html", null, true);
        echo " \" method=\"POST\">

";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
<input type=\"submit\">
</form>

";
    }

    public function getTemplateName()
    {
        return "GuildBundle:Public:neweven.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 13,  45 => 11,  38 => 6,  35 => 5,  29 => 3,);
    }
}
