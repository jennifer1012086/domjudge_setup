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

/* jury/team_affiliation.html.twig */
class __TwigTemplate_33eb5f7a3eaf51c3e5f45583b16ea22c7eb7946ba9dd68921d1fff1d89dfccb6 extends Template
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
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/team_affiliation.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/team_affiliation.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/team_affiliation.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Affiliation ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["teamAffiliation"] ?? null), "affilid", [], "any", false, false, false, 4), "html", null, true);
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
    <h1>Affiliation: ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["teamAffiliation"] ?? null), "name", [], "any", false, false, false, 13), "html", null, true);
        echo "</h1>

    <div class=\"row\">
        <div class=\"col-lg-4\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>ID</th>
                    <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["teamAffiliation"] ?? null), "affilid", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
                </tr>
                ";
        // line 22
        if ($this->extensions['App\Twig\TwigExtension']->showExternalId(($context["teamAffiliation"] ?? null))) {
            // line 23
            echo "                    <tr>
                        <th>External ID</th>
                        <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["teamAffiliation"] ?? null), "externalid", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        // line 28
        echo "                <tr>
                    <th>ICPC ID</th>
                    <td>
                        ";
        // line 31
        if (twig_get_attribute($this->env, $this->source, ($context["teamAffiliation"] ?? null), "icpcid", [], "any", false, false, false, 31)) {
            // line 32
            echo "                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["teamAffiliation"] ?? null), "icpcid", [], "any", false, false, false, 32), "html", null, true);
            echo "
                        ";
        } else {
            // line 34
            echo "                            -
                        ";
        }
        // line 36
        echo "                    </td>
                </tr>
                <tr>
                    <th>Shortname</th>
                    <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["teamAffiliation"] ?? null), "shortname", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["teamAffiliation"] ?? null), "name", [], "any", false, false, false, 44), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Logo</th>
                    <td class=\"affiliation-logo\">
                        ";
        // line 49
        $context["affiliationId"] = twig_get_attribute($this->env, $this->source, ($context["teamAffiliation"] ?? null), "affilid", [], "any", false, false, false, 49);
        // line 50
        echo "                        ";
        if ($this->extensions['App\Twig\TwigExtension']->showExternalId(($context["teamAffiliation"] ?? null))) {
            // line 51
            echo "                            ";
            $context["affiliationId"] = twig_get_attribute($this->env, $this->source, ($context["teamAffiliation"] ?? null), "externalid", [], "any", false, false, false, 51);
            // line 52
            echo "                        ";
        }
        // line 53
        echo "                        ";
        $context["affiliationLogo"] = $this->env->getFilter('assetPath')->getCallable()(($context["affiliationId"] ?? null), "affiliation");
        // line 54
        echo "                        ";
        if (($context["affiliationLogo"] ?? null)) {
            // line 55
            echo "                            <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["affiliationLogo"] ?? null)), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["teamAffiliation"] ?? null), "shortname", [], "any", false, false, false, 55), "html", null, true);
            echo "\"
                                 title=\"";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["teamAffiliation"] ?? null), "shortname", [], "any", false, false, false, 56), "html", null, true);
            echo "\" class=\"affiliation-logo\"/>
                        ";
        } else {
            // line 58
            echo "                            Not available
                        ";
        }
        // line 60
        echo "                    </td>
                </tr>
                ";
        // line 62
        if (((($context["showFlags"] ?? null) && ($context["teamAffiliation"] ?? null)) && twig_get_attribute($this->env, $this->source, ($context["teamAffiliation"] ?? null), "country", [], "any", false, false, false, 62))) {
            // line 63
            echo "                    <tr>
                        <th>Country</th>
                        <td>
                            ";
            // line 66
            echo $this->extensions['App\Twig\TwigExtension']->countryFlag(twig_get_attribute($this->env, $this->source, ($context["teamAffiliation"] ?? null), "country", [], "any", false, false, false, 66), true);
            echo "
                        </td>
                    </tr>
                ";
        }
        // line 70
        echo "                ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["teamAffiliation"] ?? null), "internalcomments", [], "any", false, false, false, 70))) {
            // line 71
            echo "                    <tr>
                        <th>Comments</th>
                        <td>";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["teamAffiliation"] ?? null), "internalcomments", [], "any", false, false, false, 73), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        // line 76
        echo "            </table>
        </div>
    </div>";
        // line 80
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 81
            echo "<p>
            ";
            // line 82
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_affiliation_edit", ["affilId" => twig_get_attribute($this->env, $this->source, ($context["teamAffiliation"] ?? null), "affilid", [], "any", false, false, false, 82)]), "Edit", "primary", "edit");
            echo "
            ";
            // line 83
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_affiliation_delete", ["affilId" => twig_get_attribute($this->env, $this->source, ($context["teamAffiliation"] ?? null), "affilid", [], "any", false, false, false, 83)]), "Delete", "danger", "trash-alt", true);
            echo "
        </p>
    ";
        }
        // line 86
        echo "
    <h2>Teams from ";
        // line 87
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["teamAffiliation"] ?? null), "name", [], "any", false, false, false, 87), "html", null, true);
        echo "</h2>
    ";
        // line 88
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["teamAffiliation"] ?? null), "teams", [], "any", false, false, false, 88))) {
            // line 89
            echo "        <p class=\"nodata\">no teams</p>
    ";
        } else {
            // line 91
            echo "        <div class=\"row\">
            <div class=\"col-lg-4\">
                <table class=\"data-table table table-sm table-striped table-hover\">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Teamname</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
            // line 101
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["teamAffiliation"] ?? null), "teams", [], "any", false, false, false, 101));
            foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
                // line 102
                echo "                        <tr>
                            <td>
                                <a href=\"";
                // line 104
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team", ["teamId" => twig_get_attribute($this->env, $this->source, $context["team"], "teamid", [], "any", false, false, false, 104)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "teamid", [], "any", false, false, false, 104), "html", null, true);
                echo "</a>
                            </td>
                            <td>
                                <a href=\"";
                // line 107
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team", ["teamId" => twig_get_attribute($this->env, $this->source, $context["team"], "teamid", [], "any", false, false, false, 107)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "effectiveName", [], "any", false, false, false, 107), "html", null, true);
                echo "</a>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 111
            echo "                    </tbody>
                </table>
            </div>
        </div>

        ";
            // line 116
            if (array_key_exists("scoreboard", $context)) {
                // line 117
                echo "            <div data-ajax-refresh-target>
                ";
                // line 118
                $this->loadTemplate("partials/scoreboard_table.html.twig", "jury/team_affiliation.html.twig", 118)->display(twig_array_merge($context, ["displayRank" => true, "jury" => true]));
                // line 119
                echo "            </div>
        ";
            }
            // line 121
            echo "    ";
        }
        // line 122
        echo "
";
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    public function getTemplateName()
    {
        return "jury/team_affiliation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  326 => 122,  323 => 121,  319 => 119,  317 => 118,  314 => 117,  312 => 116,  305 => 111,  293 => 107,  285 => 104,  281 => 102,  277 => 101,  265 => 91,  261 => 89,  259 => 88,  255 => 87,  252 => 86,  246 => 83,  242 => 82,  239 => 81,  237 => 80,  233 => 76,  227 => 73,  223 => 71,  220 => 70,  213 => 66,  208 => 63,  206 => 62,  202 => 60,  198 => 58,  193 => 56,  186 => 55,  183 => 54,  180 => 53,  177 => 52,  174 => 51,  171 => 50,  169 => 49,  161 => 44,  154 => 40,  148 => 36,  144 => 34,  138 => 32,  136 => 31,  131 => 28,  125 => 25,  121 => 23,  119 => 22,  114 => 20,  104 => 13,  101 => 12,  94 => 11,  85 => 8,  80 => 7,  73 => 6,  57 => 4,  49 => 1,  47 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/team_affiliation.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/team_affiliation.html.twig");
    }
}
