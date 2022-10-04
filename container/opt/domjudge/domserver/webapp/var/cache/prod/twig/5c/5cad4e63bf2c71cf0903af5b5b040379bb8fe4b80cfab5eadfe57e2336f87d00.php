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

/* jury/check_judgings.html.twig */
class __TwigTemplate_db9abae805073bcf2321ea9b772856b2104af92003d0fbe051a651c0aa4c8eca extends Template
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
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/check_judgings.html.twig"));

        // line 2
        $macros["checkJudgings"] = $this->macros["checkJudgings"] = $this;
        // line 3
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/check_judgings.html.twig", 3)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/check_judgings.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Judging verifier - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    // line 7
    public function block_extrahead($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrahead"));

        // line 8
        echo "    ";
        $this->displayParentBlock("extrahead", $context, $blocks);
        echo "
    ";
        // line 9
        echo twig_call_macro($macros["macros"], "macro_table_extrahead", [], 9, $context, $this->getSourceContext());
        echo "
";
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    // line 12
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "
    <h1>Judging verifier</h1>

    <p>
        ";
        // line 17
        echo twig_escape_filter($this->env, ($context["numChecked"] ?? null), "html", null, true);
        echo " submissions checked:
        ";
        // line 18
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["unexpected"] ?? null)), "html", null, true);
        echo " unexpected results,
        ";
        // line 19
        if (($context["verifyMultiple"] ?? null)) {
            // line 20
            echo "            ";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["multiple"] ?? null)), "html", null, true);
            echo " automatically verified (multiple outcomes),
        ";
        } else {
            // line 22
            echo "            ";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["multiple"] ?? null)), "html", null, true);
            echo " to check manually,
        ";
        }
        // line 24
        echo "        ";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["verified"] ?? null)), "html", null, true);
        echo " automatically verified
        <br>
        ";
        // line 26
        echo twig_escape_filter($this->env, ($context["numUnchecked"] ?? null), "html", null, true);
        echo " submissions not checked:
        ";
        // line 27
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["earlier"] ?? null)), "html", null, true);
        echo " verified earlier,
        ";
        // line 28
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["nomatch"] ?? null)), "html", null, true);
        echo " without magic string
    </p>

    ";
        // line 60
        echo "
    ";
        // line 61
        echo twig_call_macro($macros["checkJudgings"], "macro_verifyResults", ["unexpected", "Unexpected results", ($context["unexpected"] ?? null)], 61, $context, $this->getSourceContext());
        echo "
    ";
        // line 62
        if (($context["verifyMultiple"] ?? null)) {
            // line 63
            echo "        ";
            echo twig_call_macro($macros["checkJudgings"], "macro_verifyResults", ["multiple", "Automatically verified (multiple outcomes)", ($context["multiple"] ?? null), true], 63, $context, $this->getSourceContext());
            echo "
    ";
        } else {
            // line 65
            echo "        ";
            echo twig_call_macro($macros["checkJudgings"], "macro_verifyResults", ["multiple", "Check manually", ($context["multiple"] ?? null)], 65, $context, $this->getSourceContext());
            echo "
        ";
            // line 66
            if ( !twig_test_empty(($context["multiple"] ?? null))) {
                // line 67
                echo "            <form action=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_judging_verifier");
                echo "\" method=\"post\">
                <input type=\"hidden\" name=\"verify_multiple\" value=\"1\">
                <p>
                    Verify all multiple outcome submissions:
                    <button type=\"submit\" class=\"btn btn-primary\"><i class=\"fas fa-check\"></i> Verify</button>
                </p>
            </form>
        ";
            }
            // line 75
            echo "    ";
        }
        // line 76
        echo "    ";
        echo twig_call_macro($macros["checkJudgings"], "macro_verifyResults", ["verified", "Automatically verified", ($context["verified"] ?? null), true], 76, $context, $this->getSourceContext());
        echo "
    ";
        // line 77
        echo twig_call_macro($macros["checkJudgings"], "macro_verifyResults", ["earlier", "Verified earlier", ($context["earlier"] ?? null), true], 77, $context, $this->getSourceContext());
        echo "
    ";
        // line 78
        echo twig_call_macro($macros["checkJudgings"], "macro_verifyResults", ["nomatch", "Without magic string", ($context["nomatch"] ?? null), true], 78, $context, $this->getSourceContext());
        echo "

