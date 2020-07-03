<?php

/* Mail/vi/order.html.twig */
class __TwigTemplate_99e6da9c912d0f1abbfa46842101cfc4e65a01c9f4a5df19e7eebfebf43fe109 extends Twig_Template
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
        // line 8
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\" \"http://www.w3.org/TR/html4/loose.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">

<body bgcolor=\"#F0F0F0\" leftmargin=\"0\" topmargin=\"0\" marginwidth=\"0\" marginheight=\"0\" style=\"margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;\">
<br>
<br>
<div align=\"center\"><a href=\"";
        // line 14
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("homepage");
        echo "\" style=\"font-family:Helvetica, Arial, sans-serif;font-size:30px;color:#333333;text-decoration:none;\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "shop_name", []), "html", null, true);
        echo "</a></div>
<!-- 100% background wrapper (grey background) -->
<table border=\"0\" width=\"100%\" height=\"100%\" cellpadding=\"0\" cellspacing=\"0\" bgcolor=\"#F0F0F0\" style=\"border-spacing:0;mso-table-lspace:0pt;mso-table-rspace:0pt;\">
    <tr>
        <td align=\"center\" valign=\"top\" bgcolor=\"#F0F0F0\" style=\"background-color:#F0F0F0;border-collapse:collapse;\">
            <br>
            <!-- 600px container (white background) -->
            <table id=\"html-mail-table1\" border=\"0\" width=\"600px\" cellpadding=\"10\" cellspacing=\"0\" class=\"container\" style=\"border-spacing:0;mso-table-lspace:0pt;mso-table-rspace:0pt;\">
                <tr>
                    <td class=\"container-padding content\" align=\"left\" style=\"border-collapse:collapse;padding-left:24px;padding-right:24px;padding-top:12px;padding-bottom:12px;background-color:#ffffff;\">
                        <br>
                        <div class=\"title\" style=\"font-family:Helvetica, Arial, sans-serif;font-size:14px;line-height:20px;text-align:left;color:#333333;\">Cảm ơn bạn đã đặt hàng bên chúng tôi.</div>
                        <br>
                        <div class=\"body-text\" style=\"font-family:Helvetica, Arial, sans-serif;font-size:14px;line-height:20px;text-align:left;color:#333333;\">
                            Chào ";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getFormatName(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "name01", []), twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "name02", [])), "html", null, true);
        echo "<br/>
                            <br/>
                            Xin hãy xác nhận lại đơn hàng của bạn dưới đây. <br/>
                            <br/>
                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            　Tóm tắt đơn hàng<br/>
                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            Thời gian đặt hàng：";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_sec($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "create_date", [])), "html", null, true);
        echo "<br/>
                            Mã đơn đặt hàng：";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "order_no", []), "html", null, true);
        echo "<br/>
                            Tổng số tiền：";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "payment_total", [])), "html", null, true);
        echo "<br/>
                            Cách thức thanh toán：";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "payment_method", []), "html", null, true);
        echo "<br/>
                            ";
        // line 39
        if ((twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "isOptionPoint", []) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "Customer", [])))) {
            // line 40
            echo "                            Điểm sử dụng：";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "usePoint", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.point"), "html", null, true);
            echo "<br/>
                            ";
        }
        // line 42
        echo "                            Liên hệ：";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "message", []), "html", null, true);
        echo "<br/>
                            <br/>
                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            　Chi tiết về đơn hàng<br/>
                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "MergedProductOrderItems", []));
        foreach ($context['_seq'] as $context["_key"] => $context["OrderItem"]) {
            // line 48
            echo "                                Mã sản phẩm：";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["OrderItem"], "product_code", []), "html", null, true);
            echo "<br/>
                                Tên sản phẩm：";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["OrderItem"], "product_name", []), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["OrderItem"], "classcategory_name1", []), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["OrderItem"], "classcategory_name2", []), "html", null, true);
            echo "<br/>
                                Đơn giá：";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["OrderItem"], "total_price", [])), "html", null, true);
            echo "<br/>
                                Số lượng：";
            // line 51
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["OrderItem"], "quantity", [])), "html", null, true);
            echo "<br/>
                                <br/>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['OrderItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                            <hr style=\"border-top: 2px dashed #8c8b8b;\">
                            Thành tiền：";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "subtotal", [])), "html", null, true);
        if ((twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "tax", []) > 0)) {
            echo "(Thuế";
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "tax", [])), "html", null, true);
            echo ")";
        }
        echo "<br/>
                            <br/>
                            Phí thanh toán：";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "charge", [])), "html", null, true);
        echo "<br/>
                            Phí vận chuyển：";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "delivery_fee_total", [])), "html", null, true);
        echo "<br/>
                            ";
        // line 59
        if ((twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "discount", []) > 0)) {
            // line 60
            echo "                                Giảm giá：";
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter((0 - twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "discount", []))), "html", null, true);
            echo "<br/>
                            ";
        }
        // line 62
        echo "                            <hr style=\"border-top: 1px dotted #8c8b8b;\">
                            Tổng số tiền：";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "payment_total", [])), "html", null, true);
        echo "<br/>
                            <br/>
                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            　Thông tin người đặt hàng <br/>
                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            Họ và tên：";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getFormatName(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "name01", []), twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "name02", [])), "html", null, true);
        echo "<br/>
                            ";
        // line 69
        if (twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "company_name", [])) {
            // line 70
            echo "                                Tên công ty：";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "company_name", []), "html", null, true);
            echo "<br/>
                            ";
        }
        // line 72
        echo "                            Số bưu điện：";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.postal_symbol"), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "postal_code", []), "html", null, true);
        echo "<br/>
                            Địa chỉ：";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "Pref", []), "name", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "addr01", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "addr02", []), "html", null, true);
        echo "<br/>
                            Số điện thoại：";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "phone_number", []), "html", null, true);
        echo "<br/>
                            Địa chỉ email：";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "email", []), "html", null, true);
        echo "<br/>
                            <br/>
                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            　Thông tin giao hàng <br/>
                            <hr style=\"border-top: 3px double #8c8b8b;\">

                            ";
        // line 81
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
            // line 82
            echo "                                ◎Nơi giao hàng";
            if (twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "multiple", [])) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", []), "html", null, true);
            }
            echo "<br/>
                                <br/>
                                Tên người nhận：";
            // line 84
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getFormatName(twig_get_attribute($this->env, $this->source, $context["Shipping"], "name01", []), twig_get_attribute($this->env, $this->source, $context["Shipping"], "name02", [])), "html", null, true);
            echo "<br/>
                                ";
            // line 85
            if (twig_get_attribute($this->env, $this->source, $context["Shipping"], "company_name", [])) {
                // line 86
                echo "                                    Tên công ty：";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Shipping"], "company_name", []), "html", null, true);
                echo "<br/>
                                ";
            }
            // line 88
            echo "                                Số bưu điện：";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.postal_symbol"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Shipping"], "postal_code", []), "html", null, true);
            echo "<br/>
                                Địa chỉ：";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Shipping"], "Pref", []), "name", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Shipping"], "addr01", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Shipping"], "addr02", []), "html", null, true);
            echo "<br/>
                                Số điện thoại：";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Shipping"], "phone_number", []), "html", null, true);
            echo "<br/>
                                <br/>
                                Phương thức giao hàng：";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Shipping"], "shipping_delivery_name", []), "html", null, true);
            echo "<br/>
                                Ngày giao hàng：";
            // line 93
            echo twig_escape_filter($this->env, ((twig_test_empty(twig_get_attribute($this->env, $this->source, $context["Shipping"], "shipping_delivery_date", []))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.select__unspecified")) : ($this->extensions['Eccube\Twig\Extension\IntlExtension']->date_day($this->env, twig_get_attribute($this->env, $this->source, $context["Shipping"], "shipping_delivery_date", [])))), "html", null, true);
            echo "<br/>
                                Thời gian giao hàng：";
            // line 94
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["Shipping"], "shipping_delivery_time", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["Shipping"], "shipping_delivery_time", []), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.select__unspecified"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.select__unspecified"))), "html", null, true);
            echo "<br/>
                                <br/>
                                ";
            // line 96
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["Shipping"], "productOrderItems", []));
            foreach ($context['_seq'] as $context["_key"] => $context["OrderItem"]) {
                // line 97
                echo "                                    Mã sản phẩm：";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["OrderItem"], "product_code", []), "html", null, true);
                echo "<br/>
                                    Tên sản phẩm：";
                // line 98
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["OrderItem"], "product_name", []), "html", null, true);
                echo "  ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["OrderItem"], "classcategory_name1", []), "html", null, true);
                echo "  ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["OrderItem"], "classcategory_name2", []), "html", null, true);
                echo "<br/>
                                    Số lượng：";
                // line 99
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["OrderItem"], "quantity", [])), "html", null, true);
                echo "<br/>
                                    <br/>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['OrderItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            echo "                            ";
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
        // line 103
        echo "                            ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "complete_mail_message", []))) {
            // line 104
            echo "                                ";
            echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "complete_mail_message", []), "html", null, true));
            echo "<br/>
                            ";
        }
        // line 106
        echo "                            <hr style=\"border-top: 2px dotted #8c8b8b;\">
                            Đây chỉ là mail thông báo.<br/>
                            Chúng tôi không thể nhận hay trả lời mail của khách hàng bằng email này.<br/>
                            Xin lỗi vì sự bất tiện này. <br/>
                        </div>
                    </td>
                </tr>
            </table>
            <!--/600px container -->
            <br>
            <br>
            <table id=\"html-mail-table2\" border=\"0\" width=\"600px\" cellpadding=\"10\" cellspacing=\"0\" class=\"container\" style=\"border-spacing:0;mso-table-lspace:0pt;mso-table-rspace:0pt;\">
                <tr>
                    <td class=\"container-padding content footer-text\" align=\"left\" style=\"border-collapse:collapse;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:16px;color:#aaaaaa;padding-left:24px;padding-right:24px;padding-top:12px;padding-bottom:12px;background-color:#ffffff;\">
                        Mail này được gửi đến từ ";
        // line 120
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "shop_name", []), "html", null, true);
        echo "<br/>
                        Nếu bạn không phải là người đã đặt đơn hàng、vui lòng nhấp vào đây <a href=\"mailto:";
        // line 121
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "email02", []), "html", null, true);
        echo "\" style=\"text-decoration:none;\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "email02", []), "html", null, true);
        echo "</a> để được hướng dẫn thêm. <br/>
                        <br/>
                        <div class=\"title\" style=\"font-size:14px;font-family:Helvetica, Arial, sans-serif;font-weight:600;color:#374550;\"><a href=\"";
        // line 123
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("homepage");
        echo "\" style=\"color:#aaaaaa;text-decoration:none;\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "shop_name", []), "html", null, true);
        echo "</a></div>
                        <div>copyright &copy; ";
        // line 124
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "shop_name", []), "html", null, true);
        echo " all rights reserved.</div>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<!--/100% background wrapper-->
<br>
<br>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "Mail/vi/order.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  355 => 124,  349 => 123,  342 => 121,  338 => 120,  322 => 106,  316 => 104,  313 => 103,  299 => 102,  290 => 99,  282 => 98,  277 => 97,  273 => 96,  268 => 94,  264 => 93,  260 => 92,  255 => 90,  247 => 89,  241 => 88,  235 => 86,  233 => 85,  229 => 84,  221 => 82,  204 => 81,  195 => 75,  191 => 74,  183 => 73,  177 => 72,  171 => 70,  169 => 69,  165 => 68,  157 => 63,  154 => 62,  148 => 60,  146 => 59,  142 => 58,  138 => 57,  128 => 55,  125 => 54,  116 => 51,  112 => 50,  104 => 49,  99 => 48,  95 => 47,  86 => 42,  78 => 40,  76 => 39,  72 => 38,  68 => 37,  64 => 36,  60 => 35,  50 => 28,  31 => 14,  23 => 8,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Mail/vi/order.html.twig", "C:\\xampp\\htdocs\\www\\e-joy\\src\\Eccube\\Resource\\template\\default\\Mail\\vi\\order.html.twig");
    }
}
