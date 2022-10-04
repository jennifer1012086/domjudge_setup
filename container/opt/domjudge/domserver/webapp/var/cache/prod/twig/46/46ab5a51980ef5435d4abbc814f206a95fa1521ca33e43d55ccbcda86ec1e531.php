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

/* partials/javascript_print.html.twig */
class __TwigTemplate_efda6766a21a6b9195c03c1f03589298dc7aaef507f92f6644060ac451aa0ffe extends Template
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
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/javascript_print.html.twig"));

        // line 1
        echo "<script>
    function detectLanguage(filename) {
        var parts = filename.toLowerCase().split('.').reverse();
        if (parts.length < 2) return;

        // language ID

        var elt = document.getElementById('print_langid');
        // the 'autodetect' option has empty value
        if (elt.value !== '') return;

        var langid = getMainExtension(parts[0]);
        for (var i = 0; i < elt.length; i++) {
            if (elt.options[i].value === langid) {
                elt.selectedIndex = i;
            }
        }

    }
</script>
";
        // line 21
        $this->loadTemplate("partials/javascript_language_detect.html.twig", "partials/javascript_print.html.twig", 21)->display($context);
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    public function getTemplateName()
    {
        return "partials/javascript_print.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 21,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "partials/javascript_print.html.twig", "/opt/domjudge/domserver/webapp/templates/partials/javascript_print.html.twig");
    }
}
