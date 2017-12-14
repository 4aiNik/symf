<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_5fc722d62ca28f285b606fe786535b6a2c11de849e5659f523da67b1533eb6bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a2f88251815b77cc46ef482e836bc034294c8686075d724d7a2467f9e2f1cd96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2f88251815b77cc46ef482e836bc034294c8686075d724d7a2467f9e2f1cd96->enter($__internal_a2f88251815b77cc46ef482e836bc034294c8686075d724d7a2467f9e2f1cd96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_cb518e414bb94d790adaba7fc9047cf0f8b8c45a0e262aa3407ffca5448a0078 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb518e414bb94d790adaba7fc9047cf0f8b8c45a0e262aa3407ffca5448a0078->enter($__internal_cb518e414bb94d790adaba7fc9047cf0f8b8c45a0e262aa3407ffca5448a0078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2f88251815b77cc46ef482e836bc034294c8686075d724d7a2467f9e2f1cd96->leave($__internal_a2f88251815b77cc46ef482e836bc034294c8686075d724d7a2467f9e2f1cd96_prof);

        
        $__internal_cb518e414bb94d790adaba7fc9047cf0f8b8c45a0e262aa3407ffca5448a0078->leave($__internal_cb518e414bb94d790adaba7fc9047cf0f8b8c45a0e262aa3407ffca5448a0078_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_bb18ab9058c730ddc09c42b0e611499703afb779c76655d21c888d6aec60bf6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb18ab9058c730ddc09c42b0e611499703afb779c76655d21c888d6aec60bf6b->enter($__internal_bb18ab9058c730ddc09c42b0e611499703afb779c76655d21c888d6aec60bf6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_3d7379ac1c0b725d69f7f9ee93ef7215832b3bca3022c7ca9c30dc4139c238a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d7379ac1c0b725d69f7f9ee93ef7215832b3bca3022c7ca9c30dc4139c238a1->enter($__internal_3d7379ac1c0b725d69f7f9ee93ef7215832b3bca3022c7ca9c30dc4139c238a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_3d7379ac1c0b725d69f7f9ee93ef7215832b3bca3022c7ca9c30dc4139c238a1->leave($__internal_3d7379ac1c0b725d69f7f9ee93ef7215832b3bca3022c7ca9c30dc4139c238a1_prof);

        
        $__internal_bb18ab9058c730ddc09c42b0e611499703afb779c76655d21c888d6aec60bf6b->leave($__internal_bb18ab9058c730ddc09c42b0e611499703afb779c76655d21c888d6aec60bf6b_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7e65b1522d9232006c4f3a7263cb397f289861716357f994f250d8df7280f62f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e65b1522d9232006c4f3a7263cb397f289861716357f994f250d8df7280f62f->enter($__internal_7e65b1522d9232006c4f3a7263cb397f289861716357f994f250d8df7280f62f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_61530d6beccc0e179034cfa0f379f3373cd19c4b11e088f14ef4f99630dfe218 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61530d6beccc0e179034cfa0f379f3373cd19c4b11e088f14ef4f99630dfe218->enter($__internal_61530d6beccc0e179034cfa0f379f3373cd19c4b11e088f14ef4f99630dfe218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_61530d6beccc0e179034cfa0f379f3373cd19c4b11e088f14ef4f99630dfe218->leave($__internal_61530d6beccc0e179034cfa0f379f3373cd19c4b11e088f14ef4f99630dfe218_prof);

        
        $__internal_7e65b1522d9232006c4f3a7263cb397f289861716357f994f250d8df7280f62f->leave($__internal_7e65b1522d9232006c4f3a7263cb397f289861716357f994f250d8df7280f62f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
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

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
