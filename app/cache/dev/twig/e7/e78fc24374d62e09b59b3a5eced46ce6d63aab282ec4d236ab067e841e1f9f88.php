<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_79ecd1b13b64d11260843cfb166c3baa704e411713850589c1b3b234b77b060d extends Twig_Template
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
        $__internal_6f0474fc10c775b5bbb893b961bbfca6b4c0d5a9557223abd40be45e76b6041b = $this->env->getExtension("native_profiler");
        $__internal_6f0474fc10c775b5bbb893b961bbfca6b4c0d5a9557223abd40be45e76b6041b->enter($__internal_6f0474fc10c775b5bbb893b961bbfca6b4c0d5a9557223abd40be45e76b6041b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_6f0474fc10c775b5bbb893b961bbfca6b4c0d5a9557223abd40be45e76b6041b->leave($__internal_6f0474fc10c775b5bbb893b961bbfca6b4c0d5a9557223abd40be45e76b6041b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
