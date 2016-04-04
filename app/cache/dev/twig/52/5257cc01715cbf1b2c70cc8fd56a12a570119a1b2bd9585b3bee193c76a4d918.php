<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_312fbda3219c4148c166225d2df1e47d1b01dbb7343d5cdfc6bc78e65692e39e extends Twig_Template
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
        $__internal_5190102fcf6c742d0eb9c0163c6aaea46ae9fa421e7d6e2a953e2d8c1209a26a = $this->env->getExtension("native_profiler");
        $__internal_5190102fcf6c742d0eb9c0163c6aaea46ae9fa421e7d6e2a953e2d8c1209a26a->enter($__internal_5190102fcf6c742d0eb9c0163c6aaea46ae9fa421e7d6e2a953e2d8c1209a26a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_5190102fcf6c742d0eb9c0163c6aaea46ae9fa421e7d6e2a953e2d8c1209a26a->leave($__internal_5190102fcf6c742d0eb9c0163c6aaea46ae9fa421e7d6e2a953e2d8c1209a26a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php $method = strtoupper($method) ?>*/
/* <?php $form_method = $method === 'GET' || $method === 'POST' ? $method : 'POST' ?>*/
/* <form name="<?php echo $name ?>" method="<?php echo strtolower($form_method) ?>"<?php if ($action !== ''): ?> action="<?php echo $action ?>"<?php endif ?><?php foreach ($attr as $k => $v) { printf(' %s="%s"', $view->escape($k), $view->escape($v)); } ?><?php if ($multipart): ?> enctype="multipart/form-data"<?php endif ?>>*/
/* <?php if ($form_method !== $method): ?>*/
/*     <input type="hidden" name="_method" value="<?php echo $method ?>" />*/
/* <?php endif ?>*/
/* */
