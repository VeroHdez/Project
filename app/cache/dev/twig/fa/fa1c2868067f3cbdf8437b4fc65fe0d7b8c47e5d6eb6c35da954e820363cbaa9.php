<?php

/* ClinicaAppBundle:Default:newCliente.html.twig */
class __TwigTemplate_7ea7c5efb74bb6509f14e3f53936adece45df9f2111e9d0dd1ee879750f41469 extends Twig_Template
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
        $__internal_5bd4dc244aebad363629fc0f47ebc6a7a091156e7da47d587df1740d213e5435 = $this->env->getExtension("native_profiler");
        $__internal_5bd4dc244aebad363629fc0f47ebc6a7a091156e7da47d587df1740d213e5435->enter($__internal_5bd4dc244aebad363629fc0f47ebc6a7a091156e7da47d587df1740d213e5435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ClinicaAppBundle:Default:newCliente.html.twig"));

        // line 2
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
";
        // line 4
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_5bd4dc244aebad363629fc0f47ebc6a7a091156e7da47d587df1740d213e5435->leave($__internal_5bd4dc244aebad363629fc0f47ebc6a7a091156e7da47d587df1740d213e5435_prof);

    }

    public function getTemplateName()
    {
        return "ClinicaAppBundle:Default:newCliente.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  26 => 3,  22 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {{ form_start(form)}}*/
/* {{ form_widget(form)}}*/
/* {{ form_end(form) }}*/
/* */
