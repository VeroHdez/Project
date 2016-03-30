<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_a11f472d748535fad8d5f2072a843131d177686b526ecfe76fd5999ba02c3749 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_515bedc38a730df678d57cc33934a39f62efc8ab76811f7e5695d1b07fc8dc6f = $this->env->getExtension("native_profiler");
        $__internal_515bedc38a730df678d57cc33934a39f62efc8ab76811f7e5695d1b07fc8dc6f->enter($__internal_515bedc38a730df678d57cc33934a39f62efc8ab76811f7e5695d1b07fc8dc6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_515bedc38a730df678d57cc33934a39f62efc8ab76811f7e5695d1b07fc8dc6f->leave($__internal_515bedc38a730df678d57cc33934a39f62efc8ab76811f7e5695d1b07fc8dc6f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9e307b10db4686c20583addd5695b973309e5836a1091c9fc518290705de1a4a = $this->env->getExtension("native_profiler");
        $__internal_9e307b10db4686c20583addd5695b973309e5836a1091c9fc518290705de1a4a->enter($__internal_9e307b10db4686c20583addd5695b973309e5836a1091c9fc518290705de1a4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_9e307b10db4686c20583addd5695b973309e5836a1091c9fc518290705de1a4a->leave($__internal_9e307b10db4686c20583addd5695b973309e5836a1091c9fc518290705de1a4a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ee81ea8a801b4e75d918a196739c59fc8cb65b0f15214de0ce400a6ffda21cd = $this->env->getExtension("native_profiler");
        $__internal_1ee81ea8a801b4e75d918a196739c59fc8cb65b0f15214de0ce400a6ffda21cd->enter($__internal_1ee81ea8a801b4e75d918a196739c59fc8cb65b0f15214de0ce400a6ffda21cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1ee81ea8a801b4e75d918a196739c59fc8cb65b0f15214de0ce400a6ffda21cd->leave($__internal_1ee81ea8a801b4e75d918a196739c59fc8cb65b0f15214de0ce400a6ffda21cd_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
