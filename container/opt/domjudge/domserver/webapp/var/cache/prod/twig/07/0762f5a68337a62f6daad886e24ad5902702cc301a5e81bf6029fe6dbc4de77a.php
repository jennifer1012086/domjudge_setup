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

/* partials/scoreboard.html.twig */
class __TwigTemplate_8267c30807b5ff07f591a0928811f567b87f5025c050857e5ca00e6c060d5f4e extends Template
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
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/scoreboard.html.twig"));

        // line 1
        if ( !array_key_exists("static", $context)) {
            // line 2
            echo "    ";
            $context["static"] = false;
        }
        // line 4
        echo "
";
        // line 5
        if ((((array_key_exists("ajax", $context) && ($context["ajax"] ?? null)) &&  !($context["static"] ?? null)) && ($context["public"] ?? null))) {
            // line 6
            echo "    <div class=\"d-none\">
        ";
            // line 7
            $this->loadTemplate("partials/scoreboard_progress_bar.html.twig", "partials/scoreboard.html.twig", 7)->display(twig_array_merge($context, ["contest" => ($context["current_contest"] ?? null)]));
            // line 8
            echo "    </div>
";
        }
        // line 10
        echo "
";
        // line 11
        if ((null === ($context["current_contest"] ?? null))) {
            // line 12
            echo "    <p class=\"nodata\">No active contest</p>
";
        } else {
            // line 14
            echo "    <div class=\"card\">
        <div class=\"card-header\" style=\"font-family: Roboto, sans-serif; display: flex;\">
            <span style=\"font-weight: bold;\">";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["current_contest"] ?? null), "name", [], "any", false, false, false, 16), "html", null, true);
            echo "</span>
            <span id=\"contesttimer\" style=\"color: DimGray; margin-left: auto;\">
                ";
            // line 18
            if ((null === ($context["scoreboard"] ?? null))) {
                // line 19
                echo "                    ";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printContestStart(($context["current_contest"] ?? null)), "html", null, true);
                echo "
                ";
            } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 20
