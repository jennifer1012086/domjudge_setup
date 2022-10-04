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

/* jury/clarification.html.twig */
class __TwigTemplate_71e6b84bd8f4184ed99993a99ab4659b2c3cc4ad3b87bfbd12220da8ed83360f extends Template
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
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/clarification.html.twig"));

        // line 3
        $context["origclar"] = twig_first($this->env, ($context["list"] ?? null));
        // line 4
        $context["claimed"] = ( !twig_get_attribute($this->env, $this->source, ($context["origclar"] ?? null), "answered", [], "any", false, false, false, 4) && twig_get_attribute($this->env, $this->source, ($context["origclar"] ?? null), "from_jurymember", [], "any", true, true, false, 4));
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/clarification.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Clarification ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["origclar"] ?? null), "clarid", [], "any", false, false, false, 6), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    // line 8
    public function block_extrahead($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrahead"));

        // line 9
        echo "    ";
        $this->displayParentBlock("extrahead", $context, $blocks);
        echo "
";
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    // line 12
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "
<div class=\"container clarificationform\">
";
        // line 15
        if (($context["claimed"] ?? null)) {
            // line 16
            echo "<div class=\"alert alert-info\" role=\"alert\">
<i class=\"fas fa-user-lock\"></i> Claimed by <strong>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["origclar"] ?? null), "from_jurymember", [], "any", false, false, false, 17), "html", null, true);
            echo "</strong>
";
            // line 18
            if (twig_get_attribute($this->env, $this->source, ($context["origclar"] ?? null), "jurymember_is_me", [], "any", false, false, false, 18)) {
                echo "(it's you!)";
            }
            // line 19
            echo "</div>
";
        }
        // line 21
        echo "

";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["list"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["clar"]) {
            // line 24
            echo "
<div class=\"card mb-3 ";
            // line 25
            if ( !twig_get_attribute($this->env, $this->source, $context["clar"], "from_teamid", [], "any", true, true, false, 25)) {
                echo "border-primary";
            }
            echo "\">
<div class=\"card-header\"><div class=\"row\">
<div class=\"col-sm\">
    Clarification ";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clar"], "clarid", [], "any", false, false, false, 28), "html", null, true);
            echo "
    ";
            // line 29
            if (($context["showExternalId"] ?? null)) {
                // line 30
                echo "        (external ID: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clar"], "externalid", [], "any", false, false, false, 30), "html", null, true);
                echo ")
    ";
            }
            // line 32
            echo "</div>
<div class=\"col-sm text-muted text-right\">";
            // line 33
            echo $this->extensions['App\Twig\TwigExtension']->printtimeHover(twig_get_attribute($this->env, $this->source, $context["clar"], "time", [], "any", false, false, false, 33), twig_get_attribute($this->env, $this->source, $context["clar"], "contest", [], "any", false, false, false, 33));
            echo "</div>
</div></div>
<div class=\"card-body\">
<div class=\"card-title\">
<div class=\"row\">
<div class=\"col-sm\">
From:
";
            // line 40
            if (twig_get_attribute($this->env, $this->source, $context["clar"], "from_teamid", [], "any", true, true, false, 40)) {
                // line 41
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team", ["teamId" => twig_get_attribute($this->env, $this->source, $context["clar"], "from_teamid", [], "any", false, false, false, 41)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clar"], "from_teamname", [], "any", false, false, false, 41), "html", null, true);
                echo " (t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clar"], "from_teamid", [], "any", false, false, false, 41), "html", null, true);
                echo ")</a>
";
            } else {
                // line 43
                echo "Jury
    ";
                // line 44
                if (twig_get_attribute($this->env, $this->source, $context["clar"], "from_jurymember", [], "any", true, true, false, 44)) {
                    // line 45
                    echo "        (";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clar"], "from_jurymember", [], "any", false, false, false, 45), "html", null, true);
                    echo ")
    ";
                }
            }
            // line 48
            echo "</div>

<div class=\"col-sm\">
    Subject:
    <span class=\"clarification-subject\">
        ";
            // line 53
            if (twig_get_attribute($this->env, $this->source, $context["clar"], "subjectlink", [], "any", true, true, false, 53)) {
                // line 54
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clar"], "subjectlink", [], "any", false, false, false, 54), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clar"], "subject", [], "any", false, false, false, 54), "html", null, true);
                echo "</a>
        ";
            } else {
                // line 56
                echo "            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clar"], "subject", [], "any", false, false, false, 56), "html", null, true);
                echo "
        ";
            }
            // line 58
            echo "        <button class=\"btn btn-sm btn-link clarification-subject-change-button\">
            <i class=\"far fa-edit\" title=\"Change subject\"></i>
        </button>
    </span>
<span class=\"clarification-subject-form\" data-current-selected-subject=\"";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clar"], "categoryid", [], "any", false, false, false, 62), "html", null, true);
            echo "\" data-clarification-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clar"], "clarid", [], "any", false, false, false, 62), "html", null, true);
            echo "\">
