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

/* themes/contrib/bootstrap/templates/input/input--form-control.html.twig */
class __TwigTemplate_1581d900cfabde9fef9f3f63ff7ccf637a24488e8e55e2cfacacc71d19ca9427 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'input' => [$this, 'block_input'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "input.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 23
        ob_start();
        // line 25
        $context["classes"] = [0 => "form-control"];
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 1
        $this->parent = $this->loadTemplate("input.html.twig", "themes/contrib/bootstrap/templates/input/input--form-control.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 29
    public function block_input($context, array $blocks = [])
    {
        // line 30
        echo "    <input";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo " />
  ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/bootstrap/templates/input/input--form-control.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 30,  47 => 29,  42 => 1,  39 => 25,  37 => 23,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"input.html.twig\" %}
{#
/**
 * @file
 * Default theme implementation for an 'input__textfield' #type form element.
 *
 * Available variables:
 * - attributes: A list of HTML attributes for the input element.
 * - children: Optional additional rendered elements.
 * - icon: An icon.
 * - input_group: Flag to display as an input group.
 * - icon_position: Where an icon should be displayed.
 * - prefix: Markup to display before the input element.
 * - suffix: Markup to display after the input element.
 * - type: The type of input.
 *
 * @ingroup templates
 *
 * @see \\Drupal\\bootstrap\\Plugin\\Preprocess\\Input
 * @see template_preprocess_input()
 */
#}
{% spaceless %}
  {%
    set classes = [
      'form-control',
    ]
  %}
  {% block input %}
    <input{{ attributes.addClass(classes) }} />
  {% endblock %}
{% endspaceless %}
", "themes/contrib/bootstrap/templates/input/input--form-control.html.twig", "/var/www/mini-juegos-educativos/web/themes/contrib/bootstrap/templates/input/input--form-control.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["spaceless" => 23, "set" => 25];
        static $filters = ["escape" => 30];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['spaceless', 'set'],
                ['escape'],
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
