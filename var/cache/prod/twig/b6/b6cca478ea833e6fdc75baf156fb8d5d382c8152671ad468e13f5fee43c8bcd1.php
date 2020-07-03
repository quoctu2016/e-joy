<?php

/* __string_template__05a5b221a8bb993a12a0551d3859d1b04361d39250b6bf74debde1dc5a7d22b2 */
class __TwigTemplate_9c4483c9dc451a4d878ef6f49d71aaa16aad1b0c322c48ed13f6ac92f1447929 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__05a5b221a8bb993a12a0551d3859d1b04361d39250b6bf74debde1dc5a7d22b2", 11);
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
        $context["mypageno"] = "index";
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.nav__history"), "html", null, true);
        echo "</h1>
            </div>
            ";
        // line 23
        $this->loadTemplate("Mypage/navi.twig", "__string_template__05a5b221a8bb993a12a0551d3859d1b04361d39250b6bf74debde1dc5a7d22b2", 23)->display($context);
        // line 24
        echo "        </div>
        <div class=\"ec-mypageRole\">
            ";
        // line 26
        if ((twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "totalItemCount", []) > 0)) {
            // line 27
            echo "                <p class=\"ec-para-normal\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.history_count", ["%count%" => twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "totalItemCount", [])]), "html", null, true);
            echo "</p>
                ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["Order"]) {
                // line 29
                echo "                    <div class=\"ec-historyRole\">
                        <div class=\"ec-historyRole__contents\">

                            <div class=\"ec-historyRole__header\">
                                <div class=\"ec-historyListHeader\">
                                    <p class=\"ec-historyListHeader__date\">";
                // line 34
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_sec($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "order_date", [])), "html", null, true);
                echo "</p>
                                    <dl class=\"ec-definitions\">
                                        <dt>";
                // line 36
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.order_no"), "html", null, true);
                echo "</dt>
                                        <dd>";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "order_no", []), "html", null, true);
                echo "</dd>
                                    </dl>
                                    ";
                // line 39
                if (twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "option_mypage_order_status_display", [])) {
                    // line 40
                    echo "                                        <dl class=\"ec-definitions\">
                                            <dt>";
                    // line 41
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.order_status"), "html", null, true);
                    echo "</dt>
                                            <dd>";
                    // line 42
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "CustomerOrderStatus", []), "html", null, true);
                    echo "</dd>
                                        </dl>
                                    ";
                }
                // line 45
                echo "                                    <p class=\"ec-historyListHeader__action\"><a class=\"ec-inlineBtn\"
                                                                               href=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("mypage_history", ["order_no" => twig_get_attribute($this->env, $this->source, $context["Order"], "order_no", [])]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.view_detail"), "html", null, true);
                echo "</a>
                                    </p>
                                </div>
                            </div>
                            <div class=\"ec-historyRole__detail\">
                                ";
                // line 51
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["Order"], "MergedProductOrderItems", []));
                foreach ($context['_seq'] as $context["_key"] => $context["OrderItem"]) {
                    // line 52
                    echo "                                    <div class=\"ec-imageGrid\">
                                        <div class=\"ec-imageGrid__img\">
                                            ";
                    // line 54
                    if ((null === twig_get_attribute($this->env, $this->source, $context["OrderItem"], "Product", []))) {
                        // line 55
                        echo "                                                <img src=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct(""), "save_image"), "html", null, true);
                        echo "\"/>
                                            ";
                    } else {
                        // line 57
                        echo "                                                <img src=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["OrderItem"], "Product", []), "MainListImage", [])), "save_image"), "html", null, true);
                        echo "\">
                                            ";
                    }
                    // line 59
                    echo "                                        </div>
                                        <div class=\"ec-imageGrid__content\">
                                            <p class=\"ec-historyRole__detailTitle\">";
                    // line 61
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["OrderItem"], "product_name", []), "html", null, true);
                    echo "</p>
                                            ";
                    // line 62
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["OrderItem"], "class_category_name1", []))) {
                        // line 63
                        echo "                                                ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["OrderItem"], "class_category_name1", []), "html", null, true);
                        echo "
                                            ";
                    }
                    // line 65
                    echo "                                            ";
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["OrderItem"], "class_category_name1", []))) {
                        // line 66
                        echo "                                                / ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["OrderItem"], "class_category_name2", []), "html", null, true);
                        echo "
                                            ";
                    }
                    // line 68
                    echo "                                            <p class=\"ec-historyRole__detailPrice\">";
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["OrderItem"], "price_inc_tax", [])), "html", null, true);
                    echo "
                                                × ";
                    // line 69
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["OrderItem"], "quantity", []), "html", null, true);
                    echo "</p>
                                        </div>
                                    </div>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['OrderItem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 73
                echo "                            </div>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "                <div class=\"ec-pagerRole\">
                    ";
            // line 78
            $this->loadTemplate("pager.twig", "__string_template__05a5b221a8bb993a12a0551d3859d1b04361d39250b6bf74debde1dc5a7d22b2", 78)->display(array_merge($context, ["pages" => twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "paginationData", [])]));
            // line 79
            echo "                </div>
            ";
        } else {
            // line 81
            echo "                <p class=\"ec-para-normal\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.history_not_found"), "html", null, true);
            echo "</p>
            ";
        }
        // line 83
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__05a5b221a8bb993a12a0551d3859d1b04361d39250b6bf74debde1dc5a7d22b2";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 83,  198 => 81,  194 => 79,  192 => 78,  189 => 77,  180 => 73,  170 => 69,  165 => 68,  159 => 66,  156 => 65,  150 => 63,  148 => 62,  144 => 61,  140 => 59,  134 => 57,  128 => 55,  126 => 54,  122 => 52,  118 => 51,  108 => 46,  105 => 45,  99 => 42,  95 => 41,  92 => 40,  90 => 39,  85 => 37,  81 => 36,  76 => 34,  69 => 29,  65 => 28,  60 => 27,  58 => 26,  54 => 24,  52 => 23,  45 => 21,  40 => 18,  37 => 17,  33 => 11,  31 => 15,  29 => 13,  15 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__05a5b221a8bb993a12a0551d3859d1b04361d39250b6bf74debde1dc5a7d22b2", "");
    }
}
