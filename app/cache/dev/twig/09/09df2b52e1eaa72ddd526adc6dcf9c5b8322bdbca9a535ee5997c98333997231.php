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
        $__internal_dd73f4e8b653c28c7ad1cf67b8f979c0e9e8bd522f4937d2148a18db173031f2 = $this->env->getExtension("native_profiler");
        $__internal_dd73f4e8b653c28c7ad1cf67b8f979c0e9e8bd522f4937d2148a18db173031f2->enter($__internal_dd73f4e8b653c28c7ad1cf67b8f979c0e9e8bd522f4937d2148a18db173031f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_dd73f4e8b653c28c7ad1cf67b8f979c0e9e8bd522f4937d2148a18db173031f2->leave($__internal_dd73f4e8b653c28c7ad1cf67b8f979c0e9e8bd522f4937d2148a18db173031f2_prof);

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
