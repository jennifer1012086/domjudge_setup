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

/* jury/partials/rejudging_buttons.html.twig */
class __TwigTemplate_a3b504251eff2d5b537ced25f1eba6dcacfea550628a49b8c05d7de7c13fc0a6 extends Template
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
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/rejudging_buttons.html.twig"));

        // line 1
        if ( !twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "endtime", [], "any", false, false, false, 1)) {
            // line 2
            echo "    <div>
        ";
            // line 3
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_rejudging_finish", ["rejudgingId" => twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "rejudgingid", [], "any", false, false, false, 3), "action" => "cancel"]), "Cancel rejudging", "danger", "times");
            echo "
        ";
            // line 4
            if ((0 === twig_compare(($context["todo"] ?? null), 0))) {
                // line 5
                echo "            ";
                echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_rejudging_finish", ["rejudgingId" => twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "rejudgingid", [], "any", false, false, false, 5), "action" => "apply"]), "Apply rejudging", "success", "check");
                echo "
        ";
            }
            // line 7
            echo "    </div>
";
        } else {
            // line 9
            echo "    <div>
        <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#rejudge-modal\">
            <i class=\"fas fa-sync\"></i> Repeat rejudging
        </button>
    </div>

    <div class=\"modal fade\" id=\"rejudge-modal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">Repeat rejudging</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <form action=\"";
            // line 24
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_create_rejudge");
            echo "\" method=\"post\">
                    <div class=\"modal-body\">
                        <input type=\"hidden\" name=\"table\" value=\"rejudging\"/>
                        <input type=\"hidden\" name=\"id\" value=\"";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "rejudgingid", [], "any", false, false, false, 27), "html", null, true);
            echo "\"/>
                        This will create a new rejudging with the same submissions as this rejudging.
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cancel</button>
                        <input type=\"submit\" value=\"Repeat rejudging\" class=\"btn btn-primary\"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
";
        }
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    public function getTemplateName()
    {
        return "jury/partials/rejudging_buttons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 27,  78 => 24,  61 => 9,  57 => 7,  51 => 5,  49 => 4,  45 => 3,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/partials/rejudging_buttons.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/partials/rejudging_buttons.html.twig");
    }
}
