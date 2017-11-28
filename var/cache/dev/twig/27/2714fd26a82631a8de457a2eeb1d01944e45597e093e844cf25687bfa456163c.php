<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_3c05dc712a470da89b64108c5fd24ac69e18a72499e3ee60613e2218f2b2b1d9 extends Twig_Template
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
        $__internal_48913e6fb62e2afc75bcc36ca5c1b5fcb20e9da822274d55df07e0e46e03006d = $this->env->getExtension("native_profiler");
        $__internal_48913e6fb62e2afc75bcc36ca5c1b5fcb20e9da822274d55df07e0e46e03006d->enter($__internal_48913e6fb62e2afc75bcc36ca5c1b5fcb20e9da822274d55df07e0e46e03006d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_48913e6fb62e2afc75bcc36ca5c1b5fcb20e9da822274d55df07e0e46e03006d->leave($__internal_48913e6fb62e2afc75bcc36ca5c1b5fcb20e9da822274d55df07e0e46e03006d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
