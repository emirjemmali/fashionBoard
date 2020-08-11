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

/* base.html.twig */
class __TwigTemplate_e4e5dc4df9048ad587d7f54e528e59b3bddc9331a32566c15dc91e04c8f9bf54 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'scripts' => [$this, 'block_scripts'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class=\"ie6\"> <![endif]-->
<!--[if IE 7 ]>    <html class=\"ie7\"> <![endif]-->
<!--[if IE 8 ]>    <html class=\"ie8\"> <![endif]-->
<!--[if IE 9 ]>    <html class=\"ie9\"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang=\"en\" class=\"\"><!--<![endif]-->

<!-- Mirrored from premiumlayers.net/demo/html/maxshop/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Aug 2020 11:27:34 GMT -->
<head>
    <meta charset=\"utf-8\">

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Rise with style</title>

    <!-- Standard Favicon -->
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicon.ico"), "html", null, true);
        echo "\" />

    <!-- For iPhone 4 Retina display: -->
    <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/apple-touch-icon-114x114-precomposed.png"), "html", null, true);
        echo "\">

    <!-- For iPad: -->
    <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/apple-touch-icon-72x72-precomposed.html"), "html", null, true);
        echo "\">

    <!-- For iPhone: -->
    <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/apple-touch-icon-57x57-precomposed.png"), "html", null, true);
        echo "\">

    <!-- Library - Google Font Familys -->
    <link href=\"https://fonts.googleapis.com/css?family=Arizonia|Crimson+Text:400,400i,600,600i,700,700i|Lato:100,100i,300,300i,400,400i,700,700i,900,900i|Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i\" rel=\"stylesheet\">

    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("revolution/css/settings.css"), "html", null, true);
        echo "\">

    <!-- RS5.0 Layers and Navigation Styles -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("revolution/css/layers.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("revolution/css/navigation.css"), "html", null, true);
        echo "\">

    <!-- Library - Bootstrap v3.3.5 -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libraries/lib.css"), "html", null, true);
        echo "\">

    <!-- Custom - Common CSS -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/plugins.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/navigation-menu.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/shortcode.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style.css"), "html", null, true);
        echo "\">


    <!--[if lt IE 9]>
    <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/html5/respond.min.js"), "html", null, true);
        echo "\"></script>
    <![endif]-->
";
        // line 54
        $this->displayBlock('scripts', $context, $blocks);
        // line 56
        echo "</head>

<body data-offset=\"200\" data-spy=\"scroll\" data-target=\".ow-navigation\">
<div class=\"main-container\">
    <!-- Loader -->
    <div id=\"site-loader\" class=\"load-complete\">
        <div class=\"loader\">
            <div class=\"loader-inner ball-clip-rotate\">
                <div></div>
            </div>
        </div>
    </div><!-- Loader /- -->

    <!-- Header -->
    <header class=\"header-section container-fluid no-padding\">
        <!-- Top Header -->
        <!-- Menu Block -->
        <div class=\"container-fluid no-padding menu-block\">
            <!-- Container -->
            <div class=\"container\">
                <!-- nav -->
                <nav class=\"navbar navbar-default ow-navigation\">
                    <div class=\"navbar-header\">
                        <button aria-controls=\"navbar\" aria-expanded=\"false\" data-target=\"#navbar\" data-toggle=\"collapse\" class=\"navbar-toggle collapsed\" type=\"button\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <a href=\"index-2.html\" class=\"navbar-brand\" style=\"color: #FF8661\">Rise <span>With </span>Style</a>
                    </div>
                    <!-- Menu Icon -->
                    ";
        // line 88
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 89
            echo "                    <div style=\"color: #FF8661\" class=\"menu-icon\">
                        <ul class=\"cart\">
                            <li>
                                <ul class=\"dropdown-menu no-padding\">
                                    <li style=\"color: #696666\" class=\"button\">
                                        <a href=\"#\" title=\"View Cart\">Profile</a>
                                        <a href=\"";
            // line 95
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
            echo "\" title=\"Log out\">Log out</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href=\"#\" title=\"User\"><i class=\"icon icon-User\"></i></a></li>
                        </ul>
                    </div><!-- Menu Icon /- -->

                    ";
        } else {
            // line 104
            echo "                    ";
        }
        // line 105
        echo "                    <div class=\"navbar-collapse collapse navbar-right\" id=\"navbar\">
                        <ul class=\"nav navbar-nav\">
                            <li class=\"dropdown\">
                                <a href=\"#\" title=\"Home\" class=\"dropdown-toggle\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\" style=\"color: #FF8661\">Accueil</a>

                            </li>
                            <li class=\"dropdown\">
                                <a href=\"";
        // line 112
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formule");
        echo "\" title=\"Home\" class=\"dropdown-toggle\" role=\"button\" aria-haspopup=\"true\" style=\"color: #FF8661\" aria-expanded=\"false\">Formules et tarifs </a>

                            </li>
                            <li><a href=\"#product-section\" style=\"color: #FF8661\" title=\"Products\">FAQ</a></li>
                            <li class=\"dropdown\">
                                <a href=\"shop.html\" title=\"Shop\" class=\"dropdown-toggle\" role=\"button\" style=\"color: #FF8661\" aria-haspopup=\"true\" aria-expanded=\"false\">Profile</a>
                                <i class=\"ddl-switch fa fa-angle-down\"></i>
                                <ul class=\"dropdown-menu\">
                                </ul>
                            </li>
                            <li class=\"dropdown\">
                                <a href=\"blog.html\" title=\"Blog\" class=\"dropdown-toggle\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\" style=\"color: #FF8661\">Contact</a>

                        </ul>
                    </div><!--/.nav-collapse -->
                </nav><!-- nav /- -->
                <!-- Search Box -->
            </div><!-- Container /- -->
        </div><!-- Menu Block /- -->
    </header><!-- Header /- -->
    ";
        // line 132
        $this->displayBlock('body', $context, $blocks);
        // line 523
        echo "    <!-- Footer Main -->";
        $this->displayBlock('footer', $context, $blocks);
        // line 593
        echo "</div>


<!-- JQuery v1.12.4 -->
<script src=\"";
        // line 597
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>

<!-- Library - Js -->
<script src=\"";
        // line 600
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libraries/lib.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 602
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libraries/jquery.countdown.min.js"), "html", null, true);
        echo "\"></script>

