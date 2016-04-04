<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_9016e142b4021e7baa1f89e8c633bc76d8947e148c6f590d03c40137962410a5 extends Twig_Template
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
        $__internal_758955f8b9295fef33a2c9f604c1e7facf89c94116d3828cd3ea15a6cfabeb50 = $this->env->getExtension("native_profiler");
        $__internal_758955f8b9295fef33a2c9f604c1e7facf89c94116d3828cd3ea15a6cfabeb50->enter($__internal_758955f8b9295fef33a2c9f604c1e7facf89c94116d3828cd3ea15a6cfabeb50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_758955f8b9295fef33a2c9f604c1e7facf89c94116d3828cd3ea15a6cfabeb50->leave($__internal_758955f8b9295fef33a2c9f604c1e7facf89c94116d3828cd3ea15a6cfabeb50_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
