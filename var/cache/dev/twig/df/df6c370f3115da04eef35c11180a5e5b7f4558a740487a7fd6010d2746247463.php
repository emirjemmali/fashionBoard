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

/* backOffice/template.html */
class __TwigTemplate_5c8bcfb8f78bbb75f824b26e3117aae1a0321981d878772902ff3794fdc974d4 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backOffice/template.html"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<!-- Mirrored from themesboss.com/fadmin/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Aug 2020 01:17:26 GMT -->
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"Responsive Bootstrap Admin Dashboard\"/>
    <meta name=\"keywords\" content=\"agency, bootstrap, business, corporate, creative, landing page,
    marketing, multipurpose, product, product launch, responsive, software, startup,
    startup landing page\"/>
    <meta name=\"author\" content=\"ThemesBoss\"/>
    <title>Fadmin - Responsive Bootstrap Admin Dashboard</title>
    <link rel=\"shortcut icon\" href=\"#\">
    <link rel=\"stylesheet\" href=\"assets/css/bootstrap.min.css\" type=\"text/css\">
    <link href=\"assets/css/icons.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"assets/plugins/uniform/css/default.css\" rel=\"stylesheet\"/>
    <link href=\"assets/plugins/switchery/switchery.min.css\" rel=\"stylesheet\"/>
    <link rel=\"stylesheet\" href=\"assets/plugins/morris/morris.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/style.css\"/>
