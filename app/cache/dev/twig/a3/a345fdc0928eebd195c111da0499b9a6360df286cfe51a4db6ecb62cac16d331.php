<?php

/* base.html.twig */
class __TwigTemplate_222e08ee2b1c6a82625985330edab27aa3f55d14a6f97fa8288b7d199ff7dc68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sidebar' => array($this, 'block_sidebar'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_04b76b013b8d0b1431f4ec251cb3f25df3fdeae71620ad76459dc6c47f052e1c = $this->env->getExtension("native_profiler");
        $__internal_04b76b013b8d0b1431f4ec251cb3f25df3fdeae71620ad76459dc6c47f052e1c->enter($__internal_04b76b013b8d0b1431f4ec251cb3f25df3fdeae71620ad76459dc6c47f052e1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html> 
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "        
    </head>
    <body>
        <div class=\"row\" id=\"sidebar\" >
            <div id=\"menu\" class=\"large-12 columns\">
                ";
        // line 17
        $this->displayBlock('sidebar', $context, $blocks);
        // line 29
        echo "            </div>
            <div class=\"large-12 columns\">
                ";
        // line 31
        $this->displayBlock('body', $context, $blocks);
        // line 33
        echo "            </div>
            ";
        // line 34
        $context["contact_email"] = "value";
        // line 35
        echo "
            <div id=\"pie\" class=\"large-12 columns\">
                <footer>
                Contacto: ";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["contact_email"]) ? $context["contact_email"] : $this->getContext($context, "contact_email")), "html", null, true);
        echo "
                </footer>
            </div>
        </div>
        
    </body>
</html>
";
        
        $__internal_04b76b013b8d0b1431f4ec251cb3f25df3fdeae71620ad76459dc6c47f052e1c->leave($__internal_04b76b013b8d0b1431f4ec251cb3f25df3fdeae71620ad76459dc6c47f052e1c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f79df49f7273a00f72c7b4e42aade50f740142ebb238ab859e54101cc09595f1 = $this->env->getExtension("native_profiler");
        $__internal_f79df49f7273a00f72c7b4e42aade50f740142ebb238ab859e54101cc09595f1->enter($__internal_f79df49f7273a00f72c7b4e42aade50f740142ebb238ab859e54101cc09595f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Prueba";
        
        $__internal_f79df49f7273a00f72c7b4e42aade50f740142ebb238ab859e54101cc09595f1->leave($__internal_f79df49f7273a00f72c7b4e42aade50f740142ebb238ab859e54101cc09595f1_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2aac9db27d8101c70d55df0f8b4f7ee7dd1a812ef760b11348fd56a3bc68cfaa = $this->env->getExtension("native_profiler");
        $__internal_2aac9db27d8101c70d55df0f8b4f7ee7dd1a812ef760b11348fd56a3bc68cfaa->enter($__internal_2aac9db27d8101c70d55df0f8b4f7ee7dd1a812ef760b11348fd56a3bc68cfaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "           
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/clinicaapp/css/foundation.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/clinicaapp/css/app.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/clinicaapp/css/estilo.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_2aac9db27d8101c70d55df0f8b4f7ee7dd1a812ef760b11348fd56a3bc68cfaa->leave($__internal_2aac9db27d8101c70d55df0f8b4f7ee7dd1a812ef760b11348fd56a3bc68cfaa_prof);

    }

    // line 17
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_b2d52e7876effd36e43c21740acab1167fcca3906074b0406b64bc8b959df686 = $this->env->getExtension("native_profiler");
        $__internal_b2d52e7876effd36e43c21740acab1167fcca3906074b0406b64bc8b959df686->enter($__internal_b2d52e7876effd36e43c21740acab1167fcca3906074b0406b64bc8b959df686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 18
        echo "                    <ul>
                        <li><a href=\"/\" class=\"small button\">Home</a></li>
                        <li><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("nuevo_cliente");
        echo "\" class=\"small button\">Alta Cliente</a></li>
                        <li><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("mostrar_cliente");
        echo "\" class=\"small button\">Lista de Clientes </a></li>
                        <li><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("nuevo_doctor");
        echo "\" class=\"small button\">Alta Doctor </a></li>
                        <li><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("mostrar_doctor");
        echo "\" class=\"small button\">Lista de Doctores </a></li>
                        <li><a href=\"/Citas\" class=\"small button\">Citas</a></li>
                        <li><a href=\"/Cancelacion\" class=\"small button\">Cancelacion</a></li>
                        <li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\" class=\"small button\">Salir</a></li>
                    </ul>
                ";
        
        $__internal_b2d52e7876effd36e43c21740acab1167fcca3906074b0406b64bc8b959df686->leave($__internal_b2d52e7876effd36e43c21740acab1167fcca3906074b0406b64bc8b959df686_prof);

    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        $__internal_db99a200cc24a0762534cb4c1dda76dda96bf37c7c88dac54361559c3c9290d5 = $this->env->getExtension("native_profiler");
        $__internal_db99a200cc24a0762534cb4c1dda76dda96bf37c7c88dac54361559c3c9290d5->enter($__internal_db99a200cc24a0762534cb4c1dda76dda96bf37c7c88dac54361559c3c9290d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 32
        echo "                ";
        
        $__internal_db99a200cc24a0762534cb4c1dda76dda96bf37c7c88dac54361559c3c9290d5->leave($__internal_db99a200cc24a0762534cb4c1dda76dda96bf37c7c88dac54361559c3c9290d5_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 32,  154 => 31,  144 => 26,  138 => 23,  134 => 22,  130 => 21,  126 => 20,  122 => 18,  116 => 17,  107 => 10,  103 => 9,  99 => 8,  96 => 7,  90 => 6,  78 => 5,  63 => 38,  58 => 35,  56 => 34,  53 => 33,  51 => 31,  47 => 29,  45 => 17,  38 => 12,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html> */
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8">*/
/*         <title>{% block title %}Prueba{%endblock%}</title>*/
/*         {% block stylesheets %}*/
/*            */
/*             <link rel="stylesheet" href="{{ asset('bundles/clinicaapp/css/foundation.css')}}" />*/
/*             <link rel="stylesheet" href="{{ asset('bundles/clinicaapp/css/app.css')}}" />*/
/*             <link rel="stylesheet" href="{{ asset('bundles/clinicaapp/css/estilo.css')}}" />*/
/*         {% endblock %}*/
/*         */
/*     </head>*/
/*     <body>*/
/*         <div class="row" id="sidebar" >*/
/*             <div id="menu" class="large-12 columns">*/
/*                 {%block sidebar %}*/
/*                     <ul>*/
/*                         <li><a href="/" class="small button">Home</a></li>*/
/*                         <li><a href="{{path('nuevo_cliente') }}" class="small button">Alta Cliente</a></li>*/
/*                         <li><a href="{{path('mostrar_cliente')}}" class="small button">Lista de Clientes </a></li>*/
/*                         <li><a href="{{path('nuevo_doctor') }}" class="small button">Alta Doctor </a></li>*/
/*                         <li><a href="{{path('mostrar_doctor') }}" class="small button">Lista de Doctores </a></li>*/
/*                         <li><a href="/Citas" class="small button">Citas</a></li>*/
/*                         <li><a href="/Cancelacion" class="small button">Cancelacion</a></li>*/
/*                         <li><a href="{{path('logout')}}" class="small button">Salir</a></li>*/
/*                     </ul>*/
/*                 {% endblock %}*/
/*             </div>*/
/*             <div class="large-12 columns">*/
/*                 {%block body %}*/
/*                 {% endblock %}*/
/*             </div>*/
/*             {% set contact_email = "value" %}*/
/* */
/*             <div id="pie" class="large-12 columns">*/
/*                 <footer>*/
/*                 Contacto: {{ contact_email }}*/
/*                 </footer>*/
/*             </div>*/
/*         </div>*/
/*         */
/*     </body>*/
/* </html>*/
/* */
