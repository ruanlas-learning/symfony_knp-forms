<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_d5a4a4af8e3af5402e68714257c7f6caff4337f8532c40879effe4fff0f1e747 extends Twig_Template
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
        $__internal_ae21cbbc9331b6619c61f9e381d3c28356b58460fa45541bb9917a7ad9ff1439 = $this->env->getExtension("native_profiler");
        $__internal_ae21cbbc9331b6619c61f9e381d3c28356b58460fa45541bb9917a7ad9ff1439->enter($__internal_ae21cbbc9331b6619c61f9e381d3c28356b58460fa45541bb9917a7ad9ff1439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_ae21cbbc9331b6619c61f9e381d3c28356b58460fa45541bb9917a7ad9ff1439->leave($__internal_ae21cbbc9331b6619c61f9e381d3c28356b58460fa45541bb9917a7ad9ff1439_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
