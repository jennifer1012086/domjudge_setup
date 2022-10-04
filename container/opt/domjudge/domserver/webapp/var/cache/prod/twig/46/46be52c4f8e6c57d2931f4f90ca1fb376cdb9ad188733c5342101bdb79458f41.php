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

/* jury/config.html.twig */
class __TwigTemplate_c073a405ef26147d08e45d51f35d3833f8d8c9dcc2bcf58a7e243cd79dacb5ff extends Template
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
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/config.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/config.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/config.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Configuration - ";
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
        echo twig_call_macro($macros["macros"], "macro_toggle_extrahead", [], 8, $context, $this->getSourceContext());
        echo "
    ";
        // line 9
        echo twig_call_macro($macros["macros"], "macro_select2_extrahead", [], 9, $context, $this->getSourceContext());
        echo "
    <style>
        .btn.toggle-on {
            right: initial;
        }
    </style>
";
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    // line 17
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 18
        echo "    <h1>Configuration</h1>

    <form method=\"post\">
        <ul class=\"nav nav-pills nav-fill\" id=\"configtablist\" role=\"tablist\">
            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 23
            echo "                <li class=\"nav-item\" role=\"presentation\">
                    <a class=\"nav-link ";
            // line 24
            echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 24), "Scoring"))) ? ("active") : (""));
            echo "\" id=\"";
            echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 24), [" " => ""]), "html", null, true);
            echo "-tab\" data-toggle=\"tab\" href=\"#";
            echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 24), [" " => ""]), "html", null, true);
            echo "\" role=\"tab\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 24), "html", null, true);
            echo "</a>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        </ul>

        <div class=\"tab-content mb-2\" id=\"configtab\">
        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 31
            echo "            <div class=\"tab-pane fade ";
            echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 31), "Scoring"))) ? ("show active") : (""));
            echo "\" id=\"";
            echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 31), [" " => ""]), "html", null, true);
            echo "\" role=\"tabpanel\" aria-labelledby=\"";
            echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 31), [" " => ""]), "html", null, true);
            echo "-tab\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <ul class=\"list-group list-group-flush\">
                            ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "data", [], "any", false, false, false, 35));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 36
                echo "                                <li class=\"list-group-item\" style=\"padding:0;padding-top:10px;\">
                                    <div class=\"form-group\">
                                        <label
                                        ";
                // line 39
                if ((twig_in_filter(twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 39), [0 => "int", 1 => "string", 2 => "bool"]) || ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 39), "array_val")) &&  !(null === twig_get_attribute($this->env, $this->source, $context["option"], "options", [], "any", false, false, false, 39))))) {
                    // line 40
                    echo "                                            for=\"config_";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 40), "html", null, true);
                    echo "\"
                                            ";
                    // line 41
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 41), "bool"))) {
                        echo " onclick=\"\$('#config_";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 41), "html", null, true);
                        echo "').bootstrapToggle('toggle')\"";
                    }
                    // line 42
                    echo "                                        ";
                }
                // line 43
                echo "                                        >";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 43), ["_" => " "])), "html", null, true);
                echo ":</label>
                                        ";
                // line 44
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 44), "bool"))) {
                    // line 45
                    echo "                                            <input type=\"checkbox\" data-toggle=\"toggle\" data-size=\"mini\" data-on=\"Yes\"
                                                   data-off=\"No\"
                                                   name=\"config_";
                    // line 47
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 47), "html", null, true);
                    echo "\" id=\"config_";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 47), "html", null, true);
                    echo "\"
                                                ";
                    // line 48
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 48), 1))) {
                        echo " checked=\"checked\"";
                    }
                    echo ">
                                            <br/>
                                        ";
                } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                 // line 50
