<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_4e90e04e00eba8b74fca463867cf91ccb8fa9ec8bde1368a20bed67a59d053b9 extends Twig_Template
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
        $__internal_23e2c9fcbbccf682e048d3ea5c81890940983cec7e416e119608ced157f4bb63 = $this->env->getExtension("native_profiler");
        $__internal_23e2c9fcbbccf682e048d3ea5c81890940983cec7e416e119608ced157f4bb63->enter($__internal_23e2c9fcbbccf682e048d3ea5c81890940983cec7e416e119608ced157f4bb63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_23e2c9fcbbccf682e048d3ea5c81890940983cec7e416e119608ced157f4bb63->leave($__internal_23e2c9fcbbccf682e048d3ea5c81890940983cec7e416e119608ced157f4bb63_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
