<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_19dfb68d851ddd05e5bd3f446c5cecc8ca30befd0bb86cee9a5c57f648f371d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_29046ca053b1c4f5e2553816a0d04ff6dbca7ebfc97fd60bdd50fa77dd565df1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29046ca053b1c4f5e2553816a0d04ff6dbca7ebfc97fd60bdd50fa77dd565df1->enter($__internal_29046ca053b1c4f5e2553816a0d04ff6dbca7ebfc97fd60bdd50fa77dd565df1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_9170e2e0f2859c1ae72fe31900521dff765f7602ffab3f8cbd08571d92229903 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9170e2e0f2859c1ae72fe31900521dff765f7602ffab3f8cbd08571d92229903->enter($__internal_9170e2e0f2859c1ae72fe31900521dff765f7602ffab3f8cbd08571d92229903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29046ca053b1c4f5e2553816a0d04ff6dbca7ebfc97fd60bdd50fa77dd565df1->leave($__internal_29046ca053b1c4f5e2553816a0d04ff6dbca7ebfc97fd60bdd50fa77dd565df1_prof);

        
        $__internal_9170e2e0f2859c1ae72fe31900521dff765f7602ffab3f8cbd08571d92229903->leave($__internal_9170e2e0f2859c1ae72fe31900521dff765f7602ffab3f8cbd08571d92229903_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7e4924a8b1e4128f88e81d3647456d64a1841825438f3130907c29784108be2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e4924a8b1e4128f88e81d3647456d64a1841825438f3130907c29784108be2a->enter($__internal_7e4924a8b1e4128f88e81d3647456d64a1841825438f3130907c29784108be2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9f87da12b7c9b9a201ba1d712195c1347ca556ee4c1bf5b4e7f548128b7c3877 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f87da12b7c9b9a201ba1d712195c1347ca556ee4c1bf5b4e7f548128b7c3877->enter($__internal_9f87da12b7c9b9a201ba1d712195c1347ca556ee4c1bf5b4e7f548128b7c3877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_9f87da12b7c9b9a201ba1d712195c1347ca556ee4c1bf5b4e7f548128b7c3877->leave($__internal_9f87da12b7c9b9a201ba1d712195c1347ca556ee4c1bf5b4e7f548128b7c3877_prof);

        
        $__internal_7e4924a8b1e4128f88e81d3647456d64a1841825438f3130907c29784108be2a->leave($__internal_7e4924a8b1e4128f88e81d3647456d64a1841825438f3130907c29784108be2a_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_1557ce69d3281bf3a100a4ca8e8f39f6dbcbab6c0bfaef18a3186ca50ab8c49d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1557ce69d3281bf3a100a4ca8e8f39f6dbcbab6c0bfaef18a3186ca50ab8c49d->enter($__internal_1557ce69d3281bf3a100a4ca8e8f39f6dbcbab6c0bfaef18a3186ca50ab8c49d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cc349159cab5e36ae4dc28dce0ba4b9fbe9f3609aa007e3a47f1bb29bce7068f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc349159cab5e36ae4dc28dce0ba4b9fbe9f3609aa007e3a47f1bb29bce7068f->enter($__internal_cc349159cab5e36ae4dc28dce0ba4b9fbe9f3609aa007e3a47f1bb29bce7068f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_cc349159cab5e36ae4dc28dce0ba4b9fbe9f3609aa007e3a47f1bb29bce7068f->leave($__internal_cc349159cab5e36ae4dc28dce0ba4b9fbe9f3609aa007e3a47f1bb29bce7068f_prof);

        
        $__internal_1557ce69d3281bf3a100a4ca8e8f39f6dbcbab6c0bfaef18a3186ca50ab8c49d->leave($__internal_1557ce69d3281bf3a100a4ca8e8f39f6dbcbab6c0bfaef18a3186ca50ab8c49d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
