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
        $__internal_4d18de6253990a9f72400108a79b046f720e03b63147815a8a8527fb4162e850 = $this->env->getExtension("native_profiler");
        $__internal_4d18de6253990a9f72400108a79b046f720e03b63147815a8a8527fb4162e850->enter($__internal_4d18de6253990a9f72400108a79b046f720e03b63147815a8a8527fb4162e850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/genus/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d18de6253990a9f72400108a79b046f720e03b63147815a8a8527fb4162e850->leave($__internal_4d18de6253990a9f72400108a79b046f720e03b63147815a8a8527fb4162e850_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ddd7a68420ad725edba9b80dd551f833f73315fe92d5fa28753ab92f6e4311f6 = $this->env->getExtension("native_profiler");
        $__internal_ddd7a68420ad725edba9b80dd551f833f73315fe92d5fa28753ab92f6e4311f6->enter($__internal_ddd7a68420ad725edba9b80dd551f833f73315fe92d5fa28753ab92f6e4311f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <link rel=\"stylesheet\" href=\"//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css\">
";
        
        $__internal_ddd7a68420ad725edba9b80dd551f833f73315fe92d5fa28753ab92f6e4311f6->leave($__internal_ddd7a68420ad725edba9b80dd551f833f73315fe92d5fa28753ab92f6e4311f6_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_74dd3838f21d5f84c93c7aa241eb0824943ce38320743d63ca6ae08c34a82342 = $this->env->getExtension("native_profiler");
        $__internal_74dd3838f21d5f84c93c7aa241eb0824943ce38320743d63ca6ae08c34a82342->enter($__internal_74dd3838f21d5f84c93c7aa241eb0824943ce38320743d63ca6ae08c34a82342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["genusForm"]) ? $context["genusForm"] : $this->getContext($context, "genusForm")), 'widget');
        echo "
                    <button type=\"submit\" class=\"btn btn-primary\">Save</button>

                ";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["genusForm"]) ? $context["genusForm"] : $this->getContext($context, "genusForm")), 'form_end');
        echo "

            </div>
        </div>
    </div>
";
        
        $__internal_74dd3838f21d5f84c93c7aa241eb0824943ce38320743d63ca6ae08c34a82342->leave($__internal_74dd3838f21d5f84c93c7aa241eb0824943ce38320743d63ca6ae08c34a82342_prof);

    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d72167361e31586503eceec3327a47758e8f4fdbfc5390b3e869dc2e84750a22 = $this->env->getExtension("native_profiler");
        $__internal_d72167361e31586503eceec3327a47758e8f4fdbfc5390b3e869dc2e84750a22->enter($__internal_d72167361e31586503eceec3327a47758e8f4fdbfc5390b3e869dc2e84750a22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 28
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
        
        $__internal_d72167361e31586503eceec3327a47758e8f4fdbfc5390b3e869dc2e84750a22->leave($__internal_d72167361e31586503eceec3327a47758e8f4fdbfc5390b3e869dc2e84750a22_prof);

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
        return array (  97 => 28,  91 => 27,  78 => 20,  72 => 17,  67 => 15,  60 => 10,  54 => 9,  42 => 4,  36 => 3,  11 => 1,);
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
/*                     {{ form_widget(genusForm) }}*/
/*                     <button type="submit" class="btn btn-primary">Save</button>*/
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
