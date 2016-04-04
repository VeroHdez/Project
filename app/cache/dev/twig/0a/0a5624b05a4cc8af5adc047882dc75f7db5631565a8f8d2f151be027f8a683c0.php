<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_6dc858d13f8a8d123ffcc96fef674222e8c5cb761261196941b98afe0a5a6040 extends Twig_Template
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
        $__internal_ccd16a2f1bfd18d683fa1d4878d03d35e621546af82284bc21501e1736832818 = $this->env->getExtension("native_profiler");
        $__internal_ccd16a2f1bfd18d683fa1d4878d03d35e621546af82284bc21501e1736832818->enter($__internal_ccd16a2f1bfd18d683fa1d4878d03d35e621546af82284bc21501e1736832818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_ccd16a2f1bfd18d683fa1d4878d03d35e621546af82284bc21501e1736832818->leave($__internal_ccd16a2f1bfd18d683fa1d4878d03d35e621546af82284bc21501e1736832818_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
