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
        $__internal_c5da82a301d361fec4abc248977908ae0139df56c72da0132dd794eed89445c5 = $this->env->getExtension("native_profiler");
        $__internal_c5da82a301d361fec4abc248977908ae0139df56c72da0132dd794eed89445c5->enter($__internal_c5da82a301d361fec4abc248977908ae0139df56c72da0132dd794eed89445c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_c5da82a301d361fec4abc248977908ae0139df56c72da0132dd794eed89445c5->leave($__internal_c5da82a301d361fec4abc248977908ae0139df56c72da0132dd794eed89445c5_prof);

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
