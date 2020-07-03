<?php

/* Mail/vi/order.twig */
class __TwigTemplate_df8f7ff437ffb9dffd9fa62d6d368e59811a9c4163b7022bdf17a2ba7d085d78 extends Twig_Template
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
        // line 9
        echo $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getFormatName(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "name01", []), twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "name02", []));
        echo "

Cảm ơn bạn đã đặt hàng. Xin hãy xác nhận lại đơn hàng của bạn dưới đây.

************************************************
　Tóm tắt đơn hàng
************************************************

Thời gian đặt hàng：";
        // line 17
        echo $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_sec($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "create_date", []));
        echo "
Mã đơn đặt hàng：";
        // line 18
        echo twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "order_no", []);
        echo "
Tổng số tiền：";
        // line 19
        echo $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "payment_total", []));
        echo "
Cách thức thanh toán：";
        // line 20
        echo twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "payment_method", []);
        echo "
";
        // line 21
        if ((twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "isOptionPoint", []) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "Customer", [])))) {
            // line 22
            echo "Điểm sử dụng：";
            echo twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "usePoint", []);
            echo " ";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.point");
            echo "
";
        }
        // line 24
        echo "Liên hệ：";
        echo twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "message", []);
        echo "


************************************************
　Chi tiết về đơn hàng
************************************************

";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "MergedProductOrderItems", []));
        foreach ($context['_seq'] as $context["_key"] => $context["OrderItem"]) {
            // line 32
            echo "Mã sản phẩm：";
            echo twig_get_attribute($this->env, $this->source, $context["OrderItem"], "product_code", []);
            echo "
Tên sản phẩm：";
            // line 33
            echo twig_get_attribute($this->env, $this->source, $context["OrderItem"], "product_name", []);
            echo "  ";
            echo twig_get_attribute($this->env, $this->source, $context["OrderItem"], "classcategory_name1", []);
            echo "  ";
            echo twig_get_attribute($this->env, $this->source, $context["OrderItem"], "classcategory_name2", []);
            echo "
Đơn giá：";
            // line 34
            echo $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["OrderItem"], "total_price", []));
            echo "
Số lượng：";
            // line 35
            echo twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["OrderItem"], "quantity", []));
            echo "

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['OrderItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
-------------------------------------------------
Thành tiền：";
        // line 40
        echo $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "subtotal", []));
        if ((twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "tax", []) > 0)) {
            echo "(Thuế ";
            echo $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "tax", []));
            echo ")";
        }
        // line 41
        echo "
Phí thanh toán：";
        // line 42
        echo $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "charge", []));
        echo "
Phí vận chuyển：";
        // line 43
        echo $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "delivery_fee_total", []));
        echo "
";
        // line 44
        if ((twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "discount", []) > 0)) {
            // line 45
            echo "Giảm giá：";
            echo $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter((0 - twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "discount", [])));
            echo "
";
        }
        // line 47
        echo "============================================
Tổng số tiền：";
        // line 48
        echo $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "payment_total", []));
        echo "

************************************************
  Thông tin người đặt hàng
************************************************
Họ và tên：";
        // line 53
        echo $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getFormatName(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "name01", []), twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "name02", []));
        echo "
";
        // line 54
        if (twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "company_name", [])) {
            // line 55
            echo "Tên công ty：";
            echo twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "company_name", []);
            echo "
";
        }
        // line 57
        echo "Số bưu điện：";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.postal_symbol");
        echo twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "postal_code", []);
        echo "
Địa chỉ：";
        // line 58
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "Pref", []), "name", []);
        echo " ";
        echo twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "addr01", []);
        echo " ";
        echo twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "addr02", []);
        echo "
Số điện thoại：";
        // line 59
        echo twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "phone_number", []);
        echo "
Địa chỉ email：";
        // line 60
        echo twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "email", []);
        echo "

************************************************
　Thông tin giao hàng
************************************************

";
        // line 66
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
            // line 67
            echo "◎Nơi giao hàng";
            if (twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "multiple", [])) {
                echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", []);
            }
            // line 68
            echo "
