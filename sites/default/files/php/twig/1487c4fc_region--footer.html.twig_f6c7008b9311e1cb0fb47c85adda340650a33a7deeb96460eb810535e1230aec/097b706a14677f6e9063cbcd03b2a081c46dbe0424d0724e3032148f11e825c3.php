<?php

/* themes/goteborgdc/templates/layout/region--footer.html.twig */
class __TwigTemplate_78984352da606e4f0b613c6664225d4b3e9dcc156395791105a56b360b6519b7 extends Twig_Template
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
        $tags = array("if" => 15, "include" => 17);
        $filters = array("safe_join" => 18);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'include'),
                array('safe_join'),
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

        // line 15
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 16
            echo "  ";
            // line 17
            $this->loadTemplate("@goteborgdc/components/footer/footer.twig", "themes/goteborgdc/templates/layout/region--footer.html.twig", 17)->display(array("modifier_class" => $this->env->getExtension('drupal_core')->safeJoin($this->env, $this->getAttribute(            // line 18
(isset($context["attributes"]) ? $context["attributes"] : null), "class", array()), " "), "attributes" => $this->getAttribute(            // line 19
(isset($context["attributes"]) ? $context["attributes"] : null), "removeAttribute", array(0 => "class"), "method"), "content" =>             // line 20
(isset($context["content"]) ? $context["content"] : null)));
        }
    }

    public function getTemplateName()
    {
        return "themes/goteborgdc/templates/layout/region--footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 20,  49 => 19,  48 => 18,  47 => 17,  45 => 16,  43 => 15,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override to display the footer region.*/
/*  **/
/*  * Available variables:*/
/*  * - content: The content for this region, typically blocks.*/
/*  * - attributes: HTML attributes for the region div.*/
/*  * - region: The name of the region variable as defined in the theme's*/
/*  *   .info.yml file.*/
/*  **/
/*  * @see template_preprocess_region()*/
/*  *//* */
/* #}*/
/* {% if content %}*/
/*   {%*/
/*     include "@goteborgdc/components/footer/footer.twig" with {*/
/*       modifier_class: attributes.class|safe_join(' '),*/
/*       attributes: attributes.removeAttribute('class'),*/
/*       content: content*/
/*     } only*/
/*   %}*/
/* {% endif %}*/
/* */
