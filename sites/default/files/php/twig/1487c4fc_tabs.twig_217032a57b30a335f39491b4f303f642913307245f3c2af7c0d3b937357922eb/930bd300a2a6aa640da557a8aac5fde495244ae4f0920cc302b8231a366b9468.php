<?php

/* @goteborgdc/navigation/tabs/tabs.twig */
class __TwigTemplate_ba1c5561a22bde87f8528a00ee3ce44c0f96f021075e7a2bda6bb60cc9b8b57c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'link' => array($this, 'block_link'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 16, "spaceless" => 19, "for" => 21, "set" => 22, "block" => 24);
        $filters = array("default" => 28);
        $functions = array("attach_library" => 15);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'spaceless', 'for', 'set', 'block'),
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

        // line 15
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->attachLibrary("goteborgdc/tabs"), "html", null, true));
        echo "
";
        // line 16
        if ((isset($context["heading"]) ? $context["heading"] : null)) {
            // line 17
            echo "  <h2 class=\"visually-hidden\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["heading"]) ? $context["heading"] : null), "html", null, true));
            echo "</h2>
";
        }
        // line 19
        ob_start();
        // line 20
        echo "  <ul class=\"tabs clearfix ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["modifier_class"]) ? $context["modifier_class"] : null), "html", null, true));
        echo "\">
    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabs"]) ? $context["tabs"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 22
            echo "      ";
            $context["activeClass"] = (($this->getAttribute($context["tab"], "active", array())) ? ("is-active") : (""));
            // line 23
            echo "      <li class=\"tabs__tab ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["activeClass"]) ? $context["activeClass"] : null), "html", null, true));
            echo "\">
        ";
            // line 24
            $this->displayBlock('link', $context, $blocks);
            // line 32
            echo "      </li>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "  </ul>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 24
    public function block_link($context, array $blocks = array())
    {
        // line 25
        echo "          <a href=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["tab"]) ? $context["tab"] : null), "url", array()), "html", null, true));
        echo "\" class=\"tabs__tab-link ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["activeClass"]) ? $context["activeClass"] : null), "html", null, true));
        echo "\">
            ";
        // line 26
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["tab"]) ? $context["tab"] : null), "text", array()), "html", null, true));
        echo "
            ";
        // line 27
        if ($this->getAttribute((isset($context["tab"]) ? $context["tab"] : null), "active", array())) {
            // line 28
            echo "              <span class=\"visually-hidden\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((array_key_exists("activeLabel", $context)) ? (_twig_default_filter((isset($context["activeLabel"]) ? $context["activeLabel"] : null), "(active tab)")) : ("(active tab)")), "html", null, true));
            echo "</span>
            ";
        }
        // line 30
        echo "          </a>
        ";
    }

    public function getTemplateName()
    {
        return "@goteborgdc/navigation/tabs/tabs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 30,  127 => 28,  125 => 27,  121 => 26,  114 => 25,  111 => 24,  105 => 34,  90 => 32,  88 => 24,  83 => 23,  80 => 22,  63 => 21,  58 => 20,  56 => 19,  50 => 17,  48 => 16,  44 => 15,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Component for tabs.*/
/*  **/
/*  * Variables:*/
/*  * - heading: [string] Accessible heading.*/
/*  * - modifier_class: [string] Classes to modify the default component styling.*/
/*  * - tabs: [array] The tabs. Each tab is an object containing:*/
/*  *   - active: [boolean] Whether the tab is the active tab.*/
/*  *   - text: [string] Text of the item.*/
/*  *   - url: [string] URL of the item (optional).*/
/*  *//* */
/* #}*/
/* {{ attach_library('goteborgdc/tabs') }}*/
/* {% if heading %}*/
/*   <h2 class="visually-hidden">{{ heading }}</h2>*/
/* {% endif %}*/
/* {% spaceless %}*/
/*   <ul class="tabs clearfix {{modifier_class}}">*/
/*     {% for tab in tabs %}*/
/*       {% set activeClass = tab.active ? 'is-active' : '' %}*/
/*       <li class="tabs__tab {{ activeClass }}">*/
/*         {% block link %}*/
/*           <a href="{{ tab.url }}" class="tabs__tab-link {{ activeClass }}">*/
/*             {{ tab.text }}*/
/*             {% if tab.active %}*/
/*               <span class="visually-hidden">{{ activeLabel|default('(active tab)') }}</span>*/
/*             {% endif %}*/
/*           </a>*/
/*         {% endblock link %}*/
/*       </li>*/
/*     {% endfor %}*/
/*   </ul>*/
/* {% endspaceless %}*/
/* */
