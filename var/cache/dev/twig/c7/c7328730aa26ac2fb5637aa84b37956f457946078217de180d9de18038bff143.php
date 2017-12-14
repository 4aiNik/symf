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
        $__internal_79d27ff702f9200c355c66998910be825b17e4380e89dd721249f1701425083d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79d27ff702f9200c355c66998910be825b17e4380e89dd721249f1701425083d->enter($__internal_79d27ff702f9200c355c66998910be825b17e4380e89dd721249f1701425083d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_d25c52de3e6de3650df3390351d52841198b0fb7fdb1212aa01f0312fd2f5ee8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d25c52de3e6de3650df3390351d52841198b0fb7fdb1212aa01f0312fd2f5ee8->enter($__internal_d25c52de3e6de3650df3390351d52841198b0fb7fdb1212aa01f0312fd2f5ee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_79d27ff702f9200c355c66998910be825b17e4380e89dd721249f1701425083d->leave($__internal_79d27ff702f9200c355c66998910be825b17e4380e89dd721249f1701425083d_prof);

        
        $__internal_d25c52de3e6de3650df3390351d52841198b0fb7fdb1212aa01f0312fd2f5ee8->leave($__internal_d25c52de3e6de3650df3390351d52841198b0fb7fdb1212aa01f0312fd2f5ee8_prof);

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
