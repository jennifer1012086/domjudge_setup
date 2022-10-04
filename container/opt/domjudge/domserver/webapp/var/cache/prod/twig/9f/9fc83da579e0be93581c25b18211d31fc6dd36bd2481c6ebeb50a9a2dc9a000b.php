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

/* jury/partials/clarification_form.html.twig */
class __TwigTemplate_3efc0a12ac58120c32fc18c6237e16bb7adb964cdd1cef0857cf6476da7f05e7 extends Template
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
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/clarification_form.html.twig"));

        // line 1
        echo "<form action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_clarification_send");
        echo "\" method=\"post\" id=\"sendclar\" onsubmit=\"return confirmClar();\">

";
        // line 3
        if (twig_get_attribute($this->env, $this->source, ($context["origclar"] ?? null), "clarid", [], "any", true, true, false, 3)) {
            // line 4
            echo "<input type=\"hidden\" name=\"id\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["origclar"] ?? null), "clarid", [], "any", false, false, false, 4), "html", null, true);
            echo "\">
";
        }
        // line 6
        echo "
<div class=\"form-group\">
<label for=\"sendto\">Send to:</label>
<select id=\"sendto\" name=\"sendto\" class=\"custom-select\">
";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["clarform"] ?? null), "teams", [], "any", false, false, false, 10));
        foreach ($context['_seq'] as $context["id"] => $context["team"]) {
            // line 11
            echo "<option value=\"";
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, ($context["clarform"] ?? null), "toteam", [], "any", true, true, false, 11) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["clarform"] ?? null), "toteam", [], "any", false, false, false, 11), $context["id"])))) {
                echo " selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["team"], "html", null, true);
            echo "</option>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['team'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "</select>
</div>

<div class=\"form-group\">
<label for=\"subject\">Subject:</label>
<select name=\"problem\" id=\"subject\" class=\"custom-select\">
";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["clarform"] ?? null), "subjects", [], "any", false, false, false, 19));
        foreach ($context['_seq'] as $context["contest"] => $context["subject"]) {
            // line 20
            echo "<optgroup label=\"";
            echo twig_escape_filter($this->env, $context["contest"], "html", null, true);
            echo "\">
";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["subject"]);
            foreach ($context['_seq'] as $context["id"] => $context["descr"]) {
                // line 22
                echo "<option value=\"";
                echo twig_escape_filter($this->env, $context["id"], "html", null, true);
                echo "\"";
                if ((twig_get_attribute($this->env, $this->source, ($context["clarform"] ?? null), "onsubject", [], "any", true, true, false, 22) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["clarform"] ?? null), "onsubject", [], "any", false, false, false, 22), $context["id"])))) {
                    echo " selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, $context["descr"], "html", null, true);
                echo "</option>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['id'], $context['descr'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "</optgroup>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['contest'], $context['subject'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "</select>
</div>

<div class=\"form-group\">
<label for=\"bodytext\">Message:</label>
<textarea class=\"form-control\" name=\"bodytext\" id=\"bodytext\" rows=\"8\" cols=\"85\" required>";
        // line 31
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["clarform"] ?? null), "quotedtext", [], "any", true, true, false, 31)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["clarform"] ?? null), "quotedtext", [], "any", false, false, false, 31), "")) : ("")), "html", null, true);
        echo "</textarea>
</div>

<div class=\"row\">
<div class=\"col-sm\">
<div class=\"form-group\">
<button type=\"submit\" name=\"submit\" class=\"btn btn-primary\"><i class=\"fas fa-envelope\"></i> Send</button>
</div>
</div>

<div class=\"col-sm text-right\">
";
        // line 42
        if ((twig_get_attribute($this->env, $this->source, ($context["clarform"] ?? null), "answers", [], "any", true, true, false, 42) && (1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["clarform"] ?? null), "answers", [], "any", false, false, false, 42)), 0)))) {
            // line 43
            echo "<div class=\"input-group\">
<div class=\"input-group-prepend\">
<div class=\"input-group-text\"><i class=\"fas fa-fish\"></i></div>
</div>
<select class=\"custom-select form-control-sm\" id=\"clar_answers\">
<option selected value=\"_default\">Add canned answer...</option>
";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["clarform"] ?? null), "answers", [], "any", false, false, false, 49));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 50
                echo "<option>";
                echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                echo "</option>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "</select>
</div>
";
        }
        // line 55
        echo "</div>

</div>

</form>
";
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    public function getTemplateName()
    {
        return "jury/partials/clarification_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 55,  166 => 52,  157 => 50,  153 => 49,  145 => 43,  143 => 42,  129 => 31,  122 => 26,  115 => 24,  100 => 22,  96 => 21,  91 => 20,  87 => 19,  79 => 13,  64 => 11,  60 => 10,  54 => 6,  48 => 4,  46 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/partials/clarification_form.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/partials/clarification_form.html.twig");
    }
}
