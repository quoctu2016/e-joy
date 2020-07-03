<?php

/* __string_template__a202713896650a2c946bd6467ed4c5b63bf67a6d31ee34cfe7501943a9c282c5 */
class __TwigTemplate_a4f779454822ac90d88120aa0d34ac6ab6629fd622b84b78fd404e376a320bd0 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__a202713896650a2c946bd6467ed4c5b63bf67a6d31ee34cfe7501943a9c282c5", 11);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.nav__history_detail"), "html", null, true);
        echo "</h1>
            </div>
            ";
        // line 23
        $this->loadTemplate("Mypage/navi.twig", "__string_template__a202713896650a2c946bd6467ed4c5b63bf67a6d31ee34cfe7501943a9c282c5", 23)->display($context);
        // line 24
        echo "        </div>

        ";
        // line 26
        $context["remessage"] = false;
        // line 27
        echo "
        <div class=\"ec-orderRole\">
            <div class=\"ec-orderRole__detail\">
                <div class=\"ec-orderOrder\">
                    <div class=\"ec-definitions\">
                        <dt>";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.order_date"), "html", null, true);
        echo "</dt>
                        <dd>";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_sec($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "create_date", [])), "html", null, true);
        echo "</dd>
                    </div>
                    <div class=\"ec-definitions\">
                        <dt>";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.order_no"), "html", null, true);
        echo "</dt>
                        <dd>";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "order_no", []), "html", null, true);
        echo "</dd>
                    </div>
                    ";
        // line 39
        if (twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "option_mypage_order_status_display", [])) {
            // line 40
            echo "                        <div class=\"ec-definitions\">
                            <dt>";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.order_status"), "html", null, true);
            echo "</dt>
                            <dd>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "CustomerOrderStatus", []), "html", null, true);
            echo "</dd>
                        </div>
                    ";
        }
        // line 45
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "isOptionPoint", [])) {
            // line 46
            echo "                        <div class=\"ec-definitions\">
                            <dt>";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.use_point"), "html", null, true);
            echo "</dt>
                            <dd>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "usePoint", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.point"), "html", null, true);
            echo "</dd>
                        </div>
                        <div class=\"ec-definitions\">
                            <dt>";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.add_point"), "html", null, true);
            echo "</dt>
                            <dd>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "addPoint", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.point"), "html", null, true);
            echo "</dd>
                        </div>
                    ";
        }
        // line 55
        echo "
                </div>
                <div class=\"ec-orderDelivery\">
                    <div class=\"ec-rectHeading\">
                        <h2>";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.delivery_info"), "html", null, true);
        echo "</h2>
                    </div>
                    ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "Shippings", []));
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
        foreach ($context['_seq'] as $context["_key"] => $context["Shipping"]) {
            // line 62
            echo "                        <div class=\"ec-orderDelivery__title\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.delivery"), "html", null, true);
            if (twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "multiple", [])) {
                echo "(";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", []), "html", null, true);
                echo ")";
            }
            echo "</div>
                        ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["Shipping"], "productOrderItems", []));
            foreach ($context['_seq'] as $context["_key"] => $context["orderItem"]) {
                // line 64
                echo "                            <div class=\"ec-orderDelivery__item\">
                                <div class=\"ec-imageGrid\">
                                    <div class=\"ec-imageGrid__img\">
                                        ";
                // line 67
                if ((null === twig_get_attribute($this->env, $this->source, $context["orderItem"], "product", []))) {
                    // line 68
                    echo "                                            <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct(""), "save_image"), "html", null, true);
                    echo "\"/>
                                        ";
                } else {
                    // line 70
                    echo "                                            <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "Product", []), "MainListImage", [])), "save_image"), "html", null, true);
                    echo "\"
                                                 alt=\"";
                    // line 71
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productName", []), "html", null, true);
                    echo "\"/>
                                        ";
                }
                // line 73
                echo "                                    </div>
                                    <div class=\"ec-imageGrid__content\">
                                        <p>
                                            ";
                // line 76
                if (( !(null === twig_get_attribute($this->env, $this->source, $context["orderItem"], "Product", [])) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "Product", []), "Status", []), "id", []) == twig_constant("Eccube\\Entity\\Master\\ProductStatus::DISPLAY_SHOW")))) {
                    // line 77
                    echo "                                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_detail", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "Product", []), "id", [])]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productName", []), "html", null, true);
                    echo "</a>
                                            ";
                } else {
                    // line 79
                    echo "                                                ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productName", []), "html", null, true);
                    echo "
                                            ";
                }
                // line 80
                echo " ×";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orderItem"], "quantity", []), "html", null, true);
                echo "
                                        </p>
                                        ";
                // line 82
                if ( !(null === twig_get_attribute($this->env, $this->source, $context["orderItem"], "ProductClass", []))) {
                    // line 83
                    echo "                                            ";
                    if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "ProductClass", []), "ClassCategory1", []))) {
                        // line 84
                        echo "                                                ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", []), "classCategory1", []), "className", []), "name", []), "html", null, true);
                        echo "：";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", []), "classCategory1", []), "html", null, true);
                        echo "
                                            ";
                    }
                    // line 86
                    echo "                                            ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "ProductClass", []), "ClassCategory2", [])) {
                        // line 87
                        echo "                                                <br>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", []), "classCategory2", []), "className", []), "name", []), "html", null, true);
                        echo "：";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", []), "classCategory2", []), "html", null, true);
                        echo "
                                            ";
                    }
                    // line 89
                    echo "                                        ";
                }
                // line 90
                echo "                                        <p>";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["orderItem"], "price_inc_tax", [])), "html", null, true);
                echo "
                                            × ";
                // line 91
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orderItem"], "quantity", [])), "html", null, true);
                echo "</p>
                                        ";
                // line 92
                if ((twig_get_attribute($this->env, $this->source, $context["orderItem"], "product", []) && (twig_get_attribute($this->env, $this->source, $context["orderItem"], "price_inc_tax", []) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", []), "price02IncTax", [])))) {
                    // line 93
                    echo "                                            <p class=\"ec-color-accent\">
                                                ";
                    // line 94
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.current_price"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", []), "price02IncTax", [])), "html", null, true);
                    echo "</p>
                                            ";
                    // line 95
                    $context["remessage"] = true;
                    // line 96
                    echo "                                        ";
                }
                // line 97
                echo "
                                    </div>
                                </div>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orderItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            echo "                        <div class=\"ec-orderDelivery__address\">
                            <p>";
            // line 103
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getFormatName(twig_get_attribute($this->env, $this->source, $context["Shipping"], "name01", []), twig_get_attribute($this->env, $this->source, $context["Shipping"], "name02", [])), "html", null, true);
            echo "</p>
                            <p>";
            // line 104
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getFormatAddress(twig_get_attribute($this->env, $this->source, $context["Shipping"], "addr01", []), twig_get_attribute($this->env, $this->source, $context["Shipping"], "addr02", []), twig_get_attribute($this->env, $this->source, $context["Shipping"], "pref", []), twig_get_attribute($this->env, $this->source, $context["Shipping"], "postal_code", [])), "html", null, true);
            echo "</p>
                            <p>";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Shipping"], "phone_number", []), "html", null, true);
            echo "</p>
                        </div>
                        <div class=\"ec-definitions--soft\">
                            <dt>";
            // line 108
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.delivery_provider"), "html", null, true);
            echo " :</dt>
                            <dd>";
            // line 109
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Shipping"], "shipping_delivery_name", []), "html", null, true);
            echo "</dd>
                        </div>
                        <div class=\"ec-definitions--soft\">
                            <dt>";
            // line 112
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.delivery_date"), "html", null, true);
            echo " :</dt>
                            <dd>";
            // line 113
            echo twig_escape_filter($this->env, _twig_default_filter($this->extensions['Eccube\Twig\Extension\IntlExtension']->date_day_with_weekday($this->env, twig_get_attribute($this->env, $this->source, $context["Shipping"], "shipping_delivery_date", [])), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.select__unspecified")), "html", null, true);
            echo "</dd>
                        </div>
                        <div class=\"ec-definitions--soft\">
                            <dt>";
            // line 116
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.delivery_time"), "html", null, true);
            echo " :</dt>
                            <dd>";
            // line 117
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["Shipping"], "shipping_delivery_time", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["Shipping"], "shipping_delivery_time", []), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.select__unspecified"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.select__unspecified"))), "html", null, true);
            echo "</dd>
                        </div>
                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Shipping'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "                </div>
                <div class=\"ec-orderPayment\">
                    <div class=\"ec-rectHeading\">
                        <h2>";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.payment_info"), "html", null, true);
        echo "</h2>
                    </div>
                    <p>";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.payment"), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "PaymentMethod", []), "html", null, true);
        echo "</p>
                </div>
                <div class=\"ec-orderConfirm\">
                    <div class=\"ec-rectHeading\">
                        <h2>";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.message"), "html", null, true);
        echo "</h2>
                    </div>
                    <p>";
        // line 131
        echo twig_escape_filter($this->env, _twig_default_filter(nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "message", []), "html", null, true)), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.message_not_found")), "html", null, true);
        echo "</p>
                </div>
                <div class=\"ec-orderMails\">
                    <div class=\"ec-rectHeading\">
                        <h2>";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.mail_list"), "html", null, true);
        echo "</h2>
                    </div>
                    ";
        // line 137
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "MailHistories", []));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["MailHistory"]) {
            // line 138
            echo "                        <div class=\"ec-orderMail\">
                            <div class=\"ec-orderMail__time\">";
            // line 139
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_sec($this->env, twig_get_attribute($this->env, $this->source, $context["MailHistory"], "send_date", [])), "html", null, true);
            echo "</div>
                            <div class=\"ec-orderMail__link\"><a>";
            // line 140
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["MailHistory"], "mail_subject", []), "html", null, true);
            echo "</a></div>
                            <div class=\"ec-orderMail__body\">";
            // line 141
            echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["MailHistory"], "mail_body", []), "html", null, true));
            echo "<p class=\"ec-orderMail__close\"><a>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.close"), "html", null, true);
            echo "</a></p></div>
                        </div>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 144
            echo "                        <p class=\"ec-reportDescription\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.mail_not_found"), "html", null, true);
            echo "</p>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['MailHistory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        echo "                </div>
            </div>
            <div class=\"ec-orderRole__summary\">
                <div class=\"ec-totalBox\">
                    <dl class=\"ec-totalBox__spec\">
                        <dt>";
        // line 151
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.subtotal"), "html", null, true);
        echo "</dt>
                        <dd>";
        // line 152
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "subtotal", [])), "html", null, true);
        echo "</dd>
                    </dl>
                    <dl class=\"ec-totalBox__spec\">
                        <dt>";
        // line 155
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.charge"), "html", null, true);
        echo "</dt>
                        <dd>";
        // line 156
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "charge", [])), "html", null, true);
        echo "</dd>
                    </dl>
                    <dl class=\"ec-totalBox__spec\">
                        <dt>";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.delivery_fee"), "html", null, true);
        echo "</dt>
                        <dd>";
        // line 160
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "delivery_fee_total", [])), "html", null, true);
        echo "</dd>
                    </dl>
                    ";
        // line 162
        if ((twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "discount", []) > 0)) {
            // line 163
            echo "                        <dl class=\"ec-totalBox__spec\">
                            <dt>";
            // line 164
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.discount"), "html", null, true);
            echo "</dt>
                            <dd>";
            // line 165
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter((0 - twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "discount", []))), "html", null, true);
            echo "</dd>
                        </dl>
                    ";
        }
        // line 168
        echo "                    <div class=\"ec-totalBox__total\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.total"), "html", null, true);
        echo "<span
                                class=\"ec-totalBox__price\">";
        // line 169
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "payment_total", [])), "html", null, true);
        echo "</span><span
                                class=\"ec-totalBox__taxLabel\">";
        // line 170
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.tax_include"), "html", null, true);
        echo "</span></div>
                    ";
        // line 171
        if (($context["stockOrder"] ?? null)) {
            // line 172
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("mypage_order", ["order_no" => twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "order_no", [])]), "html", null, true);
            echo "\"
                       class=\"ec-blockBtn--action load-overlay\" ";
            // line 173
            echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
            echo " data-method=\"put\"
                       data-confirm=\"false\">";
            // line 174
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.reorder"), "html", null, true);
            echo "</a>
                    ";
        }
        // line 176
        echo "                </div>
                ";
        // line 177
        if (($context["remessage"] ?? null)) {
            // line 178
            echo "                    <p class=\"ec-color-accent\">
                        <strong>";
            // line 179
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.reorder_message"), "html", null, true);
            echo "</strong>
                    </p>
                ";
        }
        // line 182
        echo "            </div>
        </div>
        <div class=\"ec-role\">
            <a href=\"";
        // line 185
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("mypage");
        echo "\" class=\"ec-inlineBtn\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.back"), "html", null, true);
        echo "</a>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__a202713896650a2c946bd6467ed4c5b63bf67a6d31ee34cfe7501943a9c282c5";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  512 => 185,  507 => 182,  501 => 179,  498 => 178,  496 => 177,  493 => 176,  488 => 174,  484 => 173,  479 => 172,  477 => 171,  473 => 170,  469 => 169,  464 => 168,  458 => 165,  454 => 164,  451 => 163,  449 => 162,  444 => 160,  440 => 159,  434 => 156,  430 => 155,  424 => 152,  420 => 151,  413 => 146,  404 => 144,  394 => 141,  390 => 140,  386 => 139,  383 => 138,  378 => 137,  373 => 135,  366 => 131,  361 => 129,  352 => 125,  347 => 123,  342 => 120,  325 => 117,  321 => 116,  315 => 113,  311 => 112,  305 => 109,  301 => 108,  295 => 105,  291 => 104,  287 => 103,  284 => 102,  274 => 97,  271 => 96,  269 => 95,  264 => 94,  261 => 93,  259 => 92,  255 => 91,  250 => 90,  247 => 89,  239 => 87,  236 => 86,  228 => 84,  225 => 83,  223 => 82,  217 => 80,  211 => 79,  203 => 77,  201 => 76,  196 => 73,  191 => 71,  186 => 70,  180 => 68,  178 => 67,  173 => 64,  169 => 63,  159 => 62,  142 => 61,  137 => 59,  131 => 55,  123 => 52,  119 => 51,  111 => 48,  107 => 47,  104 => 46,  101 => 45,  95 => 42,  91 => 41,  88 => 40,  86 => 39,  81 => 37,  77 => 36,  71 => 33,  67 => 32,  60 => 27,  58 => 26,  54 => 24,  52 => 23,  45 => 21,  40 => 18,  37 => 17,  33 => 11,  31 => 15,  29 => 13,  15 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__a202713896650a2c946bd6467ed4c5b63bf67a6d31ee34cfe7501943a9c282c5", "");
    }
}
