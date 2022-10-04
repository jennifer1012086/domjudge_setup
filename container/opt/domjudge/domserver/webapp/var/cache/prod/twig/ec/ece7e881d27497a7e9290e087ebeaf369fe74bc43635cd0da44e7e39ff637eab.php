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

/* jury/partials/rejudging_submissions.html.twig */
class __TwigTemplate_9d74751eebee8b601035fc41086f8130fb6d1916f5210db3314ca31d4bdb6697 extends Template
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
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/rejudging_submissions.html.twig"));

        // line 1
        if ((array_key_exists("ajax", $context) && ($context["ajax"] ?? null))) {
            // line 2
            echo "    <span class=\"d-none\" data-new-todo>
        ";
            // line 3
            echo twig_escape_filter($this->env, ($context["todo"] ?? null), "html", null, true);
            echo "
    </span>
    <div class=\"d-none\" data-new-rejudging-buttons>
        ";
            // line 6
            $this->loadTemplate("jury/partials/rejudging_buttons.html.twig", "jury/partials/rejudging_submissions.html.twig", 6)->display($context);
            // line 7
            echo "    </div>
    <div class=\"d-none\" data-new-rejudging-matrix>
        ";
            // line 9
            $this->loadTemplate("jury/partials/rejudging_matrix.html.twig", "jury/partials/rejudging_submissions.html.twig", 9)->display($context);
            // line 10
            echo "    </div>
";
        }
        // line 13
        $this->loadTemplate("jury/partials/submission_list.html.twig", "jury/partials/rejudging_submissions.html.twig", 13)->display(twig_array_merge($context, ["showContest" => true]));
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    public function getTemplateName()
    {
        return "jury/partials/rejudging_submissions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 13,  59 => 10,  57 => 9,  53 => 7,  51 => 6,  45 => 3,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/partials/rejudging_submissions.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/partials/rejudging_submissions.html.twig");
    }
}
