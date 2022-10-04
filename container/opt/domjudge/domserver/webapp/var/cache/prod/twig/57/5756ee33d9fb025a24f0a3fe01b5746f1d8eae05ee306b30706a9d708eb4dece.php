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

/* jury/partials/external_contest_source_info.html.twig */
class __TwigTemplate_1b1b1807b32c713ccdcdb9005a084472b8f8246329b6d150721a4e29e9c582bb extends Template
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
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/external_contest_source_info.html.twig"));

        // line 1
        echo "<div class=\"row\">
    <div class=\"col-lg-6\">
        <table class=\"table table-sm table-striped\">
            <tr>
                <th>ID</th>
                <td>";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["externalContestSource"] ?? null), "extsourceid", [], "any", false, false, false, 6), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Contest to import into</th>
                <td>
                    <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contest", ["contestId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["externalContestSource"] ?? null), "contest", [], "any", false, false, false, 11), "cid", [], "any", false, false, false, 11)]), "html", null, true);
        echo "\">
                        c";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["externalContestSource"] ?? null), "contest", [], "any", false, false, false, 12), "cid", [], "any", false, false, false, 12), "html", null, true);
        echo "
                    </a>
                </td>
            </tr>
            <tr>
                <th>Enabled</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, ($context["externalContestSource"] ?? null), "enabled", [], "any", false, false, false, 18)), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Source</th>
                <td>
                    ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["externalContestSource"] ?? null), "getReadableType", [], "any", false, false, false, 23), "html", null, true);
        echo "
                    at
                    <code>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["externalContestSource"] ?? null), "source", [], "any", false, false, false, 25), "html", null, true);
        echo "</code>
                </td>
            </tr>
            ";
        // line 28
        if (twig_get_attribute($this->env, $this->source, ($context["externalContestSource"] ?? null), "username", [], "any", false, false, false, 28)) {
            // line 29
            echo "                <tr>
                    <th>Username</th>
                    <td><code>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["externalContestSource"] ?? null), "username", [], "any", false, false, false, 31), "html", null, true);
            echo "</code></td>
                </tr>
            ";
        }
        // line 34
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["externalContestSource"] ?? null), "password", [], "any", false, false, false, 34)) {
            // line 35
            echo "                <tr>
                    <th>Password</th>
                    <td>
                        <code data-password-hidden>
                            ••••••••
                        </code>
                        <code data-password class=\"d-none\">
                            ";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["externalContestSource"] ?? null), "password", [], "any", false, false, false, 42), "html", null, true);
            echo "
                        </code>
                    </td>
                </tr>
            ";
        }
        // line 47
        echo "            <tr>
                <th>Command</th>
                <td>
                    <code>";
        // line 50
        echo twig_escape_filter($this->env, ($context["webappDir"] ?? null), "html", null, true);
        echo "/bin/console import:eventfeed ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["externalContestSource"] ?? null), "extsourceid", [], "any", false, false, false, 50), "html", null, true);
        echo "</code>
                </td>
            </tr>
            <tr>
                <th>Status</th>
                <td>
                    ";
        // line 56
        if ( !twig_get_attribute($this->env, $this->source, ($context["externalContestSource"] ?? null), "lastPollTime", [], "any", false, false, false, 56)) {
            // line 57
            echo "                        Event feed reader never checked in.
                    ";
        } else {
            // line 59
            echo "                        ";
            echo twig_escape_filter($this->env, ($context["status"] ?? null), "html", null, true);
            echo ", last checked in ";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtimediff(twig_get_attribute($this->env, $this->source, ($context["externalContestSource"] ?? null), "lastPollTime", [], "any", false, false, false, 59)), "html", null, true);
            echo "s ago.
                    ";
        }
        // line 61
        echo "                </td>
            </tr>
            <tr>
                <th>Last event ID</th>
                <td>
                    ";
        // line 66
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["externalContestSource"] ?? null), "lastEventId", [], "any", true, true, false, 66)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["externalContestSource"] ?? null), "lastEventId", [], "any", false, false, false, 66), "-")) : ("-")), "html", null, true);
        echo "
                </td>
            </tr>
            <tr>
                <th>External contest information</th>
                <td>
                    Valid: ";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, ($context["sourceService"] ?? null), "validContestSource", [], "any", false, false, false, 72)), "html", null, true);
        echo "<br/>
                    ";
        // line 73
        if ( !twig_get_attribute($this->env, $this->source, ($context["sourceService"] ?? null), "validContestSource", [], "any", false, false, false, 73)) {
            // line 74
            echo "                        Error: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["sourceService"] ?? null), "loadingError", [], "any", false, false, false, 74), "html", null, true);
            echo "
                    ";
        } else {
            // line 76
            echo "                        ID: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["sourceService"] ?? null), "contestId", [], "any", false, false, false, 76), "html", null, true);
            echo "<br/>
                        Name: ";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["sourceService"] ?? null), "contestName", [], "any", false, false, false, 77), "html", null, true);
            echo "<br/>
                        Start time: ";
            // line 78
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, ($context["sourceService"] ?? null), "contestStartTime", [], "any", false, false, false, 78), "Y-m-d H:i:s (T)"), "html", null, true);
            echo "<br/>
                        Duration: ";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["sourceService"] ?? null), "contestDuration", [], "any", false, false, false, 79), "html", null, true);
            echo "
                    ";
        }
        // line 81
        echo "                </td>
            </tr>
        </table>
    </div>
</div>

<style>
    code[data-password], code[data-password-hidden] {
        cursor: pointer;
    }
</style>

<script>
    \$(function() {
        var \$password = \$('code[data-password]');
        var \$passwordHidden = \$('code[data-password-hidden]');
        \$password.on('click', function() {
            \$password.addClass('d-none');
            \$passwordHidden.removeClass('d-none');
        });
        \$passwordHidden.on('click', function() {
            \$passwordHidden.addClass('d-none');
            \$password.removeClass('d-none');
        });
    });
</script>
";
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    public function getTemplateName()
    {
        return "jury/partials/external_contest_source_info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 81,  190 => 79,  186 => 78,  182 => 77,  177 => 76,  171 => 74,  169 => 73,  165 => 72,  156 => 66,  149 => 61,  141 => 59,  137 => 57,  135 => 56,  124 => 50,  119 => 47,  111 => 42,  102 => 35,  99 => 34,  93 => 31,  89 => 29,  87 => 28,  81 => 25,  76 => 23,  68 => 18,  59 => 12,  55 => 11,  47 => 6,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/partials/external_contest_source_info.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/partials/external_contest_source_info.html.twig");
    }
}
