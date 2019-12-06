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

/* forms/fields/text/text.html.twig */
class __TwigTemplate_77a8a9de710b8e9b498124111678167ff778ceb602aacbd86168062b28a6c2fc extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'prepend' => [$this, 'block_prepend'],
            'input_attributes' => [$this, 'block_input_attributes'],
            'append' => [$this, 'block_append'],
            'input' => [$this, 'block_input'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/text/text.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_prepend($context, array $blocks = [])
    {
        // line 4
        if ($this->getAttribute(($context["field"] ?? null), "prepend", [])) {
            // line 5
            echo "    <div class=\"form-input-addon form-input-prepend\">
        ";
            // line 6
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", [], "any", false, true), "twig", [], "any", false, true), "filters", [], "any", false, true), "tu", [], "array", true, true)) {
                // line 7
                echo $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "prepend", []));
            } else {
                // line 9
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "prepend", []));
            }
            // line 11
            echo "    </div>
";
        }
    }

    // line 15
    public function block_input_attributes($context, array $blocks = [])
    {
        // line 16
        echo "    type=\"text\"
    ";
        // line 17
        $this->displayParentBlock("input_attributes", $context, $blocks);
        echo "
";
    }

    // line 20
    public function block_append($context, array $blocks = [])
    {
        // line 21
        echo "    ";
        if ($this->getAttribute(($context["field"] ?? null), "append", [])) {
            // line 22
            echo "        <div class=\"form-input-addon form-input-append\">
            ";
            // line 23
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", [], "any", false, true), "twig", [], "any", false, true), "filters", [], "any", false, true), "tu", [], "array", true, true)) {
                // line 24
                echo $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "append", []));
            } else {
                // line 26
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "append", []));
            }
            // line 28
            echo "        </div>
    ";
        }
    }

    // line 32
    public function block_input($context, array $blocks = [])
    {
        // line 33
        if (($this->getAttribute(($context["field"] ?? null), "prepend", []) || $this->getAttribute(($context["field"] ?? null), "append", []))) {
            // line 34
            echo "    ";
            $context["field"] = twig_array_merge(($context["field"] ?? null), ["wrapper_classes" => "form-input-addon-wrapper"]);
        }
        // line 36
        $this->displayParentBlock("input", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "forms/fields/text/text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 36,  104 => 34,  102 => 33,  99 => 32,  93 => 28,  90 => 26,  87 => 24,  85 => 23,  82 => 22,  79 => 21,  76 => 20,  70 => 17,  67 => 16,  64 => 15,  58 => 11,  55 => 9,  52 => 7,  50 => 6,  47 => 5,  45 => 4,  42 => 3,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "forms/fields/text/text.html.twig", "C:\\Users\\admin\\Desktop\\hola\\user\\plugins\\form\\templates\\forms\\fields\\text\\text.html.twig");
    }
}
