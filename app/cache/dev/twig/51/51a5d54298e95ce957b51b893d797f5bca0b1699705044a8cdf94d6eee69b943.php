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
        $__internal_1564efb2941bdabd483cceac7d8d5dbdfaf4bc7b4405100cc2d4f37a2d886b9f = $this->env->getExtension("native_profiler");
        $__internal_1564efb2941bdabd483cceac7d8d5dbdfaf4bc7b4405100cc2d4f37a2d886b9f->enter($__internal_1564efb2941bdabd483cceac7d8d5dbdfaf4bc7b4405100cc2d4f37a2d886b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_1564efb2941bdabd483cceac7d8d5dbdfaf4bc7b4405100cc2d4f37a2d886b9f->leave($__internal_1564efb2941bdabd483cceac7d8d5dbdfaf4bc7b4405100cc2d4f37a2d886b9f_prof);

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
