<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_a8234d2d4de0a0c48eafa69201680f23db91bb1b4f70006f7325a85cac0f1a75 extends Twig_Template
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
        $__internal_e63c06b1fa73b26ac7a11e3bb712b29eddd24650e5ead06ae3274dc1e0e8452e = $this->env->getExtension("native_profiler");
        $__internal_e63c06b1fa73b26ac7a11e3bb712b29eddd24650e5ead06ae3274dc1e0e8452e->enter($__internal_e63c06b1fa73b26ac7a11e3bb712b29eddd24650e5ead06ae3274dc1e0e8452e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_e63c06b1fa73b26ac7a11e3bb712b29eddd24650e5ead06ae3274dc1e0e8452e->leave($__internal_e63c06b1fa73b26ac7a11e3bb712b29eddd24650e5ead06ae3274dc1e0e8452e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
