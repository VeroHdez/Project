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
        $__internal_822858609d2220b24db0b056e2192eb385ffc8ea2cb5a7a1964ee3c1c912e1fb = $this->env->getExtension("native_profiler");
        $__internal_822858609d2220b24db0b056e2192eb385ffc8ea2cb5a7a1964ee3c1c912e1fb->enter($__internal_822858609d2220b24db0b056e2192eb385ffc8ea2cb5a7a1964ee3c1c912e1fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_822858609d2220b24db0b056e2192eb385ffc8ea2cb5a7a1964ee3c1c912e1fb->leave($__internal_822858609d2220b24db0b056e2192eb385ffc8ea2cb5a7a1964ee3c1c912e1fb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_63ddb1e6af6cd323941d2c9b78de30931a84409ef8ecd303dad49369dba2e139 = $this->env->getExtension("native_profiler");
        $__internal_63ddb1e6af6cd323941d2c9b78de30931a84409ef8ecd303dad49369dba2e139->enter($__internal_63ddb1e6af6cd323941d2c9b78de30931a84409ef8ecd303dad49369dba2e139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_63ddb1e6af6cd323941d2c9b78de30931a84409ef8ecd303dad49369dba2e139->leave($__internal_63ddb1e6af6cd323941d2c9b78de30931a84409ef8ecd303dad49369dba2e139_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9401b943394a607f9cd7c7ec5d9f6e1013ea9d04435213e3bdf2caa7962f9238 = $this->env->getExtension("native_profiler");
        $__internal_9401b943394a607f9cd7c7ec5d9f6e1013ea9d04435213e3bdf2caa7962f9238->enter($__internal_9401b943394a607f9cd7c7ec5d9f6e1013ea9d04435213e3bdf2caa7962f9238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_9401b943394a607f9cd7c7ec5d9f6e1013ea9d04435213e3bdf2caa7962f9238->leave($__internal_9401b943394a607f9cd7c7ec5d9f6e1013ea9d04435213e3bdf2caa7962f9238_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_f9932110583760732623f7467edb327f9fe7ce8bd43854f3febf39af8cfe6e7d = $this->env->getExtension("native_profiler");
        $__internal_f9932110583760732623f7467edb327f9fe7ce8bd43854f3febf39af8cfe6e7d->enter($__internal_f9932110583760732623f7467edb327f9fe7ce8bd43854f3febf39af8cfe6e7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f9932110583760732623f7467edb327f9fe7ce8bd43854f3febf39af8cfe6e7d->leave($__internal_f9932110583760732623f7467edb327f9fe7ce8bd43854f3febf39af8cfe6e7d_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_5a0c728089f2324717a603bb5ba6d48071dc11322e24c2ff11a1434fc6af6bd1 = $this->env->getExtension("native_profiler");
        $__internal_5a0c728089f2324717a603bb5ba6d48071dc11322e24c2ff11a1434fc6af6bd1->enter($__internal_5a0c728089f2324717a603bb5ba6d48071dc11322e24c2ff11a1434fc6af6bd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_5a0c728089f2324717a603bb5ba6d48071dc11322e24c2ff11a1434fc6af6bd1->leave($__internal_5a0c728089f2324717a603bb5ba6d48071dc11322e24c2ff11a1434fc6af6bd1_prof);

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
