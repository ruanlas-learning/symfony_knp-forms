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
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c6f8342a715fa26c2dedd83554a99ff59deb34994c116bdf6e8e6eb18c9e50ef = $this->env->getExtension("native_profiler");
        $__internal_c6f8342a715fa26c2dedd83554a99ff59deb34994c116bdf6e8e6eb18c9e50ef->enter($__internal_c6f8342a715fa26c2dedd83554a99ff59deb34994c116bdf6e8e6eb18c9e50ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/genus/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6f8342a715fa26c2dedd83554a99ff59deb34994c116bdf6e8e6eb18c9e50ef->leave($__internal_c6f8342a715fa26c2dedd83554a99ff59deb34994c116bdf6e8e6eb18c9e50ef_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f6818e7d6d6eea6513e8b663c6b0d7b8d7537ed6e803e22d37bc0ba282d96fa3 = $this->env->getExtension("native_profiler");
        $__internal_f6818e7d6d6eea6513e8b663c6b0d7b8d7537ed6e803e22d37bc0ba282d96fa3->enter($__internal_f6818e7d6d6eea6513e8b663c6b0d7b8d7537ed6e803e22d37bc0ba282d96fa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <h1>New Genus</h1>

                ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["genusForm"]) ? $context["genusForm"] : $this->getContext($context, "genusForm")), 'form_start');
        echo "

                    ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["genusForm"]) ? $context["genusForm"] : $this->getContext($context, "genusForm")), 'widget');
        echo "
                    <button type=\"submit\" class=\"btn btn-primary\">Save</button>

                ";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["genusForm"]) ? $context["genusForm"] : $this->getContext($context, "genusForm")), 'form_end');
        echo "

            </div>
        </div>
    </div>
";
        
        $__internal_f6818e7d6d6eea6513e8b663c6b0d7b8d7537ed6e803e22d37bc0ba282d96fa3->leave($__internal_f6818e7d6d6eea6513e8b663c6b0d7b8d7537ed6e803e22d37bc0ba282d96fa3_prof);

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
        return array (  58 => 14,  52 => 11,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
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
