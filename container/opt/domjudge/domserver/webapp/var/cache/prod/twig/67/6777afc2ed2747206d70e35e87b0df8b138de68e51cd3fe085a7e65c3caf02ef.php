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

/* team/partials/clarification_list.html.twig */
class __TwigTemplate_9a1a326583e42161f477b8283fe537422109ff12b85e7736bd0d5ea9e6bf7c71 extends Template
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
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "team/partials/clarification_list.html.twig"));

        // line 1
        echo "<div class=\"table-wrapper\">
    <table class=\"data-table table table-striped table-hover table-sm\" style=\"width:100%;\">
        <thead class=\"thead-light\">
        <tr>
            <th scope=\"col\">time</th>
            <th scope=\"col\">from</th>
            <th scope=\"col\">to</th>
            <th scope=\"col\">subject</th>
            <th scope=\"col\">text</th>
        </tr>
        </thead>
        <tbody>";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["clarifications"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["clarification"]) {
            // line 14
            $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_clarification", ["clarId" => twig_get_attribute($this->env, $this->source, $context["clarification"], "clarid", [], "any", false, false, false, 14)]);
            // line 15
            echo "
            <tr class=\"";
            // line 16
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "unreadClarifications", [], "any", false, false, false, 16), "contains", [0 => $context["clarification"]], "method", false, false, false, 16)) {
                echo "unseen";
            }
            echo "\">
                <td>
                    <a data-ajax-modal data-ajax-modal-after=\"markSeen\" href=\"";
            // line 18
            echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
            echo "\">
                        ";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, $context["clarification"], "submittime", [], "any", false, false, false, 19), null, twig_get_attribute($this->env, $this->source, $context["clarification"], "contest", [], "any", false, false, false, 19)), "html", null, true);
            echo "
                    </a>
                </td>";
            // line 22
            if ((null === twig_get_attribute($this->env, $this->source, $context["clarification"], "sender", [], "any", false, false, false, 22))) {
                // line 23
                $context["sender"] = "Jury";
                // line 24
                if ((null === twig_get_attribute($this->env, $this->source, $context["clarification"], "recipient", [], "any", false, false, false, 24))) {
                    // line 25
                    $context["recipient"] = "All";
                } else {
                    // line 27
                    $context["recipient"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["clarification"], "recipient", [], "any", false, false, false, 27), "effectiveName", [], "any", false, false, false, 27);
                }
            } else {
                // line 30
                $context["recipient"] = "Jury";
                // line 31
                $context["sender"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["clarification"], "sender", [], "any", false, false, false, 31), "effectiveName", [], "any", false, false, false, 31);
            }
            // line 33
            echo "
                <td>
                    <a data-ajax-modal data-ajax-modal-after=\"markSeen\" href=\"";
            // line 35
            echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, ($context["sender"] ?? null), "html", null, true);
            echo "\">
                        ";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(($context["sender"] ?? null)), "truncate", [0 => ($context["teamname_max_length"] ?? null), 1 => "…"], "method", false, false, false, 36), "html", null, true);
            echo "
                    </a>
                </td>
                <td>
                    <a data-ajax-modal data-ajax-modal-after=\"markSeen\" href=\"";
            // line 40
            echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, ($context["recipient"] ?? null), "html", null, true);
            echo "\">
                        ";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(($context["recipient"] ?? null)), "truncate", [0 => ($context["teamname_max_length"] ?? null), 1 => "…"], "method", false, false, false, 41), "html", null, true);
            echo "
                    </a>
                </td>
                <td>
                    <a data-ajax-modal data-ajax-modal-after=\"markSeen\" href=\"";
            // line 45
            echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
            echo "\">";
            // line 46
            if (twig_get_attribute($this->env, $this->source, $context["clarification"], "problem", [], "any", false, false, false, 46)) {
                // line 47
                echo "problem ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["clarification"], "problem", [], "any", false, false, false, 47), "contestProblems", [], "any", false, false, false, 47), "first", [], "any", false, false, false, 47), "shortname", [], "any", false, false, false, 47), "html", null, true);
            } elseif (twig_get_attribute($this->env, $this->source,             // line 48
$context["clarification"], "category", [], "any", false, false, false, 48)) {
                // line 49
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["categories"] ?? null), twig_get_attribute($this->env, $this->source, $context["clarification"], "category", [], "any", false, false, false, 49), [], "array", true, true, false, 49)) ? (_twig_default_filter((($__internal_compile_0 = ($context["categories"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["clarification"], "category", [], "any", false, false, false, 49)] ?? null) : null), "general")) : ("general")), "html", null, true);
            } else {
                // line 51
                echo "general";
            }
            // line 53
            echo "</a>
                </td>

                <td>
                    <a data-ajax-modal data-ajax-modal-after=\"markSeen\" href=\"";
            // line 57
            echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
            echo "\">
                        ";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clarification"], "summary", [], "any", false, false, false, 58), "html", null, true);
            echo "
                    </a>
                </td>
            </tr>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['clarification'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "
        </tbody>
    </table>
</div>
";
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    public function getTemplateName()
    {
        return "team/partials/clarification_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 63,  152 => 58,  148 => 57,  142 => 53,  139 => 51,  136 => 49,  134 => 48,  131 => 47,  129 => 46,  126 => 45,  119 => 41,  113 => 40,  106 => 36,  100 => 35,  96 => 33,  93 => 31,  91 => 30,  87 => 27,  84 => 25,  82 => 24,  80 => 23,  78 => 22,  73 => 19,  69 => 18,  62 => 16,  59 => 15,  57 => 14,  53 => 13,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "team/partials/clarification_list.html.twig", "/opt/domjudge/domserver/webapp/templates/team/partials/clarification_list.html.twig");
    }
}
