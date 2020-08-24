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
    .div_1
        {
            color: white;
            background-color: black;
            position: absolute;
            border: 2px solid black;
            width: 100px;
            height: 100px;
            cursor: move;
        }
    .div_2
        {
            position: absolute;
            border: 2px solid steelblue;
            height: 200px;
        }
    .dragzone{
        border: 2px solid steelblue;
        height: 1000px;

    }
    .ScrollStyle
    {
        max-height: 500px;
        overflow-y: scroll;
    }
</style>
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css\" rel=\"stylesheet\" />
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
    <div style=\"display: flex;direction: rtl\">
        <div>
            <select id=\"test\" class=\"selectpicker\" data-live-search=\"true\" title=\"Selectionner un client\">
                <option data-tokens=\"Moez ben chrifia\">Moez ben chrifia</option>
                <option data-tokens=\"Karim gharbi\">Karim gharbi</option>
                <option data-tokens=\"Musut ozil\">Musut ozil</option>
            </select>
        </div>
      <div>
          <button type=\"submit\" class=\"btn btn-primary\">Valider</button>

      </div>
    </div>
    <br><br>
    <div id=\"main-wrapper\" >
            <div class=\"row\" >
                <div style=\"display: flex\">
                    <div class=\"col-lg-6 ScrollStyle\" >
                        <div class=\"col-lg-6 div1\" draggable=\"true\" ondragstart=\"handleDragStart(this)\"
                        >
                            <div class=\"panel mb-30\" style=\"height: 260px\">
                                <div class=\"panel-body\">
                                    <p class=\" header-title\" style=\"font-size: 15px;\" >Sweet</p>
                                    <p>
                                        Marque: Zara.
                                        <br>
                                        prix: 50dinars.
                                    </p>
                                    <img src=";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/sweet.png"), "html", null, true);
        echo " alt=\"\"
                                         style=\"width:100%;height:120px\"></a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-6 div2 \" draggable=\"true\" ondragstart=\"handleDragStart(this)\" >
                            <div class=\"panel mb-30\" style=\"height: 260px\">
                                <div class=\"panel-body\">
                                    <p class=\" header-title\" style=\"font-size: 15px;\" >Chaussures</p>
                                    <p>
                                        Marque: Zara.
                                        <br>
                                        prix: 50dinars.
                                    </p>
                                    <img src=";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/product-2.jpg"), "html", null, true);
        echo " alt=\"\"
                                         style=\"width:100%;height:120px\"></a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-6 div3 \" draggable=\"true\" ondragstart=\"handleDragStart(this)\">
                            <div class=\"panel mb-30\" style=\"height: 260px\">
                                <div class=\"panel-body\">
                                    <p class=\" header-title\" style=\"font-size: 15px;\" >Lunettes</p>
                                    <p>
                                        Marque: Zara.
                                        <br>
                                        prix: 50dinars.
                                    </p>
                                    <img src=";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/product-3.jpg"), "html", null, true);
        echo " alt=\"\"
                                         style=\"width:100%;height:120px\"></a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-6\" >
                            <div class=\"panel mb-30\" style=\"height: 260px\">
                                <div class=\"panel-body\">
                                    <p class=\" header-title\" style=\"font-size: 15px;\" >Sweet</p>
                                    <p>
                                        Marque: Zara.
                                        <br>
                                        prix: 50dinars.
                                    </p>
                                    <img src=";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/sweet.png"), "html", null, true);
        echo " alt=\"\"
                                         style=\"width:100%;height:120px\"></a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-6\">
                            <div class=\"panel mb-30\" style=\"height: 260px\">
                                <div class=\"panel-body\">
                                    <p class=\" header-title\" style=\"font-size: 15px;\" >Sweet</p>
                                    <p>
                                        Marque: Zara.
                                        <br>
                                        prix: 50dinars.
                                    </p>
                                    <img src=";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/sweet.png"), "html", null, true);
        echo " alt=\"\"
                                         style=\"width:100%;height:120px\"></a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-6\" >
                            <div class=\"panel mb-30\" style=\"height: 260px\">
                                <div class=\"panel-body\">
                                    <p class=\" header-title\" style=\"font-size: 15px;\" >Sweet</p>
                                    <p>
                                        Marque: Zara.
                                        <br>
                                        prix: 50dinars.
                                    </p>
                                    <img src=";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/sweet.png"), "html", null, true);
        echo " alt=\"\"
                                         style=\"width:100%;height:120px\"></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-lg-6 dragzone\"  ondragover=\"allowDrop(event)\"
                         ondrop=\"handleDrop()\" ondragenter=\"colorize(this)\"
                         ondragleave=\"uncolorize(this)\"
                    ></div>
                </div>
            </div>

    </div>
