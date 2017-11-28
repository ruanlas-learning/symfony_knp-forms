<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_be4f1670f0b0a61a4c04dedf26bfc511416bf2c06995a256f7a737bf29eee97c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c38090287397350148612de61f5d4f88e6eb28d9fbcfeed3a7ddcee4e0c20d6d = $this->env->getExtension("native_profiler");
        $__internal_c38090287397350148612de61f5d4f88e6eb28d9fbcfeed3a7ddcee4e0c20d6d->enter($__internal_c38090287397350148612de61f5d4f88e6eb28d9fbcfeed3a7ddcee4e0c20d6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_c38090287397350148612de61f5d4f88e6eb28d9fbcfeed3a7ddcee4e0c20d6d->leave($__internal_c38090287397350148612de61f5d4f88e6eb28d9fbcfeed3a7ddcee4e0c20d6d_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_0adacf2ba12fd821efee1c5b95630fc2d746bd6d25082f81ff51aca20a647a6a = $this->env->getExtension("native_profiler");
        $__internal_0adacf2ba12fd821efee1c5b95630fc2d746bd6d25082f81ff51aca20a647a6a->enter($__internal_0adacf2ba12fd821efee1c5b95630fc2d746bd6d25082f81ff51aca20a647a6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_0adacf2ba12fd821efee1c5b95630fc2d746bd6d25082f81ff51aca20a647a6a->leave($__internal_0adacf2ba12fd821efee1c5b95630fc2d746bd6d25082f81ff51aca20a647a6a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
