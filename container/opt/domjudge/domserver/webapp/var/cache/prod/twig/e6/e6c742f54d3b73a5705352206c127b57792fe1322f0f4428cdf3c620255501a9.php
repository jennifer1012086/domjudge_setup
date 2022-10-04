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

/* jury/clarifications.html.twig */
class __TwigTemplate_a2d21065ab2170a331182d565d7db91da99dda8ef67fb35f52642d9d8cc0ba4c extends Template
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
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/clarifications.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/clarifications.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/clarifications.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Clarifications - ";
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
    <h1>Clarifications</h1>";
        // line 15
        if (twig_test_empty(($context["current_contests"] ?? null))) {
            // line 16
            echo "
        <div class=\"alert alert-danger\">No active contests</div>";
        } else {
            // line 19
            echo "
        <div class=\"float-right\">
        <a href=\"";
            // line 21
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_clarification_new");
            echo "\" class=\"btn btn-primary btn-sm\">
                <i class=\"fas fa-envelope\"></i> Send clarification
        </a>
        </div>

        <div class=\"btn-group btn-group-toggle btn-group-sm mb-3\" data-toggle=\"buttons\">
            <div class=\"input-group-prepend\">
                <div class=\"input-group-text listtoggles\">Filter:</div>
            </div>
            <label class=\"btn btn-secondary ";
            // line 30
            if ((null === ($context["currentFilter"] ?? null))) {
                echo "active";
            }
            echo "\">
                <input type=\"radio\" name=\"filter\" autocomplete=\"off\" value=\"all\"
                       ";
            // line 32
            if ((null === ($context["currentFilter"] ?? null))) {
                echo "checked";
            }
            echo "> All
            </label>
            <label class=\"btn btn-secondary ";
            // line 34
            if ((0 === twig_compare(($context["currentFilter"] ?? null), "new"))) {
                echo "active";
            }
            echo "\">
                <input type=\"radio\" name=\"filter\" autocomplete=\"off\" value=\"new\"
                       ";
            // line 36
            if ((0 === twig_compare(($context["currentFilter"] ?? null), "new"))) {
                echo "checked";
            }
            echo "> New
            </label>
            <label class=\"btn btn-secondary ";
            // line 38
            if ((0 === twig_compare(($context["currentFilter"] ?? null), "old"))) {
                echo "active";
            }
            echo "\">
                <input type=\"radio\" name=\"filter\" autocomplete=\"off\" value=\"old\"
                       ";
            // line 40
            if ((0 === twig_compare(($context["currentFilter"] ?? null), "old"))) {
                echo "checked";
            }
            echo "> Handled
            </label>
            <label class=\"btn btn-secondary ";
            // line 42
            if ((0 === twig_compare(($context["currentFilter"] ?? null), "general"))) {
                echo "active";
            }
            echo "\">
                <input type=\"radio\" name=\"filter\" autocomplete=\"off\" value=\"general\"
                       ";
            // line 44
            if ((0 === twig_compare(($context["currentFilter"] ?? null), "general"))) {
                echo "checked";
            }
            echo "> General
            </label>
        </div>

        ";
            // line 48
            if ((1 === twig_compare(twig_length_filter($this->env, ($context["queues"] ?? null)), 0))) {
                // line 49
                echo "            <div class=\"btn-group btn-group-toggle btn-group-sm mb-3\" data-toggle=\"buttons\">
                <div class=\"input-group-prepend\">
                    <div class=\"input-group-text listtoggles\">Queue:</div>
                </div>
                <label class=\"btn btn-secondary ";
                // line 53
                if ((null === ($context["currentQueue"] ?? null))) {
                    echo "active";
                }
                echo "\">
                    <input type=\"radio\" name=\"queue\" autocomplete=\"off\" value=\"all\"
                           ";
                // line 55
                if ((0 === twig_compare(($context["currentQueue"] ?? null), "all"))) {
                    echo "checked";
                }
                echo "> All
                </label>
                <label class=\"btn btn-secondary ";
                // line 57
                if (( !(null === ($context["currentQueue"] ?? null)) && (0 === twig_compare(($context["currentQueue"] ?? null), "")))) {
                    echo "active";
                }
                echo "\">
                    <input type=\"radio\" name=\"queue\" autocomplete=\"off\" value=\"unassigned\"
                           ";
                // line 59
                if ((0 === twig_compare(($context["currentQueue"] ?? null), "unassigned"))) {
                    echo "checked";
                }
                echo "> Unassigned
                </label>";
                // line 61
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["queues"] ?? null));
                foreach ($context['_seq'] as $context["queue"] => $context["name"]) {
                    // line 62
                    echo "                    <label class=\"btn btn-secondary ";
                    if ((0 === twig_compare(($context["currentQueue"] ?? null), $context["queue"]))) {
                        echo "active";
                    }
                    echo "\">
                        <input type=\"radio\" name=\"queue\" autocomplete=\"off\" value=\"";
                    // line 63
                    echo twig_escape_filter($this->env, $context["queue"], "html", null, true);
                    echo "\"
                               ";
                    // line 64
                    if ((0 === twig_compare(($context["currentQueue"] ?? null), $context["queue"]))) {
                        echo "checked";
                    }
                    echo "> ";
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo "
                    </label>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['queue'], $context['name'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 67
                echo "            </div>
        ";
            }
            // line 69
            echo "
        ";
            // line 70
            if (((null === ($context["currentFilter"] ?? null)) || (0 === twig_compare(($context["currentFilter"] ?? null), "new")))) {
                // line 71
                echo "            <h3 id=\"newrequests\">New requests</h3>";
                // line 72
                if ((0 === twig_compare(twig_length_filter($this->env, ($context["newClarifications"] ?? null)), 0))) {
                    // line 73
                    echo "                <p class=\"nodata\">No new clarification requests.</p>";
                } else {
                    // line 75
                    $this->loadTemplate("jury/partials/clarification_list.html.twig", "jury/clarifications.html.twig", 75)->display(twig_array_merge($context, ["clarifications" => ($context["newClarifications"] ?? null)]));
                }
                // line 77
                echo "        ";
            }
            // line 78
            echo "
        ";
            // line 79
            if (((null === ($context["currentFilter"] ?? null)) || (0 === twig_compare(($context["currentFilter"] ?? null), "old")))) {
                // line 80
                echo "            <h3 id=\"oldrequests\" class=\"mt-4\">Handled requests</h3>";
                // line 81
                if ((0 === twig_compare(twig_length_filter($this->env, ($context["oldClarifications"] ?? null)), 0))) {
                    // line 82
                    echo "                <p class=\"nodata\">No old clarification requests.</p>";
                } else {
                    // line 84
                    $this->loadTemplate("jury/partials/clarification_list.html.twig", "jury/clarifications.html.twig", 84)->display(twig_array_merge($context, ["clarifications" => ($context["oldClarifications"] ?? null)]));
                }
                // line 86
                echo "        ";
            }
            // line 87
            echo "
        ";
            // line 88
            if (((null === ($context["currentFilter"] ?? null)) || (0 === twig_compare(($context["currentFilter"] ?? null), "general")))) {
                // line 89
                echo "            <h3 id=\"clarifications\" class=\"mt-4\">General clarifications</h3>";
                // line 90
                if ((0 === twig_compare(twig_length_filter($this->env, ($context["generalClarifications"] ?? null)), 0))) {
                    // line 91
                    echo "                <p class=\"nodata\">No general clarifications.</p>";
                } else {
                    // line 93
                    $this->loadTemplate("jury/partials/clarification_list.html.twig", "jury/clarifications.html.twig", 93)->display(twig_array_merge($context, ["clarifications" => ($context["generalClarifications"] ?? null)]));
                }
                // line 95
                echo "        ";
            }
        }
        // line 97
        echo "
    <script>
        function doSwitch() {
            // Fallback the queue to all, since it might not be defined.
            window.location = '";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_clarifications", ["queue" => "REPLACE_QUEUE", "filter" => "REPLACE_FILTER"]), "html", null, true);
        echo "'
                .replace('REPLACE_QUEUE', \$('input[name=queue]:checked').val() || 'all')
                .replace('REPLACE_FILTER', \$('input[name=filter]:checked').val())
                .replace('&amp;', '&');
        }
        \$().ready(function () {
            var table = \$('.data-table').DataTable({
                \"paging\": false,
                \"ordering\": true,
                \"order\": [],
                \"info\": false,
                \"autoWidth\": true,
                \"language\": {
                    \"searchPlaceholder\": \"filter table\",
                    \"search\": \"_INPUT_\",
                },
                'aoColumnDefs': [
                    {aTargets: ['_all'], bSortable: true, bSearchable: true}
                ],
                // Left align the filter box. Modified from the Bootstrap 5 default at
                // https://datatables.net/reference/option/dom
                'dom': \"<'row'f>\" +
                       \"<'row'<'col-sm-12'tr>>\" +
                       \"<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>\",
            });
            \$('.qbut').on('change', function () {
                var icon = \$(\"#qig\" + \$(this).attr('data-clarid') );
                icon.html('<i class=\"fas fa-spinner fa-spin\"></i>');
                var parenttd = \$(this).closest('td');
                var parenttr = \$(this).closest('tr');
                var newname = \$(this).closest('label').text().trim();
                \$.post(\"";
        // line 132
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_clarification_change_queue", ["clarId" => 12345]);
        echo "\".replace('12345', \$(this).attr('data-clarid')),
                    {'queue': \$(this).val()})
                    .done(function( data ) {
                        if ( data ) {
                            parenttd.attr('data-search', newname);
                            table.rows(parenttr).invalidate();
                            icon.html('<i class=\"fas fa-check\"></i>');
                        } else {
                            icon.html('<i class=\"fas fa-times\"></i>');
                        }
                    });
            });

            \$('input[name=queue]').on('change', doSwitch);
            \$('input[name=filter]').on('change', doSwitch);
        });
    </script>

";
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    public function getTemplateName()
    {
        return "jury/clarifications.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  343 => 132,  309 => 101,  303 => 97,  299 => 95,  296 => 93,  293 => 91,  291 => 90,  289 => 89,  287 => 88,  284 => 87,  281 => 86,  278 => 84,  275 => 82,  273 => 81,  271 => 80,  269 => 79,  266 => 78,  263 => 77,  260 => 75,  257 => 73,  255 => 72,  253 => 71,  251 => 70,  248 => 69,  244 => 67,  232 => 64,  228 => 63,  221 => 62,  217 => 61,  211 => 59,  204 => 57,  197 => 55,  190 => 53,  184 => 49,  182 => 48,  173 => 44,  166 => 42,  159 => 40,  152 => 38,  145 => 36,  138 => 34,  131 => 32,  124 => 30,  112 => 21,  108 => 19,  104 => 16,  102 => 15,  99 => 12,  92 => 11,  83 => 8,  78 => 7,  71 => 6,  57 => 4,  49 => 1,  47 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/clarifications.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/clarifications.html.twig");
    }
}
