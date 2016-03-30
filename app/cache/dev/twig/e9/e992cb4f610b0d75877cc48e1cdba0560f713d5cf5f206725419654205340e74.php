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
        $__internal_b5f6a3d2b08d2caf0bb68f9261e0ac462c534db33052cfea47bb5d604ba7ff00 = $this->env->getExtension("native_profiler");
        $__internal_b5f6a3d2b08d2caf0bb68f9261e0ac462c534db33052cfea47bb5d604ba7ff00->enter($__internal_b5f6a3d2b08d2caf0bb68f9261e0ac462c534db33052cfea47bb5d604ba7ff00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5f6a3d2b08d2caf0bb68f9261e0ac462c534db33052cfea47bb5d604ba7ff00->leave($__internal_b5f6a3d2b08d2caf0bb68f9261e0ac462c534db33052cfea47bb5d604ba7ff00_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ec16df798c628d3861013a5701e20dcb4c6fb39fbfe279a1414d7b2ce25455a8 = $this->env->getExtension("native_profiler");
        $__internal_ec16df798c628d3861013a5701e20dcb4c6fb39fbfe279a1414d7b2ce25455a8->enter($__internal_ec16df798c628d3861013a5701e20dcb4c6fb39fbfe279a1414d7b2ce25455a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ec16df798c628d3861013a5701e20dcb4c6fb39fbfe279a1414d7b2ce25455a8->leave($__internal_ec16df798c628d3861013a5701e20dcb4c6fb39fbfe279a1414d7b2ce25455a8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f9f2a74d257e8251f7bfde5ac52d82a7f67b88a7b3cdb466967509d9eafd12a1 = $this->env->getExtension("native_profiler");
        $__internal_f9f2a74d257e8251f7bfde5ac52d82a7f67b88a7b3cdb466967509d9eafd12a1->enter($__internal_f9f2a74d257e8251f7bfde5ac52d82a7f67b88a7b3cdb466967509d9eafd12a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f9f2a74d257e8251f7bfde5ac52d82a7f67b88a7b3cdb466967509d9eafd12a1->leave($__internal_f9f2a74d257e8251f7bfde5ac52d82a7f67b88a7b3cdb466967509d9eafd12a1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b6856a79b7127a51f71d539e5981df1e9ec51671b51dc491b176188fe31d91b4 = $this->env->getExtension("native_profiler");
        $__internal_b6856a79b7127a51f71d539e5981df1e9ec51671b51dc491b176188fe31d91b4->enter($__internal_b6856a79b7127a51f71d539e5981df1e9ec51671b51dc491b176188fe31d91b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_b6856a79b7127a51f71d539e5981df1e9ec51671b51dc491b176188fe31d91b4->leave($__internal_b6856a79b7127a51f71d539e5981df1e9ec51671b51dc491b176188fe31d91b4_prof);

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
