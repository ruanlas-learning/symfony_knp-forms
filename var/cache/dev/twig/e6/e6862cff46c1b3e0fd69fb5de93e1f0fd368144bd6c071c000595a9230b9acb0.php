<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_6640261b643a53ef60151404debd18952943cc4d07b0e174f050cd1a657e5cdd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_1349627d4ec2f21e517243e2d76f1843dba2b69d7fbdc09c89a4d671f9fbc9f6 = $this->env->getExtension("native_profiler");
        $__internal_1349627d4ec2f21e517243e2d76f1843dba2b69d7fbdc09c89a4d671f9fbc9f6->enter($__internal_1349627d4ec2f21e517243e2d76f1843dba2b69d7fbdc09c89a4d671f9fbc9f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1349627d4ec2f21e517243e2d76f1843dba2b69d7fbdc09c89a4d671f9fbc9f6->leave($__internal_1349627d4ec2f21e517243e2d76f1843dba2b69d7fbdc09c89a4d671f9fbc9f6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4ede0475848b52e62f9b325b7bea2c800c6d6ee5c0a36ee34cc646a418263ee6 = $this->env->getExtension("native_profiler");
        $__internal_4ede0475848b52e62f9b325b7bea2c800c6d6ee5c0a36ee34cc646a418263ee6->enter($__internal_4ede0475848b52e62f9b325b7bea2c800c6d6ee5c0a36ee34cc646a418263ee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4ede0475848b52e62f9b325b7bea2c800c6d6ee5c0a36ee34cc646a418263ee6->leave($__internal_4ede0475848b52e62f9b325b7bea2c800c6d6ee5c0a36ee34cc646a418263ee6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0d8e46b283d9df03dbd4573797ee0a60143abf68472e6bb5ef7b1d3d07d2ffa3 = $this->env->getExtension("native_profiler");
        $__internal_0d8e46b283d9df03dbd4573797ee0a60143abf68472e6bb5ef7b1d3d07d2ffa3->enter($__internal_0d8e46b283d9df03dbd4573797ee0a60143abf68472e6bb5ef7b1d3d07d2ffa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0d8e46b283d9df03dbd4573797ee0a60143abf68472e6bb5ef7b1d3d07d2ffa3->leave($__internal_0d8e46b283d9df03dbd4573797ee0a60143abf68472e6bb5ef7b1d3d07d2ffa3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_bb20656aa38cdc21ae4b003f93a09a3b2705374fe61e6012cfa2ad2e2b12a9cf = $this->env->getExtension("native_profiler");
        $__internal_bb20656aa38cdc21ae4b003f93a09a3b2705374fe61e6012cfa2ad2e2b12a9cf->enter($__internal_bb20656aa38cdc21ae4b003f93a09a3b2705374fe61e6012cfa2ad2e2b12a9cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_bb20656aa38cdc21ae4b003f93a09a3b2705374fe61e6012cfa2ad2e2b12a9cf->leave($__internal_bb20656aa38cdc21ae4b003f93a09a3b2705374fe61e6012cfa2ad2e2b12a9cf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
