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

/* team/submit_modal.html.twig */
class __TwigTemplate_a866ab5f7ff4c00171686c5b006cdaeb94cd0ff107725dc71f30e74bde3ab8c3 extends Template
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
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "team/submit_modal.html.twig"));

        // line 1
        echo "<div class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">
                    Submit ";
        // line 6
        if ( !(null === ($context["problem"] ?? null))) {
            echo "problem ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "name", [], "any", false, false, false, 6), "html", null, true);
        }
        // line 7
        echo "                </h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            ";
        // line 12
        if ((twig_test_empty(($context["current_team_contest"] ?? null)) || ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY") &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["current_team_contest"] ?? null), "freezeData", [], "any", false, false, false, 12), "started", [], "any", false, false, false, 12)))) {
            // line 13
            echo "                <div class=\"modal-body\">
                    <div class=\"alert alert-danger\" role=\"alert\">Contest has not yet started - cannot submit.</div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                </div>
            ";
        } else {
            // line 20
            echo "                ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
            echo "
                <div class=\"modal-body\">
                    ";
            // line 22
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "code", [], "any", false, false, false, 22), 'row');
            echo "
                    <div class=\"alert alert-warning\" id=\"files_not_modified\" style=\"display:none;\"></div>
                    ";
            // line 24
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "problem", [], "any", false, false, false, 24), 'row');
            echo "
                    ";
            // line 25
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "language", [], "any", false, false, false, 25), 'row');
            echo "
                    <div class=\"form-group\" data-entry-point>
                        ";
            // line 27
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "entry_point", [], "any", false, false, false, 27), 'label');
            echo "
                        ";
            // line 28
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "entry_point", [], "any", false, false, false, 28), 'widget');
            echo "
                        ";
            // line 29
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "entry_point", [], "any", false, false, false, 29), 'help');
            echo "
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cancel</button>
                    <button type=\"submit\" class=\"btn-success btn\">
                        <i class=\"fas fa-cloud-upload-alt\"></i> Submit
                    </button>
                </div>
                ";
            // line 38
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
            echo "
            ";
        }
        // line 40
        echo "        </div>
    </div>

    <script>
        const fileInput = document.getElementById('submit_problem_code');
        fileInput.addEventListener('change', (event) => {
            const five_minutes_in_ms = 5 * 60 * 1000;
            const now = Date.now();
            const filesNotModified = document.getElementById('files_not_modified');
            filesNotModified.style.display = 'none';

            var atLeastOneFileRecent = false;
            var fileInfoHtml = '';
            const files = event.target.files;
            for (let file of files) {
                const date = new Date(file.lastModified);
                const ago = humanReadableTimeDiff((now - date)/1000) + ' ago';
                if (date > now - five_minutes_in_ms) {
                    atLeastOneFileRecent = true;
                }
                size = humanReadableBytes(file.size);
                fileInfoHtml += `<li><span class=\"filename\">\${file.name}</span>, \${size}, last modified \${ago}</li>`;
            }
            if (!atLeastOneFileRecent) {
                filesNotModified.style.display = 'block';
                filesNotModified.innerHTML =
                    'None of the selected files has been recently modified:' +
                    '<ul>' + fileInfoHtml + '</ul>';
            }
        });
    </script>
</div>
";
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    public function getTemplateName()
    {
        return "team/submit_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 40,  110 => 38,  98 => 29,  94 => 28,  90 => 27,  85 => 25,  81 => 24,  76 => 22,  70 => 20,  61 => 13,  59 => 12,  52 => 7,  47 => 6,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "team/submit_modal.html.twig", "/opt/domjudge/domserver/webapp/templates/team/submit_modal.html.twig");
    }
}
