<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_aa83498be161242a9f91d6a22df145b34e65dacd1633e3e28a2baeb8081b4468 extends Twig_Template
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
        $__internal_efee3b39f1012973e9ce02451aa92eb339a9f946eb8da58fb185a1704f67a0d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efee3b39f1012973e9ce02451aa92eb339a9f946eb8da58fb185a1704f67a0d9->enter($__internal_efee3b39f1012973e9ce02451aa92eb339a9f946eb8da58fb185a1704f67a0d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_74b4f5a3d9ce6e7c3152eeec79ee1b6aae19fbe3c383b239b56659d26aee8cbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74b4f5a3d9ce6e7c3152eeec79ee1b6aae19fbe3c383b239b56659d26aee8cbb->enter($__internal_74b4f5a3d9ce6e7c3152eeec79ee1b6aae19fbe3c383b239b56659d26aee8cbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_efee3b39f1012973e9ce02451aa92eb339a9f946eb8da58fb185a1704f67a0d9->leave($__internal_efee3b39f1012973e9ce02451aa92eb339a9f946eb8da58fb185a1704f67a0d9_prof);

        
        $__internal_74b4f5a3d9ce6e7c3152eeec79ee1b6aae19fbe3c383b239b56659d26aee8cbb->leave($__internal_74b4f5a3d9ce6e7c3152eeec79ee1b6aae19fbe3c383b239b56659d26aee8cbb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