";
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    // line 31
    public function macro_verifyResults($__id__ = null, $__header__ = null, $__results__ = null, $__collapse__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "id" => $__id__,
            "header" => $__header__,
            "results" => $__results__,
            "collapse" => $__collapse__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
            $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "verifyResults"));

            // line 32
            echo "        ";
            if ( !twig_test_empty(($context["results"] ?? null))) {
                // line 33
                echo "            <h2><a class=\"collapse-link\" href=\"javascript:collapse('#detail";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "')\">";
                echo twig_escape_filter($this->env, ($context["header"] ?? null), "html", null, true);
                echo "</a></h2>
            <ul id=\"detail";
                // line 34
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "\"";
                if (((array_key_exists("collapse", $context)) ? (_twig_default_filter(($context["collapse"] ?? null), false)) : (false))) {
                    echo " class=\"d-none\"";
                }
                echo ">
                ";
                // line 35
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["results"] ?? null));
                foreach ($context['_seq'] as $context["submitId"] => $context["result"]) {
                    // line 36
                    echo "                    <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission", ["submitId" => $context["submitId"]]), "html", null, true);
                    echo "\">s";
                    echo twig_escape_filter($this->env, $context["submitId"], "html", null, true);
                    echo "</a>
                    ";
                    // line 37
                    if ((twig_get_attribute($this->env, $this->source, $context["result"], "files", [], "any", true, true, false, 37) && (1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["result"], "files", [], "any", false, false, false, 37)), 0)))) {
                        // line 38
                        echo "                        (";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["result"], "files", [], "any", false, false, false, 38), 0, 3));
                        foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                            // line 39
                            echo "                            <code>";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 39), "html", null, true);
                            echo "</code>
                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 40
                        echo ")
                    ";
                    }
                    // line 42
                    echo "                    ";
                    if ((0 === twig_compare(($context["id"] ?? null), "unexpected"))) {
                        // line 43
                        echo "                        has unexpected result '";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["result"], "actual", [], "any", false, false, false, 43), "html", null, true);
                        echo "', should be one of: ";
                        echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, $context["result"], "expected", [], "any", false, false, false, 43), ", "), "html", null, true);
                        echo "
                    ";
                    } elseif (((0 === twig_compare(                    // line 44
($context["id"] ?? null), "multiple")) && twig_get_attribute($this->env, $this->source, $context["result"], "verified", [], "any", false, false, false, 44))) {
                        // line 45
                        echo "                        verified as ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["result"], "actual", [], "any", false, false, false, 45), "html", null, true);
                        echo " out of multiple possible outcomes (";
                        echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, $context["result"], "expected", [], "any", false, false, false, 45), ", "), "html", null, true);
                        echo ")
                    ";
                    } elseif ((0 === twig_compare(                    // line 46
($context["id"] ?? null), "multiple"))) {
                        // line 47
                        echo "                        is judged as ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["result"], "actual", [], "any", false, false, false, 47), "html", null, true);
                        echo " but has multiple possible outcomes (";
                        echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, $context["result"], "expected", [], "any", false, false, false, 47), ", "), "html", null, true);
                        echo ")
                    ";
                    } elseif ((0 === twig_compare(                    // line 48
($context["id"] ?? null), "verified"))) {
                        // line 49
                        echo "                        verfied as '";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["result"], "actual", [], "any", false, false, false, 49), "html", null, true);
                        echo "'
                    ";
                    } elseif ((0 === twig_compare(                    // line 50
($context["id"] ?? null), "nomatch"))) {
                        // line 51
                        echo "                        expected results unknown, leaving submission unchecked
                    ";
                    } elseif ((0 === twig_compare(                    // line 52
($context["id"] ?? null), "earlier"))) {
                        // line 53
                        echo "                        already verified earlier
                    ";
                    }
                    // line 55
                    echo "                    </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['submitId'], $context['result'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 57
                echo "            </ul>
        ";
            }
            // line 59
            echo "    ";
            
            $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "jury/check_judgings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 59,  326 => 57,  319 => 55,  315 => 53,  313 => 52,  310 => 51,  308 => 50,  303 => 49,  301 => 48,  294 => 47,  292 => 46,  285 => 45,  283 => 44,  276 => 43,  273 => 42,  269 => 40,  260 => 39,  255 => 38,  253 => 37,  246 => 36,  242 => 35,  234 => 34,  227 => 33,  224 => 32,  205 => 31,  195 => 78,  191 => 77,  186 => 76,  183 => 75,  171 => 67,  169 => 66,  164 => 65,  158 => 63,  156 => 62,  152 => 61,  149 => 60,  143 => 28,  139 => 27,  135 => 26,  129 => 24,  123 => 22,  117 => 20,  115 => 19,  111 => 18,  107 => 17,  101 => 13,  94 => 12,  85 => 9,  80 => 8,  73 => 7,  59 => 5,  51 => 1,  49 => 3,  47 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/check_judgings.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/check_judgings.html.twig");
    }
}
