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

/* team/partials/index_content.html.twig */
class __TwigTemplate_79f59fa95b13a7aaa10e8e0f68b3b5dc2b3463840bdc8f2f7ee04ed4dbc7425c extends Template
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
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "team/partials/index_content.html.twig"));

        // line 1
        if (twig_test_empty(($context["contest"] ?? null))) {
            // line 2
            echo "    <h1 id=\"teamwelcome\" class=\"text-center\">Welcome team <span id=\"teamwelcometeam\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "effectiveName", [], "any", false, false, false, 2), "html", null, true);
            echo "</span>!</h1>
    <h2 id=\"contestnotstarted\" class=\"text-center\">There's no active contest for you (yet).</h2>
";
        } elseif ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 4
($context["contest"] ?? null), "freezeData", [], "any", false, false, false, 4), "started", [], "any", false, false, false, 4)) {
            // line 5
            echo "    <h1 id=\"teamwelcome\" class=\"text-center\">Welcome team <span id=\"teamwelcometeam\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "effectiveName", [], "any", false, false, false, 5), "html", null, true);
            echo "</span>!</h1>
    <h2 id=\"contestnotstarted\" class=\"text-center\">
        Contest ";
            // line 7
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printContestStart(($context["contest"] ?? null)), "html", null, true);
            echo "
    </h2>
";
        } else {
            // line 10
            echo "
    <div id=\"teamscoresummary\">
        ";
            // line 12
            $context["displayRank"] =  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "freezeData", [], "any", false, false, false, 12), "showFrozen", [], "any", false, false, false, 12);
            // line 13
            echo "        ";
            $this->loadTemplate("partials/scoreboard_table.html.twig", "team/partials/index_content.html.twig", 13)->display(twig_array_merge($context, ["displayRank" => ($context["displayRank"] ?? null), "jury" => false, "public" => false]));
            // line 14
            echo "    </div>

    <div class=\"mt-4\" data-flash-messages>
        ";
            // line 17
            $this->loadTemplate("partials/messages.html.twig", "team/partials/index_content.html.twig", 17)->display($context);
            // line 18
            echo "    </div>

    <div class=\"row\">
        <div class=\"col\">
            <h1 class=\"teamoverview\">Submissions</h1>

            ";
            // line 24
            $this->loadTemplate("team/partials/submission_list.html.twig", "team/partials/index_content.html.twig", 24)->display($context);
            // line 25
            echo "        </div>
        <div class=\"col\">
            <h1 class=\"teamoverview\">Clarifications</h1>
            ";
            // line 28
            if (twig_test_empty(($context["clarifications"] ?? null))) {
                // line 29
                echo "                <p class=\"nodata\">No clarifications.</p>
            ";
            } else {
                // line 31
                echo "                ";
                $this->loadTemplate("team/partials/clarification_list.html.twig", "team/partials/index_content.html.twig", 31)->display(twig_array_merge($context, ["clarifications" => ($context["clarifications"] ?? null)]));
                // line 32
                echo "            ";
            }
            // line 33
            echo "
            <h1 class=\"teamoverview\">Clarification Requests</h1>
            ";
            // line 35
            if (twig_test_empty(($context["clarificationRequests"] ?? null))) {
                // line 36
                echo "                <p class=\"nodata\">No clarification request.</p>
            ";
            } else {
                // line 38
                echo "                ";
                $this->loadTemplate("team/partials/clarification_list.html.twig", "team/partials/index_content.html.twig", 38)->display(twig_array_merge($context, ["clarifications" => ($context["clarificationRequests"] ?? null)]));
                // line 39
                echo "            ";
            }
            // line 40
            echo "
            <div class=\"m-1\">
                <a href=\"";
            // line 42
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_clarification_add");
            echo "\" class=\"btn btn-secondary btn-sm\" data-ajax-modal>
                    request clarification
                </a>
            </div>
        </div>
    </div>
";
        }
        // line 49
        echo "
";
        // line 50
        if ((array_key_exists("ajax", $context) && ($context["ajax"] ?? null))) {
            // line 51
            echo "    ";
            $this->loadTemplate("partials/scoreboard_progress_bar.html.twig", "team/partials/index_content.html.twig", 51)->display(twig_array_merge($context, ["margin" =>  -9, "contest" => ($context["current_team_contest"] ?? null)]));
        }
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    public function getTemplateName()
    {
        return "team/partials/index_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 51,  138 => 50,  135 => 49,  125 => 42,  121 => 40,  118 => 39,  115 => 38,  111 => 36,  109 => 35,  105 => 33,  102 => 32,  99 => 31,  95 => 29,  93 => 28,  88 => 25,  86 => 24,  78 => 18,  76 => 17,  71 => 14,  68 => 13,  66 => 12,  62 => 10,  56 => 7,  50 => 5,  48 => 4,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "team/partials/index_content.html.twig", "/opt/domjudge/domserver/webapp/templates/team/partials/index_content.html.twig");
    }
}
