<?php

/* dynamic/pre_js.html.twig */
class __TwigTemplate_f88569e786e528ab081fcbd9c740b81403220a297444b76dbe227b2ff3a87bca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'pre_js' => array($this, 'block_pre_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('pre_js', $context, $blocks);
    }

    public function block_pre_js($context, array $blocks = array())
    {
        // line 2
        echo "    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
";
    }

    public function getTemplateName()
    {
        return "dynamic/pre_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  20 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "dynamic/pre_js.html.twig", "C:\\Users\\Furat\\PhpstormProjects\\webshop-frontend\\templates\\dynamic\\pre_js.html.twig");
    }
}
