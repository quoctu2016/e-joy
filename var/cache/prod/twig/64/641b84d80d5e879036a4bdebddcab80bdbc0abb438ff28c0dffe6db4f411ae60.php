<?php

/* __string_template__2a9854c9435ba50d1b4fcd65052f36e7daaf5b81fcaa06b08d9c69fc28d25b8a */
class __TwigTemplate_2220afda8f819b06cf868e816618bfe8501ee258982c31c3bf0036b2f7a5000d extends Twig_Template
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
        echo "<div class=\"ec-footerRole\">
    <div class=\"ec-footerRole__inner\">
        <ul class=\"ec-footerNavi\">
            <li class=\"ec-footerNavi__link\">
                <a href=\"";
        // line 15
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("help_about");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.block.footer.about_us"), "html", null, true);
        echo "</a>
            </li>
            <li class=\"ec-footerNavi__link\">
                <a href=\"";
        // line 18
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("help_privacy");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.block.footer.privacy_policy"), "html", null, true);
        echo "</a>
            </li>
            <li class=\"ec-footerNavi__link\">
                <a href=\"";
        // line 21
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("help_tradelaw");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.block.footer.act_on_specified_commercial_transactions"), "html", null, true);
        echo "</a>
            </li>
            <li class=\"ec-footerNavi__link\">
                <a href=\"";
        // line 24
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("contact");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.block.footer.inquiry"), "html", null, true);
        echo "</a>
            </li>
        </ul>
        <div class=\"ec-footerTitle\">
            <div class=\"ec-footerTitle__logo\">
                <a href=\"";
        // line 29
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("homepage");
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "shop_name", []), "html", null, true);
        echo "</a>
            </div>
            <div class=\"ec-footerTitle__copyright\">";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.copyright"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "shop_name", []), "html", null, true);
        echo " </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__2a9854c9435ba50d1b4fcd65052f36e7daaf5b81fcaa06b08d9c69fc28d25b8a";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 31,  63 => 29,  53 => 24,  45 => 21,  37 => 18,  29 => 15,  23 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__2a9854c9435ba50d1b4fcd65052f36e7daaf5b81fcaa06b08d9c69fc28d25b8a", "");
    }
}
