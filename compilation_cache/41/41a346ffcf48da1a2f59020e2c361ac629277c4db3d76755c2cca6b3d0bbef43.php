<?php

/* blocks/pages_menu.html.twig */
class __TwigTemplate_9977041fe369d684a75124917ff9e139e55ab4f619d1e5eb204d86550a66b8a2 extends Twig_Template
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
        echo "<nav class=\"float-right\">
    <ul class=\"nav nav-pills\">
        <li><a href=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["lang"] ?? null), "url", array()), "contact", array()), "html", null, true);
        echo "\">Contact</a></li>
        <li><a href=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["lang"] ?? null), "url", array()), "about_us", array()), "html", null, true);
        echo "\">Over ons</a></li>
        <li><a href=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["lang"] ?? null), "url", array()), "support", array()), "html", null, true);
        echo "\">Support en FAQ</a></li>
        <!--<li><a href=\"<?= route('account', ['locale' => loc()]); ?>\"></a></li>-->
    </ul>
</nav>";
    }

    public function getTemplateName()
    {
        return "blocks/pages_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "blocks/pages_menu.html.twig", "C:\\Users\\Furat\\PhpstormProjects\\webshop-frontend\\templates\\blocks\\pages_menu.html.twig");
    }
}
