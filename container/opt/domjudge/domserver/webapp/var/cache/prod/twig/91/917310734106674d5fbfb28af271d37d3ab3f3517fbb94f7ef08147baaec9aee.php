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

/* jury/contests.html.twig */
class __TwigTemplate_048b2ff08f29f4cc57333b311407f73fd960d4cbee05a8db796d65c340b9048f extends Template
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
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/contests.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/contests.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/contests.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Contests - ";
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
        echo "    <h1>Contests</h1>

    <h3>Current contests</h3>

    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["current_contests"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["contest"]) {
            // line 17
            echo "        ";
            // line 18
            echo "        <form action=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contests");
            echo "\" method=\"post\">
            <input type=\"hidden\" name=\"contest\" value=\"";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contest"], "cid", [], "any", false, false, false, 19), "html", null, true);
            echo "\"/>
            <div class=\"row mb-4\">
                <div class=\"col-lg-8\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            ";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contest"], "name", [], "any", false, false, false, 24), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contest"], "shortname", [], "any", false, false, false, 24), "html", null, true);
            echo " - c";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contest"], "cid", [], "any", false, false, false, 24), "html", null, true);
            echo ")
                        </div>
                        <div class=\"card-body\">
                            ";
            // line 27
            if (( !twig_get_attribute($this->env, $this->source, $context["contest"], "starttimeEnabled", [], "any", false, false, false, 27) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["contest"], "finalizetime", [], "any", false, false, false, 27)))) {
                // line 28
                echo "                                <div class=\"alert alert-warning\">
                                    <strong>Warning:</strong> start time is undefined, but contest is finalized!
                                </div>
                            ";
            }
            // line 32
            echo "                            <table class=\"table table-hover\">
                                <tbody>
                                ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["contest"], "dataForJuryInterface", [], "any", false, false, false, 34));
            foreach ($context['_seq'] as $context["type"] => $context["data"]) {
                // line 35
                echo "                                    <tr>
                                        <td class=\"";
                // line 36
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["data"], "class", [], "any", true, true, false, 36)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["data"], "class", [], "any", false, false, false, 36), "")) : ("")), "html", null, true);
                echo "\">
                                            ";
                // line 37
                if (twig_get_attribute($this->env, $this->source, $context["data"], "icon", [], "any", true, true, false, 37)) {
                    // line 38
                    echo "                                                <i class=\"fas fa-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "icon", [], "any", false, false, false, 38), "html", null, true);
                    echo "\"></i>
                                            ";
                }
                // line 40
                echo "                                        </td>
                                        <td class=\"";
                // line 41
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["data"], "class", [], "any", true, true, false, 41)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["data"], "class", [], "any", false, false, false, 41), "")) : ("")), "html", null, true);
                echo "\"><b>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "label", [], "any", false, false, false, 41), "html", null, true);
                echo ":</b></td>
                                        <td class=\"";
                // line 42
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["data"], "class", [], "any", true, true, false, 42)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["data"], "class", [], "any", false, false, false, 42), "")) : ("")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "time", [], "any", false, false, false, 42), "html", null, true);
                echo "</td>
                                        ";
                // line 43
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 44
                    echo "                                            <td>
                                                ";
                    // line 45
                    if (twig_get_attribute($this->env, $this->source, $context["data"], "show_button", [], "any", false, false, false, 45)) {
                        // line 46
                        echo "                                                    <input type=\"submit\" class=\"btn btn-primary btn-sm\"
                                                           name=\"donow[";
                        // line 47
                        echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                        echo "]\" value=\"";
                        echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                        echo " now\"/>
                                                ";
                    }
                    // line 49
                    echo "                                                ";
                    if (twig_get_attribute($this->env, $this->source, $context["data"], "extra_button", [], "any", true, true, false, 49)) {
                        // line 50
                        echo "                                                    <input type=\"submit\" class=\"btn btn-primary btn-sm\"
                                                           name=\"donow[";
                        // line 51
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["data"], "extra_button", [], "any", false, false, false, 51), "type", [], "any", false, false, false, 51), "html", null, true);
                        echo "]\"
                                                           value=\"";
                        // line 52
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["data"], "extra_button", [], "any", false, false, false, 52), "label", [], "any", false, false, false, 52), "html", null, true);
                        echo "\"/>
                                                ";
                    }
                    // line 54
                    echo "                                            </td>
                                        ";
                }
                // line 56
                echo "                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 66
            echo "        ";
            if (twig_test_empty(($context["upcoming_contest"] ?? null))) {
                // line 67
                echo "            <div class=\"alert alert-danger\">
                No upcoming contest
            </div>
        ";
            } else {
                // line 71
                echo "            <div class=\"alert alert-warning\">
                <strong>No active contest.</strong> Upcoming:<br/>
                <p>
                    <i>";
                // line 74
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["upcoming_contest"] ?? null), "name", [], "any", false, false, false, 74), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["upcoming_contest"] ?? null), "shortname", [], "any", false, false, false, 74), "html", null, true);
                echo ")</i>;
                    active from ";
                // line 75
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, ($context["upcoming_contest"] ?? null), "activatetime", [], "any", false, false, false, 75), "D d M Y H:i:s T"), "html", null, true);
                echo "
                </p>
                <form action=\"";
                // line 77
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contests");
                echo "\" method=\"post\">
                    <input type=\"hidden\" name=\"contest\" value=\"";
                // line 78
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["upcoming_contest"] ?? null), "cid", [], "any", false, false, false, 78), "html", null, true);
                echo "\"/>
                    <input type=\"submit\" class=\"btn btn-primary\" name=\"donow[activate]\" value=\"Activate now\"/>
                </form>
            </div>
        ";
            }
            // line 83
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contest'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "
    <h3>All available contests</h3>

    ";
        // line 87
        echo twig_call_macro($macros["macros"], "macro_table", [($context["contests_table"] ?? null), ($context["table_fields"] ?? null), ($context["num_actions"] ?? null)], 87, $context, $this->getSourceContext());
        echo "

    ";
        // line 89
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 90
            echo "        <p>
            ";
            // line 91
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contest_add"), "Add new contest", "primary", "plus");
            echo "
            ";
            // line 92
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_import_export", ["_fragment" => "contests"]), "Import contest", "primary", "upload");
            echo "
        </p>
    ";
        }
        // line 95
        echo "
";
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    public function getTemplateName()
    {
        return "jury/contests.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  304 => 95,  298 => 92,  294 => 91,  291 => 90,  289 => 89,  284 => 87,  279 => 84,  273 => 83,  265 => 78,  261 => 77,  256 => 75,  250 => 74,  245 => 71,  239 => 67,  236 => 66,  224 => 58,  217 => 56,  213 => 54,  208 => 52,  204 => 51,  201 => 50,  198 => 49,  191 => 47,  188 => 46,  186 => 45,  183 => 44,  181 => 43,  175 => 42,  169 => 41,  166 => 40,  160 => 38,  158 => 37,  154 => 36,  151 => 35,  147 => 34,  143 => 32,  137 => 28,  135 => 27,  125 => 24,  117 => 19,  112 => 18,  110 => 17,  105 => 16,  99 => 12,  92 => 11,  83 => 8,  78 => 7,  71 => 6,  57 => 4,  49 => 1,  47 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/contests.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/contests.html.twig");
    }
}
