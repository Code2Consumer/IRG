<?php

/* GuildBundle:Public:planing.html.twig */
class __TwigTemplate_c966cc21f8094ac79b55491ff4ceb10c8add178454a43306a1ed088afc314501 extends Twig_Template
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

    // line 4
    public function block_titre($context, array $blocks = array())
    {
        echo " Planning/Calendrier ";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
planing de la guild


<br> 
<br> 
<br> 

";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nbj"]) ? $context["nbj"] : $this->getContext($context, "nbj"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 15
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["keys"]) {
                if ((twig_date_format_filter($this->env, $this->getAttribute($context["keys"], "date", array()), "d") == $context["i"])) {
                    // line 16
                    echo "
<div class=\"day-case\">

";
                    // line 19
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo " <br>
";
                    // line 20
                    echo twig_escape_filter($this->env, $this->getAttribute($context["keys"], "titre", array()), "html", null, true);
                    echo "<br>
";
                    // line 21
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["keys"], "date", array()), "d-m"), "html", null, true);
                    echo "<br>
";
                    // line 22
                    echo twig_escape_filter($this->env, $this->getAttribute($context["keys"], "auteurName", array()), "html", null, true);
                    echo "<br>


<a href=\" ";
                    // line 25
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("guild_show_event", array("GuildId" => (isset($context["GuildId"]) ? $context["GuildId"] : $this->getContext($context, "GuildId")), "EventId" => $this->getAttribute($context["keys"], "id", array()))), "html", null, true);
                    echo "\"> +PlusD'info </a>
</div>

";
                    $context['_iterated'] = true;
                }
            }
            if (!$context['_iterated']) {
                // line 29
                echo "<div class=\"day-case\">

";
                // line 31
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "


</div>


";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['keys'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "






<br>

<br>



";
    }

    public function getTemplateName()
    {
        return "GuildBundle:Public:planing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 39,  95 => 31,  91 => 29,  81 => 25,  75 => 22,  71 => 21,  67 => 20,  63 => 19,  58 => 16,  52 => 15,  48 => 14,  38 => 6,  35 => 5,  29 => 4,);
    }
}
