<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_bdc0b49e764af651c7c1018549bd924325f077b05152119b9704177de5b509e8 extends Twig_Template
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
        $__internal_13cc280279f433b944cd1db3603cea6d908198b919db45ef4b3fa098eaa22d14 = $this->env->getExtension("native_profiler");
        $__internal_13cc280279f433b944cd1db3603cea6d908198b919db45ef4b3fa098eaa22d14->enter($__internal_13cc280279f433b944cd1db3603cea6d908198b919db45ef4b3fa098eaa22d14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_13cc280279f433b944cd1db3603cea6d908198b919db45ef4b3fa098eaa22d14->leave($__internal_13cc280279f433b944cd1db3603cea6d908198b919db45ef4b3fa098eaa22d14_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
