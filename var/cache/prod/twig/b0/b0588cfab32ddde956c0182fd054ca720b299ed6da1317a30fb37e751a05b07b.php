<?php

/* __string_template__f3307d177468b00d59b490e147f9fbf1318da824e6799715e86f6d6493638f84 */
class __TwigTemplate_3b6bfce620a4fe24468ec4854be4f6f369023f908256330ebcbeaadd8975f194 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "__string_template__f3307d177468b00d59b490e147f9fbf1318da824e6799715e86f6d6493638f84", 11);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'sub_title' => [$this, 'block_sub_title'],
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
        $context["menus"] = [0 => "content", 1 => "layout"];
        // line 18
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_management"), "html", null, true);
    }

    // line 16
    public function block_sub_title($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.contents_management"), "html", null, true);
    }

    // line 20
    public function block_javascript($context, array $blocks = [])
    {
        // line 21
        echo "    <script>
        var sections = {
            ";
        // line 23
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Entity\\Layout::TARGET_ID_UNUSED"), "html", null, true);
        echo " : '";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_section__unused"), "html", null, true);
        echo "',
            ";
        // line 24
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Entity\\Layout::TARGET_ID_HEAD"), "html", null, true);
        echo " : '";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_section__head"), "html", null, true);
        echo "',
            ";
        // line 25
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Entity\\Layout::TARGET_ID_BODY_AFTER"), "html", null, true);
        echo " : '";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_section__body_after"), "html", null, true);
        echo "',
            ";
        // line 26
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Entity\\Layout::TARGET_ID_HEADER"), "html", null, true);
        echo " : '";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_section__header"), "html", null, true);
        echo "',
            ";
        // line 27
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Entity\\Layout::TARGET_ID_CONTENTS_TOP"), "html", null, true);
        echo " : '";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_section__contents_top"), "html", null, true);
        echo "',
            ";
        // line 28
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Entity\\Layout::TARGET_ID_SIDE_LEFT"), "html", null, true);
        echo " : '";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_section__side_left"), "html", null, true);
        echo "',
            ";
        // line 29
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Entity\\Layout::TARGET_ID_MAIN_TOP"), "html", null, true);
        echo " : '";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_section__main_top"), "html", null, true);
        echo "',
            ";
        // line 30
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Entity\\Layout::TARGET_ID_MAIN_BOTTOM"), "html", null, true);
        echo " : '";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_section__main_bottom"), "html", null, true);
        echo "',
            ";
        // line 31
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Entity\\Layout::TARGET_ID_SIDE_RIGHT"), "html", null, true);
        echo " : '";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_section__side_right"), "html", null, true);
        echo "',
            ";
        // line 32
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Entity\\Layout::TARGET_ID_CONTENTS_BOTTOM"), "html", null, true);
        echo " : '";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_section__contents_bottom"), "html", null, true);
        echo "',
            ";
        // line 33
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Entity\\Layout::TARGET_ID_FOOTER"), "html", null, true);
        echo " : '";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_section__footer"), "html", null, true);
        echo "',
            ";
        // line 34
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Entity\\Layout::TARGET_ID_DRAWER"), "html", null, true);
        echo " : '";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_section__drawer"), "html", null, true);
        echo "',
            ";
        // line 35
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Entity\\Layout::TARGET_ID_CLOSE_BODY_BEFORE"), "html", null, true);
        echo " : '";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_section__close_body_before"), "html", null, true);
        echo "'
        };

        // use for layout_design.js
        var els = Object.keys(sections).map(function(id) {
            return '#position_' + id;
        });
    </script>
    <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery.ui/jquery.ui.core.min.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery.ui/jquery.ui.widget.min.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery.ui/jquery.ui.mouse.min.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery.ui/jquery.ui.sortable.min.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/layout_design.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/ace/1.2.8/ace.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/ace/1.2.8/ext-language_tools.js\"></script>

    <script>
        \$(function(){
            \$('.block-context-menu').popover({
                placement: 'bottom',
                html: true,
                container: 'body',
                content: function () {
                    return \$('#context-menu').html();
                }
            }).on('shown.bs.popover', function () {
                \$('.block-context-menu').not(this).popover('hide');
                var \$menu = \$(this);
                var \$block = \$menu.closest('[id^=\"detail_box__layout_item\"]');
                var block = {
                    'menu': \$menu,
                    'current': \$block,
                    'prev': \$block.prev('[id^=\"detail_box__layout_item\"]'),
                    'next': \$block.next('[id^=\"detail_box__layout_item\"]')
                };
                \$('.context-moveup').on('click', block, function() {
                    if (block.prev.length) {
                        block.current.insertBefore(block.prev);
                        block.menu.popover('hide');
                        window.updateUpDown(\$block.parent('.ui-sortable').first());
                    }
                });
                \$('.context-movedown').on('click', block, function() {
                    if (block.next.length) {
                        block.current.insertAfter(block.next);
                        block.menu.popover('hide');
                        window.updateUpDown(\$block.parent('.ui-sortable').first());
                    }
                });
                \$('.context-movesection').on('click', block, function() {
                    \$('#clickStreamConfirm').modal();
                    \$('#target-block').val(\$(block.current).attr('id'));
                    block.menu.popover('hide');
                });
                \$('#clickStreamConfirm').on('show.bs.modal', function(event) {
                    \$('#move-section').children('option').remove();
                    for (var target_id in sections) {
                        \$('#move-section').append('<option value=\"' + target_id + '\">' + sections[target_id] + '</option>');
                    }
                });
                \$('#move-to-section').on('click', function() {
                    var \$position = \$('#position_' + \$('#move-section').val());
                    var \$target = \$('#' + \$('#target-block').val());
                    var \$parent = \$target.parent();

                    \$position.append(\$target);
                    window.updateUpDown(\$position);
                    window.updateUpDown(\$parent);

                    if (\$position.children('.block').length > 0) {
                        // hide placeholder
                        \$position.children('.target-placeholder').remove();
                    }
                    if (\$parent.children('.block').length <= 0) {
                        // show placeholder
                        \$parent.append(\$('#target-placeholder').html());
                    }
                });

                \$('.context-preview').on('click', block, function() {
                    \$('#codePreview').modal();
                    block.menu.popover('hide');
                });

                \$('#codePreview').on('show.bs.modal', block, function(event) {
                    var attr_id = block.current.attr('id').match(/^detail_box__layout_item--([0-9]+)/);
                    var block_id = attr_id[1];
                    var \$modal = \$(this);
                    var \$block_edit = \$modal.find('#block-edit');
                    var onclick = \$block_edit.attr('onclick').replace(/";
        // line 124
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Controller\\Admin\\Content\\LayoutController::DUMMY_BLOCK_ID"), "html", null, true);
        echo "/, block_id);
                    \$block_edit.attr('onclick', onclick);

                    ace.require(\"ace/ext/language_tools\");
                    var editor = ace.edit(\"block-source-code\");
                    editor.session.setMode(\"ace/mode/twig\");
                    editor.setTheme(\"ace/theme/tomorrow\");
                    editor.setOptions({
                        readOnly: true,
                        autoScrollEditorIntoView: true,
                        minLines: 20,
                        maxLines: 20
                    });

                    \$.ajax({
                        url: '";
        // line 139
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_content_layout_view_block");
        echo "',
                        type: 'GET',
                        data: {
                            id: block_id
                        }
                    }).done(function(json, statusText, jqXHR) {
                        editor.setValue(json.source);
                        editor.gotoLine(1);
                        editor.scrollToLine(1);
                    }).fail(function(jqXHR, statusText, errorThrown) {
                        editor.setValue(statusText + ' ' + errorThrown);
                    });
                });
            });
        });
    </script>
    <script>
        // プレビューボタンクリック時
        ";
        // line 157
        if (twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "id", [])) {
            // line 158
            echo "\$('#preview-button').on('click', function(){
            var page_id = \$('#";
            // line 159
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Page", []), "vars", []), "id", []), "html", null, true);
            echo "').val();
            if (!page_id) {
                alert(\"";
            // line 161
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_preview_select_page"), "html", null, true);
            echo "\");
                return false;
            }

            \$('#form1').attr('action', \"";
            // line 165
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_content_layout_preview", ["id" => twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "id", [])]), "html", null, true);
            echo "\");
            \$('#form1').attr('target', '_blank');
            \$('#form1').submit();

            // submit後に元に戻す
            \$('#form1').attr('action', \"";
            // line 170
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_content_layout_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "id", [])]), "html", null, true);
            echo "\");
            \$('#form1').attr('target', '_self');

            return false;
        });
        ";
        }
        // line 176
        echo "
        // searchWordの実行
        \$('#search-block').on('input', function () {
            searchWord(\$(this).val(), \$('#unused-block .sort'));
        });
    </script>
";
    }

    // line 184
    public function block_main($context, array $blocks = [])
    {
        // line 185
        echo "    ";
        $context["loop_index"] = 0;
        // line 186
        echo "    <form name=\"form1\" id=\"form1\" method=\"post\" action=\"";
        if (twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "id", [])) {
            // line 187
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_content_layout_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "id", [])]), "html", null, true);
        } else {
            // line 189
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_content_layout_new");
        }
        // line 190
        echo "\">
        ";
        // line 191
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", []), 'widget');
        echo "
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\"><span class=\"card-title\">";
        // line 198
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout__card_title"), "html", null, true);
        echo "</span></div>
                                <div class=\"col-4 text-right\"><a data-toggle=\"collapse\" href=\"#layoutOverview\" aria-expanded=\"false\" aria-controls=\"layoutOverview\"><i class=\"fa fa-angle-up fa-lg\"></i></a></div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"layoutOverview\">
                            <div class=\"card-body\">
                                <div class=\"row mb-2\">
                                    <div class=\"col-3 pr-0\"><span>";
        // line 205
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_name"), "html", null, true);
        echo "</span><span class=\"badge badge-primary ml-1\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span></div>
                                    <div class=\"col\">
                                        ";
        // line 207
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", []), 'widget');
        echo "
                                        ";
        // line 208
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", []), 'errors');
        echo "
                                    </div>
                                </div>
                                <div class=\"row mb-2\">
                                    <div class=\"col-3 pr-0\"><span>";
        // line 212
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.device_type"), "html", null, true);
        echo "</span></div>
                                    <div class=\"col\">
                                        <span>
                                            ";
        // line 215
        if (twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "id", [])) {
            // line 216
            echo "                                                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "DeviceType", []), "vars", []), "data", []), "name", []), "html", null, true);
            echo "
                                                <input type=\"hidden\" name=\"";
            // line 217
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "DeviceType", []), "vars", []), "full_name", []), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "DeviceType", []), "vars", []), "value", []), "html", null, true);
            echo "\" />
                                            ";
        } else {
            // line 219
            echo "                                                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "DeviceType", []), 'widget');
            echo "
                                            ";
        }
        // line 221
        echo "                                            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "DeviceType", []), 'errors');
        echo "
                                        </span>
                                    </div>
                                </div>
                                ";
        // line 226
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", []), "eccube_form_options", []), "auto_render", [])) {
                // line 227
                echo "                                    ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", []), "eccube_form_options", []), "form_theme", [])) {
                    // line 228
                    echo "                                        ";
                    $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($context["f"], [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", []), "eccube_form_options", []), "form_theme", [])], true);
                    // line 229
                    echo "                                        ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'row');
                    echo "
                                    ";
                } else {
                    // line 231
                    echo "                                        <div class=\"row mb-2\">
                                            <div class=\"col-3 pr-0\"><span>";
                    // line 232
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", []), "label", [])), "html", null, true);
                    echo "</span></div>
                                            <div class=\"col\">
                                                ";
                    // line 234
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'widget');
                    echo "
                                                ";
                    // line 235
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'errors');
                    echo "
                                            </div>
                                        </div>
                                    ";
                }
                // line 239
                echo "                                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 240
        echo "                            </div>
                        </div>
                    </div>
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.content.layout_edit"), "html", null, true);
        echo "\"><span class=\"card-title\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_edit__card_title"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ml-1\"></i></div>
                                </div>
                                <div class=\"col-4 text-right\"><a data-toggle=\"collapse\" href=\"#layoutBlockEdit\" aria-expanded=\"false\" aria-controls=\"layoutBlockEdit\"><i class=\"fa fa-angle-up fa-lg\"></i></a></div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"layoutBlockEdit\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col p-2\">
                                        <div class=\"d-block border border-ec-gray\">
                                            ";
        // line 257
        $context["target_id"] = twig_constant("Eccube\\Entity\\Layout::TARGET_ID_HEAD");
        // line 258
        echo "                                            <div id=\"position_";
        echo twig_escape_filter($this->env, ($context["target_id"] ?? null), "html", null, true);
        echo "\"
                                                 class=\"d-block p-3 border border-ec-gray border-top-0 border-right-0 border-left-0 ui-sortable\">
                                                <p class=\"font-weight-bold mb-2\">";
        // line 260
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_section__head"), "html", null, true);
        echo "</p>
                                                ";
        // line 261
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "getBlockPositionsByTargetId", [0 => ($context["target_id"] ?? null)], "method"));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["BlockPosition"]) {
            // line 262
            echo "                                                    ";
            echo twig_include($this->env, $context, "@admin/Content/layout_block.twig");
            echo "
                                                    ";
            // line 263
            $context["loop_index"] = (($context["loop_index"] ?? null) + 1);
            // line 264
            echo "                                                ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 265
            echo "                                                    <div class=\"target-placeholder d-block text-center border-ec-dashed p-3\"><span class=\"text-ec-gray\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_drag_and_drop_message"), "html", null, true);
            echo "</span></div>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['BlockPosition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 267
        echo "                                            </div>
                                            ";
        // line 268
        $context["target_id"] = twig_constant("Eccube\\Entity\\Layout::TARGET_ID_BODY_AFTER");
        // line 269
        echo "                                            <div id=\"position_";
        echo twig_escape_filter($this->env, ($context["target_id"] ?? null), "html", null, true);
        echo "\"
                                                 class=\"d-block p-3 border border-ec-gray border-top-0 border-right-0 border-left-0 ui-sortable\">
                                                <p class=\"font-weight-bold mb-2\">";
        // line 271
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_section__body_after"), "html", null, true);
        echo "</p>
                                                ";
        // line 272
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "getBlockPositionsByTargetId", [0 => ($context["target_id"] ?? null)], "method"));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["BlockPosition"]) {
            // line 273
            echo "                                                    ";
            echo twig_include($this->env, $context, "@admin/Content/layout_block.twig");
            echo "
                                                    ";
            // line 274
            $context["loop_index"] = (($context["loop_index"] ?? null) + 1);
            // line 275
            echo "                                                ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 276
            echo "                                                    <div class=\"target-placeholder d-block text-center border-ec-dashed p-3\"><span class=\"text-ec-gray\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_drag_and_drop_message"), "html", null, true);
            echo "</span></div>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['BlockPosition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 278
        echo "                                            </div>
                                            ";
        // line 279
        $context["target_id"] = twig_constant("Eccube\\Entity\\Layout::TARGET_ID_HEADER");
        // line 280
        echo "                                            <div id=\"position_";
        echo twig_escape_filter($this->env, ($context["target_id"] ?? null), "html", null, true);
        echo "\"
                                                 class=\"d-block p-3 border border-ec-gray border-top-0 border-right-0 border-left-0 ui-sortable\">
                                                <p class=\"font-weight-bold mb-2\">";
        // line 282
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_section__header"), "html", null, true);
        echo "</p>
                                                ";
        // line 283
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "getBlockPositionsByTargetId", [0 => ($context["target_id"] ?? null)], "method"));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["BlockPosition"]) {
            // line 284
            echo "                                                    ";
            echo twig_include($this->env, $context, "@admin/Content/layout_block.twig");
            echo "
                                                    ";
            // line 285
            $context["loop_index"] = (($context["loop_index"] ?? null) + 1);
            // line 286
            echo "                                                ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 287
            echo "                                                    <div class=\"target-placeholder d-block text-center border-ec-dashed p-3\"><span class=\"text-ec-gray\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_drag_and_drop_message"), "html", null, true);
            echo "</span></div>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['BlockPosition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 289
        echo "                                            </div>
                                            ";
        // line 290
        $context["target_id"] = twig_constant("Eccube\\Entity\\Layout::TARGET_ID_CONTENTS_TOP");
        // line 291
        echo "                                            <div id=\"position_";
        echo twig_escape_filter($this->env, ($context["target_id"] ?? null), "html", null, true);
        echo "\"
                                                 class=\"d-block p-3 border border-ec-gray border-top-0 border-right-0 border-left-0 ui-sortable\">
                                                <p class=\"font-weight-bold mb-2\">";
        // line 293
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_section__contents_top"), "html", null, true);
        echo "</p>
                                                ";
        // line 294
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "getBlockPositionsByTargetId", [0 => ($context["target_id"] ?? null)], "method"));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["BlockPosition"]) {
            // line 295
            echo "                                                    ";
            echo twig_include($this->env, $context, "@admin/Content/layout_block.twig");
            echo "
                                                    ";
            // line 296
            $context["loop_index"] = (($context["loop_index"] ?? null) + 1);
            // line 297
            echo "                                                ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 298
            echo "                                                    <div class=\"target-placeholder d-block text-center border-ec-dashed p-3\"><span class=\"text-ec-gray\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_drag_and_drop_message"), "html", null, true);
            echo "</span></div>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['BlockPosition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 300
        echo "                                            </div>
                                            <div class=\"d-block pl-3 pr-3\">
                                                <div class=\"row\">
                                                    <div class=\"col align-items-start pr-0 p-3 border border-ec-gray border-top-0\">
                                                        ";
        // line 304
        $context["target_id"] = twig_constant("Eccube\\Entity\\Layout::TARGET_ID_SIDE_LEFT");
        // line 305
        echo "                                                        <div id=\"position_";
        echo twig_escape_filter($this->env, ($context["target_id"] ?? null), "html", null, true);
        echo "\"
                                                             class=\"d-block ui-sortable\">
                                                            <p class=\"font-weight-bold mb-2\">";
        // line 307
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_section__side_left"), "html", null, true);
        echo "</p>
                                                            ";
        // line 308
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "getBlockPositionsByTargetId", [0 => ($context["target_id"] ?? null)], "method"));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["BlockPosition"]) {
            // line 309
            echo "                                                                ";
            echo twig_include($this->env, $context, "@admin/Content/layout_block.twig");
            echo "
                                                                ";
            // line 310
            $context["loop_index"] = (($context["loop_index"] ?? null) + 1);
            // line 311
            echo "                                                            ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 312
            echo "                                                                <div class=\"target-placeholder d-block text-center border-ec-dashed p-3\"><span class=\"text-ec-gray\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_drag_and_drop_message"), "html", null, true);
            echo "</span></div>
                                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['BlockPosition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 314
        echo "                                                        </div>
                                                    </div>
                                                    <div class=\"col align-items-start pl-0 pr-0 border border-ec-gray border-top-0 border-left-0 border-bottom-0\">
                                                        <div class=\"d-block h-100\">
                                                            ";
        // line 318
        $context["target_id"] = twig_constant("Eccube\\Entity\\Layout::TARGET_ID_MAIN_TOP");
        // line 319
        echo "                                                            <div id=\"position_";
        echo twig_escape_filter($this->env, ($context["target_id"] ?? null), "html", null, true);
        echo "\"
                                                                 class=\"d-block p-3 border border-ec-gray border-top-0 border-left-0 border-right-0 ui-sortable\">
                                                                <p class=\"font-weight-bold mb-2\">";
        // line 321
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_section__main_top"), "html", null, true);
        echo "</p>
                                                                ";
        // line 322
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "getBlockPositionsByTargetId", [0 => ($context["target_id"] ?? null)], "method"));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["BlockPosition"]) {
            // line 323
            echo "                                                                    ";
            echo twig_include($this->env, $context, "@admin/Content/layout_block.twig");
            echo "
                                                                    ";
            // line 324
            $context["loop_index"] = (($context["loop_index"] ?? null) + 1);
            // line 325
            echo "                                                                ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 326
            echo "                                                                    <div class=\"target-placeholder d-block text-center border-ec-dashed p-3\"><span class=\"text-ec-gray\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_drag_and_drop_message"), "html", null, true);
            echo "</span></div>
                                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['BlockPosition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 328
        echo "                                                            </div>
                                                            <div class=\"d-block p-3 border border-ec-gray border-top-0 border-left-0 border-right-0 bg-ec-lightGray\">
                                                                <div class=\"d-block text-center p-3\">
                                                                    <p class=\"font-weight-bold mb-2\">";
        // line 331
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_section__main"), "html", null, true);
        echo "</p>
                                                                </div>
                                                            </div>
                                                            ";
        // line 334
        $context["target_id"] = twig_constant("Eccube\\Entity\\Layout::TARGET_ID_MAIN_BOTTOM");
        // line 335
        echo "                                                            <div id=\"position_";
        echo twig_escape_filter($this->env, ($context["target_id"] ?? null), "html", null, true);
        echo "\"
                                                                 class=\"d-block p-3 border border-ec-gray border-top-0 border-left-0 border-right-0 ui-sortable\">
                                                                <p class=\"font-weight-bold mb-2\">";
        // line 337
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_section__main_bottom"), "html", null, true);
        echo "</p>
                                                                ";
        // line 338
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "getBlockPositionsByTargetId", [0 => ($context["target_id"] ?? null)], "method"));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["BlockPosition"]) {
            // line 339
            echo "                                                                    ";
            echo twig_include($this->env, $context, "@admin/Content/layout_block.twig");
            echo "
                                                                    ";
            // line 340
            $context["loop_index"] = (($context["loop_index"] ?? null) + 1);
            // line 341
            echo "                                                                ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 342
            echo "                                                                    <div class=\"target-placeholder d-block text-center border-ec-dashed p-3\"><span class=\"text-ec-gray\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_drag_and_drop_message"), "html", null, true);
            echo "</span></div>
                                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['BlockPosition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 344
        echo "                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"col align-items-start pl-0 border border-ec-gray border-top-0 border-left-0\">
                                                        ";
        // line 348
        $context["target_id"] = twig_constant("Eccube\\Entity\\Layout::TARGET_ID_SIDE_RIGHT");
        // line 349
        echo "                                                        <div id=\"position_";
        echo twig_escape_filter($this->env, ($context["target_id"] ?? null), "html", null, true);
        echo "\"
                                                             class=\"d-block p-3 h-100 ui-sortable\">
                                                            <p class=\"font-weight-bold mb-2\">";
        // line 351
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_section__side_right"), "html", null, true);
        echo "</p>
                                                            ";
        // line 352
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "getBlockPositionsByTargetId", [0 => ($context["target_id"] ?? null)], "method"));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["BlockPosition"]) {
            // line 353
            echo "                                                                ";
            echo twig_include($this->env, $context, "@admin/Content/layout_block.twig");
            echo "
                                                                ";
            // line 354
            $context["loop_index"] = (($context["loop_index"] ?? null) + 1);
            // line 355
            echo "                                                            ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 356
            echo "                                                                <div class=\"target-placeholder d-block text-center border-ec-dashed p-3\"><span class=\"text-ec-gray\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_drag_and_drop_message"), "html", null, true);
            echo "</span></div>
                                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['BlockPosition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 358
        echo "                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"d-block border border-ec-gray border-top-0 border-right-0 border-left-0\">
                                                ";
        // line 363
        $context["target_id"] = twig_constant("Eccube\\Entity\\Layout::TARGET_ID_CONTENTS_BOTTOM");
        // line 364
        echo "                                                <div id=\"position_";
        echo twig_escape_filter($this->env, ($context["target_id"] ?? null), "html", null, true);
        echo "\"
                                                     class=\"d-block p-3 ui-sortable\">
                                                    <p class=\"font-weight-bold mb-2\">";
        // line 366
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_section__contents_bottom"), "html", null, true);
        echo "</p>
                                                    ";
        // line 367
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "getBlockPositionsByTargetId", [0 => ($context["target_id"] ?? null)], "method"));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["BlockPosition"]) {
            // line 368
            echo "                                                        ";
            echo twig_include($this->env, $context, "@admin/Content/layout_block.twig");
            echo "
                                                        ";
            // line 369
            $context["loop_index"] = (($context["loop_index"] ?? null) + 1);
            // line 370
            echo "                                                    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 371
            echo "                                                        <div class=\"target-placeholder d-block text-center border-ec-dashed p-3\"><span class=\"text-ec-gray\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_drag_and_drop_message"), "html", null, true);
            echo "</span></div>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['BlockPosition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 373
        echo "                                                </div>
                                            </div>
                                            <div class=\"d-block border border-ec-gray border-top-0 border-right-0 border-left-0\">
                                                ";
        // line 376
        $context["target_id"] = twig_constant("Eccube\\Entity\\Layout::TARGET_ID_FOOTER");
        // line 377
        echo "                                                <div id=\"position_";
        echo twig_escape_filter($this->env, ($context["target_id"] ?? null), "html", null, true);
        echo "\"
                                                     class=\"d-block p-3 ui-sortable\">
                                                    <p class=\"font-weight-bold mb-2\">";
        // line 379
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_section__footer"), "html", null, true);
        echo "</p>
                                                    ";
        // line 380
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "getBlockPositionsByTargetId", [0 => ($context["target_id"] ?? null)], "method"));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["BlockPosition"]) {
            // line 381
            echo "                                                        ";
            echo twig_include($this->env, $context, "@admin/Content/layout_block.twig");
            echo "
                                                        ";
            // line 382
            $context["loop_index"] = (($context["loop_index"] ?? null) + 1);
            // line 383
            echo "                                                    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 384
            echo "                                                        <div class=\"target-placeholder d-block text-center border-ec-dashed p-3\"><span class=\"text-ec-gray\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_drag_and_drop_message"), "html", null, true);
            echo "</span></div>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['BlockPosition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 386
        echo "                                                </div>
                                            </div>
                                            <div class=\"d-block border border-ec-gray border-top-0 border-right-0 border-left-0\">
                                                ";
        // line 389
        $context["target_id"] = twig_constant("Eccube\\Entity\\Layout::TARGET_ID_DRAWER");
        // line 390
        echo "                                                <div id=\"position_";
        echo twig_escape_filter($this->env, ($context["target_id"] ?? null), "html", null, true);
        echo "\"
                                                     class=\"d-block p-3 ui-sortable\">
                                                    <p class=\"font-weight-bold mb-2\">";
        // line 392
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_section__drawer"), "html", null, true);
        echo "</p>
                                                    ";
        // line 393
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "getBlockPositionsByTargetId", [0 => ($context["target_id"] ?? null)], "method"));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["BlockPosition"]) {
            // line 394
            echo "                                                        ";
            echo twig_include($this->env, $context, "@admin/Content/layout_block.twig");
            echo "
                                                        ";
            // line 395
            $context["loop_index"] = (($context["loop_index"] ?? null) + 1);
            // line 396
            echo "                                                    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 397
            echo "                                                        <div class=\"target-placeholder d-block text-center border-ec-dashed p-3\"><span class=\"text-ec-gray\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_drag_and_drop_message"), "html", null, true);
            echo "</span></div>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['BlockPosition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 399
        echo "                                                </div>
                                            </div>
                                            <div class=\"d-block\">
                                                ";
        // line 402
        $context["target_id"] = twig_constant("Eccube\\Entity\\Layout::TARGET_ID_CLOSE_BODY_BEFORE");
        // line 403
        echo "                                                <div id=\"position_";
        echo twig_escape_filter($this->env, ($context["target_id"] ?? null), "html", null, true);
        echo "\"
                                                     class=\"d-block p-3 border-top-0 border-right-0 border-left-0 ui-sortable\">
                                                    <p class=\"font-weight-bold mb-2\">";
        // line 405
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_section__close_body_before"), "html", null, true);
        echo "</p>
                                                    ";
        // line 406
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "getBlockPositionsByTargetId", [0 => ($context["target_id"] ?? null)], "method"));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["BlockPosition"]) {
            // line 407
            echo "                                                        ";
            echo twig_include($this->env, $context, "@admin/Content/layout_block.twig");
            echo "
                                                        ";
            // line 408
            $context["loop_index"] = (($context["loop_index"] ?? null) + 1);
            // line 409
            echo "                                                    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 410
            echo "                                                        <div class=\"target-placeholder d-block text-center border-ec-dashed p-3\"><span class=\"text-ec-gray\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_drag_and_drop_message"), "html", null, true);
            echo "</span></div>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['BlockPosition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 412
        echo "                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-3 p-2\">
                                        ";
        // line 417
        if ((twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "id", []) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Page", []), "vars", []), "choices", [])) > 0))) {
            // line 418
            echo "<div id=\"preview-block\" class=\"d-block border border-ec-gray mb-4\">
                                            <div class=\"card-body\">
                                                <div class=\"d-block text-center mb-3\">
                                                    ";
            // line 421
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Page", []), 'widget');
            echo "
                                                </div>
                                                <div class=\"d-block text-center\">
                                                    <a id=\"preview-button\" class=\"btn btn-block btn-ec-regular\">";
            // line 424
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_preview"), "html", null, true);
            echo "</a>
                                                </div>
                                            </div>
                                        </div>
                                        ";
        }
        // line 429
        echo "                                        <div id=\"unused-block\" class=\"d-block border border-ec-gray\">
                                            ";
        // line 430
        $context["unused_target_id"] = twig_constant("Eccube\\Entity\\Layout::TARGET_ID_UNUSED");
        // line 431
        echo "                                            <div id=\"position_";
        echo twig_escape_filter($this->env, ($context["unused_target_id"] ?? null), "html", null, true);
        echo "\" class=\"d-block p-3 ui-sortable\">
                                                <p class=\"font-weight-bold mb-2\">";
        // line 432
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_section__unused"), "html", null, true);
        echo "</p>
                                                <div class=\"mb-3\">
                                                    <div class=\"form-row\">
                                                        <div class=\"col\">
                                                            <div class=\"input-group mb-3\">
                                                                <div class=\"input-group-prepend\">
                                                                    <span class=\"input-group-text\" id=\"basic-addon1\"><i class=\"fa fa-search\"></i></span>
                                                                </div>
                                                                <input id=\"search-block\" class=\"form-control\" type=\"search\" aria-label=\"Search\">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                ";
        // line 445
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["UnusedBlocks"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["UnusedBlock"]) {
            // line 446
            echo "                                                    <div id=\"detail_box__layout_item--";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["UnusedBlock"], "id", []), "html", null, true);
            echo "\"
                                                         class=\"block sort";
            // line 447
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [])) {
                echo " first";
            }
            echo " border border-ec-gray bg-ec-lightGray p-2 mb-2\">
                                                        <div class=\"row justify-content-between\">
                                                            <div class=\"col\">
                                                                <i class=\"fa fa-bars text-ec-gray mr-3\"></i>
                                                                <span class=\"view_readme\" data-toggle=\"modal\"
                                                                   data-target=\"#blockModal\"
                                                                   data-id=\"";
            // line 453
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["UnusedBlock"], "id", []), "html", null, true);
            echo "\"
                                                                   data-name=\"";
            // line 454
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["UnusedBlock"], "name", []), "html", null, true);
            echo "\"
                                                                   title=\"";
            // line 455
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["UnusedBlock"], "name", []), "html", null, true);
            echo "\"
                                                                >";
            // line 456
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["UnusedBlock"], "name", []), "html", null, true);
            echo "</span>
                                                            </div>
                                                            <div class=\"col-auto text-right\">
                                                                <div class=\"d-inline-block px-3\">
                                                                    <input type=\"hidden\" class=\"name\" name=\"name_";
            // line 460
            echo twig_escape_filter($this->env, ($context["loop_index"] ?? null), "html", null, true);
            echo "\"
                                                                        value=\"";
            // line 461
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["UnusedBlock"], "name", []), "html", null, true);
            echo "\"/>
                                                                    <input type=\"hidden\" class=\"id\" name=\"block_id_";
            // line 462
            echo twig_escape_filter($this->env, ($context["loop_index"] ?? null), "html", null, true);
            echo "\"
                                                                        value=\"";
            // line 463
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["UnusedBlock"], "id", []), "html", null, true);
            echo "\"/>
                                                                    <input type=\"hidden\" class=\"target-id\"
                                                                        name=\"section_";
            // line 465
            echo twig_escape_filter($this->env, ($context["loop_index"] ?? null), "html", null, true);
            echo "\"
                                                                        value=\"";
            // line 466
            echo twig_escape_filter($this->env, ($context["unused_target_id"] ?? null), "html", null, true);
            echo "\"/>
                                                                    <input type=\"hidden\" class=\"block-row\"
                                                                        name=\"block_row_";
            // line 468
            echo twig_escape_filter($this->env, ($context["loop_index"] ?? null), "html", null, true);
            echo "\"
                                                                        value=\"";
            // line 469
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["UnusedBlock"], "id", []), "html", null, true);
            echo "\"/>
                                                                    <div class=\"block-context-menu d-inline-block px-3\"><i class=\"fa fa-ellipsis-v fa-lg text-secondary\"></i></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    ";
            // line 475
            $context["loop_index"] = (($context["loop_index"] ?? null) + 1);
            // line 476
            echo "                                                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['UnusedBlock'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 477
        echo "                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"modal fade\" id=\"clickStreamConfirm\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"clickStreamConfirm\" aria-hidden=\"true\">
                                    <div class=\"modal-dialog\" role=\"document\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <h5 class=\"modal-title\">";
        // line 485
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_move_to__confirm_title"), "html", null, true);
        echo "</h5>
                                                <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                                            </div>
                                            <div class=\"modal-body\">
                                                <p>";
        // line 489
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_move_to__confirm_message"), "html", null, true);
        echo "</p>
                                                <div>
                                                    <select id=\"move-section\" class=\"form-control\">
                                                    </select>
                                                    <input type=\"hidden\" id=\"target-block\" />
                                                </div>
                                            </div>
                                            <div class=\"modal-footer\">
                                                <button class=\"btn btn-ec-regular w-25\" type=\"button\" data-dismiss=\"modal\">";
        // line 497
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
        echo "</button>
                                                <button id=\"move-to-section\" class=\"btn btn-ec-conversion w-25\" type=\"button\" data-dismiss=\"modal\">";
        // line 498
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_move_to__execute"), "html", null, true);
        echo "</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"modal fade\" id=\"codePreview\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"codePreview\" aria-hidden=\"true\">
                                    <div class=\"modal-dialog\" role=\"document\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <h5 class=\"modal-title\">";
        // line 507
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_preview_code__confirm_title"), "html", null, true);
        echo "</h5>
                                                <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                                            </div>
                                            <div class=\"modal-body\">
                                                <p>";
        // line 511
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_preview_code__confirm_message"), "html", null, true);
        echo "</p>
                                                <div id=\"block-source-code\" class=\"d-block border bg-ec-lightGray p-2\"></div>
                                            </div>
                                            <div class=\"modal-footer\">
                                                <button class=\"btn btn-ec-regular\" type=\"button\" data-dismiss=\"modal\">";
        // line 515
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
        echo "</button>
                                                <button id=\"block-edit\" onclick=\"location.href='";
        // line 516
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_content_block_edit", ["id" => twig_constant("Eccube\\Controller\\Admin\\Content\\LayoutController::DUMMY_BLOCK_ID")]), "html", null, true);
        echo "'\" class=\"btn btn-ec-conversion w-25\" type=\"button\" data-dismiss=\"modal\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_preview_code__confirm_move_to_block"), "html", null, true);
        echo "</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id=\"context-menu\" style=\"display: none\">
                                    <div class='list-group'>
                                        <a href='javascript:;' class='context-moveup list-group-item list-group-item-action border-0'>
                                            <i class='fa fa-long-arrow-up mr-1'></i>";
        // line 524
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_up"), "html", null, true);
        echo "
                                        </a>
                                        <a href='javascript:;' class='context-movedown list-group-item list-group-item-action border-0'>
                                            <i class='fa fa-long-arrow-down mr-1'></i>";
        // line 527
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_down"), "html", null, true);
        echo "
                                        </a>
                                        <a href='javascript:;' class='context-movesection list-group-item list-group-item-action border-0'>
                                            <i class='fa fa-arrows mr-1'></i>";
        // line 530
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_move_to"), "html", null, true);
        echo "
                                        </a>
                                        <a href='javascript:;' class='context-preview list-group-item list-group-item-action border-0'>
                                            <i class='fa fa-code mr-1'></i>";
        // line 533
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_preview_code"), "html", null, true);
        echo "
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id=\"target-placeholder\" style=\"display: none\"><div class=\"target-placeholder d-block text-center border-ec-dashed p-3\"><span class=\"text-ec-gray\">";
        // line 542
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_drag_and_drop_message"), "html", null, true);
        echo "</span></div></div>
            <div class=\"c-conversionArea\">
                <div class=\"c-conversionArea__container\">
                    <div class=\"row justify-content-between align-items-center\">
                        <div class=\"col-6\">
                            <div class=\"c-conversionArea__leftBlockItem\">
                                <a class=\"c-baseLink\" href=\"";
        // line 548
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_content_layout");
        echo "\"><i class=\"fa fa-backward\" aria-hidden=\"true\"></i><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_management"), "html", null, true);
        echo "</span></a>
                            </div>
                        </div>
                        <div class=\"col-6\">
                            <div id=\"ex-conversion-action\" class=\"row align-items-center justify-content-end\">
                                <div class=\"col-auto\">
                                    <button class=\"btn btn-ec-conversion px-5\" type=\"submit\">";
        // line 554
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.registration"), "html", null, true);
        echo "</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
