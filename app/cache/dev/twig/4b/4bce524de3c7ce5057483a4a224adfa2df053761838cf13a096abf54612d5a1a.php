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
        $__internal_d6d914c820869edb20d7d88fd8a2b43f3e71dd54325d6331f233e3631eee5534 = $this->env->getExtension("native_profiler");
        $__internal_d6d914c820869edb20d7d88fd8a2b43f3e71dd54325d6331f233e3631eee5534->enter($__internal_d6d914c820869edb20d7d88fd8a2b43f3e71dd54325d6331f233e3631eee5534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_d6d914c820869edb20d7d88fd8a2b43f3e71dd54325d6331f233e3631eee5534->leave($__internal_d6d914c820869edb20d7d88fd8a2b43f3e71dd54325d6331f233e3631eee5534_prof);

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
