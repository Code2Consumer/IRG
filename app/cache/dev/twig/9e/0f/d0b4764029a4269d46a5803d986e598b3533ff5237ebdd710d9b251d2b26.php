<?php

/* MessagerieBundle:Default:liremessage.html.twig */
class __TwigTemplate_9e0fd0b4764029a4269d46a5803d986e598b3533ff5237ebdd710d9b251d2b26 extends Twig_Template
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
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), 0, array()), "titre", array()), "html", null, true);
        echo " ";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), 0, array()), "date", array()), "d-m-y"), "html", null, true);
        echo " 
<br> 
<a class=\"btn btn-primary\" href=\" ";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("repondre", array("id_destinataire" => $this->getAttribute($this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), 0, array()), "idDest", array()))), "html", null, true);
        echo " \"> Repondre </a>

<br> 
<br>
";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), 0, array()), "message", array()), "html", null, true);
        echo "

<br> 
<br> 




";
    }

    public function getTemplateName()
    {
        return "MessagerieBundle:Default:liremessage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 15,  48 => 11,  43 => 9,  40 => 8,  37 => 7,  29 => 5,);
    }
}
