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

/* default/quiz.html.twig */
class __TwigTemplate_f8dcf7c979a94afd8ebfcc5b3f745f81b3b4e83886717eb495e47ee065f87016 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/quiz.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "default/quiz.html.twig", 1);
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
        echo "<style>
    .privew {
        margin-bottom: 20px;
    }
    .questionsBox {
        display: block;
        border: solid 1px #e3e3e3;
        padding: 10px 20px 0px;
        box-shadow: inset 0 0 30px rgba(000,000,000,0.1), inset 0 0 4px rgba(255,255,255,1);
        border-radius: 3px;
        margin: 0 10px;
    }.questions {
         background: #007fbe;
         color: #FFF;
         font-size: 22px;
         padding: 8px 30px;
         font-weight: 300;
         margin: 0 -30px 10px;
         position: relative;
     }
    .questions:after {
        background: url(../img/icon.png) no-repeat left 0;
        display: block;
        position: absolute;
        top: 100%;
        width: 9px;
        height: 7px;
        content: '.';
        left: 0;
        text-align: left;
        font-size: 0;
    }
    .questions:after {
        left: auto;
        right: 0;
        background-position: -10px 0;
    }
    .questions:before, .questions:after {
        background: black;
        display: block;
        position: absolute;
        top: 100%;
        width: 9px;
        height: 7px;
        content: '.';
        left: 0;
        text-align: left;
        font-size: 0;
    }
    .answerList {
        margin-bottom: 15px;
    }


    ol, ul {
        list-style: none;
    }
    .answerList li:first-child {
        border-top-width: 0;
    }

    .answerList li {
        padding: 3px 0;
    }
    .answerList label {
        display: block;
        padding: 6px;
        border-radius: 6px;
        border: solid 1px #dde7e8;
        font-weight: 400;
        font-size: 13px;
        cursor: pointer;
        font-family: Arial, sans-serif;
    }
    input[type=checkbox], input[type=radio] {
        margin: 4px 0 0;
        margin-top: 1px;
        line-height: normal;
    }
    .questionsRow {
        background: #dee3e6;
        margin: 0 -20px;
        padding: 10px 20px;
        border-radius: 0 0 3px 3px;
    }
    .button, .greyButton {
        background-color: #f2f2f2;
        color: #888888;
        display: inline-block;
        border: solid 3px #cccccc;
        vertical-align: middle;
        text-shadow: 0 1px 0 #ffffff;
        line-height: 27px;
        min-width: 160px;
        text-align: center;
        padding: 5px 20px;
        text-decoration: none;
        border-radius: 0px;
        text-transform: capitalize;
    }
    .questionsRow span {
        float: right;
        display: inline-block;
        line-height: 30px;
        border: solid 1px #aeb9c0;
        padding: 0 10px;
        background: #FFF;
        color: #007fbe;
    }



