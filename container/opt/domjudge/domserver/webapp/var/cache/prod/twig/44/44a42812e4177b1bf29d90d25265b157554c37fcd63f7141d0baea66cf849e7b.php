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

/* jury/partials/external_contest_source_form.html.twig */
class __TwigTemplate_d979d3cb2da77c4125ec3d56bdcae132f06cee1adbcdea899a57670c65496172 extends Template
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
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/external_contest_source_form.html.twig"));

        // line 1
        echo "<div class=\"row\">
    <div class=\"col-lg-4\">
        ";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
        ";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "contest", [], "any", false, false, false, 4), 'row');
        echo "
        ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "enabled", [], "any", false, false, false, 5), 'row');
        echo "
        ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "type", [], "any", false, false, false, 6), 'row');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "source", [], "any", false, false, false, 7), 'row');
        echo "
        <div data-type-ccs-api>
            ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "username", [], "any", false, false, false, 9), 'row');
        echo "
            <div class=\"form-group\">
                ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "password", [], "any", false, false, false, 11), 'label');
        echo "
                <div class=\"input-group\">
                    ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "password", [], "any", false, false, false, 13), 'widget');
        echo "
                    <div class=\"input-group-append\">
                        <button class=\"btn btn-outline-secondary\" type=\"button\" id=\"show-hide-password-button\">
                            <i class=\"fa fa-eye\"></i>
                        </button>
                    </div>
                </div>
                ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "password", [], "any", false, false, false, 20), 'help');
        echo "
            </div>
        </div>
        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "save", [], "any", false, false, false, 23), 'row');
        echo "
        ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
    </div>
</div>

<script>
    \$(function () {
        var type = \$('#external_contest_source_type');
        var typeChanged = function () {
            var ccsApiFields = \$('[data-type-ccs-api]');
            switch (type.val()) {
                case '";
        // line 34
        echo twig_escape_filter($this->env, twig_constant("App\\Entity\\ExternalContestSource::TYPE_CCS_API"), "html", null, true);
        echo "':
                    ccsApiFields.show();
                    break;
                default:
                    ccsApiFields.hide();
                    break;
            }
        };
        type.on('change', typeChanged);
        typeChanged();

        var \$passwordField = \$('#external_contest_source_password');
        \$passwordField.attr('type', 'password');

        \$('#show-hide-password-button').on('click', function() {
            if (\$passwordField.attr('type') === 'password') {
                \$passwordField.attr('type', 'text');
                \$('i', \$(this)).attr('class', 'fa fa-eye-slash');
            } else {
                \$passwordField.attr('type', 'password');
                \$('i', \$(this)).attr('class', 'fa fa-eye');
            }
        });
    })
</script>
";
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    public function getTemplateName()
    {
        return "jury/partials/external_contest_source_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 34,  95 => 24,  91 => 23,  85 => 20,  75 => 13,  70 => 11,  65 => 9,  60 => 7,  56 => 6,  52 => 5,  48 => 4,  44 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/partials/external_contest_source_form.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/partials/external_contest_source_form.html.twig");
    }
}
