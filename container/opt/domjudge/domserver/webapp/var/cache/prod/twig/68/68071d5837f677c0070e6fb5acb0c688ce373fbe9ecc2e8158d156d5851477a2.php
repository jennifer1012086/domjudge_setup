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

/* jury/external_contest_source.html.twig */
class __TwigTemplate_471afcf95fa66fd98071fbaa59e53ae88f82bc54beaecc47352c11322fca1697 extends Template
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
            'extrafooter' => [$this, 'block_extrafooter'],
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
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/external_contest_source.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/external_contest_source.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/external_contest_source.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "External contest source ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["externalContestSource"] ?? null), "extsourceid", [], "any", false, false, false, 4), "html", null, true);
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
        // line 9
        echo twig_call_macro($macros["macros"], "macro_select2_extrahead", [], 9, $context, $this->getSourceContext());
        echo "
    <style>
        .table-wrapper {
            display: block;
        }
    </style>
";
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    // line 17
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 18
        echo "
    <h1>External contest source ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["externalContestSource"] ?? null), "extsourceid", [], "any", false, false, false, 19), "html", null, true);
        echo "</h1>

    <div data-source-info>
        ";
        // line 22
        $this->loadTemplate("jury/partials/external_contest_source_info.html.twig", "jury/external_contest_source.html.twig", 22)->display($context);
        // line 23
        echo "    </div>

    <p>
        ";
        // line 26
        echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_external_contest_source_edit", ["extsourceid" => twig_get_attribute($this->env, $this->source, ($context["externalContestSource"] ?? null), "extsourceid", [], "any", false, false, false, 26)]), "Edit", "primary", "edit");
        echo "
        ";
        // line 27
        echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_external_contest_source_delete", ["extsourceid" => twig_get_attribute($this->env, $this->source, ($context["externalContestSource"] ?? null), "extsourceid", [], "any", false, false, false, 27)]), "Delete", "danger", "trash-alt", true);
        echo "
    </p>

    <div data-warning-header>
        ";
        // line 31
        $this->loadTemplate("jury/partials/external_contest_source_warning_header.html.twig", "jury/external_contest_source.html.twig", 31)->display($context);
        // line 32
        echo "    </div>

    <div class=\"mb-3\">
        <div class=\"btn-group-toggle\" data-toggle=\"buttons\">
            <label class=\"btn btn-outline-secondary ";
        // line 36
        if (($context["hasFilters"] ?? null)) {
            echo "active";
        }
        echo "\">
                <input type=\"checkbox\" id=\"filter-toggle\" ";
        // line 37
        if (($context["hasFilters"] ?? null)) {
            echo "checked";
        }
        echo " autocomplete=\"off\">
                <i class=\"fas fa-filter\"></i> Filter
            </label>
        </div>
        <div class=\"card mt-3";
        // line 41
        if ( !($context["hasFilters"] ?? null)) {
            echo " d-none";
        }
        echo "\" id=\"filter-card\">
            <div class=\"card-body col-sm-6\">
                ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form');
        echo "
            </div>
        </div>
    </div>

    <div data-ajax-refresh-target data-ajax-refresh-after=\"updateData\">
        ";
        // line 49
        $this->loadTemplate("jury/partials/external_contest_source_warnings.html.twig", "jury/external_contest_source.html.twig", 49)->display($context);
        // line 50
        echo "    </div>

";
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    // line 54
    public function block_extrafooter($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrafooter"));

        // line 55
        echo "    <script>
        \$(function () {
            \$('#filter-toggle').on('change', function () {
                if (\$(this).is(':checked')) {
                    \$('#filter-card').removeClass('d-none');
                } else {
                    \$('#filter-card').addClass('d-none');
                }
            });

            \$('#external_source_warnings_filter_clear').on('click', function () {
                \$('select[data-filter-field]').val([]).trigger('change');
            });

            window.process_warnings_filter = function () {
                var \$trs = \$('div.warnings-table table.data-table > tbody > tr');

                var filters = [];

                \$('select[data-filter-field]').each(function () {
                    var \$filterField = \$(this);
                    if (\$filterField.val().length) {
                        filters.push({
                            field: \$filterField.data('filter-field'),
                            values: \$filterField.val()
                        });
                    }
                });

                var warnings_filter = {};
                for (var i = 0; i < filters.length; i++) {
                    warnings_filter[filters[i].field] = filters[i].values;
                }

                console.warn(warnings_filter);
                console.warn(filters);

                setCookie('domjudge_external_source_filter', JSON.stringify(warnings_filter));

                if (filters.length === 0) {
                    \$trs.show();
                } else {
                    \$trs
                        .hide()
                        .filter(function () {
                            var \$tr = \$(this);

                            for (var i = 0; i < filters.length; i++) {
                                var value = \"\" + \$('td[data-' + filters[i].field + ']', \$tr).data(filters[i].field);
                                if (filters[i].values.indexOf(value) === -1) {
                                    return false;
                                }
                            }

                            return true;
                        })
                        .show();
                }
            };

            \$('select[data-filter-field]').on('change', process_warnings_filter);
            window.process_warnings_filter();

            window.updateData = function () {
                var \$sourceInfoData = \$('[data-new-source-info]');
                var \$sourceInfo = \$('[data-source-info]');
                \$sourceInfo.html(\$sourceInfoData.children());

                var \$warningHeaderData = \$('[data-new-warning-header]');
                var \$warningHeader = \$('[data-warning-header]');
                \$warningHeader.html(\$warningHeaderData.children());

                window.process_warnings_filter();
            };
        });
    </script>
";
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    public function getTemplateName()
    {
        return "jury/external_contest_source.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 55,  188 => 54,  179 => 50,  177 => 49,  168 => 43,  161 => 41,  152 => 37,  146 => 36,  140 => 32,  138 => 31,  131 => 27,  127 => 26,  122 => 23,  120 => 22,  114 => 19,  111 => 18,  104 => 17,  90 => 9,  86 => 8,  81 => 7,  74 => 6,  58 => 4,  50 => 1,  48 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/external_contest_source.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/external_contest_source.html.twig");
    }
}
