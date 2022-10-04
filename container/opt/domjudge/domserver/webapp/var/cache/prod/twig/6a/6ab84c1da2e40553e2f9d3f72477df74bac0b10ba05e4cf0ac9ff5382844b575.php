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

/* jury/tsv/accounts.tsv.twig */
class __TwigTemplate_399509aacdf0f52041b408f45d796fe7b2b55d91e0673a5dda45f21b747e22dd extends Template
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
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/tsv/accounts.tsv.twig"));

        // line 1
        echo "accounts\t1
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 3
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->toTsvField(twig_get_attribute($this->env, $this->source, $context["row"], "type", [], "any", false, false, false, 3)), "html", null, true);
            echo "\t";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->toTsvField(twig_get_attribute($this->env, $this->source, $context["row"], "fullname", [], "any", false, false, false, 3)), "html", null, true);
            echo "\t";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->toTsvField(twig_get_attribute($this->env, $this->source, $context["row"], "username", [], "any", false, false, false, 3)), "html", null, true);
            echo "\t";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->toTsvField(twig_get_attribute($this->env, $this->source, $context["row"], "password", [], "any", false, false, false, 3)), "html", null, true);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    public function getTemplateName()
    {
        return "jury/tsv/accounts.tsv.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 3,  43 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/tsv/accounts.tsv.twig", "/opt/domjudge/domserver/webapp/templates/jury/tsv/accounts.tsv.twig");
    }
}
