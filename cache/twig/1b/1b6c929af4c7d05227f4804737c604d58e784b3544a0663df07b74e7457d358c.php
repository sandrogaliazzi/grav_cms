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

/* forms/field.html.twig */
class __TwigTemplate_c7bbe56a5194cdc1c7e8d6e3467cc7035d01dc6c897f38d80ec0952851dffb34 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'field' => [$this, 'block_field'],
            'contents' => [$this, 'block_contents'],
            'label' => [$this, 'block_label'],
            'global_attributes' => [$this, 'block_global_attributes'],
            'group' => [$this, 'block_group'],
            'input' => [$this, 'block_input'],
            'prepend' => [$this, 'block_prepend'],
            'input_attributes' => [$this, 'block_input_attributes'],
            'append' => [$this, 'block_append'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["originalValue"] = (((isset($context["originalValue"]) || array_key_exists("originalValue", $context))) ? (($context["originalValue"] ?? null)) : (($context["value"] ?? null)));
        // line 2
        $context["toggleableChecked"] = ($this->getAttribute(($context["field"] ?? null), "toggleable", []) && ( !(null === ($context["originalValue"] ?? null)) &&  !twig_test_empty(($context["originalValue"] ?? null))));
        // line 3
        $context["isDisabledToggleable"] = ($this->getAttribute(($context["field"] ?? null), "toggleable", []) &&  !($context["toggleableChecked"] ?? null));
        // line 4
        $context["value"] = (((null === ($context["value"] ?? null))) ? ($this->getAttribute(($context["field"] ?? null), "default", [])) : (($context["value"] ?? null)));
        // line 5
        $context["vertical"] = ($this->getAttribute(($context["field"] ?? null), "style", []) == "vertical");
        // line 6
        $context["field_name"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", [])));
        // line 7
        echo "
";
        // line 8
        if ((($this->getAttribute(($context["field"] ?? null), "yaml", []) || ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "type", []) == "yaml")) && twig_test_iterable(($context["value"] ?? null)))) {
            // line 9
            echo "    ";
            $context["value"] = $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->toYamlFilter(($context["value"] ?? null));
        }
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('field', $context, $blocks);
    }

    public function block_field($context, array $blocks = [])
    {
        // line 13
        echo "    <div class=\"form-field grid";
        if (($context["vertical"] ?? null)) {
            echo " vertical";
        }
        if ($this->getAttribute(($context["field"] ?? null), "toggleable", [])) {
            echo " form-field-toggleable";
        }
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "outerclasses", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "field_classes", []), "html", null, true);
        echo "\">
        ";
        // line 14
        $this->displayBlock('contents', $context, $blocks);
        // line 107
        echo "    </div>
