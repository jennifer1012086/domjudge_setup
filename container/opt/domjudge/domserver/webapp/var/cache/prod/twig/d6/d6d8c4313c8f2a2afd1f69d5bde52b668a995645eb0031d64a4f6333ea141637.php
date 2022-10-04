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

/* partials/scoreboard_summary.html.twig */
class __TwigTemplate_4fb5c5fa7dc1688b69aff7985098094061a973805c57e854cac4c8c775387080 extends Template
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
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/scoreboard_summary.html.twig"));

        // line 1
        if ((null === ($context["limitToTeamIds"] ?? null))) {
            // line 2
            echo "    ";
            if ((($context["showTeamSubmissions"] ?? null) || ($context["jury"] ?? null))) {
                // line 3
                echo "        <tr style=\"border-top: 2px solid black;\">
            ";
                // line 4
                $context["summaryColspan"] = 3;
                // line 5
                echo "            ";
                if (($context["showAffiliationLogos"] ?? null)) {
                    // line 6
                    echo "                ";
                    $context["summaryColspan"] = (($context["summaryColspan"] ?? null) + 1);
                    // line 7
                    echo "            ";
                }
                // line 8
                echo "            <td class=\"scoresummary\" title=\"Summary\" colspan=\"";
                echo twig_escape_filter($this->env, ($context["summaryColspan"] ?? null), "html", null, true);
                echo "\">Summary</td>
            ";
                // line 9
                if (twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "showPoints", [], "any", false, false, false, 9)) {
                    // line 10
                    echo "                <td class=\"scorenc\"></td>
            ";
                } else {
                    // line 12
                    echo "                <td title=\"total solved\" class=\"scorenc\">
                    ";
                    // line 13
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "summary", [], "any", false, false, false, 13), "numberOfPoints", [0 => ($context["sortOrder"] ?? null)], "method", false, false, false, 13), "html", null, true);
                    echo "
                </td>
            ";
                }
                // line 16
                echo "            <td></td>
            ";
                // line 17
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "problems", [], "any", false, false, false, 17));
                foreach ($context['_seq'] as $context["_key"] => $context["problem"]) {
                    // line 18
                    echo "                ";
                    $context["summary"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "summary", [], "any", false, false, false, 18), "problem", [0 => twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 18)], "method", false, false, false, 18);
                    // line 19
                    echo "                <td style=\"text-align: left;\">
                    ";
                    // line 20
                    $context["link"] = null;
                    // line 21
                    echo "                    ";
                    if (($context["jury"] ?? null)) {
                        // line 22
                        echo "                        ";
                        $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem", ["probId" => twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 22)]);
                        // line 23
                        echo "                    ";
                    }
                    // line 24
                    echo "                    <a ";
                    if (($context["link"] ?? null)) {
                        echo "href=\"";
                        echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                        echo "\"";
                    }
                    echo ">
                        <i class=\"fas fa-thumbs-up fa-fw\"></i>
                        <span class=\"submcorrect\" style=\"font-size:90%;\" title=\"number of accepted submissions\">
                                ";
                    // line 27
                    (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["summary"] ?? null), "numSubmissionsCorrect", [], "any", false, true, false, 27), ($context["sortOrder"] ?? null), [], "array", true, true, false, 27) &&  !(null === (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["summary"] ?? null), "numSubmissionsCorrect", [], "any", false, true, false, 27)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[($context["sortOrder"] ?? null)] ?? null) : null)))) ? (print (twig_escape_filter($this->env, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["summary"] ?? null), "numSubmissionsCorrect", [], "any", false, true, false, 27)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[($context["sortOrder"] ?? null)] ?? null) : null), "html", null, true))) : (print (0)));
                    echo "
                            </span>
                        <br/>

                        <i class=\"fas fa-thumbs-down fa-fw\"></i>
                        <span class=\"submreject\" style=\"font-size:90%;\" title=\"number of rejected submissions\">
                                ";
                    // line 33
                    echo twig_escape_filter($this->env, ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["summary"] ?? null), "numSubmissions", [], "any", false, true, false, 33), ($context["sortOrder"] ?? null), [], "array", true, true, false, 33) &&  !(null === (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["summary"] ?? null), "numSubmissions", [], "any", false, true, false, 33)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[($context["sortOrder"] ?? null)] ?? null) : null)))) ? ((($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["summary"] ?? null), "numSubmissions", [], "any", false, true, false, 33)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[($context["sortOrder"] ?? null)] ?? null) : null)) : (0)) - (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["summary"] ?? null), "numSubmissionsCorrect", [], "any", false, true, false, 33), ($context["sortOrder"] ?? null), [], "array", true, true, false, 33) &&  !(null === (($__internal_compile_4 = twig_get_attribute($this->env, $this->source, ($context["summary"] ?? null), "numSubmissionsCorrect", [], "any", false, true, false, 33)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[($context["sortOrder"] ?? null)] ?? null) : null)))) ? ((($__internal_compile_5 = twig_get_attribute($this->env, $this->source, ($context["summary"] ?? null), "numSubmissionsCorrect", [], "any", false, true, false, 33)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[($context["sortOrder"] ?? null)] ?? null) : null)) : (0))), "html", null, true);
                    echo "
                            </span>
                        <br/>

                        <i class=\"fas fa-question-circle fa-fw\"></i>
                        <span class=\"submpend\" style=\"font-size:90%;\" title=\"number of pending submissions\">
                                ";
                    // line 39
                    (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["summary"] ?? null), "numSubmissionsPending", [], "any", false, true, false, 39), ($context["sortOrder"] ?? null), [], "array", true, true, false, 39) &&  !(null === (($__internal_compile_6 = twig_get_attribute($this->env, $this->source, ($context["summary"] ?? null), "numSubmissionsPending", [], "any", false, true, false, 39)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[($context["sortOrder"] ?? null)] ?? null) : null)))) ? (print (twig_escape_filter($this->env, (($__internal_compile_7 = twig_get_attribute($this->env, $this->source, ($context["summary"] ?? null), "numSubmissionsPending", [], "any", false, true, false, 39)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[($context["sortOrder"] ?? null)] ?? null) : null), "html", null, true))) : (print (0)));
                    echo "
                            </span>
                        <br/>

                        <i class=\"fas fa-clock fa-fw\"></i>
                        <span style=\"font-size:90%;\" title=\"first solved\">
                            ";
                    // line 45
                    if ( !(null === twig_get_attribute($this->env, $this->source, ($context["summary"] ?? null), "bestTimeInMinutes", [0 => ($context["sortOrder"] ?? null)], "method", false, false, false, 45))) {
                        // line 46
                        echo "                                ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["summary"] ?? null), "bestTimeInMinutes", [0 => ($context["sortOrder"] ?? null)], "method", false, false, false, 46), "html", null, true);
                        echo "min
                            ";
                    } else {
                        // line 48
                        echo "                                n/a
                            ";
                    }
                    // line 50
                    echo "                        </span>
                    </a>
                </td>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                echo "        </tr>
    ";
            }
        }
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    public function getTemplateName()
    {
        return "partials/scoreboard_summary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 54,  153 => 50,  149 => 48,  143 => 46,  141 => 45,  132 => 39,  123 => 33,  114 => 27,  103 => 24,  100 => 23,  97 => 22,  94 => 21,  92 => 20,  89 => 19,  86 => 18,  82 => 17,  79 => 16,  73 => 13,  70 => 12,  66 => 10,  64 => 9,  59 => 8,  56 => 7,  53 => 6,  50 => 5,  48 => 4,  45 => 3,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "partials/scoreboard_summary.html.twig", "/opt/domjudge/domserver/webapp/templates/partials/scoreboard_summary.html.twig");
    }
}
