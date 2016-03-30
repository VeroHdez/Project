<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_0b8d4690f59bd6421793974d3a17177c45cfccb83820b8c18e6359f4aab8b3aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_432105cf114a482a7532bcbe7108c6f2297a1c7350a92880983214d0d75c0c70 = $this->env->getExtension("native_profiler");
        $__internal_432105cf114a482a7532bcbe7108c6f2297a1c7350a92880983214d0d75c0c70->enter($__internal_432105cf114a482a7532bcbe7108c6f2297a1c7350a92880983214d0d75c0c70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_432105cf114a482a7532bcbe7108c6f2297a1c7350a92880983214d0d75c0c70->leave($__internal_432105cf114a482a7532bcbe7108c6f2297a1c7350a92880983214d0d75c0c70_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2a3d349c701a089b7aa15cb73beea080cdeaf92558b35e22ea042523fc0d7f44 = $this->env->getExtension("native_profiler");
        $__internal_2a3d349c701a089b7aa15cb73beea080cdeaf92558b35e22ea042523fc0d7f44->enter($__internal_2a3d349c701a089b7aa15cb73beea080cdeaf92558b35e22ea042523fc0d7f44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2a3d349c701a089b7aa15cb73beea080cdeaf92558b35e22ea042523fc0d7f44->leave($__internal_2a3d349c701a089b7aa15cb73beea080cdeaf92558b35e22ea042523fc0d7f44_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d8edd82d7ad5b0314c64a87a92d53be599f61fcb1544134a1a57ad159fd3d0ea = $this->env->getExtension("native_profiler");
        $__internal_d8edd82d7ad5b0314c64a87a92d53be599f61fcb1544134a1a57ad159fd3d0ea->enter($__internal_d8edd82d7ad5b0314c64a87a92d53be599f61fcb1544134a1a57ad159fd3d0ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d8edd82d7ad5b0314c64a87a92d53be599f61fcb1544134a1a57ad159fd3d0ea->leave($__internal_d8edd82d7ad5b0314c64a87a92d53be599f61fcb1544134a1a57ad159fd3d0ea_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bb6c61c90d6efe54b82f230f8b7c15e7530dafef8f3548c3f0eaa065591f8818 = $this->env->getExtension("native_profiler");
        $__internal_bb6c61c90d6efe54b82f230f8b7c15e7530dafef8f3548c3f0eaa065591f8818->enter($__internal_bb6c61c90d6efe54b82f230f8b7c15e7530dafef8f3548c3f0eaa065591f8818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_bb6c61c90d6efe54b82f230f8b7c15e7530dafef8f3548c3f0eaa065591f8818->leave($__internal_bb6c61c90d6efe54b82f230f8b7c15e7530dafef8f3548c3f0eaa065591f8818_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
