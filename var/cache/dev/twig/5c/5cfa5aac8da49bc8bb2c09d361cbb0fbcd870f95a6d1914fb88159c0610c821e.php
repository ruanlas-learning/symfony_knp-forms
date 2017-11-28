<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_3ce86cd4bf390b4a226882d42155512520af55029ead9dd19925a77f98f4cec7 extends Twig_Template
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
        $__internal_8968130ab96c8700508287febfeb521497d01d58eef02cb274b1a87b97a6cec5 = $this->env->getExtension("native_profiler");
        $__internal_8968130ab96c8700508287febfeb521497d01d58eef02cb274b1a87b97a6cec5->enter($__internal_8968130ab96c8700508287febfeb521497d01d58eef02cb274b1a87b97a6cec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_8968130ab96c8700508287febfeb521497d01d58eef02cb274b1a87b97a6cec5->leave($__internal_8968130ab96c8700508287febfeb521497d01d58eef02cb274b1a87b97a6cec5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
