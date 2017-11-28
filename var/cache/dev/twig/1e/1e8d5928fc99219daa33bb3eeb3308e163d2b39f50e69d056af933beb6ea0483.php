<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_f7cdcbd60dcc0b75e781a62156eca42d54ad6bef8863269048a9174e2d8fa068 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_60add391e24ada194c0ff7ad8d1348ef3f2e6d3be76f890f26b5f42bc87f9b64 = $this->env->getExtension("native_profiler");
        $__internal_60add391e24ada194c0ff7ad8d1348ef3f2e6d3be76f890f26b5f42bc87f9b64->enter($__internal_60add391e24ada194c0ff7ad8d1348ef3f2e6d3be76f890f26b5f42bc87f9b64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60add391e24ada194c0ff7ad8d1348ef3f2e6d3be76f890f26b5f42bc87f9b64->leave($__internal_60add391e24ada194c0ff7ad8d1348ef3f2e6d3be76f890f26b5f42bc87f9b64_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_02e9b872dd4ab7de89561dd93d2e0430ecee1cbf52d3564c9f86fa930e19afd7 = $this->env->getExtension("native_profiler");
        $__internal_02e9b872dd4ab7de89561dd93d2e0430ecee1cbf52d3564c9f86fa930e19afd7->enter($__internal_02e9b872dd4ab7de89561dd93d2e0430ecee1cbf52d3564c9f86fa930e19afd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_02e9b872dd4ab7de89561dd93d2e0430ecee1cbf52d3564c9f86fa930e19afd7->leave($__internal_02e9b872dd4ab7de89561dd93d2e0430ecee1cbf52d3564c9f86fa930e19afd7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf35df42c4d37ea15d7b267269f998ef0b5fca4ea9651b43de3e4eca8095d46b = $this->env->getExtension("native_profiler");
        $__internal_cf35df42c4d37ea15d7b267269f998ef0b5fca4ea9651b43de3e4eca8095d46b->enter($__internal_cf35df42c4d37ea15d7b267269f998ef0b5fca4ea9651b43de3e4eca8095d46b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_cf35df42c4d37ea15d7b267269f998ef0b5fca4ea9651b43de3e4eca8095d46b->leave($__internal_cf35df42c4d37ea15d7b267269f998ef0b5fca4ea9651b43de3e4eca8095d46b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
