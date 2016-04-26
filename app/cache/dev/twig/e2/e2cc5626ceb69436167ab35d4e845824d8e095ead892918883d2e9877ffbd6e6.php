<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_5f2a1ad2bd77e9530d0f9203c99056b07e3e0be4ee6216936968c5e7097dda87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_a35dabafb973a83d522d287cab55cb2b80ccd7b487151ecfac19778986b56d2e = $this->env->getExtension("native_profiler");
        $__internal_a35dabafb973a83d522d287cab55cb2b80ccd7b487151ecfac19778986b56d2e->enter($__internal_a35dabafb973a83d522d287cab55cb2b80ccd7b487151ecfac19778986b56d2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a35dabafb973a83d522d287cab55cb2b80ccd7b487151ecfac19778986b56d2e->leave($__internal_a35dabafb973a83d522d287cab55cb2b80ccd7b487151ecfac19778986b56d2e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f063fc813918a3c7b281acaf98ecec0e83d695503825d85835cf048086081f06 = $this->env->getExtension("native_profiler");
        $__internal_f063fc813918a3c7b281acaf98ecec0e83d695503825d85835cf048086081f06->enter($__internal_f063fc813918a3c7b281acaf98ecec0e83d695503825d85835cf048086081f06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f063fc813918a3c7b281acaf98ecec0e83d695503825d85835cf048086081f06->leave($__internal_f063fc813918a3c7b281acaf98ecec0e83d695503825d85835cf048086081f06_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_574cd9923dad6223da086d3d428f4f6e7c0a7277da63e6d4eb2003d03f30683f = $this->env->getExtension("native_profiler");
        $__internal_574cd9923dad6223da086d3d428f4f6e7c0a7277da63e6d4eb2003d03f30683f->enter($__internal_574cd9923dad6223da086d3d428f4f6e7c0a7277da63e6d4eb2003d03f30683f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_574cd9923dad6223da086d3d428f4f6e7c0a7277da63e6d4eb2003d03f30683f->leave($__internal_574cd9923dad6223da086d3d428f4f6e7c0a7277da63e6d4eb2003d03f30683f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b31558a6c2ae409d1c57ccd89f6f7af8d6bcaf7630a92c0dba7b695b11f686de = $this->env->getExtension("native_profiler");
        $__internal_b31558a6c2ae409d1c57ccd89f6f7af8d6bcaf7630a92c0dba7b695b11f686de->enter($__internal_b31558a6c2ae409d1c57ccd89f6f7af8d6bcaf7630a92c0dba7b695b11f686de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b31558a6c2ae409d1c57ccd89f6f7af8d6bcaf7630a92c0dba7b695b11f686de->leave($__internal_b31558a6c2ae409d1c57ccd89f6f7af8d6bcaf7630a92c0dba7b695b11f686de_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
