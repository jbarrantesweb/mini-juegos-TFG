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

/* menu.html.twig */
class __TwigTemplate_353ee098d4d2ef0a066dc5b9124f0c9b976f614fe2b9808d8777141332fc0cc1 extends \Twig\Template
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
        // line 64
        echo "
";
        // line 70
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($this, "menu_links", [0 => ($context["items"] ?? null), 1 => ($context["attributes"] ?? null), 2 => 0, 3 => ((($context["classes"] ?? null)) ? (($context["classes"] ?? null)) : ([0 => "menu", 1 => ("menu--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["menu_name"] ?? null)))), 2 => "nav"])), 4 => ((($context["dropdown_classes"] ?? null)) ? (($context["dropdown_classes"] ?? null)) : ([0 => "dropdown-menu"]))], "method")));
        echo "
";
    }

    // line 22
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, $__classes__ = null, $__dropdown_classes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "classes" => $__classes__,
            "dropdown_classes" => $__dropdown_classes__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 23
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 24
                echo "    <ul";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => (((($context["menu_level"] ?? null) == 0)) ? (($context["classes"] ?? null)) : (($context["dropdown_classes"] ?? null)))], "method")), "html", null, true);
                echo ">
    ";
                // line 25
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 26
                    echo "      ";
                    // line 27
                    $context["item_classes"] = twig_split_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "url", []), "getOption", [0 => "container_attributes"], "method"), "class", [])), " ");
                    // line 29
                    echo "      ";
                    // line 30
                    $context["item_classes"] = [0 => ((($this->getAttribute(                    // line 31
$context["item"], "is_expanded", []) && $this->getAttribute($context["item"], "below", []))) ? ("expanded dropdown") : ("")), 1 => (($this->getAttribute(                    // line 32
$context["item"], "in_active_trail", [])) ? ("active active-trail") : ("")), 2 => (($this->getAttribute(                    // line 33
$context["loop"], "first", [])) ? ("first") : ("")), 3 => (($this->getAttribute(                    // line 34
$context["loop"], "last", [])) ? ("last") : (""))];
                    // line 37
                    echo "      <li";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["item"], "attributes", []), "addClass", [0 => ($context["item_classes"] ?? null)], "method")), "html", null, true);
                    echo ">
       
      
        ";
                    // line 40
                    $context["link_title"] = $this->getAttribute($context["item"], "title", []);
                    // line 41
                    echo "        ";
                    $context["link_attributes"] = $this->getAttribute($context["item"], "link_attributes", []);
                    // line 42
                    echo "        ";
                    if ((((($context["menu_level"] ?? null) == 0) && $this->getAttribute($context["item"], "is_expanded", [])) && $this->getAttribute($context["item"], "below", []))) {
                        // line 43
                        echo "              
        ";
                        // line 44
                        ob_start();
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link_title"] ?? null)), "html", null, true);
                        echo " <span class=\"caret\"></span>";
                        $context["link_title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                        // line 45
                        echo "        ";
                        $context["link_attributes"] = $this->getAttribute($this->getAttribute(($context["link_attributes"] ?? null), "addClass", [0 => "dropdown-toggle"], "method"), "setAttribute", [0 => "data-toggle", 1 => "dropdown"], "method");
                        // line 46
                        echo "        ";
                    }
                    // line 47
                    echo "          ";
                    if ($this->getAttribute($context["loop"], "first", [])) {
                        // line 48
                        echo "            ";
                        if (($this->getAttribute($context["item"], "title", []) == "My account")) {
                            // line 49
                            echo "                  <span class=\"welcome-menu\">Bienvenido!</span>
            ";
                        }
                        // line 50
                        echo "  
          ";
                    }
                    // line 52
                    echo "        ";
                    // line 53
                    echo "        ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink($this->sandbox->ensureToStringAllowed(($context["link_title"] ?? null)), $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "url", [])), $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["link_attributes"] ?? null), "addClass", [0 => (($this->getAttribute($context["item"], "in_active_trail", [])) ? ("active-trail") : (""))], "method"))), "html", null, true);
                    echo "
        
        
        ";
                    // line 56
                    if ($this->getAttribute($context["item"], "below", [])) {
                        // line 57
                        echo "          ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($this, "menu_links", [0 => $this->getAttribute($context["item"], "below", []), 1 => $this->getAttribute(($context["attributes"] ?? null), "removeClass", [0 => ($context["classes"] ?? null)], "method"), 2 => (($context["menu_level"] ?? null) + 1), 3 => ($context["classes"] ?? null), 4 => ($context["dropdown_classes"] ?? null)], "method")));
                        echo "
        ";
                    }
                    // line 59
                    echo "      </li>
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
                // line 61
                echo "    </ul>
  ";
            }
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 61,  154 => 59,  148 => 57,  146 => 56,  139 => 53,  137 => 52,  133 => 50,  129 => 49,  126 => 48,  123 => 47,  120 => 46,  117 => 45,  112 => 44,  109 => 43,  106 => 42,  103 => 41,  101 => 40,  94 => 37,  92 => 34,  91 => 33,  90 => 32,  89 => 31,  88 => 30,  86 => 29,  84 => 27,  82 => 26,  65 => 25,  60 => 24,  57 => 23,  41 => 22,  35 => 70,  32 => 64,);
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
 * Default theme implementation to display a menu.
 *
 * Available variables:
 * - classes: A list of classes to apply to the top level <ul> element.
 * - dropdown_classes: A list of classes to apply to the dropdown <ul> element.
 * - menu_name: The machine name of the menu.
 * - items: A nested list of menu items. Each menu item contains:
 *   - attributes: HTML attributes for the menu item.
 *   - below: The menu item child items.
 *   - title: The menu link title.
 *   - url: The menu link url, instance of \\Drupal\\Core\\Url
 *   - localized_options: Menu link localized options.
 *
 * @ingroup templates
 *
 * Define a custom macro that will render all menu trees.
 */
