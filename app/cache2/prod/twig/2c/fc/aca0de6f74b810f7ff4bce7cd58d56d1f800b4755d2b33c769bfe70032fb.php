<?php

/* GuildBundle:Public:firstpage.html.twig */
class __TwigTemplate_2cfcaca0de6f74b810f7ff4bce7cd58d56d1f800b4755d2b33c769bfe70032fb extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guild"]) ? $context["guild"] : null), "GuildName", array()), "html", null, true);
        echo " ";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guild"]) ? $context["guild"] : null), "Serveur", array()), "html", null, true);
        echo "

";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guild"]) ? $context["guild"] : null), "CoGM", array()), "html", null, true);
        echo "

";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guild"]) ? $context["guild"] : null), "GM", array()), "html", null, true);
        echo "



<a href=\" ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("guild_new_event", array("GuildId" => $this->getAttribute((isset($context["guild"]) ? $context["guild"] : null), "id", array()))), "html", null, true);
        echo "\"> creer un event </a>
<br>

<br>

<a href=\" ";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("guild_planning", array("GuildId" => $this->getAttribute((isset($context["guild"]) ? $context["guild"] : null), "id", array()))), "html", null, true);
        echo "\"> calendrier de la guild </a>
<br>
<br>

<a href=\" ";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("guild_show_allcandidatures", array("GuildId" => $this->getAttribute((isset($context["guild"]) ? $context["guild"] : null), "id", array()))), "html", null, true);
        echo "\"> Les candidatures </a>
<br>

<br>

";
    }

    public function getTemplateName()
    {
        return "GuildBundle:Public:firstpage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 26,  68 => 22,  60 => 17,  53 => 13,  48 => 11,  43 => 9,  40 => 8,  37 => 7,  29 => 5,);
    }
}
