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

/* jury/partials/judgehost_judgings.html.twig */
class __TwigTemplate_bcd54c7e7fb6d22f878ef0199af9aa5d8a9b9cdf5f2851ec9d955e88bd055d91 extends Template
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
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/judgehost_judgings.html.twig"));

        // line 1
        if ( !($context["judgings"] ?? null)) {
            // line 2
            echo "    <div class=\"alert alert-warning\">No judgings</div>
";
        } else {
            // line 4
            echo "    <table class=\"data-table table table-sm table-striped col-lg-4\">
        <thead>
        <tr>
            <th>ID</th>
            <th>started</th>
            <th>runtime</th>
            <th>result</th>
            <th>valid</th>
            <th>verified</th>
        </tr>
        </thead>
        <tbody>
        ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["judgings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["judging"]) {
                // line 17
                echo "            ";
                $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission_by_judging", ["jid" => twig_get_attribute($this->env, $this->source, $context["judging"], "judgingid", [], "any", false, false, false, 17)]);
                // line 18
                echo "            <tr class=\"";
                if ( !twig_get_attribute($this->env, $this->source, $context["judging"], "valid", [], "any", false, false, false, 18)) {
                    echo "disabled";
                }
                echo "\">
                <td><a href=\"";
                // line 19
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["judging"], "judgingid", [], "any", false, false, false, 19), "html", null, true);
                echo "</a></td>
                <td><a href=\"";
                // line 20
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, $context["judging"], "starttime", [], "any", false, false, false, 20)), "html", null, true);
                echo "</a></td>
                <td>
                    <a href=\"";
                // line 22
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">
                        ";
                // line 23
                if (twig_get_attribute($this->env, $this->source, $context["judging"], "aborted", [], "any", false, false, false, 23)) {
                    // line 24
                    echo "                            [aborted]
                        ";
                } else {
                    // line 26
                    echo "                            ";
                    echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtimediff(twig_get_attribute($this->env, $this->source, $context["judging"], "starttime", [], "any", false, false, false, 26), twig_get_attribute($this->env, $this->source, $context["judging"], "endtime", [], "any", false, false, false, 26)), "html", null, true);
                    echo "
                        ";
                }
                // line 28
                echo "                    </a>
                </td>
                <td>
                    <a href=\"";
                // line 31
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">
                        ";
                // line 32
                echo $this->extensions['App\Twig\TwigExtension']->printResult(twig_get_attribute($this->env, $this->source, $context["judging"], "result", [], "any", false, false, false, 32), twig_get_attribute($this->env, $this->source, $context["judging"], "valid", [], "any", false, false, false, 32));
                echo "
                        ";
                // line 33
                if (twig_get_attribute($this->env, $this->source, $context["judging"], "stillBusy", [], "any", false, false, false, 33)) {
                    // line 34
                    echo "                            (&hellip;)
                        ";
                }
                // line 36
                echo "                    </a>
                </td>
                <td><a href=\"";
                // line 38
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, $context["judging"], "valid", [], "any", false, false, false, 38)), "html", null, true);
                echo "</a></td>
                <td><a href=\"";
                // line 39
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, $context["judging"], "verified", [], "any", false, false, false, 39)), "html", null, true);
                echo "</a></td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['judging'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "        </tbody>
    </table>
";
        }
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    public function getTemplateName()
    {
        return "jury/partials/judgehost_judgings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 42,  132 => 39,  126 => 38,  122 => 36,  118 => 34,  116 => 33,  112 => 32,  108 => 31,  103 => 28,  97 => 26,  93 => 24,  91 => 23,  87 => 22,  80 => 20,  74 => 19,  67 => 18,  64 => 17,  60 => 16,  46 => 4,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/partials/judgehost_judgings.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/partials/judgehost_judgings.html.twig");
    }
}
