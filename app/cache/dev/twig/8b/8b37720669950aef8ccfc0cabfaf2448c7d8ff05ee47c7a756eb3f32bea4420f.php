<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_9defbe02d929a2a2c488b53be197d979abc633ba9bc1a5d969c9fc7e4f973c01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b993978b9076ae20a9cf520b6f329f179f451e71f259c33f8066df4472397bcf = $this->env->getExtension("native_profiler");
        $__internal_b993978b9076ae20a9cf520b6f329f179f451e71f259c33f8066df4472397bcf->enter($__internal_b993978b9076ae20a9cf520b6f329f179f451e71f259c33f8066df4472397bcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_b993978b9076ae20a9cf520b6f329f179f451e71f259c33f8066df4472397bcf->leave($__internal_b993978b9076ae20a9cf520b6f329f179f451e71f259c33f8066df4472397bcf_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_9b30aaea5818fc2feb805b3beffc2c9aa81ea9d5a423cdb39216fa0425db4d92 = $this->env->getExtension("native_profiler");
        $__internal_9b30aaea5818fc2feb805b3beffc2c9aa81ea9d5a423cdb39216fa0425db4d92->enter($__internal_9b30aaea5818fc2feb805b3beffc2c9aa81ea9d5a423cdb39216fa0425db4d92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_9b30aaea5818fc2feb805b3beffc2c9aa81ea9d5a423cdb39216fa0425db4d92->leave($__internal_9b30aaea5818fc2feb805b3beffc2c9aa81ea9d5a423cdb39216fa0425db4d92_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
