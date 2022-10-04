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

/* jury/partials/external_contest_source_warnings.html.twig */
class __TwigTemplate_4fe6e40707d51ab8fa5134785f9237b8e16152cd5a08ca0e52fe9437b199c346 extends Template
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
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/external_contest_source_warnings.html.twig"));

        // line 1
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/partials/external_contest_source_warnings.html.twig", 1)->unwrap();
        // line 2
        if (((array_key_exists("refresh", $context) && twig_get_attribute($this->env, $this->source, ($context["refresh"] ?? null), "ajax", [], "any", true, true, false, 2)) && twig_get_attribute($this->env, $this->source, ($context["refresh"] ?? null), "ajax", [], "any", false, false, false, 2))) {
            // line 3
            echo "    <div class=\"d-none\" data-new-source-info>
        ";
            // line 4
            $this->loadTemplate("jury/partials/external_contest_source_info.html.twig", "jury/partials/external_contest_source_warnings.html.twig", 4)->display($context);
            // line 5
            echo "    </div>
    <div class=\"d-none\" data-new-warning-header>
        ";
            // line 7
            $this->loadTemplate("jury/partials/external_contest_source_warning_header.html.twig", "jury/partials/external_contest_source_warnings.html.twig", 7)->display($context);
            // line 8
            echo "    </div>
";
        }
        // line 10
        echo "
<div class=\"warnings-table\">
    ";
        // line 12
        echo twig_call_macro($macros["macros"], "macro_table", [($context["warningTable"] ?? null), ($context["warningTableFields"] ?? null), 0, ["ordering" => "false", "searching" => "false"]], 12, $context, $this->getSourceContext());
        echo "
</div>
";
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    public function getTemplateName()
    {
        return "jury/partials/external_contest_source_warnings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 12,  59 => 10,  55 => 8,  53 => 7,  49 => 5,  47 => 4,  44 => 3,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/partials/external_contest_source_warnings.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/partials/external_contest_source_warnings.html.twig");
    }
}