</style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 117
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 118
        echo "<div class=\"container\">
    <div class=\"privew\">
        <form>

        <div class=\"questionsBox\">
            <div style=\"background: #FF8661\" class=\"questions form-group\">
                Which of the following is correct about data-keyboard Data attribute of Modal Plugin?</div>
            <ul class=\"answerList\">
                <li>
                    <label>
                        <input  class=\"form-check-input\" type=\"radio\" name=\"answerGroup1\" value=\"It specifies static for a backdrop, if you don't want the modal to be closed when the user clicks outside of the modal.\" id=\"answerGroup_10\" required> It specifies static for a backdrop, if you don't want the modal to be closed when the user clicks outside of the modal.</label>
                </li>
                <li>
                    <label>
                        <input class=\"form-check-input\" type=\"radio\" name=\"answerGroup1\" value=\"It closes the modal when escape key is pressed; set to false to disable.\" id=\"answerGroup_11\" required> It closes the modal when escape key is pressed; set to false to disable.</label>
                </li>
                <li>
                    <label>
                        <input class=\"form-check-input\" type=\"radio\" name=\"answerGroup1\" value=\"It shows the modal when initialized.\" id=\"answerGroup_12\" required> It shows the modal when initialized.</label>
                </li>
                <li>
                    <label>
                        <input class=\"form-check-input\" type=\"radio\" name=\"answerGroup1\" value=\"Using the jQuery .load method, injects content into the modal body. If an href with a valid URL is added, it will load that content.\" id=\"answerGroup_13\" required> Using the jQuery .load method, injects content into the modal body. If an href with a valid URL is added, it will load that content.</label>
                </li>
            </ul>
        </div>
        <div class=\"questionsBox\">
            <div style=\"background: #FF8661\" class=\"questions form-group\">Which of the following is correct about data-keyboard Data attribute of Modal Plugin?</div>
            <ul class=\"answerList\">
                <li>
                    <label>
                        <input class=\"form-check-input\" type=\"radio\" name=\"answerGroup2\" value=\"It specifies static for a backdrop, if you don't want the modal to be closed when the user clicks outside of the modal.\" id=\"answerGroup_20\" required> It specifies static for a backdrop, if you don't want the modal to be closed when the user clicks outside of the modal.</label>
                </li>
                <li>
                    <label>
                        <input class=\"form-check-input\" type=\"radio\" name=\"answerGroup2\" value=\" It closes the modal when escape key is pressed; set to false to disable.\" id=\"answerGroup_21\" required> It closes the modal when escape key is pressed; set to false to disable.</label>
                </li>
                <li>
                    <label>
                        <input class=\"form-check-input\" type=\"radio\" name=\"answerGroup2\" value=\"It shows the modal when initialized.\" id=\"answerGroup_22\" required> It shows the modal when initialized.</label>
                </li>
                <li>
                    <label>
                        <input class=\"form-check-input\" type=\"radio\" name=\"answerGroup2\" value=\"Using the jQuery .load method, injects content into the modal body. If an href with a valid URL is added, it will load that content.\" id=\"answerGroup_23\" required> Using the jQuery .load method, injects content into the modal body. If an href with a valid URL is added, it will load that content.</label>
                </li>
            </ul>
        </div>
        <div  class=\"questionsBox\">
            <div style=\"background: #FF8661\" class=\"questions form-group\">Which of the following is correct about data-keyboard Data attribute of Modal Plugin?</div>
            <ul class=\"answerList\">
                <li>
                    <label>
                        <input class=\"form-check-input\" type=\"radio\" name=\"answerGroup3\" value=\" It specifies static for a backdrop, if you don't want the modal to be closed when the user clicks outside of the modal.\" id=\"answerGroup_30\" required> It specifies static for a backdrop, if you don't want the modal to be closed when the user clicks outside of the modal.</label>
                </li>
                <li>
                    <label>
                        <input class=\"form-check-input\" type=\"radio\" name=\"answerGroup3\" value=\" It closes the modal when escape key is pressed; set to false to disable.\" id=\"answerGroup_31\" required> It closes the modal when escape key is pressed; set to false to disable.</label>
                </li>
                <li>
                    <label>
                        <input class=\"form-check-input\" type=\"radio\" name=\"answerGroup3\" value=\"It shows the modal when initialized.\" id=\"answerGroup_32\" required> It shows the modal when initialized.</label>
                </li>
                <li>
                    <label>
                        <input class=\"form-check-input\" type=\"radio\" name=\"answerGroup3\" value=\" Using the jQuery .load method, injects content into the modal body. If an href with a valid URL is added, it will load that content.\" id=\"answerGroup_33\" required> Using the jQuery .load method, injects content into the modal body. If an href with a valid URL is added, it will load that content.</label>
                </li>
            </ul>
        </div>
        <button onclick=\"submitquiz()\" class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Finish</button>
        </form>
    </div>

