<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_9153dd4643d310acbd49bc168de90c84f9b51b7d95736e65bfa198d06d26fc10 extends Twig_Template
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
        $__internal_99cca7d7e9ee95da6f1e24e3edab96ef5319216823973220784810124e0b0b9e = $this->env->getExtension("native_profiler");
        $__internal_99cca7d7e9ee95da6f1e24e3edab96ef5319216823973220784810124e0b0b9e->enter($__internal_99cca7d7e9ee95da6f1e24e3edab96ef5319216823973220784810124e0b0b9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_99cca7d7e9ee95da6f1e24e3edab96ef5319216823973220784810124e0b0b9e->leave($__internal_99cca7d7e9ee95da6f1e24e3edab96ef5319216823973220784810124e0b0b9e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
