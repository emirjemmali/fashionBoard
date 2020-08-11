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

/* backOffice/baseAdmin.html.twig */
class __TwigTemplate_9065527aef4c6a1eb2fdf9da93542c696bbf3a4402fa92ae64af96c2add91c8c extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backOffice/baseAdmin.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en\">

<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Admin Dashboard</title>

    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backOffice/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backOffice/css/icons.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backOffice/plugins/uniform/css/default.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backOffice/plugins/switchery/switchery.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backOffice/plugins/morris/morris.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backOffice/plugins/morris/morris.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backOffice/css/style.css"), "html", null, true);
        echo "\">

</head>
<body>
<div class=\"page-container\">
    <div class=\"page-sidebar\">
        <a class=\"logo-box\" >
            <span> <i class=\"mdi mdi-chemical-weapon\" id=\"fixed-sidebar-toggle-button\"></i>
                <span>Admin</span> </span>
            <i class=\"mdi mdi-close\" id=\"sidebar-toggle-button-close\"></i>
        </a>
        <div class=\"page-sidebar-inner\">
            <div class=\"page-sidebar-menu\">
                <ul class=\"accordion-menu\">
                    <li>
                        <a >
                            <i class=\"menu-icon mdi mdi-bullseye\"></i>
                            <span>Gestion des paquets</span><i class=\"accordion-icon fa fa-angle-right\"></i>
                        </a>
                        <ul class=\"sub-menu\">
                            <li><a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("manageBundle");
        echo "\">Buttons</a></li>
                        </ul>
                    </li>
                    <li>
                        <a >
                            <i class=\"menu-icon mdi mdi-clipboard-outline\"></i>
                            <span>Gestion des produits</span><i class=\"accordion-icon fa fa-angle-right\"></i>
                        </a>
                        <ul class=\"sub-menu\">
                            <li><a href=\"ui-buttons.html\">Buttons</a></li>
                        </ul>
                    </li>
                    <li>
                        <a >
                            <i class=\"menu-icon mdi mdi-apple-keyboard-command\"></i>
                            <span>Gestion des planches</span><i class=\"accordion-icon fa fa-angle-right\"></i>
                        </a>
                        <ul class=\"sub-menu\">
                            <li><a href=\"ui-buttons.html\">Buttons</a></li>
                        </ul>
                    </li>
                    <li>
                        <a>
                            <i class=\"menu-icon mdi mdi-table\"></i>
                            <span>Gestion des ordes</span><i class=\"accordion-icon fa fa-angle-right\"></i>
                        </a>
                        <ul class=\"sub-menu\">
                            <li><a href=\"ui-buttons.html\">Buttons</a></li>
                        </ul>
                    </li>
";
        // line 74
        echo "                </ul>
            </div>
        </div>
    </div>
    <div class=\"page-content\">
        <div class=\"page-header\">
            <div class=\"search-form\">
                <form action=\"#\" method=\"GET\">
                    <div class=\"input-group\">
                        <input type=\"text\" name=\"search\" class=\"form-control search-input\"
                               placeholder=\"Type something...\"> <span class=\"input-group-btn\">
                        <button class=\"btn btn-default\" id=\"close-search\" type=\"button\">
                            <i class=\"mdi mdi-close\"></i></button> </span></div>
                </form>
            </div>
            <nav class=\"navbar navbar-default\">
                <div class=\"container-fluid\">
                    <div class=\"navbar-header\">
                        <div class=\"logo-sm\">
                            <a href=\"javascript:void(0)\" id=\"sidebar-toggle-button\"><i
                                        class=\"fa fa-bars\"></i></a>
                            <a class=\"logo-box\"><span>admin</span></a>
                        </div>
                    </div>
                    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                        <ul class=\"nav navbar-nav d-res-none-full\">
                            <li><a href=\"javascript:void(0)\" id=\"collapsed-sidebar-toggle-button\"><i
                                            class=\"mdi mdi-menu\"></i></a></li>
                            <li><a href=\"javascript:void(0)\" id=\"toggle-fullscreen\"><i
                                            class=\"mdi mdi-fullscreen\"></i></a></li>
                            <li><a href=\"javascript:void(0)\" id=\"search-button\">
                                    <i class=\"mdi mdi-magnify\"></i></a></li>
                        </ul>
                        <ul class=\"nav navbar-nav navbar-right\">
                            <li><a href=\"javascript:void(0)\" class=\"right-sidebar-toggle\"
                                   data-sidebar-id=\"main-right-sidebar\"><i class=\"mdi mdi-email-outline\">

                                    </i></a></li>
                            <li class=\"dropdown\">
                                <a href=\"javascript:void(0)\" class=\"dropdown-toggle\"
                                                    data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\"
                                                    aria-expanded=\"false\"><i class=\"mdi mdi-bell-outline\"></i></a>
                                <ul class=\"dropdown-menu dropdown-lg dropdown-content\">
                                    <li class=\"drop-title\">Notifications<a href=\"#\" class=\"drop-title-link\"><i
                                                    class=\"fa fa-angle-right\"></i></a></li>
                                    <li class=\"slimscroll dropdown-notifications\">
                                        <ul class=\"list-unstyled dropdown-oc\">
                                            <li>
                                                <a href=\"#\">
                                                    <span class=\"notification-badge bg-primary\"><i
                                                                class=\"fa fa-photo\"></i></span>
                                                    <span class=\"notification-info\">Finished uploading photos to gallery
                                                        <b>\"South Africa\"</b>. <small
                                                                class=\"notification-date\">20:00</small>
                                                    </span></a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"dropdown user-dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\"
                                                                  data-toggle=\"dropdown\" role=\"button\"
                                                                  aria-haspopup=\"true\" aria-expanded=\"false\">
                                    <img src=";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backOffice/images/avatar/avatar-1.jpg"), "html", null, true);
        echo " alt=\"\" class=\"img-circle\"></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"#\">Profile</a></li>
                                    <li><a href=\"#\">Calendar</a></li>
                                    <li><a href=\"#\"><span class=\"badge pull-right badge-danger\">42</span>Messages</a>
                                    </li>
                                    <li role=\"separator\" class=\"divider\"></li>
                                    <li><a href=\"#\">Account Settings</a></li>
                                    <li><a  href=\"";
        // line 146
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
        echo "\">Log Out</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class=\"page-inner\">
            ";
        // line 155
        $this->displayBlock('body', $context, $blocks);
        // line 157
        echo "        </div>
    </div>
    </div>
