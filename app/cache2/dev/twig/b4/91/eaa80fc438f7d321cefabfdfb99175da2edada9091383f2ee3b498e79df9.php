<?php

/* GuildBundle:Public:showcandidature.html.twig */
class __TwigTemplate_b491eaa80fc438f7d321cefabfdfb99175da2edada9091383f2ee3b498e79df9 extends Twig_Template
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
        echo " Candidature de ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["candidature"]) ? $context["candidature"] : $this->getContext($context, "candidature")), 0, array()), "userName", array()), "html", null, true);
        echo " ";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
<h3> ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["candidature"]) ? $context["candidature"] : $this->getContext($context, "candidature")), 0, array()), "messageTitre", array()), "html", null, true);
        echo " </h3>
";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["candidature"]) ? $context["candidature"] : $this->getContext($context, "candidature")), 0, array()), "message", array()), "html", null, true);
        echo "


<form action=\" ";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("guild_show_candidatures", array("GuildId" => (isset($context["GuildId"]) ? $context["GuildId"] : $this->getContext($context, "GuildId")), "CandidatureId" => (isset($context["CandidatureId"]) ? $context["CandidatureId"] : $this->getContext($context, "CandidatureId")))), "html", null, true);
        echo " \" method=\"POST\">

";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

<input value=\"Accepter\" type=\"submit\">
</form>


";
    }

    public function getTemplateName()
    {
        return "GuildBundle:Public:showcandidature.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 15,  53 => 13,  47 => 10,  43 => 9,  40 => 8,  37 => 7,  29 => 5,);
    }
}
