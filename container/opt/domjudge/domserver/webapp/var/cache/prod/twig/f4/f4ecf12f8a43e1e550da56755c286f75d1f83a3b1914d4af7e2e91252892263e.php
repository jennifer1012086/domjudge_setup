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

/* jury/partials/submission_list.html.twig */
class __TwigTemplate_07dc090110aac591d27c73d3aba082a279791adfacf18657614fce24a0e04ee1 extends Template
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
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/submission_list.html.twig"));

        // line 3
        echo "
";
        // line 4
        if ( !array_key_exists("showExternalResult", $context)) {
            // line 5
            echo "    ";
            $context["showExternalResult"] = false;
        }
        // line 7
        if ( !array_key_exists("showExternalTestcases", $context)) {
            // line 8
            echo "    ";
            $context["showExternalTestcases"] = false;
        }
        // line 10
        echo "
";
        // line 11
        $context["rowSpan"] = 1;
        // line 12
        $context["tdExtraClass"] = "";
        // line 13
        if ((($context["showExternalResult"] ?? null) && ($context["showExternalTestcases"] ?? null))) {
            // line 14
            echo "    ";
            $context["rowSpan"] = 3;
            // line 15
            echo "    ";
            $context["tdExtraClass"] = " thick-border";
        }
        // line 17
        echo "
