<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_2c0dfebd3358e5585750b5f06193d8c3e3e29af473423a825b6450446f1be579 extends Twig_Template
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
        $__internal_65e50d4acbcc776ea7ccdda62a37b31425e088521d566c48752e5bc5213daaa2 = $this->env->getExtension("native_profiler");
        $__internal_65e50d4acbcc776ea7ccdda62a37b31425e088521d566c48752e5bc5213daaa2->enter($__internal_65e50d4acbcc776ea7ccdda62a37b31425e088521d566c48752e5bc5213daaa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_65e50d4acbcc776ea7ccdda62a37b31425e088521d566c48752e5bc5213daaa2->leave($__internal_65e50d4acbcc776ea7ccdda62a37b31425e088521d566c48752e5bc5213daaa2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
