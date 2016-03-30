<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_e2dadac6d1cbd8d895751c889dc6d701f178a548f61dfff92ba7aa9b47da0795 extends Twig_Template
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
        $__internal_afba2cc968406ad5dea791f7b211a0824362aed89c9bb4c24505a5a48c6fa868 = $this->env->getExtension("native_profiler");
        $__internal_afba2cc968406ad5dea791f7b211a0824362aed89c9bb4c24505a5a48c6fa868->enter($__internal_afba2cc968406ad5dea791f7b211a0824362aed89c9bb4c24505a5a48c6fa868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_afba2cc968406ad5dea791f7b211a0824362aed89c9bb4c24505a5a48c6fa868->leave($__internal_afba2cc968406ad5dea791f7b211a0824362aed89c9bb4c24505a5a48c6fa868_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
