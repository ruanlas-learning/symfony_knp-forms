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
        $__internal_a495e7f16022d2a70201fbb3dc6aea7a2472b691d7f747d3410807ea4134b38c = $this->env->getExtension("native_profiler");
        $__internal_a495e7f16022d2a70201fbb3dc6aea7a2472b691d7f747d3410807ea4134b38c->enter($__internal_a495e7f16022d2a70201fbb3dc6aea7a2472b691d7f747d3410807ea4134b38c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a495e7f16022d2a70201fbb3dc6aea7a2472b691d7f747d3410807ea4134b38c->leave($__internal_a495e7f16022d2a70201fbb3dc6aea7a2472b691d7f747d3410807ea4134b38c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_58941feb9bd4f0490e2c41dc7fd921b9f0378e0cfc2a77be921b4c0e430a5397 = $this->env->getExtension("native_profiler");
        $__internal_58941feb9bd4f0490e2c41dc7fd921b9f0378e0cfc2a77be921b4c0e430a5397->enter($__internal_58941feb9bd4f0490e2c41dc7fd921b9f0378e0cfc2a77be921b4c0e430a5397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_58941feb9bd4f0490e2c41dc7fd921b9f0378e0cfc2a77be921b4c0e430a5397->leave($__internal_58941feb9bd4f0490e2c41dc7fd921b9f0378e0cfc2a77be921b4c0e430a5397_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c15a4491545d29596e97d710be4b5ccf438117fb246b0429d2fa142429ebb39d = $this->env->getExtension("native_profiler");
        $__internal_c15a4491545d29596e97d710be4b5ccf438117fb246b0429d2fa142429ebb39d->enter($__internal_c15a4491545d29596e97d710be4b5ccf438117fb246b0429d2fa142429ebb39d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c15a4491545d29596e97d710be4b5ccf438117fb246b0429d2fa142429ebb39d->leave($__internal_c15a4491545d29596e97d710be4b5ccf438117fb246b0429d2fa142429ebb39d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_bbd78588cb2055dcbc6de6601738fba0a8dbcbb947b8f497b8df01b7d8a39f19 = $this->env->getExtension("native_profiler");
        $__internal_bbd78588cb2055dcbc6de6601738fba0a8dbcbb947b8f497b8df01b7d8a39f19->enter($__internal_bbd78588cb2055dcbc6de6601738fba0a8dbcbb947b8f497b8df01b7d8a39f19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_bbd78588cb2055dcbc6de6601738fba0a8dbcbb947b8f497b8df01b7d8a39f19->leave($__internal_bbd78588cb2055dcbc6de6601738fba0a8dbcbb947b8f497b8df01b7d8a39f19_prof);

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
