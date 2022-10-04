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

/* partials/javascript_language_detect.html.twig */
class __TwigTemplate_1d46d727ae1d5e56cb3ae8b839d456e8ecb4f726a1173482b32c56a0364609c3 extends Template
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
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/javascript_language_detect.html.twig"));

        // line 2
        echo "<script>
    function getMainExtension(ext) {
        switch (ext) {
                ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["submission_languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 6
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["language"], "extensions", [], "any", false, false, false, 6));
            foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                // line 7
                echo "            case '";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, $context["extension"]), "html", null, true);
                echo "':
                return '";
                // line 8
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["language"], "langid", [], "any", false, false, false, 8), "html", null, true);
                echo "';
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "            default:
                return '';
        }
    }

    function getEntryPoint(mainext) {
        switch (mainext) {
                ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["submission_languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 19
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, $context["language"], "requireEntryPoint", [], "any", false, false, false, 19)) {
                // line 20
                echo "            case '";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["language"], "langid", [], "any", false, false, false, 20), "html", null, true);
                echo "':
                return '";
                // line 21
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["language"], "entryPointDescription", [], "any", true, true, false, 21)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["language"], "entryPointDescription", [], "any", false, false, false, 21), "Entry point")) : ("Entry point")), "html", null, true);
                echo "';
                ";
            }
            // line 23
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "            default:
                return '';
        }
    }
</script>
";
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    public function getTemplateName()
    {
        return "partials/javascript_language_detect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 24,  99 => 23,  94 => 21,  89 => 20,  86 => 19,  82 => 18,  73 => 11,  67 => 10,  59 => 8,  54 => 7,  49 => 6,  45 => 5,  40 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "partials/javascript_language_detect.html.twig", "/opt/domjudge/domserver/webapp/templates/partials/javascript_language_detect.html.twig");
    }
}
