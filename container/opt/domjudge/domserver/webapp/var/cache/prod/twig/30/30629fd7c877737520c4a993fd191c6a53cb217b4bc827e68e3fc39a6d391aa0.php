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

/* jury/submission_edit_source.html.twig */
class __TwigTemplate_ddfa05b49a5b45588329714adef3524d7827155f7500acc6d6937f5af6dd0ac1 extends Template
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
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/submission_edit_source.html.twig"));

        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/submission_edit_source.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Edit source of s";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "submitid", [], "any", false, false, false, 3), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    // line 5
    public function block_extrahead($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrahead"));

        // line 6
        echo "    ";
        $this->displayParentBlock("extrahead", $context, $blocks);
        echo "
    <script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/ace/ace.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    // line 10
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo "
    <h1>
        Edit submission
        <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission", ["submitId" => twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "submitid", [], "any", false, false, false, 14)]), "html", null, true);
        echo "\">s";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "submitid", [], "any", false, false, false, 14), "html", null, true);
        echo "</a>
        source files
    </h1>

    ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "

    <ul class=\"nav nav-tabs source-tab-nav\">";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["files"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
            // line 22
            echo "
            <li class=\"nav-item\">
                <a class=\"nav-link ";
            // line 24
            if ((((null === ($context["selected"] ?? null)) && twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 24)) || (0 === twig_compare(($context["selected"] ?? null), twig_get_attribute($this->env, $this->source, $context["file"], "rank", [], "any", false, false, false, 24))))) {
                echo "active";
            }
            echo "\"
                   data-toggle=\"tab\" href=\"#source-";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "rank", [], "any", false, false, false, 25), "html", null, true);
            echo "\" role=\"tab\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 25), "html", null, true);
            echo "</a>
            </li>";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "
    </ul>
    <div class=\"tab-content source-tab\">";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["files"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["idx"] => $context["file"]) {
            // line 32
            echo "
            <div class=\"tab-pane fade ";
            // line 33
            if ((((null === ($context["selected"] ?? null)) && twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 33)) || (0 === twig_compare(($context["selected"] ?? null), twig_get_attribute($this->env, $this->source, $context["file"], "rank", [], "any", false, false, false, 33))))) {
                echo "show active";
            }
            echo "\"
                 id=\"source-";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "rank", [], "any", false, false, false, 34), "html", null, true);
            echo "\" role=\"tabpanel\">
                ";
            // line 35
            echo $this->extensions['App\Twig\TwigExtension']->codeEditor(twig_get_attribute($this->env, $this->source, $context["file"], "sourcecode", [], "any", false, false, false, 35), $context["idx"], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "language", [], "any", false, false, false, 35), "aceLanguage", [], "any", false, false, false, 35), true, ("form_source" . twig_get_attribute($this->env, $this->source, $context["file"], "rank", [], "any", false, false, false, 35)));
            echo "
                <script>
                    \$(function () {
                        \$('#form_source";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "rank", [], "any", false, false, false, 38), "html", null, true);
            echo "').closest('.form-group').hide();
                    });
                </script>
            </div>";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['idx'], $context['file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "
    </div>

    <div class=\"row\">
        <div class=\"col-lg-4\">
            ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
        </div>
    </div>
    ";
        // line 51
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "

";
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    public function getTemplateName()
    {
        return "jury/submission_edit_source.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 51,  227 => 48,  220 => 43,  202 => 38,  196 => 35,  192 => 34,  186 => 33,  183 => 32,  166 => 31,  162 => 28,  144 => 25,  138 => 24,  134 => 22,  117 => 21,  112 => 18,  103 => 14,  98 => 11,  91 => 10,  82 => 7,  77 => 6,  70 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/submission_edit_source.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/submission_edit_source.html.twig");
    }
}
