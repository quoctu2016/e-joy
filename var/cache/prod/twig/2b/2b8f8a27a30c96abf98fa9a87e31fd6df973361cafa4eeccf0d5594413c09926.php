<?php

/* __string_template__858fe4d9cb8b65aae4d6012f35b5e974da7264c3582ad6dca62d663d5cd84fb7 */
class __TwigTemplate_edc803ec5622a1d71d0b10ec77551021f432f9e5f57ef1d49d14ec712fed7d9a extends Twig_Template
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
        echo "<div class=\"ec-headerRole\">
    <div class=\"ec-headerRole__title\">
        <div class=\"ec-headerTitle\">
            <div class=\"ec-headerTitle__title\">
                <h1>
                    <a href=\"";
        // line 16
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("homepage");
        echo "\">
                        ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "shop_name", []), "html", null, true);
        echo "
                    </a>
                </h1>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__858fe4d9cb8b65aae4d6012f35b5e974da7264c3582ad6dca62d663d5cd84fb7";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 17,  30 => 16,  23 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__858fe4d9cb8b65aae4d6012f35b5e974da7264c3582ad6dca62d663d5cd84fb7", "");
    }
}