<!-- RS5.0 Core JS Files -->
<script type=\"text/javascript\" src=\"";
        // line 605
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("revolution/js/jquery.themepunch.tools.min838f.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 606
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("revolution/js/jquery.themepunch.revolution.min838f.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 607
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("revolution/js/extensions/revolution.extension.video.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 608
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("revolution/js/extensions/revolution.extension.slideanims.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 609
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("revolution/js/extensions/revolution.extension.layeranimation.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 610
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("revolution/js/extensions/revolution.extension.navigation.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 611
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("revolution/js/extensions/revolution.extension.actions.min.js"), "html", null, true);
        echo "\"></script>

<!-- Library - Theme JS -->
<script src=\"";
        // line 614
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/functions.js"), "html", null, true);
        echo "\"></script>

</body>

<!-- Mirrored from premiumlayers.net/demo/html/maxshop/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Aug 2020 11:27:57 GMT -->
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 54
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        // line 55
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 132
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 133
        echo "
    <main>
        <!-- Slider Section 1 -->
        <div id=\"home-revslider\" class=\"slider-section container-fluid no-padding\">
            <!-- START REVOLUTION SLIDER 5.0 -->
            <div class=\"rev_slider_wrapper\">
                    <div id=\"home-slider1\" class=\"rev_slider\" data-version=\"5.0\">
                        <ul>
                            <li data-transition=\"zoomout\" data-slotamount=\"default\"  data-easein=\"easeInOut\" data-easeout=\"easeInOut\" data-masterspeed=\"2000\" data-rotate=\"0\"  data-fstransition=\"fade\" data-fsmasterspeed=\"1500\" data-fsslotamount=\"7\">
                                <img src=\"images/slider-1.jpg\" alt=\"slider\" data-bgposition=\"center center\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\" data-bgparallax=\"10\" class=\"rev-slidebg\" data-no-retina>
                                <div class=\"tp-caption NotGeneric-Title tp-resizeme rs-parallaxlevel-0\" id=\"slide-layer-1\"
                                     data-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\"
                                     data-y=\"['middle','middle','middle','middle']\" data-voffset=\"['-200','-130','-110','-80']\"
                                     data-fontsize=\"['38','30','25','16']\"
                                     data-lineheight=\"['24','24','24','24']\"
                                     data-width=\"none\"
                                     data-height=\"none\"
                                     data-whitespace=\"nowrap\"
                                     data-transform_idle=\"o:1;\"
                                     data-transform_in=\"y:-50px;opacity:0;s:1000;e:Power4.easeOut;\"
                                     data-transform_out=\"opacity:0;s:3000;e:Power4.easeIn;s:3000;e:Power4.easeIn;\"
                                     data-mask_in=\"x:0px;y:0px;s:inherit;e:inherit;\"
                                     data-mask_out=\"x:inherit;y:inherit;s:inherit;e:inherit;\"
                                     data-start=\"1000\"
                                     data-splitin=\"chars\"
                                     data-splitout=\"none\"
                                     data-responsive_offset=\"on\"
                                     data-elementdelay=\"0.05\"
                                     style=\"z-index: 5; white-space: nowrap; letter-spacing: 3.04px; color:#333; font-weight: 700; font-family: 'Montserrat', sans-serif; text-transform: uppercase;\">Rise with style
                                </div>
                                <div class=\"tp-caption NotGeneric-Title tp-resizeme rs-parallaxlevel-0\" id=\"slide-layer-2\"
                                     data-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\"
                                     data-y=\"['middle','middle','middle','middle']\" data-voffset=\"['-135','-80','-60','-50']\"
                                     data-fontsize=\"['18','18','18','14']\"
                                     data-lineheight=\"['26','26','26','26']\"
                                     data-width=\"['750','750','738','450']\"
                                     data-height=\"none\"
                                     data-whitespace=\"nowrap\"
                                     data-transform_idle=\"o:1;\"
                                     data-transform_in=\"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;\"
                                     data-transform_out=\"y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\"
                                     data-mask_in=\"x:0px;y:0px;s:inherit;e:inherit;\"
                                     data-mask_out=\"x:inherit;y:inherit;s:inherit;e:inherit;\"
                                     data-start=\"1000\"
                                     data-splitin=\"chars\"
                                     data-splitout=\"none\"
                                     data-responsive_offset=\"on\"
                                     data-elementdelay=\"0.05\"
                                     style=\"z-index: 5; white-space: nowrap; letter-spacing: 1.5px; color:#777; font-weight: normal; font-family: 'Lato', sans-serif;\">vous permet de dénicher les pièces dont vous avez besoin, plus besoin de faire le tour des magasins et des sites web pour trouver la petite robe noire ou la tenue du samedi soir
                                </div>
                                <div class=\"tp-caption NotGeneric-Title tp-resizeme rs-parallaxlevel-0\" id=\"slide-layer-3\"
                                     data-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\"
                                     data-y=\"['middle','middle','middle','middle']\" data-voffset=\"['-110','-50','-35','-30']\"
                                     data-fontsize=\"['18','18','18','14']\"
                                     data-lineheight=\"['26','26','26','26']\"
                                     data-height=\"none\"
                                     data-whitespace=\"nowrap\"
                                     data-transform_idle=\"o:1;\"
                                     data-transform_in=\"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;\"
                                     data-transform_out=\"y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\"
                                     data-mask_in=\"x:0px;y:0px;s:inherit;e:inherit;\"
                                     data-mask_out=\"x:inherit;y:inherit;s:inherit;e:inherit;\"
                                     data-start=\"1000\"
                                     data-splitin=\"chars\"
                                     data-splitout=\"none\"
                                     data-responsive_offset=\"on\"
                                     data-elementdelay=\"0.05\"
                                     style=\"z-index: 5; white-space: nowrap; letter-spacing: 1.5px; color:#777; font-weight: normal; font-family: 'Lato', sans-serif;\">Un styliste expérimenté vous sélectionnera des pièces adéquates à votre morphologie et style et en un click vous pourriez les acheter directement du site de la marque.

                                </div>
                                <div class=\"tp-caption NotGeneric-Button rev-btn  rs-parallaxlevel-0\" id=\"slide-layer-4\"
                                     data-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\"
                                     data-y=\"['middle','middle','middle','middle']\" data-voffset=\"['-30','20','40','30']\"
                                     data-fontsize=\"['14','14','14','12']\"
                                     data-lineheight=\"['24','24','24','24']\"
                                     data-width=\"none\"
                                     data-height=\"none\"
                                     data-whitespace=\"nowrap\"
                                     data-transform_idle=\"o:1;\"
                                     data-transform_hover=\"o:1;rX:0;rY:0;rZ:0;z:0;s:100;e:Power1.easeInOut;\"
                                     data-style_hover=\"c:rgb(255, 255, 255);bg:rgba(182, 121, 95);\"
                                     data-transform_in=\"x:[-100%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2500;e:Power3.easeInOut;\"
                                     data-transform_out=\"auto:auto;s:1000;e:Power2.easeInOut;\"
                                     data-start=\"2000\"
                                     data-splitin=\"none\"
                                     data-splitout=\"none\"
                                     data-actions='[{\"event\":\"click\",\"action\":\"scrollbelow\",\"offset\":\"0px\"}]'
                                     data-responsive_offset=\"on\"
                                     data-responsive=\"off\"
                                     style=\"z-index: 10; padding:8px 38px; letter-spacing:0.56px; color: #b6795f; border-color: #b6795f; font-family: 'Montserrat', sans-serif; text-transform:uppercase; background-color:transparent; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;\">Shop Now
                                </div>
                            </li>

                            <li data-transition=\"zoomout\" data-slotamount=\"default\"  data-easein=\"easeInOut\" data-easeout=\"easeInOut\" data-masterspeed=\"2000\" data-rotate=\"0\"  data-fstransition=\"fade\" data-fsmasterspeed=\"1500\" data-fsslotamount=\"7\">
                                <img src=\"images/slider-1.jpg\" alt=\"slider\" data-bgposition=\"center center\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\" data-bgparallax=\"10\" class=\"rev-slidebg\" data-no-retina>
                                <div class=\"tp-caption NotGeneric-Title tp-resizeme rs-parallaxlevel-0\" id=\"slide-layer-5\"
                                     data-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\"
                                     data-y=\"['middle','middle','middle','middle']\" data-voffset=\"['-200','-130','-110','-80']\"
                                     data-fontsize=\"['38','30','25','16']\"
                                     data-lineheight=\"['24','24','24','24']\"
                                     data-width=\"none\"
                                     data-height=\"none\"
                                     data-whitespace=\"nowrap\"
                                     data-transform_idle=\"o:1;\"
                                     data-transform_in=\"y:-50px;opacity:0;s:1000;e:Power4.easeOut;\"
                                     data-transform_out=\"opacity:0;s:3000;e:Power4.easeIn;s:3000;e:Power4.easeIn;\"
                                     data-mask_in=\"x:0px;y:0px;s:inherit;e:inherit;\"
                                     data-mask_out=\"x:inherit;y:inherit;s:inherit;e:inherit;\"
                                     data-start=\"1000\"
                                     data-splitin=\"chars\"
                                     data-splitout=\"none\"
                                     data-responsive_offset=\"on\"
                                     data-elementdelay=\"0.05\"
                                     style=\"z-index: 5; white-space: nowrap; letter-spacing: 3.04px; color:#333; font-weight: 700; font-family: 'Montserrat', sans-serif; text-transform: uppercase;\">Rise with style
                                </div>
                                <div class=\"tp-caption NotGeneric-Title tp-resizeme rs-parallaxlevel-0\" id=\"slide-layer-6\"
                                     data-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\"
                                     data-y=\"['middle','middle','middle','middle']\" data-voffset=\"['-135','-80','-60','-50']\"
                                     data-fontsize=\"['18','18','18','14']\"
                                     data-lineheight=\"['26','26','26','26']\"
                                     data-width=\"['750','750','738','450']\"
                                     data-height=\"none\"
                                     data-whitespace=\"nowrap\"
                                     data-transform_idle=\"o:1;\"
                                     data-transform_in=\"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;\"
                                     data-transform_out=\"y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\"
                                     data-mask_in=\"x:0px;y:0px;s:inherit;e:inherit;\"
                                     data-mask_out=\"x:inherit;y:inherit;s:inherit;e:inherit;\"
                                     data-start=\"1000\"
                                     data-splitin=\"chars\"
                                     data-splitout=\"none\"
                                     data-responsive_offset=\"on\"
                                     data-elementdelay=\"0.05\"
                                     style=\"z-index: 5; white-space: nowrap; letter-spacing: 1.5px; color:#777; font-weight: normal; font-family: 'Lato', sans-serif;\">» vous permet de dénicher les pièces dont vous avez besoin, plus besoin de faire le tour des magasins et des sites web pour trouver la petite robe noire ou la tenue du samedi soir
                                </div>
                                <div class=\"tp-caption NotGeneric-Title tp-resizeme rs-parallaxlevel-0\" id=\"slide-layer-7\"
                                     data-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\"
                                     data-y=\"['middle','middle','middle','middle']\" data-voffset=\"['-110','-50','-35','-30']\"
                                     data-fontsize=\"['18','18','18','14']\"
                                     data-lineheight=\"['26','26','26','26']\"
                                     data-height=\"none\"
                                     data-whitespace=\"nowrap\"
                                     data-transform_idle=\"o:1;\"
                                     data-transform_in=\"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;\"
                                     data-transform_out=\"y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\"
                                     data-mask_in=\"x:0px;y:0px;s:inherit;e:inherit;\"
                                     data-mask_out=\"x:inherit;y:inherit;s:inherit;e:inherit;\"
                                     data-start=\"1000\"
                                     data-splitin=\"chars\"
                                     data-splitout=\"none\"
                                     data-responsive_offset=\"on\"
                                     data-elementdelay=\"0.05\"
                                     style=\"z-index: 5; white-space: nowrap; letter-spacing: 1.5px; color:#777; font-weight: normal; font-family: 'Lato', sans-serif;\">Un styliste expérimenté vous sélectionnera des pièces adéquates à votre morphologie et style et en un click vous pourriez les acheter directement du site de la marque.

                                </div>
                                <div class=\"tp-caption NotGeneric-Button rev-btn  rs-parallaxlevel-0\" id=\"slide-layer-8\"
                                     data-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\"
                                     data-y=\"['middle','middle','middle','middle']\" data-voffset=\"['-30','20','40','30']\"
                                     data-fontsize=\"['14','14','14','12']\"
                                     data-lineheight=\"['24','24','24','24']\"
                                     data-width=\"none\"
                                     data-height=\"none\"
                                     data-whitespace=\"nowrap\"
                                     data-transform_idle=\"o:1;\"
                                     data-transform_hover=\"o:1;rX:0;rY:0;rZ:0;z:0;s:100;e:Power1.easeInOut;\"
                                     data-style_hover=\"c:rgb(255, 255, 255);bg:rgba(182, 121, 95);\"
                                     data-transform_in=\"x:[-100%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2500;e:Power3.easeInOut;\"
                                     data-transform_out=\"auto:auto;s:1000;e:Power2.easeInOut;\"
                                     data-start=\"2000\"
                                     data-splitin=\"none\"
                                     data-splitout=\"none\"
                                     data-actions='[{\"event\":\"click\",\"action\":\"scrollbelow\",\"offset\":\"0px\"}]'
                                     data-responsive_offset=\"on\"
                                     data-responsive=\"off\"
                                     style=\"z-index: 10; padding:8px 38px; letter-spacing:0.56px; color: #b6795f; border-color: #b6795f; font-family: 'Montserrat', sans-serif; text-transform:uppercase; background-color:transparent; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;\">Shop Now
                                </div>
                            </li>
                        </ul>
            </div><!-- END OF SLIDER WRAPPER -->
            <div class=\"goto-next\"><a href=\"#category-section\"><i class=\"icon icon-Mouse bounce\"></i></a></div>
        </div><!-- Slider Section 1 /- -->

        <!-- Services Section -->

        <!-- Category Section -->

        <!-- Product Section -->
        <div id=\"product-section\" style=\"\" class=\"product-section container-fluid no-padding\">
            <!-- Container -->
            <div class=\"container\">
                <div class=\"row\">
                    <!-- Section Header -->
                    <div style=\"padding-top: 20px\" class=\"section-header\">
                        <h3>Nos Produits</h3>
                        <img src=\"images/section-seprator.png\" alt=\"section-seprator\" />
                    </div><!-- Section Header /- -->
                    <ul id=\"filters\" class=\"products-categories no-left-padding\">
                        <li><a data-filter=\"*\" class=\"active\" href=\"#\">All Products</a></li>
                        <li><a data-filter=\".design\" href=\"#\">jewellery</a></li>
                        <li><a data-filter=\".video\" href=\"#\">books</a></li>
                        <li><a data-filter=\".photography\" href=\"#\">watches</a></li>
                        <li><a data-filter=\".web\" href=\"#\">shoes</a></li>
                        <li><a data-filter=\".design\" href=\"#\">electronics</a></li>
                        <li><a data-filter=\".photography\" href=\"#\">mobiles</a></li>
                        <li><a data-filter=\".video\" href=\"#\">more<i class=\"fa fa-angle-down\"></i></a></li>
                    </ul>
                    <div class=\"input-group\">
                        <input class=\"form-control\" placeholder=\"Search You Wants\" type=\"text\">
                        <span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-search\" title=\"Search\" type=\"button\"><i class=\"icon icon-Search\"></i></button>
\t\t\t\t\t\t\t</span>
                    </div>
                    <!-- Products -->
                    <ul class=\"products\">
                        <!-- Product -->
                        <li class=\"product design\">
                            <a href=\"#\">
                                <img src=\"images/product-1.jpg\" alt=\"Product\" />
                                <h5>Stylish Chair</h5>
                                <span class=\"price\"><del>\$200</del>\$139</span>
                            </a>
                            <div class=\"wishlist-box\">
                                <a href=\"#\"><i class=\"fa fa-arrows-alt\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-heart-o\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-search\"></i></a>
                            </div>
                            <a href=\"#\" class=\"addto-cart\" title=\"Add To Cart\">Add To Cart</a>
                        </li><!-- Product /- -->

                        <!-- Product -->
                        <li class=\"product video\">
                            <a href=\"#\">
                                <img src=\"images/product-2.jpg\" alt=\"Product\" />
                                <h5>men's casual shoes</h5>
                                <span class=\"price\"><del>\$150</del>\$85</span>
                            </a>
                            <div class=\"wishlist-box\">
                                <a href=\"#\"><i class=\"fa fa-arrows-alt\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-heart-o\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-search\"></i></a>
                            </div>
                            <a href=\"#\" class=\"addto-cart\" title=\"Add To Cart\">Add To Cart</a>
                        </li><!-- Product /- -->

                        <!-- Product -->
                        <li class=\"product photography\">
                            <a href=\"#\">
                                <img src=\"images/product-3.jpg\" alt=\"Product\" />
                                <h5>Sun glass</h5>
                                <span class=\"price\"><del>\$100</del>\$35</span>
                            </a>
                            <div class=\"wishlist-box\">
                                <a href=\"#\"><i class=\"fa fa-arrows-alt\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-heart-o\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-search\"></i></a>
                            </div>
                            <a href=\"#\" class=\"addto-cart\" title=\"Add To Cart\">Add To Cart</a>
                        </li><!-- Product /- -->

                        <!-- Product -->
                        <li class=\"product web\">
                            <a href=\"#\">
                                <img src=\"images/product-4.jpg\" alt=\"Product\" />
                                <h5>tourist bags</h5>
                                <span class=\"price\"><del>\$350</del>\$279</span>
                            </a>
                            <div class=\"wishlist-box\">
                                <a href=\"#\"><i class=\"fa fa-arrows-alt\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-heart-o\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-search\"></i></a>
                            </div>
                            <a href=\"#\" class=\"addto-cart\" title=\"Add To Cart\">Add To Cart</a>
                        </li><!-- Product /- -->

                        <!-- Product -->
                        <li class=\"product design\">
                            <a href=\"#\">
                                <img src=\"images/product-5.jpg\" alt=\"Product\" />
                                <h5>mobile phone</h5>
                                <span class=\"price\"><del>\$450</del>\$359</span>
                            </a>
                            <div class=\"wishlist-box\">
                                <a href=\"#\"><i class=\"fa fa-arrows-alt\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-heart-o\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-search\"></i></a>
                            </div>
                            <a href=\"#\" class=\"addto-cart\" title=\"Add To Cart\">Add To Cart</a>
                        </li><!-- Product /- -->

                        <!-- Product -->
                        <li class=\"product video\">
                            <a href=\"#\">
                                <img src=\"images/product-6.jpg\" alt=\"Product\" />
                                <h5>men's winter coat</h5>
                                <span class=\"price\"><del>\$220</del>\$129</span>
                            </a>
                            <div class=\"wishlist-box\">
                                <a href=\"#\"><i class=\"fa fa-arrows-alt\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-heart-o\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-search\"></i></a>
                            </div>
                            <a href=\"#\" class=\"addto-cart\" title=\"Add To Cart\">Add To Cart</a>
                        </li><!-- Product /- -->

                        <!-- Product -->
                        <li class=\"product photography\">
                            <a href=\"#\">
                                <img src=\"images/product-7.jpg\" alt=\"Product\" />
                                <h5>Model x12 computer</h5>
                                <span class=\"price\"><del>\$850</del>\$550</span>
                            </a>
                            <div class=\"wishlist-box\">
                                <a href=\"#\"><i class=\"fa fa-arrows-alt\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-heart-o\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-search\"></i></a>
                            </div>
                            <a href=\"#\" class=\"addto-cart\" title=\"Add To Cart\">Add To Cart</a>
                        </li><!-- Product /- -->

                        <!-- Product -->
                        <li class=\"product web\">
                            <a href=\"#\">
                                <img src=\"images/product-8.jpg\" alt=\"Product\" />
                                <h5>Stylish headset</h5>
                                <span class=\"price\"><del>\$50</del>\$29</span>
                            </a>
                            <div class=\"wishlist-box\">
                                <a href=\"#\"><i class=\"fa fa-arrows-alt\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-heart-o\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-search\"></i></a>
                            </div>
                            <a href=\"#\" class=\"addto-cart\" title=\"Add To Cart\">Add To Cart</a>
                        </li><!-- Product /- -->
                    </ul><!-- Products /- -->
                </div><!-- Row /- -->

            </div><!-- Container /- -->
        </div><!-- Product Section /- -->

        <!-- Collection Section1 -->

        <!-- Testimonial Section -->
        <div class=\"testimonial-section testimonial-section1 container-fluid\">
            <!-- Container -->
            <div class=\"container\">
                <!-- Section Header -->
                <div class=\"section-header\">
                    <h3>Qui sommes-nous?</h3>
                    <p>Tout a commencé lorsque nous avons constaté que le shopping est devenu éprouvant pour la plupart des femmes: une infinité d’options, une manifestation de la contrefaçon, une qualité en baisse, etc.  Nous avons donc créé «Rise with style» pour aider les femmes à dénichez les meilleures pièces sans perdre du temps à parcourir des centaines de sites web.
                        «On vous aide à passer moins de temps dans le shopping pour vous concentrer à passer plus de temps pour créer, aimer et briller»
                    </p>
                    <img src=\"images/section-seprator.png\" alt=\"section-seprator\" />
                </div><!-- Section Header /- -->
                <!-- Main Carousel -->
            </div><!-- Container /- -->
        </div><!-- Testimonial Section /- -->

        <!-- Latest Blog -->
            <div class=\"contact-us container-fluid no-padding\">

            <div class=\"form-detail\">
                <!-- Section Header -->
                <div class=\"section-header\">
                    <h3>Envoyer un Message</h3>
                    <p>Feel Free To Say Everything And Ask Questions</p>
                </div><!-- Section Header /- -->
                <form>
                    <div class=\"col-md-6 col-sm-6 col-xs-12 form-group\">
                        <input type=\"text\" name=\"contact-name\" class=\"form-control\" id=\"input_name\" placeholder=\"Full Name *\" required/>
                    </div>
                    <div class=\"col-md-6 col-sm-6 col-xs-12 form-group\">
                        <input type=\"text\" name=\"contact-email\" class=\"form-control\" id=\"input_email\" placeholder=\"Email Address *\" required/>
                    </div>
                    <div class=\"col-md-12 col-sm-12 col-xs-12 form-group\">
                        <input type=\"text\" required=\"\" placeholder=\"Subject *\" id=\"input_subject\" class=\"form-control\" name=\"contact-subject\">
                    </div>
                    <div class=\"form-group col-md-12 col-sm-12 col-xs-12\">
                        <textarea placeholder=\"Type Your Message . . .\" id=\"textarea_message\" name=\"contact-message\" rows=\"5\" class=\"form-control\"></textarea>
                    </div>
                    <div class=\"form-group col-md-12 col-sm-12 col-xs-12\">
                        <button title=\"Submit\" type=\"submit\" id=\"btn_submit\" name=\"post\">Send Message</button>
                    </div>
                    <div id=\"alert-msg\" class=\"alert-msg\"></div>
                </form>
            </div></div>
        <!-- Selling -->

        <!-- Clients -->
    </main>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 523
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 524
        echo "    <footer id=\"footer-main\" class=\"footer-main container-fluid\">
        <!-- Container -->
        <div class=\"container\">
            <div class=\"row\">
                <!-- Widget About -->
                <aside class=\"col-md-3 col-sm-6 col-xs-6 ftr-widget widget_about\">
                    <a href=\"index-2.html\" title=\"rise with style\">Rise <span>With</span>Style</a>
                    <div class=\"info\">
                        <p><i class=\"icon icon-Pointer\"></i>Max Shop, 65 Huge Street Melbourne, 2850 Australia.</p>
                        <p><i class=\"icon icon-Phone2\"></i><a href=\"tel:(11)1234567890\" title=\"Phone\" class=\"phone\">(11) 123 456 7890</a></p>
                        <p><i class=\"icon icon-Imbox\"></i><a href=\"mailto:info@maxshop.com\" title=\"info@maxshop.com\">info@maxshop.com</a></p>
                    </div>
                </aside><!-- Widget About /- -->
                <!-- Widget Links -->
                <aside class=\"col-md-3 col-sm-6 col-xs-6 ftr-widget widget_links\">
                    <h3 class=\"widget-title\">Popular Links</h3>
                    <ul>
                        <li><a href=\"#product-section\" title=\"Popular Products\">Popular Products</a></li>
                        <li><a href=\"#selling\" title=\"Best Selling\">Best Selling</a></li>
                        <li><a href=\"about.html\" title=\"About Us\">About Us</a></li>
                        <li><a href=\"#dealing\" title=\"Deal Of The Day\">Deal Of The Day</a></li>
                        <li><a href=\"#collection\" title=\"Product Collections\">Product Collections</a></li>
                        <li><a href=\"contact-us.html\" title=\"Contact Us\">Contact Us</a></li>
                    </ul>
                </aside><!-- Widget Links /- -->
                <!-- Widget Account -->
                <aside class=\"col-md-3 col-sm-6 col-xs-6 ftr-widget widget_links widget_account\">
                    <h3 class=\"widget-title\">my account</h3>
                    <ul>
                        <li><a href=\"#\" title=\"My Order Details\">My Order Details</a></li>
                        <li><a href=\"#\" title=\"My credit Offers\">My credit Offers</a></li>
                        <li><a href=\"#\" title=\"My addresses\">My addresses</a></li>
                        <li><a href=\"#\" title=\"My Personal Details\">My Personal Details</a></li>
                        <li><a href=\"#\" title=\"My Account Details\">My Account Details</a></li>
                    </ul>
                </aside><!-- Widget Account /- -->
                <!-- Widget Newsletter -->
                <aside class=\"col-md-3 col-sm-6 col-xs-6 ftr-widget widget_newsletter\">
                    <h3 class=\"widget-title\">newsletter</h3>
                    <div class=\"input-group\">
                        <input class=\"form-control\" placeholder=\"email address\" type=\"text\">
                        <span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-paper-plane-o\"></i></button>
\t\t\t\t\t\t\t</span>
                    </div>
                    <h5>Get New Updates From Our Collections</h5>
                    <h3 class=\"widget-title widget-title-1\">Follow Us</h3>
                    <ul class=\"social\">
                        <li><a href=\"#\" title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a></li>
                        <li><a href=\"#\" title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a></li>
                        <li><a href=\"#\" title=\"Linkedin\"><i class=\"fa fa-linkedin\"></i></a></li>
                        <li><a href=\"#\" title=\"Tumblr\"><i class=\"fa fa-tumblr\"></i></a></li>
                        <li><a href=\"#\" title=\"Vimeo\"><i class=\"fa fa-vimeo\"></i></a></li>
                    </ul>
                </aside><!-- Widget Newsletter /- -->
            </div>
            <div class=\"copyright-section\">
                <div class=\"coyright-content\">
                    <p>&copy; Max shop. all rights reserved</p>
                </div>
                <ul>
                    <li><a href=\"#\" title=\"Delivery Information\">Delivery Information</a></li>
                    <li><a href=\"#\" title=\"Privacy Policy\">Privacy Policy</a></li>
                    <li><a href=\"#\" title=\"Terms & Condition\">Terms & Condition</a></li>
                </ul>
            </div>
        </div><!-- Container /- -->
    </footer><!-- Footer Main /- -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  726 => 524,  719 => 523,  323 => 133,  316 => 132,  309 => 55,  302 => 54,  288 => 614,  282 => 611,  278 => 610,  274 => 609,  270 => 608,  266 => 607,  262 => 606,  258 => 605,  252 => 602,  247 => 600,  241 => 597,  235 => 593,  232 => 523,  230 => 132,  207 => 112,  198 => 105,  195 => 104,  183 => 95,  175 => 89,  173 => 88,  139 => 56,  137 => 54,  132 => 52,  125 => 48,  121 => 47,  117 => 46,  113 => 45,  107 => 42,  101 => 39,  97 => 38,  91 => 35,  83 => 30,  77 => 27,  71 => 24,  65 => 21,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class=\"ie6\"> <![endif]-->
<!--[if IE 7 ]>    <html class=\"ie7\"> <![endif]-->
<!--[if IE 8 ]>    <html class=\"ie8\"> <![endif]-->
<!--[if IE 9 ]>    <html class=\"ie9\"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang=\"en\" class=\"\"><!--<![endif]-->

<!-- Mirrored from premiumlayers.net/demo/html/maxshop/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Aug 2020 11:27:34 GMT -->
<head>
    <meta charset=\"utf-8\">

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Rise with style</title>

    <!-- Standard Favicon -->
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('images/favicon.ico') }}\" />

    <!-- For iPhone 4 Retina display: -->
    <link rel=\"apple-touch-icon-precomposed\" href=\"{{ asset('images/apple-touch-icon-114x114-precomposed.png') }}\">

    <!-- For iPad: -->
    <link rel=\"apple-touch-icon-precomposed\" href=\"{{ asset('images/apple-touch-icon-72x72-precomposed.html') }}\">

    <!-- For iPhone: -->
    <link rel=\"apple-touch-icon-precomposed\" href=\"{{ asset('images/apple-touch-icon-57x57-precomposed.png') }}\">

    <!-- Library - Google Font Familys -->
    <link href=\"https://fonts.googleapis.com/css?family=Arizonia|Crimson+Text:400,400i,600,600i,700,700i|Lato:100,100i,300,300i,400,400i,700,700i,900,900i|Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i\" rel=\"stylesheet\">

    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('revolution/css/settings.css') }}\">

    <!-- RS5.0 Layers and Navigation Styles -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('revolution/css/layers.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('revolution/css/navigation.css') }}\">

    <!-- Library - Bootstrap v3.3.5 -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('libraries/lib.css') }}\">

    <!-- Custom - Common CSS -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/plugins.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/navigation-menu.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/shortcode.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('style.css') }}\">


    <!--[if lt IE 9]>
    <script src=\"{{ asset('js/html5/respond.min.js') }}\"></script>
    <![endif]-->
{% block scripts %}
    {% endblock %}
