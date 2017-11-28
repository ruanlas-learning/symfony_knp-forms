<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_6640261b643a53ef60151404debd18952943cc4d07b0e174f050cd1a657e5cdd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_0af4faa31a0540b1054c19c32d84924d23f048fb283979cd5c83da925109e61b = $this->env->getExtension("native_profiler");
        $__internal_0af4faa31a0540b1054c19c32d84924d23f048fb283979cd5c83da925109e61b->enter($__internal_0af4faa31a0540b1054c19c32d84924d23f048fb283979cd5c83da925109e61b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0af4faa31a0540b1054c19c32d84924d23f048fb283979cd5c83da925109e61b->leave($__internal_0af4faa31a0540b1054c19c32d84924d23f048fb283979cd5c83da925109e61b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_212aa801d6ff7137bd1dc7b0a69916bc989a42229eef7b586820515e3ce5cd3c = $this->env->getExtension("native_profiler");
        $__internal_212aa801d6ff7137bd1dc7b0a69916bc989a42229eef7b586820515e3ce5cd3c->enter($__internal_212aa801d6ff7137bd1dc7b0a69916bc989a42229eef7b586820515e3ce5cd3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_212aa801d6ff7137bd1dc7b0a69916bc989a42229eef7b586820515e3ce5cd3c->leave($__internal_212aa801d6ff7137bd1dc7b0a69916bc989a42229eef7b586820515e3ce5cd3c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d2d85896ecea8315e73510a46d54a8bbd661d30f13daf0aa792576be8f93b196 = $this->env->getExtension("native_profiler");
        $__internal_d2d85896ecea8315e73510a46d54a8bbd661d30f13daf0aa792576be8f93b196->enter($__internal_d2d85896ecea8315e73510a46d54a8bbd661d30f13daf0aa792576be8f93b196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d2d85896ecea8315e73510a46d54a8bbd661d30f13daf0aa792576be8f93b196->leave($__internal_d2d85896ecea8315e73510a46d54a8bbd661d30f13daf0aa792576be8f93b196_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7f6beedbb52801bc7a3ef61b9d2afaf476ba18b8f658b2223a458633cc07120b = $this->env->getExtension("native_profiler");
        $__internal_7f6beedbb52801bc7a3ef61b9d2afaf476ba18b8f658b2223a458633cc07120b->enter($__internal_7f6beedbb52801bc7a3ef61b9d2afaf476ba18b8f658b2223a458633cc07120b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_7f6beedbb52801bc7a3ef61b9d2afaf476ba18b8f658b2223a458633cc07120b->leave($__internal_7f6beedbb52801bc7a3ef61b9d2afaf476ba18b8f658b2223a458633cc07120b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
