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

/* modular/about.html.twig */
class __TwigTemplate_12ed823c49fe1f595561a77771cf41b04b380321ca83192977056cb37820c46f extends \Twig\Template
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
         class=\"s-about ";
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

    <div class=\"row about-content\">

        <div class=\"col-six tab-full left\">
            <h3>";
        // line 14
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "bioTitle", []);
        echo "</h3>

            <p class=\"lead\">";
        // line 16
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($context, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "bioDescription", []));
        echo "
            </p>
        </div>

        <div class=\"col-six tab-full right\">
            <h3>";
        // line 21
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "skillsTitle", []);
        echo "</h3>

            <ul class=\"skill-bars\">
                ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "skills", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 25
            echo "
                    <li>
                        <div class=\"progress\" style=\"width: ";
            // line 27
            echo $this->getAttribute($context["item"], "percentValue", []);
            echo "\">
                            <span>";
            // line 28
            echo $this->getAttribute($context["item"], "percentValue", []);
            echo "</span>
                        </div>
                        <strong>";
            // line 30
            echo $this->getAttribute($context["item"], "skillName", []);
            echo "</strong>
                    </li>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "            </ul>
        </div>

    </div>
    <!-- end about-content -->

    <div class=\"row about-content about-content--buttons\">

        <div class=\"col-six tab-full left\">
            <a href=\"";
        // line 43
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "button1Link", []);
        echo "\" class=\"btn btn--primary full-width\">";
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "button1Text", []);
        echo "</a>
        </div>
        <div class=\"col-six tab-full right\">
            <a href=\"";
        // line 46
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "button2Link", []);
        echo "\" class=\"btn full-width\">";
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "button2Text", []);
        echo "</a>
        </div>

    </div>
    <!-- end about-content buttons -->

</section>
<!-- end about -->";
    }

    public function getTemplateName()
    {
        return "modular/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 46,  120 => 43,  109 => 34,  99 => 30,  94 => 28,  90 => 27,  86 => 25,  82 => 24,  76 => 21,  68 => 16,  63 => 14,  53 => 7,  49 => 6,  45 => 5,  39 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modular/about.html.twig", "C:\\Users\\admin\\Desktop\\hola\\user\\themes\\hola\\templates\\modular\\about.html.twig");
    }
}
