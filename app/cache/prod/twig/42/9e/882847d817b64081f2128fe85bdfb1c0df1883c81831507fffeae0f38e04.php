<?php

/* GuildBundle:Public:index.html.twig */
class __TwigTemplate_429e882847d817b64081f2128fe85bdfb1c0df1883c81831507fffeae0f38e04 extends Twig_Template
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
        echo " Toutes les guildes ";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "
<br>
<br>



<a href=\" ";
        // line 13
        echo $this->env->getExtension('routing')->getPath("guild_create");
        echo "\"> creer une guild </a>

 <table class=\"table\">
  <tr class=\"width\">
  <td> Nom de la guilde </td>
  <td> GM</td>
  <td> MMO </td>
  <td> Serveur </td>
  <td> Lien </td>
  <td>  </td>
  </tr>
";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allguild"]) ? $context["allguild"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["keys"]) {
            // line 25
            echo "  <tr>

<td>
";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["keys"], "guildName", array()), "html", null, true);
            echo "
</td>
<td> ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["keys"], "gM", array()), "html", null, true);
            echo " </td>
<td> ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["keys"], "mMOPrincipale", array()), "html", null, true);
            echo " </td>
<td> ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["keys"], "serveur", array()), "html", null, true);
            echo " </td>
<td> <a href=\" ";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("guild_first_page", array("GuildId" => $this->getAttribute($context["keys"], "id", array()))), "html", null, true);
            echo "\"> Liens vers la guild </a></td>
<td> <a href=\" ";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("guild_postuler", array("GuildId" => $this->getAttribute($context["keys"], "id", array()), "GuildName" => $this->getAttribute($context["keys"], "guildName", array()))), "html", null, true);
            echo "\"> Postuler </a></td>
</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['keys'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "</table> 





";
    }

    public function getTemplateName()
    {
        return "GuildBundle:Public:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 37,  90 => 34,  86 => 33,  82 => 32,  78 => 31,  74 => 30,  69 => 28,  64 => 25,  60 => 24,  46 => 13,  38 => 7,  35 => 6,  29 => 4,);
    }
}
