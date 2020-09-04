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

/* default/fashionboard.html.twig */
class __TwigTemplate_a54bf8b1983c770fa9ec12878490c191f21888b47f00a2f6b794dbe8d26a3d05 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/fashionboard.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "default/fashionboard.html.twig", 1);
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
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("alertify/css/alertify.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("alertify/css/alertify.rtl.css"), "html", null, true);
        echo "\">

    <!--<script src=\"notify.js\"></script> DITCH THIS LINE -->
    <script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("alertify/alertify.js"), "html", null, true);
        echo "\"></script>

    <script>


        function purchasedirection(){

        \$.ajax({
            url: \"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activatedfasionboard");
        echo "\",

            type: \"POST\",
            success: function (result) {
                console.log(result)
                \$('#exampleModalLong').modal('hide');
                window.location.href = result.message;


            }
        });
    }

</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 30
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 31
        echo "
    <div class=\"product-section product-section1 product-section2 container-fluid no-padding\">
        <!-- Container -->
        <div class=\"container\">
            <div class=\"row\">
                <div style=\"height: 100px;\" class=\"col-md-3 col-sm-3 col-xs-12 widget-area no-right-padding\">
                    <!-- Widget Search -->
                    <!-- Widget Categories -->
                    <aside style=\"padding-bottom: 10px;\" class=\"widget widget_categories\">
                        <h3 class=\"widget-title\">fashion board informations</h3>
                        <ul>

                            <li><a href=\"#\" title=\"Beautiful Chairs\">activated <span>(";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["nbactivatedboards"]) || array_key_exists("nbactivatedboards", $context) ? $context["nbactivatedboards"] : (function () { throw new RuntimeError('Variable "nbactivatedboards" does not exist.', 43, $this->source); })()), "html", null, true);
        echo ")</span></a></li>

                            <li><a href=\"#\" title=\"Beautiful Chairs\">total fashionboard <span>(";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["nbboards"]) || array_key_exists("nbboards", $context) ? $context["nbboards"] : (function () { throw new RuntimeError('Variable "nbboards" does not exist.', 45, $this->source); })()), "html", null, true);
        echo ")</span></a></li>

                        </ul>


                        <!-- Modal -->
                        <div class=\"modal fade\" id=\"exampleModalLong\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLongTitle\" aria-hidden=\"true\">
                            <div class=\"modal-dialog\" role=\"document\">
                                <div class=\"modal-content\">
                                    <div class=\"modal-header\">
                                        <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Confirmation</h5>
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                            <span aria-hidden=\"true\">&times;</span>
                                        </button>
                                    </div>
                                    <div class=\"modal-body\">
                                        do you really want to activate the fashion board                                    </div>
                                    <div class=\"modal-footer\">
                                        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                                        <button type=\"button\" onclick=\"purchasedirection()\" class=\"btn btn-primary\">confirm</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div style=\"padding-left: 30px;\" class=\"form-group col-md-6\">
                                <a href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formule");
        echo "\" type=\"button\" class=\"btn btn-warning\" name=\"post\">Purchase</a>

                            </div>                                <div  class=\"form-detail\">

                            <div style=\"padding-left: 30px;\" class=\"form-group col-md-6\">
                                ";
        // line 76
        if (((isset($context["nbactivatedboards"]) || array_key_exists("nbactivatedboards", $context) ? $context["nbactivatedboards"] : (function () { throw new RuntimeError('Variable "nbactivatedboards" does not exist.', 76, $this->source); })()) == (isset($context["nbboards"]) || array_key_exists("nbboards", $context) ? $context["nbboards"] : (function () { throw new RuntimeError('Variable "nbboards" does not exist.', 76, $this->source); })()))) {
            // line 77
            echo "                                <a type=\"button\" disabled  data-confirm=\"Etes-vous certain de vouloir supprimer? \" class=\"btn btn-warning\" name=\"post\">Activate</a>

                                ";
        } else {
            // line 80
            echo "                                    <a type=\"button\"  data-confirm=\"Etes-vous certain de vouloir supprimer? \" data-toggle=\"modal\" data-target=\"#exampleModalLong\" class=\"btn btn-warning\" name=\"post\">Activate</a>

                                ";
        }
        // line 83
        echo "                            </div>
                            </div>

                        </div>
                    </aside><!-- Widget Categories /-  -->
                    <!-- Widget Price -->
                    <!-- Widget Latest Post -->
