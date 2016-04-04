<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_fd52d71bc8b72e217f41d3a2c77cad0b45d9db1982e0af3c17230d67d787849f extends Twig_Template
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
        $__internal_becea4145d3cebc375ee926a870ebaa2b267bdaf7ebdc26d24293b63f5e1c53b = $this->env->getExtension("native_profiler");
        $__internal_becea4145d3cebc375ee926a870ebaa2b267bdaf7ebdc26d24293b63f5e1c53b->enter($__internal_becea4145d3cebc375ee926a870ebaa2b267bdaf7ebdc26d24293b63f5e1c53b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_becea4145d3cebc375ee926a870ebaa2b267bdaf7ebdc26d24293b63f5e1c53b->leave($__internal_becea4145d3cebc375ee926a870ebaa2b267bdaf7ebdc26d24293b63f5e1c53b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
