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
class __TwigTemplate_9b0ffbe900e8b11716c07fc8447a27d59e87a239d9624811c9b58ad6d2ac59e6 extends \Twig\Template
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
        // line 2
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "form_div_layout.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/purchase.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 51), "id", [], "any", false, false, false, 51), "html", null, true);
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
    }

    // line 75
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 140), "state", [], "any", false, false, false, 140) == 0)) {
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
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 176), "state", [], "any", false, false, false, 176) == 0)) {
            // line 177
            echo "            <form role=\"form\">
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
                            <div class=\"payment-tab payment-tab-active\">
                                <div class=\"payment-tab-trigger form-group\">
                                    <input id=\"paypal\" name=\"cardType\" type=\"radio\" value=\"paypal\">
                                    <label for=\"paypal\">PayPal</label>
                                    <img class=\"payment-logo paypal\" width=\"100px\" src=\"https://i.imgur.com/ApBxkXU.png\" alt=\"\">
                                </div>
                                <div class=\"payment-tab-content\">
                                    <p>You will be redirected to PayPal to complete payment.</p>
                                </div>
                            </div>
                            <div class=\"payment-tab\">
                                <div class=\"payment-tab-trigger\">
                                    <input type=\"radio\" name=\"cardType\" id=\"creditCart\" value=\"creditCard\">
                                    <label for=\"creditCart\">Credit / Debit Card</label>
                                    <img class=\"payment-logo\" width=\"100px\" src=\"https://i.imgur.com/IHEKLgm.png\" alt=\"\">
                                </div>
                                <div class=\"payment-tab-content\">
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            <div class=\"card-label\">
                                                <label for=\"nameOnCard\">Name on Card</label>
                                                <input class=\"form-control\" id=\"nameOnCard\" name=\"nameOnCard\" required type=\"text\">
                                            </div>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <div class=\"card-label\">
                                                <label for=\"cardNumber\">Card Number</label>
                                                <input class=\"form-control\" id=\"cardNumber\" name=\"cardNumber\"
                                                       placeholder=\"1234  5678  9876  5432\" required type=\"text\">
                                            </div>
                                        </div>
                                        <div class=\"col-md-4\">
                                            <div class=\"card-label\">
                                                <label for=\"expirynDate\">Expiry Month</label>
                                                <input class=\"form-control\" id=\"expiryDate\" placeholder=\"MM\" required type=\"text\">
                                            </div>
                                        </div>
                                        <div class=\"col-md-4\">
                                            <div class=\"card-label\">
                                                <label for=\"expiryDate\">Expiry Year</label>
                                                <input class=\"form-control\" id=\"expirynDate\" placeholder=\"YY\" required type=\"text\">
                                            </div>
                                        </div>
                                        <div class=\"col-md-4\">
                                            <div class=\"card-label\">
                                                <label for=\"cvv\">CVV</label>
                                                <input class=\"form-control\" id=\"cvv\" required type=\"text\">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <button class=\"btn btn-primary nextBtn pull-right\" type=\"button\">pay</button>
                    </div>
                </div>

            </form>
        ";
        } else {
            // line 286
            echo "
            ";
            // line 288
            echo "

            ";
            // line 291
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
                                <input type=\"radio\" id=\"jms_choose_payment_method_method_0\" name=\"jms_choose_payment_method[method]\" required=\"required\" value=\"paypal_express_checkout\">                                <label for=\"paypal\">PayPal</label>
                                <img class=\"payment-logo paypal\" width=\"100px\" src=\"https://i.imgur.com/ApBxkXU.png\" alt=\"\">
                                <input type=\"hidden\" id=\"jms_choose_payment_method__token\" name=\"jms_choose_payment_method[_token]\" value=\"Yv6r12pZ-T7XqZolXGscKT36L9bHgGLkqJfBGx3AWko\">
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
            // line 356
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["bundle"] ?? null), "price", [], "any", false, false, false, 356), "html", null, true);
            echo "\" />
                </div>
            </div>
            </form>
        ";
        }
        // line 361
        echo "
    </div>



";
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
        return array (  440 => 361,  432 => 356,  365 => 291,  361 => 288,  358 => 286,  247 => 177,  244 => 176,  228 => 162,  205 => 141,  203 => 140,  137 => 76,  133 => 75,  105 => 51,  100 => 49,  54 => 5,  50 => 4,  45 => 1,  43 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/purchase.html.twig", "C:\\Users\\Mohamedahmed\\PhpstormProjects\\untitled\\templates\\default\\purchase.html.twig");
    }
}
