<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_e35d1aa3bb48d8e8d10d4d22b835416c25bbf24740d5845ed5b0e561ec9a6f48 extends Twig_Template
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
        $__internal_454054cde5d1a4ace25d74540ce78c16bbccee002dc5528944f550ab5969df3e = $this->env->getExtension("native_profiler");
        $__internal_454054cde5d1a4ace25d74540ce78c16bbccee002dc5528944f550ab5969df3e->enter($__internal_454054cde5d1a4ace25d74540ce78c16bbccee002dc5528944f550ab5969df3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_454054cde5d1a4ace25d74540ce78c16bbccee002dc5528944f550ab5969df3e->leave($__internal_454054cde5d1a4ace25d74540ce78c16bbccee002dc5528944f550ab5969df3e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
