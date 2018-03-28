<?php

/* layouts/layout.html.twig */
class __TwigTemplate_178f5bed9098161e051d0c871b0cf957aa8c44123d9e753b0129f10fffdcb604 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'pre_js' => array($this, 'block_pre_js'),
            'content' => array($this, 'block_content'),
            'post_js' => array($this, 'block_post_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <link rel=\"shortcut icon\" type=\"image/png\" href=\"/public/images/inktweb_favicon.png\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"robots\" content=\"index,follow\">

    <title>
        ";
        // line 11
        if (array_key_exists("page_title", $context)) {
            // line 12
            echo "            ";
            echo twig_escape_filter($this->env, ($context["page_title"] ?? null), "html", null, true);
            echo " -
        ";
        } elseif (        // line 13
array_key_exists("title", $context)) {
            // line 14
            echo "            ";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo " -
        ";
        }
        // line 16
        echo "
        ";
        // line 17
        if (array_key_exists("site_name", $context)) {
            // line 18
            echo "            ";
            echo twig_escape_filter($this->env, ($context["site_name"] ?? null), "html", null, true);
            echo "
        ";
        } else {
            // line 20
            echo "            Een Dropcart webshop
        ";
        }
        // line 22
        echo "    </title>

    <!-- STYLES -->
    ";
        // line 25
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 28
        echo "
    <!-- PRE JS SCRIPTS -->
    ";
        // line 30
        $this->displayBlock('pre_js', $context, $blocks);
        // line 33
        echo "</head>

<body>

<div class=\"colorgraph\"></div>

<!-- CONTAINER -->
<div class=\"container\">

    <!-- Include header.html.twig -->
    ";
        // line 43
        $this->loadTemplate("layouts/header.html.twig", "layouts/layout.html.twig", 43)->display($context);
        // line 44
        echo "
    <!-- Content block -->
    ";
        // line 46
        $this->displayBlock('content', $context, $blocks);
        // line 48
        echo "
    ";
        // line 49
        $this->loadTemplate("layouts/footer.html.twig", "layouts/layout.html.twig", 49)->display($context);
        // line 50
        echo "
</div>
<!-- / CONTAINER -->

<!-- POST JS SCRIPTS -->
";
        // line 55
        $this->displayBlock('post_js', $context, $blocks);
        // line 58
        echo "
</body>
</html>";
    }

    // line 25
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 26
        echo "        ";
        $this->loadTemplate("dynamic/styles.html.twig", "layouts/layout.html.twig", 26)->display($context);
        // line 27
        echo "    ";
    }

    // line 30
    public function block_pre_js($context, array $blocks = array())
    {
        // line 31
        echo "        ";
        $this->loadTemplate("dynamic/pre_js.html.twig", "layouts/layout.html.twig", 31)->display($context);
        // line 32
        echo "    ";
    }

    // line 46
    public function block_content($context, array $blocks = array())
    {
        // line 47
        echo "    ";
    }

    // line 55
    public function block_post_js($context, array $blocks = array())
    {
        // line 56
        echo "    ";
        $this->loadTemplate("dynamic/post_js.html.twig", "layouts/layout.html.twig", 56)->display($context);
    }

    public function getTemplateName()
    {
        return "layouts/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 56,  145 => 55,  141 => 47,  138 => 46,  134 => 32,  131 => 31,  128 => 30,  124 => 27,  121 => 26,  118 => 25,  112 => 58,  110 => 55,  103 => 50,  101 => 49,  98 => 48,  96 => 46,  92 => 44,  90 => 43,  78 => 33,  76 => 30,  72 => 28,  70 => 25,  65 => 22,  61 => 20,  55 => 18,  53 => 17,  50 => 16,  44 => 14,  42 => 13,  37 => 12,  35 => 11,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layouts/layout.html.twig", "C:\\Users\\Furat\\PhpstormProjects\\webshop-frontend\\templates\\layouts\\layout.html.twig");
    }
}
