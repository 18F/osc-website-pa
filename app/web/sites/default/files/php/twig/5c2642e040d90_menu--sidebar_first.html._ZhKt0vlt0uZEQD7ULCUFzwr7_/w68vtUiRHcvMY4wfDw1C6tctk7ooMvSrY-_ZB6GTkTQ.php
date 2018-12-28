<?php

/* themes/uswds/templates/system/menu/menu--sidebar_first.html.twig */
class __TwigTemplate_dab5da04fad5928d856ee928aba710e865d81d45346e4085be3ca8114c924b67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("import" => 8, "macro" => 16, "if" => 19, "for" => 27);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('import', 'macro', 'if', 'for'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 7
        echo "
";
        // line 8
        $context["menus"] = $this;
        // line 9
        echo "
";
        // line 14
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links(($context["items"] ?? null), 0)));
        echo "

";
    }

    // line 16
    public function getmenu_links($__items__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "items" => $__items__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 17
            echo "  ";
            $context["menus"] = $this;
            // line 18
            echo "
  ";
            // line 19
            if (($context["items"] ?? null)) {
                // line 20
                echo "
    ";
                // line 21
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 22
                    echo "      <ul class=\"usa-sidenav-list\">
    ";
                } else {
                    // line 24
                    echo "      <ul class=\"usa-sidenav-sub_list\">
    ";
                }
                // line 26
                echo "
    ";
                // line 27
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 28
                    echo "      <li>
        <a href=\"";
                    // line 29
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                    echo "\"";
                    if ($this->getAttribute($context["item"], "in_active_trail", array())) {
                        echo " class=\"usa-current\"";
                    }
                    echo ">
          <span>";
                    // line 30
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                    echo "</span>
        </a>

        ";
                    // line 33
                    if (($this->getAttribute($context["item"], "in_active_trail", array()) && $this->getAttribute($context["item"], "below", array()))) {
                        // line 34
                        echo "          ";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", array()), (($context["menu_level"] ?? null) + 1))));
                        echo "
        ";
                    }
                    // line 36
                    echo "
      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                echo "    </ul>
  ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "themes/uswds/templates/system/menu/menu--sidebar_first.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 39,  124 => 36,  118 => 34,  116 => 33,  110 => 30,  102 => 29,  99 => 28,  95 => 27,  92 => 26,  88 => 24,  84 => 22,  82 => 21,  79 => 20,  77 => 19,  74 => 18,  71 => 17,  58 => 16,  51 => 14,  48 => 9,  46 => 8,  43 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/uswds/templates/system/menu/menu--sidebar_first.html.twig", "/app/web/themes/uswds/templates/system/menu/menu--sidebar_first.html.twig");
    }
}
