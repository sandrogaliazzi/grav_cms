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

/* partials/footer.html.twig */
class __TwigTemplate_426e190b5fd898349d5d6d0166c2359b55cbce0d42423d235692b0f9ac92df64 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<footer>
    <div class=\"row\">
        <div class=\"col-full\">

            <div class=\"footer-logo\">
                <a class=\"footer-site-logo\" href=\"";
        // line 6
        echo ($context["base_url_relative"] ?? null);
        echo "\">";
        $this->loadTemplate("partials/logo.html.twig", "partials/footer.html.twig", 6)->display($context);
        echo "</a>
            </div>

            
        </div>
    </div>

    <div class=\"row footer-bottom\">

        <div class=\"col-twelve\">
            <div class=\"copyright\">
                <span>";
        // line 17
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("footer-text");
        echo "</span>
                <span>";
        // line 18
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("footer-design");
        echo "</span>
                <span>";
        // line 19
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("footer-additional-text");
        echo "</span>
            </div>

            <div class=\"go-top\">
                <a class=\"smoothscroll\" title=\"Back to Top\" href=\"#top\">
                    <i class=\"fa fa-long-arrow-up\" aria-hidden=\"true\"></i>
                </a>
            </div>
        </div>

    </div> <!-- end footer-bottom -->

    <!-- Please leave this as a credit.It's not visible. Thank you. -->
    <a href=\"https://devlom.com\" style=\"display: none;\">Grav CMS Development by Devlom</a>
</footer>";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 19,  57 => 18,  53 => 17,  37 => 6,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "partials/footer.html.twig", "C:\\Users\\admin\\Desktop\\hola\\user\\themes\\hola\\templates\\partials\\footer.html.twig");
    }
}
