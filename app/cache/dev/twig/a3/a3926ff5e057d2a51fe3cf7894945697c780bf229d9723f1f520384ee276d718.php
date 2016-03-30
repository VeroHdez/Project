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
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3d9a630de6126dbe790d0bcdb6d2005676354d9be6571df2671d687f65b8f00c = $this->env->getExtension("native_profiler");
        $__internal_3d9a630de6126dbe790d0bcdb6d2005676354d9be6571df2671d687f65b8f00c->enter($__internal_3d9a630de6126dbe790d0bcdb6d2005676354d9be6571df2671d687f65b8f00c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
            <div class=\"large-12 columns\">
                ";
        // line 17
        $this->displayBlock('sidebar', $context, $blocks);
        // line 25
        echo "                 <input id=\"checkbox1\" type=\"checkbox\"><label for=\"checkbox1\">Checkbox 1</label>

            </div>
        </div>
    </body>
</html>
";
        
        $__internal_3d9a630de6126dbe790d0bcdb6d2005676354d9be6571df2671d687f65b8f00c->leave($__internal_3d9a630de6126dbe790d0bcdb6d2005676354d9be6571df2671d687f65b8f00c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_31a7978b4c49c7db71ecc17f1ca299bfec0c191d26dcd10d898c7d4e9bf7bc7c = $this->env->getExtension("native_profiler");
        $__internal_31a7978b4c49c7db71ecc17f1ca299bfec0c191d26dcd10d898c7d4e9bf7bc7c->enter($__internal_31a7978b4c49c7db71ecc17f1ca299bfec0c191d26dcd10d898c7d4e9bf7bc7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Prueba";
        
        $__internal_31a7978b4c49c7db71ecc17f1ca299bfec0c191d26dcd10d898c7d4e9bf7bc7c->leave($__internal_31a7978b4c49c7db71ecc17f1ca299bfec0c191d26dcd10d898c7d4e9bf7bc7c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_752cbbc1cf1bfc9a7456c87476f5bbfe95c0606651028be6dfefea4b2a7d3ae8 = $this->env->getExtension("native_profiler");
        $__internal_752cbbc1cf1bfc9a7456c87476f5bbfe95c0606651028be6dfefea4b2a7d3ae8->enter($__internal_752cbbc1cf1bfc9a7456c87476f5bbfe95c0606651028be6dfefea4b2a7d3ae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "           
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/appbundle/css/foundation.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/appbundle/css/app.css"), "html", null, true);
        echo "\" />
       
        ";
        
        $__internal_752cbbc1cf1bfc9a7456c87476f5bbfe95c0606651028be6dfefea4b2a7d3ae8->leave($__internal_752cbbc1cf1bfc9a7456c87476f5bbfe95c0606651028be6dfefea4b2a7d3ae8_prof);

    }

    // line 17
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_3133ddce655b5a8f178bff386c71f73339520c8f10991b8bcb1657e121ce7075 = $this->env->getExtension("native_profiler");
        $__internal_3133ddce655b5a8f178bff386c71f73339520c8f10991b8bcb1657e121ce7075->enter($__internal_3133ddce655b5a8f178bff386c71f73339520c8f10991b8bcb1657e121ce7075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 18
        echo "                    <ul>
                        <li><a href=\"/\" class=\"small button\">Home</a></li>
                        <li><a href=\"/Captura\" class=\"small button\">Captura</a></li>
                        <li><a href=\"/Citas\" class=\"small button\">Citas</a></li>
                        <li><a href=\"/Cancelacion\" class=\"small button\">Cancelacion</a></li>
                    </ul>
                ";
        
        $__internal_3133ddce655b5a8f178bff386c71f73339520c8f10991b8bcb1657e121ce7075->leave($__internal_3133ddce655b5a8f178bff386c71f73339520c8f10991b8bcb1657e121ce7075_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  100 => 18,  94 => 17,  84 => 9,  80 => 8,  77 => 7,  71 => 6,  59 => 5,  46 => 25,  44 => 17,  37 => 12,  35 => 6,  31 => 5,  25 => 1,);
    }
}
/* <!DOCTYPE html> */
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8">*/
/*         <title>{% block title %}Prueba{%endblock%}</title>*/
/*         {% block stylesheets %}*/
/*            */
/*             <link rel="stylesheet" href="{{ asset('bundles/appbundle/css/foundation.css')}}" />*/
/*             <link rel="stylesheet" href="{{ asset('bundles/appbundle/css/app.css')}}" />*/
/*        */
/*         {% endblock %}*/
/*         */
/*     </head>*/
/*     <body>*/
/*         <div class="row" id="sidebar" >*/
/*             <div class="large-12 columns">*/
/*                 {%block sidebar %}*/
/*                     <ul>*/
/*                         <li><a href="/" class="small button">Home</a></li>*/
/*                         <li><a href="/Captura" class="small button">Captura</a></li>*/
/*                         <li><a href="/Citas" class="small button">Citas</a></li>*/
/*                         <li><a href="/Cancelacion" class="small button">Cancelacion</a></li>*/
/*                     </ul>*/
/*                 {% endblock %}*/
/*                  <input id="checkbox1" type="checkbox"><label for="checkbox1">Checkbox 1</label>*/
/* */
/*             </div>*/
/*         </div>*/
/*     </body>*/
/* </html>*/
/* */
