<?php

/* GuildBundle:Public:showevent.html.twig */
class __TwigTemplate_63ffa3f4e0d9ceb74319c240440b083bc2eb76cc69549adb426adba1a9d554ad extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), 0, array()), "titre", array()), "html", null, true);
        echo " ";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
 Event créer par : ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), 0, array()), "auteurname", array()), "html", null, true);
        echo " <br>

 date de l'event: ";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), 0, array()), "date", array()), "d-m-y"), "html", null, true);
        echo " <br>

 Description: <br> 
 ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), 0, array()), "infos", array()), "html", null, true);
        echo "
 <br> 
 <br> 
 <br> 

";
        // line 17
        if (((isset($context["inscrit"]) ? $context["inscrit"] : $this->getContext($context, "inscrit")) == null)) {
            // line 18
            echo "
<form action=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("guild_show_event", array("GuildId" => (isset($context["GuildId"]) ? $context["GuildId"] : $this->getContext($context, "GuildId")), "EventId" => (isset($context["EventId"]) ? $context["EventId"] : $this->getContext($context, "EventId")))), "html", null, true);
            echo "\" method=\"POST\">
";
            // line 20
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
            echo "
<input type=\"submit\" class=\"btn btn-primary\">
</form>

";
        } else {
            // line 25
            echo "<p class=\"btn-primary btn-lg success\">
<span class=\"glyphicon glyphicon-ok\">  </span>
Vous étes bien inscrit en tant que ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["inscrit"]) ? $context["inscrit"] : $this->getContext($context, "inscrit")), 0, array()), "role", array()), "html", null, true);
            echo "
</p>

";
        }
        // line 31
        echo "
 <table class=\"table\">
  <tr class=\"width\">
  <td> Nom Du Participant</td>
  <td> Role </td>
  </tr>

";
        // line 38
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allinscrit"]) ? $context["allinscrit"] : $this->getContext($context, "allinscrit")));
        foreach ($context['_seq'] as $context["_key"] => $context["keys"]) {
            // line 39
            echo "<tr>
  <td> ";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["keys"], "userName", array()), "html", null, true);
            echo " </td>
  <td> ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["keys"], "role", array()), "html", null, true);
            echo " </td>
 </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['keys'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "  </table>






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
        return array (  119 => 44,  110 => 41,  106 => 40,  103 => 39,  99 => 38,  90 => 31,  83 => 27,  79 => 25,  71 => 20,  67 => 19,  64 => 18,  62 => 17,  54 => 12,  48 => 9,  43 => 7,  40 => 6,  37 => 5,  29 => 3,);
    }
}
