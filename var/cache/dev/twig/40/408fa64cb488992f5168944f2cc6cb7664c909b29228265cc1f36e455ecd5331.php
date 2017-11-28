<?php

/* :genus:show.html.twig */
class __TwigTemplate_97b4636c268c1346f4b441f2b618fdc8801f03873eb3421d45bfc694c6391397 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":genus:show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c7ec6f2d1f5b84a83c43ddceda482f17399af184f43a4450310b554a42151755 = $this->env->getExtension("native_profiler");
        $__internal_c7ec6f2d1f5b84a83c43ddceda482f17399af184f43a4450310b554a42151755->enter($__internal_c7ec6f2d1f5b84a83c43ddceda482f17399af184f43a4450310b554a42151755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":genus:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7ec6f2d1f5b84a83c43ddceda482f17399af184f43a4450310b554a42151755->leave($__internal_c7ec6f2d1f5b84a83c43ddceda482f17399af184f43a4450310b554a42151755_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b6141b76107823423af552213ca65d4003f452e275ce938b4159e8ec23a48f18 = $this->env->getExtension("native_profiler");
        $__internal_b6141b76107823423af552213ca65d4003f452e275ce938b4159e8ec23a48f18->enter($__internal_b6141b76107823423af552213ca65d4003f452e275ce938b4159e8ec23a48f18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Genus ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["genus"]) ? $context["genus"] : $this->getContext($context, "genus")), "name", array()), "html", null, true);
        
        $__internal_b6141b76107823423af552213ca65d4003f452e275ce938b4159e8ec23a48f18->leave($__internal_b6141b76107823423af552213ca65d4003f452e275ce938b4159e8ec23a48f18_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b0a02ac87587141039013a43c7907cfab747c3364959b6e296455bde3186b5da = $this->env->getExtension("native_profiler");
        $__internal_b0a02ac87587141039013a43c7907cfab747c3364959b6e296455bde3186b5da->enter($__internal_b0a02ac87587141039013a43c7907cfab747c3364959b6e296455bde3186b5da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h2 class=\"genus-name\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["genus"]) ? $context["genus"] : $this->getContext($context, "genus")), "name", array()), "html", null, true);
        echo "</h2>

    <div class=\"sea-creature-container\">
        <div class=\"genus-photo\"></div>
        <div class=\"genus-details\">
            <dl class=\"genus-details-list\">
                <dt>Subfamily:</dt>
                <dd>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["genus"]) ? $context["genus"] : $this->getContext($context, "genus")), "subFamily", array()), "name", array()), "html", null, true);
        echo "</dd>
                <dt>Known Species:</dt>
                <dd>";
        // line 15
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["genus"]) ? $context["genus"] : $this->getContext($context, "genus")), "speciesCount", array())), "html", null, true);
        echo "</dd>
                <dt>Fun Fact:</dt>
                <dd>";
        // line 17
        echo $this->env->getExtension('app_markdown')->parseMarkdown($this->getAttribute((isset($context["genus"]) ? $context["genus"] : $this->getContext($context, "genus")), "funFact", array()));
        echo "</dd>
                <dt>Recent Notes</dt>
                <dd>";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["recentNoteCount"]) ? $context["recentNoteCount"] : $this->getContext($context, "recentNoteCount")), "html", null, true);
        echo "</dd>
            </dl>
        </div>
    </div>
    <div id=\"js-notes-wrapper\"></div>
";
        
        $__internal_b0a02ac87587141039013a43c7907cfab747c3364959b6e296455bde3186b5da->leave($__internal_b0a02ac87587141039013a43c7907cfab747c3364959b6e296455bde3186b5da_prof);

    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e4a64958edefbba688187d95b87e7b831b4c95931eb125477d05cf941aecd3b6 = $this->env->getExtension("native_profiler");
        $__internal_e4a64958edefbba688187d95b87e7b831b4c95931eb125477d05cf941aecd3b6->enter($__internal_e4a64958edefbba688187d95b87e7b831b4c95931eb125477d05cf941aecd3b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 27
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/react/0.14.3/react.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/react/0.14.3/react-dom.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/babel-core/5.8.23/browser.min.js\"></script>

    <script type=\"text/babel\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/notes.react.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/babel\">
        var notesUrl = '";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("genus_show_notes", array("name" => $this->getAttribute((isset($context["genus"]) ? $context["genus"] : $this->getContext($context, "genus")), "name", array()))), "html", null, true);
        echo "';

        ReactDOM.render(
          <NoteSection url={notesUrl} />,
          document.getElementById('js-notes-wrapper')
        );
    </script>
";
        
        $__internal_e4a64958edefbba688187d95b87e7b831b4c95931eb125477d05cf941aecd3b6->leave($__internal_e4a64958edefbba688187d95b87e7b831b4c95931eb125477d05cf941aecd3b6_prof);

    }

    public function getTemplateName()
    {
        return ":genus:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 34,  109 => 32,  100 => 27,  94 => 26,  81 => 19,  76 => 17,  71 => 15,  66 => 13,  55 => 6,  49 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}Genus {{ genus.name }}{% endblock %}*/
/* */
/* {% block body %}*/
/*     <h2 class="genus-name">{{ genus.name }}</h2>*/
/* */
/*     <div class="sea-creature-container">*/
/*         <div class="genus-photo"></div>*/
/*         <div class="genus-details">*/
/*             <dl class="genus-details-list">*/
/*                 <dt>Subfamily:</dt>*/
/*                 <dd>{{ genus.subFamily.name }}</dd>*/
/*                 <dt>Known Species:</dt>*/
/*                 <dd>{{ genus.speciesCount|number_format }}</dd>*/
/*                 <dt>Fun Fact:</dt>*/
/*                 <dd>{{ genus.funFact|markdownify }}</dd>*/
/*                 <dt>Recent Notes</dt>*/
/*                 <dd>{{ recentNoteCount }}</dd>*/
/*             </dl>*/
/*         </div>*/
/*     </div>*/
/*     <div id="js-notes-wrapper"></div>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     <script src="https://cdnjs.cloudflare.com/ajax/libs/react/0.14.3/react.js"></script>*/
/*     <script src="https://cdnjs.cloudflare.com/ajax/libs/react/0.14.3/react-dom.js"></script>*/
/*     <script src="https://cdnjs.cloudflare.com/ajax/libs/babel-core/5.8.23/browser.min.js"></script>*/
/* */
/*     <script type="text/babel" src="{{ asset('js/notes.react.js') }}"></script>*/
/*     <script type="text/babel">*/
/*         var notesUrl = '{{ path('genus_show_notes', {'name': genus.name}) }}';*/
/* */
/*         ReactDOM.render(*/
/*           <NoteSection url={notesUrl} />,*/
/*           document.getElementById('js-notes-wrapper')*/
/*         );*/
/*     </script>*/
/* {% endblock %}*/
/* */
