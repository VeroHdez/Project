<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_72014b17c76debef54f1e66a34e379b5801e1d7176f75296a2f8a85d609e21f8 extends Twig_Template
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
        $__internal_86a0ea092c5d65380be61d8f20f93a0d66f6ddf43ab3d091a0e1ac7356931a24 = $this->env->getExtension("native_profiler");
        $__internal_86a0ea092c5d65380be61d8f20f93a0d66f6ddf43ab3d091a0e1ac7356931a24->enter($__internal_86a0ea092c5d65380be61d8f20f93a0d66f6ddf43ab3d091a0e1ac7356931a24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_86a0ea092c5d65380be61d8f20f93a0d66f6ddf43ab3d091a0e1ac7356931a24->leave($__internal_86a0ea092c5d65380be61d8f20f93a0d66f6ddf43ab3d091a0e1ac7356931a24_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
