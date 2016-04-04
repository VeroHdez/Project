<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_1e9a6a521db64f88e9f00b617200111d2da57ce650285247ffea9b4c337ee96d extends Twig_Template
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
        $__internal_ca643f2089ec254356226e561d917dcaa6fdfa4328cfce07cb5588fe52770bda = $this->env->getExtension("native_profiler");
        $__internal_ca643f2089ec254356226e561d917dcaa6fdfa4328cfce07cb5588fe52770bda->enter($__internal_ca643f2089ec254356226e561d917dcaa6fdfa4328cfce07cb5588fe52770bda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_ca643f2089ec254356226e561d917dcaa6fdfa4328cfce07cb5588fe52770bda->leave($__internal_ca643f2089ec254356226e561d917dcaa6fdfa4328cfce07cb5588fe52770bda_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
