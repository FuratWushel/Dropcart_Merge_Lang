<?php

/* blocks/main_menu.html.twig */
class __TwigTemplate_bbfef18b661dc924b71e56a76f23a66267ea53f1e0df0b6fead447e9e4dc682f extends Twig_Template
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
        echo "<nav>
    <ul class=\"nav nav-justified\">
        <li class=\"no-stretch\">
            <a href=\"/\">
                <b class=\"glyphicon glyphicon-home\"></b>
            </a>
        </li>

        <!-- Category menu -->
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["categories"] ?? null), 0, 8));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 11
            echo "            <li>
                <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["lang"] ?? null), "url", array()), "category_products", array()) . twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "id", array())), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "name", array()), "html", null, true);
            echo "</a>
            </li>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 15
            echo "            <li style=\"text-align: center; font-weight: bold\">Geen categorieën</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
        <!-- Add additional categories to a dropdown -->
        ";
        // line 19
        if ((twig_length_filter($this->env, ($context["categories"] ?? null)) > 8)) {
            // line 20
            echo "            <li role=\"presentation\" class=\"dropdown\">
                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\"
                   aria-expanded=\"false\">Meer<span class=\"caret\"></span>
                </a>
                <ul class=\"dropdown-menu\">
                    ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["categories"] ?? null), 8, null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 26
                echo "                        <li>
                            <a href=\"";
                // line 27
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["lang"] ?? null), "url", array()), "category_products", array()) . twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "id", array())), "html", null, true);
                echo "\">
                                ";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "name", array()), "html", null, true);
                echo "
                            </a>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "                </ul>
            </li>
        ";
        }
        // line 35
        echo "
    </ul>
</nav>
";
    }

    public function getTemplateName()
    {
        return "blocks/main_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 35,  89 => 32,  79 => 28,  75 => 27,  72 => 26,  68 => 25,  61 => 20,  59 => 19,  55 => 17,  48 => 15,  38 => 12,  35 => 11,  30 => 10,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "blocks/main_menu.html.twig", "C:\\Users\\Furat\\PhpstormProjects\\webshop-frontend\\templates\\blocks\\main_menu.html.twig");
    }
}
