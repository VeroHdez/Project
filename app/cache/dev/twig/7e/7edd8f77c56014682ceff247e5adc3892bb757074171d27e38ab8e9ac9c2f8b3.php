<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_dbcd49469225eb68196485289d03803c99d4ea047018e5a718374a0445784457 extends Twig_Template
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
        $__internal_59a7675b4d2f2ff260b28992fb113d8c2f5acdbec580db901ea42d45d71720c1 = $this->env->getExtension("native_profiler");
        $__internal_59a7675b4d2f2ff260b28992fb113d8c2f5acdbec580db901ea42d45d71720c1->enter($__internal_59a7675b4d2f2ff260b28992fb113d8c2f5acdbec580db901ea42d45d71720c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_59a7675b4d2f2ff260b28992fb113d8c2f5acdbec580db901ea42d45d71720c1->leave($__internal_59a7675b4d2f2ff260b28992fb113d8c2f5acdbec580db901ea42d45d71720c1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
