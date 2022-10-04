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

/* jury/contest.html.twig */
class __TwigTemplate_48e90f71fd5444f309ab0e86df81982edd196b202d9dbf31271720e94a90dc6d extends Template
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
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/contest.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/contest.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/contest.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Contest ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "cid", [], "any", false, false, false, 4), "html", null, true);
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
    <h1>Contest ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "name", [], "any", false, false, false, 13), "html", null, true);
        echo "</h1>

    ";
        // line 15
        if (twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "isActive", [], "any", false, false, false, 15)) {
            // line 16
            echo "        <div class=\"alert alert-success\">
            This contest is currently active.
        </div>
    ";
        }
        // line 20
        echo "    ";
        if ( !twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "enabled", [], "any", false, false, false, 20)) {
            // line 21
            echo "        <div class=\"alert alert-danger\">
            This contest is disabled.
        </div>
    ";
        }
        // line 25
        echo "    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "finalizetime", [], "any", false, false, false, 25))) {
            // line 26
            echo "        <div class=\"alert alert-info\">
            This contest is final.
        </div>
    ";
        }
        // line 30
        echo "
    <div class=\"row\">
        <div class=\"col-lg-5\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>CID</th>
                    <td>c";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "cid", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
                </tr>
                ";
        // line 38
        if ($this->extensions['App\Twig\TwigExtension']->showExternalId(($context["contest"] ?? null))) {
            // line 39
            echo "                    <tr>
                        <th>External ID</th>
                        <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "externalid", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        // line 44
        echo "                <tr>
                    <th>Short name</th>
                    <td>";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "shortname", [], "any", false, false, false, 46), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td>";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "name", [], "any", false, false, false, 50), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Activate time</th>
                    <td>
                        ";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "activatetimeString", [], "any", false, false, false, 55), "html", null, true);
        echo "
                        ";
        // line 56
        if (twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "isActive", [], "any", false, false, false, 56)) {
            // line 57
            echo "                            <i class=\"fas fa-check\"></i>
                        ";
        }
        // line 59
        echo "                    </td>
                </tr>
                <tr>
                    <th>Start time</th>
                    <td>
                        ";
        // line 64
        if (twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "starttimeEnabled", [], "any", false, false, false, 64)) {
            // line 65
            echo "                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "starttimeString", [], "any", false, false, false, 65), "html", null, true);
            echo "
                            ";
            // line 66
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "state", [], "any", false, false, false, 66), "started", [], "any", false, false, false, 66)) {
                // line 67
                echo "                                <i class=\"fas fa-check\"></i>
                            ";
            }
            // line 69
            echo "                        ";
        } else {
            // line 70
            echo "                            <span class=\"ignore\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "starttimeString", [], "any", false, false, false, 70), "html", null, true);
            echo "</span> <em>delayed</em>
                        ";
        }
        // line 72
        echo "                    </td>
                </tr>
                <tr>
                    <th>Scoreboard freeze</th>
                    <td>
                        ";
        // line 77
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "freezetimeString", [], "any", true, true, false, 77)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "freezetimeString", [], "any", false, false, false, 77), "-")) : ("-")), "html", null, true);
        echo "
                        ";
        // line 78
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "state", [], "any", false, false, false, 78), "frozen", [], "any", false, false, false, 78)) {
            // line 79
            echo "                            <i class=\"fas fa-check\"></i>
                        ";
        }
        // line 81
        echo "                    </td>
                </tr>
                <tr>
                    <th>End time</th>
                    <td>
                        ";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "endtimeString", [], "any", false, false, false, 86), "html", null, true);
        echo "
                        ";
        // line 87
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "state", [], "any", false, false, false, 87), "ended", [], "any", false, false, false, 87)) {
            // line 88
            echo "                            <i class=\"fas fa-check\"></i>
                        ";
        }
        // line 90
        echo "                    </td>
                </tr>
                <tr>
                    <th>Scoreboard unfreeze</th>
                    <td>
                        ";
        // line 95
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "unfreezetimeString", [], "any", true, true, false, 95)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "unfreezetimeString", [], "any", false, false, false, 95), "-")) : ("-")), "html", null, true);
        echo "
                        ";
        // line 96
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "state", [], "any", false, false, false, 96), "thawed", [], "any", false, false, false, 96)) {
            // line 97
            echo "                            <i class=\"fas fa-check\"></i>
                        ";
        }
        // line 99
        echo "                    </td>
                </tr>
                <tr>
                    <th>Deactivate time</th>
                    <td>";
        // line 103
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "deactivatetimeString", [], "any", false, false, false, 103), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Process balloons</th>
                    <td>";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "processBalloons", [], "any", false, false, false, 107)), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Process medals</th>
                    <td>";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "medalsEnabled", [], "any", false, false, false, 111)), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Medals</th>
                    <td>
                        ";
        // line 116
        if (twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "medalsEnabled", [], "any", false, false, false, 116)) {
            // line 117
            echo "                            <div class=\"card\">
                                <h6 class=\"card-header\" id=\"categories\">
                                    <a class=\"collapsed d-block text-dark pt-0 pb-0\" data-toggle=\"collapse\" href=\"#collapsecategories\" aria-expanded=\"true\" aria-controls=\"collapsecategories\" id=\"collapseheader\">
                                        ";
            // line 120
            echo twig_escape_filter($this->env, (((1 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "goldMedals", [], "any", false, false, false, 120), 0)) + (1 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "silverMedals", [], "any", false, false, false, 120), 0))) + (1 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "bronzeMedals", [], "any", false, false, false, 120), 0))), "html", null, true);
            echo " different types of medals (Show/Hide details)
                                        <i class=\"fa fa-chevron-down float-right\"></i>
                                    </a>
                                </h6>
                                <div id=\"collapsecategories\" class=\"collapse collapsed\" aria-labelledby=\"categories\">
                                    <div class=\"card-body pb-1\">
                                        <a>";
            // line 126
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "goldMedals", [], "any", false, false, false, 126), "html", null, true);
            echo " Gold Medal(s)</a>
                                        <br>
                                        <a>";
            // line 128
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "silverMedals", [], "any", false, false, false, 128), "html", null, true);
            echo " Silver Medal(s)</a>
                                        <br>
                                        <a>";
            // line 130
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "bronzeMedals", [], "any", false, false, false, 130), "html", null, true);
            echo " Bronze Medal(s)</a>
                                        <br>
                                        For all teams from the following categories:
                                        <ul>
                                            ";
            // line 134
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "medalCategories", [], "any", false, false, false, 134));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 135
                echo "                                                <li>
                                                    <a href=\"";
                // line 136
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_category", ["categoryId" => twig_get_attribute($this->env, $this->source, $context["category"], "categoryid", [], "any", false, false, false, 136)]), "html", null, true);
                echo "\">
                                                        ";
                // line 137
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 137), "html", null, true);
                echo "
                                                    </a>
                                                </li>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 141
            echo "                                        </ul>
                                    </div>
                                </div>
                            </div>
                        ";
        } else {
            // line 146
            echo "                            <em>none</em>
                        ";
        }
        // line 148
        echo "                    </td>
                </tr>
                <tr>
                    <th>Publicly visible</th>
                    <td>";
        // line 152
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "public", [], "any", false, false, false, 152)), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Open to all teams</th>
                    <td>";
        // line 156
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "openToAllTeams", [], "any", false, false, false, 156)), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Teams</th>
                    <td>
                        ";
        // line 161
        if (twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "openToAllTeams", [], "any", false, false, false, 161)) {
            // line 162
            echo "                            <em>all teams</em>
                        ";
        } else {
            // line 164
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "teams", [], "any", false, false, false, 164));
            foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
                // line 165
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team", ["teamId" => twig_get_attribute($this->env, $this->source, $context["team"], "teamid", [], "any", false, false, false, 165)]), "html", null, true);
                echo "\">
                                    ";
                // line 166
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "effectiveName", [], "any", false, false, false, 166), "html", null, true);
                echo " (t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "teamid", [], "any", false, false, false, 166), "html", null, true);
                echo ")
                                </a>
                                <br>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 170
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "teamCategories", [], "any", false, false, false, 170));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 171
                echo "                                All teams from
                                <a href=\"";
                // line 172
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_category", ["categoryId" => twig_get_attribute($this->env, $this->source, $context["category"], "categoryid", [], "any", false, false, false, 172)]), "html", null, true);
                echo "\">
                                    ";
                // line 173
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 173), "html", null, true);
                echo "
                                </a>
                                <br>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 177
            echo "                        ";
        }
        // line 178
        echo "                    </td>
                </tr>
                ";
        // line 180
        $context["contestId"] = twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "cid", [], "any", false, false, false, 180);
        // line 181
        echo "                ";
        if ($this->extensions['App\Twig\TwigExtension']->showExternalId(($context["contest"] ?? null))) {
            // line 182
            echo "                    ";
            $context["contestId"] = twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "externalid", [], "any", false, false, false, 182);
            // line 183
            echo "                ";
        }
        // line 184
        echo "                ";
        $context["banner"] = $this->env->getFilter('assetPath')->getCallable()(($context["contestId"] ?? null), "contest");
        // line 185
        echo "                ";
        if ( !($context["banner"] ?? null)) {
            // line 186
            echo "                    ";
            $context["banner"] = $this->env->getFunction('globalBannerAssetPath')->getCallable()();
            // line 187
            echo "                ";
        }
        // line 188
        echo "                ";
        if (($context["banner"] ?? null)) {
            // line 189
            echo "                    <tr>
                        <th>Banner</th>
                        <td><img style=\"max-width: 300px;\" src=\"";
            // line 191
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["banner"] ?? null)), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "name", [], "any", false, false, false, 191), "html", null, true);
            echo "\" /></td>
                ";
        }
        // line 193
        echo "            </table>
        </div>
    </div>

    ";
        // line 197
        if (twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "finalizetime", [], "any", false, false, false, 197)) {
            // line 198
            echo "        <h2>Finalized</h2>

        <div class=\"row\">
            <div class=\"col-lg-4\">
                <table class=\"table table-sm table-striped\">
                    <tr>
                        <th>Finalized at</th>
                        <td>";
            // line 205
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "finalizetime", [], "any", false, false, false, 205), "Y-m-d H:i:s (T)"), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                        <th>B</th>
                        <td>";
            // line 209
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "b", [], "any", false, false, false, 209), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                        <th>Comment</th>
                        <td>";
            // line 213
            echo twig_nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "finalizecomment", [], "any", false, false, false, 213), "html", null, true));
            echo "</td>
                    </tr>
                </table>
            </div>
        </div>
    ";
        }
        // line 219
        echo "
    ";
        // line 220
        if (($context["allowRemovedIntervals"] ?? null)) {
            // line 221
            echo "        <h2>Removed intervals</h2>
        ";
            // line 222
            if (( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "removedIntervals", [], "any", false, false, false, 222)))) {
                // line 223
                echo "            <p class=\"nodata\">None.</p>
        ";
            } else {
                // line 225
                echo "            ";
                if (array_key_exists("removedIntervalForm", $context)) {
                    // line 226
                    echo "                ";
                    echo                     $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["removedIntervalForm"] ?? null), 'form_start');
                    echo "
            ";
                }
                // line 228
                echo "            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <table class=\"table data-table table-sm table-striped table-hover\">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>From</th>
                            <th></th>
                            <th>To</th>
                            <th>Duration</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
                // line 242
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["removedIntervals"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["removedInterval"]) {
                    // line 243
                    echo "                            <tr>
                                <td>";
                    // line 244
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["removedInterval"], "intervalid", [], "any", false, false, false, 244), "html", null, true);
                    echo "</td>
                                <td>";
                    // line 245
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["removedInterval"], "starttimeString", [], "any", false, false, false, 245), "html", null, true);
                    echo "</td>
                                <td><i class=\"fas fa-arrow-right\"></i></td>
                                <td>";
                    // line 247
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["removedInterval"], "endtimeString", [], "any", false, false, false, 247), "html", null, true);
                    echo "</td>
                                <td>";
                    // line 248
                    echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtimediff(twig_get_attribute($this->env, $this->source, $context["removedInterval"], "starttime", [], "any", false, false, false, 248), twig_get_attribute($this->env, $this->source, $context["removedInterval"], "endtime", [], "any", false, false, false, 248)), "html", null, true);
                    echo "</td>
                                <td>
                                    <button class=\"btn btn-sm btn-danger remove-interval-button\" type=\"button\"
                                            data-submit-url=\"";
                    // line 251
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contest_remove_interval", ["contestId" => twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "cid", [], "any", false, false, false, 251), "intervalId" => twig_get_attribute($this->env, $this->source, $context["removedInterval"], "intervalid", [], "any", false, false, false, 251)]), "html", null, true);
                    echo "\">
                                        <i class=\"fas fa-trash-alt\"></i></button>
                                </td>
                            </tr>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['removedInterval'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 256
                echo "                        ";
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 257
                    echo "                            <tr>
                                <td>new</td>
                                <td>
                                    ";
                    // line 260
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["removedIntervalForm"] ?? null), "starttimeString", [], "any", false, false, false, 260), 'errors');
                    echo "
                                    ";
                    // line 261
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["removedIntervalForm"] ?? null), "starttimeString", [], "any", false, false, false, 261), 'widget');
                    echo "
                                </td>
                                <td><i class=\"fas fa-arrow-right\"></i></td>
                                <td>
                                    ";
                    // line 265
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["removedIntervalForm"] ?? null), "endtimeString", [], "any", false, false, false, 265), 'errors');
                    echo "
                                    ";
                    // line 266
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["removedIntervalForm"] ?? null), "endtimeString", [], "any", false, false, false, 266), 'widget');
                    echo "
                                </td>
                                <td></td>
                                <td>";
                    // line 269
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["removedIntervalForm"] ?? null), "add", [], "any", false, false, false, 269), 'widget');
                    echo "</td>
                            </tr>
                        ";
                }
                // line 272
                echo "                        </tbody>
                    </table>
                </div>
            </div>
            ";
                // line 276
                if (array_key_exists("removedIntervalForm", $context)) {
                    // line 277
                    echo "                <small class=\"text-muted\">Use the format <b><code>YYYY-MM-DD HH:MM:SS[.uuuuuu] timezone</code></b> for
                    start/end times.
                </small>
                ";
                    // line 280
                    echo                     $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["removedIntervalForm"] ?? null), 'form_end');
                    echo "
            ";
                }
                // line 282
                echo "        ";
            }
            // line 283
            echo "
        <script>
            \$(function () {
                \$('.remove-interval-button').on('click', function () {
                    if (confirm('Really delete interval?')) {
                        var \$form = \$('<form method=\"post\" />');
                        \$form.attr('action', \$(this).data('submit-url'));
                        // Some browsers require the form to be present in the DOM,
                        // so append it to the body
                        \$(document.body).append(\$form);
                        \$form.submit();
                    }
                    return false;
                });
            });
        </script>

    ";
        }
        // line 301
        echo "
    <h2 class=\"mt-2\">Problems</h2>

    ";
        // line 304
        if (twig_test_empty(($context["problems"] ?? null))) {
            // line 305
            echo "        <p class=\"nodata\">No problems added yet</p>
    ";
        } else {
            // line 307
            echo "        <div class=\"row\">
            <div class=\"col-lg-6\">
                <table class=\"table data-table table-sm table-striped table-hover\">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Shortname</th>
                        <th>Points</th>
                        <th>Allow<br>submit</th>
                        <th>Allow<br>judge</th>
                        <th>Color</th>
                        <th>Lazy eval</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
            // line 325
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["problems"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["problem"]) {
                // line 326
                echo "                        <tr>
                            ";
                // line 327
                $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem", ["probId" => twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 327)]);
                // line 328
                echo "                            <td><a href=\"";
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">p";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 328), "html", null, true);
                echo "</a></td>
                            <td><a href=\"";
                // line 329
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["problem"], "problem", [], "any", false, false, false, 329), "name", [], "any", false, false, false, 329), "html", null, true);
                echo "</a></td>
                            <td><a href=\"";
                // line 330
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "shortname", [], "any", false, false, false, 330), "html", null, true);
                echo "</a></td>
                            <td><a href=\"";
                // line 331
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "points", [], "any", false, false, false, 331), "html", null, true);
                echo "</a></td>
                            <td><a href=\"";
                // line 332
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, $context["problem"], "allowSubmit", [], "any", false, false, false, 332)), "html", null, true);
                echo "</a></td>
                            <td><a href=\"";
                // line 333
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, $context["problem"], "allowJudge", [], "any", false, false, false, 333)), "html", null, true);
                echo "</a></td>
                            ";
                // line 334
                if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["problem"], "color", [], "any", false, false, false, 334))) {
                    // line 335
                    echo "                                <td><a href=\"";
                    echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                    echo "\">&nbsp;</a></td>
                            ";
                } else {
                    // line 337
                    echo "                                <td title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "color", [], "any", false, false, false, 337), "html", null, true);
                    echo "\">
                                    <a href=\"";
                    // line 338
                    echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                    echo "\">
                                        ";
                    // line 339
                    echo $this->extensions['App\Twig\TwigExtension']->problemBadge($context["problem"]);
                    echo "
                                    </a>
                                </td>
                            ";
                }
                // line 343
                echo "                            <td>
                                <a href=\"";
                // line 344
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">
                                    ";
                // line 345
                if ( !(null === twig_get_attribute($this->env, $this->source, $context["problem"], "lazyEvalResults", [], "any", false, false, false, 345))) {
                    // line 346
                    echo "                                        ";
                    echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, $context["problem"], "lazyEvalResults", [], "any", false, false, false, 346)), "html", null, true);
                    echo "
                                    ";
                } else {
                    // line 348
                    echo "                                        -
                                    ";
                }
                // line 350
                echo "                                </a>
                            </td>
                            <td>
                                ";
                // line 353
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 354
                    echo "                                    <a title=\"Unlink problem from contest\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contest_problem_delete", ["contestId" => twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "cid", [], "any", false, false, false, 354), "probId" => twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 354)]), "html", null, true);
                    echo "\"
                                       data-ajax-modal>
                                        <i class=\"fas fa-trash-alt\"></i>
                                    </a>
                                ";
                }
                // line 359
                echo "                            </td>
                            <td>
                                ";
                // line 361
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 362
                    echo "                                    <a title=\"Judge remaining\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contest_problem_request_remaining", ["contestId" => twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "cid", [], "any", false, false, false, 362), "probId" => twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 362)]), "html", null, true);
                    echo "\">
                                        <i class=\"fas fa-gavel\"></i>
                                    </a>
                                ";
                }
                // line 366
                echo "                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 369
            echo "                    </tbody>
                </table>
            </div>
        </div>
    ";
        }
        // line 374
        echo "
    <div class=\"button-row\">";
        // line 376
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 377
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contest_edit", ["contestId" => twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "cid", [], "any", false, false, false, 377)]), "Edit", "primary", "edit");
            echo "
            ";
            // line 378
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contest_delete", ["contestId" => twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "cid", [], "any", false, false, false, 378)]), "Delete", "danger", "trash-alt", true);
            echo "
            ";
            // line 379
            if (twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "finalizetime", [], "any", false, false, false, 379)) {
                // line 380
                echo "                ";
                echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contest_finalize", ["contestId" => twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "cid", [], "any", false, false, false, 380)]), "Update finalization", "secondary", "lock");
                echo "
            ";
            } else {
                // line 382
                echo "                ";
                echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contest_finalize", ["contestId" => twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "cid", [], "any", false, false, false, 382)]), "Finalize this contest", "secondary", "lock");
                echo "
            ";
            }
            // line 384
            echo "            ";
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contest_request_remaining", ["contestId" => twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "cid", [], "any", false, false, false, 384)]), "Judge remaining", "secondary", "gavel");
            echo "
        ";
        }
        // line 386
        echo "        ";
        echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contest_prefetch", ["contestId" => twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "cid", [], "any", false, false, false, 386)]), "Heat up judgehosts with contest data", "secondary", "download");
        echo "
        ";
        // line 387
        $this->loadTemplate("jury/partials/rejudge_form.html.twig", "jury/contest.html.twig", 387)->display(twig_array_merge($context, ["table" => "contest", "id" => twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "cid", [], "any", false, false, false, 387), "buttonClass" => "btn-secondary"]));
        // line 388
        echo "    </div>

