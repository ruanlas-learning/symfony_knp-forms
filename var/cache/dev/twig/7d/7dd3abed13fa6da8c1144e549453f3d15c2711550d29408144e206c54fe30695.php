<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_74c6d1dccf733d67056d9ef18c3222fdf834a53355ecad65f89cf412197e2c62 extends Twig_Template
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
        $__internal_70d1aca813bd14ff3f8e55f572819d6bf5a1dd2e1273ca66270760921cc10602 = $this->env->getExtension("native_profiler");
        $__internal_70d1aca813bd14ff3f8e55f572819d6bf5a1dd2e1273ca66270760921cc10602->enter($__internal_70d1aca813bd14ff3f8e55f572819d6bf5a1dd2e1273ca66270760921cc10602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_70d1aca813bd14ff3f8e55f572819d6bf5a1dd2e1273ca66270760921cc10602->leave($__internal_70d1aca813bd14ff3f8e55f572819d6bf5a1dd2e1273ca66270760921cc10602_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
