<?php

/* ::base.html.twig */
class __TwigTemplate_d68f668a3aeb24fffe36786bb21e29f7c278527ccf474c49e17bb93a077d8551 extends Twig_Template
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
        $__internal_f0f0f0c80652f72ad2cba354c45bc2fd73de2d5d344891986bc66c1a453305a6 = $this->env->getExtension("native_profiler");
        $__internal_f0f0f0c80652f72ad2cba354c45bc2fd73de2d5d344891986bc66c1a453305a6->enter($__internal_f0f0f0c80652f72ad2cba354c45bc2fd73de2d5d344891986bc66c1a453305a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 25
        echo "            </div>
            <div class=\"large-12 columns\">
                ";
        // line 27
        $this->displayBlock('body', $context, $blocks);
        // line 29
        echo "            </div>
            ";
        // line 30
        $context["contact_email"] = "value";
        // line 31
        echo "
            <div id=\"pie\" class=\"large-12 columns\">
                <footer>
                Contacto: ";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["contact_email"]) ? $context["contact_email"] : $this->getContext($context, "contact_email")), "html", null, true);
        echo "
                </footer>
            </div>
        </div>
        
    </body>
</html>
";
        
        $__internal_f0f0f0c80652f72ad2cba354c45bc2fd73de2d5d344891986bc66c1a453305a6->leave($__internal_f0f0f0c80652f72ad2cba354c45bc2fd73de2d5d344891986bc66c1a453305a6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_da872f2b7c11844f8a673242ec8aa43bfd651ff3558a127faec198144cf50cac = $this->env->getExtension("native_profiler");
        $__internal_da872f2b7c11844f8a673242ec8aa43bfd651ff3558a127faec198144cf50cac->enter($__internal_da872f2b7c11844f8a673242ec8aa43bfd651ff3558a127faec198144cf50cac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Prueba";
        
        $__internal_da872f2b7c11844f8a673242ec8aa43bfd651ff3558a127faec198144cf50cac->leave($__internal_da872f2b7c11844f8a673242ec8aa43bfd651ff3558a127faec198144cf50cac_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_42c874d753afd354559f775d56e48b34ae5ae7c8a7f47b96bea84e4047b8a179 = $this->env->getExtension("native_profiler");
        $__internal_42c874d753afd354559f775d56e48b34ae5ae7c8a7f47b96bea84e4047b8a179->enter($__internal_42c874d753afd354559f775d56e48b34ae5ae7c8a7f47b96bea84e4047b8a179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_42c874d753afd354559f775d56e48b34ae5ae7c8a7f47b96bea84e4047b8a179->leave($__internal_42c874d753afd354559f775d56e48b34ae5ae7c8a7f47b96bea84e4047b8a179_prof);

    }

    // line 17
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_c07e8b51b93f3349f989be69870c9726447e7b9bb3a3c37fe7bacd55a81c012f = $this->env->getExtension("native_profiler");
        $__internal_c07e8b51b93f3349f989be69870c9726447e7b9bb3a3c37fe7bacd55a81c012f->enter($__internal_c07e8b51b93f3349f989be69870c9726447e7b9bb3a3c37fe7bacd55a81c012f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 18
        echo "                    <ul>
                        <li><a href=\"/\" class=\"small button\">Home</a></li>
                        <li><a href=\"/captura\" class=\"small button\">Captura</a></li>
                        <li><a href=\"/Citas\" class=\"small button\">Citas</a></li>
                        <li><a href=\"/Cancelacion\" class=\"small button\">Cancelacion</a></li>
                    </ul>
                ";
        
        $__internal_c07e8b51b93f3349f989be69870c9726447e7b9bb3a3c37fe7bacd55a81c012f->leave($__internal_c07e8b51b93f3349f989be69870c9726447e7b9bb3a3c37fe7bacd55a81c012f_prof);

    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
        $__internal_2ff3af948fa01cf01a0135601d1c891d6d4b09f1111de861573c958d84e7f9fe = $this->env->getExtension("native_profiler");
        $__internal_2ff3af948fa01cf01a0135601d1c891d6d4b09f1111de861573c958d84e7f9fe->enter($__internal_2ff3af948fa01cf01a0135601d1c891d6d4b09f1111de861573c958d84e7f9fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 28
        echo "                ";
        
        $__internal_2ff3af948fa01cf01a0135601d1c891d6d4b09f1111de861573c958d84e7f9fe->leave($__internal_2ff3af948fa01cf01a0135601d1c891d6d4b09f1111de861573c958d84e7f9fe_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 28,  135 => 27,  122 => 18,  116 => 17,  107 => 10,  103 => 9,  99 => 8,  96 => 7,  90 => 6,  78 => 5,  63 => 34,  58 => 31,  56 => 30,  53 => 29,  51 => 27,  47 => 25,  45 => 17,  38 => 12,  36 => 6,  32 => 5,  26 => 1,);
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
/*                         <li><a href="/captura" class="small button">Captura</a></li>*/
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
