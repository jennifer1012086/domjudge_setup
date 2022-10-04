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

/* partials/problem_list.html.twig */
class __TwigTemplate_11c03632939af960d4bf0f6a2993db90673bf496dca8afd07aca522cf000ef1e extends Template
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
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/problem_list.html.twig"));

        // line 2
        echo "
<h1 class=\"mt-4 text-center\">";
        // line 3
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["current_contest"] ?? null), "name", [], "any", true, true, false, 3)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["current_contest"] ?? null), "name", [], "any", false, false, false, 3), "Contest")) : ("Contest")), "html", null, true);
        echo " problems</h1>

";
        // line 5
        if (twig_test_empty(($context["problems"] ?? null))) {
            // line 6
            echo "    <div class=\"alert alert-secondary\">No problem texts available at this point.</div>
";
        } else {
            // line 8
            echo "    <div class=\"container\">
        <div class=\"row problem-list\">
            ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_batch(($context["problems"] ?? null), 3, []));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 11
                echo "                <div class=\"col-md-12\">
                    <div class=\"card-deck my-md-3\">
                        ";
                // line 13
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["row"]);
                foreach ($context['_seq'] as $context["_key"] => $context["problem"]) {
                    // line 14
                    echo "                            ";
                    if (twig_test_empty($context["problem"])) {
                        // line 15
                        echo "                                <div class=\"card\" style=\"border: none;\"></div>
                            ";
                    } else {
                        // line 17
                        echo "                                ";
                        $context["numsamples"] = (($__internal_compile_0 = ($context["samples"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 17)] ?? null) : null);
                        // line 18
                        echo "                                <div class=\"card\">
                                    <div class=\"card-body\">
                                        <h2 class=\"card-title\">
                                            ";
                        // line 21
                        echo $this->extensions['App\Twig\TwigExtension']->problemBadge($context["problem"]);
                        echo "
                                        </h2>
                                        <h3 class=\"card-subtitle mb-2 text-muted\">
                                            ";
                        // line 24
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["problem"], "problem", [], "any", false, false, false, 24), "name", [], "any", false, false, false, 24), "html", null, true);
                        echo "
                                        </h3>
                                        ";
                        // line 26
                        if (($context["showLimits"] ?? null)) {
                            // line 27
                            echo "                                            <h4 class=\"card-subtitle mb-2 text-muted\">
                                                Limits: ";
                            // line 28
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["problem"], "problem", [], "any", false, false, false, 28), "timelimit", [], "any", false, false, false, 28), "html", null, true);
                            echo "
                                                second";
                            // line 30
                            if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["problem"], "problem", [], "any", false, false, false, 30), "timelimit", [], "any", false, false, false, 30), 1))) {
                                echo "s";
                            }
                            // line 31
                            if (($context["timeFactorDiffers"] ?? null)) {
                                // line 32
                                echo "<sup>*</sup>
                                                ";
                            }
                            // line 34
                            echo "                                                /
                                                ";
                            // line 35
                            echo App\Utils\Utils::printSize((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["problem"], "problem", [], "any", false, true, false, 35), "memlimit", [], "any", true, true, false, 35)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["problem"], "problem", [], "any", false, true, false, 35), "memlimit", [], "any", false, false, false, 35), ($context["defaultMemoryLimit"] ?? null))) : (($context["defaultMemoryLimit"] ?? null))) * 1024));
                            echo "
                                            </h4>
                                        ";
                        }
                        // line 38
                        echo "
                                        ";
                        // line 39
                        if (array_key_exists("stats", $context)) {
                            // line 40
                            echo "                                            <div class=\"mt-3\">
                                                ";
                            // line 41
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable([0 => true, 1 => false]);
                            foreach ($context['_seq'] as $context["_key"] => $context["correct"]) {
                                // line 42
                                echo "                                                    <div class=\"problem-stats d-flex justify-content-center\">
                                                        ";
                                // line 43
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(range(0, (twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "numBuckets", [], "any", false, false, false, 43) - 1)));
                                foreach ($context['_seq'] as $context["_key"] => $context["bucket"]) {
                                    // line 44
                                    echo "                                                            ";
                                    if ($context["correct"]) {
                                        // line 45
                                        echo "                                                                ";
                                        $context["index"] = "correct";
                                        // line 46
                                        echo "                                                                ";
                                        $context["maxBucketSize"] = twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "maxBucketSizeCorrect", [], "any", false, false, false, 46);
                                        // line 47
                                        echo "                                                            ";
                                    } else {
                                        // line 48
                                        echo "                                                                ";
                                        $context["index"] = "incorrect";
                                        // line 49
                                        echo "                                                                ";
                                        $context["maxBucketSize"] = twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "maxBucketSizeIncorrect", [], "any", false, false, false, 49);
                                        // line 50
                                        echo "                                                            ";
                                    }
                                    // line 51
                                    echo "                                                            ";
                                    $context["stat"] = (($__internal_compile_1 = (($__internal_compile_2 = (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "problems", [], "any", false, false, false, 51)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["problem"], "problem", [], "any", false, false, false, 51), "probid", [], "any", false, false, false, 51)] ?? null) : null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[($context["index"] ?? null)] ?? null) : null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["bucket"]] ?? null) : null);
                                    // line 52
                                    echo "                                                            ";
                                    $context["count"] = twig_get_attribute($this->env, $this->source, ($context["stat"] ?? null), "count", [], "any", false, false, false, 52);
                                    // line 53
                                    echo "                                                            ";
                                    if ((0 === twig_compare(($context["maxBucketSize"] ?? null), 0))) {
                                        // line 54
                                        echo "                                                                ";
                                        $context["bucket"] = 0;
                                        // line 55
                                        echo "                                                            ";
                                    } else {
                                        // line 56
                                        echo "                                                                ";
                                        $context["bucket"] = twig_round(((($context["count"] ?? null) / ($context["maxBucketSize"] ?? null)) * 9), 0, "ceil");
                                        // line 57
                                        echo "                                                            ";
                                    }
                                    // line 58
                                    echo "                                                            ";
                                    if ((0 === twig_compare(($context["count"] ?? null), 1))) {
                                        // line 59
                                        echo "                                                                ";
                                        $context["submissionText"] = "submission";
                                        // line 60
                                        echo "                                                            ";
                                    } else {
                                        // line 61
                                        echo "                                                                ";
                                        $context["submissionText"] = "submissions";
                                        // line 62
                                        echo "                                                            ";
                                    }
                                    // line 63
                                    echo "                                                            ";
                                    if ((( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["current_contest"] ?? null), "freezeData", [], "any", false, false, false, 63), "showFinal", [], "any", false, false, false, 63) && twig_get_attribute($this->env, $this->source, ($context["current_contest"] ?? null), "freezetime", [], "any", false, false, false, 63)) && (0 <= twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["stat"] ?? null), "start", [], "any", false, false, false, 63), "timestamp", [], "any", false, false, false, 63), twig_get_attribute($this->env, $this->source, ($context["current_contest"] ?? null), "freezetime", [], "any", false, false, false, 63))))) {
                                        // line 64
                                        echo "                                                                ";
                                        $context["maxBucketSize"] = max(1, twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "maxBucketSizeCorrect", [], "any", false, false, false, 64), twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "maxBucketSizeIncorrect", [], "any", false, false, false, 64));
                                        // line 65
                                        echo "                                                                ";
                                        $context["bucket"] = twig_round(((($context["count"] ?? null) / ($context["maxBucketSize"] ?? null)) * 9), 0, "ceil");
                                        // line 66
                                        echo "                                                                ";
                                        $context["itemClass"] = (("frozen" . "-") . $context["bucket"]);
                                        // line 67
                                        echo "                                                                ";
                                        $context["label"] = (((($context["count"] ?? null) . " ") . ($context["submissionText"] ?? null)) . " in freeze");
                                        // line 68
                                        echo "                                                            ";
                                    } else {
                                        // line 69
                                        echo "                                                                ";
                                        $context["itemClass"] = ((($context["index"] ?? null) . "-") . $context["bucket"]);
                                        // line 70
                                        echo "                                                                ";
                                        $context["label"] = ((((($context["count"] ?? null) . " ") . ($context["index"] ?? null)) . " ") . ($context["submissionText"] ?? null));
                                        // line 71
                                        echo "                                                            ";
                                    }
                                    // line 72
                                    echo "                                                            <div
                                                                class=\"problem-stats-item ";
                                    // line 73
                                    echo twig_escape_filter($this->env, ($context["itemClass"] ?? null), "html", null, true);
                                    echo "\"
                                                                data-toggle=\"tooltip\"
                                                                data-placement=\"top\"
                                                                data-html=\"true\"
                                                                title=\"Between ";
                                    // line 77
                                    echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["stat"] ?? null), "start", [], "any", false, false, false, 77), "timestamp", [], "any", false, false, false, 77), null, ($context["current_contest"] ?? null)), "html", null, true);
                                    echo " and ";
                                    echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["stat"] ?? null), "end", [], "any", false, false, false, 77), "timestamp", [], "any", false, false, false, 77), null, ($context["current_contest"] ?? null)), "html", null, true);
                                    echo ":<br/>";
                                    echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
                                    echo "\">
                                                            </div>
                                                        ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bucket'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 80
                                echo "                                                    </div>
                                                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['correct'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 82
                            echo "                                            </div>
                                            <div>
                                                <br/>
                                            </div>
                                        ";
                        }
                        // line 87
                        echo "
                                        <div class=\"text-center\">
                                            ";
                        // line 89
                        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["problem"], "problem", [], "any", false, false, false, 89), "problemtextType", [], "any", false, false, false, 89))) {
                            // line 90
                            echo "                                                <a class=\"btn btn-secondary\" role=\"button\"
                                                   href=\"";
                            // line 91
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["problem_text_path"] ?? null), ["probId" => twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 91)]), "html", null, true);
                            echo "\">
                                                    <i class=\"fas fa-file-";
                            // line 92
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["problem"], "problem", [], "any", false, false, false, 92), "problemtextType", [], "any", false, false, false, 92), "html", null, true);
                            echo "\"></i>
                                                    text
                                                </a>
                                            ";
                        }
                        // line 96
                        echo "
                                            ";
                        // line 97
                        if ((1 === twig_compare(($context["numsamples"] ?? null), 0))) {
                            // line 98
                            echo "                                                <a class=\"btn btn-secondary\" role=\"button\"
                                                   href=\"";
                            // line 99
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["problem_sample_zip_path"] ?? null), ["probId" => twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 99)]), "html", null, true);
                            echo "\">
                                                    <i class=\"fas fa-file-archive\"></i> samples
                                                </a>
                                            ";
                        }
                        // line 103
                        echo "
                                            ";
                        // line 104
                        if (((array_key_exists("show_submit_button", $context)) ? (_twig_default_filter(($context["show_submit_button"] ?? null), false)) : (false))) {
                            // line 105
                            echo "                                                ";
                            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY") || ( !(null === ($context["current_team_contest"] ?? null)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["current_team_contest"] ?? null), "freezeData", [], "any", false, false, false, 105), "started", [], "any", false, false, false, 105)))) {
                                // line 106
                                echo "                                                    <a class=\"justify-content-center\" data-ajax-modal data-ajax-modal-after=\"initSubmitModal\" href=\"";
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_submit", ["problem" => twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 106)]), "html", null, true);
                                echo "\">
                                                        <span class=\"btn btn-success\">
                                                            <i class=\"fas fa-cloud-upload-alt\"></i> Submit
                                                        </span>
                                                    </a>
                                                ";
                            } else {
                                // line 112
                                echo "                                                    <a class=\"justify-content-center\">
                                                        <span class=\"btn btn-success disabled\" disabled>
                                                            <i class=\"fas fa-cloud-upload-alt\"></i> Submit
                                                        </span>
                                                    </a>
                                                ";
                            }
                            // line 118
                            echo "                                            ";
                        }
                        // line 119
                        echo "                                        </div>

                                        ";
                        // line 121
                        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["problem"], "problem", [], "any", false, false, false, 121), "attachments", [], "any", false, false, false, 121)), 0))) {
                            // line 122
                            echo "                                            <hr/>
                                            <ol class=\"text-center list-group list-group-flush\">
                                                ";
                            // line 124
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["problem"], "problem", [], "any", false, false, false, 124), "attachments", [], "any", false, false, false, 124));
                            foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                                // line 125
                                echo "                                                    <li class=\"list-group-item\">
                                                        <a class=\"btn btn-outline-secondary\" role=\"button\"
                                                           href=\"";
                                // line 127
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["problem_attachment_path"] ?? null), ["probId" => twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 127), "attachmentId" => twig_get_attribute($this->env, $this->source, $context["attachment"], "attachmentid", [], "any", false, false, false, 127)]), "html", null, true);
                                echo "\">
                                                            <i class=\"";
                                // line 128
                                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->fileTypeIcon(twig_get_attribute($this->env, $this->source, $context["attachment"], "type", [], "any", false, false, false, 128)), "html", null, true);
                                echo "\"></i> ";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attachment"], "name", [], "any", false, false, false, 128), "html", null, true);
                                echo "
                                                        </a>
                                                    </li>
                                                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 132
                            echo "                                            </ol>
                                        ";
                        }
                        // line 134
                        echo "
                                    </div>
                                </div>
                                <div class=\"w-100 d-none d-sm-block d-md-block d-lg-none\"><!-- wrap every 2 on sm--></div>
                            ";
                    }
                    // line 139
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 140
                echo "                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 143
            echo "        </div>

        ";
            // line 145
            if ((($context["showLimits"] ?? null) && ($context["timeFactorDiffers"] ?? null))) {
                // line 146
                echo "            <div class=\"row\">
                <div class=\"col-md-12 my-sm-3\">
                    <div class=\" alert alert-secondary\" role=\"alert\">
                        * language time factors apply
                    </div>
                </div>
            </div>
        ";
            }
            // line 154
            echo "    </div>
