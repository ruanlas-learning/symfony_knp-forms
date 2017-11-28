<?php

/* admin/genus/new.html.twig */
class __TwigTemplate_14d8495fe54c14c533fd655df2f1b225629d4abc3be099a720332923e8437e50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/genus/new.html.twig", 1);
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
        $__internal_d641d3b8ea096b9f69d10b700a0824d80c904855632b607edd85208777efc5eb = $this->env->getExtension("native_profiler");
        $__internal_d641d3b8ea096b9f69d10b700a0824d80c904855632b607edd85208777efc5eb->enter($__internal_d641d3b8ea096b9f69d10b700a0824d80c904855632b607edd85208777efc5eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/genus/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d641d3b8ea096b9f69d10b700a0824d80c904855632b607edd85208777efc5eb->leave($__internal_d641d3b8ea096b9f69d10b700a0824d80c904855632b607edd85208777efc5eb_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fc869b9487ac4ec38d783273b8251edb8bd4ac995eed4a7fd3bd5508de58451f = $this->env->getExtension("native_profiler");
        $__internal_fc869b9487ac4ec38d783273b8251edb8bd4ac995eed4a7fd3bd5508de58451f->enter($__internal_fc869b9487ac4ec38d783273b8251edb8bd4ac995eed4a7fd3bd5508de58451f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <link rel=\"stylesheet\" href=\"//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css\">
";
        
        $__internal_fc869b9487ac4ec38d783273b8251edb8bd4ac995eed4a7fd3bd5508de58451f->leave($__internal_fc869b9487ac4ec38d783273b8251edb8bd4ac995eed4a7fd3bd5508de58451f_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_3129649324044df57ffbaf70e6d7ec11e05868278b01cb66ae6edc5621d6aeea = $this->env->getExtension("native_profiler");
        $__internal_3129649324044df57ffbaf70e6d7ec11e05868278b01cb66ae6edc5621d6aeea->enter($__internal_3129649324044df57ffbaf70e6d7ec11e05868278b01cb66ae6edc5621d6aeea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <h1>New Genus</h1>

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
        
        $__internal_3129649324044df57ffbaf70e6d7ec11e05868278b01cb66ae6edc5621d6aeea->leave($__internal_3129649324044df57ffbaf70e6d7ec11e05868278b01cb66ae6edc5621d6aeea_prof);

    }

    // line 36
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b95b259bf7eed0d82c0df77553e07ac8e10131fef5546a322e95c0825a5a1400 = $this->env->getExtension("native_profiler");
        $__internal_b95b259bf7eed0d82c0df77553e07ac8e10131fef5546a322e95c0825a5a1400->enter($__internal_b95b259bf7eed0d82c0df77553e07ac8e10131fef5546a322e95c0825a5a1400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_b95b259bf7eed0d82c0df77553e07ac8e10131fef5546a322e95c0825a5a1400->leave($__internal_b95b259bf7eed0d82c0df77553e07ac8e10131fef5546a322e95c0825a5a1400_prof);

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
/*                 <h1>New Genus</h1>*/
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
