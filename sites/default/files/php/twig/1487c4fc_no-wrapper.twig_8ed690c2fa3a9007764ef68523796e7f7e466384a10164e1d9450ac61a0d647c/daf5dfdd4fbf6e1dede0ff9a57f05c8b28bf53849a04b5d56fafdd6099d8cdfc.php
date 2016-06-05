<?php

/* @goteborgdc/containers/no-wrapper/no-wrapper.twig */
class __TwigTemplate_6ced439ee9369037d9718556fa330ed9f2fa14b7b00885e8a7da213b7722328c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'heading' => array($this, 'block_heading'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("block" => 12);
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

        // line 12
        $this->displayBlock('heading', $context, $blocks);
        // line 17
        echo "
";
        // line 18
        $this->displayBlock('content', $context, $blocks);
    }

    // line 12
    public function block_heading($context, array $blocks = array())
    {
        // line 13
        echo "  <h2 ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["headingAttributes"]) ? $context["headingAttributes"] : null), "html", null, true));
        echo ">
    ";
        // line 14
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["heading"]) ? $context["heading"] : null), "html", null, true));
        echo "
  </h2>
";
    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
        // line 19
        echo "  ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
        echo "
";
    }

    public function getTemplateName()
    {
        return "@goteborgdc/containers/no-wrapper/no-wrapper.twig";
    }

    public function getDebugInfo()
    {
        return array (  72 => 19,  69 => 18,  62 => 14,  57 => 13,  54 => 12,  50 => 18,  47 => 17,  45 => 12,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Component for a small chunk of content with no wrapping element.*/
/*  **/
/*  * Variables:*/
/*  * - heading: [string] Heading of the content.*/
/*  * - headingAttributes: [string] HTML attributes for the heading element.*/
/*  * - content: [string] The component contents.*/
/*  *//* */
/* #}*/
/* {% block heading %}*/
/*   <h2 {{ headingAttributes }}>*/
/*     {{ heading }}*/
/*   </h2>*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*   {{ content }}*/
/* {% endblock %}*/
/* */
