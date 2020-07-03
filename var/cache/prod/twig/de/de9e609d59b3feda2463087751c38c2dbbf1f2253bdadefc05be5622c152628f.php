<?php

/* @admin/Store/plugin_detail_modal.twig */
class __TwigTemplate_c42dba2ef27e63c740c955994e5db6bf00340267fba48ece6a22305c21debf69 extends Twig_Template
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
        echo "<div class=\"modal fade\" id=\"searchPluginModal-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "id", []), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"searchPluginModal\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title font-weight-bold\" id=\"exampleModalLabel\">";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_owners_search.modal.header"), "html", null, true);
        echo "</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <div class=\"row mb-5\">
                    <div class=\"col-6\">
                        <img class=\"w-100 img-responsive\"
                             src=\"";
        // line 14
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "image", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "image", []), $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("noimage_plugin_list.png", "save_image"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("noimage_plugin_list.png", "save_image"))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "name", []), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"col-6\">
                        <h5 class=\"font-weight-bold mb-3\">";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "name", []), "html", null, true);
        echo "</h5>
                        <p>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "short_description", []), "html", null, true);
        echo "</p>
                        <p class=\"plg-prices text-danger\"><span class=\"font-weight-bold text-dark\">";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.price"), "html", null, true);
        echo " </span> ";
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "price", [])), "html", null, true);
        echo "<small> (";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.tax_include"), "html", null, true);
        echo ")</small></p>
                    </div>
                </div>
                <div class=\"row mb-4\">
                    <div class=\"col-7\">
                        ";
        // line 24
        echo twig_include($this->env, $context, "@admin/Store/plugin_detail_info.twig");
        echo "
                    </div>
                    <div class=\"col-5 text-right\">
                        ";
        // line 27
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "contact_url", [])) {
            // line 28
            echo "                        <a class=\"btn btn-ec-regular btn-lg mb-3\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "contact_url", []), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"fa fa-image fa-lg text-secondary\"></i> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_owners_search.modal.contact"), "html", null, true);
            echo "</a>{ }}
                        ";
        }
        // line 30
        echo "                        ";
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "manual_url", [])) {
            // line 31
            echo "                        <a class=\"btn btn-ec-regular btn-lg\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "manual_url", []), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"fa fa-image fa-lg text-secondary\"></i> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_owners_search.modal.manual"), "html", null, true);
            echo "</a>
                        ";
        }
        // line 33
        echo "                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-12\">
                        ";
        // line 37
        $context["version_check"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "version_check", []);
        // line 38
        echo "                        ";
        if ((($context["version_check"] ?? null) == 0)) {
            // line 39
            echo "                        <div class=\"alert alert-danger border border-danger\">
                                <p class=\"text-danger mb-1\">";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_owners_search.modal.note", ["%version%" => twig_constant("Eccube\\Common\\Constant::VERSION")]), "html", null, true);
            echo "</p>
                        </div>
                        ";
        }
        // line 43
        echo "                    </div>
                </div>
                <hr>
                <div class=\"row mt-4\">
                    <div class=\"col-12\">
                        ";
        // line 48
        echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "long_description", []);
        echo "
                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <form action=\"";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["eccube_config"] ?? null), "eccube_owners_store_url", []), "html", null, true);
        echo "/gateway/purchase/?product_id=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "id", []), "html", null, true);
        echo "\" method=\"post\" target=\"_blank\">
                <button type=\"button\" class=\"btn btn-ec-sub\" data-dismiss=\"modal\">";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_owners_search.modal.cancel"), "html", null, true);
        echo "</button>
                ";
        // line 55
        if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "update_status", []) == 1)) {
            // line 56
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_store_plugin_install_confirm", ["id" => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-primary\">
                        ";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_owners_search.install.free"), "html", null, true);
            echo "
                    </a>
                ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 59
($context["item"] ?? null), "update_status", []) == 2)) {
            // line 60
            echo "                    <a href=\"#\" class=\"btn btn-ec-regular\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.installed"), "html", null, true);
            echo "</a>
                ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 61
($context["item"] ?? null), "update_status", []) == 3)) {
            // line 62
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_store_plugin_install_confirm", ["id" => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-primary\">
                        ";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.update"), "html", null, true);
            echo "
                    </a>
                ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 65
($context["item"] ?? null), "update_status", []) == 4)) {
            // line 66
            echo "                    <input type=\"hidden\" name=\"mode\" value=\"link_site\" />
                    <input type=\"hidden\" name=\"public_key\" value=\"";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "authentication_key", []), "html", null, true);
            echo "\" />
                    <input type=\"submit\" class=\"btn btn-primary\" value=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_owners_search.install.fee"), "html", null, true);
            echo "\" />
                ";
        }
        // line 70
        echo "                </form>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "@admin/Store/plugin_detail_modal.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 70,  183 => 68,  179 => 67,  176 => 66,  174 => 65,  169 => 63,  164 => 62,  162 => 61,  157 => 60,  155 => 59,  150 => 57,  145 => 56,  143 => 55,  139 => 54,  133 => 53,  125 => 48,  118 => 43,  112 => 40,  109 => 39,  106 => 38,  104 => 37,  98 => 33,  90 => 31,  87 => 30,  79 => 28,  77 => 27,  71 => 24,  59 => 19,  55 => 18,  51 => 17,  43 => 14,  31 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@admin/Store/plugin_detail_modal.twig", "C:\\xampp\\htdocs\\www\\e-joy\\app\\template\\admin\\Store\\plugin_detail_modal.twig");
    }
}
