<?php

/* MessagerieBundle:Default:index.html.twig */
class __TwigTemplate_d8856af4f8dec35fd35364a51f3691998a40efe48a582ff5c6d604b1db6f6a76 extends Twig_Template
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
        echo " Messagerie ";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
<a href=\" ";
        // line 9
        echo $this->env->getExtension('routing')->getPath("nouveau_message");
        echo " \"> Ecrire un message </a>

<table class=\"table table-hover\">
 
 <tr style=\" font-weight:bold; \">
  <td class=\"active\"> Titre </td>
  <td class=\"active\"> Envoyeur </td>
  <td class=\"active\"> Date </td>
  <td class=\"active\">  </td>
</tr>

";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, (isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages"))));
        foreach ($context['_seq'] as $context["_key"] => $context["keys"]) {
            // line 21
            echo "
<tr>
  <td class=\"active\"> ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["keys"], "titre", array()), "html", null, true);
            echo " </td>
  <td class=\"active\"> ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["keys"], "nameEnv", array()), "html", null, true);
            echo " </td>
  <td class=\"active\"> ";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["keys"], "date", array()), "m/d/Y"), "html", null, true);
            echo " </td>
  <td class=\"active\"> <a href=\" ";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lire_message", array("id_message" => $this->getAttribute($context["keys"], "id", array()))), "html", null, true);
            echo " \"> lire</a> </td>
</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['keys'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "
</table>




";
    }

    public function getTemplateName()
    {
        return "MessagerieBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 29,  75 => 26,  71 => 25,  67 => 24,  63 => 23,  59 => 21,  55 => 20,  41 => 9,  38 => 8,  35 => 7,  29 => 5,);
    }
}
