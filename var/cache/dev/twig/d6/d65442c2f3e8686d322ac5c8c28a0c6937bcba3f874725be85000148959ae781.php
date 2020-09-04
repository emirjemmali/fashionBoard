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

/* default/profile.html.twig */
class __TwigTemplate_2d67f927bcf35c0364ead9e65a079f08985d9b8368143473656eab71686c063d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'scripts' => [$this, 'block_scripts'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/profile.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "default/profile.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        // line 3
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicon.ico"), "html", null, true);
        echo "\" />

    <!-- For iPhone 4 Retina display: -->
    <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/apple-touch-icon-114x114-precomposed.png"), "html", null, true);
        echo "\">

    <!-- For iPad: -->
    <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/apple-touch-icon-72x72-precomposed.html"), "html", null, true);
        echo "\">

    <!-- For iPhone: -->
    <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/apple-touch-icon-57x57-precomposed.png"), "html", null, true);
        echo "\">

    <!-- Library - Google Font Familys -->
    <link href=\"https://fonts.googleapis.com/css?family=Arizonia|Crimson+Text:400,400i,600,600i,700,700i|Lato:100,100i,300,300i,400,400i,700,700i,900,900i|Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i\" rel=\"stylesheet\">

    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("revolution/css/settings.css"), "html", null, true);
        echo "\">

    <!-- RS5.0 Layers and Navigation Styles -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("revolution/css/layers.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("revolution/css/navigation.css"), "html", null, true);
        echo "\">

    <!-- Library - Bootstrap v3.3.5 -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libraries/lib.css"), "html", null, true);
        echo "\">

    <!-- Custom - Common CSS -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/plugins.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/navigation-menu.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/shortcode.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style.css"), "html", null, true);
        echo "\">

    <script>
        \$(document).ready(function() {


            var readURL = function(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        \$('.avatar').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }


            \$(\".file-upload\").on('change', function(){
                readURL(this);
            });
        });
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 56
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 57
        echo "<main>
<!------ Include the above in your HEAD tag ---------->

<!--
User Profile Sidebar by @keenthemes
A component of Metronic Theme - #1 Selling Bootstrap 3 Admin Theme in Themeforest: http://j.mp/metronictheme
Licensed under MIT
-->

    <div class=\"container\" style=\"
    margin-right: unset;
    margin-left: unset;
    width: 1500px;
