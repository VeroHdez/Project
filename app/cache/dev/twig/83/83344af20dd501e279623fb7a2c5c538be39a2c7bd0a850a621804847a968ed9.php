<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_a8c46322dc773910a54a7c4cece2356a8a4bd14eb08c2eeb03251583a67dc9d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_80ed45a82d4178c74e6dc4737dd333e6a076c7d65e83327a6b24d2142120c5bc = $this->env->getExtension("native_profiler");
        $__internal_80ed45a82d4178c74e6dc4737dd333e6a076c7d65e83327a6b24d2142120c5bc->enter($__internal_80ed45a82d4178c74e6dc4737dd333e6a076c7d65e83327a6b24d2142120c5bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80ed45a82d4178c74e6dc4737dd333e6a076c7d65e83327a6b24d2142120c5bc->leave($__internal_80ed45a82d4178c74e6dc4737dd333e6a076c7d65e83327a6b24d2142120c5bc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7532e243668cd307a1a75a18690ec244d49dd49392849d98564fed6fe0617f4a = $this->env->getExtension("native_profiler");
        $__internal_7532e243668cd307a1a75a18690ec244d49dd49392849d98564fed6fe0617f4a->enter($__internal_7532e243668cd307a1a75a18690ec244d49dd49392849d98564fed6fe0617f4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7532e243668cd307a1a75a18690ec244d49dd49392849d98564fed6fe0617f4a->leave($__internal_7532e243668cd307a1a75a18690ec244d49dd49392849d98564fed6fe0617f4a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9c3438060f556644157ef61903fd3ea852e1b46039638c6b6abaad8b68accb2c = $this->env->getExtension("native_profiler");
        $__internal_9c3438060f556644157ef61903fd3ea852e1b46039638c6b6abaad8b68accb2c->enter($__internal_9c3438060f556644157ef61903fd3ea852e1b46039638c6b6abaad8b68accb2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9c3438060f556644157ef61903fd3ea852e1b46039638c6b6abaad8b68accb2c->leave($__internal_9c3438060f556644157ef61903fd3ea852e1b46039638c6b6abaad8b68accb2c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_77cd6bf74dbeb4181804f100e837aeae96d1a83dc2894c2f323d73b9dff28387 = $this->env->getExtension("native_profiler");
        $__internal_77cd6bf74dbeb4181804f100e837aeae96d1a83dc2894c2f323d73b9dff28387->enter($__internal_77cd6bf74dbeb4181804f100e837aeae96d1a83dc2894c2f323d73b9dff28387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_77cd6bf74dbeb4181804f100e837aeae96d1a83dc2894c2f323d73b9dff28387->leave($__internal_77cd6bf74dbeb4181804f100e837aeae96d1a83dc2894c2f323d73b9dff28387_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
