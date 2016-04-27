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
        $__internal_7b61a007355b87ebf338eb0b1caf1beb097ebe67efdebdcb8116b328c9bd34d3 = $this->env->getExtension("native_profiler");
        $__internal_7b61a007355b87ebf338eb0b1caf1beb097ebe67efdebdcb8116b328c9bd34d3->enter($__internal_7b61a007355b87ebf338eb0b1caf1beb097ebe67efdebdcb8116b328c9bd34d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ClinicaAppBundle:Doctor:newDoctor.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b61a007355b87ebf338eb0b1caf1beb097ebe67efdebdcb8116b328c9bd34d3->leave($__internal_7b61a007355b87ebf338eb0b1caf1beb097ebe67efdebdcb8116b328c9bd34d3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e67979de785a1b8530b6a37650d8d06510744d8085ea5477e0b7780513e78c62 = $this->env->getExtension("native_profiler");
        $__internal_e67979de785a1b8530b6a37650d8d06510744d8085ea5477e0b7780513e78c62->enter($__internal_e67979de785a1b8530b6a37650d8d06510744d8085ea5477e0b7780513e78c62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Alta Doctor ";
        
        $__internal_e67979de785a1b8530b6a37650d8d06510744d8085ea5477e0b7780513e78c62->leave($__internal_e67979de785a1b8530b6a37650d8d06510744d8085ea5477e0b7780513e78c62_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_7d52a917e702c2b855e0e7d0034fb64e6a8e661dba3bd3bf32b1df5667884f40 = $this->env->getExtension("native_profiler");
        $__internal_7d52a917e702c2b855e0e7d0034fb64e6a8e661dba3bd3bf32b1df5667884f40->enter($__internal_7d52a917e702c2b855e0e7d0034fb64e6a8e661dba3bd3bf32b1df5667884f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " 
    ";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_7d52a917e702c2b855e0e7d0034fb64e6a8e661dba3bd3bf32b1df5667884f40->leave($__internal_7d52a917e702c2b855e0e7d0034fb64e6a8e661dba3bd3bf32b1df5667884f40_prof);

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
