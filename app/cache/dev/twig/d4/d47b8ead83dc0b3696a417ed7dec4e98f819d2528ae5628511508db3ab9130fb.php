<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_1529c201afb31fe83d22ac9f7864b7f85437db746e1e7c2c6f6c65e06949693f extends Twig_Template
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
        $__internal_f744376657f9b7167c0749b9e5bfcf261ce9f83150e6520dee7405c5e996b8f8 = $this->env->getExtension("native_profiler");
        $__internal_f744376657f9b7167c0749b9e5bfcf261ce9f83150e6520dee7405c5e996b8f8->enter($__internal_f744376657f9b7167c0749b9e5bfcf261ce9f83150e6520dee7405c5e996b8f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_f744376657f9b7167c0749b9e5bfcf261ce9f83150e6520dee7405c5e996b8f8->leave($__internal_f744376657f9b7167c0749b9e5bfcf261ce9f83150e6520dee7405c5e996b8f8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
