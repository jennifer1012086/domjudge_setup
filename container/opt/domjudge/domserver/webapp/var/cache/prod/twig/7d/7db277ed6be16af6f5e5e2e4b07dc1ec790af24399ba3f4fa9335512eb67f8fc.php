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

/* jury/partials/rejudging_matrix.html.twig */
class __TwigTemplate_d3a45d2cd5710e9644d052fb86e2f7e233aa85e89f8a20190c0268c98af5ba6d extends Template
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
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/rejudging_matrix.html.twig"));

        // line 1
        echo "<div class=\"mt-2\">
    <h2>Overview of changes</h2>
    <table class=\"rejudgetable\">
        <tr>
            <th title=\"old vs. new verdicts\">-\\+</th>
            ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["verdicts"] ?? null));
        foreach ($context['_seq'] as $context["verdict"] => $context["abbreviation"]) {
            // line 7
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, ($context["used"] ?? null), $context["verdict"], [], "array", true, true, false, 7)) {
                // line 8
                echo "                    <th title=\"";
                echo twig_escape_filter($this->env, $context["verdict"], "html", null, true);
                echo " (new)\">";
                echo twig_escape_filter($this->env, $context["abbreviation"], "html", null, true);
                echo "</th>
                ";
            }
            // line 10
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['verdict'], $context['abbreviation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "        </tr>

        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["verdictTable"] ?? null));
        foreach ($context['_seq'] as $context["originalVerdict"] => $context["changedVerdicts"]) {
            // line 14
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["used"] ?? null), $context["originalVerdict"], [], "array", true, true, false, 14)) {
                // line 15
                echo "                <tr>
                    <th title=\"";
                // line 16
                echo twig_escape_filter($this->env, $context["originalVerdict"], "html", null, true);
                echo " (old)\">";
                echo twig_escape_filter($this->env, (($__internal_compile_0 = ($context["verdicts"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["originalVerdict"]] ?? null) : null), "html", null, true);
                echo "</th>
                    ";
                // line 17
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["changedVerdicts"]);
                foreach ($context['_seq'] as $context["newVerdict"] => $context["submitIds"]) {
                    // line 18
                    echo "                        ";
                    if (twig_get_attribute($this->env, $this->source, ($context["used"] ?? null), $context["newVerdict"], [], "array", true, true, false, 18)) {
                        // line 19
                        echo "                            ";
                        $context["numSubmissions"] = twig_length_filter($this->env, $context["submitIds"]);
                        // line 20
                        echo "                            ";
                        $context["link"] = null;
                        // line 21
                        echo "                            ";
                        if ((0 === twig_compare($context["originalVerdict"], $context["newVerdict"]))) {
                            // line 22
                            echo "                                ";
                            $context["class"] = "identical";
                            // line 23
                            echo "                            ";
                        } elseif ((0 === twig_compare(($context["numSubmissions"] ?? null), 0))) {
                            // line 24
                            echo "                                ";
                            $context["class"] = "zero";
                            // line 25
                            echo "                            ";
                        } else {
                            // line 26
                            echo "                                ";
                            $context["class"] = "changed";
                            // line 27
                            echo "                                ";
                            $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_rejudging", ["rejudgingId" => twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "rejudgingid", [], "any", false, false, false, 27), "view" => "all", "oldverdict" => $context["originalVerdict"], "newverdict" => $context["newVerdict"]]);
                            // line 28
                            echo "                            ";
                        }
                        // line 29
                        echo "                            <td class=\"";
                        echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
                        echo "\">
                                ";
                        // line 30
                        if ( !(null === ($context["link"] ?? null))) {
                            // line 31
                            echo "                                    <a href=\"";
                            echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, ($context["numSubmissions"] ?? null), "html", null, true);
                            echo "</a>
                                ";
                        } else {
                            // line 33
                            echo "                                    ";
                            echo twig_escape_filter($this->env, ($context["numSubmissions"] ?? null), "html", null, true);
                            echo "
                                ";
                        }
                        // line 35
                        echo "                            </td>
                        ";
                    }
                    // line 37
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['newVerdict'], $context['submitIds'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "                </tr>
            ";
            }
            // line 40
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['originalVerdict'], $context['changedVerdicts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "    </table>
</div>
";
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    public function getTemplateName()
    {
        return "jury/partials/rejudging_matrix.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 41,  160 => 40,  156 => 38,  150 => 37,  146 => 35,  140 => 33,  132 => 31,  130 => 30,  125 => 29,  122 => 28,  119 => 27,  116 => 26,  113 => 25,  110 => 24,  107 => 23,  104 => 22,  101 => 21,  98 => 20,  95 => 19,  92 => 18,  88 => 17,  82 => 16,  79 => 15,  76 => 14,  72 => 13,  68 => 11,  62 => 10,  54 => 8,  51 => 7,  47 => 6,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/partials/rejudging_matrix.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/partials/rejudging_matrix.html.twig");
    }
}