#}
{% macro menu_links(items, attributes, menu_level, classes, dropdown_classes) %}
  {% if items %}
    <ul{{ attributes.addClass(menu_level == 0 ? classes : dropdown_classes) }}>
    {% for item in items %}
      {%
        set item_classes = item.url.getOption('container_attributes').class | split(\" \")
      %}
      {%
        set item_classes = [
          item.is_expanded and item.below ? 'expanded dropdown',
          item.in_active_trail ? 'active active-trail',
          loop.first ? 'first',
          loop.last ? 'last',
        ]
      %}
      <li{{ item.attributes.addClass(item_classes) }}>
       
      
        {% set link_title = item.title %}
        {% set link_attributes = item.link_attributes %}
        {% if menu_level == 0 and item.is_expanded and item.below %}
              
        {% set link_title %}{{ link_title }} <span class=\"caret\"></span>{% endset %}
        {% set link_attributes = link_attributes.addClass('dropdown-toggle').setAttribute('data-toggle', 'dropdown') %}
        {% endif %}
          {% if loop.first %}
            {% if item.title == \"My account\" %}
                  <span class=\"welcome-menu\">Bienvenido!</span>
            {% endif %}  
          {% endif %}
        {# Must use link() here so it triggers hook_link_alter(). #}
        {{ link(link_title, item.url, link_attributes.addClass(item.in_active_trail ? 'active-trail')) }}
        
        
        {% if item.below %}
          {{ _self.menu_links(item.below, attributes.removeClass(classes), menu_level + 1, classes, dropdown_classes) }}
        {% endif %}
      </li>
    {% endfor %}
    </ul>
  {% endif %}
{% endmacro %}

{#
  Invoke the custom macro defined above. If classes were provided, use them.
  This allows the template to be extended without having to also duplicate the
  code above. @see http://twig.sensiolabs.org/doc/tags/macro.html
#}
{{ _self.menu_links(items, attributes, 0, classes ?: ['menu', 'menu--' ~ menu_name|clean_class, 'nav'], dropdown_classes ?: ['dropdown-menu']) }}
", "menu.html.twig", "themes/custom/bootstrap_custom/templates/menu.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["macro" => 22, "if" => 23, "for" => 25, "set" => 27];
        static $filters = ["clean_class" => 70, "escape" => 24, "split" => 27];
        static $functions = ["link" => 53];

        try {
            $this->sandbox->checkSecurity(
                ['macro', 'if', 'for', 'set'],
                ['clean_class', 'escape', 'split'],
                ['link']
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