$context["option"], "type", [], "any", false, false, false, 50), "int"))) {
                    // line 51
                    echo "                                            ";
                    if ( !(null === twig_get_attribute($this->env, $this->source, $context["option"], "options", [], "any", false, false, false, 51))) {
                        // line 52
                        echo "                                                <select class=\"form-control form-control-sm custom-select custom-select-sm\"
                                                       style=\"margin-left:5px;width:15em;text-align:right;display:inline-block;\"
                                                       name=\"config_";
                        // line 54
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 54), "html", null, true);
                        echo "\" id=\"config_";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 54), "html", null, true);
                        echo "\">
                                                    ";
                        // line 55
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "options", [], "any", false, false, false, 55));
                        foreach ($context['_seq'] as $context["value"] => $context["label"]) {
                            // line 56
                            echo "                                                        <option ";
                            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 56), $context["value"]))) {
                                echo "selected";
                            }
                            echo " value=\"";
                            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                            echo "</option>
                                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['value'], $context['label'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 58
                        echo "                                                </select>
                                            ";
                    } else {
                        // line 60
                        echo "                                                <input class=\"form-control form-control-sm\"
                                                       style=\"margin-left:5px;width:7em;text-align:right;display:inline-block;\"
                                                       type=\"number\"
                                                       name=\"config_";
                        // line 63
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 63), "html", null, true);
                        echo "\" id=\"config_";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 63), "html", null, true);
                        echo "\"
                                                       value=\"";
                        // line 64
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 64), "html", null, true);
                        echo "\">
                                            ";
                    }
                    // line 66
                    echo "                                            <br/>
                                        ";
                } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                 // line 67
