<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_282ff96a28d9bf75fe7aef162281316981c35df868fd7c2afdc601aad0f52e9a extends Twig_Template
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
        $__internal_46c5c3119d00a167ad16e9c1933b60eb6553b09fb0df14b24029dfa975cd2add = $this->env->getExtension("native_profiler");
        $__internal_46c5c3119d00a167ad16e9c1933b60eb6553b09fb0df14b24029dfa975cd2add->enter($__internal_46c5c3119d00a167ad16e9c1933b60eb6553b09fb0df14b24029dfa975cd2add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_46c5c3119d00a167ad16e9c1933b60eb6553b09fb0df14b24029dfa975cd2add->leave($__internal_46c5c3119d00a167ad16e9c1933b60eb6553b09fb0df14b24029dfa975cd2add_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
