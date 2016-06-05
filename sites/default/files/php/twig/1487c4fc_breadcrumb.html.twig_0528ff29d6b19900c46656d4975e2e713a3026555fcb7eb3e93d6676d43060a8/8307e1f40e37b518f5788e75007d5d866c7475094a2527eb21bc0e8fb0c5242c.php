<?php

/* themes/goteborgdc/templates/navigation/breadcrumb.html.twig */
class __TwigTemplate_e82f1f66c4f54d9c01d9f4fb802ec1681b2d0bf359dc6d0fc3bce65b7b74fc75 extends Twig_Template
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
        $tags = array("if" => 10, "include" => 12);
        $filters = array("t" => 14);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'include'),
                array('t'),
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

        // line 10
        if ((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)) {
            // line 11
            echo "  ";
            // line 12
            $this->loadTemplate("@goteborgdc/navigation/breadcrumb/breadcrumb.twig", "themes/goteborgdc/templates/navigation/breadcrumb.html.twig", 12)->display(array("modifier_class" => "", "heading" => t("Breadcrumb"), "breadcrumb" =>             // line 15
(isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)));
        }
    }

    public function getTemplateName()
    {
        return "themes/goteborgdc/templates/navigation/breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 15,  47 => 12,  45 => 11,  43 => 10,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for a breadcrumb trail.*/
/*  **/
/*  * Available variables:*/
/*  * - breadcrumb: Breadcrumb trail items.*/
/*  *//* */
/* #}*/
/* {% if breadcrumb %}*/
/*   {%*/
/*     include "@goteborgdc/navigation/breadcrumb/breadcrumb.twig" with {*/
/*       modifier_class: '',*/
/*       heading: 'Breadcrumb'|t,*/
/*       breadcrumb: breadcrumb*/
/*     } only*/
/*   %}*/
/* {% endif %}*/
/* */
