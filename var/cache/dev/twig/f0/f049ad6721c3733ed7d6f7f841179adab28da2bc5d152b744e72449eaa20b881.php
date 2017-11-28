<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_a66b23b13a3032ff4dd975aacb2e918c544bd9ef78ca885395793ca7beb17b0b extends Twig_Template
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
        $__internal_50d327ca7e889f17b2d6dd5faa0c6d5ba22e854f823633a7e4e4c4a874367cd6 = $this->env->getExtension("native_profiler");
        $__internal_50d327ca7e889f17b2d6dd5faa0c6d5ba22e854f823633a7e4e4c4a874367cd6->enter($__internal_50d327ca7e889f17b2d6dd5faa0c6d5ba22e854f823633a7e4e4c4a874367cd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_50d327ca7e889f17b2d6dd5faa0c6d5ba22e854f823633a7e4e4c4a874367cd6->leave($__internal_50d327ca7e889f17b2d6dd5faa0c6d5ba22e854f823633a7e4e4c4a874367cd6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
