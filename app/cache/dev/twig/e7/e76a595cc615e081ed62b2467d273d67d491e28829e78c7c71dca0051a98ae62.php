<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_32593cbc30ac6092a650640aeffa0c8d768dd8c46cdc8683be13ee4b3d1da739 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1c99ffe690e4e7f1ad25c6100af63192a1c88addd1c7c5377e8f2cde6562f703 = $this->env->getExtension("native_profiler");
        $__internal_1c99ffe690e4e7f1ad25c6100af63192a1c88addd1c7c5377e8f2cde6562f703->enter($__internal_1c99ffe690e4e7f1ad25c6100af63192a1c88addd1c7c5377e8f2cde6562f703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c99ffe690e4e7f1ad25c6100af63192a1c88addd1c7c5377e8f2cde6562f703->leave($__internal_1c99ffe690e4e7f1ad25c6100af63192a1c88addd1c7c5377e8f2cde6562f703_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_670f335ff300ce22789d8fccdcb87cedcee4e9934ad5ddfbc51fe8fc1111cc99 = $this->env->getExtension("native_profiler");
        $__internal_670f335ff300ce22789d8fccdcb87cedcee4e9934ad5ddfbc51fe8fc1111cc99->enter($__internal_670f335ff300ce22789d8fccdcb87cedcee4e9934ad5ddfbc51fe8fc1111cc99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_670f335ff300ce22789d8fccdcb87cedcee4e9934ad5ddfbc51fe8fc1111cc99->leave($__internal_670f335ff300ce22789d8fccdcb87cedcee4e9934ad5ddfbc51fe8fc1111cc99_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_10caf3be164aaf665dfa17daca1d2d5189f5fc23b7b952c4e473655d0fb54f18 = $this->env->getExtension("native_profiler");
        $__internal_10caf3be164aaf665dfa17daca1d2d5189f5fc23b7b952c4e473655d0fb54f18->enter($__internal_10caf3be164aaf665dfa17daca1d2d5189f5fc23b7b952c4e473655d0fb54f18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_10caf3be164aaf665dfa17daca1d2d5189f5fc23b7b952c4e473655d0fb54f18->leave($__internal_10caf3be164aaf665dfa17daca1d2d5189f5fc23b7b952c4e473655d0fb54f18_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1d39ffe1cd25823b0e179eea0157e656597699a5b986bb45fb24b736a0ec5402 = $this->env->getExtension("native_profiler");
        $__internal_1d39ffe1cd25823b0e179eea0157e656597699a5b986bb45fb24b736a0ec5402->enter($__internal_1d39ffe1cd25823b0e179eea0157e656597699a5b986bb45fb24b736a0ec5402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_1d39ffe1cd25823b0e179eea0157e656597699a5b986bb45fb24b736a0ec5402->leave($__internal_1d39ffe1cd25823b0e179eea0157e656597699a5b986bb45fb24b736a0ec5402_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
