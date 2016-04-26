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
        $__internal_09694115bc0c4a83f635bc3bc1808fffd02f2a7bb5a570acc5dcfcd9aef2ace7 = $this->env->getExtension("native_profiler");
        $__internal_09694115bc0c4a83f635bc3bc1808fffd02f2a7bb5a570acc5dcfcd9aef2ace7->enter($__internal_09694115bc0c4a83f635bc3bc1808fffd02f2a7bb5a570acc5dcfcd9aef2ace7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09694115bc0c4a83f635bc3bc1808fffd02f2a7bb5a570acc5dcfcd9aef2ace7->leave($__internal_09694115bc0c4a83f635bc3bc1808fffd02f2a7bb5a570acc5dcfcd9aef2ace7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5d40b4f0f57a528b59662f6b09227c43bf795fcda98dda021374ab254d5be4c0 = $this->env->getExtension("native_profiler");
        $__internal_5d40b4f0f57a528b59662f6b09227c43bf795fcda98dda021374ab254d5be4c0->enter($__internal_5d40b4f0f57a528b59662f6b09227c43bf795fcda98dda021374ab254d5be4c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5d40b4f0f57a528b59662f6b09227c43bf795fcda98dda021374ab254d5be4c0->leave($__internal_5d40b4f0f57a528b59662f6b09227c43bf795fcda98dda021374ab254d5be4c0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_61f14c5788606273b2f2c13f3de48107e5804f15d47392acb1c5531be1e62715 = $this->env->getExtension("native_profiler");
        $__internal_61f14c5788606273b2f2c13f3de48107e5804f15d47392acb1c5531be1e62715->enter($__internal_61f14c5788606273b2f2c13f3de48107e5804f15d47392acb1c5531be1e62715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_61f14c5788606273b2f2c13f3de48107e5804f15d47392acb1c5531be1e62715->leave($__internal_61f14c5788606273b2f2c13f3de48107e5804f15d47392acb1c5531be1e62715_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e2acb81c5a556b1209e2154a2d0ecd09773c92d8e40a7d6608076947c80a3ad0 = $this->env->getExtension("native_profiler");
        $__internal_e2acb81c5a556b1209e2154a2d0ecd09773c92d8e40a7d6608076947c80a3ad0->enter($__internal_e2acb81c5a556b1209e2154a2d0ecd09773c92d8e40a7d6608076947c80a3ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_e2acb81c5a556b1209e2154a2d0ecd09773c92d8e40a7d6608076947c80a3ad0->leave($__internal_e2acb81c5a556b1209e2154a2d0ecd09773c92d8e40a7d6608076947c80a3ad0_prof);

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