";
        // line 166
        echo "
";
        // line 174
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backOffice/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(document).ready(function()
        {
            var id=\"\";

            allowDrop = (event) => {
                event.preventDefault();
            }
            handleDragStart = (element) => {
                console.log('Started dragging');
                id=element.className;
            }
            colorize = (element) => {
                console.log('Entered the drop zone',element.className);
                element.classList.add('dragging-over');
                if(id.includes(\"div1\")){
                    console.log('Started dragging',id);
                    \$('.div1').appendTo('.dragzone');
                }
                if(id.includes(\"div2\")){
                    console.log('Started dragging',id);
                    \$('.div2').appendTo('.dragzone');
                }
                if(id.includes(\"div3\")){
                    console.log('Started dragging',id);
                    \$('.div3').appendTo('.dragzone');
                }
                //\$('.div2').appendTo('.dragzone');


            }
            uncolorize = (element) => {
                console.log('Left the drop zone');
                element.classList.remove('dragging-over');
                \$('.div_1').appendTo('.div_3');

            }
            handleDrop = () => {
                console.log('You dropped something!');
                \$('.div_1').appendTo('.div_2');
            }

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
        return array (  237 => 174,  234 => 166,  216 => 144,  199 => 130,  182 => 116,  165 => 102,  148 => 88,  131 => 74,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}

{% block body %}
    <style>
    .div_1
        {
            color: white;
            background-color: black;
            position: absolute;
            border: 2px solid black;
            width: 100px;
            height: 100px;
            cursor: move;
        }
    .div_2
        {
            position: absolute;
            border: 2px solid steelblue;
            height: 200px;
        }
    .dragzone{
        border: 2px solid steelblue;
        height: 1000px;

    }
    .ScrollStyle
    {
        max-height: 500px;
        overflow-y: scroll;
    }
</style>
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css\" rel=\"stylesheet\" />
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
    <div style=\"display: flex;direction: rtl\">
        <div>
            <select id=\"test\" class=\"selectpicker\" data-live-search=\"true\" title=\"Selectionner un client\">
                <option data-tokens=\"Moez ben chrifia\">Moez ben chrifia</option>
                <option data-tokens=\"Karim gharbi\">Karim gharbi</option>
                <option data-tokens=\"Musut ozil\">Musut ozil</option>
            </select>
        </div>
      <div>
          <button type=\"submit\" class=\"btn btn-primary\">Valider</button>

      </div>
    </div>
    <br><br>
    <div id=\"main-wrapper\" >
            <div class=\"row\" >
                <div style=\"display: flex\">
                    <div class=\"col-lg-6 ScrollStyle\" >
                        <div class=\"col-lg-6 div1\" draggable=\"true\" ondragstart=\"handleDragStart(this)\"
                        >
                            <div class=\"panel mb-30\" style=\"height: 260px\">
                                <div class=\"panel-body\">
                                    <p class=\" header-title\" style=\"font-size: 15px;\" >Sweet</p>
                                    <p>
                                        Marque: Zara.
                                        <br>
                                        prix: 50dinars.
                                    </p>
                                    <img src={{ asset('images/sweet.png') }} alt=\"\"
                                         style=\"width:100%;height:120px\"></a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-6 div2 \" draggable=\"true\" ondragstart=\"handleDragStart(this)\" >
                            <div class=\"panel mb-30\" style=\"height: 260px\">
                                <div class=\"panel-body\">
                                    <p class=\" header-title\" style=\"font-size: 15px;\" >Chaussures</p>
                                    <p>
                                        Marque: Zara.
                                        <br>
                                        prix: 50dinars.
                                    </p>
                                    <img src={{ asset('images/product-2.jpg') }} alt=\"\"
                                         style=\"width:100%;height:120px\"></a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-6 div3 \" draggable=\"true\" ondragstart=\"handleDragStart(this)\">
                            <div class=\"panel mb-30\" style=\"height: 260px\">
                                <div class=\"panel-body\">
                                    <p class=\" header-title\" style=\"font-size: 15px;\" >Lunettes</p>
                                    <p>
                                        Marque: Zara.
                                        <br>
                                        prix: 50dinars.
                                    </p>
                                    <img src={{ asset('images/product-3.jpg') }} alt=\"\"
                                         style=\"width:100%;height:120px\"></a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-6\" >
                            <div class=\"panel mb-30\" style=\"height: 260px\">
                                <div class=\"panel-body\">
                                    <p class=\" header-title\" style=\"font-size: 15px;\" >Sweet</p>
                                    <p>
                                        Marque: Zara.
                                        <br>
                                        prix: 50dinars.
                                    </p>
                                    <img src={{ asset('images/sweet.png') }} alt=\"\"
                                         style=\"width:100%;height:120px\"></a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-6\">
                            <div class=\"panel mb-30\" style=\"height: 260px\">
                                <div class=\"panel-body\">
                                    <p class=\" header-title\" style=\"font-size: 15px;\" >Sweet</p>
                                    <p>
                                        Marque: Zara.
                                        <br>
                                        prix: 50dinars.
                                    </p>
                                    <img src={{ asset('images/sweet.png') }} alt=\"\"
                                         style=\"width:100%;height:120px\"></a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-6\" >
                            <div class=\"panel mb-30\" style=\"height: 260px\">
                                <div class=\"panel-body\">
                                    <p class=\" header-title\" style=\"font-size: 15px;\" >Sweet</p>
                                    <p>
                                        Marque: Zara.
                                        <br>
                                        prix: 50dinars.
                                    </p>
                                    <img src={{ asset('images/sweet.png') }} alt=\"\"
                                         style=\"width:100%;height:120px\"></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-lg-6 dragzone\"  ondragover=\"allowDrop(event)\"
                         ondrop=\"handleDrop()\" ondragenter=\"colorize(this)\"
                         ondragleave=\"uncolorize(this)\"
                    ></div>
                </div>
            </div>

    </div>
{#    <div class=\"container\">#}
{#        <div class=\"div_3\" >#}
{#            <div class=\"div_1\" draggable=\"true\"#}
{#                 ondragstart=\"handleDragStart()\">#}
{#                div_1#}
{#            </div>#}
{#        </div>#}

{#        <div class=\"div_2\" ondragover=\"allowDrop(event)\"#}
{#             ondrop=\"handleDrop()\"#}
{#             ondragenter=\"colorize(this)\"#}
{#             ondragleave=\"uncolorize(this)\">#}
{#            div_2#}
{#        </div>#}
{#    </div>#}
    <script src=\"{{ asset('backOffice/js/jquery.min.js') }}\"></script>
    <script>
        \$(document).ready(function()
        {
            var id=\"\";

            allowDrop = (event) => {
                event.preventDefault();
            }
            handleDragStart = (element) => {
                console.log('Started dragging');
                id=element.className;
            }
            colorize = (element) => {
                console.log('Entered the drop zone',element.className);
                element.classList.add('dragging-over');
                if(id.includes(\"div1\")){
                    console.log('Started dragging',id);
                    \$('.div1').appendTo('.dragzone');
                }
                if(id.includes(\"div2\")){
                    console.log('Started dragging',id);
                    \$('.div2').appendTo('.dragzone');
                }
                if(id.includes(\"div3\")){
                    console.log('Started dragging',id);
                    \$('.div3').appendTo('.dragzone');
                }
                //\$('.div2').appendTo('.dragzone');


            }
            uncolorize = (element) => {
                console.log('Left the drop zone');
                element.classList.remove('dragging-over');
                \$('.div_1').appendTo('.div_3');

            }
            handleDrop = () => {
                console.log('You dropped something!');
                \$('.div_1').appendTo('.div_2');
            }

        });
    </script>


{% endblock %}", "backOffice/manageFashionBoard.html.twig", "/home/emir/Bureau/untitled/templates/backOffice/manageFashionBoard.html.twig");
    }
}
