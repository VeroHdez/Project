<?php

/* @ClinicaApp/Default/index.html.twig */
class __TwigTemplate_94249ccb86568e98a70215f3a07aed1331c245acb53f26d58331e827da18a1f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@ClinicaApp/Default/index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3f77c2134f72d848332b3decd3a3ccff961a1c5aa29a6ee59d32e5f39ece15bc = $this->env->getExtension("native_profiler");
        $__internal_3f77c2134f72d848332b3decd3a3ccff961a1c5aa29a6ee59d32e5f39ece15bc->enter($__internal_3f77c2134f72d848332b3decd3a3ccff961a1c5aa29a6ee59d32e5f39ece15bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ClinicaApp/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f77c2134f72d848332b3decd3a3ccff961a1c5aa29a6ee59d32e5f39ece15bc->leave($__internal_3f77c2134f72d848332b3decd3a3ccff961a1c5aa29a6ee59d32e5f39ece15bc_prof);

    }

    public function getTemplateName()
    {
        return "@ClinicaApp/Default/index.html.twig";
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
/* */
/* */
/* */
/*      */
