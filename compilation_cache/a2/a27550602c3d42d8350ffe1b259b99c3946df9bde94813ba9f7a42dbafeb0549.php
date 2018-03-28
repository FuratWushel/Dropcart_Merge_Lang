<?php

/* layouts/footer.html.twig */
class __TwigTemplate_10d1d658d5bf66df559a637606b316ddcf0bc0cb7a34d7e6faa5cc20000ca0b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<footer class=\"footer\">
    <p>© ";
        // line 2
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - Alle prijzen zijn inclusief BTW - Merknamen zijn alleen gebruikt om de toepasbaarheid van producten aan te geven en dienen verder niet te worden geassocieerd met ";
        echo twig_escape_filter($this->env, ($context["site_name"] ?? null), "html", null, true);
        echo "</p>
</footer>";
    }

    public function getTemplateName()
    {
        return "layouts/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layouts/footer.html.twig", "C:\\Users\\Furat\\PhpstormProjects\\webshop-frontend\\templates\\layouts\\footer.html.twig");
    }
}
