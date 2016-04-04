<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_5fc2776eb8d6f1304794e1e2451b6d56a59142f625b176f7cbb3a85d049dbfea extends Twig_Template
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
        $__internal_e7f51d3b0a5db3b109de8e86db0f8aab38f3ea8df852ea0e17638a7f1d16c415 = $this->env->getExtension("native_profiler");
        $__internal_e7f51d3b0a5db3b109de8e86db0f8aab38f3ea8df852ea0e17638a7f1d16c415->enter($__internal_e7f51d3b0a5db3b109de8e86db0f8aab38f3ea8df852ea0e17638a7f1d16c415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_e7f51d3b0a5db3b109de8e86db0f8aab38f3ea8df852ea0e17638a7f1d16c415->leave($__internal_e7f51d3b0a5db3b109de8e86db0f8aab38f3ea8df852ea0e17638a7f1d16c415_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
