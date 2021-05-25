<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modules/contrib/ds/templates/ds-2col-fluid.html.twig */
class __TwigTemplate_7a27fbabc31c0d9a3c0f923bd359a279c66dc40a5888a9612acfd51638766fef extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 17
        echo "
";
        // line 18
        $context["left"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["left"] ?? null)));
        // line 19
        $context["right"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["right"] ?? null)));
        // line 20
        echo "
";
        // line 21
        if (((($context["left"] ?? null) &&  !($context["right"] ?? null)) || (($context["right"] ?? null) &&  !($context["left"] ?? null)))) {
            // line 22
            echo "  ";
            $context["layout_class"] = "group-one-column";
        }
        // line 24
        echo "
<";
        // line 25
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["outer_wrapper"] ?? null)), "html", null, true);
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["layout_class"] ?? null), 1 => "ds-2col-fluid", 2 => "clearfix"], "method")), "html", null, true);
        echo ">

  ";
        // line 27
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["title_suffix"] ?? null), "contextual_links", [])), "html", null, true);
        echo "

  ";
        // line 29
        if (($context["left"] ?? null)) {
            // line 30
            echo "    <";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["left_wrapper"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["left_attributes"] ?? null), "addClass", [0 => "group-left"], "method")), "html", null, true);
            echo ">
      ";
            // line 31
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["left"] ?? null)), "html", null, true);
            echo "
    </";
            // line 32
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["left_wrapper"] ?? null)), "html", null, true);
            echo ">
  ";
        }
        // line 34
        echo "
  ";
        // line 35
        if (($context["right"] ?? null)) {
            // line 36
            echo "    <";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["right_wrapper"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["right_attributes"] ?? null), "addClass", [0 => "group-right"], "method")), "html", null, true);
            echo ">
      ";
            // line 37
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["right"] ?? null)), "html", null, true);
            echo "
    </";
            // line 38
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["right_wrapper"] ?? null)), "html", null, true);
            echo ">
  ";
        }
        // line 40
        echo "
</";
        // line 41
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["outer_wrapper"] ?? null)), "html", null, true);
        echo ">
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/ds/templates/ds-2col-fluid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 41,  99 => 40,  94 => 38,  90 => 37,  84 => 36,  82 => 35,  79 => 34,  74 => 32,  70 => 31,  64 => 30,  62 => 29,  57 => 27,  51 => 25,  48 => 24,  44 => 22,  42 => 21,  39 => 20,  37 => 19,  35 => 18,  32 => 17,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Display Suite fluid 2 column template.
 *
 * Available variables:
 * - outer_wrapper: outer wrapper element
 * - left_wrapper: wrapper element around left region
 * - right_wrapper: wrapper element around right region
 * - attributes: layout attributes
 * - left_attributes: attributes for left region
 * - right_attributes: attributes for right region
 * - left: content of left region
 * - right: content of right region
 */
#}

{% set left = left|render %}
{% set right = right|render %}

{% if (left and not right) or (right and not left) %}
  {% set layout_class = 'group-one-column' %}
{% endif %}

<{{ outer_wrapper }}{{ attributes.addClass(layout_class, 'ds-2col-fluid', 'clearfix') }}>

  {{ title_suffix.contextual_links }}

  {% if left %}
    <{{ left_wrapper }}{{ left_attributes.addClass('group-left') }}>
      {{ left }}
    </{{ left_wrapper }}>
  {% endif %}

  {% if right %}
    <{{ right_wrapper }}{{ right_attributes.addClass('group-right') }}>
      {{ right }}
    </{{ right_wrapper }}>
  {% endif %}

</{{ outer_wrapper }}>
", "modules/contrib/ds/templates/ds-2col-fluid.html.twig", "/var/www/mini-juegos-educativos/web/modules/contrib/ds/templates/ds-2col-fluid.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 18, "if" => 21];
        static $filters = ["render" => 18, "escape" => 25];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['render', 'escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
