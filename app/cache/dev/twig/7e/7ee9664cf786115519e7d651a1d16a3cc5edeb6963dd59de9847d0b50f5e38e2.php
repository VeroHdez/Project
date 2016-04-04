<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_1d616e3187d67c7e753374302b59784bcfef93b42f8c093449acb07c38e4e0ad extends Twig_Template
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
        $__internal_ef2a4480b209858e35d350f2eb7be5a5ea5bc3f461d0602490e78de0a22dd2ce = $this->env->getExtension("native_profiler");
        $__internal_ef2a4480b209858e35d350f2eb7be5a5ea5bc3f461d0602490e78de0a22dd2ce->enter($__internal_ef2a4480b209858e35d350f2eb7be5a5ea5bc3f461d0602490e78de0a22dd2ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_ef2a4480b209858e35d350f2eb7be5a5ea5bc3f461d0602490e78de0a22dd2ce->leave($__internal_ef2a4480b209858e35d350f2eb7be5a5ea5bc3f461d0602490e78de0a22dd2ce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
