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

/* jury/config_check.html.twig */
class __TwigTemplate_e7484bd903bc7b25d1eb3438531084dff42f60a265f0e9c70f34b0c344ddc329 extends Template
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
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/config_check.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/config_check.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/config_check.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Configuration check - ";
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
        echo "<div class=\"card w-40 float-right m-5\">
  <div class=\"card-body\">
  <h5 class=\"card-title\">System information</h5>
  <table class=\"w-100\">
  <tr><td>DOMjudge:</td><td id=\"dj_version\">";
        // line 11
        echo twig_escape_filter($this->env, ($context["DOMJUDGE_VERSION"] ?? null), "html", null, true);
        echo "</td></tr>
  <tr><td>Environment:</td><td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "environment", [], "any", false, false, false, 12), "html", null, true);
        echo "</td></tr>
  <tr><td>Debug:</td><td>";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "debug", [], "any", false, false, false, 13)), "html", null, true);
        echo "</td></tr>
  <tr><td colspan=\"2\">&nbsp;</td></tr>
  <tr><td>PHP:</td><td>";
        // line 15
        echo twig_escape_filter($this->env, twig_constant("PHP_VERSION"), "html", null, true);
        echo " <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_config_phpinfo");
        echo "\"><i class=\"fas fa-info-circle\"></i></a></td></tr>
  <tr><td>Symfony:</td><td>";
        // line 16
        echo twig_escape_filter($this->env, twig_constant("\\Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "</td></tr>
  <tr><td>Twig:</td><td>";
        // line 17
        echo twig_escape_filter($this->env, twig_constant("\\Twig\\Environment::VERSION"), "html", null, true);
        echo "</td></tr>
  </table>
  </div>
</div>

<h1>Configuration check</h1>

<div class=\"card m-3 bg-light\">
  <div class=\"card-body\">
  <h5 class=\"card-title\">Installation locations</h5>
  <table>
  <tr><td>Base url (use in submit client):</td><td><kbd>";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("root");
        echo "</kbd></td></tr>
  <tr><td>API url (use in <kbd>restapi.secret</kbd>):</td><td><kbd>";
        // line 29
        echo twig_escape_filter($this->env, twig_trim_filter($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("current_api_root"), "/", "right"), "html", null, true);
        echo "</kbd></td></tr>
  <tr><td colspan=\"2\">&nbsp;</td></tr>
  <tr><td>DOMserver installation path:</td><td><kbd>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dir"] ?? null), "project", [], "any", false, false, false, 31), "html", null, true);
        echo "</kbd></td></tr>
  <tr><td>Logos/images are under:</td><td><kbd>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dir"] ?? null), "project", [], "any", false, false, false, 32), "html", null, true);
        echo "/webapp/public/images/</kbd></td></tr>
  <tr><td>Custom CSS is under:</td><td><kbd>";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dir"] ?? null), "project", [], "any", false, false, false, 33), "html", null, true);
        echo "/webapp/public/css/custom/</kbd></td></tr>
  <tr><td>Custom JavaScript is under:</td><td><kbd>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dir"] ?? null), "project", [], "any", false, false, false, 34), "html", null, true);
        echo "/webapp/public/js/custom/</kbd></td></tr>
  <tr><td>Documentation files are under:</td><td><kbd>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dir"] ?? null), "project", [], "any", false, false, false, 35), "html", null, true);
        echo "/webapp/public/docs/</kbd></td></tr>
  <tr><td>DOMjudge console binary:</td><td><kbd>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dir"] ?? null), "project", [], "any", false, false, false, 36), "html", null, true);
        echo "/webapp/bin/console</kbd></td></tr>
  <tr><td>Log directory:</td><td><kbd>";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dir"] ?? null), "log", [], "any", false, false, false, 37), "html", null, true);
        echo "</kbd></td></tr>
  </table>
  </div>
</div>

<h2>Checks</h2>

