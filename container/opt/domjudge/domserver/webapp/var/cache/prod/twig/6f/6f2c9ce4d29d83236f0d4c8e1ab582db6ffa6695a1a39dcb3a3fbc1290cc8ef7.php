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

/* jury/partials/submission_graph.html.twig */
class __TwigTemplate_5b6904e379ffb06342c89930df69c7a8963ba77b74a95b47637387d6c91ef150 extends Template
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
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/submission_graph.html.twig"));

        // line 1
        $context["timelimit"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "problem", [], "any", false, false, false, 1), "timelimit", [], "any", false, false, false, 1) * twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "language", [], "any", false, false, false, 1), "timeFactor", [], "any", false, false, false, 1));
        // line 2
        echo "<div>
    ";
        // line 3
        if ( !(null === ($context["selectedJudging"] ?? null))) {
            // line 4
            echo "        <div style=\"display: inline-block\" id=\"testcaseruntime\">
            <h3 id=\"graphs\">Testcase Runtimes</h3>
            <svg style=\"width:500px; height:250px;\"></svg>
        </div>
    ";
        }
        // line 9
        echo "    ";
        if (( !(null === ($context["externalJudgement"] ?? null)) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["externalJudgement"] ?? null), "result", [], "any", false, false, false, 9)))) {
            // line 10
            echo "        <div style=\"display: inline-block\" id=\"externalruntime\">
            <h3 id=\"graphs\">External Testcase Runtimes</h3>
            <svg style=\"width:500px; height:250px;\"></svg>
        </div>
    ";
        }
        // line 15
        echo "    ";
        if ((1 === twig_compare(twig_length_filter($this->env, ($context["judgings"] ?? null)), 1))) {
            // line 16
            echo "        <div style=\"display: inline-block\" id=\"maxruntime\">
            <h3 id=\"graphs\">Max Runtimes</h3>
            <svg style=\"width:500px; height:250px;\"></svg>
        </div>
    ";
        }
        // line 21
        echo "</div>

