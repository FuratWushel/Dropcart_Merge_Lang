<?php

/* layouts/header.html.twig */
class __TwigTemplate_b45c3e16282bf543c79f2b9fc4afb5da52bdb5a3cfef8c9e1043bbf73e5cd5ee extends Twig_Template
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
        echo "<div class=\"row\">

    <div class=\"col-md-3\">
        <span style=\"height:10px; display: block\" aria-hidden=\"true\">&nbsp;</span>
        <div class=\"push-left\">
            <a href=\"/\"><img style=\"max-height: 94px; max-width: 275px;\"
                             src=\"/images/logo/logo.png\"
                             alt=\"";
        // line 8
        if (array_key_exists("site_name", $context)) {
            echo twig_escape_filter($this->env, ($context["site_name"] ?? null), "html", null, true);
        }
        echo "\"/></a>
            ";
        // line 9
        if (($context["site_slug"] ?? null)) {
            // line 10
            echo "                <h4 class=\"slogan\">";
            echo twig_escape_filter($this->env, ($context["site_slug"] ?? null), "html", null, true);
            echo "</h4>
            ";
        } else {
            // line 12
            echo "                <div style=\"height: 39px;\"></div>
            ";
        }
        // line 14
        echo "        </div>
    </div>

    <div class=\"col-md-5\">
        <form class=\"form-horizontal search-products\" method=\"get\"
              action=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["lang"] ?? null), "url", array()), "products", array()), "html", null, true);
        echo "\">

            ";
        // line 21
        if (array_key_exists("selected_brands", $context)) {
            // line 22
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["selected_brands"] ?? null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["brand"]) {
                // line 23
                echo "                    <input type=\"hidden\" name=\"brands[";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array()), "html", null, true);
                echo "]\" value=\"";
                echo twig_escape_filter($this->env, $context["brand"], "html", null, true);
                echo "\"/>
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['brand'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "            ";
        }
        // line 26
        echo "
            <div class=\"form-group\">
                <div class=\"col-sm-12\">
                    <h5 class=\"global-search-title\">";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["lang"] ?? null), "page_search", array()), "title", array()), "html", null, true);
        echo "</h5>
                    <div class=\"search input-group\" data-initialize=\"search\" role=\"search\">
                        <input id=\"query\" name=\"query\" class=\"form-control\"
                               placeholder=\"Naam, beschrijving, EAN of SKU\" type=\"search\" value=\"\">
                        <span class=\"input-group-btn\">
\t\t                        <button class=\"btn btn-default\" type=\"submit\">
\t\t                            <span class=\"glyphicon glyphicon-search\"></span>
\t\t                            <span class=\"sr-only\">";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["lang"] ?? null), "page_search", array()), "search", array()), "html", null, true);
        echo "</span>
\t\t                        </button>
\t\t                    </span>
                    </div>

                </div>
            </div>
        </form>
    </div>

    <div class=\"col-md-4\">
        <div class=\"push-right\">
            <!-- Pages menu -->
            ";
        // line 49
        $this->loadTemplate("blocks/pages_menu.html.twig", "layouts/header.html.twig", 49)->display($context);
        // line 50
        echo "            <div class=\"float-clear\"></div>

            <div id=\"cart\">
                <!-- Shopping cart -->
                ";
        // line 54
        $this->loadTemplate("blocks/shopping_cart.html.twig", "layouts/header.html.twig", 54)->display($context);
        // line 55
        echo "            </div>
        </div>
    </div>

</div>

<!-- Main menu -->
<div class=\"masthead\">
    ";
        // line 63
        $this->loadTemplate("blocks/main_menu.html.twig", "layouts/header.html.twig", 63)->display($context);
        // line 64
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "layouts/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 64,  151 => 63,  141 => 55,  139 => 54,  133 => 50,  131 => 49,  115 => 36,  105 => 29,  100 => 26,  97 => 25,  78 => 23,  60 => 22,  58 => 21,  53 => 19,  46 => 14,  42 => 12,  36 => 10,  34 => 9,  28 => 8,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layouts/header.html.twig", "C:\\Users\\Furat\\PhpstormProjects\\webshop-frontend\\templates\\layouts\\header.html.twig");
    }
}
