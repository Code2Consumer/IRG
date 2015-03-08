<?php

/* GuildBundle:Public:showmembre.html.twig */
class __TwigTemplate_43cc9cffccd355eb6479106e1932b5422935a8df67f13f3b7cb3e52af6012087 extends Twig_Template
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
        echo " Les membres de la guilde ";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
membre de la guild

";
    }

    public function getTemplateName()
    {
        return "GuildBundle:Public:showmembre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  35 => 5,  29 => 3,);
    }
}
