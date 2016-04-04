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
        $__internal_5d9bb98d327b592f97e4e0347ecb5b1b76f40a4608e28cfa1f0e7b3cf1dd12bc = $this->env->getExtension("native_profiler");
        $__internal_5d9bb98d327b592f97e4e0347ecb5b1b76f40a4608e28cfa1f0e7b3cf1dd12bc->enter($__internal_5d9bb98d327b592f97e4e0347ecb5b1b76f40a4608e28cfa1f0e7b3cf1dd12bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_5d9bb98d327b592f97e4e0347ecb5b1b76f40a4608e28cfa1f0e7b3cf1dd12bc->leave($__internal_5d9bb98d327b592f97e4e0347ecb5b1b76f40a4608e28cfa1f0e7b3cf1dd12bc_prof);

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
