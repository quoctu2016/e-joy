<?php

/* __string_template__44acb8b036fa8226171614aa329cab4685a0d4d06771fd235371e276478f20cb */
class __TwigTemplate_34bc6989f6074320f6b3336b35e727b8890196ce8ad96e68cf53d5242dd520e7 extends Twig_Template
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
<div class=\"ec-headerLinkArea\">
    <div class=\"ec-headerLink__list\">
        <a class=\"ec-headerLink__item\" href=\"";
        // line 14
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("cart");
        echo "\">
            <div class=\"ec-headerLink__icon\">
                <i class=\"fas fa-shopping-cart fa-fw\"></i>
            </div>
            <span>";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.block.login.to_cart"), "html", null, true);
        echo "</span>
        </a>
        ";
        // line 20
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 21
            echo "            <a class=\"ec-headerLink__item\" href=\"";
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("mypage");
            echo "\">
                <div class=\"ec-headerLink__icon\">
                    <i class=\"fas fa-user fa-fw\"></i>
                </div>
                <span>";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.block.login.mypage"), "html", null, true);
            echo "</span>
            </a>
            ";
            // line 27
            if (twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "option_favorite_product", [])) {
                // line 28
                echo "                <a class=\"ec-headerLink__item\" href=\"";
                echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("mypage_favorite");
                echo "\">
                    <div class=\"ec-headerLink__icon\">
                        <i class=\"fas fa-heart fa-fw\"></i>
                    </div>
                    <span>";
                // line 32
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.block.login.favorite"), "html", null, true);
                echo "</span>
                </a>
            ";
            }
            // line 35
            echo "            <a class=\"ec-headerLink__item\" href=\"";
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("logout");
            echo "\">
                <div class=\"ec-headerLink__icon\">
                    <i class=\"fas fa-lock fa-fw\"></i>
                </div>
                <span>";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.block.login.logout"), "html", null, true);
            echo "</span>
            </a>
        ";
        } else {
            // line 42
            echo "            <a class=\"ec-headerLink__item\" href=\"";
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("entry");
            echo "\">
                <div class=\"ec-headerLink__icon\">
                    <i class=\"fas fa-user fa-fw\"></i>
                </div>
                <span>";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.block.login.customer_registration"), "html", null, true);
            echo "</span>
            </a>
            ";
            // line 48
            if (twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "option_favorite_product", [])) {
                // line 49
                echo "                <a class=\"ec-headerLink__item\" href=\"";
                echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("mypage_favorite");
                echo "\">
                    <div class=\"ec-headerLink__icon\">
                        <i class=\"fas fa-heart fa-fw\"></i>
                    </div>
                    <span>";
                // line 53
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.block.login.favorite"), "html", null, true);
                echo "</span>
                </a>
            ";
            }
            // line 56
            echo "            <a class=\"ec-headerLink__item\" href=\"";
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("mypage_login");
            echo "\">
                <div class=\"ec-headerLink__icon\">
                    <i class=\"fas fa-lock fa-fw\"></i>
                </div>
                <span>";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.block.login.login"), "html", null, true);
            echo "</span>
            </a>
        ";
        }
        // line 63
        echo "        <a class=\"ec-headerLink__item\" href=\"";
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("homepage");
        echo "\">
            <div class=\"ec-headerLink__icon\">
                <i class=\"fas fa-home fa-fw\"></i>
            </div>
            <span>";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.block.login.to_home"), "html", null, true);
        echo "</span>
        </a>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__44acb8b036fa8226171614aa329cab4685a0d4d06771fd235371e276478f20cb";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 67,  128 => 63,  122 => 60,  114 => 56,  108 => 53,  100 => 49,  98 => 48,  93 => 46,  85 => 42,  79 => 39,  71 => 35,  65 => 32,  57 => 28,  55 => 27,  50 => 25,  42 => 21,  40 => 20,  35 => 18,  28 => 14,  23 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__44acb8b036fa8226171614aa329cab4685a0d4d06771fd235371e276478f20cb", "");
    }
}
