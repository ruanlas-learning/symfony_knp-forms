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
        $__internal_e2b5e38d636e0af321c796dff5c42b39d27e014c3ffa53914f28eaf1bbea3736 = $this->env->getExtension("native_profiler");
        $__internal_e2b5e38d636e0af321c796dff5c42b39d27e014c3ffa53914f28eaf1bbea3736->enter($__internal_e2b5e38d636e0af321c796dff5c42b39d27e014c3ffa53914f28eaf1bbea3736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2b5e38d636e0af321c796dff5c42b39d27e014c3ffa53914f28eaf1bbea3736->leave($__internal_e2b5e38d636e0af321c796dff5c42b39d27e014c3ffa53914f28eaf1bbea3736_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f80498a0dfdf5285763dc43994e5d9ed7355925a7feafd847d3ac053807c1a32 = $this->env->getExtension("native_profiler");
        $__internal_f80498a0dfdf5285763dc43994e5d9ed7355925a7feafd847d3ac053807c1a32->enter($__internal_f80498a0dfdf5285763dc43994e5d9ed7355925a7feafd847d3ac053807c1a32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f80498a0dfdf5285763dc43994e5d9ed7355925a7feafd847d3ac053807c1a32->leave($__internal_f80498a0dfdf5285763dc43994e5d9ed7355925a7feafd847d3ac053807c1a32_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ba321c2bef9faab63cb38136a299c9f1727eba59d8d023ce08f25635ce968df5 = $this->env->getExtension("native_profiler");
        $__internal_ba321c2bef9faab63cb38136a299c9f1727eba59d8d023ce08f25635ce968df5->enter($__internal_ba321c2bef9faab63cb38136a299c9f1727eba59d8d023ce08f25635ce968df5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ba321c2bef9faab63cb38136a299c9f1727eba59d8d023ce08f25635ce968df5->leave($__internal_ba321c2bef9faab63cb38136a299c9f1727eba59d8d023ce08f25635ce968df5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a39f77d295d53c7b9b584f448c2ced1ed3c2e4e726878a1fa418b1c490fb02bb = $this->env->getExtension("native_profiler");
        $__internal_a39f77d295d53c7b9b584f448c2ced1ed3c2e4e726878a1fa418b1c490fb02bb->enter($__internal_a39f77d295d53c7b9b584f448c2ced1ed3c2e4e726878a1fa418b1c490fb02bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a39f77d295d53c7b9b584f448c2ced1ed3c2e4e726878a1fa418b1c490fb02bb->leave($__internal_a39f77d295d53c7b9b584f448c2ced1ed3c2e4e726878a1fa418b1c490fb02bb_prof);

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
