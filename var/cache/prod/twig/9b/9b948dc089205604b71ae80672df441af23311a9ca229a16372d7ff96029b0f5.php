<?php

/* @admin/Content/layout_block.twig */
class __TwigTemplate_b9c45fca951f56086060cff634204b2af7b2133104ccc6e9e6f9f1f274358fb4 extends Twig_Template
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
        // line 11
        echo "<div id=\"detail_box__layout_item--";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["BlockPosition"] ?? null), "Block", []), "id", []), "html", null, true);
        echo "\" class=\"block sort border border-ec-gray bg-ec-lightGray p-2 mb-2\">
    <div class=\"row justify-content-between\">
        <div class=\"col\">
            <i class=\"fa fa-bars text-ec-gray mr-3\"></i>
            <span class=\"view_readme\" data-toggle=\"modal\"
               data-target=\"#blockModal\"
               data-id=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["BlockPosition"] ?? null), "Block", []), "id", []), "html", null, true);
        echo "\"
               data-name=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["BlockPosition"] ?? null), "Block", []), "name", []), "html", null, true);
        echo "\"
               title=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["BlockPosition"] ?? null), "Block", []), "name", []), "html", null, true);
        echo "\"
            >";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["BlockPosition"] ?? null), "Block", []), "name", []), "html", null, true);
        echo "</span>
        </div>
        <div class=\"col-auto text-right\">
            <div class=\"d-inline-block px-3 sort";
        // line 23
        if (twig_get_attribute($this->env, $this->source, ($context["loop"] ?? null), "first", [])) {
            echo " first";
        }
        echo "\">
                <input type=\"hidden\" class=\"name\" name=\"name_";
        // line 24
        echo twig_escape_filter($this->env, ($context["loop_index"] ?? null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["BlockPosition"] ?? null), "Block", []), "name", []), "html", null, true);
        echo "\"/>
                <input type=\"hidden\" class=\"block-id\" name=\"block_id_";
        // line 25
        echo twig_escape_filter($this->env, ($context["loop_index"] ?? null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["BlockPosition"] ?? null), "Block", []), "id", []), "html", null, true);
        echo "\"/>
                <input type=\"hidden\" class=\"target-id\" name=\"section_";
        // line 26
        echo twig_escape_filter($this->env, ($context["loop_index"] ?? null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["BlockPosition"] ?? null), "section", []), "html", null, true);
        echo "\"/>
                <input type=\"hidden\" class=\"block-row\" name=\"block_row_";
        // line 27
        echo twig_escape_filter($this->env, ($context["loop_index"] ?? null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["BlockPosition"] ?? null), "block_row", []), "html", null, true);
        echo "\"/>
                <div class=\"block-context-menu d-inline-block px-3\"><i class=\"fa fa-ellipsis-v fa-lg text-secondary\"></i></div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@admin/Content/layout_block.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 27,  69 => 26,  63 => 25,  57 => 24,  51 => 23,  45 => 20,  41 => 19,  37 => 18,  33 => 17,  23 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@admin/Content/layout_block.twig", "C:\\xampp\\htdocs\\www\\e-joy\\src\\Eccube\\Resource\\template\\admin\\Content\\layout_block.twig");
    }
}
