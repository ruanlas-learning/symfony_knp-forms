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
        $__internal_d8bbb107ea92953186ac8708666fe0f270bef56169352f6656272b8512dc2692 = $this->env->getExtension("native_profiler");
        $__internal_d8bbb107ea92953186ac8708666fe0f270bef56169352f6656272b8512dc2692->enter($__internal_d8bbb107ea92953186ac8708666fe0f270bef56169352f6656272b8512dc2692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_d8bbb107ea92953186ac8708666fe0f270bef56169352f6656272b8512dc2692->leave($__internal_d8bbb107ea92953186ac8708666fe0f270bef56169352f6656272b8512dc2692_prof);

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
