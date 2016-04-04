<?php

/* ClinicaAppBundle:Default:citas.html.twig */
class __TwigTemplate_eb7c0c4c1c11274806536a7e73265305c8e72c3244b2f5817360d2b644daf320 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "ClinicaAppBundle:Default:citas.html.twig", 3);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b5958f2e725566f8a53603f48816c8f4bdf00ab0548762b66a6b6b96e88b6cdd = $this->env->getExtension("native_profiler");
        $__internal_b5958f2e725566f8a53603f48816c8f4bdf00ab0548762b66a6b6b96e88b6cdd->enter($__internal_b5958f2e725566f8a53603f48816c8f4bdf00ab0548762b66a6b6b96e88b6cdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ClinicaAppBundle:Default:citas.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5958f2e725566f8a53603f48816c8f4bdf00ab0548762b66a6b6b96e88b6cdd->leave($__internal_b5958f2e725566f8a53603f48816c8f4bdf00ab0548762b66a6b6b96e88b6cdd_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6a99a429a1c1b90aa5de770d9c12377d5f719da0b7c01e1695e70440a64553d2 = $this->env->getExtension("native_profiler");
        $__internal_6a99a429a1c1b90aa5de770d9c12377d5f719da0b7c01e1695e70440a64553d2->enter($__internal_6a99a429a1c1b90aa5de770d9c12377d5f719da0b7c01e1695e70440a64553d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <table>
        <tr>
            <th>Hora</th>
            <th rowspan=\"2\" >Paciente</th>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type=\"checkbox\" /></td>
        </tr>
    </table>
";
        
        $__internal_6a99a429a1c1b90aa5de770d9c12377d5f719da0b7c01e1695e70440a64553d2->leave($__internal_6a99a429a1c1b90aa5de770d9c12377d5f719da0b7c01e1695e70440a64553d2_prof);

    }

    public function getTemplateName()
    {
        return "ClinicaAppBundle:Default:citas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 3,);
    }
}
/* {# empty Twig template #}*/
/* */
/* {%extends "base.html.twig" %}*/
/* */
/* {%block body %}*/
/*     <table>*/
/*         <tr>*/
/*             <th>Hora</th>*/
/*             <th rowspan="2" >Paciente</th>*/
/*         </tr>*/
/*         <tr>*/
/*             <td></td>*/
/*             <td></td>*/
/*             <td><input type="checkbox" /></td>*/
/*         </tr>*/
/*     </table>*/
/* {%endblock %}*/
