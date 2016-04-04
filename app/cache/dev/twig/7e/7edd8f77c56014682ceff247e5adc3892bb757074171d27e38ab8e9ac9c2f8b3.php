<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_dbcd49469225eb68196485289d03803c99d4ea047018e5a718374a0445784457 extends Twig_Template
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
        $__internal_49ccb4af341bc5d2a419258a566f23eed5bc34971488f8a85d12db458ecdd548 = $this->env->getExtension("native_profiler");
        $__internal_49ccb4af341bc5d2a419258a566f23eed5bc34971488f8a85d12db458ecdd548->enter($__internal_49ccb4af341bc5d2a419258a566f23eed5bc34971488f8a85d12db458ecdd548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_49ccb4af341bc5d2a419258a566f23eed5bc34971488f8a85d12db458ecdd548->leave($__internal_49ccb4af341bc5d2a419258a566f23eed5bc34971488f8a85d12db458ecdd548_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
