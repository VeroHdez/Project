<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_f93d3219092c6f3b1e74bdfdae6e8897b29f3354dfb618159a45e90ea130e785 extends Twig_Template
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
        $__internal_d6db23f21a06da1b3bd90582663b1cccbc7d19a53990a807541d33615caa99b6 = $this->env->getExtension("native_profiler");
        $__internal_d6db23f21a06da1b3bd90582663b1cccbc7d19a53990a807541d33615caa99b6->enter($__internal_d6db23f21a06da1b3bd90582663b1cccbc7d19a53990a807541d33615caa99b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_d6db23f21a06da1b3bd90582663b1cccbc7d19a53990a807541d33615caa99b6->leave($__internal_d6db23f21a06da1b3bd90582663b1cccbc7d19a53990a807541d33615caa99b6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
