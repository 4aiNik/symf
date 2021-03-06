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
        $__internal_6afb294adc5675d045b7f213c2268df9d4837cf009a89098951609f4659ba05b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6afb294adc5675d045b7f213c2268df9d4837cf009a89098951609f4659ba05b->enter($__internal_6afb294adc5675d045b7f213c2268df9d4837cf009a89098951609f4659ba05b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_d99c3ac5ed43bfaa339e2e4e8822caccd72f086216b8996bb0bfcd3fbe42b39e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d99c3ac5ed43bfaa339e2e4e8822caccd72f086216b8996bb0bfcd3fbe42b39e->enter($__internal_d99c3ac5ed43bfaa339e2e4e8822caccd72f086216b8996bb0bfcd3fbe42b39e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6afb294adc5675d045b7f213c2268df9d4837cf009a89098951609f4659ba05b->leave($__internal_6afb294adc5675d045b7f213c2268df9d4837cf009a89098951609f4659ba05b_prof);

        
        $__internal_d99c3ac5ed43bfaa339e2e4e8822caccd72f086216b8996bb0bfcd3fbe42b39e->leave($__internal_d99c3ac5ed43bfaa339e2e4e8822caccd72f086216b8996bb0bfcd3fbe42b39e_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_ca36c35ecaf0d137bdacff13c5f249c6921e01b8ffa8b22e085ed32186da27a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca36c35ecaf0d137bdacff13c5f249c6921e01b8ffa8b22e085ed32186da27a7->enter($__internal_ca36c35ecaf0d137bdacff13c5f249c6921e01b8ffa8b22e085ed32186da27a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_2b0ef7ceff8204ea0339ad0c2cbb8437c0dc3f5184cf264c320a3eaeab90ea21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b0ef7ceff8204ea0339ad0c2cbb8437c0dc3f5184cf264c320a3eaeab90ea21->enter($__internal_2b0ef7ceff8204ea0339ad0c2cbb8437c0dc3f5184cf264c320a3eaeab90ea21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_2b0ef7ceff8204ea0339ad0c2cbb8437c0dc3f5184cf264c320a3eaeab90ea21->leave($__internal_2b0ef7ceff8204ea0339ad0c2cbb8437c0dc3f5184cf264c320a3eaeab90ea21_prof);

        
        $__internal_ca36c35ecaf0d137bdacff13c5f249c6921e01b8ffa8b22e085ed32186da27a7->leave($__internal_ca36c35ecaf0d137bdacff13c5f249c6921e01b8ffa8b22e085ed32186da27a7_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_22b739e417b3778b6163beb0c56f4d952d2e4f2dd6faad11059fa46cecf63915 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22b739e417b3778b6163beb0c56f4d952d2e4f2dd6faad11059fa46cecf63915->enter($__internal_22b739e417b3778b6163beb0c56f4d952d2e4f2dd6faad11059fa46cecf63915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3effdcb35d3b95f30fe2bb552d40671cab80fc9bc2120444ab0fb27511db359c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3effdcb35d3b95f30fe2bb552d40671cab80fc9bc2120444ab0fb27511db359c->enter($__internal_3effdcb35d3b95f30fe2bb552d40671cab80fc9bc2120444ab0fb27511db359c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_3effdcb35d3b95f30fe2bb552d40671cab80fc9bc2120444ab0fb27511db359c->leave($__internal_3effdcb35d3b95f30fe2bb552d40671cab80fc9bc2120444ab0fb27511db359c_prof);

        
        $__internal_22b739e417b3778b6163beb0c56f4d952d2e4f2dd6faad11059fa46cecf63915->leave($__internal_22b739e417b3778b6163beb0c56f4d952d2e4f2dd6faad11059fa46cecf63915_prof);

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
