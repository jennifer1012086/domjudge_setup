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

/* team/partials/submission_list.html.twig */
class __TwigTemplate_a3fa722f1e1a58374aeb9cec3ef8992ef8bb37f8a9be2e6de73d01d5931a83b1 extends Template
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
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "team/partials/submission_list.html.twig"));

        // line 3
        echo "
";
        // line 4
        if (twig_test_empty(($context["submissions"] ?? null))) {
            // line 5
            echo "    <div class=\"alert alert-warning\">No submissions</div>
";
        } else {
            // line 7
            echo "    <table class=\"data-table table table-hover table-striped table-sm submissions-table\">
        <thead class=\"thead-light\">
        <tr>
            <th scope=\"col\">time</th>
            <th scope=\"col\">problem</th>
            <th scope=\"col\">lang</th>
            <th scope=\"col\">result</th>
            ";
            // line 14
            if (($context["allowDownload"] ?? null)) {
                // line 15
                echo "                <th scope=\"col\"></th>
            ";
            }
            // line 17
            echo "        </tr>
        </thead>
        <tbody>";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["submissions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["submission"]) {
                // line 21
                echo "            ";
                $context["link"] = null;
                // line 22
                echo "            ";
                if ((((((-1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["submission"], "submittime", [], "any", false, false, false, 22), twig_get_attribute($this->env, $this->source, ($context["current_team_contest"] ?? null), "endtime", [], "any", false, false, false, 22))) && twig_get_attribute($this->env, $this->source, $context["submission"], "result", [], "any", false, false, false, 22)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 22), "first", [], "any", false, false, false, 22))) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 22), "first", [], "any", false, false, false, 22), "result", [], "any", false, false, false, 22))) && ( !($context["verificationRequired"] ?? null) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 22), "first", [], "any", false, false, false, 22), "verified", [], "any", false, false, false, 22)))) {
                    // line 23
                    echo "                ";
                    $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_submission", ["submitId" => twig_get_attribute($this->env, $this->source, $context["submission"], "submitid", [], "any", false, false, false, 23)]);
                    // line 24
                    echo "            ";
                }
                // line 25
                echo "
            ";
                // line 26
                $context["classes"] = "";
                // line 27
                echo "            ";
                if ( !twig_get_attribute($this->env, $this->source, $context["submission"], "valid", [], "any", false, false, false, 27)) {
                    // line 28
                    echo "                ";
                    $context["classes"] = (($context["classes"] ?? null) . " ignore");
                    // line 29
                    echo "            ";
                }
                // line 30
                echo "            ";
                if ((twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 30), "first", [], "any", false, false, false, 30)) ||  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 30), "first", [], "any", false, false, false, 30), "seen", [], "any", false, false, false, 30))) {
                    // line 31
                    echo "                ";
                    $context["classes"] = (($context["classes"] ?? null) . " unseen");
                    // line 32
                    echo "            ";
                }
                // line 33
                echo "            <tr class=\"";
                echo twig_escape_filter($this->env, ($context["classes"] ?? null), "html", null, true);
                echo "\">
                <td>
                    <a data-ajax-modal data-ajax-modal-after=\"markSeen\" ";
                // line 35
                if (($context["link"] ?? null)) {
                    echo "href=\"";
                    echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                    echo "\"";
                }
                echo ">
                        ";
                // line 36
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, $context["submission"], "submittime", [], "any", false, false, false, 36), null, twig_get_attribute($this->env, $this->source, $context["submission"], "contest", [], "any", false, false, false, 36)), "html", null, true);
                echo "
                    </a>
                </td>
                <td class=\"probid\">
                    <a data-ajax-modal data-ajax-modal-after=\"markSeen\" ";
                // line 40
                if (($context["link"] ?? null)) {
                    echo "href=\"";
                    echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                    echo "\"";
                }
                echo " title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "problem", [], "any", false, false, false, 40), "name", [], "any", false, false, false, 40), "html", null, true);
                echo "\">
                        ";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "contestProblem", [], "any", false, false, false, 41), "shortname", [], "any", false, false, false, 41), "html", null, true);
                echo "
                    </a>
                </td>
                <td class=\"langid\">
                    <a data-ajax-modal data-ajax-modal-after=\"markSeen\" ";
                // line 45
                if (($context["link"] ?? null)) {
                    echo "href=\"";
                    echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                    echo "\"";
                }
                echo " title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "language", [], "any", false, false, false, 45), "name", [], "any", false, false, false, 45), "html", null, true);
                echo "\">
                        ";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "language", [], "any", false, false, false, 46), "langid", [], "any", false, false, false, 46), "html", null, true);
                echo "
                    </a>
                </td>
                <td>
                    <a data-ajax-modal data-ajax-modal-after=\"markSeen\" ";
                // line 50
                if (($context["link"] ?? null)) {
                    echo "href=\"";
                    echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                    echo "\"";
                }
                echo ">";
                // line 51
                if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["submission"], "submittime", [], "any", false, false, false, 51), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "contest", [], "any", false, false, false, 51), "endtime", [], "any", false, false, false, 51)))) {
                    // line 52
                    echo "                            ";
                    echo $this->extensions['App\Twig\TwigExtension']->printResult("too-late");
                } elseif ((twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 53
$context["submission"], "judgings", [], "any", false, false, false, 53), "first", [], "any", false, false, false, 53)) || twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 53), "first", [], "any", false, false, false, 53), "result", [], "any", false, false, false, 53)))) {
                    // line 54
                    echo $this->extensions['App\Twig\TwigExtension']->printResult("");
                } elseif ((                // line 55
($context["verificationRequired"] ?? null) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 55), "first", [], "any", false, false, false, 55), "verified", [], "any", false, false, false, 55))) {
                    // line 56
                    echo $this->extensions['App\Twig\TwigExtension']->printResult("");
                } else {
                    // line 58
                    echo $this->extensions['App\Twig\TwigExtension']->printResult(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 58), "first", [], "any", false, false, false, 58), "result", [], "any", false, false, false, 58));
                }
                // line 60
                echo "                    </a>
                </td>
        ";
                // line 62
                if (($context["allowDownload"] ?? null)) {
                    // line 63
                    echo "                <td>
                    <a title=\"Download submission ZIP\" aria-label=\"download submission zip\" class=\"btn btn-light\" href=\"";
                    // line 64
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_submission_download", ["submitId" => twig_get_attribute($this->env, $this->source, $context["submission"], "submitid", [], "any", false, false, false, 64)]), "html", null, true);
                    echo "\">
                        <i class=\"fa fa-file-archive\"></i>
                    </a>
                </td>
        ";
                }
                // line 69
                echo "            </tr>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['submission'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "        </tbody>
    </table>
";
        }
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    public function getTemplateName()
    {
        return "team/partials/submission_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 71,  203 => 69,  195 => 64,  192 => 63,  190 => 62,  186 => 60,  183 => 58,  180 => 56,  178 => 55,  176 => 54,  174 => 53,  171 => 52,  169 => 51,  162 => 50,  155 => 46,  145 => 45,  138 => 41,  128 => 40,  121 => 36,  113 => 35,  107 => 33,  104 => 32,  101 => 31,  98 => 30,  95 => 29,  92 => 28,  89 => 27,  87 => 26,  84 => 25,  81 => 24,  78 => 23,  75 => 22,  72 => 21,  68 => 20,  64 => 17,  60 => 15,  58 => 14,  49 => 7,  45 => 5,  43 => 4,  40 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "team/partials/submission_list.html.twig", "/opt/domjudge/domserver/webapp/templates/team/partials/submission_list.html.twig");
    }
}
