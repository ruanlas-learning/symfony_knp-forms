<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_e15da9ee300a2fed6e5d64fea1e4412d70ec60316752b470c757a5f5e0281611 extends Twig_Template
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
        $__internal_34f69207d629017a398ac7199a1d448702358231c427fc2ebd6843d2263a5e05 = $this->env->getExtension("native_profiler");
        $__internal_34f69207d629017a398ac7199a1d448702358231c427fc2ebd6843d2263a5e05->enter($__internal_34f69207d629017a398ac7199a1d448702358231c427fc2ebd6843d2263a5e05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_34f69207d629017a398ac7199a1d448702358231c427fc2ebd6843d2263a5e05->leave($__internal_34f69207d629017a398ac7199a1d448702358231c427fc2ebd6843d2263a5e05_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
