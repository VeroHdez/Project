<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_deaf01e20360201a792c0546b66adaa297f9ca57055e1c2da52cdccd6a17158c extends Twig_Template
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
        $__internal_25c108ba900a6c9b0f556de933fa9e84b5539d0b02e66d942ef4e89c5718549a = $this->env->getExtension("native_profiler");
        $__internal_25c108ba900a6c9b0f556de933fa9e84b5539d0b02e66d942ef4e89c5718549a->enter($__internal_25c108ba900a6c9b0f556de933fa9e84b5539d0b02e66d942ef4e89c5718549a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_25c108ba900a6c9b0f556de933fa9e84b5539d0b02e66d942ef4e89c5718549a->leave($__internal_25c108ba900a6c9b0f556de933fa9e84b5539d0b02e66d942ef4e89c5718549a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
