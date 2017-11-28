<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_eda06cbb908a766fc43e8bfd80459946f80d8788a356ccf8ba7d51fa97d51e16 extends Twig_Template
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
        $__internal_a7147d7bbd7210a0053b036b32ab6521f0aac3afef155138c9d8ed918dc92a65 = $this->env->getExtension("native_profiler");
        $__internal_a7147d7bbd7210a0053b036b32ab6521f0aac3afef155138c9d8ed918dc92a65->enter($__internal_a7147d7bbd7210a0053b036b32ab6521f0aac3afef155138c9d8ed918dc92a65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_a7147d7bbd7210a0053b036b32ab6521f0aac3afef155138c9d8ed918dc92a65->leave($__internal_a7147d7bbd7210a0053b036b32ab6521f0aac3afef155138c9d8ed918dc92a65_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
