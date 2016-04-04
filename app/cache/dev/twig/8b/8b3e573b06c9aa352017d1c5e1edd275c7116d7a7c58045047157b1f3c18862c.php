<?php

/* ClinicaAppBundle:Cliente:listaClientes.html.twig */
class __TwigTemplate_45542e1efe4e30bd26b3288685ea0f6d2239829419121a6943cb5ce132ed6e69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "ClinicaAppBundle:Cliente:listaClientes.html.twig", 2);
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
        $__internal_8e0341d0bfc74eb45d32e7a4aa173d17031532b11ccf9faa037afd43794b0f1f = $this->env->getExtension("native_profiler");
        $__internal_8e0341d0bfc74eb45d32e7a4aa173d17031532b11ccf9faa037afd43794b0f1f->enter($__internal_8e0341d0bfc74eb45d32e7a4aa173d17031532b11ccf9faa037afd43794b0f1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ClinicaAppBundle:Cliente:listaClientes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e0341d0bfc74eb45d32e7a4aa173d17031532b11ccf9faa037afd43794b0f1f->leave($__internal_8e0341d0bfc74eb45d32e7a4aa173d17031532b11ccf9faa037afd43794b0f1f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b2a2e41979916210dfa5c0a7ba318b48e3349d9c6c23fcd210701579b854b792 = $this->env->getExtension("native_profiler");
        $__internal_b2a2e41979916210dfa5c0a7ba318b48e3349d9c6c23fcd210701579b854b792->enter($__internal_b2a2e41979916210dfa5c0a7ba318b48e3349d9c6c23fcd210701579b854b792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"large-6 columns\">
        <table>
            <tr>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Telefono</th>    
            </tr>
            ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clientes"]) ? $context["clientes"] : $this->getContext($context, "clientes")));
        foreach ($context['_seq'] as $context["_key"] => $context["cliente"]) {
            // line 12
            echo "                <tr>
                    <td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "nombre", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "apellidos", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "telefono", array()), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cliente'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "        </table>
    </div>
";
        
        $__internal_b2a2e41979916210dfa5c0a7ba318b48e3349d9c6c23fcd210701579b854b792->leave($__internal_b2a2e41979916210dfa5c0a7ba318b48e3349d9c6c23fcd210701579b854b792_prof);

    }

    public function getTemplateName()
    {
        return "ClinicaAppBundle:Cliente:listaClientes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 18,  64 => 15,  60 => 14,  56 => 13,  53 => 12,  49 => 11,  40 => 4,  34 => 3,  11 => 2,);
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
/*                 <th>Telefono</th>    */
/*             </tr>*/
/*             {% for cliente in clientes %}*/
/*                 <tr>*/
/*                     <td>{{cliente.nombre}}</td>*/
/*                     <td>{{cliente.apellidos}}</td>*/
/*                     <td>{{cliente.telefono}}</td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*         </table>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* */
/* */
