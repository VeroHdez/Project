<?php

/* ClinicaAppBundle:Usuario:login.html.twig */
class __TwigTemplate_7c025f4297c0b4bd1e923c1ae52d93316b0be122e8ad1faa6dfae79e4c88fd93 extends Twig_Template
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
        $__internal_60bfbb28bd8bc3b85defe717f79e797d725d764c0a65edebbfd6720146216afc = $this->env->getExtension("native_profiler");
        $__internal_60bfbb28bd8bc3b85defe717f79e797d725d764c0a65edebbfd6720146216afc->enter($__internal_60bfbb28bd8bc3b85defe717f79e797d725d764c0a65edebbfd6720146216afc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ClinicaAppBundle:Usuario:login.html.twig"));

        // line 1
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_60bfbb28bd8bc3b85defe717f79e797d725d764c0a65edebbfd6720146216afc->leave($__internal_60bfbb28bd8bc3b85defe717f79e797d725d764c0a65edebbfd6720146216afc_prof);

    }

    // line 1
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c108cd72cb9e16226b7cfc1ce0d441b6238a0c67ed5ec9683dc45e8b9e4d96bd = $this->env->getExtension("native_profiler");
        $__internal_c108cd72cb9e16226b7cfc1ce0d441b6238a0c67ed5ec9683dc45e8b9e4d96bd->enter($__internal_c108cd72cb9e16226b7cfc1ce0d441b6238a0c67ed5ec9683dc45e8b9e4d96bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_c108cd72cb9e16226b7cfc1ce0d441b6238a0c67ed5ec9683dc45e8b9e4d96bd->leave($__internal_c108cd72cb9e16226b7cfc1ce0d441b6238a0c67ed5ec9683dc45e8b9e4d96bd_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_330f1da9a824615e34f9a632ce77c03b5127fdb27336459e7cc147e5be0dfa0f = $this->env->getExtension("native_profiler");
        $__internal_330f1da9a824615e34f9a632ce77c03b5127fdb27336459e7cc147e5be0dfa0f->enter($__internal_330f1da9a824615e34f9a632ce77c03b5127fdb27336459e7cc147e5be0dfa0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <div class=\"row\">
        ";
        // line 9
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 10
            echo "            <div>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
        ";
        }
        // line 11
        echo "    
        <span class=\"alert-sucess\">
            ";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
        echo "
        </span>
        <form name=\"form1\" method=\"post\" action=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\">
            <div class=\"large-4 columns\">
                <br/>
                <br/>
                <div class=\"large-push-10 columns\">
                    <label>Usuario:</label>
                    <input type=\"text\" name=\"_username\" id=\"username\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\"/>
                    <br/>
                    <label>Contraseña:</label>
                    <input type=\"text\" name=\"_password\" id=\"password\" />
                    <input type=\"submit\" value=\"Aceptar\" id=\"aceptar\"/>
                    <br/>
                </div>
            </div>    
        </form>
    </div>
";
        
        $__internal_330f1da9a824615e34f9a632ce77c03b5127fdb27336459e7cc147e5be0dfa0f->leave($__internal_330f1da9a824615e34f9a632ce77c03b5127fdb27336459e7cc147e5be0dfa0f_prof);

    }

    public function getTemplateName()
    {
        return "ClinicaAppBundle:Usuario:login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  94 => 21,  85 => 15,  80 => 13,  76 => 11,  70 => 10,  68 => 9,  65 => 8,  59 => 7,  50 => 5,  46 => 4,  42 => 3,  39 => 2,  33 => 1,  26 => 7,  24 => 1,);
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
/*         {% if error %}*/
/*             <div>{{error.message}}</div>*/
/*         {% endif %}    */
/*         <span class="alert-sucess">*/
/*             {{flashMessage}}*/
/*         </span>*/
/*         <form name="form1" method="post" action="{{path('login_check')}}">*/
/*             <div class="large-4 columns">*/
/*                 <br/>*/
/*                 <br/>*/
/*                 <div class="large-push-10 columns">*/
/*                     <label>Usuario:</label>*/
/*                     <input type="text" name="_username" id="username" value="{{last_username}}"/>*/
/*                     <br/>*/
/*                     <label>Contraseña:</label>*/
/*                     <input type="text" name="_password" id="password" />*/
/*                     <input type="submit" value="Aceptar" id="aceptar"/>*/
/*                     <br/>*/
/*                 </div>*/
/*             </div>    */
/*         </form>*/
/*     </div>*/
/* {%endblock %}*/
