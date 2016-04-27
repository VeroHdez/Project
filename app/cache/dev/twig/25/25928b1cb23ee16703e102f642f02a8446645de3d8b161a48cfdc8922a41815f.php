<?php

/* ClinicaAppBundle:Usuario:newUsuario.html.twig */
class __TwigTemplate_6c0366f5a89f415251598a95705122020106ff09d293ecf96f4248cb8f8e0e1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'container' => array($this, 'block_container'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_74d9e209006a0f8e4ca8561a135e8bdf49d6129699865a9caadca878282a3bf6 = $this->env->getExtension("native_profiler");
        $__internal_74d9e209006a0f8e4ca8561a135e8bdf49d6129699865a9caadca878282a3bf6->enter($__internal_74d9e209006a0f8e4ca8561a135e8bdf49d6129699865a9caadca878282a3bf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ClinicaAppBundle:Usuario:newUsuario.html.twig"));

        // line 1
        echo "

";
        // line 3
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('container', $context, $blocks);
        
        $__internal_74d9e209006a0f8e4ca8561a135e8bdf49d6129699865a9caadca878282a3bf6->leave($__internal_74d9e209006a0f8e4ca8561a135e8bdf49d6129699865a9caadca878282a3bf6_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_329558e8cac5ead291ee78afab206e02e896bdaec2d747cddf36f16d83130ada = $this->env->getExtension("native_profiler");
        $__internal_329558e8cac5ead291ee78afab206e02e896bdaec2d747cddf36f16d83130ada->enter($__internal_329558e8cac5ead291ee78afab206e02e896bdaec2d747cddf36f16d83130ada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "           
            <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/clinicaapp/css/foundation.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/clinicaapp/css/app.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/clinicaapp/css/estilo.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_329558e8cac5ead291ee78afab206e02e896bdaec2d747cddf36f16d83130ada->leave($__internal_329558e8cac5ead291ee78afab206e02e896bdaec2d747cddf36f16d83130ada_prof);

    }

    // line 10
    public function block_container($context, array $blocks = array())
    {
        $__internal_b60ccc6cc3267564bb0bf1c45120bc96bee52bd7ebbeef83012ce14b89321dd9 = $this->env->getExtension("native_profiler");
        $__internal_b60ccc6cc3267564bb0bf1c45120bc96bee52bd7ebbeef83012ce14b89321dd9->enter($__internal_b60ccc6cc3267564bb0bf1c45120bc96bee52bd7ebbeef83012ce14b89321dd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 11
        echo "<div class=\"row\">
    <form id=\"form\"  method=\"POST\" action=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("login_signup");
        echo "\" >
        <div class=\"large-4 columns\">
            <br/>
            <br/>
            <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\" class=\"small button\">Entrar al Sistema</a>
            <div class=\"large-push-10 columns\">
                <h2>Alta de Usuario</h2>
                <label>Usuario</label>
                <input type=\"text\" id=\"username\" name=\"username\" >
                <label>Contraseña</label>
                <input type=\"password\" name=\"password\">
                <div>
                    <button class=\"small button\" type=\"submit\" >Create Account</button>
                </div>
            </div>
        </div>
    </form>
</div>
 ";
        
        $__internal_b60ccc6cc3267564bb0bf1c45120bc96bee52bd7ebbeef83012ce14b89321dd9->leave($__internal_b60ccc6cc3267564bb0bf1c45120bc96bee52bd7ebbeef83012ce14b89321dd9_prof);

    }

    public function getTemplateName()
    {
        return "ClinicaAppBundle:Usuario:newUsuario.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  82 => 16,  75 => 12,  72 => 11,  66 => 10,  57 => 7,  53 => 6,  49 => 5,  46 => 4,  40 => 3,  33 => 10,  30 => 9,  28 => 3,  24 => 1,);
    }
}
/* */
/* */
/* {% block stylesheets %}*/
/*            */
/*             <link rel="stylesheet" href="{{ asset('bundles/clinicaapp/css/foundation.css')}}" />*/
/*             <link rel="stylesheet" href="{{ asset('bundles/clinicaapp/css/app.css')}}" />*/
/*             <link rel="stylesheet" href="{{ asset('bundles/clinicaapp/css/estilo.css')}}" />*/
/* {% endblock %}*/
/* */
/* {%block container %}*/
/* <div class="row">*/
/*     <form id="form"  method="POST" action="{{path('login_signup')}}" >*/
/*         <div class="large-4 columns">*/
/*             <br/>*/
/*             <br/>*/
/*             <a href="{{path('login') }}" class="small button">Entrar al Sistema</a>*/
/*             <div class="large-push-10 columns">*/
/*                 <h2>Alta de Usuario</h2>*/
/*                 <label>Usuario</label>*/
/*                 <input type="text" id="username" name="username" >*/
/*                 <label>Contraseña</label>*/
/*                 <input type="password" name="password">*/
/*                 <div>*/
/*                     <button class="small button" type="submit" >Create Account</button>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </form>*/
/* </div>*/
/*  {%endblock%}*/
