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

/* partials/menu_countdown.html.twig */
class __TwigTemplate_34acec58716520ba33ee73c40eb6a2a3d253b1e9d7ae27b65c7e93e0b902468b extends Template
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
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/menu_countdown.html.twig"));

        // line 1
        echo "<div class=\"navbar-text\" style=\"white-space:nowrap;\">
    <span style=\"padding-left: 10px;\">
        <i class=\"fas fa-clock loading-indicator\"></i>
    </span>
    ";
        // line 5
        $context["now"] = twig_date_format_filter($this->env, "now", "U");
        // line 6
        echo "    <span id=\"timeleft\">";
        // line 7
        if ((null === ($context["contest"] ?? null))) {
            // line 8
            echo "no contest";
        } else {
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "countdownString", [], "any", false, false, false, 10), "html", null, true);
        }
        // line 12
        echo "</span>
</div>

<script>
    var initial = ";
        // line 16
        echo twig_escape_filter($this->env, ($context["now"] ?? null), "html", null, true);
        echo ";
    var localInitial = new Date().getTime();
    var activatetime = ";
        // line 18
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "activatetime", [], "any", true, true, false, 18)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "activatetime", [], "any", false, false, false, 18),  -1)) : ( -1)), "html", null, true);
        echo ";
    var starttime = ";
        // line 19
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "starttime", [], "any", true, true, false, 19)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "starttime", [], "any", false, false, false, 19),  -1)) : ( -1)), "html", null, true);
        echo ";
    var endtime = ";
        // line 20
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "endtime", [], "any", true, true, false, 20)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "endtime", [], "any", false, false, false, 20),  -1)) : ( -1)), "html", null, true);
        echo ";
    var clientOffset = localInitial - new Date(initial * 1000).getTime();
    var timeleftelt = document.getElementById(\"timeleft\");

    setInterval(function () {
        updateClock();
    }, 1000);
    updateClock();
</script>
";
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    public function getTemplateName()
    {
        return "partials/menu_countdown.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 20,  73 => 19,  69 => 18,  64 => 16,  58 => 12,  55 => 10,  52 => 8,  50 => 7,  48 => 6,  46 => 5,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "partials/menu_countdown.html.twig", "/opt/domjudge/domserver/webapp/templates/partials/menu_countdown.html.twig");
    }
}
