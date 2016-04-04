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
        $__internal_87b42a2109b0a6d2f904a7e662c8d7701d638f841e3658422b622696abaf8b97 = $this->env->getExtension("native_profiler");
        $__internal_87b42a2109b0a6d2f904a7e662c8d7701d638f841e3658422b622696abaf8b97->enter($__internal_87b42a2109b0a6d2f904a7e662c8d7701d638f841e3658422b622696abaf8b97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_87b42a2109b0a6d2f904a7e662c8d7701d638f841e3658422b622696abaf8b97->leave($__internal_87b42a2109b0a6d2f904a7e662c8d7701d638f841e3658422b622696abaf8b97_prof);

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
