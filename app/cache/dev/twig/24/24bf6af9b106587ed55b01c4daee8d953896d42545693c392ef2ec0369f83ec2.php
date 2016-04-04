<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_6021a175acf425754e16e7356ad371e84c485822db5df215cef3e8e9b6f92412 extends Twig_Template
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
        $__internal_eefc009aa58e4170bd436bf145668811ce056b73fac06e9fa661ef92ca2bd1ae = $this->env->getExtension("native_profiler");
        $__internal_eefc009aa58e4170bd436bf145668811ce056b73fac06e9fa661ef92ca2bd1ae->enter($__internal_eefc009aa58e4170bd436bf145668811ce056b73fac06e9fa661ef92ca2bd1ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_eefc009aa58e4170bd436bf145668811ce056b73fac06e9fa661ef92ca2bd1ae->leave($__internal_eefc009aa58e4170bd436bf145668811ce056b73fac06e9fa661ef92ca2bd1ae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
