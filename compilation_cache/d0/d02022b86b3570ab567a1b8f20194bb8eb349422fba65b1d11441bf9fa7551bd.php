<?php

/* blocks/shopping_cart.html.twig */
class __TwigTemplate_8f41d0282b3fd425b36289a84823f1ace6e7a72807a1f08c0042a593f5e69e1b extends Twig_Template
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
        echo "<h3>
    <a href=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["lang"] ?? null), "url", array()), "shopping_cart", array()), "html", null, true);
        echo "\" style=\"text-decoration: none;\">
        <span class=\"glyphicon glyphicon-shopping-cart\"></span> ";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["lang"] ?? null), "shopping_cart", array()), "html", null, true);
        echo "
    </a>
</h3>
<div class=\"cart-content\">
    ";
        // line 7
        if ((array_key_exists("shopping_cart_overview", $context) && (twig_get_attribute($this->env, $this->getSourceContext(), ($context["shopping_cart_overview"] ?? null), "total_products", array()) > 0))) {
            // line 8
            echo "        <span class=\"cart-items\">";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->getSourceContext(), ($context["shopping_cart_overview"] ?? null), "total_products", array()) . " artikel(en)"), "html", null, true);
            echo "</span>
        - <span class=\"cart-total\">&euro;&nbsp;<span class=\"cart-total-amount\">";
            // line 9
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["shopping_cart_overview"] ?? null), "total_price", array()), 2, ",", "."), "html", null, true);
            echo "</span></span>
    ";
        } else {
            // line 11
            echo "        <small><i>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["lang"] ?? null), "shopping_cart", array()), "no_products", array()), "html", null, true);
            echo "</i></small>
    ";
        }
        // line 13
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "blocks/shopping_cart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 13,  45 => 11,  40 => 9,  35 => 8,  33 => 7,  26 => 3,  22 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "blocks/shopping_cart.html.twig", "C:\\Users\\Furat\\PhpstormProjects\\webshop-frontend\\templates\\blocks\\shopping_cart.html.twig");
    }
}
