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

/* default/purchase.html.twig */
class __TwigTemplate_67342249fd19dd99c72bbb0c16a6ed0ee7afb2fb8084afd1341a5595e20cf628 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/purchase.html.twig"));

        // line 2
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), [0 => "form_div_layout.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/purchase.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        // line 5
        echo "    <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    <script >

        var state=true;
        \$(document).ready(function () {

            var navListItems = \$('div.setup-panel div a'),
                allWells = \$('.setup-content'),
                allNextBtn = \$('.nextBtn');

            allWells.hide();
            navListItems.click(function (e) {
                e.preventDefault();
                var \$target = \$(\$(this).attr('href')),
                    \$item = \$(this);

                if (!\$item.hasClass('disabled')) {
                    navListItems.removeClass('btn-success').addClass('btn-default');
                    \$item.addClass('btn-success');

                    allWells.hide();
                    \$target.show();
                    \$target.find('input:eq(0)').focus();
                }
            });

            allNextBtn.click(function () {
                var curStep = \$(this).closest(\".setup-content\"),
                    curStepBtn = curStep.attr(\"id\"),
                    nextStepWizard = \$('div.setup-panel div a[href=\"#' + curStepBtn + '\"]').parent().next().children(\"a\"),
                    curInputs = curStep.find(\"input[type='text'],input[type='url']\"),

                    isValid = true;
             var indexd = curStepBtn[curStepBtn.length -1];

                if (parseInt(indexd)==1){

                    var firstname=document.getElementById('firstname').value;
                    var lastname=document.getElementById('lastname').value;
                    var city=document.getElementById('country').value;
                    var phone=document.getElementById('phone').value;
                    \$.ajax({
                        url: \"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updateuser");
        echo "\",
                        type: \"POST\",
                        data: {'id' : ";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "user", [], "any", false, false, false, 51), "id", [], "any", false, false, false, 51), "html", null, true);
        echo ",'firstname':firstname,'lastname':lastname,'city':city,'phone':phone},
                        success: function (result) {
                        console.log(result.data)
                        }
                    });
                }


                \$(\".form-group\").removeClass(\"has-error\");
                for (var i = 0; i < curInputs.length; i++) {
                    if (!curInputs[i].validity.valid) {
                        isValid = false;
                        \$(curInputs[i]).closest(\".form-group\").addClass(\"has-error\");
                    }
                }

                if (isValid) nextStepWizard.removeAttr('disabled').trigger('click');
            });

            \$('div.setup-panel div a.btn-success').trigger('click');
        });

    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 75
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 76
        echo "    <style>
        .btn-success {
            color: #fff;
            background-color: #FF8661;
            border-color: #FF8661;
        }
        .panel-primary>.panel-heading {
            color: #fff;
            background-color: #FF8661;
            border-color: #FF8661;
        }
        .panel-primary {
            border-color: #FF8661;
        }
        body {
            margin-top:30px;
        }
        .stepwizard-step p {
            margin-top: 0px;
            color:#666;
        }
        .stepwizard-row {
            display: table-row;
        }
        .stepwizard {
            display: table;
            width: 100%;
            position: relative;
        }
        .stepwizard-step button[disabled] {
            /*opacity: 1 !important;
            filter: alpha(opacity=100) !important;*/
        }
        .stepwizard .btn.disabled, .stepwizard .btn[disabled], .stepwizard fieldset[disabled] .btn {
            opacity:1 !important;
            color:#bbb;
        }
        .stepwizard-row:before {
            top: 14px;
            bottom: 0;
            position: absolute;
            content:\" \";
            width: 100%;
            height: 1px;
            background-color: #ccc;
            z-index: 0;
        }
        .stepwizard-step {
            display: table-cell;
            text-align: center;
            position: relative;
        }
        .btn-circle {
            width: 30px;
            height: 30px;
            text-align: center;
            padding: 6px 0;
            font-size: 12px;
            line-height: 1.428571429;
            border-radius: 15px;
        }
    </style>

    <div class=\"container\">
        ";
        // line 140
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 140, $this->source); })()), "user", [], "any", false, false, false, 140), "state", [], "any", false, false, false, 140) == 0)) {
            // line 141
            echo "        <div class=\"stepwizard\">
            <div class=\"stepwizard-row setup-panel\">
                <div class=\"stepwizard-step col-xs-3\" style=\"padding-left: 250px;\">
                    <a href=\"#step-1\" type=\"button\" class=\"btn btn-success btn-circle\">1</a>
                    <p><small>Informations</small></p>
                </div>
                <div class=\"stepwizard-step col-xs-3\" style=\"padding-left: 250px;
\">
                    <a href=\"#step-2\" type=\"button\" class=\"btn btn-default btn-circle\" disabled=\"disabled\">2</a>
                    <p><small>other information</small></p>
                </div>
                <div class=\"stepwizard-step col-xs-3\" style=\"    padding-left: 250px;
\">
                    <a href=\"#step-3\" type=\"button\" class=\"btn btn-default btn-circle\" disabled=\"disabled\">3</a>
                    <p><small>payment</small></p>
                </div>

            </div>

        </div>
        ";
        } else {
            // line 162
            echo "            <div class=\"stepwizard\">
                <div class=\"stepwizard-row setup-panel\">

                    <div class=\"stepwizard-step col-xs-3\" style=\"padding-left: 550px;
\">
                        <a href=\"#step-1\" type=\"button\" class=\"btn btn-success btn-circle\" style=\"border-color: #FF8661;background-color: #FF8661\">3</a>
                        <p><small>payment</small></p>
                    </div>

                </div>

            </div>

        ";
        }
        // line 176
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 176, $this->source); })()), "user", [], "any", false, false, false, 176), "state", [], "any", false, false, false, 176) == 0)) {
            // line 177
            echo "                <div class=\"panel panel-primary setup-content\" id=\"step-1\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">Shipper </h3>
                    </div>
                    <div class=\"panel-body\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">First Name</label>
                            <input id=\"firstname\" maxlength=\"100\" type=\"text\" required=\"required\" class=\"form-control\" placeholder=\"Enter First Name\" />
                        </div>
                        <div class=\"form-group\">
                            <label class=\"control-label\">Last Name</label>
                            <input  id=\"lastname\" maxlength=\"100\" type=\"text\" required=\"required\" class=\"form-control\" placeholder=\"Enter Last Name\" />
                        </div>
                        <div class=\"form-group\">
                            <label class=\"control-label\">Country</label>
                            <input  id=\"country\" maxlength=\"100\" type=\"text\" required=\"required\" class=\"form-control\" placeholder=\"Country\" />
                        </div>
                        <div class=\"form-group\">
                            <label class=\"control-label\">Phone</label>
                            <input  id=\"phone\"  type=\"number\" required=\"required\" class=\"form-control\" placeholder=\"phone number\"/>
                        </div>
                        <button class=\"btn btn-primary nextBtn pull-right\" type=\"button\">Next</button>
                    </div>
                </div>

                <div class=\"panel panel-primary setup-content\" id=\"step-2\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">Destination</h3>
                    </div>
                    <div class=\"panel-body\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Company Name</label>
                            <input maxlength=\"200\" type=\"text\" required=\"required\" class=\"form-control\" placeholder=\"Enter Company Name\" />
                        </div>
                        <div class=\"form-group\">
                            <label class=\"control-label\">Company Address</label>
                            <input maxlength=\"200\" type=\"text\" required=\"required\" class=\"form-control\" placeholder=\"Enter Company Address\" />
                        </div>
                        <button class=\"btn btn-primary nextBtn pull-right\" type=\"button\">Next</button>
                    </div>
                </div>

                <div class=\"panel panel-primary setup-content\" id=\"step-3\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">Schedule</h3>
                    </div>
                    <div class=\"panel-body\">
                        <div class=\"payment\">
                            ";
            // line 225
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 225, $this->source); })()), 'form_start');
            echo "

                            <div class=\"payment-tab\">
                                <div class=\"payment-tab-trigger\">
                                    ";
            // line 229
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 229, $this->source); })()), "method", [], "any", false, false, false, 229), 'row');
            echo "
                                    <label for=\"creditCart\">Credit / Debit Card</label>
                                    <img class=\"payment-logo\" width=\"100px\" src=\"https://i.imgur.com/IHEKLgm.png\" alt=\"\">
                                    ";
            // line 232
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 232, $this->source); })()), 'widget');
            echo "

                                </div>
                                <div class=\"payment-tab-content\">
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            <div class=\"card-label\">
                                                <label for=\"nameOnCard\">Name on Card</label>
                                                <input class=\"form-control\" id=\"nameOnCard\" name=\"nameOnCard\" type=\"text\">
                                            </div>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <div class=\"card-label\">
                                                <label for=\"cardNumber\">Card Number</label>
                                                <input class=\"form-control\" id=\"cardNumber\" name=\"cardNumber\"
                                                       placeholder=\"1234  5678  9876  5432\"  type=\"text\">
                                            </div>
                                        </div>
                                        <div class=\"col-md-4\">
                                            <div class=\"card-label\">
                                                <label for=\"expirynDate\">Expiry Month</label>
                                                <input class=\"form-control\" id=\"expiryDate\" placeholder=\"MM\"  type=\"text\">
                                            </div>
                                        </div>
                                        <div class=\"col-md-4\">
                                            <div class=\"card-label\">
                                                <label for=\"expiryDate\">Expiry Year</label>
                                                <input class=\"form-control\" id=\"expirynDate\" placeholder=\"YY\"  type=\"text\">
                                            </div>
                                        </div>
                                        <div class=\"col-md-4\">
                                            <div class=\"card-label\">
                                                <label for=\"cvv\">CVV</label>
                                                <input class=\"form-control\" id=\"cvv\"  type=\"text\">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <br>
                        <input class=\"btn btn-primary nextBtn pull-right\" type=\"submit\" value=\"Pay € ";
            // line 274
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bundle"]) || array_key_exists("bundle", $context) ? $context["bundle"] : (function () { throw new RuntimeError('Variable "bundle" does not exist.', 274, $this->source); })()), "price", [], "any", false, false, false, 274), "html", null, true);
            echo "\" />
                        ";
            // line 275
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 275, $this->source); })()), 'form_end');
            echo "

                    </div>
                </div>

        ";
        } else {
            // line 281
            echo "
            ";
            // line 283
            echo "

            ";
            // line 286
            echo "

            ";
            // line 288
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 288, $this->source); })()), 'form_start');
            echo "



            <form name=\"jms_choose_payment_method\" method=\"post\" role=\"form\">
            <div class=\"panel panel-primary setup-content\" id=\"step-1\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">Schedule</h3>
                </div>
                <div class=\"panel-body\">
                    <div class=\"payment\">
                        <div class=\"payment-tab payment-tab-active\">
                            <div class=\"payment-tab-trigger form-group\">
                                ";
            // line 301
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 301, $this->source); })()), "method", [], "any", false, false, false, 301), 'row');
            echo "

                                                      <img class=\"payment-logo paypal\" width=\"100px\" src=\"https://i.imgur.com/ApBxkXU.png\" alt=\"\">
                                ";
            // line 304
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 304, $this->source); })()), 'widget');
            echo "
                            </div>
                            <div class=\"payment-tab-content\">
                                <p>You will be redirected to PayPal to complete payment.</p>
                            </div>
                        </div>
                        <div class=\"payment-tab\">
                            <div class=\"payment-tab-trigger\">
                                <input type=\"radio\" name=\"jms_choose_payment_method[method]\" id=\"jms_choose_payment_method_method_0\" value=\"creditCard\">
                                <label for=\"creditCart\">Credit / Debit Card</label>
                                <img class=\"payment-logo\" width=\"100px\" src=\"https://i.imgur.com/IHEKLgm.png\" alt=\"\">
                            </div>
                            <div class=\"payment-tab-content\">
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <div class=\"card-label\">
                                            <label for=\"nameOnCard\">Name on Card</label>
                                            <input class=\"form-control\" id=\"nameOnCard\" name=\"nameOnCard\"  type=\"text\">
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"card-label\">
                                            <label for=\"cardNumber\">Card Number</label>
                                            <input class=\"form-control\" id=\"cardNumber\" name=\"cardNumber\"
                                                   placeholder=\"1234  5678  9876  5432\"  type=\"text\">
                                        </div>
                                    </div>
                                    <div class=\"col-md-4\">
                                        <div class=\"card-label\">
                                            <label for=\"expirynDate\">Expiry Month</label>
                                            <input class=\"form-control\" id=\"expiryDate\" placeholder=\"MM\"  type=\"text\">
                                        </div>
                                    </div>
                                    <div class=\"col-md-4\">
                                        <div class=\"card-label\">
                                            <label for=\"expiryDate\">Expiry Year</label>
                                            <input class=\"form-control\" id=\"expirynDate\" placeholder=\"YY\"  type=\"text\">
                                        </div>
                                    </div>
                                    <div class=\"col-md-4\">
                                        <div class=\"card-label\">
                                            <label for=\"cvv\">CVV</label>
                                            <input class=\"form-control\" id=\"cvv\"  type=\"text\">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <input class=\"btn btn-primary nextBtn pull-right\" type=\"submit\" value=\"Pay € ";
            // line 354
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bundle"]) || array_key_exists("bundle", $context) ? $context["bundle"] : (function () { throw new RuntimeError('Variable "bundle" does not exist.', 354, $this->source); })()), "price", [], "any", false, false, false, 354), "html", null, true);
            echo "\" />
                </div>
                ";
            // line 356
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 356, $this->source); })()), 'form_end');
            echo "

            </div>
            </form>
        ";
        }
        // line 361
        echo "
    </div>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "default/purchase.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  482 => 361,  474 => 356,  469 => 354,  416 => 304,  410 => 301,  394 => 288,  390 => 286,  386 => 283,  383 => 281,  374 => 275,  370 => 274,  325 => 232,  319 => 229,  312 => 225,  262 => 177,  259 => 176,  243 => 162,  220 => 141,  218 => 140,  152 => 76,  145 => 75,  114 => 51,  109 => 49,  63 => 5,  56 => 4,  48 => 1,  46 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% form_theme form 'form_div_layout.html.twig' %}

