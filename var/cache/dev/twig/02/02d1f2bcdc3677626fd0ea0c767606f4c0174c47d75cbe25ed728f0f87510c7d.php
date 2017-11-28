<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_dfe84c9d538e61c47d5001513c9fe4ee25d28c789255c058fb70f41f15575b56 extends Twig_Template
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
        $__internal_0640d620be360afb7d747cfd9aa83855dbed24e65888932ba7a206dfeb758576 = $this->env->getExtension("native_profiler");
        $__internal_0640d620be360afb7d747cfd9aa83855dbed24e65888932ba7a206dfeb758576->enter($__internal_0640d620be360afb7d747cfd9aa83855dbed24e65888932ba7a206dfeb758576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_0640d620be360afb7d747cfd9aa83855dbed24e65888932ba7a206dfeb758576->leave($__internal_0640d620be360afb7d747cfd9aa83855dbed24e65888932ba7a206dfeb758576_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
