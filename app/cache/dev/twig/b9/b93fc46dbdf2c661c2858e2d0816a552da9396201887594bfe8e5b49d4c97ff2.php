<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_d038b1e92fba6f820363ba756b5ed74856ef86e1a681931d76fc7a17c151a795 extends Twig_Template
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
        $__internal_2e3c80730c54b799084d5ecec9fe52776ec309d0cd970bd7e11e2ddd101ac021 = $this->env->getExtension("native_profiler");
        $__internal_2e3c80730c54b799084d5ecec9fe52776ec309d0cd970bd7e11e2ddd101ac021->enter($__internal_2e3c80730c54b799084d5ecec9fe52776ec309d0cd970bd7e11e2ddd101ac021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_2e3c80730c54b799084d5ecec9fe52776ec309d0cd970bd7e11e2ddd101ac021->leave($__internal_2e3c80730c54b799084d5ecec9fe52776ec309d0cd970bd7e11e2ddd101ac021_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
