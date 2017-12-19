<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_ac4d899aa45c8e04f11a0a37f3a572a06d5eda37db28656b55197b0a03d66249 extends Twig_Template
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
        $__internal_28bd93de9040e240c088a7d20f67cf3775d0db6d32325de084bad783f0edee9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28bd93de9040e240c088a7d20f67cf3775d0db6d32325de084bad783f0edee9c->enter($__internal_28bd93de9040e240c088a7d20f67cf3775d0db6d32325de084bad783f0edee9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_79241d789245516f4bd2023cc346faee786f732718ffe813b3058bb331188c96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79241d789245516f4bd2023cc346faee786f732718ffe813b3058bb331188c96->enter($__internal_79241d789245516f4bd2023cc346faee786f732718ffe813b3058bb331188c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_28bd93de9040e240c088a7d20f67cf3775d0db6d32325de084bad783f0edee9c->leave($__internal_28bd93de9040e240c088a7d20f67cf3775d0db6d32325de084bad783f0edee9c_prof);

        
        $__internal_79241d789245516f4bd2023cc346faee786f732718ffe813b3058bb331188c96->leave($__internal_79241d789245516f4bd2023cc346faee786f732718ffe813b3058bb331188c96_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
