<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_9b1c27e3716583b709c86a4559a657ca2d9258e0c3c8baec1e4862b2944b63ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d44e9bf75ac49850c0e31ebca66c04102e83db7bc88617ff64062d2ddf96238e = $this->env->getExtension("native_profiler");
        $__internal_d44e9bf75ac49850c0e31ebca66c04102e83db7bc88617ff64062d2ddf96238e->enter($__internal_d44e9bf75ac49850c0e31ebca66c04102e83db7bc88617ff64062d2ddf96238e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d44e9bf75ac49850c0e31ebca66c04102e83db7bc88617ff64062d2ddf96238e->leave($__internal_d44e9bf75ac49850c0e31ebca66c04102e83db7bc88617ff64062d2ddf96238e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_75338e5ca70e82ecc186617667b09c2a5f0520e12f503f317318abe65a22b0f2 = $this->env->getExtension("native_profiler");
        $__internal_75338e5ca70e82ecc186617667b09c2a5f0520e12f503f317318abe65a22b0f2->enter($__internal_75338e5ca70e82ecc186617667b09c2a5f0520e12f503f317318abe65a22b0f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_75338e5ca70e82ecc186617667b09c2a5f0520e12f503f317318abe65a22b0f2->leave($__internal_75338e5ca70e82ecc186617667b09c2a5f0520e12f503f317318abe65a22b0f2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