<br><br>

                </div><!-- Widget Area /- -->

                <!-- Content Area -->
                <div class=\"col-md-9 col-sm-7 col-xs-12 content-area product-section2\">
                    <!-- Products -->
                    <div class=\"tab-pane\" id=\"messages\">
                        <div class=\"woocommerce-cart container-fluid no-left-padding no-right-padding\">
                            <!-- Container -->

                                    <table class=\"table table-bordered table-responsive\">
                                        <thead>
                                        <tr>
                                            <th class=\"product-thumbnail\">Item</th>
                                            <th class=\"product-name\">Product Name</th>
                                            <th class=\"product-unit-price\">status</th>
                                            <th class=\"product-remove\">Action</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["boards"]) || array_key_exists("boards", $context) ? $context["boards"] : (function () { throw new RuntimeError('Variable "boards" does not exist.', 112, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 113
            echo "                                            <tr class=\"cart_item\">
                                                <td data-title=\"Item\" class=\"product-thumbnail\"><a href=\"#\"><img src=\"images/fashionboard.png\" alt=\"Product\" /></a></td>
                                                <td data-title=\"Product Name\" class=\"product-name\"><a href=\"#\">fashion board</a></td>
                                                <td data-title=\"Unit Price\" class=\"product-unit-price\">";
            // line 116
            if ((twig_get_attribute($this->env, $this->source, $context["i"], "clientActivation", [], "any", false, false, false, 116) == 0)) {
                echo "ready to activate ";
            } else {
                echo " activated ";
            }
            echo "</td>
                                                <td data-title=\"Remove\" class=\"product-remove\"><a href=\"#\">";
            // line 117
            if ((twig_get_attribute($this->env, $this->source, $context["i"], "clientActivation", [], "any", false, false, false, 117) == 0)) {
                echo "<i class=\"icon icon-Flag\"></i>";
            } else {
                echo " <i class=\"icon icon-Eye\"></i> ";
            }
            echo "</a></td>
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "
                                        </tbody>
                                    </table>
                              <!-- Cart Table /- -->

                        </div><!--/tab-pane-->

                    </div><!--/tab-pane-->
                </div><!-- Content Area /- -->
            </div></div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "default/fashionboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 120,  227 => 117,  219 => 116,  214 => 113,  210 => 112,  179 => 83,  174 => 80,  169 => 77,  167 => 76,  159 => 71,  130 => 45,  125 => 43,  111 => 31,  104 => 30,  82 => 15,  71 => 7,  65 => 4,  60 => 3,  53 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block scripts %}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('alertify/css/alertify.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('alertify/css/alertify.rtl.css') }}\">

    <!--<script src=\"notify.js\"></script> DITCH THIS LINE -->
    <script src=\"{{ asset('alertify/alertify.js') }}\"></script>

    <script>


        function purchasedirection(){

        \$.ajax({
            url: \"{{ path('activatedfasionboard') }}\",

            type: \"POST\",
            success: function (result) {
                console.log(result)
                \$('#exampleModalLong').modal('hide');
                window.location.href = result.message;


            }
        });
    }