</div>
    <script>
        function handleForm(event) { event.preventDefault(); }

        function submitquiz(){
            var values = [];
            var item1;
            var questions=[\"Which of the following is correct about data-keyboard Data attribute of Modal Plugin?\",\"Which of the following is correct about data-keyboard Data attribute of Modal Plugin?\",\"Which of the following is correct about data-keyboard Data attribute of Modal Plugin?\"]
            var f = document.getElementsByTagName('form')[0];
            f.addEventListener('submit', handleForm);
            if(f.checkValidity())
            {
                for(var i = 1; i <= 3; i++) {
                    var radios = document.getElementsByName('answerGroup'+i);

                    for(var j = 0; j < radios.length; j++) {
                        var radio = radios[j];
                        if( radio.checked) {
                            item1= {\"question\":questions[i-1],\"answer\":radio.value}
                        }
                    }
                    values.push(item1);
                }
                console.log(JSON.stringify(values));
                \$.ajax({
                    url: \"";
        // line 215
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("quizsubmit");
        echo "\",
                    type: \"POST\",
                    data: {'values' :  JSON.stringify(values)},

                    success: function (result) {
                    }
                });            }

        }

    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "default/quiz.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 215,  187 => 118,  180 => 117,  60 => 3,  53 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block scripts %}
<style>
    .privew {
        margin-bottom: 20px;
    }
    .questionsBox {
        display: block;
        border: solid 1px #e3e3e3;
        padding: 10px 20px 0px;
        box-shadow: inset 0 0 30px rgba(000,000,000,0.1), inset 0 0 4px rgba(255,255,255,1);
        border-radius: 3px;
        margin: 0 10px;
    }.questions {
         background: #007fbe;
         color: #FFF;
         font-size: 22px;
         padding: 8px 30px;
         font-weight: 300;
         margin: 0 -30px 10px;
         position: relative;
     }
    .questions:after {
        background: url(../img/icon.png) no-repeat left 0;
        display: block;
        position: absolute;
        top: 100%;
        width: 9px;
        height: 7px;
        content: '.';
        left: 0;
        text-align: left;
        font-size: 0;
    }
    .questions:after {
        left: auto;
        right: 0;
        background-position: -10px 0;
    }
    .questions:before, .questions:after {
        background: black;
        display: block;
        position: absolute;
        top: 100%;
        width: 9px;
        height: 7px;
        content: '.';
        left: 0;
        text-align: left;
        font-size: 0;
    }
    .answerList {
        margin-bottom: 15px;
    }


    ol, ul {
        list-style: none;
    }
    .answerList li:first-child {
        border-top-width: 0;
    }

    .answerList li {
        padding: 3px 0;
    }
    .answerList label {
        display: block;
        padding: 6px;
        border-radius: 6px;
        border: solid 1px #dde7e8;
        font-weight: 400;
        font-size: 13px;
        cursor: pointer;
        font-family: Arial, sans-serif;
    }
    input[type=checkbox], input[type=radio] {
        margin: 4px 0 0;
        margin-top: 1px;
        line-height: normal;
    }
    .questionsRow {
        background: #dee3e6;
        margin: 0 -20px;
        padding: 10px 20px;
        border-radius: 0 0 3px 3px;
    }
    .button, .greyButton {
        background-color: #f2f2f2;
        color: #888888;
        display: inline-block;
        border: solid 3px #cccccc;
        vertical-align: middle;
        text-shadow: 0 1px 0 #ffffff;
        line-height: 27px;
        min-width: 160px;
        text-align: center;
        padding: 5px 20px;
        text-decoration: none;
        border-radius: 0px;
        text-transform: capitalize;
    }
    .questionsRow span {
        float: right;
        display: inline-block;
        line-height: 30px;
        border: solid 1px #aeb9c0;
        padding: 0 10px;
        background: #FFF;
        color: #007fbe;
    }



</style>
{% endblock %}
{% block body %}
<div class=\"container\">
    <div class=\"privew\">
        <form>

        <div class=\"questionsBox\">
            <div style=\"background: #FF8661\" class=\"questions form-group\">
                Which of the following is correct about data-keyboard Data attribute of Modal Plugin?</div>
            <ul class=\"answerList\">
                <li>
                    <label>
                        <input  class=\"form-check-input\" type=\"radio\" name=\"answerGroup1\" value=\"It specifies static for a backdrop, if you don't want the modal to be closed when the user clicks outside of the modal.\" id=\"answerGroup_10\" required> It specifies static for a backdrop, if you don't want the modal to be closed when the user clicks outside of the modal.</label>
                </li>
                <li>
                    <label>
                        <input class=\"form-check-input\" type=\"radio\" name=\"answerGroup1\" value=\"It closes the modal when escape key is pressed; set to false to disable.\" id=\"answerGroup_11\" required> It closes the modal when escape key is pressed; set to false to disable.</label>
                </li>
                <li>
                    <label>
                        <input class=\"form-check-input\" type=\"radio\" name=\"answerGroup1\" value=\"It shows the modal when initialized.\" id=\"answerGroup_12\" required> It shows the modal when initialized.</label>
                </li>
                <li>
                    <label>
                        <input class=\"form-check-input\" type=\"radio\" name=\"answerGroup1\" value=\"Using the jQuery .load method, injects content into the modal body. If an href with a valid URL is added, it will load that content.\" id=\"answerGroup_13\" required> Using the jQuery .load method, injects content into the modal body. If an href with a valid URL is added, it will load that content.</label>
                </li>
            </ul>
        </div>
        <div class=\"questionsBox\">
            <div style=\"background: #FF8661\" class=\"questions form-group\">Which of the following is correct about data-keyboard Data attribute of Modal Plugin?</div>
            <ul class=\"answerList\">
                <li>
                    <label>
                        <input class=\"form-check-input\" type=\"radio\" name=\"answerGroup2\" value=\"It specifies static for a backdrop, if you don't want the modal to be closed when the user clicks outside of the modal.\" id=\"answerGroup_20\" required> It specifies static for a backdrop, if you don't want the modal to be closed when the user clicks outside of the modal.</label>
                </li>
                <li>
                    <label>
                        <input class=\"form-check-input\" type=\"radio\" name=\"answerGroup2\" value=\" It closes the modal when escape key is pressed; set to false to disable.\" id=\"answerGroup_21\" required> It closes the modal when escape key is pressed; set to false to disable.</label>
                </li>
                <li>
                    <label>
                        <input class=\"form-check-input\" type=\"radio\" name=\"answerGroup2\" value=\"It shows the modal when initialized.\" id=\"answerGroup_22\" required> It shows the modal when initialized.</label>
                </li>
                <li>
                    <label>
                        <input class=\"form-check-input\" type=\"radio\" name=\"answerGroup2\" value=\"Using the jQuery .load method, injects content into the modal body. If an href with a valid URL is added, it will load that content.\" id=\"answerGroup_23\" required> Using the jQuery .load method, injects content into the modal body. If an href with a valid URL is added, it will load that content.</label>
                </li>
            </ul>
        </div>
        <div  class=\"questionsBox\">
            <div style=\"background: #FF8661\" class=\"questions form-group\">Which of the following is correct about data-keyboard Data attribute of Modal Plugin?</div>
            <ul class=\"answerList\">
                <li>
                    <label>
                        <input class=\"form-check-input\" type=\"radio\" name=\"answerGroup3\" value=\" It specifies static for a backdrop, if you don't want the modal to be closed when the user clicks outside of the modal.\" id=\"answerGroup_30\" required> It specifies static for a backdrop, if you don't want the modal to be closed when the user clicks outside of the modal.</label>
                </li>
                <li>
                    <label>
                        <input class=\"form-check-input\" type=\"radio\" name=\"answerGroup3\" value=\" It closes the modal when escape key is pressed; set to false to disable.\" id=\"answerGroup_31\" required> It closes the modal when escape key is pressed; set to false to disable.</label>
                </li>
                <li>
                    <label>
                        <input class=\"form-check-input\" type=\"radio\" name=\"answerGroup3\" value=\"It shows the modal when initialized.\" id=\"answerGroup_32\" required> It shows the modal when initialized.</label>
                </li>
                <li>
                    <label>
                        <input class=\"form-check-input\" type=\"radio\" name=\"answerGroup3\" value=\" Using the jQuery .load method, injects content into the modal body. If an href with a valid URL is added, it will load that content.\" id=\"answerGroup_33\" required> Using the jQuery .load method, injects content into the modal body. If an href with a valid URL is added, it will load that content.</label>
                </li>
            </ul>
        </div>
        <button onclick=\"submitquiz()\" class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Finish</button>
        </form>
    </div>

</div>
    <script>
        function handleForm(event) { event.preventDefault(); }

        function submitquiz(){
            var values = [];
            var item1;
            var questions=[\"Which of the following is correct about data-keyboard Data attribute of Modal Plugin?\",\"Which of the following is correct about data-keyboard Data attribute of Modal Plugin?\",\"Which of the following is correct about data-keyboard Data attribute of Modal Plugin?\"]
            var f = document.getElementsByTagName('form')[0];
            f.addEventListener('submit', handleForm);
            if(f.checkValidity())
            {
                for(var i = 1; i <= 3; i++) {
                    var radios = document.getElementsByName('answerGroup'+i);

                    for(var j = 0; j < radios.length; j++) {
                        var radio = radios[j];
                        if( radio.checked) {
                            item1= {\"question\":questions[i-1],\"answer\":radio.value}
                        }
                    }
                    values.push(item1);
                }
                console.log(JSON.stringify(values));
                \$.ajax({
                    url: \"{{ path('quizsubmit') }}\",
                    type: \"POST\",
                    data: {'values' :  JSON.stringify(values)},

                    success: function (result) {
                    }
                });            }

        }

    </script>
{% endblock %}", "default/quiz.html.twig", "/home/emir/Bureau/fashionBoard/templates/default/quiz.html.twig");
    }
}
