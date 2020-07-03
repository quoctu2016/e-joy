<?php

/* block.twig */
class __TwigTemplate_f047d6e3e76959a785b9d71725691215af04f735e354b1bcdc087389f4114cb9 extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Blocks"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["Block"]) {
            // line 12
            echo "    <!-- ▼";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Block"], "name", []), "html", null, true);
            echo " -->
    ";
            // line 13
            if (twig_get_attribute($this->env, $this->source, $context["Block"], "use_controller", [])) {
                // line 14
                echo "        ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath(("block_" . twig_get_attribute($this->env, $this->source, $context["Block"], "file_name", []))));
                echo "
    ";
            } else {
                // line 16
                echo "        ";
                echo $this->extensions['Eccube\Twig\Extension\TwigIncludeExtension']->include_dispatch($context, (("Block/" . twig_get_attribute($this->env, $this->source, $context["Block"], "file_name", [])) . ".twig"));
                echo "
    ";
            }
            // line 18
            echo "    <!-- ▲";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Block"], "name", []), "html", null, true);
            echo " -->
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "block.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 18,  40 => 16,  34 => 14,  32 => 13,  27 => 12,  23 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "block.twig", "C:\\xampp\\htdocs\\www\\e-joy\\src\\Eccube\\Resource\\template\\default\\block.twig");
    }
}