Tên người nhận：";
            // line 69
            echo $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getFormatName(twig_get_attribute($this->env, $this->source, $context["Shipping"], "name01", []), twig_get_attribute($this->env, $this->source, $context["Shipping"], "name02", []));
            echo "
";
            // line 70
            if (twig_get_attribute($this->env, $this->source, $context["Shipping"], "company_name", [])) {
                // line 71
                echo "Tên công ty：";
                echo twig_get_attribute($this->env, $this->source, $context["Shipping"], "company_name", []);
                echo "
";
            }
            // line 73
            echo "Số bưu điện：";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.postal_symbol");
            echo twig_get_attribute($this->env, $this->source, $context["Shipping"], "postal_code", []);
            echo "
Địa chỉ：";
            // line 74
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Shipping"], "Pref", []), "name", []);
            echo twig_get_attribute($this->env, $this->source, $context["Shipping"], "addr01", []);
            echo twig_get_attribute($this->env, $this->source, $context["Shipping"], "addr02", []);
            echo "
Số điện thoại：";
            // line 75
            echo twig_get_attribute($this->env, $this->source, $context["Shipping"], "phone_number", []);
            echo "

Phương thức giao hàng：";
            // line 77
            echo twig_get_attribute($this->env, $this->source, $context["Shipping"], "shipping_delivery_name", []);
            echo "
Ngày giao hàng：";
            // line 78
            echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, $context["Shipping"], "shipping_delivery_date", []))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.select__unspecified")) : ($this->extensions['Eccube\Twig\Extension\IntlExtension']->date_day($this->env, twig_get_attribute($this->env, $this->source, $context["Shipping"], "shipping_delivery_date", []))));
            echo "
Thời gian giao hàng：";
            // line 79
            echo ((twig_get_attribute($this->env, $this->source, $context["Shipping"], "shipping_delivery_time", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["Shipping"], "shipping_delivery_time", []), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.select__unspecified"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.select__unspecified")));
            echo "

";
            // line 81
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["Shipping"], "productOrderItems", []));
            foreach ($context['_seq'] as $context["_key"] => $context["OrderItem"]) {
                // line 82
                echo "Mã sản phẩm：";
                echo twig_get_attribute($this->env, $this->source, $context["OrderItem"], "product_code", []);
                echo "
Tên sản phẩm：";
                // line 83
                echo twig_get_attribute($this->env, $this->source, $context["OrderItem"], "product_name", []);
                echo "  ";
                echo twig_get_attribute($this->env, $this->source, $context["OrderItem"], "classcategory_name1", []);
                echo "  ";
                echo twig_get_attribute($this->env, $this->source, $context["OrderItem"], "classcategory_name2", []);
                echo "
Số lượng：";
                // line 84
                echo twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["OrderItem"], "quantity", []));
                echo "

";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['OrderItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
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
        // line 88
        echo "
";
        // line 89
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "complete_mail_message", []))) {
            // line 90
            echo twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "complete_mail_message", []);
            echo "
";
        }
        // line 92
        echo "
============================================

Đây chỉ là mail thông báo.
Chúng tôi không thể nhận hay trả lời mail của khách hàng bằng email này.
Xin lỗi vì sự bất tiện này. 
";
    }

    public function getTemplateName()
    {
        return "Mail/vi/order.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  296 => 92,  291 => 90,  289 => 89,  286 => 88,  265 => 84,  257 => 83,  252 => 82,  248 => 81,  243 => 79,  239 => 78,  235 => 77,  230 => 75,  224 => 74,  218 => 73,  212 => 71,  210 => 70,  206 => 69,  203 => 68,  198 => 67,  181 => 66,  172 => 60,  168 => 59,  160 => 58,  154 => 57,  148 => 55,  146 => 54,  142 => 53,  134 => 48,  131 => 47,  125 => 45,  123 => 44,  119 => 43,  115 => 42,  112 => 41,  105 => 40,  101 => 38,  92 => 35,  88 => 34,  80 => 33,  75 => 32,  71 => 31,  60 => 24,  52 => 22,  50 => 21,  46 => 20,  42 => 19,  38 => 18,  34 => 17,  23 => 9,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Mail/vi/order.twig", "C:\\xampp\\htdocs\\www\\e-joy\\src\\Eccube\\Resource\\template\\default\\Mail\\vi\\order.twig");
    }
}
