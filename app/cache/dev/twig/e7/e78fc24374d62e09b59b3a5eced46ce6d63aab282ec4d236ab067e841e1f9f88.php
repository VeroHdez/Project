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
        $__internal_eef86cae18f38fd4e704e92f1c824fef27ebf9d6d94f33e87a33aaad68ef3863 = $this->env->getExtension("native_profiler");
        $__internal_eef86cae18f38fd4e704e92f1c824fef27ebf9d6d94f33e87a33aaad68ef3863->enter($__internal_eef86cae18f38fd4e704e92f1c824fef27ebf9d6d94f33e87a33aaad68ef3863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_eef86cae18f38fd4e704e92f1c824fef27ebf9d6d94f33e87a33aaad68ef3863->leave($__internal_eef86cae18f38fd4e704e92f1c824fef27ebf9d6d94f33e87a33aaad68ef3863_prof);

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
