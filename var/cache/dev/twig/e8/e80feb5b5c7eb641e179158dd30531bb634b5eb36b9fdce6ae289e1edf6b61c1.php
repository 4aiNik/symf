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
        $__internal_a4fe5a6124d2e5181a854e4324357f221af9dfa20ccc7f08b9e2cbf7a503337b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4fe5a6124d2e5181a854e4324357f221af9dfa20ccc7f08b9e2cbf7a503337b->enter($__internal_a4fe5a6124d2e5181a854e4324357f221af9dfa20ccc7f08b9e2cbf7a503337b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_ae02d55a169fdc486057ff121d8211e41ef14478496d906ec1be669c124beafc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae02d55a169fdc486057ff121d8211e41ef14478496d906ec1be669c124beafc->enter($__internal_ae02d55a169fdc486057ff121d8211e41ef14478496d906ec1be669c124beafc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_a4fe5a6124d2e5181a854e4324357f221af9dfa20ccc7f08b9e2cbf7a503337b->leave($__internal_a4fe5a6124d2e5181a854e4324357f221af9dfa20ccc7f08b9e2cbf7a503337b_prof);

        
        $__internal_ae02d55a169fdc486057ff121d8211e41ef14478496d906ec1be669c124beafc->leave($__internal_ae02d55a169fdc486057ff121d8211e41ef14478496d906ec1be669c124beafc_prof);

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
