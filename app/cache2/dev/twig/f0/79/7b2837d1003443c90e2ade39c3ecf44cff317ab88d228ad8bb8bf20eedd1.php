<?php

/* GuildBundle:Public:creation.html.twig */
class __TwigTemplate_f0797b2837d1003443c90e2ade39c3ecf44cff317ab88d228ad8bb8bf20eedd1 extends Twig_Template
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
        echo " Créez votre guilde ";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
<br> 
<br> 
<form action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("guild_create");
        echo "\" method=\"POST\">

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
        return "GuildBundle:Public:creation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 13,  43 => 11,  38 => 8,  35 => 7,  29 => 5,);
    }
}
