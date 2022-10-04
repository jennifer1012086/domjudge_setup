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

/* jury/partials/rejudge_form.html.twig */
class __TwigTemplate_75263ef2d88f748ca39dfc853cf9741f30ab17869ca6442f9c188b78fd2c0022 extends Template
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
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/rejudge_form.html.twig"));

        // line 2
        echo "
";
        // line 3
        ob_start(function () { return ''; });
        // line 4
        echo "    ";
        $context["buttonText"] = ((("Rejudge all for " . ($context["table"] ?? null)) . " ") . ($context["id"] ?? null));
        // line 5
        echo "    ";
        $context["questionText"] = (("Rejudge all submissions for this " . ($context["table"] ?? null)) . "?");
        // line 6
        echo "    ";
        $context["buttonDisabled"] = false;
        // line 7
        echo "    ";
        $context["isRestart"] = false;
        // line 8
        echo "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 9
            echo "        ";
            $context["includeAllButton"] = true;
            // line 10
            echo "    ";
        } else {
            // line 11
            echo "        ";
            $context["includeAllButton"] = false;
            // line 12
            echo "    ";
        }
        // line 13
        echo "    ";
        if ( !array_key_exists("buttonClass", $context)) {
            // line 14
            echo "        ";
            $context["buttonClass"] = "btn-outline-primary btn-sm";
            // line 15
            echo "    ";
        }
        // line 16
        echo "
    ";
        // line 17
        if ((((0 === twig_compare(($context["table"] ?? null), "submission")) && array_key_exists("submission", $context)) && array_key_exists("judgings", $context))) {
            // line 18
            echo "        ";
            $context["buttonText"] = "Rejudge this submission";
            // line 19
            echo "        ";
            $context["questionText"] = (("Rejudge submission s" . ($context["id"] ?? null)) . "?");
            // line 20
            echo "        ";
            $context["includeAllButton"] = false;
            // line 21
            echo "        ";
            // line 22
            echo "        ";
            $context["validResult"] = false;
            // line 23
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["judgings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["judging"]) {
                // line 24
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["judging"], "valid", [], "any", false, false, false, 24)) {
                    // line 25
                    echo "                ";
                    $context["validResult"] = twig_get_attribute($this->env, $this->source, $context["judging"], "result", [], "any", false, false, false, 25);
                    // line 26
                    echo "            ";
                }
                // line 27
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['judging'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "
        ";
            // line 29
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 30
                echo "            ";
                if ( !($context["validResult"] ?? null)) {
                    // line 31
                    echo "                ";
                    $context["questionText"] = (("Restart judging of PENDING submission s" . ($context["id"] ?? null)) . ", are you sure?");
                    // line 32
                    echo "                ";
                    $context["buttonText"] = "Restart judging";
                    // line 33
                    echo "                ";
                    $context["isRestart"] = true;
                    // line 34
                    echo "            ";
                } elseif ((0 === twig_compare(($context["validResult"] ?? null), "correct"))) {
                    // line 35
                    echo "                ";
                    $context["questionText"] = (("Rejudge CORRECT submission s" . ($context["id"] ?? null)) . ", are you sure?");
                    // line 36
                    echo "            ";
                }
                // line 37
                echo "        ";
            } else {
                // line 38
                echo "            ";
                if (( !($context["validResult"] ?? null) || (0 === twig_compare(($context["validResult"] ?? null), "correct")))) {
                    // line 39
                    echo "                ";
                    $context["buttonDisabled"] = true;
                    // line 40
                    echo "            ";
                }
                // line 41
                echo "        ";
            }
            // line 42
            echo "    ";
        }
        $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 3
        echo twig_spaceless($___internal_parse_0_);
        // line 44
        echo "
<button type=\"button\" class=\"btn ";
        // line 45
        echo twig_escape_filter($this->env, ($context["buttonClass"] ?? null), "html", null, true);
        echo "\" data-toggle=\"modal\" data-target=\"#rejudge-modal\">
    <i class=\"fas fa-sync\"></i> Rejudge
</button>

