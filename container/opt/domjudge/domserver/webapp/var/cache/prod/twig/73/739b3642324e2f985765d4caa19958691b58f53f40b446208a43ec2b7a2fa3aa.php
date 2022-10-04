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

/* partials/scoreboard_table.html.twig */
class __TwigTemplate_122a7621118feca1df12b249fbd127e15b62e10f51f00575a5a9139f89bd1087 extends Template
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
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/scoreboard_table.html.twig"));

        // line 1
        if ( !array_key_exists("limitToTeams", $context)) {
            // line 2
            echo "    ";
            $context["limitToTeams"] = null;
            // line 3
            echo "    ";
            $context["limitToTeamIds"] = null;
        } else {
            // line 5
            echo "    ";
            $context["limitToTeamIds"] = [];
            // line 6
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["limitToTeams"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
                // line 7
                echo "        ";
                $context["limitToTeamIds"] = twig_array_merge(($context["limitToTeamIds"] ?? null), [0 => twig_get_attribute($this->env, $this->source, $context["team"], "teamid", [], "any", false, false, false, 7)]);
                // line 8
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 10
        if ( !array_key_exists("showLegends", $context)) {
            // line 11
            echo "    ";
            $context["showLegends"] = false;
        }
        // line 13
        if ( !array_key_exists("static", $context)) {
            // line 14
            echo "    ";
            $context["static"] = false;
        }
        // line 16
        $context["showPoints"] = twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "showPoints", [], "any", false, false, false, 16);
        // line 17
        $context["usedCategories"] = twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "usedCategories", [0 => ($context["limitToTeamIds"] ?? null)], "method", false, false, false, 17);
        // line 18
        $context["hasDifferentCategoryColors"] = twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "categoryColors", [0 => ($context["limitToTeamIds"] ?? null)], "method", false, false, false, 18);
        // line 19
        $context["scores"] = twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "scores", [], "any", false, false, false, 19), function ($__score__) use ($context, $macros) { $context["score"] = $__score__; return ((null === ($context["limitToTeams"] ?? null)) || twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["score"] ?? null), "team", [], "any", false, false, false, 19), "teamid", [], "any", false, false, false, 19), ($context["limitToTeamIds"] ?? null))); });
        // line 20
        $context["problems"] = twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "problems", [], "any", false, false, false, 20);
        // line 21
        $context["medalsEnabled"] = twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "medalsEnabled", [], "any", false, false, false, 21);
        // line 22
        if ((($context["scoreFilter"] ?? null) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["scoreFilter"] ?? null), "filteredOn", [], "any", false, false, false, 22)))) {
            // line 23
            echo "    ";
            $context["medalsEnabled"] = false;
        }
        // line 25
        $context["medalCategories"] = twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "medalCategories", [], "any", false, false, false, 25);
        // line 26
        echo "
";
        // line 27
        if ((1 === twig_compare(($context["maxWidth"] ?? null), 0))) {
            // line 28
            echo "    <style>
        .forceWidth {
            max-width: ";
            // line 30
            echo twig_escape_filter($this->env, ($context["maxWidth"] ?? null), "html", null, true);
            echo "px;
        }
    </style>
";
        }
        // line 34
        echo "
