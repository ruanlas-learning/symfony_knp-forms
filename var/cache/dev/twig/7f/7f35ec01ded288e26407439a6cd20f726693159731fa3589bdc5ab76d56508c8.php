<?php

/* admin/genus/_form.html.twig */
class __TwigTemplate_bc2ed78cc753666370b411f2853411d22cbfb8eef4d0337680699334af0fd27a extends Twig_Template
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
        $__internal_dd0dc96a00f6fe5bf62c1cc5a965abc1a05d26b69c73bad3115d5fbd503d7a5a = $this->env->getExtension("native_profiler");
        $__internal_dd0dc96a00f6fe5bf62c1cc5a965abc1a05d26b69c73bad3115d5fbd503d7a5a->enter($__internal_dd0dc96a00f6fe5bf62c1cc5a965abc1a05d26b69c73bad3115d5fbd503d7a5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/genus/_form.html.twig"));

        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["genusForm"]) ? $context["genusForm"] : $this->getContext($context, "genusForm")), 'form_start');
        echo "
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["genusForm"]) ? $context["genusForm"] : $this->getContext($context, "genusForm")), "name", array()), 'row');
        echo "
    ";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["genusForm"]) ? $context["genusForm"] : $this->getContext($context, "genusForm")), "subFamily", array()), 'row');
        echo "
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["genusForm"]) ? $context["genusForm"] : $this->getContext($context, "genusForm")), "speciesCount", array()), 'row', array("label" => "Number of Species"));
        // line 6
        echo "
    ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["genusForm"]) ? $context["genusForm"] : $this->getContext($context, "genusForm")), "funFact", array()), 'row');
        echo "
    ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["genusForm"]) ? $context["genusForm"] : $this->getContext($context, "genusForm")), "isPublished", array()), 'row');
        echo "
    ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["genusForm"]) ? $context["genusForm"] : $this->getContext($context, "genusForm")), "firstDiscoveredAt", array()), 'row');
        echo "
    <button type=\"submit\" class=\"btn btn-primary\" formnovalidate>Save</button>
";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["genusForm"]) ? $context["genusForm"] : $this->getContext($context, "genusForm")), 'form_end');
        
        $__internal_dd0dc96a00f6fe5bf62c1cc5a965abc1a05d26b69c73bad3115d5fbd503d7a5a->leave($__internal_dd0dc96a00f6fe5bf62c1cc5a965abc1a05d26b69c73bad3115d5fbd503d7a5a_prof);

    }

    public function getTemplateName()
    {
        return "admin/genus/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 11,  47 => 9,  43 => 8,  39 => 7,  36 => 6,  34 => 4,  30 => 3,  26 => 2,  22 => 1,);
    }
}
/* {{ form_start(genusForm) }}*/
/*     {{ form_row(genusForm.name) }}*/
/*     {{ form_row(genusForm.subFamily) }}*/
/*     {{ form_row(genusForm.speciesCount, {*/
/*         'label': 'Number of Species'*/
/*     }) }}*/
/*     {{ form_row(genusForm.funFact) }}*/
/*     {{ form_row(genusForm.isPublished) }}*/
/*     {{ form_row(genusForm.firstDiscoveredAt) }}*/
/*     <button type="submit" class="btn btn-primary" formnovalidate>Save</button>*/
/* {{ form_end(genusForm) }}*/
