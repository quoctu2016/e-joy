<?php

/* __string_template__fd4ceb0296c6a5a1dea112ae5669e14abdaa932f4da18e3f81a4de652ae68436 */
class __TwigTemplate_2369d13e093ac2d64bb7aeea7620430ff7c856fa30bcc0a5b49eaebb288c2144 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__fd4ceb0296c6a5a1dea112ae5669e14abdaa932f4da18e3f81a4de652ae68436", 11);
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
        $context["mypageno"] = "favorite";
        // line 15
        $context["body_class"] = "mypage";
        // line 11
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 17
    public function block_main($context, array $blocks = [])
    {
        // line 18
        echo "    <div class=\"ec-layoutRole__main\">
        <div class=\"ec-mypageRole\">
            <div class=\"ec-pageHeader\">
                <h1>";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.title"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.nav__favorite"), "html", null, true);
        echo "</h1>
            </div>
            ";
        // line 23
        $this->loadTemplate("Mypage/navi.twig", "__string_template__fd4ceb0296c6a5a1dea112ae5669e14abdaa932f4da18e3f81a4de652ae68436", 23)->display($context);
        // line 24
        echo "        </div>

        <div class=\"ec-mypageRole\">
            <div class=\"ec-favoriteRole\">
                ";
        // line 28
        if ((twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "totalItemCount", []) > 0)) {
            // line 29
            echo "                    <div class=\"ec-favoriteRole__header\">
                        <p>";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.favorite_count", ["%count%" => twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "totalItemCount", [])]), "html", null, true);
            echo "</p>
                    </div>
                    <div class=\"ec-favoriteRole__detail\">
                        <ul class=\"ec-favoriteRole__itemList\">
                            ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["FavoriteProduct"]) {
                // line 35
                echo "                                ";
                $context["Product"] = twig_get_attribute($this->env, $this->source, $context["FavoriteProduct"], "Product", []);
                // line 36
                echo "                                <li class=\"ec-favoriteRole__item\">
                                    <a class=\"ec-closeBtn--circle\"
                                       href=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("mypage_favorite_delete", ["id" => twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "id", [])]), "html", null, true);
                echo "\" ";
                echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
                echo "
                                       data-method=\"delete\">
                                        <div class=\"ec-icon\">
                                            <img src=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/cross-white.svg"), "html", null, true);
                echo "\" alt=\"close\">
                                        </div>
                                    </a>
                                    <a class=\"ec-favoriteRole__itemThumb\" href=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_detail", ["id" => twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "id", [])]), "html", null, true);
                echo "\">
                                        <p class=\"ec-favoriteRole__item-image\">
                                            <img src=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "main_list_image", [])), "save_image"), "html", null, true);
                echo "\">
                                        </p>
                                    </a>
                                    <p class=\"ec-favoriteRole__itemTitle\">";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "name", []), "html", null, true);
                echo "</p>
                                    <p class=\"ec-favoriteRole__itemPrice\">
                                        ";
                // line 51
                if ((twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "price02_inc_tax_min", []) == twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "price02_inc_tax_max", []))) {
                    // line 52
                    echo "                                            ";
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "price02_inc_tax_min", [])), "html", null, true);
                    echo "
                                        ";
                } else {
                    // line 54
                    echo "                                            ";
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "price02_inc_tax_min", [])), "html", null, true);
                    echo "～";
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "price02_inc_tax_max", [])), "html", null, true);
                    echo "
                                        ";
                }
                // line 56
                echo "                                    </p>
                                </li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['FavoriteProduct'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "                        </ul>
                    </div>
                    <div class=\"ec-pagerRole\">
                        ";
            // line 62
            $this->loadTemplate("pager.twig", "__string_template__fd4ceb0296c6a5a1dea112ae5669e14abdaa932f4da18e3f81a4de652ae68436", 62)->display(array_merge($context, ["pages" => twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "paginationData", [])]));
            // line 63
            echo "                    </div>
                ";
        } else {
            // line 65
            echo "                    <div class=\"ec-favoriteRole__header\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.favorite_not_found"), "html", null, true);
            echo "</div>
                ";
        }
        // line 67
        echo "            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__fd4ceb0296c6a5a1dea112ae5669e14abdaa932f4da18e3f81a4de652ae68436";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 67,  148 => 65,  144 => 63,  142 => 62,  137 => 59,  129 => 56,  121 => 54,  115 => 52,  113 => 51,  108 => 49,  102 => 46,  97 => 44,  91 => 41,  83 => 38,  79 => 36,  76 => 35,  72 => 34,  65 => 30,  62 => 29,  60 => 28,  54 => 24,  52 => 23,  45 => 21,  40 => 18,  37 => 17,  33 => 11,  31 => 15,  29 => 13,  15 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__fd4ceb0296c6a5a1dea112ae5669e14abdaa932f4da18e3f81a4de652ae68436", "");
    }
}
