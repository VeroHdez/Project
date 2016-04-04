<?php

/* ClinicaAppBundle:Doctor:newDoctor.html.twig */
class __TwigTemplate_2476e82c8402f82087578c291e4e3b775b1f2d897873c04270498fded32d62d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "ClinicaAppBundle:Doctor:newDoctor.html.twig", 2);
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
        $__internal_ef47effc2361ba9320cd0101966242f1c43cbb06dc2b49f36b1f193c1791ccd4 = $this->env->getExtension("native_profiler");
        $__internal_ef47effc2361ba9320cd0101966242f1c43cbb06dc2b49f36b1f193c1791ccd4->enter($__internal_ef47effc2361ba9320cd0101966242f1c43cbb06dc2b49f36b1f193c1791ccd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ClinicaAppBundle:Doctor:newDoctor.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef47effc2361ba9320cd0101966242f1c43cbb06dc2b49f36b1f193c1791ccd4->leave($__internal_ef47effc2361ba9320cd0101966242f1c43cbb06dc2b49f36b1f193c1791ccd4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d955a5c7fd53f134e7d2a33f290e1598c4b8ad2e7e22ebfecfaa90b9a2a98671 = $this->env->getExtension("native_profiler");
        $__internal_d955a5c7fd53f134e7d2a33f290e1598c4b8ad2e7e22ebfecfaa90b9a2a98671->enter($__internal_d955a5c7fd53f134e7d2a33f290e1598c4b8ad2e7e22ebfecfaa90b9a2a98671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Alta Doctor ";
        
        $__internal_d955a5c7fd53f134e7d2a33f290e1598c4b8ad2e7e22ebfecfaa90b9a2a98671->leave($__internal_d955a5c7fd53f134e7d2a33f290e1598c4b8ad2e7e22ebfecfaa90b9a2a98671_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_69f3bfe78e79c92fa83d8a59f97a3eb89f73e7899e97327d9440d5944f9d8128 = $this->env->getExtension("native_profiler");
        $__internal_69f3bfe78e79c92fa83d8a59f97a3eb89f73e7899e97327d9440d5944f9d8128->enter($__internal_69f3bfe78e79c92fa83d8a59f97a3eb89f73e7899e97327d9440d5944f9d8128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " 
    ";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_69f3bfe78e79c92fa83d8a59f97a3eb89f73e7899e97327d9440d5944f9d8128->leave($__internal_69f3bfe78e79c92fa83d8a59f97a3eb89f73e7899e97327d9440d5944f9d8128_prof);

    }

    public function getTemplateName()
    {
        return "ClinicaAppBundle:Doctor:newDoctor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 5,  47 => 4,  35 => 3,  11 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {% extends 'base.html.twig' %}*/
/* {% block title %}Alta Doctor {% endblock %}*/
/* {% block  body %} */
/*     {{ form(form)}}*/
/* {% endblock %}*/
/* */
