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

/* team/partials/submission.html.twig */
class __TwigTemplate_c2d176c438a9fe9e6e4370c8837088a22876f67cda94c4ff1862bddb82920505 extends Template
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
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "team/partials/submission.html.twig"));

        // line 1
        if (((twig_test_empty(($context["judging"] ?? null)) || (0 <= twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["judging"] ?? null), "submission", [], "any", false, false, false, 1), "submittime", [], "any", false, false, false, 1), twig_get_attribute($this->env, $this->source, ($context["current_team_contest"] ?? null), "endtime", [], "any", false, false, false, 1)))) || (($context["verificationRequired"] ?? null) &&  !twig_get_attribute($this->env, $this->source, ($context["judging"] ?? null), "verified", [], "any", false, false, false, 1)))) {
            // line 2
            echo "    <div class=\"alert alert-danger\">Submission not found for this team or not judged yet.</div>
";
        } else {
            // line 4
            echo "    <div class=\"container\">
        ";
            // line 5
            if ( !twig_get_attribute($this->env, $this->source, ($context["judging"] ?? null), "valid", [], "any", false, false, false, 5)) {
                // line 6
                echo "            <div class=\"alert alert-warning\">This submission is being ignored. It is not used in determining your
                score.
            </div>
        ";
            }
            // line 10
            echo "
        <div class=\"d-flex flex-row\">
            <div class=\"p-2\">
                Problem:
                <b>
                        <span class=\"probid\">
                            ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["judging"] ?? null), "submission", [], "any", false, false, false, 16), "contestProblem", [], "any", false, false, false, 16), "shortname", [], "any", false, false, false, 16), "html", null, true);
            echo "</span> -
                    ";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["judging"] ?? null), "submission", [], "any", false, false, false, 17), "contestProblem", [], "any", false, false, false, 17), "problem", [], "any", false, false, false, 17), "name", [], "any", false, false, false, 17), "html", null, true);
            echo "
                </b>
            </div>
            <div class=\"p-2\">
                Submitted:
                <b>";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["judging"] ?? null), "submission", [], "any", false, false, false, 22), "submittime", [], "any", false, false, false, 22), null, ($context["current_team_contest"] ?? null)), "html", null, true);
            echo "</b>
            </div>
            <div class=\"p-2\">
                Language:
                <b>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["judging"] ?? null), "submission", [], "any", false, false, false, 26), "language", [], "any", false, false, false, 26), "name", [], "any", false, false, false, 26), "html", null, true);
            echo "</b>
            </div>
            <div class=\"p-2\">
                Compilation:
                ";
            // line 30
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["judging"] ?? null), "result", [], "any", false, false, false, 30), "compiler-error"))) {
                // line 31
                echo "                    <span class=\"badge badge-danger\">failed</span>
                ";
            } else {
                // line 33
                echo "                    <span class=\"badge badge-success\">successful</span>
                ";
            }
            // line 35
            echo "            </div>
        </div>

        ";
            // line 38
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, ($context["judging"] ?? null), "result", [], "any", false, false, false, 38), "compiler-error"))) {
                // line 39
                echo "            <div class=\"d-flex flex-row\">
                <div class=\"p-2\">
                    Result: ";
                // line 41
                echo $this->extensions['App\Twig\TwigExtension']->printResult(twig_get_attribute($this->env, $this->source, ($context["judging"] ?? null), "result", [], "any", false, false, false, 41));
                echo "
                </div>
            </div>
        ";
            }
            // line 45
            echo "
        ";
            // line 46
            if (($context["allowDownload"] ?? null)) {
                // line 47
                echo "            <div class=\"d-flex flex-row\">
                <div class=\"p-2\">
                    <a title=\"Download submission ZIP\" aria-label=\"download submission zip\" class=\"btn btn-primary\" href=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_submission_download", ["submitId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["judging"] ?? null), "submission", [], "any", false, false, false, 49), "submitid", [], "any", false, false, false, 49)]), "html", null, true);
                echo "\">
                        <i class=\"fa fa-file-archive\"></i> Download submission ZIP
                    </a>
                </div>
            </div>
        ";
            }
            // line 55
            echo "
        ";
            // line 56
            if (((0 === twig_compare(($context["showCompile"] ?? null), 2)) || ((0 === twig_compare(($context["showCompile"] ?? null), 1)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["judging"] ?? null), "result", [], "any", false, false, false, 56), "compiler-error"))))) {
                // line 57
                echo "            <hr/>
            <h4 class=\"text-center\">Compilation output</h4>
            ";
                // line 59
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["judging"] ?? null), "outputCompile", [0 => true], "method", false, false, false, 59))) {
                    // line 60
                    echo "                <pre class=\"output_text pre-scrollable\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["judging"] ?? null), "outputCompile", [0 => true], "method", false, false, false, 60), "html", null, true);
                    echo "</pre>
            ";
                } else {
                    // line 62
                    echo "                <p class=\"nodata\">There were no compiler errors or warnings.</p>
            ";
                }
                // line 64
                echo "        ";
            }
            // line 65
            echo "
        ";
            // line 66
            if ((($context["showSampleOutput"] ?? null) && (0 !== twig_compare(twig_get_attribute($this->env, $this->source, ($context["judging"] ?? null), "result", [], "any", false, false, false, 66), "compiler-error")))) {
                // line 67
                echo "            <hr/>
            <h4 class=\"text-center\">Run(s) on the provided sample data</h4>

            ";
                // line 70
                if (twig_test_empty(($context["runs"] ?? null))) {
                    // line 71
                    echo "                <p class=\"nodata\">No sample cases available.</p>
            ";
                } else {
                    // line 73
                    echo "                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["runs"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["run"]) {
                        // line 74
                        echo "                    <h5 id=\"run-";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], 0, [], "any", false, false, false, 74), "rank", [], "any", false, false, false, 74), "html", null, true);
                        echo "\" class=\"text-center mt-4\">Run ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], 0, [], "any", false, false, false, 74), "rank", [], "any", false, false, false, 74), "html", null, true);
                        echo "</h5>

                    ";
                        // line 76
                        $context["judgingRun"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], 0, [], "any", false, false, false, 76), "judgingRuns", [], "any", false, false, false, 76), "first", [], "any", false, false, false, 76);
                        // line 77
                        echo "                    ";
                        if (((0 === twig_compare(($context["judgingRun"] ?? null), null)) || (0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["judgingRun"] ?? null), "runresult", [], "any", false, false, false, 77), null)))) {
                            // line 78
                            echo "                        <p class=\"nodata\">Run not finished yet.</p>
                    ";
                        } else {
                            // line 80
                            echo "                        <div class=\"row\">
                            <div class=\"col-md-";
                            // line 81
                            echo twig_escape_filter($this->env, ((array_key_exists("size", $context)) ? (_twig_default_filter(($context["size"] ?? null), 4)) : (4)), "html", null, true);
                            echo "\">
                                <table class=\"table table-sm table-striped\">
                                    <tr>
                                        <th>Description</th>
                                        <td>";
                            // line 85
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], 0, [], "any", false, false, false, 85), "description", [0 => true], "method", false, false, false, 85), "html", null, true);
                            echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Runtime</th>
                                        <td>";
                            // line 89
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["judgingRun"] ?? null), "runtime", [], "any", false, false, false, 89), "html", null, true);
                            echo " sec</td>
                                    </tr>
                                    <tr>
                                        <th>Result</th>
                                        <td>
                                            ";
                            // line 94
                            echo $this->extensions['App\Twig\TwigExtension']->printResult(twig_get_attribute($this->env, $this->source, ($context["judgingRun"] ?? null), "runresult", [], "any", false, false, false, 94));
                            echo "
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        ";
                            // line 101
                            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["judging"] ?? null), "submission", [], "any", false, false, false, 101), "problem", [], "any", false, false, false, 101), "combinedRunCompare", [], "any", false, false, false, 101)) {
                                // line 102
                                echo "                            <h6 class=\"mt-3\">Jury/Submission interaction</h6>
                            ";
                                // line 103
                                if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["run"], "output_run", [], "any", false, false, false, 103))) {
                                    // line 104
                                    echo "                                <p class=\"nodata\">There was no interaction log.</p>
                            ";
                                } else {
                                    // line 106
                                    echo "                                ";
                                    echo $this->extensions['App\Twig\TwigExtension']->interactiveLog(twig_get_attribute($this->env, $this->source, $context["run"], "output_run", [], "any", false, false, false, 106), true);
                                    echo "
                            ";
                                }
                                // line 108
                                echo "                        ";
                            } else {
                                // line 109
                                echo "                            <h6 class=\"mt-3\">Program output</h6>
                            ";
                                // line 110
                                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["run"], "output_run", [], "any", false, false, false, 110))) {
                                    // line 111
                                    echo "                                <pre class=\"output_text\">
";
                                    // line 112
                                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["run"], "output_run", [], "any", false, false, false, 112), "html", null, true);
                                    echo "</pre>
                            ";
                                } else {
                                    // line 114
                                    echo "                                <p class=\"nodata\">There was no program output.</p>
                            ";
                                }
                                // line 116
                                echo "
                            <h6 class=\"mt-3\">Diff output</h6>
                            ";
                                // line 118
                                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["run"], "output_diff", [], "any", false, false, false, 118))) {
                                    // line 119
                                    echo "                                <pre class=\"output_text\">
";
                                    // line 120
                                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["run"], "output_diff", [], "any", false, false, false, 120), "html", null, true);
                                    echo "</pre>
                            ";
                                } else {
                                    // line 122
                                    echo "                                <p class=\"nodata\">There was no diff output.</p>
                            ";
                                }
                                // line 124
                                echo "
                            <h6 class=\"mt-3\">Error output (info/debug/errors)</h6>
                            ";
                                // line 126
                                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["run"], "output_error", [], "any", false, false, false, 126))) {
                                    // line 127
                                    echo "                                <pre class=\"output_text\">
";
                                    // line 128
                                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["run"], "output_error", [], "any", false, false, false, 128), "html", null, true);
                                    echo "</pre>
                            ";
                                } else {
                                    // line 130
                                    echo "                                <p class=\"nodata\">There was no stderr output.</p>
                            ";
                                }
                                // line 132
                                echo "                        ";
                            }
                            // line 133
                            echo "                    ";
                        }
                        // line 134
                        echo "                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['run'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 135
                    echo "            ";
                }
                echo " ";
                // line 136
                echo "        ";
            }
            echo " ";
            // line 137
            echo "    </div>
