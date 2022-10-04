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

/* jury/judgehost.html.twig */
class __TwigTemplate_730de64060a42b6814cb735cf2fd970059950f54055473018391cd3133c732e1 extends Template
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
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/judgehost.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/judgehost.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/judgehost.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Judgehost ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["judgehost"] ?? null), "hostname", [], "any", false, false, false, 4), "html", null, true);
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
    <h1>Judgehost ";
        // line 13
        echo $this->extensions['App\Twig\TwigExtension']->printHost(twig_get_attribute($this->env, $this->source, ($context["judgehost"] ?? null), "hostname", [], "any", false, false, false, 13));
        echo "</h1>

    ";
        // line 15
        if (twig_get_attribute($this->env, $this->source, ($context["judgehost"] ?? null), "hidden", [], "any", false, false, false, 15)) {
            // line 16
            echo "        <div class=\"alert alert-warning\">This judgehost is currently hidden.</div>
    ";
        }
        // line 18
        echo "
    <div class=\"row\">
        <div class=\"col-lg-4\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>ID</th>
                    <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["judgehost"] ?? null), "judgehostid", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td>";
        // line 28
        echo $this->extensions['App\Twig\TwigExtension']->printHost(twig_get_attribute($this->env, $this->source, ($context["judgehost"] ?? null), "hostname", [], "any", false, false, false, 28));
        echo "</td>
                </tr>
                <tr>
                    <th>Enabled</th>
                    <td>";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, ($context["judgehost"] ?? null), "enabled", [], "any", false, false, false, 32)), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>
                        ";
        // line 37
        if ( !twig_get_attribute($this->env, $this->source, ($context["judgehost"] ?? null), "polltime", [], "any", false, false, false, 37)) {
            // line 38
            echo "                            Judgehost never checked in.
                        ";
        } else {
            // line 40
            echo "                            ";
            echo twig_escape_filter($this->env, ($context["status"] ?? null), "html", null, true);
            echo ", last checked in ";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtimediff(twig_get_attribute($this->env, $this->source, ($context["judgehost"] ?? null), "polltime", [], "any", false, false, false, 40)), "html", null, true);
            echo "s ago.
                        ";
        }
        // line 42
        echo "                    </td>
                </tr>
            </table>
        </div>
    </div>

    <div class=\"mb-4\">";
        // line 49
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 50
            if (twig_get_attribute($this->env, $this->source, ($context["judgehost"] ?? null), "enabled", [], "any", false, false, false, 50)) {
                // line 51
                $context["url"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_judgehost_disable", ["judgehostid" => twig_get_attribute($this->env, $this->source, ($context["judgehost"] ?? null), "judgehostid", [], "any", false, false, false, 51)]);
                // line 52
                echo "                ";
                $context["icon"] = "pause";
                // line 53
                echo "                ";
                $context["action"] = "Disable";
                // line 54
                echo "                ";
                $context["class"] = "warning";
            } else {
                // line 56
                $context["url"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_judgehost_enable", ["judgehostid" => twig_get_attribute($this->env, $this->source, ($context["judgehost"] ?? null), "judgehostid", [], "any", false, false, false, 56)]);
                // line 57
                echo "                ";
                $context["icon"] = "play";
                // line 58
                echo "                ";
                $context["action"] = "Enable";
                // line 59
                echo "                ";
                $context["class"] = "success";
            }
            // line 61
            echo $this->extensions['App\Twig\TwigExtension']->button(($context["url"] ?? null), ($context["action"] ?? null), ($context["class"] ?? null), ($context["icon"] ?? null));
            echo "
            ";
            // line 62
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_judgehost_delete", ["judgehostid" => twig_get_attribute($this->env, $this->source, ($context["judgehost"] ?? null), "judgehostid", [], "any", false, false, false, 62)]), "Delete judgehost", "danger", "trash-alt", true);
            echo "
        ";
        }
        // line 64
        echo "        ";
        $this->loadTemplate("jury/partials/rejudge_form.html.twig", "jury/judgehost.html.twig", 64)->display(twig_array_merge($context, ["table" => "judgehost", "id" => twig_get_attribute($this->env, $this->source, ($context["judgehost"] ?? null), "judgehostid", [], "any", false, false, false, 64), "buttonClass" => "btn-primary"]));
        // line 65
        echo "    </div>

    <h3>Judgings by ";
        // line 67
        echo $this->extensions['App\Twig\TwigExtension']->printHost(twig_get_attribute($this->env, $this->source, ($context["judgehost"] ?? null), "hostname", [], "any", false, false, false, 67));
        echo "</h3>

    <div data-ajax-refresh-target>
        ";
        // line 70
        $this->loadTemplate("jury/partials/judgehost_judgings.html.twig", "jury/judgehost.html.twig", 70)->display($context);
        // line 71
        echo "    </div>

";
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    public function getTemplateName()
    {
        return "jury/judgehost.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 71,  217 => 70,  211 => 67,  207 => 65,  204 => 64,  199 => 62,  195 => 61,  191 => 59,  188 => 58,  185 => 57,  183 => 56,  179 => 54,  176 => 53,  173 => 52,  171 => 51,  169 => 50,  167 => 49,  159 => 42,  151 => 40,  147 => 38,  145 => 37,  137 => 32,  130 => 28,  123 => 24,  115 => 18,  111 => 16,  109 => 15,  104 => 13,  101 => 12,  94 => 11,  85 => 8,  80 => 7,  73 => 6,  57 => 4,  49 => 1,  47 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/judgehost.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/judgehost.html.twig");
    }
}
