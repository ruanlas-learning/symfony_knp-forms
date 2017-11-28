<?php

/* :main:homepage.html.twig */
class __TwigTemplate_5c56ff54939c6bf4cebe7fe8f708c89832fb7c078df010c64f65bd947394d33f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":main:homepage.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a0facf60469d1908aa3801641d0cd04b193cc9548532711611c97c2e827b90ce = $this->env->getExtension("native_profiler");
        $__internal_a0facf60469d1908aa3801641d0cd04b193cc9548532711611c97c2e827b90ce->enter($__internal_a0facf60469d1908aa3801641d0cd04b193cc9548532711611c97c2e827b90ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":main:homepage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0facf60469d1908aa3801641d0cd04b193cc9548532711611c97c2e827b90ce->leave($__internal_a0facf60469d1908aa3801641d0cd04b193cc9548532711611c97c2e827b90ce_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_11346583ca015658c9df349c42cf76a8f23d693e3e5a939b46f02bf599c65c42 = $this->env->getExtension("native_profiler");
        $__internal_11346583ca015658c9df349c42cf76a8f23d693e3e5a939b46f02bf599c65c42->enter($__internal_11346583ca015658c9df349c42cf76a8f23d693e3e5a939b46f02bf599c65c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1 class=\"page-header text-center\">Welcome Aquanauts!</h1>
";
        
        $__internal_11346583ca015658c9df349c42cf76a8f23d693e3e5a939b46f02bf599c65c42->leave($__internal_11346583ca015658c9df349c42cf76a8f23d693e3e5a939b46f02bf599c65c42_prof);

    }

    public function getTemplateName()
    {
        return ":main:homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1 class="page-header text-center">Welcome Aquanauts!</h1>*/
/* {% endblock %}*/
/* */
