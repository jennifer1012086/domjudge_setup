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

/* partials/team.html.twig */
class __TwigTemplate_594cd85e0c7a56b9740027be48207bb1ab9e0ff832dbab6d6cac353461bcd1ba extends Template
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
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/team.html.twig"));

        // line 1
        if (twig_test_empty(($context["team"] ?? null))) {
            // line 2
            echo "    <div class=\"alert alert-danger mt-4\">
        No team found by this id.
    </div>
";
        } else {
            // line 6
            echo "
    <div class=\"row\">
        <div class=\"col-lg-";
            // line 8
            echo twig_escape_filter($this->env, ((array_key_exists("size", $context)) ? (_twig_default_filter(($context["size"] ?? null), 4)) : (4)), "html", null, true);
            echo "\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>Name</th>
                    <td>";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "effectiveName", [], "any", false, false, false, 12), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <th>Category</th>
                    <td>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "category", [], "any", false, false, false, 16), "name", [], "any", false, false, false, 16), "html", null, true);
            echo "</td>
                </tr>
                ";
            // line 18
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "publicdescription", [], "any", false, false, false, 18))) {
                // line 19
                echo "                    <tr>
                        <th>Description</th>
                        <td>";
                // line 21
                echo twig_nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "publicdescription", [], "any", false, false, false, 21), "html", null, true));
                echo "</td>
                    </tr>
                ";
            }
            // line 24
            echo "                ";
            if ((($context["showAffiliations"] ?? null) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "affiliation", [], "any", false, false, false, 24)))) {
                // line 25
                echo "                    <tr>
                        <th>Affiliation</th>
                        <td>
                        ";
                // line 28
                $context["affiliationId"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "affiliation", [], "any", false, false, false, 28), "affilid", [], "any", false, false, false, 28);
                // line 29
                echo "                        ";
                if ($this->extensions['App\Twig\TwigExtension']->showExternalId(twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "affiliation", [], "any", false, false, false, 29))) {
                    // line 30
                    echo "                            ";
                    $context["affiliationId"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "affiliation", [], "any", false, false, false, 30), "externalid", [], "any", false, false, false, 30);
                    // line 31
                    echo "                        ";
                }
                // line 32
                echo "                        ";
                $context["affiliationLogo"] = $this->env->getFilter('assetPath')->getCallable()(($context["affiliationId"] ?? null), "affiliation");
                // line 33
                echo "                        ";
                if (($context["affiliationLogo"] ?? null)) {
                    // line 34
                    echo "                            <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["affiliationLogo"] ?? null)), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "affiliation", [], "any", false, false, false, 34), "shortname", [], "any", false, false, false, 34), "html", null, true);
                    echo "\"
                                 title=\"";
                    // line 35
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "affiliation", [], "any", false, false, false, 35), "shortname", [], "any", false, false, false, 35), "html", null, true);
                    echo "\" class=\"affiliation-logo\">
                        ";
                }
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "affiliation", [], "any", false, false, false, 37), "name", [], "any", false, false, false, 37), "html", null, true);
                echo "</td>
                    </tr>
                    ";
                // line 39
                if ((($context["showFlags"] ?? null) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "affiliation", [], "any", false, false, false, 39), "country", [], "any", false, false, false, 39)))) {
                    // line 40
                    echo "                        <tr>
                            <th>Country</th>
                            <td>
                                ";
                    // line 43
                    echo $this->extensions['App\Twig\TwigExtension']->countryFlag(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "affiliation", [], "any", false, false, false, 43), "country", [], "any", false, false, false, 43), true);
                    echo "
                            </td>
                        </tr>
                    ";
                }
                // line 47
                echo "                ";
            }
            // line 48
            echo "                ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "room", [], "any", false, false, false, 48))) {
                // line 49
                echo "                    <tr>
                        <th>Location</th>
                        <td>";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "room", [], "any", false, false, false, 51), "html", null, true);
                echo "</td>
                    </tr>
                ";
            }
            // line 54
            echo "            </table>
        </div>
    ";
            // line 56
            $context["teamId"] = twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "teamid", [], "any", false, false, false, 56);
            // line 57
            echo "    ";
            if ($this->extensions['App\Twig\TwigExtension']->showExternalId(($context["team"] ?? null))) {
                // line 58
                echo "        ";
                $context["teamId"] = twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "externalid", [], "any", false, false, false, 58);
                // line 59
                echo "    ";
            }
            // line 60
            echo "    ";
            $context["teamImage"] = $this->env->getFilter('assetPath')->getCallable()(($context["teamId"] ?? null), "team");
            // line 61
            echo "    ";
            if (($context["teamImage"] ?? null)) {
                // line 62
                echo "        <div class=\"col-lg-";
                echo twig_escape_filter($this->env, ((array_key_exists("size", $context)) ? (_twig_default_filter(($context["size"] ?? null), 4)) : (4)), "html", null, true);
                echo "\">
        <img id=\"teampicture\" src=\"";
                // line 63
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["teamImage"] ?? null)), "html", null, true);
                echo "\" alt=\"Picture of team ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "effectiveName", [], "any", false, false, false, 63), "html", null, true);
                echo "\"
             title=\"Picture of team ";
                // line 64
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "effectiveName", [], "any", false, false, false, 64), "html", null, true);
                echo "\">
        </div>
    ";
            }
            // line 67
            echo "    </div>
";
        }
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    public function getTemplateName()
    {
        return "partials/team.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 67,  187 => 64,  181 => 63,  176 => 62,  173 => 61,  170 => 60,  167 => 59,  164 => 58,  161 => 57,  159 => 56,  155 => 54,  149 => 51,  145 => 49,  142 => 48,  139 => 47,  132 => 43,  127 => 40,  125 => 39,  120 => 37,  115 => 35,  108 => 34,  105 => 33,  102 => 32,  99 => 31,  96 => 30,  93 => 29,  91 => 28,  86 => 25,  83 => 24,  77 => 21,  73 => 19,  71 => 18,  66 => 16,  59 => 12,  52 => 8,  48 => 6,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "partials/team.html.twig", "/opt/domjudge/domserver/webapp/templates/partials/team.html.twig");
    }
}
