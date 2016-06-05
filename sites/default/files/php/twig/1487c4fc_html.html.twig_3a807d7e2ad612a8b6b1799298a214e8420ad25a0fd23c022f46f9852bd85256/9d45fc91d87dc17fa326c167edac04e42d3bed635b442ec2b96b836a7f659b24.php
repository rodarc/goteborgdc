<?php

/* themes/goteborgdc/templates/layout/html.html.twig */
class __TwigTemplate_32f1b322b642e96fd3c8d1007144fbc618a7500acc4998e3ae5ff8f437647aab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@goteborgdc/base/root/base-root.twig", "themes/goteborgdc/templates/layout/html.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@goteborgdc/base/root/base-root.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 28, "include" => 46);
        $filters = array("clean_class" => 30, "safe_join" => 35, "raw" => 38, "t" => 49);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'include'),
                array('clean_class', 'safe_join', 'raw', 't'),
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

        // line 28
        $context["attributes"] = $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => array(0 => ((        // line 29
(isset($context["logged_in"]) ? $context["logged_in"] : null)) ? ("is-logged-in-user") : ("")), 1 => (( !        // line 30
(isset($context["root_path"]) ? $context["root_path"] : null)) ? ("is-path-frontpage") : (("is-path-" . \Drupal\Component\Utility\Html::getClass((isset($context["root_path"]) ? $context["root_path"] : null))))), 2 => ((        // line 31
(isset($context["node_type"]) ? $context["node_type"] : null)) ? (("is-page-node-type-" . \Drupal\Component\Utility\Html::getClass((isset($context["node_type"]) ? $context["node_type"] : null)))) : ("")), 3 => ((        // line 32
(isset($context["db_offline"]) ? $context["db_offline"] : null)) ? ("is-db-offline") : ("")))), "method");
        // line 35
        $context["title"] = $this->env->getExtension('drupal_core')->safeJoin($this->env, (isset($context["head_title"]) ? $context["head_title"] : null), " | ");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 37
    public function block_head($context, array $blocks = array())
    {
        // line 38
        echo "  <head-placeholder token=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">
  ";
        // line 39
        $this->displayParentBlock("head", $context, $blocks);
        echo "
  <css-placeholder token=\"";
        // line 40
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">
  <js-placeholder token=\"";
        // line 41
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">
";
    }

    // line 44
    public function block_body($context, array $blocks = array())
    {
        // line 45
        echo "  ";
        // line 46
        $this->loadTemplate("@goteborgdc/navigation/skip-link/skip-link.twig", "themes/goteborgdc/templates/layout/html.html.twig", 46)->display(array("modifier_class" => "visually-hidden visually-hidden--focusable", "url" => "#main-content", "text" => t("Skip to main content")));
        // line 52
        echo "  ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page_top"]) ? $context["page_top"] : null), "html", null, true));
        echo "
  ";
        // line 53
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true));
        echo "
  ";
        // line 54
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page_bottom"]) ? $context["page_bottom"] : null), "html", null, true));
        echo "
  <js-bottom-placeholder token=\"";
        // line 55
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">
";
    }

    public function getTemplateName()
    {
        return "themes/goteborgdc/templates/layout/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 55,  100 => 54,  96 => 53,  91 => 52,  89 => 46,  87 => 45,  84 => 44,  78 => 41,  74 => 40,  70 => 39,  65 => 38,  62 => 37,  58 => 1,  56 => 35,  54 => 32,  53 => 31,  52 => 30,  51 => 29,  50 => 28,  11 => 1,);
    }
}
/* {% extends "@goteborgdc/base/root/base-root.twig" %}*/
/* {#*/
/* /***/
/*  * @file*/
/*  * Returns the HTML for the basic structure of a single Drupal page.*/
/*  **/
/*  * Variables:*/
/*  * - logged_in: A flag indicating if user is logged in.*/
/*  * - root_path: The root path of the current page (e.g., node, admin, user).*/
/*  * - node_type: The content type for the current node, if the page is a node.*/
/*  * - head_title: List of text elements that make up the head_title variable.*/
/*  *   May contain or more of the following:*/
/*  *   - title: The title of the page.*/
/*  *   - name: The name of the site.*/
/*  *   - slogan: The slogan of the site.*/
/*  * - page_top: Initial rendered markup. This should be printed before 'page'.*/
/*  * - page: The rendered page markup.*/
/*  * - page_bottom: Closing rendered markup. This variable should be printed after*/
/*  *   'page'.*/
/*  * - db_offline: A flag indicating if the database is offline.*/
/*  * - placeholder_token: The token for generating head, css, js and js-bottom*/
/*  *   placeholders.*/
/*  **/
/*  * @see template_preprocess_html()*/
/*  *//* */
/* #}*/
/* {%*/
/*   set attributes = attributes.addClass([*/
/*     logged_in ? 'is-logged-in-user',*/
/*     not root_path ? 'is-path-frontpage' : 'is-path-' ~ root_path|clean_class,*/
/*     node_type ? 'is-page-node-type-' ~ node_type|clean_class,*/
/*     db_offline ? 'is-db-offline',*/
/*   ])*/
/* %}*/
/* {% set title = head_title|safe_join(' | ') %}*/
/* */
/* {% block head %}*/
/*   <head-placeholder token="{{ placeholder_token|raw }}">*/
/*   {{ parent() }}*/
/*   <css-placeholder token="{{ placeholder_token|raw }}">*/
/*   <js-placeholder token="{{ placeholder_token|raw }}">*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*   {%*/
/*     include "@goteborgdc/navigation/skip-link/skip-link.twig" with {*/
/*       modifier_class: 'visually-hidden visually-hidden--focusable',*/
/*       url: '#main-content',*/
/*       text: 'Skip to main content'|t*/
/*     } only*/
/*   %}*/
/*   {{ page_top }}*/
/*   {{ page }}*/
/*   {{ page_bottom }}*/
/*   <js-bottom-placeholder token="{{ placeholder_token|raw }}">*/
/* {% endblock %}*/
/* */
