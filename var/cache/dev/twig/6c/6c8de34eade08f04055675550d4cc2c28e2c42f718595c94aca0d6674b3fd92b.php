<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_0006e6916a6fd3b27275398f63de46b9c14483efe2168a19f77cf349f25c5d21 extends Twig_Template
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
        $__internal_715173164a1f300eafadf0b3f43f6b75bf1a16228cf77d3189e3dcda382a8588 = $this->env->getExtension("native_profiler");
        $__internal_715173164a1f300eafadf0b3f43f6b75bf1a16228cf77d3189e3dcda382a8588->enter($__internal_715173164a1f300eafadf0b3f43f6b75bf1a16228cf77d3189e3dcda382a8588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_715173164a1f300eafadf0b3f43f6b75bf1a16228cf77d3189e3dcda382a8588->leave($__internal_715173164a1f300eafadf0b3f43f6b75bf1a16228cf77d3189e3dcda382a8588_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