<form action=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_clarification_change_subject", ["clarId" => twig_get_attribute($this->env, $this->source, $context["clar"], "clarid", [], "any", false, false, false, 63)]), "html", null, true);
            echo "\" method=\"post\" class=\"form-inline\">
<select name=\"subject\" class=\"subject custom-select custom-select-sm\">
";
            // line 65
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["clarform"] ?? null), "subjects", [], "any", false, false, false, 65));
            foreach ($context['_seq'] as $context["contest"] => $context["subject"]) {
                // line 66
                echo "<optgroup label=\"";
                echo twig_escape_filter($this->env, $context["contest"], "html", null, true);
                echo "\">
";
                // line 67
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["subject"]);
                foreach ($context['_seq'] as $context["id"] => $context["descr"]) {
                    // line 68
                    echo "<option value=\"";
                    echo twig_escape_filter($this->env, $context["id"], "html", null, true);
                    echo "\"";
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["clar"], "categoryid", [], "any", false, false, false, 68), $context["id"]))) {
                        echo " selected";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, $context["descr"], "html", null, true);
                    echo "</option>
";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['id'], $context['descr'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 70
                echo "</optgroup>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['contest'], $context['subject'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "</select>
<button type=\"button\" class=\"close clarification-subject-cancel-button ml-2\" aria-label=\"Cancel\">
  <span aria-hidden=\"true\">&times;</span>
</button>
</form>
</span>
</div>
</div>

<div class=\"row\">
<div class=\"col-sm\">To:
";
            // line 83
            if (twig_get_attribute($this->env, $this->source, $context["clar"], "to_teamid", [], "any", true, true, false, 83)) {
                // line 84
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team", ["teamId" => twig_get_attribute($this->env, $this->source, $context["clar"], "to_teamid", [], "any", false, false, false, 84)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clar"], "to_teamname", [], "any", false, false, false, 84), "html", null, true);
                echo " (t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clar"], "to_teamid", [], "any", false, false, false, 84), "html", null, true);
                echo ")</a>
";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 85
$context["clar"], "from_teamid", [], "any", true, true, false, 85)) {
                // line 86
                echo "Jury
";
            } else {
                // line 88
                echo "<strong>All</strong>
";
            }
            // line 90
            echo "</div>

<div class=\"col-sm\">Queue: <span class=\"clarification-queue\">";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clar"], "queue", [], "any", false, false, false, 92), "html", null, true);
            echo "
<button class=\"btn btn-sm btn-link clarification-queue-change-button\"><i class=\"far fa-edit\" title=\"Change queue\"></i></button></span>
<span class=\"clarification-queue-form\" data-current-selected-queue=\"";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clar"], "queueid", [], "any", false, false, false, 94), "html", null, true);
            echo "\" data-clarification-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clar"], "clarid", [], "any", false, false, false, 94), "html", null, true);
            echo "\">
<form action=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_clarification_change_queue", ["clarId" => twig_get_attribute($this->env, $this->source, $context["clar"], "clarid", [], "any", false, false, false, 95)]), "html", null, true);
            echo "\" method=\"post\" class=\"form-inline\">
