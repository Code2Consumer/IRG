<?php

/* UserBundle:Public:index.html.twig */
class __TwigTemplate_563460a25d49b2b6727094cb2f47fc4f7ef30ad76f2d9e8e3b5754bc00d7131c extends Twig_Template
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
        echo " Accueil ";
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "

<br>

<p> InRealGame est une Application web destinée aux groupes de joueur de MMORPG ou à d'autre organisation. Le but de ce site avec de faciliter la communication au sein d'une guilde tout en lui permettant d'accéder à des fonctions tel que: </p>

<ul>
<li>
La gestion des candidatures
</li>
<li>
La mise en place d'un calendrier,
</li>
<li>
Création d'annonce.
</li>
</ul>

Et bien d'autres fonctionnalités à venir comme la mise en place de sondage ou la gestion d'alliance et d'événements inter-guilde.

";
    }

    public function getTemplateName()
    {
        return "UserBundle:Public:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 5,  35 => 4,  29 => 3,);
    }
}
