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
        $__internal_d8987156013b0897582f4b4be4e5338db2177c3009d47133c2c2f5e1e76c32db = $this->env->getExtension("native_profiler");
        $__internal_d8987156013b0897582f4b4be4e5338db2177c3009d47133c2c2f5e1e76c32db->enter($__internal_d8987156013b0897582f4b4be4e5338db2177c3009d47133c2c2f5e1e76c32db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8987156013b0897582f4b4be4e5338db2177c3009d47133c2c2f5e1e76c32db->leave($__internal_d8987156013b0897582f4b4be4e5338db2177c3009d47133c2c2f5e1e76c32db_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d0e6bf335c6bcdf62a32d44d8314acbd91683c77d69acb9c806853b98271af9d = $this->env->getExtension("native_profiler");
        $__internal_d0e6bf335c6bcdf62a32d44d8314acbd91683c77d69acb9c806853b98271af9d->enter($__internal_d0e6bf335c6bcdf62a32d44d8314acbd91683c77d69acb9c806853b98271af9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d0e6bf335c6bcdf62a32d44d8314acbd91683c77d69acb9c806853b98271af9d->leave($__internal_d0e6bf335c6bcdf62a32d44d8314acbd91683c77d69acb9c806853b98271af9d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_094aab269bd3bd756aeacc4a2e809016cbb6251cdabdba8592b675e4e12e0c3c = $this->env->getExtension("native_profiler");
        $__internal_094aab269bd3bd756aeacc4a2e809016cbb6251cdabdba8592b675e4e12e0c3c->enter($__internal_094aab269bd3bd756aeacc4a2e809016cbb6251cdabdba8592b675e4e12e0c3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_094aab269bd3bd756aeacc4a2e809016cbb6251cdabdba8592b675e4e12e0c3c->leave($__internal_094aab269bd3bd756aeacc4a2e809016cbb6251cdabdba8592b675e4e12e0c3c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_53bc756f88802766f7b1f066bb18ff5ddbdad8b93a5a5075b46a42f8d57fb46c = $this->env->getExtension("native_profiler");
        $__internal_53bc756f88802766f7b1f066bb18ff5ddbdad8b93a5a5075b46a42f8d57fb46c->enter($__internal_53bc756f88802766f7b1f066bb18ff5ddbdad8b93a5a5075b46a42f8d57fb46c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_53bc756f88802766f7b1f066bb18ff5ddbdad8b93a5a5075b46a42f8d57fb46c->leave($__internal_53bc756f88802766f7b1f066bb18ff5ddbdad8b93a5a5075b46a42f8d57fb46c_prof);

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