<select name=\"queue\" class=\"queue custom-select custom-select-sm\">
<option value=\"unassigned\">Unassigned issues</option>
";
            // line 98
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["clarform"] ?? null), "queues", [], "any", false, false, false, 98));
            foreach ($context['_seq'] as $context["qid"] => $context["queue"]) {
                // line 99
                echo "<option value=\"";
                echo twig_escape_filter($this->env, $context["qid"], "html", null, true);
                echo "\"";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["clar"], "queueid", [], "any", false, false, false, 99), $context["qid"]))) {
                    echo " selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, $context["queue"], "html", null, true);
                echo "</option>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['qid'], $context['queue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "</select>
<button type=\"button\" class=\"close clarification-queue-cancel-button ml-2\" aria-label=\"Cancel\">
  <span aria-hidden=\"true\">&times;</span>
</button>
</form>
</span>

</div>

</div>
</div>

<div class=\"card-text\"><pre class=\"output-text bg-light p-3\">";
            // line 113
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clar"], "body", [], "any", false, false, false, 113), "html", null, true);
            echo "</pre></div>

</div>
</div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['clar'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "
<div class=\"knoppenbalk\">
<div class=\"row\">
<div class=\"col-sm\"><button class=\"btn btn-secondary btn-sm\" data-toggle=\"collapse\" data-target=\"#collapsereplyform\"
 aria-expanded=\"false\" aria-controls=\"collapsereplyform\"><i class=\"fa fa-reply\"></i> reply</button>
</div>

<div class=\"col-sm text-center\">
<form action=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_clarification_claim", ["clarId" => twig_get_attribute($this->env, $this->source, ($context["origclar"] ?? null), "clarid", [], "any", false, false, false, 127)]), "html", null, true);
        echo "\" method=\"post\">

";
        // line 129
        if (($context["claimed"] ?? null)) {
            // line 130
            if (twig_get_attribute($this->env, $this->source, ($context["origclar"] ?? null), "jurymember_is_me", [], "any", false, false, false, 130)) {
                // line 131
                echo "<button class=\"btn btn-sm btn-outline-success\" name=\"claimed\" value=\"0\" type=\"submit\"><i class=\"fas fa-lock-open\"></i> unclaim</button>
";
            } else {
                // line 133
                echo "<button class=\"btn btn-sm btn-outline-success\" name=\"claimed\" value=\"1\" type=\"submit\"><i class=\"fas fa-user-secret\"></i> steal</button>
";
            }
        } else {
            // line 136
            echo "<button class=\"btn btn-sm btn-success\" name=\"claimed\" value=\"1\" type=\"submit\" ";
            if (twig_get_attribute($this->env, $this->source, ($context["origclar"] ?? null), "answered", [], "any", false, false, false, 136)) {
                echo "disabled";
            }
            echo "><i class=\"fas fa-lock\"></i> claim</button>
";
        }
        // line 138
        echo "
</form>
</div>

<div class=\"col-sm text-right\">
<form action=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_clarification_set_answered", ["clarId" => twig_get_attribute($this->env, $this->source, ($context["origclar"] ?? null), "clarid", [], "any", false, false, false, 143)]), "html", null, true);
        echo "\" method=\"post\">

";
        // line 145
        if (twig_get_attribute($this->env, $this->source, ($context["origclar"] ?? null), "answered", [], "any", false, false, false, 145)) {
            // line 146
            echo "<button class=\"btn btn-sm btn-outline-warning\" name=\"answered\" value=\"0\" type=\"submit\"><i class=\"fas fa-times\"></i> set unanswered</button>
";
        } else {
            // line 148
            echo "<button class=\"btn btn-sm btn-warning\" name=\"answered\" value=\"1\" type=\"submit\"><i class=\"fas fa-check\"></i> set answered</button>
";
        }
        // line 150
        echo "</form>
</div>

</div>
</div>

</div>

<div class=\"mt-4 collapse container clarificationform\" id=\"collapsereplyform\"><div class=\"card\">
<div class=\"card-header\">Send clarification</div>
<div class=\"card-body\">";
        // line 161
        $this->loadTemplate("jury/partials/clarification_form.html.twig", "jury/clarification.html.twig", 161)->display($context);
        // line 162
        echo "</div>
</div></div>

<div class=\"mb-5\"></div>
";
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    // line 167
    public function block_extrafooter($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrafooter"));

        // line 168
        echo "<script>
    \$(function() {
        \$(['subject', 'queue']).each(function(_, field) {
            \$('.clarification-' + field + '-change-button').on('click', function () {
                \$(this).closest('.clarification-' + field).hide();
                \$(this).closest('div').find('.clarification-' + field + '-form').show();
            });
            \$('.clarification-' + field + '-cancel-button').on('click', function () {
                \$(this).closest('.clarification-' + field + '-form').hide();
                \$(this).closest('div').find('.clarification-' + field).show();
            });
            \$('.clarification-' + field + '-form select').on('change', function () {
                var \$select = \$(this);
                var \$form = \$select.closest('.clarification-' + field + '-form');
                var clarId = \$form.data('clarification-id');
                var value = \$select.find(':selected').text();
                if (confirm('Are you sure you want to change the ' + field + ' of clarification ' + clarId + ' to \"' + value + '\"?')) {
                    \$form.find('form').submit();
                } else {
                    \$select.val(\$form.data('current-selected-' + field));
                }
            });
        });
        \$('#clar_answers').change(clarificationAppendAnswer);
     });
</script>
";
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    public function getTemplateName()
    {
        return "jury/clarification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  454 => 168,  447 => 167,  436 => 162,  434 => 161,  422 => 150,  418 => 148,  414 => 146,  412 => 145,  407 => 143,  400 => 138,  392 => 136,  387 => 133,  383 => 131,  381 => 130,  379 => 129,  374 => 127,  364 => 119,  352 => 113,  338 => 101,  323 => 99,  319 => 98,  313 => 95,  307 => 94,  302 => 92,  298 => 90,  294 => 88,  290 => 86,  288 => 85,  279 => 84,  277 => 83,  264 => 72,  257 => 70,  242 => 68,  238 => 67,  233 => 66,  229 => 65,  224 => 63,  218 => 62,  212 => 58,  206 => 56,  198 => 54,  196 => 53,  189 => 48,  182 => 45,  180 => 44,  177 => 43,  167 => 41,  165 => 40,  155 => 33,  152 => 32,  146 => 30,  144 => 29,  140 => 28,  132 => 25,  129 => 24,  125 => 23,  121 => 21,  117 => 19,  113 => 18,  109 => 17,  106 => 16,  104 => 15,  100 => 13,  93 => 12,  83 => 9,  76 => 8,  60 => 6,  52 => 1,  50 => 4,  48 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/clarification.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/clarification.html.twig");
    }
}
