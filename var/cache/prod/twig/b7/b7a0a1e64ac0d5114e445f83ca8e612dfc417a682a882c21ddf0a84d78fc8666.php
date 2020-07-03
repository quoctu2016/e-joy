<?php

/* @admin/Store/plugin_detail_info.twig */
class __TwigTemplate_9d425ccd6a5973cdb5376588290bdbdb325df90244b5b55b299ab972d1bc16f4 extends Twig_Template
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
        echo "
<ul class=\"plugin-ver col-12\">
    ";
        // line 13
        if ( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "price", [])) {
            // line 14
            echo "    <li class=\"row\"><span class=\"font-weight-bold col-7 col-sm-6 pl-0\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.detail.download"), "html", null, true);
            echo "</span>";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "downloads", [])), "html", null, true);
            echo "</li>
    ";
        }
        // line 16
        echo "    <li class=\"row\"><span class=\"font-weight-bold col-7 col-sm-6 pl-0\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.detail.version"), "html", null, true);
        echo "</span>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "version", []), "html", null, true);
        echo "</li>
    <li class=\"row\"><span class=\"font-weight-bold col-7 col-sm-6 pl-0\">";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.detail.support"), "html", null, true);
        echo "</span>";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "supported_versions", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["version"]) {
            echo twig_escape_filter($this->env, $context["version"], "html", null, true);
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", []) == false)) {
                echo ", ";
            }
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['version'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</li>
    <li class=\"row\"><span class=\"font-weight-bold col-7 col-sm-6 pl-0\">";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.detail.public_date"), "html", null, true);
        echo "</span>";
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_day($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "publish_date", [])), "html", null, true);
        echo "</li>
    <li class=\"row\"><span class=\"font-weight-bold col-7 col-sm-6 pl-0\">";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.detail.update_date"), "html", null, true);
        echo "</span>";
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_day($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "update_date", [])), "html", null, true);
        echo "</li>
    <li class=\"row\"><span class=\"font-weight-bold col-7 col-sm-6 pl-0\">";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.detail.license"), "html", null, true);
        echo "</span>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "license", []), "html", null, true);
        echo "</li>
    <li class=\"row\"><span class=\"font-weight-bold col-7 col-sm-6 pl-0\">";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.detail.develop"), "html", null, true);
        echo "</span>
        ";
        // line 22
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "author", []))) {
            // line 23
            echo "            ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "author", []), "url", []))) {
                // line 24
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "author", []), "url", []), "html", null, true);
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "author", []), "name", []), "html", null, true);
                echo "</a>";
            } else {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "author", []), "name", []), "html", null, true);
                echo "
            ";
            }
            // line 26
            echo "        ";
        }
        // line 27
        echo "    </li>
</ul>";
    }

    public function getTemplateName()
    {
        return "@admin/Store/plugin_detail_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 27,  119 => 26,  108 => 24,  105 => 23,  103 => 22,  99 => 21,  93 => 20,  87 => 19,  81 => 18,  44 => 17,  37 => 16,  29 => 14,  27 => 13,  23 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@admin/Store/plugin_detail_info.twig", "C:\\xampp\\htdocs\\www\\e-joy\\app\\template\\admin\\Store\\plugin_detail_info.twig");
    }
}
