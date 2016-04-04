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
        $__internal_b9a214e0f32bcd18fa33b2e4f1d59d3726c897f22da6ede29dbe1dd3b8d888c4 = $this->env->getExtension("native_profiler");
        $__internal_b9a214e0f32bcd18fa33b2e4f1d59d3726c897f22da6ede29dbe1dd3b8d888c4->enter($__internal_b9a214e0f32bcd18fa33b2e4f1d59d3726c897f22da6ede29dbe1dd3b8d888c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_b9a214e0f32bcd18fa33b2e4f1d59d3726c897f22da6ede29dbe1dd3b8d888c4->leave($__internal_b9a214e0f32bcd18fa33b2e4f1d59d3726c897f22da6ede29dbe1dd3b8d888c4_prof);

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
