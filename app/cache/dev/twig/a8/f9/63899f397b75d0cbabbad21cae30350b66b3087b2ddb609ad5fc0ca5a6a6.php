<?php

/* GuildBundle:Public:showmembre.html.twig */
class __TwigTemplate_a8f963899f397b75d0cbabbad21cae30350b66b3087b2ddb609ad5fc0ca5a6a6 extends Twig_Template
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
 <table class=\"table\">


";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allmembres"]) ? $context["allmembres"] : $this->getContext($context, "allmembres")));
        foreach ($context['_seq'] as $context["_key"] => $context["keys"]) {
            // line 11
            echo "<tr>
  <td> ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["keys"], "username", array()), "html", null, true);
            echo " </td>
 </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['keys'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "  </table>

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
        return array (  60 => 15,  51 => 12,  48 => 11,  44 => 10,  38 => 6,  35 => 5,  29 => 3,);
    }
}
