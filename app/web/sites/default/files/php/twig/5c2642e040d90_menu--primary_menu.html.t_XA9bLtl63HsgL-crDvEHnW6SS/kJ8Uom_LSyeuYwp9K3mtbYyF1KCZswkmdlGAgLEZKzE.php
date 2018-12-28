<?php

/* themes/uswds/templates/system/menu/menu--primary_menu.html.twig */
class __TwigTemplate_25e153549cbbdce1da4ce959e5ac576e95f2990d741948877ecf15a9e7ffd743 extends Twig_Template
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
        $tags = array("import" => 8, "macro" => 17, "if" => 20, "for" => 39);
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
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["search_form"] ?? null), "html", null, true));
        echo "
";
        // line 15
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links(($context["items"] ?? null), 0, ($context["megamenu"] ?? null), 0, null, ($context["duplicate_parent"] ?? null))));
        echo "

";
    }

    // line 17
    public function getmenu_links($__items__ = null, $__menu_level__ = null, $__megamenu__ = null, $__button_id__ = null, $__parent__ = null, $__duplicate_parent__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "items" => $__items__,
            "menu_level" => $__menu_level__,
            "megamenu" => $__megamenu__,
            "button_id" => $__button_id__,
            "parent" => $__parent__,
            "duplicate_parent" => $__duplicate_parent__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 18
            echo "  ";
            $context["menus"] = $this;
            // line 19
            echo "
  ";
            // line 20
            if (($context["items"] ?? null)) {
                // line 21
                echo "
    ";
                // line 22
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 23
                    echo "      <ul class=\"usa-nav-primary usa-accordion\" role=\"navigation\">
    ";
                } elseif ((                // line 24
($context["menu_level"] ?? null) == 1)) {
                    // line 25
                    echo "      <ul id=\"megamenu-";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["button_id"] ?? null), "html", null, true));
                    echo "\" class=\"usa-nav-submenu";
                    if (($context["megamenu"] ?? null)) {
                        echo " usa-megamenu usa-grid-full";
                    }
                    echo "\">

      ";
                    // line 27
                    if (($context["duplicate_parent"] ?? null)) {
                        // line 28
                        echo "      <li>
        <a href=\"";
                        // line 29
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["parent"] ?? null), "url", array()), "html", null, true));
                        echo "\">
          <span>";
                        // line 30
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["parent"] ?? null), "title", array()), "html", null, true));
                        echo "</span>
        </a>
      </li>
      ";
                    }
                    // line 34
                    echo "
    ";
                } else {
                    // line 36
                    echo "      <ul>
    ";
                }
                // line 38
                echo "
    ";
                // line 39
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 40
                    echo "      <li";
                    if (((($context["megamenu"] ?? null) && (($context["menu_level"] ?? null) == 1)) && $this->getAttribute($context["item"], "below", array()))) {
                        echo " class=\"usa-megamenu-col\"";
                    }
                    echo ">

        ";
                    // line 42
                    if (((($context["menu_level"] ?? null) == 0) && $this->getAttribute($context["item"], "below", array()))) {
                        // line 43
                        echo "          <button class=\"usa-accordion-button usa-nav-link\" aria-expanded=\"false\" aria-controls=\"megamenu-";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true));
                        echo "\">
            <span>";
                        // line 44
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                        echo "</span>
          </button>
        ";
                    }
                    // line 47
                    echo "
        ";
                    // line 48
                    if (((($context["megamenu"] ?? null) && (($context["menu_level"] ?? null) < 2)) && $this->getAttribute($context["item"], "below", array()))) {
                        // line 49
                        echo "          ";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", array()), (($context["menu_level"] ?? null) + 1), ($context["megamenu"] ?? null), $this->getAttribute($context["loop"], "index", array()), $context["item"], ($context["duplicate_parent"] ?? null))));
                        echo "
        ";
                    } elseif (((                    // line 50
($context["menu_level"] ?? null) == 0) && $this->getAttribute($context["item"], "below", array()))) {
                        // line 51
                        echo "          ";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", array()), (($context["menu_level"] ?? null) + 1), ($context["megamenu"] ?? null), $this->getAttribute($context["loop"], "index", array()), $context["item"], ($context["duplicate_parent"] ?? null))));
                        echo "
        ";
                    } else {
                        // line 53
                        echo "          <a href=\"";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                        echo "\"";
                        if ((($context["menu_level"] ?? null) == 0)) {
                            echo " class=\"usa-nav-link";
                            if ($this->getAttribute($context["item"], "in_active_trail", array())) {
                                echo " usa-current";
                            }
                            echo "\" ";
                        }
                        echo ">
            <span>";
                        // line 54
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                        echo "</span>
          </a>
        ";
                    }
                    // line 57
                    echo "
      </li>
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 60
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
        return "themes/uswds/templates/system/menu/menu--primary_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 60,  209 => 57,  203 => 54,  190 => 53,  184 => 51,  182 => 50,  177 => 49,  175 => 48,  172 => 47,  166 => 44,  161 => 43,  159 => 42,  151 => 40,  134 => 39,  131 => 38,  127 => 36,  123 => 34,  116 => 30,  112 => 29,  109 => 28,  107 => 27,  97 => 25,  95 => 24,  92 => 23,  90 => 22,  87 => 21,  85 => 20,  82 => 19,  79 => 18,  62 => 17,  55 => 15,  51 => 14,  48 => 9,  46 => 8,  43 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/uswds/templates/system/menu/menu--primary_menu.html.twig", "/app/web/themes/uswds/templates/system/menu/menu--primary_menu.html.twig");
    }
}
