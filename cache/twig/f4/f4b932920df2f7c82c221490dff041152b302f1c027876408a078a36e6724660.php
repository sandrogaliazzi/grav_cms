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

/* modular/contact.html.twig */
class __TwigTemplate_cdf92bf0b4c31f0ecae506cda4d8e579fccdf8cf4df38ae7c8ab5293a81483f7 extends \Twig\Template
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
         class=\"s-contact target-section\"
         style=\"background: url(";
        // line 3
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "background", []), [], "array"), "url", []);
        echo ");background-position: center;\">

    <div class=\"overlay\" style=\"opacity:";
        // line 5
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "opacity", []);
        echo ";\"></div>

    <div class=\"row narrow section-intro\">
        <div class=\"col-full\">
            <h3>";
        // line 9
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "smallTitle", []);
        echo "</h3>
            <h1>";
        // line 10
        echo $this->getAttribute(($context["page"] ?? null), "title", []);
        echo "</h1>

            <p class=\"lead\">";
        // line 12
        echo strip_tags($this->getAttribute(($context["page"] ?? null), "content", []));
        echo "</p>
        </div>
    </div>

    <div class=\"row contact__main\">
        <div class=\"col-eight tab-full contact__form\">
            ";
        // line 18
        $this->loadTemplate("forms/form.html.twig", "modular/contact.html.twig", 18)->display($context);
        // line 19
        echo "            <!-- contact-warning -->
            <div class=\"message-warning\">
                Something went wrong. Please try again.
            </div>

            <!-- contact-success -->
            <div class=\"message-success\">
                Your message was sent, thank you!<br>
            </div>

        </div>
        <div class=\"col-four tab-full contact__infos\">
            <h4 class=\"h06\">";
        // line 31
        echo $this->getAttribute(($context["header"] ?? null), "phoneTitle", []);
        echo "</h4>
            <p>";
        // line 32
        echo $this->getAttribute(($context["header"] ?? null), "phonePhone", []);
        echo "<br>
                ";
        // line 33
        echo $this->getAttribute(($context["header"] ?? null), "phoneMobile", []);
        echo "<br>
                ";
        // line 34
        echo $this->getAttribute(($context["header"] ?? null), "phoneFax", []);
        echo "
            </p>

            <h4 class=\"h06\">";
        // line 37
        echo $this->getAttribute(($context["header"] ?? null), "emailTitle", []);
        echo "</h4>
            <p>";
        // line 38
        echo twig_replace_filter($this->getAttribute(($context["header"] ?? null), "emailAddress", []), ["," => "<br>"]);
        echo "
            </p>

            <h4 class=\"h06\">";
        // line 41
        echo $this->getAttribute(($context["header"] ?? null), "addressTitle", []);
        echo "</h4>
            <p>
                ";
        // line 43
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($context, $this->getAttribute(($context["header"] ?? null), "addressDetails", []));
        echo "
            </p>
        </div>

    </div>

    <script>
        \$(document).ready(function () {
            var form = \$('.contact__main form');
            form.submit(function (e) {
                // prevent form submission
                e.preventDefault();
                // submit the form via Ajax
                \$.ajax({
                    url: form.attr('action'),
                    type: form.attr('method'),
                    dataType: 'html',
                    data: form.serialize(),
                    success: function (result) {
                        // Inject the result in the HTML
                        \$('.message-success').show();
                        \$('.message-success').html(result);
                    }
                });
            });
        });
    </script>

</section>
<!-- end s-contact -->";
    }

    public function getTemplateName()
    {
        return "modular/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 43,  114 => 41,  108 => 38,  104 => 37,  98 => 34,  94 => 33,  90 => 32,  86 => 31,  72 => 19,  70 => 18,  61 => 12,  56 => 10,  52 => 9,  45 => 5,  40 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modular/contact.html.twig", "C:\\Users\\admin\\Desktop\\hola\\user\\themes\\hola\\templates\\modular\\contact.html.twig");
    }
}
