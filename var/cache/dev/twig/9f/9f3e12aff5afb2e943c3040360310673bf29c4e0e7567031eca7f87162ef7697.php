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

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_1fa5a4495870b8934d406db9de62c6218d2a7738a951e3b26f6859da8978b122 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 3, $this->source); })())) {
            // line 4
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 4, $this->source); })()), "messageKey", [], "any", false, false, false, 4), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 4, $this->source); })()), "messageData", [], "any", false, false, false, 4), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "<style>
    .btn-google {
        color: #545454;
        background-color: #ffffff;
        box-shadow: 0 1px 2px 1px #ddd
    }

    .btn-facebook {
        color: #fff;
        background-color: #3b5998;
        border-color: rgba(0,0,0,0.2);
    }

    .btn-social {
        position: relative;
        padding-left: 44px;
        text-align: left;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .btn-social:hover {
        color: #eee;
    }

    .btn-social :first-child {
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        width: 40px;
        padding: 7px;
        font-size: 1.6em;
        text-align: center;
        border-right: 1px solid rgba(0,0,0,0.2);
    }</style>
<div id=\"fb-root\"></div>
<div style=\"padding-left: 100px;padding-right: 100px \"  class=\"contact-us container-fluid no-padding\">

    <div class=\"form-detail\" style=\"background-color: #FFFFFF\">
        <!-- Section Header -->
        <div class=\"section-header\">
            <h3>Login</h3>
            <p>If you don't have an account register now</p>
        </div><!-- Section Header /- -->

        ";
        // line 53
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 53, $this->source); })())) {
            // line 54
            echo "            <div>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 54, $this->source); })()), "messageKey", [], "any", false, false, false, 54), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 54, $this->source); })()), "messageData", [], "any", false, false, false, 54), "security"), "html", null, true);
            echo "</div>
        ";
        }
        // line 56
        echo "        <form action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_check");
        echo "\" method=\"post\">
            ";
        // line 57
        if ((isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new RuntimeError('Variable "csrf_token" does not exist.', 57, $this->source); })())) {
            // line 58
            echo "                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new RuntimeError('Variable "csrf_token" does not exist.', 58, $this->source); })()), "html", null, true);
            echo "\" />
            ";
        }
        // line 60
        echo "            <div class=\"col-md-12 col-md-12 col-xs-12 form-group\">
                <input type=\"text\" id=\"username\" class=\"form-control\" name=\"_username\" placeholder=\"Username *\" required=\"required\" autocomplete=\"username\" />
            </div>

            <div class=\"col-md-12 col-sm-12 col-xs-12 form-group\">
                <input type=\"password\" id=\"password\" placeholder=\"Password *\" name=\"_password\" id=\"input_subject\" class=\"form-control\" required=\"required\" autocomplete=\"current-password\" />

            </div>


            <div class=\"form-group col-md-12 col-sm-12 col-xs-12\">
                <div class=\"row\">
                    <div class=\"col-lg-4\">
                <button style=\"border:1px solid #FF8661;color: #FF8661\" type=\"submit\" id=\"_submit\" name=\"_submit\"+ name=\"post\">Login</button>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"container\">
                            <a href=\"";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("connect_facebook_start");
        echo "\" class=\"btn btn-lg btn-social btn-facebook\">
                                <i class=\"fa fa-facebook fa-fw\"></i> Sign in with Facebook
                            </a>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <a class=\"btn btn-lg btn-google btn-block text-uppercase btn-outline\" href=\"";
        // line 83
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("connect_google");
        echo "\"><img src=\"https://img.icons8.com/color/16/000000/google-logo.png\"> Signup Using Google</a>
                    </div>
                    </div>
                </div>
            <div id=\"alert-msg\" class=\"alert-msg\"></div>
        </form>
    </div></div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 83,  140 => 77,  121 => 60,  115 => 58,  113 => 57,  108 => 56,  102 => 54,  100 => 53,  51 => 6,  45 => 4,  43 => 3,  40 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% trans_default_domain 'FOSUserBundle' %}

{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}
<style>
    .btn-google {
        color: #545454;
        background-color: #ffffff;
        box-shadow: 0 1px 2px 1px #ddd
    }

    .btn-facebook {
        color: #fff;
        background-color: #3b5998;
        border-color: rgba(0,0,0,0.2);
    }

    .btn-social {
        position: relative;
        padding-left: 44px;
        text-align: left;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .btn-social:hover {
        color: #eee;
    }

    .btn-social :first-child {
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        width: 40px;
        padding: 7px;
        font-size: 1.6em;
        text-align: center;
        border-right: 1px solid rgba(0,0,0,0.2);
    }</style>
<div id=\"fb-root\"></div>
<div style=\"padding-left: 100px;padding-right: 100px \"  class=\"contact-us container-fluid no-padding\">

    <div class=\"form-detail\" style=\"background-color: #FFFFFF\">
        <!-- Section Header -->
        <div class=\"section-header\">
            <h3>Login</h3>
            <p>If you don't have an account register now</p>
        </div><!-- Section Header /- -->

        {% if error %}
            <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
        {% endif %}
        <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
            {% if csrf_token %}
                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
            {% endif %}
            <div class=\"col-md-12 col-md-12 col-xs-12 form-group\">
                <input type=\"text\" id=\"username\" class=\"form-control\" name=\"_username\" placeholder=\"Username *\" required=\"required\" autocomplete=\"username\" />
            </div>

            <div class=\"col-md-12 col-sm-12 col-xs-12 form-group\">
                <input type=\"password\" id=\"password\" placeholder=\"Password *\" name=\"_password\" id=\"input_subject\" class=\"form-control\" required=\"required\" autocomplete=\"current-password\" />

            </div>


            <div class=\"form-group col-md-12 col-sm-12 col-xs-12\">
                <div class=\"row\">
                    <div class=\"col-lg-4\">
                <button style=\"border:1px solid #FF8661;color: #FF8661\" type=\"submit\" id=\"_submit\" name=\"_submit\"+ name=\"post\">Login</button>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"container\">
                            <a href=\"{{ path('connect_facebook_start') }}\" class=\"btn btn-lg btn-social btn-facebook\">
                                <i class=\"fa fa-facebook fa-fw\"></i> Sign in with Facebook
                            </a>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <a class=\"btn btn-lg btn-google btn-block text-uppercase btn-outline\" href=\"{{ path('connect_google') }}\"><img src=\"https://img.icons8.com/color/16/000000/google-logo.png\"> Signup Using Google</a>
                    </div>
                    </div>
                </div>
            <div id=\"alert-msg\" class=\"alert-msg\"></div>
        </form>
    </div></div>", "@FOSUser/Security/login_content.html.twig", "/home/emir/Bureau/untitled/templates/bundles/FOSUserBundle/Security/login_content.html.twig");
    }
}