\">
        <div class=\"row\">
            <div class=\"col-sm-10\"></div>
            <div class=\"col-sm-2\"><a href=\"/users\" class=\"pull-right\"></a></div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-2\"><!--left col-->


                <div class=\"text-center\">
                    <img src=\"http://ssl.gstatic.com/accounts/ui/avatar_2x.png\" width=\"100px\" class=\"avatar img-circle img-thumbnail\" alt=\"avatar\">
                    <h5>";
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 81, $this->source); })()), "user", [], "any", false, false, false, 81), "username", [], "any", false, false, false, 81), "html", null, true);
        echo "</h5>
                </div><br>





                <ul class=\"list-group\">
                    <li class=\"list-group-item text-muted\">Activity <i class=\"fa fa-dashboard fa-1x\"></i></li>
                    <li class=\"list-group-item text-right\"><span class=\"pull-left\"><strong>Shares</strong></span> 125</li>
                    <li class=\"list-group-item text-right\"><span class=\"pull-left\"><strong>Likes</strong></span> 13</li>
                    <li class=\"list-group-item text-right\"><span class=\"pull-left\"><strong>Posts</strong></span> 37</li>
                    <li class=\"list-group-item text-right\"><span class=\"pull-left\"><strong>Followers</strong></span> 78</li>
                </ul>

                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">Social Media</div>
                    <div class=\"panel-body\">
                        <i class=\"fa fa-facebook fa-2x\"></i> <i class=\"fa fa-github fa-2x\"></i> <i class=\"fa fa-twitter fa-2x\"></i> <i class=\"fa fa-pinterest fa-2x\"></i> <i class=\"fa fa-google-plus fa-2x\"></i>
                    </div>
                </div>

            </div><!--/col-3-->
            <div class=\"col-sm-10\">



                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"home\">
                        <div class=\"contact-us container-fluid no-padding\">

                            <div class=\"form-detail\" style=\"background-color: #ffffff;padding: unset;width: 1000px\">
                        <form class=\"form\" action=\"##\" method=\"post\" id=\"registrationForm\">
                            <div class=\"form-group\">

                                <div class=\"col-xs-6\">
                                    <label for=\"first_name\"><h4>First name</h4></label>
                                    <input type=\"text\" class=\"form-control\" name=\"first_name\" id=\"firstname\" placeholder=\"first name\"
                                            value=\"";
        // line 119
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 119, $this->source); })()), "user", [], "any", false, false, false, 119), "firstname", [], "any", false, false, false, 119), "html", null, true);
        echo "\" title=\"enter your first name if any.\">
                                </div>
                            </div>
                            <div class=\"form-group\">

                                <div class=\"col-xs-6\">
                                    <label for=\"last_name\"><h4>Last name</h4></label>
                                    <input type=\"text\" class=\"form-control\" value=\"";
        // line 126
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 126, $this->source); })()), "user", [], "any", false, false, false, 126), "lastname", [], "any", false, false, false, 126), "html", null, true);
        echo "\" name=\"last_name\" id=\"lastname\" placeholder=\"last name\" title=\"enter your last name if any.\">
                                </div>
                            </div>

                            <div class=\"form-group\">

                                <div class=\"col-xs-6\">
                                    <label for=\"phone\"><h4>Phone</h4></label>
                                    <input type=\"text\" class=\"form-control\" value=\"";
        // line 134
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 134, $this->source); })()), "user", [], "any", false, false, false, 134), "phonenumber", [], "any", false, false, false, 134), "html", null, true);
        echo "\" name=\"phone\" id=\"phone\" placeholder=\"enter phone\" title=\"enter your phone number if any.\">
                                </div>
                            </div>


                            <div class=\"form-group\">

                                <div class=\"col-xs-6\">
                                    <label for=\"email\"><h4>Email</h4></label>
                                    <input type=\"email\" class=\"form-control\" value=\"";
        // line 143
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 143, $this->source); })()), "user", [], "any", false, false, false, 143), "email", [], "any", false, false, false, 143), "html", null, true);
        echo "\" name=\"email\" id=\"email\" placeholder=\"you@email.com\" title=\"enter your email.\">
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"col-xs-6\">

                                    <label for=\"city\"><h4>City</h4></label>
                                    <input type=\"email\" class=\"form-control\" value=\"";
        // line 150
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 150, $this->source); })()), "user", [], "any", false, false, false, 150), "address", [], "any", false, false, false, 150), "html", null, true);
        echo "\" name=\"city\" id=\"city\" placeholder=\"you@email.com\" title=\"enter your email.\">
                                </div>
                                </div>


                            <div class=\"form-group\">
                                <div class=\"col-xs-12\">
                                    <br>
                                    <button class=\"btn btn-lg btn-success\" onclick=\"parseuserdata()\" type=\"button\"><i class=\"glyphicon glyphicon-ok-sign\"></i> Save</button>
                                </div>
                            </div>
                        </form>

                            </div>
                        </div>
                    </div><!--/tab-pane-->
            </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->

    </div> <!-- JQuery v1.12.4 -->

</main>
    <script>
        function handleForm(event) { event.preventDefault(); }

        function parseuserdata(){
            var firstname=document.getElementById('firstname').value;
            var lastname=document.getElementById('lastname').value;
            var phone=document.getElementById('phone').value;
            var email=document.getElementById('email').value;
            var city=document.getElementById('city').value;

            console.log(phone)
                \$.ajax({
                    url: \"";
        // line 186
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updateuser");
        echo "\",
                    type: \"POST\",
                    data: {'firstname':firstname,'lastname':lastname,'city':city,'phone':phone,'email':email},
                    success: function (result) {
                        console.log(result.data)
                    }
                });

        }
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "default/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  310 => 186,  271 => 150,  261 => 143,  249 => 134,  238 => 126,  228 => 119,  187 => 81,  161 => 57,  154 => 56,  121 => 30,  117 => 29,  113 => 28,  109 => 27,  103 => 24,  97 => 21,  93 => 20,  87 => 17,  79 => 12,  73 => 9,  67 => 6,  60 => 3,  53 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block scripts %}
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

    <script>
        \$(document).ready(function() {


            var readURL = function(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        \$('.avatar').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }


            \$(\".file-upload\").on('change', function(){
                readURL(this);
            });
        });
    </script>

{% endblock %}
{% block body %}
<main>
<!------ Include the above in your HEAD tag ---------->

<!--
User Profile Sidebar by @keenthemes
A component of Metronic Theme - #1 Selling Bootstrap 3 Admin Theme in Themeforest: http://j.mp/metronictheme
Licensed under MIT
-->

    <div class=\"container\" style=\"
    margin-right: unset;
    margin-left: unset;
    width: 1500px;
