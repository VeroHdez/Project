<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_31b59188524249e030aaf588141435810278dfafb7522028305053b3db6b2527 extends Twig_Template
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
        $__internal_73088c8b1eb78040f2d72751dafcd130d08b8e6f1990d924015131bd9d8587cf = $this->env->getExtension("native_profiler");
        $__internal_73088c8b1eb78040f2d72751dafcd130d08b8e6f1990d924015131bd9d8587cf->enter($__internal_73088c8b1eb78040f2d72751dafcd130d08b8e6f1990d924015131bd9d8587cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_73088c8b1eb78040f2d72751dafcd130d08b8e6f1990d924015131bd9d8587cf->leave($__internal_73088c8b1eb78040f2d72751dafcd130d08b8e6f1990d924015131bd9d8587cf_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
