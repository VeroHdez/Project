<?php

/* ClinicaAppBundle:Default:index.html.twig */
class __TwigTemplate_d39933ceb34e10a8d40ec9906450fea7e9d7b46f732df65ce403f3d646745884 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1540f0456e59ba590511ccfbbc2be495998c1179fd073481971c173fa3adf261 = $this->env->getExtension("native_profiler");
        $__internal_1540f0456e59ba590511ccfbbc2be495998c1179fd073481971c173fa3adf261->enter($__internal_1540f0456e59ba590511ccfbbc2be495998c1179fd073481971c173fa3adf261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ClinicaAppBundle:Default:index.html.twig"));

        // line 1
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        $this->displayBlock('body', $context, $blocks);
        // line 24
        echo "     ";
        
        $__internal_1540f0456e59ba590511ccfbbc2be495998c1179fd073481971c173fa3adf261->leave($__internal_1540f0456e59ba590511ccfbbc2be495998c1179fd073481971c173fa3adf261_prof);

    }

    // line 1
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_edf8971cfa3e4dc4cc6f4a349936bd66269946b4288de49627f8f366e05a93ea = $this->env->getExtension("native_profiler");
        $__internal_edf8971cfa3e4dc4cc6f4a349936bd66269946b4288de49627f8f366e05a93ea->enter($__internal_edf8971cfa3e4dc4cc6f4a349936bd66269946b4288de49627f8f366e05a93ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 2
        echo "           
            <link rel=\"stylesheet\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/clinicaapp/css/foundation.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/clinicaapp/css/app.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/clinicaapp/css/estilo.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_edf8971cfa3e4dc4cc6f4a349936bd66269946b4288de49627f8f366e05a93ea->leave($__internal_edf8971cfa3e4dc4cc6f4a349936bd66269946b4288de49627f8f366e05a93ea_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_8f4e148881eb7e208337cf54574aa467faddc51f27ae6596108fc10b8183c19d = $this->env->getExtension("native_profiler");
        $__internal_8f4e148881eb7e208337cf54574aa467faddc51f27ae6596108fc10b8183c19d->enter($__internal_8f4e148881eb7e208337cf54574aa467faddc51f27ae6596108fc10b8183c19d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <div class=\"row\">
        <div class=\"large-4 columns\">
            <br/>
            <br/>
            <div class=\"large-push-10 columns\">
                <label>Usuario:</label>
                <input type=\"text\" name=\"user\" id=\"user\"/>
                <br/>
                <label>Contraseña:</label>
                <input type=\"text\" name=\"pass\" id=\"pass\" />
                <input type=\"button\" value=\"Aceptar\" id=\"aceptar\"/>
                <br/>
            </div>
        </div>    
    </div>
";
        
        $__internal_8f4e148881eb7e208337cf54574aa467faddc51f27ae6596108fc10b8183c19d->leave($__internal_8f4e148881eb7e208337cf54574aa467faddc51f27ae6596108fc10b8183c19d_prof);

    }

    public function getTemplateName()
    {
        return "ClinicaAppBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  67 => 8,  61 => 7,  52 => 5,  48 => 4,  44 => 3,  41 => 2,  35 => 1,  28 => 24,  26 => 7,  24 => 1,);
    }
}
/* {% block stylesheets %}*/
/*            */
/*             <link rel="stylesheet" href="{{ asset('bundles/clinicaapp/css/foundation.css')}}" />*/
/*             <link rel="stylesheet" href="{{ asset('bundles/clinicaapp/css/app.css')}}" />*/
/*             <link rel="stylesheet" href="{{ asset('bundles/clinicaapp/css/estilo.css')}}" />*/
/* {% endblock %}*/
/* {%block body %}*/
/*     <div class="row">*/
/*         <div class="large-4 columns">*/
/*             <br/>*/
/*             <br/>*/
/*             <div class="large-push-10 columns">*/
/*                 <label>Usuario:</label>*/
/*                 <input type="text" name="user" id="user"/>*/
/*                 <br/>*/
/*                 <label>Contraseña:</label>*/
/*                 <input type="text" name="pass" id="pass" />*/
/*                 <input type="button" value="Aceptar" id="aceptar"/>*/
/*                 <br/>*/
/*             </div>*/
/*         </div>    */
/*     </div>*/
/* {%endblock %}*/
/*      */