";
        // line 18
        if (twig_test_empty(($context["submissions"] ?? null))) {
            // line 19
            echo "    <div class=\"alert alert-warning\">No submissions</div>
";
        } else {
            // line 21
            echo "    <div>
        <span class=\"badge badge-info\">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["submissionCounts"] ?? null), "total", [], "any", false, false, false, 22), "html", null, true);
            echo " submitted</span>
        <span class=\"badge badge-success\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["submissionCounts"] ?? null), "correct", [], "any", false, false, false, 23), "html", null, true);
            echo " correct</span>

        ";
            // line 25
            if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["submissionCounts"] ?? null), "unverified", [], "any", false, false, false, 25), 0))) {
                // line 26
                echo "            <span class=\"badge badge-warning\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["submissionCounts"] ?? null), "unverified", [], "any", false, false, false, 26), "html", null, true);
                echo " unverified</span>
        ";
            }
            // line 28
            echo "
        ";
            // line 29
            if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["submissionCounts"] ?? null), "ignored", [], "any", false, false, false, 29), 0))) {
                // line 30
                echo "            <span class=\"badge badge-dark\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["submissionCounts"] ?? null), "ignored", [], "any", false, false, false, 30), "html", null, true);
                echo " ignored</span>
        ";
            }
            // line 32
            echo "
        ";
            // line 33
            if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["submissionCounts"] ?? null), "queued", [], "any", false, false, false, 33), 0))) {
                // line 34
                echo "            <span class=\"badge badge-primary\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["submissionCounts"] ?? null), "queued", [], "any", false, false, false, 34), "html", null, true);
                echo " queued (from ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["submissionCounts"] ?? null), "perteam", [], "any", false, false, false, 34), "html", null, true);
                echo " teams)</span>
        ";
            }
            // line 36
            echo "    </div>

    <table class=\"data-table table table-hover table";
            // line 38
            if ((($context["showExternalResult"] ?? null) && ($context["showExternalTestcases"] ?? null))) {
                echo "-3";
            }
            echo "-striped table-sm submissions-table\">
        <thead class=\"thead-light\">
        <tr>
            ";
            // line 41
            if ((($context["showExternalResult"] ?? null) && ($context["showExternalTestcases"] ?? null))) {
                // line 42
                echo "                <th scope=\"col\" colspan=\"2\">ID</th>
            ";
            } else {
                // line 44
                echo "                <th scope=\"col\">ID</th>
            ";
            }
            // line 46
            if (($context["showContest"] ?? null)) {
                // line 47
                echo "
                <th scope=\"col\">contest</th>";
            }
            // line 50
            echo "
            <th scope=\"col\">time</th>
            <th scope=\"col\">team</th>
            <th scope=\"col\">problem</th>
            <th scope=\"col\">lang</th>
            ";
            // line 55
            if ((($context["showExternalResult"] ?? null) && ($context["showExternalTestcases"] ?? null))) {
                // line 56
                echo "                <th scope=\"col\" colspan=\"2\">result</th>
            ";
            } else {
                // line 58
                echo "                <th scope=\"col\">result</th>
            ";
            }
            // line 60
            echo "            ";
            if ((($context["showExternalResult"] ?? null) &&  !($context["showExternalTestcases"] ?? null))) {
                // line 61
                echo "                <th scope=\"col\">external result</th>
            ";
            }
            // line 63
            echo "            ";
            if (( !($context["showExternalResult"] ?? null) ||  !($context["showExternalTestcases"] ?? null))) {
                // line 64
                echo "                <th scope=\"col\">verified</th>
                <th scope=\"col\">by</th>
            ";
            }
            // line 67
            if (array_key_exists("rejudging", $context)) {
                // line 68
                echo "
                <th scope=\"col\">old result</th>";
            }
            // line 71
            if ((array_key_exists("showTestcases", $context) && ($context["showTestcases"] ?? null))) {
                // line 72
                echo "
                <th scope=\"col\" class=\"not-sortable not-searchable\">test results</th>";
            }
            // line 75
            echo "
        </tr>
        </thead>
        <tbody>";
            // line 79
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["submissions"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["submission"]) {
                // line 80
                if (array_key_exists("rejudging", $context)) {
                    // line 81
                    $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission", ["submitId" => twig_get_attribute($this->env, $this->source, $context["submission"], "submitid", [], "any", false, false, false, 81), "rejudgingid" => twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "rejudgingid", [], "any", false, false, false, 81)]);
                } else {
                    // line 83
                    $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission", ["submitId" => twig_get_attribute($this->env, $this->source, $context["submission"], "submitid", [], "any", false, false, false, 83)]);
                }
                // line 85
                echo "
            <tr class=\"";
                // line 86
                if ( !twig_get_attribute($this->env, $this->source, $context["submission"], "valid", [], "any", false, false, false, 86)) {
                    echo "ignore";
                }
                echo "\"
                data-problem-id=\"";
                // line 87
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "problem", [], "any", false, false, false, 87), "probid", [], "any", false, false, false, 87), "html", null, true);
                echo "\"
                data-team-id=\"";
                // line 88
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "team", [], "any", false, false, false, 88), "teamid", [], "any", false, false, false, 88), "html", null, true);
                echo "\"
                data-language-id=\"";
                // line 89
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "language", [], "any", false, false, false, 89), "langid", [], "any", false, false, false, 89), "html", null, true);
                echo "\"
                data-submission-id=\"";
                // line 90
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["submission"], "submitid", [], "any", false, false, false, 90), "html", null, true);
                echo "\"
                data-result=\"";
                // line 91
                echo $this->extensions['App\Twig\TwigExtension']->printValidJurySubmissionResult($context["submission"], false);
                echo "\">
                ";
                // line 92
                if ((($context["showExternalResult"] ?? null) && ($context["showExternalTestcases"] ?? null))) {
                    // line 93
                    echo "                    <td class=\"";
                    echo twig_escape_filter($this->env, ($context["tdExtraClass"] ?? null), "html", null, true);
                    echo "\">
                        <a href=\"";
                    // line 94
                    echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                    echo "\">
                            Local
                        </a>
                    </td>
                ";
                }
                // line 99
                echo "                <td class=\"";
                echo twig_escape_filter($this->env, ($context["tdExtraClass"] ?? null), "html", null, true);
                echo "\">
                    <a href=\"";
                // line 100
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">
                        s";
                // line 101
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["submission"], "submitid", [], "any", false, false, false, 101), "html", null, true);
                echo "
                        ";
                // line 102
                if (twig_get_attribute($this->env, $this->source, $context["submission"], "externalid", [], "any", false, false, false, 102)) {
                    // line 103
                    echo "                            (";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["submission"], "externalid", [], "any", false, false, false, 103), "html", null, true);
                    echo ")
                        ";
                }
                // line 105
                echo "                    </a>
                </td>";
                // line 107
                if (($context["showContest"] ?? null)) {
                    // line 108
                    echo "                    <td class=\"";
                    echo twig_escape_filter($this->env, ($context["tdExtraClass"] ?? null), "html", null, true);
                    echo "\"><a href=\"";
                    echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                    echo "\">c";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "contest", [], "any", false, false, false, 108), "cid", [], "any", false, false, false, 108), "html", null, true);
                    echo "</a></td>";
                }
                // line 110
                echo "
                <td rowspan=\"";
                // line 111
                echo twig_escape_filter($this->env, ($context["rowSpan"] ?? null), "html", null, true);
                echo "\" class=\"";
                echo twig_escape_filter($this->env, ($context["tdExtraClass"] ?? null), "html", null, true);
                echo "\">
                    <a href=\"";
                // line 112
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, $context["submission"], "submittime", [], "any", false, false, false, 112), null, twig_get_attribute($this->env, $this->source, $context["submission"], "contest", [], "any", false, false, false, 112)), "html", null, true);
                echo "</a>
                </td>
                <td rowspan=\"";
                // line 114
                echo twig_escape_filter($this->env, ($context["rowSpan"] ?? null), "html", null, true);
                echo "\" class=\"";
                echo twig_escape_filter($this->env, ($context["tdExtraClass"] ?? null), "html", null, true);
                echo "\">
                    <a href=\"";
                // line 115
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\"
                       title=\"t";
                // line 116
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "team", [], "any", false, false, false, 116), "teamid", [], "any", false, false, false, 116), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "team", [], "any", false, false, false, 116), "name", [], "any", false, false, false, 116)), "truncate", [0 => ($context["teamname_max_length"] ?? null), 1 => "…"], "method", false, false, false, 116), "html", null, true);
                echo "</a>
                </td>
                <td class=\"probid";
                // line 118
                echo twig_escape_filter($this->env, ($context["tdExtraClass"] ?? null), "html", null, true);
                echo "\" rowspan=\"";
                echo twig_escape_filter($this->env, ($context["rowSpan"] ?? null), "html", null, true);
                echo "\">
                    <a href=\"";
                // line 119
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\"
                       title=\"";
                // line 120
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "problem", [], "any", false, false, false, 120), "name", [], "any", false, false, false, 120), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "contestProblem", [], "any", false, false, false, 120), "shortname", [], "any", false, false, false, 120), "html", null, true);
                echo "</a>
                </td>
                <td class=\"langid";
                // line 122
                echo twig_escape_filter($this->env, ($context["tdExtraClass"] ?? null), "html", null, true);
                echo "\" rowspan=\"";
                echo twig_escape_filter($this->env, ($context["rowSpan"] ?? null), "html", null, true);
                echo "\">
                    <a href=\"";
                // line 123
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\"
                       title=\"";
                // line 124
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "language", [], "any", false, false, false, 124), "name", [], "any", false, false, false, 124), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "language", [], "any", false, false, false, 124), "langid", [], "any", false, false, false, 124), "html", null, true);
                echo "</a>
                </td>
                ";
                // line 126
                if ((($context["showExternalResult"] ?? null) && ($context["showExternalTestcases"] ?? null))) {
                    // line 127
                    echo "                    <td class=\"";
                    echo twig_escape_filter($this->env, ($context["tdExtraClass"] ?? null), "html", null, true);
                    echo "\">
                        <a href=\"";
                    // line 128
                    echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                    echo "\">
                            Local
                        </a>
                    </td>
                ";
                }
                // line 133
                echo "                <td class=\"";
                echo twig_escape_filter($this->env, ($context["tdExtraClass"] ?? null), "html", null, true);
                echo "\">
                    <a href=\"";
                // line 134
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">
                        ";
                // line 135
                echo $this->extensions['App\Twig\TwigExtension']->printValidJurySubmissionResult($context["submission"]);
                echo "
                    </a>
                </td>
                ";
                // line 138
                if ((($context["showExternalResult"] ?? null) &&  !($context["showExternalTestcases"] ?? null))) {
                    // line 139
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "externalJudgements", [], "any", false, false, false, 139), "empty", [], "any", false, false, false, 139)) {
                        // line 140
                        echo "                        ";
                        $context["externalJudgement"] = null;
                        // line 141
                        echo "                    ";
                    } else {
                        // line 142
                        echo "                        ";
                        $context["externalJudgement"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "externalJudgements", [], "any", false, false, false, 142), "first", [], "any", false, false, false, 142);
                        // line 143
                        echo "                    ";
                    }
                    // line 144
                    echo "                    <td class=\"";
                    echo twig_escape_filter($this->env, ($context["tdExtraClass"] ?? null), "html", null, true);
                    echo "\">
                        <a href=\"";
                    // line 145
                    echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                    echo "\">
                            ";
                    // line 146
                    if ((null === twig_get_attribute($this->env, $this->source, $context["submission"], "externalid", [], "any", false, false, false, 146))) {
                        // line 147
                        echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult("n / a");
                    } elseif (((null ===                     // line 148
($context["externalJudgement"] ?? null)) || twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["externalJudgement"] ?? null), "result", [], "any", false, false, false, 148)))) {
                        // line 149
                        echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult("pending");
                    } else {
                        // line 151
                        echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult(twig_get_attribute($this->env, $this->source, ($context["externalJudgement"] ?? null), "result", [], "any", false, false, false, 151));
                    }
                    // line 153
                    echo "                        </a>
                    </td>
                ";
                }
                // line 156
                echo "                ";
                if (( !($context["showExternalResult"] ?? null) ||  !($context["showExternalTestcases"] ?? null))) {
                    // line 157
                    $context["claim"] = false;
                    // line 158
                    if ((twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 158), "first", [], "any", false, false, false, 158)) || twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 158), "first", [], "any", false, false, false, 158), "result", [], "any", false, false, false, 158)))) {
                        // line 159
                        $context["verified"] = "";
                        // line 160
                        $context["juryMember"] = "";
                    } else {
                        // line 162
                        $context["juryMember"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 162), "first", [], "any", false, false, false, 162), "juryMember", [], "any", false, false, false, 162);
                        // line 163
                        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 163), "first", [], "any", false, false, false, 163), "verified", [], "any", false, false, false, 163)) {
                            // line 164
                            $context["verified"] = "yes";
                        } else {
                            // line 166
                            $context["verified"] = "no";
                            // line 167
                            if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 167), "first", [], "any", false, false, false, 167), "juryMember", [], "any", false, false, false, 167))) {
                                // line 168
                                $context["claim"] = true;
                            } else {
                                // line 170
                                $context["verified"] = "claimed";
                            }
                        }
                    }
                    // line 174
                    if (($context["claim"] ?? null)) {
                        // line 175
                        $context["claimArg"] = ["claim" => 1];
                    } else {
                        // line 177
                        $context["claimArg"] = ["unclaim" => 1];
                    }
                    // line 179
                    echo "                    <td class=\"";
                    echo twig_escape_filter($this->env, ($context["tdExtraClass"] ?? null), "html", null, true);
                    echo "\"><a href=\"";
                    echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, ($context["verified"] ?? null), "html", null, true);
                    echo "</a></td>
                    ";
                    // line 180
                    if (( !($context["showExternalResult"] ?? null) ||  !($context["showExternalTestcases"] ?? null))) {
                        // line 181
                        echo "                        <td class=\"";
                        echo twig_escape_filter($this->env, ($context["tdExtraClass"] ?? null), "html", null, true);
                        echo "\">";
                        // line 182
                        if (array_key_exists("rejudging", $context)) {
                            // line 183
                            $context["claimLink"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission", twig_array_merge(($context["claimArg"] ?? null), ["submitId" => twig_get_attribute($this->env, $this->source, $context["submission"], "submitid", [], "any", false, false, false, 183), "rejudgingid" => twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "rejudgingid", [], "any", false, false, false, 183)]));
                        } else {
                            // line 185
                            $context["claimLink"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission", twig_array_merge(($context["claimArg"] ?? null), ["submitId" => twig_get_attribute($this->env, $this->source, $context["submission"], "submitid", [], "any", false, false, false, 185)]));
                        }
                        // line 187
                        if (($context["claim"] ?? null)) {
                            // line 188
                            echo "<a class=\"btn btn-outline-secondary btn-sm\"
                                   href=\"";
                            // line 189
                            echo twig_escape_filter($this->env, ($context["claimLink"] ?? null), "html", null, true);
                            echo "\">claim</a>";
                        } elseif ((( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                         // line 190
$context["submission"], "judgings", [], "any", false, false, false, 190), "first", [], "any", false, false, false, 190) ||  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 190), "first", [], "any", false, false, false, 190), "verified", [], "any", false, false, false, 190)) && (0 === twig_compare(($context["juryMember"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 190), "username", [], "any", false, false, false, 190))))) {
                            // line 191
                            echo "<a class=\"btn btn-info btn-sm\" href=\"";
                            echo twig_escape_filter($this->env, ($context["claimLink"] ?? null), "html", null, true);
                            echo "\">unclaim</a>";
                        } else {
                            // line 193
                            echo "<a href=\"";
                            echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, ($context["juryMember"] ?? null), "html", null, true);
                            echo "</a>";
                        }
                        // line 195
                        echo "</td>
                    ";
                    }
                    // line 197
                    echo "                ";
                }
                // line 198
                if (array_key_exists("rejudging", $context)) {
                    // line 199
                    echo "
                    <td class=\"";
                    // line 200
                    echo twig_escape_filter($this->env, ($context["tdExtraClass"] ?? null), "html", null, true);
                    echo "\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission", ["submitId" => twig_get_attribute($this->env, $this->source, $context["submission"], "submitid", [], "any", false, false, false, 200)]), "html", null, true);
                    echo "\">
                            ";
                    // line 201
                    echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult(twig_get_attribute($this->env, $this->source, $context["submission"], "oldResult", [], "any", false, false, false, 201));
                    echo "
                        </a></td>";
                }
                // line 204
                if ((array_key_exists("showTestcases", $context) && ($context["showTestcases"] ?? null))) {
                    // line 205
                    echo "
                    <td class=\"testcase-results";
                    // line 206
                    echo twig_escape_filter($this->env, ($context["tdExtraClass"] ?? null), "html", null, true);
                    echo "\">";
                    // line 207
                    echo $this->extensions['App\Twig\TwigExtension']->testcaseResults($context["submission"]);
                    // line 208
                    echo "</td>";
                }
                // line 210
                echo "
            </tr>
            ";
                // line 212
                if ((($context["showExternalResult"] ?? null) && ($context["showExternalTestcases"] ?? null))) {
                    // line 213
                    echo "                <tr>
                    ";
                    // line 214
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "externalJudgements", [], "any", false, false, false, 214), "empty", [], "any", false, false, false, 214)) {
                        // line 215
                        echo "                        ";
                        $context["externalJudgement"] = null;
                        // line 216
                        echo "                    ";
                    } else {
                        // line 217
                        echo "                        ";
                        $context["externalJudgement"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "externalJudgements", [], "any", false, false, false, 217), "first", [], "any", false, false, false, 217);
                        // line 218
                        echo "                    ";
                    }
                    // line 219
                    echo "                    ";
                    if ( !twig_test_empty(($context["external_ccs_submission_url"] ?? null))) {
                        // line 220
                        echo "                        ";
                        $context["externalSubmissionUrl"] = $this->extensions['App\Twig\TwigExtension']->externalCcsUrl($context["submission"]);
                        // line 221
                        echo "                    ";
                    } else {
                        // line 222
                        echo "                        ";
                        $context["externalSubmissionUrl"] = null;
                        // line 223
                        echo "                    ";
                    }
                    // line 224
                    echo "                    <td rowspan=\"2\">
                        <a ";
                    // line 225
                    if ( !(null === ($context["externalSubmissionUrl"] ?? null))) {
                        echo "href=\"";
                        echo twig_escape_filter($this->env, ($context["externalSubmissionUrl"] ?? null), "html", null, true);
                        echo "\"";
                    }
                    echo ">
                            External
                        </a>
                    </td>
                    <td rowspan=\"2\">
                        <a ";
                    // line 230
                    if ( !(null === ($context["externalSubmissionUrl"] ?? null))) {
                        echo "href=\"";
                        echo twig_escape_filter($this->env, ($context["externalSubmissionUrl"] ?? null), "html", null, true);
                        echo "\"";
                    }
                    echo ">
                            ";
                    // line 231
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["submission"], "externalid", [], "any", false, false, false, 231), "html", null, true);
                    echo "
                        </a>
                    </td>
                    <td>
                        <a ";
                    // line 235
                    if ( !(null === ($context["externalSubmissionUrl"] ?? null))) {
                        echo "href=\"";
                        echo twig_escape_filter($this->env, ($context["externalSubmissionUrl"] ?? null), "html", null, true);
                        echo "\"";
                    }
                    echo ">
                            External
                        </a>
                    </td>
                    <td>
                        <a ";
                    // line 240
                    if ( !(null === ($context["externalSubmissionUrl"] ?? null))) {
                        echo "href=\"";
                        echo twig_escape_filter($this->env, ($context["externalSubmissionUrl"] ?? null), "html", null, true);
                        echo "\"";
                    }
                    echo ">
                            ";
                    // line 241
                    if (((null === ($context["externalJudgement"] ?? null)) || twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["externalJudgement"] ?? null), "result", [], "any", false, false, false, 241)))) {
                        // line 242
                        echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult("pending");
                    } else {
                        // line 244
                        echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult(twig_get_attribute($this->env, $this->source, ($context["externalJudgement"] ?? null), "result", [], "any", false, false, false, 244));
                    }
                    // line 246
                    echo "                        </a>
                    </td>
                    <td class=\"testcase-results\">";
                    // line 249
                    echo $this->extensions['App\Twig\TwigExtension']->testcaseResults($context["submission"], true);
                    // line 250
                    echo "</td>
                </tr>
                <tr>
                    <td colspan=\"3\" class=\"inline-verify-form\">
                        ";
                    // line 254
                    if ( !(null === ($context["externalJudgement"] ?? null))) {
                        // line 255
                        echo "                            ";
                        $this->loadTemplate("jury/partials/verify_form.html.twig", "jury/partials/submission_list.html.twig", 255)->display(twig_array_merge($context, ["label" => "Shadow difference verified", "judging" =>                         // line 257
($context["externalJudgement"] ?? null), "form_action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_shadow_difference_verify", ["extjudgementid" => twig_get_attribute($this->env, $this->source,                         // line 258
($context["externalJudgement"] ?? null), "extjudgementid", [], "any", false, false, false, 258)]), "show_form" => true, "show_icat" => false]));
                        // line 261
                        echo "                        ";
                    }
                    // line 262
                    echo "                    </td>
                </tr>
            ";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['submission'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 266
            echo "
        </tbody>
    </table>
