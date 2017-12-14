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
        $__internal_965dbcbea7c05041b17163bea84d8a99127d79a6d1416091efdf69774370cd63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_965dbcbea7c05041b17163bea84d8a99127d79a6d1416091efdf69774370cd63->enter($__internal_965dbcbea7c05041b17163bea84d8a99127d79a6d1416091efdf69774370cd63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_4c49c19749f19fbedc46f305684e1becca6ec6a9d9ca32045e288cf243397f44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c49c19749f19fbedc46f305684e1becca6ec6a9d9ca32045e288cf243397f44->enter($__internal_4c49c19749f19fbedc46f305684e1becca6ec6a9d9ca32045e288cf243397f44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_965dbcbea7c05041b17163bea84d8a99127d79a6d1416091efdf69774370cd63->leave($__internal_965dbcbea7c05041b17163bea84d8a99127d79a6d1416091efdf69774370cd63_prof);

        
        $__internal_4c49c19749f19fbedc46f305684e1becca6ec6a9d9ca32045e288cf243397f44->leave($__internal_4c49c19749f19fbedc46f305684e1becca6ec6a9d9ca32045e288cf243397f44_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_166cd1ad5cce1938b80632ca19f5b95b512a668c11bc14bff3ee6b56619fe97f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_166cd1ad5cce1938b80632ca19f5b95b512a668c11bc14bff3ee6b56619fe97f->enter($__internal_166cd1ad5cce1938b80632ca19f5b95b512a668c11bc14bff3ee6b56619fe97f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4493a047b24e9abc59fc4b70592039d36d41184adba3e68a4d769231dc342e01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4493a047b24e9abc59fc4b70592039d36d41184adba3e68a4d769231dc342e01->enter($__internal_4493a047b24e9abc59fc4b70592039d36d41184adba3e68a4d769231dc342e01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4493a047b24e9abc59fc4b70592039d36d41184adba3e68a4d769231dc342e01->leave($__internal_4493a047b24e9abc59fc4b70592039d36d41184adba3e68a4d769231dc342e01_prof);

        
        $__internal_166cd1ad5cce1938b80632ca19f5b95b512a668c11bc14bff3ee6b56619fe97f->leave($__internal_166cd1ad5cce1938b80632ca19f5b95b512a668c11bc14bff3ee6b56619fe97f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0ff171e3823335ac335a96b9d4eaccef299f88ef38be7659bc6b3b02271b2c48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ff171e3823335ac335a96b9d4eaccef299f88ef38be7659bc6b3b02271b2c48->enter($__internal_0ff171e3823335ac335a96b9d4eaccef299f88ef38be7659bc6b3b02271b2c48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_caf6f28e02e842a9a0d242796b3d8ca24e9470f8431c9797ac60582eda673742 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caf6f28e02e842a9a0d242796b3d8ca24e9470f8431c9797ac60582eda673742->enter($__internal_caf6f28e02e842a9a0d242796b3d8ca24e9470f8431c9797ac60582eda673742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_caf6f28e02e842a9a0d242796b3d8ca24e9470f8431c9797ac60582eda673742->leave($__internal_caf6f28e02e842a9a0d242796b3d8ca24e9470f8431c9797ac60582eda673742_prof);

        
        $__internal_0ff171e3823335ac335a96b9d4eaccef299f88ef38be7659bc6b3b02271b2c48->leave($__internal_0ff171e3823335ac335a96b9d4eaccef299f88ef38be7659bc6b3b02271b2c48_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_66c55558944508cdaa29b3a9ae7ad507ba52a62e8db8ffe81a7fcc800049c921 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66c55558944508cdaa29b3a9ae7ad507ba52a62e8db8ffe81a7fcc800049c921->enter($__internal_66c55558944508cdaa29b3a9ae7ad507ba52a62e8db8ffe81a7fcc800049c921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bc8d28f089596e9024e495888ff152cc1e144175740d51febaa608b70b226e70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc8d28f089596e9024e495888ff152cc1e144175740d51febaa608b70b226e70->enter($__internal_bc8d28f089596e9024e495888ff152cc1e144175740d51febaa608b70b226e70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_bc8d28f089596e9024e495888ff152cc1e144175740d51febaa608b70b226e70->leave($__internal_bc8d28f089596e9024e495888ff152cc1e144175740d51febaa608b70b226e70_prof);

        
        $__internal_66c55558944508cdaa29b3a9ae7ad507ba52a62e8db8ffe81a7fcc800049c921->leave($__internal_66c55558944508cdaa29b3a9ae7ad507ba52a62e8db8ffe81a7fcc800049c921_prof);

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
