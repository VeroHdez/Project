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
        $__internal_0fdae26cf671df70346dfc54ac40a771c18779325af27133b21deaf7b18ae2da = $this->env->getExtension("native_profiler");
        $__internal_0fdae26cf671df70346dfc54ac40a771c18779325af27133b21deaf7b18ae2da->enter($__internal_0fdae26cf671df70346dfc54ac40a771c18779325af27133b21deaf7b18ae2da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fdae26cf671df70346dfc54ac40a771c18779325af27133b21deaf7b18ae2da->leave($__internal_0fdae26cf671df70346dfc54ac40a771c18779325af27133b21deaf7b18ae2da_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b1a3eec22771c0b80fec2cacbd8beaccc9c4158b9708676f174774859f8ef7c3 = $this->env->getExtension("native_profiler");
        $__internal_b1a3eec22771c0b80fec2cacbd8beaccc9c4158b9708676f174774859f8ef7c3->enter($__internal_b1a3eec22771c0b80fec2cacbd8beaccc9c4158b9708676f174774859f8ef7c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b1a3eec22771c0b80fec2cacbd8beaccc9c4158b9708676f174774859f8ef7c3->leave($__internal_b1a3eec22771c0b80fec2cacbd8beaccc9c4158b9708676f174774859f8ef7c3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_76859e7a2e534719607310b0598061cecb8c31c99606fb6e63e39bcdf1d2c8e8 = $this->env->getExtension("native_profiler");
        $__internal_76859e7a2e534719607310b0598061cecb8c31c99606fb6e63e39bcdf1d2c8e8->enter($__internal_76859e7a2e534719607310b0598061cecb8c31c99606fb6e63e39bcdf1d2c8e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_76859e7a2e534719607310b0598061cecb8c31c99606fb6e63e39bcdf1d2c8e8->leave($__internal_76859e7a2e534719607310b0598061cecb8c31c99606fb6e63e39bcdf1d2c8e8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_56097afbb83e8925ddacada506bf18718e4a3b8fd8288f2ea0434c157e21bc5e = $this->env->getExtension("native_profiler");
        $__internal_56097afbb83e8925ddacada506bf18718e4a3b8fd8288f2ea0434c157e21bc5e->enter($__internal_56097afbb83e8925ddacada506bf18718e4a3b8fd8288f2ea0434c157e21bc5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_56097afbb83e8925ddacada506bf18718e4a3b8fd8288f2ea0434c157e21bc5e->leave($__internal_56097afbb83e8925ddacada506bf18718e4a3b8fd8288f2ea0434c157e21bc5e_prof);

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
