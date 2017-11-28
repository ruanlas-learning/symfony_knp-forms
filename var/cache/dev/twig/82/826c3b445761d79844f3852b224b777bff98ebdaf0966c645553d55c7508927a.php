<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_255e41f9a9b705c796cd0daf71ce82a0615fe99246090725b0394174697ef28c extends Twig_Template
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
        $__internal_60523ceee8d5668f9defef931a72bd64e01f9c26012b595f74468fd6ef5cb96d = $this->env->getExtension("native_profiler");
        $__internal_60523ceee8d5668f9defef931a72bd64e01f9c26012b595f74468fd6ef5cb96d->enter($__internal_60523ceee8d5668f9defef931a72bd64e01f9c26012b595f74468fd6ef5cb96d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_60523ceee8d5668f9defef931a72bd64e01f9c26012b595f74468fd6ef5cb96d->leave($__internal_60523ceee8d5668f9defef931a72bd64e01f9c26012b595f74468fd6ef5cb96d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
