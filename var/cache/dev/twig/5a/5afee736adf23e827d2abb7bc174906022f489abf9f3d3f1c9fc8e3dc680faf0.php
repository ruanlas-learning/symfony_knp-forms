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
        $__internal_8e4e48d14cb723945417f7cd2099437db1ae73721178659f85ff22b46398b607 = $this->env->getExtension("native_profiler");
        $__internal_8e4e48d14cb723945417f7cd2099437db1ae73721178659f85ff22b46398b607->enter($__internal_8e4e48d14cb723945417f7cd2099437db1ae73721178659f85ff22b46398b607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/genus/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e4e48d14cb723945417f7cd2099437db1ae73721178659f85ff22b46398b607->leave($__internal_8e4e48d14cb723945417f7cd2099437db1ae73721178659f85ff22b46398b607_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cf5f425c1ecfd44a9adf2412e87b19c67d691604f7f61c7d3015a68560d3cd49 = $this->env->getExtension("native_profiler");
        $__internal_cf5f425c1ecfd44a9adf2412e87b19c67d691604f7f61c7d3015a68560d3cd49->enter($__internal_cf5f425c1ecfd44a9adf2412e87b19c67d691604f7f61c7d3015a68560d3cd49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <link rel=\"stylesheet\" href=\"//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css\">
";
        
        $__internal_cf5f425c1ecfd44a9adf2412e87b19c67d691604f7f61c7d3015a68560d3cd49->leave($__internal_cf5f425c1ecfd44a9adf2412e87b19c67d691604f7f61c7d3015a68560d3cd49_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a6b9758984b07b0f5b27d5034b6b1a8741862408164e50fcc6bafde19fd89bc = $this->env->getExtension("native_profiler");
        $__internal_8a6b9758984b07b0f5b27d5034b6b1a8741862408164e50fcc6bafde19fd89bc->enter($__internal_8a6b9758984b07b0f5b27d5034b6b1a8741862408164e50fcc6bafde19fd89bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8a6b9758984b07b0f5b27d5034b6b1a8741862408164e50fcc6bafde19fd89bc->leave($__internal_8a6b9758984b07b0f5b27d5034b6b1a8741862408164e50fcc6bafde19fd89bc_prof);

    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_49efbe486fd5c39c4fbb5d23dbb8dcb9b33b4a6bb377926fd5030d137603830c = $this->env->getExtension("native_profiler");
        $__internal_49efbe486fd5c39c4fbb5d23dbb8dcb9b33b4a6bb377926fd5030d137603830c->enter($__internal_49efbe486fd5c39c4fbb5d23dbb8dcb9b33b4a6bb377926fd5030d137603830c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 28
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script src=\"//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/js/bootstrap-datepicker.min.js\"></script>

    <script>
        jQuery(document).ready(function() {
            \$('.js-datepicker').datepicker();
        });
    </script>
";
        
        $__internal_49efbe486fd5c39c4fbb5d23dbb8dcb9b33b4a6bb377926fd5030d137603830c->leave($__internal_49efbe486fd5c39c4fbb5d23dbb8dcb9b33b4a6bb377926fd5030d137603830c_prof);

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
/*             $('.js-datepicker').datepicker();*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
/* */
