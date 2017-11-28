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
        $__internal_91776158349cfcde531f430f7a294d055aa93c72bf34304001c6d10be66b392a = $this->env->getExtension("native_profiler");
        $__internal_91776158349cfcde531f430f7a294d055aa93c72bf34304001c6d10be66b392a->enter($__internal_91776158349cfcde531f430f7a294d055aa93c72bf34304001c6d10be66b392a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":main:homepage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91776158349cfcde531f430f7a294d055aa93c72bf34304001c6d10be66b392a->leave($__internal_91776158349cfcde531f430f7a294d055aa93c72bf34304001c6d10be66b392a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fd793aace74e09cc3337c9c4eb12fbee4dccc0ec706d4ee8a0109a8998e35ff3 = $this->env->getExtension("native_profiler");
        $__internal_fd793aace74e09cc3337c9c4eb12fbee4dccc0ec706d4ee8a0109a8998e35ff3->enter($__internal_fd793aace74e09cc3337c9c4eb12fbee4dccc0ec706d4ee8a0109a8998e35ff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1 class=\"page-header text-center\">Welcome Aquanauts!</h1>
";
        
        $__internal_fd793aace74e09cc3337c9c4eb12fbee4dccc0ec706d4ee8a0109a8998e35ff3->leave($__internal_fd793aace74e09cc3337c9c4eb12fbee4dccc0ec706d4ee8a0109a8998e35ff3_prof);

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
