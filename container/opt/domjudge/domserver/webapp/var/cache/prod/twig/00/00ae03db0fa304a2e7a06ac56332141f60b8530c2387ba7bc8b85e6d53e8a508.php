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

/* jury/team.html.twig */
class __TwigTemplate_eda9b7c31ed6f7ab95cd7ee8d2875840bec29b34aa0547f3e50746449d20b21a extends Template
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
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/team.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/team.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/team.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Team ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "teamid", [], "any", false, false, false, 4), "html", null, true);
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
    <h1>Team ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "effectiveName", [], "any", false, false, false, 13), "html", null, true);
        echo "</h1>

    <div class=\"row\">
        <div class=\"col\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>ID</th>
                    <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "teamid", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
                </tr>
                ";
        // line 22
        if ($this->extensions['App\Twig\TwigExtension']->showExternalId(($context["team"] ?? null))) {
            // line 23
            echo "                    <tr>
                        <th>External ID</th>
                        <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "externalid", [], "any", false, false, false, 25), "html", null, true);
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
        if (twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "icpcid", [], "any", false, false, false, 31)) {
            // line 32
            echo "                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "icpcid", [], "any", false, false, false, 32), "html", null, true);
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
                    <th>Name</th>
                    <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "name", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Display name</th>
                    <td>
                        ";
        // line 45
        if (twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "displayName", [], "any", false, false, false, 45)) {
            // line 46
            echo "                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "displayName", [], "any", false, false, false, 46), "html", null, true);
            echo "
                        ";
        } else {
            // line 48
            echo "                            -
                        ";
        }
        // line 50
        echo "                    </td>
                </tr>
                <tr>
                    <th>First login</th>
                    <td>
                        ";
        // line 55
        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "users", [], "any", false, false, false, 55)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "users", [], "any", false, false, false, 55), "first", [], "any", false, false, false, 55), "firstLogin", [], "any", false, false, false, 55))) {
            // line 56
            echo "                            ";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "users", [], "any", false, false, false, 56), "first", [], "any", false, false, false, 56), "firstLogin", [], "any", false, false, false, 56), "D d M Y H:i:s T"), "html", null, true);
            echo "
                        ";
        } else {
            // line 58
            echo "                            -
                        ";
        }
        // line 60
        echo "                    </td>
                </tr>
                <tr>
                    <th>IP</th>
                    <td>
                        ";
        // line 65
        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "users", [], "any", false, false, false, 65)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "users", [], "any", false, false, false, 65), "first", [], "any", false, false, false, 65), "lastIpAddress", [], "any", false, false, false, 65))) {
            // line 66
            echo "                            ";
            echo $this->extensions['App\Twig\TwigExtension']->printHost(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "users", [], "any", false, false, false, 66), "first", [], "any", false, false, false, 66), "lastIpAddress", [], "any", false, false, false, 66), true);
            echo "
                        ";
        } else {
            // line 68
            echo "                            -
                        ";
        }
        // line 70
        echo "                    </td>
                </tr>
                ";
        // line 72
        if (twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "penalty", [], "any", false, false, false, 72)) {
            // line 73
            echo "                    <tr>
                        <th>Penalty time</th>
                        <td>";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "penalty", [], "any", false, false, false, 75), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        // line 78
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "room", [], "any", false, false, false, 78)) {
            // line 79
            echo "                    <tr>
                        <th>Location</th>
                        <td>";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "room", [], "any", false, false, false, 81), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        // line 84
        echo "                <tr>
                    <th>User</th>
                    <td>
                        ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "users", [], "any", false, false, false, 87));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 88
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_user", ["userId" => twig_get_attribute($this->env, $this->source, $context["user"], "userid", [], "any", false, false, false, 88)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 88), "html", null, true);
            echo "</a>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 90
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 91
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_user_add", ["team" => twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "teamid", [], "any", false, false, false, 91)]), "html", null, true);
                echo "\">
                                    <i class=\"fas fa-user-plus\"></i> add user
                                </a>
                            ";
            }
            // line 95
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "                    </td>
                </tr>
            </table>
        </div>

        <div class=\"col\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>Category</th>
                    <td>
                        ";
        // line 106
        if (twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "category", [], "any", false, false, false, 106)) {
            // line 107
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_category", ["categoryId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "category", [], "any", false, false, false, 107), "categoryid", [], "any", false, false, false, 107)]), "html", null, true);
            echo "\">
                                ";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "category", [], "any", false, false, false, 108), "name", [], "any", false, false, false, 108), "html", null, true);
            echo "
                            </a>
                        ";
        } else {
            // line 111
            echo "                            -
                        ";
        }
        // line 113
        echo "                    </td>
                </tr>
                ";
        // line 115
        if ((($context["showAffiliations"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "affiliation", [], "any", false, false, false, 115))) {
            // line 116
            echo "                    <tr>
                        <th>Affiliation</th>
                        <td>
                            ";
            // line 119
            $context["affiliationId"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "affiliation", [], "any", false, false, false, 119), "affilid", [], "any", false, false, false, 119);
            // line 120
            echo "                            ";
            if ($this->extensions['App\Twig\TwigExtension']->showExternalId(twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "affiliation", [], "any", false, false, false, 120))) {
                // line 121
                echo "                                ";
                $context["affiliationId"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "affiliation", [], "any", false, false, false, 121), "externalid", [], "any", false, false, false, 121);
                // line 122
                echo "                            ";
            }
            // line 123
            echo "                            ";
            $context["affiliationLogo"] = $this->env->getFilter('assetPath')->getCallable()(($context["affiliationId"] ?? null), "affilation");
            // line 124
            echo "                            ";
            if (($context["affiliationLogo"] ?? null)) {
                // line 125
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["affiliationLogo"] ?? null)), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "affiliation", [], "any", false, false, false, 125), "shortname", [], "any", false, false, false, 125), "html", null, true);
                echo "\"
                                     title=\"";
                // line 126
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "affiliation", [], "any", false, false, false, 126), "shortname", [], "any", false, false, false, 126), "html", null, true);
                echo "\" class=\"affiliation-logo\"/>
                            ";
            }
            // line 128
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_affiliation", ["affilId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "affiliation", [], "any", false, false, false, 128), "affilid", [], "any", false, false, false, 128)]), "html", null, true);
            echo "\">
                                ";
            // line 129
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "affiliation", [], "any", false, false, false, 129), "name", [], "any", false, false, false, 129), "html", null, true);
            echo "
                            </a>
                        </td>
                    </tr>
                ";
        }
        // line 134
        echo "                ";
        if (((($context["showFlags"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "affiliation", [], "any", false, false, false, 134)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "affiliation", [], "any", false, false, false, 134), "country", [], "any", false, false, false, 134))) {
            // line 135
            echo "                    <tr>
                        <th>Country</th>
                        <td>
                            ";
            // line 138
            echo $this->extensions['App\Twig\TwigExtension']->countryFlag(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "affiliation", [], "any", false, false, false, 138), "country", [], "any", false, false, false, 138), true);
            echo "
                        </td>
                    </tr>
                ";
        }
        // line 142
        echo "                ";
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "contests", [], "any", false, false, false, 142)), 0))) {
            // line 143
            echo "                <tr>
                    <th>Contests</th>
                    <td>
                        ";
            // line 146
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "contests", [], "any", false, false, false, 146));
            foreach ($context['_seq'] as $context["_key"] => $context["ucontest"]) {
                // line 147
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contest", ["contestId" => twig_get_attribute($this->env, $this->source, $context["ucontest"], "cid", [], "any", false, false, false, 147)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ucontest"], "shortname", [], "any", false, false, false, 147), "html", null, true);
                echo "</a>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ucontest'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "                    </td>
                </tr>
                ";
        }
        // line 152
        echo "                ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "internalcomments", [], "any", false, false, false, 152))) {
            // line 153
            echo "                <tr>
                    <th>Internal comments (Jury only)</th>
                    <td>
                        ";
            // line 156
            echo twig_nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "internalcomments", [], "any", false, false, false, 156), "html", null, true));
            echo "
                    </td>
                </tr>
                ";
        }
        // line 160
        echo "                ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "publicdescription", [], "any", false, false, false, 160))) {
            // line 161
            echo "                    <tr>
                        <th>Description (Public)</th>
                        <td>";
            // line 163
            echo twig_nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "publicdescription", [], "any", false, false, false, 163), "html", null, true));
            echo "</td>
                    </tr>
                ";
        }
        // line 166
        echo "            </table>
        </div>
    ";
        // line 168
        $context["teamId"] = twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "teamid", [], "any", false, false, false, 168);
        // line 169
        echo "    ";
        if ($this->extensions['App\Twig\TwigExtension']->showExternalId(($context["team"] ?? null))) {
            // line 170
            echo "        ";
            $context["teamId"] = twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "externalid", [], "any", false, false, false, 170);
            // line 171
            echo "    ";
        }
        // line 172
        echo "    ";
        $context["teamImage"] = $this->env->getFilter('assetPath')->getCallable()(($context["teamId"] ?? null), "team");
        // line 173
        echo "    ";
        if (($context["teamImage"] ?? null)) {
            // line 174
            echo "        <div class=\"col\">
        <img id=\"teampicture\" src=\"";
            // line 175
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["teamImage"] ?? null)), "html", null, true);
            echo "\" alt=\"Picture of team ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "name", [], "any", false, false, false, 175), "html", null, true);
            echo "\"
             title=\"Picture of team ";
            // line 176
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "effectiveName", [], "any", false, false, false, 176), "html", null, true);
            echo "\">
        </div>
    ";
        }
        // line 179
        echo "    </div>

    <div class=\"button-row\">";
        // line 182
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 183
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_edit", ["teamId" => twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "teamid", [], "any", false, false, false, 183)]), "Edit", "primary", "edit");
            echo "
            ";
            // line 184
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_delete", ["teamId" => twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "teamid", [], "any", false, false, false, 184)]), "Delete", "danger", "trash-alt", true);
            echo "
        ";
        }
        // line 186
        echo "        ";
        echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_clarification_send", ["teamto" => twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "teamid", [], "any", false, false, false, 186)]), "Send message", "secondary", "envelope");
        echo "
        ";
        // line 187
        $this->loadTemplate("jury/partials/rejudge_form.html.twig", "jury/team.html.twig", 187)->display(twig_array_merge($context, ["table" => "team", "id" => twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "teamid", [], "any", false, false, false, 187), "buttonClass" => "btn-secondary"]));
        // line 188
        echo "    </div>

    <div data-ajax-refresh-target>
        ";
        // line 191
        $this->loadTemplate("jury/partials/team_score_and_submissions.html.twig", "jury/team.html.twig", 191)->display($context);
        // line 192
        echo "    </div>

