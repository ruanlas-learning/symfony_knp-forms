<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_eb7b3a6f02ff61b688bb9f830810dc6441aeb804db521c61bd32f5847eaa2f74 extends Twig_Template
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
        $__internal_27ff8932ee97a692955a19eb896faa0d048afb73cc658e9d8ac1eabb64be5c72 = $this->env->getExtension("native_profiler");
        $__internal_27ff8932ee97a692955a19eb896faa0d048afb73cc658e9d8ac1eabb64be5c72->enter($__internal_27ff8932ee97a692955a19eb896faa0d048afb73cc658e9d8ac1eabb64be5c72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_27ff8932ee97a692955a19eb896faa0d048afb73cc658e9d8ac1eabb64be5c72->leave($__internal_27ff8932ee97a692955a19eb896faa0d048afb73cc658e9d8ac1eabb64be5c72_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
