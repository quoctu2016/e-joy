<?php

/* __string_template__aba01b85b27359094563c83c99df1c7d76d554f960038ac7f0f7cc5e466c1452 */
class __TwigTemplate_fb17592b523f588938385df21f5e53eb2fdb7b66b5804db14a67d333456d7808 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 11
        $context["NewsList"] = twig_get_attribute($this->env, $this->source, call_user_func_array($this->env->getFunction('repository')->getCallable(), ["Eccube\\Entity\\News"]), "getList", [], "method");
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('javascript', $context, $blocks);
        // line 49
        echo "<div class=\"ec-role\">
    <div class=\"ec-newsRole\">
        <div class=\"ec-secHeading\">
            <span class=\"ec-secHeading__en\">";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.block.news.title__en"), "html", null, true);
        echo "</span>
            <span class=\"ec-secHeading__line\"></span>
            <span class=\"ec-secHeading__ja\">";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.block.news.title__ja"), "html", null, true);
        echo "</span>
        </div>
        <div class=\"ec-newsRole__news\">
            ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["NewsList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["News"]) {
            // line 58
            echo "                <div class=\"ec-newsRole__newsItem\">
                    <div class=\"ec-newsRole__newsHeading\">
                        <div class=\"ec-newsRole__newsDate\">
                            ";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_day($this->env, twig_get_attribute($this->env, $this->source, $context["News"], "publish_date", [])), "html", null, true);
            echo "
                        </div>
                        <div class=\"ec-newsRole__newsColumn\">
                            <div class=\"ec-newsRole__newsTitle\">
                                ";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["News"], "title", []), "html", null, true);
            echo "
                            </div>
                            ";
            // line 67
            if ((twig_get_attribute($this->env, $this->source, $context["News"], "description", []) || twig_get_attribute($this->env, $this->source, $context["News"], "url", []))) {
                // line 68
                echo "                                <div class=\"ec-newsRole__newsClose\">
                                    <a class=\"ec-newsRole__newsCloseBtn\">
                                        <i class=\"fas fa-angle-down\"></i>
                                    </a>
                                </div>
                            ";
            }
            // line 74
            echo "                        </div>
                    </div>
                    <div class=\"ec-newsRole__newsDescription\">
                        ";
            // line 77
            echo nl2br(twig_get_attribute($this->env, $this->source, $context["News"], "description", []));
            echo "
                        ";
            // line 78
            if (twig_get_attribute($this->env, $this->source, $context["News"], "url", [])) {
                // line 79
                echo "                            <br>
                            <a href=\"";
                // line 80
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["News"], "url", []), "html", null, true);
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->source, $context["News"], "link_method", []) == "1")) {
                    echo "target=\"_blank\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.block.news.see_details"), "html", null, true);
                echo "</a>
                        ";
            }
            // line 82
            echo "                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['News'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "        </div>
    </div>
</div>
";
    }

    // line 13
    public function block_javascript($context, array $blocks = [])
    {
        // line 14
        echo "    <script>
        \$(function() {
            \$('.ec-newsRole__news').each(function() {
                var listLength = \$(this).find('.ec-newsRole__newsItem').length;
                if (listLength > 5) {
                    \$(this).find('.ec-newsRole__newsItem:gt(4)').each(function() {
                        \$(this).hide();
                    });
                    \$(this).append('<a id=\"news_readmore\" class=\"ec-inlineBtn--top\">";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.block.news.read_more"), "html", null, true);
        echo "</a>');
                    var dispNum = 5;
                    \$(this).find('#news_readmore').click(function() {
                        dispNum += 5;
                        \$(this).parent().find('.ec-newsRole__newsItem:lt(' + dispNum + ')').show();
                        if (dispNum >= listLength) {
                            \$(this).hide();
                        }
                    })
                }
            });

            \$('.ec-newsRole__newsHeading').on('click', function() {
                \$newsItem = \$(this).parent('.ec-newsRole__newsItem');
                \$newsDescription = \$newsItem.children('.ec-newsRole__newsDescription');
                if (\$newsDescription.css('display') == 'none') {
                    \$newsItem.addClass('is_active');
                    \$newsDescription.slideDown(300);
                } else {
                    \$newsItem.removeClass('is_active');
                    \$newsDescription.slideUp(300);
                }
                return false;
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "__string_template__aba01b85b27359094563c83c99df1c7d76d554f960038ac7f0f7cc5e466c1452";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 22,  121 => 14,  118 => 13,  111 => 85,  103 => 82,  92 => 80,  89 => 79,  87 => 78,  83 => 77,  78 => 74,  70 => 68,  68 => 67,  63 => 65,  56 => 61,  51 => 58,  47 => 57,  41 => 54,  36 => 52,  31 => 49,  29 => 13,  26 => 12,  24 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__aba01b85b27359094563c83c99df1c7d76d554f960038ac7f0f7cc5e466c1452", "");
    }
}
