<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_ddf5d189a0f9d2a991dcaf01662847e85e72d33236955784f2419dd2e467096c extends Twig_Template
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
        $__internal_29444680c26e85f7fa45713a5795fa67fb83ef4ad9b653e9a32bbe79b172c098 = $this->env->getExtension("native_profiler");
        $__internal_29444680c26e85f7fa45713a5795fa67fb83ef4ad9b653e9a32bbe79b172c098->enter($__internal_29444680c26e85f7fa45713a5795fa67fb83ef4ad9b653e9a32bbe79b172c098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_29444680c26e85f7fa45713a5795fa67fb83ef4ad9b653e9a32bbe79b172c098->leave($__internal_29444680c26e85f7fa45713a5795fa67fb83ef4ad9b653e9a32bbe79b172c098_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
