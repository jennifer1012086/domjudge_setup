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

/* jury/submission.html.twig */
class __TwigTemplate_aa7fdbfe98aab0acbbfc8db8095937367b2a6750831f2a2f3a70b1cdaa57413b extends Template
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
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "jury/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/submission.html.twig"));

        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/submission.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Submission s";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "submitid", [], "any", false, false, false, 4), "html", null, true);
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
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/nv.d3.min.css"), "html", null, true);
        echo "\">
    <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/d3.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/nv.d3.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/FileSaver.min.js"), "html", null, true);
        echo "\"></script>
    <style>
        .judging-table td a, .judging-table td a:hover {
            display: block;
            text-decoration: none;
            color: inherit;
        }

        .judging-table tr.disabled td a {
            color: silver
        }
    </style>
";
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    // line 25
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 26
        echo "
    ";
        // line 27
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "externalJudgements", [], "any", false, false, false, 27), "empty", [], "any", false, false, false, 27)) {
            // line 28
            echo "        ";
            $context["externalJudgement"] = null;
            // line 29
            echo "    ";
        } else {
            // line 30
            echo "        ";
            $context["externalJudgement"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "externalJudgements", [], "any", false, false, false, 30), "first", [], "any", false, false, false, 30);
            // line 31
            echo "    ";
        }
        // line 32
        echo "
    ";
        // line 33
        if (($context["claimWarning"] ?? null)) {
            // line 34
            echo "        <div class=\"alert alert-warning\">
            ";
            // line 35
            echo twig_escape_filter($this->env, ($context["claimWarning"] ?? null), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 38
        echo "
    ";
        // line 39
        if (($context["requestedOutputCount"] ?? null)) {
            // line 40
            echo "        <div class=\"alert alert-warning\">
            Waiting for ";
            // line 41
            echo twig_escape_filter($this->env, ($context["requestedOutputCount"] ?? null), "html", null, true);
            echo " team output(s) (or full debug package) to be grabbed and uploaded.
        </div>
    ";
        }
        // line 44
        echo "
    <div class=\"mb-3\">
        <h1 style=\"display: inline;\">
            Submission ";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "submitid", [], "any", false, false, false, 47), "html", null, true);
        echo "
            ";
        // line 48
        if (twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "originalSubmission", [], "any", false, false, false, 48)) {
            // line 49
            echo "                ";
            $context["origSubmissionUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission", ["submitId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "originalSubmission", [], "any", false, false, false, 49), "submitid", [], "any", false, false, false, 49)]);
            // line 50
            echo "                (resubmit of <a href=\"";
            echo twig_escape_filter($this->env, ($context["origSubmissionUrl"] ?? null), "html", null, true);
            echo "\">s";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "originalSubmission", [], "any", false, false, false, 50), "submitid", [], "any", false, false, false, 50), "html", null, true);
            echo "</a>)
            ";
        }
        // line 52
        echo "            ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "resubmissions", [], "any", false, false, false, 52))) {
            // line 53
            echo "                (resubmitted as";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "resubmissions", [], "any", false, false, false, 54));
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
            foreach ($context['_seq'] as $context["_key"] => $context["resubmission"]) {
                // line 55
                $context["resubmissionUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission", ["submitId" => twig_get_attribute($this->env, $this->source, $context["resubmission"], "submitid", [], "any", false, false, false, 55)]);
                // line 56
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, ($context["resubmissionUrl"] ?? null), "html", null, true);
                echo "\">s";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["resubmission"], "submitid", [], "any", false, false, false, 56), "html", null, true);
                echo "</a>";
                // line 57
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 57)) {
                    echo ",";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resubmission'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo ")
            ";
        }
        // line 61
        echo "            ";
        if ( !twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "valid", [], "any", false, false, false, 61)) {
            // line 62
            echo "                (ignored)
            ";
        }
        // line 64
        echo "        </h1>
        ";
        // line 65
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 66
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "valid", [], "any", false, false, false, 66)) {
                // line 67
                echo "                ";
                $context["action"] = "ignore";
                // line 68
                echo "            ";
            } else {
                // line 69
                echo "                ";
                $context["action"] = "unignore";
                // line 70
                echo "            ";
            }
            // line 71
            echo "            <form action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission_update_status", ["submitId" => twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "submitid", [], "any", false, false, false, 71)]), "html", null, true);
            echo "\" method=\"post\"
                  style=\"display: inline; \">
                <input type=\"hidden\" name=\"valid\" value=\"";
            // line 73
            if (twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "valid", [], "any", false, false, false, 73)) {
                echo "0";
            } else {
                echo "1";
            }
            echo "\"/>
                <input type=\"submit\" class=\"btn btn-outline-secondary btn-sm\"
                       value=\"";
            // line 75
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, ($context["action"] ?? null)), "html", null, true);
            echo " this submission\"
                       onclick=\"return confirm('Really ";
            // line 76
            echo twig_escape_filter($this->env, ($context["action"] ?? null), "html", null, true);
            echo " submission s";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "submitid", [], "any", false, false, false, 76), "html", null, true);
            echo "?');\"/>
            </form>
        ";
        }
        // line 79
        echo "
        ";
        // line 80
        $this->loadTemplate("jury/partials/rejudge_form.html.twig", "jury/submission.html.twig", 80)->display(twig_array_merge($context, ["table" => "submission", "id" => twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "submitid", [], "any", false, false, false, 80)]));
        // line 81
        echo "    </div>

    ";
        // line 83
        if ( !twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "valid", [], "any", false, false, false, 83)) {
            // line 84
            echo "        <div class=\"alert alert-danger\">This submission is not used during scoreboard calculations.</div>
    ";
        }
        // line 86
        echo "
    ";
        // line 87
        if ( !twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "contestProblem", [], "any", false, false, false, 87)) {
            // line 88
            echo "        <div class=\"alert alert-danger\">
            This submission is for a problem that is not part (anymore) of the contest of the submission.
        </div>
    ";
        }
        // line 92
        echo "
    ";
        // line 94
        echo "    <div class=\"submission-summary mb-2\">
        <span>
            <i class=\"fas fa-users\" title=\"Team:\"></i>
            <a href=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team", ["teamId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "team", [], "any", false, false, false, 97), "teamid", [], "any", false, false, false, 97), "cid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "contest", [], "any", false, false, false, 97), "cid", [], "any", false, false, false, 97)]), "html", null, true);
        echo "\">
                ";
        // line 98
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "team", [], "any", false, false, false, 98), "effectiveName", [], "any", false, false, false, 98), "html", null, true);
        echo " (t";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "team", [], "any", false, false, false, 98), "teamid", [], "any", false, false, false, 98), "html", null, true);
        echo ")
            </a>
        </span>

        ";
        // line 102
        if (twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "user", [], "any", false, false, false, 102)) {
            // line 103
            echo "            <span>
                <i class=\"fas fa-user\" title=\"User:\"></i>
                <a href=\"";
            // line 105
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_user", ["userId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "user", [], "any", false, false, false, 105), "userid", [], "any", false, false, false, 105), "cid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "contest", [], "any", false, false, false, 105), "cid", [], "any", false, false, false, 105)]), "html", null, true);
            echo "\">
                    ";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "user", [], "any", false, false, false, 106), "username", [], "any", false, false, false, 106), "html", null, true);
            echo "
                </a>
            </span>
        ";
        }
        // line 110
        echo "
        <span>
            <i class=\"fas fa-trophy\" title=\"Contest:\"></i>
            <a href=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contest", ["contestId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "contest", [], "any", false, false, false, 113), "cid", [], "any", false, false, false, 113)]), "html", null, true);
        echo "\">
                ";
        // line 114
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "contest", [], "any", false, false, false, 114), "shortname", [], "any", false, false, false, 114), "html", null, true);
        echo "
            </a>
        </span>

        <span>
            <i class=\"fas fa-book-open\" title=\"Problem:\"></i>
            <a href=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem", ["probId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "problem", [], "any", false, false, false, 120), "probid", [], "any", false, false, false, 120)]), "html", null, true);
        echo "\">
                ";
        // line 121
        if (twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "contestProblem", [], "any", false, false, false, 121)) {
            // line 122
            echo "                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "contestProblem", [], "any", false, false, false, 122), "shortname", [], "any", false, false, false, 122), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "problem", [], "any", false, false, false, 122), "name", [], "any", false, false, false, 122), "html", null, true);
            echo "
                ";
        } else {
            // line 124
            echo "                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "problem", [], "any", false, false, false, 124), "name", [], "any", false, false, false, 124), "html", null, true);
            echo "
                ";
        }
        // line 126
        echo "            </a>
        </span>

        <span>
            <i class=\"fas fa-comments\" title=\"Language:\"></i>
            <a href=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_language", ["langId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "language", [], "any", false, false, false, 131), "langid", [], "any", false, false, false, 131)]), "html", null, true);
        echo "\">
                ";
        // line 132
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "language", [], "any", false, false, false, 132), "name", [], "any", false, false, false, 132), "html", null, true);
        echo "
            </a>
        </span>

        <span>
            <i class=\"fas fa-clock\" title=\"Submittime:\"></i>
            <span title=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "submittime", [], "any", false, false, false, 138), "Y-m-d H:i:s (T)"), "html", null, true);
        echo "\">
                ";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "submittime", [], "any", false, false, false, 139), null, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "contest", [], "any", false, false, false, 139)), "html", null, true);
        echo "
            </span>
        </span>

        <span>
            <i class=\"fas fa-stopwatch\" title=\"Allowed runtime:\"></i>
            ";
        // line 145
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "problem", [], "any", false, false, false, 145), "timelimit", [], "any", false, false, false, 145) * twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "language", [], "any", false, false, false, 145), "timeFactor", [], "any", false, false, false, 145)), "html", null, true);
        echo "s
        </span>

        <span>
            <i class=\"fas fa-code\" title=\"Source code:\"></i>
            <a href=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission_source", ["submission" => twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "submitid", [], "any", false, false, false, 150)]), "html", null, true);
        echo "\">
                View ";
        // line 151
        echo $this->extensions['App\Twig\TwigExtension']->printFiles(twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "files", [], "any", false, false, false, 151));
        echo "
            </a>
        </span>

        ";
        // line 155
        if ( !twig_test_empty(($context["external_ccs_submission_url"] ?? null))) {
            // line 156
            echo "            ";
            $context["externalSubmissionUrl"] = $this->extensions['App\Twig\TwigExtension']->externalCcsUrl(($context["submission"] ?? null));
            // line 157
            echo "            ";
            if ( !twig_test_empty(($context["externalSubmissionUrl"] ?? null))) {
                // line 158
                echo "                <span>
                    <i class=\"fas fa-link\" title=\"External link:\"></i>
                    <a href=\"";
                // line 160
                echo twig_escape_filter($this->env, ($context["externalSubmissionUrl"] ?? null), "html", null, true);
                echo "\" target=\"_blank\">
                        View in external CCS
                    </a>
                </span>
            ";
            }
            // line 165
            echo "        ";
        }
        // line 166
        echo "    </div>

    ";
        // line 168
        if (twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "externalid", [], "any", false, false, false, 168)) {
            // line 169
            echo "        <div class=\"mb-2\">
            External ID:
            ";
            // line 171
            if (twig_test_empty(($context["external_ccs_submission_url"] ?? null))) {
                // line 172
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "externalid", [], "any", false, false, false, 172), "html", null, true);
            } else {
                // line 174
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->externalCcsUrl(($context["submission"] ?? null)), "html", null, true);
                echo "\" target=\"_blank\">";
                // line 175
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "externalid", [], "any", false, false, false, 175), "html", null, true);
                // line 176
                echo "</a>";
            }
            // line 178
            if ( !(null === ($context["externalJudgement"] ?? null))) {
                // line 179
                echo ", ";
                echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult(twig_get_attribute($this->env, $this->source, ($context["externalJudgement"] ?? null), "result", [], "any", false, false, false, 179));
                echo "
            ";
            }
            // line 181
            echo "        </div>
    ";
        }
        // line 183
        echo "
    ";
        // line 184
        if ((((( !(null === ($context["externalJudgement"] ?? null)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["externalJudgement"] ?? null), "result", [], "any", false, false, false, 184))) &&  !(null === ($context["selectedJudging"] ?? null))) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "result", [], "any", false, false, false, 184))) && (0 !== twig_compare(twig_get_attribute($this->env, $this->source, ($context["externalJudgement"] ?? null), "result", [], "any", false, false, false, 184), twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "result", [], "any", false, false, false, 184))))) {
            // line 185
            echo "        <div class=\"alert alert-danger\">
            <strong>Results differ!</strong>
            <hr>
            <p>
                This submission was judged as
                ";
            // line 190
            if (twig_test_empty(($context["external_ccs_submission_url"] ?? null))) {
                // line 191
                echo "                    ";
                echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult(twig_get_attribute($this->env, $this->source, ($context["externalJudgement"] ?? null), "result", [], "any", false, false, false, 191));
                echo " by the external CCS
                ";
            } else {
                // line 193
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->externalCcsUrl(($context["submission"] ?? null)), "html", null, true);
                echo "\" target=\"_blank\">
                        ";
                // line 194
                echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult(twig_get_attribute($this->env, $this->source, ($context["externalJudgement"] ?? null), "result", [], "any", false, false, false, 194));
                echo " by the external CCS
                    </a>
                ";
            }
            // line 197
            echo ", but as ";
            echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult(twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "result", [], "any", false, false, false, 197));
            echo "
                by DOMjudge.
            </p>

            ";
            // line 201
            $this->loadTemplate("jury/partials/verify_form.html.twig", "jury/submission.html.twig", 201)->display(twig_array_merge($context, ["label" => "Shadow difference verified", "judging" =>             // line 203
($context["externalJudgement"] ?? null), "form_action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_shadow_difference_verify", ["extjudgementid" => twig_get_attribute($this->env, $this->source,             // line 204
($context["externalJudgement"] ?? null), "extjudgementid", [], "any", false, false, false, 204)]), "show_form" => true, "show_icat" => false]));
            // line 207
            echo "        </div>
    ";
        }
        // line 209
        echo "
    ";
        // line 210
        if ((( !($context["sameTestcaseIds"] ?? null) &&  !(null === ($context["selectedJudging"] ?? null))) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "result", [], "any", false, false, false, 210)))) {
            // line 211
            echo "        <div class=\"alert alert-danger\">The problem's testcases have changed since this judging has been performed. We recommend rejudging the whole problem.</div>
    ";
        }
        // line 213
        echo "
    ";
        // line 214
        if (((1 === twig_compare(twig_length_filter($this->env, ($context["judgings"] ?? null)), 1)) || ((0 === twig_compare(twig_length_filter($this->env, ($context["judgings"] ?? null)), 1)) && (null === ($context["selectedJudging"] ?? null))))) {
            // line 215
            echo "        <h2>Judgings</h2>
        <table class=\"judging-table table table-striped table-hover table-sm\" style=\"width: auto;\">
            <thead>
            <tr>
                <td></td>
                <th scope=\"col\">ID</th>
                <th scope=\"col\">start</th>
                <th scope=\"col\">max runtime</th>
                <th scope=\"col\">judgehost</th>
                <th scope=\"col\">result</th>
                <th scope=\"col\">rejudging</th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 229
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["judgings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["judging"]) {
                // line 230
                echo "                ";
                $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission", ["submitId" => twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "submitid", [], "any", false, false, false, 230), "jid" => twig_get_attribute($this->env, $this->source, $context["judging"], "judgingid", [], "any", false, false, false, 230)]);
                // line 231
                echo "                <tr ";
                if ( !twig_get_attribute($this->env, $this->source, $context["judging"], "valid", [], "any", false, false, false, 231)) {
                    echo "class=\"disabled\"";
                }
                echo ">
                    <td>
                        <a href=\"";
                // line 233
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">
                            ";
                // line 234
                if (( !(null === ($context["selectedJudging"] ?? null)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "judgingid", [], "any", false, false, false, 234), twig_get_attribute($this->env, $this->source, $context["judging"], "judgingid", [], "any", false, false, false, 234))))) {
                    // line 235
                    echo "                                <i class=\"fas fa-long-arrow-alt-right\"></i>
                            ";
                } else {
                    // line 237
                    echo "                                &nbsp;
                            ";
                }
                // line 239
                echo "                        </a>
                    </td>
                    <td><a href=\"";
                // line 241
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">j";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["judging"], "judgingid", [], "any", false, false, false, 241), "html", null, true);
                echo "</a></td>
                    <td><a href=\"";
                // line 242
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, $context["judging"], "starttime", [], "any", false, false, false, 242), null, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "contest", [], "any", false, false, false, 242)), "html", null, true);
                echo "</a></td>
                    <td>
                        <a href=\"";
                // line 244
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">
                            ";
                // line 245
                if ( !(null === (($__internal_compile_0 = ($context["maxRunTimes"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["judging"], "judgingId", [], "any", false, false, false, 245)] ?? null) : null))) {
                    // line 246
                    echo "                                ";
                    echo twig_escape_filter($this->env, (($__internal_compile_1 = ($context["maxRunTimes"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["judging"], "judgingId", [], "any", false, false, false, 246)] ?? null) : null), "html", null, true);
                    echo "s
                            ";
                }
                // line 248
                echo "                        </a>
                    </td>
                    <td>
                        <a href=\"";
                // line 251
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">
                            ";
                // line 252
                echo $this->extensions['App\Twig\TwigExtension']->printHosts(twig_get_attribute($this->env, $this->source, $context["judging"], "judgehosts", [], "any", false, false, false, 252));
                echo "
                        </a>
                    </td>
                    <td>
                        <a href=\"";
                // line 256
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">
                            ";
                // line 257
                echo $this->extensions['App\Twig\TwigExtension']->printResult(twig_get_attribute($this->env, $this->source, $context["judging"], "result", [], "any", false, false, false, 257), twig_get_attribute($this->env, $this->source, $context["judging"], "valid", [], "any", false, false, false, 257), true);
                echo "
                            ";
                // line 258
                if (twig_get_attribute($this->env, $this->source, $context["judging"], "stillBusy", [], "any", false, false, false, 258)) {
                    // line 259
                    echo "                                (&hellip;)
                            ";
                }
                // line 261
                echo "                        </a>
                    </td>
                    <td>
                        <a href=\"";
                // line 264
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">
                            ";
                // line 265
                if ( !(null === twig_get_attribute($this->env, $this->source, $context["judging"], "rejudging", [], "any", false, false, false, 265))) {
                    // line 266
                    echo "                                r";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["judging"], "rejudging", [], "any", false, false, false, 266), "rejudgingid", [], "any", false, false, false, 266), "html", null, true);
                    echo " (";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["judging"], "rejudging", [], "any", false, false, false, 266), "reason", [], "any", false, false, false, 266), "html", null, true);
                    echo ")
                            ";
                }
                // line 268
                echo "                        </a>
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['judging'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 272
            echo "            </tbody>
        </table>
    ";
        }
        // line 275
        echo "
    ";
        // line 276
        if ( !twig_test_empty(($context["unjudgableReasons"] ?? null))) {
            // line 277
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["unjudgableReasons"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["reason"]) {
                // line 278
                echo "            <div class=\"alert alert-danger\">";
                echo twig_escape_filter($this->env, $context["reason"], "html", null, true);
                echo "</div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reason'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 280
            echo "    ";
        }
        // line 281
        echo "
    ";
        // line 282
        if (( !(null === ($context["selectedJudging"] ?? null)) ||  !(null === ($context["externalJudgement"] ?? null)))) {
            // line 283
            echo "
        ";
            // line 284
            $this->loadTemplate("jury/partials/submission_graph.html.twig", "jury/submission.html.twig", 284)->display($context);
            // line 285
            echo "
        ";
            // line 286
            if ( !(null === ($context["selectedJudging"] ?? null))) {
                // line 287
                echo "
            ";
                // line 289
                echo "            <div class=\"mb-2\">
                <h2 style=\"display: inline;\">
                    Judging j";
                // line 291
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "judgingid", [], "any", false, false, false, 291), "html", null, true);
                echo "
                    ";
                // line 292
                if (twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "rejudging", [], "any", false, false, false, 292)) {
                    // line 293
                    echo "                        (rejudging
                        <a href=\"";
                    // line 294
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_rejudging", ["rejudgingId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "rejudging", [], "any", false, false, false, 294), "rejudgingid", [], "any", false, false, false, 294)]), "html", null, true);
                    echo "\">
                            r";
                    // line 295
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "rejudging", [], "any", false, false, false, 295), "rejudgingid", [], "any", false, false, false, 295), "html", null, true);
                    echo "</a>, reason: ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "rejudging", [], "any", false, false, false, 295), "reason", [], "any", false, false, false, 295), "html", null, true);
                    echo ")
                    ";
                } elseif ( !twig_get_attribute($this->env, $this->source,                 // line 296
($context["selectedJudging"] ?? null), "valid", [], "any", false, false, false, 296)) {
                    // line 297
                    echo "                        (Invalid)
                    ";
                }
                // line 299
                echo "                </h2>
                &nbsp;
                ";
                // line 301
                if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "debugPackages", [], "any", false, false, false, 301)), 0))) {
                    // line 302
                    echo "                   ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "debugPackages", [], "any", false, false, false, 302));
                    foreach ($context['_seq'] as $context["_key"] => $context["debug_package"]) {
                        // line 303
                        echo "                       <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("download_full_debug", ["debug_package_id" => twig_get_attribute($this->env, $this->source, $context["debug_package"], "debugPackageId", [], "any", false, false, false, 303)]), "html", null, true);
                        echo "\">
                           <button class=\"btn btn-sm btn-outline-secondary\" >
                               <i class=\"fas fa-download\"></i>
                               Debug Package (";
                        // line 306
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["debug_package"], "judgehost", [], "any", false, false, false, 306), "hostname", [], "any", false, false, false, 306), "html", null, true);
                        echo ")
                           </button>
                       </a>
                   ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['debug_package'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 310
                    echo "                ";
                } else {
                    // line 311
                    echo "                    ";
                    if ( !($context["requestedOutputCount"] ?? null)) {
                        // line 312
                        echo "                        <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("request_full_debug", ["jid" => twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "judgingid", [], "any", false, false, false, 312)]), "html", null, true);
                        echo "\">
                            <button class=\"btn btn-sm btn-outline-secondary\" >
                                <i class=\"fas fa-upload\"></i>
                                Retrieve Full Debug Package
                            </button>
                        </a>
                    ";
                    }
                    // line 319
                    echo "                ";
                }
                // line 320
                echo "                &nbsp;
                ";
                // line 321
                if ( !twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "verified", [], "any", false, false, false, 321)) {
                    // line 322
                    echo "                    <form action=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission", ["submitId" => twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "submitid", [], "any", false, false, false, 322), "jid" => twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "judgingid", [], "any", false, false, false, 322)]), "html", null, true);
                    echo "\"
                          method=\"post\" style=\"display: inline;\">
                        ";
                    // line 324
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "juryMember", [], "any", false, false, false, 324))) {
                        // line 325
                        echo "                            (claimed by ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "juryMember", [], "any", false, false, false, 325), "html", null, true);
                        echo ")
                            <input type=\"hidden\" name=\"forceclaim\" value=\"1\"/>
                        ";
                    }
                    // line 328
                    echo "                        ";
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 328), "username", [], "any", false, false, false, 328), twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "juryMember", [], "any", false, false, false, 328)))) {
                        // line 329
                        echo "                            <input type=\"submit\" value=\"unclaim\" name=\"unclaim\" class=\"btn btn-outline-secondary btn-sm\"/>
                        ";
                    } else {
                        // line 331
                        echo "                            <input type=\"submit\" value=\"claim\" name=\"claim\" class=\"btn btn-outline-secondary btn-sm\"/>
                        ";
                    }
                    // line 333
                    echo "                    </form>
                ";
                }
                // line 335
                echo "            </div>
        ";
            }
            // line 337
            echo "
        <div class=\"mb-2\">
            <div>
                Result:
                ";
            // line 341
            if (((null === ($context["selectedJudging"] ?? null)) || twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "result", [], "any", false, false, false, 341)))) {
                // line 342
                if ((($context["selectedJudging"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "started", [], "any", false, false, false, 342))) {
                    // line 343
                    echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult("");
                } else {
                    // line 345
                    echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult("queued");
                }
            } else {
                // line 348
                echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult(twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "result", [], "any", false, false, false, 348));
            }
            // line 350
            if (twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "stillBusy", [], "any", false, false, false, 350)) {
                // line 351
                echo "(&hellip;)";
            }
            // line 353
            if ( !(null === ($context["lastJudging"] ?? null))) {
                // line 354
                $context["lastSubmissionLink"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission", ["submitId" => twig_get_attribute($this->env, $this->source, ($context["lastSubmission"] ?? null), "submitid", [], "any", false, false, false, 354)]);
                // line 355
                echo "<span class=\"lastresult\">
                    (<a href=\"";
                // line 356
                echo twig_escape_filter($this->env, ($context["lastSubmissionLink"] ?? null), "html", null, true);
                echo "\">s";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lastSubmission"] ?? null), "submitid", [], "any", false, false, false, 356), "html", null, true);
                echo "</a>: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lastJudging"] ?? null), "result", [], "any", false, false, false, 356), "html", null, true);
                echo ")";
                // line 357
                echo "</span>";
            }
            // line 359
            if ( !(null === ($context["externalJudgement"] ?? null))) {
                // line 360
                echo "                    (external: ";
                echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult(twig_get_attribute($this->env, $this->source, ($context["externalJudgement"] ?? null), "result", [], "any", false, false, false, 360));
                echo ")";
            }
            // line 362
            if (( !(null === ($context["selectedJudging"] ?? null)) &&  !twig_test_empty(($context["judgehosts"] ?? null)))) {
                // line 363
                echo ", Judgehost(s):
                    ";
                // line 364
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["judgehosts"] ?? null));
                foreach ($context['_seq'] as $context["judgehostid"] => $context["hostname"]) {
                    // line 365
                    echo "                        ";
                    $context["judgehostLink"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_judgehost", ["judgehostid" => $context["judgehostid"]]);
                    // line 366
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, ($context["judgehostLink"] ?? null), "html", null, true);
                    echo "\">";
                    echo $this->extensions['App\Twig\TwigExtension']->printHost($context["hostname"]);
                    echo "</a>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['judgehostid'], $context['hostname'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 367
                echo " -
                    <span class=\"judgetime\">Judging started: ";
                // line 368
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "starttime", [], "any", false, false, false, 368), "H:i:s"), "html", null, true);
                // line 369
                if (twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "endtime", [], "any", false, false, false, 369)) {
                    // line 370
                    echo ", finished in ";
                    echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtimediff(twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "starttime", [], "any", false, false, false, 370), twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "endtime", [], "any", false, false, false, 370)), "html", null, true);
                    echo "s";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 371
