<?php

/* content/index.twig */
class __TwigTemplate_73a453b545c95bad26ef15c7389e50ce26c7ec9e0430b44166884d374adb6555 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base.twig", "content/index.twig", 1);
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
        echo "\t<div class=\"home-inner\">
\t\t<img src=\"web/assets/img/best_western.png\" alt=\"\" class=\"logo\">
\t\t<a href=\"#help-carousel\" rel=\"modal:open\"><img src=\"web/assets/img/mark.png\" class=\"mark-help\" alt=\"\"></a>
\t\t<div class=\"vertical-centered\">
\t\t\t<h1>Que souhaitez-vous afficher ?</h1>
\t\t\t<div class=\"\">
\t\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t<a href=\"\" class=\"action\">
\t\t\t\t\t\t<img src=\"web/assets/img/check.png\" alt=\"check\">
\t\t\t\t\t\t<p>Réserver</p>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t<a href=\"/car\" class=\"action\">
\t\t\t\t\t\t<img src=\"web/assets/img/car.png\" alt=\"\">
\t\t\t\t\t\t<p>Transport</p>
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"\">
\t\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t<a href=\"\" class=\"action\">
\t\t\t\t\t\t<img src=\"web/assets/img/house.png\" alt=\"\">
\t\t\t\t\t\t<p>Domotique</p>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t<a href=\"\" class=\"action\">
\t\t\t\t\t\t<img src=\"web/assets/img/tourism.png\" alt=\"\">
\t\t\t\t\t\t<p>Tourisme</p>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div id=\"help-carousel\" class=\"modal\">
  \t\t<div class=\"owl-carousel\">
\t\t  <div class=\"check-slide slide\">
\t\t  \t\t<div class=\"rectangle animated fadeIn\">
\t\t\t\t\t<img src=\"web/assets/img/check.png\" alt=\"check\">
\t\t\t\t\t<h2>Check-in</h2>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit suscipit.</p>
\t\t  \t\t</div>
\t\t  </div>
\t\t  <div class=\"car-slide slide\">
\t\t  \t\t<div class=\"rectangle\">
\t\t\t\t\t<img src=\"web/assets/img/car.png\" alt=\"check\">
\t\t\t\t\t<h2>Transport</h2>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit suscipit.</p>
\t\t  \t\t</div>
\t\t  </div>
\t\t  <div class=\"room-slide slide\">
\t\t  \t\t<div class=\"rectangle animated fadeIn\">
\t\t\t\t\t<img src=\"web/assets/img/house.png\" alt=\"check\">
\t\t\t\t\t<h2>Domotique</h2>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit suscipit.</p>
\t\t  \t\t</div>
\t\t  </div>
\t\t  <div class=\"tourism-slide slide\">
\t\t  \t\t<div class=\"rectangle\">
\t\t\t\t\t<img src=\"web/assets/img/tourism.png\" alt=\"check\">
\t\t\t\t\t<h2>Tourisme</h2>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit suscipit.</p>
\t\t  \t\t</div>
\t\t  </div>
\t\t</div>
  \t</div>
";
    }

    public function getTemplateName()
    {
        return "content/index.twig";
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
