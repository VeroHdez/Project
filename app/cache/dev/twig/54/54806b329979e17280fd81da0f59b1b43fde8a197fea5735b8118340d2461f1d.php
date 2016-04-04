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
        $__internal_75a308847f07d85be07b5947aa81503d05c94bf662eb5f337e9d0b1799eab3f6 = $this->env->getExtension("native_profiler");
        $__internal_75a308847f07d85be07b5947aa81503d05c94bf662eb5f337e9d0b1799eab3f6->enter($__internal_75a308847f07d85be07b5947aa81503d05c94bf662eb5f337e9d0b1799eab3f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75a308847f07d85be07b5947aa81503d05c94bf662eb5f337e9d0b1799eab3f6->leave($__internal_75a308847f07d85be07b5947aa81503d05c94bf662eb5f337e9d0b1799eab3f6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_97c6dbc391bc512458da7e1f20f515af1b6f6bf90402890148529c56fb1af1fc = $this->env->getExtension("native_profiler");
        $__internal_97c6dbc391bc512458da7e1f20f515af1b6f6bf90402890148529c56fb1af1fc->enter($__internal_97c6dbc391bc512458da7e1f20f515af1b6f6bf90402890148529c56fb1af1fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_97c6dbc391bc512458da7e1f20f515af1b6f6bf90402890148529c56fb1af1fc->leave($__internal_97c6dbc391bc512458da7e1f20f515af1b6f6bf90402890148529c56fb1af1fc_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a1b3cdbb34b9d17e2300bd0d493a7c4f89ee9868a98100e1e3c9725fad046d8d = $this->env->getExtension("native_profiler");
        $__internal_a1b3cdbb34b9d17e2300bd0d493a7c4f89ee9868a98100e1e3c9725fad046d8d->enter($__internal_a1b3cdbb34b9d17e2300bd0d493a7c4f89ee9868a98100e1e3c9725fad046d8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a1b3cdbb34b9d17e2300bd0d493a7c4f89ee9868a98100e1e3c9725fad046d8d->leave($__internal_a1b3cdbb34b9d17e2300bd0d493a7c4f89ee9868a98100e1e3c9725fad046d8d_prof);

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