($context["scoreboard"] ?? null), "freezeData", [], "any", false, false, false, 20), "showFinal", [0 => ($context["jury"] ?? null)], "method", false, false, false, 20)) {
                // line 21
                echo "                    ";
                if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["current_contest"] ?? null), "finalizetime", [], "any", false, false, false, 21))) {
                    // line 22
                    echo "                        preliminary results - not final
                    ";
                } else {
                    // line 24
                    echo "                        final standings
                    ";
                }
                // line 26
                echo "                ";
            } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "freezeData", [], "any", false, false, false, 26), "stopped", [], "any", false, false, false, 26)) {
                // line 27
                echo "                    contest over, waiting for results
                ";
            } else {
                // line 29
                echo "                    starts: ";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, ($context["current_contest"] ?? null), "starttime", [], "any", false, false, false, 29)), "html", null, true);
                echo " - ends: ";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, ($context["current_contest"] ?? null), "endtime", [], "any", false, false, false, 29)), "html", null, true);
                echo "
                ";
            }
            // line 31
            echo "            </span>
        </div>

        ";
            // line 34
            if (($context["static"] ?? null)) {
                // line 35
                echo "            ";
                $this->loadTemplate("partials/scoreboard_progress_bar.html.twig", "partials/scoreboard.html.twig", 35)->display(twig_array_merge($context, ["contest" => ($context["current_contest"] ?? null)]));
                // line 36
                echo "        ";
            }
            // line 37
            echo "    </div> ";
            // line 38
            echo "
    ";
            // line 39
            if (((null === ($context["scoreboard"] ?? null)) &&  !($context["jury"] ?? null))) {
                // line 40
                echo "        ";
                // line 41
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["groupedAffiliations"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["affiliationGroupRow"]) {
                    // line 42
                    echo "            <br/><br/>
            <div class=\"card-deck\">
                ";
                    // line 44
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["affiliationGroupRow"]);
                    foreach ($context['_seq'] as $context["category"] => $context["affiliations"]) {
                        // line 45
                        echo "                    <div class=\"card\" style=\"font-family: Roboto, sans-serif;\">
                        <div class=\"card-header\">";
                        // line 46
                        echo twig_escape_filter($this->env, $context["category"], "html", null, true);
                        echo "</div>
                        <div class=\"card-body\">
                            <ul class=\"list-group list-group-flush\">
                                ";
                        // line 49
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["affiliations"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["affiliation"]) {
                            // line 50
                            echo "                                    <li class=\"list-group-item\">
                                        ";
                            // line 51
                            $context["affiliationLogo"] = $this->env->getFilter('assetPath')->getCallable()(twig_get_attribute($this->env, $this->source, $context["affiliation"], "id", [], "any", false, false, false, 51), "affiliation");
                            // line 52
                            echo "                                        ";
                            if (($context["affiliationLogo"] ?? null)) {
                                // line 53
                                echo "                                            <img loading=\"lazy\" class=\"affiliation-logo\"
                                                 src=\"";
                                // line 54
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["affiliationLogo"] ?? null)), "html", null, true);
                                echo "\" alt=\"";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["affiliation"], "name", [], "any", false, false, false, 54), "html", null, true);
                                echo "\"
                                                 title=\"";
                                // line 55
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["affiliation"], "name", [], "any", false, false, false, 55), "html", null, true);
                                echo "\">
                                        ";
                            }
                            // line 57
                            echo "                                        ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["affiliation"], "name", [], "any", false, false, false, 57), "html", null, true);
                            echo "
                                    </li>
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['affiliation'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 60
                        echo "                            </ul>
                        </div>
                    </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['category'], $context['affiliations'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 64
                    echo "                ";
                    if ((-1 === twig_compare(twig_length_filter($this->env, $context["affiliationGroupRow"]), 3))) {
                        // line 65
                        echo "                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range((twig_length_filter($this->env, $context["affiliationGroupRow"]) + 1), 3));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            // line 66
                            echo "                        <div class=\"card\" style=\"border: none;\"></div>
                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 68
                        echo "                ";
                    }
                    // line 69
                    echo "            </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['affiliationGroupRow'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 71
                echo "    ";
            } else {
                // line 72
                echo "
        ";
                // line 73
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "freezeData", [], "any", false, false, false, 73), "showFrozen", [0 => false], "method", false, false, false, 73)) {
                    // line 74
                    echo "            <div class=\"alert alert-warning\" role=\"alert\" style=\"font-size: 80%;\">
                ";
                    // line 75
                    if (($context["jury"] ?? null)) {
                        // line 76
                        echo "                    <a href=\"";
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_index");
                        echo "\">The public scoreboard</a>
                    was frozen with ";
                        // line 77
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["current_contest"] ?? null), "minutesRemaining", [], "any", false, false, false, 77), "html", null, true);
                        echo " minutes remaining
                ";
                    } else {
                        // line 79
                        echo "                    The scoreboard was frozen with ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["current_contest"] ?? null), "minutesRemaining", [], "any", false, false, false, 79), "html", null, true);
                        echo " minutes remaining - solutions
                    submitted in the last ";
                        // line 80
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["current_contest"] ?? null), "minutesRemaining", [], "any", false, false, false, 80), "html", null, true);
                        echo " minutes of the contest ";
                        if (($context["showPending"] ?? null)) {
                            echo "are still shown as pending";
                        } else {
                            echo "are not shown";
                        }
                        echo ".
                ";
                    }
                    // line 82
                    echo "            </div>
        ";
                }
                // line 84
                echo "
        ";
                // line 85
                if (( !($context["static"] ?? null) && (((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source,                 // line 86
($context["filterValues"] ?? null), "affiliations", [], "any", false, false, false, 86)), 1)) || (1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source,                 // line 87
($context["filterValues"] ?? null), "countries", [], "any", false, false, false, 87)), 1))) || (1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source,                 // line 88
($context["filterValues"] ?? null), "categories", [], "any", false, false, false, 88)), 1))))) {
                    // line 89
                    echo "\t<div class=\"dropdown\">
            <button class=\"btn btn-outline-secondary btn-sm m-2 dropdown-toggle\" data-toggle=\"dropdown\"
                aria-haspopup=\"true\" aria-expanded=\"false\" id=\"filter-toggle\">
                <i class=\"fas fa-filter\"></i>
                ";
                    // line 93
                    if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["scoreFilter"] ?? null), "filteredOn", [], "any", false, false, false, 93))) {
                        // line 94
                        echo "                    Filter
                ";
                    } else {
                        // line 96
                        echo "                    Filtered (";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["scoreFilter"] ?? null), "filteredOn", [], "any", false, false, false, 96), "html", null, true);
                        echo ")
                ";
                    }
                    // line 98
                    echo "            </button>

            <div class=\"dropdown-menu\" aria-labelledby=\"filter-toggle\">
                <form method=\"get\">
                    <div class=\"filterbox\">
                        <div class=\"form-row\">
                        ";
                    // line 104
                    if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["filterValues"] ?? null), "affiliations", [], "any", false, false, false, 104)), 1))) {
                        // line 105
                        echo "                            <div class=\"form-group\">
                            <label for=\"scoreboard-filter-affil\">Affiliations</label>
                            <select id=\"scoreboard-filter-affil\" class=\"form-control mr-2\" multiple size=\"8\" name=\"affiliations[]\">
                                ";
                        // line 108
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["filterValues"] ?? null), "affiliations", [], "any", false, false, false, 108));
                        foreach ($context['_seq'] as $context["affiliationId"] => $context["affiliation"]) {
                            // line 109
                            echo "                                    <option ";
                            if (twig_in_filter($context["affiliationId"], twig_get_attribute($this->env, $this->source, ($context["scoreFilter"] ?? null), "affiliations", [], "any", false, false, false, 109))) {
                                echo "selected";
                            }
                            // line 110
                            echo "                                            value=\"";
                            echo twig_escape_filter($this->env, $context["affiliationId"], "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $context["affiliation"], "html", null, true);
                            echo "</option>
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['affiliationId'], $context['affiliation'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 112
                        echo "                            </select>
                            </div>
                        ";
                    }
                    // line 115
                    echo "                        ";
                    if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["filterValues"] ?? null), "countries", [], "any", false, false, false, 115)), 1))) {
                        // line 116
                        echo "                            <div class=\"form-group\">
                            <label for=\"scoreboard-filter-country\">Countries</label>
                            <select id=\"scoreboard-filter-country\" class=\"form-control mr-2\" multiple size=\"8\" name=\"countries[]\">
                                ";
                        // line 119
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["filterValues"] ?? null), "countries", [], "any", false, false, false, 119));
                        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                            // line 120
                            echo "                                    <option ";
                            if (twig_in_filter($context["country"], twig_get_attribute($this->env, $this->source, ($context["scoreFilter"] ?? null), "countries", [], "any", false, false, false, 120))) {
                                echo "selected";
                            }
                            // line 121
                            echo "                                            value=\"";
                            echo twig_escape_filter($this->env, $context["country"], "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, (($__internal_compile_0 = ($context["alpha3_countries"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["country"]] ?? null) : null), "html", null, true);
                            echo "</option>
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 123
                        echo "                            </select>
                            </div>
                        ";
                    }
                    // line 126
                    echo "                        ";
                    if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["filterValues"] ?? null), "categories", [], "any", false, false, false, 126)), 1))) {
                        // line 127
                        echo "                            <div class=\"form-group\">
                            <label for=\"scoreboard-filter-category\">Categories</label>
                            <select id=\"scoreboard-filter-category\" class=\"form-control mr-2\" multiple size=\"8\" name=\"categories[]\">
                                ";
                        // line 130
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["filterValues"] ?? null), "categories", [], "any", false, false, false, 130));
                        foreach ($context['_seq'] as $context["categoryId"] => $context["category"]) {
                            // line 131
                            echo "                                    <option ";
                            if (twig_in_filter($context["categoryId"], twig_get_attribute($this->env, $this->source, ($context["scoreFilter"] ?? null), "categories", [], "any", false, false, false, 131))) {
                                echo "selected";
                            }
                            // line 132
                            echo "                                            value=\"";
                            echo twig_escape_filter($this->env, $context["categoryId"], "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $context["category"], "html", null, true);
                            echo "</option>
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['categoryId'], $context['category'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 134
                        echo "                            </select>
                            </div>
                        ";
                    }
                    // line 137
                    echo "                        </div>
                        <input type=\"submit\" class=\"btn btn-primary btn-sm align-top\" name=\"filter\" value=\"filter\"/>
                        <input type=\"submit\" class=\"btn btn-secondary btn-sm align-top\" name=\"clear\" value=\"clear\"/>
                    </div>
                </form>
            </div>
        </div>
        ";
                } else {
                    // line 144
                    echo " ";
                    // line 145
                    echo "            <br/>
        ";
                }
                // line 146
                echo " ";
                // line 147
                echo "
        ";
                // line 148
                $this->loadTemplate("partials/scoreboard_table.html.twig", "partials/scoreboard.html.twig", 148)->display(twig_array_merge($context, ["displayRank" => true, "showLegends" => true]));
                // line 149
                echo "
    ";
            }
            // line 150
            echo " ";
            // line 151
            echo "
    <p id=\"lastmod\">
        Last Update: ";
            // line 153
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(null, "D d M Y H:i:s T"), "html", null, true);
            echo "<br/>
        using <a href=\"https://www.domjudge.org/\" target=\"_top\">DOMjudge</a>
    </p>
