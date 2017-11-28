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
        $__internal_b9b32c381754914bd8dc23a6f54ff692241c2849eb7c68f133921947196aa44d = $this->env->getExtension("native_profiler");
        $__internal_b9b32c381754914bd8dc23a6f54ff692241c2849eb7c68f133921947196aa44d->enter($__internal_b9b32c381754914bd8dc23a6f54ff692241c2849eb7c68f133921947196aa44d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_b9b32c381754914bd8dc23a6f54ff692241c2849eb7c68f133921947196aa44d->leave($__internal_b9b32c381754914bd8dc23a6f54ff692241c2849eb7c68f133921947196aa44d_prof);

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
