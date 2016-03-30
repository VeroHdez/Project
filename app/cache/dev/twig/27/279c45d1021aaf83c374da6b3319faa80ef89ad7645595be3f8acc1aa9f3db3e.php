<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_9b1c27e3716583b709c86a4559a657ca2d9258e0c3c8baec1e4862b2944b63ee extends Twig_Template
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
        $__internal_8eee5f2d9ed1c250d9386e7842527b1646e7ad62c69d4295ad9988967ca4f928 = $this->env->getExtension("native_profiler");
        $__internal_8eee5f2d9ed1c250d9386e7842527b1646e7ad62c69d4295ad9988967ca4f928->enter($__internal_8eee5f2d9ed1c250d9386e7842527b1646e7ad62c69d4295ad9988967ca4f928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_8eee5f2d9ed1c250d9386e7842527b1646e7ad62c69d4295ad9988967ca4f928->leave($__internal_8eee5f2d9ed1c250d9386e7842527b1646e7ad62c69d4295ad9988967ca4f928_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_510ecb602a8bcb010a72847600f869f4def5506b247a0c84548109ed02629d7a = $this->env->getExtension("native_profiler");
        $__internal_510ecb602a8bcb010a72847600f869f4def5506b247a0c84548109ed02629d7a->enter($__internal_510ecb602a8bcb010a72847600f869f4def5506b247a0c84548109ed02629d7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_510ecb602a8bcb010a72847600f869f4def5506b247a0c84548109ed02629d7a->leave($__internal_510ecb602a8bcb010a72847600f869f4def5506b247a0c84548109ed02629d7a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
