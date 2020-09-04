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

/* backOffice/manageFashionBoard.html.twig */
class __TwigTemplate_6a33701d5da57808c5d75747281d15b39d7991b018c8615806516ff89c790107 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "baseAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backOffice/manageFashionBoard.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "backOffice/manageFashionBoard.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <style>
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

    <style>
        .question {
            font-style: italic;
            margin-bottom: 0.5em;
            font-family: Georgia, Times, \"Times New Roman\", serif
        }

        .div_1 {
            color: white;
            background-color: black;
            position: absolute;
            border: 2px solid black;
            width: 100px;
            height: 100px;
            cursor: move;
        }

        .div_2 {
            position: absolute;
            border: 2px solid steelblue;
            height: 200px;
        }

        .dragzone {
            border: 2px solid steelblue;
            height: 1000px;

        }

        .ScrollStyle {
            max-height: 500px;
            overflow-y: scroll;
        }
    </style>
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css\"
          rel=\"stylesheet\"/>
    <div class=\"page-title mb-15\">
        <div class=\"pull-left\"><h3 class=\"breadcrumb-header\">FashionBoard</h3>
            <p class=\"text-muted mb-0\">Ajuster un style vestimentaire</p></div>
        <div class=\"pull-right\">
            <div class=\"btn-group mx-auto\">
                <ol class=\"breadcrumb hide-phone pt-4 pb-4 m-0\">
                    <li class=\"breadcrumb-item\"><a href=\"#\">Admin</a></li>
                    <li class=\"breadcrumb-item active\">FashionBoard</li>
                </ol>
            </div>
        </div>
        <div class=\"clearfix\"></div>
    </div>
    <div style=\"display: flex;\">


        <div>
            <select id=\"test\" class=\"selectpicker\" data-live-search=\"true\"
                    title=\"Selectionner un client\" >
                ";
        // line 173
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fashionBoards"]) || array_key_exists("fashionBoards", $context) ? $context["fashionBoards"] : (function () { throw new RuntimeError('Variable "fashionBoards" does not exist.', 173, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["fashionBoard"]) {
            // line 174
            echo "                    <option data-tokens=\"Moez ben chrifia\" value=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["fashionBoard"], "user", [], "any", false, false, false, 174), "id", [], "any", false, false, false, 174), "html", null, true);
            echo ">
                        ";
            // line 175
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["fashionBoard"], "user", [], "any", false, false, false, 175), "firstname", [], "any", false, false, false, 175), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["fashionBoard"], "user", [], "any", false, false, false, 175), "lastname", [], "any", false, false, false, 175), "html", null, true);
            echo "
                    </option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fashionBoard'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 178
        echo "            </select>
        </div>
        <div style=\"margin-left: 600px\">
            <button type=\"submit\" class=\"btn btn-light\" onclick=\"cancel()\">Annuler</button>
            <button type=\"submit\" class=\"btn btn-primary\" onclick=\"update()\">Valider</button>

        </div>
    </div>
    <br><br>
    <div id=\"main-wrapper\">
        <div class=\"row\">
            <div style=\"display: flex\">
                <div class=\"col-lg-6 ScrollStyle\">
                    ";
        // line 191
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 191, $this->source); })()));
        foreach ($context['_seq'] as $context["i"] => $context["product"]) {
            // line 192
            echo "                        ";
            $context["i"] = ($context["i"] + 1);
            // line 193
            echo "                        ";
            $context["div"] = twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 193);
            // line 194
            echo "                        ";
            $context["clasname"] = ("col-lg-6 " . (isset($context["div"]) || array_key_exists("div", $context) ? $context["div"] : (function () { throw new RuntimeError('Variable "div" does not exist.', 194, $this->source); })()));
            // line 195
            echo "                        <div class=\"";
            echo twig_escape_filter($this->env, (isset($context["clasname"]) || array_key_exists("clasname", $context) ? $context["clasname"] : (function () { throw new RuntimeError('Variable "clasname" does not exist.', 195, $this->source); })()), "html", null, true);
            echo "\" draggable=\"true\"
                             ondragstart=\"handleDragStart(this)\">
                            <div class=\"panel mb-30\" style=\"height: 260px\">
                                <div class=\"panel-body\">
                                    <p class=\" header-title\" style=\"font-size: 15px;\">";
            // line 199
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "nom", [], "any", false, false, false, 199));
            echo "</p>
                                    <p>
                                        Marque: ";
            // line 201
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "marque", [], "any", false, false, false, 201));
            echo " ";
            echo twig_escape_filter($this->env, ($context["i"] + 1), "html", null, true);
            echo "
                                        <br>
                                        prix: ";
            // line 203
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "prix", [], "any", false, false, false, 203));
            echo "
                                    </p>
                                    <img src=\"";
            // line 205
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/brochures/" . twig_get_attribute($this->env, $this->source, $context["product"], "brochureFilename", [], "any", false, false, false, 205))), "html", null, true);
            echo "\" alt=\"\"
                                         style=\"width:100%;height:120px\"></a>
                                </div>
                            </div>
                        </div>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 212
        echo "

                </div>

                <div class=\"col-lg-6 dragzone\" ondragover=\"allowDrop(event)\"
                     ondrop=\"handleDrop()\" ondragenter=\"colorize(this)\"
                     ondragleave=\"uncolorize(this)\"
                ></div>
            </div>
        </div>

    </div>
    <!-- dataModal -->
    <div id=\"dataModal\" class=\"modal fade\">

        </div>


    <script src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backOffice/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(document).ready(function () {
            var fashionBoard = {
                products: [],
                user: \"\",
                adminValidation: true
            };
            var quizByUser = {
                quizs: [],
                showPopup: true
            };
            var id = \"\";
            var products =[];
            var quizs=[];
            \$(\"select.selectpicker\").change(function(){
                var selectedClient = \$(this).children(\"option:selected\").val();
                fashionBoard.user=selectedClient;
                \$('#modal-title').html(\"Modifier profile\");

                //path de l'action editer de fos user : formulaire de modification
                var url = '";
        // line 251
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("getQuiz");
        echo "';

                \$.ajax({
                    type: 'get',
                    url: url,
                    data:fashionBoard,
                    success: function (data) {
                        // résultat de action edit : formulaire inclure dans popup
                        //\$('#modal_detail').html(data);
                        quizs=data;
                        console.log(\"res2\",quizs)
                        var inputs='<div class=\"modal-dialog\"><div class=\"panel mb-30\"> <div class=\"panel-body\"><p class=\" header-title\" style=\"font-size: 15px;\">Quiz</p><div class=\"container\" style=\"width: 100%\">';
                        for (var i = 0; i < quizs.length; i++) {
                            inputs+='<div class=\"questionsBox\">';
                            if(i%2 ==0){
                               inputs+='<div class=\"questions form-group\">'+quizs[i]+'</div>'
                            }else{
                                inputs += '<ul class=\"answerList\"><li>'+quizs[i]+'</li></ul>';
                            }
                            inputs+='</div>'
                        }
                        inputs+='</div></div></div></div>'

                        document.getElementById('dataModal').insertAdjacentHTML('afterbegin', inputs);

                        quizByUser.quizs=quizs
                        \$('#dataModal').modal(\"show\");
                    }
                });
                //Affichage de nouvelle popup

            });

            allowDrop = (event) => {
                event.preventDefault();
            }
            handleDragStart = (element) => {
                id = element.className;
            }
            colorize = (element) => {
                element.classList.add('dragging-over');
                var res = \".\"+id.substring(9, 15);
                \$(res).appendTo('.dragzone');
            }
            uncolorize = (element) => {
                element.classList.remove('dragging-over');
            }
            handleDrop = () => {
                products.push(id.substring(9, 15))
                console.log(\"handle\");
            }
            update = ()=>{
                fashionBoard.products=products;
                var url = '";
        // line 304
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updateFashionBoard");
        echo "';
                \$.ajax({
                    type: 'put',
                    url: url,
                    data:fashionBoard,
                    success: function (data) {
                        // résultat de action edit : formulaire inclure dans popup
                        location.reload();

                    }
                });
            }
            cancel = ()=>{
                location.reload();
            }
            \$('#editFashionBundle').click(function () {



                //path de l'action editer de fos user : formulaire de modification
                var url = '";
        // line 324
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_profile_edit");
        echo "';

                \$.ajax({
                    type: 'post',
                    //url: url,
                    success: function (data) {
                        // résultat de action edit : formulaire inclure dans popup
                        fashionBoard.products=products;
                        console.log(\"fashionBoard\",fashionBoard)
                    }
                });

            });
        });
    </script>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "backOffice/manageFashionBoard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  439 => 324,  416 => 304,  360 => 251,  336 => 230,  316 => 212,  303 => 205,  298 => 203,  291 => 201,  286 => 199,  278 => 195,  275 => 194,  272 => 193,  269 => 192,  265 => 191,  250 => 178,  239 => 175,  234 => 174,  230 => 173,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}

{% block body %}
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

    <style>
        .question {
            font-style: italic;
            margin-bottom: 0.5em;
            font-family: Georgia, Times, \"Times New Roman\", serif
        }

        .div_1 {
            color: white;
            background-color: black;
            position: absolute;
            border: 2px solid black;
            width: 100px;
            height: 100px;
            cursor: move;
        }

        .div_2 {
            position: absolute;
            border: 2px solid steelblue;
            height: 200px;
        }

        .dragzone {
            border: 2px solid steelblue;
            height: 1000px;

        }

        .ScrollStyle {
            max-height: 500px;
            overflow-y: scroll;
        }
    </style>
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css\"
          rel=\"stylesheet\"/>
    <div class=\"page-title mb-15\">
        <div class=\"pull-left\"><h3 class=\"breadcrumb-header\">FashionBoard</h3>
            <p class=\"text-muted mb-0\">Ajuster un style vestimentaire</p></div>
        <div class=\"pull-right\">
            <div class=\"btn-group mx-auto\">
                <ol class=\"breadcrumb hide-phone pt-4 pb-4 m-0\">
                    <li class=\"breadcrumb-item\"><a href=\"#\">Admin</a></li>
                    <li class=\"breadcrumb-item active\">FashionBoard</li>
                </ol>
            </div>
        </div>
        <div class=\"clearfix\"></div>
    </div>
    <div style=\"display: flex;\">


        <div>
            <select id=\"test\" class=\"selectpicker\" data-live-search=\"true\"
                    title=\"Selectionner un client\" >
                {% for fashionBoard in fashionBoards %}
                    <option data-tokens=\"Moez ben chrifia\" value={{ fashionBoard.user.id }}>
                        {{ fashionBoard.user.firstname }}{{ \" \" }}{{ fashionBoard.user.lastname }}
                    </option>
                {% endfor %}
            </select>
        </div>
        <div style=\"margin-left: 600px\">
            <button type=\"submit\" class=\"btn btn-light\" onclick=\"cancel()\">Annuler</button>
            <button type=\"submit\" class=\"btn btn-primary\" onclick=\"update()\">Valider</button>

        </div>
    </div>
    <br><br>
    <div id=\"main-wrapper\">
        <div class=\"row\">
            <div style=\"display: flex\">
                <div class=\"col-lg-6 ScrollStyle\">
                    {% for i,product in products %}
                        {% set i = i + 1 %}
                        {% set div = product.id%}
                        {% set clasname='col-lg-6 '~div %}
                        <div class=\"{{ clasname }}\" draggable=\"true\"
                             ondragstart=\"handleDragStart(this)\">
                            <div class=\"panel mb-30\" style=\"height: 260px\">
                                <div class=\"panel-body\">
                                    <p class=\" header-title\" style=\"font-size: 15px;\">{{ product.nom|e }}</p>
                                    <p>
                                        Marque: {{ product.marque|e }} {{ i+1 }}
                                        <br>
                                        prix: {{ product.prix|e }}
                                    </p>
                                    <img src=\"{{ asset('uploads/brochures/'~product.brochureFilename) }}\" alt=\"\"
                                         style=\"width:100%;height:120px\"></a>
                                </div>
                            </div>
                        </div>

                    {% endfor %}


                </div>

                <div class=\"col-lg-6 dragzone\" ondragover=\"allowDrop(event)\"
                     ondrop=\"handleDrop()\" ondragenter=\"colorize(this)\"
                     ondragleave=\"uncolorize(this)\"
                ></div>
            </div>
        </div>

    </div>
    <!-- dataModal -->
    <div id=\"dataModal\" class=\"modal fade\">

        </div>


    <script src=\"{{ asset('backOffice/js/jquery.min.js') }}\"></script>
    <script>
        \$(document).ready(function () {
            var fashionBoard = {
                products: [],
                user: \"\",
                adminValidation: true
            };
            var quizByUser = {
                quizs: [],
                showPopup: true
            };
            var id = \"\";
            var products =[];
            var quizs=[];
            \$(\"select.selectpicker\").change(function(){
                var selectedClient = \$(this).children(\"option:selected\").val();
                fashionBoard.user=selectedClient;
                \$('#modal-title').html(\"Modifier profile\");

                //path de l'action editer de fos user : formulaire de modification
                var url = '{{ path('getQuiz') }}';

                \$.ajax({
                    type: 'get',
                    url: url,
                    data:fashionBoard,
                    success: function (data) {
                        // résultat de action edit : formulaire inclure dans popup
                        //\$('#modal_detail').html(data);
                        quizs=data;
                        console.log(\"res2\",quizs)
                        var inputs='<div class=\"modal-dialog\"><div class=\"panel mb-30\"> <div class=\"panel-body\"><p class=\" header-title\" style=\"font-size: 15px;\">Quiz</p><div class=\"container\" style=\"width: 100%\">';
                        for (var i = 0; i < quizs.length; i++) {
                            inputs+='<div class=\"questionsBox\">';
                            if(i%2 ==0){
                               inputs+='<div class=\"questions form-group\">'+quizs[i]+'</div>'
                            }else{
                                inputs += '<ul class=\"answerList\"><li>'+quizs[i]+'</li></ul>';
                            }
                            inputs+='</div>'
                        }
                        inputs+='</div></div></div></div>'

                        document.getElementById('dataModal').insertAdjacentHTML('afterbegin', inputs);

                        quizByUser.quizs=quizs
                        \$('#dataModal').modal(\"show\");
                    }
                });
                //Affichage de nouvelle popup

            });

            allowDrop = (event) => {
                event.preventDefault();
            }
            handleDragStart = (element) => {
                id = element.className;
            }
            colorize = (element) => {
                element.classList.add('dragging-over');
                var res = \".\"+id.substring(9, 15);
                \$(res).appendTo('.dragzone');
            }
            uncolorize = (element) => {
                element.classList.remove('dragging-over');
            }
            handleDrop = () => {
                products.push(id.substring(9, 15))
                console.log(\"handle\");
            }
            update = ()=>{
                fashionBoard.products=products;
                var url = '{{ path('updateFashionBoard') }}';
                \$.ajax({
                    type: 'put',
                    url: url,
                    data:fashionBoard,
                    success: function (data) {
                        // résultat de action edit : formulaire inclure dans popup
                        location.reload();

                    }
                });
            }
            cancel = ()=>{
                location.reload();
            }
            \$('#editFashionBundle').click(function () {



                //path de l'action editer de fos user : formulaire de modification
                var url = '{{ path('fos_user_profile_edit') }}';

                \$.ajax({
                    type: 'post',
                    //url: url,
                    success: function (data) {
                        // résultat de action edit : formulaire inclure dans popup
                        fashionBoard.products=products;
                        console.log(\"fashionBoard\",fashionBoard)
                    }
                });

            });
        });
    </script>


{% endblock %}", "backOffice/manageFashionBoard.html.twig", "/home/emir/Bureau/fashionBoard/templates/backOffice/manageFashionBoard.html.twig");
    }
}
