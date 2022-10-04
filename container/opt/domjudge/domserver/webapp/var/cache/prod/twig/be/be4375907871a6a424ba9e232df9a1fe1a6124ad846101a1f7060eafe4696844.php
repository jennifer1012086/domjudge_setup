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

/* jury/rejudging.html.twig */
class __TwigTemplate_14806f1df2aa5c925adfdea53a0bc1617751d2d3b70e124e5870768d2290cb69 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'extrahead' => [$this, 'block_extrahead'],
            'content' => [$this, 'block_content'],
            'extrafooter' => [$this, 'block_extrafooter'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "jury/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/rejudging.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/rejudging.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/rejudging.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Rejudging r";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "rejudgingid", [], "any", false, false, false, 4), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    // line 6
    public function block_extrahead($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrahead"));

        // line 7
        echo "    ";
        $this->displayParentBlock("extrahead", $context, $blocks);
        echo "
    ";
        // line 8
        echo twig_call_macro($macros["macros"], "macro_table_extrahead", [], 8, $context, $this->getSourceContext());
        echo "
    ";
        // line 9
        echo twig_call_macro($macros["macros"], "macro_select2_extrahead", [], 9, $context, $this->getSourceContext());
        echo "
";
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    // line 12
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "
    <h1>Rejudging r";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "rejudgingid", [], "any", false, false, false, 14), "html", null, true);
        echo " ";
        if ( !twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "valid", [], "any", false, false, false, 14)) {
            echo "(canceled)";
        }
        echo "</h1>

    <div class=\"row\">
        <div class=\"col-lg-4\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>Reason</th>
                    <td>
                        ";
        // line 22
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "reason", [], "any", false, false, false, 22))) {
            // line 23
            echo "                            <span class=\"nodata\">none</span>
                        ";
        } else {
            // line 25
            echo "                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "reason", [], "any", false, false, false, 25), "html", null, true);
            echo "
                        ";
        }
        // line 27
        echo "                    </td>
                </tr>
                ";
        // line 29
        if (twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "startUser", [], "any", false, false, false, 29)) {
            // line 30
            echo "                    <tr>
                        <th>Issued by</th>
                        <td>
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_user", ["userId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "startUser", [], "any", false, false, false, 33), "userid", [], "any", false, false, false, 33)]), "html", null, true);
            echo "\">
                                ";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "startUser", [], "any", false, false, false, 34), "name", [], "any", false, false, false, 34), "html", null, true);
            echo "
                            </a>
                        </td>
                    </tr>
                ";
        }
        // line 39
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "endtime", [], "any", false, false, false, 39)) {
            // line 40
            echo "                    <tr>
                        <th>";
            // line 41
            if (twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "valid", [], "any", false, false, false, 41)) {
                echo "Accepted";
            } else {
                echo "Canceled";
            }
            echo " by</th>
                        <td>
                            ";
            // line 43
            if (twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "autoapply", [], "any", false, false, false, 43)) {
                // line 44
                echo "                                automatically applied
                            ";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 45
($context["rejudging"] ?? null), "repeat", [], "any", false, false, false, 45)) {
                // line 46
                echo "                                part of a repeated judging
                            ";
            } else {
                // line 48
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_user", ["userId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "finishUser", [], "any", false, false, false, 48), "userid", [], "any", false, false, false, 48)]), "html", null, true);
                echo "\">
                                    ";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "finishUser", [], "any", false, false, false, 49), "name", [], "any", false, false, false, 49), "html", null, true);
                echo "
                                </a>
                            ";
            }
            // line 52
            echo "                        </td>
                    </tr>
                ";
        }
        // line 55
        echo "                <tr>
                    <th>Start time</th>
                    <td>
                        ";
        // line 58
        if (twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "starttime", [], "any", false, false, false, 58)) {
            // line 59
            echo "                            <span title=\"";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "starttime", [], "any", false, false, false, 59), "Y-m-d H:i:s (T)"), "html", null, true);
            echo "\">
                                ";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "starttime", [], "any", false, false, false, 60)), "html", null, true);
            echo "
                            </span>
                        ";
        } else {
            // line 63
            echo "                            <span class=\"nodata\">-</span>
                        ";
        }
        // line 65
        echo "                    </td>
                </tr>
                <tr>
                    <th>Apply time</th>
                    <td>
                        ";
        // line 70
        if (twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "endtime", [], "any", false, false, false, 70)) {
            // line 71
            echo "                            <span title=\"";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "endtime", [], "any", false, false, false, 71), "Y-m-d H:i:s (T)"), "html", null, true);
            echo "\">
                                ";
            // line 72
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "endtime", [], "any", false, false, false, 72)), "html", null, true);
            echo "
                            </span>
                        ";
        } else {
            // line 75
            echo "                            <span class=\"nodata\">-</span>
                        ";
        }
        // line 77
        echo "                    </td>
                </tr>
                <tr ";
        // line 79
        if ((0 >= twig_compare(($context["todo"] ?? null), 0))) {
            echo "class=\"d-none\"";
        }
        echo ">
                    <th>Queued</th>
                    <td><span data-todo>";
        // line 81
        echo twig_escape_filter($this->env, ($context["todo"] ?? null), "html", null, true);
        echo "</span> unfinished judgings</td>
                </tr>
                ";
        // line 83
        if (($context["repetitions"] ?? null)) {
            // line 84
            echo "                    <tr>
                        <th>Repetitions</th>
                        <td>
                            ";
            // line 87
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["repetitions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["rep"]) {
                // line 88
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_rejudging", ["rejudgingId" => $context["rep"]]), "html", null, true);
                echo "\">
                                    r";
                // line 89
                echo twig_escape_filter($this->env, $context["rep"], "html", null, true);
                echo "<br/>
                                </a>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rep'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "                        </td>
                    </tr>
                ";
        }
        // line 95
        echo "            </table>
        </div>
    </div>

    <div data-rejudging-buttons>
        ";
        // line 100
        $this->loadTemplate("jury/partials/rejudging_buttons.html.twig", "jury/rejudging.html.twig", 100)->display($context);
        // line 101
        echo "    </div>

    ";
        // line 103
        if ((twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "autoapply", [], "any", false, false, false, 103) &&  !twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "endtime", [], "any", false, false, false, 103))) {
            // line 104
            echo "         <br/>
         <div class=\"alert alert-warning\">Judgings in this rejudging will be applied automatically.</div>
    ";
        }
        // line 107
        echo "
    <div data-rejudging-matrix>
        ";
        // line 109
        $this->loadTemplate("jury/partials/rejudging_matrix.html.twig", "jury/rejudging.html.twig", 109)->display($context);
        // line 110
        echo "    </div>

    ";
        // line 112
        if (($context["stats"] ?? null)) {
            // line 113
            echo "        <h2>Statistics over repeated rejudgings</h2>
        <h4>Runtime spread</h4>
            <table class=\"table table-sm table-striped\">
                <tr><th>submission/testcase</th><th>spread</th><th>#judgings</th><th>result</th></tr>
\t\t";
            // line 117
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "runtime_spread", [], "any", false, false, false, 117));
            foreach ($context['_seq'] as $context["_key"] => $context["spread"]) {
                // line 118
                echo "\t\t    <tr>
                        <td>s";
                // line 119
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["spread"], "submitid", [], "any", false, false, false, 119), "html", null, true);
                echo "/tc";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["spread"], "rank", [], "any", false, false, false, 119), "html", null, true);
                echo "</td>
                        <td>";
                // line 120
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["spread"], "spread", [], "any", false, false, false, 120), 3), "html", null, true);
                echo "s</td>
                        <td>";
                // line 121
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["spread"], "count", [], "any", false, false, false, 121), "html", null, true);
                echo "</td>
                        <td>";
                // line 122
                echo $this->extensions['App\Twig\TwigExtension']->printResult(twig_get_attribute($this->env, $this->source, $context["spread"], "verdict", [], "any", false, false, false, 122));
                echo "</td>
