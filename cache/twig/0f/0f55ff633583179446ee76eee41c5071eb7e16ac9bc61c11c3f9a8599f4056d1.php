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

/* partials/logo.html.twig */
class __TwigTemplate_8738091c0decf8681a4eeaaa7e1d6f04774ea1833d050d6fa897ee154166ddec extends \Twig\Template
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
        $context["logo"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("custom_logo");
        // line 2
        if (($context["logo"] ?? null)) {
            // line 3
            echo "    ";
            $context["logo_file"] = $this->getAttribute(twig_first($this->env, ($context["logo"] ?? null)), "name", []);
            // line 4
            echo "    <img src=\"";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc(("theme://images/logo/" . ($context["logo_file"] ?? null)));
            echo "\" alt=\"";
            echo ($context["logo_file"] ?? null);
            echo "\"/>
";
        } else {
            // line 6
            echo "    ";
            $this->loadTemplate("@images/logo.png", "partials/logo.html.twig", 6)->display($context);
        }
    }

    public function getTemplateName()
    {
        return "partials/logo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 6,  37 => 4,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "partials/logo.html.twig", "C:\\Users\\admin\\Desktop\\hola\\user\\themes\\hola\\templates\\partials\\logo.html.twig");
    }
}
