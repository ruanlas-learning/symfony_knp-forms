<?php

/* admin/genus/edit.html.twig */
class __TwigTemplate_61a9723dd64fc54884b81e16ca139e65a098a500c263bad79dc9676885923c08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/genus/edit.html.twig", 1);
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
        $__internal_418d82384538e7f16632bb35a09394f41ba3cb368cfa31d506004b3b3f2a4b9c = $this->env->getExtension("native_profiler");
        $__internal_418d82384538e7f16632bb35a09394f41ba3cb368cfa31d506004b3b3f2a4b9c->enter($__internal_418d82384538e7f16632bb35a09394f41ba3cb368cfa31d506004b3b3f2a4b9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/genus/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_418d82384538e7f16632bb35a09394f41ba3cb368cfa31d506004b3b3f2a4b9c->leave($__internal_418d82384538e7f16632bb35a09394f41ba3cb368cfa31d506004b3b3f2a4b9c_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fbdaf90623bcd9d894b6954da3bf7c6e2fb93939de63cbf5fdc5cdf6584cfc2f = $this->env->getExtension("native_profiler");
        $__internal_fbdaf90623bcd9d894b6954da3bf7c6e2fb93939de63cbf5fdc5cdf6584cfc2f->enter($__internal_fbdaf90623bcd9d894b6954da3bf7c6e2fb93939de63cbf5fdc5cdf6584cfc2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <link rel=\"stylesheet\" href=\"//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css\">
";
        
        $__internal_fbdaf90623bcd9d894b6954da3bf7c6e2fb93939de63cbf5fdc5cdf6584cfc2f->leave($__internal_fbdaf90623bcd9d894b6954da3bf7c6e2fb93939de63cbf5fdc5cdf6584cfc2f_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_38aeb0f279f8bb8228889cf3fc0dbc132ff4c046dec0adc67558c151b3f62665 = $this->env->getExtension("native_profiler");
        $__internal_38aeb0f279f8bb8228889cf3fc0dbc132ff4c046dec0adc67558c151b3f62665->enter($__internal_38aeb0f279f8bb8228889cf3fc0dbc132ff4c046dec0adc67558c151b3f62665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <h1>Edit Genus</h1>

                ";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["genusForm"]) ? $context["genusForm"] : $this->getContext($context, "genusForm")), 'form_start');
        echo "

                    ";
        // line 18
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["genusForm"]) ? $context["genusForm"] : $this->getContext($context, "genusForm")), "name", array()), 'row');
        echo "
                    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["genusForm"]) ? $context["genusForm"] : $this->getContext($context, "genusForm")), "subFamily", array()), 'row');
        echo "
                    ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["genusForm"]) ? $context["genusForm"] : $this->getContext($context, "genusForm")), "speciesCount", array()), 'row', array("label" => "Number of Species"));
        // line 22
        echo "
                    ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["genusForm"]) ? $context["genusForm"] : $this->getContext($context, "genusForm")), "funFact", array()), 'row');
        echo "
                    ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["genusForm"]) ? $context["genusForm"] : $this->getContext($context, "genusForm")), "isPublished", array()), 'row');
        echo "
                    ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["genusForm"]) ? $context["genusForm"] : $this->getContext($context, "genusForm")), "firstDiscoveredAt", array()), 'row');
        echo "

                    <button type=\"submit\" class=\"btn btn-primary\" formnovalidate>Save</button>

                ";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["genusForm"]) ? $context["genusForm"] : $this->getContext($context, "genusForm")), 'form_end');
        echo "

            </div>
        </div>
    </div>
";
        
        $__internal_38aeb0f279f8bb8228889cf3fc0dbc132ff4c046dec0adc67558c151b3f62665->leave($__internal_38aeb0f279f8bb8228889cf3fc0dbc132ff4c046dec0adc67558c151b3f62665_prof);

    }

    // line 36
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_390f33f34665653b956e29b2da4960e6a7d9bf214776d8d44e213b04858c14c7 = $this->env->getExtension("native_profiler");
        $__internal_390f33f34665653b956e29b2da4960e6a7d9bf214776d8d44e213b04858c14c7->enter($__internal_390f33f34665653b956e29b2da4960e6a7d9bf214776d8d44e213b04858c14c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 37
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
        
        $__internal_390f33f34665653b956e29b2da4960e6a7d9bf214776d8d44e213b04858c14c7->leave($__internal_390f33f34665653b956e29b2da4960e6a7d9bf214776d8d44e213b04858c14c7_prof);

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
        return array (  120 => 37,  114 => 36,  101 => 29,  94 => 25,  90 => 24,  86 => 23,  83 => 22,  81 => 20,  77 => 19,  72 => 18,  67 => 15,  60 => 10,  54 => 9,  42 => 4,  36 => 3,  11 => 1,);
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
/* {% block body %}*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-xs-12">*/
/*                 <h1>Edit Genus</h1>*/
/* */
/*                 {{ form_start(genusForm) }}*/
/* */
/*                     {#{{ form_widget(genusForm) }}#}*/
/*                     {{ form_row(genusForm.name) }}*/
/*                     {{ form_row(genusForm.subFamily) }}*/
/*                     {{ form_row(genusForm.speciesCount, {*/
/*                         'label': 'Number of Species'*/
/*                     }) }}*/
/*                     {{ form_row(genusForm.funFact) }}*/
/*                     {{ form_row(genusForm.isPublished) }}*/
/*                     {{ form_row(genusForm.firstDiscoveredAt) }}*/
/* */
/*                     <button type="submit" class="btn btn-primary" formnovalidate>Save</button>*/
/* */
/*                 {{ form_end(genusForm) }}*/
/* */
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
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
/* */
