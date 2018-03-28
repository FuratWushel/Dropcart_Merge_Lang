<?php

/* products.html.twig */
class __TwigTemplate_d7d9a83043e063aaa16ab141e75c6c5f37fa671e5c3fbf6052090d9603501316 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts/layout.html.twig", "products.html.twig", 1);
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
        // line 5
        echo twig_escape_filter($this->env, ((($context["page_title"] ?? null)) ? (($context["page_title"] ?? null)) : ("")), "html", null, true);
        echo "</h1>

    <div class=\"col-md-2 filter-box\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h5 class=\"panel-title\">Filter resultaten</h5>
            </div>
            <div class=\"panel-body\">
                <form action=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["query_string"] ?? null), "html", null, true);
        echo "\" class=\"form-horizontal\">

                    <div class=\"form-group\">
                    <div class=\" col-sm-12\">

                    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["brands"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["brand"]) {
            // line 19
            echo "                        <div class=\"checkbox\">
                            <label class=\"checkbox-custom\" id=\"brand-";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["brand"], "id", array()), "html", null, true);
            echo "\">
                            <input name=\"brands[]\" type=\"checkbox\"
                            value=\"";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["brand"], "id", array()), "html", null, true);
            echo "\"";
            echo ((twig_in_filter(twig_get_attribute($this->env, $this->getSourceContext(), $context["brand"], "id", array()), ($context["selected_brands"] ?? null))) ? (" checked=\"checked\"") : (""));
            echo ">
                            <span class=\"checkbox-label\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["brand"], "name", array()), "html", null, true);
            echo "</span>
                            </label>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['brand'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "
                    </div>
                    </div>

                    <div class=\"form-group\">
                        <div class=\"col-sm-12\">
                            <div class=\"checkbox\">
                                <label class=\"checkbox-custom\" id=\"0\">
                                    <input name=\"show_unavailable_items\" type=\"checkbox\"
                                           value=\"true\" ";
        // line 36
        echo ((($context["show_unavailable"] ?? null)) ? ("checked=\"checked\"") : (""));
        echo ">
                                    <span class=\"checkbox-label\">Toon ook niet voorraadige producten</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <div class=\"col-sm-12\">
                            <button type=\"submit\" class=\"btn btn-primary pull-left\">Filter</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class=\"product-list col-md-10\">
        <!-- Search in category -->
        <form class=\"form-horizontal\">
            <!-- Save old selected brands input -->
            ";
        // line 57
        if (($context["selected_brands"] ?? null)) {
            // line 58
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
                // line 59
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
            // line 61
            echo "            ";
        }
        // line 62
        echo "            <div class=\"form-group\">
                <div class=\"col-sm-12\">
                    <h4>Zoeken binnen categorie</h4>
                    <div class=\"search-category input-group\" data-initialize=\"search\" role=\"search\">
                        <input id=\"query\" name=\"query\" class=\"form-control\" placeholder=\"Naam, beschrijving, EAN of SKU\"
                               type=\"search\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, ((($context["search_query"] ?? null)) ? (($context["search_query"] ?? null)) : ("")), "html", null, true);
        echo "\">
                        <span class=\"input-group-btn\">
\t\t        <button class=\"btn btn-default\" type=\"submit\">
\t\t          <span class=\"glyphicon glyphicon-search\"></span>
\t\t          <span class=\"sr-only\">Zoeken</span>
\t\t        </button>
\t\t        </span>
                    </div>

                </div>
            </div>
        </form>
        ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 80
            echo "            <div class=\"row\">
                <!-- PRODUCT IMAGE -->
                <div class=\"col-md-3 center\">
                    <img src=\"";
            // line 83
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "images", array())) > 0)) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "images", array()), 0, array(), "array"), "url", array())) : ("/img/no_image.gif")), "html", null, true);
            echo "\"
                         class=\"fill\">
                </div>

                <div class=\"col-md-7 color\">
                    <!-- PRODUCT TITLE -->
                    <h3><a class=\"product-link\" href=\"";
            // line 89
            echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["lang"] ?? null), "url", array()), "product", array()) . twig_urlencode_filter(twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "name", array()))) . "/") . twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "id", array())), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "name", array()), "html", null, true);
            echo "</a></h3>

                    <!-- PRODUCT DESCRIPTION -->
                    <p>";
            // line 92
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "description", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "description", array())) : ((((twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "name", array()) . " wordt binnen 24 uur verzonden mits op voorraad. Dat is de service van ") . ($context["site_name"] ?? null)) . "!"))), "html", null, true);
            echo "</p>

                    <!-- PRODUCT STOCK -->
                    <div class=\"float-left stock-shipping-status\">
                        ";
            // line 96
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "stock", array())) {
                // line 97
                echo "
                            ";
                // line 98
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "stock", array()) > 10)) {
                    // line 99
                    echo "                                <div class=\"label label-success\">Ruimschoots op voorraad</div>
                            ";
                } else {
                    // line 101
                    echo "                                <div class=\"label label-success\">Op voorraad</div>
                            ";
                }
                // line 103
                echo "
                            ";
                // line 104
                if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "shipping_details", array()), "shipping_days", array())) {
                    // line 105
                    echo "                                <div class=\"label label-info\">Levertijd ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "shipping_details", array()), "shipping_days", array()), "html", null, true);
                    echo " werkdag(en)</div>
                            ";
                } else {
                    // line 107
                    echo "                                <div class=\"label label-info\">Levertijd 1-3 werkdag(en)</div>
                            ";
                }
                // line 109
                echo "                        ";
            } else {
                // line 110
                echo "                            <div class=\"label label-warning\">Niet op voorraad</div>
                        ";
            }
            // line 112
            echo "                    </div>

                    <!-- PRODUCT INFO -->
                    <div class=\"float-right product-details\">
                        <table class=\"product-id-table\">
                            <tr>
                                <th>EAN</th>
                                <td>";
            // line 119
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "ean", array()), "html", null, true);
            echo "</td>
                            </tr>
                            <tr>
                                <th>SKU</th>
                                <td>";
            // line 123
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "sku", array()), "html", null, true);
            echo "</td>
                            </tr>
                        </table>
                    </div>
                    <div class=\"float-clear\"></div>
                </div>

                <!-- PRODUCT PRICE -->
                <div class=\"col-md-2\">

                    ";
            // line 133
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "price_details", array())) {
                // line 134
                echo "                        <h3 class=\"price\">
                            &euro;&nbsp;";
                // line 135
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "price_details", array()), "piece_price", array()), "in", array()), 2, ",", "."), "html", null, true);
                echo "
                            ";
                // line 137
                echo "                            ";
                // line 138
                echo "                            ";
                // line 139
                echo "                        </h3>
                        <p class=\"float-clear\">
                            <small><em>Inclusief verzendkosten</em></small>
                        </p>
                        <div>
                            <a href=\"";
                // line 144
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["lang"] ?? null), "url", array()), "shopping_cart_add", array()) . twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "id", array())), "html", null, true);
                echo "/1\" class=\"btn btn-lg btn-block btn-primary order-link\">
                                <span class=\"glyphicon glyphicon-shopping-cart\">Bestellen</span>
                            </a>
                        </div>
                    ";
            }
            // line 149
            echo "
                </div>
            </div>

            ";
            // line 153
            echo ((twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "last", array())) ? ("<hr>") : (""));
            echo "

        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 156
            echo "            <div class=\"alert alert-info\">
                Geen producten beschikbaar
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        echo "    </div>

    <div class=\"pagination-block\">
    <p class=\"info\">
    ";
        // line 164
        echo twig_escape_filter($this->env, (($context["per_page"] ?? null) . " resultaten op deze pagina"), "html", null, true);
        echo "
    ";
        // line 165
        echo twig_escape_filter($this->env, (("van de " . ($context["total"] ?? null)) . " in totaal."), "html", null, true);
        echo "
    </p>

    <ul class=\"pagination\">
    <!-- SELECTED BRAND PARAMETER URL (ADD URL PARAMETERS BELOW -->
    ";
        // line 171
        echo "    ";
        // line 172
        echo "    ";
        // line 173
        echo "    ";
        // line 174
        echo "    ";
        // line 175
        echo "    ";
        // line 176
        echo "
    ";
        // line 178
        echo "    ";
        // line 179
        echo "    ";
        // line 180
        echo "    ";
        // line 181
        echo "    ";
        // line 182
        echo "    ";
        // line 183
        echo "
    <!-- PREVIOUS PAGE -->
    ";
        // line 185
        if (( !array_key_exists("current_page", $context) || (($context["current_page"] ?? null) < 2))) {
            // line 186
            echo "        <li class=\"disabled\"><span>Vorige</span></li>
    ";
        } else {
            // line 188
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, ((($context["query_string"] ?? null)) ? ((((($context["query_string"] ?? null) . "&page=") . ($context["current_page"] ?? null)) - 1)) : ((("?page=" . ($context["current_page"] ?? null)) - 1))), "html", null, true);
            echo "\" rel=\"previous\">Vorige</a></li>
    ";
        }
        // line 190
        echo "

    <!-- PAGES BEFORE CURRENT -->
    ";
        // line 193
        if ((($context["total_pages"] ?? null) == 1)) {
            // line 194
            echo "        <li class=\"";
            echo (((($context["current_page"] ?? null) == 1)) ? ("active") : (""));
            echo " disabled\"><a
        href=\"";
            // line 195
            echo twig_escape_filter($this->env, ((($context["query_string"] ?? null)) ? ((($context["query_string"] ?? null) . "&page=1")) : ("?page=1")), "html", null, true);
            echo "\">1</a></li>
    ";
        } else {
            // line 197
            echo "        <li class=\"";
            echo (((($context["current_page"] ?? null) == 1)) ? ("active") : (""));
            echo "\"><a
        href=\"";
            // line 198
            echo twig_escape_filter($this->env, ((($context["query_string"] ?? null)) ? ((($context["query_string"] ?? null) . "&page=1")) : ("?page=1")), "html", null, true);
            echo "\">1</a></li>
    ";
        }
        // line 200
        echo "
    ";
        // line 201
        if ((($context["current_page"] ?? null) > 1)) {
            // line 202
            echo "        ";
            if ((($context["current_page"] ?? null) > 3)) {
                // line 203
                echo "            <li class=\"disabled\"><span>...</span></li>
        ";
            }
            // line 205
            echo "
        ";
            // line 206
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(3, 1));
            foreach ($context['_seq'] as $context["_key"] => $context["count"]) {
                if (((($context["current_page"] ?? null) - $context["count"]) > 1)) {
                    // line 207
                    echo "            <li>
                <a href=\"";
                    // line 208
                    echo twig_escape_filter($this->env, ((($context["query_string"] ?? null)) ? (((($context["query_string"] ?? null) . "&page=") . (($context["current_page"] ?? null) - $context["count"]))) : (("?page=" . (($context["current_page"] ?? null) - $context["count"])))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (($context["current_page"] ?? null) - $context["count"]), "html", null, true);
                    echo "</a>
            </li>
        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['count'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 211
            echo "
        <!-- ACTIVE PAGE -->
        <li class=\"active\">
        <a href=\"";
            // line 214
            echo twig_escape_filter($this->env, ((($context["query_string"] ?? null)) ? (((($context["query_string"] ?? null) . "&page=") . ($context["current_page"] ?? null))) : (("?page=" . ($context["current_page"] ?? null)))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["current_page"] ?? null), "html", null, true);
            echo "</a>
        </li>

    ";
        }
        // line 218
        echo "
    ";
        // line 219
        if ((($context["current_page"] ?? null) < ($context["total_pages"] ?? null))) {
            // line 220
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range((($context["current_page"] ?? null) + 1), (($context["current_page"] ?? null) + 3)));
            foreach ($context['_seq'] as $context["_key"] => $context["count"]) {
                if (($context["count"] < ($context["total_pages"] ?? null))) {
                    // line 221
                    echo "            <li>
            <a href=\"";
                    // line 222
                    echo twig_escape_filter($this->env, ((($context["query_string"] ?? null)) ? (((($context["query_string"] ?? null) . "&page=") . $context["count"])) : (("?page=" . $context["count"]))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["count"], "html", null, true);
                    echo "</a>
            </li>
        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['count'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 225
            echo "    ";
        }
        // line 226
        echo "
    ";
        // line 227
        if ((($context["current_page"] ?? null) < (($context["total_pages"] ?? null) - 2))) {
            // line 228
            echo "        <li class=\"disabled\"><span>...</span></li>
    ";
        }
        // line 230
        echo "
    ";
        // line 231
        if (((($context["total_pages"] ?? null) > 1) && (($context["current_page"] ?? null) < ($context["total_pages"] ?? null)))) {
            // line 232
            echo "        <li class=\"";
            echo (((($context["current_page"] ?? null) == ($context["total_pages"] ?? null))) ? ("active") : (""));
            echo "\"><a
        href=\"";
            // line 233
            echo twig_escape_filter($this->env, ((($context["query_string"] ?? null)) ? (((($context["query_string"] ?? null) . "&page=") . ($context["total_pages"] ?? null))) : (("?page=" . ($context["total_pages"] ?? null)))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["total_pages"] ?? null), "html", null, true);
            echo "</a>
        </li>
    ";
        }
        // line 236
        echo "
    ";
        // line 237
        if ((($context["current_page"] ?? null) < ($context["total_pages"] ?? null))) {
            // line 238
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, ((($context["query_string"] ?? null)) ? (((($context["query_string"] ?? null) . "&page=") . ($context["current_page"] ?? null))) : (("?page=" . ($context["current_page"] ?? null)))), "html", null, true);
            echo "\" rel=\"next\">Volgende</a></li>
    ";
        } else {
            // line 240
            echo "        <li class=\"disabled\"><span>Volgende</span></li>
    ";
        }
        // line 242
        echo "
    </ul>
    </div>

";
    }

    public function getTemplateName()
    {
        return "products.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  556 => 242,  552 => 240,  546 => 238,  544 => 237,  541 => 236,  533 => 233,  528 => 232,  526 => 231,  523 => 230,  519 => 228,  517 => 227,  514 => 226,  511 => 225,  499 => 222,  496 => 221,  490 => 220,  488 => 219,  485 => 218,  476 => 214,  471 => 211,  459 => 208,  456 => 207,  451 => 206,  448 => 205,  444 => 203,  441 => 202,  439 => 201,  436 => 200,  431 => 198,  426 => 197,  421 => 195,  416 => 194,  414 => 193,  409 => 190,  403 => 188,  399 => 186,  397 => 185,  393 => 183,  391 => 182,  389 => 181,  387 => 180,  385 => 179,  383 => 178,  380 => 176,  378 => 175,  376 => 174,  374 => 173,  372 => 172,  370 => 171,  362 => 165,  358 => 164,  352 => 160,  343 => 156,  327 => 153,  321 => 149,  313 => 144,  306 => 139,  304 => 138,  302 => 137,  298 => 135,  295 => 134,  293 => 133,  280 => 123,  273 => 119,  264 => 112,  260 => 110,  257 => 109,  253 => 107,  247 => 105,  245 => 104,  242 => 103,  238 => 101,  234 => 99,  232 => 98,  229 => 97,  227 => 96,  220 => 92,  212 => 89,  203 => 83,  198 => 80,  180 => 79,  165 => 67,  158 => 62,  155 => 61,  136 => 59,  118 => 58,  116 => 57,  92 => 36,  81 => 27,  71 => 23,  65 => 22,  60 => 20,  57 => 19,  53 => 18,  45 => 13,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "products.html.twig", "C:\\Users\\Furat\\PhpstormProjects\\webshop-frontend\\templates\\products.html.twig");
    }
}
