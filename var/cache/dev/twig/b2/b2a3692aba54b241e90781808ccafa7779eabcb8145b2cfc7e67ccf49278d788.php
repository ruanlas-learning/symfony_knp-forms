<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_7a1bcbb9c8306d23d4802685fe30ebfc38b4c215b2ea906266bf76b0d41cf321 extends Twig_Template
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
        $__internal_fab9ae239eb1f3e63d7eb47e636120a6e71258666cebff818c3376e8007f9786 = $this->env->getExtension("native_profiler");
        $__internal_fab9ae239eb1f3e63d7eb47e636120a6e71258666cebff818c3376e8007f9786->enter($__internal_fab9ae239eb1f3e63d7eb47e636120a6e71258666cebff818c3376e8007f9786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_fab9ae239eb1f3e63d7eb47e636120a6e71258666cebff818c3376e8007f9786->leave($__internal_fab9ae239eb1f3e63d7eb47e636120a6e71258666cebff818c3376e8007f9786_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
