<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_7004b8fab381fa3873f996b82932a48fb2f01a0fdd91da651907af279c4773da extends Twig_Template
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
        $__internal_c4b246faf5d96e649ee5afc2fe3c7d222fd72e3090f459ded92c80c6d6e71e87 = $this->env->getExtension("native_profiler");
        $__internal_c4b246faf5d96e649ee5afc2fe3c7d222fd72e3090f459ded92c80c6d6e71e87->enter($__internal_c4b246faf5d96e649ee5afc2fe3c7d222fd72e3090f459ded92c80c6d6e71e87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_c4b246faf5d96e649ee5afc2fe3c7d222fd72e3090f459ded92c80c6d6e71e87->leave($__internal_c4b246faf5d96e649ee5afc2fe3c7d222fd72e3090f459ded92c80c6d6e71e87_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
