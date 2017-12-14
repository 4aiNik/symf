<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_0c33a369ff4379e84e79ca047a9bd0f8d25a0a2094943a9e180983137ce969ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_761b7b7df54581f4ed10926d4c9f2f5d91a75c7213ed56b96f79476e556d125f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_761b7b7df54581f4ed10926d4c9f2f5d91a75c7213ed56b96f79476e556d125f->enter($__internal_761b7b7df54581f4ed10926d4c9f2f5d91a75c7213ed56b96f79476e556d125f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_8faa7b810e63df03f489235227516177d33978d9b802cbe1909e9365fbaf3e2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8faa7b810e63df03f489235227516177d33978d9b802cbe1909e9365fbaf3e2f->enter($__internal_8faa7b810e63df03f489235227516177d33978d9b802cbe1909e9365fbaf3e2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_761b7b7df54581f4ed10926d4c9f2f5d91a75c7213ed56b96f79476e556d125f->leave($__internal_761b7b7df54581f4ed10926d4c9f2f5d91a75c7213ed56b96f79476e556d125f_prof);

        
        $__internal_8faa7b810e63df03f489235227516177d33978d9b802cbe1909e9365fbaf3e2f->leave($__internal_8faa7b810e63df03f489235227516177d33978d9b802cbe1909e9365fbaf3e2f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e9d4596e7e35abde6954d9f224cab5c9bd4c2520466703165adc8e072f476354 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9d4596e7e35abde6954d9f224cab5c9bd4c2520466703165adc8e072f476354->enter($__internal_e9d4596e7e35abde6954d9f224cab5c9bd4c2520466703165adc8e072f476354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a04693d5a24eb2de6feda70ac1db345e85c46ba043c5e4af477ff295945919f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a04693d5a24eb2de6feda70ac1db345e85c46ba043c5e4af477ff295945919f7->enter($__internal_a04693d5a24eb2de6feda70ac1db345e85c46ba043c5e4af477ff295945919f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a04693d5a24eb2de6feda70ac1db345e85c46ba043c5e4af477ff295945919f7->leave($__internal_a04693d5a24eb2de6feda70ac1db345e85c46ba043c5e4af477ff295945919f7_prof);

        
        $__internal_e9d4596e7e35abde6954d9f224cab5c9bd4c2520466703165adc8e072f476354->leave($__internal_e9d4596e7e35abde6954d9f224cab5c9bd4c2520466703165adc8e072f476354_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6c26c220161303ee86e9f3dc1adb0d3389b043cd0a10efa48ceac80348c3900b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c26c220161303ee86e9f3dc1adb0d3389b043cd0a10efa48ceac80348c3900b->enter($__internal_6c26c220161303ee86e9f3dc1adb0d3389b043cd0a10efa48ceac80348c3900b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8994b4cf00ec170df048f8c1a69d7258b5b4e3c2f9ad7a328dfa96f513686eee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8994b4cf00ec170df048f8c1a69d7258b5b4e3c2f9ad7a328dfa96f513686eee->enter($__internal_8994b4cf00ec170df048f8c1a69d7258b5b4e3c2f9ad7a328dfa96f513686eee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_8994b4cf00ec170df048f8c1a69d7258b5b4e3c2f9ad7a328dfa96f513686eee->leave($__internal_8994b4cf00ec170df048f8c1a69d7258b5b4e3c2f9ad7a328dfa96f513686eee_prof);

        
        $__internal_6c26c220161303ee86e9f3dc1adb0d3389b043cd0a10efa48ceac80348c3900b->leave($__internal_6c26c220161303ee86e9f3dc1adb0d3389b043cd0a10efa48ceac80348c3900b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
