<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_79e4424c731b27e15d30f5fbad3263dbee6f616d8d0f7fd58eacacbae7e4c58f extends Twig_Template
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
        $__internal_5622a795d5d838649f88eeb93aa6252c5233847fd37b1bb92a61b5b75c5365a1 = $this->env->getExtension("native_profiler");
        $__internal_5622a795d5d838649f88eeb93aa6252c5233847fd37b1bb92a61b5b75c5365a1->enter($__internal_5622a795d5d838649f88eeb93aa6252c5233847fd37b1bb92a61b5b75c5365a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_5622a795d5d838649f88eeb93aa6252c5233847fd37b1bb92a61b5b75c5365a1->leave($__internal_5622a795d5d838649f88eeb93aa6252c5233847fd37b1bb92a61b5b75c5365a1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
