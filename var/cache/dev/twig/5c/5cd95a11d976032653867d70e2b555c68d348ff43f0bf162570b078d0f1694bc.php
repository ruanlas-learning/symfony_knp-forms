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
        $__internal_e1c5361d41fc1d35155920adf6d1ab15e62fa5bcbc52d2ea59f79398e2c7daa7 = $this->env->getExtension("native_profiler");
        $__internal_e1c5361d41fc1d35155920adf6d1ab15e62fa5bcbc52d2ea59f79398e2c7daa7->enter($__internal_e1c5361d41fc1d35155920adf6d1ab15e62fa5bcbc52d2ea59f79398e2c7daa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_e1c5361d41fc1d35155920adf6d1ab15e62fa5bcbc52d2ea59f79398e2c7daa7->leave($__internal_e1c5361d41fc1d35155920adf6d1ab15e62fa5bcbc52d2ea59f79398e2c7daa7_prof);

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
