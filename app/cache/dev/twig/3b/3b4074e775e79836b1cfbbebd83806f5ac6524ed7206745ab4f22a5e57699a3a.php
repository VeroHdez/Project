<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_47b9ce9358828bfc463b058cd8e14a323471149e3f4ec2edc60c3897f1f2d9be extends Twig_Template
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
        $__internal_c81a3f91390bf7ce8b7d1c6d58f17af7223e43cb4578c1385ca7d9f840946358 = $this->env->getExtension("native_profiler");
        $__internal_c81a3f91390bf7ce8b7d1c6d58f17af7223e43cb4578c1385ca7d9f840946358->enter($__internal_c81a3f91390bf7ce8b7d1c6d58f17af7223e43cb4578c1385ca7d9f840946358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_c81a3f91390bf7ce8b7d1c6d58f17af7223e43cb4578c1385ca7d9f840946358->leave($__internal_c81a3f91390bf7ce8b7d1c6d58f17af7223e43cb4578c1385ca7d9f840946358_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
