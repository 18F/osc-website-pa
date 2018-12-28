<?php

/* themes/uswds/templates/system/layout/page.html.twig */
class __TwigTemplate_23fee06a48d1e1649b2013f2dffb2407f415f5400b683b13d340c5dfadf357c9 extends Twig_Template
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
        $tags = array("if" => 9);
        $filters = array("t" => 28, "trim" => 84, "render" => 84);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array('t', 'trim', 'render'),
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
        echo "<header class=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_classes"] ?? null), "html", null, true));
        echo "\" id=\"header\" role=\"banner\">

  ";
        // line 9
        if (($this->getAttribute(($context["page"] ?? null), "header_top", array()) || ($context["government_banner"] ?? null))) {
            // line 10
            echo "  <section class=\"usa-banner\">

    ";
            // line 12
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["government_banner"] ?? null), "html", null, true));
            echo "

    ";
            // line 14
            if ($this->getAttribute(($context["page"] ?? null), "header_top", array())) {
                // line 15
                echo "    <div class=\"usa-banner-inner\">
      ";
                // line 16
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header_top", array()), "html", null, true));
                echo "
    </div>
    ";
            }
            // line 19
            echo "
  </section>
  ";
        }
        // line 22
        echo "
  ";
        // line 23
        if (($context["header_basic"] ?? null)) {
            // line 24
            echo "  <div class=\"usa-nav-container\">
  ";
        }
        // line 26
        echo "
  <div class=\"usa-navbar\">
    <button class=\"usa-menu-btn\">";
        // line 28
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Menu")));
        echo "</button>
    ";
        // line 29
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
        echo "
  </div>

  <div class=\"usa-overlay\"></div>
  <div class=\"usa-nav\" role=\"navigation\">
    <div class=\"usa-nav-inner\">

      <button class=\"usa-nav-close\">
        <img src=\"";
        // line 37
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["active_theme_path"] ?? null), "html", null, true));
        echo "/assets/img/close.svg\" alt=\"close\" />
      </button>

      ";
        // line 40
        if ($this->getAttribute(($context["page"] ?? null), "mobile_menu", array())) {
            // line 41
            echo "      <div class=\"usa-nav-mobile\">
        ";
            // line 42
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "mobile_menu", array()), "html", null, true));
            echo "
      </div>
      ";
        }
        // line 45
        echo "
      ";
        // line 46
        if ($this->getAttribute(($context["page"] ?? null), "mobile_menu", array())) {
            // line 47
            echo "      <div class=\"usa-nav-desktop\">
      ";
        }
        // line 49
        echo "
      ";
        // line 50
        if ($this->getAttribute(($context["page"] ?? null), "primary_menu", array())) {
            // line 51
            echo "      ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "primary_menu", array()), "html", null, true));
            echo "
      ";
        }
        // line 53
        echo "
      ";
        // line 54
        if ($this->getAttribute(($context["page"] ?? null), "secondary_menu", array())) {
            // line 55
            echo "      ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "secondary_menu", array()), "html", null, true));
            echo "
      ";
        }
        // line 57
        echo "
      ";
        // line 58
        if ($this->getAttribute(($context["page"] ?? null), "mobile_menu", array())) {
            // line 59
            echo "      </div>
      ";
        }
        // line 61
        echo "
    </div>
  </div>

  ";
        // line 65
        if (($context["header_basic"] ?? null)) {
            // line 66
            echo "  </div>
  ";
        }
        // line 68
        echo "
</header>

";
        // line 71
        if ($this->getAttribute(($context["page"] ?? null), "hero", array())) {
            // line 72
            echo "<section>
";
            // line 73
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "hero", array()), "html", null, true));
            echo "
</section>
";
        }
        // line 76
        echo "
<section class=\"usa-section uswds-middle-section ";
        // line 77
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["main_classes"] ?? null), "html", null, true));
        echo "\">
  <div class=\"usa-grid\">
    <div class=\"usa-width-full\">
      ";
        // line 80
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "breadcrumb", array()), "html", null, true));
        echo "

      ";
        // line 82
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
        echo "

      ";
        // line 84
        if (twig_trim_filter($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "help", array())))) {
            // line 85
            echo "      <div class=\"usa-alert usa-alert-info\">
        <div class=\"usa-alert-body\">
          <p class=\"usa-alert-text\">
            ";
            // line 88
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "help", array()), "html", null, true));
            echo "
          </p>
        </div>
      </div>
      ";
        }
        // line 93
        echo "
    </div>
  </div>

  <div class=\"uswds-main-content-wrapper ";
        // line 97
        if ((($context["edge_to_edge"] ?? null) == false)) {
            echo "usa-grid";
        }
        echo "\">
    <a id=\"main-content\" tabindex=\"-1\"></a>

    ";
        // line 100
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
            // line 101
            echo "    <aside class=\"region-sidebar-first usa-width-one-fourth\">
      ";
            // line 102
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
            echo "
    </aside>
    ";
        }
        // line 105
        echo "
    <div class=\"region-content ";
        // line 106
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_class"] ?? null), "html", null, true));
        echo "\">
      ";
        // line 107
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
    </div>

    ";
        // line 110
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())) {
            // line 111
            echo "    <aside class=\"region-sidebar-second usa-width-one-fourth\">
      ";
            // line 112
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
            echo "
    </aside>
    ";
        }
        // line 115
        echo "
  </div>
