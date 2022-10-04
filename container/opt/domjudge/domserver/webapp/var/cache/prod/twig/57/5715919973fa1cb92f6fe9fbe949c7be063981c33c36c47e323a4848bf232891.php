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

/* jury/internal_error.html.twig */
class __TwigTemplate_d9113233ab9488f0de22f858cc0ab9e5e48699cc8863ad4914f05133c44f37a8 extends Template
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
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/internal_error.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/internal_error.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/internal_error.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Internal error e";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["internalError"] ?? null), "errorid", [], "any", false, false, false, 4), "html", null, true);
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
    <h1>Internal error e";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["internalError"] ?? null), "errorid", [], "any", false, false, false, 13), "html", null, true);
        echo "</h1>

    <div class=\"row\">
        <div class=\"col-lg-6\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>Description</th>
                    <td>
                        ";
        // line 21
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["internalError"] ?? null), "description", [], "any", false, false, false, 21))) {
            // line 22
            echo "                            <span class=\"nodata\">None</span>
                        ";
        } else {
            // line 24
            echo "                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["internalError"] ?? null), "description", [], "any", false, false, false, 24), "html", null, true);
            echo "
                        ";
        }
        // line 26
        echo "                    </td>
                </tr>
                <tr>
                    <th>Time</th>
                    <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, ($context["internalError"] ?? null), "time", [], "any", false, false, false, 30), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["internalError"] ?? null), "status", [], "any", false, false, false, 34)), "html", null, true);
        echo "</td>
                </tr>
                ";
        // line 36
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["internalError"] ?? null), "judging", [], "any", false, false, false, 36))) {
            // line 37
            echo "                    <tr>
                        <th>Related judging</th>
                        <td>
                            <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission_by_judging", ["jid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["internalError"] ?? null), "judging", [], "any", false, false, false, 40), "judgingid", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\">
                                j";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["internalError"] ?? null), "judging", [], "any", false, false, false, 41), "judgingid", [], "any", false, false, false, 41), "html", null, true);
            echo "
                            </a>
                        </td>
                    </tr>
                ";
        }
        // line 46
        echo "                ";
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["internalError"] ?? null), "affectedJudgings", [], "any", false, false, false, 46))) {
            // line 47
            echo "                    <tr>
                        <th>Additional affected judgings</th>
                        <td>
                            <ul>";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["internalError"] ?? null), "affectedJudgings", [], "any", false, false, false, 51));
            foreach ($context['_seq'] as $context["_key"] => $context["judging"]) {
                // line 52
                echo "<li>
                                    <a href=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission_by_judging", ["jid" => twig_get_attribute($this->env, $this->source, $context["judging"], "judgingid", [], "any", false, false, false, 53)]), "html", null, true);
                echo "\">
                                        j";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["judging"], "judgingid", [], "any", false, false, false, 54), "html", null, true);
                echo "
                                    </a>
                                </li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['judging'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "</ul>
                        </td>
                    </tr>
                ";
        }
        // line 62
        echo "                ";
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["internalError"] ?? null), "contest", [], "any", false, false, false, 62))) {
            // line 63
            echo "                    <tr>
                        <th>Related contest</th>
                        <td>
                            <a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contest", ["contestId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["internalError"] ?? null), "contest", [], "any", false, false, false, 66), "cid", [], "any", false, false, false, 66)]), "html", null, true);
            echo "\">
                                c";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["internalError"] ?? null), "contest", [], "any", false, false, false, 67), "cid", [], "any", false, false, false, 67), "html", null, true);
            echo "
                            </a>
                        </td>
                    </tr>
                ";
        }
        // line 72
        echo "                ";
        if ( !(null === ($context["affectedText"] ?? null))) {
            // line 73
            echo "                    <tr>
                        <th>Affected ";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["internalError"] ?? null), "disabled", [], "any", false, false, false, 74), "kind", [], "any", false, false, false, 74), "html", null, true);
            echo "</th>
                        <td><a href=\"";
            // line 75
            echo twig_escape_filter($this->env, ($context["affectedLink"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["affectedText"] ?? null), "html", null, true);
            echo "</a></td>
                    </tr>
                ";
        }
        // line 78
        echo "                <tr>
                    <th>Judgehost log snippet</th>
                    <td>
                        <pre class=\"output_text\">";
        // line 81
        echo twig_escape_filter($this->env, base64_decode(twig_get_attribute($this->env, $this->source, ($context["internalError"] ?? null), "judgehostlog", [], "any", false, false, false, 81)), "html", null, true);
        echo "</pre>
                    </td>
                </tr>
            </table>
        </div>
    </div>

    ";
        // line 88
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["internalError"] ?? null), "status", [], "any", false, false, false, 88), "open"))) {
            // line 89
            echo "        <form action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_internal_error_handle", ["errorId" => twig_get_attribute($this->env, $this->source, ($context["internalError"] ?? null), "errorid", [], "any", false, false, false, 89), "action" => "ignore"]), "html", null, true);
            echo "\"
              method=\"post\" class=\"d-inline\">
            <button type=\"submit\" class=\"btn btn-danger\">
                <i class=\"fas fa-times\"></i> Ignore error
            </button>
        </form>

        <form action=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_internal_error_handle", ["errorId" => twig_get_attribute($this->env, $this->source, ($context["internalError"] ?? null), "errorid", [], "any", false, false, false, 96), "action" => "resolve"]), "html", null, true);
            echo "\"
              method=\"post\" class=\"d-inline\">
            <button type=\"submit\" class=\"btn btn-success\">
                <i class=\"fas fa-check\"></i> Mark as resolved and re-enable ";
            // line 99
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["internalError"] ?? null), "disabled", [], "any", false, false, false, 99), "kind", [], "any", false, false, false, 99), "html", null, true);
            echo "
            </button>
        </form>
    ";
        }
        // line 103
        echo "
";
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    public function getTemplateName()
    {
        return "jury/internal_error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 103,  270 => 99,  264 => 96,  253 => 89,  251 => 88,  241 => 81,  236 => 78,  228 => 75,  224 => 74,  221 => 73,  218 => 72,  210 => 67,  206 => 66,  201 => 63,  198 => 62,  192 => 58,  183 => 54,  179 => 53,  176 => 52,  172 => 51,  167 => 47,  164 => 46,  156 => 41,  152 => 40,  147 => 37,  145 => 36,  140 => 34,  133 => 30,  127 => 26,  121 => 24,  117 => 22,  115 => 21,  104 => 13,  101 => 12,  94 => 11,  85 => 8,  80 => 7,  73 => 6,  57 => 4,  49 => 1,  47 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/internal_error.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/internal_error.html.twig");
    }
}
