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
        $__internal_fcc2630e69618863d4bd6a9464a74aecf5da690c8b6b409af7ff36d478e9199a = $this->env->getExtension("native_profiler");
        $__internal_fcc2630e69618863d4bd6a9464a74aecf5da690c8b6b409af7ff36d478e9199a->enter($__internal_fcc2630e69618863d4bd6a9464a74aecf5da690c8b6b409af7ff36d478e9199a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_fcc2630e69618863d4bd6a9464a74aecf5da690c8b6b409af7ff36d478e9199a->leave($__internal_fcc2630e69618863d4bd6a9464a74aecf5da690c8b6b409af7ff36d478e9199a_prof);

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
