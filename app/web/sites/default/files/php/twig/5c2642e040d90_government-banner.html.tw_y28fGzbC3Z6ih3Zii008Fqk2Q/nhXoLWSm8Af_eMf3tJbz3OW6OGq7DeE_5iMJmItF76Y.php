<?php

/* themes/uswds/templates/uswds/government-banner.html.twig */
class __TwigTemplate_371d5aa8209072dca84c735015fa374fa9d71dfa3b58c626620ec79ecc65d717 extends Twig_Template
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
        $tags = array();
        $filters = array("t" => 5);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array('t'),
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

        // line 1
        echo "<div class=\"usa-accordion\">
  <header class=\"usa-banner-header\">
    <div class=\"usa-grid usa-banner-inner\">
    <img src=\"";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["image_base"] ?? null), "html", null, true));
        echo "/favicons/favicon-57.png\" alt=\"U.S. flag\">
    <p>";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("An official website of the United States government")));
        echo "</p>
    <button class=\"usa-accordion-button usa-banner-button\"
      aria-expanded=\"false\" aria-controls=\"gov-banner\">
      <span class=\"usa-banner-button-text\">";
        // line 8
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Here's how you know")));
        echo "</span>
    </button>
    </div>
  </header>
  <div class=\"usa-banner-content usa-grid usa-accordion-content\" id=\"gov-banner\">
    <div class=\"usa-banner-guidance-gov usa-width-one-half\">
      <img class=\"usa-banner-icon usa-media_block-img\" src=\"";
        // line 14
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["image_base"] ?? null), "html", null, true));
        echo "/icon-dot-gov.svg\" alt=\"Dot gov\">
      <div class=\"usa-media_block-body\">
        <p>
          <strong>";
        // line 17
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("The .gov means it’s official.")));
        echo "</strong>
          <br>
          ";
        // line 19
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Federal government websites always use a .gov or .mil domain. Before sharing sensitive information online, make sure you’re on a .gov or .mil site by inspecting your browser’s address (or “location”) bar.")));
        echo "
        </p>
      </div>
    </div>
    <div class=\"usa-banner-guidance-ssl usa-width-one-half\">
      <img class=\"usa-banner-icon usa-media_block-img\" src=\"";
        // line 24
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["image_base"] ?? null), "html", null, true));
        echo "/icon-https.svg\" alt=\"SSL\">
      <div class=\"usa-media_block-body\">
        <p>";
        // line 26
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("This site is also protected by an SSL (Secure Sockets Layer) certificate that’s been signed by the U.S. government. The <strong>https://</strong> means all transmitted data is encrypted  — in other words, any information or browsing history that you provide is transmitted securely.")));
        echo "</p>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/uswds/templates/uswds/government-banner.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 26,  86 => 24,  78 => 19,  73 => 17,  67 => 14,  58 => 8,  52 => 5,  48 => 4,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/uswds/templates/uswds/government-banner.html.twig", "/app/web/themes/uswds/templates/uswds/government-banner.html.twig");
    }
}
