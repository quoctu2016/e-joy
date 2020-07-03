<?php

/* @RelatedProduct4/front/related_product.twig */
class __TwigTemplate_3313a4a97a487f632a5691f89836afefd22070c59ff1011359d4c3286ba766f0 extends Twig_Template
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
        // line 1
        echo "<script>
    \$(function () {
        \$('#RelatedProduct-product_area').appendTo(\$('.ec-layoutRole__main, .ec-layoutRole__mainWithColumn, .ec-layoutRole__mainBetweenColumn'));
    });
</script>

<div id=\"RelatedProduct-product_area\" class=\"ec-shelfRole\">
    <ul class=\"ec-shelfGrid\">
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "RelatedProducts", []));
        foreach ($context['_seq'] as $context["_key"] => $context["RelatedProduct"]) {
            // line 10
            echo "            ";
            $context["ChildProduct"] = twig_get_attribute($this->env, $this->source, $context["RelatedProduct"], "ChildProduct", []);
            // line 11
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ChildProduct"] ?? null), "Status", []), "id", []) == twig_constant("Eccube\\Entity\\Master\\ProductStatus::DISPLAY_SHOW"))) {
                // line 12
                echo "                <li class=\"ec-shelfGrid__item\">
                    <a href=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_detail", ["id" => twig_get_attribute($this->env, $this->source, ($context["ChildProduct"] ?? null), "id", [])]), "html", null, true);
                echo "\">
                        <p class=\"ec-shelfGrid__item-image\">
                            <img src=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RelatedProduct"], "ChildProduct", []), "main_list_image", [])), "save_image"), "html", null, true);
                echo "\">
                        </p>
                        <p>";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RelatedProduct"], "ChildProduct", []), "name", []), "html", null, true);
                echo "</p>
                        <p>
                            ";
                // line 19
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RelatedProduct"], "ChildProduct", []), "hasProductClass", [])) {
                    // line 20
                    echo "                                ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RelatedProduct"], "ChildProduct", []), "getPrice02Min", []) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RelatedProduct"], "ChildProduct", []), "getPrice02Max", []))) {
                        // line 21
                        echo "                                    ";
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RelatedProduct"], "ChildProduct", []), "getPrice02IncTaxMin", [])), "html", null, true);
                        echo "
                                ";
                    } else {
                        // line 23
                        echo "                                    ";
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RelatedProduct"], "ChildProduct", []), "getPrice02IncTaxMin", [])), "html", null, true);
                        echo " ～ ";
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RelatedProduct"], "ChildProduct", []), "getPrice02IncTaxMax", [])), "html", null, true);
                        echo "
                                ";
                    }
                    // line 25
                    echo "                            ";
                } else {
                    // line 26
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RelatedProduct"], "ChildProduct", []), "getPrice02IncTaxMin", [])), "html", null, true);
                    echo "
                            ";
                }
                // line 28
                echo "                        </p>
                    </a>
                    <span>";
                // line 30
                echo twig_get_attribute($this->env, $this->source, $context["RelatedProduct"], "content", []);
                echo "</span>
                </li>
            ";
            }
            // line 33
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['RelatedProduct'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "    </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "@RelatedProduct4/front/related_product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 34,  99 => 33,  93 => 30,  89 => 28,  83 => 26,  80 => 25,  72 => 23,  66 => 21,  63 => 20,  61 => 19,  56 => 17,  51 => 15,  46 => 13,  43 => 12,  40 => 11,  37 => 10,  33 => 9,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@RelatedProduct4/front/related_product.twig", "C:\\xampp\\htdocs\\www\\e-joy\\app\\Plugin\\RelatedProduct4\\Resource\\template\\front\\related_product.twig");
    }
}
