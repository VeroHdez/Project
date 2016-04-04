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
        $__internal_1b92f2011b417d139ae28550f559b6034e1b27ee9b55a0dee830e4c10794d7d9 = $this->env->getExtension("native_profiler");
        $__internal_1b92f2011b417d139ae28550f559b6034e1b27ee9b55a0dee830e4c10794d7d9->enter($__internal_1b92f2011b417d139ae28550f559b6034e1b27ee9b55a0dee830e4c10794d7d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ClinicaAppBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b92f2011b417d139ae28550f559b6034e1b27ee9b55a0dee830e4c10794d7d9->leave($__internal_1b92f2011b417d139ae28550f559b6034e1b27ee9b55a0dee830e4c10794d7d9_prof);

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
/* */
/* */
/* */
/*      */
