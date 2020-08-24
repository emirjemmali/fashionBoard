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

/* HttplugBundle::stack.html.twig */
class __TwigTemplate_3b4b7d32209b41ca5648d78a739f59e978709116f8be015b46d922e969866890 extends \Twig\Template
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
        echo "<div class=\"httplug-stack-header httplug-toggle\" data-toggle=\"#httplug-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stack"] ?? null), "clientSlug", [], "any", false, false, false, 1), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "-details\">
    <div>
        ";
        // line 3
        if (twig_get_attribute($this->env, $this->source, ($context["stack"] ?? null), "failed", [], "any", false, false, false, 3)) {
            // line 4
            echo "            <span class=\"httplug-stack-failed\">✘</span>
        ";
        } else {
            // line 6
            echo "            <span class=\"httplug-stack-success\">✔</span>
        ";
        }
        // line 8
        echo "        <span class=\"label httplug-method httplug-method-";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stack"] ?? null), "requestMethod", [], "any", false, false, false, 8)), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stack"] ?? null), "requestMethod", [], "any", false, false, false, 8), "html", null, true);
        echo "</span>
    </div>
    <div class=\"label httplug-stack-header-target\">
        <span class=\"httplug-scheme\">";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stack"] ?? null), "requestScheme", [], "any", false, false, false, 11), "html", null, true);
        echo "://</span>
        <span class=\"httplug-host\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stack"] ?? null), "requestHost", [], "any", false, false, false, 12), "html", null, true);
        echo "</span>
        <span class=\"httplug-target\">";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stack"] ?? null), "requestTarget", [], "any", false, false, false, 13), "html", null, true);
        echo "</span>
    </div>
    <div>
        <span class=\"label httplug-duration\">";
        // line 16
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stack"] ?? null), "duration", [], "any", false, false, false, 16)), "html", null, true);
        echo " ms</span>
        ";
        // line 17
        if (((twig_get_attribute($this->env, $this->source, ($context["stack"] ?? null), "responseCode", [], "any", false, false, false, 17) >= 400) && (twig_get_attribute($this->env, $this->source, ($context["stack"] ?? null), "responseCode", [], "any", false, false, false, 17) <= 599))) {
            // line 18
            echo "            <span class=\"label status-error\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stack"] ?? null), "responseCode", [], "any", false, false, false, 18), "html", null, true);
            echo "</span>
        ";
        } elseif (((twig_get_attribute($this->env, $this->source,         // line 19
($context["stack"] ?? null), "responseCode", [], "any", false, false, false, 19) >= 300) && (twig_get_attribute($this->env, $this->source, ($context["stack"] ?? null), "responseCode", [], "any", false, false, false, 19) <= 399))) {
            // line 20
            echo "            <span class=\"label status-warning\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stack"] ?? null), "responseCode", [], "any", false, false, false, 20), "html", null, true);
            echo "</span>
        ";
        } else {
            // line 22
            echo "            <span class=\"label status-success\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stack"] ?? null), "responseCode", [], "any", false, false, false, 22), "html", null, true);
            echo "</span>
        ";
        }
        // line 24
        echo "    </div>
