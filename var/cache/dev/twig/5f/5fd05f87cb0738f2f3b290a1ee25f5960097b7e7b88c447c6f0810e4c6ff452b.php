<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_9c85e1c6dc6cd7fd4d29b0657daf3d563e349ecb6f696cf03a9b48e4804332a5 extends Twig_Template
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
        $__internal_fe33abfb812b86e8d857d3fccc275400ea4e7ed47edd99986997124c491e3326 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe33abfb812b86e8d857d3fccc275400ea4e7ed47edd99986997124c491e3326->enter($__internal_fe33abfb812b86e8d857d3fccc275400ea4e7ed47edd99986997124c491e3326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_9926e8f829f93d5af5e1c321e20be75fa589aa1d00d18911e4e0915bc4147cd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9926e8f829f93d5af5e1c321e20be75fa589aa1d00d18911e4e0915bc4147cd1->enter($__internal_9926e8f829f93d5af5e1c321e20be75fa589aa1d00d18911e4e0915bc4147cd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_fe33abfb812b86e8d857d3fccc275400ea4e7ed47edd99986997124c491e3326->leave($__internal_fe33abfb812b86e8d857d3fccc275400ea4e7ed47edd99986997124c491e3326_prof);

        
        $__internal_9926e8f829f93d5af5e1c321e20be75fa589aa1d00d18911e4e0915bc4147cd1->leave($__internal_9926e8f829f93d5af5e1c321e20be75fa589aa1d00d18911e4e0915bc4147cd1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