<table class=\"scoreboard center ";
        // line 35
        if (($context["jury"] ?? null)) {
            echo "scoreboard_jury";
        }
        echo "\">

    ";
        // line 38
        echo "    <colgroup>
        <col id=\"scorerank\"/>
        ";
        // line 40
        if (($context["showFlags"] ?? null)) {
            // line 41
            echo "            <col id=\"scoreflags\"/>
        ";
        } else {
            // line 43
            echo "            <col/>
        ";
        }
        // line 45
        echo "        ";
        if (($context["showAffiliationLogos"] ?? null)) {
            // line 46
            echo "            <col id=\"scorelogos\"/>
        ";
        }
        // line 48
        echo "        <col id=\"scoreteamname\"/>
    </colgroup>
    <colgroup>
        <col id=\"scoresolv\"/>
        <col id=\"scoretotal\"/>
    </colgroup>
    <colgroup>
        ";
        // line 55
        if ((($context["showTeamSubmissions"] ?? null) || ($context["jury"] ?? null))) {
            // line 56
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["problems"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["problem"]) {
                // line 57
                echo "                <col class=\"scoreprob\"/>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "        ";
        }
        // line 60
        echo "    </colgroup>

    ";
        // line 62
        $context["teamColspan"] = 2;
        // line 63
        echo "    ";
        if (($context["showAffiliationLogos"] ?? null)) {
            // line 64
            echo "        ";
            $context["teamColspan"] = (($context["teamColspan"] ?? null) + 1);
            // line 65
            echo "    ";
        }
        // line 66
        echo "
    <thead>
    <tr class=\"scoreheader\" data-static=\"";
        // line 68
        echo twig_escape_filter($this->env, ($context["static"] ?? null), "html", null, true);
        echo "\">
        <th title=\"rank\" scope=\"col\">rank</th>
        <th title=\"team name\" scope=\"col\" colspan=\"";
        // line 70
        echo twig_escape_filter($this->env, ($context["teamColspan"] ?? null), "html", null, true);
        echo "\">team</th>
        <th title=\"# solved / penalty time\" colspan=\"2\" scope=\"col\">score</th>
        ";
        // line 72
        if ((($context["showTeamSubmissions"] ?? null) || ($context["jury"] ?? null))) {
            // line 73
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["problems"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["problem"]) {
                // line 74
                echo "                ";
                $context["link"] = null;
                // line 75
                echo "                ";
                $context["target"] = "_self";
                // line 76
                echo "                ";
                if ( !($context["static"] ?? null)) {
                    // line 77
                    echo "                    ";
                    if (($context["jury"] ?? null)) {
                        // line 78
                        echo "                        ";
                        $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem", ["probId" => twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 78)]);
                        // line 79
                        echo "                    ";
                    } elseif ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["problem"], "problem", [], "any", false, false, false, 79), "problemtextType", [], "any", false, false, false, 79))) {
                        // line 80
                        echo "                        ";
                        if (($context["public"] ?? null)) {
                            // line 81
                            echo "                            ";
                            $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_problem_text", ["probId" => twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 81)]);
                            // line 82
                            echo "                            ";
                            $context["target"] = "_blank";
                            // line 83
                            echo "                        ";
                        } else {
                            // line 84
                            echo "                            ";
                            $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_problem_text", ["probId" => twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 84)]);
                            // line 85
                            echo "                            ";
                            $context["target"] = "_blank";
                            // line 86
                            echo "                        ";
                        }
                        // line 87
                        echo "                    ";
                    }
                    // line 88
                    echo "                ";
                }
                // line 89
                echo "                <th title=\"problem ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["problem"], "problem", [], "any", false, false, false, 89), "name", [], "any", false, false, false, 89), "html", null, true);
                echo "\" scope=\"col\">
                    <a ";
                // line 90
                if (($context["link"] ?? null)) {
                    echo "href=\"";
                    echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                    echo "\"";
                }
                echo " target=\"";
                echo twig_escape_filter($this->env, ($context["target"] ?? null), "html", null, true);
                echo "\">
                        ";
                // line 91
                echo $this->extensions['App\Twig\TwigExtension']->problemBadge($context["problem"]);
                echo "
                        ";
                // line 92
                if (($context["showPoints"] ?? null)) {
                    // line 93
                    echo "                            <span class='problempoints'>
                                [";
                    // line 94
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["problem"], "points", [], "any", false, false, false, 94), 1))) {
                        echo "1 point";
                    } else {
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "points", [], "any", false, false, false, 94), "html", null, true);
                        echo " points";
                    }
                    echo "]
                            </span>
                        ";
                }
                // line 97
                echo "                    </a>
                </th>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            echo "        ";
        }
        // line 101
        echo "    </tr>
    </thead>
    <tbody>
    ";
        // line 104
        $context["previousSortOrder"] =  -1;
        // line 105
        echo "    ";
        $context["previousTeam"] = null;
        // line 106
        echo "    ";
        $context["backgroundColors"] = ["#FFFFFF" => 1];
        // line 107
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scores"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["score"]) {
            // line 108
            echo "        ";
            $context["classes"] = [];
            // line 109
            echo "        ";
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 109), "category", [], "any", false, false, false, 109), "sortorder", [], "any", false, false, false, 109), ($context["previousSortOrder"] ?? null)))) {
                // line 110
                echo "            ";
                if ((0 !== twig_compare(($context["previousSortOrder"] ?? null),  -1))) {
                    // line 111
                    echo "                ";
                    // line 112
                    echo "                ";
                    $this->loadTemplate("partials/scoreboard_summary.html.twig", "partials/scoreboard_table.html.twig", 112)->display(twig_array_merge($context, ["sortOrder" => ($context["previousSortOrder"] ?? null)]));
                    // line 113
                    echo "            ";
                }
                // line 114
                echo "            ";
                $context["classes"] = twig_array_merge(($context["classes"] ?? null), [0 => "sortorderswitch"]);
                // line 115
                echo "            ";
                $context["previousSortOrder"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 115), "category", [], "any", false, false, false, 115), "sortorder", [], "any", false, false, false, 115);
                // line 116
                echo "            ";
                $context["previousTeam"] = null;
                // line 117
                echo "        ";
            }
            // line 118
            echo "
        ";
            // line 120
            echo "        ";
            $context["medalColor"] = "";
            // line 121
            echo "        ";
            if ((((($context["showLegends"] ?? null) && ($context["medalsEnabled"] ?? null)) && twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 121), "category", [], "any", false, false, false, 121), ($context["medalCategories"] ?? null))) && (1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["score"], "numPoints", [], "any", false, false, false, 121), 0)))) {
                // line 122
                echo "            ";
                if ((0 >= twig_compare(twig_get_attribute($this->env, $this->source, $context["score"], "rank", [], "any", false, false, false, 122), twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "goldMedals", [], "any", false, false, false, 122)))) {
                    // line 123
                    echo "                ";
                    $context["medalColor"] = "gold-medal";
                    // line 124
                    echo "            ";
                } elseif ((0 >= twig_compare(twig_get_attribute($this->env, $this->source, $context["score"], "rank", [], "any", false, false, false, 124), (twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "goldMedals", [], "any", false, false, false, 124) + twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "silverMedals", [], "any", false, false, false, 124))))) {
                    // line 125
                    echo "                ";
                    $context["medalColor"] = "silver-medal";
                    // line 126
                    echo "            ";
                } elseif ((0 >= twig_compare(twig_get_attribute($this->env, $this->source, $context["score"], "rank", [], "any", false, false, false, 126), (((twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "goldMedals", [], "any", false, false, false, 126) + twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "silverMedals", [], "any", false, false, false, 126)) + twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "bronzeMedals", [], "any", false, false, false, 126)) + twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "b", [], "any", false, false, false, 126))))) {
                    // line 127
                    echo "                ";
                    $context["medalColor"] = "bronze-medal";
                    // line 128
                    echo "            ";
                }
                // line 129
                echo "        ";
            }
            // line 130
            echo "
        ";
            // line 132
            echo "        ";
            if ((array_key_exists("myTeamId", $context) && (0 === twig_compare(($context["myTeamId"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 132), "teamid", [], "any", false, false, false, 132))))) {
                // line 133
                echo "            ";
                $context["classes"] = twig_array_merge(($context["classes"] ?? null), [0 => "scorethisisme"]);
                // line 134
                echo "            ";
                $context["color"] = "#FFFF99";
                // line 135
                echo "        ";
            } else {
                // line 136
                echo "            ";
                $context["color"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 136), "category", [], "any", false, false, false, 136), "color", [], "any", false, false, false, 136);
                // line 137
                echo "        ";
            }
            // line 138
            echo "        <tr class=\"";
            echo twig_escape_filter($this->env, twig_join_filter(($context["classes"] ?? null), " "), "html", null, true);
            echo "\" id=\"team:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 138), "teamid", [], "any", false, false, false, 138), "html", null, true);
            echo "\">
            <td class=\"scorepl ";
            // line 139
            echo twig_escape_filter($this->env, ($context["medalColor"] ?? null), "html", null, true);
            echo "\">
                ";
            // line 141
            echo "                ";
            if ( !($context["displayRank"] ?? null)) {
                // line 142
                echo "                    ?
                ";
            } elseif (((null ===             // line 143
($context["previousTeam"] ?? null)) || (0 !== twig_compare(twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "scores", [], "any", false, false, false, 143)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, ($context["previousTeam"] ?? null), "teamid", [], "any", false, false, false, 143)] ?? null) : null), "rank", [], "any", false, false, false, 143), twig_get_attribute($this->env, $this->source, $context["score"], "rank", [], "any", false, false, false, 143))))) {
                // line 144
                echo "                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["score"], "rank", [], "any", false, false, false, 144), "html", null, true);
                echo "
                ";
            } else {
                // line 146
                echo "                ";
            }
            // line 147
            echo "                ";
            $context["previousTeam"] = twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 147);
            // line 148
            echo "            </td>
            <td class=\"scoreaf\">
                ";
            // line 150
            if (($context["showFlags"] ?? null)) {
                // line 151
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 151), "affiliation", [], "any", false, false, false, 151)) {
                    // line 152
                    echo "                        ";
                    $context["link"] = null;
                    // line 153
                    echo "                        ";
                    if (($context["jury"] ?? null)) {
                        // line 154
                        echo "                            ";
                        $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_affiliation", ["affilId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 154), "affiliation", [], "any", false, false, false, 154), "affilid", [], "any", false, false, false, 154)]);
                        // line 155
                        echo "                        ";
                    }
                    // line 156
                    echo "                        <a ";
                    if (($context["link"] ?? null)) {
                        echo "href=\"";
                        echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                        echo "\"";
                    }
                    echo ">
                            ";
                    // line 157
                    echo $this->extensions['App\Twig\TwigExtension']->countryFlag(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 157), "affiliation", [], "any", false, false, false, 157), "country", [], "any", false, false, false, 157));
                    echo "
                        </a>
                    ";
                }
                // line 160
                echo "                ";
            }
            // line 161
            echo "            </td>
            ";
            // line 162
            if (($context["showAffiliationLogos"] ?? null)) {
                // line 163
                echo "                <td class=\"scoreaf\">
                    ";
                // line 164
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 164), "affiliation", [], "any", false, false, false, 164)) {
                    // line 165
                    echo "                        ";
                    $context["link"] = null;
                    // line 166
                    echo "                        ";
                    if (($context["jury"] ?? null)) {
                        // line 167
                        echo "                            ";
                        $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_affiliation", ["affilId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 167), "affiliation", [], "any", false, false, false, 167), "affilid", [], "any", false, false, false, 167)]);
                        // line 168
                        echo "                        ";
                    }
                    // line 169
                    echo "                        <a ";
                    if (($context["link"] ?? null)) {
                        echo "href=\"";
                        echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                        echo "\"";
                    }
                    echo ">
                            ";
                    // line 170
                    $context["affiliationId"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 170), "affiliation", [], "any", false, false, false, 170), "affilid", [], "any", false, false, false, 170);
                    // line 171
                    echo "                            ";
                    if ($this->extensions['App\Twig\TwigExtension']->showExternalId(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 171), "affiliation", [], "any", false, false, false, 171))) {
                        // line 172
                        echo "                                ";
                        $context["affiliationId"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 172), "affiliation", [], "any", false, false, false, 172), "externalid", [], "any", false, false, false, 172);
                        // line 173
                        echo "                            ";
                    }
                    // line 174
                    echo "                            ";
                    $context["affiliationImage"] = $this->env->getFilter('assetPath')->getCallable()(($context["affiliationId"] ?? null), "affiliation");
                    // line 175
                    echo "                            ";
                    if (($context["affiliationImage"] ?? null)) {
                        // line 176
                        echo "                                <img loading=\"lazy\" class=\"affiliation-logo\"
                                     src=\"";
                        // line 177
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["affiliationImage"] ?? null)), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 177), "affiliation", [], "any", false, false, false, 177), "name", [], "any", false, false, false, 177), "html", null, true);
                        echo "\"
                                     title=\"";
                        // line 178
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 178), "affiliation", [], "any", false, false, false, 178), "name", [], "any", false, false, false, 178), "html", null, true);
                        echo "\">
                            ";
                    } else {
                        // line 180
                        echo "                                ";
                        echo twig_escape_filter($this->env, ($context["affiliationId"] ?? null), "html", null, true);
                        echo "
                            ";
                    }
                    // line 182
                    echo "                        </a>
                    ";
                }
                // line 184
                echo "                </td>
            ";
            }
            // line 186
            echo "            ";
            if ((null === ($context["color"] ?? null))) {
                // line 187
                echo "                ";
                $context["color"] = "#FFFFFF";
                // line 188
                echo "                ";
                $context["colorClass"] = "_FFFFFF";
                // line 189
                echo "            ";
            } else {
                // line 190
                echo "                ";
                $context["colorClass"] = twig_replace_filter(($context["color"] ?? null), ["#" => "_"]);
                // line 191
                echo "                ";
                $context["backgroundColors"] = twig_array_merge(($context["backgroundColors"] ?? null), [($context["color"] ?? null) => 1]);
                // line 192
                echo "            ";
            }
            // line 193
            echo "            <td class=\"scoretn cl";
            echo twig_escape_filter($this->env, ($context["colorClass"] ?? null), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 193), "effectiveName", [], "any", false, false, false, 193), "html", null, true);
            echo "\">
                ";
            // line 194
            $context["link"] = null;
            // line 195
            echo "                ";
            $context["extra"] = null;
            // line 196
            echo "                ";
            if ( !($context["static"] ?? null)) {
                // line 197
                echo "                    ";
                if (($context["jury"] ?? null)) {
                    // line 198
                    echo "                        ";
                    $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team", ["teamId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 198), "teamid", [], "any", false, false, false, 198)]);
                    // line 199
                    echo "                    ";
                } elseif (($context["public"] ?? null)) {
                    // line 200
                    echo "                        ";
                    $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_team", ["teamId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 200), "teamid", [], "any", false, false, false, 200)]);
                    // line 201
                    echo "                        ";
                    $context["extra"] = "data-ajax-modal";
                    // line 202
                    echo "                    ";
                } else {
                    // line 203
                    echo "                        ";
                    $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_team", ["teamId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 203), "teamid", [], "any", false, false, false, 203)]);
                    // line 204
                    echo "                        ";
                    $context["extra"] = "data-ajax-modal";
                    // line 205
                    echo "                    ";
                }
                // line 206
                echo "                ";
            }
            // line 207
            echo "                <a ";
            if ( !(null === ($context["extra"] ?? null))) {
                echo twig_escape_filter($this->env, ($context["extra"] ?? null), "html", null, true);
            }
            echo " ";
            if ( !(null === ($context["link"] ?? null))) {
                echo "href=\"";
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\"";
            }
            echo ">
                    <span class=\"forceWidth\">
                        ";
            // line 209
            if (((1 === twig_compare(twig_length_filter($this->env, ($context["usedCategories"] ?? null)), 1)) && twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "bestInCategory", [0 => twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 209), 1 => ($context["limitToTeamIds"] ?? null)], "method", false, false, false, 209))) {
                // line 210
                echo "                            <span class=\"badge badge-warning\" style=\"margin-right: 2em; font-weight: normal;\">
                            ";
                // line 211
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 211), "category", [], "any", false, false, false, 211), "name", [], "any", false, false, false, 211), "html", null, true);
                echo "
                        </span>
                        ";
            }
            // line 214
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 214), "effectiveName", [], "any", false, false, false, 214), "html", null, true);
            echo "
                    </span>
                    ";
            // line 216
            if (($context["showAffiliations"] ?? null)) {
                // line 217
                echo "                        <span class=\"univ forceWidth\">
                            ";
                // line 218
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 218), "affiliation", [], "any", false, false, false, 218)) {
                    // line 219
                    echo "                                ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 219), "affiliation", [], "any", false, false, false, 219), "name", [], "any", false, false, false, 219), "html", null, true);
                    echo "
                            ";
                }
                // line 221
                echo "                        </span>
                    ";
            }
            // line 223
            echo "                </a>
            </td>
            ";
            // line 225
            $context["totalTime"] = twig_get_attribute($this->env, $this->source, $context["score"], "totalTime", [], "any", false, false, false, 225);
            // line 226
            echo "            ";
            if (($context["scoreInSeconds"] ?? null)) {
                // line 227
                echo "                ";
                $context["totalTime"] = $this->extensions['App\Twig\TwigExtension']->printTimeRelative(($context["totalTime"] ?? null));
                // line 228
                echo "            ";
            }
            // line 229
            echo "            ";
            $context["totalPoints"] = twig_get_attribute($this->env, $this->source, $context["score"], "numPoints", [], "any", false, false, false, 229);
            // line 230
            echo "            <td class=\"scorenc\">";
            echo twig_escape_filter($this->env, ($context["totalPoints"] ?? null), "html", null, true);
            echo "</td>
            <td class=\"scorett\">";
            // line 231
            echo twig_escape_filter($this->env, ($context["totalTime"] ?? null), "html", null, true);
            echo "</td>

            ";
            // line 233
            if ((($context["showTeamSubmissions"] ?? null) || ($context["jury"] ?? null))) {
                // line 234
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["problems"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["problem"]) {
                    // line 235
                    echo "                    ";
                    // line 236
                    echo "                    ";
                    $context["scoreCssClass"] = "score_neutral";
                    // line 237
                    echo "                    ";
                    $context["matrixItem"] = (($__internal_compile_1 = (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "matrix", [], "any", false, false, false, 237)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 237), "teamid", [], "any", false, false, false, 237)] ?? null) : null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 237)] ?? null) : null);
                    // line 238
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, ($context["matrixItem"] ?? null), "isCorrect", [], "any", false, false, false, 238)) {
                        // line 239
                        echo "                        ";
                        $context["scoreCssClass"] = "score_correct";
                        // line 240
                        echo "                        ";
                        if (twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "solvedFirst", [0 => twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 240), 1 => $context["problem"]], "method", false, false, false, 240)) {
                            // line 241
                            echo "                            ";
                            $context["scoreCssClass"] = (($context["scoreCssClass"] ?? null) . " score_first");
                            // line 242
                            echo "                        ";
                        }
                        // line 243
                        echo "                    ";
                    } elseif ((($context["showPending"] ?? null) && (1 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["matrixItem"] ?? null), "numSubmissionsPending", [], "any", false, false, false, 243), 0)))) {
                        // line 244
                        echo "                        ";
                        $context["scoreCssClass"] = "score_pending";
                        // line 245
                        echo "                    ";
                    } elseif ((1 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["matrixItem"] ?? null), "numSubmissions", [], "any", false, false, false, 245), 0))) {
                        // line 246
                        echo "                        ";
                        $context["scoreCssClass"] = "score_incorrect";
                        // line 247
                        echo "                    ";
                    }
                    // line 248
                    echo "
                    ";
                    // line 249
                    $context["numSubmissions"] = twig_get_attribute($this->env, $this->source, ($context["matrixItem"] ?? null), "numSubmissions", [], "any", false, false, false, 249);
                    // line 250
                    echo "                    ";
                    if ((($context["showPending"] ?? null) && (1 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["matrixItem"] ?? null), "numSubmissionsPending", [], "any", false, false, false, 250), 0)))) {
                        // line 251
                        echo "                        ";
                        $context["numSubmissions"] = ((($context["numSubmissions"] ?? null) . " + ") . twig_get_attribute($this->env, $this->source, ($context["matrixItem"] ?? null), "numSubmissionsPending", [], "any", false, false, false, 251));
                        // line 252
                        echo "                    ";
                    }
                    // line 253
                    echo "
                    ";
                    // line 255
                    echo "                    ";
                    $context["time"] = "";
                    // line 256
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, ($context["matrixItem"] ?? null), "isCorrect", [], "any", false, false, false, 256)) {
                        // line 257
                        echo "                        ";
                        $context["time"] = twig_get_attribute($this->env, $this->source, ($context["matrixItem"] ?? null), "time", [], "any", false, false, false, 257);
                        // line 258
                        echo "                        ";
                        if (($context["scoreInSeconds"] ?? null)) {
                            // line 259
                            echo "                            ";
                            $context["time"] = $this->extensions['App\Twig\TwigExtension']->printTimeRelative($this->extensions['App\Twig\TwigExtension']->scoreTime(($context["time"] ?? null)));
                            // line 260
                            echo "                            ";
                            if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["matrixItem"] ?? null), "numSubmissions", [], "any", false, false, false, 260), 1))) {
                                // line 261
                                echo "                                ";
                                $context["time"] = ((($context["time"] ?? null) . " + ") . $this->extensions['App\Twig\TwigExtension']->printTimeRelative($this->extensions['App\Twig\TwigExtension']->calculatePenaltyTime(true, twig_get_attribute($this->env, $this->source, ($context["matrixItem"] ?? null), "numSubmissions", [], "any", false, false, false, 261))));
                                // line 262
                                echo "                            ";
                            }
                            // line 263
                            echo "                        ";
                        } else {
                            // line 264
                            echo "                            ";
                            $context["time"] = $this->extensions['App\Twig\TwigExtension']->scoreTime(($context["time"] ?? null));
                            // line 265
                            echo "                        ";
                        }
                        // line 266
                        echo "                    ";
                    }
                    // line 267
                    echo "
                    ";
                    // line 268
                    $context["link"] = null;
                    // line 269
                    echo "                    ";
                    if (($context["jury"] ?? null)) {
                        // line 270
                        echo "                        ";
                        $context["restrict"] = ["probid" => twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 270)];
                        // line 271
                        echo "                        ";
                        $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team", ["teamId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 271), "teamid", [], "any", false, false, false, 271), "restrict" => ($context["restrict"] ?? null)]);
                        // line 272
                        echo "                    ";
                    }
                    // line 273
                    echo "
                    <td class=\"score_cell\">
                        ";
                    // line 275
                    if ((0 !== twig_compare(($context["numSubmissions"] ?? null), "0"))) {
                        // line 276
                        echo "                            <a ";
                        if (($context["link"] ?? null)) {
                            echo "href=\"";
                            echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                            echo "\"";
                        }
                        echo ">
                                <div class=\"";
                        // line 277
                        echo twig_escape_filter($this->env, ($context["scoreCssClass"] ?? null), "html", null, true);
                        echo "\">
                                    ";
                        // line 278
                        if (twig_get_attribute($this->env, $this->source, ($context["matrixItem"] ?? null), "isCorrect", [], "any", false, false, false, 278)) {
                            echo twig_escape_filter($this->env, ($context["time"] ?? null), "html", null, true);
                        } else {
                            echo "&nbsp;";
                        }
                        // line 279
                        echo "                                    <span>
                                        ";
                        // line 280
                        if ((($context["numSubmissions"] ?? null) === 1)) {
                            // line 281
                            echo "                                            1 try
                                        ";
                        } else {
                            // line 283
                            echo "                                            ";
                            echo twig_escape_filter($this->env, ($context["numSubmissions"] ?? null), "html", null, true);
                            echo " tries
                                        ";
                        }
                        // line 285
                        echo "                                    </span>
                                </div>
                            </a>
                        ";
                    }
                    // line 289
                    echo "                    </td>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 291
                echo "            ";
            }
            // line 292
            echo "        </tr>
    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['score'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 294
        echo "
    ";
        // line 296
        echo "    ";
        $this->loadTemplate("partials/scoreboard_summary.html.twig", "partials/scoreboard_table.html.twig", 296)->display(twig_array_merge($context, ["sortOrder" => ($context["previousSortOrder"] ?? null)]));
        // line 297
        echo "    </tbody>
</table>

";
        // line 300
        if (($context["showLegends"] ?? null)) {
            // line 301
            echo "    <p><br/><br/></p>

    ";
            // line 304
            echo "    ";
            if ((((null === ($context["limitToTeamIds"] ?? null)) && (1 === twig_compare(twig_length_filter($this->env, ($context["usedCategories"] ?? null)), 1))) && ($context["hasDifferentCategoryColors"] ?? null))) {
                // line 305
                echo "        <table id=\"categ_legend\" class=\"scoreboard scorelegend ";
                if (($context["jury"] ?? null)) {
                    echo "scoreboard_jury";
                }
                echo "\">
            <thead>
            <tr>
                <th scope=\"col\">
                    ";
                // line 309
                $context["link"] = null;
                // line 310
                echo "                    ";
                if (($context["jury"] ?? null)) {
                    // line 311
                    echo "                        ";
                    $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_categories");
                    // line 312
                    echo "                    ";
                }
                // line 313
                echo "                    <a ";
                if (($context["link"] ?? null)) {
                    echo "href=\"";
                    echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                    echo "\"";
                }
                echo ">Categories</a>
                </th>
            </tr>
            </thead>
            <tbody>
            ";
                // line 318
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "categories", [], "any", false, false, false, 318), function ($__category__) use ($context, $macros) { $context["category"] = $__category__; return twig_get_attribute($this->env, $this->source, ($context["usedCategories"] ?? null), twig_get_attribute($this->env, $this->source, $context["category"], "categoryid", [], "any", false, false, false, 318), [], "array", true, true, false, 318); }));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 319
                    echo "                <tr ";
                    if (twig_get_attribute($this->env, $this->source, $context["category"], "color", [], "any", false, false, false, 319)) {
                        echo "style=\"background: ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "color", [], "any", false, false, false, 319), "html", null, true);
                        echo ";\"";
                    }
                    echo ">
                    <td>
                        ";
                    // line 321
                    $context["link"] = null;
                    // line 322
                    echo "                        ";
                    if (($context["jury"] ?? null)) {
                        // line 323
                        echo "                            ";
                        $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_category", ["categoryId" => twig_get_attribute($this->env, $this->source, $context["category"], "categoryid", [], "any", false, false, false, 323)]);
                        // line 324
                        echo "                        ";
                    }
                    // line 325
                    echo "                        <a ";
                    if (($context["link"] ?? null)) {
                        echo "href=\"";
                        echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                        echo "\"";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 325), "html", null, true);
                    echo "</a>
                    </td>
                </tr>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 329
                echo "            </tbody>
        </table>
    ";
            }
            // line 332
            echo "
    ";
            // line 333
            if ((($context["showTeamSubmissions"] ?? null) || ($context["jury"] ?? null))) {
                // line 334
                echo "        ";
                $context["cellColors"] = ["first" => "Solved first", "correct" => "Solved", "incorrect" => "Tried, incorrect", "pending" => "Tried, pending", "neutral" => "Untried"];
                // line 335
                echo "        <table id=\"cell_legend\" class=\"scoreboard scorelegend ";
                if (($context["jury"] ?? null)) {
                    echo "scoreboard_jury";
                }
                echo "\">
            <thead>
            <tr>
                <th scope=\"col\">Cell colours</th>
            </tr>
            </thead>
            <tbody>
            ";
                // line 342
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["cellColors"] ?? null));
                foreach ($context['_seq'] as $context["color"] => $context["description"]) {
                    // line 343
                    echo "                ";
                    if (((0 !== twig_compare($context["color"], "pending")) || ($context["showPending"] ?? null))) {
                        // line 344
                        echo "                    <tr class=\"score_";
                        echo twig_escape_filter($this->env, $context["color"], "html", null, true);
                        echo "\">
                        <td>";
                        // line 345
                        echo twig_escape_filter($this->env, $context["description"], "html", null, true);
                        echo "</td>
                    </tr>
                ";
                    }
                    // line 348
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['color'], $context['description'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 349
                echo "            </tbody>
        </table>
    ";
            }
            // line 352
            echo "
    ";
            // line 353
            if (($context["medalsEnabled"] ?? null)) {
                // line 354
                echo "        <table class=\"scoreboard scorelegend ";
                if (($context["jury"] ?? null)) {
                    echo "scoreboard_jury";
                }
                echo "\">
            <thead>
            <tr>
                <th scope=\"col\">Medals ";
                // line 357
                if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "freezeData", [], "any", false, false, false, 357), "showFinal", [], "any", false, false, false, 357)) {
                    echo "(tentative)";
                }
                echo "</th>
            </tr>
            </thead>
            <tbody>
                ";
                // line 361
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable([0 => "Gold", 1 => "Silver", 2 => "Bronze"]);
                foreach ($context['_seq'] as $context["_key"] => $context["medalType"]) {
                    // line 362
                    echo "                    <tr class=\"";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, $context["medalType"]), "html", null, true);
                    echo "-medal\">
                        <td>";
                    // line 363
                    echo twig_escape_filter($this->env, $context["medalType"], "html", null, true);
                    echo " Medal</td>
                    </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['medalType'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 366
                echo "            </tbody>
        </table>
    ";
            }
        }
        // line 370
        echo "
