<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_22b1ee51354d38bbec455b13ce2f0c8f15d791a7a7830730ca0c6e67d5856847 extends Twig_Template
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
        $__internal_7b7b9b0be0dd8320adcbf833608a086e465e262139a6964e4834e4da55008f27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b7b9b0be0dd8320adcbf833608a086e465e262139a6964e4834e4da55008f27->enter($__internal_7b7b9b0be0dd8320adcbf833608a086e465e262139a6964e4834e4da55008f27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_cbf97f475bbf7a005f7c79bb2842791d449ceb7beed501d2644e5e0082ddb1ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbf97f475bbf7a005f7c79bb2842791d449ceb7beed501d2644e5e0082ddb1ef->enter($__internal_cbf97f475bbf7a005f7c79bb2842791d449ceb7beed501d2644e5e0082ddb1ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_7b7b9b0be0dd8320adcbf833608a086e465e262139a6964e4834e4da55008f27->leave($__internal_7b7b9b0be0dd8320adcbf833608a086e465e262139a6964e4834e4da55008f27_prof);

        
        $__internal_cbf97f475bbf7a005f7c79bb2842791d449ceb7beed501d2644e5e0082ddb1ef->leave($__internal_cbf97f475bbf7a005f7c79bb2842791d449ceb7beed501d2644e5e0082ddb1ef_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