</section>

<footer class=\"";
        // line 119
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_classes"] ?? null), "html", null, true));
        echo "\" role=\"contentinfo\">
  <div class=\"usa-grid usa-footer-return-to-top\">
    <a href=\"#\">Return to top</a>
  </div>

  ";
        // line 124
        if (($context["display_footer_primary"] ?? null)) {
            // line 125
            echo "  <div class=\"usa-footer-primary-section\">
    <div class=\"usa-grid\">
      <nav class=\"usa-footer-nav ";
            // line 127
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_menu_width"] ?? null), "html", null, true));
            echo "\">

        ";
            // line 129
            if ($this->getAttribute(($context["page"] ?? null), "footer_menu", array())) {
                // line 130
                echo "        ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_menu", array()), "html", null, true));
                echo "
        ";
            }
            // line 132
            echo "
      </nav>

      ";
            // line 135
            if ((($context["footer_slim"] ?? null) && (($context["phone"] ?? null) || ($context["email"] ?? null)))) {
                // line 136
                echo "      <div class=\"usa-width-one-third\">

        ";
                // line 138
                if (($context["phone"] ?? null)) {
                    // line 139
                    echo "        <div class=\"usa-footer-primary-content usa-footer-contact_info\">
          <p><a href=\"tel:";
                    // line 140
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["phone"] ?? null), "html", null, true));
                    echo "\">";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["phone"] ?? null), "html", null, true));
                    echo "</a></p>
        </div>
        ";
                }
                // line 143
                echo "
        ";
                // line 144
                if (($context["email"] ?? null)) {
                    // line 145
                    echo "        <div class=\"usa-footer-primary-content usa-footer-contact_info\">
          <p><a href=\"mailto:";
                    // line 146
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["email"] ?? null), "html", null, true));
                    echo "\">";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["email"] ?? null), "html", null, true));
                    echo "</a></p>
        </div>
        ";
                }
                // line 149
                echo "
      </div>
      ";
            }
            // line 152
            echo "
      ";
            // line 153
            if ($this->getAttribute(($context["page"] ?? null), "footer", array())) {
                // line 154
                echo "      <div class=\"usa-grid\">
        ";
                // line 155
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
                echo "
      </div>
      ";
            }
            // line 158
            echo "
    </div>
  </div>
  ";
        }
        // line 162
        echo "
  ";
        // line 163
        if (($context["display_footer_secondary"] ?? null)) {
            // line 164
            echo "  <div class=\"usa-footer-secondary_section\">

    ";
            // line 166
            if (($context["display_footer_agency"] ?? null)) {
                // line 167
                echo "    <div class=\"usa-grid\">
      <div class=\"usa-footer-logo
        ";
                // line 169
                if ( !($context["footer_slim"] ?? null)) {
                    echo "usa-width-one-half";
                }
                echo "\">

        ";
                // line 171
                if (($context["footer_agency_url"] ?? null)) {
                    // line 172
                    echo "        <a href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_agency_url"] ?? null), "html", null, true));
                    echo "\">
        ";
                }
                // line 174
                echo "
        ";
                // line 175
                if (($context["footer_agency_logo"] ?? null)) {
                    // line 176
                    echo "        <img class=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_agency_logo_class"] ?? null), "html", null, true));
                    echo "\" src=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_agency_logo"] ?? null), "html", null, true));
                    echo "\" alt=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Agency logo")));
                    echo "\">
        ";
                }
                // line 178
                echo "
        ";
                // line 179
                if (($context["footer_agency_name"] ?? null)) {
                    // line 180
                    echo "        <h3 class=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_agency_heading_class"] ?? null), "html", null, true));
                    echo "\">";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_agency_name"] ?? null), "html", null, true));
                    echo "</h3>
        ";
                }
                // line 182
                echo "
        ";
                // line 183
                if (($context["footer_agency_url"] ?? null)) {
                    // line 184
                    echo "        </a>
        ";
                }
                // line 186
                echo "
      </div>

      ";
                // line 189
                if ( !($context["footer_slim"] ?? null)) {
                    // line 190
                    echo "      <div class=\"usa-footer-contact-links usa-width-one-half\">

        ";
                    // line 192
                    if (($context["facebook"] ?? null)) {
                        // line 193
                        echo "        <a class=\"usa-link-facebook\" href=\"";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["facebook"] ?? null), "html", null, true));
                        echo "\">
          <span>Facebook</span>
        </a>
        ";
                    }
                    // line 197
                    echo "
        ";
                    // line 198
                    if (($context["twitter"] ?? null)) {
                        // line 199
                        echo "        <a class=\"usa-link-twitter\" href=\"";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["twitter"] ?? null), "html", null, true));
                        echo "\">
          <span>Twitter</span>
        </a>
        ";
                    }
                    // line 203
                    echo "
        ";
                    // line 204
                    if (($context["youtube"] ?? null)) {
                        // line 205
                        echo "        <a class=\"usa-link-youtube\" href=\"";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["youtube"] ?? null), "html", null, true));
                        echo "\">
          <span>YouTube</span>
        </a>
        ";
                    }
                    // line 209
                    echo "
        ";
                    // line 210
                    if (($context["rss"] ?? null)) {
                        // line 211
                        echo "        <a class=\"usa-link-rss\" href=\"";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rss"] ?? null), "html", null, true));
                        echo "\">
          <span>RSS</span>
        </a>
        ";
                    }
                    // line 215
                    echo "
        <address>

          ";
                    // line 218
                    if (($context["contact_center"] ?? null)) {
                        // line 219
                        echo "          <h3 class=\"usa-footer-contact-heading\">";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["contact_center"] ?? null), "html", null, true));
                        echo "</h3>
          ";
                    }
                    // line 221
                    echo "
          ";
                    // line 222
                    if (($context["phone"] ?? null)) {
                        // line 223
                        echo "          <p><a href=\"tel:";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["phone"] ?? null), "html", null, true));
                        echo "\">";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["phone"] ?? null), "html", null, true));
                        echo "</a></p>
          ";
                    }
                    // line 225
                    echo "
          ";
                    // line 226
                    if (($context["email"] ?? null)) {
                        // line 227
                        echo "          <a href=\"mailto:";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["email"] ?? null), "html", null, true));
                        echo "\">";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["email"] ?? null), "html", null, true));
                        echo "</a>
          ";
                    }
                    // line 229
                    echo "
        </address>
      </div>
      ";
                }
                // line 233
                echo "
    </div>
    ";
            }
            // line 236
            echo "
    ";
            // line 237
            if ($this->getAttribute(($context["page"] ?? null), "footer_secondary", array())) {
                // line 238
                echo "    <div class=\"usa-grid\">
      ";
                // line 239
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_secondary", array()), "html", null, true));
                echo "
    </div>
    ";
            }
            // line 242
            echo "
  </div>
  ";
        }
        // line 245
        echo "
