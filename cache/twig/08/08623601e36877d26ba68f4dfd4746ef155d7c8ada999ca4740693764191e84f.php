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

/* error.html.twig */
class __TwigTemplate_7f9bcacc2458bbf0bedea69dbf06e061cafd94378804d9caf15efe21214d090e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/base.html.twig", "error.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "    <section class=\"small-page-header page-hero\" style=\"background-image:url(";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/error.jpg");
        echo "\">
        <div class=\"row page-header__content narrow text-center\">
            <h1 class=\"page-header__title\">
                ";
        // line 7
        echo $this->getAttribute(($context["page"] ?? null), "title", []);
        echo "
            </h1>
        </div>
    </section>

    <section id=\"error\" class=\"s-error\">
        <div class=\"row narrow section-intro has-bottom-sep\">
            <div class=\"col-full text-center\">
                <div>
                    <h1>  ";
        // line 16
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "ERROR");
        echo "
                        ";
        // line 17
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "http_response_code", []);
        echo ":</h1>
                    <p>
                        ";
        // line 19
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
                    </p>
                </div>
            </div>
        </div>
    </section>
";
    }

    public function getTemplateName()
    {
        return "error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 19,  65 => 17,  61 => 16,  49 => 7,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "error.html.twig", "C:\\Users\\admin\\Desktop\\hola\\user\\themes\\hola\\templates\\error.html.twig");
    }
}
