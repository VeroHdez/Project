<?php

/* ClinicaAppBundle:Cliente:newCliente.html.twig */
class __TwigTemplate_59d8ae2e277790a10a8708b9a56bd0fe37ea1b007fa562a5e26a0488f3050042 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "ClinicaAppBundle:Cliente:newCliente.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b79b5f35b8829c61a484eb6762c894071b62e4258ef23c3e760d098299779639 = $this->env->getExtension("native_profiler");
        $__internal_b79b5f35b8829c61a484eb6762c894071b62e4258ef23c3e760d098299779639->enter($__internal_b79b5f35b8829c61a484eb6762c894071b62e4258ef23c3e760d098299779639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ClinicaAppBundle:Cliente:newCliente.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b79b5f35b8829c61a484eb6762c894071b62e4258ef23c3e760d098299779639->leave($__internal_b79b5f35b8829c61a484eb6762c894071b62e4258ef23c3e760d098299779639_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0577f922c7406b447bfc40038c265fbf9d0dc37cbed99ac84d3188cc9e3877dd = $this->env->getExtension("native_profiler");
        $__internal_0577f922c7406b447bfc40038c265fbf9d0dc37cbed99ac84d3188cc9e3877dd->enter($__internal_0577f922c7406b447bfc40038c265fbf9d0dc37cbed99ac84d3188cc9e3877dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Alta Cliente ";
        
        $__internal_0577f922c7406b447bfc40038c265fbf9d0dc37cbed99ac84d3188cc9e3877dd->leave($__internal_0577f922c7406b447bfc40038c265fbf9d0dc37cbed99ac84d3188cc9e3877dd_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_d42f2a40a883009a56ebb69f02b2e556e3d98d5115d355954d0c1f9e2bc5bf4e = $this->env->getExtension("native_profiler");
        $__internal_d42f2a40a883009a56ebb69f02b2e556e3d98d5115d355954d0c1f9e2bc5bf4e->enter($__internal_d42f2a40a883009a56ebb69f02b2e556e3d98d5115d355954d0c1f9e2bc5bf4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " 
    ";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("id" => "cliente-new")));
        echo "
    ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'row');
        echo "
    ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidos", array()), 'row');
        echo "
    ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefono", array()), 'row');
        echo "
    ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "guardar", array()), 'row');
        echo "
    ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_d42f2a40a883009a56ebb69f02b2e556e3d98d5115d355954d0c1f9e2bc5bf4e->leave($__internal_d42f2a40a883009a56ebb69f02b2e556e3d98d5115d355954d0c1f9e2bc5bf4e_prof);

    }

    public function getTemplateName()
    {
        return "ClinicaAppBundle:Cliente:newCliente.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 11,  75 => 10,  71 => 9,  67 => 8,  63 => 7,  59 => 6,  55 => 5,  47 => 4,  35 => 3,  11 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {% extends 'base.html.twig' %}*/
/* {% block title %}Alta Cliente {% endblock %}*/
/* {% block  body %} */
/*     {{ form_start(form,{'attr':{'id':'cliente-new'}}) }}*/
/*     {{ form_errors(form) }}*/
/*     {{ form_row(form.nombre) }}*/
/*     {{ form_row(form.apellidos) }}*/
/*     {{ form_row(form.telefono) }}*/
/*     {{ form_row(form.guardar) }}*/
/*     {{ form_end(form) }}*/
/* {% endblock %}*/
/* */
/* */
