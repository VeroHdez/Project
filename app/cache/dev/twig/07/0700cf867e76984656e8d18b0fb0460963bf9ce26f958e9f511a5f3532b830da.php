<?php

/* ClinicaAppBundle:Default:index.html.twig */
class __TwigTemplate_d39933ceb34e10a8d40ec9906450fea7e9d7b46f732df65ce403f3d646745884 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ClinicaAppBundle:Default:index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_51bcb66a8898593d4d6946230541ed76a37e78518e0779403c5ca559bf2364d1 = $this->env->getExtension("native_profiler");
        $__internal_51bcb66a8898593d4d6946230541ed76a37e78518e0779403c5ca559bf2364d1->enter($__internal_51bcb66a8898593d4d6946230541ed76a37e78518e0779403c5ca559bf2364d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ClinicaAppBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51bcb66a8898593d4d6946230541ed76a37e78518e0779403c5ca559bf2364d1->leave($__internal_51bcb66a8898593d4d6946230541ed76a37e78518e0779403c5ca559bf2364d1_prof);

    }

    public function getTemplateName()
    {
        return "ClinicaAppBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }
}
/* {%extends "base.html.twig" %}*/
/*      */
