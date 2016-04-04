<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_b64ae4926d56f0d26c42ace3184f108e6399cd664b8081a791368877a6fac03f extends Twig_Template
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
        $__internal_ec6bb85449cfb62b60f8f7fcf14e940aaa2c6e5977112a293b64c6c2836c1d51 = $this->env->getExtension("native_profiler");
        $__internal_ec6bb85449cfb62b60f8f7fcf14e940aaa2c6e5977112a293b64c6c2836c1d51->enter($__internal_ec6bb85449cfb62b60f8f7fcf14e940aaa2c6e5977112a293b64c6c2836c1d51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_ec6bb85449cfb62b60f8f7fcf14e940aaa2c6e5977112a293b64c6c2836c1d51->leave($__internal_ec6bb85449cfb62b60f8f7fcf14e940aaa2c6e5977112a293b64c6c2836c1d51_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
