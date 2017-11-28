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
        $__internal_502146cc98eaeca8dd8b2df814b847217956732bd0fc5b812e16222fe01ad748 = $this->env->getExtension("native_profiler");
        $__internal_502146cc98eaeca8dd8b2df814b847217956732bd0fc5b812e16222fe01ad748->enter($__internal_502146cc98eaeca8dd8b2df814b847217956732bd0fc5b812e16222fe01ad748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_502146cc98eaeca8dd8b2df814b847217956732bd0fc5b812e16222fe01ad748->leave($__internal_502146cc98eaeca8dd8b2df814b847217956732bd0fc5b812e16222fe01ad748_prof);

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
