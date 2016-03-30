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
        $__internal_89e091e9854e055763510f56844ac6f88d698f07aa5444a12fe8668e7c95dd7d = $this->env->getExtension("native_profiler");
        $__internal_89e091e9854e055763510f56844ac6f88d698f07aa5444a12fe8668e7c95dd7d->enter($__internal_89e091e9854e055763510f56844ac6f88d698f07aa5444a12fe8668e7c95dd7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_89e091e9854e055763510f56844ac6f88d698f07aa5444a12fe8668e7c95dd7d->leave($__internal_89e091e9854e055763510f56844ac6f88d698f07aa5444a12fe8668e7c95dd7d_prof);

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
