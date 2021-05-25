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

/* modules/custom/bloque_juego_mates/templates/my-template.html.twig */
class __TwigTemplate_abc490f5f23c1dc9d059a2060be07ca684c9eae24911b2bc6d85d3f12da55969 extends \Twig\Template
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
        // line 3
        echo "<div id=\"tablero\">
    <div id=\"status\">
        <div id=\"posicion_barra\">
            <div id=\"progreso\">
                <div id=\"miBarra\"></div>
                <div class=\"clearfix\"></div>
            </div> 
        </div>
        <div class=\"clearfix\"></div>
    </div>

    <div class=\"clearfix\"></div>

    <div id=\"contenido_tablero\" class=\"tablero_negro\">
        <!-- contenido tablero -->
    </div>

    <div id=\"play_repeat\">
        <span id=\"play\" class=\"sprite-play sprite-play1\"></span>
    </div>

    

    <div id=\"marcador\">
        <div id=\"puntos\"></div>
    </div>

    <div id=\"botones\">
        <span id=\"correcto\" class=\"sprite-correcto sprite-correcto1\"></span>
        <span id=\"incorrecto\" class=\"sprite-incorrecto sprite-incorrecto1\"></span>
    </div> <!-- botones -->
</div>";
    }

    public function getTemplateName()
    {
        return "modules/custom/bloque_juego_mates/templates/my-template.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  32 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# [module]/templates/my-template.html.twig #}
{# variable test_var #}
<div id=\"tablero\">
    <div id=\"status\">
        <div id=\"posicion_barra\">
            <div id=\"progreso\">
                <div id=\"miBarra\"></div>
                <div class=\"clearfix\"></div>
            </div> 
        </div>
        <div class=\"clearfix\"></div>
    </div>

    <div class=\"clearfix\"></div>

    <div id=\"contenido_tablero\" class=\"tablero_negro\">
        <!-- contenido tablero -->
    </div>

    <div id=\"play_repeat\">
        <span id=\"play\" class=\"sprite-play sprite-play1\"></span>
    </div>

    

    <div id=\"marcador\">
        <div id=\"puntos\"></div>
    </div>

    <div id=\"botones\">
        <span id=\"correcto\" class=\"sprite-correcto sprite-correcto1\"></span>
        <span id=\"incorrecto\" class=\"sprite-incorrecto sprite-incorrecto1\"></span>
    </div> <!-- botones -->
</div>", "modules/custom/bloque_juego_mates/templates/my-template.html.twig", "/var/www/mini-juegos-educativos/web/modules/custom/bloque_juego_mates/templates/my-template.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = [];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
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