($context["selectedJudging"] ?? null), "valid", [], "any", false, false, false, 371) || twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "rejudging", [], "any", false, false, false, 371))) {
                    // line 372
                    echo "&nbsp;[still judging - busy ";
                    echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtimediff(twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "starttime", [], "any", false, false, false, 372)), "html", null, true);
                    echo "]";
                } else {
                    // line 374
                    echo "&nbsp;[aborted]";
                }
                // line 376
                echo "</span>
                ";
            }
            // line 378
            if ( !(null === ($context["externalJudgement"] ?? null))) {
                // line 379
                echo "                    <span class=\"judgetime\">(external judging started: ";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, ($context["externalJudgement"] ?? null), "starttime", [], "any", false, false, false, 379), "H:i:s"), "html", null, true);
                // line 380
                if (twig_get_attribute($this->env, $this->source, ($context["externalJudgement"] ?? null), "endtime", [], "any", false, false, false, 380)) {
                    // line 381
                    echo ", finished in ";
                    echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtimediff(twig_get_attribute($this->env, $this->source, ($context["externalJudgement"] ?? null), "starttime", [], "any", false, false, false, 381), twig_get_attribute($this->env, $this->source, ($context["externalJudgement"] ?? null), "endtime", [], "any", false, false, false, 381)), "html", null, true);
                    echo "s";
                } else {
                    // line 383
                    echo "&nbsp;[still judging - busy ";
                    echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtimediff(twig_get_attribute($this->env, $this->source, ($context["externalJudgement"] ?? null), "starttime", [], "any", false, false, false, 383)), "html", null, true);
                    echo "]";
                }
                // line 385
                echo ")</span>";
            }
            // line 387
            if (( !(null === ($context["selectedJudging"] ?? null)) && (0 !== twig_compare(twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "result", [], "any", false, false, false, 387), "compiler-error")))) {
                // line 388
                echo ", max/sum runtime:
                    ";
                // line 389
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "maxRuntime", [], "any", false, false, false, 389), 2, ".", ""), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "sumRuntime", [], "any", false, false, false, 389), 2, ".", ""), "html", null, true);
                echo "s";
                // line 390
                if ( !(null === ($context["lastJudging"] ?? null))) {
                    // line 391
                    echo "<span class=\"lastruntime\">
                        (<a href=\"";
                    // line 392
                    echo twig_escape_filter($this->env, ($context["lastSubmissionLink"] ?? null), "html", null, true);
                    echo "\">s";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lastSubmission"] ?? null), "submitid", [], "any", false, false, false, 392), "html", null, true);
                    echo "</a>:
                            ";
                    // line 393
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lastJudging"] ?? null), "maxRuntime", [], "any", false, false, false, 393), 2, ".", ""), "html", null, true);
                    // line 394
                    echo "/";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lastJudging"] ?? null), "sumRuntime", [], "any", false, false, false, 394), 2, ".", ""), "html", null, true);
                    echo "s)
                    </span>";
                }
            }
            // line 398
            if ((( !(null === ($context["externalJudgement"] ?? null)) && (0 !== twig_compare(twig_get_attribute($this->env, $this->source, ($context["externalJudgement"] ?? null), "result", [], "any", false, false, false, 398), "compiler-error"))) && (0 !== twig_compare(twig_get_attribute($this->env, $this->source, ($context["externalJudgement"] ?? null), "result", [], "any", false, false, false, 398), null)))) {
                // line 399
                echo ", external max/sum runtime:
                    ";
                // line 400
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["externalJudgement"] ?? null), "maxRuntime", [], "any", false, false, false, 400), 2, ".", ""), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["externalJudgement"] ?? null), "sumRuntime", [], "any", false, false, false, 400), 2, ".", ""), "html", null, true);
                echo "s
                ";
            }
            // line 402
            echo "            </div>

            ";
            // line 405
            echo "            ";
            if (( !(null === ($context["externalJudgement"] ?? null)) || ( !(null === ($context["selectedJudging"] ?? null)) && (0 !== twig_compare(twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "result", [], "any", false, false, false, 405), "compiler-error"))))) {
                // line 406
                echo "                <table>
                    <tr>
                        <td>testcase runs:</td>
                        <td>
                            ";
                // line 410
                if ((null === ($context["selectedJudging"] ?? null))) {
                    // line 411
                    echo "                                ";
                    $context["judgingDone"] = false;
                    // line 412
                    echo "                            ";
                } else {
                    // line 413
                    echo "                                ";
                    $context["judgingDone"] =  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "endtime", [], "any", false, false, false, 413));
                    // line 414
                    echo "                            ";
                }
                // line 415
                echo "                            ";
                echo $this->extensions['App\Twig\TwigExtension']->displayTestcaseResults(($context["runs"] ?? null), ($context["judgingDone"] ?? null));
                echo "
                            ";
                // line 416
                if (( !(null === ($context["selectedJudging"] ?? null)) && ($context["runsOutstanding"] ?? null))) {
                    // line 417
                    echo "                                ";
                    if (twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "judgeCompletely", [], "any", false, false, false, 417)) {
                        // line 418
                        echo "                                    <i class=\"fas fa-balance-scale\" title=\"remaining test cases requested to be judged\"></i>
                                ";
                    } elseif ( !(null === twig_get_attribute($this->env, $this->source,                     // line 419
($context["selectedJudging"] ?? null), "result", [], "any", false, false, false, 419))) {
                        // line 420
                        echo "                                    <form action=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission_request_remaining", ["judgingId" => twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "judgingid", [], "any", false, false, false, 420)]), "html", null, true);
                        echo "\" method=\"post\"
                                          style=\"display: inline; \">
                                        <input type=\"submit\" class=\"btn btn-outline-secondary btn-sm\" value=\"judge remaining\" />
                                    </form>
                                ";
                    }
                    // line 425
                    echo "                            ";
                }
                // line 426
                echo "                        </td>
                    </tr>
                    ";
                // line 428
                if ( !(null === ($context["lastJudging"] ?? null))) {
                    // line 429
                    echo "                        <tr class=\"lasttcruns\">
                            <td>
                                <a href=\"";
                    // line 431
                    echo twig_escape_filter($this->env, ($context["lastSubmissionLink"] ?? null), "html", null, true);
                    echo "\">s";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lastSubmission"] ?? null), "submitid", [], "any", false, false, false, 431), "html", null, true);
                    echo "</a> runs:
                            </td>
                            <td>
                                ";
                    // line 434
                    echo $this->extensions['App\Twig\TwigExtension']->displayTestcaseResults(($context["lastRuns"] ?? null),  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["lastJudging"] ?? null), "endtime", [], "any", false, false, false, 434)));
                    echo "
                            </td>
                        </tr>
                    ";
                }
                // line 438
                echo "                    ";
                if ( !(null === ($context["externalJudgement"] ?? null))) {
                    // line 439
                    echo "                        <tr>
                            <td>external runs:</td>
                            <td>
                                ";
                    // line 442
                    echo $this->extensions['App\Twig\TwigExtension']->displayTestcaseResults(($context["externalRuns"] ?? null),  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["externalJudgement"] ?? null), "endtime", [], "any", false, false, false, 442)), true);
                    echo "
                            </td>
                        </tr>
                    ";
                }
                // line 446
                echo "                </table>

                ";
                // line 449
                echo "                ";
                if ( !(null === ($context["lastJudging"] ?? null))) {
                    // line 450
                    echo "                    <span class=\"testcases_prev\">
                    <a href=\"javascript:togglelastruns();\">show/hide</a>
                    results of previous <a href=\"";
                    // line 452
                    echo twig_escape_filter($this->env, ($context["lastSubmissionLink"] ?? null), "html", null, true);
                    echo "\">submission s";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lastSubmission"] ?? null), "submitid", [], "any", false, false, false, 452), "html", null, true);
                    echo "</a>
                        ";
                    // line 453
                    if (twig_get_attribute($this->env, $this->source, ($context["lastJudging"] ?? null), "verifyComment", [], "any", false, false, false, 453)) {
                        // line 454
                        echo "                            <span class=\"prevsubmit\">(verify comment: '";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lastJudging"] ?? null), "verifyComment", [], "any", false, false, false, 454), "html", null, true);
                        echo "')</span>
                        ";
                    }
                    // line 456
                    echo "                </span>
                ";
                }
                // line 458
                echo "            ";
            }
            // line 459
            echo "        </div>

        <script>
            \$(function () {
                togglelastruns();
            });
        </script>

        ";
            // line 468
            echo "        ";
            if (( !(null === ($context["selectedJudging"] ?? null)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "result", [], "any", false, false, false, 468)))) {
                // line 469
                echo "            ";
                $this->loadTemplate("jury/partials/verify_form.html.twig", "jury/submission.html.twig", 469)->display(twig_array_merge($context, ["label" => "Verified", "judging" =>                 // line 471
($context["selectedJudging"] ?? null), "form_action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_judging_verify", ["judgingId" => twig_get_attribute($this->env, $this->source,                 // line 472
($context["selectedJudging"] ?? null), "judgingid", [], "any", false, false, false, 472)]), "show_form" =>  !((                // line 473
($context["verificationRequired"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "verified", [], "any", false, false, false, 473)) && twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "valid", [], "any", false, false, false, 473)), "show_icat" => true]));
                // line 475
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "contestProblem", [], "any", false, false, false, 475) && ($context["icat_url"] ?? null))) {
                    // line 476
                    echo "                <script>
                    \$(function () {
                        \$('#post-to-icat').on('click', function () {
                            postVerifyCommentToICAT(
                                '";
                    // line 480
                    echo twig_escape_filter($this->env, ($context["icat_url"] ?? null), "html", null, true);
                    echo "/insert_entry.php',
                                '";
                    // line 481
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 481), "username", [], "any", false, false, false, 481), "html", null, true);
                    echo "',
                                '";
                    // line 482
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "team", [], "any", false, false, false, 482), "teamid", [], "any", false, false, false, 482), "html", null, true);
                    echo "',
                                '";
                    // line 483
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "contestProblem", [], "any", false, false, false, 483), "shortname", [], "any", false, false, false, 483), "html", null, true);
                    echo "',
                                '";
                    // line 484
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "externalid", [], "any", false, false, false, 484), "html", null, true);
                    echo "'
                            );
                            alert('Comment posted to iCAT.');
                            return false;
                        });
                    });
                </script>
            ";
                }
                // line 492
                echo "        ";
            } elseif ( !(null === ($context["selectedJudging"] ?? null))) {
                // line 493
                echo "            <div class=\"alert alert-warning\">Judging is not ready yet!</div>
        ";
            }
            // line 495
            echo "
        ";
            // line 497
            echo "        ";
            $context["color"] = "#6666FF";
            // line 498
            echo "        ";
            $context["message"] = "not finished yet";
            // line 499
            echo "        ";
            $context["output"] = null;
            // line 500
            echo "        ";
            if ( !(null === ($context["selectedJudging"] ?? null))) {
                // line 501
                echo "            ";
                $context["output"] = twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "outputCompile", [0 => true], "method", false, false, false, 501);
                // line 502
                echo "        ";
            }
            // line 503
            echo "        ";
            if ( !(null === ($context["output"] ?? null))) {
                // line 504
                echo "            ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "result", [], "any", false, false, false, 504), "compiler-error"))) {
                    // line 505
                    echo "                ";
                    $context["message"] = "unsuccessful";
                    // line 506
                    echo "            ";
                } else {
                    // line 507
                    echo "                ";
                    $context["message"] = "successful";
                    // line 508
                    echo "                ";
                    if ( !twig_test_empty(($context["output"] ?? null))) {
                        // line 509
                        echo "                    ";
                        $context["message"] = (((($context["message"] ?? null) . " (with ") . $this->extensions['App\Twig\TwigExtension']->lineCount(($context["output"] ?? null))) . " line(s) of output)");
                        // line 510
                        echo "                ";
                    }
                    // line 511
                    echo "            ";
                }
                // line 512
                echo "        ";
            }
            // line 513
            echo "        <h3>
            <a class=\"collapse-link\" href=\"javascript:collapse('#detailcompile')\">
                Compilation <span class=\"compile-";
            // line 515
            echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
            echo "</span>
            </a>
        </h3>
        ";
            // line 518
            if (( !(null === ($context["selectedJudging"] ?? null)) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "compileMetadata", [], "any", false, false, false, 518)))) {
                // line 519
                echo "            ";
                echo $this->extensions['App\Twig\TwigExtension']->printMetadata(twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "compileMetadata", [], "any", false, false, false, 519));
                echo "
            <button class=\"btn btn-sm btn-outline-secondary\" data-toggle=\"collapse\"
                    data-target=\"#collapseExample-compilemeta\"
                    aria-expanded=\"false\">
                show complete compilation metadata
            </button>
            <div class=\"collapse\" id=\"collapseExample-compilemeta\">
                <div class=\"card card-body output_text\">";
                // line 526
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "compileMetadata", [], "any", false, false, false, 526), "html", null, true);
                echo "</div>
            </div>
            <hr/>
            <br/>
        ";
            }
            // line 531
            echo "        ";
            if (twig_test_empty(($context["output"] ?? null))) {
                // line 532
                echo "            <p class=\"nodata";
                if (((null === ($context["selectedJudging"] ?? null)) || (0 !== twig_compare(twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "result", [], "any", false, false, false, 532), "compiler-error")))) {
                    echo " d-none";
                }
                echo "\"
                id=\"detailcompile\">There were no compiler errors or warnings.</p>
        ";
            } else {
                // line 535
                echo "            <pre class=\"output_text ";
                if (((null === ($context["selectedJudging"] ?? null)) || (0 !== twig_compare(twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "result", [], "any", false, false, false, 535), "compiler-error")))) {
                    echo " d-none";
                }
                echo "\"
                id=\"detailcompile\">";
                // line 536
                echo twig_escape_filter($this->env, ($context["output"] ?? null), "html", null, true);
                echo "</pre>
        ";
            }
            // line 538
            echo "
        ";
            // line 539
            if (( !(null === ($context["externalJudgement"] ?? null)) || ( !(null === ($context["selectedJudging"] ?? null)) && (0 !== twig_compare(twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "result", [], "any", false, false, false, 539), "compiler-error"))))) {
                // line 540
                echo "            ";
                // line 541
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["runs"] ?? null));
                foreach ($context['_seq'] as $context["runIdx"] => $context["run"]) {
                    // line 542
                    echo "                ";
                    $context["externalRun"] = null;
                    // line 543
                    echo "                ";
                    if (twig_get_attribute($this->env, $this->source, ($context["externalRuns"] ?? null), $context["runIdx"], [], "array", true, true, false, 543)) {
                        // line 544
                        echo "                    ";
                        $context["externalRun"] = (($__internal_compile_2 = ($context["externalRuns"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["runIdx"]] ?? null) : null);
                        // line 545
                        echo "                ";
                    }
                    // line 546
                    echo "                <div id=\"run-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["run"], "rank", [], "any", false, false, false, 546), "html", null, true);
                    echo "\"
                     style=\"margin-bottom: 20px;\"
                     class=\"card run ";
                    // line 548
                    if ((twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 548) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 548), "runresult", [], "any", false, false, false, 548), "correct")))) {
                        echo "run_correct";
                    }
                    echo "\">
                    <div class=\"card-header\">
                        Run #";
                    // line 550
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["run"], "rank", [], "any", false, false, false, 550), "html", null, true);
                    echo "
                        ";
                    // line 551
                    if ( !(null === twig_get_attribute($this->env, $this->source, $context["run"], "origInputFilename", [], "any", false, false, false, 551))) {
                        // line 552
                        echo "                            | <span class=\"filename\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["run"], "origInputFilename", [], "any", false, false, false, 552), "html", null, true);
                        echo ".in</span>
                        ";
                    } else {
                        // line 554
                        echo "                            ";
                        if ( !(null === twig_get_attribute($this->env, $this->source, $context["run"], "description", [], "any", false, false, false, 554))) {
                            // line 555
                            echo "                                | ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["run"], "description", [0 => true], "method", false, false, false, 555), "html", null, true);
                            echo "
                            ";
                        }
                        // line 557
                        echo "                        ";
                    }
                    // line 558
                    echo "                        ";
                    if ( !(null === twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 558))) {
                        // line 559
                        echo "                            |
                            ";
                        // line 560
                        if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 560), "runresult", [], "any", false, false, false, 560))) {
                            // line 561
                            echo "                                <span class=\"sol ";
                            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 561), "runresult", [], "any", false, false, false, 561), "correct"))) {
                                echo "sol_correct";
                            } else {
                                echo "sol_incorrect";
                            }
                            echo "\">
                                    ";
                            // line 562
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 562), "runresult", [], "any", false, false, false, 562), "html", null, true);
                            echo "
                                </span>
                                ";
                            // line 564
                            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 564), "runresult", [], "any", false, false, false, 564), "timelimit"))) {
                                // line 565
                                echo "                                    ";
                                if (twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = ($context["runsOutput"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[$context["runIdx"]] ?? null) : null), "terminated", [], "any", false, false, false, 565)) {
                                    // line 566
                                    echo "                                        <b>(terminated)</b>
                                    ";
                                } else {
                                    // line 568
                                    echo "                                        <b>(finished late)</b>
                                    ";
                                }
                                // line 570
                                echo "                                ";
                            }
                            // line 571
                            echo "                            ";
                        } else {
                            // line 572
                            echo "                                <span class=\"sol sol_queued\">
                                   ";
                            // line 573
                            if ((null === twig_get_attribute($this->env, $this->source, (($__internal_compile_4 = ($context["runsOutput"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[$context["runIdx"]] ?? null) : null), "hostname", [], "any", false, false, false, 573))) {
                                // line 574
                                echo "                                       queued
                                   ";
                            } else {
                                // line 576
                                echo "                                       judging
                                   ";
                            }
                            // line 578
                            echo "                                </span>
                            ";
                        }
                        // line 580
                        echo "                        ";
                    }
                    // line 581
                    echo "                        ";
                    if ( !(null === twig_get_attribute($this->env, $this->source, (($__internal_compile_5 = ($context["runsOutput"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[$context["runIdx"]] ?? null) : null), "hostname", [], "any", false, false, false, 581))) {
                        // line 582
                        echo "                            ";
                        $context["judgehostLink"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_judgehost", ["judgehostid" => twig_get_attribute($this->env, $this->source, (($__internal_compile_6 = ($context["runsOutput"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[$context["runIdx"]] ?? null) : null), "judgehostid", [], "any", false, false, false, 582)]);
                        // line 583
                        echo "                            | <a href=\"";
                        echo twig_escape_filter($this->env, ($context["judgehostLink"] ?? null), "html", null, true);
                        echo "\">";
                        echo $this->extensions['App\Twig\TwigExtension']->printHost(twig_get_attribute($this->env, $this->source, (($__internal_compile_7 = ($context["runsOutput"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[$context["runIdx"]] ?? null) : null), "hostname", [], "any", false, false, false, 583));
                        echo "</a>
                        ";
                    }
                    // line 585
                    echo "                        ";
                    if (( !(null === ($context["externalRun"] ?? null)) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["externalRun"] ?? null), "firstExternalRun", [], "any", false, false, false, 585)))) {
                        // line 586
                        echo "                            ";
                        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["externalRun"] ?? null), "firstExternalRun", [], "any", false, false, false, 586))) {
                            // line 587
                            echo "                                (external:
                                <span class=\"sol ";
                            // line 588
                            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["externalRun"] ?? null), "firstExternalRun", [], "any", false, false, false, 588), "result", [], "any", false, false, false, 588), "correct"))) {
                                echo "sol_correct";
                            } else {
                                echo "sol_incorrect";
                            }
                            echo "\">
                                    ";
                            // line 589
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["externalRun"] ?? null), "firstExternalRun", [], "any", false, false, false, 589), "result", [], "any", false, false, false, 589), "html", null, true);
                            // line 590
                            echo "</span>";
                            // line 591
                            echo ")
                            ";
                        }
                        // line 593
                        echo "                        ";
                    }
                    // line 594
                    echo "                        <span style=\"float: right;\">
                            <a href=\"";
                    // line 595
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem_testcase_fetch", ["probId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "problem", [], "any", false, false, false, 595), "probid", [], "any", false, false, false, 595), "rank" => twig_get_attribute($this->env, $this->source, $context["run"], "rank", [], "any", false, false, false, 595), "type" => "input"]), "html", null, true);
                    echo "\">
                                <button class=\"btn btn-sm btn-outline-secondary\" >
                                    <i class=\"fas fa-download\"></i>
                                    Input
                                </button>
                            </a>
                            <a href=\"";
                    // line 601
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem_testcase_fetch", ["probId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "problem", [], "any", false, false, false, 601), "probid", [], "any", false, false, false, 601), "rank" => twig_get_attribute($this->env, $this->source, $context["run"], "rank", [], "any", false, false, false, 601), "type" => "output"]), "html", null, true);
                    echo "\">
                                <button class=\"btn btn-sm btn-outline-secondary\" >
                                    <i class=\"fas fa-download\"></i>
                                    Reference Output
                                </button>
                            </a>
                            ";
                    // line 607
                    if ( !(null === twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 607))) {
                        // line 608
                        echo "                                <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission_team_output", ["submission" => twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "submitid", [], "any", false, false, false, 608), "run" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 608), "runid", [], "any", false, false, false, 608), "contest" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "contest", [], "any", false, false, false, 608), "cid", [], "any", false, false, false, 608)]), "html", null, true);
                        echo "\">
                                    <button class=\"btn btn-sm btn-outline-secondary\" >
                                        <i class=\"fas fa-download\"></i>
                                        ";
                        // line 611
                        if (twig_get_attribute($this->env, $this->source, (($__internal_compile_8 = ($context["runsOutput"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[$context["runIdx"]] ?? null) : null), "is_output_run_truncated", [], "any", false, false, false, 611)) {
                            // line 612
                            echo "                                            Truncated
                                        ";
                        }
                        // line 614
                        echo "                                        Team Output
                                    </button>
                                </a>
                                ";
                        // line 617
                        if (twig_get_attribute($this->env, $this->source, (($__internal_compile_9 = ($context["runsOutput"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[$context["runIdx"]] ?? null) : null), "is_output_run_truncated", [], "any", false, false, false, 617)) {
                            // line 618
                            echo "                                    <a href=\"";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("request_output", ["jid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 618), "judgingid", [], "any", false, false, false, 618), "jrid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 618), "runid", [], "any", false, false, false, 618)]), "html", null, true);
                            echo "\">
                                        <button class=\"btn btn-sm btn-outline-secondary\" >
                                            <i class=\"fas fa-upload\"></i>
                                            Retrieve Full Team Output
                                        </button>
                                    </a>
                                ";
                        }
                        // line 625
                        echo "                            ";
                    }
                    // line 626
                    echo "                        </span>
                    </div>
                    <div class=\"card-body\">
                    ";
                    // line 629
                    if (( !(null === twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 629)) && twig_get_attribute($this->env, $this->source, (($__internal_compile_10 = ($context["runsOutput"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[$context["runIdx"]] ?? null) : null), "cpu_time", [], "any", false, false, false, 629))) {
                        // line 630
                        echo "                    <span style=\"display:inline; margin-left: 5px;\">
\t\t        <i class=\"fas fa-stopwatch\" title=\"runtime\"></i>
                        ";
                        // line 632
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_11 = ($context["runsOutput"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[$context["runIdx"]] ?? null) : null), "cpu_time", [], "any", false, false, false, 632), "html", null, true);
                        echo "s
                        CPU";
                        // line 633
                        if ( !(null === twig_get_attribute($this->env, $this->source, (($__internal_compile_12 = ($context["runsOutput"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[$context["runIdx"]] ?? null) : null), "metadata", [], "any", false, false, false, 633))) {
                            echo ",
                            ";
                            // line 634
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_13 = ($context["runsOutput"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[$context["runIdx"]] ?? null) : null), "wall_time", [], "any", false, false, false, 634), "html", null, true);
                            echo "s wall,
\t\t            <i class=\"fas fa-memory\" title=\"RAM\"></i>
                            ";
                            // line 636
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_14 = ($context["runsOutput"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[$context["runIdx"]] ?? null) : null), "memory", [], "any", false, false, false, 636), "html", null, true);
                            echo ",
