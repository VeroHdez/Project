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
        $__internal_04dfd91c15e9a3a7a909a10ba54fd2236550c71b45ec1fbffa538dd8842a2070 = $this->env->getExtension("native_profiler");
        $__internal_04dfd91c15e9a3a7a909a10ba54fd2236550c71b45ec1fbffa538dd8842a2070->enter($__internal_04dfd91c15e9a3a7a909a10ba54fd2236550c71b45ec1fbffa538dd8842a2070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_04dfd91c15e9a3a7a909a10ba54fd2236550c71b45ec1fbffa538dd8842a2070->leave($__internal_04dfd91c15e9a3a7a909a10ba54fd2236550c71b45ec1fbffa538dd8842a2070_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_12e5302b45a6d36d03303ce85bb79ed5f223d7416fffd0bade2658da4f20a766 = $this->env->getExtension("native_profiler");
        $__internal_12e5302b45a6d36d03303ce85bb79ed5f223d7416fffd0bade2658da4f20a766->enter($__internal_12e5302b45a6d36d03303ce85bb79ed5f223d7416fffd0bade2658da4f20a766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_12e5302b45a6d36d03303ce85bb79ed5f223d7416fffd0bade2658da4f20a766->leave($__internal_12e5302b45a6d36d03303ce85bb79ed5f223d7416fffd0bade2658da4f20a766_prof);

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
