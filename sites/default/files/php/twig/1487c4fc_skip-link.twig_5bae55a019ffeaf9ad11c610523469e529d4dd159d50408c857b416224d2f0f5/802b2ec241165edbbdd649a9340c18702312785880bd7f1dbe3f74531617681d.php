<?php

/* @goteborgdc/navigation/skip-link/skip-link.twig */
class __TwigTemplate_05ffe9a90d664b2f4420e9498e30411b7bb6c75311fab4c126d7f03bb1021484 extends Twig_Template
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
        $tags = array("block" => 14);
        $filters = array("default" => 13);
        $functions = array("attach_library" => 12);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('block'),
                array('default'),
                array('attach_library')
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

        // line 12
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->attachLibrary("goteborgdc/skip-link"), "html", null, true));
        echo "
<a href=\"";
        // line 13
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((array_key_exists("url", $context)) ? (_twig_default_filter((isset($context["url"]) ? $context["url"] : null), "#main-content")) : ("#main-content")), "html", null, true));
        echo "\" class=\"skip-link ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["modifier_class"]) ? $context["modifier_class"] : null), "html", null, true));
        echo "\">
  ";
        // line 14
        $this->displayBlock('content', $context, $blocks);
        // line 17
        echo "</a>
";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((array_key_exists("text", $context)) ? (_twig_default_filter((isset($context["text"]) ? $context["text"] : null), "Skip to main content")) : ("Skip to main content")), "html", null, true));
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "@goteborgdc/navigation/skip-link/skip-link.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 15,  61 => 14,  56 => 17,  54 => 14,  48 => 13,  44 => 12,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Component for a skip link.*/
/*  **/
/*  * Variables:*/
/*  * - modifier_class: [string] Classes to modify the default component styling.*/
/*  * - url: [string] The url to skip to.*/
/*  * - text: [string] The link text.*/
/*  *//* */
/* #}*/
/* {{ attach_library('goteborgdc/skip-link') }}*/
/* <a href="{{ url|default('#main-content') }}" class="skip-link {{ modifier_class }}">*/
/*   {% block content %}*/
/*     {{ text|default('Skip to main content') }}*/
/*   {% endblock %}*/
/* </a>*/
/* */
