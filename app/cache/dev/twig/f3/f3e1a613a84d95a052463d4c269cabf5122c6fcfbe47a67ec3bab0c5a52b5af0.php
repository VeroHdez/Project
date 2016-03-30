<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_5ceae6b5604b06146b2aa0f414ecb7ddceaadce7def88bb93d2ee01957cbf38f extends Twig_Template
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
        $__internal_18ecefe932727fcf72d7f3bb0d23ebf9a9bac17c00e66c26b3970dcaa55ee640 = $this->env->getExtension("native_profiler");
        $__internal_18ecefe932727fcf72d7f3bb0d23ebf9a9bac17c00e66c26b3970dcaa55ee640->enter($__internal_18ecefe932727fcf72d7f3bb0d23ebf9a9bac17c00e66c26b3970dcaa55ee640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_18ecefe932727fcf72d7f3bb0d23ebf9a9bac17c00e66c26b3970dcaa55ee640->leave($__internal_18ecefe932727fcf72d7f3bb0d23ebf9a9bac17c00e66c26b3970dcaa55ee640_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
