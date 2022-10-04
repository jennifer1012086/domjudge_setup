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

/* jury/partials/clarification_list.html.twig */
class __TwigTemplate_fce2538242378d71384fadf4f0782842c60763d9f700f64318ad2a57176e48c7 extends Template
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
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/clarification_list.html.twig"));

        // line 1
        echo "<div class=\"table-wrapper\">
<table class=\"data-table table table-striped table-hover table-sm\" style=\"width:auto\">
    <thead>
    <tr>
        <th scope=\"col\">ID</th>
        ";
        // line 6
        if (($context["showExternalId"] ?? null)) {
            // line 7
            echo "            <th scope=\"col\">external ID</th>
        ";
        }
        // line 9
        if ((1 === twig_compare(twig_length_filter($this->env, ($context["current_contests"] ?? null)), 1))) {
            // line 10
            echo "
            <th scope=\"col\">contest</th>";
        }
        // line 13
        echo "
        <th scope=\"col\">time</th>
        <th scope=\"col\">from</th>
        <th scope=\"col\">to</th>
        <th scope=\"col\">subject</th>

        <th scope=\"col\">text</th>
        <th scope=\"col\">state</th>
        <th scope=\"col\">who</th>
        ";
        // line 22
        if ((1 === twig_compare(twig_length_filter($this->env, ($context["queues"] ?? null)), 1))) {
            // line 23
            echo "             <th scope=\"col\">queue</th>
        ";
        }
        // line 25
        echo "    </tr>
    </thead>
    <tbody>";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["clarifications"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["clarification"]) {
            // line 29
            $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_clarification", ["id" => twig_get_attribute($this->env, $this->source, $context["clarification"], "clarid", [], "any", false, false, false, 29)]);
            // line 30
            echo "
        <tr>
            <td><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clarification"], "clarid", [], "any", false, false, false, 32), "html", null, true);
            echo "</a></td>
            ";
            // line 33
            if (($context["showExternalId"] ?? null)) {
                // line 34
                echo "                <td><a href=\"";
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clarification"], "externalid", [], "any", false, false, false, 34), "html", null, true);
                echo "</a></td>
            ";
            }
            // line 36
            if ((1 === twig_compare(twig_length_filter($this->env, ($context["current_contests"] ?? null)), 1))) {
                // line 37
                echo "
                <td><a href=\"";
                // line 38
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["clarification"], "contest", [], "any", false, false, false, 38), "shortname", [], "any", false, false, false, 38), "html", null, true);
                echo "</a></td>";
            }
            // line 40
            echo "
            <td data-order=\"";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clarification"], "submittime", [], "any", false, false, false, 41), "html", null, true);
            echo "\"><a href=\"";
            echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, $context["clarification"], "submittime", [], "any", false, false, false, 41), null, twig_get_attribute($this->env, $this->source, $context["clarification"], "contest", [], "any", false, false, false, 41)), "html", null, true);
            echo "</a></td>";
            // line 42
            if ((null === twig_get_attribute($this->env, $this->source, $context["clarification"], "sender", [], "any", false, false, false, 42))) {
                // line 43
                $context["sender"] = "Jury";
                // line 44
                if ((null === twig_get_attribute($this->env, $this->source, $context["clarification"], "recipient", [], "any", false, false, false, 44))) {
                    // line 45
                    $context["recipient"] = "All";
                } else {
                    // line 47
                    $context["recipient"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["clarification"], "recipient", [], "any", false, false, false, 47), "effectiveName", [], "any", false, false, false, 47);
                }
            } else {
                // line 50
                $context["recipient"] = "Jury";
                // line 51
                $context["sender"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["clarification"], "sender", [], "any", false, false, false, 51), "effectiveName", [], "any", false, false, false, 51);
            }
            // line 53
            echo "
            <td><a href=\"";
            // line 54
            echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, ($context["sender"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(($context["sender"] ?? null)), "truncate", [0 => ($context["teamname_max_length"] ?? null), 1 => "…"], "method", false, false, false, 54), "html", null, true);
            echo "</a></td>
            <td><a href=\"";
            // line 55
            echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, ($context["recipient"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(($context["recipient"] ?? null)), "truncate", [0 => ($context["teamname_max_length"] ?? null), 1 => "…"], "method", false, false, false, 55), "html", null, true);
            echo "</a></td>
            <td><a href=\"";
            // line 56
            echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
            echo "\">";
            // line 57
            if (twig_get_attribute($this->env, $this->source, $context["clarification"], "problem", [], "any", false, false, false, 57)) {
                // line 58
                echo "problem ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["clarification"], "problem", [], "any", false, false, false, 58), "contestProblems", [], "any", false, false, false, 58), "first", [], "any", false, false, false, 58), "shortname", [], "any", false, false, false, 58), "html", null, true);
            } elseif (twig_get_attribute($this->env, $this->source,             // line 59
$context["clarification"], "category", [], "any", false, false, false, 59)) {
                // line 60
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["categories"] ?? null), twig_get_attribute($this->env, $this->source, $context["clarification"], "category", [], "any", false, false, false, 60), [], "array", true, true, false, 60)) ? (_twig_default_filter((($__internal_compile_0 = ($context["categories"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["clarification"], "category", [], "any", false, false, false, 60)] ?? null) : null), "general")) : ("general")), "html", null, true);
            } else {
                // line 62
                echo "general";
            }
            // line 64
            echo "</a></td>

            <td><a href=\"";
            // line 66
            echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clarification"], "summary", [], "any", false, false, false, 66), "html", null, true);
            echo "</a></td>";
            // line 67
            $context["claim"] = false;
            // line 68
            if (twig_get_attribute($this->env, $this->source, $context["clarification"], "answered", [], "any", false, false, false, 68)) {
                // line 69
                $context["answered"] = "<i class=\"fas fa-check\" title=\"is answered\"></i>";
            } else {
                // line 71
                $context["answered"] = "<i class=\"fas fa-times\" title=\"not answered\"></i>";
                // line 72
                if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["clarification"], "juryMember", [], "any", false, false, false, 72))) {
                    // line 73
                    $context["claim"] = "yes";
                } else {
                    // line 75
                    $context["answered"] = "<i class=\"fas fa-user-lock\" title=\"claimed\"></i>";
                }
            }
            // line 78
            echo "
            <td><a href=\"";
            // line 79
            echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
            echo "\">";
            echo ($context["answered"] ?? null);
            echo "</a></td>
            <td><form action=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_clarification_claim", ["clarId" => twig_get_attribute($this->env, $this->source, $context["clarification"], "clarid", [], "any", false, false, false, 80)]), "html", null, true);
            echo "\" method=\"post\" class=\"form-inline\">";
            // line 81
            if ((($context["claim"] ?? null) && twig_get_attribute($this->env, $this->source, $context["clarification"], "sender", [], "any", false, false, false, 81))) {
                // line 82
                echo "<button name=\"claimed\" value=\"1\"
                       class=\"btn btn-outline-success btn-sm\">Claim</button>";
            } elseif (( !twig_get_attribute($this->env, $this->source,             // line 84
$context["clarification"], "answered", [], "any", false, false, false, 84) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 84), "username", [], "any", false, false, false, 84), twig_get_attribute($this->env, $this->source, $context["clarification"], "juryMember", [], "any", false, false, false, 84))))) {
                // line 85
                echo "                    <button name=\"claimed\" value=\"0\"
                       class=\"btn btn-outline-success btn-sm\">Unclaim</button>";
            } else {
                // line 88
                echo "<a href=\"";
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["clarification"], "juryMember", [], "any", true, true, false, 88)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["clarification"], "juryMember", [], "any", false, false, false, 88), "")) : ("")), "html", null, true);
                echo "</a>";
            }
            // line 90
            echo "</form>
            </td>
