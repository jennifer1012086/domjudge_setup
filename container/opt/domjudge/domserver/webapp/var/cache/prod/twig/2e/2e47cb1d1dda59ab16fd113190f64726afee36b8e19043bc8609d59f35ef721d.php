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

/* team/partials/clarification.html.twig */
class __TwigTemplate_13599712fb2758c865b0f9957efc0421acc925b220f9ba90aff3bc4cd02cb91d extends Template
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
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "team/partials/clarification.html.twig"));

        // line 1
        echo "<div class=\"card mb-3\">
    <div class=\"card-header\">
        <div class=\"row\">
            <div class=\"col-sm\">
                Subject:
                ";
        // line 6
        if (twig_get_attribute($this->env, $this->source, ($context["clarification"] ?? null), "problem", [], "any", false, false, false, 6)) {
            // line 7
            echo "                    Problem ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["clarification"] ?? null), "problem", [], "any", false, false, false, 7), "contestProblems", [], "any", false, false, false, 7), "first", [], "any", false, false, false, 7), "shortname", [], "any", false, false, false, 7), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["clarification"] ?? null), "problem", [], "any", false, false, false, 7), "name", [], "any", false, false, false, 7), "html", null, true);
            echo "
                ";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 8
($context["clarification"] ?? null), "category", [], "any", false, false, false, 8)) {
            // line 9
            echo "                    ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["categories"] ?? null), twig_get_attribute($this->env, $this->source, ($context["clarification"] ?? null), "category", [], "any", false, false, false, 9), [], "array", true, true, false, 9)) ? (_twig_default_filter((($__internal_compile_0 = ($context["categories"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, ($context["clarification"] ?? null), "category", [], "any", false, false, false, 9)] ?? null) : null), "general")) : ("general")), "html", null, true);
            echo "
                ";
        } else {
            // line 11
            echo "                    General issue
                ";
        }
        // line 13
        echo "            </div>
            <div class=\"col-sm text-muted text-right\">";
        // line 14
        echo $this->extensions['App\Twig\TwigExtension']->printtimeHover(twig_get_attribute($this->env, $this->source, ($context["clarification"] ?? null), "submittime", [], "any", false, false, false, 14), twig_get_attribute($this->env, $this->source, ($context["clarification"] ?? null), "contest", [], "any", false, false, false, 14));
        echo "</div>
        </div>
    </div>
    <div class=\"card-body\">
        <div class=\"card-title\">
            <div class=\"row\">
                <div class=\"col-sm\">
                    From:
                    ";
        // line 22
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["clarification"] ?? null), "sender", [], "any", false, false, false, 22))) {
            // line 23
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["clarification"] ?? null), "sender", [], "any", false, false, false, 23), "effectiveName", [], "any", false, false, false, 23), "html", null, true);
            echo " (t";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["clarification"] ?? null), "sender", [], "any", false, false, false, 23), "teamid", [], "any", false, false, false, 23), "html", null, true);
            echo ")
                    ";
        } else {
            // line 25
            echo "                        Jury
                    ";
        }
        // line 27
        echo "                </div>
                <div class=\"col-sm\">To:
                    ";
        // line 29
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["clarification"] ?? null), "recipient", [], "any", false, false, false, 29))) {
            // line 30
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["clarification"] ?? null), "recipient", [], "any", false, false, false, 30), "effectiveName", [], "any", false, false, false, 30), "html", null, true);
            echo " (t";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["clarification"] ?? null), "recipient", [], "any", false, false, false, 30), "teamid", [], "any", false, false, false, 30), "html", null, true);
            echo ")
                    ";
        } elseif ( !(null === twig_get_attribute($this->env, $this->source,         // line 31
($context["clarification"] ?? null), "sender", [], "any", false, false, false, 31))) {
            // line 32
            echo "                        Jury
                    ";
        } else {
            // line 34
            echo "                        <strong>All</strong>
                    ";
        }
        // line 36
        echo "                </div>
            </div>
        </div>

        <div class=\"card-text\">
            <pre class=\"output-text bg-light p-3\">";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->wrapUnquoted(twig_get_attribute($this->env, $this->source, ($context["clarification"] ?? null), "body", [], "any", false, false, false, 41), 78), "html", null, true);
        echo "</pre>
        </div>
    </div>
</div>
";
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    public function getTemplateName()
    {
        return "team/partials/clarification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 41,  119 => 36,  115 => 34,  111 => 32,  109 => 31,  102 => 30,  100 => 29,  96 => 27,  92 => 25,  84 => 23,  82 => 22,  71 => 14,  68 => 13,  64 => 11,  58 => 9,  56 => 8,  49 => 7,  47 => 6,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "team/partials/clarification.html.twig", "/opt/domjudge/domserver/webapp/templates/team/partials/clarification.html.twig");
    }
}
