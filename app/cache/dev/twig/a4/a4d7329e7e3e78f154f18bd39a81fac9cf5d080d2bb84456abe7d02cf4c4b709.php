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
        $__internal_54f5413393a7995e3c8c86f6a7e4be70208bfa2591f6584c2befc99bc5e23131 = $this->env->getExtension("native_profiler");
        $__internal_54f5413393a7995e3c8c86f6a7e4be70208bfa2591f6584c2befc99bc5e23131->enter($__internal_54f5413393a7995e3c8c86f6a7e4be70208bfa2591f6584c2befc99bc5e23131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_54f5413393a7995e3c8c86f6a7e4be70208bfa2591f6584c2befc99bc5e23131->leave($__internal_54f5413393a7995e3c8c86f6a7e4be70208bfa2591f6584c2befc99bc5e23131_prof);

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
