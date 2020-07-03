<?php

/* __string_template__14d2fb5725ceae02f9ac340380a582c0afe6ec9017f4871d32d0911cb8c2ba15 */
class __TwigTemplate_ba8f899a3e7742112566c44d6b59d10c153699687cd5e44d151c45f4e93f685b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "__string_template__14d2fb5725ceae02f9ac340380a582c0afe6ec9017f4871d32d0911cb8c2ba15", 11);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'sub_title' => [$this, 'block_sub_title'],
            'javascript' => [$this, 'block_javascript'],
            'main' => [$this, 'block_main'],
            '__internal_5be2f44d9311c7c50483e78a1ddef9759739e3286f04e52b0a11541baf2f242d' => [$this, 'block___internal_5be2f44d9311c7c50483e78a1ddef9759739e3286f04e52b0a11541baf2f242d'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@admin/default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 13
        $context["menus"] = [0 => "setting", 1 => "shop", 2 => "shop_delivery"];
        // line 18
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.delivery_setting"), "html", null, true);
    }

    // line 16
    public function block_sub_title($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop"), "html", null, true);
    }

    // line 21
    public function block_javascript($context, array $blocks = [])
    {
        // line 22
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery.ui/jquery.ui.core.min.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery.ui/jquery.ui.widget.min.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery.ui/jquery.ui.mouse.min.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery.ui/jquery.ui.sortable.min.js", "admin"), "html", null, true);
        echo "\"></script>
    <script>
        \$(function() {
            \$('#set_fee_all').on('click', function() {
                var fee = \$('#";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "free_all", []), "vars", []), "id", []), "html", null, true);
        echo "').val();
                if (\$.isNumeric(fee)) {
                    \$('input[name\$=\"[fee]\"]').val(fee);
                    return;
                }
                alert(\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.delivery.fee.invalid"), "html", null, true);
        echo "\");
            });
        });
    </script>
    <script>
        // 降順にソートする
        \$(function() {
            var \$items_wrapper = \$('.sortable-container');
            var \$items = \$('.sortable-item');
            \$items.sort(function(a, b) {
                return parseInt(\$(a).find('.sort-no').val()) > parseInt(\$(b).find('.sort-no').val());
            });
            \$items.each(function() {
                \$items_wrapper.append(\$(this).remove());
            })
        });

        // 並び替え後にsort noを更新
        function updateSortNo() {
            var \$items = \$('.sortable-container').find('.sortable-item');
            \$items.each(function() {
                \$(this).find('.sort-no').val(\$items.index(this) + 1);
            });
        }

        // 最初と最後の↑↓を再描画
        function redrawDisableAllows() {
            var items = \$('.sortable-item');
            items.find('a').removeClass('disabled');
            items.first().find('a.action-up').addClass('disabled');
            items.last().find('a.action-down').addClass('disabled');
        }

        // 表示順の更新を行う
        function moveSortNo() {
            updateSortNo();
            redrawDisableAllows();
        }

        \$(function() {

            var \$collectionHolder = \$('#delivery-time-group');
            var index = \$collectionHolder.find('.delivery-time-item').length;

            redrawDisableAllows();

            // お届け時間設定の新規作成ボタンでお届け時間項目を追加する
            \$('#add-delivery-time-button').on('click', function(event) {

                // 追加するお届け時間名を取得
                var deliveryTimeName = \$('#add-delivery-time-value').val();

                if (deliveryTimeName == '') {
                    return;
                }

                var prototype = \$collectionHolder.data('prototype');

                var newForm = prototype.replace(/__name__/g, index);
                var newForm = newForm.replace(/__value__/g, deliveryTimeName);

                // 要素を追加
                var \$lastRow = \$('#delivery-time-group > li:last');
                \$lastRow.after(newForm);

                // お届け時間名を入れる
                var inputId = '#delivery_delivery_times_' + index + '_delivery_time';
                \$(inputId).val(deliveryTimeName);
                \$(inputId).attr('data-origin-value', deliveryTimeName);

                // 入力欄を初期化
                \$('#add-delivery-time-value').val('');

                // 要素数をインクリメント
                index++;

                moveSortNo();
            });

            // 明細行の削除
            \$('#delivery-time-group').on('click', '.remove-delivery-time-item', function(event) {
                event.preventDefault();

                \$(this).tooltip('hide');

                // 自身の行を削除.
                \$(event.target).parents('li').remove();

                moveSortNo();
            });

            // Drag and Drop
            \$('.sortable-container').sortable({
                items: '> .sortable-item',
                cursor: 'move',
                update: function(e, ui) {
                    moveSortNo();
                }
            });
            // Up
            \$('#delivery-time-group').on('click', 'a.action-up', function(e) {
                e.preventDefault();
                var current = \$(this).parents('li');
                if (current.prev().hasClass('sortable-item')) {
                    current.prev().before(current);
                    moveSortNo();
                }
            });
            // Down
            \$('#delivery-time-group').on('click', 'a.action-down', function(e) {
                e.preventDefault();
                var current = \$(this).parents('li');
                if (current.next().hasClass('sortable-item')) {
                    current.next().after(current);
                    moveSortNo();
                }
            });

            // 編集
            \$('#delivery-time-group').on('click', 'a.action-edit', function(e) {
                e.preventDefault();
                var current = \$(this).parents('li');
                current.find('.mode-view').addClass('d-none');
                current.find('.mode-edit').removeClass('d-none');
                current.find('.action-edit-submit').attr('disabled', false);
                current.find('.action-edit-cancel').attr('disabled', false);
            });

            // 編集決定
            \$('#delivery-time-group').on('click', 'button.action-edit-submit', function(e) {
                e.preventDefault();
                var current = \$(this).parents('li');
                var value = current.find('.form-control').val();
                current.find('.display-label').text(value);
                current.find('.mode-view').removeClass('d-none');
                current.find('.mode-edit').addClass('d-none');
                current.find('[data-origin-value]').each(function(e) {
                    \$(this).attr('data-origin-value', value);
                });
            });
            // 編集キャンセル
            \$('#delivery-time-group').on('click', 'button.action-edit-cancel', function(e) {
                e.preventDefault();
                var current = \$(this).parents('li');
                current.find('[data-origin-value]').each(function(e) {
                    \$(this).val(\$(this).attr('data-origin-value'));
                });
                var value = current.find('.form-control').val();
                current.find('.display-label').text(value);
                current.find('.mode-view').removeClass('d-none');
                current.find('.mode-edit').addClass('d-none');
            });
            // 編集時, エラーがあれば入力欄を表示.
            \$('#delivery-time-group').find('.is-invalid').each(function(e) {
                var current = \$(this).parents('li');
                current.find('.mode-view').addClass('d-none');
                current.find('.mode-edit').removeClass('d-none');
            });
            // 表示・非表示の切り替え
            \$('#delivery-time-group').on('click', 'a.action-visible', function(e) {
                e.preventDefault();

                var \$this = \$(this);
                var \$i = \$this.find('i');

                if (\$i.hasClass('fa-toggle-on')) {
                    \$i.addClass('fa-toggle-off');
                    \$i.removeClass('fa-toggle-on');
                    \$this.attr('data-original-title', '";
        // line 202
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.to_show"), "html", null, true);
        echo "');
                    \$this.parents('li').find('.visible').val('0');
                } else {
                    \$i.addClass('fa-toggle-on');
                    \$i.removeClass('fa-toggle-off');
                    \$this.attr('data-original-title', '";
        // line 207
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.to_hide"), "html", null, true);
        echo "');
                    \$this.parents('li').find('.visible').val('1');
                }
                // ツールチップの表示を更新
                \$this.tooltip('show');


            });

            // FIXME 明細行のツールチップが表示されないため, ここでツールチップを有効にしている.
            \$('[data-tooltip=\"true\"]').tooltip();
        });
    </script>
";
    }

    // line 222
    public function block_main($context, array $blocks = [])
    {
        // line 223
        echo "    <form method=\"post\" action=\"";
        echo twig_escape_filter($this->env, ((($context["delivery_id"] ?? null)) ? ($this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_setting_shop_delivery_edit", ["id" => ($context["delivery_id"] ?? null)])) : ($this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_setting_shop_delivery_new"))), "html", null, true);
        echo "\">
        ";
        // line 224
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", []), 'widget');
        echo "
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\"><span>";
        // line 229
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.delivery.base_info"), "html", null, true);
        echo "</span></div>
                        <div id=\"ex-delivery-basic\" class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\"><span>";
        // line 232
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.delivery.delivery_name"), "html", null, true);
        echo "</span></div>
                                <div class=\"col mb-2\">
                                    ";
        // line 234
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", []), 'widget');
        echo "
                                    ";
        // line 235
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", []), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\"><span>";
        // line 239
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.delivery.delivery_sevice_name"), "html", null, true);
        echo "</span></div>
                                <div class=\"col mb-2\">
                                    ";
        // line 241
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "service_name", []), 'widget');
        echo "
                                    ";
        // line 242
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "service_name", []), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                                         title=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.shop.delivery.tracking_number_url"), "html", null, true);
        echo "\">
                                        <span>";
        // line 249
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.delivery.tracking_number_url"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                    </div>
                                </div>
                                <div class=\"col mb-2\">
                                    ";
        // line 253
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "confirm_url", []), 'widget');
        echo "
                                    ";
        // line 254
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "confirm_url", []), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                                         title=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.shop.delivery.sale_type"), "html", null, true);
        echo "\">
                                        <span>";
        // line 261
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.delivery.sale_type"), "html", null, true);
        echo "</span>
                                        <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                    </div>
                                </div>
                                <div class=\"col mb-2\">
                                    ";
        // line 266
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "sale_type", []), 'widget');
        echo "
                                    ";
        // line 267
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "sale_type", []), 'errors');
        echo "
                                </div>
                            </div>
                            ";
        // line 271
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", []), "eccube_form_options", []), "auto_render", [])) {
                // line 272
                echo "                                ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", []), "eccube_form_options", []), "form_theme", [])) {
                    // line 273
                    echo "                                    ";
                    $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($context["f"], [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", []), "eccube_form_options", []), "form_theme", [])], true);
                    // line 274
                    echo "                                    ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'row');
                    echo "
                                ";
                } else {
                    // line 276
                    echo "                                    <div class=\"row\">
                                        <div class=\"col-3\"><span>";
                    // line 277
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", []), "label", [])), "html", null, true);
                    echo "</span></div>
                                        <div class=\"col mb-2\">
                                            ";
                    // line 279
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'widget');
                    echo "
                                            ";
                    // line 280
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'errors');
                    echo "
                                        </div>
                                    </div>
                                ";
                }
                // line 284
                echo "                            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 285
        echo "                        </div>
                    </div>
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\"><span>";
        // line 288
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.delivery.payment_method"), "html", null, true);
        echo "</span></div>
                        <div id=\"ex-delivery-payment\" class=\"card-body\">
                            <div>
                                ";
        // line 291
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "payments", []), 'widget', ["label_attr" => ["class" => "checkbox-inline"]]);
        echo "
                                ";
        // line 292
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "payments", []), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"card rounded border-0 mb-2\">
                        <div class=\"card-header\"><span>";
        // line 297
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.delivery.delivery_time_setting"), "html", null, true);
        echo "</span></div>
                        <div id=\"ex-delivery-time\" class=\"card-body p-0\">
                            <div class=\"card rounded border-0 mb-2\">
                                <ul id=\"delivery-time-group\" class=\"list-group list-group-flush sortable-container\"
                                    data-prototype=\"";
        // line 301
        echo twig_escape_filter($this->env,         $this->renderBlock("__internal_5be2f44d9311c7c50483e78a1ddef9759739e3286f04e52b0a11541baf2f242d", $context, $blocks));
        echo "\">
                                    <li class=\"list-group-item\">
                                        <div class=\"form-row\">
                                            <div class=\"col-auto d-flex align-items-center\">
                                                <input id=\"add-delivery-time-value\" class=\"form-control\" type=\"text\">
                                            </div>
                                            <div class=\"col-auto d-flex align-items-center\">
                                                <button id=\"add-delivery-time-button\" class=\"btn btn-ec-regular\" type=\"button\">";
        // line 308
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.create__new"), "html", null, true);
        echo "</button>
                                            </div>
                                        </div>
                                    </li>
                                    ";
        // line 312
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delivery_times", []));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 313
            echo "                                        ";
            echo twig_include($this->env, $context, "@admin/Setting/Shop/delivery_time_prototype.twig", ["form" => $context["child"]]);
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 315
        echo "                                </ul>
                            </div>
                        </div>
                    </div>
                    <p class=\"mb-4\">";
        // line 319
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.drag_and_drop_description"), "html", null, true);
        echo "</p>
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\"><span>";
        // line 321
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.delivery.delivery_fee_by_pref"), "html", null, true);
        echo "</span></div>
                        <div id=\"ex-delivery-fee\" class=\"card-body p-0\">
                            <ul class=\"list-group list-group-flush\">
                                <li class=\"list-group-item\">
                                    <div class=\"row justify-content-start\">
                                        <div class=\"col-2\">
                                            <div class=\"d-inline-block align-middle\" data-tooltip=\"true\"
                                                 data-placement=\"top\" title=\"";
        // line 328
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.shop.delivery.apply_to_pref"), "html", null, true);
        echo "\"><span
                                                        class=\"card-title\">";
        // line 329
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.delivery.apply_to_pref__title"), "html", null, true);
        echo "</span><i
                                                        class=\"fa fa-question-circle fa-lg ml-1\"></i></div>
                                        </div>
                                        <div class=\"col-3\">
                                            ";
        // line 333
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "free_all", []), 'widget');
        echo "
                                            ";
        // line 334
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "free_all", []), 'errors');
        echo "
                                        </div>
                                        <div class=\"col-auto\">
                                            <button id=\"set_fee_all\" class=\"btn btn-ec-regular\" type=\"button\">";
        // line 337
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.delivery.apply_to_pref__button"), "html", null, true);
        echo "</button>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"list-group-item\">
                                    ";
        // line 342
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delivery_fees", []));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 343
            echo "                                        ";
            if (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", []) % 2) != 0)) {
                echo "<div class=\"row mb-2\">";
            }
            // line 344
            echo "                                        <div class=\"col";
            echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [])) ? ("-6") : (""));
            echo "\">
                                            <div class=\"row\">
                                                <div class=\"col-4\">
                                                    <label>";
            // line 347
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", []), "data", []), "pref", []), "html", null, true);
            echo "</label>
                                                </div>
                                                <div class=\"col pl-0\">
                                                    ";
            // line 350
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["child"], "fee", []), 'widget');
            echo "
                                                    ";
            // line 351
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["child"], "fee", []), 'errors');
            echo "
                                                </div>
                                            </div>
                                        </div>
                                        ";
            // line 355
            if ((((twig_get_attribute($this->env, $this->source, $context["loop"], "index", []) % 2) == 0) || twig_get_attribute($this->env, $this->source, $context["loop"], "last", []))) {
                echo "</div>";
            }
            // line 356
            echo "                                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 357
        echo "                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"card rounded border-0 mb-4\">
                        <div id=\"ex-delivery-shop\" class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                                         title=\"";
        // line 366
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.shop.delivery.shop_memo"), "html", null, true);
        echo "\">
                                    <span class=\"card-title\">";
        // line 367
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.shop_memo"), "html", null, true);
        echo "<i
                                                class=\"fa fa-question-circle fa-lg ml-1\"></i></span></div>
                                </div>
                                <div class=\"col-4 text-right\"><a data-toggle=\"collapse\" href=\"#freeArea\"
                                                                 aria-expanded=\"false\" aria-controls=\"freeArea\"><i
                                                class=\"fa fa-angle-up fa-lg\"></i></a></div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"freeArea\">
                            <div class=\"card-body\">
                                <div>
                                    ";
        // line 378
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "description", []), 'widget', ["attr" => ["rows" => 8]]);
        echo "
                                    ";
        // line 379
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "description", []), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"c-conversionArea\">
            <div class=\"c-conversionArea__container\">
                <div class=\"row justify-content-between align-items-center\">
                    <div class=\"col-6\">
                        <div class=\"c-conversionArea__leftBlockItem\">
                            <a class=\"c-baseLink\" href=\"";
        // line 392
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_setting_shop_delivery");
        echo "\">
                                <i class=\"fa fa-backward\" aria-hidden=\"true\"></i><span>";
        // line 393
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.delivery_list"), "html", null, true);
        echo "</span>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div id=\"ex-conversion-action\" class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                ";
        // line 400
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "visible", []), 'widget');
        echo "
                                ";
        // line 401
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "visible", []), 'errors');
        echo "
                            </div>
                            <div class=\"col-auto\">
                                <button class=\"btn btn-ec-conversion px-5\" type=\"submit\">";
        // line 404
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.registration"), "html", null, true);
        echo "</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
