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
        $__internal_8c1ffb3a4c6ff73b7feed99b8179977e2a1eb45dfa86daaedcd24ef8641cdbe5 = $this->env->getExtension("native_profiler");
        $__internal_8c1ffb3a4c6ff73b7feed99b8179977e2a1eb45dfa86daaedcd24ef8641cdbe5->enter($__internal_8c1ffb3a4c6ff73b7feed99b8179977e2a1eb45dfa86daaedcd24ef8641cdbe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_8c1ffb3a4c6ff73b7feed99b8179977e2a1eb45dfa86daaedcd24ef8641cdbe5->leave($__internal_8c1ffb3a4c6ff73b7feed99b8179977e2a1eb45dfa86daaedcd24ef8641cdbe5_prof);

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
