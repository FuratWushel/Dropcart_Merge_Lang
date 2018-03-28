<?php

/* contact.html.twig */
class __TwigTemplate_4885fc2d9bb04e2c9f24697cb65d3284e6651aaf00b996c53d3d459d870ec3e8 extends Twig_Template
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
        echo "<table class=\"table table-responsive\">
    <tr>
        <th>";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["lang"] ?? null), "page_contact", array()), "emailaddress_desc", array()), "html", null, true);
        echo "</th>
        <td>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["lang"] ?? null), "page_contact", array()), "emailaddress", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <th>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["lang"] ?? null), "page_contact", array()), "phone_desc", array()), "html", null, true);
        echo "</th>
        <td>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["lang"] ?? null), "page_contact", array()), "phone", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <th>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["lang"] ?? null), "page_contact", array()), "address_desc", array()), "html", null, true);
        echo "</th>
        <td>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["lang"] ?? null), "page_contact", array()), "address", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <th>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["lang"] ?? null), "page_contact", array()), "vat_desc", array()), "html", null, true);
        echo " </th>
        <td>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["lang"] ?? null), "page_contact", array()), "vat", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <th>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["lang"] ?? null), "page_contact", array()), "coc_desc", array()), "html", null, true);
        echo "</th>
        <td>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["lang"] ?? null), "page_contact", array()), "coc", array()), "html", null, true);
        echo "</td>
    </tr>
</table>
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
        return array (  79 => 23,  75 => 22,  69 => 19,  65 => 18,  59 => 15,  55 => 14,  49 => 11,  45 => 10,  39 => 7,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "contact.html.twig", "C:\\Users\\Furat\\PhpstormProjects\\webshop-frontend\\templates\\contact.html.twig");
    }
}
