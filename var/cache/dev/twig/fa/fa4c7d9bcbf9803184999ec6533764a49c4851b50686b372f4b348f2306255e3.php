<?php

/* admin/genus/formLayout.html.twig */
class __TwigTemplate_6940b64071fdd192c336cba2e80256f8e9a3e6955dba7b7fe706e1f201384372 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/genus/formLayout.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e5369d28ad1c132e55dd4dd817378db603c3cd10f4e12d77c026f8678a169a54 = $this->env->getExtension("native_profiler");
        $__internal_e5369d28ad1c132e55dd4dd817378db603c3cd10f4e12d77c026f8678a169a54->enter($__internal_e5369d28ad1c132e55dd4dd817378db603c3cd10f4e12d77c026f8678a169a54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/genus/formLayout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5369d28ad1c132e55dd4dd817378db603c3cd10f4e12d77c026f8678a169a54->leave($__internal_e5369d28ad1c132e55dd4dd817378db603c3cd10f4e12d77c026f8678a169a54_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_de5d9485d986e35f17a6eea41200fbccaa446aa7e24d72d091c22dd5ff940499 = $this->env->getExtension("native_profiler");
        $__internal_de5d9485d986e35f17a6eea41200fbccaa446aa7e24d72d091c22dd5ff940499->enter($__internal_de5d9485d986e35f17a6eea41200fbccaa446aa7e24d72d091c22dd5ff940499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <link rel=\"stylesheet\" href=\"//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css\">
";
        
        $__internal_de5d9485d986e35f17a6eea41200fbccaa446aa7e24d72d091c22dd5ff940499->leave($__internal_de5d9485d986e35f17a6eea41200fbccaa446aa7e24d72d091c22dd5ff940499_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b35fb3f3add5ac8739df1c53d5f0952a41b2b81d0bc5641ea0c24f79ffeae3c9 = $this->env->getExtension("native_profiler");
        $__internal_b35fb3f3add5ac8739df1c53d5f0952a41b2b81d0bc5641ea0c24f79ffeae3c9->enter($__internal_b35fb3f3add5ac8739df1c53d5f0952a41b2b81d0bc5641ea0c24f79ffeae3c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b35fb3f3add5ac8739df1c53d5f0952a41b2b81d0bc5641ea0c24f79ffeae3c9->leave($__internal_b35fb3f3add5ac8739df1c53d5f0952a41b2b81d0bc5641ea0c24f79ffeae3c9_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b1413dc1964a7e60b84bdea21a8197e0eec1351e93860dd318c8f32ed13d9b54 = $this->env->getExtension("native_profiler");
        $__internal_b1413dc1964a7e60b84bdea21a8197e0eec1351e93860dd318c8f32ed13d9b54->enter($__internal_b1413dc1964a7e60b84bdea21a8197e0eec1351e93860dd318c8f32ed13d9b54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script src=\"//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/js/bootstrap-datepicker.min.js\"></script>

    <script>
        jQuery(document).ready(function() {
            \$('.js-datepicker').datepicker({
                format: 'yyyy-mm-dd'
            });
        });
    </script>
";
        
        $__internal_b1413dc1964a7e60b84bdea21a8197e0eec1351e93860dd318c8f32ed13d9b54->leave($__internal_b1413dc1964a7e60b84bdea21a8197e0eec1351e93860dd318c8f32ed13d9b54_prof);

    }

    public function getTemplateName()
    {
        return "admin/genus/formLayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 14,  65 => 13,  54 => 10,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/* */
/*     <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css">*/
/* {% endblock %}*/
/* */
/* */
/* {% block body %}{% endblock %}*/
/* */
/* */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/* */
/*     <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/js/bootstrap-datepicker.min.js"></script>*/
/* */
/*     <script>*/
/*         jQuery(document).ready(function() {*/
/*             $('.js-datepicker').datepicker({*/
/*                 format: 'yyyy-mm-dd'*/
/*             });*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
