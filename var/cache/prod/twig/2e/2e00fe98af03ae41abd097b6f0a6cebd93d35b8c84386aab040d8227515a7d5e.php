<?php

/* __string_template__bd252cdec4c67151b2678aeeb25bcbd8b22afd6f5fe31e19663fee4f449366aa */
class __TwigTemplate_0ac9b9ce0fe52c6155e30629449812513d9fecd18735980f0c850b877b493c2d extends Twig_Template
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
        $context["Categories"] = twig_get_attribute($this->env, $this->source, call_user_func_array($this->env->getFunction('repository')->getCallable(), ["Eccube\\Entity\\Category"]), "getList", [], "method");
        // line 12
        echo "
";
        // line 28
        echo "
";
        // line 30
        $context["__internal_0677740001ca14b820dee65dc41d55662a4376a864b2af981d207cf87e5c4e48"] = $this;
        // line 31
        echo "
<div class=\"ec-categoryNaviRole\">
    <div class=\"ec-itemNav\">
        <ul class=\"ec-itemNav__nav\">
            ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["Category"]) {
            // line 36
            echo "                <li>
                    ";
            // line 37
            echo $context["__internal_0677740001ca14b820dee65dc41d55662a4376a864b2af981d207cf87e5c4e48"]->macro_tree($context["Category"]);
            echo "
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </ul>
    </div>
</div>
";
    }

    // line 13
    public function macro_tree($__Category__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "Category" => $__Category__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 14
            echo "    ";
            $context["__internal_802c1d0ad259e872cd0ee60c33a945a980f60a980465f8ddf9d990484c62291d"] = $this;
            // line 15
            echo "    <a href=\"";
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
            echo "?category_id=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "id", []), "html", null, true);
            echo "\">
        ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "name", []), "html", null, true);
            echo "
    </a>
    ";
            // line 18
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "children", [])) > 0)) {
                // line 19
                echo "        <ul>
            ";
                // line 20
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "children", []));
                foreach ($context['_seq'] as $context["_key"] => $context["ChildCategory"]) {
                    // line 21
                    echo "                <li>
                    ";
                    // line 22
                    echo $context["__internal_802c1d0ad259e872cd0ee60c33a945a980f60a980465f8ddf9d990484c62291d"]->macro_tree($context["ChildCategory"]);
                    echo "
                </li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ChildCategory'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 25
                echo "        </ul>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "__string_template__bd252cdec4c67151b2678aeeb25bcbd8b22afd6f5fe31e19663fee4f449366aa";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 25,  101 => 22,  98 => 21,  94 => 20,  91 => 19,  89 => 18,  84 => 16,  77 => 15,  74 => 14,  62 => 13,  55 => 40,  46 => 37,  43 => 36,  39 => 35,  33 => 31,  31 => 30,  28 => 28,  25 => 12,  23 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__bd252cdec4c67151b2678aeeb25bcbd8b22afd6f5fe31e19663fee4f449366aa", "");
    }
}
