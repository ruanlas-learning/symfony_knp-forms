<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_6aa5d5aae4819c38a47b05c816139e4f7ae0f7cc192a008e4b8a1c79f02a93ba extends Twig_Template
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
        $__internal_d7c1e4923281ba34b5d4a6db4a492f499cdb30d338200468e1cd7c0237ba9ec9 = $this->env->getExtension("native_profiler");
        $__internal_d7c1e4923281ba34b5d4a6db4a492f499cdb30d338200468e1cd7c0237ba9ec9->enter($__internal_d7c1e4923281ba34b5d4a6db4a492f499cdb30d338200468e1cd7c0237ba9ec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_d7c1e4923281ba34b5d4a6db4a492f499cdb30d338200468e1cd7c0237ba9ec9->leave($__internal_d7c1e4923281ba34b5d4a6db4a492f499cdb30d338200468e1cd7c0237ba9ec9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
