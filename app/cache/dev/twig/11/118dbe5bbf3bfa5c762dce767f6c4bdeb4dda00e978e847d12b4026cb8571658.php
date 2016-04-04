<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_9237ad217acc82e22ca16302f0a110126daaa4c0e926ad7fd861c238c247d7cd extends Twig_Template
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
        $__internal_8eaac1b99c6d1023a2232230e32c7db25331fca4678e7ccf593e9be6b712b97f = $this->env->getExtension("native_profiler");
        $__internal_8eaac1b99c6d1023a2232230e32c7db25331fca4678e7ccf593e9be6b712b97f->enter($__internal_8eaac1b99c6d1023a2232230e32c7db25331fca4678e7ccf593e9be6b712b97f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_8eaac1b99c6d1023a2232230e32c7db25331fca4678e7ccf593e9be6b712b97f->leave($__internal_8eaac1b99c6d1023a2232230e32c7db25331fca4678e7ccf593e9be6b712b97f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
