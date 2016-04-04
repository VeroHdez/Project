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
        $__internal_4c8487335687785f18735965722b0ca8b26a616fb6c2860ed81d08cd4e9ef208 = $this->env->getExtension("native_profiler");
        $__internal_4c8487335687785f18735965722b0ca8b26a616fb6c2860ed81d08cd4e9ef208->enter($__internal_4c8487335687785f18735965722b0ca8b26a616fb6c2860ed81d08cd4e9ef208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 28
        echo "            </div>
            <div class=\"large-12 columns\">
                ";
        // line 30
        $this->displayBlock('body', $context, $blocks);
        // line 32
        echo "            </div>
            ";
        // line 33
        $context["contact_email"] = "value";
        // line 34
        echo "
            <div id=\"pie\" class=\"large-12 columns\">
                <footer>
                Contacto: ";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["contact_email"]) ? $context["contact_email"] : $this->getContext($context, "contact_email")), "html", null, true);
        echo "
                </footer>
            </div>
        </div>
        
    </body>
</html>
";
        
        $__internal_4c8487335687785f18735965722b0ca8b26a616fb6c2860ed81d08cd4e9ef208->leave($__internal_4c8487335687785f18735965722b0ca8b26a616fb6c2860ed81d08cd4e9ef208_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_15059836f959bed6d714cefbf1430a5cf3bfbe0041bb6e11d96212512c70bf17 = $this->env->getExtension("native_profiler");
        $__internal_15059836f959bed6d714cefbf1430a5cf3bfbe0041bb6e11d96212512c70bf17->enter($__internal_15059836f959bed6d714cefbf1430a5cf3bfbe0041bb6e11d96212512c70bf17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Prueba";
        
        $__internal_15059836f959bed6d714cefbf1430a5cf3bfbe0041bb6e11d96212512c70bf17->leave($__internal_15059836f959bed6d714cefbf1430a5cf3bfbe0041bb6e11d96212512c70bf17_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c3c6ab4b7fcd979ee0d07e80e9eb16014ef2ee440675d8a7fc5d4339efe09121 = $this->env->getExtension("native_profiler");
        $__internal_c3c6ab4b7fcd979ee0d07e80e9eb16014ef2ee440675d8a7fc5d4339efe09121->enter($__internal_c3c6ab4b7fcd979ee0d07e80e9eb16014ef2ee440675d8a7fc5d4339efe09121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_c3c6ab4b7fcd979ee0d07e80e9eb16014ef2ee440675d8a7fc5d4339efe09121->leave($__internal_c3c6ab4b7fcd979ee0d07e80e9eb16014ef2ee440675d8a7fc5d4339efe09121_prof);

    }

    // line 17
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_0e2e16878c709ab774df6eb890a6943ef54dad2c7e8cbc073f04f16964edaee5 = $this->env->getExtension("native_profiler");
        $__internal_0e2e16878c709ab774df6eb890a6943ef54dad2c7e8cbc073f04f16964edaee5->enter($__internal_0e2e16878c709ab774df6eb890a6943ef54dad2c7e8cbc073f04f16964edaee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

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
                    </ul>
                ";
        
        $__internal_0e2e16878c709ab774df6eb890a6943ef54dad2c7e8cbc073f04f16964edaee5->leave($__internal_0e2e16878c709ab774df6eb890a6943ef54dad2c7e8cbc073f04f16964edaee5_prof);

    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
        $__internal_03f71762bc551e4e913f378f2ef784c50e70aecfd3361b0959c6880b2ff01d2b = $this->env->getExtension("native_profiler");
        $__internal_03f71762bc551e4e913f378f2ef784c50e70aecfd3361b0959c6880b2ff01d2b->enter($__internal_03f71762bc551e4e913f378f2ef784c50e70aecfd3361b0959c6880b2ff01d2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 31
        echo "                ";
        
        $__internal_03f71762bc551e4e913f378f2ef784c50e70aecfd3361b0959c6880b2ff01d2b->leave($__internal_03f71762bc551e4e913f378f2ef784c50e70aecfd3361b0959c6880b2ff01d2b_prof);

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
        return array (  156 => 31,  150 => 30,  138 => 23,  134 => 22,  130 => 21,  126 => 20,  122 => 18,  116 => 17,  107 => 10,  103 => 9,  99 => 8,  96 => 7,  90 => 6,  78 => 5,  63 => 37,  58 => 34,  56 => 33,  53 => 32,  51 => 30,  47 => 28,  45 => 17,  38 => 12,  36 => 6,  32 => 5,  26 => 1,);
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
