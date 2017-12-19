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
        $__internal_52209ec1e6c22231057896e242e3e389e17f4306a4445ea33f5beb5bc3bd6539 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52209ec1e6c22231057896e242e3e389e17f4306a4445ea33f5beb5bc3bd6539->enter($__internal_52209ec1e6c22231057896e242e3e389e17f4306a4445ea33f5beb5bc3bd6539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_9af31bad1edd3eeca8c5fda5ca6cac83d40cb9a773d7660b5c2aa8cf7295498b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9af31bad1edd3eeca8c5fda5ca6cac83d40cb9a773d7660b5c2aa8cf7295498b->enter($__internal_9af31bad1edd3eeca8c5fda5ca6cac83d40cb9a773d7660b5c2aa8cf7295498b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52209ec1e6c22231057896e242e3e389e17f4306a4445ea33f5beb5bc3bd6539->leave($__internal_52209ec1e6c22231057896e242e3e389e17f4306a4445ea33f5beb5bc3bd6539_prof);

        
        $__internal_9af31bad1edd3eeca8c5fda5ca6cac83d40cb9a773d7660b5c2aa8cf7295498b->leave($__internal_9af31bad1edd3eeca8c5fda5ca6cac83d40cb9a773d7660b5c2aa8cf7295498b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9c83ab68d30e2746c9c749c040c745e045663eb5b0685529b4a8cdf66588422e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c83ab68d30e2746c9c749c040c745e045663eb5b0685529b4a8cdf66588422e->enter($__internal_9c83ab68d30e2746c9c749c040c745e045663eb5b0685529b4a8cdf66588422e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_802acd801012594d2b2d26db6daca058150d627f63c9e9607b741b6adbbd731c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_802acd801012594d2b2d26db6daca058150d627f63c9e9607b741b6adbbd731c->enter($__internal_802acd801012594d2b2d26db6daca058150d627f63c9e9607b741b6adbbd731c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_802acd801012594d2b2d26db6daca058150d627f63c9e9607b741b6adbbd731c->leave($__internal_802acd801012594d2b2d26db6daca058150d627f63c9e9607b741b6adbbd731c_prof);

        
        $__internal_9c83ab68d30e2746c9c749c040c745e045663eb5b0685529b4a8cdf66588422e->leave($__internal_9c83ab68d30e2746c9c749c040c745e045663eb5b0685529b4a8cdf66588422e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_79e3426c7db954bcd7727d2e12b96239acc71efc4b61f5bcacf2725b24a6059b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79e3426c7db954bcd7727d2e12b96239acc71efc4b61f5bcacf2725b24a6059b->enter($__internal_79e3426c7db954bcd7727d2e12b96239acc71efc4b61f5bcacf2725b24a6059b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9590964a403fa74f37f6c629c5f63b0b27c947696d361edc070c06c6d0e96c78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9590964a403fa74f37f6c629c5f63b0b27c947696d361edc070c06c6d0e96c78->enter($__internal_9590964a403fa74f37f6c629c5f63b0b27c947696d361edc070c06c6d0e96c78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9590964a403fa74f37f6c629c5f63b0b27c947696d361edc070c06c6d0e96c78->leave($__internal_9590964a403fa74f37f6c629c5f63b0b27c947696d361edc070c06c6d0e96c78_prof);

        
        $__internal_79e3426c7db954bcd7727d2e12b96239acc71efc4b61f5bcacf2725b24a6059b->leave($__internal_79e3426c7db954bcd7727d2e12b96239acc71efc4b61f5bcacf2725b24a6059b_prof);

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
