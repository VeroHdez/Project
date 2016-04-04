<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_bdc0b49e764af651c7c1018549bd924325f077b05152119b9704177de5b509e8 extends Twig_Template
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
        $__internal_277f1baad888a9d23edb49a53c5f804edc91dfc8860a619b591c827041450db9 = $this->env->getExtension("native_profiler");
        $__internal_277f1baad888a9d23edb49a53c5f804edc91dfc8860a619b591c827041450db9->enter($__internal_277f1baad888a9d23edb49a53c5f804edc91dfc8860a619b591c827041450db9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_277f1baad888a9d23edb49a53c5f804edc91dfc8860a619b591c827041450db9->leave($__internal_277f1baad888a9d23edb49a53c5f804edc91dfc8860a619b591c827041450db9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
