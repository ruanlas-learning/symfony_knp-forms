<?php

/* genus/list.html.twig */
class __TwigTemplate_714c70d42fc731cc43095eeab105673978057151a64842adbd46ec3421651f38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "genus/list.html.twig", 1);
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
        $__internal_9fad509f0092958b7b4605f405f697adb5666070e1f067e7e2acdccbe47caf12 = $this->env->getExtension("native_profiler");
        $__internal_9fad509f0092958b7b4605f405f697adb5666070e1f067e7e2acdccbe47caf12->enter($__internal_9fad509f0092958b7b4605f405f697adb5666070e1f067e7e2acdccbe47caf12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "genus/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9fad509f0092958b7b4605f405f697adb5666070e1f067e7e2acdccbe47caf12->leave($__internal_9fad509f0092958b7b4605f405f697adb5666070e1f067e7e2acdccbe47caf12_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_53b3d9e0084d6e1e5399bd3a73e243b0477297b16f52ae70270b35ff93f20153 = $this->env->getExtension("native_profiler");
        $__internal_53b3d9e0084d6e1e5399bd3a73e243b0477297b16f52ae70270b35ff93f20153->enter($__internal_53b3d9e0084d6e1e5399bd3a73e243b0477297b16f52ae70270b35ff93f20153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>Genus</th>
                <th># of species</th>
                <th>Last updated</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["genuses"]) ? $context["genuses"] : $this->getContext($context, "genuses")));
        foreach ($context['_seq'] as $context["_key"] => $context["genus"]) {
            // line 14
            echo "                <tr>
                    <td>
                        <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("genus_show", array("genusName" => $this->getAttribute($context["genus"], "name", array()))), "html", null, true);
            echo "\">
                            ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["genus"], "name", array()), "html", null, true);
            echo "
                        </a>
                    </td>
                    <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["genus"], "speciesCount", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["genus"], "updatedAt", array()), "Y-m-d"), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genus'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "        </tbody>
    </table>
";
        
        $__internal_53b3d9e0084d6e1e5399bd3a73e243b0477297b16f52ae70270b35ff93f20153->leave($__internal_53b3d9e0084d6e1e5399bd3a73e243b0477297b16f52ae70270b35ff93f20153_prof);

    }

    public function getTemplateName()
    {
        return "genus/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 24,  73 => 21,  69 => 20,  63 => 17,  59 => 16,  55 => 14,  51 => 13,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <table class="table table-striped">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Genus</th>*/
/*                 <th># of species</th>*/
/*                 <th>Last updated</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*             {% for genus in genuses %}*/
/*                 <tr>*/
/*                     <td>*/
/*                         <a href="{{ path('genus_show', {'genusName': genus.name}) }}">*/
/*                             {{ genus.name }}*/
/*                         </a>*/
/*                     </td>*/
/*                     <td>{{ genus.speciesCount }}</td>*/
/*                     <td>{{ genus.updatedAt|date('Y-m-d') }}</td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* {% endblock %}*/
/* */
