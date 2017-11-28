<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_002508d25f16b6833d2ebf62f1e727c1249d07364fc9e306336f91a75a49cdc0 extends Twig_Template
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
        $__internal_cbb41d3880c0f482e62da48e65972d6579fd8812b5edd280f880730df2455b0a = $this->env->getExtension("native_profiler");
        $__internal_cbb41d3880c0f482e62da48e65972d6579fd8812b5edd280f880730df2455b0a->enter($__internal_cbb41d3880c0f482e62da48e65972d6579fd8812b5edd280f880730df2455b0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_cbb41d3880c0f482e62da48e65972d6579fd8812b5edd280f880730df2455b0a->leave($__internal_cbb41d3880c0f482e62da48e65972d6579fd8812b5edd280f880730df2455b0a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
