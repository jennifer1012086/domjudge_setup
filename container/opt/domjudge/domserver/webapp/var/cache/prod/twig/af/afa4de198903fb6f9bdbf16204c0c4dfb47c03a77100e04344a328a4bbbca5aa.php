<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* jury/partials/country_select.html.twig */
class __TwigTemplate_352dc3821766963e415bbcc8338fee4fd9be77d44970b9c28bc2837feaf0ca2e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/country_select.html.twig"));

        // line 1
        echo "<script>
    var alpha3_alpha2_country_mapping = ";
        // line 2
        echo json_encode(($context["alpha3_alpha2_country_mapping"] ?? null));
        echo ";

    var template = function(element) {
        var imgBase = \"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("flags/4x3/nl.svg"), "html", null, true);
        echo "\";

        var img = element.element == undefined ||
            element.element.value == undefined ||
            element.element.value == \"\"
            ? ''
            : '<img src=\"' + imgBase.replace(\"nl.svg\", alpha3_alpha2_country_mapping[element.element.value].toLowerCase() + \".svg\", 1) + '\" class=\"countryflag\" alt=\"\">&nbsp;';

        return img + element.text;
    };

    \$('";
        // line 16
        echo twig_escape_filter($this->env, ($context["field"] ?? null), "html", null, true);
        echo "').select2({
        templateResult: template,
        templateSelection: template,

        // Prevent escaping
        escapeMarkup: function(t) {
            return t;
        },
        theme: \"bootstrap\"
    });

</script>
";
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    public function getTemplateName()
    {
        return "jury/partials/country_select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 16,  49 => 5,  43 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/partials/country_select.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/partials/country_select.html.twig");
    }
}
