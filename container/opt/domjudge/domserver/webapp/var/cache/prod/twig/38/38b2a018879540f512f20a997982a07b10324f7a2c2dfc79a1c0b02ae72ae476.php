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

/* jury/problem.html.twig */
class __TwigTemplate_9b9b73a5521774afd95b265e9ef2225389c449e4b635a68af24a63ee89fb0b83 extends Template
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
        // line 1
        return "jury/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/problem.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/problem.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/problem.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Problem ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "probid", [], "any", false, false, false, 4), "html", null, true);
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
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    // line 11
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 12
        echo "
    <h1>Problem ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "name", [], "any", false, false, false, 13), "html", null, true);
        echo "</h1>

    <div class=\"row\">
        <div class=\"col-lg-4\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>ID</th>
                    <td>p";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "probid", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
                </tr>
                ";
        // line 22
        if ($this->extensions['App\Twig\TwigExtension']->showExternalId(($context["problem"] ?? null))) {
            // line 23
            echo "                    <tr>
                        <th>External ID</th>
                        <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "externalid", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        // line 28
        echo "                <tr>
                    <th>Name</th>
                    <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "name", [], "any", false, false, false, 30), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Testcases</th>
                    <td>
                        ";
        // line 35
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "testcases", [], "any", false, false, false, 35))) {
            // line 36
            echo "                            <em>no testcases</em>
                        ";
        } else {
            // line 38
            echo "                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "testcases", [], "any", false, false, false, 38), "count", [], "any", false, false, false, 38), "html", null, true);
            echo "
                        ";
        }
        // line 40
        echo "                        <a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem_testcases", ["probId" => twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "probid", [], "any", false, false, false, 40)]), "html", null, true);
        echo "\">details
                            / edit</a>
                    </td>
                </tr>
                <tr>
                    <th>Timelimit</th>
                    <td>";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "timelimit", [], "any", false, false, false, 46), "html", null, true);
        echo " sec</td>
                </tr>
                <tr>
                    <th>Memory limit</th>
                    <td>
                        ";
        // line 51
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "memlimit", [], "any", false, false, false, 51), null))) {
            // line 52
            echo "                            ";
            echo twig_escape_filter($this->env, ($context["defaultMemoryLimit"] ?? null), "html", null, true);
            echo " kB (default)
                        ";
        } else {
            // line 54
            echo "                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "memlimit", [], "any", false, false, false, 54), "html", null, true);
            echo " kB
                        ";
        }
        // line 56
        echo "                    </td>
                </tr>
                <tr>
                    <th>Output limit</th>
                    <td>
                        ";
        // line 61
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "outputlimit", [], "any", false, false, false, 61), null))) {
            // line 62
            echo "                            ";
            echo twig_escape_filter($this->env, ($context["defaultOutputLimit"] ?? null), "html", null, true);
            echo " kB (default)
                        ";
        } else {
            // line 64
            echo "                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "outputlimit", [], "any", false, false, false, 64), "html", null, true);
            echo " kB
                        ";
        }
        // line 66
        echo "                    </td>
                </tr>
                ";
        // line 68
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "problemtextType", [], "any", false, false, false, 68))) {
            // line 69
            echo "                    <tr>
                        <th>Problem text</th>
                        <td>
                            <a href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem_text", ["probId" => twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "probid", [], "any", false, false, false, 72)]), "html", null, true);
            echo "\">
                                <i title=\"view problem description\"
                                   class=\"fas fa-file-";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "problemtextType", [], "any", false, false, false, 74), "html", null, true);
            echo "\"></i>
                            </a>
                        </td>
                    </tr>
                ";
        }
        // line 79
        echo "                <tr>
                    <th>Run script</th>
                    <td class=\"filename\">
                        ";
        // line 82
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "runExecutable", [], "any", false, false, false, 82))) {
            // line 83
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_executable", ["execId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "runExecutable", [], "any", false, false, false, 83), "execid", [], "any", false, false, false, 83)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "runExecutable", [], "any", false, false, false, 83), "execid", [], "any", false, false, false, 83), "html", null, true);
            echo "</a>
                        ";
        } else {
            // line 85
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_executable", ["execId" => ($context["defaultRunExecutable"] ?? null)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["defaultRunExecutable"] ?? null), "html", null, true);
            echo "</a>
                            (default)
                        ";
        }
        // line 88
        echo "                    </td>
                </tr>
                ";
        // line 90
        if (twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "combinedRunCompare", [], "any", false, false, false, 90)) {
            // line 91
            echo "                    <tr>
                        <th>Compare script</th>
                        <td>Run script combines run and compare script.</td>
                    </tr>
                ";
        } else {
            // line 96
            echo "                    <tr>
                        <th>Compare script</th>
                        <td class=\"filename\">
                            ";
            // line 99
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "compareExecutable", [], "any", false, false, false, 99))) {
                // line 100
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_executable", ["execId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "compareExecutable", [], "any", false, false, false, 100), "execid", [], "any", false, false, false, 100)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "compareExecutable", [], "any", false, false, false, 100), "execid", [], "any", false, false, false, 100), "html", null, true);
                echo "</a>
                            ";
            } else {
                // line 102
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_executable", ["execId" => ($context["defaultCompareExecutable"] ?? null)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ($context["defaultCompareExecutable"] ?? null), "html", null, true);
                echo "</a>
                                (default)
                            ";
            }
            // line 105
            echo "                        </td>
                    </tr>
                ";
        }
        // line 108
        echo "                ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "specialCompareArgs", [], "any", false, false, false, 108))) {
            // line 109
            echo "                    <tr>
                        <th>Compare script arguments</th>
                        <td class=\"filename\">";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "specialCompareArgs", [], "any", false, false, false, 111), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        // line 114
        echo "            </table>
        </div>
    </div>

    <div class=\"button-row\">";
        // line 119
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 120
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem_edit", ["probId" => twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "probid", [], "any", false, false, false, 120)]), "Edit", "primary", "edit");
            echo "
            ";
            // line 121
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem_delete", ["probId" => twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "probid", [], "any", false, false, false, 121)]), "Delete", "danger", "trash-alt", true);
            echo "
            ";
            // line 122
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem_request_remaining", ["probId" => twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "probid", [], "any", false, false, false, 122)]), "Judge remaining", "secondary", "gavel");
            echo "
        ";
        }
        // line 124
        echo "        ";
        echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_export_problem", ["problemId" => twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "probid", [], "any", false, false, false, 124)]), "Export", "secondary", "download");
        echo "
        ";
        // line 125
        $this->loadTemplate("jury/partials/rejudge_form.html.twig", "jury/problem.html.twig", 125)->display(twig_array_merge($context, ["table" => "problem", "id" => twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "probid", [], "any", false, false, false, 125), "buttonClass" => "btn-secondary"]));
        // line 126
        echo "    </div>

    <h2>Contests</h2>

    ";
        // line 130
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "contestProblems", [], "any", false, false, false, 130))) {
            // line 131
            echo "        <p class=\"nodata\">No contests defined</p>
    ";
        } else {
            // line 133
            echo "        <div class=\"row\">
            <div class=\"col-md-6\">
                <table
                    class=\"data-table table table-hover table-striped table-sm\">
                    <thead class=\"thead-light\">
                    <tr>
                        <th>CID</th>
                        <th>Contest<br/>shortname</th>
                        <th>Contest<br/>name</th>
                        <th>Problem<br/>shortname</th>
                        <th>Allow<br/>submit</th>
                        <th>Allow<br/>judge</th>
                        <th>Colour</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
            // line 149
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "contestProblems", [], "any", false, false, false, 149));
            foreach ($context['_seq'] as $context["_key"] => $context["contestProblem"]) {
                // line 150
                echo "                        ";
                $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contest", ["contestId" => twig_get_attribute($this->env, $this->source, $context["contestProblem"], "cid", [], "any", false, false, false, 150)]);
                // line 151
                echo "                        <tr>
                            <td>
                                <a href=\"";
                // line 153
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">c";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contestProblem"], "cid", [], "any", false, false, false, 153), "html", null, true);
                echo "</a>
                            </td>
                            <td>
                                <a href=\"";
                // line 156
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contestProblem"], "contest", [], "any", false, false, false, 156), "shortname", [], "any", false, false, false, 156), "html", null, true);
                echo "</a>
                            </td>
                            <td>
                                <a href=\"";
                // line 159
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contestProblem"], "contest", [], "any", false, false, false, 159), "name", [], "any", false, false, false, 159), "html", null, true);
                echo "</a>
                            </td>
                            <td>
                                <a href=\"";
                // line 162
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contestProblem"], "shortname", [], "any", false, false, false, 162), "html", null, true);
                echo "</a>
                            </td>
                            <td>
                                <a href=\"";
                // line 165
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, $context["contestProblem"], "allowSubmit", [], "any", false, false, false, 165)), "html", null, true);
                echo "</a>
                            </td>
                            <td>
                                <a href=\"";
                // line 168
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, $context["contestProblem"], "allowJudge", [], "any", false, false, false, 168)), "html", null, true);
                echo "</a>
                            </td>
                            ";
                // line 170
                if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["contestProblem"], "color", [], "any", false, false, false, 170))) {
                    // line 171
                    echo "                                <td><a href=\"";
                    echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                    echo "\">&nbsp;</a></td>
                            ";
                } else {
                    // line 173
                    echo "                                <td title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contestProblem"], "color", [], "any", false, false, false, 173), "html", null, true);
                    echo "\">
                                    <a href=\"";
                    // line 174
                    echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                    echo "\">
                                        ";
                    // line 175
                    echo $this->extensions['App\Twig\TwigExtension']->problemBadge($context["contestProblem"]);
                    echo "
                                    </a>
                                </td>
                            ";
                }
                // line 179
                echo "                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contestProblem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 181
            echo "                    </tbody>
                </table>
            </div>
        </div>
    ";
        }
        // line 186
        echo "
    <h2>Attachments</h2>

    <div class=\"row\">
        <div class=\"col-md-6\">
            ";
        // line 191
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["problemAttachmentForm"] ?? null), 'form_start');
        echo "
            <table class=\"table table-sm table-striped table-hover\">
                <thead class=\"thead-light\">
                <tr>
                    <th>Name</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 200
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "attachments", [], "any", false, false, false, 200))) {
            // line 201
            echo "                    <tr>
                        <td colspan=\"2\">
                            <p class=\"nodata\">No attachments</p>
                        </td>
                    </tr>
                ";
        } else {
            // line 207
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "attachments", [], "any", false, false, false, 207));
            foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                // line 208
                echo "                        <tr>
                            <td>";
                // line 209
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attachment"], "name", [], "any", false, false, false, 209), "html", null, true);
                echo "</td>
                            <td>
                                <a href=\"";
                // line 211
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_attachment_fetch", ["attachmentId" => twig_get_attribute($this->env, $this->source, $context["attachment"], "attachmentid", [], "any", false, false, false, 211)]), "html", null, true);
                echo "\"
                                   class=\"btn btn-sm btn-primary\">
                                    <i class=\"fas fa-download\"></i>
                                </a>
                                ";
                // line 215
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 216
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_attachment_delete", ["attachmentId" => twig_get_attribute($this->env, $this->source, $context["attachment"], "attachmentid", [], "any", false, false, false, 216)]), "html", null, true);
                    echo "\"
                                       class=\"btn btn-sm btn-danger\"
                                       data-ajax-modal>
                                        <i class=\"fas fa-trash-alt\"></i>
                                    </a>
                                ";
                }
                // line 222
                echo "                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 225
            echo "                ";
        }
        // line 226
        echo "
                ";
        // line 227
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 228
            echo "                    <tr>
                        <td>
                            ";
            // line 230
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["problemAttachmentForm"] ?? null), "content", [], "any", false, false, false, 230), 'errors');
            echo "
                            ";
            // line 231
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["problemAttachmentForm"] ?? null), "content", [], "any", false, false, false, 231), 'widget');
            echo "
                        </td>
                        <td>
                            ";
            // line 234
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["problemAttachmentForm"] ?? null), "add", [], "any", false, false, false, 234), 'widget');
            echo "
                        </td>
                    </tr>
                ";
        }
        // line 238
        echo "                </tbody>
            </table>
            ";
        // line 240
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["problemAttachmentForm"] ?? null), 'form_end');
        echo "
        </div>
    </div>

    <h2>Submissions for ";
        // line 244
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "name", [], "any", false, false, false, 244), "html", null, true);
        echo "</h2>

    <div data-ajax-refresh-target>";
        // line 247
        $this->loadTemplate("jury/partials/submission_list.html.twig", "jury/problem.html.twig", 247)->display(twig_array_merge($context, ["showTestcases" => false]));
        // line 248
        echo "    </div>