\">
        <div class=\"row\">
            <div class=\"col-sm-10\"></div>
            <div class=\"col-sm-2\"><a href=\"/users\" class=\"pull-right\"></a></div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-2\"><!--left col-->


                <div class=\"text-center\">
                    <img src=\"http://ssl.gstatic.com/accounts/ui/avatar_2x.png\" width=\"100px\" class=\"avatar img-circle img-thumbnail\" alt=\"avatar\">
                    <h5>{{ app.user.username }}</h5>
                </div><br>





                <ul class=\"list-group\">
                    <li class=\"list-group-item text-muted\">Activity <i class=\"fa fa-dashboard fa-1x\"></i></li>
                    <li class=\"list-group-item text-right\"><span class=\"pull-left\"><strong>Shares</strong></span> 125</li>
                    <li class=\"list-group-item text-right\"><span class=\"pull-left\"><strong>Likes</strong></span> 13</li>
                    <li class=\"list-group-item text-right\"><span class=\"pull-left\"><strong>Posts</strong></span> 37</li>
                    <li class=\"list-group-item text-right\"><span class=\"pull-left\"><strong>Followers</strong></span> 78</li>
                </ul>

                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">Social Media</div>
                    <div class=\"panel-body\">
                        <i class=\"fa fa-facebook fa-2x\"></i> <i class=\"fa fa-github fa-2x\"></i> <i class=\"fa fa-twitter fa-2x\"></i> <i class=\"fa fa-pinterest fa-2x\"></i> <i class=\"fa fa-google-plus fa-2x\"></i>
                    </div>
                </div>

            </div><!--/col-3-->
            <div class=\"col-sm-10\">



                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"home\">
                        <div class=\"contact-us container-fluid no-padding\">

                            <div class=\"form-detail\" style=\"background-color: #ffffff;padding: unset;width: 1000px\">
                        <form class=\"form\" action=\"##\" method=\"post\" id=\"registrationForm\">
                            <div class=\"form-group\">

                                <div class=\"col-xs-6\">
                                    <label for=\"first_name\"><h4>First name</h4></label>
                                    <input type=\"text\" class=\"form-control\" name=\"first_name\" id=\"firstname\" placeholder=\"first name\"
                                            value=\"{{ app.user.firstname }}\" title=\"enter your first name if any.\">
                                </div>
                            </div>
                            <div class=\"form-group\">

                                <div class=\"col-xs-6\">
                                    <label for=\"last_name\"><h4>Last name</h4></label>
                                    <input type=\"text\" class=\"form-control\" value=\"{{ app.user.lastname }}\" name=\"last_name\" id=\"lastname\" placeholder=\"last name\" title=\"enter your last name if any.\">
                                </div>
                            </div>

                            <div class=\"form-group\">

                                <div class=\"col-xs-6\">
                                    <label for=\"phone\"><h4>Phone</h4></label>
                                    <input type=\"text\" class=\"form-control\" value=\"{{ app.user.phonenumber }}\" name=\"phone\" id=\"phone\" placeholder=\"enter phone\" title=\"enter your phone number if any.\">
                                </div>
                            </div>


                            <div class=\"form-group\">

                                <div class=\"col-xs-6\">
                                    <label for=\"email\"><h4>Email</h4></label>
                                    <input type=\"email\" class=\"form-control\" value=\"{{ app.user.email }}\" name=\"email\" id=\"email\" placeholder=\"you@email.com\" title=\"enter your email.\">
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"col-xs-6\">

                                    <label for=\"city\"><h4>City</h4></label>
                                    <input type=\"email\" class=\"form-control\" value=\"{{ app.user.address }}\" name=\"city\" id=\"city\" placeholder=\"you@email.com\" title=\"enter your email.\">
                                </div>
                                </div>


                            <div class=\"form-group\">
                                <div class=\"col-xs-12\">
                                    <br>
                                    <button class=\"btn btn-lg btn-success\" onclick=\"parseuserdata()\" type=\"button\"><i class=\"glyphicon glyphicon-ok-sign\"></i> Save</button>
                                </div>
                            </div>
                        </form>

                            </div>
                        </div>
                    </div><!--/tab-pane-->
            </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->

    </div> <!-- JQuery v1.12.4 -->

</main>
    <script>
        function handleForm(event) { event.preventDefault(); }

        function parseuserdata(){
            var firstname=document.getElementById('firstname').value;
            var lastname=document.getElementById('lastname').value;
            var phone=document.getElementById('phone').value;
            var email=document.getElementById('email').value;
            var city=document.getElementById('city').value;

            console.log(phone)
                \$.ajax({
                    url: \"{{ path('updateuser') }}\",
                    type: \"POST\",
                    data: {'firstname':firstname,'lastname':lastname,'city':city,'phone':phone,'email':email},
                    success: function (result) {
                        console.log(result.data)
                    }
                });

        }
    </script>
{% endblock %}", "default/profile.html.twig", "/home/emir/Bureau/fashionBoard/templates/default/profile.html.twig");
    }
}
