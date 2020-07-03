<?php

/* @admin/Order/order_item_prototype.twig */
class __TwigTemplate_d34f94edda95a9d76124a71381cb905742ad9122adda2c6238f2f2ff50b8febe extends Twig_Template
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
        echo "
<tr class=\"d-none\">
    <td>
        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["orderItemForm"] ?? null), "product_name", []), 'widget');
        echo "
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["orderItemForm"] ?? null), "ProductClass", []), 'widget');
        echo "
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["orderItemForm"] ?? null), "order_item_type", []), 'widget');
        echo "
        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["orderItemForm"] ?? null), "price", []), 'widget');
        echo "
        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["orderItemForm"] ?? null), "quantity", []), 'widget');
        echo "
    </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "@admin/Order/order_item_prototype.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 18,  40 => 17,  36 => 16,  32 => 15,  28 => 14,  23 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@admin/Order/order_item_prototype.twig", "C:\\xampp\\htdocs\\www\\e-joy\\app\\template\\admin\\Order\\order_item_prototype.twig");
    }
}
