<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_ed3b3db883f01d8d6fe5df2e879bf1fde8ffd89a675275dc3c1b18da7a4ee2df extends Twig_Template
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
        $__internal_f0b2102d9fd6207069705212c1ef501c700ccd96f482bf7917b442ab536fe7bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0b2102d9fd6207069705212c1ef501c700ccd96f482bf7917b442ab536fe7bd->enter($__internal_f0b2102d9fd6207069705212c1ef501c700ccd96f482bf7917b442ab536fe7bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_0dd47b71e1c756cff6bd784c15c6912bf2790bd7f39b3c1c0400632603078cb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dd47b71e1c756cff6bd784c15c6912bf2790bd7f39b3c1c0400632603078cb3->enter($__internal_0dd47b71e1c756cff6bd784c15c6912bf2790bd7f39b3c1c0400632603078cb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_f0b2102d9fd6207069705212c1ef501c700ccd96f482bf7917b442ab536fe7bd->leave($__internal_f0b2102d9fd6207069705212c1ef501c700ccd96f482bf7917b442ab536fe7bd_prof);

        
        $__internal_0dd47b71e1c756cff6bd784c15c6912bf2790bd7f39b3c1c0400632603078cb3->leave($__internal_0dd47b71e1c756cff6bd784c15c6912bf2790bd7f39b3c1c0400632603078cb3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.css.twig", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
