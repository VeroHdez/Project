<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_5567f968cc737f8486e52858e44d1ce53314ea6e821a4f31e70e94b3b8c3691b extends Twig_Template
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
        $__internal_d157ee9b976777e15ead9c6e657d5571087466b2845505afec5d07ea0e2626ec = $this->env->getExtension("native_profiler");
        $__internal_d157ee9b976777e15ead9c6e657d5571087466b2845505afec5d07ea0e2626ec->enter($__internal_d157ee9b976777e15ead9c6e657d5571087466b2845505afec5d07ea0e2626ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_d157ee9b976777e15ead9c6e657d5571087466b2845505afec5d07ea0e2626ec->leave($__internal_d157ee9b976777e15ead9c6e657d5571087466b2845505afec5d07ea0e2626ec_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
