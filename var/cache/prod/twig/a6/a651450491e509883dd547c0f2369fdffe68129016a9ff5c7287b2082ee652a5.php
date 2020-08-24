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
class __TwigTemplate_18f323defef880a352030008d62e0903185c1ce9609629707866ecaa0ae2e59c extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "default/profile.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    <script>
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
    }

    // line 27
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "<!------ Include the above in your HEAD tag ---------->

<!--
User Profile Sidebar by @keenthemes
A component of Metronic Theme - #1 Selling Bootstrap 3 Admin Theme in Themeforest: http://j.mp/metronictheme
Licensed under MIT
-->

    <hr>
    <div class=\"container bootstrap snippet\" style=\"
    margin-right: unset;
    margin-left: unset;
    width: 1500px;
\">
        <div class=\"row\">
            <div class=\"col-sm-10\"><h1>User name</h1></div>
            <div class=\"col-sm-2\"><a href=\"/users\" class=\"pull-right\"></a></div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-2\"><!--left col-->


                <div class=\"text-center\">
                    <img src=\"http://ssl.gstatic.com/accounts/ui/avatar_2x.png\" class=\"avatar img-circle img-thumbnail\" alt=\"avatar\">
                    <h6>Upload a different photo...</h6>
                    <input type=\"file\" class=\"text-center center-block file-upload\">
                </div></hr><br>


                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">Website <i class=\"fa fa-link fa-1x\"></i></div>
                    <div class=\"panel-body\"><a href=\"http://bootnipets.com\">bootnipets.com</a></div>
                </div>


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
                <ul class=\"nav nav-tabs\">
                    <li class=\"active\"><a data-toggle=\"tab\" href=\"#home\">Home</a></li>
                    <li><a data-toggle=\"tab\" href=\"#messages\">Menu 1</a></li>
                    <li><a data-toggle=\"tab\" href=\"#settings\">Menu 2</a></li>
                </ul>


                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"home\">
                        <hr>
                        <form class=\"form\" action=\"##\" method=\"post\" id=\"registrationForm\">
                            <div class=\"form-group\">

                                <div class=\"col-xs-6\">
                                    <label for=\"first_name\"><h4>First name</h4></label>
                                    <input type=\"text\" class=\"form-control\" name=\"first_name\" id=\"first_name\" placeholder=\"first name\" title=\"enter your first name if any.\">
                                </div>
                            </div>
                            <div class=\"form-group\">

                                <div class=\"col-xs-6\">
                                    <label for=\"last_name\"><h4>Last name</h4></label>
                                    <input type=\"text\" class=\"form-control\" name=\"last_name\" id=\"last_name\" placeholder=\"last name\" title=\"enter your last name if any.\">
                                </div>
                            </div>

                            <div class=\"form-group\">

                                <div class=\"col-xs-6\">
                                    <label for=\"phone\"><h4>Phone</h4></label>
                                    <input type=\"text\" class=\"form-control\" name=\"phone\" id=\"phone\" placeholder=\"enter phone\" title=\"enter your phone number if any.\">
                                </div>
                            </div>

                            <div class=\"form-group\">
                                <div class=\"col-xs-6\">
                                    <label for=\"mobile\"><h4>Mobile</h4></label>
                                    <input type=\"text\" class=\"form-control\" name=\"mobile\" id=\"mobile\" placeholder=\"enter mobile number\" title=\"enter your mobile number if any.\">
                                </div>
                            </div>
                            <div class=\"form-group\">

                                <div class=\"col-xs-6\">
                                    <label for=\"email\"><h4>Email</h4></label>
                                    <input type=\"email\" class=\"form-control\" name=\"email\" id=\"email\" placeholder=\"you@email.com\" title=\"enter your email.\">
                                </div>
                            </div>
                            <div class=\"form-group\">

                                <div class=\"col-xs-6\">
                                    <label for=\"email\"><h4>Location</h4></label>
                                    <input type=\"email\" class=\"form-control\" id=\"location\" placeholder=\"somewhere\" title=\"enter a location\">
                                </div>
                            </div>
                            <div class=\"form-group\">

                                <div class=\"col-xs-6\">
                                    <label for=\"password\"><h4>Password</h4></label>
                                    <input type=\"password\" class=\"form-control\" name=\"password\" id=\"password\" placeholder=\"password\" title=\"enter your password.\">
                                </div>
                            </div>
                            <div class=\"form-group\">

                                <div class=\"col-xs-6\">
                                    <label for=\"password2\"><h4>Verify</h4></label>
                                    <input type=\"password\" class=\"form-control\" name=\"password2\" id=\"password2\" placeholder=\"password2\" title=\"enter your password2.\">
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"col-xs-12\">
                                    <br>
                                    <button class=\"btn btn-lg btn-success\" type=\"submit\"><i class=\"glyphicon glyphicon-ok-sign\"></i> Save</button>
                                    <button class=\"btn btn-lg\" type=\"reset\"><i class=\"glyphicon glyphicon-repeat\"></i> Reset</button>
                                </div>
                            </div>
                        </form>

                        <hr>

                    </div><!--/tab-pane-->
                    <div class=\"tab-pane\" id=\"messages\">

                        <h2></h2>

                        <hr>
                        <form class=\"form\" action=\"##\" method=\"post\" id=\"registrationForm\">
                            <div class=\"form-group\">

                                <div class=\"col-xs-6\">
                                    <label for=\"first_name\"><h4>First name</h4></label>
                                    <input type=\"text\" class=\"form-control\" name=\"first_name\" id=\"first_name\" placeholder=\"first name\" title=\"enter your first name if any.\">
                                </div>
                            </div>
                            <div class=\"form-group\">

                                <div class=\"col-xs-6\">
                                    <label for=\"last_name\"><h4>Last name</h4></label>
                                    <input type=\"text\" class=\"form-control\" name=\"last_name\" id=\"last_name\" placeholder=\"last name\" title=\"enter your last name if any.\">
                                </div>
                            </div>

                            <div class=\"form-group\">

                                <div class=\"col-xs-6\">
                                    <label for=\"phone\"><h4>Phone</h4></label>
                                    <input type=\"text\" class=\"form-control\" name=\"phone\" id=\"phone\" placeholder=\"enter phone\" title=\"enter your phone number if any.\">
                                </div>
                            </div>

                            <div class=\"form-group\">
                                <div class=\"col-xs-6\">
                                    <label for=\"mobile\"><h4>Mobile</h4></label>
                                    <input type=\"text\" class=\"form-control\" name=\"mobile\" id=\"mobile\" placeholder=\"enter mobile number\" title=\"enter your mobile number if any.\">
                                </div>
                            </div>
                            <div class=\"form-group\">

                                <div class=\"col-xs-6\">
                                    <label for=\"email\"><h4>Email</h4></label>
                                    <input type=\"email\" class=\"form-control\" name=\"email\" id=\"email\" placeholder=\"you@email.com\" title=\"enter your email.\">
                                </div>
                            </div>
                            <div class=\"form-group\">

                                <div class=\"col-xs-6\">
                                    <label for=\"email\"><h4>Location</h4></label>
                                    <input type=\"email\" class=\"form-control\" id=\"location\" placeholder=\"somewhere\" title=\"enter a location\">
                                </div>
                            </div>
                            <div class=\"form-group\">

                                <div class=\"col-xs-6\">
                                    <label for=\"password\"><h4>Password</h4></label>
                                    <input type=\"password\" class=\"form-control\" name=\"password\" id=\"password\" placeholder=\"password\" title=\"enter your password.\">
                                </div>
                            </div>
                            <div class=\"form-group\">

                                <div class=\"col-xs-6\">
                                    <label for=\"password2\"><h4>Verify</h4></label>
                                    <input type=\"password\" class=\"form-control\" name=\"password2\" id=\"password2\" placeholder=\"password2\" title=\"enter your password2.\">
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"col-xs-12\">
                                    <br>
                                    <button class=\"btn btn-lg btn-success\" type=\"submit\"><i class=\"glyphicon glyphicon-ok-sign\"></i> Save</button>
                                    <button class=\"btn btn-lg\" type=\"reset\"><i class=\"glyphicon glyphicon-repeat\"></i> Reset</button>
                                </div>
                            </div>
                        </form>

                    </div><!--/tab-pane-->
                    <div class=\"tab-pane\" id=\"settings\">


                        <hr>
                        <form class=\"form\" action=\"##\" method=\"post\" id=\"registrationForm\">
                            <div class=\"form-group\">

                                <div class=\"col-xs-6\">
                                    <label for=\"first_name\"><h4>First name</h4></label>
                                    <input type=\"text\" class=\"form-control\" name=\"first_name\" id=\"first_name\" placeholder=\"first name\" title=\"enter your first name if any.\">
                                </div>
                            </div>
                            <div class=\"form-group\">

                                <div class=\"col-xs-6\">
                                    <label for=\"last_name\"><h4>Last name</h4></label>
                                    <input type=\"text\" class=\"form-control\" name=\"last_name\" id=\"last_name\" placeholder=\"last name\" title=\"enter your last name if any.\">
                                </div>
                            </div>

                            <div class=\"form-group\">

                                <div class=\"col-xs-6\">
                                    <label for=\"phone\"><h4>Phone</h4></label>
                                    <input type=\"text\" class=\"form-control\" name=\"phone\" id=\"phone\" placeholder=\"enter phone\" title=\"enter your phone number if any.\">
                                </div>
                            </div>

                            <div class=\"form-group\">
                                <div class=\"col-xs-6\">
                                    <label for=\"mobile\"><h4>Mobile</h4></label>
                                    <input type=\"text\" class=\"form-control\" name=\"mobile\" id=\"mobile\" placeholder=\"enter mobile number\" title=\"enter your mobile number if any.\">
                                </div>
                            </div>
                            <div class=\"form-group\">

                                <div class=\"col-xs-6\">
                                    <label for=\"email\"><h4>Email</h4></label>
                                    <input type=\"email\" class=\"form-control\" name=\"email\" id=\"email\" placeholder=\"you@email.com\" title=\"enter your email.\">
                                </div>
                            </div>
                            <div class=\"form-group\">

                                <div class=\"col-xs-6\">
                                    <label for=\"email\"><h4>Location</h4></label>
                                    <input type=\"email\" class=\"form-control\" id=\"location\" placeholder=\"somewhere\" title=\"enter a location\">
                                </div>
                            </div>
                            <div class=\"form-group\">

                                <div class=\"col-xs-6\">
                                    <label for=\"password\"><h4>Password</h4></label>
                                    <input type=\"password\" class=\"form-control\" name=\"password\" id=\"password\" placeholder=\"password\" title=\"enter your password.\">
                                </div>
                            </div>
                            <div class=\"form-group\">

                                <div class=\"col-xs-6\">
                                    <label for=\"password2\"><h4>Verify</h4></label>
                                    <input type=\"password\" class=\"form-control\" name=\"password2\" id=\"password2\" placeholder=\"password2\" title=\"enter your password2.\">
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"col-xs-12\">
                                    <br>
                                    <button class=\"btn btn-lg btn-success pull-right\" type=\"submit\"><i class=\"glyphicon glyphicon-ok-sign\"></i> Save</button>
                                    <!--<button class=\"btn btn-lg\" type=\"reset\"><i class=\"glyphicon glyphicon-repeat\"></i> Reset</button>-->
                                </div>
                            </div>
                        </form>
                    </div>

                </div><!--/tab-pane-->
            </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->

";
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
        return array (  82 => 28,  78 => 27,  51 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/profile.html.twig", "C:\\Users\\Mohamedahmed\\PhpstormProjects\\untitled\\templates\\default\\profile.html.twig");
    }
}
