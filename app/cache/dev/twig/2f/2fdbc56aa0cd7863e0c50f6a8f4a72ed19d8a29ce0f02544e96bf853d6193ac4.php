<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_ff76cca6b10935098a63d8946dc8854feff72e1da0ee075d09424b33fc2c8cef extends Twig_Template
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
        $__internal_c8a711ca33187f8f6a69ac5da5bd5f9b58b81d5473ee0d071a811c4870c8500f = $this->env->getExtension("native_profiler");
        $__internal_c8a711ca33187f8f6a69ac5da5bd5f9b58b81d5473ee0d071a811c4870c8500f->enter($__internal_c8a711ca33187f8f6a69ac5da5bd5f9b58b81d5473ee0d071a811c4870c8500f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_c8a711ca33187f8f6a69ac5da5bd5f9b58b81d5473ee0d071a811c4870c8500f->leave($__internal_c8a711ca33187f8f6a69ac5da5bd5f9b58b81d5473ee0d071a811c4870c8500f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