";
    }

    public function getTemplateName()
    {
        return "__string_template__f3307d177468b00d59b490e147f9fbf1318da824e6799715e86f6d6493638f84";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1535 => 554,  1524 => 548,  1515 => 542,  1503 => 533,  1497 => 530,  1491 => 527,  1485 => 524,  1472 => 516,  1468 => 515,  1461 => 511,  1454 => 507,  1442 => 498,  1438 => 497,  1427 => 489,  1420 => 485,  1410 => 477,  1396 => 476,  1394 => 475,  1385 => 469,  1381 => 468,  1376 => 466,  1372 => 465,  1367 => 463,  1363 => 462,  1359 => 461,  1355 => 460,  1348 => 456,  1344 => 455,  1340 => 454,  1336 => 453,  1325 => 447,  1320 => 446,  1303 => 445,  1287 => 432,  1282 => 431,  1280 => 430,  1277 => 429,  1269 => 424,  1263 => 421,  1258 => 418,  1256 => 417,  1249 => 412,  1240 => 410,  1227 => 409,  1225 => 408,  1220 => 407,  1202 => 406,  1198 => 405,  1192 => 403,  1190 => 402,  1185 => 399,  1176 => 397,  1163 => 396,  1161 => 395,  1156 => 394,  1138 => 393,  1134 => 392,  1128 => 390,  1126 => 389,  1121 => 386,  1112 => 384,  1099 => 383,  1097 => 382,  1092 => 381,  1074 => 380,  1070 => 379,  1064 => 377,  1062 => 376,  1057 => 373,  1048 => 371,  1035 => 370,  1033 => 369,  1028 => 368,  1010 => 367,  1006 => 366,  1000 => 364,  998 => 363,  991 => 358,  982 => 356,  969 => 355,  967 => 354,  962 => 353,  944 => 352,  940 => 351,  934 => 349,  932 => 348,  926 => 344,  917 => 342,  904 => 341,  902 => 340,  897 => 339,  879 => 338,  875 => 337,  869 => 335,  867 => 334,  861 => 331,  856 => 328,  847 => 326,  834 => 325,  832 => 324,  827 => 323,  809 => 322,  805 => 321,  799 => 319,  797 => 318,  791 => 314,  782 => 312,  769 => 311,  767 => 310,  762 => 309,  744 => 308,  740 => 307,  734 => 305,  732 => 304,  726 => 300,  717 => 298,  704 => 297,  702 => 296,  697 => 295,  679 => 294,  675 => 293,  669 => 291,  667 => 290,  664 => 289,  655 => 287,  642 => 286,  640 => 285,  635 => 284,  617 => 283,  613 => 282,  607 => 280,  605 => 279,  602 => 278,  593 => 276,  580 => 275,  578 => 274,  573 => 273,  555 => 272,  551 => 271,  545 => 269,  543 => 268,  540 => 267,  531 => 265,  518 => 264,  516 => 263,  511 => 262,  493 => 261,  489 => 260,  483 => 258,  481 => 257,  466 => 247,  457 => 240,  450 => 239,  443 => 235,  439 => 234,  434 => 232,  431 => 231,  425 => 229,  422 => 228,  419 => 227,  413 => 226,  405 => 221,  399 => 219,  392 => 217,  387 => 216,  385 => 215,  379 => 212,  372 => 208,  368 => 207,  361 => 205,  351 => 198,  341 => 191,  338 => 190,  335 => 189,  332 => 187,  329 => 186,  326 => 185,  323 => 184,  313 => 176,  304 => 170,  296 => 165,  289 => 161,  284 => 159,  281 => 158,  279 => 157,  258 => 139,  240 => 124,  160 => 47,  156 => 46,  152 => 45,  148 => 44,  144 => 43,  131 => 35,  125 => 34,  119 => 33,  113 => 32,  107 => 31,  101 => 30,  95 => 29,  89 => 28,  83 => 27,  77 => 26,  71 => 25,  65 => 24,  59 => 23,  55 => 21,  52 => 20,  46 => 16,  40 => 15,  36 => 11,  34 => 18,  32 => 13,  15 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__f3307d177468b00d59b490e147f9fbf1318da824e6799715e86f6d6493638f84", "");
    }
}
