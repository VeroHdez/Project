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
        $__internal_d8aee611155f4bde26a5be49829745a5536c89324c022d5b849ab594f3b723bb = $this->env->getExtension("native_profiler");
        $__internal_d8aee611155f4bde26a5be49829745a5536c89324c022d5b849ab594f3b723bb->enter($__internal_d8aee611155f4bde26a5be49829745a5536c89324c022d5b849ab594f3b723bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d8aee611155f4bde26a5be49829745a5536c89324c022d5b849ab594f3b723bb->leave($__internal_d8aee611155f4bde26a5be49829745a5536c89324c022d5b849ab594f3b723bb_prof);

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
