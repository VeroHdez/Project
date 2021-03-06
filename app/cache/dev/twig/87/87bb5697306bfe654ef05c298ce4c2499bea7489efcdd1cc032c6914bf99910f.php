<?php

/* ClinicaAppBundle:Doctor:listaDoctor.html.twig */
class __TwigTemplate_792e66b5f1f2cd21bea52f852d7d3f801be518c508ebeb747c75f73d6b81ad1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "ClinicaAppBundle:Doctor:listaDoctor.html.twig", 2);
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
        $__internal_2180f333f7545b43eaee7478bd7f5652617eca1e2b13b0437bf52aa8666aaca0 = $this->env->getExtension("native_profiler");
        $__internal_2180f333f7545b43eaee7478bd7f5652617eca1e2b13b0437bf52aa8666aaca0->enter($__internal_2180f333f7545b43eaee7478bd7f5652617eca1e2b13b0437bf52aa8666aaca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ClinicaAppBundle:Doctor:listaDoctor.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2180f333f7545b43eaee7478bd7f5652617eca1e2b13b0437bf52aa8666aaca0->leave($__internal_2180f333f7545b43eaee7478bd7f5652617eca1e2b13b0437bf52aa8666aaca0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_51865f15c1f7e485dac0ec9158e4c2cf35669d82db214c49ffdebe150a028c52 = $this->env->getExtension("native_profiler");
        $__internal_51865f15c1f7e485dac0ec9158e4c2cf35669d82db214c49ffdebe150a028c52->enter($__internal_51865f15c1f7e485dac0ec9158e4c2cf35669d82db214c49ffdebe150a028c52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"large-6 columns\">
        <table>
            <tr>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Cedula</th>
                <th>Especialidad</th>
                <th>Telefono</th>
                <th>Precio de la Consulta</th>
            </tr>
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["doctores"]) ? $context["doctores"] : $this->getContext($context, "doctores")));
        foreach ($context['_seq'] as $context["_key"] => $context["doctor"]) {
            // line 15
            echo "                <tr>
                    <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["doctor"], "nombre", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["doctor"], "apellidos", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["doctor"], "cedula", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["doctor"], "especialidad", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["doctor"], "telefono", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["doctor"], "precioConsulta", array()), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['doctor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "        </table>
    </div>
";
        
        $__internal_51865f15c1f7e485dac0ec9158e4c2cf35669d82db214c49ffdebe150a028c52->leave($__internal_51865f15c1f7e485dac0ec9158e4c2cf35669d82db214c49ffdebe150a028c52_prof);

    }

    public function getTemplateName()
    {
        return "ClinicaAppBundle:Doctor:listaDoctor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 24,  79 => 21,  75 => 20,  71 => 19,  67 => 18,  63 => 17,  59 => 16,  56 => 15,  52 => 14,  40 => 4,  34 => 3,  11 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/*     <div class="large-6 columns">*/
/*         <table>*/
/*             <tr>*/
/*                 <th>Nombre</th>*/
/*                 <th>Apellidos</th>*/
/*                 <th>Cedula</th>*/
/*                 <th>Especialidad</th>*/
/*                 <th>Telefono</th>*/
/*                 <th>Precio de la Consulta</th>*/
/*             </tr>*/
/*             {% for doctor in doctores %}*/
/*                 <tr>*/
/*                     <td>{{doctor.nombre}}</td>*/
/*                     <td>{{doctor.apellidos}}</td>*/
/*                     <td>{{doctor.cedula}}</td>*/
/*                     <td>{{doctor.especialidad}}</td>*/
/*                     <td>{{doctor.telefono}}</td>*/
/*                     <td>{{doctor.precioConsulta}}</td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*         </table>*/
/*     </div>*/
/* {% endblock %}*/
