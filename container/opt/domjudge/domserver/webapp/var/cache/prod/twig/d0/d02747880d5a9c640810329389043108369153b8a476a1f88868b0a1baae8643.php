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

/* team/menu.html.twig */
class __TwigTemplate_099b38fdae01dabcf89d18091562e16f1f35ee581a6aebf0f98bf9176b977799 extends Template
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
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "team/menu.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-md navbar-dark bg-dark fixed-top\">
    <a class=\"navbar-brand hidden-sm-down\" href=\"";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_index");
        echo "\">DOMjudge</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#menuDefault\"
            aria-controls=\"menuDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>

    ";
        // line 8
        $context["current_route"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 8), "attributes", [], "any", false, false, false, 8), "get", [0 => "_route"], "method", false, false, false, 8);
        // line 9
        echo "
    <div class=\"collapse navbar-collapse\" id=\"menuDefault\">
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item ";
        // line 12
        if (twig_in_filter(($context["current_route"] ?? null), [0 => "team_index", 1 => "team_clarification", 2 => "team_clarification_add", 3 => "team_submission"])) {
            echo "active";
        }
        echo "\">
                <a class=\"nav-link\" href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_index");
        echo "\"><i class=\"fas fa-home\"></i> Home</a>
            </li>
            <li class=\"nav-item ";
        // line 15
        if ((0 === twig_compare(($context["current_route"] ?? null), "team_problems"))) {
            echo "active";
        }
        echo "\">
                ";
        // line 16
        if (( !(null === ($context["current_team_contest"] ?? null)) && ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY") || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["current_team_contest"] ?? null), "freezeData", [], "any", false, false, false, 16), "started", [], "any", false, false, false, 16)))) {
            // line 17
            echo "                    <a class=\"nav-link\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_problems");
            echo "\">
                        <i class=\"fas fa-book-open\"></i> Problemset
                    </a>
                ";
        } else {
            // line 21
            echo "                    <a class=\"nav-link disabled\"><i class=\"fas fa-book-open\"></i> Problemset</a>
                ";
        }
        // line 23
        echo "            </li>
            ";
        // line 24
        if (($context["have_printing"] ?? null)) {
            // line 25
            echo "                <li class=\"nav-item ";
            if ((0 === twig_compare(($context["current_route"] ?? null), "team_print"))) {
                echo "active";
            }
            echo "\">
                    <a class=\"nav-link\" href=\"";
            // line 26
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_print");
            echo "\"><i class=\"fas fa-file-alt\"></i> Print</a>
                </li>
            ";
        }
        // line 29
        echo "            <li class=\"nav-item ";
        if (twig_in_filter(($context["current_route"] ?? null), [0 => "team_scoreboard", 1 => "team_team"])) {
            echo "active";
        }
        echo "\">
                <a class=\"nav-link\" href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_scoreboard");
        echo "\"><i class=\"fas fa-list-ol\"></i> Scoreboard</a>
            </li>
            ";
        // line 32
        if ( !twig_test_empty(($context["doc_links"] ?? null))) {
            // line 33
            echo "                <li class=\"nav-item ";
            if (twig_in_filter(($context["current_route"] ?? null), [0 => "team_docs"])) {
                echo "active";
            }
            echo "\">
                    <a class=\"nav-link\" href=\"";
            // line 34
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_docs");
            echo "\"><i class=\"fas fa-file-alt\"></i> Docs</a>
                </li>
            ";
        }
        // line 37
        echo "
            ";
        // line 38
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_BALLOON"))) {
            // line 39
            echo "                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
            // line 40
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_index");
            echo "\"><i class=\"fas fa-arrow-right\"></i> Jury</a>
                </li>
            ";
        }
        // line 43
        echo "        </ul>

        <div id=\"submitbut\">
            ";
        // line 46
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY") || ( !(null === ($context["current_team_contest"] ?? null)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["current_team_contest"] ?? null), "freezeData", [], "any", false, false, false, 46), "started", [], "any", false, false, false, 46)))) {
            // line 47
            echo "                <a class=\"nav-link justify-content-center\" data-ajax-modal data-ajax-modal-after=\"initSubmitModal\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_submit");
            echo "\">
                    <span class=\"btn btn-success btn-sm\">
                        <i class=\"fas fa-cloud-upload-alt\"></i> Submit
                    </span>
                </a>
            ";
        } else {
            // line 53
            echo "                <a class=\"nav-link justify-content-center\">
                    <span class=\"btn btn-success btn-sm disabled\">
                        <i class=\"fas fa-cloud-upload-alt\"></i> Submit
                    </span>
                </a>
            ";
        }
        // line 59
        echo "        </div>

        ";
        // line 61
        $this->loadTemplate("partials/menu_login_logout_button.html.twig", "team/menu.html.twig", 61)->display(twig_array_merge($context, ["confirmLogout" => true]));
        // line 62
        echo "
        <ul class=\"navbar-nav\">
            ";
        // line 64
        if ((1 === twig_compare(twig_length_filter($this->env, ($context["current_team_contests"] ?? null)), 1))) {
            // line 65
            echo "                ";
            $this->loadTemplate("partials/menu_change_contest.html.twig", "team/menu.html.twig", 65)->display(twig_array_merge($context, ["contest" => ($context["current_team_contest"] ?? null), "contests" => ($context["current_team_contests"] ?? null), "change_path" => "team_change_contest", "show_no_contest" => false]));
            // line 66
            echo "            ";
        }
        // line 67
        echo "        </ul>

        ";
        // line 69
        $this->loadTemplate("partials/menu_countdown.html.twig", "team/menu.html.twig", 69)->display(twig_array_merge($context, ["contest" => ($context["current_team_contest"] ?? null)]));
        // line 70
        echo "    </div>
</nav>
";
        // line 72
        $this->loadTemplate("partials/scoreboard_progress_bar.html.twig", "team/menu.html.twig", 72)->display(twig_array_merge($context, ["margin" =>  -9, "contest" => ($context["current_team_contest"] ?? null)]));
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    public function getTemplateName()
    {
        return "team/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 72,  198 => 70,  196 => 69,  192 => 67,  189 => 66,  186 => 65,  184 => 64,  180 => 62,  178 => 61,  174 => 59,  166 => 53,  156 => 47,  154 => 46,  149 => 43,  143 => 40,  140 => 39,  138 => 38,  135 => 37,  129 => 34,  122 => 33,  120 => 32,  115 => 30,  108 => 29,  102 => 26,  95 => 25,  93 => 24,  90 => 23,  86 => 21,  78 => 17,  76 => 16,  70 => 15,  65 => 13,  59 => 12,  54 => 9,  52 => 8,  43 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "team/menu.html.twig", "/opt/domjudge/domserver/webapp/templates/team/menu.html.twig");
    }
}
