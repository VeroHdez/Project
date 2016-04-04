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
        $__internal_038626b0e87a5475bef1aa886568aab150f7969248f6c9efa0152bd7c5c6338c = $this->env->getExtension("native_profiler");
        $__internal_038626b0e87a5475bef1aa886568aab150f7969248f6c9efa0152bd7c5c6338c->enter($__internal_038626b0e87a5475bef1aa886568aab150f7969248f6c9efa0152bd7c5c6338c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_038626b0e87a5475bef1aa886568aab150f7969248f6c9efa0152bd7c5c6338c->leave($__internal_038626b0e87a5475bef1aa886568aab150f7969248f6c9efa0152bd7c5c6338c_prof);

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
