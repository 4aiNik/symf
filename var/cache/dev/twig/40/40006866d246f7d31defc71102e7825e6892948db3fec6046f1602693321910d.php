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
        $__internal_7d40d3eea7e8f3a675f60ccefca66736389052b7944310f38ab02d7e93534ed6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d40d3eea7e8f3a675f60ccefca66736389052b7944310f38ab02d7e93534ed6->enter($__internal_7d40d3eea7e8f3a675f60ccefca66736389052b7944310f38ab02d7e93534ed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_4aec0971558d3963b1c7560c4a8d5c2e02d126f5c9dbfbc23b32c9d5b0216080 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4aec0971558d3963b1c7560c4a8d5c2e02d126f5c9dbfbc23b32c9d5b0216080->enter($__internal_4aec0971558d3963b1c7560c4a8d5c2e02d126f5c9dbfbc23b32c9d5b0216080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d40d3eea7e8f3a675f60ccefca66736389052b7944310f38ab02d7e93534ed6->leave($__internal_7d40d3eea7e8f3a675f60ccefca66736389052b7944310f38ab02d7e93534ed6_prof);

        
        $__internal_4aec0971558d3963b1c7560c4a8d5c2e02d126f5c9dbfbc23b32c9d5b0216080->leave($__internal_4aec0971558d3963b1c7560c4a8d5c2e02d126f5c9dbfbc23b32c9d5b0216080_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_95ab881be3564e3f8a14f942af8cab6dbc2905395ba50260439c8b77f5e745e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95ab881be3564e3f8a14f942af8cab6dbc2905395ba50260439c8b77f5e745e7->enter($__internal_95ab881be3564e3f8a14f942af8cab6dbc2905395ba50260439c8b77f5e745e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_579da918ee771e428b8f9d405bbc5b1b0131c7dc443f1fce9b2885204ecec935 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_579da918ee771e428b8f9d405bbc5b1b0131c7dc443f1fce9b2885204ecec935->enter($__internal_579da918ee771e428b8f9d405bbc5b1b0131c7dc443f1fce9b2885204ecec935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_579da918ee771e428b8f9d405bbc5b1b0131c7dc443f1fce9b2885204ecec935->leave($__internal_579da918ee771e428b8f9d405bbc5b1b0131c7dc443f1fce9b2885204ecec935_prof);

        
        $__internal_95ab881be3564e3f8a14f942af8cab6dbc2905395ba50260439c8b77f5e745e7->leave($__internal_95ab881be3564e3f8a14f942af8cab6dbc2905395ba50260439c8b77f5e745e7_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_911d0c6d52fcd81bd602e169908d061952826ca5cb96f74d38071a146364a129 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_911d0c6d52fcd81bd602e169908d061952826ca5cb96f74d38071a146364a129->enter($__internal_911d0c6d52fcd81bd602e169908d061952826ca5cb96f74d38071a146364a129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ceb929b9150a05b395548b1a6c99d63393b38f8554217b859e7d19828475bd7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ceb929b9150a05b395548b1a6c99d63393b38f8554217b859e7d19828475bd7b->enter($__internal_ceb929b9150a05b395548b1a6c99d63393b38f8554217b859e7d19828475bd7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ceb929b9150a05b395548b1a6c99d63393b38f8554217b859e7d19828475bd7b->leave($__internal_ceb929b9150a05b395548b1a6c99d63393b38f8554217b859e7d19828475bd7b_prof);

        
        $__internal_911d0c6d52fcd81bd602e169908d061952826ca5cb96f74d38071a146364a129->leave($__internal_911d0c6d52fcd81bd602e169908d061952826ca5cb96f74d38071a146364a129_prof);

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
