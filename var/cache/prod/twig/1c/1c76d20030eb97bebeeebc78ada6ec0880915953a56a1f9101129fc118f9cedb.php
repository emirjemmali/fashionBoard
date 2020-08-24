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
class __TwigTemplate_87ccdc772a24ba5cbefebf282079d0ad37c29c3ee535c525e67e798282100e3c extends \Twig\Template
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
        echo "
";
        // line 3
        if (($context["error"] ?? null)) {
            // line 4
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 4), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 4), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "<div style=\"padding-left: 100px;padding-right: 100px \"  class=\"contact-us container-fluid no-padding\">

    <div class=\"form-detail\" style=\"background-color: #FFFFFF\">
        <!-- Section Header -->
        <div class=\"section-header\">
            <h3>Login</h3>
            <p>If you don't have an account register now</p>
        </div><!-- Section Header /- -->

        ";
        // line 15
        if (($context["error"] ?? null)) {
            // line 16
            echo "            <div>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 16), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 16), "security"), "html", null, true);
            echo "</div>
        ";
        }
        // line 18
        echo "        <form action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_check");
        echo "\" method=\"post\">
            ";
        // line 19
        if (($context["csrf_token"] ?? null)) {
            // line 20
            echo "                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? null), "html", null, true);
            echo "\" />
            ";
        }
        // line 22
        echo "            <div class=\"col-md-12 col-md-12 col-xs-12 form-group\">
                <input type=\"text\" id=\"username\" class=\"form-control\" name=\"_username\" placeholder=\"Username *\" required=\"required\" autocomplete=\"username\" />
            </div>

            <div class=\"col-md-12 col-sm-12 col-xs-12 form-group\">
                <input type=\"password\" id=\"password\" placeholder=\"Password *\" name=\"_password\" id=\"input_subject\" class=\"form-control\" required=\"required\" autocomplete=\"current-password\" />

            </div>


            <div class=\"form-group col-md-12 col-sm-12 col-xs-12\">
                <button style=\"border:1px solid #FF8661;color: #FF8661\" type=\"submit\" id=\"_submit\" name=\"_submit\"+ name=\"post\">Login</button>
            </div>
            <div id=\"alert-msg\" class=\"alert-msg\"></div>
        </form>
    </div></div>";
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
        return array (  80 => 22,  74 => 20,  72 => 19,  67 => 18,  61 => 16,  59 => 15,  48 => 6,  42 => 4,  40 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@FOSUser/Security/login_content.html.twig", "C:\\Users\\Mohamedahmed\\PhpstormProjects\\untitled\\templates\\bundles\\FOSUserBundle\\Security\\login_content.html.twig");
    }
}
