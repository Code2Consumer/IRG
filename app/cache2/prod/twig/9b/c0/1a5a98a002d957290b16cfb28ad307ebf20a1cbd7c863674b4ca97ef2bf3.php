<?php

/* GuildBundle:Public:showevent.html.twig */
class __TwigTemplate_9bc01a5a98a002d957290b16cfb28ad307ebf20a1cbd7c863674b4ca97ef2bf3 extends Twig_Template
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
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : null), 0, array()), "titre", array()), "html", null, true);
        echo " ";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
 Event créer par : ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : null), 0, array()), "titre", array()), "html", null, true);
        echo " <br>

 date de l'event: ";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : null), 0, array()), "date", array()), "d-m-y"), "html", null, true);
        echo " <br>

 Description: <br> 
 ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : null), 0, array()), "infos", array()), "html", null, true);
        echo "
 <br> 
 <br> 
 <br> 

";
        // line 17
        if (((isset($context["inscrit"]) ? $context["inscrit"] : null) == null)) {
            // line 18
            echo "

<form action=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("guild_show_event", array("GuildId" => (isset($context["GuildId"]) ? $context["GuildId"] : null), "EventId" => (isset($context["EventId"]) ? $context["EventId"] : null))), "html", null, true);
            echo "\" method=\"POST\">
";
            // line 21
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
            echo "
<input type=\"submit\" class=\"btn btn-primary\">
</form>

";
        } else {
            // line 26
            echo "<p class=\"btn-primary btn-lg success\">

<span class=\"glyphicon glyphicon-ok\">  </span>

Vous étes bien inscrit en tant que ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["inscrit"]) ? $context["inscrit"] : null), 0, array()), "role", array()), "html", null, true);
            echo "
</p>

";
        }
        // line 34
        echo "



";
    }

    public function getTemplateName()
    {
        return "GuildBundle:Public:showevent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 34,  86 => 30,  80 => 26,  72 => 21,  68 => 20,  64 => 18,  62 => 17,  54 => 12,  48 => 9,  43 => 7,  40 => 6,  37 => 5,  29 => 3,);
    }
}
