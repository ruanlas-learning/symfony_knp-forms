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
        $__internal_251cb6571cdc87b4e206fde878c8a290eba662ab7ac2de4541c5769372d2a77b = $this->env->getExtension("native_profiler");
        $__internal_251cb6571cdc87b4e206fde878c8a290eba662ab7ac2de4541c5769372d2a77b->enter($__internal_251cb6571cdc87b4e206fde878c8a290eba662ab7ac2de4541c5769372d2a77b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_251cb6571cdc87b4e206fde878c8a290eba662ab7ac2de4541c5769372d2a77b->leave($__internal_251cb6571cdc87b4e206fde878c8a290eba662ab7ac2de4541c5769372d2a77b_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_f65794b102fbc5b4fb58e10201b847226f59e2b99949c675ba52ab7954feb34a = $this->env->getExtension("native_profiler");
        $__internal_f65794b102fbc5b4fb58e10201b847226f59e2b99949c675ba52ab7954feb34a->enter($__internal_f65794b102fbc5b4fb58e10201b847226f59e2b99949c675ba52ab7954feb34a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_f65794b102fbc5b4fb58e10201b847226f59e2b99949c675ba52ab7954feb34a->leave($__internal_f65794b102fbc5b4fb58e10201b847226f59e2b99949c675ba52ab7954feb34a_prof);

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
