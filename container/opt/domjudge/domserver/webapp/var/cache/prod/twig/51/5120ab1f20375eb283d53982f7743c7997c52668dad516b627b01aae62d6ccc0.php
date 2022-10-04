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

/* jury/partials/analysis_filter.html.twig */
class __TwigTemplate_f2fce0931ea036b2cad25016e8fb7cc76d92e445621c460fecbcf4df5f5dd7d5 extends Template
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
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/analysis_filter.html.twig"));

        // line 1
        echo "<div class=\"btn-group btn-group-toggle btn-group-sm mb-3\" data-toggle=\"buttons\">
    <div class=\"input-group-prepend\">
        <div class=\"input-group-text listtoggles\">Filter:</div>
    </div>";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["filters"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["label"]) {
            // line 6
            echo "
        <label class=\"btn btn-secondary ";
            // line 7
            if ((0 === twig_compare($context["key"], ($context["view"] ?? null)))) {
                echo "active";
            }
            echo "\">
            <input type=\"radio\" name=\"viewtype\" autocomplete=\"off\" value=\"";
            // line 8
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\"
                   ";
            // line 9
            if ((0 === twig_compare($context["key"], ($context["view"] ?? null)))) {
                echo "checked";
            }
            echo "> ";
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "
        </label>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "</div>

<script>
    \$(function () {
        \$('input[name=viewtype]').on('change', function () {
            window.location = '?view=' + \$(this).val();
        });
    });
</script>
";
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    public function getTemplateName()
    {
        return "jury/partials/analysis_filter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 12,  62 => 9,  58 => 8,  52 => 7,  49 => 6,  45 => 5,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/partials/analysis_filter.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/partials/analysis_filter.html.twig");
    }
}
