<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_fd8cf5d0c5e488885dc4ca7af923ed2dae12fdd3aaa5e0467402b23ef32566f2 extends Twig_Template
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
        $__internal_dce6be3e758b6c1316e380d0deb54763ea27ee84114c91367ffee26578158195 = $this->env->getExtension("native_profiler");
        $__internal_dce6be3e758b6c1316e380d0deb54763ea27ee84114c91367ffee26578158195->enter($__internal_dce6be3e758b6c1316e380d0deb54763ea27ee84114c91367ffee26578158195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_dce6be3e758b6c1316e380d0deb54763ea27ee84114c91367ffee26578158195->leave($__internal_dce6be3e758b6c1316e380d0deb54763ea27ee84114c91367ffee26578158195_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
