<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_55ddf88be76ea3de7b66551ead62f325eb32523583b673fce611554da41ad120 extends Twig_Template
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
        $__internal_6a2fd375cd0ae790331b6c04bcb04cffae80c745101950c2c8b8c90b027a9381 = $this->env->getExtension("native_profiler");
        $__internal_6a2fd375cd0ae790331b6c04bcb04cffae80c745101950c2c8b8c90b027a9381->enter($__internal_6a2fd375cd0ae790331b6c04bcb04cffae80c745101950c2c8b8c90b027a9381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_6a2fd375cd0ae790331b6c04bcb04cffae80c745101950c2c8b8c90b027a9381->leave($__internal_6a2fd375cd0ae790331b6c04bcb04cffae80c745101950c2c8b8c90b027a9381_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
