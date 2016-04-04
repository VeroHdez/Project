<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_1cca70606e9766c6c0ffd74d840611fb9fbec2391aee0c2715443b4ce65a2cb0 extends Twig_Template
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
        $__internal_dc757255d86ad555ad7dd264bac22c6da6ab3a16dbc3cc23969138e103e45d69 = $this->env->getExtension("native_profiler");
        $__internal_dc757255d86ad555ad7dd264bac22c6da6ab3a16dbc3cc23969138e103e45d69->enter($__internal_dc757255d86ad555ad7dd264bac22c6da6ab3a16dbc3cc23969138e103e45d69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_dc757255d86ad555ad7dd264bac22c6da6ab3a16dbc3cc23969138e103e45d69->leave($__internal_dc757255d86ad555ad7dd264bac22c6da6ab3a16dbc3cc23969138e103e45d69_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
