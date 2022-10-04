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

/* security/login.html.twig */
class __TwigTemplate_f781894b07c97232b0ca23b9f035faff0e157be1f2339d7037eefa91f45faaaa extends Template
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
            'messages' => [$this, 'block_messages'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "DOMjudge Login";
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    // line 5
    public function block_extrahead($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrahead"));

        // line 6
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style_login.css"), "html", null, true);
        echo "\">
";
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    // line 9
    public function block_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "messages"));

        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->enter($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "
    ";
        // line 12
        $context["hasaltmethods"] = ((twig_in_filter("xheaders",         // line 13
($context["allowed_authmethods"] ?? null)) && ($context["auth_xheaders_present"] ?? null)) || (twig_in_filter("ipaddress",         // line 14
($context["allowed_authmethods"] ?? null)) && (1 === twig_compare(twig_length_filter($this->env, ($context["auth_ipaddress_users"] ?? null)), 0))));
        // line 15
        echo "    ";
        $context["showregular"] = ( !($context["hasaltmethods"] ?? null) || ($context["error"] ?? null));
        // line 16
        echo "
    <div class=\"form-signin\" id=\"loginform\">
        <img class=\"mb-4\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/DOMjudgelogo.svg"), "html", null, true);
        echo "\" alt=\"DOMjudge\" width=\"72\">
        ";
        // line 19
        $this->loadTemplate("partials/messages.html.twig", "security/login.html.twig", 19)->display($context);
        // line 20
        echo "        ";
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 20))) {
            // line 21
            echo "            ";
            $context["message"] = (("You are currently automatically logged in as " . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 21), "username", [], "any", false, false, false, 21)) . ".
