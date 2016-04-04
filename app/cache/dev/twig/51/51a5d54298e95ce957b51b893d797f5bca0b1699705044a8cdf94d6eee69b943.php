<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_f644c4f896a696aaec2d6b57f849a71583a8383a10dc8802bab51e28a57a9042 extends Twig_Template
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
        $__internal_5c173fc9bf40bc4168227ee7f846779912b9afb3397f64aeca9078ab2a09f090 = $this->env->getExtension("native_profiler");
        $__internal_5c173fc9bf40bc4168227ee7f846779912b9afb3397f64aeca9078ab2a09f090->enter($__internal_5c173fc9bf40bc4168227ee7f846779912b9afb3397f64aeca9078ab2a09f090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_5c173fc9bf40bc4168227ee7f846779912b9afb3397f64aeca9078ab2a09f090->leave($__internal_5c173fc9bf40bc4168227ee7f846779912b9afb3397f64aeca9078ab2a09f090_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
