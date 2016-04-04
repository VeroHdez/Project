<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_8b4df39ad733e7418b51aca882e51d1a965030d033a2dc011ac6b250b41609e4 extends Twig_Template
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
        $__internal_eceda179b09bd18ff316b31fb07567eec0af1e17bbba00dd076c018b13c9fdd8 = $this->env->getExtension("native_profiler");
        $__internal_eceda179b09bd18ff316b31fb07567eec0af1e17bbba00dd076c018b13c9fdd8->enter($__internal_eceda179b09bd18ff316b31fb07567eec0af1e17bbba00dd076c018b13c9fdd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_eceda179b09bd18ff316b31fb07567eec0af1e17bbba00dd076c018b13c9fdd8->leave($__internal_eceda179b09bd18ff316b31fb07567eec0af1e17bbba00dd076c018b13c9fdd8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
