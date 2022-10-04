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

/* jury/partials/team_score_and_submissions.html.twig */
class __TwigTemplate_ffa50e0b053af175288128ff3bb1dca61f5b1a79039f7ebb8ac9abab38e3fb77 extends Template
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
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/team_score_and_submissions.html.twig"));

        // line 1
        if ((array_key_exists("scoreboard", $context) &&  !(null === ($context["scoreboard"] ?? null)))) {
            // line 2
            echo "    <h2 class=\"mt-2\">Score</h2>

    ";
            // line 4
            $this->loadTemplate("partials/scoreboard_table.html.twig", "jury/partials/team_score_and_submissions.html.twig", 4)->display(twig_array_merge($context, ["displayRank" => true, "jury" => true]));
        }
        // line 6
        echo "
<h2 class=\"mt-2\">
    Submissions
    ";
        // line 9
        if (($context["restrictionText"] ?? null)) {
            // line 10
            echo "    <small class=\"text-muted\">
        restricted to ";
            // line 11
            echo twig_escape_filter($this->env, ($context["restrictionText"] ?? null), "html", null, true);
            echo " (<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team", ["teamId" => twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "teamid", [], "any", false, false, false, 11)]), "html", null, true);
            echo "\">show all</a>)
    </small>
    ";
        }
        // line 14
        echo "</h2>";
        // line 15
        $this->loadTemplate("jury/partials/submission_list.html.twig", "jury/partials/team_score_and_submissions.html.twig", 15)->display(twig_array_merge($context, ["showTestcases" => false]));
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    public function getTemplateName()
    {
        return "jury/partials/team_score_and_submissions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 15,  67 => 14,  59 => 11,  56 => 10,  54 => 9,  49 => 6,  46 => 4,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/partials/team_score_and_submissions.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/partials/team_score_and_submissions.html.twig");
    }
}