</head>
<body>
<div class=\"page-container\">
    <div class=\"page-sidebar\">
        <a class=\"logo-box\" href=\"index-2.html\">
            <span> <i class=\"mdi mdi-chemical-weapon\" id=\"fixed-sidebar-toggle-button\"></i>
                <span>Fadmin</span> </span>
            <i class=\"mdi mdi-close\" id=\"sidebar-toggle-button-close\"></i>
        </a>
        <div class=\"page-sidebar-inner\">
            <div class=\"page-sidebar-menu\">
                <ul class=\"accordion-menu\">
                    <li class=\"active-page\">
                        <a href=\"index-2.html\">
                            <i class=\"menu-icon mdi mdi-home\">

                            </i><span>Dashboard</span> </a>
                    </li>
                    <li>
                        <a href=\"javascript:void(0);\">
                            <i class=\"menu-icon mdi mdi-bullseye\"></i>
                            <span>UI Elements</span><i class=\"accordion-icon fa fa-angle-right\"></i> </a>
                        <ul class=\"sub-menu\">
                            <li><a href=\"ui-buttons.html\">Buttons</a></li>
                            <li>
                                <a href=\"ui-panels.html\">Panels</a></li>
                            <li>
                                <a href=\"ui-tabs-accordions.html\">Tabs &amp; Accordions</a></li>
                            <li>
                                <a href=\"ui-alerts.html\">Alerts</a></li>
                            <li><a href=\"ui-progressbars.html\">
                                Progress Bars</a></li>
                            <li><a href=\"ui-typography.html\">Typography</a></li>
                            <li>
                                <a href=\"ui-grid.html\">Grid</a></li>
                        </ul>
                    </li>
                    <li><a href=\"javascript:void(0);\">
                        <i class=\"menu-icon mdi mdi-cards-outline\"></i>
                        <span>Icons</span><i class=\"accordion-icon fa fa-angle-right\"></i> </a>
                        <ul class=\"sub-menu\">
                            <li><a href=\"icons-material.html\">Material Design</a></li>
                            <li><a href=\"icons-ion.html\">Ion Icons</a></li>
                            <li><a href=\"icons-fontawesome.html\">Font Awesome</a></li>
                            <li><a href=\"icons-feather.html\">Feather Icons</a></li>
                            <li>
                                <a href=\"icons-themify.html\">Themify Icons</a></li>
                            <li>
                                <a href=\"icons-dripicons.html\">Dripicons</a></li>
                            <li>
                                <a href=\"icons-typicons.html\">Typicons Icons</a></li>
                        </ul>
                    </li>
                    <li><a href=\"javascript:void(0);\">
                        <i class=\"menu-icon mdi mdi-apple-keyboard-command\">

                        </i><span>Layouts</span><i class=\"accordion-icon fa fa-angle-right\"></i>
                    </a>
                        <ul class=\"sub-menu\">
                            <li><a href=\"layout-blank.html\">Blank Page</a>
                            </li>
                            <li><a href=\"layout-boxed.html\">Boxed Layout</a></li>
                            <li>
                                <a href=\"layout-collapsed-sidebar.html\">Collapsed Sidebar</a>
                            </li>
                            <li><a href=\"layout-fixed-header.html\">Fixed Header</a></li>
                            <li>
                                <a href=\"layout-fixed-sidebar.html\">Fixed Sidebar</a></li>
                            <li>
                                <a href=\"layout-fixed-sidebar-header.html\">Fixed Sidebar &amp; Header</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href=\"javascript:void(0);\">
                        <i class=\"menu-icon mdi mdi-clipboard-outline\"></i>
                        <span>Forms</span><i class=\"accordion-icon fa fa-angle-right\"></i>
                    </a>
                        <ul class=\"sub-menu\">
                            <li><a href=\"form-mask.html\">Form Mask</a></li>
                            <li>
                                <a href=\"form-elements.html\">Form Elements</a></li>
                            <li>
                                <a href=\"form-xeditable.html\">Form Xeditable</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"javascript:void(0);\"> <i class=\"menu-icon mdi mdi-table\"></i>
                            <span>Tables</span><i class=\"accordion-icon fa fa-angle-right\"></i>
                        </a>
                        <ul class=\"sub-menu\">
                            <li><a href=\"tables-footable.html\">Foo Table</a>
                            </li>
                            <li><a href=\"tables-responsive.html\">Responsive Table</a></li>
                            <li>
                                <a href=\"tables-basic.html\">Basic Tables</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"javascript:void(0);\"> <i class=\"menu-icon mdi mdi-chart-bubble\">

                        </i><span>Chart</span><i class=\"accordion-icon fa fa-angle-right\"></i> </a>
                        <ul class=\"sub-menu\">
                            <li><a href=\"chart-morris.html\">Morris Chart</a></li>
                            <li>
                                <a href=\"chart-c3.html\">C3 Chart</a></li>
                        </ul>
                    </li>
                    <li><a href=\"maps.html\">
                        <i class=\"menu-icon mdi mdi-map-marker-multiple\"></i><span>Vector Maps</span> </a>
                    </li>
                    <li><a href=\"javascript:void(0);\"> <i class=\"menu-icon mdi mdi-google-pages\"></i>
                        <span>Extra Pages</span><i class=\"accordion-icon fa fa-angle-right\"></i>
                    </a>
                        <ul class=\"sub-menu\">
                            <li><a href=\"pages-login.html\">Login</a></li>
                            <li><a href=\"pages-register.html\">Register</a></li>
                            <li><a href=\"pages-recoverpw.html\">Recover Password</a></li>
                            <li><a href=\"pages-lock-screen.html\">Lock Screen</a></li>
                            <li>
                                <a href=\"pages-400.html\">Error 400</a></li>
                            <li><a href=\"pages-403.html\">Error 403</a></li>
                            <li><a href=\"pages-404.html\">Error 404</a></li>
                            <li><a href=\"pages-500.html\">Error 500</a></li>
                            <li><a href=\"pages-503.html\">Error 503</a></li>
                        </ul>
                    </li>
                    <li class=\"menu-divider\"></li>
                    <li><a href=\"index-2.html\">
                        <i class=\"menu-icon mdi mdi-incognito\"></i><span>Documentation</span> </a></li>
                    <li><a href=\"index-2.html\"> <i class=\"menu-icon mdi mdi-stackexchange\"></i>
                        <span>Changelog</span><span class=\"label label-danger\">1.0</span> </a></li>
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
                        <div class=\"logo-sm\"><a href=\"javascript:void(0)\" id=\"sidebar-toggle-button\"><i
                                class=\"fa fa-bars\"></i></a> <a class=\"logo-box\" href=\"index-2.html\"><span>Fadmin</span></a>
                        </div>
                    </div>
                    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                        <ul class=\"nav navbar-nav d-res-none-full\">
                            <li><a href=\"javascript:void(0)\" id=\"collapsed-sidebar-toggle-button\"><i
                                    class=\"mdi mdi-menu\"></i></a></li>
                            <li><a href=\"javascript:void(0)\" id=\"toggle-fullscreen\"><i
                                    class=\"mdi mdi-fullscreen\"></i></a></li>
                            <li><a href=\"javascript:void(0)\" id=\"search-button\"><i class=\"mdi mdi-magnify\"></i></a></li>
                        </ul>
                        <ul class=\"nav navbar-nav navbar-right\">
                            <li><a href=\"javascript:void(0)\" class=\"right-sidebar-toggle\"
                                   data-sidebar-id=\"main-right-sidebar\"><i class=\"mdi mdi-email-outline\"></i></a></li>
                            <li class=\"dropdown\"><a href=\"javascript:void(0)\" class=\"dropdown-toggle\"
                                                    data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\"
                                                    aria-expanded=\"false\"><i class=\"mdi mdi-bell-outline\"></i></a>
                                <ul class=\"dropdown-menu dropdown-lg dropdown-content\">
                                    <li class=\"drop-title\">Notifications<a href=\"#\" class=\"drop-title-link\"><i
                                            class=\"fa fa-angle-right\"></i></a></li>
                                    <li class=\"slimscroll dropdown-notifications\">
                                        <ul class=\"list-unstyled dropdown-oc\">
                                            <li><a href=\"#\"><span class=\"notification-badge bg-primary\"><i
                                                    class=\"fa fa-photo\"></i></span> <span class=\"notification-info\">Finished uploading photos to gallery <b>\"South Africa\"</b>. <small
                                                    class=\"notification-date\">20:00</small> </span></a></li>
                                            <li><a href=\"#\"><span class=\"notification-badge bg-primary\"><i
                                                    class=\"fa fa-at\"></i></span> <span class=\"notification-info\"><b>John Doe</b> mentioned you in a post \"Update v1.5\".<br><small
                                                    class=\"notification-date\">06:07</small> </span></a></li>
                                            <li><a href=\"#\"><span class=\"notification-badge bg-danger\"><i
                                                    class=\"fa fa-bolt\"></i></span> <span class=\"notification-info\">4 new special offers from the apps you follow! <small
                                                    class=\"notification-date\">Yesterday</small> </span></a></li>
                                            <li><a href=\"#\"><span class=\"notification-badge bg-success\"><i
                                                    class=\"fa fa-bullhorn\"></i></span> <span class=\"notification-info\">There is a meeting with <b>Ethan</b> in 15 minutes! <small
                                                    class=\"notification-date\">Yesterday</small> </span></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"dropdown user-dropdown\"><a href=\"#\" class=\"dropdown-toggle\"
                                                                  data-toggle=\"dropdown\" role=\"button\"
                                                                  aria-haspopup=\"true\" aria-expanded=\"false\"><img
                                    src=\"assets/images/avatar/avatar-1.jpg\" alt=\"\" class=\"img-circle\"></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"#\">Profile</a></li>
                                    <li><a href=\"#\">Calendar</a></li>
                                    <li><a href=\"#\"><span class=\"badge pull-right badge-danger\">42</span>Messages</a>
                                    </li>
                                    <li role=\"separator\" class=\"divider\"></li>
                                    <li><a href=\"#\">Account Settings</a></li>
                                    <li><a href=\"#\">Log Out</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class=\"page-inner\">
            <div class=\"page-title mb-15\">
                <div class=\"pull-left\"><h3 class=\"breadcrumb-header\">Dashboard</h3>
                    <p class=\"text-muted mb-0\">Nam libero tempore, cum soluta nobis</p></div>
                <div class=\"pull-right\">
                    <div class=\"btn-group mx-auto\">
                        <ol class=\"breadcrumb hide-phone pt-4 pb-4 m-0\">
                            <li class=\"breadcrumb-item\"><a href=\"#\">Fadmin</a></li>
                            <li class=\"breadcrumb-item active\">Dashboard</li>
                        </ol>
                    </div>
                </div>
                <div class=\"clearfix\"></div>
            </div>
            <div id=\"main-wrapper\">
                <div class=\"row\">
                    <div class=\"col-md-6 col-sm-6 col-xs-12 col-lg-3\">
                        <div class=\"panel mb-30\">
                            <div class=\"panel-body widget-desk\">
                                <div class=\"pull-right\"><h3 class=\"mt-0 mb-0 f-bold\">48505 <span><i
                                        class=\"mdi mdi-arrow-up text-success\"></i></span></h3>
                                    <p class=\"text-muted mb-0\">Total Visits</p></div>
                                <div class=\"widget-icon\"><i class=\"mdi mdi-eye\"></i></div>
                                <div class=\"clearfix\"></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-sm-6 col-xs-12 col-lg-3\">
                        <div class=\"panel mb-30\">
                            <div class=\"panel-body widget-desk\">
                                <div class=\"pull-right\"><h3 class=\"mt-0 mb-0 f-bold\">2832 <span><i
                                        class=\"mdi mdi-arrow-down text-danger\"></i></span></h3>
                                    <p class=\"text-muted mb-0\">Sales Analytics</p></div>
                                <div class=\"widget-icon\"><i class=\"mdi mdi-chart-line\"></i></div>
                                <div class=\"clearfix\"></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-sm-6 col-xs-12 col-lg-3\">
                        <div class=\"panel mb-30\">
                            <div class=\"panel-body widget-desk\">
                                <div class=\"pull-right\"><h3 class=\"mt-0 mb-0 f-bold\">2658 <span><i
                                        class=\"mdi mdi-arrow-up text-success\"></i></span></h3>
                                    <p class=\"text-muted mb-0\">Daily Sales</p></div>
                                <div class=\"widget-icon\"><i class=\"mdi mdi-sale\"></i></div>
                                <div class=\"clearfix\"></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-sm-6 col-xs-12 col-lg-3\">
                        <div class=\"panel mb-30\">
                            <div class=\"panel-body widget-desk\">
                                <div class=\"pull-right\"><h3 class=\"mt-0 mb-0 f-bold\">\$4926 <span><i
                                        class=\"mdi mdi-arrow-down text-danger\"></i></span></h3>
                                    <p class=\"text-muted mb-0\">Total Revenue</p></div>
                                <div class=\"widget-icon\"><i class=\"mdi mdi-currency-usd\"></i></div>
                                <div class=\"clearfix\"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-8 col-sm-12 col-xs-12 col-lg-8\">
                        <div class=\"panel mb-30\">
                            <div class=\"panel-body\"><h5 class=\"header-title mb-30 mt-0\">Order Overview</h5>
                                <div id=\"morris-area-example\" style=\"height:350px;\"></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4 col-sm-12 col-xs-12 col-lg-4\">
                        <div class=\"panel mb-30\">
                            <div class=\"panel-body\"><h5 class=\"header-title mb-30 mt-0\">Yearly Revenue</h5>
                                <div id=\"morris-bar-example\" style=\"height: 350px;\"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-4 col-sm-12 col-xs-12 col-lg-4\">
                        <div class=\"panel mb-0\">
                            <div class=\"panel-body\"><h4 class=\"header-title mt-0 mb-30\">Type gadgets</h4>
                                <div id=\"morris-donut-example\" style=\"height: 300px;\"></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-8 col-sm-12 col-xs-12 col-lg-8\">
                        <div class=\"panel mb-0\">
                            <div class=\"panel-body\"><h4 class=\"mt-0 mb-30 header-title\">Sale status</h4>
                                <table class=\"table tables-responsive mb-0\">
                                    <thead>
                                    <tr>
                                        <th scope=\"col\">#</th>
                                        <th scope=\"col\">Date</th>
                                        <th scope=\"col\">Sales</th>
                                        <th scope=\"col\">Cancelled</th>
                                        <th scope=\"col\">Delivered</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope=\"row\">1</th>
                                        <td>02/07/2018</td>
                                        <td>114</td>
                                        <td>12</td>
                                        <td><span class=\"badge badge-primary\">Pending</span></td>
                                    </tr>
                                    <tr>
                                        <th scope=\"row\">2</th>
                                        <td>02/10/2018</td>
                                        <td>80</td>
                                        <td>4</td>
                                        <td><span class=\"badge badge-success\">success</span></td>
                                    </tr>
                                    <tr>
                                        <th scope=\"row\">3</th>
                                        <td>12/08/2018</td>
                                        <td>256</td>
                                        <td>72</td>
                                        <td><span class=\"badge badge-primary\">Pending</span></td>
                                    </tr>
                                    <tr>
                                        <th scope=\"row\">4</th>
                                        <td>10/12/2018</td>
                                        <td>118</td>
                                        <td>04</td>
                                        <td><span class=\"badge badge-success\">success</span></td>
                                    </tr>
                                    <tr>
                                        <th scope=\"row\">5</th>
                                        <td>14/6/2018</td>
                                        <td>88</td>
                                        <td>09</td>
                                        <td><span class=\"badge badge-primary\">Pending</span></td>
                                    </tr>
                                    <tr>
                                        <th scope=\"row\">6</th>
                                        <td>21/9/2019</td>
                                        <td>25</td>
                                        <td>04</td>
                                        <td><span class=\"badge badge-primary\">Pending</span></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"page-footer\"><p>&copy; 2019 Fadmin - Crafted with <i class=\"mdi mdi-heart text-danger\"></i> by
                ThemesBoss.</p></div>
        </div>
        <div class=\"page-right-sidebar\" id=\"main-right-sidebar\">
            <div class=\"page-right-sidebar-inner\">
                <div class=\"right-sidebar-top\">
                    <div class=\"right-sidebar-tabs\">
                        <ul class=\"nav nav-tabs\" role=\"tablist\">
                            <li role=\"presentation\" class=\"active\" id=\"chat-tab\"><a href=\"#chat\" aria-controls=\"chat\"
                                                                                    role=\"tab\"
                                                                                    data-toggle=\"tab\">chat</a></li>
                            <li role=\"presentation\" id=\"settings-tab\"><a href=\"#settings\" aria-controls=\"settings\"
                                                                         role=\"tab\" data-toggle=\"tab\">settings</a></li>
                        </ul>
                    </div>
                    <a href=\"javascript:void(0)\" class=\"right-sidebar-toggle right-sidebar-close\"
                       data-sidebar-id=\"main-right-sidebar\"><i class=\"mdi mdi-close\"></i></a></div>
                <div class=\"right-sidebar-content\">
                    <div class=\"tab-content\">
                        <div role=\"tabpanel\" class=\"tab-pane active\" id=\"chat\">
                            <div class=\"chat-list\"><span class=\"chat-title\">Recent</span> <a href=\"javascript:void(0);\"
                                                                                             class=\"right-sidebar-toggle chat-item unread\"
                                                                                             data-sidebar-id=\"chat-right-sidebar\">
                                <div class=\"user-avatar\"><img src=\"assets/images/avatar/avatar-2.jpg\" alt=\"\"></div>
                                <div class=\"chat-info\"><span class=\"chat-author\">David</span> <span class=\"chat-text\">where u at?</span>
                                    <span class=\"chat-time\">08:50</span></div>
                            </a> <a href=\"javascript:void(0);\" class=\"right-sidebar-toggle chat-item unread active-user\"
                                    data-sidebar-id=\"chat-right-sidebar\">
                                <div class=\"user-avatar\"><img src=\"assets/images/avatar/avatar-3.jpg\" alt=\"\"></div>
                                <div class=\"chat-info\"><span class=\"chat-author\">Daisy</span> <span class=\"chat-text\">Daisy sent a photo.</span>
                                    <span class=\"chat-time\">11:34</span></div>
                            </a></div>
                            <div class=\"chat-list\"><span class=\"chat-title\">Older</span> <a href=\"javascript:void(0);\"
                                                                                            class=\"right-sidebar-toggle chat-item\"
                                                                                            data-sidebar-id=\"chat-right-sidebar\">
                                <div class=\"user-avatar\"><img src=\"assets/images/avatar/avatar-4.jpg\" alt=\"\"></div>
                                <div class=\"chat-info\"><span class=\"chat-author\">Tom</span> <span class=\"chat-text\">You: ok</span>
                                    <span class=\"chat-time\">2d</span></div>
                            </a> <a href=\"javascript:void(0);\" class=\"right-sidebar-toggle chat-item active-user\"
                                    data-sidebar-id=\"chat-right-sidebar\">
                                <div class=\"user-avatar\"><img src=\"assets/images/avatar/avatar-5.jpg\" alt=\"\"></div>
                                <div class=\"chat-info\"><span class=\"chat-author\">Anna</span> <span class=\"chat-text\">asdasdasd</span>
                                    <span class=\"chat-time\">4d</span></div>
                            </a> <a href=\"javascript:void(0);\" class=\"right-sidebar-toggle chat-item active-user\"
                                    data-sidebar-id=\"chat-right-sidebar\">
                                <div class=\"user-avatar\"><img src=\"assets/images/avatar/avatar-6.jpg\" alt=\"\"></div>
                                <div class=\"chat-info\"><span class=\"chat-author\">Liza</span> <span class=\"chat-text\">asdasdasd</span>
                                    <span class=\"chat-time\">&nbsp;</span></div>
                            </a> <a href=\"javascript:void(0);\" class=\"load-more-messages\" data-toggle=\"tooltip\"
                                    data-placement=\"bottom\" title=\"Load More\">&bull;&bull;&bull;</a></div>
                        </div>
                        <div role=\"tabpanel\" class=\"tab-pane\" id=\"settings\">
                            <div class=\"right-sidebar-settings\"><span class=\"settings-title\">General Settings</span>
                                <ul class=\"sidebar-setting-list list-unstyled\">
                                    <li><span class=\"settings-option\">Notifications</span> <input type=\"checkbox\"
                                                                                                  class=\"js-switch\"
                                                                                                  checked/></li>
                                    <li><span class=\"settings-option\">Activity log</span> <input type=\"checkbox\"
                                                                                                 class=\"js-switch\"
                                                                                                 checked/></li>
                                    <li><span class=\"settings-option\">Automatic updates</span> <input type=\"checkbox\"
                                                                                                      class=\"js-switch\"/>
                                    </li>
                                    <li><span class=\"settings-option\">Allow backups</span> <input type=\"checkbox\"
                                                                                                  class=\"js-switch\"/>
                                    </li>
                                </ul>
                                <span class=\"settings-title\">Account Settings</span>
                                <ul class=\"sidebar-setting-list list-unstyled\">
                                    <li><span class=\"settings-option\">Chat</span> <input type=\"checkbox\"
                                                                                         class=\"js-switch\" checked/>
                                    </li>
                                    <li><span class=\"settings-option\">Incognito mode</span> <input type=\"checkbox\"
                                                                                                   class=\"js-switch\"/>
                                    </li>
                                    <li><span class=\"settings-option\">Public profile</span> <input type=\"checkbox\"
                                                                                                   class=\"js-switch\"/>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"page-right-sidebar\" id=\"chat-right-sidebar\">
            <div class=\"page-right-sidebar-inner\">
                <div class=\"right-sidebar-top\">
                    <div class=\"chat-top-info\"><span class=\"chat-name\">Noah</span> <span
                            class=\"chat-state\">2h ago</span></div>
                    <a href=\"javascript:void(0)\" class=\"right-sidebar-toggle chat-sidebar-close pull-right\"
                       data-sidebar-id=\"chat-right-sidebar\"><i class=\"mdi mdi-close\"></i></a></div>
                <div class=\"right-sidebar-content\">
                    <div class=\"right-sidebar-chat slimscroll\">
                        <div class=\"chat-bubbles\">
                            <div class=\"chat-start-date\">02/06/2017 5:58PM</div>
                            <div class=\"chat-bubble them\">
                                <div class=\"chat-bubble-img-container\"><img src=\"assets/images/avatar/avatar-2.jpg\"
                                                                            alt=\"\"></div>
                                <div class=\"chat-bubble-text-container\"><span class=\"chat-bubble-text\">Hello</span>
                                </div>
                            </div>
                            <div class=\"chat-bubble me\">
                                <div class=\"chat-bubble-text-container\"><span class=\"chat-bubble-text\">Hello!</span>
                                </div>
                            </div>
                            <div class=\"chat-start-date\">03/06/2017 4:22AM</div>
                            <div class=\"chat-bubble me\">
                                <div class=\"chat-bubble-text-container\"><span class=\"chat-bubble-text\">lorem</span>
                                </div>
                            </div>
                            <div class=\"chat-bubble them\">
                                <div class=\"chat-bubble-img-container\"><img src=\"assets/images/avatar/avatar-2.jpg\"
                                                                            alt=\"\"></div>
                                <div class=\"chat-bubble-text-container\"><span class=\"chat-bubble-text\">ipsum dolor sit amet</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"chat-write\">
                        <form class=\"form-horizontal\" action=\"javascript:void(0);\"><input type=\"text\"
                                                                                          class=\"form-control\"
                                                                                          placeholder=\"Say something\">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src=\"assets/js/jquery.min.js\"></script>
