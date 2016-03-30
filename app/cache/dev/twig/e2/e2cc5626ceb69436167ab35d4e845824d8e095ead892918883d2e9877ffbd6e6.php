<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_5f2a1ad2bd77e9530d0f9203c99056b07e3e0be4ee6216936968c5e7097dda87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_ee652a64bbed558ef4768a403d4c2fa04b8e16be35dbafb87b5e9ffb22f1142f = $this->env->getExtension("native_profiler");
        $__internal_ee652a64bbed558ef4768a403d4c2fa04b8e16be35dbafb87b5e9ffb22f1142f->enter($__internal_ee652a64bbed558ef4768a403d4c2fa04b8e16be35dbafb87b5e9ffb22f1142f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee652a64bbed558ef4768a403d4c2fa04b8e16be35dbafb87b5e9ffb22f1142f->leave($__internal_ee652a64bbed558ef4768a403d4c2fa04b8e16be35dbafb87b5e9ffb22f1142f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a1df4758e11aaa7104125b9e79c794a04d35dab323c24a20e7f8225402f08682 = $this->env->getExtension("native_profiler");
        $__internal_a1df4758e11aaa7104125b9e79c794a04d35dab323c24a20e7f8225402f08682->enter($__internal_a1df4758e11aaa7104125b9e79c794a04d35dab323c24a20e7f8225402f08682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a1df4758e11aaa7104125b9e79c794a04d35dab323c24a20e7f8225402f08682->leave($__internal_a1df4758e11aaa7104125b9e79c794a04d35dab323c24a20e7f8225402f08682_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e09f10b7db67a81b8315e5849dcd8e6fe0bd09ae73b27d64b871a0d43959e947 = $this->env->getExtension("native_profiler");
        $__internal_e09f10b7db67a81b8315e5849dcd8e6fe0bd09ae73b27d64b871a0d43959e947->enter($__internal_e09f10b7db67a81b8315e5849dcd8e6fe0bd09ae73b27d64b871a0d43959e947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e09f10b7db67a81b8315e5849dcd8e6fe0bd09ae73b27d64b871a0d43959e947->leave($__internal_e09f10b7db67a81b8315e5849dcd8e6fe0bd09ae73b27d64b871a0d43959e947_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7411cce975c0d5cbb85a43f3aa14f1c059ee1d34b32c11c390473fd4720da7f8 = $this->env->getExtension("native_profiler");
        $__internal_7411cce975c0d5cbb85a43f3aa14f1c059ee1d34b32c11c390473fd4720da7f8->enter($__internal_7411cce975c0d5cbb85a43f3aa14f1c059ee1d34b32c11c390473fd4720da7f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7411cce975c0d5cbb85a43f3aa14f1c059ee1d34b32c11c390473fd4720da7f8->leave($__internal_7411cce975c0d5cbb85a43f3aa14f1c059ee1d34b32c11c390473fd4720da7f8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