";
        }
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    public function getTemplateName()
    {
        return "jury/partials/submission_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  700 => 266,  683 => 262,  680 => 261,  678 => 258,  677 => 257,  675 => 255,  673 => 254,  667 => 250,  665 => 249,  661 => 246,  658 => 244,  655 => 242,  653 => 241,  645 => 240,  633 => 235,  626 => 231,  618 => 230,  606 => 225,  603 => 224,  600 => 223,  597 => 222,  594 => 221,  591 => 220,  588 => 219,  585 => 218,  582 => 217,  579 => 216,  576 => 215,  574 => 214,  571 => 213,  569 => 212,  565 => 210,  562 => 208,  560 => 207,  557 => 206,  554 => 205,  552 => 204,  547 => 201,  541 => 200,  538 => 199,  536 => 198,  533 => 197,  529 => 195,  522 => 193,  517 => 191,  515 => 190,  512 => 189,  509 => 188,  507 => 187,  504 => 185,  501 => 183,  499 => 182,  495 => 181,  493 => 180,  484 => 179,  481 => 177,  478 => 175,  476 => 174,  471 => 170,  468 => 168,  466 => 167,  464 => 166,  461 => 164,  459 => 163,  457 => 162,  454 => 160,  452 => 159,  450 => 158,  448 => 157,  445 => 156,  440 => 153,  437 => 151,  434 => 149,  432 => 148,  430 => 147,  428 => 146,  424 => 145,  419 => 144,  416 => 143,  413 => 142,  410 => 141,  407 => 140,  404 => 139,  402 => 138,  396 => 135,  392 => 134,  387 => 133,  379 => 128,  374 => 127,  372 => 126,  365 => 124,  361 => 123,  355 => 122,  348 => 120,  344 => 119,  338 => 118,  331 => 116,  327 => 115,  321 => 114,  314 => 112,  308 => 111,  305 => 110,  296 => 108,  294 => 107,  291 => 105,  285 => 103,  283 => 102,  279 => 101,  275 => 100,  270 => 99,  262 => 94,  257 => 93,  255 => 92,  251 => 91,  247 => 90,  243 => 89,  239 => 88,  235 => 87,  229 => 86,  226 => 85,  223 => 83,  220 => 81,  218 => 80,  201 => 79,  196 => 75,  192 => 72,  190 => 71,  186 => 68,  184 => 67,  179 => 64,  176 => 63,  172 => 61,  169 => 60,  165 => 58,  161 => 56,  159 => 55,  152 => 50,  148 => 47,  146 => 46,  142 => 44,  138 => 42,  136 => 41,  128 => 38,  124 => 36,  116 => 34,  114 => 33,  111 => 32,  105 => 30,  103 => 29,  100 => 28,  94 => 26,  92 => 25,  87 => 23,  83 => 22,  80 => 21,  76 => 19,  74 => 18,  71 => 17,  67 => 15,  64 => 14,  62 => 13,  60 => 12,  58 => 11,  55 => 10,  51 => 8,  49 => 7,  45 => 5,  43 => 4,  40 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/partials/submission_list.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/partials/submission_list.html.twig");
    }
}
