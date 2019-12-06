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

/* forms/fields/pagemedia/pagemedia.html.twig */
class __TwigTemplate_56dd476123c97c3aa1eef320299f2e8a0af8ec72d0cf27fce0821c8a43cd0cc1 extends \Twig\Template
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
        $context["value"] = (((null === ($context["value"] ?? null))) ? ($this->getAttribute(($context["field"] ?? null), "default", [])) : (($context["value"] ?? null)));
        // line 2
        $context["pagemedia"] = $this->getAttribute(($context["config"] ?? null), "get", [0 => "plugins.admin.pagemedia"], "method");
        // line 3
        $context["pagemedia_settings"] = ["resolution" => ["min" => ["width" => (($this->getAttribute(        // line 6
($context["pagemedia"] ?? null), "res_min_width", [])) ? ($this->getAttribute(($context["pagemedia"] ?? null), "res_min_width", [])) : (null)), "height" => (($this->getAttribute(        // line 7
($context["pagemedia"] ?? null), "res_min_height", [])) ? ($this->getAttribute(($context["pagemedia"] ?? null), "res_min_height", [])) : (null))], "max" => ["width" => (($this->getAttribute(        // line 10
($context["pagemedia"] ?? null), "res_max_width", [])) ? ($this->getAttribute(($context["pagemedia"] ?? null), "res_max_width", [])) : (null)), "height" => (($this->getAttribute(        // line 11
($context["pagemedia"] ?? null), "res_max_height", [])) ? ($this->getAttribute(($context["pagemedia"] ?? null), "res_max_height", [])) : (null))]], "resizeWidth" => (($this->getAttribute(        // line 14
($context["pagemedia"] ?? null), "resize_width", [])) ? ($this->getAttribute(($context["pagemedia"] ?? null), "resize_width", [])) : (null)), "resizeHeight" => (($this->getAttribute(        // line 15
($context["pagemedia"] ?? null), "resize_height", [])) ? ($this->getAttribute(($context["pagemedia"] ?? null), "resize_height", [])) : (null)), "resizeQuality" => (($this->getAttribute(        // line 16
($context["pagemedia"] ?? null), "resize_quality", [])) ? ($this->getAttribute(($context["pagemedia"] ?? null), "resize_quality", [])) : (0.8))];
        // line 18
        echo "
";
        // line 19
        if ($this->getAttribute(($context["context"] ?? null), "folderExists", [])) {
            // line 20
            echo "<div class=\"form-field grid vertical ";
            if ($this->getAttribute(($context["field"] ?? null), "classes", [], "any", true, true)) {
                echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "classes", []), "html", null, true);
            }
            echo "\">
    <div class=\"form-label\">
        <label>";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "label", [])), "html", null, true);
            echo "</label>
    </div>
    <div class=\"form-data form-uploads-wrapper\">
        ";
            // line 25
            $context["uploadLimit"] = (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "system", []), "media", []), "upload_limit", []) / 1024) / 1024);
            // line 26
            echo "        ";
            $context["dropzoneSettings"] = twig_array_merge(["maxFileSize" => ($context["uploadLimit"] ?? null)], ($context["pagemedia_settings"] ?? null));
            // line 27
            echo "        <div id=\"grav-dropzone\"
             class=\"dropzone\"
             data-media-url=\"";
            // line 29
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "/media/";
            echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute(($context["admin"] ?? null), "route", []), "/"), "html", null, true);
            echo ".json\"
             data-media-local=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter(($context["base_url_relative_frontend"] ?? null), "/"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute(($context["admin"] ?? null), "route", []), "/"), "html", null, true);
            echo "\"
             data-media-path=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["context"] ?? null), "relativePagePath", [])), "html", null, true);
            echo "\"
             data-media-uri=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute(($context["context"] ?? null), "mediaUri", []), "html", null, true);
            echo "\"
             data-dropzone-options=\"";
            // line 33
            echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["dropzoneSettings"] ?? null)), "html_attr");
            echo "\"
             data-dropzone-field=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", []))), "html", null, true);
            echo "\"></div>

        ";
            // line 36
            if (($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "session", []), "expert", []) == "0")) {
                // line 37
                echo "        <input type=\"hidden\" name=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", []))), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, ($context["value"] ?? null));
                echo "\" />
        ";
            }
            // line 39
            echo "    </div>
</div>
";
        } else {
            // line 42
            echo "<div class=\"form-tab\">
    <div class=\"form-field\">
        <div class=\"form-label\">
            ";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CANNOT_ADD_MEDIA_FILES_PAGE_NOT_SAVED"), "html", null, true);
            echo "
        </div>
    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "forms/fields/pagemedia/pagemedia.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 45,  115 => 42,  110 => 39,  102 => 37,  100 => 36,  95 => 34,  91 => 33,  87 => 32,  83 => 31,  77 => 30,  71 => 29,  67 => 27,  64 => 26,  62 => 25,  56 => 22,  48 => 20,  46 => 19,  43 => 18,  41 => 16,  40 => 15,  39 => 14,  38 => 11,  37 => 10,  36 => 7,  35 => 6,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "forms/fields/pagemedia/pagemedia.html.twig", "C:\\Users\\admin\\Desktop\\hola\\user\\plugins\\admin\\themes\\grav\\templates\\forms\\fields\\pagemedia\\pagemedia.html.twig");
    }
}
