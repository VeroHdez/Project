<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_e2dadac6d1cbd8d895751c889dc6d701f178a548f61dfff92ba7aa9b47da0795 extends Twig_Template
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
        $__internal_c48b7c3f8156a0bff3749e1960afd391566e8a068b82f3932b557f29ea54c744 = $this->env->getExtension("native_profiler");
        $__internal_c48b7c3f8156a0bff3749e1960afd391566e8a068b82f3932b557f29ea54c744->enter($__internal_c48b7c3f8156a0bff3749e1960afd391566e8a068b82f3932b557f29ea54c744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_c48b7c3f8156a0bff3749e1960afd391566e8a068b82f3932b557f29ea54c744->leave($__internal_c48b7c3f8156a0bff3749e1960afd391566e8a068b82f3932b557f29ea54c744_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
