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
        $__internal_d8ff93a361c3cc32b9984be2fc437b6108453b1cf44bcd42d636d3d8da8e4ac8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8ff93a361c3cc32b9984be2fc437b6108453b1cf44bcd42d636d3d8da8e4ac8->enter($__internal_d8ff93a361c3cc32b9984be2fc437b6108453b1cf44bcd42d636d3d8da8e4ac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_76b1a28b8caf765e422a1605da497d86fcce8799888758259cd6d4bf449f571e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76b1a28b8caf765e422a1605da497d86fcce8799888758259cd6d4bf449f571e->enter($__internal_76b1a28b8caf765e422a1605da497d86fcce8799888758259cd6d4bf449f571e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_d8ff93a361c3cc32b9984be2fc437b6108453b1cf44bcd42d636d3d8da8e4ac8->leave($__internal_d8ff93a361c3cc32b9984be2fc437b6108453b1cf44bcd42d636d3d8da8e4ac8_prof);

        
        $__internal_76b1a28b8caf765e422a1605da497d86fcce8799888758259cd6d4bf449f571e->leave($__internal_76b1a28b8caf765e422a1605da497d86fcce8799888758259cd6d4bf449f571e_prof);

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
