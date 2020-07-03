<?php

/* pager.twig */
class __TwigTemplate_6e2682c22d9a675b5a239131c8f35747a11184652a2aa7626c539883865370cf extends Twig_Template
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
            echo "    <ul class=\"ec-pager\">
        ";
            // line 14
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "firstPageInRange", []) != 1)) {
                // line 15
                echo "            <li class=\"ec-pager__item\">
                <a href=\"";
                // line 16
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 17
($context["app"] ?? null), "request", []), "attributes", []), "get", [0 => "_route"], "method"), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 18
($context["app"] ?? null), "request", []), "query", []), "all", []), ["pageno" => twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "first", [])])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.first"), "html", null, true);
                echo "</a></li>

        ";
            }
            // line 21
            echo "
        ";
            // line 23
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "previous", [], "any", true, true)) {
                // line 24
                echo "            <li class=\"ec-pager__item\">
                <a href=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 26
($context["app"] ?? null), "request", []), "attributes", []), "get", [0 => "_route"], "method"), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 27
($context["app"] ?? null), "request", []), "query", []), "all", []), ["pageno" => twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "previous", [])])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.prev"), "html", null, true);
                echo "</a></li>
        ";
            }
            // line 29
            echo "
        ";
            // line 31
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "firstPageInRange", []) != 1)) {
                // line 32
                echo "            <li class=\"ec-pager__item\">...</li>
        ";
            }
            // line 34
            echo "
        ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "pagesInRange", []));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 36
                echo "            ";
                if (($context["page"] == twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "current", []))) {
                    // line 37
                    echo "                <li class=\"ec-pager__item--active\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 38
($context["app"] ?? null), "request", []), "attributes", []), "get", [0 => "_route"], "method"), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 39
($context["app"] ?? null), "request", []), "query", []), "all", []), ["pageno" => $context["page"]])), "html", null, true);
                    echo "\"> ";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo " </a></li>
            ";
                } else {
                    // line 41
                    echo "                <li class=\"ec-pager__item\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 42
($context["app"] ?? null), "request", []), "attributes", []), "get", [0 => "_route"], "method"), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 43
($context["app"] ?? null), "request", []), "query", []), "all", []), ["pageno" => $context["page"]])), "html", null, true);
                    echo "\"> ";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo " </a></li>
            ";
                }
                // line 45
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "
        ";
            // line 48
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "last", []) != twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "lastPageInRange", []))) {
                // line 49
                echo "            <li class=\"ec-pager__item\">...</li>
        ";
            }
            // line 51
            echo "
        ";
            // line 53
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "next", [], "any", true, true)) {
                // line 54
                echo "            <li class=\"ec-pager__item\">
                <a href=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 56
($context["app"] ?? null), "request", []), "attributes", []), "get", [0 => "_route"], "method"), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 57
($context["app"] ?? null), "request", []), "query", []), "all", []), ["pageno" => twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "next", [])])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.next"), "html", null, true);
                echo "</a></li>
        ";
            }
            // line 59
            echo "
        ";
            // line 61
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "last", []) != twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "lastPageInRange", []))) {
                // line 62
                echo "            <li class=\"ec-pager__item\">
                <a href=\"";
                // line 63
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 64
($context["app"] ?? null), "request", []), "attributes", []), "get", [0 => "_route"], "method"), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 65
($context["app"] ?? null), "request", []), "query", []), "all", []), ["pageno" => twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "last", [])])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.last"), "html", null, true);
                echo "</a></li>
        ";
            }
            // line 67
            echo "    </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "pager.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 67,  147 => 65,  146 => 64,  145 => 63,  142 => 62,  139 => 61,  136 => 59,  129 => 57,  128 => 56,  127 => 55,  124 => 54,  121 => 53,  118 => 51,  114 => 49,  111 => 48,  108 => 46,  102 => 45,  95 => 43,  94 => 42,  92 => 41,  85 => 39,  84 => 38,  82 => 37,  79 => 36,  75 => 35,  72 => 34,  68 => 32,  65 => 31,  62 => 29,  55 => 27,  54 => 26,  53 => 25,  50 => 24,  47 => 23,  44 => 21,  36 => 18,  35 => 17,  34 => 16,  31 => 15,  28 => 14,  25 => 12,  23 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "pager.twig", "C:\\xampp\\htdocs\\www\\e-joy\\src\\Eccube\\Resource\\template\\default\\pager.twig");
    }
}
