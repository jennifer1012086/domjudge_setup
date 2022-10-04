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

/* jury/export/layout.html.twig */
class __TwigTemplate_29c5fcbebbb5a5e24bd97ded7f1ab09a790754e42ac4bfdde5603ecf4e7d5f04 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/export/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\" xml:lang=\"en\">
<head>
    <!-- DOMjudge version ";
        // line 4
        echo twig_escape_filter($this->env, ($context["domjudgeVersion"] ?? null), "html", null, true);
        echo " -->
    <meta charset=\"utf-8\"/>
    <title>";
        // line 6
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</title>
    <style>

        /*!
         * Styling based on:
         * Bootstrap v4.0.0 (https://getbootstrap.com)
         * Copyright 2011-2018 The Bootstrap Authors
         * Copyright 2011-2018 Twitter, Inc.
         * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
         */
        html {
            font-family: sans-serif;
            line-height: 1.15;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
            -ms-overflow-style: scrollbar;
            -webkit-tap-highlight-color: transparent;
        }

        body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\";
            font-size: 14px;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            text-align: left;
            background-color: #fff;
        }

        table {
            border-collapse: collapse;
        }

        .table {
            width: 100%;
            max-width: 100%;
            margin-bottom: 1rem;
            background-color: transparent;
        }

        .table th,
        .table td {
            padding: 2px;
            vertical-align: top;
            border-top: 1px solid #dee2e6;
        }

        .table thead th {
            vertical-align: bottom;
            border-bottom: 2px solid #dee2e6;
        }

        .table tbody + tbody {
            border-top: 2px solid #dee2e6;
        }

        .table .table {
            background-color: #fff;
        }

        main {
            padding: 1rem 1rem;
        }

        h1, h2 {
            text-align: center;
        }

        h1 {
            font-size: 2em;
            padding-top: 0;
        }

        h2 {
            font-size: 1.5em;
            padding-top: 2rem;
        }

        pre {
            margin: 0;
            white-space: pre-wrap;
        }
    </style>
</head>
<body>
<main role=\"main\" class=\"\">
    <h1>";
        // line 93
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</h1>

    ";
        // line 95
        $this->displayBlock('body', $context, $blocks);
        // line 96
        echo "</main>
</body>
</html>
";
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    // line 95
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    public function getTemplateName()
    {
        return "jury/export/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 95,  148 => 96,  146 => 95,  141 => 93,  51 => 6,  46 => 4,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/export/layout.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/export/layout.html.twig");
    }
}
