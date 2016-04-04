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
        $__internal_a18a6fe426dabbcbcffd5974ff4b0b5b6cc150d983118267c769290a57b284c6 = $this->env->getExtension("native_profiler");
        $__internal_a18a6fe426dabbcbcffd5974ff4b0b5b6cc150d983118267c769290a57b284c6->enter($__internal_a18a6fe426dabbcbcffd5974ff4b0b5b6cc150d983118267c769290a57b284c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_a18a6fe426dabbcbcffd5974ff4b0b5b6cc150d983118267c769290a57b284c6->leave($__internal_a18a6fe426dabbcbcffd5974ff4b0b5b6cc150d983118267c769290a57b284c6_prof);

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