$context["option"], "type", [], "any", false, false, false, 67), "string"))) {
                    // line 68
                    echo "                                            ";
                    if ( !(null === twig_get_attribute($this->env, $this->source, $context["option"], "options", [], "any", false, false, false, 68))) {
                        // line 69
                        echo "                                                <select class=\"form-control form-control-sm custom-select custom-select-sm\"
                                                        style=\"width:30em;display: block;\"
                                                        name=\"config_";
                        // line 71
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 71), "html", null, true);
                        echo "\" id=\"config_";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 71), "html", null, true);
                        echo "\">
                                                    ";
                        // line 72
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "options", [], "any", false, false, false, 72));
                        foreach ($context['_seq'] as $context["value"] => $context["label"]) {
                            // line 73
                            echo "                                                        <option ";
                            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 73), $context["value"]))) {
                                echo "selected";
                            }
                            echo " value=\"";
                            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                            echo "</option>
                                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['value'], $context['label'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 75
                        echo "                                                </select>
                                            ";
                    } else {
                        // line 77
                        echo "                                                <input class=\"form-control form-control-sm\" style=\"width:30em;\" type=\"text\"
                                                       name=\"config_";
                        // line 78
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 78), "html", null, true);
                        echo "\" id=\"config_";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 78), "html", null, true);
                        echo "\"
                                                       value=\"";
                        // line 79
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 79), "html", null, true);
                        echo "\">
                                            ";
                    }
                    // line 81
                    echo "                                        ";
                } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 81), "array_keyval"))) {
                    // line 82
                    echo "                                            <br/>
                                            <div data-collection>
                                                ";
                    // line 84
                    $context["counter"] = 0;
                    // line 85
                    echo "                                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 85));
                    foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                        // line 86
                        echo "                                                    <div data-collection-item class=\"mb-2\">
                                                        ";
                        // line 87
                        if ( !(null === twig_get_attribute($this->env, $this->source, $context["option"], "key_options", [], "any", false, false, false, 87))) {
                            // line 88
                            echo "                                                            <select class=\"form-control form-control-sm custom-select custom-select-sm\"
                                                                    style=\"width:10em;text-align:right;display:inline-block;\"
                                                                    name=\"config_";
                            // line 90
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 90), "html", null, true);
                            echo "[";
                            echo twig_escape_filter($this->env, ($context["counter"] ?? null), "html", null, true);
                            echo "][key]\">
                                                                ";
                            // line 91
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "key_options", [], "any", false, false, false, 91));
                            foreach ($context['_seq'] as $context["value"] => $context["label"]) {
                                // line 92
                                echo "                                                                    <option ";
                                if ((0 === twig_compare($context["key"], $context["value"]))) {
                                    echo "selected";
                                }
                                echo " value=\"";
                                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                                echo "\">";
                                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                                echo "</option>
                                                                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['value'], $context['label'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 94
                            echo "                                                            </select>
                                                        ";
                        } else {
                            // line 96
                            echo "                                                            <input class=\"form-control form-control-sm\"
                                                                   style=\"width:10em;text-align:right;display:inline-block;\" type=\"text\"
                                                                   value=\"";
                            // line 98
                            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                            echo "\"
                                                                   name=\"config_";
                            // line 99
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 99), "html", null, true);
                            echo "[";
                            echo twig_escape_filter($this->env, ($context["counter"] ?? null), "html", null, true);
                            echo "][key]\"
                                                                   id=\"config_";
                            // line 100
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 100), "html", null, true);
                            echo "_";
                            echo twig_escape_filter($this->env, ($context["counter"] ?? null), "html", null, true);
                            echo "__key_\">
                                                        ";
                        }
                        // line 102
                        echo "                                                        ";
                        if ( !(null === twig_get_attribute($this->env, $this->source, $context["option"], "value_options", [], "any", false, false, false, 102))) {
                            // line 103
                            echo "                                                            <select class=\"form-control form-control-sm custom-select custom-select-sm\"
                                                                    style=\"width:30em;display:inline-block;\"
                                                                    name=\"config_";
                            // line 105
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 105), "html", null, true);
                            echo "[";
                            echo twig_escape_filter($this->env, ($context["counter"] ?? null), "html", null, true);
                            echo "][val]\">
                                                                ";
                            // line 106
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "value_options", [], "any", false, false, false, 106));
                            foreach ($context['_seq'] as $context["value"] => $context["label"]) {
                                // line 107
                                echo "                                                                    <option ";
                                if ((0 === twig_compare($context["val"], $context["value"]))) {
                                    echo "selected";
                                }
                                echo " value=\"";
                                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                                echo "\">";
                                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                                echo "</option>
                                                                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['value'], $context['label'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 109
                            echo "                                                            </select>
                                                        ";
                        } else {
                            // line 111
                            echo "                                                            <input class=\"form-control form-control-sm\"
                                                                   style=\"width:30em;display:inline-block;\" type=\"text\"
                                                                   value=\"";
                            // line 113
                            echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                            echo "\"
                                                                   name=\"config_";
                            // line 114
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 114), "html", null, true);
                            echo "[";
                            echo twig_escape_filter($this->env, ($context["counter"] ?? null), "html", null, true);
                            echo "][val]\"
                                                                   id=\"config_";
                            // line 115
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 115), "html", null, true);
                            echo "_";
                            echo twig_escape_filter($this->env, ($context["counter"] ?? null), "html", null, true);
                            echo "__val\">
                                                            ";
                        }
                        // line 117
                        echo "                                                        ";
                        $context["counter"] = (($context["counter"] ?? null) + 1);
                        // line 118
                        echo "                                                    </div>
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 120
                    echo "                                                <script type=\"text/template\" data-index=\"";
                    echo twig_escape_filter($this->env, ($context["counter"] ?? null), "html", null, true);
                    echo "\">
                                                    <div data-collection-item class=\"mb-2\">
                                                        ";
                    // line 122
                    if ( !(null === twig_get_attribute($this->env, $this->source, $context["option"], "key_options", [], "any", false, false, false, 122))) {
                        // line 123
                        echo "                                                            <select class=\"form-control form-control-sm custom-select custom-select-sm\"
                                                                    style=\"width:10em;text-align:right;display:inline-block;\"
                                                                    name=\"config_";
                        // line 125
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 125), "html", null, true);
                        echo "[__idx__][key]\">
                                                                ";
                        // line 126
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "key_options", [], "any", false, false, false, 126));
                        foreach ($context['_seq'] as $context["value"] => $context["label"]) {
                            // line 127
                            echo "                                                                    <option value=\"";
                            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                            echo "</option>
                                                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['value'], $context['label'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 129
                        echo "                                                            </select>
                                                        ";
                    } else {
                        // line 131
                        echo "                                                            <input class=\"form-control form-control-sm\"
                                                                   style=\"width:10em;text-align:right;display:inline-block;\" type=\"text\"
                                                                   name=\"config_";
                        // line 133
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 133), "html", null, true);
                        echo "[__idx__][key]\"
                                                                   id=\"config_";
                        // line 134
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 134), "html", null, true);
                        echo "___idx____key_\">
                                                        ";
                    }
                    // line 136
                    echo "                                                        ";
                    if ( !(null === twig_get_attribute($this->env, $this->source, $context["option"], "value_options", [], "any", false, false, false, 136))) {
                        // line 137
                        echo "                                                            <select class=\"form-control form-control-sm custom-select custom-select-sm\"
                                                                    style=\"width:30em;display:inline-block;\"
                                                                    name=\"config_";
                        // line 139
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 139), "html", null, true);
                        echo "[__idx__][val]\">
                                                                ";
                        // line 140
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "value_options", [], "any", false, false, false, 140));
                        foreach ($context['_seq'] as $context["value"] => $context["label"]) {
                            // line 141
                            echo "                                                                    <option value=\"";
                            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                            echo "</option>
                                                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['value'], $context['label'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 143
                        echo "                                                            </select>
                                                        ";
                    } else {
                        // line 145
                        echo "                                                            <input class=\"form-control form-control-sm\"
                                                                   style=\"width:30em;display:inline-block;\" type=\"text\"
                                                                   name=\"config_";
                        // line 147
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 147), "html", null, true);
                        echo "[__idx__][val]\"
                                                                   id=\"config_";
                        // line 148
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 148), "html", null, true);
                        echo "___idx____val\">
                                                        ";
                    }
                    // line 150
                    echo "                                                    </div>
                                                </script>
                                            </div>
                                            <br/>
                                        ";
                } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                 // line 154