";
    }

    // line 14
    public function block_contents($context, array $blocks = [])
    {
        // line 15
        echo "            <div class=\"form-label";
        if ( !($context["vertical"] ?? null)) {
            echo " block size-1-3";
        }
        echo "\">
                ";
        // line 16
        if ($this->getAttribute(($context["field"] ?? null), "toggleable", [])) {
            // line 17
            echo "                    <span class=\"checkboxes toggleable\" data-grav-field=\"toggleable\" data-grav-field-name=\"";
            echo twig_escape_filter($this->env, ($context["field_name"] ?? null), "html", null, true);
            echo "\">
                        <input type=\"checkbox\"
                               id=\"toggleable_";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", []), "html", null, true);
            echo "\"
                               ";
            // line 20
            if (($context["toggleableChecked"] ?? null)) {
                echo "value=\"1\"";
            }
            // line 21
            echo "                               name=\"toggleable_";
            echo twig_escape_filter($this->env, ($context["field_name"] ?? null), "html", null, true);
            echo "\"
                               ";
            // line 22
            if (($context["toggleableChecked"] ?? null)) {
                echo "checked=\"checked\"";
            }
            // line 23
            echo "                        >
                        <label for=\"toggleable_";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", []), "html", null, true);
            echo "\"></label>
                    </span>
                ";
        }
        // line 27
        echo "                <label";
        echo (($this->getAttribute(($context["field"] ?? null), "toggleable", [])) ? (((" class=\"toggleable\" for=\"toggleable_" . $this->getAttribute(($context["field"] ?? null), "name", [])) . "\"")) : (""));
        echo ">
                ";
        // line 28
        $this->displayBlock('label', $context, $blocks);
        // line 44
        echo "                </label>
                ";
        // line 45
        if ($this->getAttribute(($context["field"] ?? null), "sublabel", [])) {
            // line 46
            echo "                <div class=\"form-sublabel\">
                    ";
            // line 47
            if ($this->getAttribute(($context["field"] ?? null), "markdown", [])) {
                // line 48
                echo "                        ";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($context, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "sublabel", [])), false);
                echo "
                    ";
            } else {
                // line 50
                echo "                        ";
                echo $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "sublabel", []));
                echo "
                    ";
            }
            // line 52
            echo "                </div>
                ";
        }
        // line 54
        echo "            </div>
            <div class=\"form-data";
        // line 55
        if ( !($context["vertical"] ?? null)) {
            echo " block size-2-3";
        }
        echo "\"
                ";
        // line 56
        $this->displayBlock('global_attributes', $context, $blocks);
        // line 61
        echo "            >
                ";
        // line 62
        $this->displayBlock('group', $context, $blocks);
        // line 94
        echo "                ";
        if ($this->getAttribute(($context["field"] ?? null), "description", [])) {
            // line 95
            echo "                    <div class=\"form-extra-wrapper ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "size", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "wrapper_classes", []), "html", null, true);
            echo "\">
                        <span class=\"form-description\">
                            ";
            // line 97
            if ($this->getAttribute(($context["field"] ?? null), "markdown", [])) {
                // line 98
                echo "                                ";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($context, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "description", [])), false);
                echo "
                            ";
            } else {
                // line 100
                echo "                                ";
                echo $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "description", []));
                echo "
                            ";
            }
            // line 102
            echo "                        </span>
                    </div>
                ";
        }
        // line 105
        echo "            </div>
        ";
    }

    // line 28
    public function block_label($context, array $blocks = [])
    {
        // line 29
        echo "                    ";
        if ($this->getAttribute(($context["field"] ?? null), "help", [])) {
            // line 30
            echo "                        ";
            if ($this->getAttribute(($context["field"] ?? null), "markdown", [])) {
                // line 31
                echo "                            <span class=\"hint--bottom\" data-hint=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($context, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "help", [])), false), "html");
                echo "\">";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($context, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "label", [])), false);
                echo "</span>
                        ";
            } else {
                // line 33
                echo "                            <span class=\"hint--bottom\" data-hint=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "help", [])), "html");
                echo "\">";
                echo $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "label", []));
                echo "</span>
                        ";
            }
            // line 35
            echo "                    ";
        } else {
            // line 36
            echo "                        ";
            if ($this->getAttribute(($context["field"] ?? null), "markdown", [])) {
                // line 37
                echo "                            ";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($context, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "label", [])), false);
                echo "
                        ";
            } else {
                // line 39
                echo "                            ";
                echo $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "label", []));
                echo "
                        ";
            }
            // line 41
            echo "                    ";
        }
        // line 42
        echo "                    ";
        echo ((twig_in_filter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "required", []), [0 => "on", 1 => "true", 2 => 1])) ? ("<span class=\"required\">*</span>") : (""));
        echo "
                ";
    }

    // line 56
    public function block_global_attributes($context, array $blocks = [])
    {
        // line 57
        echo "                data-grav-field=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "type", []), "html", null, true);
        echo "\"
                data-grav-disabled=\"";
        // line 58
        echo twig_escape_filter($this->env, ($context["toggleableChecked"] ?? null), "html", null, true);
        echo "\"
                data-grav-default=\"";
        // line 59
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute(($context["field"] ?? null), "default", [])), "html_attr");
        echo "\"
                ";
    }

    // line 62
    public function block_group($context, array $blocks = [])
    {
        // line 63
        echo "                    ";
        $this->displayBlock('input', $context, $blocks);
        // line 93
        echo "                ";
    }

    // line 63
    public function block_input($context, array $blocks = [])
    {
        // line 64
        echo "                        <div class=\"form-input-wrapper ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "size", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "wrapper_classes", []), "html", null, true);
        echo "\">
                            ";
        // line 65
        $this->displayBlock('prepend', $context, $blocks);
        // line 66
        echo "                            <input
                                ";
        // line 68
        echo "                                name=\"";
        echo twig_escape_filter($this->env, ($context["field_name"] ?? null), "html", null, true);
        echo "\"
                                value=\"";
        // line 69
        echo twig_escape_filter($this->env, twig_join_filter(($context["value"] ?? null), ", "), "html", null, true);
        echo "\"
                                ";
        // line 70
        if ($this->getAttribute(($context["field"] ?? null), "key", [])) {
            // line 71
            echo "                                    data-key-observe=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . ($context["field_name"] ?? null))), "html", null, true);
            echo "\"
                                ";
        }
        // line 73
        echo "                                ";
        // line 74
        echo "                                ";
        $this->displayBlock('input_attributes', $context, $blocks);
        // line 89
        echo "                            />
                            ";
        // line 90
        $this->displayBlock('append', $context, $blocks);
        // line 91
        echo "                        </div>
                    ";
    }

    // line 65
    public function block_prepend($context, array $blocks = [])
    {
    }

    // line 74
    public function block_input_attributes($context, array $blocks = [])
    {
        // line 75
        echo "                                    ";
        if ($this->getAttribute(($context["field"] ?? null), "classes", [], "any", true, true)) {
            echo "class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "classes", []), "html", null, true);
            echo "\" ";
        }
        // line 76
        echo "                                    ";
        if ($this->getAttribute(($context["field"] ?? null), "id", [], "any", true, true)) {
            echo "id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "id", []));
            echo "\" ";
        }
        // line 77
        echo "                                    ";
        if ($this->getAttribute(($context["field"] ?? null), "style", [], "any", true, true)) {
            echo "style=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "style", []));
            echo "\" ";
        }
        // line 78
        echo "                                    ";
        if (($this->getAttribute(($context["field"] ?? null), "disabled", []) || ($context["isDisabledToggleable"] ?? null))) {
            echo "disabled=\"disabled\"";
        }
        // line 79
        echo "                                    ";
        if ($this->getAttribute(($context["field"] ?? null), "placeholder", [])) {
            echo "placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "placeholder", [])), "html", null, true);
            echo "\"";
        }
        // line 80
        echo "                                    ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "autofocus", []), [0 => "on", 1 => "true", 2 => 1])) {
            echo "autofocus=\"autofocus\"";
        }
        // line 81
        echo "                                    ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "novalidate", []), [0 => "on", 1 => "true", 2 => 1])) {
            echo "novalidate=\"novalidate\"";
        }
        // line 82
        echo "                                    ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "readonly", []), [0 => "on", 1 => "true", 2 => 1])) {
            echo "readonly=\"readonly\"";
        }
        // line 83
        echo "                                    ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "autocomplete", []), [0 => "on", 1 => "off", 2 => "new-password"])) {
            echo "autocomplete=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "autocomplete", []), "html", null, true);
            echo "\"";
        }
        // line 84
        echo "                                    ";
        if (twig_in_filter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "required", []), [0 => "on", 1 => "true", 2 => 1])) {
            echo "required=\"required\"";
        }
        // line 85
        echo "                                    ";
        if ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "pattern", [])) {
            echo "pattern=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "pattern", []), "html", null, true);
            echo "\"";
        }
        // line 86
        echo "                                    ";
        if ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "message", [])) {
            echo "title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "message", []))), "html", null, true);
            echo "\"
                                    ";
        } elseif ($this->getAttribute(        // line 87
($context["field"] ?? null), "title", [], "any", true, true)) {
            echo "title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "title", []))), "html", null, true);
            echo "\" ";
        }
        // line 88
        echo "                                ";
    }

    // line 90
    public function block_append($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "forms/field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  438 => 90,  434 => 88,  428 => 87,  421 => 86,  414 => 85,  409 => 84,  402 => 83,  397 => 82,  392 => 81,  387 => 80,  380 => 79,  375 => 78,  368 => 77,  361 => 76,  354 => 75,  351 => 74,  346 => 65,  341 => 91,  339 => 90,  336 => 89,  333 => 74,  331 => 73,  325 => 71,  323 => 70,  319 => 69,  314 => 68,  311 => 66,  309 => 65,  302 => 64,  299 => 63,  295 => 93,  292 => 63,  289 => 62,  283 => 59,  279 => 58,  274 => 57,  271 => 56,  264 => 42,  261 => 41,  255 => 39,  249 => 37,  246 => 36,  243 => 35,  235 => 33,  227 => 31,  224 => 30,  221 => 29,  218 => 28,  213 => 105,  208 => 102,  202 => 100,  196 => 98,  194 => 97,  186 => 95,  183 => 94,  181 => 62,  178 => 61,  176 => 56,  170 => 55,  167 => 54,  163 => 52,  157 => 50,  151 => 48,  149 => 47,  146 => 46,  144 => 45,  141 => 44,  139 => 28,  134 => 27,  128 => 24,  125 => 23,  121 => 22,  116 => 21,  112 => 20,  108 => 19,  102 => 17,  100 => 16,  93 => 15,  90 => 14,  85 => 107,  83 => 14,  69 => 13,  63 => 12,  60 => 11,  56 => 9,  54 => 8,  51 => 7,  49 => 6,  47 => 5,  45 => 4,  43 => 3,  41 => 2,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "forms/field.html.twig", "C:\\Users\\admin\\Desktop\\hola\\user\\plugins\\admin\\themes\\grav\\templates\\forms\\field.html.twig");
    }
}
