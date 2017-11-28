<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_67a5b73532a23430e3e74f25bd6c9b8498ff571acb659a5723c8b9336e51a8ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_860ec7d160a574fea2f2a6fb4649716844e3ed23a050dcb4d9bcf96a8da2d7dc = $this->env->getExtension("native_profiler");
        $__internal_860ec7d160a574fea2f2a6fb4649716844e3ed23a050dcb4d9bcf96a8da2d7dc->enter($__internal_860ec7d160a574fea2f2a6fb4649716844e3ed23a050dcb4d9bcf96a8da2d7dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_860ec7d160a574fea2f2a6fb4649716844e3ed23a050dcb4d9bcf96a8da2d7dc->leave($__internal_860ec7d160a574fea2f2a6fb4649716844e3ed23a050dcb4d9bcf96a8da2d7dc_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2833a9339c3e51123ce6800998e7d6ae60519b425980fa48bf539642828d8079 = $this->env->getExtension("native_profiler");
        $__internal_2833a9339c3e51123ce6800998e7d6ae60519b425980fa48bf539642828d8079->enter($__internal_2833a9339c3e51123ce6800998e7d6ae60519b425980fa48bf539642828d8079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2833a9339c3e51123ce6800998e7d6ae60519b425980fa48bf539642828d8079->leave($__internal_2833a9339c3e51123ce6800998e7d6ae60519b425980fa48bf539642828d8079_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6a5850385ae6b9228fe514804cf75c532e8336b23d9413cf436f999cae0056f1 = $this->env->getExtension("native_profiler");
        $__internal_6a5850385ae6b9228fe514804cf75c532e8336b23d9413cf436f999cae0056f1->enter($__internal_6a5850385ae6b9228fe514804cf75c532e8336b23d9413cf436f999cae0056f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6a5850385ae6b9228fe514804cf75c532e8336b23d9413cf436f999cae0056f1->leave($__internal_6a5850385ae6b9228fe514804cf75c532e8336b23d9413cf436f999cae0056f1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5514f42a2b7a19ec03e4e1c68d9e801844655cdf837a194c2c9c0433cd71ed0a = $this->env->getExtension("native_profiler");
        $__internal_5514f42a2b7a19ec03e4e1c68d9e801844655cdf837a194c2c9c0433cd71ed0a->enter($__internal_5514f42a2b7a19ec03e4e1c68d9e801844655cdf837a194c2c9c0433cd71ed0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5514f42a2b7a19ec03e4e1c68d9e801844655cdf837a194c2c9c0433cd71ed0a->leave($__internal_5514f42a2b7a19ec03e4e1c68d9e801844655cdf837a194c2c9c0433cd71ed0a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
