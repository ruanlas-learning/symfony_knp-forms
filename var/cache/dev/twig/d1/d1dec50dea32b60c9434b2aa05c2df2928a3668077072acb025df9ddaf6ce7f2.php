<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_e915f0b9574eef6a8b2c55ac9779675c93e151dc2d037f499fafd228f2cd25ab extends Twig_Template
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
        $__internal_6b9707429eba8ff344e538d1cb17d8a7c2ff0580566ec64282bb53f891c2cbed = $this->env->getExtension("native_profiler");
        $__internal_6b9707429eba8ff344e538d1cb17d8a7c2ff0580566ec64282bb53f891c2cbed->enter($__internal_6b9707429eba8ff344e538d1cb17d8a7c2ff0580566ec64282bb53f891c2cbed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_6b9707429eba8ff344e538d1cb17d8a7c2ff0580566ec64282bb53f891c2cbed->leave($__internal_6b9707429eba8ff344e538d1cb17d8a7c2ff0580566ec64282bb53f891c2cbed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
