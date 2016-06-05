<?php

/* themes/goteborgdc/templates/misc/status-messages.html.twig */
class __TwigTemplate_acfb2f6649eb83a56bb8f04109dce1e7c75f5519a9fbc90319da3a2f000e6d45 extends Twig_Template
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
        $tags = array("for" => 25, "include" => 27);
        $filters = array("safe_join" => 31, "without" => 32);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('for', 'include'),
                array('safe_join', 'without'),
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

        // line 1
        echo "
";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["message_list"]) ? $context["message_list"] : null));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 26
            echo "  ";
            // line 27
            $this->loadTemplate("@goteborgdc/components/messages/messages.twig", "themes/goteborgdc/templates/misc/status-messages.html.twig", 27)->display(array("type" =>             // line 28
$context["type"], "messages" =>             // line 29
$context["messages"], "heading" => $this->getAttribute(            // line 30
(isset($context["status_headings"]) ? $context["status_headings"] : null), $context["type"], array(), "array"), "modifier_class" => $this->env->getExtension('drupal_core')->safeJoin($this->env, $this->getAttribute($this->getAttribute(            // line 31
(isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => ("messages--" . $context["type"])), "method"), "class", array()), " "), "attributes" => twig_without(            // line 32
(isset($context["attributes"]) ? $context["attributes"] : null), "class", "role", "aria-label")));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "themes/goteborgdc/templates/misc/status-messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 32,  56 => 31,  55 => 30,  54 => 29,  53 => 28,  52 => 27,  50 => 26,  46 => 25,  43 => 1,);
    }
}
/* */
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for status messages.*/
/*  **/
/*  * Displays status, error, and warning messages, grouped by type.*/
/*  **/
/*  * An invisible heading identifies the messages for assistive technology.*/
/*  * Sighted users see a colored box. See http://www.w3.org/TR/WCAG-TECHS/H69.html*/
/*  * for info.*/
/*  **/
/*  * Add an ARIA label to the contentinfo area so that assistive technology*/
/*  * user agents will better describe this landmark.*/
/*  **/
/*  * Available variables:*/
/*  * - message_list: List of messages to be displayed, grouped by type.*/
/*  * - status_headings: List of all status types.*/
/*  * - display: (optional) May have a value of 'status' or 'error' when only*/
/*  *   displaying messages of that specific type.*/
/*  * - attributes: HTML attributes for the element, including:*/
/*  *   - class: HTML classes.*/
/*  *//* */
/* #}*/
/* {% for type, messages in message_list %}*/
/*   {%*/
/*     include "@goteborgdc/components/messages/messages.twig" with {*/
/*       type: type,*/
/*       messages: messages,*/
/*       heading: status_headings[type],*/
/*       modifier_class: attributes.addClass('messages--' ~ type).class|safe_join(' '),*/
/*       attributes: attributes|without('class', 'role', 'aria-label')*/
/*     } only*/
/*   %}*/
/* {% endfor %}*/
/* */
