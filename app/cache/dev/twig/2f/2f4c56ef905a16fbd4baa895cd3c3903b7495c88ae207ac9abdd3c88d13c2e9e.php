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
        $__internal_d8a4a358f3c4048469fc01d68f86bfb42aba8f75bfee7d9f891adb4733d9c9fc = $this->env->getExtension("native_profiler");
        $__internal_d8a4a358f3c4048469fc01d68f86bfb42aba8f75bfee7d9f891adb4733d9c9fc->enter($__internal_d8a4a358f3c4048469fc01d68f86bfb42aba8f75bfee7d9f891adb4733d9c9fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_d8a4a358f3c4048469fc01d68f86bfb42aba8f75bfee7d9f891adb4733d9c9fc->leave($__internal_d8a4a358f3c4048469fc01d68f86bfb42aba8f75bfee7d9f891adb4733d9c9fc_prof);

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