<style>
    ";
        // line 372
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["backgroundColors"] ?? null));
        foreach ($context['_seq'] as $context["color"] => $context["i"]) {
            // line 373
            echo "        ";
            $context["colorClass"] = twig_replace_filter($context["color"], ["#" => "_"]);
            // line 374
            echo "
        .cl";
            // line 375
            echo twig_escape_filter($this->env, ($context["colorClass"] ?? null), "html", null, true);
            echo " {
            background-color: ";
            // line 376
            echo twig_escape_filter($this->env, $context["color"], "html", null, true);
            echo ";
        }

        ";
            // line 379
            $context["cMin"] = $this->extensions['App\Twig\TwigExtension']->hexColorToRGBA($context["color"], 0);
            // line 380
            echo "        ";
            $context["cMax"] = $this->extensions['App\Twig\TwigExtension']->hexColorToRGBA($context["color"], 1);
            // line 381
            echo "
        .cl";
            // line 382
            echo twig_escape_filter($this->env, ($context["colorClass"] ?? null), "html", null, true);
            echo " .forceWidth.toolong:after {
            background: linear-gradient(to right,
                ";
            // line 384
            echo twig_escape_filter($this->env, ($context["cMin"] ?? null), "html", null, true);
            echo " 0%,
                ";
            // line 385
            echo twig_escape_filter($this->env, ($context["cMax"] ?? null), "html", null, true);
            echo " 96%);
        }
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['color'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 388
        echo "</style>
<script>
    document.querySelectorAll(\".forceWidth:not(.toolong)\").forEach(el => {
        if (el instanceof Element && el.scrollWidth > el.offsetWidth) {
            el.classList.add(\"toolong\");
        }
    });
</script>
";
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    public function getTemplateName()
    {
        return "partials/scoreboard_table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1135 => 388,  1126 => 385,  1122 => 384,  1117 => 382,  1114 => 381,  1111 => 380,  1109 => 379,  1103 => 376,  1099 => 375,  1096 => 374,  1093 => 373,  1089 => 372,  1085 => 370,  1079 => 366,  1070 => 363,  1065 => 362,  1061 => 361,  1052 => 357,  1043 => 354,  1041 => 353,  1038 => 352,  1033 => 349,  1027 => 348,  1021 => 345,  1016 => 344,  1013 => 343,  1009 => 342,  996 => 335,  993 => 334,  991 => 333,  988 => 332,  983 => 329,  966 => 325,  963 => 324,  960 => 323,  957 => 322,  955 => 321,  945 => 319,  941 => 318,  928 => 313,  925 => 312,  922 => 311,  919 => 310,  917 => 309,  907 => 305,  904 => 304,  900 => 301,  898 => 300,  893 => 297,  890 => 296,  887 => 294,  872 => 292,  869 => 291,  862 => 289,  856 => 285,  850 => 283,  846 => 281,  844 => 280,  841 => 279,  835 => 278,  831 => 277,  822 => 276,  820 => 275,  816 => 273,  813 => 272,  810 => 271,  807 => 270,  804 => 269,  802 => 268,  799 => 267,  796 => 266,  793 => 265,  790 => 264,  787 => 263,  784 => 262,  781 => 261,  778 => 260,  775 => 259,  772 => 258,  769 => 257,  766 => 256,  763 => 255,  760 => 253,  757 => 252,  754 => 251,  751 => 250,  749 => 249,  746 => 248,  743 => 247,  740 => 246,  737 => 245,  734 => 244,  731 => 243,  728 => 242,  725 => 241,  722 => 240,  719 => 239,  716 => 238,  713 => 237,  710 => 236,  708 => 235,  703 => 234,  701 => 233,  696 => 231,  691 => 230,  688 => 229,  685 => 228,  682 => 227,  679 => 226,  677 => 225,  673 => 223,  669 => 221,  663 => 219,  661 => 218,  658 => 217,  656 => 216,  650 => 214,  644 => 211,  641 => 210,  639 => 209,  625 => 207,  622 => 206,  619 => 205,  616 => 204,  613 => 203,  610 => 202,  607 => 201,  604 => 200,  601 => 199,  598 => 198,  595 => 197,  592 => 196,  589 => 195,  587 => 194,  580 => 193,  577 => 192,  574 => 191,  571 => 190,  568 => 189,  565 => 188,  562 => 187,  559 => 186,  555 => 184,  551 => 182,  545 => 180,  540 => 178,  534 => 177,  531 => 176,  528 => 175,  525 => 174,  522 => 173,  519 => 172,  516 => 171,  514 => 170,  505 => 169,  502 => 168,  499 => 167,  496 => 166,  493 => 165,  491 => 164,  488 => 163,  486 => 162,  483 => 161,  480 => 160,  474 => 157,  465 => 156,  462 => 155,  459 => 154,  456 => 153,  453 => 152,  450 => 151,  448 => 150,  444 => 148,  441 => 147,  438 => 146,  432 => 144,  430 => 143,  427 => 142,  424 => 141,  420 => 139,  413 => 138,  410 => 137,  407 => 136,  404 => 135,  401 => 134,  398 => 133,  395 => 132,  392 => 130,  389 => 129,  386 => 128,  383 => 127,  380 => 126,  377 => 125,  374 => 124,  371 => 123,  368 => 122,  365 => 121,  362 => 120,  359 => 118,  356 => 117,  353 => 116,  350 => 115,  347 => 114,  344 => 113,  341 => 112,  339 => 111,  336 => 110,  333 => 109,  330 => 108,  312 => 107,  309 => 106,  306 => 105,  304 => 104,  299 => 101,  296 => 100,  288 => 97,  277 => 94,  274 => 93,  272 => 92,  268 => 91,  258 => 90,  253 => 89,  250 => 88,  247 => 87,  244 => 86,  241 => 85,  238 => 84,  235 => 83,  232 => 82,  229 => 81,  226 => 80,  223 => 79,  220 => 78,  217 => 77,  214 => 76,  211 => 75,  208 => 74,  203 => 73,  201 => 72,  196 => 70,  191 => 68,  187 => 66,  184 => 65,  181 => 64,  178 => 63,  176 => 62,  172 => 60,  169 => 59,  162 => 57,  157 => 56,  155 => 55,  146 => 48,  142 => 46,  139 => 45,  135 => 43,  131 => 41,  129 => 40,  125 => 38,  118 => 35,  115 => 34,  108 => 30,  104 => 28,  102 => 27,  99 => 26,  97 => 25,  93 => 23,  91 => 22,  89 => 21,  87 => 20,  85 => 19,  83 => 18,  81 => 17,  79 => 16,  75 => 14,  73 => 13,  69 => 11,  67 => 10,  60 => 8,  57 => 7,  52 => 6,  49 => 5,  45 => 3,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "partials/scoreboard_table.html.twig", "/opt/domjudge/domserver/webapp/templates/partials/scoreboard_table.html.twig");
    }
}
