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

/* modular/basic.html.twig */
class __TwigTemplate_3e4824391adddc4de0077130889cdc47a736f48f0c6e2dfbd0e181507b98aa09 extends \Twig\Template
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
        echo "<section id=\"";
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "redirect", [])) {
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "redirect", []);
        } else {
            echo twig_lower_filter($this->env, $this->getAttribute(($context["page"] ?? null), "menu", []));
        }
        echo "\"
         class=\"s-basic ";
        // line 2
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "sectionBackground", []);
        echo " target-section\">
    <div class=\"row narrow section-intro has-bottom-sep\">
        <div class=\"col-full text-center\">
            <h3>";
        // line 5
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "smallTitle", []);
        echo "</h3>
            <h1>";
        // line 6
        echo $this->getAttribute(($context["page"] ?? null), "title", []);
        echo "</h1>
            <p class=\"lead\">";
        // line 7
        echo strip_tags($this->getAttribute(($context["page"] ?? null), "content", []));
        echo "</p>
        </div>
    </div>
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "row", []));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 11
            echo "
        ";
            // line 12
            if ($this->getAttribute($context["column"], "secondColumnContent", [])) {
                // line 13
                echo "            <div class=\"row basic-content\">
                <div class=\"col-six tab-full left\">
                    <h3>";
                // line 15
                echo $this->getAttribute($context["column"], "firstColumnTitle", []);
                echo "</h3>

                    <p class=\"lead\">";
                // line 17
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($context, $this->getAttribute($context["column"], "firstColumnContent", []));
                echo "
                    </p>
                </div>

                <div class=\"col-six tab-full right\">
                    <h3>";
                // line 22
                echo $this->getAttribute($context["column"], "secondColumnTitle", []);
                echo "</h3>

                    <p class=\"lead\">";
                // line 24
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($context, $this->getAttribute($context["column"], "secondColumnContent", []));
                echo "
                    </p>
                </div>
            </div>
        ";
            } else {
                // line 29
                echo "            <div class=\"row basic-content one-column\">
                <div class=\"col-eight tab-full\">
                    <h3>";
                // line 31
                echo $this->getAttribute($context["column"], "firstColumnTitle", []);
                echo "</h3>

                    <p class=\"lead\">";
                // line 33
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($context, $this->getAttribute($context["column"], "firstColumnContent", []));
                echo "
                    </p>
                </div>
            </div>
        ";
            }
            // line 38
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "
    <!-- end basic-content -->

</section>
<!-- end basic -->";
    }

    public function getTemplateName()
    {
        return "modular/basic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 40,  115 => 38,  107 => 33,  102 => 31,  98 => 29,  90 => 24,  85 => 22,  77 => 17,  72 => 15,  68 => 13,  66 => 12,  63 => 11,  59 => 10,  53 => 7,  49 => 6,  45 => 5,  39 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modular/basic.html.twig", "C:\\Users\\admin\\Desktop\\hola\\user\\themes\\hola\\templates\\modular\\basic.html.twig");
    }
}