$context["option"], "type", [], "any", false, false, false, 154), "array_val"))) {
                    // line 155
                    echo "                                            <br/>
                                                ";
                    // line 156
                    if ( !(null === twig_get_attribute($this->env, $this->source, $context["option"], "options", [], "any", false, false, false, 156))) {
                        // line 157
                        echo "                                                    <select class=\"form-control form-control-sm custom-select custom-select-sm\"
                                                            style=\"width:30em;display:inline-block;\"
                                                            multiple
                                                            name=\"config_";
                        // line 160
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 160), "html", null, true);
                        echo "[]\"
                                                            id=\"config_";
                        // line 161
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 161), "html", null, true);
                        echo "\">
                                                        ";
                        // line 162
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "options", [], "any", false, false, false, 162));
                        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                            // line 163
                            echo "                                                            <option ";
                            if (twig_in_filter($context["value"], twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 163))) {
                                echo "selected";
                            }
                            echo " value=\"";
                            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                            echo "</option>
                                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 165
                        echo "                                                    </select>
                                                ";
                    } else {
                        // line 167
                        echo "                                                    <div data-collection>
                                                        ";
                        // line 168
                        $context["counter"] = 0;
                        // line 169
                        echo "                                                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 169));
                        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
                            // line 170
                            echo "                                                            <div data-collection-item class=\"mb-2\">
                                                                <input class=\"form-control form-control-sm\"
                                                                       style=\"width:30em;display:inline-block;\" type=\"text\"
                                                                       value=\"";
                            // line 173
                            echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                            echo "\"
                                                                       name=\"config_";
                            // line 174
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 174), "html", null, true);
                            echo "[";
                            echo twig_escape_filter($this->env, ($context["counter"] ?? null), "html", null, true);
                            echo "]\"
                                                                       id=\"config_";
                            // line 175
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 175), "html", null, true);
                            echo "_";
                            echo twig_escape_filter($this->env, ($context["counter"] ?? null), "html", null, true);
                            echo "_\">
                                                            </div>
                                                            ";
                            // line 177
                            $context["counter"] = (($context["counter"] ?? null) + 1);
                            // line 178
                            echo "                                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 179
                        echo "                                                        <script type=\"text/template\" data-index=\"";
                        echo twig_escape_filter($this->env, ($context["counter"] ?? null), "html", null, true);
                        echo "\">
                                                            <div data-collection-item class=\"mb-2\">
                                                                <input class=\"form-control form-control-sm\"
                                                                       style=\"width:30em;display:inline-block;\" type=\"text\"
                                                                       name=\"config_";
                        // line 183
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 183), "html", null, true);
                        echo "[__idx__]\"
                                                                       id=\"config_";
                        // line 184
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 184), "html", null, true);
                        echo "___idx___\">
                                                            </div>
                                                        </script>
                                                    </div>
                                                ";
                    }
                    // line 189
                    echo "                                        ";
                }
                // line 190
                echo "                                        <small class=\"text-muted\">";
                echo $this->env->getRuntime('Twig\Extra\Markdown\MarkdownRuntime')->convert(twig_get_attribute($this->env, $this->source, $context["option"], "description", [], "any", false, false, false, 190));
                echo "</small>
                                    </div>
                                </li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 194
            echo "                        </ul>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 199
        echo "        </div>
        <input class=\"btn btn-primary\" type=\"submit\" value=\"Save all changes\" id=\"save\" name=\"save\">
    </form>