<script src=\"assets/js/bootstrap.min.js\"></script>
<script src=\"assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js\"></script>
<script src=\"assets/plugins/uniform/js/jquery.uniform.standalone.js\"></script>
<script src=\"assets/plugins/switchery/switchery.min.js\"></script>
<script src=\"assets/plugins/morris/morris.min.js\"></script>
<script src=\"assets/plugins/raphael/raphael-min.js\"></script>
<script src=\"assets/pages/dashborad.js\"></script>
<script src=\"assets/js/custom.js\"></script>
</body>
<!-- Mirrored from themesboss.com/fadmin/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue
                        <a href=\"ui-tabs-accordions.html\">Tabs &amp; Accordions</a></li>, 11 Aug 2020 01:18:13 GMT -->
</html>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "backOffice/template.html";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<!-- Mirrored from themesboss.com/fadmin/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Aug 2020 01:17:26 GMT -->
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"Responsive Bootstrap Admin Dashboard\"/>
    <meta name=\"keywords\" content=\"agency, bootstrap, business, corporate, creative, landing page,
    marketing, multipurpose, product, product launch, responsive, software, startup,
    startup landing page\"/>
    <meta name=\"author\" content=\"ThemesBoss\"/>
    <title>Fadmin - Responsive Bootstrap Admin Dashboard</title>
    <link rel=\"shortcut icon\" href=\"#\">
    <link rel=\"stylesheet\" href=\"assets/css/bootstrap.min.css\" type=\"text/css\">
    <link href=\"assets/css/icons.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"assets/plugins/uniform/css/default.css\" rel=\"stylesheet\"/>
    <link href=\"assets/plugins/switchery/switchery.min.css\" rel=\"stylesheet\"/>
    <link rel=\"stylesheet\" href=\"assets/plugins/morris/morris.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/style.css\"/>
