<?php

/* base.html.twig */
class __TwigTemplate_5cdba40ae91abae3f5206bf5935b752a4cab49872d50b1c319a87341c2bd93b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fc12410259f0dae021b7ee1c182b1deb8b927bfc015ce0dc1c7fe75d3f5f5915 = $this->env->getExtension("native_profiler");
        $__internal_fc12410259f0dae021b7ee1c182b1deb8b927bfc015ce0dc1c7fe75d3f5f5915->enter($__internal_fc12410259f0dae021b7ee1c182b1deb8b927bfc015ce0dc1c7fe75d3f5f5915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div class=\"search-bar\">
            <form method=\"GET\" action=\"\" class=\"js-sea-search sea-search\">
                <input type=\"search\" name=\"q\" placeholder=\"Search Sea Creatures\" autocomplete=\"off\" class=\"search-input\">
            </form>
        </div>
        <header class=\"header\">
            <img class=\"logo-icon\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/aquanote-logo.png"), "html", null, true);
        echo "\">
            <h1 class=\"logo\">AquaNote</h1>
            <ul class=\"navi\">
                <li class=\"search\"><a href=\"#\" class=\"js-header-search-toggle\"><i class=\"fa fa-search\"></i></a></li>
                <li><a href=\"#\">Login</a></li>
            </ul>
        </header>

        <div class=\"main-content\">
            ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 31
            echo "                <div class=\"alert alert-success\">
                    ";
            // line 32
            echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
            ";
        // line 36
        $this->displayBlock('body', $context, $blocks);
        // line 37
        echo "        </div>

        <div class=\"footer\">
            <p class=\"footer-text\">Made with <span class=\"heart\"><3</span> <a href=\"https://knpuniversity.com\">KnpUniversity</a></p>
        </div>

        ";
        // line 43
        $this->displayBlock('javascripts', $context, $blocks);
        // line 47
        echo "    </body>
</html>
";
        
        $__internal_fc12410259f0dae021b7ee1c182b1deb8b927bfc015ce0dc1c7fe75d3f5f5915->leave($__internal_fc12410259f0dae021b7ee1c182b1deb8b927bfc015ce0dc1c7fe75d3f5f5915_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0a80d9ab09af884e22ea7470a4141dd40c78d2cf3a361c89d9db4bcb6d65c0ca = $this->env->getExtension("native_profiler");
        $__internal_0a80d9ab09af884e22ea7470a4141dd40c78d2cf3a361c89d9db4bcb6d65c0ca->enter($__internal_0a80d9ab09af884e22ea7470a4141dd40c78d2cf3a361c89d9db4bcb6d65c0ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AquaNote!";
        
        $__internal_0a80d9ab09af884e22ea7470a4141dd40c78d2cf3a361c89d9db4bcb6d65c0ca->leave($__internal_0a80d9ab09af884e22ea7470a4141dd40c78d2cf3a361c89d9db4bcb6d65c0ca_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_60ae48f5df9ba8eccbb0d0f3f9496e4ac1463a61220bd5be409f69353f047a05 = $this->env->getExtension("native_profiler");
        $__internal_60ae48f5df9ba8eccbb0d0f3f9496e4ac1463a61220bd5be409f69353f047a05->enter($__internal_60ae48f5df9ba8eccbb0d0f3f9496e4ac1463a61220bd5be409f69353f047a05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/fontawesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_60ae48f5df9ba8eccbb0d0f3f9496e4ac1463a61220bd5be409f69353f047a05->leave($__internal_60ae48f5df9ba8eccbb0d0f3f9496e4ac1463a61220bd5be409f69353f047a05_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_93ab14d45141bf90a6473c161a6c65a93d3026540b2b12d26329b756f9941208 = $this->env->getExtension("native_profiler");
        $__internal_93ab14d45141bf90a6473c161a6c65a93d3026540b2b12d26329b756f9941208->enter($__internal_93ab14d45141bf90a6473c161a6c65a93d3026540b2b12d26329b756f9941208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_93ab14d45141bf90a6473c161a6c65a93d3026540b2b12d26329b756f9941208->leave($__internal_93ab14d45141bf90a6473c161a6c65a93d3026540b2b12d26329b756f9941208_prof);

    }

    // line 43
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bdc9f51e3534ec46f9e03e5de66bca057b5870922492ff027c917d3f415ee3a7 = $this->env->getExtension("native_profiler");
        $__internal_bdc9f51e3534ec46f9e03e5de66bca057b5870922492ff027c917d3f415ee3a7->enter($__internal_bdc9f51e3534ec46f9e03e5de66bca057b5870922492ff027c917d3f415ee3a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 44
        echo "            <script src=\"//code.jquery.com/jquery-2.1.4.min.js\"></script>
            <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_bdc9f51e3534ec46f9e03e5de66bca057b5870922492ff027c917d3f415ee3a7->leave($__internal_bdc9f51e3534ec46f9e03e5de66bca057b5870922492ff027c917d3f415ee3a7_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 45,  157 => 44,  151 => 43,  140 => 36,  131 => 10,  127 => 9,  122 => 8,  116 => 7,  104 => 5,  95 => 47,  93 => 43,  85 => 37,  83 => 36,  80 => 35,  71 => 32,  68 => 31,  64 => 30,  52 => 21,  39 => 12,  37 => 7,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <title>{% block title %}AquaNote!{% endblock %}</title>*/
/* */
/*         {% block stylesheets %}*/
/*             <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">*/
/*             <link rel="stylesheet" href="{{ asset('css/styles.css') }}">*/
/*             <link rel="stylesheet" href="{{ asset('vendor/fontawesome/css/font-awesome.min.css') }}">*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         <div class="search-bar">*/
/*             <form method="GET" action="" class="js-sea-search sea-search">*/
/*                 <input type="search" name="q" placeholder="Search Sea Creatures" autocomplete="off" class="search-input">*/
/*             </form>*/
/*         </div>*/
/*         <header class="header">*/
/*             <img class="logo-icon" src="{{ asset('images/aquanote-logo.png') }}">*/
/*             <h1 class="logo">AquaNote</h1>*/
/*             <ul class="navi">*/
/*                 <li class="search"><a href="#" class="js-header-search-toggle"><i class="fa fa-search"></i></a></li>*/
/*                 <li><a href="#">Login</a></li>*/
/*             </ul>*/
/*         </header>*/
/* */
/*         <div class="main-content">*/
/*             {% for msg in app.session.flashBag.get('success') %}*/
/*                 <div class="alert alert-success">*/
/*                     {{ msg }}*/
/*                 </div>*/
/*             {% endfor %}*/
/* */
/*             {% block body %}{% endblock %}*/
/*         </div>*/
/* */
/*         <div class="footer">*/
/*             <p class="footer-text">Made with <span class="heart"><3</span> <a href="https://knpuniversity.com">KnpUniversity</a></p>*/
/*         </div>*/
/* */
/*         {% block javascripts %}*/
/*             <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>*/
/*             <script src="{{ asset('js/main.js') }}"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
