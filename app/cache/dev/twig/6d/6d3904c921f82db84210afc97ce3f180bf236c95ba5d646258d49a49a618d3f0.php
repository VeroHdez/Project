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
        $__internal_453cf87cefdcbbb12732e2b325760f1ea031def73ef85d5e5002e2b8d9e52b05 = $this->env->getExtension("native_profiler");
        $__internal_453cf87cefdcbbb12732e2b325760f1ea031def73ef85d5e5002e2b8d9e52b05->enter($__internal_453cf87cefdcbbb12732e2b325760f1ea031def73ef85d5e5002e2b8d9e52b05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_453cf87cefdcbbb12732e2b325760f1ea031def73ef85d5e5002e2b8d9e52b05->leave($__internal_453cf87cefdcbbb12732e2b325760f1ea031def73ef85d5e5002e2b8d9e52b05_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_38f4064f51d89f78dfd76eec23487d74a6eec24ef93a63e4b819138e5a5047f4 = $this->env->getExtension("native_profiler");
        $__internal_38f4064f51d89f78dfd76eec23487d74a6eec24ef93a63e4b819138e5a5047f4->enter($__internal_38f4064f51d89f78dfd76eec23487d74a6eec24ef93a63e4b819138e5a5047f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_38f4064f51d89f78dfd76eec23487d74a6eec24ef93a63e4b819138e5a5047f4->leave($__internal_38f4064f51d89f78dfd76eec23487d74a6eec24ef93a63e4b819138e5a5047f4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7235db88c206e56ed70b370781850cd70ef7fd0e0938325d1a616dfa5172cb0c = $this->env->getExtension("native_profiler");
        $__internal_7235db88c206e56ed70b370781850cd70ef7fd0e0938325d1a616dfa5172cb0c->enter($__internal_7235db88c206e56ed70b370781850cd70ef7fd0e0938325d1a616dfa5172cb0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7235db88c206e56ed70b370781850cd70ef7fd0e0938325d1a616dfa5172cb0c->leave($__internal_7235db88c206e56ed70b370781850cd70ef7fd0e0938325d1a616dfa5172cb0c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b7cff27fd98fe0af7f2a734e66b0810f03759c1b72161a2285050e80226d1de5 = $this->env->getExtension("native_profiler");
        $__internal_b7cff27fd98fe0af7f2a734e66b0810f03759c1b72161a2285050e80226d1de5->enter($__internal_b7cff27fd98fe0af7f2a734e66b0810f03759c1b72161a2285050e80226d1de5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b7cff27fd98fe0af7f2a734e66b0810f03759c1b72161a2285050e80226d1de5->leave($__internal_b7cff27fd98fe0af7f2a734e66b0810f03759c1b72161a2285050e80226d1de5_prof);

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
