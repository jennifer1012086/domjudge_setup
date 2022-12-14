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

/* @JMSSerializer/Collector/metadata.html.twig */
class __TwigTemplate_4ddf8887ebce78884b108e743c2c5a13fbb945fa84177b252821d1dabff4c2a3 extends Template
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
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@JMSSerializer/Collector/metadata.html.twig"));

        // line 1
        echo "<h2>Loaded metadata</h2>";
        // line 3
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "loadedMetadata", [], "any", false, false, false, 3))) {
            // line 4
            echo "<div class=\"empty\">
        <p>No metadata have been loaded.</p>
    </div>";
        } else {
            // line 14
            echo "
    <table>
        <thead>
        <tr>
            <th>Class</th>
            <th>File</th>
        </tr>
        </thead>";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "loadedMetadata", [], "any", false, false, false, 22));
            foreach ($context['_seq'] as $context["class"] => $context["files"]) {
                // line 23
                echo "<tr>
                <td>";
                // line 24
                echo twig_escape_filter($this->env, $context["class"], "html", null, true);
                echo "</td>
                <td nowrap=\"nowrap\">";
                // line 26
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["files"]);
                foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                    // line 27
                    echo twig_escape_filter($this->env, $context["file"], "html", null, true);
                    echo "<br/>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 29
                echo "                </td>
            </tr>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['class'], $context['files'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "</table>";
        }
        // line 36
        echo "<h3>Attempted files</h3>";
        // line 37
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "metadataFiles", [], "any", false, false, false, 37))) {
            // line 38
            echo "<div class=\"empty\">
        <p>No metadata files attempted (if this list is empty, probably all the data are cached as expected)</p>
    </div>";
        } else {
            // line 44
            echo "<table>
        <thead>
        <tr>
            <th>Class</th>
            <th>Files</th>
        </tr>
        </thead>";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "metadataFiles", [], "any", false, false, false, 51));
            foreach ($context['_seq'] as $context["class"] => $context["files"]) {
                // line 52
                echo "<tr>
                <td>";
                // line 53
                echo twig_escape_filter($this->env, $context["class"], "html", null, true);
                echo "</td>
                <td nowrap=\"nowrap\">";
                // line 55
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["files"]);
                foreach ($context['_seq'] as $context["file"] => $context["found"]) {
                    // line 56
                    echo "<span style=\"color: ";
                    echo (($context["found"]) ? ("green") : ("red"));
                    echo "\">
                        ";
                    // line 57
                    echo twig_escape_filter($this->env, $context["file"], "html", null, true);
                    echo " (";
                    echo (($context["found"]) ? ("found") : ("not found"));
                    echo ")<br/>
                        </span>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['file'], $context['found'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 60
                echo "                </td>
            </tr>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['class'], $context['files'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "</table>";
        }
        // line 66
        echo "<h3>Configured metadata directories</h3>
<table>
    <thead>
    <tr>
        <th>Prefix</th>
        <th>Path</th>
    </tr>
    </thead>";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "loadedDirs", [], "any", false, false, false, 74));
        foreach ($context['_seq'] as $context["prefix"] => $context["path"]) {
            // line 75
            echo "<tr>
            <td>";
            // line 76
            echo twig_escape_filter($this->env, $context["prefix"], "html", null, true);
            echo "</td>
            <td>";
            // line 77
            echo twig_escape_filter($this->env, $context["path"], "html", null, true);
            echo "</td>
        </tr>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['prefix'], $context['path'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "</table>
";
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    public function getTemplateName()
    {
        return "@JMSSerializer/Collector/metadata.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 80,  169 => 77,  165 => 76,  162 => 75,  158 => 74,  149 => 66,  146 => 63,  139 => 60,  128 => 57,  123 => 56,  119 => 55,  115 => 53,  112 => 52,  108 => 51,  100 => 44,  95 => 38,  93 => 37,  91 => 36,  88 => 32,  81 => 29,  73 => 27,  69 => 26,  65 => 24,  62 => 23,  58 => 22,  49 => 14,  44 => 4,  42 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@JMSSerializer/Collector/metadata.html.twig", "/opt/domjudge/domserver/lib/vendor/jms/serializer-bundle/Resources/views/Collector/metadata.html.twig");
    }
}
