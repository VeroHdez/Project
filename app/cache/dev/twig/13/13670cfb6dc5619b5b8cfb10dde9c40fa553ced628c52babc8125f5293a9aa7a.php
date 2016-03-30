<?php

/* @SensioDistribution/Configurator/layout.html.twig */
class __TwigTemplate_32055a8b7d0b9bbd5ac814a030ceb3338e99148fe8dcb0ca5de45ed98251adb4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "@SensioDistribution/Configurator/layout.html.twig", 1);
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
        $__internal_6f15c03192e055fe7d8b34749ba61e398d018cbf7e47510ea5292dfc4fbe6b03 = $this->env->getExtension("native_profiler");
        $__internal_6f15c03192e055fe7d8b34749ba61e398d018cbf7e47510ea5292dfc4fbe6b03->enter($__internal_6f15c03192e055fe7d8b34749ba61e398d018cbf7e47510ea5292dfc4fbe6b03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SensioDistribution/Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f15c03192e055fe7d8b34749ba61e398d018cbf7e47510ea5292dfc4fbe6b03->leave($__internal_6f15c03192e055fe7d8b34749ba61e398d018cbf7e47510ea5292dfc4fbe6b03_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fb55308c25936cdbf590db7680f1ccbfb62cb2f64d9efc35173076ad052834a2 = $this->env->getExtension("native_profiler");
        $__internal_fb55308c25936cdbf590db7680f1ccbfb62cb2f64d9efc35173076ad052834a2->enter($__internal_fb55308c25936cdbf590db7680f1ccbfb62cb2f64d9efc35173076ad052834a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_fb55308c25936cdbf590db7680f1ccbfb62cb2f64d9efc35173076ad052834a2->leave($__internal_fb55308c25936cdbf590db7680f1ccbfb62cb2f64d9efc35173076ad052834a2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_63086ee7025b887a7f7ca8ead5e4aaea6794496ec9ac20f5f09cd9c638378326 = $this->env->getExtension("native_profiler");
        $__internal_63086ee7025b887a7f7ca8ead5e4aaea6794496ec9ac20f5f09cd9c638378326->enter($__internal_63086ee7025b887a7f7ca8ead5e4aaea6794496ec9ac20f5f09cd9c638378326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_63086ee7025b887a7f7ca8ead5e4aaea6794496ec9ac20f5f09cd9c638378326->leave($__internal_63086ee7025b887a7f7ca8ead5e4aaea6794496ec9ac20f5f09cd9c638378326_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_d2c8b3811c39bffff3bf7f2859290e603c48aaf39e26c23bb1919a8564e4979f = $this->env->getExtension("native_profiler");
        $__internal_d2c8b3811c39bffff3bf7f2859290e603c48aaf39e26c23bb1919a8564e4979f->enter($__internal_d2c8b3811c39bffff3bf7f2859290e603c48aaf39e26c23bb1919a8564e4979f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d2c8b3811c39bffff3bf7f2859290e603c48aaf39e26c23bb1919a8564e4979f->leave($__internal_d2c8b3811c39bffff3bf7f2859290e603c48aaf39e26c23bb1919a8564e4979f_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_9c9c7472f1049265679aca3aa9858bf3eb06d48e7f0d8dd6669b81f55117d94d = $this->env->getExtension("native_profiler");
        $__internal_9c9c7472f1049265679aca3aa9858bf3eb06d48e7f0d8dd6669b81f55117d94d->enter($__internal_9c9c7472f1049265679aca3aa9858bf3eb06d48e7f0d8dd6669b81f55117d94d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_9c9c7472f1049265679aca3aa9858bf3eb06d48e7f0d8dd6669b81f55117d94d->leave($__internal_9c9c7472f1049265679aca3aa9858bf3eb06d48e7f0d8dd6669b81f55117d94d_prof);

    }

    public function getTemplateName()
    {
        return "@SensioDistribution/Configurator/layout.html.twig";
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
