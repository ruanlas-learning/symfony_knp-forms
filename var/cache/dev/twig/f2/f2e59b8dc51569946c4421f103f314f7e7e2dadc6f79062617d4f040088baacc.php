<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_311f0b6619fd2ebfd04b2e7302577a102ba2824b4e86a03bae6de1d863aa0121 extends Twig_Template
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
        $__internal_270cec37757dd2dfb1239432473f0c600cc4a47823bb0e9f0feb544832b5246c = $this->env->getExtension("native_profiler");
        $__internal_270cec37757dd2dfb1239432473f0c600cc4a47823bb0e9f0feb544832b5246c->enter($__internal_270cec37757dd2dfb1239432473f0c600cc4a47823bb0e9f0feb544832b5246c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_270cec37757dd2dfb1239432473f0c600cc4a47823bb0e9f0feb544832b5246c->leave($__internal_270cec37757dd2dfb1239432473f0c600cc4a47823bb0e9f0feb544832b5246c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
