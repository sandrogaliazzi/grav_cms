<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/base.html.twig */
class __TwigTemplate_82c23c55dd7564f78f01149e88e110c3cc993eb25e0a2bf7b064881b57696736 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body_classes' => [$this, 'block_body_classes'],
            'header' => [$this, 'block_header'],
            'header_navigation' => [$this, 'block_header_navigation'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'bottom' => [$this, 'block_bottom'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "site", []), "default_lang", [])));
        echo "\">
    <head>
        ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 46
        echo "    </head>
    <body id=\"top\" class=\"";
        // line 47
        $this->displayBlock('body_classes', $context, $blocks);
        echo "\">
        <!-- header ================================================== -->
        ";
        // line 49
        $this->displayBlock('header', $context, $blocks);
        // line 79
        echo "        <!-- end s-header -->

        ";
        // line 81
        $this->displayBlock('body', $context, $blocks);
        // line 84
        echo "
        ";
        // line 85
        $this->displayBlock('footer', $context, $blocks);
        // line 88
        echo "
        ";
        // line 89
        $this->displayBlock('bottom', $context, $blocks);
        // line 92
        echo "
    </body>
";
    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        // line 5
        echo "            <meta charset=\"utf-8\"/>
            <title>
                ";
        // line 7
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", []), "html");
            echo "
                    |
                ";
        }
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html");
        echo "</title>

            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
            ";
        // line 13
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 13)->display($context);
        // line 14
        echo "
            <link rel=\"shortcut icon\" href=\"";
        // line 15
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon.ico");
        echo "\" type=\"image/x-icon\">
            <link rel=\"icon\" href=\"";
        // line 16
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon.ico");
        echo "\" type=\"image/x-icon\">
            <link rel=\"canonical\" href=\"";
        // line 17
        echo $this->getAttribute(($context["page"] ?? null), "url", [0 => true, 1 => true], "method");
        echo "\"/>

            ";
        // line 19
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 29
        echo "            ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "

            ";
        // line 31
        $this->displayBlock('javascripts', $context, $blocks);
        // line 43
        echo "            ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "

        ";
    }

    // line 19
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 20
        echo "                ";
        $this->getAttribute(        // line 21
($context["assets"] ?? null), "addCss", [0 => "theme://css/base.css"], "method");
        // line 22
        echo "                ";
        $this->getAttribute(        // line 23
($context["assets"] ?? null), "addCss", [0 => "theme://css/vendor.css"], "method");
        // line 24
        echo "                ";
        $this->getAttribute(        // line 25
($context["assets"] ?? null), "addCss", [0 => "theme://css/main.css"], "method");
        // line 26
        echo "                ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/font-awesome.min.css"], "method");
        // line 27
        echo "
            ";
    }

    // line 31
    public function block_javascripts($context, array $blocks = [])
    {
        // line 32
        echo "                ";
        $this->getAttribute(        // line 33
($context["assets"] ?? null), "addJs", [0 => "theme://js/modernizr.js"], "method");
        // line 34
        echo "                ";
        $this->getAttribute(        // line 35
($context["assets"] ?? null), "addJs", [0 => "theme://js/pace.min.js"], "method");
        // line 36
        echo "                ";
        $this->getAttribute(        // line 37
($context["assets"] ?? null), "addJs", [0 => "jquery", 1 => 101, 2 => ["group" => "bottom"]], "method");
        // line 38
        echo "                ";
        $this->getAttribute(        // line 39
($context["assets"] ?? null), "addJs", [0 => "theme://js/plugins.js", 1 => ["group" => "bottom"]], "method");
        // line 40
        echo "                ";
        $this->getAttribute(        // line 41
($context["assets"] ?? null), "addJs", [0 => "theme://js/main.js", 1 => ["group" => "bottom"]], "method");
        // line 42
        echo "            ";
    }

    // line 47
    public function block_body_classes($context, array $blocks = [])
    {
        echo ($context["body_classes"] ?? null);
    }

    // line 49
    public function block_header($context, array $blocks = [])
    {
        // line 50
        echo "            <header class=\"s-header\">
                <div class=\"header-logo\">
                    <a class=\"footer-site-logo\" href=\"";
        // line 52
        echo ($context["base_url_relative"] ?? null);
        echo "\">
                        ";
        // line 53
        $this->loadTemplate("partials/logo.html.twig", "partials/base.html.twig", 53)->display($context);
        // line 54
        echo "                    </a>
                </div>
                <nav class=\"header-nav-wrap\">

                    ";
        // line 58
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 61
        echo "
                    ";
        // line 62
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "login", []), "enabled", []) && $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", []), "username", []))) {
            // line 63
            echo "                        <span class=\"login-status-wrapper\">
                            <i class=\"fa fa-user\"></i>
                            ";
            // line 65
            $this->loadTemplate("partials/login-status.html.twig", "partials/base.html.twig", 65)->display($context);
            echo "</span>
                    ";
        }
        // line 67
        echo "                </nav>
                <a class=\"header-menu-toggle\" href=\"#0\">
                    <span>Menu</span></a>
            </header>
            <div class=\"mobile-menu\">
                <div class=\"button_container\" id=\"toggle\">
                    <span class=\"top\"></span>
                    <span class=\"middle\"></span>
                    <span class=\"bottom\"></span>
                </div>
            </div>
        ";
    }

    // line 58
    public function block_header_navigation($context, array $blocks = [])
    {
        // line 59
        echo "                        ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 59)->display($context);
        // line 60
        echo "                    ";
    }

    // line 81
    public function block_body($context, array $blocks = [])
    {
        // line 82
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 83
        echo "        ";
    }

    // line 82
    public function block_content($context, array $blocks = [])
    {
    }

    // line 85
    public function block_footer($context, array $blocks = [])
    {
        // line 86
        echo "            ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 86)->display($context);
        // line 87
        echo "        ";
    }

    // line 89
    public function block_bottom($context, array $blocks = [])
    {
        // line 90
        echo "            ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 90,  280 => 89,  276 => 87,  273 => 86,  270 => 85,  265 => 82,  261 => 83,  258 => 82,  255 => 81,  251 => 60,  248 => 59,  245 => 58,  230 => 67,  225 => 65,  221 => 63,  219 => 62,  216 => 61,  214 => 58,  208 => 54,  206 => 53,  202 => 52,  198 => 50,  195 => 49,  189 => 47,  185 => 42,  183 => 41,  181 => 40,  179 => 39,  177 => 38,  175 => 37,  173 => 36,  171 => 35,  169 => 34,  167 => 33,  165 => 32,  162 => 31,  157 => 27,  154 => 26,  152 => 25,  150 => 24,  148 => 23,  146 => 22,  144 => 21,  142 => 20,  139 => 19,  131 => 43,  129 => 31,  123 => 29,  121 => 19,  116 => 17,  112 => 16,  108 => 15,  105 => 14,  103 => 13,  96 => 9,  89 => 7,  85 => 5,  82 => 4,  76 => 92,  74 => 89,  71 => 88,  69 => 85,  66 => 84,  64 => 81,  60 => 79,  58 => 49,  53 => 47,  50 => 46,  48 => 4,  43 => 2,  40 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "partials/base.html.twig", "C:\\Users\\admin\\Desktop\\hola\\user\\themes\\hola\\templates\\partials\\base.html.twig");
    }
}
