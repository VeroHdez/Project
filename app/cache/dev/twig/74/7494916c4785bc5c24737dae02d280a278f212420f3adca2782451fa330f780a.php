<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_671a47fcdbfe56866cf0b636272e266920a63ed3fbe409bc7f1b6213e8b0809a extends Twig_Template
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
        $__internal_5194ea1db0b7894edf058e48e3acb0ddafb6cc24e8be2480f23bf3cb9dc3e4df = $this->env->getExtension("native_profiler");
        $__internal_5194ea1db0b7894edf058e48e3acb0ddafb6cc24e8be2480f23bf3cb9dc3e4df->enter($__internal_5194ea1db0b7894edf058e48e3acb0ddafb6cc24e8be2480f23bf3cb9dc3e4df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_5194ea1db0b7894edf058e48e3acb0ddafb6cc24e8be2480f23bf3cb9dc3e4df->leave($__internal_5194ea1db0b7894edf058e48e3acb0ddafb6cc24e8be2480f23bf3cb9dc3e4df_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
