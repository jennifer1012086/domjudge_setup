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

/* jury/shadow_differences.html.twig */
class __TwigTemplate_f9d1926a9b0b8a94eaed0dcd29de4dea8ebdb87e50605d52d3578d3f13aa4e5a extends Template
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
            'extrafooter' => [$this, 'block_extrafooter'],
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
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/shadow_differences.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/shadow_differences.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/shadow_differences.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Shadow differences - ";
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
        // line 9
        echo twig_call_macro($macros["macros"], "macro_select2_extrahead", [], 9, $context, $this->getSourceContext());
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
    <h1>Shadow differences</h1>";
        // line 16
        if (twig_test_empty(($context["current_contests"] ?? null))) {
            // line 17
            echo "        <div class=\"alert alert-danger\">No active contest</div>";
        } else {
            // line 19
            echo "        <div data-shadow-matrix>
            ";
            // line 20
            $this->loadTemplate("jury/partials/shadow_matrix.html.twig", "jury/shadow_differences.html.twig", 20)->display($context);
            // line 21
            echo "        </div>

        <h2 class=\"mt-4\">Details</h2>

        Show submissions:
        <div class=\"btn-group btn-group-toggle btn-group-sm mb-3\" data-toggle=\"buttons\">";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["viewTypes"] ?? null));
            foreach ($context['_seq'] as $context["idx"] => $context["type"]) {
                // line 28
                echo "
                <label class=\"btn btn-secondary ";
                // line 29
                if ((0 === twig_compare($context["idx"], ($context["view"] ?? null)))) {
                    echo "active";
                }
                echo "\">
                    <input type=\"radio\" name=\"viewtype\" autocomplete=\"off\" value=\"";
                // line 30
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\"
                           ";
                // line 31
                if ((0 === twig_compare($context["idx"], ($context["view"] ?? null)))) {
                    echo "checked";
                }
                echo "> ";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "
                </label>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['idx'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "        </div>
        <div class=\"btn-group btn-group-toggle btn-group-sm mb-3\" data-toggle=\"buttons\">";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["verificationViewTypes"] ?? null));
            foreach ($context['_seq'] as $context["idx"] => $context["type"]) {
                // line 37
                echo "
                <label class=\"btn btn-secondary ";
                // line 38
                if ((0 === twig_compare($context["idx"], ($context["verificationView"] ?? null)))) {
                    echo "active";
                }
                echo "\">
                    <input type=\"radio\" name=\"verificationviewtype\" autocomplete=\"off\" value=\"";
                // line 39
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\"
                           ";
                // line 40
                if ((0 === twig_compare($context["idx"], ($context["verificationView"] ?? null)))) {
                    echo "checked";
                }
                echo "> ";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "
                </label>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['idx'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "        </div>

        <form action=\"";
            // line 45
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_shadow_differences");
            echo "\" method=\"get\">
            <input type=\"hidden\" name=\"view\" value=\"";
            // line 46
            echo twig_escape_filter($this->env, (($__internal_compile_0 = ($context["viewTypes"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[($context["view"] ?? null)] ?? null) : null), "html", null, true);
            echo "\"/>
            <input type=\"hidden\" name=\"verificationview\" value=\"";
            // line 47
            echo twig_escape_filter($this->env, (($__internal_compile_1 = ($context["verificationViewTypes"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[($context["verificationView"] ?? null)] ?? null) : null), "html", null, true);
            echo "\"/>
            <div class=\"form-row\">
                <div class=\"form-group col-md-4\">
                    <label for=\"oldverdict\">External verdict</label>
                    <select style=\"width: 100%\" class=\"select2 form-control\" name=\"external\"
                            id=\"external\">
                        <option value=\"all\" ";
            // line 53
            if ((0 === twig_compare(($context["external"] ?? null), "all"))) {
                echo "selected";
            }
            echo ">all</option>";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["verdicts"] ?? null));
            foreach ($context['_seq'] as $context["verdict"] => $context["abbreviation"]) {
                // line 55
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, $context["verdict"], "html", null, true);
                echo "\"
                                    ";
                // line 56
                if ((0 === twig_compare(($context["external"] ?? null), $context["verdict"]))) {
                    echo "selected";
                }
                echo ">
                                ";
                // line 57
                echo twig_escape_filter($this->env, $context["verdict"], "html", null, true);
                echo "
                            </option>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['verdict'], $context['abbreviation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "
                    </select>
                </div>
                <div class=\"form-group col-md-4\">
                    <label for=\"newverdict\">Local verdict</label>
                    <select style=\"width: 100%\" class=\"select2 form-control\" name=\"local\" id=\"local\">
                        <option value=\"all\" ";
            // line 66
            if ((0 === twig_compare(($context["local"] ?? null), "all"))) {
                echo "selected";
            }
            echo ">all</option>";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["verdicts"] ?? null));
            foreach ($context['_seq'] as $context["verdict"] => $context["abbreviation"]) {
                // line 68
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, $context["verdict"], "html", null, true);
                echo "\" ";
                if ((0 === twig_compare(($context["local"] ?? null), $context["verdict"]))) {
                    echo "selected";
                }
                echo ">
                                ";
                // line 69
                echo twig_escape_filter($this->env, $context["verdict"], "html", null, true);
                echo "
                            </option>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['verdict'], $context['abbreviation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "
                    </select>
                </div>
                <div class=\"form-group col-md-2\">
                    <label>&nbsp;</label>
                    <input class=\"btn btn-primary form-control\" type=\"submit\" value=\"Filter\"/>
                </div>
                <div class=\"form-group col-md-2\">
                    <label>&nbsp;</label>
                    <a href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_shadow_differences", ["view" => (($__internal_compile_2 = ($context["viewTypes"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[($context["view"] ?? null)] ?? null) : null), "verificationview" => (($__internal_compile_3 = ($context["verificationViewTypes"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[($context["verificationView"] ?? null)] ?? null) : null)]), "html", null, true);
            echo "\"
                       class=\"btn btn-secondary form-control\">Clear</a>
                </div>
            </div>
        </form>

        <div data-ajax-refresh-target data-ajax-refresh-after=\"updateMatrix\">
            ";
            // line 88
            $this->loadTemplate("jury/partials/shadow_submissions.html.twig", "jury/shadow_differences.html.twig", 88)->display($context);
            // line 89
            echo "        </div>
    ";
        }
        // line 91
        echo "
";
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    // line 94
    public function block_extrafooter($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrafooter"));

        // line 95
        if ( !twig_test_empty(($context["current_contests"] ?? null))) {
            // line 96
            echo "        <script>
            \$(function () {
                \$('input[name=viewtype]').on('change', function () {
                    window.location = '";
            // line 99
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_shadow_differences", ["view" => "REPLACE_ME", "verificationview" => (($__internal_compile_4 = ($context["verificationViewTypes"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[($context["verificationView"] ?? null)] ?? null) : null), "external" => ($context["external"] ?? null), "local" => ($context["local"] ?? null)]), "js"), "html", null, true);
            echo "'.replace('REPLACE_ME', \$(this).val());
                });
                \$('input[name=verificationviewtype]').on('change', function () {
                    window.location = '";
            // line 102
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_shadow_differences", ["view" => (($__internal_compile_5 = ($context["viewTypes"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[($context["view"] ?? null)] ?? null) : null), "verificationview" => "REPLACE_ME", "external" => ($context["external"] ?? null), "local" => ($context["local"] ?? null)]), "js"), "html", null, true);
            echo "'.replace('REPLACE_ME', \$(this).val());
                });

                \$('.select2').select2();

                window.updateMatrix = function () {
                    var \$matrixData = \$('[data-new-shadow-matrix]');
                    var \$matrix = \$('[data-shadow-matrix]');
                    \$matrix.html(\$matrixData.children());
                }
            });
        </script>
    ";
        }
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    public function getTemplateName()
    {
        return "jury/shadow_differences.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  323 => 102,  317 => 99,  312 => 96,  310 => 95,  303 => 94,  295 => 91,  291 => 89,  289 => 88,  279 => 81,  268 => 72,  260 => 69,  251 => 68,  247 => 67,  242 => 66,  234 => 60,  226 => 57,  220 => 56,  215 => 55,  211 => 54,  206 => 53,  197 => 47,  193 => 46,  189 => 45,  185 => 43,  173 => 40,  169 => 39,  163 => 38,  160 => 37,  156 => 36,  153 => 34,  141 => 31,  137 => 30,  131 => 29,  128 => 28,  124 => 27,  117 => 21,  115 => 20,  112 => 19,  109 => 17,  107 => 16,  104 => 13,  97 => 12,  88 => 9,  84 => 8,  79 => 7,  72 => 6,  58 => 4,  50 => 1,  48 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/shadow_differences.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/shadow_differences.html.twig");
    }
}
