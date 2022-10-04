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

/* jury/partials/contest_form.html.twig */
class __TwigTemplate_41b3198743958f3c75f105cb9c2bd82ca76a96d331ed47e4ca5f49eeba66f9a1 extends Template
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
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/contest_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
<div class=\"row\">
    <div class=\"col-lg-4\">

        ";
        // line 6
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "

        ";
        // line 8
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "offsetExists", [0 => "externalid"], "method", false, false, false, 8)) {
            // line 9
            echo "            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "externalid", [], "any", false, false, false, 9), 'row');
            echo "
        ";
        }
        // line 11
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "shortname", [], "any", false, false, false, 11), 'row');
        echo "
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 12), 'row');
        echo "
        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "activatetimeString", [], "any", false, false, false, 13), 'row');
        echo "
        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "starttimeString", [], "any", false, false, false, 14), 'row');
        echo "
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "starttimeEnabled", [], "any", false, false, false, 15), 'row');
        echo "
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "freezetimeString", [], "any", false, false, false, 16), 'row');
        echo "
        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "endtimeString", [], "any", false, false, false, 17), 'row');
        echo "
        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "unfreezetimeString", [], "any", false, false, false, 18), 'row');
        echo "
        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "deactivatetimeString", [], "any", false, false, false, 19), 'row');
        echo "
        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "processBalloons", [], "any", false, false, false, 20), 'row');
        echo "
        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "medalsEnabled", [], "any", false, false, false, 21), 'row');
        echo "
        <div data-medals-field>
            ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "medalCategories", [], "any", false, false, false, 23), 'row');
        echo "
            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "goldMedals", [], "any", false, false, false, 24), 'row');
        echo "
            ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "silverMedals", [], "any", false, false, false, 25), 'row');
        echo "
            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "bronzeMedals", [], "any", false, false, false, 26), 'row');
        echo "
        </div>
        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "public", [], "any", false, false, false, 28), 'row');
        echo "
        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "openToAllTeams", [], "any", false, false, false, 29), 'row');
        echo "
        <div data-teams-field>
            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "teams", [], "any", false, false, false, 31), 'row');
        echo "
            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "teamCategories", [], "any", false, false, false, 32), 'row');
        echo "
        </div>
        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "enabled", [], "any", false, false, false, 34), 'row');
        echo "
        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "bannerFile", [], "any", false, false, false, 35), 'row');
        echo "
        ";
        // line 36
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "offsetExists", [0 => "clearBanner"], "method", false, false, false, 36)) {
            // line 37
            echo "            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "clearBanner", [], "any", false, false, false, 37), 'row');
            echo "
        ";
        }
        // line 39
        echo "    </div>
    <div class=\"col-lg-6\">
        <h5>Specification of contest times</h5>
        <div>Each of the contest times can be specified as absolute time or relative
        to the start time (except for start time itself). Use up to 6 subsecond
        decimals and a timezone from the
        <a target=\"_blank\" href=\"https://en.wikipedia.org/wiki/List_of_tz_database_time_zones\">
            time zone database</a>.</div>
        <div class=\"mt-3\"><table>
        <tr><td>Absolute time format:</td><td><kbd>YYYY-MM-DD HH:MM:SS[.uuuuuu] timezone</kbd></td></tr>
        <tr><td>Relative time format:</td><td><kbd>±[HHH]H:MM[:SS[.uuuuuu]]</kbd></td></tr>
        </table></div>
    </div>
</div>
<table class=\"table table-sm table-striped\">
    <thead>
    <tr>
        <th>";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "problems", [], "any", false, false, false, 56), "vars", [], "any", false, false, false, 56), "prototype", [], "any", false, false, false, 56), "problem", [], "any", false, false, false, 56), 'label');
        echo "</th>
        <th>";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "problems", [], "any", false, false, false, 57), "vars", [], "any", false, false, false, 57), "prototype", [], "any", false, false, false, 57), "shortname", [], "any", false, false, false, 57), 'label');
        echo "</th>
        <th>";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "problems", [], "any", false, false, false, 58), "vars", [], "any", false, false, false, 58), "prototype", [], "any", false, false, false, 58), "points", [], "any", false, false, false, 58), 'label');
        echo "</th>
        <th>";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "problems", [], "any", false, false, false, 59), "vars", [], "any", false, false, false, 59), "prototype", [], "any", false, false, false, 59), "allowSubmit", [], "any", false, false, false, 59), 'label');
        echo "</th>
        <th>";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "problems", [], "any", false, false, false, 60), "vars", [], "any", false, false, false, 60), "prototype", [], "any", false, false, false, 60), "allowJudge", [], "any", false, false, false, 60), 'label');
        echo "</th>
        <th>";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "problems", [], "any", false, false, false, 61), "vars", [], "any", false, false, false, 61), "prototype", [], "any", false, false, false, 61), "color", [], "any", false, false, false, 61), 'label');
        echo "</th>
        <th>";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "problems", [], "any", false, false, false, 62), "vars", [], "any", false, false, false, 62), "prototype", [], "any", false, false, false, 62), "lazyEvalResults", [], "any", false, false, false, 62), 'label');
        echo "</th>
        <th></th>
    </tr>
    </thead>
    <tbody data-collection-holder data-after-add=\"bindColor\">
    ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "problems", [], "any", false, false, false, 67));
        foreach ($context['_seq'] as $context["_key"] => $context["problem"]) {
            // line 68
            echo "        <tr>
            <td>
                ";
            // line 70
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["problem"], "problem", [], "any", false, false, false, 70), 'errors');
            echo "
                ";
            // line 71
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["problem"], "problem", [], "any", false, false, false, 71), 'widget');
            echo "
            </td>
            <td>
                ";
            // line 74
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["problem"], "shortname", [], "any", false, false, false, 74), 'errors');
            echo "
                ";
            // line 75
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["problem"], "shortname", [], "any", false, false, false, 75), 'widget');
            echo "
            </td>
            <td>
                ";
            // line 78
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["problem"], "points", [], "any", false, false, false, 78), 'errors');
            echo "
                ";
            // line 79
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["problem"], "points", [], "any", false, false, false, 79), 'widget');
            echo "
            </td>
            <td>
                ";
            // line 82
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["problem"], "allowSubmit", [], "any", false, false, false, 82), 'errors');
            echo "
                ";
            // line 83
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["problem"], "allowSubmit", [], "any", false, false, false, 83), 'widget');
            echo "
            </td>
            <td>
                ";
            // line 86
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["problem"], "allowJudge", [], "any", false, false, false, 86), 'errors');
            echo "
                ";
            // line 87
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["problem"], "allowJudge", [], "any", false, false, false, 87), 'widget');
            echo "
            </td>
            <td>
                ";
            // line 90
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["problem"], "color", [], "any", false, false, false, 90), 'errors');
            echo "
                ";
            // line 91
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["problem"], "color", [], "any", false, false, false, 91), 'widget');
            echo "
            </td>
            <td>
                ";
            // line 94
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["problem"], "lazyEvalResults", [], "any", false, false, false, 94), 'errors');
            echo "
                ";
            // line 95
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["problem"], "lazyEvalResults", [], "any", false, false, false, 95), 'widget');
            echo "
            </td>
            <td>
                <button type=\"button\" data-delete class=\"btn btn-danger\"><i class=\"fas fa-trash-alt\"></i></button>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "    </tbody>
    <tfoot>
    <tr>
        <td colspan=\"7\"></td>
        <td>
            <button type=\"button\" data-add class=\"btn btn-success\"><i class=\"fas fa-plus\"></i></button>
        </td>
    </tr>
    </tfoot>
