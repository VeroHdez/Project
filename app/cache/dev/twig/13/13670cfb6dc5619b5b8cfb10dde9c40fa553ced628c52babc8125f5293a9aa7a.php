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
        $__internal_ec178919cfdf3dc80e21dab22970de4a45eb04af3120d6baf38e36ff9cf97446 = $this->env->getExtension("native_profiler");
        $__internal_ec178919cfdf3dc80e21dab22970de4a45eb04af3120d6baf38e36ff9cf97446->enter($__internal_ec178919cfdf3dc80e21dab22970de4a45eb04af3120d6baf38e36ff9cf97446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SensioDistribution/Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec178919cfdf3dc80e21dab22970de4a45eb04af3120d6baf38e36ff9cf97446->leave($__internal_ec178919cfdf3dc80e21dab22970de4a45eb04af3120d6baf38e36ff9cf97446_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e3074c72025a5a1999fc9e3acc031abbbddd40de70f7f9348580d6edcee199f6 = $this->env->getExtension("native_profiler");
        $__internal_e3074c72025a5a1999fc9e3acc031abbbddd40de70f7f9348580d6edcee199f6->enter($__internal_e3074c72025a5a1999fc9e3acc031abbbddd40de70f7f9348580d6edcee199f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_e3074c72025a5a1999fc9e3acc031abbbddd40de70f7f9348580d6edcee199f6->leave($__internal_e3074c72025a5a1999fc9e3acc031abbbddd40de70f7f9348580d6edcee199f6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4cd433e555be4cca2322089f0fb28a833e1fe2f2a632b227650f9fe136b44668 = $this->env->getExtension("native_profiler");
        $__internal_4cd433e555be4cca2322089f0fb28a833e1fe2f2a632b227650f9fe136b44668->enter($__internal_4cd433e555be4cca2322089f0fb28a833e1fe2f2a632b227650f9fe136b44668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_4cd433e555be4cca2322089f0fb28a833e1fe2f2a632b227650f9fe136b44668->leave($__internal_4cd433e555be4cca2322089f0fb28a833e1fe2f2a632b227650f9fe136b44668_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_405e0334f709d80dd15aa43f290c7c6c2bf5e5f2406d211fb04aa2a55f70bca1 = $this->env->getExtension("native_profiler");
        $__internal_405e0334f709d80dd15aa43f290c7c6c2bf5e5f2406d211fb04aa2a55f70bca1->enter($__internal_405e0334f709d80dd15aa43f290c7c6c2bf5e5f2406d211fb04aa2a55f70bca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_405e0334f709d80dd15aa43f290c7c6c2bf5e5f2406d211fb04aa2a55f70bca1->leave($__internal_405e0334f709d80dd15aa43f290c7c6c2bf5e5f2406d211fb04aa2a55f70bca1_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_5e52c0805c94c875517e64aa53fbc7b9de6f51a8364e436dd1337db4b546e31d = $this->env->getExtension("native_profiler");
        $__internal_5e52c0805c94c875517e64aa53fbc7b9de6f51a8364e436dd1337db4b546e31d->enter($__internal_5e52c0805c94c875517e64aa53fbc7b9de6f51a8364e436dd1337db4b546e31d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_5e52c0805c94c875517e64aa53fbc7b9de6f51a8364e436dd1337db4b546e31d->leave($__internal_5e52c0805c94c875517e64aa53fbc7b9de6f51a8364e436dd1337db4b546e31d_prof);

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
