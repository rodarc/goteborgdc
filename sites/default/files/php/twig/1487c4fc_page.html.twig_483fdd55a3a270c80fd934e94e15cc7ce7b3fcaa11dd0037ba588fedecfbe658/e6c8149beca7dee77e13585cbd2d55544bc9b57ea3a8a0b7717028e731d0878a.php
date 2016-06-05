<?php

/* themes/goteborgdc/templates/layout/page.html.twig */
class __TwigTemplate_f3bbfb7bd27f18f32c62fa36b7aff036c1ba14b99e8d42448dc33fa61297b897 extends Twig_Template
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
        $tags = array("if" => 59, "set" => 60);
        $filters = array();
        $functions = array("attach_library" => 48);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'set'),
                array(),
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

        // line 47
        echo "
";
        // line 48
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->attachLibrary("goteborgdc/layouts"), "html", null, true));
        echo "
<div class=\"layout-center\">

  <header class=\"header\" role=\"banner\">
    ";
        // line 52
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "
    ";
        // line 53
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "secondary_menu", array()), "html", null, true));
        echo "
  </header>

  <div class=\"layout-3col\">

    ";
        // line 59
        echo "    ";
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()))) {
            // line 60
            echo "      ";
            $context["content_class"] = "layout-3col__right-content";
            // line 61
            echo "      ";
            $context["sidebar_first_class"] = "layout-3col__first-left-sidebar";
            // line 62
            echo "      ";
            $context["sidebar_second_class"] = "layout-3col__second-left-sidebar";
            // line 63
            echo "    ";
        } elseif ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 64
            echo "      ";
            $context["content_class"] = "layout-3col__left-content";
            // line 65
            echo "      ";
            $context["sidebar_first_class"] = "";
            // line 66
            echo "      ";
            $context["sidebar_second_class"] = "layout-3col__right-sidebar";
            // line 67
            echo "    ";
        } elseif ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 68
            echo "      ";
            $context["content_class"] = "layout-3col__right-content";
            // line 69
            echo "      ";
            $context["sidebar_first_class"] = "layout-3col__left-sidebar";
            // line 70
            echo "      ";
            $context["sidebar_second_class"] = "";
            // line 71
            echo "    ";
        } else {
            // line 72
            echo "      ";
            $context["content_class"] = "layout-3col__full";
            // line 73
            echo "      ";
            $context["sidebar_first_class"] = "";
            // line 74
            echo "      ";
            $context["sidebar_second_class"] = "";
            // line 75
            echo "    ";
        }
        // line 76
        echo "
    <div class=\"layout-3col__full\">
      ";
        // line 78
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array()), "html", null, true));
        echo "
    </div>

    <main class=\"";
        // line 81
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content_class"]) ? $context["content_class"] : null), "html", null, true));
        echo "\" role=\"main\">

      ";
        // line 83
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
        echo "
      ";
        // line 84
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "breadcrumb", array()), "html", null, true));
        echo "
      <a href=\"#skip-link\" class=\"visually-hidden visually-hidden--focusable\" id=\"main-content\">Back to top</a>";
        // line 86
        echo "      ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array()), "html", null, true));
        echo "
      ";
        // line 87
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
        echo "
      ";
        // line 88
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "

    </main>

    ";
        // line 92
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 93
            echo "      <aside class=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["sidebar_first_class"]) ? $context["sidebar_first_class"] : null), "html", null, true));
            echo "\" role=\"complementary\">
        ";
            // line 94
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
            echo "
      </aside>
    ";
        }
        // line 97
        echo "
    ";
        // line 98
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 99
            echo "      <aside class=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["sidebar_second_class"]) ? $context["sidebar_second_class"] : null), "html", null, true));
            echo "\" role=\"complementary\">
        ";
            // line 100
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
            echo "
      </aside>
    ";
        }
        // line 103
        echo "
  </div>

  ";
        // line 106
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
        echo "

</div>";
        // line 109
        echo "
