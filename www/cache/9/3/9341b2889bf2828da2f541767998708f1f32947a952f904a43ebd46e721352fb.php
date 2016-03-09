<?php

/* content/install.twig */
class __TwigTemplate_9341b2889bf2828da2f541767998708f1f32947a952f904a43ebd46e721352fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base.twig", "content/install.twig", 1);
        $this->blocks = array(
            'header_css' => array($this, 'block_header_css'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
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

    // line 3
    public function block_header_css($context, array $blocks = array())
    {
        // line 4
        echo "    <link href=\"web/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"web/css/style.css\" rel=\"stylesheet\">
";
    }

    // line 8
    public function block_header($context, array $blocks = array())
    {
        // line 9
        echo "    <div class=\"hero-unit\">
        <div class=\"container\">
            <h1>Zilex</h1>
            <h3>Z Framework Silex implementation</h3>
            <p>Z is an HTML Framework that offers convention, methods and facilities for
                fastest HTML integration.</p>
        </div>
    </div>
";
    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
        // line 20
        echo "    <div class=\"container\">
        <h1>Presentation</h1>
        <p>
            Zilex is a <a href=\"http://www.yterium.net/108\">Z Framework</a> Silex implementation. It deploy the power of Silex with the simplicity of Z Framework. Now templates use <a href=\"http://twig.sensiolabs.org/\">Twig</a>, so blocks/layouts management are easier than ever.
        </p>

        <h1>Installation</h1>
        <p>
            If you see this page, that's you already managed to install this little HTML Framework.
        </p>
        <ol>
            <li>
                Be sure to run your PHP server (WAMP, LAMP, XAMPP).
            </li>
        </ol>

        <h1>Configuration</h1>
        <ol>
            <li>
                First, if you want to <trong>activate the DEBUG environment</strong>, go to <code>index.php</code> and change the environment around the line 8 to :
\t\t\t<pre>
\$app['debug'] = true;</pre>
            </li>
            <li>
                <strong>Change the default page</strong> in <code>index.php</code>.
\t\t\t<pre>
\$app['zilex.index'] = 'defaultpagehere',</pre>
            </li>
            <li>
                <strong>Modify the base layout</strong> in <code>views/layout/base.twig</code>. You can create all the blocks you want.
            </li>
            <li>
                Now you can play with your blocks and files in <code>views/</code>.
            </li>
        </ol>
        <h1>Usage</h1>
        <ol>
            <li>
                A page exists if and only if a .twig with the same name exists in <code>views/content/</code>.
            </li>
            <li>
                Access page named 'mypage' with <code>http://localhost/mypage</code>.
            </li>
            <li>
                Extend the layout you want by changing the first line of the content twig file.
                <pre>
";
        // line 66
        echo "{% extends \"layout/morelayout.twig\" %}";
        echo "</pre>
            </li>
        </ol>
    </div>
";
    }

    // line 72
    public function block_footer($context, array $blocks = array())
    {
        // line 73
        echo "    <div style=\"margin: 20px 0\">
        <div class=\"container\">
            <hr />
            <p>
                Ziled is developed by <a href=\"http://www.ludovicmeyer.com\">Ludovic Meyer</a> from <a href=\"http://www.pixel-cookers.com\">Pixel Cookers</a>. If you want to <a href=\"http://www.pixel-cookers.com/contact\">contact us</a> feel free to use the contact form on our website.
            </p>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "content/install.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 73,  115 => 72,  106 => 66,  58 => 20,  55 => 19,  43 => 9,  40 => 8,  34 => 4,  31 => 3,  11 => 1,);
    }
}
