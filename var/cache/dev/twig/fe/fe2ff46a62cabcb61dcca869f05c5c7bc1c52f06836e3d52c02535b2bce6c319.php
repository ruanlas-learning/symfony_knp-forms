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
        $__internal_882c40a145be60dec5e2b6759c276e2953d803c4859dc211b209a54dd4f9609d = $this->env->getExtension("native_profiler");
        $__internal_882c40a145be60dec5e2b6759c276e2953d803c4859dc211b209a54dd4f9609d->enter($__internal_882c40a145be60dec5e2b6759c276e2953d803c4859dc211b209a54dd4f9609d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_882c40a145be60dec5e2b6759c276e2953d803c4859dc211b209a54dd4f9609d->leave($__internal_882c40a145be60dec5e2b6759c276e2953d803c4859dc211b209a54dd4f9609d_prof);

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
