<?php

/* themes/adaptivetheme/at_core/templates/block/block--responsive-menu.html.twig */
class __TwigTemplate_40b6d6ed2bedde56a9d85ecea856972f84e285ca7e433cd795eb668d8081a2f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 29, "block" => 62, "if" => 65);
        $filters = array("clean_class" => 31, "clean_id" => 36, "t" => 37, "without" => 50);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'block', 'if'),
                array('clean_class', 'clean_id', 't', 'without'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 29
        $context["classes"] = array(0 => "rm-block", 1 => ("rm-config-provider--" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 31
(isset($context["configuration"]) ? $context["configuration"] : null), "provider", array()))), 2 => ("rm-plugin-id--" . \Drupal\Component\Utility\Html::getClass(        // line 32
(isset($context["plugin_id_clean"]) ? $context["plugin_id_clean"] : null))), 3 => "js-hide");
        // line 36
        $context["heading_id"] = ($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "id", array()) . \Drupal\Component\Utility\Html::getId("-menu"));
        // line 37
        $context["config_label"] = (($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "label", array())) ? ($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "label", array())) : (t("Main menu")));
        // line 38
        $context["rm_label_class"] = (($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "label", array())) ? ("rm-toggle__label") : ("visually-hidden"));
        // line 40
        echo "<svg style=\"display:none;\">
  ";
        // line 42
        echo "  <symbol id=\"rm-toggle__icon--open\" viewBox=\"0 0 1792 1792\" preserveAspectRatio=\"xMinYMid meet\">
    <path class=\"rm-toggle__icon__path\" d=\"M1664 1344v128q0 26-19 45t-45 19h-1408q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h1408q26 0 45 19t19 45zm0-512v128q0 26-19 45t-45 19h-1408q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h1408q26 0 45 19t19 45zm0-512v128q0 26-19 45t-45 19h-1408q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h1408q26 0 45 19t19 45z\"/>
  </symbol>
  ";
        // line 46
        echo "  <symbol id=\"rm-toggle__icon--close\" viewBox=\"0 0 1792 1792\" preserveAspectRatio=\"xMinYMid meet\">
    <path class=\"rm-toggle__icon__path\" d=\"M1490 1322q0 40-28 68l-136 136q-28 28-68 28t-68-28l-294-294-294 294q-28 28-68 28t-68-28l-136-136q-28-28-28-68t28-68l294-294-294-294q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 294 294-294q28-28 68-28t68 28l136 136q28 28 28 68t-28 68l-294 294 294 294q28 28 28 68z\"/>
  </symbol>
</svg>
<nav role=\"navigation\" aria-labelledby=\"";
        // line 50
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["heading_id"]) ? $context["heading_id"] : null), "html", null, true));
        echo "\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "role", "aria-labelledby"), "html", null, true));
        echo ">
  <div class=\"rm-block__inner\">
    <div";
        // line 52
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without($this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "addClass", array(0 => "rm-toggle"), "method"), "id"), "html", null, true));
        echo ">
      <button href=\"#rm-content\" class=\"rm-toggle__link un-button\" role='button' aria-controls=\"rm-content\" aria-expanded=\"false\">
        ";
        // line 55
        echo "        <svg class=\"rm-toggle__icon\">
          <use id=\"rm-toggle__icon--use\" xlink:href=\"#rm-toggle__icon--open\"></use>
        </svg>
        ";
        // line 59
        echo "        <span class=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["rm_label_class"]) ? $context["rm_label_class"] : null), "html", null, true));
        echo "\" id=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["heading_id"]) ? $context["heading_id"] : null), "html", null, true));
        echo "\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["config_label"]) ? $context["config_label"] : null), "html", null, true));
        echo "</span>
      </button>
    </div>";
        // line 62
        $this->displayBlock('content', $context, $blocks);
        // line 75
        echo "</div>
