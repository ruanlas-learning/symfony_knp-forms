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
        $__internal_340bb03bd041392643e1cf26e6cc699df7a528a7a8021f862ef01a62333b9a68 = $this->env->getExtension("native_profiler");
        $__internal_340bb03bd041392643e1cf26e6cc699df7a528a7a8021f862ef01a62333b9a68->enter($__internal_340bb03bd041392643e1cf26e6cc699df7a528a7a8021f862ef01a62333b9a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_340bb03bd041392643e1cf26e6cc699df7a528a7a8021f862ef01a62333b9a68->leave($__internal_340bb03bd041392643e1cf26e6cc699df7a528a7a8021f862ef01a62333b9a68_prof);

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
