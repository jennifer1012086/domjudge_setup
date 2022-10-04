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

/* jury/partials/language_form.html.twig */
class __TwigTemplate_49f2fad8d2347c08a3886289a813047b1c279a69d9df03aa703e88bef081cf5f extends Template
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
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/language_form.html.twig"));

        // line 1
        echo "<div class=\"row\">
    <div class=\"col-lg-4\">
        ";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
        ";
        // line 4
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "offsetExists", [0 => "langid"], "method", false, false, false, 4)) {
            // line 5
            echo "            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "langid", [], "any", false, false, false, 5), 'row');
            echo "
        ";
        }
        // line 7
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "offsetExists", [0 => "externalid"], "method", false, false, false, 7)) {
            // line 8
            echo "            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "externalid", [], "any", false, false, false, 8), 'row');
            echo "
        ";
        }
        // line 10
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 10), 'row');
        echo "
        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "requireEntryPoint", [], "any", false, false, false, 11), 'row');
        echo "
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "entryPointDescription", [], "any", false, false, false, 12), 'row');
        echo "
        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "allowSubmit", [], "any", false, false, false, 13), 'row');
        echo "
        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "allowJudge", [], "any", false, false, false, 14), 'row');
        echo "
        <div class=\"form-group\">
            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "timeFactor", [], "any", false, false, false, 16), 'label');
        echo "
            <div class=\"input-group\">
                ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "timeFactor", [], "any", false, false, false, 18), 'widget');
        echo "
                <div class=\"input-group-append\">
                    <div class=\"input-group-text\">&times;</div>
                </div>
            </div>
        </div>
        ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "compileExecutable", [], "any", false, false, false, 24), 'row');
        echo "
        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "extensions", [], "any", false, false, false, 25), 'row');
        echo "
        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "filterCompilerFiles", [], "any", false, false, false, 26), 'row');
        echo "
        ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
    </div>
</div>

<script>
    var \$extensionsHolder;
    var \$addExtensionButton = \$('<button type=\"button\" class=\"btn btn-secondary\"><i class=\"fas fa-plus\"></i></button>');

    \$(function () {
        \$extensionsHolder = \$('div#language_extensions');
        \$extensionsHolder.append(\$addExtensionButton);

        \$extensionsHolder.data('index', \$extensionsHolder.find(':input').length);

        \$addExtensionButton.on('click', function (e) {
            addExtension(\$extensionsHolder, \$addExtensionButton);
        });

        \$extensionsHolder.find('div.form-group').each(function() {
            addDeleteLink(\$(this));
        });

        function addExtension(\$extensionsHolder, \$addExtensionButton) {
            var prototype = \$extensionsHolder.data('prototype');
            var index = \$extensionsHolder.data('index');
            var newForm = prototype;
            newForm = newForm.replace(/__name__/g, index);
            \$extensionsHolder.data('index', index + 1);
            var \$newForm = \$(newForm);
            \$addExtensionButton.before(\$newForm);
            addDeleteLink(\$newForm);
        }

        function addDeleteLink(\$extensionDiv) {
            var \$removeFormButton = \$('<button type=\"button\" class=\"input-group-append btn btn-danger\"><i class=\"fas fa-trash\"></i></button>');
            var \$inputGroup = \$('<div class=\"input-group\"></div>');
            var \$formControl = \$extensionDiv.find('.form-control');
            \$inputGroup.append(\$formControl);
            \$inputGroup.append(\$removeFormButton);
            \$extensionDiv.html(\$inputGroup);

            \$removeFormButton.on('click', function(e) {
                \$extensionDiv.remove();
            });
        }
    });
</script>
";
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    public function getTemplateName()
    {
        return "jury/partials/language_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 27,  109 => 26,  105 => 25,  101 => 24,  92 => 18,  87 => 16,  82 => 14,  78 => 13,  74 => 12,  70 => 11,  65 => 10,  59 => 8,  56 => 7,  50 => 5,  48 => 4,  44 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/partials/language_form.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/partials/language_form.html.twig");
    }
}