</div>
<div id=\"httplug-";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stack"] ?? null), "clientSlug", [], "any", false, false, false, 26), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "-details\" class=\"httplug-hidden\">
    <div class=\"httplug-toolbar\">
        <div class=\"httplug-copy-as-curl\">
            <input readonly=\"readonly\" type=\"text\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stack"] ?? null), "curlCommand", [], "any", false, false, false, 29), "html", null, true);
        echo "\" />
            <button class=\"btn tooltip-toggle\" aria-label=\"Copy to clipboard\">Copy to clipboard</button>
        </div>
        <button data-toggle=\"#httplug-";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stack"] ?? null), "clientSlug", [], "any", false, false, false, 32), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "-stack\" class=\"httplug-toggle btn\" >Toggle plugin stack</button>
        <button data-toggle=\"#httplug-";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stack"] ?? null), "clientSlug", [], "any", false, false, false, 33), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "-details .httplug-http-body\" class=\"httplug-toggle btn\">Toggle body</button>
    </div>
    <div class=\"httplug-messages\">
        <div class=\"httplug-message card\">
            ";
        // line 37
        echo twig_include($this->env, $context, "@Httplug/http_message.html.twig", ["data" => twig_get_attribute($this->env, $this->source, ($context["stack"] ?? null), "clientRequest", [], "any", false, false, false, 37), "header" => "Request"], false);
        echo "
        </div>
        <div class=\"httplug-message card\">
            ";
        // line 40
        echo twig_include($this->env, $context, "@Httplug/http_message.html.twig", ["data" => twig_get_attribute($this->env, $this->source, ($context["stack"] ?? null), "clientResponse", [], "any", false, false, false, 40), "header" => "Response"], false);
        echo "
        </div>
    </div>
    ";
        // line 43
        if (twig_get_attribute($this->env, $this->source, ($context["stack"] ?? null), "profiles", [], "any", false, false, false, 43)) {
            // line 44
            echo "        <div id=\"httplug-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stack"] ?? null), "clientSlug", [], "any", false, false, false, 44), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "-stack\" class=\"httplug-hidden card\">
            ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["stack"] ?? null), "profiles", [], "any", false, false, false, 45));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["profile"]) {
                // line 46
                echo "                <h3 class=\"httplug-plugin-name\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["profile"], "plugin", [], "any", false, false, false, 46), "html", null, true);
                echo "</h3>
                <div class=\"httplug-messages\">
                    <div class=\"httplug-message\">
                        ";
                // line 49
                echo twig_include($this->env, $context, "@Httplug/http_message.html.twig", ["data" => twig_get_attribute($this->env, $this->source, $context["profile"], "request", [], "any", false, false, false, 49), "header" => "Request"], false);
                echo "
                    </div>
                    <div class=\"httplug-message\">
                        ";
                // line 52
                echo twig_include($this->env, $context, "@Httplug/http_message.html.twig", ["data" => twig_get_attribute($this->env, $this->source, $context["profile"], "response", [], "any", false, false, false, 52), "header" => "Response"], false);
                echo "
                    </div>
                </div>
                ";
                // line 55
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 55)) {
                    // line 56
                    echo "                    <hr />
                ";
                }
                // line 58
                echo "            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profile'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "        </div>
    ";
        }
        // line 61
        echo "</div>
";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "childrenStacks", [0 => ($context["stack"] ?? null)], "method", false, false, false, 62));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 63
            echo "    <div class=\"httplug-stack\">
        ";
            // line 64
            echo twig_include($this->env, $context, "@Httplug/stack.html.twig", ["collector" =>             // line 65
($context["collector"] ?? null), "client" =>             // line 66
($context["client"] ?? null), "stack" =>             // line 67
$context["child"], "id" => ((            // line 68
($context["id"] ?? null) . "-") . twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 68))], false);
            // line 69
            echo "
    </div>
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "HttplugBundle::stack.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 69,  244 => 68,  243 => 67,  242 => 66,  241 => 65,  240 => 64,  237 => 63,  220 => 62,  217 => 61,  213 => 59,  199 => 58,  195 => 56,  193 => 55,  187 => 52,  181 => 49,  174 => 46,  157 => 45,  150 => 44,  148 => 43,  142 => 40,  136 => 37,  127 => 33,  121 => 32,  115 => 29,  107 => 26,  103 => 24,  97 => 22,  91 => 20,  89 => 19,  84 => 18,  82 => 17,  78 => 16,  72 => 13,  68 => 12,  64 => 11,  55 => 8,  51 => 6,  47 => 4,  45 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "HttplugBundle::stack.html.twig", "C:\\Users\\Mohamedahmed\\PhpstormProjects\\untitled\\vendor\\php-http\\httplug-bundle\\src/Resources/views/stack.html.twig");
    }
}
