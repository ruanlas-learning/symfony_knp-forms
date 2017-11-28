<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_5f4790faa355af5bb3dc7e3451b13d633cede7c1365829354a16aae1a00ff37f extends Twig_Template
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
        $__internal_d948f99a765fc145c20acd70c43d4e384c988b5e5efe9618a2a15415cbc5dbb7 = $this->env->getExtension("native_profiler");
        $__internal_d948f99a765fc145c20acd70c43d4e384c988b5e5efe9618a2a15415cbc5dbb7->enter($__internal_d948f99a765fc145c20acd70c43d4e384c988b5e5efe9618a2a15415cbc5dbb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_d948f99a765fc145c20acd70c43d4e384c988b5e5efe9618a2a15415cbc5dbb7->leave($__internal_d948f99a765fc145c20acd70c43d4e384c988b5e5efe9618a2a15415cbc5dbb7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->block($form, 'button_widget',  array('type' => isset($type) ? $type : 'reset')) ?>*/
/* */
