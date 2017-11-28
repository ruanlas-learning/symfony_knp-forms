<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_361511aad895aa2ba58e9b4b1276faddda5aa3d8f368e5edd95466604278cbb3 extends Twig_Template
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
        $__internal_3379dc198df12446183dcec0f208ca2f7080d26ee5272993a7056fb24b7de4b6 = $this->env->getExtension("native_profiler");
        $__internal_3379dc198df12446183dcec0f208ca2f7080d26ee5272993a7056fb24b7de4b6->enter($__internal_3379dc198df12446183dcec0f208ca2f7080d26ee5272993a7056fb24b7de4b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_3379dc198df12446183dcec0f208ca2f7080d26ee5272993a7056fb24b7de4b6->leave($__internal_3379dc198df12446183dcec0f208ca2f7080d26ee5272993a7056fb24b7de4b6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
