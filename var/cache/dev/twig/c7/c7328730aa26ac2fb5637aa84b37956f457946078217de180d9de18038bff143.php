<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_440052636673501027f2ccee8006eb2f949d3bfff4de277fc05e94b3b877842d extends Twig_Template
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
        $__internal_d4697f46bbbf22d38f543c615ad99b3d02983dd1d08bb6a7a681b5b55352131a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4697f46bbbf22d38f543c615ad99b3d02983dd1d08bb6a7a681b5b55352131a->enter($__internal_d4697f46bbbf22d38f543c615ad99b3d02983dd1d08bb6a7a681b5b55352131a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_5e04aa99aac5290760dc4aa15c702cab8cc2ed719cd56c5a9ce76973b581f55b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e04aa99aac5290760dc4aa15c702cab8cc2ed719cd56c5a9ce76973b581f55b->enter($__internal_5e04aa99aac5290760dc4aa15c702cab8cc2ed719cd56c5a9ce76973b581f55b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_d4697f46bbbf22d38f543c615ad99b3d02983dd1d08bb6a7a681b5b55352131a->leave($__internal_d4697f46bbbf22d38f543c615ad99b3d02983dd1d08bb6a7a681b5b55352131a_prof);

        
        $__internal_5e04aa99aac5290760dc4aa15c702cab8cc2ed719cd56c5a9ce76973b581f55b->leave($__internal_5e04aa99aac5290760dc4aa15c702cab8cc2ed719cd56c5a9ce76973b581f55b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
