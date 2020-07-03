<?php

/* __string_template__39cd6e7a037a72b23ac2e0bba3fb80de021c55b404cfe54b4752a7d22ee9e66b */
class __TwigTemplate_478a3972b935d4757672a85edcdeb3b34a5e409dd72f879736d2e37286e87f82 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "__string_template__39cd6e7a037a72b23ac2e0bba3fb80de021c55b404cfe54b4752a7d22ee9e66b", 11);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'sub_title' => [$this, 'block_sub_title'],
            'stylesheet' => [$this, 'block_stylesheet'],
            'javascript' => [$this, 'block_javascript'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@admin/default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 13
        $context["menus"] = [0 => "setting", 1 => "shop", 2 => "shop_payment"];
        // line 11
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.payment_list"), "html", null, true);
    }

    // line 16
    public function block_sub_title($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop"), "html", null, true);
    }

    // line 18
    public function block_stylesheet($context, array $blocks = [])
    {
        // line 19
        echo "    <style type=\"text/css\">
        li.list-group-item {
            z-index: inherit !important;
        }
    </style>
";
    }

    // line 26
    public function block_javascript($context, array $blocks = [])
    {
        // line 27
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery.ui/jquery.ui.core.min.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery.ui/jquery.ui.widget.min.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery.ui/jquery.ui.mouse.min.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery.ui/jquery.ui.sortable.min.js", "admin"), "html", null, true);
        echo "\"></script>
    <script>
        \$(function() {
            // 初期表示時のsort noを保持.
            var oldSortNos = [];
            \$('.sortable-item').each(function() {
                oldSortNos.push(this.dataset.sortNo);
            });
            oldSortNos.sort(function(a, b) {
                return a - b;
            }).reverse();

            // 並び替え後にsort noを更新
            var updateSortNo = function() {
                var newSortNos = {};
                var i = 0;
                \$('.sortable-item').each(function() {
                    newSortNos[this.dataset.id] = oldSortNos[i];
                    i++;
                });

                \$.ajax({
                    url: '";
        // line 52
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_setting_shop_payment_sort_no_move");
        echo "',
                    type: 'POST',
                    data: newSortNos
                }).always(function() {
                    \$(\".modal-backdrop\").remove();
                });
            };

            // 最初と最後の↑↓を再描画
            var redrawDisableAllows = function() {
                var items = \$('.sortable-item');
                items.find('a').removeClass('disabled');
                items.first().find('a.action-up').addClass('disabled');
                items.last().find('a.action-down').addClass('disabled');
            };

            // オーバレイ後, 表示順の更新を行う
            var moveSortNo = function() {
                \$('body').append(\$('<div class=\"modal-backdrop show\"></div>'));
                updateSortNo();
                redrawDisableAllows();
            };

            // Drag and Drop
            \$(\".sortable-container\").sortable({
                items: '> .sortable-item',
                cursor: 'move',
                update: function(e, ui) {
                    moveSortNo();
                }
            });

            // Up
            \$('.sortable-item').on('click', 'a.action-up', function(e) {
                e.preventDefault();
                var current = \$(this).parents('li');

                if (current.prev().hasClass('sortable-item')) {
                    current.prev().before(current);
                    moveSortNo();
                }
            });

            // Down
            \$('.sortable-item').on('click', 'a.action-down', function(e) {
                e.preventDefault();
                var current = \$(this).parents('li');

                if (current.next().hasClass('sortable-item')) {
                    current.next().after(current);
                    moveSortNo();
                }
            });

            ";
        // line 107
        echo "            // 表示・非表示
            \$('.check-display').click(function(){
                var id = \$(this).attr('id');
                if(\$('.display-show-toggle-' + id).hasClass('fa-eye')){
                    \$('.display-show-toggle-' + id).addClass('fa-eye-slash');
                    \$('.display-show-toggle-' + id).removeClass('fa-eye');
                    \$('#' + id).css('background-color','#FAF1F1');
                }else{
                    \$('.display-show-toggle-' + id).addClass('fa-eye');
                    \$('.display-show-toggle-' + id).removeClass('fa-eye-slash');
                    \$('#' + id).css('background-color','');
                }
            });

            // 削除モーダルのhrefとmessageの変更
            \$('#DeleteModal').on('shown.bs.modal', function(event) {
                var target = \$(event.relatedTarget);
                // hrefの変更
                \$(this).find('[data-method=\"delete\"]').attr('href', target.data('url'));

                // messageの変更
                \$(this).find('p.modal-message').text(target.data('message'));
            });
        });
    </script>
";
    }

    // line 134
    public function block_main($context, array $blocks = [])
    {
        // line 135
        echo "    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                <div class=\"d-block mb-3\">
                    <a class=\"btn btn-ec-regular\" href=\"";
        // line 139
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_setting_shop_payment_new");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.create__new"), "html", null, true);
        echo "</a>
                </div>
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-body p-0\">
                        <ul class=\"list-group list-group-flush sortable-container\">
                            <li class=\"list-group-item\">
                                <div class=\"row justify-content-around\">
                                    <div class=\"col-auto\">&nbsp;&nbsp;&nbsp;</div>
                                    <div class=\"col-1\"><strong>";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.payment.payment_id"), "html", null, true);
        echo "</strong></div>
                                    <div class=\"col-2\"><strong>";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.payment_method"), "html", null, true);
        echo "</strong></div>
                                    <div class=\"col-1\"><strong>";
        // line 149
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.charge"), "html", null, true);
        echo "</strong></div>
                                    <div class=\"col\"><strong>";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.payment.terms_of_use"), "html", null, true);
        echo "</strong></div>
                                </div>
                            </li>
                            ";
        // line 153
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Payments"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["Payment"]) {
            // line 154
            echo "                                <li id=\"ex-payment-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Payment"], "id", []), "html", null, true);
            echo "\" class=\"list-group-item sortable-item\" data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Payment"], "id", []), "html", null, true);
            echo "\" data-sort-no=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Payment"], "sortNo", []), "html", null, true);
            echo "\">
                                    <div class=\"row justify-content-around\">
                                        <div class=\"col-auto d-flex align-items-center\"><i class=\"fa fa-bars text-ec-gray\"></i></div>
                                        <div class=\"col-1 d-flex align-items-center\">";
            // line 157
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Payment"], "id", []), "html", null, true);
            echo "</div>
                                        <div class=\"col-2 d-flex align-items-center\"><a href=\"";
            // line 158
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_setting_shop_payment_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["Payment"], "id", [])]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Payment"], "method", []), "html", null, true);
            echo "</a></div>
                                        <div class=\"col-1 d-flex align-items-center\"><span>";
            // line 159
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["Payment"], "charge", [])), "html", null, true);
            echo "</span></div>
                                        <div class=\"col d-flex align-items-center\">
                                        <span>
                                            ";
            // line 162
            if ((twig_get_attribute($this->env, $this->source, $context["Payment"], "rule_min", []) > 0)) {
                // line 163
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["Payment"], "rule_min", [])), "html", null, true);
                echo "
                                            ";
            } else {
                // line 165
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(0), "html", null, true);
                echo "
                                            ";
            }
            // line 167
            echo "
                                            ";
            // line 168
            if ((twig_get_attribute($this->env, $this->source, $context["Payment"], "rule_max", []) > 0)) {
                // line 169
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["Payment"], "rule_max", [])), "html", null, true);
                echo "
                                            ";
            } elseif ((null === twig_get_attribute($this->env, $this->source,             // line 170
$context["Payment"], "rule_max", []))) {
                // line 171
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.payment.unlimited"), "html", null, true);
                echo "
                                            ";
            }
            // line 173
            echo "                                        </span>
                                        </div>
                                        <div class=\"col-3 text-right\">
                                            <a class=\"btn btn-ec-actionIcon mr-2 action-up";
            // line 176
            echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [])) ? (" disabled") : (""));
            echo "\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.up"), "html", null, true);
            echo "\">
                                                <i class=\"fa fa-arrow-up fa-lg text-secondary\"></i>
                                            </a>
                                            <a class=\"btn btn-ec-actionIcon mr-2 action-down";
            // line 179
            echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [])) ? (" disabled") : (""));
            echo "\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.down"), "html", null, true);
            echo "\">
                                                <i class=\"fa fa-arrow-down fa-lg text-secondary\"></i>
                                            </a>
                                            <a class=\"btn btn-ec-actionIcon mr-2 action-visible\" href=\"";
            // line 182
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_setting_shop_payment_visible", ["id" => twig_get_attribute($this->env, $this->source, $context["Payment"], "id", [])]), "html", null, true);
            echo "\"
                                               data-tooltip=\"true\" data-placement=\"top\" title=\"";
            // line 183
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["Payment"], "visible", [])) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.to_hide")) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.to_show"))), "html", null, true);
            echo "\"
                                               data-confirm=\"false\" data-method=\"put\" ";
            // line 184
            echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
            echo " >
                                                <i class=\"fa fa-toggle-";
            // line 185
            echo ((twig_get_attribute($this->env, $this->source, $context["Payment"], "visible", [])) ? ("on") : ("off"));
            echo " fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                            </a>
                                            <div class=\"d-inline-block mr-2\" data-tooltip=\"true\" data-placement=\"top\"
                                                 title=\"";
            // line 188
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
            echo "\">
                                                <a class=\"btn btn-ec-actionIcon\" data-toggle=\"modal\" data-target=\"#DeleteModal\"
                                                   data-url=\"";
            // line 190
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_setting_shop_payment_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["Payment"], "id", [])]), "html", null, true);
            echo "\"
                                                   data-message=\"";
            // line 191
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__message", ["%name%" => twig_get_attribute($this->env, $this->source, $context["Payment"], "method", [])]), "html", null, true);
            echo "\">
                                                    <i class=\"fa fa-close fa-lg text-secondary\"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Payment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 199
        echo "                        </ul>
                        <!-- 削除モーダル -->
                        <div class=\"modal fade\" id=\"DeleteModal\" tabindex=\"-1\" role=\"dialog\"
                             aria-labelledby=\"DeleteModal\" aria-hidden=\"true\">
                            <div class=\"modal-dialog\" role=\"document\">
                                <div class=\"modal-content\">
                                    <div class=\"modal-header\">
                                        <h5 class=\"modal-title font-weight-bold\">
                                            ";
        // line 207
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__title"), "html", null, true);
        echo "
                                        </h5>
                                        <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                                            <span aria-hidden=\"true\">×</span>
                                        </button>
                                    </div>
                                    <div class=\"modal-body text-left\">
                                        <p class=\"text-left modal-message\"><!-- jsでメッセージを挿入 --></p>
                                    </div>
                                    <div class=\"modal-footer\">
                                        <button class=\"btn btn-ec-sub\" type=\"button\" data-dismiss=\"modal\">
                                            ";
        // line 218
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
        echo "
                                        </button>
                                        <a class=\"btn btn-ec-delete\" href=\"#\" ";
        // line 220
        echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
        echo "
                                           data-method=\"delete\" data-confirm=\"false\">
                                            ";
        // line 222
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
        echo "
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p>";
        // line 230
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.drag_and_drop_description"), "html", null, true);
        echo "</p>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__39cd6e7a037a72b23ac2e0bba3fb80de021c55b404cfe54b4752a7d22ee9e66b";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  425 => 230,  414 => 222,  409 => 220,  404 => 218,  390 => 207,  380 => 199,  358 => 191,  354 => 190,  349 => 188,  343 => 185,  339 => 184,  335 => 183,  331 => 182,  323 => 179,  315 => 176,  310 => 173,  302 => 171,  300 => 170,  293 => 169,  291 => 168,  288 => 167,  282 => 165,  276 => 163,  274 => 162,  268 => 159,  262 => 158,  258 => 157,  247 => 154,  230 => 153,  224 => 150,  220 => 149,  216 => 148,  212 => 147,  199 => 139,  193 => 135,  190 => 134,  161 => 107,  104 => 52,  79 => 30,  75 => 29,  71 => 28,  66 => 27,  63 => 26,  54 => 19,  51 => 18,  45 => 16,  39 => 15,  35 => 11,  33 => 13,  15 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__39cd6e7a037a72b23ac2e0bba3fb80de021c55b404cfe54b4752a7d22ee9e66b", "");
    }
}