";
        }
        // line 138
        echo " ";
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    public function getTemplateName()
    {
        return "team/partials/submission.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  331 => 138,  327 => 137,  323 => 136,  319 => 135,  313 => 134,  310 => 133,  307 => 132,  303 => 130,  298 => 128,  295 => 127,  293 => 126,  289 => 124,  285 => 122,  280 => 120,  277 => 119,  275 => 118,  271 => 116,  267 => 114,  262 => 112,  259 => 111,  257 => 110,  254 => 109,  251 => 108,  245 => 106,  241 => 104,  239 => 103,  236 => 102,  234 => 101,  224 => 94,  216 => 89,  209 => 85,  202 => 81,  199 => 80,  195 => 78,  192 => 77,  190 => 76,  182 => 74,  177 => 73,  173 => 71,  171 => 70,  166 => 67,  164 => 66,  161 => 65,  158 => 64,  154 => 62,  148 => 60,  146 => 59,  142 => 57,  140 => 56,  137 => 55,  128 => 49,  124 => 47,  122 => 46,  119 => 45,  112 => 41,  108 => 39,  106 => 38,  101 => 35,  97 => 33,  93 => 31,  91 => 30,  84 => 26,  77 => 22,  69 => 17,  65 => 16,  57 => 10,  51 => 6,  49 => 5,  46 => 4,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "team/partials/submission.html.twig", "/opt/domjudge/domserver/webapp/templates/team/partials/submission.html.twig");
    }
}
