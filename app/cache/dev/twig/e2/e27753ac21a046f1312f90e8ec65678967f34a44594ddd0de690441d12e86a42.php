<?php

/* @ClinicaApp/Default/citas.html.twig */
class __TwigTemplate_d62c9fe2c70be4a6a13166642a4207603c304926a8ab53de61fd279efd5f1e08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "@ClinicaApp/Default/citas.html.twig", 3);
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
        $__internal_265c1c62015903f811490a5dcc7fa8d18c1bf8f63298b4b677ba7770f475554f = $this->env->getExtension("native_profiler");
        $__internal_265c1c62015903f811490a5dcc7fa8d18c1bf8f63298b4b677ba7770f475554f->enter($__internal_265c1c62015903f811490a5dcc7fa8d18c1bf8f63298b4b677ba7770f475554f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ClinicaApp/Default/citas.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_265c1c62015903f811490a5dcc7fa8d18c1bf8f63298b4b677ba7770f475554f->leave($__internal_265c1c62015903f811490a5dcc7fa8d18c1bf8f63298b4b677ba7770f475554f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_54ff2f909d0c9e85e239e67a1b68beee54495f626a7cb639a9344bc062096f96 = $this->env->getExtension("native_profiler");
        $__internal_54ff2f909d0c9e85e239e67a1b68beee54495f626a7cb639a9344bc062096f96->enter($__internal_54ff2f909d0c9e85e239e67a1b68beee54495f626a7cb639a9344bc062096f96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_54ff2f909d0c9e85e239e67a1b68beee54495f626a7cb639a9344bc062096f96->leave($__internal_54ff2f909d0c9e85e239e67a1b68beee54495f626a7cb639a9344bc062096f96_prof);

    }

    public function getTemplateName()
    {
        return "@ClinicaApp/Default/citas.html.twig";
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
