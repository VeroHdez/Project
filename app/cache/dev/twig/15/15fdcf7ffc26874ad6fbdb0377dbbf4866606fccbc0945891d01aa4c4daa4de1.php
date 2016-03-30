<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_11f6eabb0a45904796a5e253b9d7db9e69731e910d911dcafdabaca14995d4d0 extends Twig_Template
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
        $__internal_124f0a87603ee19ac8ce12012ac0f28791343337ed3388d4f70afb4f3886d58f = $this->env->getExtension("native_profiler");
        $__internal_124f0a87603ee19ac8ce12012ac0f28791343337ed3388d4f70afb4f3886d58f->enter($__internal_124f0a87603ee19ac8ce12012ac0f28791343337ed3388d4f70afb4f3886d58f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_124f0a87603ee19ac8ce12012ac0f28791343337ed3388d4f70afb4f3886d58f->leave($__internal_124f0a87603ee19ac8ce12012ac0f28791343337ed3388d4f70afb4f3886d58f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
