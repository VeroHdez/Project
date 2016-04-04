<?php

/* @ClinicaApp/Default/cancelacion.html.twig */
class __TwigTemplate_8369b085e6b9a04f05fd69fa039f6e1e266b5e7348014e9cdd39ac77aa20e013 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "@ClinicaApp/Default/cancelacion.html.twig", 3);
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
        $__internal_aaa9f9b365bb4d2cc1243918b289532db836e779fdcbb8399896edf13d784ff6 = $this->env->getExtension("native_profiler");
        $__internal_aaa9f9b365bb4d2cc1243918b289532db836e779fdcbb8399896edf13d784ff6->enter($__internal_aaa9f9b365bb4d2cc1243918b289532db836e779fdcbb8399896edf13d784ff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ClinicaApp/Default/cancelacion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aaa9f9b365bb4d2cc1243918b289532db836e779fdcbb8399896edf13d784ff6->leave($__internal_aaa9f9b365bb4d2cc1243918b289532db836e779fdcbb8399896edf13d784ff6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4ad2f933fa411090e192434ac494be528b6a4d6d42c612b74264b00bcf778da3 = $this->env->getExtension("native_profiler");
        $__internal_4ad2f933fa411090e192434ac494be528b6a4d6d42c612b74264b00bcf778da3->enter($__internal_4ad2f933fa411090e192434ac494be528b6a4d6d42c612b74264b00bcf778da3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    Dia <select><option value=\"\"></option></select>
    Mes <select><option value=\"\"></option></select>
    Año <select><option value=\"\"></option></select>
    <table>
        <tr>
            <th>Hora</th>
            <th rowspan=\"2\" >Paciente</th>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><a ><img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundle/clinicaapp/images/delete.png"), "html", null, true);
        echo "\"></a></td>
        </tr>
    </table>
";
        
        $__internal_4ad2f933fa411090e192434ac494be528b6a4d6d42c612b74264b00bcf778da3->leave($__internal_4ad2f933fa411090e192434ac494be528b6a4d6d42c612b74264b00bcf778da3_prof);

    }

    public function getTemplateName()
    {
        return "@ClinicaApp/Default/cancelacion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 17,  40 => 6,  34 => 5,  11 => 3,);
    }
}
/* {# empty Twig template #}*/
/* */
/* {%extends "base.html.twig" %}*/
/* */
/* {%block body %}*/
/*     Dia <select><option value=""></option></select>*/
/*     Mes <select><option value=""></option></select>*/
/*     Año <select><option value=""></option></select>*/
/*     <table>*/
/*         <tr>*/
/*             <th>Hora</th>*/
/*             <th rowspan="2" >Paciente</th>*/
/*         </tr>*/
/*         <tr>*/
/*             <td></td>*/
/*             <td></td>*/
/*             <td><a ><img src="{{ asset('bundle/clinicaapp/images/delete.png') }}"></a></td>*/
/*         </tr>*/
/*     </table>*/
/* {%endblock %}*/
/* */
