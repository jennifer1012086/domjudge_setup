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

/* jury/delete.html.twig */
class __TwigTemplate_923a79f0ffdbc2ff80cdcad4ed5af5d2639cb71817e0e32e822cddc05e4fbc2a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/delete.html.twig"));

        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/delete.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Delete ";
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["primaryKey"] ?? null), "html", null, true);
        echo " - \"";
        echo twig_escape_filter($this->env, ($context["description"] ?? null), "html", null, true);
        echo "\" - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "
    <h1>Delete ";
        // line 8
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["primaryKey"] ?? null), "html", null, true);
        echo " - \"";
        echo twig_escape_filter($this->env, ($context["description"] ?? null), "html", null, true);
        echo "\"</h1>

    ";
        // line 10
        if (($context["isError"] ?? null)) {
            // line 11
            echo "        <div class=\"alert alert-danger\">
            <strong>Error: ";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["messages"] ?? null), 0, [], "any", false, false, false, 12), "html", null, true);
            echo "</strong>
        </div>
    ";
        } else {
            // line 15
            echo "        <div class=\"alert alert-warning\">
            <form method=\"post\">
                <p>You're about to delete ";
            // line 17
            echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, ($context["primaryKey"] ?? null), "html", null, true);
            echo " \"";
            echo twig_escape_filter($this->env, ($context["description"] ?? null), "html", null, true);
            echo "\".</p>

                ";
            // line 19
            if ( !twig_test_empty(($context["messages"] ?? null))) {
                // line 20
                echo "                    <p>
                        <strong>Warning, this will:</strong>
                    </p>
                    <ul>
                        ";
                // line 24
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["messages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 25
                    echo "                            <li>";
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "</li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "                    </ul>
                ";
            }
            // line 29
            echo "
                <p>Are you sure?</p>
                <hr>
                <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, ($context["redirectUrl"] ?? null), "html", null, true);
            echo "\" class=\"btn btn-secondary\">Cancel</a>
                <button type=\"submit\" class=\"btn btn-danger\">Delete</button>
            </form>
        </div>
    ";
        }
        // line 37
        echo "
";
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    public function getTemplateName()
    {
        return "jury/delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 37,  146 => 32,  141 => 29,  137 => 27,  128 => 25,  124 => 24,  118 => 20,  116 => 19,  107 => 17,  103 => 15,  97 => 12,  94 => 11,  92 => 10,  83 => 8,  80 => 7,  73 => 6,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/delete.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/delete.html.twig");
    }
}
