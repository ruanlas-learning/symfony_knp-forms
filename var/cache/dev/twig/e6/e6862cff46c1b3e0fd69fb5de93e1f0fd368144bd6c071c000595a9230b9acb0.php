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
        $__internal_5013ce02866790f79a168f784bcdbceb9dbcb9c120d65187516a341e1b3f2c4c = $this->env->getExtension("native_profiler");
        $__internal_5013ce02866790f79a168f784bcdbceb9dbcb9c120d65187516a341e1b3f2c4c->enter($__internal_5013ce02866790f79a168f784bcdbceb9dbcb9c120d65187516a341e1b3f2c4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5013ce02866790f79a168f784bcdbceb9dbcb9c120d65187516a341e1b3f2c4c->leave($__internal_5013ce02866790f79a168f784bcdbceb9dbcb9c120d65187516a341e1b3f2c4c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_05fac14ec77313a74d54b52c6f6cbb4dfb1e2127873afed733e8927f202b94af = $this->env->getExtension("native_profiler");
        $__internal_05fac14ec77313a74d54b52c6f6cbb4dfb1e2127873afed733e8927f202b94af->enter($__internal_05fac14ec77313a74d54b52c6f6cbb4dfb1e2127873afed733e8927f202b94af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_05fac14ec77313a74d54b52c6f6cbb4dfb1e2127873afed733e8927f202b94af->leave($__internal_05fac14ec77313a74d54b52c6f6cbb4dfb1e2127873afed733e8927f202b94af_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ee50e56611ab6d46074636833ca1d4eccb231e282ca577f22cbbd80ec8ae03e2 = $this->env->getExtension("native_profiler");
        $__internal_ee50e56611ab6d46074636833ca1d4eccb231e282ca577f22cbbd80ec8ae03e2->enter($__internal_ee50e56611ab6d46074636833ca1d4eccb231e282ca577f22cbbd80ec8ae03e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ee50e56611ab6d46074636833ca1d4eccb231e282ca577f22cbbd80ec8ae03e2->leave($__internal_ee50e56611ab6d46074636833ca1d4eccb231e282ca577f22cbbd80ec8ae03e2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9e6dcd33bbf2f1a154347f33b36b8218062b04f59688016e53eeae0e5fb62d1e = $this->env->getExtension("native_profiler");
        $__internal_9e6dcd33bbf2f1a154347f33b36b8218062b04f59688016e53eeae0e5fb62d1e->enter($__internal_9e6dcd33bbf2f1a154347f33b36b8218062b04f59688016e53eeae0e5fb62d1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_9e6dcd33bbf2f1a154347f33b36b8218062b04f59688016e53eeae0e5fb62d1e->leave($__internal_9e6dcd33bbf2f1a154347f33b36b8218062b04f59688016e53eeae0e5fb62d1e_prof);

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
