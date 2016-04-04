<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_5f7b232702d54a4632fc4072967daab364c292c19754f737c9779c7d84ea8947 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a0ab6c540156a246c000f52ac25b35d874ecb7a81874d2cd05a89b65ebb753db = $this->env->getExtension("native_profiler");
        $__internal_a0ab6c540156a246c000f52ac25b35d874ecb7a81874d2cd05a89b65ebb753db->enter($__internal_a0ab6c540156a246c000f52ac25b35d874ecb7a81874d2cd05a89b65ebb753db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_a0ab6c540156a246c000f52ac25b35d874ecb7a81874d2cd05a89b65ebb753db->leave($__internal_a0ab6c540156a246c000f52ac25b35d874ecb7a81874d2cd05a89b65ebb753db_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