</footer>
";
    }

    public function getTemplateName()
    {
        return "themes/uswds/templates/system/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  566 => 245,  561 => 242,  555 => 239,  552 => 238,  550 => 237,  547 => 236,  542 => 233,  536 => 229,  528 => 227,  526 => 226,  523 => 225,  515 => 223,  513 => 222,  510 => 221,  504 => 219,  502 => 218,  497 => 215,  489 => 211,  487 => 210,  484 => 209,  476 => 205,  474 => 204,  471 => 203,  463 => 199,  461 => 198,  458 => 197,  450 => 193,  448 => 192,  444 => 190,  442 => 189,  437 => 186,  433 => 184,  431 => 183,  428 => 182,  420 => 180,  418 => 179,  415 => 178,  405 => 176,  403 => 175,  400 => 174,  394 => 172,  392 => 171,  385 => 169,  381 => 167,  379 => 166,  375 => 164,  373 => 163,  370 => 162,  364 => 158,  358 => 155,  355 => 154,  353 => 153,  350 => 152,  345 => 149,  337 => 146,  334 => 145,  332 => 144,  329 => 143,  321 => 140,  318 => 139,  316 => 138,  312 => 136,  310 => 135,  305 => 132,  299 => 130,  297 => 129,  292 => 127,  288 => 125,  286 => 124,  278 => 119,  272 => 115,  266 => 112,  263 => 111,  261 => 110,  255 => 107,  251 => 106,  248 => 105,  242 => 102,  239 => 101,  237 => 100,  229 => 97,  223 => 93,  215 => 88,  210 => 85,  208 => 84,  203 => 82,  198 => 80,  192 => 77,  189 => 76,  183 => 73,  180 => 72,  178 => 71,  173 => 68,  169 => 66,  167 => 65,  161 => 61,  157 => 59,  155 => 58,  152 => 57,  146 => 55,  144 => 54,  141 => 53,  135 => 51,  133 => 50,  130 => 49,  126 => 47,  124 => 46,  121 => 45,  115 => 42,  112 => 41,  110 => 40,  104 => 37,  93 => 29,  89 => 28,  85 => 26,  81 => 24,  79 => 23,  76 => 22,  71 => 19,  65 => 16,  62 => 15,  60 => 14,  55 => 12,  51 => 10,  49 => 9,  43 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/uswds/templates/system/layout/page.html.twig", "/app/web/themes/uswds/templates/system/layout/page.html.twig");
    }
}