<script>
    ";
        // line 24
        $context["colors"] = ["correct" => "#28a745", "wrong-answer" => "#dc3545", "timelimit" => "orange", "run-error" => "#ff3399", "compiler-error" => "grey", "no-output" => "purple", "frozen" => "blue", "output-limit" => "black"];
        // line 34
        echo "    function create_chart(data, maxY) {
        var tickStep = 1;
        if (maxY <= 2) {
            tickStep = 0.2;
        } else if (maxY <= 5) {
            tickStep = 0.5;
        }
        maxY += tickStep;
        var chart = nv.models.multiBarChart()
            .x(function (d) {
                return d.label
            })
            .y(function (d) {
                return d.value
            })
            .showControls(false)
            .reduceXTicks(true)
            .forceY([0, maxY])
            .duration(250)
            .showLegend(false)
        ;
        var tickValues = [];
        for (i = 0; i <= maxY; i += tickStep) {
            tickValues.push(i);
        }
        chart.yAxis
            .tickValues(tickValues)
            .axisLabel('Runtime(in s)');
        return chart;
    }

    \$(function () {
        var maxY = ";
        // line 66
        echo twig_escape_filter($this->env, ($context["timelimit"] ?? null), "html", null, true);
        echo ";
        ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["judgings"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["judging"]) {
            // line 68
            echo "        maxY = Math.max(maxY, ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["maxRunTimes"] ?? null), twig_get_attribute($this->env, $this->source, $context["judging"], "judgingId", [], "any", false, false, false, 68), [], "array", true, true, false, 68)) ? (_twig_default_filter((($__internal_compile_0 = ($context["maxRunTimes"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["judging"], "judgingId", [], "any", false, false, false, 68)] ?? null) : null), 0)) : (0)), "html", null, true);
            echo ");
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['judging'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "        ";
        if ((1 === twig_compare(twig_length_filter($this->env, ($context["judgings"] ?? null)), 1))) {
            // line 71
            echo "        var run_max_times = [
            {
                key: \"Max Runtime\",
                values: [
                    ";
            // line 75
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, ($context["judgings"] ?? null), function ($__judging__) use ($context, $macros) { $context["judging"] = $__judging__; return (twig_get_attribute($this->env, $this->source, $context["judging"], "result", [], "any", false, false, false, 75) && (0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["judging"], "result", [], "any", false, false, false, 75), "aborted"))); }));
            foreach ($context['_seq'] as $context["_key"] => $context["judging"]) {
                // line 76
                echo "                    {
                        \"label\": \"j";
                // line 77
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["judging"], "judgingid", [], "any", false, false, false, 77), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["judging"], "result", [], "any", false, false, false, 77), "html", null, true);
                echo ")\",
                        \"value\": ";
                // line 78
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["maxRunTimes"] ?? null), twig_get_attribute($this->env, $this->source, $context["judging"], "judgingId", [], "any", false, false, false, 78), [], "array", true, true, false, 78)) ? (_twig_default_filter((($__internal_compile_1 = ($context["maxRunTimes"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["judging"], "judgingId", [], "any", false, false, false, 78)] ?? null) : null), 0)) : (0)), "html", null, true);
                echo ",
                        \"color\": \"";
                // line 79
                echo twig_escape_filter($this->env, (($__internal_compile_2 = ($context["colors"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["judging"], "result", [], "any", false, false, false, 79)] ?? null) : null), "html", null, true);
                echo "\",
                    },
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['judging'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "                ]
            }
        ];
        nv.addGraph(function () {
            var chart = create_chart(run_max_times, maxY);
            chart.xAxis.axisLabel(\"Judging\");
            d3.select('#maxruntime svg')
                .datum(run_max_times)
                .call(chart);
            var svgsize = chart.container.clientWidth || chart.container.parentNode.clientWidth;
            var line = d3.select('#maxruntime svg')
                .append('line')
                .attr({
                    x1: chart.margin().left,
                    y1: chart.yAxis.scale()(";
            // line 96
            echo twig_escape_filter($this->env, ($context["timelimit"] ?? null), "html", null, true);
            echo ") + chart.margin().top,
                    x2: +svgsize - chart.margin().right,
                    y2: chart.yAxis.scale()(";
            // line 98
            echo twig_escape_filter($this->env, ($context["timelimit"] ?? null), "html", null, true);
            echo ") + chart.margin().top,
                })
                .style(\"stroke\", \"#F00\");
            nv.utils.windowResize(chart.update);
            return chart;
        });
        ";
        }
        // line 105
        echo "
        ";
        // line 106
        if ( !(null === ($context["selectedJudging"] ?? null))) {
            // line 107
            echo "        var testcase_times = [
            {
                key: \"Runtime\",
                values: [
                    ";
            // line 111
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["runs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["run"]) {
                // line 112
                echo "                    {
                        \"label\": \"";
                // line 113
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["run"], "rank", [], "any", false, false, false, 113), "html", null, true);
                echo "\",
                        \"value\": ";
                // line 114
                if (twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 114)) {
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, true, false, 114), "runtime", [], "any", true, true, false, 114)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, true, false, 114), "runtime", [], "any", false, false, false, 114), 0)) : (0)), "html", null, true);
                } else {
                    echo "0";
                }
                echo ",
                        \"color\": \"";
                // line 115
                if (twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 115)) {
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 115), "runresult", [], "any", false, false, false, 115), [], "array", true, true, false, 115)) ? (_twig_default_filter((($__internal_compile_3 = ($context["colors"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 115), "runresult", [], "any", false, false, false, 115)] ?? null) : null), "grey")) : ("grey")), "html", null, true);
                } else {
                    echo "grey";
                }
                echo "\",
                        \"description\": \"";
                // line 116
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["run"], "description", [0 => true], "method", true, true, false, 116)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["run"], "description", [0 => true], "method", false, false, false, 116), twig_get_attribute($this->env, $this->source, $context["run"], "rank", [], "any", false, false, false, 116))) : (twig_get_attribute($this->env, $this->source, $context["run"], "rank", [], "any", false, false, false, 116))), "js"), "html", null, true);
                echo "\",
                    },
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['run'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 119
            echo "                ]
            }
        ];
        nv.addGraph(function () {
            var chart = create_chart(testcase_times, maxY);
            chart.tooltip.contentGenerator(function (obj) {
                var format = d3.format(\".3f\");
                return \"<b>Testcase \" + obj.data.description + \"</b><br><b>Runtime:</b> \" + format(obj.data.value) + \"s\";
            });
            chart.xAxis.axisLabel(\"Testcase Rank\");
            d3.select('#testcaseruntime svg')
                .datum(testcase_times)
                .call(chart);
            var svgsize = chart.container.clientWidth || chart.container.parentNode.clientWidth;
            var line = d3.select('#testcaseruntime svg')
                .append('line')
                .attr({
                    x1: chart.margin().left,
                    y1: chart.yAxis.scale()(";
            // line 137
            echo twig_escape_filter($this->env, ($context["timelimit"] ?? null), "html", null, true);
            echo ") + chart.margin().top,
                    x2: +svgsize - chart.margin().right,
                    y2: chart.yAxis.scale()(";
            // line 139
            echo twig_escape_filter($this->env, ($context["timelimit"] ?? null), "html", null, true);
            echo ") + chart.margin().top,
                })
                .style(\"stroke\", \"#F00\");
            nv.utils.windowResize(chart.update);
            return chart;
        });
        ";
        }
        // line 146
        echo "
        ";
        // line 148
        echo "        ";
        if (( !(null === ($context["externalJudgement"] ?? null)) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["externalJudgement"] ?? null), "result", [], "any", false, false, false, 148)))) {
            // line 149
            echo "        var external_times = [
            {
                key: \"Runtime\",
                values: [
                    ";
            // line 153
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["externalRuns"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["run"]) {
                // line 154
                echo "                    {
                        \"label\": \"";
                // line 155
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["run"], "rank", [], "any", false, false, false, 155), "html", null, true);
                echo "\",
                        \"value\": ";
                // line 156
                if (twig_get_attribute($this->env, $this->source, $context["run"], "firstExternalRun", [], "any", false, false, false, 156)) {
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], "firstExternalRun", [], "any", false, true, false, 156), "runtime", [], "any", true, true, false, 156)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], "firstExternalRun", [], "any", false, true, false, 156), "runtime", [], "any", false, false, false, 156), 0)) : (0)), "html", null, true);
                } else {
                    echo "0";
                }
                echo ",
                        \"color\": \"";
                // line 157
                if (twig_get_attribute($this->env, $this->source, $context["run"], "firstExternalRun", [], "any", false, false, false, 157)) {
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], "firstExternalRun", [], "any", false, false, false, 157), "result", [], "any", false, false, false, 157), [], "array", true, true, false, 157)) ? (_twig_default_filter((($__internal_compile_4 = ($context["colors"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], "firstExternalRun", [], "any", false, false, false, 157), "result", [], "any", false, false, false, 157)] ?? null) : null), "grey")) : ("grey")), "html", null, true);
                } else {
                    echo "grey";
                }
                echo "\",
                        \"description\": \"";
                // line 158
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["run"], "description", [], "any", true, true, false, 158)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["run"], "description", [], "any", false, false, false, 158), twig_get_attribute($this->env, $this->source, $context["run"], "rank", [], "any", false, false, false, 158))) : (twig_get_attribute($this->env, $this->source, $context["run"], "rank", [], "any", false, false, false, 158))), "html", null, true);
                echo "\",
                    },
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['run'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 161
            echo "                ]
            }
        ];
        nv.addGraph(function () {
            var chart = create_chart(external_times, maxY);
            chart.tooltip.contentGenerator(function (obj) {
                var format = d3.format(\".3f\");
                return \"<b>Testcase \" + obj.data.description + \"</b><br><b>Runtime:</b> \" + format(obj.data.value) + \"s\";
            });
            chart.xAxis.axisLabel(\"Testcase Rank\");
            d3.select('#externalruntime svg')
                .datum(external_times)
                .call(chart);
            var svgsize = chart.container.clientWidth || chart.container.parentNode.clientWidth;
            var line = d3.select('#externalruntime svg')
                .append('line')
                .attr({
                    x1: chart.margin().left,
                    y1: chart.yAxis.scale()(";
            // line 179
            echo twig_escape_filter($this->env, ($context["timelimit"] ?? null), "html", null, true);
            echo ") + chart.margin().top,
                    x2: +svgsize - chart.margin().right,
                    y2: chart.yAxis.scale()(";
            // line 181
            echo twig_escape_filter($this->env, ($context["timelimit"] ?? null), "html", null, true);
            echo ") + chart.margin().top,
                })
                .style(\"stroke\", \"#F00\");
            nv.utils.windowResize(chart.update);
            return chart;
        });
        ";
        }
        // line 188
        echo "    })
</script>

";
        // line 191
        $this->loadTemplate("jury/analysis/download_graphs.html.twig", "jury/partials/submission_graph.html.twig", 191)->display($context);
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    public function getTemplateName()
    {
        return "jury/partials/submission_graph.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  368 => 191,  363 => 188,  353 => 181,  348 => 179,  328 => 161,  319 => 158,  311 => 157,  303 => 156,  299 => 155,  296 => 154,  292 => 153,  286 => 149,  283 => 148,  280 => 146,  270 => 139,  265 => 137,  245 => 119,  236 => 116,  228 => 115,  220 => 114,  216 => 113,  213 => 112,  209 => 111,  203 => 107,  201 => 106,  198 => 105,  188 => 98,  183 => 96,  167 => 82,  158 => 79,  154 => 78,  148 => 77,  145 => 76,  141 => 75,  135 => 71,  132 => 70,  123 => 68,  119 => 67,  115 => 66,  81 => 34,  79 => 24,  74 => 21,  67 => 16,  64 => 15,  57 => 10,  54 => 9,  47 => 4,  45 => 3,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/partials/submission_graph.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/partials/submission_graph.html.twig");
    }
}
