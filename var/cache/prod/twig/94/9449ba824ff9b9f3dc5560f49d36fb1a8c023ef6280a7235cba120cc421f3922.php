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

/* HttplugBundle::http_message.html.twig */
class __TwigTemplate_845b6cb719493806ef002910ba735dd1281224d7794216a6efc3ffbea3f77f51 extends \Twig\Template
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
        // line 1
        $context["hasReachedBody"] = false;
        // line 2
        $context["content"] = "";
        // line 3
        $context["data"] = twig_slice($this->env, twig_split_filter($this->env, ($context["data"] ?? null), "
"), 1);
        // line 4
        $context["xdebugTokenLink"] = twig_last($this->env, twig_split_filter($this->env, twig_first($this->env, twig_array_filter($this->env, ($context["data"] ?? null), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return twig_in_filter("x-debug-token-link:", twig_lower_filter($this->env, ($context["v"] ?? null))); })), ": "));
        // line 5
        echo "
<table>
    <thead>
    <tr>
        <th scope=\"col\" class=\"key\" colspan=\"2\">";
        // line 9
        echo twig_escape_filter($this->env, ($context["header"] ?? null), "html", null, true);
        if (($context["xdebugTokenLink"] ?? null)) {
            echo " <span style=\"float:right\"><a href=\"";
            echo twig_escape_filter($this->env, ($context["xdebugTokenLink"] ?? null), "html", null, true);
            echo "\">Profile link</a></span>";
        }
        echo "</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 14
            echo "        ";
            if (twig_test_empty($context["row"])) {
                // line 15
                echo "            ";
                $context["hasReachedBody"] = true;
                // line 16
                echo "        ";
            } elseif (($context["hasReachedBody"] ?? null)) {
                // line 17
                echo "            ";
                $context["content"] = ((($context["content"] ?? null) . "
") . $context["row"]);
                // line 18
                echo "        ";
            } else {
                // line 19
                echo "            ";
                $context["row"] = twig_split_filter($this->env, $context["row"], ":");
                // line 20
                echo "            ";
                $context["value"] = twig_trim_filter(twig_join_filter(twig_slice($this->env, $context["row"], 1), ":"));
                // line 21
                echo "            <tr>
                <th>";
                // line 22
                echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["row"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "html", null, true);
                echo "</th>
                <td>
                    ";
                // line 24
                if (preg_match("#^https?://#", ($context["value"] ?? null))) {
                    // line 25
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
                    echo "</a>
                    ";
                } else {
                    // line 27
                    echo "                        ";
                    echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
                    echo "
                    ";
                }
                // line 29
                echo "                </td>
            </tr>
        ";
            }
            // line 32
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "    </tbody>
</table>

<div class='httplug-http-body httplug-hidden'>";
        // line 36
        echo ((nl2br(twig_escape_filter($this->env, ($context["content"] ?? null), "html", null, true))) ? (nl2br(twig_escape_filter($this->env, ($context["content"] ?? null), "html", null, true))) : ("(This message has no captured body)"));
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "HttplugBundle::http_message.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 36,  125 => 33,  119 => 32,  114 => 29,  108 => 27,  100 => 25,  98 => 24,  93 => 22,  90 => 21,  87 => 20,  84 => 19,  81 => 18,  77 => 17,  74 => 16,  71 => 15,  68 => 14,  64 => 13,  52 => 9,  46 => 5,  44 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "HttplugBundle::http_message.html.twig", "C:\\Users\\Mohamedahmed\\PhpstormProjects\\untitled\\vendor\\php-http\\httplug-bundle\\src/Resources/views/http_message.html.twig");
    }
}
