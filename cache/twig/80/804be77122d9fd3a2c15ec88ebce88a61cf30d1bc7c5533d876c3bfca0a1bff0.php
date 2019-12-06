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

/* forms/fields/iconpicker/iconpicker.html.twig */
class __TwigTemplate_f4a04d0be79c9a171ee30f4787b41c5477665de8e111a83c41bc2ad3eb6ae4d1 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'global_attributes' => [$this, 'block_global_attributes'],
            'input' => [$this, 'block_input'],
            'input_attributes' => [$this, 'block_input_attributes'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["originalValue"] = (((isset($context["originalValue"]) || array_key_exists("originalValue", $context))) ? (($context["originalValue"] ?? null)) : (($context["value"] ?? null)));
        // line 3
        $context["value"] = (((null === ($context["value"] ?? null))) ? ($this->getAttribute(($context["field"] ?? null), "default", [])) : (($context["value"] ?? null)));
        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/iconpicker/iconpicker.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_global_attributes($context, array $blocks = [])
    {
        // line 6
        echo "    data-grav-iconpicker
    data-name=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", []), "html", null, true);
        echo "\"
    data-value=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
        echo "\"
    ";
        // line 9
        $this->displayParentBlock("global_attributes", $context, $blocks);
        echo "
";
    }

    // line 12
    public function block_input($context, array $blocks = [])
    {
        // line 13
        echo "    <div class=\"form-list-wrapper ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "size", []), "html", null, true);
        echo "\" data-type=\"collection\">
        <div class=\"icon-picker\" data-pickerid=\"fa\" data-iconsets='{\"fa\":\"FontAwesome Icons\"}'>
            <input
                ";
        // line 17
        echo "                name=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", []))), "html", null, true);
        echo "\"
                data-format=\"";
        // line 18
        echo ((($this->getAttribute(($context["field"] ?? null), "format", []) == "short")) ? ("short") : ("long"));
        echo "\"
                value=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_join_filter(($context["value"] ?? null), ", "), "html", null, true);
        echo "\"
                type=\"text\"
                ";
        // line 22
        echo "                ";
        $this->displayBlock('input_attributes', $context, $blocks);
        // line 34
        echo "            />
        </div>

        <div class=\"fa-set icon-set\">
            <ul>
                ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fa_icons"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["icon"]) {
            // line 40
            echo "                <li data-code=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["icon"], "unicode", []), "html", null, true);
            echo "\" data-class=\"fa fa-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["icon"], "id", []), "html", null, true);
            echo "\" class=\"fa fa-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["icon"], "id", []), "html", null, true);
            echo "\"></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['icon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "            </ul>
        </div>
    </div>
";
    }

    // line 22
    public function block_input_attributes($context, array $blocks = [])
    {
        // line 23
        echo "                    ";
        if ($this->getAttribute(($context["field"] ?? null), "classes", [], "any", true, true)) {
            echo "class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "classes", []), "html", null, true);
            echo "\" ";
        }
        // line 24
        echo "                    ";
        if ($this->getAttribute(($context["field"] ?? null), "id", [], "any", true, true)) {
            echo "id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "id", []));
            echo "\" ";
        }
        // line 25
        echo "                    ";
        if ($this->getAttribute(($context["field"] ?? null), "style", [], "any", true, true)) {
            echo "style=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "style", []));
            echo "\" ";
        }
        // line 26
        echo "                    ";
        if ($this->getAttribute(($context["field"] ?? null), "disabled", [])) {
            echo "disabled=\"disabled\"";
        }
        // line 27
        echo "                    ";
        if ($this->getAttribute(($context["field"] ?? null), "placeholder", [])) {
            echo "placeholder=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "placeholder", []), "html", null, true);
            echo "\"";
        }
        // line 28
        echo "                    ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "autofocus", []), [0 => "on", 1 => "true", 2 => 1])) {
            echo "autofocus=\"autofocus\"";
        }
        // line 29
        echo "                    ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "novalidate", []), [0 => "on", 1 => "true", 2 => 1])) {
            echo "novalidate=\"novalidate\"";
        }
        // line 30
        echo "                    ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "readonly", []), [0 => "on", 1 => "true", 2 => 1])) {
            echo "readonly=\"readonly\"";
        }
        // line 31
        echo "                    ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "autocomplete", []), [0 => "on", 1 => "off"])) {
            echo "autocomplete=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "autocomplete", []), "html", null, true);
            echo "\"";
        }
        // line 32
        echo "                    ";
        if (twig_in_filter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "required", []), [0 => "on", 1 => "true", 2 => 1])) {
            echo "required=\"required\"";
        }
        // line 33
        echo "                ";
    }

    public function getTemplateName()
    {
        return "forms/fields/iconpicker/iconpicker.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 33,  182 => 32,  175 => 31,  170 => 30,  165 => 29,  160 => 28,  153 => 27,  148 => 26,  141 => 25,  134 => 24,  127 => 23,  124 => 22,  117 => 42,  104 => 40,  100 => 39,  93 => 34,  90 => 22,  85 => 19,  81 => 18,  76 => 17,  69 => 13,  66 => 12,  60 => 9,  56 => 8,  52 => 7,  49 => 6,  46 => 5,  41 => 1,  39 => 3,  37 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "forms/fields/iconpicker/iconpicker.html.twig", "C:\\Users\\admin\\Desktop\\hola\\user\\plugins\\admin\\themes\\grav\\templates\\forms\\fields\\iconpicker\\iconpicker.html.twig");
    }
}
