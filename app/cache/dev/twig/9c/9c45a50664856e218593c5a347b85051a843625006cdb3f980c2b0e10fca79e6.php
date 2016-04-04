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
        $__internal_f8bdf0b290fc2fbc960b5d91cb24dc4dec6de55c2efb2a57fbfab48add7dab2a = $this->env->getExtension("native_profiler");
        $__internal_f8bdf0b290fc2fbc960b5d91cb24dc4dec6de55c2efb2a57fbfab48add7dab2a->enter($__internal_f8bdf0b290fc2fbc960b5d91cb24dc4dec6de55c2efb2a57fbfab48add7dab2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ClinicaApp/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8bdf0b290fc2fbc960b5d91cb24dc4dec6de55c2efb2a57fbfab48add7dab2a->leave($__internal_f8bdf0b290fc2fbc960b5d91cb24dc4dec6de55c2efb2a57fbfab48add7dab2a_prof);

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