<!-- Modal -->
<div class=\"modal fade\" id=\"rejudge-modal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">";
        // line 54
        echo twig_escape_filter($this->env, ($context["buttonText"] ?? null), "html", null, true);
        echo "</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <form action=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_create_rejudge");
        echo "\" method=\"post\">
                <div class=\"modal-body\">
                    <input type=\"hidden\" name=\"table\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, ($context["table"] ?? null), "html", null, true);
        echo "\"/>
                    <input type=\"hidden\" name=\"id\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\"/>";
        // line 63
        if (($context["includeAllButton"] ?? null)) {
            // line 64
            echo "
                        <div class=\"custom-control custom-checkbox form-group\">
                            <input type=\"checkbox\" class=\"custom-control-input\" id=\"include_all\" name=\"include_all\">
                            <label class=\"custom-control-label\" for=\"include_all\">Include pending/correct
                                submissions</label>
                        </div>";
        }
        // line 71
        echo "
                    ";
        // line 72
        if (($context["isRestart"] ?? null)) {
            // line 73
            echo "                        <input type=\"hidden\" id=\"auto_apply\" name=\"auto_apply\" value=\"1\">
                        <input type=\"hidden\" name=\"repeat\" id=\"repeat\" value=\"1\">
                        <input type=\"hidden\" name=\"reason\" id=\"reason\" value=\"\">
                    ";
        } else {
            // line 77
            echo "                    <div class=\"custom-control custom-checkbox form-group\">
                        <input type=\"checkbox\" class=\"custom-control-input\" id=\"auto_apply\" name=\"auto_apply\">
                        <label class=\"custom-control-label\" for=\"auto_apply\">Automatically apply judging(s) when ready</label>
                    </div>
                    <div id=\"rejudge-repeat\" class=\"form-group\">
                        <label for=\"repeat\">Number of times to repeat this rejudging</label>
                        <input type=\"number\" class=\"form-control\" name=\"repeat\" id=\"repeat\" value=\"1\" min=\"1\" max=\"999\" step=\"1\">
                    </div>
                    <div id=\"rejudge-reason\" class=\"form-group\">
                        <label for=\"reason\">Reason</label>
                        <input type=\"text\" class=\"form-control\" name=\"reason\" id=\"reason\" maxlength=\"255\">
                    </div>
                    <div id=\"rejudge-priority\" class=\"form-group\">
                        <label for=\"priority\">Priority</label>
                        <select class=\"form-control\" name=\"priority\" id=\"priority\">
                            <option value=\"low\">low</option>
                            <option value=\"default\" selected>default</option>
                            <option value=\"high\">high</option>
                        </select>
                    </div>
                    ";
        }
        // line 98
        echo "                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cancel</button>
                    <input type=\"submit\" value=\"";
        // line 101
        echo twig_escape_filter($this->env, ($context["buttonText"] ?? null), "html", null, true);
        echo "\" class=\"btn btn-primary\">
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    \$(function () {
        \$('#full_rejudge').on('change', function () {
            if (\$(this).is(':checked')) {
                \$('#rejudge-reason').removeClass('d-none');
            } else {
                \$('#rejudge-reason').addClass('d-none');
            }
        });
    });
</script>
";
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    public function getTemplateName()
    {
        return "jury/partials/rejudge_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 101,  246 => 98,  223 => 77,  217 => 73,  215 => 72,  212 => 71,  204 => 64,  202 => 63,  199 => 62,  195 => 61,  190 => 59,  182 => 54,  170 => 45,  167 => 44,  165 => 3,  161 => 42,  158 => 41,  155 => 40,  152 => 39,  149 => 38,  146 => 37,  143 => 36,  140 => 35,  137 => 34,  134 => 33,  131 => 32,  128 => 31,  125 => 30,  123 => 29,  120 => 28,  114 => 27,  111 => 26,  108 => 25,  105 => 24,  100 => 23,  97 => 22,  95 => 21,  92 => 20,  89 => 19,  86 => 18,  84 => 17,  81 => 16,  78 => 15,  75 => 14,  72 => 13,  69 => 12,  66 => 11,  63 => 10,  60 => 9,  57 => 8,  54 => 7,  51 => 6,  48 => 5,  45 => 4,  43 => 3,  40 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/partials/rejudge_form.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/partials/rejudge_form.html.twig");
    }
}
