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
class __TwigTemplate_bebae996ae46dad3733d2dab4ea601f59462ae27d6601b19fcf639e564e0c43b extends \Twig\Template
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
        // line 2
        echo "    ";
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "bootstrap_3_layout.html.twig"], true);
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["method" => "post", "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_registration_register"), "attr" => ["class" => "fos_user_registration_register"]]);
        echo "
        <div class=\"form-row\">
            <div class=\"form-group col\">
                ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 16), 'widget', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "email"]]);
        echo "
                ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 17), 'errors');
        echo "
            </div>
        </div>
        <div class=\"form-row\">
            <div class=\"form-group col\">
                ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "username", [], "any", false, false, false, 22), 'widget', ["attr" => ["class" => "form-control form-control-lg", "id" => "username", "placeholder" => "username"]]);
        echo "
                ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "username", [], "any", false, false, false, 23), 'errors');
        echo "
            </div>
        </div>
        <div class=\"form-row\">
            <div class=\"form-group col-lg-6\">
                ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", [], "any", false, false, false, 28), "first", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "password"]]);
        echo "
                ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", [], "any", false, false, false, 29), "first", [], "any", false, false, false, 29), 'errors');
        echo "
            </div>
            <div class=\"form-group col-lg-6\">
                ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", [], "any", false, false, false, 32), "second", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "Repeat password"]]);
        echo "
                ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", [], "any", false, false, false, 33), "second", [], "any", false, false, false, 33), 'errors');
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
    </div>
</div>";
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
        return array (  107 => 41,  96 => 33,  92 => 32,  86 => 29,  82 => 28,  74 => 23,  70 => 22,  62 => 17,  58 => 16,  52 => 13,  40 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@FOSUser/Registration/register_content.html.twig", "C:\\Users\\Mohamedahmed\\PhpstormProjects\\untitled\\templates\\bundles\\FOSUserBundle\\Registration\\register_content.html.twig");
    }
}