";
        // line 110
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom", array()), "html", null, true));
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/goteborgdc/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 110,  194 => 109,  189 => 106,  184 => 103,  178 => 100,  173 => 99,  171 => 98,  168 => 97,  162 => 94,  157 => 93,  155 => 92,  148 => 88,  144 => 87,  139 => 86,  135 => 84,  131 => 83,  126 => 81,  120 => 78,  116 => 76,  113 => 75,  110 => 74,  107 => 73,  104 => 72,  101 => 71,  98 => 70,  95 => 69,  92 => 68,  89 => 67,  86 => 66,  83 => 65,  80 => 64,  77 => 63,  74 => 62,  71 => 61,  68 => 60,  65 => 59,  57 => 53,  53 => 52,  46 => 48,  43 => 47,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override to display a single page.*/
/*  **/
/*  * The doctype, html, head and body tags are not in this template. Instead they*/
/*  * can be found in the html.html.twig template in this directory.*/
/*  **/
/*  * Available variables:*/
/*  **/
/*  * General utility variables:*/
/*  * - base_path: The base URL path of the Drupal installation. Will usually be*/
/*  *   "/" unless you have installed Drupal in a sub-directory.*/
/*  * - is_front: A flag indicating if the current page is the front page.*/
/*  * - logged_in: A flag indicating if the user is registered and signed in.*/
/*  * - is_admin: A flag indicating if the user has permission to access*/
/*  *   administration pages.*/
/*  **/
/*  * Site identity:*/
/*  * - front_page: The URL of the front page. Use this instead of base_path when*/
/*  *   linking to the front page. This includes the language domain or prefix.*/
/*  **/
/*  * Page content (in order of occurrence in the default page.html.twig):*/
/*  * - node: Fully loaded node, if there is an automatically-loaded node*/
/*  *   associated with the page and the node ID is the second argument in the*/
/*  *   page's path (e.g. node/12345 and node/12345/revisions, but not*/
/*  *   comment/reply/12345).*/
/*  **/
/*  * Regions:*/
/*  * - page.header: Items for the header region.*/
/*  * - page.primary_menu: Items for the primary menu region.*/
/*  * - page.secondary_menu: Items for the secondary menu region.*/
/*  * - page.highlighted: Items for the highlighted content region.*/
/*  * - page.breadcrumb: Items for the breadcrumb region.*/
/*  * - page.title: Items for the title region.*/
/*  * - page.help: Dynamic help text, mostly for admin pages.*/
/*  * - page.content: The main content of the current page.*/
/*  * - page.sidebar_first: Items for the first sidebar.*/
/*  * - page.sidebar_second: Items for the second sidebar.*/
/*  * - page.footer: Items for the footer region.*/
/*  * - page.bottom: Items for the extreme bottom of the page.*/
/*  **/
/*  * @see template_preprocess_page()*/
/*  * @see html.html.twig*/
/*  *//* */
/* #}*/
/* */
/* {{ attach_library('goteborgdc/layouts') }}*/
/* <div class="layout-center">*/
/* */
/*   <header class="header" role="banner">*/
/*     {{ page.header }}*/
/*     {{ page.secondary_menu }}*/
/*   </header>*/
/* */
/*   <div class="layout-3col">*/
/* */
/*     {# Decide on layout classes by checking if sidebars have content. #}*/
/*     {% if page.sidebar_first and page.sidebar_second %}*/
/*       {% set content_class        = 'layout-3col__right-content' %}*/
/*       {% set sidebar_first_class  = 'layout-3col__first-left-sidebar' %}*/
/*       {% set sidebar_second_class = 'layout-3col__second-left-sidebar' %}*/
/*     {% elseif (page.sidebar_second) %}*/
/*       {% set content_class        = 'layout-3col__left-content' %}*/
/*       {% set sidebar_first_class  = '' %}*/
/*       {% set sidebar_second_class = 'layout-3col__right-sidebar' %}*/
/*     {% elseif (page.sidebar_first) %}*/
/*       {% set content_class        = 'layout-3col__right-content' %}*/
/*       {% set sidebar_first_class  = 'layout-3col__left-sidebar' %}*/
/*       {% set sidebar_second_class = '' %}*/
/*     {% else %}*/
/*       {% set content_class        = 'layout-3col__full' %}*/
/*       {% set sidebar_first_class  = '' %}*/
/*       {% set sidebar_second_class = '' %}*/
/*     {% endif %}*/
/* */
/*     <div class="layout-3col__full">*/
/*       {{ page.primary_menu }}*/
/*     </div>*/
/* */
/*     <main class="{{ content_class }}" role="main">*/
/* */
/*       {{ page.highlighted }}*/
/*       {{ page.breadcrumb }}*/
/*       <a href="#skip-link" class="visually-hidden visually-hidden--focusable" id="main-content">Back to top</a>{# link target is in html.html.twig #}*/
/*       {{ page.title }}*/
/*       {{ page.help }}*/
/*       {{ page.content }}*/
/* */
/*     </main>*/
/* */
/*     {% if page.sidebar_first %}*/
/*       <aside class="{{ sidebar_first_class }}" role="complementary">*/
/*         {{ page.sidebar_first }}*/
/*       </aside>*/
/*     {% endif %}*/
/* */
/*     {% if page.sidebar_second %}*/
/*       <aside class="{{ sidebar_second_class }}" role="complementary">*/
/*         {{ page.sidebar_second }}*/
/*       </aside>*/
/*     {% endif %}*/
/* */
/*   </div>*/
/* */
/*   {{ page.footer }}*/
/* */
/* </div>{# /.layout-center #}*/
/* */
/* {{ page.bottom }}*/
/* */