</nav>
";
    }

    // line 62
    public function block_content($context, array $blocks = array())
    {
        // line 63
        echo "<div class=\"rm-block__content\" id=\"rm-content\">
        ";
        // line 65
        if ((isset($context["click_menus_enabled"]) ? $context["click_menus_enabled"] : null)) {
            // line 66
            echo "<span id=\"rm-accordion-trigger\" class=\"hidden\">
            <button class=\"rm-accordion-trigger un-button\" role='button' aria-controls=\"child-menu\" aria-expanded=\"false\">
              <svg class=\"rm-accordion-trigger__icon\" viewBox=\"0 0 1792 1792\" preserveAspectRatio=\"xMinYMid meet\"><path d=\"M1600 736v192q0 40-28 68t-68 28h-416v416q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-416h-416q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h416v-416q0-40 28-68t68-28h192q40 0 68 28t28 68v416h416q40 0 68 28t28 68z\"/></svg>
            </button>
          </span>";
        }
        // line 72
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
        // line 73
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "themes/adaptivetheme/at_core/templates/block/block--responsive-menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 73,  118 => 72,  111 => 66,  109 => 65,  106 => 63,  103 => 62,  97 => 75,  95 => 62,  85 => 59,  80 => 55,  75 => 52,  68 => 50,  62 => 46,  57 => 42,  54 => 40,  52 => 38,  50 => 37,  48 => 36,  46 => 32,  45 => 31,  44 => 29,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme override to display a block.
 *
 * Available variables:
 * - plugin_id: The ID of the block implementation.
 * - label: The configured label of the block if visible.
 * - configuration: A list of the block's configuration values.
 *   - label: The configured label for the block.
 *   - label_display: The display settings for the label.
 *   - provider: The module or other provider that provided this block plugin.
 *   - Block plugin specific settings will also be stored here.
 * - content: The content of this block.
 * - attributes: array of HTML attributes populated by modules, intended to
 *   be added to the main container tag of this template.
 *   - id: A valid HTML ID and guaranteed unique.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 *
 * @see template_preprocess_block()
 */
#}
{%-
  set classes = [
    'rm-block',
    'rm-config-provider--' ~ configuration.provider|clean_class,
    'rm-plugin-id--' ~ plugin_id_clean|clean_class,
    'js-hide',
  ]
-%}
{%- set heading_id = attributes.id ~ '-menu'|clean_id -%}
{%- set config_label = configuration.label ? configuration.label : 'Main menu'|t -%}
{%- set rm_label_class = configuration.label ? 'rm-toggle__label' : 'visually-hidden' -%}
{# The svg must come before the <use> elements due to a bug in Safari. #}
<svg style=\"display:none;\">
  {# Toggle Icon open #}
  <symbol id=\"rm-toggle__icon--open\" viewBox=\"0 0 1792 1792\" preserveAspectRatio=\"xMinYMid meet\">
    <path class=\"rm-toggle__icon__path\" d=\"M1664 1344v128q0 26-19 45t-45 19h-1408q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h1408q26 0 45 19t19 45zm0-512v128q0 26-19 45t-45 19h-1408q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h1408q26 0 45 19t19 45zm0-512v128q0 26-19 45t-45 19h-1408q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h1408q26 0 45 19t19 45z\"/>
  </symbol>
  {# Toggle Icon close #}
  <symbol id=\"rm-toggle__icon--close\" viewBox=\"0 0 1792 1792\" preserveAspectRatio=\"xMinYMid meet\">
    <path class=\"rm-toggle__icon__path\" d=\"M1490 1322q0 40-28 68l-136 136q-28 28-68 28t-68-28l-294-294-294 294q-28 28-68 28t-68-28l-136-136q-28-28-28-68t28-68l294-294-294-294q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 294 294-294q28-28 68-28t68 28l136 136q28 28 28 68t-28 68l-294 294 294 294q28 28 28 68z\"/>
  </symbol>
</svg>
<nav role=\"navigation\" aria-labelledby=\"{{ heading_id }}\"{{ attributes.addClass(classes)|without('role', 'aria-labelledby') }}>
  <div class=\"rm-block__inner\">
    <div{{ title_attributes.addClass('rm-toggle')|without('id') }}>
      <button href=\"#rm-content\" class=\"rm-toggle__link un-button\" role='button' aria-controls=\"rm-content\" aria-expanded=\"false\">
        {# SVG open and close icons. #}
        <svg class=\"rm-toggle__icon\">
          <use id=\"rm-toggle__icon--use\" xlink:href=\"#rm-toggle__icon--open\"></use>
        </svg>
        {# Button text, may be visually hidden. #}
        <span class=\"{{ rm_label_class }}\" id=\"{{ heading_id }}\">{{- config_label -}}</span>
      </button>
    </div>
    {%- block content -%}
      <div class=\"rm-block__content\" id=\"rm-content\">
        {# SVG accordion trigger icon. #}
        {%- if click_menus_enabled -%}
          <span id=\"rm-accordion-trigger\" class=\"hidden\">
            <button class=\"rm-accordion-trigger un-button\" role='button' aria-controls=\"child-menu\" aria-expanded=\"false\">
              <svg class=\"rm-accordion-trigger__icon\" viewBox=\"0 0 1792 1792\" preserveAspectRatio=\"xMinYMid meet\"><path d=\"M1600 736v192q0 40-28 68t-68 28h-416v416q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-416h-416q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h416v-416q0-40 28-68t68-28h192q40 0 68 28t28 68v416h416q40 0 68 28t28 68z\"/></svg>
            </button>
          </span>
        {%- endif -%}
        {{- content -}}
      </div>
    {%- endblock -%}
  </div>
</nav>
";
    }
}
