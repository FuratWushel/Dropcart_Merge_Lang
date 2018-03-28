<?php

/* support.html.twig */
class __TwigTemplate_075d8f378aa3b90af252dd45974ed537a86e7266546460f8baff9e280aba1af7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts/layout.html.twig", "support.html.twig", 1);
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
        echo twig_escape_filter($this->env, ($context["site_name"] ?? null), "html", null, true);
        echo "</h1>
        <p class=\"lead\">
            ";
        // line 8
        echo twig_escape_filter($this->env, ($context["site_slug"] ?? null), "html", null, true);
        echo "
        </p>
    </div>

";
    }

    public function getTemplateName()
    {
        return "support.html.twig";
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
        return new Twig_Source("", "support.html.twig", "C:\\Users\\Furat\\PhpstormProjects\\webshop-frontend\\templates\\support.html.twig");
    }
}
