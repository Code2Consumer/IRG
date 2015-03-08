<?php

/* GuildBundle:Public:allcandidatures.html.twig */
class __TwigTemplate_e2acb3e732e262521ccc4517d087b1b8866c1f859a9447f918f988be33d8188b extends Twig_Template
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
        echo " Toutes les candidature ";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["candidatures"]) ? $context["candidatures"] : $this->getContext($context, "candidatures")));
        foreach ($context['_seq'] as $context["_key"] => $context["keys"]) {
            // line 10
            echo "


  <h3> ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["keys"], "messageTitre", array()), "html", null, true);
            echo " </h3>
  <h5> ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["keys"], "userName", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["keys"], "date", array()), "d/m/y"), "html", null, true);
            echo " </h5>
  <p> ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["keys"], "message", array()), "html", null, true);
            echo " </p>
  <p> ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["keys"], "situation", array()), "html", null, true);
            echo " </p>
  <a href=\" ";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("guild_show_candidatures", array("GuildId" => $this->getAttribute($context["keys"], "Guildid", array()), "CandidatureId" => $this->getAttribute($context["keys"], "id", array()))), "html", null, true);
            echo "\"> Afficher cette candidature </a>

 


  <br>
  <br>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['keys'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "

";
    }

    public function getTemplateName()
    {
        return "GuildBundle:Public:allcandidatures.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 25,  68 => 17,  64 => 16,  60 => 15,  54 => 14,  50 => 13,  45 => 10,  41 => 9,  38 => 8,  35 => 7,  29 => 5,);
    }
}
