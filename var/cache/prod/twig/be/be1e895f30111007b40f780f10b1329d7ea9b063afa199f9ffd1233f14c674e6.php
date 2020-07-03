<?php

/* __string_template__39b00a22a066a96555f87a155a04a05248a21e59a0f10eff268a346bbc720511 */
class __TwigTemplate_f92800a3f30e173e9963d0aebf104d58ddc963db516a1fcb99ad782256eead22 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__39b00a22a066a96555f87a155a04a05248a21e59a0f10eff268a346bbc720511", 11);
        $this->blocks = [
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 13
        $context["body_class"] = "cart_page";
        // line 11
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_main($context, array $blocks = [])
    {
        // line 16
        echo "<div class=\"ec-role\">
    <div class=\"ec-pageHeader\">
        <h1>";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.shopping.complete_title"), "html", null, true);
        echo "</h1>
    </div>
</div>

<div class=\"ec-cartRole\">
    <div class=\"ec-cartRole__progress\">
        <ul class=\"ec-progress\">
            ";
        // line 25
        $context["step"] = 1;
        // line 26
        echo "            <li class=\"ec-progress__item\">
                <div class=\"ec-progress__number\">";
        // line 27
        echo twig_escape_filter($this->env, ($context["step"] ?? null), "html", null, true);
        $context["step"] = (($context["step"] ?? null) + 1);
        // line 28
        echo "                </div>
                <div class=\"ec-progress__label\">";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.cart.nav__cart_items"), "html", null, true);
        echo "
                </div>
            </li>
            ";
        // line 32
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER") == false)) {
            // line 33
            echo "                <li class=\"ec-progress__item\">
                    <div class=\"ec-progress__number\">";
            // line 34
            echo twig_escape_filter($this->env, ($context["step"] ?? null), "html", null, true);
            $context["step"] = (($context["step"] ?? null) + 1);
            // line 35
            echo "                    </div>
                    <div class=\"ec-progress__label\">";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.cart.nav__customer_info"), "html", null, true);
            echo "
                    </div>
                </li>
            ";
        }
        // line 40
        echo "            <li class=\"ec-progress__item\">
                <div class=\"ec-progress__number\">";
        // line 41
        echo twig_escape_filter($this->env, ($context["step"] ?? null), "html", null, true);
        $context["step"] = (($context["step"] ?? null) + 1);
        // line 42
        echo "                </div>
                <div class=\"ec-progress__label\">";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.cart.nav__order"), "html", null, true);
        echo "
                </div>
            </li>
            <li class=\"ec-progress__item\">
                <div class=\"ec-progress__number\">";
        // line 47
        echo twig_escape_filter($this->env, ($context["step"] ?? null), "html", null, true);
        $context["step"] = (($context["step"] ?? null) + 1);
        // line 48
        echo "                </div>
                <div class=\"ec-progress__label\">";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.cart.nav__confirm"), "html", null, true);
        echo "
                </div>
            </li>
            <li class=\"ec-progress__item  is-complete\">
                <div class=\"ec-progress__number\">";
        // line 53
        echo twig_escape_filter($this->env, ($context["step"] ?? null), "html", null, true);
        $context["step"] = (($context["step"] ?? null) + 1);
        // line 54
        echo "                </div>
                <div class=\"ec-progress__label\">";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.cart.nav__complete"), "html", null, true);
        echo "
                </div>
            </li>
        </ul>
    </div>
</div>

<div class=\"ec-cartCompleteRole\">
    <div class=\"ec-off3Grid ec-text-ac\">
        <div class=\"ec-off3Grid__cell\">
            <div class=\"ec-reportHeading\">
                <h2>";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.shopping.complete_message__title"), "html", null, true);
        echo "</h2>
            </div>
            <p class=\"ec-reportDescription\">
                ";
        // line 69
        echo nl2br(twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.shopping.complete_message__body"), "html", null, true));
        echo "
                ";
        // line 70
        if (twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "id", [])) {
            // line 71
            echo "                    <br /><br /><strong>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.shopping.order_no"), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "orderNo", []), "html", null, true);
            echo "</strong>
                ";
        }
        // line 73
        echo "            </p>

            ";
        // line 75
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "complete_message", []))) {
            // line 76
            echo "                ";
            echo twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "complete_message", []);
            echo "
            ";
        }
        // line 78
        echo "
            <div class=\"ec-off4Grid\">
                ";
        // line 80
        if (($context["hasNextCart"] ?? null)) {
            // line 81
            echo "                    <div class=\"ec-off4Grid__cell\"><a class=\"ec-blockBtn--primary\" href=\"";
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("cart");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.shopping.continue"), "html", null, true);
            echo "</a></div>
                ";
        } else {
            // line 83
            echo "                    <div class=\"ec-off4Grid__cell\"><a class=\"ec-blockBtn--cancel\" href=\"";
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("homepage");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.go_to_top"), "html", null, true);
            echo "</a></div>
                ";
        }
        // line 85
        echo "            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__39b00a22a066a96555f87a155a04a05248a21e59a0f10eff268a346bbc720511";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 85,  182 => 83,  174 => 81,  172 => 80,  168 => 78,  162 => 76,  160 => 75,  156 => 73,  148 => 71,  146 => 70,  142 => 69,  136 => 66,  122 => 55,  119 => 54,  116 => 53,  109 => 49,  106 => 48,  103 => 47,  96 => 43,  93 => 42,  90 => 41,  87 => 40,  80 => 36,  77 => 35,  74 => 34,  71 => 33,  69 => 32,  63 => 29,  60 => 28,  57 => 27,  54 => 26,  52 => 25,  42 => 18,  38 => 16,  35 => 15,  31 => 11,  29 => 13,  15 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__39b00a22a066a96555f87a155a04a05248a21e59a0f10eff268a346bbc720511", "");
    }
}
