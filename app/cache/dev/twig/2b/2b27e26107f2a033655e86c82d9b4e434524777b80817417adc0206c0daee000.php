<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_84f8e6ad8d8a7a0973ec9d1a920a80bcc6f7772153083b474e1393a9674e9987 extends Twig_Template
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
        $__internal_c2f254f976662d05904153cd563c0ddd266653de4be8d50adfd1977937dc7943 = $this->env->getExtension("native_profiler");
        $__internal_c2f254f976662d05904153cd563c0ddd266653de4be8d50adfd1977937dc7943->enter($__internal_c2f254f976662d05904153cd563c0ddd266653de4be8d50adfd1977937dc7943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_c2f254f976662d05904153cd563c0ddd266653de4be8d50adfd1977937dc7943->leave($__internal_c2f254f976662d05904153cd563c0ddd266653de4be8d50adfd1977937dc7943_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