{% block scripts %}
    <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    <script >

        var state=true;
        \$(document).ready(function () {

            var navListItems = \$('div.setup-panel div a'),
                allWells = \$('.setup-content'),
                allNextBtn = \$('.nextBtn');

            allWells.hide();
            navListItems.click(function (e) {
                e.preventDefault();
                var \$target = \$(\$(this).attr('href')),
                    \$item = \$(this);

                if (!\$item.hasClass('disabled')) {
                    navListItems.removeClass('btn-success').addClass('btn-default');
                    \$item.addClass('btn-success');

                    allWells.hide();
                    \$target.show();
                    \$target.find('input:eq(0)').focus();
                }
            });

            allNextBtn.click(function () {
                var curStep = \$(this).closest(\".setup-content\"),
                    curStepBtn = curStep.attr(\"id\"),
                    nextStepWizard = \$('div.setup-panel div a[href=\"#' + curStepBtn + '\"]').parent().next().children(\"a\"),
                    curInputs = curStep.find(\"input[type='text'],input[type='url']\"),

                    isValid = true;
             var indexd = curStepBtn[curStepBtn.length -1];

                if (parseInt(indexd)==1){

                    var firstname=document.getElementById('firstname').value;
                    var lastname=document.getElementById('lastname').value;
                    var city=document.getElementById('country').value;
                    var phone=document.getElementById('phone').value;
                    \$.ajax({
                        url: \"{{ path('updateuser') }}\",
                        type: \"POST\",
                        data: {'id' : {{ app.user.id }},'firstname':firstname,'lastname':lastname,'city':city,'phone':phone},
                        success: function (result) {
                        console.log(result.data)
                        }
                    });
                }


                \$(\".form-group\").removeClass(\"has-error\");
                for (var i = 0; i < curInputs.length; i++) {
                    if (!curInputs[i].validity.valid) {
                        isValid = false;
                        \$(curInputs[i]).closest(\".form-group\").addClass(\"has-error\");
                    }
                }

                if (isValid) nextStepWizard.removeAttr('disabled').trigger('click');
            });

            \$('div.setup-panel div a.btn-success').trigger('click');
        });

    </script>
{% endblock %}
{% block body %}
    <style>
        .btn-success {
            color: #fff;
            background-color: #FF8661;
            border-color: #FF8661;
        }
        .panel-primary>.panel-heading {
            color: #fff;
            background-color: #FF8661;
            border-color: #FF8661;
        }
        .panel-primary {
            border-color: #FF8661;
        }
        body {
            margin-top:30px;
        }
        .stepwizard-step p {
            margin-top: 0px;
            color:#666;
        }
        .stepwizard-row {
            display: table-row;
        }
        .stepwizard {
            display: table;
            width: 100%;
            position: relative;
        }
        .stepwizard-step button[disabled] {
            /*opacity: 1 !important;
            filter: alpha(opacity=100) !important;*/
        }
        .stepwizard .btn.disabled, .stepwizard .btn[disabled], .stepwizard fieldset[disabled] .btn {
            opacity:1 !important;
            color:#bbb;
        }
        .stepwizard-row:before {
            top: 14px;
            bottom: 0;
            position: absolute;
            content:\" \";
            width: 100%;
            height: 1px;
            background-color: #ccc;
            z-index: 0;
        }
        .stepwizard-step {
            display: table-cell;
            text-align: center;
            position: relative;
        }
        .btn-circle {
            width: 30px;
            height: 30px;
            text-align: center;
            padding: 6px 0;
            font-size: 12px;
            line-height: 1.428571429;
            border-radius: 15px;
        }
    </style>

    <div class=\"container\">
        {% if ( app.user.state==0 ) %}
        <div class=\"stepwizard\">
            <div class=\"stepwizard-row setup-panel\">
                <div class=\"stepwizard-step col-xs-3\" style=\"padding-left: 250px;\">
                    <a href=\"#step-1\" type=\"button\" class=\"btn btn-success btn-circle\">1</a>
                    <p><small>Informations</small></p>
                </div>
                <div class=\"stepwizard-step col-xs-3\" style=\"padding-left: 250px;
\">
                    <a href=\"#step-2\" type=\"button\" class=\"btn btn-default btn-circle\" disabled=\"disabled\">2</a>
                    <p><small>other information</small></p>
                </div>
                <div class=\"stepwizard-step col-xs-3\" style=\"    padding-left: 250px;
\">
                    <a href=\"#step-3\" type=\"button\" class=\"btn btn-default btn-circle\" disabled=\"disabled\">3</a>
                    <p><small>payment</small></p>
                </div>

            </div>

        </div>
        {% else %}
            <div class=\"stepwizard\">
                <div class=\"stepwizard-row setup-panel\">

                    <div class=\"stepwizard-step col-xs-3\" style=\"padding-left: 550px;
\">
                        <a href=\"#step-1\" type=\"button\" class=\"btn btn-success btn-circle\" style=\"border-color: #FF8661;background-color: #FF8661\">3</a>
                        <p><small>payment</small></p>
                    </div>

                </div>

            </div>

        {% endif %}
        {% if ( app.user.state==0 ) %}
                <div class=\"panel panel-primary setup-content\" id=\"step-1\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">Shipper </h3>
                    </div>
                    <div class=\"panel-body\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">First Name</label>
                            <input id=\"firstname\" maxlength=\"100\" type=\"text\" required=\"required\" class=\"form-control\" placeholder=\"Enter First Name\" />
                        </div>
                        <div class=\"form-group\">
                            <label class=\"control-label\">Last Name</label>
                            <input  id=\"lastname\" maxlength=\"100\" type=\"text\" required=\"required\" class=\"form-control\" placeholder=\"Enter Last Name\" />
                        </div>
                        <div class=\"form-group\">
                            <label class=\"control-label\">Country</label>
                            <input  id=\"country\" maxlength=\"100\" type=\"text\" required=\"required\" class=\"form-control\" placeholder=\"Country\" />
                        </div>
                        <div class=\"form-group\">
                            <label class=\"control-label\">Phone</label>
                            <input  id=\"phone\"  type=\"number\" required=\"required\" class=\"form-control\" placeholder=\"phone number\"/>
                        </div>
                        <button class=\"btn btn-primary nextBtn pull-right\" type=\"button\">Next</button>
                    </div>
                </div>

                <div class=\"panel panel-primary setup-content\" id=\"step-2\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">Destination</h3>
                    </div>
                    <div class=\"panel-body\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Company Name</label>
                            <input maxlength=\"200\" type=\"text\" required=\"required\" class=\"form-control\" placeholder=\"Enter Company Name\" />
                        </div>
                        <div class=\"form-group\">
                            <label class=\"control-label\">Company Address</label>
                            <input maxlength=\"200\" type=\"text\" required=\"required\" class=\"form-control\" placeholder=\"Enter Company Address\" />
                        </div>
                        <button class=\"btn btn-primary nextBtn pull-right\" type=\"button\">Next</button>
                    </div>
                </div>

                <div class=\"panel panel-primary setup-content\" id=\"step-3\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">Schedule</h3>
                    </div>
                    <div class=\"panel-body\">
                        <div class=\"payment\">
                            {{ form_start(form) }}

                            <div class=\"payment-tab\">
                                <div class=\"payment-tab-trigger\">
                                    {{ form_row(form.method) }}
                                    <label for=\"creditCart\">Credit / Debit Card</label>
                                    <img class=\"payment-logo\" width=\"100px\" src=\"https://i.imgur.com/IHEKLgm.png\" alt=\"\">
                                    {{ form_widget(form) }}

                                </div>
                                <div class=\"payment-tab-content\">
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            <div class=\"card-label\">
                                                <label for=\"nameOnCard\">Name on Card</label>
                                                <input class=\"form-control\" id=\"nameOnCard\" name=\"nameOnCard\" type=\"text\">
                                            </div>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <div class=\"card-label\">
                                                <label for=\"cardNumber\">Card Number</label>
                                                <input class=\"form-control\" id=\"cardNumber\" name=\"cardNumber\"
                                                       placeholder=\"1234  5678  9876  5432\"  type=\"text\">
                                            </div>
                                        </div>
                                        <div class=\"col-md-4\">
                                            <div class=\"card-label\">
                                                <label for=\"expirynDate\">Expiry Month</label>
                                                <input class=\"form-control\" id=\"expiryDate\" placeholder=\"MM\"  type=\"text\">
                                            </div>
                                        </div>
                                        <div class=\"col-md-4\">
                                            <div class=\"card-label\">
                                                <label for=\"expiryDate\">Expiry Year</label>
                                                <input class=\"form-control\" id=\"expirynDate\" placeholder=\"YY\"  type=\"text\">
                                            </div>
                                        </div>
                                        <div class=\"col-md-4\">
                                            <div class=\"card-label\">
                                                <label for=\"cvv\">CVV</label>
                                                <input class=\"form-control\" id=\"cvv\"  type=\"text\">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <br>
                        <input class=\"btn btn-primary nextBtn pull-right\" type=\"submit\" value=\"Pay € {{ bundle.price }}\" />
                        {{ form_end(form) }}

                    </div>
                </div>

        {% else %}

            {# templates/Orders/show.html.twig #}


            {# templates/Orders/show.html.twig #}


            {{ form_start(form) }}



            <form name=\"jms_choose_payment_method\" method=\"post\" role=\"form\">
            <div class=\"panel panel-primary setup-content\" id=\"step-1\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">Schedule</h3>
                </div>
                <div class=\"panel-body\">
                    <div class=\"payment\">
                        <div class=\"payment-tab payment-tab-active\">
                            <div class=\"payment-tab-trigger form-group\">
                                {{ form_row(form.method) }}

                                                      <img class=\"payment-logo paypal\" width=\"100px\" src=\"https://i.imgur.com/ApBxkXU.png\" alt=\"\">
                                {{ form_widget(form) }}
                            </div>
                            <div class=\"payment-tab-content\">
                                <p>You will be redirected to PayPal to complete payment.</p>
                            </div>
                        </div>
                        <div class=\"payment-tab\">
                            <div class=\"payment-tab-trigger\">
                                <input type=\"radio\" name=\"jms_choose_payment_method[method]\" id=\"jms_choose_payment_method_method_0\" value=\"creditCard\">
                                <label for=\"creditCart\">Credit / Debit Card</label>
                                <img class=\"payment-logo\" width=\"100px\" src=\"https://i.imgur.com/IHEKLgm.png\" alt=\"\">
                            </div>
                            <div class=\"payment-tab-content\">
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <div class=\"card-label\">
                                            <label for=\"nameOnCard\">Name on Card</label>
                                            <input class=\"form-control\" id=\"nameOnCard\" name=\"nameOnCard\"  type=\"text\">
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"card-label\">
                                            <label for=\"cardNumber\">Card Number</label>
                                            <input class=\"form-control\" id=\"cardNumber\" name=\"cardNumber\"
                                                   placeholder=\"1234  5678  9876  5432\"  type=\"text\">
                                        </div>
                                    </div>
                                    <div class=\"col-md-4\">
                                        <div class=\"card-label\">
                                            <label for=\"expirynDate\">Expiry Month</label>
                                            <input class=\"form-control\" id=\"expiryDate\" placeholder=\"MM\"  type=\"text\">
                                        </div>
                                    </div>
                                    <div class=\"col-md-4\">
                                        <div class=\"card-label\">
                                            <label for=\"expiryDate\">Expiry Year</label>
                                            <input class=\"form-control\" id=\"expirynDate\" placeholder=\"YY\"  type=\"text\">
                                        </div>
                                    </div>
                                    <div class=\"col-md-4\">
                                        <div class=\"card-label\">
                                            <label for=\"cvv\">CVV</label>
                                            <input class=\"form-control\" id=\"cvv\"  type=\"text\">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <input class=\"btn btn-primary nextBtn pull-right\" type=\"submit\" value=\"Pay € {{ bundle.price }}\" />
                </div>
                {{ form_end(form) }}

            </div>
            </form>
        {% endif %}

    </div>



{% endblock %}", "default/purchase.html.twig", "/home/emir/Bureau/fashionBoard/templates/default/purchase.html.twig");
    }
}