</script>
{% endblock %}
{% block body %}

    <div class=\"product-section product-section1 product-section2 container-fluid no-padding\">
        <!-- Container -->
        <div class=\"container\">
            <div class=\"row\">
                <div style=\"height: 100px;\" class=\"col-md-3 col-sm-3 col-xs-12 widget-area no-right-padding\">
                    <!-- Widget Search -->
                    <!-- Widget Categories -->
                    <aside style=\"padding-bottom: 10px;\" class=\"widget widget_categories\">
                        <h3 class=\"widget-title\">fashion board informations</h3>
                        <ul>

                            <li><a href=\"#\" title=\"Beautiful Chairs\">activated <span>({{ nbactivatedboards }})</span></a></li>

                            <li><a href=\"#\" title=\"Beautiful Chairs\">total fashionboard <span>({{ nbboards }})</span></a></li>

                        </ul>


                        <!-- Modal -->
                        <div class=\"modal fade\" id=\"exampleModalLong\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLongTitle\" aria-hidden=\"true\">
                            <div class=\"modal-dialog\" role=\"document\">
                                <div class=\"modal-content\">
                                    <div class=\"modal-header\">
                                        <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Confirmation</h5>
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                            <span aria-hidden=\"true\">&times;</span>
                                        </button>
                                    </div>
                                    <div class=\"modal-body\">
                                        do you really want to activate the fashion board                                    </div>
                                    <div class=\"modal-footer\">
                                        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                                        <button type=\"button\" onclick=\"purchasedirection()\" class=\"btn btn-primary\">confirm</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div style=\"padding-left: 30px;\" class=\"form-group col-md-6\">
                                <a href=\"{{ path('formule') }}\" type=\"button\" class=\"btn btn-warning\" name=\"post\">Purchase</a>

                            </div>                                <div  class=\"form-detail\">

                            <div style=\"padding-left: 30px;\" class=\"form-group col-md-6\">
                                {%if (nbactivatedboards==nbboards) %}
                                <a type=\"button\" disabled  data-confirm=\"Etes-vous certain de vouloir supprimer? \" class=\"btn btn-warning\" name=\"post\">Activate</a>

                                {% else %}
                                    <a type=\"button\"  data-confirm=\"Etes-vous certain de vouloir supprimer? \" data-toggle=\"modal\" data-target=\"#exampleModalLong\" class=\"btn btn-warning\" name=\"post\">Activate</a>

                                {% endif %}
                            </div>
                            </div>

                        </div>
                    </aside><!-- Widget Categories /-  -->
                    <!-- Widget Price -->
                    <!-- Widget Latest Post -->
<br><br>

                </div><!-- Widget Area /- -->

                <!-- Content Area -->
                <div class=\"col-md-9 col-sm-7 col-xs-12 content-area product-section2\">
                    <!-- Products -->
                    <div class=\"tab-pane\" id=\"messages\">
                        <div class=\"woocommerce-cart container-fluid no-left-padding no-right-padding\">
                            <!-- Container -->

                                    <table class=\"table table-bordered table-responsive\">
                                        <thead>
                                        <tr>
                                            <th class=\"product-thumbnail\">Item</th>
                                            <th class=\"product-name\">Product Name</th>
                                            <th class=\"product-unit-price\">status</th>
                                            <th class=\"product-remove\">Action</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        {% for i in boards %}
                                            <tr class=\"cart_item\">
                                                <td data-title=\"Item\" class=\"product-thumbnail\"><a href=\"#\"><img src=\"images/fashionboard.png\" alt=\"Product\" /></a></td>
                                                <td data-title=\"Product Name\" class=\"product-name\"><a href=\"#\">fashion board</a></td>
                                                <td data-title=\"Unit Price\" class=\"product-unit-price\">{% if i.clientActivation == 0 %}ready to activate {% else %} activated {% endif %}</td>
                                                <td data-title=\"Remove\" class=\"product-remove\"><a href=\"#\">{% if i.clientActivation == 0 %}<i class=\"icon icon-Flag\"></i>{% else %} <i class=\"icon icon-Eye\"></i> {% endif %}</a></td>
                                            </tr>
                                        {% endfor %}

                                        </tbody>
                                    </table>
                              <!-- Cart Table /- -->

                        </div><!--/tab-pane-->

                    </div><!--/tab-pane-->
                </div><!-- Content Area /- -->
            </div></div>
{% endblock %}", "default/fashionboard.html.twig", "/home/emir/Bureau/fashionBoard/templates/default/fashionboard.html.twig");
    }
}
