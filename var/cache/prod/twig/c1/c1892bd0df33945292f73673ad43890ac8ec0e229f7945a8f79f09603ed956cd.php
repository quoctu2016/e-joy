<?php

/* @SamplePayment/admin/order_edit.twig */
class __TwigTemplate_1c5bc24d87c5ba46fb59ec04b8dc10046415acd46f29dfc37e73faa6a014de6e extends Twig_Template
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
        // ページ最下部に移動
        \$('#sample_payment-info').appendTo(\$('#form1 > div.c-contentsArea__cols > div > div'));
        \$('#sample_payment-cvsinfo').appendTo(\$('#form1 > div.c-contentsArea__cols > div > div'));

        // 取消処理実行
        \$('#sample_payment-action__cancel').on('click', function () {
            \$('#sample_payment-info__body button').prop('disabled', true);
            \$.ajax({
                type: 'POST',
                url: '";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("sample_payment_admin_order_cancel", ["id" => twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "id", [])]), "html", null, true);
        echo "',
            }).always(function () {
                location.href = location.href;
            });
        });

        // キャンセル処理実行
        \$('#sample_payment-action__change_price').on('click', function () {
            \$('#sample_payment-info__body button').prop('disabled', true);
            \$.ajax({
                type: 'POST',
                url: '";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("sample_payment_admin_order_change_price", ["id" => twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "id", [])]), "html", null, true);
        echo "',
            }).always(function () {
                location.href = location.href;
            });
        });
    });
</script>
<div class=\"d-none\">
    <div id=\"sample_payment-info\" class=\"card rounded border-0 mb-4\">
        <div class=\"card-header\">
            <div class=\"row\">
                <div class=\"col-8\">
                    <span class=\"card-title\">";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sample_payment.admin.order_edit.title"), "html", null, true);
        echo "</span>
                </div>
                <div class=\"col-4 text-right\"><a data-toggle=\"collapse\" href=\"#sample_payment-info__body\"
                                                 aria-expanded=\"false\" aria-controls=\"sample_payment-info__body\"><i
                                class=\"fa fa-angle-up fa-lg\"></i></a></div>
            </div>
        </div>
        <div class=\"collapse show ec-cardCollapse\" id=\"sample_payment-info__body\">
            <div class=\"card-body\">
                <div class=\"row mb-2\">
                    <div class=\"col-2\"><span>";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sample_payment.admin.order_edit.payment_status"), "html", null, true);
        echo "</span></div>
                    <div class=\"col\">
                        ";
        // line 47
        echo twig_escape_filter($this->env, (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "sample_payment_payment_status", []))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "sample_payment_payment_status", []), "name", [])) : ("--")), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"row mb-2\">
                    <div class=\"col-2\"><span>";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sample_payment.admin.order_edit.payment_action"), "html", null, true);
        echo "</span></div>
                    <div class=\"col\">
                        <ul class=\"list-inline\">
                            <li class=\"list-inline-item\">
                                <button id=\"sample_payment-action__cancel\" type=\"button\"
                                        class=\"btn btn-ec-regular px-5\">";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sample_payment.admin.order_edit.payment_action_cancel"), "html", null, true);
        echo "
                                </button>
                            </li>
                            <li class=\"list-inline-item\">
                                <button id=\"sample_payment-action__change_price\" type=\"button\"
                                        class=\"btn btn-ec-regular px-5\">
                                    ";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sample_payment.admin.order_edit.payment_action_change_price"), "html", null, true);
        echo "
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id=\"sample_payment-cvsinfo\" class=\"card rounded border-0 mb-4\">
        <div class=\"card-header\">
            <div class=\"row\">
                <div class=\"col-8\">
                    <span class=\"card-title\">";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sample_payment.admin.order_edit.cvs_title"), "html", null, true);
        echo "</span>
                </div>
                <div class=\"col-4 text-right\"><a data-toggle=\"collapse\" href=\"#sample_payment-cvsinfo__body\"
                                                 aria-expanded=\"false\" aria-controls=\"sample_payment-cvsinfo__body\"><i
                                                                                                                     class=\"fa fa-angle-up fa-lg\"></i></a></div>
            </div>
        </div>
        <div class=\"collapse show ec-cardCollapse\" id=\"sample_payment-cvsinfo__body\">
            <div class=\"card-body\">
                <div class=\"row mb-2\">
                    <div class=\"col-2\"><span>";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sample_payment.admin.order_edit.cvs_payment_status"), "html", null, true);
        echo "</span></div>
                    <div class=\"col\">
                        ";
        // line 87
        echo twig_escape_filter($this->env, (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "sample_payment_cvs_payment_status", []))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "sample_payment_cvs_payment_status", []), "name", [])) : ("--")), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"row mb-2\">
                    <div class=\"col-2\"><span>";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sample_payment.admin.order_edit.cvs_type"), "html", null, true);
        echo "</span></div>
                    <div class=\"col\">
                        ";
        // line 93
        echo twig_escape_filter($this->env, (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "sample_payment_cvs_type", []))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "sample_payment_cvs_type", []), "name", [])) : ("--")), "html", null, true);
        echo "
                    </div>
                </div>
            </div>
            <div class=\"card-body\">
                決済状況変更のテストはこちらから:
                <a target=\"_blank\" href=\"";
        // line 99
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("sample_payment_receive_cvs_status");
        echo "?no=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "orderNo", []), "html", null, true);
        echo "&cvs_status=";
        echo twig_escape_filter($this->env, twig_constant("Plugin\\SamplePayment\\Entity\\CvsPaymentStatus::COMPLETE"), "html", null, true);
        echo "\">決済完了</a>
                <a target=\"_blank\" href=\"";
        // line 100
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("sample_payment_receive_cvs_status");
        echo "?no=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "orderNo", []), "html", null, true);
        echo "&cvs_status=";
        echo twig_escape_filter($this->env, twig_constant("Plugin\\SamplePayment\\Entity\\CvsPaymentStatus::EXPIRED"), "html", null, true);
        echo "\">期限切れ</a>
                <a target=\"_blank\" href=\"";
        // line 101
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("sample_payment_receive_cvs_status");
        echo "?no=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "orderNo", []), "html", null, true);
        echo "&cvs_status=";
        echo twig_escape_filter($this->env, twig_constant("Plugin\\SamplePayment\\Entity\\CvsPaymentStatus::FAILURE"), "html", null, true);
        echo "\">決済失敗</a> 
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@SamplePayment/admin/order_edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 101,  170 => 100,  162 => 99,  153 => 93,  148 => 91,  141 => 87,  136 => 85,  123 => 75,  107 => 62,  98 => 56,  90 => 51,  83 => 47,  78 => 45,  65 => 35,  50 => 23,  36 => 12,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SamplePayment/admin/order_edit.twig", "C:\\xampp\\htdocs\\www\\e-joy\\app\\Plugin\\SamplePayment\\Resource\\template\\admin\\order_edit.twig");
    }
}
