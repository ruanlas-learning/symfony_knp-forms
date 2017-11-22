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
        $__internal_9ca0f63383796dee08c931e2e906b7a55384935f5673dacc0bc23073562d9b48 = $this->env->getExtension("native_profiler");
        $__internal_9ca0f63383796dee08c931e2e906b7a55384935f5673dacc0bc23073562d9b48->enter($__internal_9ca0f63383796dee08c931e2e906b7a55384935f5673dacc0bc23073562d9b48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ca0f63383796dee08c931e2e906b7a55384935f5673dacc0bc23073562d9b48->leave($__internal_9ca0f63383796dee08c931e2e906b7a55384935f5673dacc0bc23073562d9b48_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e758c32a65f20809013a0a88f285c86a3a35275952510530e87d9926804d5363 = $this->env->getExtension("native_profiler");
        $__internal_e758c32a65f20809013a0a88f285c86a3a35275952510530e87d9926804d5363->enter($__internal_e758c32a65f20809013a0a88f285c86a3a35275952510530e87d9926804d5363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e758c32a65f20809013a0a88f285c86a3a35275952510530e87d9926804d5363->leave($__internal_e758c32a65f20809013a0a88f285c86a3a35275952510530e87d9926804d5363_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_41c8488c77ca96b2797458b7b47522188219ab1d1a55a7fe4d6d68186e1605a1 = $this->env->getExtension("native_profiler");
        $__internal_41c8488c77ca96b2797458b7b47522188219ab1d1a55a7fe4d6d68186e1605a1->enter($__internal_41c8488c77ca96b2797458b7b47522188219ab1d1a55a7fe4d6d68186e1605a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_41c8488c77ca96b2797458b7b47522188219ab1d1a55a7fe4d6d68186e1605a1->leave($__internal_41c8488c77ca96b2797458b7b47522188219ab1d1a55a7fe4d6d68186e1605a1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1aa1e3176fbfa8817d3f2fb118362c1e4d99fa39e7353328d3abe76198094a9b = $this->env->getExtension("native_profiler");
        $__internal_1aa1e3176fbfa8817d3f2fb118362c1e4d99fa39e7353328d3abe76198094a9b->enter($__internal_1aa1e3176fbfa8817d3f2fb118362c1e4d99fa39e7353328d3abe76198094a9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1aa1e3176fbfa8817d3f2fb118362c1e4d99fa39e7353328d3abe76198094a9b->leave($__internal_1aa1e3176fbfa8817d3f2fb118362c1e4d99fa39e7353328d3abe76198094a9b_prof);

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
