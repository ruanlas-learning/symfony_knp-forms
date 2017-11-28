<?php

/* admin/genus/edit.html.twig */
class __TwigTemplate_61a9723dd64fc54884b81e16ca139e65a098a500c263bad79dc9676885923c08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("admin/genus/formLayout.html.twig", "admin/genus/edit.html.twig", 9);
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
        $__internal_31237c2772ad52e274246f9949249e12028db4a79b7f4c50b428802c9712d90c = $this->env->getExtension("native_profiler");
        $__internal_31237c2772ad52e274246f9949249e12028db4a79b7f4c50b428802c9712d90c->enter($__internal_31237c2772ad52e274246f9949249e12028db4a79b7f4c50b428802c9712d90c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/genus/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31237c2772ad52e274246f9949249e12028db4a79b7f4c50b428802c9712d90c->leave($__internal_31237c2772ad52e274246f9949249e12028db4a79b7f4c50b428802c9712d90c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ef18a1624ae090804e6447a2d135be402db4a42739cd8c523838394866fc474 = $this->env->getExtension("native_profiler");
        $__internal_3ef18a1624ae090804e6447a2d135be402db4a42739cd8c523838394866fc474->enter($__internal_3ef18a1624ae090804e6447a2d135be402db4a42739cd8c523838394866fc474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <h1>Edit Genus</h1>

                ";
        // line 18
        echo "
                ";
        // line 20
        echo "                ";
        // line 21
        echo "                ";
        // line 22
        echo "                ";
        // line 23
        echo "                ";
        // line 24
        echo "                ";
        // line 25
        echo "                ";
        // line 26
        echo "                ";
        // line 27
        echo "                ";
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
        
        $__internal_3ef18a1624ae090804e6447a2d135be402db4a42739cd8c523838394866fc474->leave($__internal_3ef18a1624ae090804e6447a2d135be402db4a42739cd8c523838394866fc474_prof);

    }

    public function getTemplateName()
    {
        return "admin/genus/edit.html.twig";
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
/*                 <h1>Edit Genus</h1>*/
/* */
/*                 {#{{ form_start(genusForm) }}#}*/
/* */
/*                 {#{{ form_widget(genusForm) }}#}*/
/*                 {#{{ form_row(genusForm.name) }}#}*/
/*                 {#{{ form_row(genusForm.subFamily) }}#}*/
/*                 {#{{ form_row(genusForm.speciesCount, {#}*/
/*                 {#'label': 'Number of Species'#}*/
/*                 {#}) }}#}*/
/*                 {#{{ form_row(genusForm.funFact) }}#}*/
/*                 {#{{ form_row(genusForm.isPublished) }}#}*/
/*                 {#{{ form_row(genusForm.firstDiscoveredAt) }}#}*/
/* */
/*                 {#<button type="submit" class="btn btn-primary" formnovalidate>Save</button>#}*/
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
