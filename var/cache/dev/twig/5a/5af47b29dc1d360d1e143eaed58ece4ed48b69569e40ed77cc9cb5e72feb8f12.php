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
        $__internal_0422c94201415ae5bc6117d67fc6bd5d9d6eeac7809bf1272c09a181bce3d490 = $this->env->getExtension("native_profiler");
        $__internal_0422c94201415ae5bc6117d67fc6bd5d9d6eeac7809bf1272c09a181bce3d490->enter($__internal_0422c94201415ae5bc6117d67fc6bd5d9d6eeac7809bf1272c09a181bce3d490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0422c94201415ae5bc6117d67fc6bd5d9d6eeac7809bf1272c09a181bce3d490->leave($__internal_0422c94201415ae5bc6117d67fc6bd5d9d6eeac7809bf1272c09a181bce3d490_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a70a7cb0f4c736c90e4233b1e0b9404ab798f632c536fb943808c3605ba9dfc0 = $this->env->getExtension("native_profiler");
        $__internal_a70a7cb0f4c736c90e4233b1e0b9404ab798f632c536fb943808c3605ba9dfc0->enter($__internal_a70a7cb0f4c736c90e4233b1e0b9404ab798f632c536fb943808c3605ba9dfc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a70a7cb0f4c736c90e4233b1e0b9404ab798f632c536fb943808c3605ba9dfc0->leave($__internal_a70a7cb0f4c736c90e4233b1e0b9404ab798f632c536fb943808c3605ba9dfc0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c8b9ebe060b85113976c9e499987b5a0357351661ff51b12d19a566420873ec6 = $this->env->getExtension("native_profiler");
        $__internal_c8b9ebe060b85113976c9e499987b5a0357351661ff51b12d19a566420873ec6->enter($__internal_c8b9ebe060b85113976c9e499987b5a0357351661ff51b12d19a566420873ec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c8b9ebe060b85113976c9e499987b5a0357351661ff51b12d19a566420873ec6->leave($__internal_c8b9ebe060b85113976c9e499987b5a0357351661ff51b12d19a566420873ec6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_324a02ef72e7442d36e7b654380f0f323d2f02f431b0fa3f5e8b7e1c612878d1 = $this->env->getExtension("native_profiler");
        $__internal_324a02ef72e7442d36e7b654380f0f323d2f02f431b0fa3f5e8b7e1c612878d1->enter($__internal_324a02ef72e7442d36e7b654380f0f323d2f02f431b0fa3f5e8b7e1c612878d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_324a02ef72e7442d36e7b654380f0f323d2f02f431b0fa3f5e8b7e1c612878d1->leave($__internal_324a02ef72e7442d36e7b654380f0f323d2f02f431b0fa3f5e8b7e1c612878d1_prof);

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