";
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    public function getTemplateName()
    {
        return "jury/team.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  495 => 192,  493 => 191,  488 => 188,  486 => 187,  481 => 186,  476 => 184,  472 => 183,  470 => 182,  466 => 179,  460 => 176,  454 => 175,  451 => 174,  448 => 173,  445 => 172,  442 => 171,  439 => 170,  436 => 169,  434 => 168,  430 => 166,  424 => 163,  420 => 161,  417 => 160,  410 => 156,  405 => 153,  402 => 152,  397 => 149,  386 => 147,  382 => 146,  377 => 143,  374 => 142,  367 => 138,  362 => 135,  359 => 134,  351 => 129,  346 => 128,  341 => 126,  334 => 125,  331 => 124,  328 => 123,  325 => 122,  322 => 121,  319 => 120,  317 => 119,  312 => 116,  310 => 115,  306 => 113,  302 => 111,  296 => 108,  291 => 107,  289 => 106,  277 => 96,  271 => 95,  263 => 91,  261 => 90,  251 => 88,  246 => 87,  241 => 84,  235 => 81,  231 => 79,  228 => 78,  222 => 75,  218 => 73,  216 => 72,  212 => 70,  208 => 68,  202 => 66,  200 => 65,  193 => 60,  189 => 58,  183 => 56,  181 => 55,  174 => 50,  170 => 48,  164 => 46,  162 => 45,  154 => 40,  148 => 36,  144 => 34,  138 => 32,  136 => 31,  131 => 28,  125 => 25,  121 => 23,  119 => 22,  114 => 20,  104 => 13,  101 => 12,  94 => 11,  85 => 8,  80 => 7,  73 => 6,  57 => 4,  49 => 1,  47 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/team.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/team.html.twig");
    }
}