\t\t    </tr>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['spread'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
            echo "\t    </table>
        ";
            // line 126
            if (twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "judging_runs_differ", [], "any", false, false, false, 126)) {
                // line 127
                echo "            <h4>Judging Run Differences</h4>
            <ul>
                ";
                // line 129
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "judging_runs_differ", [], "any", false, false, false, 129));
                foreach ($context['_seq'] as $context["_key"] => $context["diff"]) {
                    // line 130
                    echo "                    <li>s";
                    echo twig_escape_filter($this->env, $context["diff"], "html", null, true);
                    echo "</li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['diff'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 132
                echo "            </ul>
            ";
                // line 133
                if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "judging_runs_differ_overflow", [], "any", false, false, false, 133), 0))) {
                    // line 134
                    echo "                <em>Left out ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "judging_runs_differ_overflow", [], "any", false, false, false, 134), "html", null, true);
                    echo " submissions with different judging results.</em>
            ";
                }
                // line 136
                echo "        ";
            }
            // line 137
            echo "        ";
            if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "judgehost_stats", [], "any", false, false, false, 137)), 1))) {
                // line 138
                echo "            <h4>Judgehost stats</h4>
            <table class=\"table table-sm table-striped\">
                <tr><th>Judgehost</th><th>#judgings</th><th>avg. runtime</th><th>std.dev.</th><th>avg. duration</th></tr>
                ";
                // line 141
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "judgehost_stats", [], "any", false, false, false, 141));
                foreach ($context['_seq'] as $context["_key"] => $context["judgehost"]) {
                    // line 142
                    echo "                    <tr>
                        <td>";
                    // line 143
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["judgehost"], "judgehost", [], "any", false, false, false, 143), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 144
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["judgehost"], "njudged", [], "any", false, false, false, 144), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 145
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["judgehost"], "avgrun", [], "any", false, false, false, 145), 3), "html", null, true);
                    echo "s</td>
                        <td>";
                    // line 146
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["judgehost"], "stddev", [], "any", false, false, false, 146), 3), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 147
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["judgehost"], "avgduration", [], "any", false, false, false, 147), 3), "html", null, true);
                    echo "s</td>
                    </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['judgehost'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 150
                echo "            </table>
        ";
            }
            // line 152
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "judgings", [], "any", false, false, false, 152)) {
                // line 153
                echo "            <h4>Judging verdicts</h4>
            <table class=\"table table-sm table-striped\">
                <tr><th>jID</th><th>rID</th><th>Judgehost</th><th>runtime</th><th>verdict</th></tr>
                ";
                // line 156
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "judgings", [], "any", false, false, false, 156));
                foreach ($context['_seq'] as $context["_key"] => $context["judging"]) {
                    // line 157
                    echo "                    <tr>
                        <td>";
                    // line 158
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["judging"], "judgingid", [], "any", false, false, false, 158), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 159
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["judging"], "rejudgingid", [], "any", false, false, false, 159), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 160
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["judging"], "hostname", [], "any", false, false, false, 160), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 161
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["judging"], "duration", [], "any", false, false, false, 161), 3), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 162
                    echo $this->extensions['App\Twig\TwigExtension']->printResult(twig_get_attribute($this->env, $this->source, $context["judging"], "result", [], "any", false, false, false, 162));
                    echo "</td>
                    </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['judging'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 165
                echo "            </table>
        ";
            }
            // line 167
            echo "    ";
        }
        // line 168
        echo "
    <h2 class=\"mt-4\">Details</h2>

    <div class=\"btn-toolbar mb-3\" role=\"toolbar\" aria-label=\"Toolbar with button groups\">
        <div class=\"btn-group btn-group-toggle btn-group-sm input-group-sm\" data-toggle=\"buttons\">
            <div class=\"input-group-prepend\">
                <div class=\"input-group-text listtoggles\">Show:</div>
            </div>";
        // line 176
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["viewTypes"] ?? null));
        foreach ($context['_seq'] as $context["idx"] => $context["type"]) {
            // line 177
            echo "
                <label class=\"btn btn-secondary ";
            // line 178
            if ((0 === twig_compare($context["idx"], ($context["view"] ?? null)))) {
                echo "active";
            }
            echo "\">
                    <input type=\"radio\" name=\"viewtype\" autocomplete=\"off\" value=\"";
            // line 179
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "\"
                           ";
            // line 180
            if ((0 === twig_compare($context["idx"], ($context["view"] ?? null)))) {
                echo "checked";
            }
            echo "> ";
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "
                </label>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['idx'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 183
        echo "        </div>&nbsp;
        ";
        // line 184
        if (twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "repeat", [], "any", false, false, false, 184)) {
            // line 185
            echo "            <div class=\"btn-group-toggle btn-group-sm\" data-toggle=\"buttons\">
                <label class=\"btn btn-outline-secondary ";
            // line 186
            if (($context["showStatistics"] ?? null)) {
                echo "active";
            }
            echo "\">
                    <input type=\"checkbox\" id=\"statistics-toggle\" ";
            // line 187
            if (($context["showStatistics"] ?? null)) {
                echo "checked";
            }
            echo " autocomplete=\"off\">
                    <i class=\"fas fa-list-ol\"></i> Statistics
                </label>
            </div>
        ";
        }
        // line 192
        echo "    </div>

    <form action=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_rejudging", ["rejudgingId" => twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "rejudgingid", [], "any", false, false, false, 194)]), "html", null, true);
        echo "\" method=\"get\">
        <input type=\"hidden\" name=\"view\" value=\"";
        // line 195
        echo twig_escape_filter($this->env, (($__internal_compile_0 = ($context["viewTypes"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[($context["view"] ?? null)] ?? null) : null), "html", null, true);
        echo "\"/>
        <div class=\"form-row\">
            <div class=\"form-group col-md-4\">
                <label for=\"oldverdict\">Old verdict</label>
                <select style=\"width: 100%\" class=\"select2 form-control\" name=\"oldverdict\" id=\"oldverdict\">
                    <option value=\"all\" ";
        // line 200
        if ((0 === twig_compare(($context["oldverdict"] ?? null), "all"))) {
            echo "selected";
        }
        echo ">all</option>";
        // line 201
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["verdicts"] ?? null));
        foreach ($context['_seq'] as $context["verdict"] => $context["abbreviation"]) {
            // line 202
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $context["verdict"], "html", null, true);
            echo "\" ";
            if ((0 === twig_compare(($context["oldverdict"] ?? null), $context["verdict"]))) {
                echo "selected";
            }
            echo ">
                            ";
            // line 203
            echo twig_escape_filter($this->env, $context["verdict"], "html", null, true);
            echo "
                        </option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['verdict'], $context['abbreviation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 206
        echo "
                </select>
            </div>
            <div class=\"form-group col-md-4\">
                <label for=\"newverdict\">New verdict</label>
                <select style=\"width: 100%\" class=\"select2 form-control\" name=\"newverdict\" id=\"newverdict\">
                    <option value=\"all\" ";
        // line 212
        if ((0 === twig_compare(($context["newverdict"] ?? null), "all"))) {
            echo "selected";
        }
        echo ">all</option>";
        // line 213
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["verdicts"] ?? null));
        foreach ($context['_seq'] as $context["verdict"] => $context["abbreviation"]) {
            // line 214
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $context["verdict"], "html", null, true);
            echo "\" ";
            if ((0 === twig_compare(($context["newverdict"] ?? null), $context["verdict"]))) {
                echo "selected";
            }
            echo ">
                            ";
            // line 215
            echo twig_escape_filter($this->env, $context["verdict"], "html", null, true);
            echo "
                        </option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['verdict'], $context['abbreviation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 218
        echo "
                </select>
            </div>
            <div class=\"form-group col-md-2\">
                <label>&nbsp;</label>
                <input class=\"btn btn-primary form-control\" type=\"submit\" value=\"Filter\"/>
            </div>
            <div class=\"form-group col-md-2\">
                <label>&nbsp;</label>
                <a href=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_rejudging", ["rejudgingId" => twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "rejudgingid", [], "any", false, false, false, 227), "view" => (($__internal_compile_1 = ($context["viewTypes"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[($context["view"] ?? null)] ?? null) : null)]), "html", null, true);
        echo "\"
                   class=\"btn btn-secondary form-control\">Clear</a>
            </div>
        </div>
    </form>

    <div data-ajax-refresh-target data-ajax-refresh-after=\"updateMatrix\">
        ";
        // line 234
        $this->loadTemplate("jury/partials/rejudging_submissions.html.twig", "jury/rejudging.html.twig", 234)->display($context);
        // line 235
        echo "    </div>

";
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    // line 239
    public function block_extrafooter($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrafooter"));

        // line 240
        echo "    <script>
        \$(function () {
            \$('input[name=viewtype]').on('change', function () {
                window.location = '";
        // line 243
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_rejudging", ["rejudgingId" => twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "rejudgingid", [], "any", false, false, false, 243), "view" => "REPLACE_ME", "oldverdict" => ($context["oldverdict"] ?? null), "newverdict" => ($context["newverdict"] ?? null), "show_statistics" => ($context["showStatistics"] ?? null)]), "html", null, true);
        echo "'.replace('REPLACE_ME', \$(this).val()).replaceAll('&amp;', '&');
            });

            \$('#statistics-toggle').on('change', function () {
                window.location = '";
        // line 247
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_rejudging", ["rejudgingId" => twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "rejudgingid", [], "any", false, false, false, 247), "view" => (($__internal_compile_2 = ($context["viewTypes"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[($context["view"] ?? null)] ?? null) : null), "oldverdict" => ($context["oldverdict"] ?? null), "newverdict" => ($context["newverdict"] ?? null), "show_statistics" => "REPLACE_ME"]), "html", null, true);
        echo "'.replace('REPLACE_ME', \$(this).is(':checked')).replaceAll('&amp;', '&');
            });

            \$('.select2').select2();

            window.updateMatrix = function () {
                var \$matrixData = \$('[data-new-rejudging-matrix]');
                var \$matrix = \$('[data-rejudging-matrix]');
                \$matrix.html(\$matrixData.children());

                var \$buttonData = \$('[data-new-rejudging-buttons]');
                var \$button = \$('[data-rejudging-buttons]');
                \$button.html(\$buttonData.children());

                var todo = \$('[data-new-todo]').text();
                var \$todo = \$('[data-todo]');
                \$todo.text(todo);
                if (parseInt(todo) <= 0) {
                    \$todo.closest('tr').addClass('d-none');
                } else {
                    \$todo.closest('tr').removeClass('d-none');
                }
            }
        });
    </script>
";
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    public function getTemplateName()
    {
        return "jury/rejudging.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  677 => 247,  670 => 243,  665 => 240,  658 => 239,  649 => 235,  647 => 234,  637 => 227,  626 => 218,  618 => 215,  609 => 214,  605 => 213,  600 => 212,  592 => 206,  584 => 203,  575 => 202,  571 => 201,  566 => 200,  558 => 195,  554 => 194,  550 => 192,  540 => 187,  534 => 186,  531 => 185,  529 => 184,  526 => 183,  514 => 180,  510 => 179,  504 => 178,  501 => 177,  497 => 176,  488 => 168,  485 => 167,  481 => 165,  472 => 162,  468 => 161,  464 => 160,  460 => 159,  456 => 158,  453 => 157,  449 => 156,  444 => 153,  441 => 152,  437 => 150,  428 => 147,  424 => 146,  420 => 145,  416 => 144,  412 => 143,  409 => 142,  405 => 141,  400 => 138,  397 => 137,  394 => 136,  388 => 134,  386 => 133,  383 => 132,  374 => 130,  370 => 129,  366 => 127,  364 => 126,  361 => 125,  352 => 122,  348 => 121,  344 => 120,  338 => 119,  335 => 118,  331 => 117,  325 => 113,  323 => 112,  319 => 110,  317 => 109,  313 => 107,  308 => 104,  306 => 103,  302 => 101,  300 => 100,  293 => 95,  288 => 92,  279 => 89,  274 => 88,  270 => 87,  265 => 84,  263 => 83,  258 => 81,  251 => 79,  247 => 77,  243 => 75,  237 => 72,  232 => 71,  230 => 70,  223 => 65,  219 => 63,  213 => 60,  208 => 59,  206 => 58,  201 => 55,  196 => 52,  190 => 49,  185 => 48,  181 => 46,  179 => 45,  176 => 44,  174 => 43,  165 => 41,  162 => 40,  159 => 39,  151 => 34,  147 => 33,  142 => 30,  140 => 29,  136 => 27,  130 => 25,  126 => 23,  124 => 22,  109 => 14,  106 => 13,  99 => 12,  90 => 9,  86 => 8,  81 => 7,  74 => 6,  58 => 4,  50 => 1,  48 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/rejudging.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/rejudging.html.twig");
    }
}