";
    }

    // line 301
    public function block___internal_5be2f44d9311c7c50483e78a1ddef9759739e3286f04e52b0a11541baf2f242d($context, array $blocks = [])
    {
        echo twig_include($this->env, $context, "@admin/Setting/Shop/delivery_time_prototype.twig", ["form" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delivery_times", []), "vars", []), "prototype", [])]);
    }

    public function getTemplateName()
    {
        return "__string_template__14d2fb5725ceae02f9ac340380a582c0afe6ec9017f4871d32d0911cb8c2ba15";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  708 => 301,  695 => 404,  689 => 401,  685 => 400,  675 => 393,  671 => 392,  655 => 379,  651 => 378,  637 => 367,  633 => 366,  622 => 357,  608 => 356,  604 => 355,  597 => 351,  593 => 350,  587 => 347,  580 => 344,  575 => 343,  558 => 342,  550 => 337,  544 => 334,  540 => 333,  533 => 329,  529 => 328,  519 => 321,  514 => 319,  508 => 315,  491 => 313,  474 => 312,  467 => 308,  457 => 301,  450 => 297,  442 => 292,  438 => 291,  432 => 288,  427 => 285,  420 => 284,  413 => 280,  409 => 279,  404 => 277,  401 => 276,  395 => 274,  392 => 273,  389 => 272,  383 => 271,  377 => 267,  373 => 266,  365 => 261,  361 => 260,  352 => 254,  348 => 253,  341 => 249,  337 => 248,  328 => 242,  324 => 241,  319 => 239,  312 => 235,  308 => 234,  303 => 232,  297 => 229,  289 => 224,  284 => 223,  281 => 222,  263 => 207,  255 => 202,  84 => 34,  76 => 29,  69 => 25,  65 => 24,  61 => 23,  56 => 22,  53 => 21,  47 => 16,  41 => 15,  37 => 11,  35 => 18,  33 => 13,  15 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__14d2fb5725ceae02f9ac340380a582c0afe6ec9017f4871d32d0911cb8c2ba15", "");
    }
}
