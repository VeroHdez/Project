<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_901c9be8b323b67e637f61809303eb9eb26b33a0a20df38150cea8429891ffc2 extends Twig_Template
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
        $__internal_6b2db2980dfec4c83bb93c66ccb207a39b0fee0954ee0023291d1ee6de31701b = $this->env->getExtension("native_profiler");
        $__internal_6b2db2980dfec4c83bb93c66ccb207a39b0fee0954ee0023291d1ee6de31701b->enter($__internal_6b2db2980dfec4c83bb93c66ccb207a39b0fee0954ee0023291d1ee6de31701b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_6b2db2980dfec4c83bb93c66ccb207a39b0fee0954ee0023291d1ee6de31701b->leave($__internal_6b2db2980dfec4c83bb93c66ccb207a39b0fee0954ee0023291d1ee6de31701b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
