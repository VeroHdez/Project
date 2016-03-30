<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_8536fe27eb3a6af54c4f9e9593ea1230de4decdaf0c0fd6bc0635d12915f0227 extends Twig_Template
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
        $__internal_afd2086e6c93bb2a72db0b783965847796e3a43b0d94dd3d2aeeb33bf3caf2a4 = $this->env->getExtension("native_profiler");
        $__internal_afd2086e6c93bb2a72db0b783965847796e3a43b0d94dd3d2aeeb33bf3caf2a4->enter($__internal_afd2086e6c93bb2a72db0b783965847796e3a43b0d94dd3d2aeeb33bf3caf2a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_afd2086e6c93bb2a72db0b783965847796e3a43b0d94dd3d2aeeb33bf3caf2a4->leave($__internal_afd2086e6c93bb2a72db0b783965847796e3a43b0d94dd3d2aeeb33bf3caf2a4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
