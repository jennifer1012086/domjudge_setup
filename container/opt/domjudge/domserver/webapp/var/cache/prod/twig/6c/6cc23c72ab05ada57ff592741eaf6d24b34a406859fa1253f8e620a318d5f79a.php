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

/* jury/language.html.twig */
class __TwigTemplate_c9ff558e3f0735d91c043cf3968c94a3e4667bfd2ec24802a1717b05e689bd24 extends Template
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
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/language.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/language.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/language.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Language ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "langid", [], "any", false, false, false, 4), "html", null, true);
        echo " - ";
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
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    // line 11
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 12
        echo "
    <h1>Language ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "name", [], "any", false, false, false, 13), "html", null, true);
        echo "</h1>

    <div class=\"row\">
        <div class=\"col-lg-4\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>ID/extension</th>
                    <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "langid", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
                </tr>
                ";
        // line 22
        if ($this->extensions['App\Twig\TwigExtension']->showExternalId(($context["language"] ?? null))) {
            // line 23
            echo "                    <tr>
                        <th>External ID</th>
                        <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "externalid", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        // line 28
        echo "                <tr>
                    <th>Name</th>
                    <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "name", [], "any", false, false, false, 30), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Entry point</th>
                    <td>
                        ";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "requireEntryPoint", [], "any", false, false, false, 35)), "html", null, true);
        echo "
                        ";
        // line 36
        if ((twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "requireEntryPoint", [], "any", false, false, false, 36) && twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "entryPointDescription", [], "any", false, false, false, 36))) {
            // line 37
            echo "                            (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "entryPointDescription", [], "any", false, false, false, 37), "html", null, true);
            echo ")
                        ";
        }
        // line 39
        echo "                    </td>
                </tr>
                <tr>
                    <th>Allow submit</th>
                    <td>
                        ";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "allowSubmit", [], "any", false, false, false, 44)), "html", null, true);
        echo "
                        <form action=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_language_toggle_submit", ["langId" => twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "langid", [], "any", false, false, false, 45)]), "html", null, true);
        echo "\" method=\"post\" class=\"d-inline\">
                            <input type=\"hidden\" name=\"allow_submit\" value=\"";
        // line 46
        echo twig_escape_filter($this->env,  !twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "allowSubmit", [], "any", false, false, false, 46), "html", null, true);
        echo "\" />
                            <input type=\"submit\" class=\"btn btn-sm btn-outline-secondary\" value=\"toggle\"/>
                        </form>
                    </td>
                </tr>
                <tr>
                    <th>Allow judge</th>
                    <td>
                        ";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "allowJudge", [], "any", false, false, false, 54)), "html", null, true);
        echo "
                        <form action=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_language_toggle_judge", ["langId" => twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "langid", [], "any", false, false, false, 55)]), "html", null, true);
        echo "\" method=\"post\" class=\"d-inline\">
                            <input type=\"hidden\" name=\"allow_judge\" value=\"";
        // line 56
        echo twig_escape_filter($this->env,  !twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "allowJudge", [], "any", false, false, false, 56), "html", null, true);
        echo "\" />
                            <input type=\"submit\" class=\"btn btn-sm btn-outline-secondary\" value=\"toggle\"/>
                        </form>
                    </td>
                </tr>
                <tr>
                    <th>Time factor</th>
                    <td>";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "timeFactor", [], "any", false, false, false, 63), "html", null, true);
        echo " &times;</td>
                </tr>
                <tr>
                    <th>Compile script</th>
                    <td>
                        ";
        // line 68
        if (twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "compileExecutable", [], "any", false, false, false, 68)) {
            // line 69
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_executable", ["execId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "compileExecutable", [], "any", false, false, false, 69), "execid", [], "any", false, false, false, 69)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "compileExecutable", [], "any", false, false, false, 69), "execid", [], "any", false, false, false, 69), "html", null, true);
            echo "</a>
                        ";
        } else {
            // line 71
            echo "                            <span class=\"nodata\">none specified</span>
                        ";
        }
        // line 73
        echo "                    </td>
                </tr>
                <tr>
                    <th>Extensions</th>
                    <td>";
        // line 77
        echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "extensions", [], "any", false, false, false, 77), ", "), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Filter files passed to compiler by extension list</th>
                    <td>
                        ";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "filterCompilerFiles", [], "any", false, false, false, 82)), "html", null, true);
        echo "
                    </td>
                </tr>
            </table>
        </div>
    </div>

    <div class=\"button-row\">";
        // line 90
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 91
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_language_edit", ["langId" => twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "langid", [], "any", false, false, false, 91)]), "Edit", "primary", "edit");
            echo "
            ";
            // line 92
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_language_delete", ["langId" => twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "langid", [], "any", false, false, false, 92)]), "Delete", "danger", "trash-alt", true);
            echo "
            ";
            // line 93
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_language_request_remaining", ["langId" => twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "langid", [], "any", false, false, false, 93)]), "Judge remaining", "secondary", "gavel");
            echo "
        ";
        }
        // line 95
        echo "        ";
        $this->loadTemplate("jury/partials/rejudge_form.html.twig", "jury/language.html.twig", 95)->display(twig_array_merge($context, ["table" => "language", "id" => twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "langid", [], "any", false, false, false, 95), "buttonClass" => "btn-secondary"]));
        // line 96
        echo "    </div>

    <h2>Submissions in ";
        // line 98
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "name", [], "any", false, false, false, 98), "html", null, true);
        echo "</h2>

    <div data-ajax-refresh-target>";
        // line 101
        $this->loadTemplate("jury/partials/submission_list.html.twig", "jury/language.html.twig", 101)->display(twig_array_merge($context, ["showTestcases" => false]));
        // line 102
        echo "    </div>

";
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    public function getTemplateName()
    {
        return "jury/language.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 102,  272 => 101,  267 => 98,  263 => 96,  260 => 95,  255 => 93,  251 => 92,  247 => 91,  245 => 90,  235 => 82,  227 => 77,  221 => 73,  217 => 71,  209 => 69,  207 => 68,  199 => 63,  189 => 56,  185 => 55,  181 => 54,  170 => 46,  166 => 45,  162 => 44,  155 => 39,  149 => 37,  147 => 36,  143 => 35,  135 => 30,  131 => 28,  125 => 25,  121 => 23,  119 => 22,  114 => 20,  104 => 13,  101 => 12,  94 => 11,  85 => 8,  80 => 7,  73 => 6,  57 => 4,  49 => 1,  47 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/language.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/language.html.twig");
    }
}
