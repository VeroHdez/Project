<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_c6963be337355c11e2abe175eab2e32e31e9fccc23fb9926f11904c4a523ac55 extends Twig_Template
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
        $__internal_3b6fd6ec846836e39d36c9497f7e20a93e6ec01b4bb762397c79902fc8a307db = $this->env->getExtension("native_profiler");
        $__internal_3b6fd6ec846836e39d36c9497f7e20a93e6ec01b4bb762397c79902fc8a307db->enter($__internal_3b6fd6ec846836e39d36c9497f7e20a93e6ec01b4bb762397c79902fc8a307db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_3b6fd6ec846836e39d36c9497f7e20a93e6ec01b4bb762397c79902fc8a307db->leave($__internal_3b6fd6ec846836e39d36c9497f7e20a93e6ec01b4bb762397c79902fc8a307db_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
