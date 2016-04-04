<?php

/* @ClinicaApp/Default/newCliente.html.twig */
class __TwigTemplate_7218295f003b3626c516e5f57f57cf8fe26e9274e2a5f106143d81525b695c0c extends Twig_Template
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
        $__internal_ff332687fbe026985d7949476e23326ee7c5c0ced341fea150bb031727cb9f70 = $this->env->getExtension("native_profiler");
        $__internal_ff332687fbe026985d7949476e23326ee7c5c0ced341fea150bb031727cb9f70->enter($__internal_ff332687fbe026985d7949476e23326ee7c5c0ced341fea150bb031727cb9f70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ClinicaApp/Default/newCliente.html.twig"));

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
        
        $__internal_ff332687fbe026985d7949476e23326ee7c5c0ced341fea150bb031727cb9f70->leave($__internal_ff332687fbe026985d7949476e23326ee7c5c0ced341fea150bb031727cb9f70_prof);

    }

    public function getTemplateName()
    {
        return "@ClinicaApp/Default/newCliente.html.twig";
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
