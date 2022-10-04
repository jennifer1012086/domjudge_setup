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

/* jury/menu.html.twig */
class __TwigTemplate_f5389a9c9f06239e0088a3421c8274a374491ff9a96619827d82d699aa2c8f67 extends Template
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
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/menu.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-md navbar-dark bg-dark fixed-top\">
    <a class=\"navbar-brand hidden-sm-down\" href=\"";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_index");
        echo "\">DOMjudge</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#menuDefault\" aria-controls=\"menuDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>

    ";
        // line 7
        $context["current_route"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 7), "attributes", [], "any", false, false, false, 7), "get", [0 => "_route"], "method", false, false, false, 7);
        // line 8
        echo "
    <div class=\"collapse navbar-collapse\" id=\"menuDefault\" data-update-url=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_ajax_updates");
        echo "\">
        <ul class=\"navbar-nav mr-auto\">

            ";
        // line 12
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_BALLOON")) {
            // line 13
            echo "                <li class=\"nav-item ";
            if ((0 === twig_compare(($context["current_route"] ?? null), "jury_balloons"))) {
                echo "active";
            }
            echo "\">
                    <a class=\"nav-link\" href=\"";
            // line 14
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_balloons");
            echo "\">
                        <i class=\"fas fa-map-marker-alt\"></i> balloons
                        <span class=\"badge badge-info\" id=\"num-alerts-balloons\"></span>
                    </a>
                </li>
            ";
        }
        // line 20
        echo "
            ";
        // line 21
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 22
            echo "                <li class=\"nav-item dropdown ";
            if (((is_string($__internal_compile_0 = ($context["current_route"] ?? null)) && is_string($__internal_compile_1 = "jury_judgehost") && ('' === $__internal_compile_1 || 0 === strpos($__internal_compile_0, $__internal_compile_1))) || (0 === twig_compare(($context["current_route"] ?? null), "jury_internal_errors")))) {
                echo "active";
            }
            echo "\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownJudgehosts\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <i class=\"fas fa-gavel\"></i> judgehosts
                        <span class=\"badge badge-warning\" id=\"num-alerts-judgehosts\"></span>
                        <span class=\"badge badge-danger\" id=\"num-alerts-internalerrors\"></span>
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                        <a class=\"dropdown-item ";
            // line 29
            if ((is_string($__internal_compile_2 = ($context["current_route"] ?? null)) && is_string($__internal_compile_3 = "jury_judgehost") && ('' === $__internal_compile_3 || 0 === strpos($__internal_compile_2, $__internal_compile_3)))) {
                echo "active";
            }
            echo "\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_judgehosts");
            echo "\" id=\"menu_judgehosts\">
                            <i class=\"fas fa-server fa-fw\"></i> judgehosts <span class=\"badge badge-warning\" id=\"num-alerts-judgehosts-sub\"></span>
                        </a>
                        <a class=\"dropdown-item dropdown-disabled ";
            // line 32
            if ((0 === twig_compare(($context["current_route"] ?? null), "jury_internal_errors"))) {
                echo "active";
            }
            echo "\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_internal_errors");
            echo "\" id=\"menu_internal_error\">
                            <i class=\"fas fa-bolt fa-fw\"></i> internal error <span class=\"badge badge-danger\" id=\"num-alerts-internalerrors-sub\"></span>
                        </a>
                    </div>
                </li>
            ";
        }
        // line 38
        echo "
            ";
        // line 39
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CLARIFICATION_RW")) {
            // line 40
            echo "                <li class=\"nav-item ";
            if ((is_string($__internal_compile_4 = ($context["current_route"] ?? null)) && is_string($__internal_compile_5 = "jury_clarification") && ('' === $__internal_compile_5 || 0 === strpos($__internal_compile_4, $__internal_compile_5)))) {
                echo "active";
            }
            echo "\">
                    <a class=\"nav-link\" href=\"";
            // line 41
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_clarifications");
            echo "\" id=\"menu_clarifications\"><i class=\"fas fa-comments\"></i> clarifications <span class=\"badge badge-info\" id=\"num-alerts-clarifications\"></span></a>
                </li>
            ";
        }
        // line 44
        echo "
            ";
        // line 45
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY")) {
            // line 46
            echo "                <li class=\"nav-item ";
            if ((is_string($__internal_compile_6 = ($context["current_route"] ?? null)) && is_string($__internal_compile_7 = "jury_submission") && ('' === $__internal_compile_7 || 0 === strpos($__internal_compile_6, $__internal_compile_7)))) {
                echo "active";
            }
            echo "\">
                    <a class=\"nav-link\" href=\"";
            // line 47
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submissions");
            echo "\"><i class=\"fas fa-file-code\"></i> submissions</a>
                </li>

                ";
            // line 50
            if (($context["show_shadow_differences"] ?? null)) {
                // line 51
                echo "                    <li class=\"nav-item dropdown ";
                if (((0 === twig_compare(($context["current_route"] ?? null), "jury_shadow_differences")) || (is_string($__internal_compile_8 = ($context["current_route"] ?? null)) && is_string($__internal_compile_9 = "jury_external_contest_source") && ('' === $__internal_compile_9 || 0 === strpos($__internal_compile_8, $__internal_compile_9))))) {
                    echo "active";
                }
                echo "\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownShadow\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"fas fa-copy\"></i> shadowing
                            <span class=\"badge badge-danger\" id=\"num-alerts-shadowdifferences\"></span>
                            <span class=\"badge badge-warning\" id=\"num-alerts-externalcontestsources\"></span>
                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                            <a class=\"dropdown-item ";
                // line 58
                if ((null === ($context["current_contest"] ?? null))) {
                    echo "dropdown-disabled";
                }
                echo " ";
                if ((0 === twig_compare(($context["current_route"] ?? null), "jury_shadow_differences"))) {
                    echo "active";
                }
                echo "\"
                                ";
                // line 59
                if ( !(null === ($context["current_contest"] ?? null))) {
                    echo "href=\"";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_shadow_differences");
                    echo "\"";
                }
                echo " id=\"menu_shadow_differences\">
                                <i class=\"fas fa-not-equal fa-fw\"></i> shadow differences <span class=\"badge badge-danger\" id=\"num-alerts-shadowdifferences-sub\"></span>
                            </a>
                            <a class=\"dropdown-item ";
                // line 62
                if ((is_string($__internal_compile_10 = ($context["current_route"] ?? null)) && is_string($__internal_compile_11 = "jury_external_contest_source") && ('' === $__internal_compile_11 || 0 === strpos($__internal_compile_10, $__internal_compile_11)))) {
                    echo "active";
                }
                echo "\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_external_contest_sources");
                echo "\" id=\"menu_external_contest_sources\">
                                <i class=\"fas fa-laptop-code fa-fw\"></i> external contest sources <span class=\"badge badge-warning\" id=\"num-alerts-externalcontestsources-sub\"></span>
                            </a>
                        </div>
                    </li>
                ";
            }
            // line 68
            echo "
                <li class=\"nav-item ";
            // line 69
            if ((0 === twig_compare(($context["current_route"] ?? null), "jury_rejudgings"))) {
                echo "active";
            }
            echo "\">
                    <a class=\"nav-link\" href=\"";
            // line 70
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_rejudgings");
            echo "\" id=\"menu_rejudgings\"><i class=\"fas fa-sync\"></i> rejudgings <span class=\"badge badge-info\" id=\"num-alerts-rejudgings\"></span></a>
                </li>
            ";
        }
        // line 73
        echo "
            ";
        // line 74
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_BALLOON"))) {
            // line 75
            echo "                <li class=\"nav-item ";
            if ((0 === twig_compare(($context["current_route"] ?? null), "jury_scoreboard"))) {
                echo "active";
            }
            echo "\">
                    <a class=\"nav-link\" href=\"";
            // line 76
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_scoreboard");
            echo "\"><i class=\"fas fa-list-ol\"></i> scoreboard</a>
                </li>
            ";
        }
        // line 79
        echo "            ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_TEAM")) {
            // line 80
            echo "                <li class=\"nav-item\">
                    <a class=\"nav-link\" target=\"_top\" href=\"";
            // line 81
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_index");
            echo "\"><i class=\"fas fa-arrow-right\"></i> team</a>
                </li>
            ";
        }
        // line 84
        echo "        </ul>

        <ul class=\"navbar-nav ml-auto\">
            ";
        // line 88
        echo "            ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 89
            echo "                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <i class=\"fas fa-user\"></i> ";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 91), "getUsername", [], "method", false, false, false, 91), "html", null, true);
            echo "
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                        ";
            // line 94
            if ((twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 94) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 94), "getName", [], "method", false, false, false, 94))) {
                // line 95
                echo "                            <a class=\"dropdown-item disabled\" href=\"#\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 95), "getName", [], "method", false, false, false, 95), "html", null, true);
                echo "</a>
                        ";
            }
            // line 97
            echo "
                        <a class=\"dropdown-item d-none\" href=\"#\" id=\"notify_disable\">
                            <i class=\"fas fa-bell-slash fa-fw\"></i> Disable Notifications
                        </a>
                        <a class=\"dropdown-item d-none\" href=\"#\" id=\"notify_enable\">
                            <i class=\"fas fa-bell fa-fw\"></i> Enable Notifications
                        </a>

                        ";
            // line 105
            if ((array_key_exists("refresh", $context) && ($context["refresh"] ?? null))) {
                // line 106
                echo "                            <a class=\"dropdown-item\" href=\"#\" id=\"refresh-navitem\">
                                <i class=\"fas fa-sync-alt fa-fw\"></i> <span id=\"refresh-toggle\">
                  ";
                // line 108
                if (($context["refresh_flag"] ?? null)) {
                    // line 109
                    echo "                      Disable Refresh
                  ";
                } else {
                    // line 111
                    echo "                      Enable Refresh
                  ";
                }
                // line 113
                echo "                </span>
                                ";
                // line 114
                if (($context["refresh"] ?? null)) {
                    // line 115
                    echo "                                    <span class=\"small text-muted\">(";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["refresh"] ?? null), "after", [], "any", false, false, false, 115), "html", null, true);
                    echo "s)</span>
                                ";
                }
                // line 117
                echo "                            </a>
                        ";
            }
            // line 119
            echo "
                        <a class=\"dropdown-item\" href=\"";
            // line 120
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\"><i class=\"fas fa-sign-out-alt fa-fw\"></i>Logout </a>
                    </div>
                </li>
            ";
        } else {
            // line 124
            echo "                <li class=\"nav-item\">
                    <a class=\"nav-link\" target=\"_top\" href=\"";
            // line 125
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\"><i class=\"fas fa-sign-in-alt fa-fw\"></i> log in</a>
                </li>
            ";
        }
        // line 128
        echo "
            ";
        // line 129
        $this->loadTemplate("partials/menu_change_contest.html.twig", "jury/menu.html.twig", 129)->display(twig_array_merge($context, ["contest" => ($context["current_contest"] ?? null), "contests" => ($context["current_contests"] ?? null), "change_path" => "jury_change_contest", "show_no_contest" => true]));
        // line 130
        echo "        </ul>
        ";
        // line 131
        $this->loadTemplate("partials/menu_countdown.html.twig", "jury/menu.html.twig", 131)->display(twig_array_merge($context, ["contest" => ($context["current_contest"] ?? null)]));
        // line 132
        echo "    </div>
</nav>
";
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    public function getTemplateName()
    {
        return "jury/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  346 => 132,  344 => 131,  341 => 130,  339 => 129,  336 => 128,  330 => 125,  327 => 124,  320 => 120,  317 => 119,  313 => 117,  307 => 115,  305 => 114,  302 => 113,  298 => 111,  294 => 109,  292 => 108,  288 => 106,  286 => 105,  276 => 97,  270 => 95,  268 => 94,  262 => 91,  258 => 89,  255 => 88,  250 => 84,  244 => 81,  241 => 80,  238 => 79,  232 => 76,  225 => 75,  223 => 74,  220 => 73,  214 => 70,  208 => 69,  205 => 68,  192 => 62,  182 => 59,  172 => 58,  159 => 51,  157 => 50,  151 => 47,  144 => 46,  142 => 45,  139 => 44,  133 => 41,  126 => 40,  124 => 39,  121 => 38,  108 => 32,  98 => 29,  85 => 22,  83 => 21,  80 => 20,  71 => 14,  64 => 13,  62 => 12,  56 => 9,  53 => 8,  51 => 7,  43 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/menu.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/menu.html.twig");
    }
}
