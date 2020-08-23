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

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_66f8ee8c1f130b5bafdae547289bb4699ed4d433ff367607e9fae3b22330a672 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        // line 2
        echo "    ";
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), [0 => "bootstrap_3_layout.html.twig"], true);
        // line 3
        echo "
<div style=\"padding-left: 100px;padding-right: 100px \"  class=\"contact-us container-fluid no-padding\">
    <div class=\"form-detail\" style=\"background-color: #FFFFFF\">

        <div class=\"form-detail\" style=\"background-color: #FFFFFF\">
            <!-- Section Header -->
            <div class=\"section-header\">
                <h3>Register</h3>
            </div><!-- Section Header /- -->

            ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'form_start', ["method" => "post", "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_registration_register"), "attr" => ["class" => "fos_user_registration_register"]]);
        echo "
        <div class=\"form-row\">
            <div class=\"form-group col\">
                ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "email", [], "any", false, false, false, 16), 'widget', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "email"]]);
        echo "
                ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "email", [], "any", false, false, false, 17), 'errors');
        echo "
            </div>
        </div>
        <div class=\"form-row\">
            <div class=\"form-group col\">
                ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "username", [], "any", false, false, false, 22), 'widget', ["attr" => ["class" => "form-control form-control-lg", "id" => "username", "placeholder" => "username"]]);
        echo "
                ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "username", [], "any", false, false, false, 23), 'errors');
        echo "
            </div>
        </div>
        <div class=\"form-row\">
            <div class=\"form-group col-lg-6\">
                ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "plainPassword", [], "any", false, false, false, 28), "first", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "password"]]);
        echo "
                ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "plainPassword", [], "any", false, false, false, 29), "first", [], "any", false, false, false, 29), 'errors');
        echo "
            </div>
            <div class=\"form-group col-lg-6\">
                ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "plainPassword", [], "any", false, false, false, 32), "second", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "Repeat password"]]);
        echo "
                ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "plainPassword", [], "any", false, false, false, 33), "second", [], "any", false, false, false, 33), 'errors');
        echo "
            </div>
        </div>
        <div class=\"form-row\">
            <div class=\"form-group col-lg-3\">
                <button  style=\"align-content:center;border:1px solid #FF8661;color: #FF8661\" type=\"submit\" id=\"_submit\" name=\"_submit\"+ name=\"post\">register</button>
            </div>
        </div>
        ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), 'form_end');
        echo "
    </div>
</div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 41,  99 => 33,  95 => 32,  89 => 29,  85 => 28,  77 => 23,  73 => 22,  65 => 17,  61 => 16,  55 => 13,  43 => 3,  40 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% trans_default_domain 'FOSUserBundle' %}
    {% form_theme form 'bootstrap_3_layout.html.twig' %}

<div style=\"padding-left: 100px;padding-right: 100px \"  class=\"contact-us container-fluid no-padding\">
    <div class=\"form-detail\" style=\"background-color: #FFFFFF\">

        <div class=\"form-detail\" style=\"background-color: #FFFFFF\">
            <!-- Section Header -->
            <div class=\"section-header\">
                <h3>Register</h3>
            </div><!-- Section Header /- -->

            {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}
        <div class=\"form-row\">
            <div class=\"form-group col\">
                {{ form_widget(form.email,{'attr':{'class':'form-control form-control-lg','placeholder':'email'}}) }}
                {{ form_errors(form.email) }}
            </div>
        </div>
        <div class=\"form-row\">
            <div class=\"form-group col\">
                {{ form_widget(form.username,{'attr':{'class':'form-control form-control-lg','id':'username','placeholder':'username'}}) }}
                {{ form_errors(form.username) }}
            </div>
        </div>
        <div class=\"form-row\">
            <div class=\"form-group col-lg-6\">
                {{ form_widget(form.plainPassword.first,{'attr':{'class':'form-control form-control-lg','placeholder':'password'}}) }}
                {{ form_errors(form.plainPassword.first) }}
            </div>
            <div class=\"form-group col-lg-6\">
                {{ form_widget(form.plainPassword.second,{'attr':{'class':'form-control form-control-lg','placeholder':'Repeat password'}}) }}
                {{ form_errors(form.plainPassword.second) }}
            </div>
        </div>
        <div class=\"form-row\">
            <div class=\"form-group col-lg-3\">
                <button  style=\"align-content:center;border:1px solid #FF8661;color: #FF8661\" type=\"submit\" id=\"_submit\" name=\"_submit\"+ name=\"post\">register</button>
            </div>
        </div>
        {{ form_end(form) }}
    </div>
</div>", "@FOSUser/Registration/register_content.html.twig", "/home/emir/Bureau/fashionBoard/templates/bundles/FOSUserBundle/Registration/register_content.html.twig");
    }
}
