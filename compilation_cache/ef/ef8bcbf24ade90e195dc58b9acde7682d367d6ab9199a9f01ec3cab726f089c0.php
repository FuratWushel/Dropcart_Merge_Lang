<?php

/* blank.html.twig */
class __TwigTemplate_118f179018694130dd953a921eb7a4f0b1292c1e89a80355c693b81959b04188 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts/layout.html.twig", "blank.html.twig", 1);
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

    <h1>";
        // line 6
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</h1>
    <p class=\"lead\">
        ";
        // line 8
        echo ($context["content"] ?? null);
        echo "
    </p>


";
    }

    public function getTemplateName()
    {
        return "blank.html.twig";
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
        return new Twig_Source("", "blank.html.twig", "C:\\Users\\Furat\\PhpstormProjects\\webshop-frontend\\templates\\blank.html.twig");
    }
}
