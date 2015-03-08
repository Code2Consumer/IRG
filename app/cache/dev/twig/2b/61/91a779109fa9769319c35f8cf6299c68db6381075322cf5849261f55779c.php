<?php

/* MessagerieBundle:Default:new_message.html.twig */
class __TwigTemplate_2b6191a779109fa9769319c35f8cf6299c68db6381075322cf5849261f55779c extends Twig_Template
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
        echo " Nouveau message ";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
";
        // line 9
        if (array_key_exists("infotext", $context)) {
            // line 10
            echo "<p class='bg-success large'>
<br>
";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["infotext"]) ? $context["infotext"] : $this->getContext($context, "infotext")), "html", null, true);
            echo "
<br>
<br>
</p>

";
        }
        // line 18
        echo "
<form action=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("messagerie_homepage");
        echo "\" method=\"POST\">

";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

<input type=\"submit\">
</form>

";
    }

    public function getTemplateName()
    {
        return "MessagerieBundle:Default:new_message.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 21,  59 => 19,  56 => 18,  47 => 12,  43 => 10,  41 => 9,  38 => 8,  35 => 7,  29 => 5,);
    }
}
