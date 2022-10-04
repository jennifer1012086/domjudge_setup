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

/* jury/import_export.html.twig */
class __TwigTemplate_02258d1c55921c6b021ce13ecfabd71098e66145b5af3cac99eed5c3799b8d40 extends Template
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
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/import_export.html.twig"));

        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/import_export.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Import and export - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
    <h1>Import and export</h1>

    <div class=\"importexport\">
    <h2 id=\"problemarchive\">Problems</h2>
    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"tile\">
                <h3>Import archive</h3>
                ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["problem_form"] ?? null), 'form');
        echo "
            </div>
        </div>
    </div>

    <h2 id=\"contests\">Contests</h2>
    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"tile\">
                <h3>Import JSON / YAML</h3>
                ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["contest_import_form"] ?? null), 'form');
        echo "
            </div>
        </div>
        <div class=\"col-md-6\">
            <div class=\"tile\">
                <h3>Export YAML</h3>
                ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["contest_export_form"] ?? null), 'form');
        echo "
            </div>
        </div>
    </div>

    <h2 id=\"problems\">Problems</h2>
    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"tile\">
                <h3>Import JSON / YAML</h3>
                ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["problems_import_form"] ?? null), 'form');
        echo "
            </div>
        </div>
    </div>


    <h2 id=\"teams\">Teams &amp; groups</h2>
    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"tile\">
            <h3>Import tab-separated</h3>
                ";
        // line 52
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["tsv_form"] ?? null), 'form');
        echo "
            </div>
        </div>
        <div class=\"col-md-6\">
            <div class=\"tile\">
                <h3>Export tab-separated</h3>
                <ul>
                ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable([0 => "groups", 1 => "teams"]);
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 60
            echo "                    <li>
                        <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_tsv_export", ["type" => $context["type"]]), "html", null, true);
            echo "\"><code>";
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo ".tsv</code></a>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                </ul>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"tile\">
            <h3>Import JSON / YAML</h3>
                ";
        // line 72
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["json_form"] ?? null), 'form');
        echo "
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"tile\">
            <h3>Import teams from ICPC CMS</h3>
                ";
        // line 80
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["icpccms_form"] ?? null), 'form_start');
        echo "
                ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["icpccms_form"] ?? null), "contest_id", [], "any", false, false, false, 81), 'row');
        echo "
                ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["icpccms_form"] ?? null), "access_token", [], "any", false, false, false, 82), 'row');
        echo "
                ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["icpccms_form"] ?? null), "fetch_teams", [], "any", false, false, false, 83), 'widget');
        echo "
                ";
        // line 84
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["icpccms_form"] ?? null), 'form_end');
        echo "
            </div>
        </div>
    </div>

    <h2 id=\"results\">Results</h2>
    <div class=\"row\">
        <div class=\"col-md-6\">
        </div>
        <div class=\"col-md-6\">
            <div class=\"tile\">
                <h3>Export &lt;html&gt;</h3>
                    <ul>
                        <li>
                            <code>results.html</code>:
                            <ul>
                                ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sort_orders"] ?? null));
        foreach ($context['_seq'] as $context["sort_order"] => $context["names"]) {
            // line 101
            echo "                                    <li>
                                        <a href=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_html_export", ["type" => "results", "sort_order" => $context["sort_order"]]), "html", null, true);
            echo "\">for sort order ";
            echo twig_escape_filter($this->env, $context["sort_order"], "html", null, true);
            echo "</a>
                                        (";
            // line 103
            echo twig_escape_filter($this->env, twig_join_filter($context["names"], ", "), "html", null, true);
            echo ")
                                    </li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['sort_order'], $context['names'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "                            </ul>
                        </li>
                    <li>
                        <a href=\"";
        // line 109
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_html_export", ["type" => "clarifications"]);
        echo "\" target=\"_blank\"><code>clarifications.html</code></a>
                    </li>
                    </ul>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-6\">
        </div>
        <div class=\"col-md-6\">
            <div class=\"tile\">
                <h3>Export tab-separated</h3>
                    <ul>
                        <li>
                            <code>results.tsv</code>:
                            <ul>
                            ";
        // line 125
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sort_orders"] ?? null));
        foreach ($context['_seq'] as $context["sort_order"] => $context["names"]) {
            // line 126
            echo "                                <li>
                                    <a href=\"";
            // line 127
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_tsv_export", ["type" => "results", "sort_order" => $context["sort_order"]]), "html", null, true);
            echo "\">for sort order ";
            echo twig_escape_filter($this->env, $context["sort_order"], "html", null, true);
            echo "</a>
                                    (";
            // line 128
            echo twig_escape_filter($this->env, twig_join_filter($context["names"], ", "), "html", null, true);
            echo ")
                                 </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['sort_order'], $context['names'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        echo "                            </ul>
                        </li>
                    </ul>
             </div>
        </div>
    </div>
    </div>

";
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    public function getTemplateName()
    {
        return "jury/import_export.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 131,  277 => 128,  271 => 127,  268 => 126,  264 => 125,  245 => 109,  240 => 106,  231 => 103,  225 => 102,  222 => 101,  218 => 100,  199 => 84,  195 => 83,  191 => 82,  187 => 81,  183 => 80,  172 => 72,  162 => 64,  151 => 61,  148 => 60,  144 => 59,  134 => 52,  120 => 41,  107 => 31,  98 => 25,  85 => 15,  74 => 6,  67 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/import_export.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/import_export.html.twig");
    }
}
