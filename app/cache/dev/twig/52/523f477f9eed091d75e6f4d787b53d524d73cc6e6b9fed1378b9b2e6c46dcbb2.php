<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_293c89aee300fcff2f6f7cf537381fab903f4df240d31643b0ded53e5f598ca5 extends Twig_Template
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
        $__internal_2993081fb1e66663e95e9af416dd614bf7889380b741059275f01c260f490a42 = $this->env->getExtension("native_profiler");
        $__internal_2993081fb1e66663e95e9af416dd614bf7889380b741059275f01c260f490a42->enter($__internal_2993081fb1e66663e95e9af416dd614bf7889380b741059275f01c260f490a42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_2993081fb1e66663e95e9af416dd614bf7889380b741059275f01c260f490a42->leave($__internal_2993081fb1e66663e95e9af416dd614bf7889380b741059275f01c260f490a42_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
