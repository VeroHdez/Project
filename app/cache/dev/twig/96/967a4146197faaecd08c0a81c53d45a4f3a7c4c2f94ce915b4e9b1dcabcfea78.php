<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_05794f541f7703bf096378db64497788b5c82e330be2f756690268fdaa5fe2b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6723d0ac54d4806d384611a88d6e993680f4e8c9ae57e5ea7e31c957702ea863 = $this->env->getExtension("native_profiler");
        $__internal_6723d0ac54d4806d384611a88d6e993680f4e8c9ae57e5ea7e31c957702ea863->enter($__internal_6723d0ac54d4806d384611a88d6e993680f4e8c9ae57e5ea7e31c957702ea863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6723d0ac54d4806d384611a88d6e993680f4e8c9ae57e5ea7e31c957702ea863->leave($__internal_6723d0ac54d4806d384611a88d6e993680f4e8c9ae57e5ea7e31c957702ea863_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ddb9171712448aab6039b702ace4b216424b5b915246bf1ce7522a7c43611784 = $this->env->getExtension("native_profiler");
        $__internal_ddb9171712448aab6039b702ace4b216424b5b915246bf1ce7522a7c43611784->enter($__internal_ddb9171712448aab6039b702ace4b216424b5b915246bf1ce7522a7c43611784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ddb9171712448aab6039b702ace4b216424b5b915246bf1ce7522a7c43611784->leave($__internal_ddb9171712448aab6039b702ace4b216424b5b915246bf1ce7522a7c43611784_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9223dc76b36f31c911d837491a052f4afaa2feff33e33731453171c83d2e9c05 = $this->env->getExtension("native_profiler");
        $__internal_9223dc76b36f31c911d837491a052f4afaa2feff33e33731453171c83d2e9c05->enter($__internal_9223dc76b36f31c911d837491a052f4afaa2feff33e33731453171c83d2e9c05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_9223dc76b36f31c911d837491a052f4afaa2feff33e33731453171c83d2e9c05->leave($__internal_9223dc76b36f31c911d837491a052f4afaa2feff33e33731453171c83d2e9c05_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
