<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_3af4a99c1cb655a4825f0a6e01551d674b52d52b622e47d73e3845cb1496152a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_31451cab6a76d18730972b592770809ea6cf3db2042ee23084bc0005020bb859 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31451cab6a76d18730972b592770809ea6cf3db2042ee23084bc0005020bb859->enter($__internal_31451cab6a76d18730972b592770809ea6cf3db2042ee23084bc0005020bb859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_45ac7efa17caefe2f9bf16c4a7fe1c2679bed767a9d56e243ca858c5094e2201 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45ac7efa17caefe2f9bf16c4a7fe1c2679bed767a9d56e243ca858c5094e2201->enter($__internal_45ac7efa17caefe2f9bf16c4a7fe1c2679bed767a9d56e243ca858c5094e2201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31451cab6a76d18730972b592770809ea6cf3db2042ee23084bc0005020bb859->leave($__internal_31451cab6a76d18730972b592770809ea6cf3db2042ee23084bc0005020bb859_prof);

        
        $__internal_45ac7efa17caefe2f9bf16c4a7fe1c2679bed767a9d56e243ca858c5094e2201->leave($__internal_45ac7efa17caefe2f9bf16c4a7fe1c2679bed767a9d56e243ca858c5094e2201_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ffc0d86ac6a5b1ecceb4791159d429edcd622c8611ec63355913c416087caf28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffc0d86ac6a5b1ecceb4791159d429edcd622c8611ec63355913c416087caf28->enter($__internal_ffc0d86ac6a5b1ecceb4791159d429edcd622c8611ec63355913c416087caf28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4b98b69a567be317f0d88ab6eab2bd00b1549f1998de148e20c720f9062f6785 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b98b69a567be317f0d88ab6eab2bd00b1549f1998de148e20c720f9062f6785->enter($__internal_4b98b69a567be317f0d88ab6eab2bd00b1549f1998de148e20c720f9062f6785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4b98b69a567be317f0d88ab6eab2bd00b1549f1998de148e20c720f9062f6785->leave($__internal_4b98b69a567be317f0d88ab6eab2bd00b1549f1998de148e20c720f9062f6785_prof);

        
        $__internal_ffc0d86ac6a5b1ecceb4791159d429edcd622c8611ec63355913c416087caf28->leave($__internal_ffc0d86ac6a5b1ecceb4791159d429edcd622c8611ec63355913c416087caf28_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5fa2273beb974cbdfd840e3815999112d18dc5c02847d77fcf9e6f43cab55cc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fa2273beb974cbdfd840e3815999112d18dc5c02847d77fcf9e6f43cab55cc3->enter($__internal_5fa2273beb974cbdfd840e3815999112d18dc5c02847d77fcf9e6f43cab55cc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_185c6a61026e78ada9604506a48b821f51612e8361fa40b9ea383e070c264107 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_185c6a61026e78ada9604506a48b821f51612e8361fa40b9ea383e070c264107->enter($__internal_185c6a61026e78ada9604506a48b821f51612e8361fa40b9ea383e070c264107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_185c6a61026e78ada9604506a48b821f51612e8361fa40b9ea383e070c264107->leave($__internal_185c6a61026e78ada9604506a48b821f51612e8361fa40b9ea383e070c264107_prof);

        
        $__internal_5fa2273beb974cbdfd840e3815999112d18dc5c02847d77fcf9e6f43cab55cc3->leave($__internal_5fa2273beb974cbdfd840e3815999112d18dc5c02847d77fcf9e6f43cab55cc3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d4994389d0a0b3acab809ce9c6f885f6bace31f75f909b14f77bc079d962515e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4994389d0a0b3acab809ce9c6f885f6bace31f75f909b14f77bc079d962515e->enter($__internal_d4994389d0a0b3acab809ce9c6f885f6bace31f75f909b14f77bc079d962515e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_dc932488bebcadbe5dee0cc94903687514f871f6926e36bf8440becc8a79675c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc932488bebcadbe5dee0cc94903687514f871f6926e36bf8440becc8a79675c->enter($__internal_dc932488bebcadbe5dee0cc94903687514f871f6926e36bf8440becc8a79675c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_dc932488bebcadbe5dee0cc94903687514f871f6926e36bf8440becc8a79675c->leave($__internal_dc932488bebcadbe5dee0cc94903687514f871f6926e36bf8440becc8a79675c_prof);

        
        $__internal_d4994389d0a0b3acab809ce9c6f885f6bace31f75f909b14f77bc079d962515e->leave($__internal_d4994389d0a0b3acab809ce9c6f885f6bace31f75f909b14f77bc079d962515e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
