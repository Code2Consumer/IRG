<?php

/* GuildBundle:Public:firstpage.html.twig */
class __TwigTemplate_844f29d9b269a8a8bd070a8c048e032daca63b09cfe4f36e09d80c81909528f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::template-guild.html.twig");

        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'content' => array($this, 'block_content'),
            'right' => array($this, 'block_right'),
            'actualite' => array($this, 'block_actualite'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::template-guild.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_titre($context, array $blocks = array())
    {
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guild"]) ? $context["guild"] : $this->getContext($context, "guild")), "GuildName", array()), "html", null, true);
        echo " ";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
";
        // line 16
        echo "<br>

<div class=\"row\">
<div class=\"col-md-6 col-md-offset-1\">
Ecrivez un message !
<form action=\"#\" method=\"POST\">
";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
<input id=\"form-input\" class=\"btn btn-primary\" type=\"submit\">
</form>
 </div>

 </div>


";
    }

    // line 32
    public function block_right($context, array $blocks = array())
    {
        // line 33
        echo "
<div class=\"list-group\">

<a class=\"list-group-item\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("guild_new_event", array("GuildId" => $this->getAttribute((isset($context["guild"]) ? $context["guild"] : $this->getContext($context, "guild")), "id", array()))), "html", null, true);
        echo "\"> Creer un event </a>

<a class=\"list-group-item\" href=\" ";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("guild_show_allcandidatures", array("GuildId" => $this->getAttribute((isset($context["guild"]) ? $context["guild"] : $this->getContext($context, "guild")), "id", array()))), "html", null, true);
        echo "\"> 

";
        // line 40
        if (((isset($context["cand"]) ? $context["cand"] : $this->getContext($context, "cand")) != 0)) {
            // line 41
            echo "
<span id=\"cand-count\"> ";
            // line 42
            echo twig_escape_filter($this->env, (isset($context["cand"]) ? $context["cand"] : $this->getContext($context, "cand")), "html", null, true);
            echo "
</span>
";
        }
        // line 45
        echo "
Les candidatures </a>

<a class=\"list-group-item\" href=\" ";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("guild_membres", array("GuildId" => $this->getAttribute((isset($context["guild"]) ? $context["guild"] : $this->getContext($context, "guild")), "id", array()))), "html", null, true);
        echo "\"> Les membres </a>

<a class=\"list-group-item\" href=\" ";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("guild_planning", array("GuildId" => $this->getAttribute((isset($context["guild"]) ? $context["guild"] : $this->getContext($context, "guild")), "id", array()))), "html", null, true);
        echo "\"> Le calendrier </a>

</div>

";
    }

    // line 56
    public function block_actualite($context, array $blocks = array())
    {
        // line 57
        echo "
";
        // line 58
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, (isset($context["GuildPost"]) ? $context["GuildPost"] : $this->getContext($context, "GuildPost"))));
        foreach ($context['_seq'] as $context["_key"] => $context["keys"]) {
            // line 59
            echo "<div class=\"row\">
  <div class=\"col-md-1\">
  </div>
  <div class=\"col-md-8 well\">


<blockquote>
  <p> ";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["keys"], "message", array()), "html", null, true);
            echo " </p>
  <footer> ";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["keys"], "userName", array()), "html", null, true);
            echo " <cite title=\"Source Title\"> ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["keys"], "date", array()), "H"), "html", null, true);
            echo "h
";
            // line 68
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["keys"], "date", array()), "i"), "html", null, true);
            echo " </cite></footer>
</blockquote>




</div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['keys'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "



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
        return array (  158 => 77,  143 => 68,  137 => 67,  133 => 66,  124 => 59,  120 => 58,  117 => 57,  114 => 56,  105 => 50,  100 => 48,  95 => 45,  89 => 42,  86 => 41,  84 => 40,  79 => 38,  74 => 36,  69 => 33,  66 => 32,  53 => 22,  45 => 16,  42 => 8,  39 => 7,  31 => 5,);
    }
}
