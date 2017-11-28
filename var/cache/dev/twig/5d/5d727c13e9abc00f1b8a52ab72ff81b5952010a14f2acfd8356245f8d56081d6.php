<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_dd411a11fc42dd223e8731dec547016ca768cef02072f41851b2cf769932d696 extends Twig_Template
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
        $__internal_d4d9b8610fd24d4c3b9ba2a1ecdcf71c5d09350a21c2db3a4ab1ccea40e2843f = $this->env->getExtension("native_profiler");
        $__internal_d4d9b8610fd24d4c3b9ba2a1ecdcf71c5d09350a21c2db3a4ab1ccea40e2843f->enter($__internal_d4d9b8610fd24d4c3b9ba2a1ecdcf71c5d09350a21c2db3a4ab1ccea40e2843f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_d4d9b8610fd24d4c3b9ba2a1ecdcf71c5d09350a21c2db3a4ab1ccea40e2843f->leave($__internal_d4d9b8610fd24d4c3b9ba2a1ecdcf71c5d09350a21c2db3a4ab1ccea40e2843f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
