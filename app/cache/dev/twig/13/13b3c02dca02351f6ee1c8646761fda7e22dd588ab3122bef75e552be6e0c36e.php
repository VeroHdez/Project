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
        $__internal_1e7b9883a0ce6ac98c53909b7f68dac2bbe4c8bd3b3c4933c447c4a7e23b24b0 = $this->env->getExtension("native_profiler");
        $__internal_1e7b9883a0ce6ac98c53909b7f68dac2bbe4c8bd3b3c4933c447c4a7e23b24b0->enter($__internal_1e7b9883a0ce6ac98c53909b7f68dac2bbe4c8bd3b3c4933c447c4a7e23b24b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_1e7b9883a0ce6ac98c53909b7f68dac2bbe4c8bd3b3c4933c447c4a7e23b24b0->leave($__internal_1e7b9883a0ce6ac98c53909b7f68dac2bbe4c8bd3b3c4933c447c4a7e23b24b0_prof);

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
