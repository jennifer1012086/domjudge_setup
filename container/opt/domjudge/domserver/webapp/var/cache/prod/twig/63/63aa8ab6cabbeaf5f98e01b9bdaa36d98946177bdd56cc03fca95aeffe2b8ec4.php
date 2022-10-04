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

/* jury/user.html.twig */
class __TwigTemplate_959cf147239ca2db1aa6a64047351a5115f0eab0e00d2182997ef22e0e293701 extends Template
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
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/user.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/user.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/user.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "User ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "userid", [], "any", false, false, false, 4), "html", null, true);
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
    <h1>User ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, false, 13), "html", null, true);
        echo "</h1>

    <div class=\"row\">
        <div class=\"col-lg-4\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>ID</th>
                    <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "userid", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
                </tr>
                ";
        // line 22
        if ($this->extensions['App\Twig\TwigExtension']->showExternalId(($context["user"] ?? null))) {
            // line 23
            echo "                    <tr>
                        <th>External ID</th>
                        <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "externalid", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        // line 28
        echo "                <tr>
                    <th>Login</th>
                    <td class=\"teamid\">";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 30), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, false, 34), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>
                        ";
        // line 39
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 39)) {
            // line 40
            echo "                            <a href=\"mailto:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 40), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 40), "html", null, true);
            echo "</a>
                        ";
        } else {
            // line 42
            echo "                            -
                        ";
        }
        // line 44
        echo "                    </td>
                </tr>
                <tr>
                    <th>Password</th>
                    <td>
                        ";
        // line 49
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "password", [], "any", false, false, false, 49)) {
            // line 50
            echo "                            Set
                        ";
        } else {
            // line 52
            echo "                            Not set
                        ";
        }
        // line 54
        echo "                    </td>
                </tr>
                <tr>
                    <th>IP address</th>
                    <td>
                        ";
        // line 59
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "ipAddress", [], "any", false, false, false, 59)) {
            // line 60
            echo "                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "ipAddress", [], "any", false, false, false, 60), "html", null, true);
            echo "
                        ";
        } else {
            // line 62
            echo "                            -
                        ";
        }
        // line 64
        echo "                    </td>
                </tr>
                <tr>
                    <th>Enabled</th>
                    <td>
                        ";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "enabled", [], "any", false, false, false, 69)), "html", null, true);
        echo "
                    </td>
                </tr>
                <tr>
                    <th>Roles</th>
                    <td>
                        ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "userRoles", [], "any", false, false, false, 75));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 76
            echo "                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "description", [], "any", false, false, false, 76), "html", null, true);
            echo "<br>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 78
            echo "                            No roles assigned
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "                    </td>
                </tr>
                <tr>
                    <th>Team</th>
                    ";
        // line 84
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "team", [], "any", false, false, false, 84)) {
            // line 85
            echo "                        <td class=\"teamid\">
                            <a href=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team", ["teamId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "team", [], "any", false, false, false, 86), "teamid", [], "any", false, false, false, 86)]), "html", null, true);
            echo "\">
                                ";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "team", [], "any", false, false, false, 87), "effectiveName", [], "any", false, false, false, 87), "html", null, true);
            echo " (t";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "team", [], "any", false, false, false, 87), "teamid", [], "any", false, false, false, 87), "html", null, true);
            echo ")
                            </a>
                        </td>
                    ";
        } else {
            // line 91
            echo "                        <td>-</td>
                    ";
        }
        // line 93
        echo "                </tr>
            </table>
        </div>

        <div class=\"col-lg-4\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>First login</th>
                    <td>
                        ";
        // line 102
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "firstLogin", [], "any", false, false, false, 102)) {
            // line 103
            echo "                            ";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "firstLogin", [], "any", false, false, false, 103), "D d M Y H:i:s T"), "html", null, true);
            echo "
                        ";
        } else {
            // line 105
            echo "                            -
                        ";
        }
        // line 107
        echo "                    </td>
                </tr>
                <tr>
                    <th>Last login</th>
                    <td>
                        ";
        // line 112
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "lastLogin", [], "any", false, false, false, 112)) {
            // line 113
            echo "                            ";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "lastLogin", [], "any", false, false, false, 113), "D d M Y H:i:s T"), "html", null, true);
            echo "
                        ";
        } else {
            // line 115
            echo "                            -
                        ";
        }
        // line 117
        echo "                    </td>
                </tr>
                <tr>
                    <th>Last IP</th>
                    <td>
                        ";
        // line 122
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "lastIpAddress", [], "any", false, false, false, 122)) {
            // line 123
            echo "                            ";
            echo $this->extensions['App\Twig\TwigExtension']->printHost(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "lastIpAddress", [], "any", false, false, false, 123), true);
            echo "
                        ";
        } else {
            // line 125
            echo "                            -
                        ";
        }
        // line 127
        echo "                    </td>
                </tr>
            </table>
        </div>
    </div>

    <div class=\"button-row\">";
        // line 134
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 135
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_user_edit", ["userId" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "userid", [], "any", false, false, false, 135)]), "Edit", "primary", "edit");
            echo "
            ";
            // line 136
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_user_delete", ["userId" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "userid", [], "any", false, false, false, 136)]), "Delete", "danger", "trash-alt", true);
            echo "
        ";
        }
        // line 138
        echo "        ";
        $this->loadTemplate("jury/partials/rejudge_form.html.twig", "jury/user.html.twig", 138)->display(twig_array_merge($context, ["table" => "user", "id" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "userid", [], "any", false, false, false, 138), "buttonClass" => "btn-secondary"]));
        // line 139
        echo "    </div>

    <h2>Submissions for ";
        // line 141
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, false, 141), "html", null, true);
        echo "</h2>

    <div data-ajax-refresh-target>";
        // line 144
        $this->loadTemplate("jury/partials/submission_list.html.twig", "jury/user.html.twig", 144)->display(twig_array_merge($context, ["showTestcases" => false]));
        // line 145
        echo "    </div>

";
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    public function getTemplateName()
    {
        return "jury/user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  358 => 145,  356 => 144,  351 => 141,  347 => 139,  344 => 138,  339 => 136,  335 => 135,  333 => 134,  325 => 127,  321 => 125,  315 => 123,  313 => 122,  306 => 117,  302 => 115,  296 => 113,  294 => 112,  287 => 107,  283 => 105,  277 => 103,  275 => 102,  264 => 93,  260 => 91,  251 => 87,  247 => 86,  244 => 85,  242 => 84,  236 => 80,  229 => 78,  221 => 76,  216 => 75,  207 => 69,  200 => 64,  196 => 62,  190 => 60,  188 => 59,  181 => 54,  177 => 52,  173 => 50,  171 => 49,  164 => 44,  160 => 42,  152 => 40,  150 => 39,  142 => 34,  135 => 30,  131 => 28,  125 => 25,  121 => 23,  119 => 22,  114 => 20,  104 => 13,  101 => 12,  94 => 11,  85 => 8,  80 => 7,  73 => 6,  57 => 4,  49 => 1,  47 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/user.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/user.html.twig");
    }
}
