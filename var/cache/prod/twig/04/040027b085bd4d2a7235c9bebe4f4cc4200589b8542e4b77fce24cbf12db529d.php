<?php

/* @admin/pager.twig */
class __TwigTemplate_7bc704b72af0f5bc1f0af0c86b4617129322d6abf3d4f80afba1d04879aa5869 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 11
        if ((twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "pageCount", []) > 1)) {
            // line 12
            echo "    <ul class=\"pagination\">

        <!-- 最初へ -->
        ";
            // line 15
            if ((twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "firstPageInRange", []) != 1)) {
                // line 16
                echo "            <li class=\"page-item\">
                ";
                // line 18
                echo "                <a class=\"page-link\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath(((                // line 19
($context["routes"] ?? null)) ? (($context["routes"] ?? null)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", []), "attributes", []), "get", [0 => "_route"], "method"))), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 20
($context["app"] ?? null), "request", []), "query", []), "all", []), ["page_no" => twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "first", [])])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.first"), "html", null, true);
                echo "</a></li>

        ";
            }
            // line 23
            echo "
        <!-- 前へ -->
        ";
            // line 25
            if (twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "previous", [], "any", true, true)) {
                // line 26
                echo "            <li class=\"page-item\">
                ";
                // line 28
                echo "                <a class=\"page-link\"
                   href=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath(((($context["routes"] ?? null)) ? (($context["routes"] ?? null)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", []), "attributes", []), "get", [0 => "_route"], "method"))), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", []), "query", []), "all", []), ["page_no" => twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "previous", [])])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.prev"), "html", null, true);
                echo "</a>
            </li>
        ";
            }
            // line 32
            echo "
        <!-- 1ページリンクが表示されない場合、「...」を表示 -->
        ";
            // line 34
            if ((twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "firstPageInRange", []) != 1)) {
                // line 35
                echo "            <li class=\"page-item\">...</li>
        ";
            }
            // line 37
            echo "
        ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "pagesInRange", []));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 39
                echo "            <li class=\"page-item";
                if (($context["page"] == twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "current", []))) {
                    echo " active";
                }
                echo "\">
                ";
                // line 41
                echo "                <a class=\"page-link\"
                   href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath(((($context["routes"] ?? null)) ? (($context["routes"] ?? null)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", []), "attributes", []), "get", [0 => "_route"], "method"))), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", []), "query", []), "all", []), ["page_no" => $context["page"]])), "html", null, true);
                echo "\">
                    ";
                // line 43
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "
                </a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "
        <!-- 最終ページリンクが表示されない場合、「...」を表示 -->
        ";
            // line 49
            if ((twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "last", []) != twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "lastPageInRange", []))) {
                // line 50
                echo "            <li class=\"page-item\">...</li>
        ";
            }
            // line 52
            echo "
        <!-- 次へ -->
        ";
            // line 54
            if (twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "next", [], "any", true, true)) {
                // line 55
                echo "            <li class=\"page-item\">
                ";
                // line 57
                echo "                <a class=\"page-link\"
                   href=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath(((($context["routes"] ?? null)) ? (($context["routes"] ?? null)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", []), "attributes", []), "get", [0 => "_route"], "method"))), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", []), "query", []), "all", []), ["page_no" => twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "next", [])])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.next"), "html", null, true);
                echo "</a>
            </li>
        ";
            }
            // line 61
            echo "
        <!-- 最後へ -->
        ";
            // line 63
            if ((twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "last", []) != twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "lastPageInRange", []))) {
                // line 64
                echo "            <li class=\"page-item\">
                ";
                // line 66
                echo "                <a class=\"page-link\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath(((                // line 67
($context["routes"] ?? null)) ? (($context["routes"] ?? null)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", []), "attributes", []), "get", [0 => "_route"], "method"))), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 68
($context["app"] ?? null), "request", []), "query", []), "all", []), ["page_no" => twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "last", [])])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.last"), "html", null, true);
                echo "</a></li>
        ";
            }
            // line 70
            echo "
    </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "@admin/pager.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 70,  149 => 68,  148 => 67,  146 => 66,  143 => 64,  141 => 63,  137 => 61,  129 => 58,  126 => 57,  123 => 55,  121 => 54,  117 => 52,  113 => 50,  111 => 49,  107 => 47,  97 => 43,  93 => 42,  90 => 41,  83 => 39,  79 => 38,  76 => 37,  72 => 35,  70 => 34,  66 => 32,  58 => 29,  55 => 28,  52 => 26,  50 => 25,  46 => 23,  38 => 20,  37 => 19,  35 => 18,  32 => 16,  30 => 15,  25 => 12,  23 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@admin/pager.twig", "C:\\xampp\\htdocs\\www\\e-joy\\src\\Eccube\\Resource\\template\\admin\\pager.twig");
    }
}
