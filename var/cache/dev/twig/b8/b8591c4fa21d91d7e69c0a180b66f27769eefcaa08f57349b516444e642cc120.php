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
        $__internal_ed596f856f9cc4e4dbb3ec9ecc1122f33e026d140abc01ceb99206acde262c07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed596f856f9cc4e4dbb3ec9ecc1122f33e026d140abc01ceb99206acde262c07->enter($__internal_ed596f856f9cc4e4dbb3ec9ecc1122f33e026d140abc01ceb99206acde262c07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_5348e2fb0323d4b8f868544f2ac3a54bbb64518fe7e95c803a4f700889baf2c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5348e2fb0323d4b8f868544f2ac3a54bbb64518fe7e95c803a4f700889baf2c3->enter($__internal_5348e2fb0323d4b8f868544f2ac3a54bbb64518fe7e95c803a4f700889baf2c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_ed596f856f9cc4e4dbb3ec9ecc1122f33e026d140abc01ceb99206acde262c07->leave($__internal_ed596f856f9cc4e4dbb3ec9ecc1122f33e026d140abc01ceb99206acde262c07_prof);

        
        $__internal_5348e2fb0323d4b8f868544f2ac3a54bbb64518fe7e95c803a4f700889baf2c3->leave($__internal_5348e2fb0323d4b8f868544f2ac3a54bbb64518fe7e95c803a4f700889baf2c3_prof);

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
