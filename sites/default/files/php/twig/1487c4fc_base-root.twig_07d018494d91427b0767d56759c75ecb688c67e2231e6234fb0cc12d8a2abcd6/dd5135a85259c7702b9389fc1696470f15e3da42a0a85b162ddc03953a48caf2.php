<?php

/* @goteborgdc/base/root/base-root.twig */
class __TwigTemplate_a2bcdc22be47355a52e8b6097640d196a6dbf118a7fa97a1b7e7aff5b7436c60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("block" => 16);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('block'),
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

        // line 13
        echo "<!DOCTYPE html>
<html ";
        // line 14
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["html_attributes"]) ? $context["html_attributes"] : null), "html", null, true));
        echo ">
  <head>
    ";
        // line 16
        $this->displayBlock('head', $context, $blocks);
        // line 19
        echo "  </head>
  <body ";
        // line 20
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">
    ";
        // line 21
        $this->displayBlock('body', $context, $blocks);
        // line 24
        echo "  </body>
</html>
";
    }

    // line 16
    public function block_head($context, array $blocks = array())
    {
        // line 17
        echo "      <title>";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
        echo "</title>
    ";
    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        // line 22
        echo "      ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "@goteborgdc/base/root/base-root.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 22,  80 => 21,  73 => 17,  70 => 16,  64 => 24,  62 => 21,  58 => 20,  55 => 19,  53 => 16,  48 => 14,  45 => 13,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Component for an HTML document.*/
/*  **/
/*  * Variables:*/
/*  * - html_attributes: [string] Attributes for the HTML element.*/
/*  * - title: [string] The page title.*/
/*  * - attributes: [string] Attributes for the BODY element.*/
/*  * - content: [string] The component contents.*/
/*  *//* */
/* #}*/
/* <!DOCTYPE html>*/
/* <html {{ html_attributes }}>*/
/*   <head>*/
/*     {% block head %}*/
/*       <title>{{ title }}</title>*/
/*     {% endblock %}*/
/*   </head>*/
/*   <body {{ attributes }}>*/
/*     {% block body %}*/
/*       {{ content }}*/
/*     {% endblock %}*/
/*   </body>*/
/* </html>*/
/* */