<script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backOffice/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backOffice/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backOffice/plugins/jquery-slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backOffice/plugins/uniform/js/jquery.uniform.standalone.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backOffice/plugins/switchery/switchery.min.js"), "html", null, true);
        echo "\"></script>
<!--<script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backOffice/plugins/morris/morris.min.js"), "html", null, true);
        echo "\"></script>-->
<script src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backOffice/plugins/raphael/raphael-min.js"), "html", null, true);
        echo "\"></script>
<!--<script src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backOffice/pages/dashborad.js"), "html", null, true);
        echo "\"></script>-->
<script src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backOffice/js/custom.js"), "html", null, true);
        echo "\"></script>

</body>
</html>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 155
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 156
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "backOffice/baseAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 156,  270 => 155,  259 => 168,  255 => 167,  251 => 166,  247 => 165,  243 => 164,  239 => 163,  235 => 162,  231 => 161,  227 => 160,  222 => 157,  220 => 155,  208 => 146,  197 => 138,  131 => 74,  98 => 35,  75 => 15,  71 => 14,  67 => 13,  63 => 12,  59 => 11,  55 => 10,  51 => 9,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en\">

<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Admin Dashboard</title>

    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('backOffice/css/bootstrap.min.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('backOffice/css/icons.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('backOffice/plugins/uniform/css/default.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('backOffice/plugins/switchery/switchery.min.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('backOffice/plugins/morris/morris.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('backOffice/plugins/morris/morris.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('backOffice/css/style.css') }}\">

</head>
<body>
<div class=\"page-container\">
    <div class=\"page-sidebar\">
        <a class=\"logo-box\" >
            <span> <i class=\"mdi mdi-chemical-weapon\" id=\"fixed-sidebar-toggle-button\"></i>
                <span>Admin</span> </span>
            <i class=\"mdi mdi-close\" id=\"sidebar-toggle-button-close\"></i>
        </a>
        <div class=\"page-sidebar-inner\">
            <div class=\"page-sidebar-menu\">
                <ul class=\"accordion-menu\">
                    <li>
                        <a >
                            <i class=\"menu-icon mdi mdi-bullseye\"></i>
                            <span>Gestion des paquets</span><i class=\"accordion-icon fa fa-angle-right\"></i>
                        </a>
                        <ul class=\"sub-menu\">
                            <li><a href=\"{{ path('manageBundle') }}\">Buttons</a></li>
                        </ul>
                    </li>
                    <li>
                        <a >
                            <i class=\"menu-icon mdi mdi-clipboard-outline\"></i>
                            <span>Gestion des produits</span><i class=\"accordion-icon fa fa-angle-right\"></i>
                        </a>
                        <ul class=\"sub-menu\">
                            <li><a href=\"ui-buttons.html\">Buttons</a></li>
                        </ul>
                    </li>
                    <li>
                        <a >
                            <i class=\"menu-icon mdi mdi-apple-keyboard-command\"></i>
                            <span>Gestion des planches</span><i class=\"accordion-icon fa fa-angle-right\"></i>
                        </a>
                        <ul class=\"sub-menu\">
                            <li><a href=\"ui-buttons.html\">Buttons</a></li>
                        </ul>
                    </li>
                    <li>
                        <a>
                            <i class=\"menu-icon mdi mdi-table\"></i>
                            <span>Gestion des ordes</span><i class=\"accordion-icon fa fa-angle-right\"></i>
                        </a>
                        <ul class=\"sub-menu\">
                            <li><a href=\"ui-buttons.html\">Buttons</a></li>
                        </ul>
                    </li>
{#                    <li>#}
{#                        <a >#}
{#                            <i class=\"menu-icon mdi mdi-stackexchange\"></i>#}
{#                            <span>Gestion des utilisateurs</span><i class=\"accordion-icon fa fa-angle-right\"></i>#}
{#                        </a>#}
{#                        <ul class=\"sub-menu\">#}
{#                            <li><a href=\"ui-buttons.html\">Buttons</a></li>#}
{#                        </ul>#}
{#                    </li>#}
                </ul>
            </div>
        </div>
    </div>
    <div class=\"page-content\">
        <div class=\"page-header\">
            <div class=\"search-form\">
                <form action=\"#\" method=\"GET\">
                    <div class=\"input-group\">
                        <input type=\"text\" name=\"search\" class=\"form-control search-input\"
                               placeholder=\"Type something...\"> <span class=\"input-group-btn\">
                        <button class=\"btn btn-default\" id=\"close-search\" type=\"button\">
                            <i class=\"mdi mdi-close\"></i></button> </span></div>
                </form>
            </div>
            <nav class=\"navbar navbar-default\">
                <div class=\"container-fluid\">
                    <div class=\"navbar-header\">
                        <div class=\"logo-sm\">
                            <a href=\"javascript:void(0)\" id=\"sidebar-toggle-button\"><i
                                        class=\"fa fa-bars\"></i></a>
                            <a class=\"logo-box\"><span>admin</span></a>
                        </div>
                    </div>
                    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                        <ul class=\"nav navbar-nav d-res-none-full\">
                            <li><a href=\"javascript:void(0)\" id=\"collapsed-sidebar-toggle-button\"><i
                                            class=\"mdi mdi-menu\"></i></a></li>
                            <li><a href=\"javascript:void(0)\" id=\"toggle-fullscreen\"><i
                                            class=\"mdi mdi-fullscreen\"></i></a></li>
                            <li><a href=\"javascript:void(0)\" id=\"search-button\">
                                    <i class=\"mdi mdi-magnify\"></i></a></li>
                        </ul>
                        <ul class=\"nav navbar-nav navbar-right\">
                            <li><a href=\"javascript:void(0)\" class=\"right-sidebar-toggle\"
                                   data-sidebar-id=\"main-right-sidebar\"><i class=\"mdi mdi-email-outline\">

                                    </i></a></li>
                            <li class=\"dropdown\">
                                <a href=\"javascript:void(0)\" class=\"dropdown-toggle\"
                                                    data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\"
                                                    aria-expanded=\"false\"><i class=\"mdi mdi-bell-outline\"></i></a>
                                <ul class=\"dropdown-menu dropdown-lg dropdown-content\">
                                    <li class=\"drop-title\">Notifications<a href=\"#\" class=\"drop-title-link\"><i
                                                    class=\"fa fa-angle-right\"></i></a></li>
                                    <li class=\"slimscroll dropdown-notifications\">
                                        <ul class=\"list-unstyled dropdown-oc\">
                                            <li>
                                                <a href=\"#\">
                                                    <span class=\"notification-badge bg-primary\"><i
                                                                class=\"fa fa-photo\"></i></span>
                                                    <span class=\"notification-info\">Finished uploading photos to gallery
                                                        <b>\"South Africa\"</b>. <small
                                                                class=\"notification-date\">20:00</small>
                                                    </span></a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"dropdown user-dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\"
                                                                  data-toggle=\"dropdown\" role=\"button\"
                                                                  aria-haspopup=\"true\" aria-expanded=\"false\">
                                    <img src={{ asset('backOffice/images/avatar/avatar-1.jpg') }} alt=\"\" class=\"img-circle\"></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"#\">Profile</a></li>
                                    <li><a href=\"#\">Calendar</a></li>
                                    <li><a href=\"#\"><span class=\"badge pull-right badge-danger\">42</span>Messages</a>
                                    </li>
                                    <li role=\"separator\" class=\"divider\"></li>
                                    <li><a href=\"#\">Account Settings</a></li>
                                    <li><a  href=\"{{ path('fos_user_security_logout') }}\">Log Out</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class=\"page-inner\">
            {% block body %}
            {% endblock %}
        </div>
    </div>
    </div>
<script src=\"{{ asset('backOffice/js/jquery.min.js') }}\"></script>
<script src=\"{{ asset('backOffice/js/bootstrap.min.js') }}\"></script>
<script src=\"{{ asset('backOffice/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}\"></script>
<script src=\"{{ asset('backOffice/plugins/uniform/js/jquery.uniform.standalone.js') }}\"></script>
<script src=\"{{ asset('backOffice/plugins/switchery/switchery.min.js') }}\"></script>
<!--<script src=\"{{ asset('backOffice/plugins/morris/morris.min.js') }}\"></script>-->
<script src=\"{{ asset('backOffice/plugins/raphael/raphael-min.js') }}\"></script>
<!--<script src=\"{{ asset('backOffice/pages/dashborad.js') }}\"></script>-->
<script src=\"{{ asset('backOffice/js/custom.js') }}\"></script>

</body>
</html>", "backOffice/baseAdmin.html.twig", "/home/emir/Documents/untitled/templates/backOffice/baseAdmin.html.twig");
    }
}