";
        }
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    public function getTemplateName()
    {
        return "partials/problem_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  403 => 154,  393 => 146,  391 => 145,  387 => 143,  379 => 140,  373 => 139,  366 => 134,  362 => 132,  350 => 128,  346 => 127,  342 => 125,  338 => 124,  334 => 122,  332 => 121,  328 => 119,  325 => 118,  317 => 112,  307 => 106,  304 => 105,  302 => 104,  299 => 103,  292 => 99,  289 => 98,  287 => 97,  284 => 96,  277 => 92,  273 => 91,  270 => 90,  268 => 89,  264 => 87,  257 => 82,  250 => 80,  237 => 77,  230 => 73,  227 => 72,  224 => 71,  221 => 70,  218 => 69,  215 => 68,  212 => 67,  209 => 66,  206 => 65,  203 => 64,  200 => 63,  197 => 62,  194 => 61,  191 => 60,  188 => 59,  185 => 58,  182 => 57,  179 => 56,  176 => 55,  173 => 54,  170 => 53,  167 => 52,  164 => 51,  161 => 50,  158 => 49,  155 => 48,  152 => 47,  149 => 46,  146 => 45,  143 => 44,  139 => 43,  136 => 42,  132 => 41,  129 => 40,  127 => 39,  124 => 38,  118 => 35,  115 => 34,  111 => 32,  109 => 31,  105 => 30,  101 => 28,  98 => 27,  96 => 26,  91 => 24,  85 => 21,  80 => 18,  77 => 17,  73 => 15,  70 => 14,  66 => 13,  62 => 11,  58 => 10,  54 => 8,  50 => 6,  48 => 5,  43 => 3,  40 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "partials/problem_list.html.twig", "/opt/domjudge/domserver/webapp/templates/partials/problem_list.html.twig");
    }
}
