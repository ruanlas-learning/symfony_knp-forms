<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_7b8bca9d957a7deaa663dc8ceaae8db15f446bc6458fbe1633c32018e25e98ab extends Twig_Template
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
        $__internal_b0faf6e89f8878b4e3bb783afa05acb54f40734e9d7d3b3bed192b805c5734f1 = $this->env->getExtension("native_profiler");
        $__internal_b0faf6e89f8878b4e3bb783afa05acb54f40734e9d7d3b3bed192b805c5734f1->enter($__internal_b0faf6e89f8878b4e3bb783afa05acb54f40734e9d7d3b3bed192b805c5734f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_b0faf6e89f8878b4e3bb783afa05acb54f40734e9d7d3b3bed192b805c5734f1->leave($__internal_b0faf6e89f8878b4e3bb783afa05acb54f40734e9d7d3b3bed192b805c5734f1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
