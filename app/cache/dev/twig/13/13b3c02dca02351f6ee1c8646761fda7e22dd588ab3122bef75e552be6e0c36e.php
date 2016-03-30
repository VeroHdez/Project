<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_870d4f7ebb7440a2153fbc3fd736ae9b732a741c16fe7b0ed22c64d37a16435e extends Twig_Template
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
        $__internal_bfe7825617f0105148f0e2d6b22faacdb31931c5888c13696592c3abaf7a08a8 = $this->env->getExtension("native_profiler");
        $__internal_bfe7825617f0105148f0e2d6b22faacdb31931c5888c13696592c3abaf7a08a8->enter($__internal_bfe7825617f0105148f0e2d6b22faacdb31931c5888c13696592c3abaf7a08a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_bfe7825617f0105148f0e2d6b22faacdb31931c5888c13696592c3abaf7a08a8->leave($__internal_bfe7825617f0105148f0e2d6b22faacdb31931c5888c13696592c3abaf7a08a8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
