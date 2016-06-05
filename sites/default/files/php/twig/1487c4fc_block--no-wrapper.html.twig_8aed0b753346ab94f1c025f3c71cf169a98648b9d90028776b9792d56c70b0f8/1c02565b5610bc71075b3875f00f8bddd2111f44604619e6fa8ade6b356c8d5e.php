<?php

/* block--no-wrapper.html.twig */
class __TwigTemplate_186a1dd755400f7f44b7fe1967e4a0269918ff4f0e2ed2f59fec7accf1256545 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@goteborgdc/containers/no-wrapper/no-wrapper.twig", "block--no-wrapper.html.twig", 1);
        $this->blocks = array(
            'heading' => array($this, 'block_heading'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@goteborgdc/containers/no-wrapper/no-wrapper.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 31, "set" => 32);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'set'),
                array(),
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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 29
    public function block_heading($context, array $blocks = array())
    {
        // line 30
        echo "  ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
        echo "
  ";
        // line 31
        if ((isset($context["label"]) ? $context["label"] : null)) {
            // line 32
            echo "    ";
            $context["heading"] = (isset($context["label"]) ? $context["label"] : null);
            // line 33
            echo "    ";
            $context["headingAttributes"] = (isset($context["title_attributes"]) ? $context["title_attributes"] : null);
            // line 34
            echo "    ";
            $this->displayParentBlock("heading", $context, $blocks);
            echo "
  ";
        }
        // line 36
        echo "  ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
        echo "
";
    }

    public function getTemplateName()
    {
        return "block--no-wrapper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 36,  68 => 34,  65 => 33,  62 => 32,  60 => 31,  55 => 30,  52 => 29,  11 => 1,);
    }
}
/* {% extends "@goteborgdc/containers/no-wrapper/no-wrapper.twig" %}*/
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override to display a block.*/
/*  **/
/*  * Available variables:*/
/*  * - plugin_id: The ID of the block implementation.*/
/*  * - label: The configured label of the block if visible.*/
/*  * - configuration: A list of the block's configuration values.*/
/*  *   - label: The configured label for the block.*/
/*  *   - label_display: The display settings for the label.*/
/*  *   - provider: The module or other provider that provided this block plugin.*/
/*  *   - Block plugin specific settings will also be stored here.*/
/*  * - content: The content of this block.*/
/*  * - attributes: array of HTML attributes populated by modules, intended to*/
/*  *   be added to the main container tag of this template.*/
/*  *   - id: A valid HTML ID and guaranteed unique.*/
/*  * - title_attributes: Same as attributes, except applied to the main title*/
/*  *   tag that appears in the template.*/
/*  * - title_prefix: Additional output populated by modules, intended to be*/
/*  *   displayed in front of the main title tag that appears in the template.*/
/*  * - title_suffix: Additional output populated by modules, intended to be*/
/*  *   displayed after the main title tag that appears in the template.*/
/*  **/
/*  * @see template_preprocess_block()*/
/*  *//* */
/* #}*/
/* {% block heading %}*/
/*   {{ title_prefix }}*/
/*   {% if label %}*/
/*     {% set heading = label %}*/
/*     {% set headingAttributes = title_attributes %}*/
/*     {{ parent() }}*/
/*   {% endif %}*/
/*   {{ title_suffix }}*/
/* {% endblock %}*/
/* */
