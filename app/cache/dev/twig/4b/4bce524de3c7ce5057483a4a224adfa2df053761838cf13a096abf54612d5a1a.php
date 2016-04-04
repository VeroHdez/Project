<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_219ee76da13904c2b855c0d819f7ed45ed16bfa3e409e952f03f893f142c6b9b extends Twig_Template
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
        $__internal_c26a3724a1efab5227662e7be75ca56e7b53f181156cfc16088455f53358f967 = $this->env->getExtension("native_profiler");
        $__internal_c26a3724a1efab5227662e7be75ca56e7b53f181156cfc16088455f53358f967->enter($__internal_c26a3724a1efab5227662e7be75ca56e7b53f181156cfc16088455f53358f967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_c26a3724a1efab5227662e7be75ca56e7b53f181156cfc16088455f53358f967->leave($__internal_c26a3724a1efab5227662e7be75ca56e7b53f181156cfc16088455f53358f967_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
