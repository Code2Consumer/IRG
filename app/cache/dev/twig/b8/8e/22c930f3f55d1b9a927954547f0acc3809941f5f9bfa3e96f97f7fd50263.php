<?php

/* UserBundle:Public:AllUsers.html.twig */
class __TwigTemplate_b88e22c930f3f55d1b9a927954547f0acc3809941f5f9bfa3e96f97f7fd50263 extends Twig_Template
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
        echo " Tous Les profiles ";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "

";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Users"]) ? $context["Users"] : $this->getContext($context, "Users")));
        foreach ($context['_seq'] as $context["_key"] => $context["keys"]) {
            // line 11
            echo "
<br>
";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["keys"], "username", array()), "html", null, true);
            echo "
";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["keys"], "id", array()), "html", null, true);
            echo "
";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["keys"], "email", array()), "html", null, true);
            echo "

<br>



";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['keys'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "

";
    }

    public function getTemplateName()
    {
        return "UserBundle:Public:AllUsers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 22,  58 => 15,  54 => 14,  50 => 13,  46 => 11,  42 => 10,  38 => 8,  35 => 7,  29 => 5,);
    }
}