</table>

<script type=\"text/html\" data-prototype>
    <tr>
        <td>";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "problems", [], "any", false, false, false, 115), "vars", [], "any", false, false, false, 115), "prototype", [], "any", false, false, false, 115), "problem", [], "any", false, false, false, 115), 'widget');
        echo "</td>
        <td>";
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "problems", [], "any", false, false, false, 116), "vars", [], "any", false, false, false, 116), "prototype", [], "any", false, false, false, 116), "shortname", [], "any", false, false, false, 116), 'widget');
        echo "</td>
        <td>";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "problems", [], "any", false, false, false, 117), "vars", [], "any", false, false, false, 117), "prototype", [], "any", false, false, false, 117), "points", [], "any", false, false, false, 117), 'widget');
        echo "</td>
        <td>";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "problems", [], "any", false, false, false, 118), "vars", [], "any", false, false, false, 118), "prototype", [], "any", false, false, false, 118), "allowSubmit", [], "any", false, false, false, 118), 'widget');
        echo "</td>
        <td>";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "problems", [], "any", false, false, false, 119), "vars", [], "any", false, false, false, 119), "prototype", [], "any", false, false, false, 119), "allowJudge", [], "any", false, false, false, 119), 'widget');
        echo "</td>
        <td>";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "problems", [], "any", false, false, false, 120), "vars", [], "any", false, false, false, 120), "prototype", [], "any", false, false, false, 120), "color", [], "any", false, false, false, 120), 'widget');
        echo "</td>
        <td>";
        // line 121
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "problems", [], "any", false, false, false, 121), "vars", [], "any", false, false, false, 121), "prototype", [], "any", false, false, false, 121), "lazyEvalResults", [], "any", false, false, false, 121), 'widget');
        echo "</td>
        <td>
            <button type=\"button\" data-delete class=\"btn btn-danger\"><i class=\"fas fa-trash-alt\"></i></button>
        </td>
    </tr>
</script>

";
        // line 128
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "

<script>
    \$(function () {
        function showHideTeams() {
            if (\$('#contest_openToAllTeams_1').is(':checked')) {
                \$('[data-teams-field]').show();
            } else {
                \$('[data-teams-field]').hide();
            }
        }

        \$('#contest_openToAllTeams_1, #contest_openToAllTeams_0').on('change', showHideTeams);
        showHideTeams();

        function showHideMedals() {
            if (\$('#contest_medalsEnabled_0').is(':checked')) {
                \$('[data-medals-field]').show();
            } else {
                \$('[data-medals-field]').hide();
            }
        }

        \$('#contest_medalsEnabled_1, #contest_medalsEnabled_0').on('change', showHideMedals);
        showHideMedals();
    })
</script>
";
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    public function getTemplateName()
    {
        return "jury/partials/contest_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  343 => 128,  333 => 121,  329 => 120,  325 => 119,  321 => 118,  317 => 117,  313 => 116,  309 => 115,  294 => 102,  281 => 95,  277 => 94,  271 => 91,  267 => 90,  261 => 87,  257 => 86,  251 => 83,  247 => 82,  241 => 79,  237 => 78,  231 => 75,  227 => 74,  221 => 71,  217 => 70,  213 => 68,  209 => 67,  201 => 62,  197 => 61,  193 => 60,  189 => 59,  185 => 58,  181 => 57,  177 => 56,  158 => 39,  152 => 37,  150 => 36,  146 => 35,  142 => 34,  137 => 32,  133 => 31,  128 => 29,  124 => 28,  119 => 26,  115 => 25,  111 => 24,  107 => 23,  102 => 21,  98 => 20,  94 => 19,  90 => 18,  86 => 17,  82 => 16,  78 => 15,  74 => 14,  70 => 13,  66 => 12,  61 => 11,  55 => 9,  53 => 8,  47 => 6,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/partials/contest_form.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/partials/contest_form.html.twig");
    }
}
