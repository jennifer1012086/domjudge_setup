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

/* jury/problem_edit.html.twig */
class __TwigTemplate_e2a7a337c54c4c6af4dd2b1902cf209686056ea80e4463ab2b2350333c748edb extends Template
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
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/problem_edit.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/problem_edit.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/problem_edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Edit problem ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "probid", [], "any", false, false, false, 4), "html", null, true);
        echo " - ";
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
    <h1>Edit problem ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "probid", [], "any", false, false, false, 8), "html", null, true);
        echo "</h1>

    <div class=\"row\">
        <div class=\"col-lg-4\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>Problem ID</th>
                    <td>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "probid", [], "any", false, false, false, 15), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Testcases</th>
                    <td>
                        ";
        // line 20
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "testcases", [], "any", false, false, false, 20))) {
            // line 21
            echo "                            <em>no testcases</em>
                        ";
        } else {
            // line 23
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem_testcases", ["probId" => twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "probid", [], "any", false, false, false, 23)]), "html", null, true);
            echo "\">details / edit</a>
                        ";
        }
        // line 25
        echo "                    </td>
                </tr>
            </table>
        </div>
    </div>

    ";
        // line 31
        $this->loadTemplate("jury/partials/problem_form.html.twig", "jury/problem_edit.html.twig", 31)->display($context);
        // line 32
        echo "
    ";
        // line 33
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 34
            echo "        <hr>
        <i>or</i>

        <div class=\"row\">
            <div class=\"col-lg-4\">
                ";
            // line 39
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["uploadForm"] ?? null), 'form');
            echo "
            </div>
        </div>
    ";
        }
        // line 43
        echo "
";
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    public function getTemplateName()
    {
        return "jury/problem_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 43,  134 => 39,  127 => 34,  125 => 33,  122 => 32,  120 => 31,  112 => 25,  106 => 23,  102 => 21,  100 => 20,  92 => 15,  82 => 8,  79 => 7,  72 => 6,  56 => 4,  48 => 1,  46 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/problem_edit.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/problem_edit.html.twig");
    }
}
