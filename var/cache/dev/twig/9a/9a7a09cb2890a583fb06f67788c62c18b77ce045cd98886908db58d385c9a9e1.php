<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_ef9f263bf23f1de31a0a128f19a98d886dea04c33c7fbd8f143bfe48b0595cfb extends Twig_Template
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
        $__internal_be1fab2507171323349c174c2ca84ab297eea960706e9144382a00f54f8a67c6 = $this->env->getExtension("native_profiler");
        $__internal_be1fab2507171323349c174c2ca84ab297eea960706e9144382a00f54f8a67c6->enter($__internal_be1fab2507171323349c174c2ca84ab297eea960706e9144382a00f54f8a67c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_be1fab2507171323349c174c2ca84ab297eea960706e9144382a00f54f8a67c6->leave($__internal_be1fab2507171323349c174c2ca84ab297eea960706e9144382a00f54f8a67c6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