\t\t            <i class=\"far fa-question-circle\" title=\"exit-code\"></i>
                            exit code:
                            ";
                            // line 639
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_15 = ($context["runsOutput"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[$context["runIdx"]] ?? null) : null), "exitcode", [], "any", false, false, false, 639), "html", null, true);
                            if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, (($__internal_compile_16 = ($context["runsOutput"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[$context["runIdx"]] ?? null) : null), "signal", [], "any", false, false, false, 639), 0))) {
                                echo ",
                                signal: ";
                                // line 640
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_17 = ($context["runsOutput"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[$context["runIdx"]] ?? null) : null), "signal", [], "any", false, false, false, 640), "html", null, true);
                                echo "
                            ";
                            }
                            // line 642
                            echo "                            <button class=\"btn btn-sm btn-outline-secondary\" data-toggle=\"collapse\"
                                    data-target=\"#collapseExample-";
                            // line 643
                            echo twig_escape_filter($this->env, $context["runIdx"], "html", null, true);
                            echo "\"
                                    aria-expanded=\"false\">
                                show complete metadata
                            </button>
                            ";
                            // line 647
                            if (twig_get_attribute($this->env, $this->source, (($__internal_compile_18 = ($context["runsOutput"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18[$context["runIdx"]] ?? null) : null), "output_limit", [], "any", false, false, false, 647)) {
                                // line 648
                                echo "                                <div class=\"alert alert-warning\">
                                    The submission output (<code>";
                                // line 649
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_19 = ($context["runsOutput"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[$context["runIdx"]] ?? null) : null), "output_limit", [], "any", false, false, false, 649), "html", null, true);
                                echo "</code>) was
                                    truncated because of the configured output limit.
                                </div>
                            ";
                            }
                            // line 653
                            echo "                            <div class=\"collapse\" id=\"collapseExample-";
                            echo twig_escape_filter($this->env, $context["runIdx"], "html", null, true);
                            echo "\">
                                  <div class=\"card card-body output_text\">";
                            // line 654
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_20 = ($context["runsOutput"] ?? null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20[$context["runIdx"]] ?? null) : null), "metadata", [], "any", false, false, false, 654), "html", null, true);
                            echo "</div>
                            </div>
                        ";
                        }
                        // line 657
                        echo "                    </span>
                    ";
                    }
                    // line 659
                    echo "                    ";
                    if ( !(null === twig_get_attribute($this->env, $this->source, $context["run"], "description", [], "any", false, false, false, 659))) {
                        // line 660
                        echo "                        <p><em>
                            ";
                        // line 661
                        echo $this->extensions['App\Twig\TwigExtension']->descriptionExpand(twig_get_attribute($this->env, $this->source, $context["run"], "description", [0 => true], "method", false, false, false, 661));
                        echo "
                        </em></p>
                    ";
                    }
                    // line 664
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, (($__internal_compile_21 = ($context["runsOutput"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21[$context["runIdx"]] ?? null) : null), "image_thumb", [], "any", false, false, false, 664)) {
                        // line 665
                        echo "                        <span style=\"float:right; border: 3px solid #438ec3; margin: 5px; padding: 5px;\">
                            ";
                        // line 666
                        $context["imgUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem_testcase_fetch", ["probId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "problem", [], "any", false, false, false, 666), "probid", [], "any", false, false, false, 666), "rank" => twig_get_attribute($this->env, $this->source, $context["run"], "rank", [], "any", false, false, false, 666), "type" => "image"]);
                        // line 667
                        echo "                            <a href=\"";
                        echo twig_escape_filter($this->env, ($context["imgUrl"] ?? null), "html", null, true);
                        echo "\">
                                <img src=\"data:image/";
                        // line 668
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["run"], "imageType", [], "any", false, false, false, 668), "html", null, true);
                        echo ";base64,";
                        echo twig_escape_filter($this->env, base64_encode(twig_get_attribute($this->env, $this->source, (($__internal_compile_22 = ($context["runsOutput"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22[$context["runIdx"]] ?? null) : null), "image_thumb", [], "any", false, false, false, 668)), "html", null, true);
                        echo "\"/>
                            </a>
                        </span>
                    ";
                    }
                    // line 672
                    echo "
                    ";
                    // line 673
                    $context["runDone"] = false;
                    // line 674
                    echo "                    ";
                    if ((( !(null === $context["run"]) &&  !(null === twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 674))) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 674), "runresult", [], "any", false, false, false, 674)))) {
                        // line 675
                        echo "                        ";
                        $context["runDone"] = true;
                        // line 676
                        echo "                    ";
                    }
                    // line 677
                    echo "                    ";
                    if ( !($context["runDone"] ?? null)) {
                        // line 678
                        echo "                        <p class=\"nodata\">
                            ";
                        // line 679
                        if (( !(null === ($context["selectedJudging"] ?? null)) && twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "result", [], "any", false, false, false, 679))) {
                            // line 680
                            echo "                                Run not used for final result.
                            ";
                        } else {
                            // line 682
                            echo "                                Run not started/finished yet.
                            ";
                        }
                        // line 684
                        echo "                        </p>
                    ";
                    } else {
                        // line 686
                        echo "                        ";
                        if (( !(null === twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 686)) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 686), "runresult", [], "any", false, false, false, 686)))) {
                            // line 687
                            echo "                            ";
                            if (($context["combinedRunCompare"] ?? null)) {
                                // line 688
                                echo "                                <h5>Validator output</h5>
                                ";
                                // line 689
                                if (twig_test_empty(twig_get_attribute($this->env, $this->source, (($__internal_compile_23 = ($context["runsOutput"] ?? null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23[$context["runIdx"]] ?? null) : null), "output_diff", [], "any", false, false, false, 689))) {
                                    // line 690
                                    echo "                                    <p class=\"nodata\">There was no validator output.</p>
                                ";
                                } else {
                                    // line 692
                                    echo "                                    <pre class=\"output_text\">
";
                                    // line 693
                                    echo $this->extensions['App\Twig\TwigExtension']->parseRunDiff(twig_get_attribute($this->env, $this->source, (($__internal_compile_24 = ($context["runsOutput"] ?? null)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24[$context["runIdx"]] ?? null) : null), "output_diff", [], "any", false, false, false, 693));
                                    echo "</pre>
                                ";
                                }
                                // line 695
                                echo "                            ";
                            } else {
                                // line 696
                                echo "                                <h5>Diff output</h5>
                                ";
                                // line 697
                                if (twig_test_empty(twig_get_attribute($this->env, $this->source, (($__internal_compile_25 = ($context["runsOutput"] ?? null)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25[$context["runIdx"]] ?? null) : null), "output_diff", [], "any", false, false, false, 697))) {
                                    // line 698
                                    echo "                                    <p class=\"nodata\">There was no diff output.</p>
                                ";
                                } else {
                                    // line 700
                                    echo "                                    <pre class=\"output_text\">
";
                                    // line 701
                                    echo $this->extensions['App\Twig\TwigExtension']->parseRunDiff(twig_get_attribute($this->env, $this->source, (($__internal_compile_26 = ($context["runsOutput"] ?? null)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26[$context["runIdx"]] ?? null) : null), "output_diff", [], "any", false, false, false, 701));
                                    echo "</pre>
                                ";
                                }
                                // line 703
                                echo "
                                ";
                                // line 704
                                if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 704), "runresult", [], "any", false, false, false, 704), "correct"))) {
                                    // line 705
                                    echo "                                    ";
                                    echo $this->extensions['App\Twig\TwigExtension']->runDiff((($__internal_compile_27 = ($context["runsOutput"] ?? null)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27[$context["runIdx"]] ?? null) : null));
                                    echo "
                                ";
                                }
                                // line 707
                                echo "                            ";
                            }
                            // line 708
                            echo "
                            ";
                            // line 709
                            if (($context["combinedRunCompare"] ?? null)) {
                                // line 710
                                echo "                                <h5>Validator/Submission interaction</h5>
                                ";
                                // line 711
                                if (twig_test_empty(twig_get_attribute($this->env, $this->source, (($__internal_compile_28 = ($context["runsOutput"] ?? null)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28[$context["runIdx"]] ?? null) : null), "output_run", [], "any", false, false, false, 711))) {
                                    // line 712
                                    echo "                                    <p class=\"nodata\">There was no interaction log.</p>
                                ";
                                } else {
                                    // line 714
                                    echo "                                    ";
                                    echo $this->extensions['App\Twig\TwigExtension']->interactiveLog(twig_get_attribute($this->env, $this->source, (($__internal_compile_29 = ($context["runsOutput"] ?? null)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29[$context["runIdx"]] ?? null) : null), "output_run", [], "any", false, false, false, 714));
                                    echo "
                                ";
                                }
                                // line 716
                                echo "                            ";
                            } else {
                                // line 717
                                echo "                                <h5>Program output</h5>
                                ";
                                // line 718
                                if (twig_test_empty(twig_get_attribute($this->env, $this->source, (($__internal_compile_30 = ($context["runsOutput"] ?? null)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30[$context["runIdx"]] ?? null) : null), "output_run", [], "any", false, false, false, 718))) {
                                    // line 719
                                    echo "                                    <p class=\"nodata\">There was no program output.</p>
                                ";
                                } else {
                                    // line 721
                                    echo "                                    <pre class=\"output_text\">
";
                                    // line 722
                                    echo $this->extensions['App\Twig\TwigExtension']->parseRunDiff(twig_get_attribute($this->env, $this->source, (($__internal_compile_31 = ($context["runsOutput"] ?? null)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31[$context["runIdx"]] ?? null) : null), "output_run", [], "any", false, false, false, 722));
                                    echo "</pre>
                                ";
                                }
                                // line 724
                                echo "                            ";
                            }
                            // line 725
                            echo "
                            <h5>Program error output</h5>
                            ";
                            // line 727
                            if (twig_test_empty(twig_get_attribute($this->env, $this->source, (($__internal_compile_32 = ($context["runsOutput"] ?? null)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32[$context["runIdx"]] ?? null) : null), "output_error", [], "any", false, false, false, 727))) {
                                // line 728
                                echo "                                <p class=\"nodata\">There was no stderr output.</p>
                            ";
                            } else {
                                // line 730
                                echo "                                <pre class=\"output_text\">";
                                echo $this->extensions['App\Twig\TwigExtension']->parseRunDiff(twig_get_attribute($this->env, $this->source, (($__internal_compile_33 = ($context["runsOutput"] ?? null)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33[$context["runIdx"]] ?? null) : null), "output_error", [], "any", false, false, false, 730));
                                echo "</pre>
                            ";
                            }
                            // line 732
                            echo "
                            <h5>Judging system output (info/debug/errors)</h5>
                            ";
                            // line 734
                            if (twig_test_empty(twig_get_attribute($this->env, $this->source, (($__internal_compile_34 = ($context["runsOutput"] ?? null)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34[$context["runIdx"]] ?? null) : null), "output_system", [], "any", false, false, false, 734))) {
                                // line 735
                                echo "                                <p class=\"nodata\">There was no judging system output.</p>
                            ";
                            } else {
                                // line 737
                                echo "                                <pre class=\"output_text\">";
                                echo $this->extensions['App\Twig\TwigExtension']->parseRunDiff(twig_get_attribute($this->env, $this->source, (($__internal_compile_35 = ($context["runsOutput"] ?? null)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35[$context["runIdx"]] ?? null) : null), "output_system", [], "any", false, false, false, 737));
                                echo "</pre>
                            ";
                            }
                            // line 739
                            echo "                        ";
                        }
                        // line 740
                        echo "                    ";
                    }
                    // line 741
                    echo "
                    </div>
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['runIdx'], $context['run'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 745
                echo "
            <script>
                function display_correctruns(show) {
                    elements = document.getElementsByClassName('run_correct');
                    for (var i = 0; i < elements.length; i++) {
                        elements[i].style.display = show ? 'block' : 'none';
                    }
                }

                display_correctruns(false);
            </script>
        ";
            }
            // line 756
            echo " ";
            // line 757
            echo "
    ";
        }
        // line 758
        echo " ";
        // line 759
        echo "
