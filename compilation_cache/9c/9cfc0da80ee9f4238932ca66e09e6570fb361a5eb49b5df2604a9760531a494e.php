<?php

/* about_us.html.twig */
class __TwigTemplate_9c4613909dbc4138cd6c17f36c7516bd179fb19b3bbb1a7721f10122c69554d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts/layout.html.twig", "about_us.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layouts/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
    <div class=\"jumbotron\">
        <h1>";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["lang"] ?? null), "page_about_us", array()), "title", array()), "html", null, true);
        echo "</h1>
        <p class=\"lead\">
            ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["lang"] ?? null), "page_about_us", array()), "content", array()), "html", null, true);
        echo "
        </p>
    </div>

";
    }

    public function getTemplateName()
    {
        return "about_us.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "about_us.html.twig", "C:\\Users\\Furat\\PhpstormProjects\\webshop-frontend\\templates\\about_us.html.twig");
    }
}
