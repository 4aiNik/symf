<?php

/* @App/Posts/post_add.html.twig */
class __TwigTemplate_01fc2e24b3d33335f72a206bdf7c75e4ed4e4fa701a07e8ddb00034a746d19dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@App/index.html.twig", "@App/Posts/post_add.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@App/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b9d74eb6a39fcfab703103a506aaf763af0301800721cbca96768886ebae1d3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9d74eb6a39fcfab703103a506aaf763af0301800721cbca96768886ebae1d3d->enter($__internal_b9d74eb6a39fcfab703103a506aaf763af0301800721cbca96768886ebae1d3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Posts/post_add.html.twig"));

        $__internal_f75c4beea902b931f79fc71a2972fa4575751094266e68bae4cb3a11e4a53a87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f75c4beea902b931f79fc71a2972fa4575751094266e68bae4cb3a11e4a53a87->enter($__internal_f75c4beea902b931f79fc71a2972fa4575751094266e68bae4cb3a11e4a53a87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Posts/post_add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9d74eb6a39fcfab703103a506aaf763af0301800721cbca96768886ebae1d3d->leave($__internal_b9d74eb6a39fcfab703103a506aaf763af0301800721cbca96768886ebae1d3d_prof);

        
        $__internal_f75c4beea902b931f79fc71a2972fa4575751094266e68bae4cb3a11e4a53a87->leave($__internal_f75c4beea902b931f79fc71a2972fa4575751094266e68bae4cb3a11e4a53a87_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_16867dbc31a43964602a0bedb9f7381d7482bbe897bdc1fc439055ac38bf4014 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16867dbc31a43964602a0bedb9f7381d7482bbe897bdc1fc439055ac38bf4014->enter($__internal_16867dbc31a43964602a0bedb9f7381d7482bbe897bdc1fc439055ac38bf4014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7d4fd9cc43591b86ec7363b852c24243d220053ee6133ab8997b5025f349fdf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d4fd9cc43591b86ec7363b852c24243d220053ee6133ab8997b5025f349fdf1->enter($__internal_7d4fd9cc43591b86ec7363b852c24243d220053ee6133ab8997b5025f349fdf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Добавление поста";
        
        $__internal_7d4fd9cc43591b86ec7363b852c24243d220053ee6133ab8997b5025f349fdf1->leave($__internal_7d4fd9cc43591b86ec7363b852c24243d220053ee6133ab8997b5025f349fdf1_prof);

        
        $__internal_16867dbc31a43964602a0bedb9f7381d7482bbe897bdc1fc439055ac38bf4014->leave($__internal_16867dbc31a43964602a0bedb9f7381d7482bbe897bdc1fc439055ac38bf4014_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_485775478621ee220ebbeb0eb19763f6478939fdf2d29f0e9acf70ddb6346d0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_485775478621ee220ebbeb0eb19763f6478939fdf2d29f0e9acf70ddb6346d0b->enter($__internal_485775478621ee220ebbeb0eb19763f6478939fdf2d29f0e9acf70ddb6346d0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f0f701b50721eb69c2f3875bc3d82c33fd7e370a2d9cc16c40cf1a3d1b969066 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0f701b50721eb69c2f3875bc3d82c33fd7e370a2d9cc16c40cf1a3d1b969066->enter($__internal_f0f701b50721eb69c2f3875bc3d82c33fd7e370a2d9cc16c40cf1a3d1b969066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <input type=\"submit\" value=\"Отправить\">
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_f0f701b50721eb69c2f3875bc3d82c33fd7e370a2d9cc16c40cf1a3d1b969066->leave($__internal_f0f701b50721eb69c2f3875bc3d82c33fd7e370a2d9cc16c40cf1a3d1b969066_prof);

        
        $__internal_485775478621ee220ebbeb0eb19763f6478939fdf2d29f0e9acf70ddb6346d0b->leave($__internal_485775478621ee220ebbeb0eb19763f6478939fdf2d29f0e9acf70ddb6346d0b_prof);

    }

    public function getTemplateName()
    {
        return "@App/Posts/post_add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 9,  73 => 7,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@App/index.html.twig' %}

{% block title %}Добавление поста{% endblock %}

{% block body %}
    {{ form_start(form) }}
    {{ form_widget(form) }}
    <input type=\"submit\" value=\"Отправить\">
    {{ form_end(form) }}
{% endblock %}", "@App/Posts/post_add.html.twig", "/var/www/html/symfony/src/AppBundle/Resources/views/Posts/post_add.html.twig");
    }
}
