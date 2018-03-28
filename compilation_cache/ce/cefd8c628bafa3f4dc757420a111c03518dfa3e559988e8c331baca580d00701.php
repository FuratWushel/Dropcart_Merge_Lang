<?php

/* contact.html.twig */
class __TwigTemplate_413812e67d8317c1f09c08b0cf0a6852e9b52946db9f9b917cce3106001059e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts/layout.html.twig", "contact.html.twig", 1);
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
        return "contact.html.twig";
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
        return new Twig_Source("", "contact.html.twig", "C:\\Users\\Furat\\PhpstormProjects\\webshop-frontend\\templates\\contact.html.twig");
    }
}
