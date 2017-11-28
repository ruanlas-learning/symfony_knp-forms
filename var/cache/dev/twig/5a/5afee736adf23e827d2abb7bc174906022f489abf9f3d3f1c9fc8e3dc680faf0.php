<?php

/* admin/genus/new.html.twig */
class __TwigTemplate_14d8495fe54c14c533fd655df2f1b225629d4abc3be099a720332923e8437e50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("admin/genus/formLayout.html.twig", "admin/genus/new.html.twig", 9);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/genus/formLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d5d0ffd8b4a701e19370ce567910e5d6d3ff04657b3f1127c8e1bea29c8fc049 = $this->env->getExtension("native_profiler");
        $__internal_d5d0ffd8b4a701e19370ce567910e5d6d3ff04657b3f1127c8e1bea29c8fc049->enter($__internal_d5d0ffd8b4a701e19370ce567910e5d6d3ff04657b3f1127c8e1bea29c8fc049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/genus/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5d0ffd8b4a701e19370ce567910e5d6d3ff04657b3f1127c8e1bea29c8fc049->leave($__internal_d5d0ffd8b4a701e19370ce567910e5d6d3ff04657b3f1127c8e1bea29c8fc049_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b875c9bdcc0345ba8b423e11a3d39438ea5c530ae781ae1df22a57467fe4c941 = $this->env->getExtension("native_profiler");
        $__internal_b875c9bdcc0345ba8b423e11a3d39438ea5c530ae781ae1df22a57467fe4c941->enter($__internal_b875c9bdcc0345ba8b423e11a3d39438ea5c530ae781ae1df22a57467fe4c941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <h1>New Genus</h1>

                ";
        // line 18
        echo "
                    ";
        // line 20
        echo "                    ";
        // line 21
        echo "                    ";
        // line 22
        echo "                    ";
        // line 23
        echo "                        ";
        // line 24
        echo "                    ";
        // line 25
        echo "                    ";
        // line 26
        echo "                    ";
        // line 27
        echo "                    ";
        // line 28
        echo "
                    ";
        // line 30
        echo "
                ";
        // line 32
        echo "                ";
        echo twig_include($this->env, $context, "admin/genus/_form.html.twig");
        echo "

            </div>
        </div>
    </div>
";
        
        $__internal_b875c9bdcc0345ba8b423e11a3d39438ea5c530ae781ae1df22a57467fe4c941->leave($__internal_b875c9bdcc0345ba8b423e11a3d39438ea5c530ae781ae1df22a57467fe4c941_prof);

    }

    public function getTemplateName()
    {
        return "admin/genus/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 32,  69 => 30,  66 => 28,  64 => 27,  62 => 26,  60 => 25,  58 => 24,  56 => 23,  54 => 22,  52 => 21,  50 => 20,  47 => 18,  40 => 12,  34 => 11,  11 => 9,);
    }
}
/* {#{% extends 'base.html.twig' %}#}*/
/* */
/* {#{% block stylesheets %}#}*/
/*     {#{{ parent() }}#}*/
/* */
/*     {#<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css">#}*/
/* {#{% endblock %}#}*/
/* */
/* {% extends 'admin/genus/formLayout.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-xs-12">*/
/*                 <h1>New Genus</h1>*/
/* */
/*                 {#{{ form_start(genusForm) }}#}*/
/* */
/*                     {#{{ form_widget(genusForm) }}#}*/
/*                     {#{{ form_row(genusForm.name) }}#}*/
/*                     {#{{ form_row(genusForm.subFamily) }}#}*/
/*                     {#{{ form_row(genusForm.speciesCount, {#}*/
/*                         {#'label': 'Number of Species'#}*/
/*                     {#}) }}#}*/
/*                     {#{{ form_row(genusForm.funFact) }}#}*/
/*                     {#{{ form_row(genusForm.isPublished) }}#}*/
/*                     {#{{ form_row(genusForm.firstDiscoveredAt) }}#}*/
/* */
/*                     {#<button type="submit" class="btn btn-primary" formnovalidate>Save</button>#}*/
/* */
/*                 {#{{ form_end(genusForm) }}#}*/
/*                 {{ include('admin/genus/_form.html.twig') }}*/
/* */
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {#{% block javascripts %}#}*/
/*     {#{{ parent() }}#}*/
/* */
/*     {#<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/js/bootstrap-datepicker.min.js"></script>#}*/
/* */
/*     {#<script>#}*/
/*         {#jQuery(document).ready(function() {#}*/
/*             {#$('.js-datepicker').datepicker({#}*/
/*                 {#format: 'yyyy-mm-dd'#}*/
/*             {#});#}*/
/*         {#});#}*/
/*     {#</script>#}*/
/* {#{% endblock %}#}*/
/* */