</head>
<body>
<div class=\"page-container\">
    <div class=\"page-sidebar\">
        <a class=\"logo-box\" href=\"index-2.html\">
            <span> <i class=\"mdi mdi-chemical-weapon\" id=\"fixed-sidebar-toggle-button\"></i>
                <span>Fadmin</span> </span>
            <i class=\"mdi mdi-close\" id=\"sidebar-toggle-button-close\"></i>
        </a>
        <div class=\"page-sidebar-inner\">
            <div class=\"page-sidebar-menu\">
                <ul class=\"accordion-menu\">
                    <li class=\"active-page\">
                        <a href=\"index-2.html\">
                            <i class=\"menu-icon mdi mdi-home\">

                            </i><span>Dashboard</span> </a>
                    </li>
                    <li>
                        <a href=\"javascript:void(0);\">
                            <i class=\"menu-icon mdi mdi-bullseye\"></i>
                            <span>UI Elements</span><i class=\"accordion-icon fa fa-angle-right\"></i> </a>
                        <ul class=\"sub-menu\">
                            <li><a href=\"ui-buttons.html\">Buttons</a></li>
                            <li>
                                <a href=\"ui-panels.html\">Panels</a></li>
                            <li>
                                <a href=\"ui-tabs-accordions.html\">Tabs &amp; Accordions</a></li>
                            <li>
                                <a href=\"ui-alerts.html\">Alerts</a></li>
                            <li><a href=\"ui-progressbars.html\">
                                Progress Bars</a></li>
                            <li><a href=\"ui-typography.html\">Typography</a></li>
                            <li>
                                <a href=\"ui-grid.html\">Grid</a></li>
                        </ul>
                    </li>
                    <li><a href=\"javascript:void(0);\">
                        <i class=\"menu-icon mdi mdi-cards-outline\"></i>
                        <span>Icons</span><i class=\"accordion-icon fa fa-angle-right\"></i> </a>
                        <ul class=\"sub-menu\">
                            <li><a href=\"icons-material.html\">Material Design</a></li>
                            <li><a href=\"icons-ion.html\">Ion Icons</a></li>
                            <li><a href=\"icons-fontawesome.html\">Font Awesome</a></li>
                            <li><a href=\"icons-feather.html\">Feather Icons</a></li>
                            <li>
                                <a href=\"icons-themify.html\">Themify Icons</a></li>
                            <li>
                                <a href=\"icons-dripicons.html\">Dripicons</a></li>
                            <li>
                                <a href=\"icons-typicons.html\">Typicons Icons</a></li>
                        </ul>
                    </li>
                    <li><a href=\"javascript:void(0);\">
                        <i class=\"menu-icon mdi mdi-apple-keyboard-command\">

                        </i><span>Layouts</span><i class=\"accordion-icon fa fa-angle-right\"></i>
                    </a>
                        <ul class=\"sub-menu\">
                            <li><a href=\"layout-blank.html\">Blank Page</a>
                            </li>
                            <li><a href=\"layout-boxed.html\">Boxed Layout</a></li>
                            <li>
                                <a href=\"layout-collapsed-sidebar.html\">Collapsed Sidebar</a>
                            </li>
                            <li><a href=\"layout-fixed-header.html\">Fixed Header</a></li>
                            <li>
                                <a href=\"layout-fixed-sidebar.html\">Fixed Sidebar</a></li>
                            <li>
                                <a href=\"layout-fixed-sidebar-header.html\">Fixed Sidebar &amp; Header</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href=\"javascript:void(0);\">
                        <i class=\"menu-icon mdi mdi-clipboard-outline\"></i>
                        <span>Forms</span><i class=\"accordion-icon fa fa-angle-right\"></i>
                    </a>
                        <ul class=\"sub-menu\">
                            <li><a href=\"form-mask.html\">Form Mask</a></li>
                            <li>
                                <a href=\"form-elements.html\">Form Elements</a></li>
                            <li>
                                <a href=\"form-xeditable.html\">Form Xeditable</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"javascript:void(0);\"> <i class=\"menu-icon mdi mdi-table\"></i>
                            <span>Tables</span><i class=\"accordion-icon fa fa-angle-right\"></i>
                        </a>
                        <ul class=\"sub-menu\">
                            <li><a href=\"tables-footable.html\">Foo Table</a>
                            </li>
                            <li><a href=\"tables-responsive.html\">Responsive Table</a></li>
                            <li>
                                <a href=\"tables-basic.html\">Basic Tables</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"javascript:void(0);\"> <i class=\"menu-icon mdi mdi-chart-bubble\">

                        </i><span>Chart</span><i class=\"accordion-icon fa fa-angle-right\"></i> </a>
                        <ul class=\"sub-menu\">
                            <li><a href=\"chart-morris.html\">Morris Chart</a></li>
                            <li>
                                <a href=\"chart-c3.html\">C3 Chart</a></li>
                        </ul>
                    </li>
                    <li><a href=\"maps.html\">
                        <i class=\"menu-icon mdi mdi-map-marker-multiple\"></i><span>Vector Maps</span> </a>
                    </li>
                    <li><a href=\"javascript:void(0);\"> <i class=\"menu-icon mdi mdi-google-pages\"></i>
                        <span>Extra Pages</span><i class=\"accordion-icon fa fa-angle-right\"></i>
                    </a>
                        <ul class=\"sub-menu\">
                            <li><a href=\"pages-login.html\">Login</a></li>
                            <li><a href=\"pages-register.html\">Register</a></li>
                            <li><a href=\"pages-recoverpw.html\">Recover Password</a></li>
                            <li><a href=\"pages-lock-screen.html\">Lock Screen</a></li>
                            <li>
                                <a href=\"pages-400.html\">Error 400</a></li>
                            <li><a href=\"pages-403.html\">Error 403</a></li>
                            <li><a href=\"pages-404.html\">Error 404</a></li>
                            <li><a href=\"pages-500.html\">Error 500</a></li>
                            <li><a href=\"pages-503.html\">Error 503</a></li>
                        </ul>
                    </li>
                    <li class=\"menu-divider\"></li>
                    <li><a href=\"index-2.html\">
                        <i class=\"menu-icon mdi mdi-incognito\"></i><span>Documentation</span> </a></li>
                    <li><a href=\"index-2.html\"> <i class=\"menu-icon mdi mdi-stackexchange\"></i>
                        <span>Changelog</span><span class=\"label label-danger\">1.0</span> </a></li>
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
                        <div class=\"logo-sm\"><a href=\"javascript:void(0)\" id=\"sidebar-toggle-button\"><i
                                class=\"fa fa-bars\"></i></a> <a class=\"logo-box\" href=\"index-2.html\"><span>Fadmin</span></a>
                        </div>
                    </div>
                    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                        <ul class=\"nav navbar-nav d-res-none-full\">
                            <li><a href=\"javascript:void(0)\" id=\"collapsed-sidebar-toggle-button\"><i
                                    class=\"mdi mdi-menu\"></i></a></li>
                            <li><a href=\"javascript:void(0)\" id=\"toggle-fullscreen\"><i
                                    class=\"mdi mdi-fullscreen\"></i></a></li>
                            <li><a href=\"javascript:void(0)\" id=\"search-button\"><i class=\"mdi mdi-magnify\"></i></a></li>
                        </ul>
                        <ul class=\"nav navbar-nav navbar-right\">
                            <li><a href=\"javascript:void(0)\" class=\"right-sidebar-toggle\"
                                   data-sidebar-id=\"main-right-sidebar\"><i class=\"mdi mdi-email-outline\"></i></a></li>
                            <li class=\"dropdown\"><a href=\"javascript:void(0)\" class=\"dropdown-toggle\"
                                                    data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\"
                                                    aria-expanded=\"false\"><i class=\"mdi mdi-bell-outline\"></i></a>
                                <ul class=\"dropdown-menu dropdown-lg dropdown-content\">
                                    <li class=\"drop-title\">Notifications<a href=\"#\" class=\"drop-title-link\"><i
                                            class=\"fa fa-angle-right\"></i></a></li>
                                    <li class=\"slimscroll dropdown-notifications\">
                                        <ul class=\"list-unstyled dropdown-oc\">
                                            <li><a href=\"#\"><span class=\"notification-badge bg-primary\"><i
                                                    class=\"fa fa-photo\"></i></span> <span class=\"notification-info\">Finished uploading photos to gallery <b>\"South Africa\"</b>. <small
                                                    class=\"notification-date\">20:00</small> </span></a></li>
                                            <li><a href=\"#\"><span class=\"notification-badge bg-primary\"><i
                                                    class=\"fa fa-at\"></i></span> <span class=\"notification-info\"><b>John Doe</b> mentioned you in a post \"Update v1.5\".<br><small
                                                    class=\"notification-date\">06:07</small> </span></a></li>
                                            <li><a href=\"#\"><span class=\"notification-badge bg-danger\"><i
                                                    class=\"fa fa-bolt\"></i></span> <span class=\"notification-info\">4 new special offers from the apps you follow! <small
                                                    class=\"notification-date\">Yesterday</small> </span></a></li>
                                            <li><a href=\"#\"><span class=\"notification-badge bg-success\"><i
                                                    class=\"fa fa-bullhorn\"></i></span> <span class=\"notification-info\">There is a meeting with <b>Ethan</b> in 15 minutes! <small
                                                    class=\"notification-date\">Yesterday</small> </span></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"dropdown user-dropdown\"><a href=\"#\" class=\"dropdown-toggle\"
                                                                  data-toggle=\"dropdown\" role=\"button\"
                                                                  aria-haspopup=\"true\" aria-expanded=\"false\"><img
                                    src=\"assets/images/avatar/avatar-1.jpg\" alt=\"\" class=\"img-circle\"></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"#\">Profile</a></li>
                                    <li><a href=\"#\">Calendar</a></li>
                                    <li><a href=\"#\"><span class=\"badge pull-right badge-danger\">42</span>Messages</a>
                                    </li>
                                    <li role=\"separator\" class=\"divider\"></li>
                                    <li><a href=\"#\">Account Settings</a></li>
                                    <li><a href=\"#\">Log Out</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class=\"page-inner\">
            <div class=\"page-title mb-15\">
                <div class=\"pull-left\"><h3 class=\"breadcrumb-header\">Dashboard</h3>
                    <p class=\"text-muted mb-0\">Nam libero tempore, cum soluta nobis</p></div>
                <div class=\"pull-right\">
                    <div class=\"btn-group mx-auto\">
                        <ol class=\"breadcrumb hide-phone pt-4 pb-4 m-0\">
                            <li class=\"breadcrumb-item\"><a href=\"#\">Fadmin</a></li>
                            <li class=\"breadcrumb-item active\">Dashboard</li>
                        </ol>
                    </div>
                </div>
                <div class=\"clearfix\"></div>
            </div>
            <div id=\"main-wrapper\">
                <div class=\"row\">
                    <div class=\"col-md-6 col-sm-6 col-xs-12 col-lg-3\">
                        <div class=\"panel mb-30\">
                            <div class=\"panel-body widget-desk\">
                                <div class=\"pull-right\"><h3 class=\"mt-0 mb-0 f-bold\">48505 <span><i
                                        class=\"mdi mdi-arrow-up text-success\"></i></span></h3>
                                    <p class=\"text-muted mb-0\">Total Visits</p></div>
                                <div class=\"widget-icon\"><i class=\"mdi mdi-eye\"></i></div>
                                <div class=\"clearfix\"></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-sm-6 col-xs-12 col-lg-3\">
                        <div class=\"panel mb-30\">
                            <div class=\"panel-body widget-desk\">
                                <div class=\"pull-right\"><h3 class=\"mt-0 mb-0 f-bold\">2832 <span><i
                                        class=\"mdi mdi-arrow-down text-danger\"></i></span></h3>
                                    <p class=\"text-muted mb-0\">Sales Analytics</p></div>
                                <div class=\"widget-icon\"><i class=\"mdi mdi-chart-line\"></i></div>
                                <div class=\"clearfix\"></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-sm-6 col-xs-12 col-lg-3\">
                        <div class=\"panel mb-30\">
                            <div class=\"panel-body widget-desk\">
                                <div class=\"pull-right\"><h3 class=\"mt-0 mb-0 f-bold\">2658 <span><i
                                        class=\"mdi mdi-arrow-up text-success\"></i></span></h3>
                                    <p class=\"text-muted mb-0\">Daily Sales</p></div>
                                <div class=\"widget-icon\"><i class=\"mdi mdi-sale\"></i></div>
                                <div class=\"clearfix\"></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-sm-6 col-xs-12 col-lg-3\">
                        <div class=\"panel mb-30\">
                            <div class=\"panel-body widget-desk\">
                                <div class=\"pull-right\"><h3 class=\"mt-0 mb-0 f-bold\">\$4926 <span><i
                                        class=\"mdi mdi-arrow-down text-danger\"></i></span></h3>
                                    <p class=\"text-muted mb-0\">Total Revenue</p></div>
                                <div class=\"widget-icon\"><i class=\"mdi mdi-currency-usd\"></i></div>
                                <div class=\"clearfix\"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-8 col-sm-12 col-xs-12 col-lg-8\">
                        <div class=\"panel mb-30\">
                            <div class=\"panel-body\"><h5 class=\"header-title mb-30 mt-0\">Order Overview</h5>
                                <div id=\"morris-area-example\" style=\"height:350px;\"></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4 col-sm-12 col-xs-12 col-lg-4\">
                        <div class=\"panel mb-30\">
                            <div class=\"panel-body\"><h5 class=\"header-title mb-30 mt-0\">Yearly Revenue</h5>
                                <div id=\"morris-bar-example\" style=\"height: 350px;\"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-4 col-sm-12 col-xs-12 col-lg-4\">
                        <div class=\"panel mb-0\">
                            <div class=\"panel-body\"><h4 class=\"header-title mt-0 mb-30\">Type gadgets</h4>
                                <div id=\"morris-donut-example\" style=\"height: 300px;\"></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-8 col-sm-12 col-xs-12 col-lg-8\">
                        <div class=\"panel mb-0\">
                            <div class=\"panel-body\"><h4 class=\"mt-0 mb-30 header-title\">Sale status</h4>
                                <table class=\"table tables-responsive mb-0\">
                                    <thead>
                                    <tr>
                                        <th scope=\"col\">#</th>
                                        <th scope=\"col\">Date</th>
                                        <th scope=\"col\">Sales</th>
                                        <th scope=\"col\">Cancelled</th>
                                        <th scope=\"col\">Delivered</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope=\"row\">1</th>
                                        <td>02/07/2018</td>
                                        <td>114</td>
                                        <td>12</td>
                                        <td><span class=\"badge badge-primary\">Pending</span></td>
                                    </tr>
                                    <tr>
                                        <th scope=\"row\">2</th>
                                        <td>02/10/2018</td>
                                        <td>80</td>
                                        <td>4</td>
                                        <td><span class=\"badge badge-success\">success</span></td>
                                    </tr>
                                    <tr>
                                        <th scope=\"row\">3</th>
                                        <td>12/08/2018</td>
                                        <td>256</td>
                                        <td>72</td>
                                        <td><span class=\"badge badge-primary\">Pending</span></td>
                                    </tr>
                                    <tr>
                                        <th scope=\"row\">4</th>
                                        <td>10/12/2018</td>
                                        <td>118</td>
                                        <td>04</td>
                                        <td><span class=\"badge badge-success\">success</span></td>
                                    </tr>
                                    <tr>
                                        <th scope=\"row\">5</th>
                                        <td>14/6/2018</td>
                                        <td>88</td>
                                        <td>09</td>
                                        <td><span class=\"badge badge-primary\">Pending</span></td>
                                    </tr>
                                    <tr>
                                        <th scope=\"row\">6</th>
                                        <td>21/9/2019</td>
                                        <td>25</td>
                                        <td>04</td>
                                        <td><span class=\"badge badge-primary\">Pending</span></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"page-footer\"><p>&copy; 2019 Fadmin - Crafted with <i class=\"mdi mdi-heart text-danger\"></i> by
                ThemesBoss.</p></div>
        </div>
        <div class=\"page-right-sidebar\" id=\"main-right-sidebar\">
            <div class=\"page-right-sidebar-inner\">
                <div class=\"right-sidebar-top\">
                    <div class=\"right-sidebar-tabs\">
                        <ul class=\"nav nav-tabs\" role=\"tablist\">
                            <li role=\"presentation\" class=\"active\" id=\"chat-tab\"><a href=\"#chat\" aria-controls=\"chat\"
                                                                                    role=\"tab\"
                                                                                    data-toggle=\"tab\">chat</a></li>
                            <li role=\"presentation\" id=\"settings-tab\"><a href=\"#settings\" aria-controls=\"settings\"
                                                                         role=\"tab\" data-toggle=\"tab\">settings</a></li>
                        </ul>
                    </div>
                    <a href=\"javascript:void(0)\" class=\"right-sidebar-toggle right-sidebar-close\"
                       data-sidebar-id=\"main-right-sidebar\"><i class=\"mdi mdi-close\"></i></a></div>
                <div class=\"right-sidebar-content\">
                    <div class=\"tab-content\">
                        <div role=\"tabpanel\" class=\"tab-pane active\" id=\"chat\">
                            <div class=\"chat-list\"><span class=\"chat-title\">Recent</span> <a href=\"javascript:void(0);\"
                                                                                             class=\"right-sidebar-toggle chat-item unread\"
                                                                                             data-sidebar-id=\"chat-right-sidebar\">
                                <div class=\"user-avatar\"><img src=\"assets/images/avatar/avatar-2.jpg\" alt=\"\"></div>
                                <div class=\"chat-info\"><span class=\"chat-author\">David</span> <span class=\"chat-text\">where u at?</span>
                                    <span class=\"chat-time\">08:50</span></div>
                            </a> <a href=\"javascript:void(0);\" class=\"right-sidebar-toggle chat-item unread active-user\"
                                    data-sidebar-id=\"chat-right-sidebar\">
                                <div class=\"user-avatar\"><img src=\"assets/images/avatar/avatar-3.jpg\" alt=\"\"></div>
                                <div class=\"chat-info\"><span class=\"chat-author\">Daisy</span> <span class=\"chat-text\">Daisy sent a photo.</span>
                                    <span class=\"chat-time\">11:34</span></div>
                            </a></div>
                            <div class=\"chat-list\"><span class=\"chat-title\">Older</span> <a href=\"javascript:void(0);\"
                                                                                            class=\"right-sidebar-toggle chat-item\"
                                                                                            data-sidebar-id=\"chat-right-sidebar\">
                                <div class=\"user-avatar\"><img src=\"assets/images/avatar/avatar-4.jpg\" alt=\"\"></div>
                                <div class=\"chat-info\"><span class=\"chat-author\">Tom</span> <span class=\"chat-text\">You: ok</span>
                                    <span class=\"chat-time\">2d</span></div>
                            </a> <a href=\"javascript:void(0);\" class=\"right-sidebar-toggle chat-item active-user\"
                                    data-sidebar-id=\"chat-right-sidebar\">
                                <div class=\"user-avatar\"><img src=\"assets/images/avatar/avatar-5.jpg\" alt=\"\"></div>
                                <div class=\"chat-info\"><span class=\"chat-author\">Anna</span> <span class=\"chat-text\">asdasdasd</span>
                                    <span class=\"chat-time\">4d</span></div>
                            </a> <a href=\"javascript:void(0);\" class=\"right-sidebar-toggle chat-item active-user\"
                                    data-sidebar-id=\"chat-right-sidebar\">
                                <div class=\"user-avatar\"><img src=\"assets/images/avatar/avatar-6.jpg\" alt=\"\"></div>
                                <div class=\"chat-info\"><span class=\"chat-author\">Liza</span> <span class=\"chat-text\">asdasdasd</span>
                                    <span class=\"chat-time\">&nbsp;</span></div>
                            </a> <a href=\"javascript:void(0);\" class=\"load-more-messages\" data-toggle=\"tooltip\"
                                    data-placement=\"bottom\" title=\"Load More\">&bull;&bull;&bull;</a></div>
                        </div>
                        <div role=\"tabpanel\" class=\"tab-pane\" id=\"settings\">
                            <div class=\"right-sidebar-settings\"><span class=\"settings-title\">General Settings</span>
                                <ul class=\"sidebar-setting-list list-unstyled\">
                                    <li><span class=\"settings-option\">Notifications</span> <input type=\"checkbox\"
                                                                                                  class=\"js-switch\"
                                                                                                  checked/></li>
                                    <li><span class=\"settings-option\">Activity log</span> <input type=\"checkbox\"
                                                                                                 class=\"js-switch\"
                                                                                                 checked/></li>
                                    <li><span class=\"settings-option\">Automatic updates</span> <input type=\"checkbox\"
                                                                                                      class=\"js-switch\"/>
                                    </li>
                                    <li><span class=\"settings-option\">Allow backups</span> <input type=\"checkbox\"
                                                                                                  class=\"js-switch\"/>
                                    </li>
                                </ul>
                                <span class=\"settings-title\">Account Settings</span>
                                <ul class=\"sidebar-setting-list list-unstyled\">
                                    <li><span class=\"settings-option\">Chat</span> <input type=\"checkbox\"
                                                                                         class=\"js-switch\" checked/>
                                    </li>
                                    <li><span class=\"settings-option\">Incognito mode</span> <input type=\"checkbox\"
                                                                                                   class=\"js-switch\"/>
                                    </li>
                                    <li><span class=\"settings-option\">Public profile</span> <input type=\"checkbox\"
                                                                                                   class=\"js-switch\"/>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"page-right-sidebar\" id=\"chat-right-sidebar\">
            <div class=\"page-right-sidebar-inner\">
                <div class=\"right-sidebar-top\">
                    <div class=\"chat-top-info\"><span class=\"chat-name\">Noah</span> <span
                            class=\"chat-state\">2h ago</span></div>
                    <a href=\"javascript:void(0)\" class=\"right-sidebar-toggle chat-sidebar-close pull-right\"
                       data-sidebar-id=\"chat-right-sidebar\"><i class=\"mdi mdi-close\"></i></a></div>
                <div class=\"right-sidebar-content\">
                    <div class=\"right-sidebar-chat slimscroll\">
                        <div class=\"chat-bubbles\">
                            <div class=\"chat-start-date\">02/06/2017 5:58PM</div>
                            <div class=\"chat-bubble them\">
                                <div class=\"chat-bubble-img-container\"><img src=\"assets/images/avatar/avatar-2.jpg\"
                                                                            alt=\"\"></div>
                                <div class=\"chat-bubble-text-container\"><span class=\"chat-bubble-text\">Hello</span>
                                </div>
                            </div>
                            <div class=\"chat-bubble me\">
                                <div class=\"chat-bubble-text-container\"><span class=\"chat-bubble-text\">Hello!</span>
                                </div>
                            </div>
                            <div class=\"chat-start-date\">03/06/2017 4:22AM</div>
                            <div class=\"chat-bubble me\">
                                <div class=\"chat-bubble-text-container\"><span class=\"chat-bubble-text\">lorem</span>
                                </div>
                            </div>
                            <div class=\"chat-bubble them\">
                                <div class=\"chat-bubble-img-container\"><img src=\"assets/images/avatar/avatar-2.jpg\"
                                                                            alt=\"\"></div>
                                <div class=\"chat-bubble-text-container\"><span class=\"chat-bubble-text\">ipsum dolor sit amet</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"chat-write\">
                        <form class=\"form-horizontal\" action=\"javascript:void(0);\"><input type=\"text\"
                                                                                          class=\"form-control\"
                                                                                          placeholder=\"Say something\">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src=\"assets/js/jquery.min.js\"></script>
<script src=\"assets/js/bootstrap.min.js\"></script>
<script src=\"assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js\"></script>
<script src=\"assets/plugins/uniform/js/jquery.uniform.standalone.js\"></script>
<script src=\"assets/plugins/switchery/switchery.min.js\"></script>
<script src=\"assets/plugins/morris/morris.min.js\"></script>
<script src=\"assets/plugins/raphael/raphael-min.js\"></script>
<script src=\"assets/pages/dashborad.js\"></script>
<script src=\"assets/js/custom.js\"></script>
</body>
<!-- Mirrored from themesboss.com/fadmin/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue
                        <a href=\"ui-tabs-accordions.html\">Tabs &amp; Accordions</a></li>, 11 Aug 2020 01:18:13 GMT -->
</html>", "backOffice/template.html", "/home/emir/Bureau/fashionBoard/templates/backOffice/template.html");
    }
}
