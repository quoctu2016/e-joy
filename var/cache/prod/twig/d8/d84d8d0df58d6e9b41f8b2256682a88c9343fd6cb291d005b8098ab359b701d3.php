<?php

/* Mypage/navi.twig */
class __TwigTemplate_4b3401296a01855e569b1f5fb6ca7e96f19cc679f892719f9144d2839498f0a2 extends Twig_Template
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
        echo "<div class=\"ec-navlistRole\">
    <ul class=\"ec-navlistRole__navlist\">
        <li class=\"ec-navlistRole__item ";
        // line 13
        if (((((isset($context["mypageno"]) || array_key_exists("mypageno", $context))) ? (_twig_default_filter(($context["mypageno"] ?? null), "")) : ("")) == "index")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 14
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("mypage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.nav__history"), "html", null, true);
        echo "</a>
        </li>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "option_favorite_product", [])) {
            // line 17
            echo "            <li class=\"ec-navlistRole__item ";
            if (((((isset($context["mypageno"]) || array_key_exists("mypageno", $context))) ? (_twig_default_filter(($context["mypageno"] ?? null), "")) : ("")) == "favorite")) {
                echo "active";
            }
            echo "\">
                <a href=\"";
            // line 18
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("mypage_favorite");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.nav__favorite"), "html", null, true);
            echo "</a>
            </li>
        ";
        }
        // line 21
        echo "        <li class=\"ec-navlistRole__item ";
        if (((((isset($context["mypageno"]) || array_key_exists("mypageno", $context))) ? (_twig_default_filter(($context["mypageno"] ?? null), "")) : ("")) == "change")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 22
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("mypage_change");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.nav__customer"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"ec-navlistRole__item ";
        // line 24
        if (((((isset($context["mypageno"]) || array_key_exists("mypageno", $context))) ? (_twig_default_filter(($context["mypageno"] ?? null), "")) : ("")) == "delivery")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 25
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("mypage_delivery");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.nav__customer_address"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"ec-navlistRole__item ";
        // line 27
        if (((((isset($context["mypageno"]) || array_key_exists("mypageno", $context))) ? (_twig_default_filter(($context["mypageno"] ?? null), "")) : ("")) == "withdraw")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 28
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("mypage_withdraw");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.nav__withdrow"), "html", null, true);
        echo "</a>
        </li>
    </ul>
</div>

<div class=\"ec-welcomeMsg\">
    <p>";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.welcome"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getFormatName(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", []), "name01", []), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", []), "name02", [])), "html", null, true);
        echo "</p>
    ";
        // line 35
        if (twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "option_point", [])) {
            // line 36
            echo "        <p>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.welcome__point", ["%point%" => twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", []), "point", []))]), "html", null, true);
            echo "</p>
    ";
        }
        // line 38
        echo "</div>

";
    }

    public function getTemplateName()
    {
        return "Mypage/navi.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 38,  109 => 36,  107 => 35,  101 => 34,  90 => 28,  84 => 27,  77 => 25,  71 => 24,  64 => 22,  57 => 21,  49 => 18,  42 => 17,  40 => 16,  33 => 14,  27 => 13,  23 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Mypage/navi.twig", "C:\\xampp\\htdocs\\www\\e-joy\\app\\template\\default\\Mypage\\navi.twig");
    }
}
