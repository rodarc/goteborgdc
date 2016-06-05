<?php

/* themes/goteborgdc/templates/navigation/menu-local-tasks.html.twig */
class __TwigTemplate_9d9b214a8e83a88ac932110fedbde36ee9fb00d5d401dc27fd59d250545faad3 extends Twig_Template
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
        $tags = array("if" => 14, "include" => 16);
        $filters = array("t" => 17);
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

        // line 14
        if ((isset($context["primary"]) ? $context["primary"] : null)) {
            // line 15
            echo "  ";
            // line 16
            $this->loadTemplate("@goteborgdc/navigation/tabs/tabs.twig", "themes/goteborgdc/templates/navigation/menu-local-tasks.html.twig", 16)->display(array("heading" => t("Primary tabs"), "modifier_class" => "tabs--primary", "tabs" =>             // line 19
(isset($context["primary"]) ? $context["primary"] : null)));
        }
        // line 23
        if ((isset($context["secondary"]) ? $context["secondary"] : null)) {
            // line 24
            echo "  ";
            // line 25
            $this->loadTemplate("@goteborgdc/navigation/tabs/tabs.twig", "themes/goteborgdc/templates/navigation/menu-local-tasks.html.twig", 25)->display(array("heading" => t("Secondary tabs"), "modifier_class" => "tabs--secondary", "tabs" =>             // line 28
(isset($context["secondary"]) ? $context["secondary"] : null)));
        }
    }

    public function getTemplateName()
    {
        return "themes/goteborgdc/templates/navigation/menu-local-tasks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 28,  55 => 25,  53 => 24,  51 => 23,  48 => 19,  47 => 16,  45 => 15,  43 => 14,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override to display primary and secondary local tasks.*/
/*  **/
/*  * Available variables:*/
/*  * - primary: HTML list items representing primary tasks.*/
/*  * - secondary: HTML list items representing primary tasks.*/
/*  **/
/*  * Each item in these variables (primary and secondary) can be individually*/
/*  * themed in menu-local-task.html.twig.*/
/*  *//* */
/* #}*/
/* {% if primary %}*/
/*   {%*/
/*     include "@goteborgdc/navigation/tabs/tabs.twig" with {*/
/*       heading: 'Primary tabs'|t,*/
/*       modifier_class: 'tabs--primary',*/
/*       tabs: primary*/
/*     } only*/
/*   %}*/
/* {% endif %}*/
/* {% if secondary %}*/
/*   {%*/
/*     include "@goteborgdc/navigation/tabs/tabs.twig" with {*/
/*       heading: 'Secondary tabs'|t,*/
/*       modifier_class: 'tabs--secondary',*/
/*       tabs: secondary*/
/*     } only*/
/*   %}*/
/* {% endif %}*/
/* */
