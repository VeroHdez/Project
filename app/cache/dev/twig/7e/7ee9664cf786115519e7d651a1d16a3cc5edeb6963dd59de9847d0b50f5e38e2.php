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
        $__internal_23a0aa55a524bc0e33d74ae1fe704790116462ccb95916fd6665b988da64c1e4 = $this->env->getExtension("native_profiler");
        $__internal_23a0aa55a524bc0e33d74ae1fe704790116462ccb95916fd6665b988da64c1e4->enter($__internal_23a0aa55a524bc0e33d74ae1fe704790116462ccb95916fd6665b988da64c1e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_23a0aa55a524bc0e33d74ae1fe704790116462ccb95916fd6665b988da64c1e4->leave($__internal_23a0aa55a524bc0e33d74ae1fe704790116462ccb95916fd6665b988da64c1e4_prof);

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
