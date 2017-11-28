<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_72bbbbd7ab0d542619604cfd3de10d437c33c157b9896619011157af9273e92a extends Twig_Template
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
        $__internal_936ccd8e65728f7d2394cccf2c7305e274a117f9c7a47f3c02d966c08e4a8b1f = $this->env->getExtension("native_profiler");
        $__internal_936ccd8e65728f7d2394cccf2c7305e274a117f9c7a47f3c02d966c08e4a8b1f->enter($__internal_936ccd8e65728f7d2394cccf2c7305e274a117f9c7a47f3c02d966c08e4a8b1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_936ccd8e65728f7d2394cccf2c7305e274a117f9c7a47f3c02d966c08e4a8b1f->leave($__internal_936ccd8e65728f7d2394cccf2c7305e274a117f9c7a47f3c02d966c08e4a8b1f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