";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["results"] ?? null));
        foreach ($context['_seq'] as $context["resultgroup"] => $context["groupresults"]) {
            // line 45
            echo "<h3 class=\"mt-3 ml-3\">";
            echo twig_escape_filter($this->env, $context["resultgroup"], "html", null, true);
            echo "</h3>

<div class=\"accordion w-50 ml-5\" id=\"";
            // line 47
            echo twig_escape_filter($this->env, twig_replace_filter($context["resultgroup"], [" " => ""]), "html", null, true);
            echo "\" role=\"tablist\" aria-multiselectable=\"true\">

";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["groupresults"]);
            foreach ($context['_seq'] as $context["test"] => $context["testresult"]) {
                // line 50
                echo "  <div class=\"card\">
    <h6 class=\"card-header result ";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testresult"], "result", [], "any", false, false, false, 51), "html", null, true);
                echo "\" role=\"tab\" id=\"heading";
                echo twig_escape_filter($this->env, $context["test"], "html", null, true);
                echo "\">
      <a class=\"collapsed d-block text-dark pt-0 pb-0\" data-toggle=\"collapse\" href=\"#collapse";
                // line 52
                echo twig_escape_filter($this->env, $context["test"], "html", null, true);
                echo "\" aria-expanded=\"true\" aria-controls=\"collapse";
                echo twig_escape_filter($this->env, $context["test"], "html", null, true);
                echo "\" data-parent=\"#";
                echo twig_escape_filter($this->env, twig_replace_filter($context["resultgroup"], [" " => ""]), "html", null, true);
                echo "\">
        ";
                // line 53
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["testresult"], "result", [], "any", false, false, false, 53), "O"))) {
                    // line 54
                    echo "        <i class=\"fas fa-check text-success\"></i>
        ";
                } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                 // line 55
$context["testresult"], "result", [], "any", false, false, false, 55), "W"))) {
                    // line 56
                    echo "        <i class=\"fas fa-exclamation-triangle text-warning\"></i>
        ";
                } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                 // line 57
$context["testresult"], "result", [], "any", false, false, false, 57), "E"))) {
                    // line 58
                    echo "        <i class=\"fas fa-skull-crossbones text-danger\"></i>
        ";
                }
                // line 60
                echo "        <i class=\"fa fa-chevron-down float-right\"></i>
        ";
                // line 61
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testresult"], "caption", [], "any", false, false, false, 61), "html", null, true);
                echo "
      </a>
    </h6>

    <div id=\"collapse";
                // line 65
                echo twig_escape_filter($this->env, $context["test"], "html", null, true);
                echo "\" class=\"collapse collapsed\" role=\"tabpanel\" aria-labelledby=\"heading";
                echo twig_escape_filter($this->env, $context["test"], "html", null, true);
                echo "\">
      <div class=\"card-body\">
        ";
                // line 67
                $context["description"] = twig_get_attribute($this->env, $this->source, $context["testresult"], "desc", [], "any", false, false, false, 67);
                // line 68
                echo "        ";
                if (( !twig_get_attribute($this->env, $this->source, $context["testresult"], "escape", [], "any", true, true, false, 68) || twig_get_attribute($this->env, $this->source, $context["testresult"], "escape", [], "any", false, false, false, 68))) {
                    // line 69
                    echo "          ";
                    $context["description"] = twig_escape_filter($this->env, ($context["description"] ?? null));
                    // line 70
                    echo "        ";
                }
                // line 71
                echo "        ";
                echo twig_replace_filter(($context["description"] ?? null), ["
" => "<br />
"]);
                echo "
      </div>
    </div>
  </div>

";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['test'], $context['testresult'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "</div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['resultgroup'], $context['groupresults'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "
<div class=\"mt-5 mb-5\">
All checks complete. <i class=\"fas fa-clipboard-check\"></i>
</div>
";
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    public function getTemplateName()
    {
        return "jury/config_check.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 80,  258 => 77,  243 => 71,  240 => 70,  237 => 69,  234 => 68,  232 => 67,  225 => 65,  218 => 61,  215 => 60,  211 => 58,  209 => 57,  206 => 56,  204 => 55,  201 => 54,  199 => 53,  191 => 52,  185 => 51,  182 => 50,  178 => 49,  173 => 47,  167 => 45,  163 => 44,  153 => 37,  149 => 36,  145 => 35,  141 => 34,  137 => 33,  133 => 32,  129 => 31,  124 => 29,  120 => 28,  106 => 17,  102 => 16,  96 => 15,  91 => 13,  87 => 12,  83 => 11,  77 => 7,  70 => 6,  56 => 4,  48 => 1,  46 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/config_check.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/config_check.html.twig");
    }
}
