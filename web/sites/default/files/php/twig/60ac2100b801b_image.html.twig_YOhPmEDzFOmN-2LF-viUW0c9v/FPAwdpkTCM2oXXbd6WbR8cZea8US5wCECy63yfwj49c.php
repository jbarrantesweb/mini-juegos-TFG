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

/* themes/contrib/bootstrap/templates/system/image.html.twig */
class __TwigTemplate_21ecb67808a15a570fcc4b9e44cd5699660de5c973cb1f9c7cbb164a0868b22c extends \Twig\Template
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
        // line 15
        $context["classes"] = [0 => (($this->getAttribute($this->getAttribute(        // line 16
($context["theme"] ?? null), "settings", []), "image_shape", [])) ? ($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "image_shape", [])) : ("")), 1 => (($this->getAttribute($this->getAttribute(        // line 17
($context["theme"] ?? null), "settings", []), "image_responsive", [])) ? ("img-responsive") : (""))];
        // line 19
        echo "<img";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo " />
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/bootstrap/templates/system/image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 19,  34 => 17,  33 => 16,  32 => 15,);
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
 * Default theme implementation of an image.
 *
 * Available variables:
 * - attributes: HTML attributes for the img tag.
 * - style_name: (optional) The name of the image style applied.
 *
 * @ingroup templates
 *
 * @see template_preprocess_image()
 */
#}
{% set classes = [
  theme.settings.image_shape ? theme.settings.image_shape,
  theme.settings.image_responsive ? 'img-responsive',
] %}
<img{{ attributes.addClass(classes) }} />
", "themes/contrib/bootstrap/templates/system/image.html.twig", "/var/www/mini-juegos-educativos/web/themes/contrib/bootstrap/templates/system/image.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 15];
        static $filters = ["escape" => 19];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set'],
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
