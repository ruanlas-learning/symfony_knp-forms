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
        $__internal_aa17e7a4b066774166373517aae62ab03dd081b875566d07a58d814e4a473a6c = $this->env->getExtension("native_profiler");
        $__internal_aa17e7a4b066774166373517aae62ab03dd081b875566d07a58d814e4a473a6c->enter($__internal_aa17e7a4b066774166373517aae62ab03dd081b875566d07a58d814e4a473a6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_aa17e7a4b066774166373517aae62ab03dd081b875566d07a58d814e4a473a6c->leave($__internal_aa17e7a4b066774166373517aae62ab03dd081b875566d07a58d814e4a473a6c_prof);

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
