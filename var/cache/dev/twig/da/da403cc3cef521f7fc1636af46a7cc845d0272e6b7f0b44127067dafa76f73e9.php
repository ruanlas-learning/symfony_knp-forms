<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_381a04c06329c233812b6f0e4259c7601f150b7fc664339dbe9390892c733ef8 extends Twig_Template
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
        $__internal_1b044dbcde734ddaa079ccb4b48c7788ef2133b429c5592f7153aa48ac03f5d0 = $this->env->getExtension("native_profiler");
        $__internal_1b044dbcde734ddaa079ccb4b48c7788ef2133b429c5592f7153aa48ac03f5d0->enter($__internal_1b044dbcde734ddaa079ccb4b48c7788ef2133b429c5592f7153aa48ac03f5d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_1b044dbcde734ddaa079ccb4b48c7788ef2133b429c5592f7153aa48ac03f5d0->leave($__internal_1b044dbcde734ddaa079ccb4b48c7788ef2133b429c5592f7153aa48ac03f5d0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
