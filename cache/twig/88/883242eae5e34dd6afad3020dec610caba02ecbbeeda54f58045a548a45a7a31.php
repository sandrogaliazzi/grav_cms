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

/* modular/home.html.twig */
class __TwigTemplate_51ee447ca9386f67e8d3a5a9d6e35190f66a98ffca7bba8c2e1ebcd88786d58d extends \Twig\Template
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
         class=\"s-home page-hero target-section\" data-parallax=\"scroll\" data-image-src=\"";
        // line 2
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "background", []), [], "array"), "url", [], "method");
        echo "\"
         data-natural-width=\"3000\" data-natural-height=\"2000\" data-position-y=\"center\">

    <div class=\"overlay\" style=\"opacity:";
        // line 5
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "bannerOpacity", []);
        echo ";\"></div>
    <div class=\"shadow-overlay\"></div>

    <div class=\"home-content\">

        <div class=\"row home-content__main\">

            <h3>";
        // line 12
        echo $this->getAttribute(($context["page"] ?? null), "title", []);
        echo "</h3>

            <h1>
                ";
        // line 15
        echo ($context["content"] ?? null);
        echo "
            </h1>

            <div class=\"home-content__buttons\">
                ";
        // line 19
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "button1Text", [])) {
            // line 20
            echo "                    <a href=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "button1Link", []);
            echo "\" class=\"smoothscroll btn btn--stroke\">
                        ";
            // line 21
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "button1Text", []);
            echo "
                    </a>
                ";
        }
        // line 24
        echo "                ";
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "button2Text", [])) {
            // line 25
            echo "                    <a href=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "button2Link", []);
            echo "\" class=\"smoothscroll btn btn--stroke\">
                        ";
            // line 26
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "button2Text", []);
            echo "
                    </a>
                ";
        }
        // line 29
        echo "            </div>

            <div class=\"home-content__scroll\">
                <a href=\"";
        // line 32
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "button3Link", []);
        echo "\" class=\"scroll-link smoothscroll\">
                    <span>";
        // line 33
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "button3Text", []);
        echo "</span>
                </a>
            </div>

        </div>

    </div> <!-- end home-content -->
    ";
        // line 40
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "social", [])) {
            // line 41
            echo "        <ul class=\"home-social\">
            ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "social", []));
            foreach ($context['_seq'] as $context["_key"] => $context["icon"]) {
                // line 43
                echo "                <li>
                    <a href=\"";
                // line 44
                echo $this->getAttribute($context["icon"], "socialIconLink", []);
                echo "\">
                        <i class=\"";
                // line 45
                echo $this->getAttribute($context["icon"], "socialIconClass", []);
                echo "\" aria-hidden=\"true\"></i>
                        <span>";
                // line 46
                echo $this->getAttribute($context["icon"], "socialIconText", []);
                echo "</span></a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['icon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "        </ul> <!-- end home-social -->
    ";
        }
        // line 51
        echo "
</section> <!-- end s-home -->";
    }

    public function getTemplateName()
    {
        return "modular/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 51,  143 => 49,  134 => 46,  130 => 45,  126 => 44,  123 => 43,  119 => 42,  116 => 41,  114 => 40,  104 => 33,  100 => 32,  95 => 29,  89 => 26,  84 => 25,  81 => 24,  75 => 21,  70 => 20,  68 => 19,  61 => 15,  55 => 12,  45 => 5,  39 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modular/home.html.twig", "C:\\Users\\admin\\Desktop\\hola\\user\\themes\\hola\\templates\\modular\\home.html.twig");
    }
}
