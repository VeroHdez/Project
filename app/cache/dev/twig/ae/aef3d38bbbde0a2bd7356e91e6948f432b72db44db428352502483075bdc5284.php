<?php

/* ClinicaAppBundle:Default:cancelacion.html.twig */
class __TwigTemplate_e154f7401b9d0caad7126cbd9c95bc24debf718fb3ec3e7e361a1f44f49a3486 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "ClinicaAppBundle:Default:cancelacion.html.twig", 3);
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
        $__internal_7f33dd4868ae5c8a835fc95640cbc4b7ad5e018853303a0fae2d9e38bbec6a29 = $this->env->getExtension("native_profiler");
        $__internal_7f33dd4868ae5c8a835fc95640cbc4b7ad5e018853303a0fae2d9e38bbec6a29->enter($__internal_7f33dd4868ae5c8a835fc95640cbc4b7ad5e018853303a0fae2d9e38bbec6a29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ClinicaAppBundle:Default:cancelacion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f33dd4868ae5c8a835fc95640cbc4b7ad5e018853303a0fae2d9e38bbec6a29->leave($__internal_7f33dd4868ae5c8a835fc95640cbc4b7ad5e018853303a0fae2d9e38bbec6a29_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f5a8edc9a23a3eb372dc69f2597c6c3863e69385943bfd0538440e80603dc2d2 = $this->env->getExtension("native_profiler");
        $__internal_f5a8edc9a23a3eb372dc69f2597c6c3863e69385943bfd0538440e80603dc2d2->enter($__internal_f5a8edc9a23a3eb372dc69f2597c6c3863e69385943bfd0538440e80603dc2d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f5a8edc9a23a3eb372dc69f2597c6c3863e69385943bfd0538440e80603dc2d2->leave($__internal_f5a8edc9a23a3eb372dc69f2597c6c3863e69385943bfd0538440e80603dc2d2_prof);

    }

    public function getTemplateName()
    {
        return "ClinicaAppBundle:Default:cancelacion.html.twig";
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
