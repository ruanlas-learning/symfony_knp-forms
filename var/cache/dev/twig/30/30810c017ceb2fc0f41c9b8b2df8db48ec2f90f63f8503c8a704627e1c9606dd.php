<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_ee4e6785212bb83aeaec383fc205eef464401c0876f9d0dc7e6d4562961bb4c2 extends Twig_Template
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
        $__internal_e6e800ab13373ca845f6f9558048353a42e9b8769a596975e62c40c6e14f13d8 = $this->env->getExtension("native_profiler");
        $__internal_e6e800ab13373ca845f6f9558048353a42e9b8769a596975e62c40c6e14f13d8->enter($__internal_e6e800ab13373ca845f6f9558048353a42e9b8769a596975e62c40c6e14f13d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_e6e800ab13373ca845f6f9558048353a42e9b8769a596975e62c40c6e14f13d8->leave($__internal_e6e800ab13373ca845f6f9558048353a42e9b8769a596975e62c40c6e14f13d8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