";
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    // line 204
    public function block_extrafooter($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrafooter"));

        // line 205
        echo "    <script>
        \$(function () {
            function addDeleteLink(\$collectionItem) {
                var \$removeFormButton = \$('<button type=\"button\" class=\"btn btn-sm btn-danger\"><i class=\"fas fa-trash\"></i></button>');
                \$collectionItem.append(\$removeFormButton);

                \$removeFormButton.on('click', function(e) {
                    \$collectionItem.remove();
                });
            }

            function addCollectionItem(\$collection, \$addButton) {
                var \$template = \$('script[type=\"text/template\"]', \$collection);
                var template = \$template.text();
                var index = \$template.data('index');
                var newRow = template;
                newRow = newRow.replace(/__idx__/g, index);
                \$template.data('index', index + 1);
                var \$newRow = \$(newRow);
                \$addButton.before(\$newRow);
                addDeleteLink(\$newRow);
            }

            function addAddLink(\$collection) {
                var \$addButton = \$('<button type=\"button\" class=\"btn btn-sm btn-secondary\"><i class=\"fas fa-plus\"></i></button>');
                \$collection.append(\$addButton);

                \$addButton.on('click', function (e) {
                    addCollectionItem(\$collection, \$addButton);
                });
            }

            \$('[data-collection]').each(function() {
                var \$collection = \$(this);

                addAddLink(\$collection);

                \$('[data-collection-item]', \$collection).each(function() {
                    addDeleteLink(\$(this));
                })
            })
        });
    </script>
";
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    public function getTemplateName()
    {
        return "jury/config.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  697 => 205,  690 => 204,  680 => 199,  670 => 194,  659 => 190,  656 => 189,  648 => 184,  644 => 183,  636 => 179,  630 => 178,  628 => 177,  621 => 175,  615 => 174,  611 => 173,  606 => 170,  601 => 169,  599 => 168,  596 => 167,  592 => 165,  577 => 163,  573 => 162,  569 => 161,  565 => 160,  560 => 157,  558 => 156,  555 => 155,  553 => 154,  547 => 150,  542 => 148,  538 => 147,  534 => 145,  530 => 143,  519 => 141,  515 => 140,  511 => 139,  507 => 137,  504 => 136,  499 => 134,  495 => 133,  491 => 131,  487 => 129,  476 => 127,  472 => 126,  468 => 125,  464 => 123,  462 => 122,  456 => 120,  449 => 118,  446 => 117,  439 => 115,  433 => 114,  429 => 113,  425 => 111,  421 => 109,  406 => 107,  402 => 106,  396 => 105,  392 => 103,  389 => 102,  382 => 100,  376 => 99,  372 => 98,  368 => 96,  364 => 94,  349 => 92,  345 => 91,  339 => 90,  335 => 88,  333 => 87,  330 => 86,  325 => 85,  323 => 84,  319 => 82,  316 => 81,  311 => 79,  305 => 78,  302 => 77,  298 => 75,  283 => 73,  279 => 72,  273 => 71,  269 => 69,  266 => 68,  264 => 67,  261 => 66,  256 => 64,  250 => 63,  245 => 60,  241 => 58,  226 => 56,  222 => 55,  216 => 54,  212 => 52,  209 => 51,  207 => 50,  200 => 48,  194 => 47,  190 => 45,  188 => 44,  183 => 43,  180 => 42,  174 => 41,  169 => 40,  167 => 39,  162 => 36,  158 => 35,  146 => 31,  142 => 30,  137 => 27,  122 => 24,  119 => 23,  115 => 22,  109 => 18,  102 => 17,  88 => 9,  84 => 8,  79 => 7,  72 => 6,  58 => 4,  50 => 1,  48 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/config.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/config.html.twig");
    }
}
