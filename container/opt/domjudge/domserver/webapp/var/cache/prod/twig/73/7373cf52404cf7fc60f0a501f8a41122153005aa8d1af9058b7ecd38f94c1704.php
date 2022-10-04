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

/* jury/partials/balloon_list.html.twig */
class __TwigTemplate_78a6c05d12bdbed7351e29eb4ffd935bb7c5ee68850df93dcd677879498b4e7d extends Template
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
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/balloon_list.html.twig"));

        // line 3
        echo "
";
        // line 4
        if (twig_test_empty(($context["balloons"] ?? null))) {
            // line 5
            echo "    <div class=\"alert alert-warning\">No balloons</div>
";
        } else {
            // line 7
            echo "    <table class=\"data-table table table-hover table-striped table-sm balloons-table\" style=\"width:auto\">
        <thead class=\"thead-light\">
        <tr>
            <th scope=\"col\">&nbsp;</th>
            <th scope=\"col\">ID</th>
            <th scope=\"col\">time</th>
            <th scope=\"col\">solved</th>
            <th scope=\"col\">team</th>
            <th scope=\"col\">affiliation</th>
            <th scope=\"col\">location</th>
            <th scope=\"col\">category</th>
            <th scope=\"col\">total</th>
            <th scope=\"col\">awards</th>
            <th scope=\"col\"></th>
        </tr>
        </thead>
        <tbody>";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["balloons"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["balloon"]) {
                // line 25
                echo "            <tr class=\"";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["balloon"], "data", [], "any", false, false, false, 25), "done", [], "any", false, false, false, 25)) {
                    echo "disabled";
                }
                echo "\"
                data-affiliation-id=\"";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["balloon"], "data", [], "any", false, false, false, 26), "affiliationid", [], "any", false, false, false, 26), "html", null, true);
                echo "\"
                data-location-str=\"";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["balloon"], "data", [], "any", false, false, false, 27), "location", [], "any", false, false, false, 27), "html", null, true);
                echo "\">
                <td>";
                // line 29
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["balloon"], "data", [], "any", false, false, false, 29), "done", [], "any", false, false, false, 29)) {
                    // line 30
                    echo "<i class=\"far fa-check-circle\"></i>";
                } else {
                    // line 32
                    echo "<i class=\"far fa-hourglass\"></i>";
                }
                // line 34
                echo "<td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["balloon"], "data", [], "any", false, false, false, 34), "balloonid", [], "any", false, false, false, 34), "html", null, true);
                echo "</td>
                <td data-order=\"";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["balloon"], "data", [], "any", false, false, false, 35), "time", [], "any", false, false, false, 35), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["balloon"], "data", [], "any", false, false, false, 35), "time", [], "any", false, false, false, 35)), "html", null, true);
                echo "</td>
                <td>";
                // line 36
                echo $this->extensions['App\Twig\TwigExtension']->problemBadge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["balloon"], "data", [], "any", false, false, false, 36), "contestproblem", [], "any", false, false, false, 36));
                echo "</td>
                <td>";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["balloon"], "data", [], "any", false, false, false, 37), "team", [], "any", false, false, false, 37)), "truncate", [0 => ($context["teamname_max_length"] ?? null), 1 => "…"], "method", false, false, false, 37), "html", null, true);
                echo "</td>
                <td>";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["balloon"], "data", [], "any", false, false, false, 38), "affiliation", [], "any", false, false, false, 38), "html", null, true);
                echo "</td>
                <td>";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["balloon"], "data", [], "any", false, false, false, 39), "location", [], "any", false, false, false, 39), "html", null, true);
                echo "</td>
                <td>";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["balloon"], "data", [], "any", false, false, false, 40), "category", [], "any", false, false, false, 40), "html", null, true);
                echo "</td>
                <td>";
                // line 42
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["balloon"], "data", [], "any", false, false, false, 42), "total", [], "any", false, false, false, 42));
                foreach ($context['_seq'] as $context["_key"] => $context["totalballoon"]) {
                    // line 43
                    echo $this->extensions['App\Twig\TwigExtension']->problemBadge($context["totalballoon"]);
                    echo "&nbsp;";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['totalballoon'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "</td>
                <td>";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["balloon"], "data", [], "any", false, false, false, 46), "awards", [], "any", false, false, false, 46), "html", null, true);
                echo "</td>
                <td>";
                // line 48
                if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["balloon"], "data", [], "any", false, false, false, 48), "done", [], "any", false, false, false, 48)) {
                    // line 49
                    $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_balloons_setdone", ["balloonId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["balloon"], "data", [], "any", false, false, false, 49), "balloonid", [], "any", false, false, false, 49)]);
                    // line 50
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                    echo "\" title=\"mark balloon as done\">
                    <i class=\"fas fa-running\"></i>
                    </a>
                </td>";
                }
                // line 55
                echo "</tr>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['balloon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "
        </tbody>
    </table>

";
        }
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    public function getTemplateName()
    {
        return "jury/partials/balloon_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 57,  155 => 55,  147 => 50,  145 => 49,  143 => 48,  139 => 46,  136 => 45,  129 => 43,  125 => 42,  121 => 40,  117 => 39,  113 => 38,  109 => 37,  105 => 36,  99 => 35,  94 => 34,  91 => 32,  88 => 30,  86 => 29,  82 => 27,  78 => 26,  71 => 25,  67 => 24,  49 => 7,  45 => 5,  43 => 4,  40 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/partials/balloon_list.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/partials/balloon_list.html.twig");
    }
}
