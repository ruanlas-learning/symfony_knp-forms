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
        $__internal_8fe7ea35f409b5dcf16a1690cb5193a2539d1ffe01c21df2b661e6ca65a72047 = $this->env->getExtension("native_profiler");
        $__internal_8fe7ea35f409b5dcf16a1690cb5193a2539d1ffe01c21df2b661e6ca65a72047->enter($__internal_8fe7ea35f409b5dcf16a1690cb5193a2539d1ffe01c21df2b661e6ca65a72047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        $this->displayBlock('body', $context, $blocks);
        // line 31
        echo "        </div>

        <div class=\"footer\">
            <p class=\"footer-text\">Made with <span class=\"heart\"><3</span> <a href=\"https://knpuniversity.com\">KnpUniversity</a></p>
        </div>

        ";
        // line 37
        $this->displayBlock('javascripts', $context, $blocks);
        // line 41
        echo "    </body>
</html>
";
        
        $__internal_8fe7ea35f409b5dcf16a1690cb5193a2539d1ffe01c21df2b661e6ca65a72047->leave($__internal_8fe7ea35f409b5dcf16a1690cb5193a2539d1ffe01c21df2b661e6ca65a72047_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_60abd238670f932c8e7630e5e7edd66df0b0724bba5d15a856b29ba6a270ae74 = $this->env->getExtension("native_profiler");
        $__internal_60abd238670f932c8e7630e5e7edd66df0b0724bba5d15a856b29ba6a270ae74->enter($__internal_60abd238670f932c8e7630e5e7edd66df0b0724bba5d15a856b29ba6a270ae74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AquaNote!";
        
        $__internal_60abd238670f932c8e7630e5e7edd66df0b0724bba5d15a856b29ba6a270ae74->leave($__internal_60abd238670f932c8e7630e5e7edd66df0b0724bba5d15a856b29ba6a270ae74_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0501156668144ec48e4d81f578ac1c2cf5b677c290bfb1f5897c916e53b521b4 = $this->env->getExtension("native_profiler");
        $__internal_0501156668144ec48e4d81f578ac1c2cf5b677c290bfb1f5897c916e53b521b4->enter($__internal_0501156668144ec48e4d81f578ac1c2cf5b677c290bfb1f5897c916e53b521b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_0501156668144ec48e4d81f578ac1c2cf5b677c290bfb1f5897c916e53b521b4->leave($__internal_0501156668144ec48e4d81f578ac1c2cf5b677c290bfb1f5897c916e53b521b4_prof);

    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
        $__internal_83bca4d4f75e5ef7cb51f8f349b726432359fb9f9c3e178aa1990987a7e23041 = $this->env->getExtension("native_profiler");
        $__internal_83bca4d4f75e5ef7cb51f8f349b726432359fb9f9c3e178aa1990987a7e23041->enter($__internal_83bca4d4f75e5ef7cb51f8f349b726432359fb9f9c3e178aa1990987a7e23041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_83bca4d4f75e5ef7cb51f8f349b726432359fb9f9c3e178aa1990987a7e23041->leave($__internal_83bca4d4f75e5ef7cb51f8f349b726432359fb9f9c3e178aa1990987a7e23041_prof);

    }

    // line 37
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_da8770a91494a8305fdab52af6e0138acbfcc336285370000ce01065ecfb8850 = $this->env->getExtension("native_profiler");
        $__internal_da8770a91494a8305fdab52af6e0138acbfcc336285370000ce01065ecfb8850->enter($__internal_da8770a91494a8305fdab52af6e0138acbfcc336285370000ce01065ecfb8850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 38
        echo "            <script src=\"//code.jquery.com/jquery-2.1.4.min.js\"></script>
            <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_da8770a91494a8305fdab52af6e0138acbfcc336285370000ce01065ecfb8850->leave($__internal_da8770a91494a8305fdab52af6e0138acbfcc336285370000ce01065ecfb8850_prof);

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
        return array (  141 => 39,  138 => 38,  132 => 37,  121 => 30,  112 => 10,  108 => 9,  103 => 8,  97 => 7,  85 => 5,  76 => 41,  74 => 37,  66 => 31,  64 => 30,  52 => 21,  39 => 12,  37 => 7,  32 => 5,  26 => 1,);
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
