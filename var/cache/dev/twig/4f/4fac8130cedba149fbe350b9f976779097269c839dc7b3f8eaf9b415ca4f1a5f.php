<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_75e2dbafeb90cada4a7512ba1ffc848b4c0bb334d3939a0ec5c71f4492493366 extends Twig_Template
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
        $__internal_52606b2ddc99aa50c874ff2a19e762ab7b22fb847b07fe8c84f4cabeddfe852f = $this->env->getExtension("native_profiler");
        $__internal_52606b2ddc99aa50c874ff2a19e762ab7b22fb847b07fe8c84f4cabeddfe852f->enter($__internal_52606b2ddc99aa50c874ff2a19e762ab7b22fb847b07fe8c84f4cabeddfe852f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_52606b2ddc99aa50c874ff2a19e762ab7b22fb847b07fe8c84f4cabeddfe852f->leave($__internal_52606b2ddc99aa50c874ff2a19e762ab7b22fb847b07fe8c84f4cabeddfe852f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
