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

/* partials/menu_change_contest.html.twig */
class __TwigTemplate_a5b66171dd776700b509629234c48199c77a6dcb64c7930226da8acb6d5710bf extends Template
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
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/menu_change_contest.html.twig"));

        // line 1
        echo "<li class=\"nav-item dropdown\">
    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownContests\" role=\"button\" data-toggle=\"dropdown\"
       aria-haspopup=\"true\" aria-expanded=\"false\">
        <i class=\"fas fa-trophy\"></i> ";
        // line 4
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "shortname", [], "any", true, true, false, 4)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "shortname", [], "any", false, false, false, 4), "no contest")) : ("no contest")), "html", null, true);
        echo "
    </a>
    <div class=\"dropdown-menu scrollable-menu\" aria-labelledby=\"navbarDropdown\" data-current-contest=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["current_contest_id"] ?? null), "html", null, true);
        echo "\">
        <a class=\"dropdown-item disabled\" href=\"#\">Change Contest</a>
        ";
        // line 8
        if ((($context["show_no_contest"] ?? null) &&  !twig_test_empty(($context["contest"] ?? null)))) {
            // line 9
            echo "            <a class=\"dropdown-item\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["change_path"] ?? null), ["contestId" =>  -1]), "html", null, true);
            echo "\">no contest</a>
            <div class=\"dropdown-divider\"></div>
        ";
        }
        // line 12
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, ($context["contests"] ?? null), function ($__c__) use ($context, $macros) { $context["c"] = $__c__; return (0 !== twig_compare($context["c"], ($context["contest"] ?? null))); }));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 13
            echo "            <a class=\"dropdown-item\"
               href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["change_path"] ?? null), ["contestId" => twig_get_attribute($this->env, $this->source, $context["c"], "cid", [], "any", false, false, false, 14)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "shortname", [], "any", false, false, false, 14), "html", null, true);
            echo "</a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    </div>
</li>
";
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    public function getTemplateName()
    {
        return "partials/menu_change_contest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 16,  72 => 14,  69 => 13,  64 => 12,  57 => 9,  55 => 8,  50 => 6,  45 => 4,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "partials/menu_change_contest.html.twig", "/opt/domjudge/domserver/webapp/templates/partials/menu_change_contest.html.twig");
    }
}
