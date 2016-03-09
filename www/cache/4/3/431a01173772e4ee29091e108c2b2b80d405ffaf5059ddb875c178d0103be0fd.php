<?php

/* layout/base.twig */
class __TwigTemplate_431a01173772e4ee29091e108c2b2b80d405ffaf5059ddb875c178d0103be0fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header_css' => array($this, 'block_header_css'),
            'header_js' => array($this, 'block_header_js'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'footer_js' => array($this, 'block_footer_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <link rel=\"shortcut icon\" href=\"web/favicon.ico\">
    <meta name=\"viewport\" content=\"width=device-width\">
    <link rel=\"stylesheet\" href=\"bower_components/owl.carousel/dist/assets/owl.carousel.min.css\">
    <link rel=\"stylesheet\" href=\"bower_components/owl.carousel/dist/assets/owl.theme.default.min.css\">
    <link rel=\"stylesheet\" href=\"bower_components/jquery-modal/jquery.modal.css\">
    <link rel=\"stylesheet\" href=\"bower_components/animate.css/animate.min.css\">
    <link rel=\"stylesheet\" href=\"web/assets/styles/main.css\">

    <title>";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 15
        $this->displayBlock('header_css', $context, $blocks);
        // line 16
        echo "
    ";
        // line 17
        $this->displayBlock('header_js', $context, $blocks);
        // line 18
        echo "    <!--[if lt IE 9]>
    <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->
</head>
<body class=\"page_";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["pageName"]) ? $context["pageName"] : $this->getContext($context, "pageName")), "html", null, true);
        echo "\">
    ";
        // line 23
        $this->displayBlock('header', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
        // line 25
        echo "    ";
        $this->displayBlock('footer', $context, $blocks);
        // line 26
        echo "    ";
        $this->displayBlock('footer_js', $context, $blocks);
        // line 27
        echo "    <script src=\"web/assets/scripts/vendors.js\"></script>
    <script src=\"web/assets/scripts/main.js\"></script>
</body>
</html>
";
    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        echo "Best Western AR";
    }

    // line 15
    public function block_header_css($context, array $blocks = array())
    {
    }

    // line 17
    public function block_header_js($context, array $blocks = array())
    {
    }

    // line 23
    public function block_header($context, array $blocks = array())
    {
    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
    }

    // line 25
    public function block_footer($context, array $blocks = array())
    {
    }

    // line 26
    public function block_footer_js($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout/base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 26,  107 => 25,  102 => 24,  97 => 23,  92 => 17,  87 => 15,  81 => 13,  73 => 27,  70 => 26,  67 => 25,  64 => 24,  62 => 23,  58 => 22,  52 => 18,  50 => 17,  47 => 16,  45 => 15,  40 => 13,  26 => 1,);
    }
}
