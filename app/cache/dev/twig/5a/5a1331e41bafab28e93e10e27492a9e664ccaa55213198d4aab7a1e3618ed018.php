<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_ed1ec09fae14bbd29c8903ecff319cc09b5b1be62c65efa8999089c17c6ee450 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c5b596a1a1f16e53456ac98d3153e95cead70921f9eec2a611c336c15dc8ee2c = $this->env->getExtension("native_profiler");
        $__internal_c5b596a1a1f16e53456ac98d3153e95cead70921f9eec2a611c336c15dc8ee2c->enter($__internal_c5b596a1a1f16e53456ac98d3153e95cead70921f9eec2a611c336c15dc8ee2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5b596a1a1f16e53456ac98d3153e95cead70921f9eec2a611c336c15dc8ee2c->leave($__internal_c5b596a1a1f16e53456ac98d3153e95cead70921f9eec2a611c336c15dc8ee2c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5e0ffa7f7d44ac813e87b23cc94b2925df39ba5ac7f639d097889abc88226e4e = $this->env->getExtension("native_profiler");
        $__internal_5e0ffa7f7d44ac813e87b23cc94b2925df39ba5ac7f639d097889abc88226e4e->enter($__internal_5e0ffa7f7d44ac813e87b23cc94b2925df39ba5ac7f639d097889abc88226e4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_5e0ffa7f7d44ac813e87b23cc94b2925df39ba5ac7f639d097889abc88226e4e->leave($__internal_5e0ffa7f7d44ac813e87b23cc94b2925df39ba5ac7f639d097889abc88226e4e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cc6dc35c7b8926d1c8c524d46de9dfb5720f608299a0e5c8da998cff2eecfd79 = $this->env->getExtension("native_profiler");
        $__internal_cc6dc35c7b8926d1c8c524d46de9dfb5720f608299a0e5c8da998cff2eecfd79->enter($__internal_cc6dc35c7b8926d1c8c524d46de9dfb5720f608299a0e5c8da998cff2eecfd79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_cc6dc35c7b8926d1c8c524d46de9dfb5720f608299a0e5c8da998cff2eecfd79->leave($__internal_cc6dc35c7b8926d1c8c524d46de9dfb5720f608299a0e5c8da998cff2eecfd79_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_15f2fb08277ebf4e7492d029cda7c848928df9c65e788e5911345b69788008a2 = $this->env->getExtension("native_profiler");
        $__internal_15f2fb08277ebf4e7492d029cda7c848928df9c65e788e5911345b69788008a2->enter($__internal_15f2fb08277ebf4e7492d029cda7c848928df9c65e788e5911345b69788008a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_15f2fb08277ebf4e7492d029cda7c848928df9c65e788e5911345b69788008a2->leave($__internal_15f2fb08277ebf4e7492d029cda7c848928df9c65e788e5911345b69788008a2_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_6bbaa3f8971038d21f9e8f9e1d74301d8f514e7b75cc5ad8d78b49e63e29c5fa = $this->env->getExtension("native_profiler");
        $__internal_6bbaa3f8971038d21f9e8f9e1d74301d8f514e7b75cc5ad8d78b49e63e29c5fa->enter($__internal_6bbaa3f8971038d21f9e8f9e1d74301d8f514e7b75cc5ad8d78b49e63e29c5fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_6bbaa3f8971038d21f9e8f9e1d74301d8f514e7b75cc5ad8d78b49e63e29c5fa->leave($__internal_6bbaa3f8971038d21f9e8f9e1d74301d8f514e7b75cc5ad8d78b49e63e29c5fa_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "TwigBundle::layout.html.twig" %}*/
/* */
/* {% block head %}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}" />*/
/* {% endblock %}*/
/* */
/* {% block title 'Web Configurator Bundle' %}*/
/* */
/* {% block body %}*/
/*     <div class="block">*/
/*         {% block content %}{% endblock %}*/
/*     </div>*/
/*     <div class="version">Symfony Standard Edition v.{{ version }}</div>*/
/* {% endblock %}*/
/* */
