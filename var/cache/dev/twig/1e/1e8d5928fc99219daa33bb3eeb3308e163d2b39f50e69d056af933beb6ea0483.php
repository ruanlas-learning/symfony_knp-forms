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
        $__internal_bbc7dcd70d7f393ed57e9115c6c12924a9ee782797b760d92e6181b40e7eedc1 = $this->env->getExtension("native_profiler");
        $__internal_bbc7dcd70d7f393ed57e9115c6c12924a9ee782797b760d92e6181b40e7eedc1->enter($__internal_bbc7dcd70d7f393ed57e9115c6c12924a9ee782797b760d92e6181b40e7eedc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bbc7dcd70d7f393ed57e9115c6c12924a9ee782797b760d92e6181b40e7eedc1->leave($__internal_bbc7dcd70d7f393ed57e9115c6c12924a9ee782797b760d92e6181b40e7eedc1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_efd3f8b8b7fea435d3209b09b44aa4091123f592de8593f942b0a02165eebdcc = $this->env->getExtension("native_profiler");
        $__internal_efd3f8b8b7fea435d3209b09b44aa4091123f592de8593f942b0a02165eebdcc->enter($__internal_efd3f8b8b7fea435d3209b09b44aa4091123f592de8593f942b0a02165eebdcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_efd3f8b8b7fea435d3209b09b44aa4091123f592de8593f942b0a02165eebdcc->leave($__internal_efd3f8b8b7fea435d3209b09b44aa4091123f592de8593f942b0a02165eebdcc_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_dda8e8cacf6e9f888d43c3f99e0e728e0aa795afc28c0329cac5fc14908644a7 = $this->env->getExtension("native_profiler");
        $__internal_dda8e8cacf6e9f888d43c3f99e0e728e0aa795afc28c0329cac5fc14908644a7->enter($__internal_dda8e8cacf6e9f888d43c3f99e0e728e0aa795afc28c0329cac5fc14908644a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_dda8e8cacf6e9f888d43c3f99e0e728e0aa795afc28c0329cac5fc14908644a7->leave($__internal_dda8e8cacf6e9f888d43c3f99e0e728e0aa795afc28c0329cac5fc14908644a7_prof);

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
