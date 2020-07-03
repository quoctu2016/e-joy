<?php

/* __string_template__2020929a64f2e983c2c44f484a0b4691714475c3f940e505425881c85e96e948 */
class __TwigTemplate_174e127c9f784867e44496cd2ef652767f81f64fd4a8c331d07b4938d71d9cf3 extends Twig_Template
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
<div class=\"ec-role\">
    <div class=\"ec-eyecatchRole\">
        <div class=\"ec-eyecatchRole__image\">
            <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/top/img_about.jpg"), "html", null, true);
        echo "\" alt=\"\" role=\"presentation\"/>
        </div>
        <div class=\"ec-eyecatchRole__intro\">
            <p class=\"ec-eyecatchRole__introEnTitle\">";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.block.eyecatch.title__en"), "html", null, true);
        echo "</p>
            <p class=\"ec-eyecatchRole__introTitle\">";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.block.eyecatch.title__ja"), "html", null, true);
        echo "</p>
            <p class=\"ec-eyecatchRole__introDescriptiron\">";
        // line 20
        echo nl2br(twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.block.eyecatch.descriptiron"), "html", null, true));
        echo "</p>
            <a class=\"ec-blockBtn--top\" href=\"";
        // line 21
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=4\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.block.eyecatch.view_list"), "html", null, true);
        echo "</a>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__2020929a64f2e983c2c44f484a0b4691714475c3f940e505425881c85e96e948";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 21,  43 => 20,  39 => 19,  35 => 18,  29 => 15,  23 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__2020929a64f2e983c2c44f484a0b4691714475c3f940e505425881c85e96e948", "");
    }
}
