<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_22f991c3c2143686b059d2c72a54c7abb73dfeb9e226c02887d0d635f369be6e extends Twig_Template
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
        $__internal_f06271485e46762a4852d4ecb63113a145103ae72890a98a83dfc30764d1638e = $this->env->getExtension("native_profiler");
        $__internal_f06271485e46762a4852d4ecb63113a145103ae72890a98a83dfc30764d1638e->enter($__internal_f06271485e46762a4852d4ecb63113a145103ae72890a98a83dfc30764d1638e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_f06271485e46762a4852d4ecb63113a145103ae72890a98a83dfc30764d1638e->leave($__internal_f06271485e46762a4852d4ecb63113a145103ae72890a98a83dfc30764d1638e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