";
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    public function getTemplateName()
    {
        return "jury/contest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  874 => 388,  872 => 387,  867 => 386,  861 => 384,  855 => 382,  849 => 380,  847 => 379,  843 => 378,  839 => 377,  837 => 376,  834 => 374,  827 => 369,  819 => 366,  811 => 362,  809 => 361,  805 => 359,  796 => 354,  794 => 353,  789 => 350,  785 => 348,  779 => 346,  777 => 345,  773 => 344,  770 => 343,  763 => 339,  759 => 338,  754 => 337,  748 => 335,  746 => 334,  740 => 333,  734 => 332,  728 => 331,  722 => 330,  716 => 329,  709 => 328,  707 => 327,  704 => 326,  700 => 325,  680 => 307,  676 => 305,  674 => 304,  669 => 301,  649 => 283,  646 => 282,  641 => 280,  636 => 277,  634 => 276,  628 => 272,  622 => 269,  616 => 266,  612 => 265,  605 => 261,  601 => 260,  596 => 257,  593 => 256,  582 => 251,  576 => 248,  572 => 247,  567 => 245,  563 => 244,  560 => 243,  556 => 242,  540 => 228,  534 => 226,  531 => 225,  527 => 223,  525 => 222,  522 => 221,  520 => 220,  517 => 219,  508 => 213,  501 => 209,  494 => 205,  485 => 198,  483 => 197,  477 => 193,  470 => 191,  466 => 189,  463 => 188,  460 => 187,  457 => 186,  454 => 185,  451 => 184,  448 => 183,  445 => 182,  442 => 181,  440 => 180,  436 => 178,  433 => 177,  423 => 173,  419 => 172,  416 => 171,  411 => 170,  399 => 166,  394 => 165,  389 => 164,  385 => 162,  383 => 161,  375 => 156,  368 => 152,  362 => 148,  358 => 146,  351 => 141,  341 => 137,  337 => 136,  334 => 135,  330 => 134,  323 => 130,  318 => 128,  313 => 126,  304 => 120,  299 => 117,  297 => 116,  289 => 111,  282 => 107,  275 => 103,  269 => 99,  265 => 97,  263 => 96,  259 => 95,  252 => 90,  248 => 88,  246 => 87,  242 => 86,  235 => 81,  231 => 79,  229 => 78,  225 => 77,  218 => 72,  212 => 70,  209 => 69,  205 => 67,  203 => 66,  198 => 65,  196 => 64,  189 => 59,  185 => 57,  183 => 56,  179 => 55,  171 => 50,  164 => 46,  160 => 44,  154 => 41,  150 => 39,  148 => 38,  143 => 36,  135 => 30,  129 => 26,  126 => 25,  120 => 21,  117 => 20,  111 => 16,  109 => 15,  104 => 13,  101 => 12,  94 => 11,  85 => 8,  80 => 7,  73 => 6,  57 => 4,  49 => 1,  47 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/contest.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/contest.html.twig");
    }
}
