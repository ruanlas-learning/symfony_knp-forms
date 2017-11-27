<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_056489dd64f389d8064076a1135d93e5c8e8c48ccf7eb70eef1c359c65f935e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1074a5f2fbba49855c7f8067f2a79955c3a7cb6ed564fb7a2834a6eb9af57813 = $this->env->getExtension("native_profiler");
        $__internal_1074a5f2fbba49855c7f8067f2a79955c3a7cb6ed564fb7a2834a6eb9af57813->enter($__internal_1074a5f2fbba49855c7f8067f2a79955c3a7cb6ed564fb7a2834a6eb9af57813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_1074a5f2fbba49855c7f8067f2a79955c3a7cb6ed564fb7a2834a6eb9af57813->leave($__internal_1074a5f2fbba49855c7f8067f2a79955c3a7cb6ed564fb7a2834a6eb9af57813_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
