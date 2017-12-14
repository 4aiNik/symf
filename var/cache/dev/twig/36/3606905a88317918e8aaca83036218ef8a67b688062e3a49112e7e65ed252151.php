<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_cf162f25fa3b6f82cee69ba6f883fb7c82621dcf246f7c18429b115a3511835f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_42c23d45fe4c3f4342d9d43ab2f4f7029346fd66e3e02f08012894571b7df7fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42c23d45fe4c3f4342d9d43ab2f4f7029346fd66e3e02f08012894571b7df7fc->enter($__internal_42c23d45fe4c3f4342d9d43ab2f4f7029346fd66e3e02f08012894571b7df7fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_806ed34c61608e1e8c9ef5dc42e8c9ebe04d65550c6eec2dec606c9ec113fb87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_806ed34c61608e1e8c9ef5dc42e8c9ebe04d65550c6eec2dec606c9ec113fb87->enter($__internal_806ed34c61608e1e8c9ef5dc42e8c9ebe04d65550c6eec2dec606c9ec113fb87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42c23d45fe4c3f4342d9d43ab2f4f7029346fd66e3e02f08012894571b7df7fc->leave($__internal_42c23d45fe4c3f4342d9d43ab2f4f7029346fd66e3e02f08012894571b7df7fc_prof);

        
        $__internal_806ed34c61608e1e8c9ef5dc42e8c9ebe04d65550c6eec2dec606c9ec113fb87->leave($__internal_806ed34c61608e1e8c9ef5dc42e8c9ebe04d65550c6eec2dec606c9ec113fb87_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4833c4e39930ca22215962c75f93de253c01d46e657d60e19ffa04f6288a9ca0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4833c4e39930ca22215962c75f93de253c01d46e657d60e19ffa04f6288a9ca0->enter($__internal_4833c4e39930ca22215962c75f93de253c01d46e657d60e19ffa04f6288a9ca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_764e52fed14a028f1603357575e9970ed9ba9fea54cd573518d3d6ce2a108ad2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_764e52fed14a028f1603357575e9970ed9ba9fea54cd573518d3d6ce2a108ad2->enter($__internal_764e52fed14a028f1603357575e9970ed9ba9fea54cd573518d3d6ce2a108ad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_764e52fed14a028f1603357575e9970ed9ba9fea54cd573518d3d6ce2a108ad2->leave($__internal_764e52fed14a028f1603357575e9970ed9ba9fea54cd573518d3d6ce2a108ad2_prof);

        
        $__internal_4833c4e39930ca22215962c75f93de253c01d46e657d60e19ffa04f6288a9ca0->leave($__internal_4833c4e39930ca22215962c75f93de253c01d46e657d60e19ffa04f6288a9ca0_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2d0629f3d8b17afab851ab309ec2818ba39e1d993353967806973e6ad01299df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d0629f3d8b17afab851ab309ec2818ba39e1d993353967806973e6ad01299df->enter($__internal_2d0629f3d8b17afab851ab309ec2818ba39e1d993353967806973e6ad01299df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ab5c45e6901621142757c7ef5de34edbdb8c100ea2ea00dde86fc9b5ca8baf45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab5c45e6901621142757c7ef5de34edbdb8c100ea2ea00dde86fc9b5ca8baf45->enter($__internal_ab5c45e6901621142757c7ef5de34edbdb8c100ea2ea00dde86fc9b5ca8baf45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_ab5c45e6901621142757c7ef5de34edbdb8c100ea2ea00dde86fc9b5ca8baf45->leave($__internal_ab5c45e6901621142757c7ef5de34edbdb8c100ea2ea00dde86fc9b5ca8baf45_prof);

        
        $__internal_2d0629f3d8b17afab851ab309ec2818ba39e1d993353967806973e6ad01299df->leave($__internal_2d0629f3d8b17afab851ab309ec2818ba39e1d993353967806973e6ad01299df_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4fee6560f1732f1e042116aa43f0d90abe96b11b68256fa01a416442894b2ed5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fee6560f1732f1e042116aa43f0d90abe96b11b68256fa01a416442894b2ed5->enter($__internal_4fee6560f1732f1e042116aa43f0d90abe96b11b68256fa01a416442894b2ed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c0a68d727790caa03c7026b417c554ca94c9e235d5f7c15450d3cb9a5fd9b446 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0a68d727790caa03c7026b417c554ca94c9e235d5f7c15450d3cb9a5fd9b446->enter($__internal_c0a68d727790caa03c7026b417c554ca94c9e235d5f7c15450d3cb9a5fd9b446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_c0a68d727790caa03c7026b417c554ca94c9e235d5f7c15450d3cb9a5fd9b446->leave($__internal_c0a68d727790caa03c7026b417c554ca94c9e235d5f7c15450d3cb9a5fd9b446_prof);

        
        $__internal_4fee6560f1732f1e042116aa43f0d90abe96b11b68256fa01a416442894b2ed5->leave($__internal_4fee6560f1732f1e042116aa43f0d90abe96b11b68256fa01a416442894b2ed5_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
