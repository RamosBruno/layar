<?php

/* content/car.twig */
class __TwigTemplate_07eb2a20a3075260b115f0362be4a32f7119373fd4079d7cd39588115ac50210 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base.twig", "content/car.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/base.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "\t<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2626.9641394012724!2d2.3875456151876615!3d48.84917010931067!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sfr!4v1457516707966\" width=\"100%\" height=\"100%\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
\t<div class=\"cta-container\">
\t\t<div class=\"cta-inner\">
\t\t\t<a href=\"#\" class=\"cta-btn\">Commander</a>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "content/car.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,  11 => 1,);
    }
}
