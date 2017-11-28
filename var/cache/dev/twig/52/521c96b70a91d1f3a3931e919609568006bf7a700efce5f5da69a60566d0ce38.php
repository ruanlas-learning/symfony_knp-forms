<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_3db0b3fcb1dcb94854f6f380d9209d07fe3e55430ea209a19e09c879df0a2cb0 extends Twig_Template
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
        $__internal_dc1a54a65b159350713cd418c576105dac3bee60ae5735eee8dd5f37a4d61310 = $this->env->getExtension("native_profiler");
        $__internal_dc1a54a65b159350713cd418c576105dac3bee60ae5735eee8dd5f37a4d61310->enter($__internal_dc1a54a65b159350713cd418c576105dac3bee60ae5735eee8dd5f37a4d61310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_dc1a54a65b159350713cd418c576105dac3bee60ae5735eee8dd5f37a4d61310->leave($__internal_dc1a54a65b159350713cd418c576105dac3bee60ae5735eee8dd5f37a4d61310_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
