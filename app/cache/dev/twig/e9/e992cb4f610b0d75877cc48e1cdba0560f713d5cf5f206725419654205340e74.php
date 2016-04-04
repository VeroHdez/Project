<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_556d3f603b893759f8e52d06b2af40d77d76bb8566f48e10a21f94f907302a51 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_cf3b0d2fcc87a7502d1f0c6eb7c79b6605b8d3a8355836c91c1342a4655d7318 = $this->env->getExtension("native_profiler");
        $__internal_cf3b0d2fcc87a7502d1f0c6eb7c79b6605b8d3a8355836c91c1342a4655d7318->enter($__internal_cf3b0d2fcc87a7502d1f0c6eb7c79b6605b8d3a8355836c91c1342a4655d7318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf3b0d2fcc87a7502d1f0c6eb7c79b6605b8d3a8355836c91c1342a4655d7318->leave($__internal_cf3b0d2fcc87a7502d1f0c6eb7c79b6605b8d3a8355836c91c1342a4655d7318_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7b67870df2cf937756465c9fc5dba608f03235f5734c90a407f82c2f9c2ccf45 = $this->env->getExtension("native_profiler");
        $__internal_7b67870df2cf937756465c9fc5dba608f03235f5734c90a407f82c2f9c2ccf45->enter($__internal_7b67870df2cf937756465c9fc5dba608f03235f5734c90a407f82c2f9c2ccf45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7b67870df2cf937756465c9fc5dba608f03235f5734c90a407f82c2f9c2ccf45->leave($__internal_7b67870df2cf937756465c9fc5dba608f03235f5734c90a407f82c2f9c2ccf45_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bfb4db5b84edf23608e7941d1c93a94740545b0f86a68b5f05b60df6b8193963 = $this->env->getExtension("native_profiler");
        $__internal_bfb4db5b84edf23608e7941d1c93a94740545b0f86a68b5f05b60df6b8193963->enter($__internal_bfb4db5b84edf23608e7941d1c93a94740545b0f86a68b5f05b60df6b8193963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_bfb4db5b84edf23608e7941d1c93a94740545b0f86a68b5f05b60df6b8193963->leave($__internal_bfb4db5b84edf23608e7941d1c93a94740545b0f86a68b5f05b60df6b8193963_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5a928ea1e653ecc5696bdbd472e5a52547ada585c69d1dbde087b8c8558c484e = $this->env->getExtension("native_profiler");
        $__internal_5a928ea1e653ecc5696bdbd472e5a52547ada585c69d1dbde087b8c8558c484e->enter($__internal_5a928ea1e653ecc5696bdbd472e5a52547ada585c69d1dbde087b8c8558c484e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_5a928ea1e653ecc5696bdbd472e5a52547ada585c69d1dbde087b8c8558c484e->leave($__internal_5a928ea1e653ecc5696bdbd472e5a52547ada585c69d1dbde087b8c8558c484e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