";
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    public function getTemplateName()
    {
        return "jury/submission.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1849 => 759,  1847 => 758,  1843 => 757,  1841 => 756,  1827 => 745,  1818 => 741,  1815 => 740,  1812 => 739,  1806 => 737,  1802 => 735,  1800 => 734,  1796 => 732,  1790 => 730,  1786 => 728,  1784 => 727,  1780 => 725,  1777 => 724,  1772 => 722,  1769 => 721,  1765 => 719,  1763 => 718,  1760 => 717,  1757 => 716,  1751 => 714,  1747 => 712,  1745 => 711,  1742 => 710,  1740 => 709,  1737 => 708,  1734 => 707,  1728 => 705,  1726 => 704,  1723 => 703,  1718 => 701,  1715 => 700,  1711 => 698,  1709 => 697,  1706 => 696,  1703 => 695,  1698 => 693,  1695 => 692,  1691 => 690,  1689 => 689,  1686 => 688,  1683 => 687,  1680 => 686,  1676 => 684,  1672 => 682,  1668 => 680,  1666 => 679,  1663 => 678,  1660 => 677,  1657 => 676,  1654 => 675,  1651 => 674,  1649 => 673,  1646 => 672,  1637 => 668,  1632 => 667,  1630 => 666,  1627 => 665,  1624 => 664,  1618 => 661,  1615 => 660,  1612 => 659,  1608 => 657,  1602 => 654,  1597 => 653,  1590 => 649,  1587 => 648,  1585 => 647,  1578 => 643,  1575 => 642,  1570 => 640,  1565 => 639,  1559 => 636,  1554 => 634,  1550 => 633,  1546 => 632,  1542 => 630,  1540 => 629,  1535 => 626,  1532 => 625,  1521 => 618,  1519 => 617,  1514 => 614,  1510 => 612,  1508 => 611,  1501 => 608,  1499 => 607,  1490 => 601,  1481 => 595,  1478 => 594,  1475 => 593,  1471 => 591,  1469 => 590,  1467 => 589,  1459 => 588,  1456 => 587,  1453 => 586,  1450 => 585,  1442 => 583,  1439 => 582,  1436 => 581,  1433 => 580,  1429 => 578,  1425 => 576,  1421 => 574,  1419 => 573,  1416 => 572,  1413 => 571,  1410 => 570,  1406 => 568,  1402 => 566,  1399 => 565,  1397 => 564,  1392 => 562,  1383 => 561,  1381 => 560,  1378 => 559,  1375 => 558,  1372 => 557,  1366 => 555,  1363 => 554,  1357 => 552,  1355 => 551,  1351 => 550,  1344 => 548,  1338 => 546,  1335 => 545,  1332 => 544,  1329 => 543,  1326 => 542,  1321 => 541,  1319 => 540,  1317 => 539,  1314 => 538,  1309 => 536,  1302 => 535,  1293 => 532,  1290 => 531,  1282 => 526,  1271 => 519,  1269 => 518,  1261 => 515,  1257 => 513,  1254 => 512,  1251 => 511,  1248 => 510,  1245 => 509,  1242 => 508,  1239 => 507,  1236 => 506,  1233 => 505,  1230 => 504,  1227 => 503,  1224 => 502,  1221 => 501,  1218 => 500,  1215 => 499,  1212 => 498,  1209 => 497,  1206 => 495,  1202 => 493,  1199 => 492,  1188 => 484,  1184 => 483,  1180 => 482,  1176 => 481,  1172 => 480,  1166 => 476,  1163 => 475,  1161 => 473,  1160 => 472,  1159 => 471,  1157 => 469,  1154 => 468,  1144 => 459,  1141 => 458,  1137 => 456,  1131 => 454,  1129 => 453,  1123 => 452,  1119 => 450,  1116 => 449,  1112 => 446,  1105 => 442,  1100 => 439,  1097 => 438,  1090 => 434,  1082 => 431,  1078 => 429,  1076 => 428,  1072 => 426,  1069 => 425,  1060 => 420,  1058 => 419,  1055 => 418,  1052 => 417,  1050 => 416,  1045 => 415,  1042 => 414,  1039 => 413,  1036 => 412,  1033 => 411,  1031 => 410,  1025 => 406,  1022 => 405,  1018 => 402,  1011 => 400,  1008 => 399,  1006 => 398,  999 => 394,  997 => 393,  991 => 392,  988 => 391,  986 => 390,  981 => 389,  978 => 388,  976 => 387,  973 => 385,  968 => 383,  963 => 381,  961 => 380,  958 => 379,  956 => 378,  952 => 376,  949 => 374,  944 => 372,  942 => 371,  938 => 370,  936 => 369,  934 => 368,  931 => 367,  920 => 366,  917 => 365,  913 => 364,  910 => 363,  908 => 362,  903 => 360,  901 => 359,  898 => 357,  891 => 356,  888 => 355,  886 => 354,  884 => 353,  881 => 351,  879 => 350,  876 => 348,  872 => 345,  869 => 343,  867 => 342,  865 => 341,  859 => 337,  855 => 335,  851 => 333,  847 => 331,  843 => 329,  840 => 328,  833 => 325,  831 => 324,  825 => 322,  823 => 321,  820 => 320,  817 => 319,  806 => 312,  803 => 311,  800 => 310,  790 => 306,  783 => 303,  778 => 302,  776 => 301,  772 => 299,  768 => 297,  766 => 296,  760 => 295,  756 => 294,  753 => 293,  751 => 292,  747 => 291,  743 => 289,  740 => 287,  738 => 286,  735 => 285,  733 => 284,  730 => 283,  728 => 282,  725 => 281,  722 => 280,  713 => 278,  708 => 277,  706 => 276,  703 => 275,  698 => 272,  689 => 268,  681 => 266,  679 => 265,  675 => 264,  670 => 261,  666 => 259,  664 => 258,  660 => 257,  656 => 256,  649 => 252,  645 => 251,  640 => 248,  634 => 246,  632 => 245,  628 => 244,  621 => 242,  615 => 241,  611 => 239,  607 => 237,  603 => 235,  601 => 234,  597 => 233,  589 => 231,  586 => 230,  582 => 229,  566 => 215,  564 => 214,  561 => 213,  557 => 211,  555 => 210,  552 => 209,  548 => 207,  546 => 204,  545 => 203,  544 => 201,  536 => 197,  530 => 194,  525 => 193,  519 => 191,  517 => 190,  510 => 185,  508 => 184,  505 => 183,  501 => 181,  495 => 179,  493 => 178,  490 => 176,  488 => 175,  484 => 174,  481 => 172,  479 => 171,  475 => 169,  473 => 168,  469 => 166,  466 => 165,  458 => 160,  454 => 158,  451 => 157,  448 => 156,  446 => 155,  439 => 151,  435 => 150,  427 => 145,  418 => 139,  414 => 138,  405 => 132,  401 => 131,  394 => 126,  388 => 124,  380 => 122,  378 => 121,  374 => 120,  365 => 114,  361 => 113,  356 => 110,  349 => 106,  345 => 105,  341 => 103,  339 => 102,  330 => 98,  326 => 97,  321 => 94,  318 => 92,  312 => 88,  310 => 87,  307 => 86,  303 => 84,  301 => 83,  297 => 81,  295 => 80,  292 => 79,  284 => 76,  280 => 75,  271 => 73,  265 => 71,  262 => 70,  259 => 69,  256 => 68,  253 => 67,  250 => 66,  248 => 65,  245 => 64,  241 => 62,  238 => 61,  234 => 59,  218 => 57,  212 => 56,  210 => 55,  193 => 54,  191 => 53,  188 => 52,  180 => 50,  177 => 49,  175 => 48,  171 => 47,  166 => 44,  160 => 41,  157 => 40,  155 => 39,  152 => 38,  146 => 35,  143 => 34,  141 => 33,  138 => 32,  135 => 31,  132 => 30,  129 => 29,  126 => 28,  124 => 27,  121 => 26,  114 => 25,  94 => 11,  90 => 10,  86 => 9,  82 => 8,  77 => 7,  70 => 6,  54 => 4,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/submission.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/submission.html.twig");
    }
}