";
        }
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    public function getTemplateName()
    {
        return "partials/scoreboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  435 => 153,  431 => 151,  429 => 150,  425 => 149,  423 => 148,  420 => 147,  418 => 146,  414 => 145,  412 => 144,  402 => 137,  397 => 134,  386 => 132,  381 => 131,  377 => 130,  372 => 127,  369 => 126,  364 => 123,  353 => 121,  348 => 120,  344 => 119,  339 => 116,  336 => 115,  331 => 112,  320 => 110,  315 => 109,  311 => 108,  306 => 105,  304 => 104,  296 => 98,  290 => 96,  286 => 94,  284 => 93,  278 => 89,  276 => 88,  275 => 87,  274 => 86,  273 => 85,  270 => 84,  266 => 82,  255 => 80,  250 => 79,  245 => 77,  240 => 76,  238 => 75,  235 => 74,  233 => 73,  230 => 72,  227 => 71,  220 => 69,  217 => 68,  210 => 66,  205 => 65,  202 => 64,  193 => 60,  183 => 57,  178 => 55,  172 => 54,  169 => 53,  166 => 52,  164 => 51,  161 => 50,  157 => 49,  151 => 46,  148 => 45,  144 => 44,  140 => 42,  135 => 41,  133 => 40,  131 => 39,  128 => 38,  126 => 37,  123 => 36,  120 => 35,  118 => 34,  113 => 31,  105 => 29,  101 => 27,  98 => 26,  94 => 24,  90 => 22,  87 => 21,  85 => 20,  80 => 19,  78 => 18,  73 => 16,  69 => 14,  65 => 12,  63 => 11,  60 => 10,  56 => 8,  54 => 7,  51 => 6,  49 => 5,  46 => 4,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "partials/scoreboard.html.twig", "/opt/domjudge/domserver/webapp/templates/partials/scoreboard.html.twig");
    }
}
