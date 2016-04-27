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
        $__internal_6f5a0cb0e46180eb02d6c4972f113d0f1eceecab4b6aade23a3a06e9d8cdab32 = $this->env->getExtension("native_profiler");
        $__internal_6f5a0cb0e46180eb02d6c4972f113d0f1eceecab4b6aade23a3a06e9d8cdab32->enter($__internal_6f5a0cb0e46180eb02d6c4972f113d0f1eceecab4b6aade23a3a06e9d8cdab32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ClinicaAppBundle:Usuario:login.html.twig"));

        // line 1
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_6f5a0cb0e46180eb02d6c4972f113d0f1eceecab4b6aade23a3a06e9d8cdab32->leave($__internal_6f5a0cb0e46180eb02d6c4972f113d0f1eceecab4b6aade23a3a06e9d8cdab32_prof);

    }

    // line 1
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_76bcfa611e8fd865fc03d1a2169ac0bcc3a8eac226a60c24ca2546f1d71b6255 = $this->env->getExtension("native_profiler");
        $__internal_76bcfa611e8fd865fc03d1a2169ac0bcc3a8eac226a60c24ca2546f1d71b6255->enter($__internal_76bcfa611e8fd865fc03d1a2169ac0bcc3a8eac226a60c24ca2546f1d71b6255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_76bcfa611e8fd865fc03d1a2169ac0bcc3a8eac226a60c24ca2546f1d71b6255->leave($__internal_76bcfa611e8fd865fc03d1a2169ac0bcc3a8eac226a60c24ca2546f1d71b6255_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_4ba4892e107d70e2872ae392e9830ec41cd7b7b01c0856a8b05b15fcc0d8209f = $this->env->getExtension("native_profiler");
        $__internal_4ba4892e107d70e2872ae392e9830ec41cd7b7b01c0856a8b05b15fcc0d8209f->enter($__internal_4ba4892e107d70e2872ae392e9830ec41cd7b7b01c0856a8b05b15fcc0d8209f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <div class=\"row\">
          
        
        <form name=\"form1\" method=\"POST\" action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\">
            <div class=\"large-4 columns\">
                <br/>
                <br/>
                <div class=\"large-push-10 columns\">
                    <label>Usuario:</label>
                    <input type=\"text\" name=\"username\" id=\"username\" />
                    <br/>
                    <label>Contraseña:</label>
                    <input type=\"password\" name=\"password\" id=\"password\" />
                    <input type=\"submit\" value=\"Aceptar\" id=\"aceptar\"/>
                    <br/>
                </div>
                    <a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("login_signup");
        echo "\" class=\"small button\">Nuevo Usuario</a>
            </div>    
        </form>
    </div>
";
        
        $__internal_4ba4892e107d70e2872ae392e9830ec41cd7b7b01c0856a8b05b15fcc0d8209f->leave($__internal_4ba4892e107d70e2872ae392e9830ec41cd7b7b01c0856a8b05b15fcc0d8209f_prof);

    }

    public function getTemplateName()
    {
        return "ClinicaAppBundle:Usuario:login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  86 => 24,  70 => 11,  65 => 8,  59 => 7,  50 => 5,  46 => 4,  42 => 3,  39 => 2,  33 => 1,  26 => 7,  24 => 1,);
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
/*           */
/*         */
/*         <form name="form1" method="POST" action="{{path('login')}}">*/
/*             <div class="large-4 columns">*/
/*                 <br/>*/
/*                 <br/>*/
/*                 <div class="large-push-10 columns">*/
/*                     <label>Usuario:</label>*/
/*                     <input type="text" name="username" id="username" />*/
/*                     <br/>*/
/*                     <label>Contraseña:</label>*/
/*                     <input type="password" name="password" id="password" />*/
/*                     <input type="submit" value="Aceptar" id="aceptar"/>*/
/*                     <br/>*/
/*                 </div>*/
/*                     <a href="{{path('login_signup') }}" class="small button">Nuevo Usuario</a>*/
/*             </div>    */
/*         </form>*/
/*     </div>*/
/* {%endblock %}*/