";
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    public function getTemplateName()
    {
        return "jury/problem.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  581 => 248,  579 => 247,  574 => 244,  567 => 240,  563 => 238,  556 => 234,  550 => 231,  546 => 230,  542 => 228,  540 => 227,  537 => 226,  534 => 225,  526 => 222,  516 => 216,  514 => 215,  507 => 211,  502 => 209,  499 => 208,  494 => 207,  486 => 201,  484 => 200,  472 => 191,  465 => 186,  458 => 181,  451 => 179,  444 => 175,  440 => 174,  435 => 173,  429 => 171,  427 => 170,  420 => 168,  412 => 165,  404 => 162,  396 => 159,  388 => 156,  380 => 153,  376 => 151,  373 => 150,  369 => 149,  351 => 133,  347 => 131,  345 => 130,  339 => 126,  337 => 125,  332 => 124,  327 => 122,  323 => 121,  319 => 120,  317 => 119,  311 => 114,  305 => 111,  301 => 109,  298 => 108,  293 => 105,  284 => 102,  276 => 100,  274 => 99,  269 => 96,  262 => 91,  260 => 90,  256 => 88,  247 => 85,  239 => 83,  237 => 82,  232 => 79,  224 => 74,  219 => 72,  214 => 69,  212 => 68,  208 => 66,  202 => 64,  196 => 62,  194 => 61,  187 => 56,  181 => 54,  175 => 52,  173 => 51,  165 => 46,  155 => 40,  149 => 38,  145 => 36,  143 => 35,  135 => 30,  131 => 28,  125 => 25,  121 => 23,  119 => 22,  114 => 20,  104 => 13,  101 => 12,  94 => 11,  85 => 8,  80 => 7,  73 => 6,  57 => 4,  49 => 1,  47 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/problem.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/problem.html.twig");
    }
}
