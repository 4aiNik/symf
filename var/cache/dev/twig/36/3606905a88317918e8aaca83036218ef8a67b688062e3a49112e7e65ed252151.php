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
        $__internal_d32b1a04bb03cd2994fe38de16bf3110947936bb07587e23d4bd3925aaeae2a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d32b1a04bb03cd2994fe38de16bf3110947936bb07587e23d4bd3925aaeae2a9->enter($__internal_d32b1a04bb03cd2994fe38de16bf3110947936bb07587e23d4bd3925aaeae2a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_0ec0dcedeb87e2a38e29c7c2dc12130b0bf066046a6ed59584839bc65f046865 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ec0dcedeb87e2a38e29c7c2dc12130b0bf066046a6ed59584839bc65f046865->enter($__internal_0ec0dcedeb87e2a38e29c7c2dc12130b0bf066046a6ed59584839bc65f046865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d32b1a04bb03cd2994fe38de16bf3110947936bb07587e23d4bd3925aaeae2a9->leave($__internal_d32b1a04bb03cd2994fe38de16bf3110947936bb07587e23d4bd3925aaeae2a9_prof);

        
        $__internal_0ec0dcedeb87e2a38e29c7c2dc12130b0bf066046a6ed59584839bc65f046865->leave($__internal_0ec0dcedeb87e2a38e29c7c2dc12130b0bf066046a6ed59584839bc65f046865_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6dfce0dd29f0fbde27a7c80dd3649ada85fc3133f995c9d4c176f3249552840a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dfce0dd29f0fbde27a7c80dd3649ada85fc3133f995c9d4c176f3249552840a->enter($__internal_6dfce0dd29f0fbde27a7c80dd3649ada85fc3133f995c9d4c176f3249552840a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a797c05cfff3ee9c6ae6d8c16c397e11c943b6512e3151e81c1ce76795f3b30d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a797c05cfff3ee9c6ae6d8c16c397e11c943b6512e3151e81c1ce76795f3b30d->enter($__internal_a797c05cfff3ee9c6ae6d8c16c397e11c943b6512e3151e81c1ce76795f3b30d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_a797c05cfff3ee9c6ae6d8c16c397e11c943b6512e3151e81c1ce76795f3b30d->leave($__internal_a797c05cfff3ee9c6ae6d8c16c397e11c943b6512e3151e81c1ce76795f3b30d_prof);

        
        $__internal_6dfce0dd29f0fbde27a7c80dd3649ada85fc3133f995c9d4c176f3249552840a->leave($__internal_6dfce0dd29f0fbde27a7c80dd3649ada85fc3133f995c9d4c176f3249552840a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_269e65d15d3c4318e99037c96f8e36cbc86627cddfaf05c3557d88cdf6d52b9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_269e65d15d3c4318e99037c96f8e36cbc86627cddfaf05c3557d88cdf6d52b9d->enter($__internal_269e65d15d3c4318e99037c96f8e36cbc86627cddfaf05c3557d88cdf6d52b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f1f0cc000c3c6eb942524dae26111c54cb3f4c89201972a990e9c6b12d60c318 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1f0cc000c3c6eb942524dae26111c54cb3f4c89201972a990e9c6b12d60c318->enter($__internal_f1f0cc000c3c6eb942524dae26111c54cb3f4c89201972a990e9c6b12d60c318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_f1f0cc000c3c6eb942524dae26111c54cb3f4c89201972a990e9c6b12d60c318->leave($__internal_f1f0cc000c3c6eb942524dae26111c54cb3f4c89201972a990e9c6b12d60c318_prof);

        
        $__internal_269e65d15d3c4318e99037c96f8e36cbc86627cddfaf05c3557d88cdf6d52b9d->leave($__internal_269e65d15d3c4318e99037c96f8e36cbc86627cddfaf05c3557d88cdf6d52b9d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cf4011c09a5d55ed8c296826e52ee3becf0efba38221e8754f0173b495330f00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf4011c09a5d55ed8c296826e52ee3becf0efba38221e8754f0173b495330f00->enter($__internal_cf4011c09a5d55ed8c296826e52ee3becf0efba38221e8754f0173b495330f00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_faaecbf878e6310901c1d7447d409a987a20b58a3add4b0e700a0790d63b8774 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faaecbf878e6310901c1d7447d409a987a20b58a3add4b0e700a0790d63b8774->enter($__internal_faaecbf878e6310901c1d7447d409a987a20b58a3add4b0e700a0790d63b8774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_faaecbf878e6310901c1d7447d409a987a20b58a3add4b0e700a0790d63b8774->leave($__internal_faaecbf878e6310901c1d7447d409a987a20b58a3add4b0e700a0790d63b8774_prof);

        
        $__internal_cf4011c09a5d55ed8c296826e52ee3becf0efba38221e8754f0173b495330f00->leave($__internal_cf4011c09a5d55ed8c296826e52ee3becf0efba38221e8754f0173b495330f00_prof);

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
