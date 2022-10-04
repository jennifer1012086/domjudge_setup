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

/* jury/executable.html.twig */
class __TwigTemplate_6e95e9234bd24931423dbf500d33984e361cc26d53925781e0c875754a1dffb5 extends Template
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
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/executable.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/executable.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/executable.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Executable ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["executable"] ?? null), "execid", [], "any", false, false, false, 4), "html", null, true);
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
    <h1>Executable ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["executable"] ?? null), "execid", [], "any", false, false, false, 13), "html", null, true);
        echo "</h1>

    <div class=\"row\">
        <div class=\"col-lg-4\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>ID</th>
                    <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["executable"] ?? null), "execid", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["executable"] ?? null), "description", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Type</th>
                    <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["executable"] ?? null), "type", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Content</th>
                    <td>
                        <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_executable_edit_files", ["execId" => twig_get_attribute($this->env, $this->source, ($context["executable"] ?? null), "execid", [], "any", false, false, false, 33)]), "html", null, true);
        echo "\">
                            View/edit file contents
                        </a>
                    </td>
                </tr>
                <tr>
                    <th>Used as ";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["executable"] ?? null), "type", [], "any", false, false, false, 39), "html", null, true);
        echo " script</th>
                    <td>
                        ";
        // line 41
        $context["used"] = false;
        // line 42
        echo "                        ";
        if (((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["executable"] ?? null), "type", [], "any", false, false, false, 42), "compare")) && (0 === twig_compare(($context["default_compare"] ?? null), twig_get_attribute($this->env, $this->source, ($context["executable"] ?? null), "execid", [], "any", false, false, false, 42))))) {
            // line 43
            echo "                            <em>default compare</em>
                            ";
            // line 44
            $context["used"] = true;
            // line 45
            echo "                        ";
        } elseif (((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["executable"] ?? null), "type", [], "any", false, false, false, 45), "run")) && (0 === twig_compare(($context["default_run"] ?? null), twig_get_attribute($this->env, $this->source, ($context["executable"] ?? null), "execid", [], "any", false, false, false, 45))))) {
            // line 46
            echo "                            <em>default run</em>
                            ";
            // line 47
            $context["used"] = true;
            // line 48
            echo "                        ";
        }
        // line 49
        echo "                        ";
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["executable"] ?? null), "type", [], "any", false, false, false, 49), "compare"))) {
            // line 50
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["executable"] ?? null), "problemsCompare", [], "any", false, false, false, 50));
            foreach ($context['_seq'] as $context["_key"] => $context["problem"]) {
                // line 51
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem", ["probId" => twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 51)]), "html", null, true);
                echo "\">
                                    p";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 52), "html", null, true);
                echo "
                                </a>
                                ";
                // line 54
                $context["used"] = true;
                // line 55
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "                        ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["executable"] ?? null), "type", [], "any", false, false, false, 56), "run"))) {
            // line 57
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["executable"] ?? null), "problemsRun", [], "any", false, false, false, 57));
            foreach ($context['_seq'] as $context["_key"] => $context["problem"]) {
                // line 58
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem", ["probId" => twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 58)]), "html", null, true);
                echo "\">
                                    p";
                // line 59
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 59), "html", null, true);
                echo "
                                </a>
                                ";
                // line 61
                $context["used"] = true;
                // line 62
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "                        ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["executable"] ?? null), "type", [], "any", false, false, false, 63), "compile"))) {
            // line 64
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["executable"] ?? null), "languages", [], "any", false, false, false, 64));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 65
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_language", ["langId" => twig_get_attribute($this->env, $this->source, $context["language"], "langid", [], "any", false, false, false, 65)]), "html", null, true);
                echo "\">
                                    ";
                // line 66
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["language"], "langid", [], "any", false, false, false, 66), "html", null, true);
                echo "
                                </a>
                                ";
                // line 68
                $context["used"] = true;
                // line 69
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "                        ";
        }
        // line 71
        echo "                        ";
        if ( !($context["used"] ?? null)) {
            // line 72
            echo "                            <span class=\"nodata\">none</span>
                        ";
        }
        // line 74
        echo "                    </td>
                </tr>
            </table>
        </div>
    </div>

    <div class=\"mb-4\">";
        // line 81
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 82
            echo "<p>
                ";
            // line 83
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_executable_download", ["execId" => twig_get_attribute($this->env, $this->source, ($context["executable"] ?? null), "execid", [], "any", false, false, false, 83)]), "Download", "secondary", "file-download");
            echo "
                ";
            // line 84
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_executable_edit", ["execId" => twig_get_attribute($this->env, $this->source, ($context["executable"] ?? null), "execid", [], "any", false, false, false, 84)]), "Edit", "primary", "edit");
            echo "
                ";
            // line 85
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_executable_delete", ["execId" => twig_get_attribute($this->env, $this->source, ($context["executable"] ?? null), "execid", [], "any", false, false, false, 85)]), "Delete", "danger", "trash-alt", true);
            echo "
            </p>
        ";
        }
        // line 88
        echo "    </div>

";
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    public function getTemplateName()
    {
        return "jury/executable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 88,  280 => 85,  276 => 84,  272 => 83,  269 => 82,  267 => 81,  259 => 74,  255 => 72,  252 => 71,  249 => 70,  243 => 69,  241 => 68,  236 => 66,  231 => 65,  226 => 64,  223 => 63,  217 => 62,  215 => 61,  210 => 59,  205 => 58,  200 => 57,  197 => 56,  191 => 55,  189 => 54,  184 => 52,  179 => 51,  174 => 50,  171 => 49,  168 => 48,  166 => 47,  163 => 46,  160 => 45,  158 => 44,  155 => 43,  152 => 42,  150 => 41,  145 => 39,  136 => 33,  128 => 28,  121 => 24,  114 => 20,  104 => 13,  101 => 12,  94 => 11,  85 => 8,  80 => 7,  73 => 6,  57 => 4,  49 => 1,  47 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/executable.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/executable.html.twig");
    }
}
