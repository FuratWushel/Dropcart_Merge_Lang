<?php

/* layouts/footer.html.twig */
class __TwigTemplate_30ee880c95df9813aaa116e61f5b258a94271a0a3ab87bfadad47db1ad64c4fe extends Twig_Template
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
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["lang"] ?? null), "site_footer", array()), "html", null, true);
        echo " ";
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