Use the form below to change login.");
            // line 23
            echo "            ";
            $this->loadTemplate("partials/alert.html.twig", "security/login.html.twig", 23)->display(twig_array_merge($context, ["type" => "success"]));
            // line 24
            echo "        ";
        }
        // line 25
        echo "
        <br class=\"clearfix\">

        ";
        // line 28
        if (($context["hasaltmethods"] ?? null)) {
            // line 29
            echo "            <div class=\"additional-logins mr-2\">
                <a class=\"float-right text-muted\" href=\"#\" title=\"more auth methods\"
                   onclick=\"collapse('.regularLoginform'); return false;\" role=\"button\">
                    <i class=\"fas fa-user-ninja\"></i>
                </a>
                ";
            // line 34
            if ((twig_in_filter("xheaders", ($context["allowed_authmethods"] ?? null)) && ($context["auth_xheaders_present"] ?? null))) {
                // line 35
                echo "                    <h1 class=\"h3 mb-3 font-weight-normal\">Preconfigured Sign In</h1>
                    <form action=\"";
                // line 36
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
                echo "\" method=\"post\">
                        <input type=\"hidden\" name=\"_csrf_token\"
                               value=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
                echo "\">
                        <input type=\"hidden\" name=\"_username\" value=\"__INVALID__\">
                        <div class=\"login-content\">
                            <p>
                                You can log in using credentials that have been configured by your
                                administrator.
                            </p>
                        </div>
                        <button class=\"mt-auto btn btn-lg btn-success btn-block\" type=\"submit\"
                                name=\"loginmethod\" value=\"xheaders\">
                            Log in using computer credentials
                        </button>
                    </form>
                    <script>
                        \$(function () {
                            \$('button[name=loginmethod]').focus();
                        });
                    </script>
                ";
            }
            // line 57
            echo "
                ";
            // line 58
            if ((twig_in_filter("ipaddress", ($context["allowed_authmethods"] ?? null)) && (1 === twig_compare(twig_length_filter($this->env, ($context["auth_ipaddress_users"] ?? null)), 0)))) {
                // line 59
                echo "                    <h1 class=\"h3 mb-3 font-weight-normal\">Sign in with IP</h1>
                    <form action=\"";
                // line 60
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
                echo "\" method=\"post\">
                        <input type=\"hidden\" name=\"_csrf_token\"
                               value=\"";
                // line 62
                echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
                echo "\">
                        <input type=\"hidden\" name=\"loginmethod\" value=\"ipaddress\">
                        <div class=\"login-content\">
                            <p>
                                You can log in automatically to an account based on your IP Address.
                                ";
                // line 67
                if ((0 === twig_compare(($context["auth_ipaddress_users"] ?? null), 1))) {
                    echo "The accounts associated with your IP are shown below.
                                ";
                } else {
                    // line 68
                    echo "The account associated with your IP is shown below.";
                }
                // line 69
                echo "                            </p>
                        </div>

                        ";
                // line 72
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["auth_ipaddress_users"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
                    // line 73
                    echo "                            <button class=\"btn btn-lg btn-success btn-block\" type=\"submit\"
                                    name=\"_username\" value=\"";
                    // line 74
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "username", [], "any", false, false, false, 74), "html", null, true);
                    echo "\">
                                Log in as ";
                    // line 75
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "username", [], "any", false, false, false, 75), "html", null, true);
                    echo "
                            </button>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 78
                echo "                    </form>
                    <script>
                        \$(function () {
                            \$('button[name=_username]:first').focus();
                        });
                    </script>
                ";
            }
            // line 85
            echo "            </div>

            <div class=\"vertical-line regularLoginform";
            // line 87
            if ( !($context["showregular"] ?? null)) {
                echo " d-none";
            }
            echo "\"></div>
        ";
        }
        // line 89
        echo "
        <div class=\"main-login ml-2 regularLoginform ";
        // line 90
        if ( !($context["showregular"] ?? null)) {
            echo " d-none";
        }
        echo "\">
            <h1 class=\"h3 mb-3 font-weight-normal\">Please sign in</h1>
            <form action=\"";
        // line 92
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" method=\"post\">
                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
                <div class=\"login-content\">
                    ";
        // line 95
        if (($context["error"] ?? null)) {
            // line 96
            echo "                        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 96), "html", null, true);
            echo "</div>
                    ";
        }
        // line 98
        echo "
                    <div class=\"form-group\">
                        <label for=\"username\" class=\"sr-only\">Username</label>
                        <input type=\"text\" id=\"username\" name=\"_username\" class=\"form-control\"
                               placeholder=\"Username\" required autofocus>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"inputPassword\" class=\"sr-only\">Password</label>
                        <input type=\"password\" id=\"inputPassword\" name=\"_password\"
                               class=\"form-control\"
                               placeholder=\"Password\" required autocomplete=\"current-password\">
                    </div>
                </div>
                <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Sign in</button>
                ";
        // line 112
        if (($context["allow_registration"] ?? null)) {
            // line 113
            echo "                    <div class=\"mt-3\">
                        Don't have an account?<br/>
                        <a href=\"";
            // line 115
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "\">Register now</a>.
                    </div>
                ";
        }
        // line 118
        echo "            </form>
        </div>

        <p class=\"mt-5 mb-3 small text-muted\" id=\"dj_version\">DOMjudge ";
        // line 121
        echo twig_escape_filter($this->env, ($context["DOMJUDGE_VERSION"] ?? null), "html", null, true);
        echo "</p>
    </div>

";
        
        $__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d->leave($__internal_17fc5a9d7f60dc995440a5a315cc27cefd5208dd5c9d418ecd10c2a16ddca18d_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 121,  312 => 118,  306 => 115,  302 => 113,  300 => 112,  284 => 98,  278 => 96,  276 => 95,  271 => 93,  267 => 92,  260 => 90,  257 => 89,  250 => 87,  246 => 85,  237 => 78,  228 => 75,  224 => 74,  221 => 73,  217 => 72,  212 => 69,  209 => 68,  204 => 67,  196 => 62,  191 => 60,  188 => 59,  186 => 58,  183 => 57,  161 => 38,  156 => 36,  153 => 35,  151 => 34,  144 => 29,  142 => 28,  137 => 25,  134 => 24,  131 => 23,  127 => 21,  124 => 20,  122 => 19,  118 => 18,  114 => 16,  111 => 15,  109 => 14,  108 => 13,  107 => 12,  104 => 11,  97 => 10,  85 => 9,  75 => 6,  68 => 5,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/login.html.twig", "/opt/domjudge/domserver/webapp/templates/security/login.html.twig");
    }
}
