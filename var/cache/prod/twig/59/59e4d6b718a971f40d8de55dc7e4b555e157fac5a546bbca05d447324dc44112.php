<?php

/* __string_template__a4c329fcd976f1fefc7f2548af48d603a5798f99eb48ada4885aa62e8e88fa3a */
class __TwigTemplate_ceb313e936a6fdbe6013bbc71d47be3ce7d24f8c44428c1bd849ba8914a91011 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "__string_template__a4c329fcd976f1fefc7f2548af48d603a5798f99eb48ada4885aa62e8e88fa3a", 11);
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
        $context["menus"] = [0 => "content", 1 => "block"];
        // line 11
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.block_management"), "html", null, true);
    }

    // line 16
    public function block_sub_title($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.contents_management"), "html", null, true);
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
        echo "    <script>
        // searchWordの実行
        \$('#search-block').on('input', function () {
            searchWord(\$(this).val(), \$(\".list-group li\"));
        });
    </script>
";
    }

    // line 35
    public function block_main($context, array $blocks = [])
    {
        // line 36
        echo "    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                <div class=\"row justify-content-between mb-2\">
                    <div class=\"col-9\">
                        <a class=\"btn btn-ec-regular\" href=\"";
        // line 41
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_content_block_new");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.create__new"), "html", null, true);
        echo "</a>
                    </div>
                    <div class=\"col-3\">
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
                </div>
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-body p-0\">
                        <div class=\"card rounded border-0\">
                            <ul class=\"list-group list-group-flush\">
                                ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Blocks"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["Block"]) {
            // line 61
            echo "                                    <li id=\"ex-block-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Block"], "id", []), "html", null, true);
            echo "\" class=\"list-group-item\">
                                        <div class=\"row\">
                                            <div class=\"col-7 col-md-10 d-flex align-items-center\">
                                                <a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_content_block_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["Block"], "id", [])]), "html", null, true);
            echo "\">
                                                    ";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Block"], "name", []), "html", null, true);
            echo "
                                                </a>
                                            </div>
                                            <div class=\"col-5 col-md-2\">
                                                <div class=\"row\">
                                                    <div class=\"col-6 text-right\">
                                                        <a href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_content_block_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["Block"], "id", [])]), "html", null, true);
            echo "\"
                                                           class=\"btn btn-ec-actionIcon mr-3\" data-tooltip=\"true\"
                                                           data-placement=\"top\" title=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.edit"), "html", null, true);
            echo "\">
                                                            <i class=\"fa fa-pencil fa-lg text-secondary\"></i>
                                                        </a>
                                                    </div>
                                                    ";
            // line 77
            if (twig_get_attribute($this->env, $this->source, $context["Block"], "deletable", [])) {
                // line 78
                echo "                                                        <div class=\"col-6\">
                                                            <div class=\"d-inline-block mr-3\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
                // line 79
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                echo "\">
                                                                <a href=\"#\" data-toggle=\"modal\" data-target=\"#confirmModal-";
                // line 80
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Block"], "id", []), "html", null, true);
                echo "\" class=\"btn btn-ec-actionIcon\">
                                                                    <i class=\"fa fa-close fa-lg text-secondary\"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class=\"modal fade\" id=\"confirmModal-";
                // line 85
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Block"], "id", []), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\"
                                                             aria-labelledby=\"confirmModal-";
                // line 86
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Block"], "id", []), "html", null, true);
                echo "\" aria-hidden=\"true\">
                                                            <div class=\"modal-dialog\" role=\"document\">
                                                                <div class=\"modal-content\">
                                                                    <div class=\"modal-header\">
                                                                        <h5 class=\"modal-title font-weight-bold\">";
                // line 90
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__title"), "html", null, true);
                echo "</h5>
                                                                        <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                                            <span aria-hidden=\"true\">×</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class=\"modal-body text-left\">
                                                                        <p class=\"text-left\">";
                // line 96
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__message", ["%name%" => twig_get_attribute($this->env, $this->source, $context["Block"], "name", [])]), "html", null, true);
                echo "</p>
                                                                    </div>
                                                                    <div class=\"modal-footer\">
                                                                        <button class=\"btn btn-ec-sub\" type=\"button\" data-dismiss=\"modal\">";
                // line 99
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
                echo "</button>
                                                                        <a href=\"";
                // line 100
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_content_block_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["Block"], "Id", [])]), "html", null, true);
                echo "\"
                                                                           class=\"btn btn-ec-delete\" data-confirm=\"false\" ";
                // line 101
                echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
                echo " data-method=\"delete\">
                                                                            ";
                // line 102
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                echo "
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    ";
            }
            // line 109
            echo "                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__a4c329fcd976f1fefc7f2548af48d603a5798f99eb48ada4885aa62e8e88fa3a";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 114,  211 => 109,  201 => 102,  197 => 101,  193 => 100,  189 => 99,  183 => 96,  174 => 90,  167 => 86,  163 => 85,  155 => 80,  151 => 79,  148 => 78,  146 => 77,  139 => 73,  134 => 71,  125 => 65,  121 => 64,  114 => 61,  110 => 60,  86 => 41,  79 => 36,  76 => 35,  66 => 27,  63 => 26,  54 => 19,  51 => 18,  45 => 16,  39 => 15,  35 => 11,  33 => 13,  15 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__a4c329fcd976f1fefc7f2548af48d603a5798f99eb48ada4885aa62e8e88fa3a", "");
    }
}