</head>

<body data-offset=\"200\" data-spy=\"scroll\" data-target=\".ow-navigation\">
<div class=\"main-container\">
    <!-- Loader -->
    <div id=\"site-loader\" class=\"load-complete\">
        <div class=\"loader\">
            <div class=\"loader-inner ball-clip-rotate\">
                <div></div>
            </div>
        </div>
    </div><!-- Loader /- -->

    <!-- Header -->
    <header class=\"header-section container-fluid no-padding\">
        <!-- Top Header -->
        <!-- Menu Block -->
        <div class=\"container-fluid no-padding menu-block\">
            <!-- Container -->
            <div class=\"container\">
                <!-- nav -->
                <nav class=\"navbar navbar-default ow-navigation\">
                    <div class=\"navbar-header\">
                        <button aria-controls=\"navbar\" aria-expanded=\"false\" data-target=\"#navbar\" data-toggle=\"collapse\" class=\"navbar-toggle collapsed\" type=\"button\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <a href=\"index-2.html\" class=\"navbar-brand\" style=\"color: #FF8661\">Rise <span>With </span>Style</a>
                    </div>
                    <!-- Menu Icon -->
                    {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                    <div style=\"color: #FF8661\" class=\"menu-icon\">
                        <ul class=\"cart\">
                            <li>
                                <ul class=\"dropdown-menu no-padding\">
                                    <li style=\"color: #696666\" class=\"button\">
                                        <a href=\"#\" title=\"View Cart\">Profile</a>
                                        <a href=\"{{ path('fos_user_security_logout') }}\" title=\"Log out\">Log out</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href=\"#\" title=\"User\"><i class=\"icon icon-User\"></i></a></li>
                        </ul>
                    </div><!-- Menu Icon /- -->

                    {% else %}
                    {% endif %}
                    <div class=\"navbar-collapse collapse navbar-right\" id=\"navbar\">
                        <ul class=\"nav navbar-nav\">
                            <li class=\"dropdown\">
                                <a href=\"#\" title=\"Home\" class=\"dropdown-toggle\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\" style=\"color: #FF8661\">Accueil</a>

                            </li>
                            <li class=\"dropdown\">
                                <a href=\"{{ path('formule') }}\" title=\"Home\" class=\"dropdown-toggle\" role=\"button\" aria-haspopup=\"true\" style=\"color: #FF8661\" aria-expanded=\"false\">Formules et tarifs </a>

                            </li>
                            <li><a href=\"#product-section\" style=\"color: #FF8661\" title=\"Products\">FAQ</a></li>
                            <li class=\"dropdown\">
                                <a href=\"shop.html\" title=\"Shop\" class=\"dropdown-toggle\" role=\"button\" style=\"color: #FF8661\" aria-haspopup=\"true\" aria-expanded=\"false\">Profile</a>
                                <i class=\"ddl-switch fa fa-angle-down\"></i>
                                <ul class=\"dropdown-menu\">
                                </ul>
                            </li>
                            <li class=\"dropdown\">
                                <a href=\"blog.html\" title=\"Blog\" class=\"dropdown-toggle\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\" style=\"color: #FF8661\">Contact</a>

                        </ul>
                    </div><!--/.nav-collapse -->
                </nav><!-- nav /- -->
                <!-- Search Box -->
            </div><!-- Container /- -->
        </div><!-- Menu Block /- -->
    </header><!-- Header /- -->
    {% block body %}

    <main>
        <!-- Slider Section 1 -->
        <div id=\"home-revslider\" class=\"slider-section container-fluid no-padding\">
            <!-- START REVOLUTION SLIDER 5.0 -->
            <div class=\"rev_slider_wrapper\">
                    <div id=\"home-slider1\" class=\"rev_slider\" data-version=\"5.0\">
                        <ul>
                            <li data-transition=\"zoomout\" data-slotamount=\"default\"  data-easein=\"easeInOut\" data-easeout=\"easeInOut\" data-masterspeed=\"2000\" data-rotate=\"0\"  data-fstransition=\"fade\" data-fsmasterspeed=\"1500\" data-fsslotamount=\"7\">
                                <img src=\"images/slider-1.jpg\" alt=\"slider\" data-bgposition=\"center center\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\" data-bgparallax=\"10\" class=\"rev-slidebg\" data-no-retina>
                                <div class=\"tp-caption NotGeneric-Title tp-resizeme rs-parallaxlevel-0\" id=\"slide-layer-1\"
                                     data-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\"
                                     data-y=\"['middle','middle','middle','middle']\" data-voffset=\"['-200','-130','-110','-80']\"
                                     data-fontsize=\"['38','30','25','16']\"
                                     data-lineheight=\"['24','24','24','24']\"
                                     data-width=\"none\"
                                     data-height=\"none\"
                                     data-whitespace=\"nowrap\"
                                     data-transform_idle=\"o:1;\"
                                     data-transform_in=\"y:-50px;opacity:0;s:1000;e:Power4.easeOut;\"
                                     data-transform_out=\"opacity:0;s:3000;e:Power4.easeIn;s:3000;e:Power4.easeIn;\"
                                     data-mask_in=\"x:0px;y:0px;s:inherit;e:inherit;\"
                                     data-mask_out=\"x:inherit;y:inherit;s:inherit;e:inherit;\"
                                     data-start=\"1000\"
                                     data-splitin=\"chars\"
                                     data-splitout=\"none\"
                                     data-responsive_offset=\"on\"
                                     data-elementdelay=\"0.05\"
                                     style=\"z-index: 5; white-space: nowrap; letter-spacing: 3.04px; color:#333; font-weight: 700; font-family: 'Montserrat', sans-serif; text-transform: uppercase;\">Rise with style
                                </div>
                                <div class=\"tp-caption NotGeneric-Title tp-resizeme rs-parallaxlevel-0\" id=\"slide-layer-2\"
                                     data-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\"
                                     data-y=\"['middle','middle','middle','middle']\" data-voffset=\"['-135','-80','-60','-50']\"
                                     data-fontsize=\"['18','18','18','14']\"
                                     data-lineheight=\"['26','26','26','26']\"
                                     data-width=\"['750','750','738','450']\"
                                     data-height=\"none\"
                                     data-whitespace=\"nowrap\"
                                     data-transform_idle=\"o:1;\"
                                     data-transform_in=\"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;\"
                                     data-transform_out=\"y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\"
                                     data-mask_in=\"x:0px;y:0px;s:inherit;e:inherit;\"
                                     data-mask_out=\"x:inherit;y:inherit;s:inherit;e:inherit;\"
                                     data-start=\"1000\"
                                     data-splitin=\"chars\"
                                     data-splitout=\"none\"
                                     data-responsive_offset=\"on\"
                                     data-elementdelay=\"0.05\"
                                     style=\"z-index: 5; white-space: nowrap; letter-spacing: 1.5px; color:#777; font-weight: normal; font-family: 'Lato', sans-serif;\">vous permet de dénicher les pièces dont vous avez besoin, plus besoin de faire le tour des magasins et des sites web pour trouver la petite robe noire ou la tenue du samedi soir
                                </div>
                                <div class=\"tp-caption NotGeneric-Title tp-resizeme rs-parallaxlevel-0\" id=\"slide-layer-3\"
                                     data-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\"
                                     data-y=\"['middle','middle','middle','middle']\" data-voffset=\"['-110','-50','-35','-30']\"
                                     data-fontsize=\"['18','18','18','14']\"
                                     data-lineheight=\"['26','26','26','26']\"
                                     data-height=\"none\"
                                     data-whitespace=\"nowrap\"
                                     data-transform_idle=\"o:1;\"
                                     data-transform_in=\"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;\"
                                     data-transform_out=\"y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\"
                                     data-mask_in=\"x:0px;y:0px;s:inherit;e:inherit;\"
                                     data-mask_out=\"x:inherit;y:inherit;s:inherit;e:inherit;\"
                                     data-start=\"1000\"
                                     data-splitin=\"chars\"
                                     data-splitout=\"none\"
                                     data-responsive_offset=\"on\"
                                     data-elementdelay=\"0.05\"
                                     style=\"z-index: 5; white-space: nowrap; letter-spacing: 1.5px; color:#777; font-weight: normal; font-family: 'Lato', sans-serif;\">Un styliste expérimenté vous sélectionnera des pièces adéquates à votre morphologie et style et en un click vous pourriez les acheter directement du site de la marque.

                                </div>
                                <div class=\"tp-caption NotGeneric-Button rev-btn  rs-parallaxlevel-0\" id=\"slide-layer-4\"
                                     data-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\"
                                     data-y=\"['middle','middle','middle','middle']\" data-voffset=\"['-30','20','40','30']\"
                                     data-fontsize=\"['14','14','14','12']\"
                                     data-lineheight=\"['24','24','24','24']\"
                                     data-width=\"none\"
                                     data-height=\"none\"
                                     data-whitespace=\"nowrap\"
                                     data-transform_idle=\"o:1;\"
                                     data-transform_hover=\"o:1;rX:0;rY:0;rZ:0;z:0;s:100;e:Power1.easeInOut;\"
                                     data-style_hover=\"c:rgb(255, 255, 255);bg:rgba(182, 121, 95);\"
                                     data-transform_in=\"x:[-100%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2500;e:Power3.easeInOut;\"
                                     data-transform_out=\"auto:auto;s:1000;e:Power2.easeInOut;\"
                                     data-start=\"2000\"
                                     data-splitin=\"none\"
                                     data-splitout=\"none\"
                                     data-actions='[{\"event\":\"click\",\"action\":\"scrollbelow\",\"offset\":\"0px\"}]'
                                     data-responsive_offset=\"on\"
                                     data-responsive=\"off\"
                                     style=\"z-index: 10; padding:8px 38px; letter-spacing:0.56px; color: #b6795f; border-color: #b6795f; font-family: 'Montserrat', sans-serif; text-transform:uppercase; background-color:transparent; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;\">Shop Now
                                </div>
                            </li>

                            <li data-transition=\"zoomout\" data-slotamount=\"default\"  data-easein=\"easeInOut\" data-easeout=\"easeInOut\" data-masterspeed=\"2000\" data-rotate=\"0\"  data-fstransition=\"fade\" data-fsmasterspeed=\"1500\" data-fsslotamount=\"7\">
                                <img src=\"images/slider-1.jpg\" alt=\"slider\" data-bgposition=\"center center\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\" data-bgparallax=\"10\" class=\"rev-slidebg\" data-no-retina>
                                <div class=\"tp-caption NotGeneric-Title tp-resizeme rs-parallaxlevel-0\" id=\"slide-layer-5\"
                                     data-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\"
                                     data-y=\"['middle','middle','middle','middle']\" data-voffset=\"['-200','-130','-110','-80']\"
                                     data-fontsize=\"['38','30','25','16']\"
                                     data-lineheight=\"['24','24','24','24']\"
                                     data-width=\"none\"
                                     data-height=\"none\"
                                     data-whitespace=\"nowrap\"
                                     data-transform_idle=\"o:1;\"
                                     data-transform_in=\"y:-50px;opacity:0;s:1000;e:Power4.easeOut;\"
                                     data-transform_out=\"opacity:0;s:3000;e:Power4.easeIn;s:3000;e:Power4.easeIn;\"
                                     data-mask_in=\"x:0px;y:0px;s:inherit;e:inherit;\"
                                     data-mask_out=\"x:inherit;y:inherit;s:inherit;e:inherit;\"
                                     data-start=\"1000\"
                                     data-splitin=\"chars\"
                                     data-splitout=\"none\"
                                     data-responsive_offset=\"on\"
                                     data-elementdelay=\"0.05\"
                                     style=\"z-index: 5; white-space: nowrap; letter-spacing: 3.04px; color:#333; font-weight: 700; font-family: 'Montserrat', sans-serif; text-transform: uppercase;\">Rise with style
                                </div>
                                <div class=\"tp-caption NotGeneric-Title tp-resizeme rs-parallaxlevel-0\" id=\"slide-layer-6\"
                                     data-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\"
                                     data-y=\"['middle','middle','middle','middle']\" data-voffset=\"['-135','-80','-60','-50']\"
                                     data-fontsize=\"['18','18','18','14']\"
                                     data-lineheight=\"['26','26','26','26']\"
                                     data-width=\"['750','750','738','450']\"
                                     data-height=\"none\"
                                     data-whitespace=\"nowrap\"
                                     data-transform_idle=\"o:1;\"
                                     data-transform_in=\"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;\"
                                     data-transform_out=\"y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\"
                                     data-mask_in=\"x:0px;y:0px;s:inherit;e:inherit;\"
                                     data-mask_out=\"x:inherit;y:inherit;s:inherit;e:inherit;\"
                                     data-start=\"1000\"
                                     data-splitin=\"chars\"
                                     data-splitout=\"none\"
                                     data-responsive_offset=\"on\"
                                     data-elementdelay=\"0.05\"
                                     style=\"z-index: 5; white-space: nowrap; letter-spacing: 1.5px; color:#777; font-weight: normal; font-family: 'Lato', sans-serif;\">» vous permet de dénicher les pièces dont vous avez besoin, plus besoin de faire le tour des magasins et des sites web pour trouver la petite robe noire ou la tenue du samedi soir
                                </div>
                                <div class=\"tp-caption NotGeneric-Title tp-resizeme rs-parallaxlevel-0\" id=\"slide-layer-7\"
                                     data-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\"
                                     data-y=\"['middle','middle','middle','middle']\" data-voffset=\"['-110','-50','-35','-30']\"
                                     data-fontsize=\"['18','18','18','14']\"
                                     data-lineheight=\"['26','26','26','26']\"
                                     data-height=\"none\"
                                     data-whitespace=\"nowrap\"
                                     data-transform_idle=\"o:1;\"
                                     data-transform_in=\"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;\"
                                     data-transform_out=\"y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\"
                                     data-mask_in=\"x:0px;y:0px;s:inherit;e:inherit;\"
                                     data-mask_out=\"x:inherit;y:inherit;s:inherit;e:inherit;\"
                                     data-start=\"1000\"
                                     data-splitin=\"chars\"
                                     data-splitout=\"none\"
                                     data-responsive_offset=\"on\"
                                     data-elementdelay=\"0.05\"
                                     style=\"z-index: 5; white-space: nowrap; letter-spacing: 1.5px; color:#777; font-weight: normal; font-family: 'Lato', sans-serif;\">Un styliste expérimenté vous sélectionnera des pièces adéquates à votre morphologie et style et en un click vous pourriez les acheter directement du site de la marque.

                                </div>
                                <div class=\"tp-caption NotGeneric-Button rev-btn  rs-parallaxlevel-0\" id=\"slide-layer-8\"
                                     data-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\"
                                     data-y=\"['middle','middle','middle','middle']\" data-voffset=\"['-30','20','40','30']\"
                                     data-fontsize=\"['14','14','14','12']\"
                                     data-lineheight=\"['24','24','24','24']\"
                                     data-width=\"none\"
                                     data-height=\"none\"
                                     data-whitespace=\"nowrap\"
                                     data-transform_idle=\"o:1;\"
                                     data-transform_hover=\"o:1;rX:0;rY:0;rZ:0;z:0;s:100;e:Power1.easeInOut;\"
                                     data-style_hover=\"c:rgb(255, 255, 255);bg:rgba(182, 121, 95);\"
                                     data-transform_in=\"x:[-100%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2500;e:Power3.easeInOut;\"
                                     data-transform_out=\"auto:auto;s:1000;e:Power2.easeInOut;\"
                                     data-start=\"2000\"
                                     data-splitin=\"none\"
                                     data-splitout=\"none\"
                                     data-actions='[{\"event\":\"click\",\"action\":\"scrollbelow\",\"offset\":\"0px\"}]'
                                     data-responsive_offset=\"on\"
                                     data-responsive=\"off\"
                                     style=\"z-index: 10; padding:8px 38px; letter-spacing:0.56px; color: #b6795f; border-color: #b6795f; font-family: 'Montserrat', sans-serif; text-transform:uppercase; background-color:transparent; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;\">Shop Now
                                </div>
                            </li>
                        </ul>
            </div><!-- END OF SLIDER WRAPPER -->
            <div class=\"goto-next\"><a href=\"#category-section\"><i class=\"icon icon-Mouse bounce\"></i></a></div>
        </div><!-- Slider Section 1 /- -->

        <!-- Services Section -->

        <!-- Category Section -->

        <!-- Product Section -->
        <div id=\"product-section\" style=\"\" class=\"product-section container-fluid no-padding\">
            <!-- Container -->
            <div class=\"container\">
                <div class=\"row\">
                    <!-- Section Header -->
                    <div style=\"padding-top: 20px\" class=\"section-header\">
                        <h3>Nos Produits</h3>
                        <img src=\"images/section-seprator.png\" alt=\"section-seprator\" />
                    </div><!-- Section Header /- -->
                    <ul id=\"filters\" class=\"products-categories no-left-padding\">
                        <li><a data-filter=\"*\" class=\"active\" href=\"#\">All Products</a></li>
                        <li><a data-filter=\".design\" href=\"#\">jewellery</a></li>
                        <li><a data-filter=\".video\" href=\"#\">books</a></li>
                        <li><a data-filter=\".photography\" href=\"#\">watches</a></li>
                        <li><a data-filter=\".web\" href=\"#\">shoes</a></li>
                        <li><a data-filter=\".design\" href=\"#\">electronics</a></li>
                        <li><a data-filter=\".photography\" href=\"#\">mobiles</a></li>
                        <li><a data-filter=\".video\" href=\"#\">more<i class=\"fa fa-angle-down\"></i></a></li>
                    </ul>
                    <div class=\"input-group\">
                        <input class=\"form-control\" placeholder=\"Search You Wants\" type=\"text\">
                        <span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-search\" title=\"Search\" type=\"button\"><i class=\"icon icon-Search\"></i></button>
\t\t\t\t\t\t\t</span>
                    </div>
                    <!-- Products -->
                    <ul class=\"products\">
                        <!-- Product -->
                        <li class=\"product design\">
                            <a href=\"#\">
                                <img src=\"images/product-1.jpg\" alt=\"Product\" />
                                <h5>Stylish Chair</h5>
                                <span class=\"price\"><del>\$200</del>\$139</span>
                            </a>
                            <div class=\"wishlist-box\">
                                <a href=\"#\"><i class=\"fa fa-arrows-alt\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-heart-o\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-search\"></i></a>
                            </div>
                            <a href=\"#\" class=\"addto-cart\" title=\"Add To Cart\">Add To Cart</a>
                        </li><!-- Product /- -->

                        <!-- Product -->
                        <li class=\"product video\">
                            <a href=\"#\">
                                <img src=\"images/product-2.jpg\" alt=\"Product\" />
                                <h5>men's casual shoes</h5>
                                <span class=\"price\"><del>\$150</del>\$85</span>
                            </a>
                            <div class=\"wishlist-box\">
                                <a href=\"#\"><i class=\"fa fa-arrows-alt\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-heart-o\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-search\"></i></a>
                            </div>
                            <a href=\"#\" class=\"addto-cart\" title=\"Add To Cart\">Add To Cart</a>
                        </li><!-- Product /- -->

                        <!-- Product -->
                        <li class=\"product photography\">
                            <a href=\"#\">
                                <img src=\"images/product-3.jpg\" alt=\"Product\" />
                                <h5>Sun glass</h5>
                                <span class=\"price\"><del>\$100</del>\$35</span>
                            </a>
                            <div class=\"wishlist-box\">
                                <a href=\"#\"><i class=\"fa fa-arrows-alt\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-heart-o\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-search\"></i></a>
                            </div>
                            <a href=\"#\" class=\"addto-cart\" title=\"Add To Cart\">Add To Cart</a>
                        </li><!-- Product /- -->

                        <!-- Product -->
                        <li class=\"product web\">
                            <a href=\"#\">
                                <img src=\"images/product-4.jpg\" alt=\"Product\" />
                                <h5>tourist bags</h5>
                                <span class=\"price\"><del>\$350</del>\$279</span>
                            </a>
                            <div class=\"wishlist-box\">
                                <a href=\"#\"><i class=\"fa fa-arrows-alt\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-heart-o\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-search\"></i></a>
                            </div>
                            <a href=\"#\" class=\"addto-cart\" title=\"Add To Cart\">Add To Cart</a>
                        </li><!-- Product /- -->

                        <!-- Product -->
                        <li class=\"product design\">
                            <a href=\"#\">
                                <img src=\"images/product-5.jpg\" alt=\"Product\" />
                                <h5>mobile phone</h5>
                                <span class=\"price\"><del>\$450</del>\$359</span>
                            </a>
                            <div class=\"wishlist-box\">
                                <a href=\"#\"><i class=\"fa fa-arrows-alt\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-heart-o\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-search\"></i></a>
                            </div>
                            <a href=\"#\" class=\"addto-cart\" title=\"Add To Cart\">Add To Cart</a>
                        </li><!-- Product /- -->

                        <!-- Product -->
                        <li class=\"product video\">
                            <a href=\"#\">
                                <img src=\"images/product-6.jpg\" alt=\"Product\" />
                                <h5>men's winter coat</h5>
                                <span class=\"price\"><del>\$220</del>\$129</span>
                            </a>
                            <div class=\"wishlist-box\">
                                <a href=\"#\"><i class=\"fa fa-arrows-alt\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-heart-o\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-search\"></i></a>
                            </div>
                            <a href=\"#\" class=\"addto-cart\" title=\"Add To Cart\">Add To Cart</a>
                        </li><!-- Product /- -->

                        <!-- Product -->
                        <li class=\"product photography\">
                            <a href=\"#\">
                                <img src=\"images/product-7.jpg\" alt=\"Product\" />
                                <h5>Model x12 computer</h5>
                                <span class=\"price\"><del>\$850</del>\$550</span>
                            </a>
                            <div class=\"wishlist-box\">
                                <a href=\"#\"><i class=\"fa fa-arrows-alt\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-heart-o\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-search\"></i></a>
                            </div>
                            <a href=\"#\" class=\"addto-cart\" title=\"Add To Cart\">Add To Cart</a>
                        </li><!-- Product /- -->

                        <!-- Product -->
                        <li class=\"product web\">
                            <a href=\"#\">
                                <img src=\"images/product-8.jpg\" alt=\"Product\" />
                                <h5>Stylish headset</h5>
                                <span class=\"price\"><del>\$50</del>\$29</span>
                            </a>
                            <div class=\"wishlist-box\">
                                <a href=\"#\"><i class=\"fa fa-arrows-alt\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-heart-o\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-search\"></i></a>
                            </div>
                            <a href=\"#\" class=\"addto-cart\" title=\"Add To Cart\">Add To Cart</a>
                        </li><!-- Product /- -->
                    </ul><!-- Products /- -->
                </div><!-- Row /- -->

            </div><!-- Container /- -->
        </div><!-- Product Section /- -->

        <!-- Collection Section1 -->

        <!-- Testimonial Section -->
        <div class=\"testimonial-section testimonial-section1 container-fluid\">
            <!-- Container -->
            <div class=\"container\">
                <!-- Section Header -->
                <div class=\"section-header\">
                    <h3>Qui sommes-nous?</h3>
                    <p>Tout a commencé lorsque nous avons constaté que le shopping est devenu éprouvant pour la plupart des femmes: une infinité d’options, une manifestation de la contrefaçon, une qualité en baisse, etc.  Nous avons donc créé «Rise with style» pour aider les femmes à dénichez les meilleures pièces sans perdre du temps à parcourir des centaines de sites web.
                        «On vous aide à passer moins de temps dans le shopping pour vous concentrer à passer plus de temps pour créer, aimer et briller»
                    </p>
                    <img src=\"images/section-seprator.png\" alt=\"section-seprator\" />
                </div><!-- Section Header /- -->
                <!-- Main Carousel -->
            </div><!-- Container /- -->
        </div><!-- Testimonial Section /- -->

        <!-- Latest Blog -->
            <div class=\"contact-us container-fluid no-padding\">

            <div class=\"form-detail\">
                <!-- Section Header -->
                <div class=\"section-header\">
                    <h3>Envoyer un Message</h3>
                    <p>Feel Free To Say Everything And Ask Questions</p>
                </div><!-- Section Header /- -->
                <form>
                    <div class=\"col-md-6 col-sm-6 col-xs-12 form-group\">
                        <input type=\"text\" name=\"contact-name\" class=\"form-control\" id=\"input_name\" placeholder=\"Full Name *\" required/>
                    </div>
                    <div class=\"col-md-6 col-sm-6 col-xs-12 form-group\">
                        <input type=\"text\" name=\"contact-email\" class=\"form-control\" id=\"input_email\" placeholder=\"Email Address *\" required/>
                    </div>
                    <div class=\"col-md-12 col-sm-12 col-xs-12 form-group\">
                        <input type=\"text\" required=\"\" placeholder=\"Subject *\" id=\"input_subject\" class=\"form-control\" name=\"contact-subject\">
                    </div>
                    <div class=\"form-group col-md-12 col-sm-12 col-xs-12\">
                        <textarea placeholder=\"Type Your Message . . .\" id=\"textarea_message\" name=\"contact-message\" rows=\"5\" class=\"form-control\"></textarea>
                    </div>
                    <div class=\"form-group col-md-12 col-sm-12 col-xs-12\">
                        <button title=\"Submit\" type=\"submit\" id=\"btn_submit\" name=\"post\">Send Message</button>
                    </div>
                    <div id=\"alert-msg\" class=\"alert-msg\"></div>
                </form>
            </div></div>
        <!-- Selling -->

        <!-- Clients -->
    </main>
{% endblock %}
    <!-- Footer Main -->{% block footer %}
    <footer id=\"footer-main\" class=\"footer-main container-fluid\">
        <!-- Container -->
        <div class=\"container\">
            <div class=\"row\">
                <!-- Widget About -->
                <aside class=\"col-md-3 col-sm-6 col-xs-6 ftr-widget widget_about\">
                    <a href=\"index-2.html\" title=\"rise with style\">Rise <span>With</span>Style</a>
                    <div class=\"info\">
                        <p><i class=\"icon icon-Pointer\"></i>Max Shop, 65 Huge Street Melbourne, 2850 Australia.</p>
                        <p><i class=\"icon icon-Phone2\"></i><a href=\"tel:(11)1234567890\" title=\"Phone\" class=\"phone\">(11) 123 456 7890</a></p>
                        <p><i class=\"icon icon-Imbox\"></i><a href=\"mailto:info@maxshop.com\" title=\"info@maxshop.com\">info@maxshop.com</a></p>
                    </div>
                </aside><!-- Widget About /- -->
                <!-- Widget Links -->
                <aside class=\"col-md-3 col-sm-6 col-xs-6 ftr-widget widget_links\">
                    <h3 class=\"widget-title\">Popular Links</h3>
                    <ul>
                        <li><a href=\"#product-section\" title=\"Popular Products\">Popular Products</a></li>
                        <li><a href=\"#selling\" title=\"Best Selling\">Best Selling</a></li>
                        <li><a href=\"about.html\" title=\"About Us\">About Us</a></li>
                        <li><a href=\"#dealing\" title=\"Deal Of The Day\">Deal Of The Day</a></li>
                        <li><a href=\"#collection\" title=\"Product Collections\">Product Collections</a></li>
                        <li><a href=\"contact-us.html\" title=\"Contact Us\">Contact Us</a></li>
                    </ul>
                </aside><!-- Widget Links /- -->
                <!-- Widget Account -->
                <aside class=\"col-md-3 col-sm-6 col-xs-6 ftr-widget widget_links widget_account\">
                    <h3 class=\"widget-title\">my account</h3>
                    <ul>
                        <li><a href=\"#\" title=\"My Order Details\">My Order Details</a></li>
                        <li><a href=\"#\" title=\"My credit Offers\">My credit Offers</a></li>
                        <li><a href=\"#\" title=\"My addresses\">My addresses</a></li>
                        <li><a href=\"#\" title=\"My Personal Details\">My Personal Details</a></li>
                        <li><a href=\"#\" title=\"My Account Details\">My Account Details</a></li>
                    </ul>
                </aside><!-- Widget Account /- -->
                <!-- Widget Newsletter -->
                <aside class=\"col-md-3 col-sm-6 col-xs-6 ftr-widget widget_newsletter\">
                    <h3 class=\"widget-title\">newsletter</h3>
                    <div class=\"input-group\">
                        <input class=\"form-control\" placeholder=\"email address\" type=\"text\">
                        <span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-paper-plane-o\"></i></button>
\t\t\t\t\t\t\t</span>
                    </div>
                    <h5>Get New Updates From Our Collections</h5>
                    <h3 class=\"widget-title widget-title-1\">Follow Us</h3>
                    <ul class=\"social\">
                        <li><a href=\"#\" title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a></li>
                        <li><a href=\"#\" title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a></li>
                        <li><a href=\"#\" title=\"Linkedin\"><i class=\"fa fa-linkedin\"></i></a></li>
                        <li><a href=\"#\" title=\"Tumblr\"><i class=\"fa fa-tumblr\"></i></a></li>
                        <li><a href=\"#\" title=\"Vimeo\"><i class=\"fa fa-vimeo\"></i></a></li>
                    </ul>
                </aside><!-- Widget Newsletter /- -->
            </div>
            <div class=\"copyright-section\">
                <div class=\"coyright-content\">
                    <p>&copy; Max shop. all rights reserved</p>
                </div>
                <ul>
                    <li><a href=\"#\" title=\"Delivery Information\">Delivery Information</a></li>
                    <li><a href=\"#\" title=\"Privacy Policy\">Privacy Policy</a></li>
                    <li><a href=\"#\" title=\"Terms & Condition\">Terms & Condition</a></li>
                </ul>
            </div>
        </div><!-- Container /- -->
    </footer><!-- Footer Main /- -->
{% endblock %}
</div>


<!-- JQuery v1.12.4 -->
<script src=\"{{ asset('js/jquery.min.js') }}\"></script>

<!-- Library - Js -->
<script src=\"{{ asset('libraries/lib.js') }}\"></script>

<script src=\"{{ asset('libraries/jquery.countdown.min.js') }}\"></script>

<!-- RS5.0 Core JS Files -->
<script type=\"text/javascript\" src=\"{{ asset('revolution/js/jquery.themepunch.tools.min838f.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('revolution/js/jquery.themepunch.revolution.min838f.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('revolution/js/extensions/revolution.extension.video.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('revolution/js/extensions/revolution.extension.slideanims.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('revolution/js/extensions/revolution.extension.layeranimation.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('revolution/js/extensions/revolution.extension.navigation.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('revolution/js/extensions/revolution.extension.actions.min.js') }}\"></script>

<!-- Library - Theme JS -->
<script src=\"{{ asset('js/functions.js') }}\"></script>

</body>

<!-- Mirrored from premiumlayers.net/demo/html/maxshop/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Aug 2020 11:27:57 GMT -->
</html>
", "base.html.twig", "C:\\Users\\Mohamedahmed\\PhpstormProjects\\untitled\\templates\\base.html.twig");
    }
}