";
            // line 92
            if ((1 === twig_compare(twig_length_filter($this->env, ($context["queues"] ?? null)), 1))) {
                // line 93
                echo "            <td data-search=\"";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["queues"] ?? null), twig_get_attribute($this->env, $this->source, $context["clarification"], "queue", [], "any", false, false, false, 93), [], "array", true, true, false, 93)) ? (_twig_default_filter((($__internal_compile_1 = ($context["queues"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["clarification"], "queue", [], "any", false, false, false, 93)] ?? null) : null), "")) : ("")), "html", null, true);
                echo "\">
            <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                 <div class=\"input-group-prepend\"><div class=\"input-group-text\" id=\"qig";
                // line 95
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clarification"], "clarid", [], "any", false, false, false, 95), "html", null, true);
                echo "\"><i class=\"fab fa-quora\"></i></div></div>
                 ";
                // line 96
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["queues"] ?? null));
                foreach ($context['_seq'] as $context["qk"] => $context["qv"]) {
                    // line 97
                    echo "                 <label class=\"btn btn-sm btn-outline-secondary";
                    if ((0 === twig_compare($context["qk"], twig_get_attribute($this->env, $this->source, $context["clarification"], "queue", [], "any", false, false, false, 97)))) {
                        echo " active";
                    }
                    echo "\">
                 <input class=\"qbut\" type=\"radio\" name=\"queue[";
                    // line 98
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clarification"], "clarid", [], "any", false, false, false, 98), "html", null, true);
                    echo "]\" data-clarid=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clarification"], "clarid", [], "any", false, false, false, 98), "html", null, true);
                    echo "\" id=\"q_";
                    echo twig_escape_filter($this->env, $context["qk"], "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, $context["qk"], "html", null, true);
                    echo "\" autocomplete=\"off\"";
                    if ((0 === twig_compare($context["qk"], twig_get_attribute($this->env, $this->source, $context["clarification"], "queue", [], "any", false, false, false, 98)))) {
                        echo " checked";
                    }
                    echo "> ";
                    echo twig_escape_filter($this->env, $context["qv"], "html", null, true);
                    echo "
                 </label>
                 ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['qk'], $context['qv'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 101
                echo "            </div>
            </td>
";
            }
            // line 104
            echo "        </tr>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['clarification'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "
    </tbody>
</table>
</div>
";
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    public function getTemplateName()
    {
        return "jury/partials/clarification_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  296 => 106,  290 => 104,  285 => 101,  264 => 98,  257 => 97,  253 => 96,  249 => 95,  243 => 93,  241 => 92,  237 => 90,  230 => 88,  226 => 85,  224 => 84,  221 => 82,  219 => 81,  216 => 80,  210 => 79,  207 => 78,  203 => 75,  200 => 73,  198 => 72,  196 => 71,  193 => 69,  191 => 68,  189 => 67,  184 => 66,  180 => 64,  177 => 62,  174 => 60,  172 => 59,  169 => 58,  167 => 57,  164 => 56,  156 => 55,  148 => 54,  145 => 53,  142 => 51,  140 => 50,  136 => 47,  133 => 45,  131 => 44,  129 => 43,  127 => 42,  120 => 41,  117 => 40,  111 => 38,  108 => 37,  106 => 36,  98 => 34,  96 => 33,  90 => 32,  86 => 30,  84 => 29,  80 => 28,  76 => 25,  72 => 23,  70 => 22,  59 => 13,  55 => 10,  53 => 9,  49 => 7,  47 => 6,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/partials/clarification_list.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/partials/clarification_list.html.twig");
    }
}
