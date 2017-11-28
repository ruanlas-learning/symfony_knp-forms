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
        $__internal_8475423a2748bf17686adfd512f5772167df9107353e79eba27835dd58ebd6ec = $this->env->getExtension("native_profiler");
        $__internal_8475423a2748bf17686adfd512f5772167df9107353e79eba27835dd58ebd6ec->enter($__internal_8475423a2748bf17686adfd512f5772167df9107353e79eba27835dd58ebd6ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_8475423a2748bf17686adfd512f5772167df9107353e79eba27835dd58ebd6ec->leave($__internal_8475423a2748bf17686adfd512f5772167df9107353e79eba27835dd58ebd6ec_prof);

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
