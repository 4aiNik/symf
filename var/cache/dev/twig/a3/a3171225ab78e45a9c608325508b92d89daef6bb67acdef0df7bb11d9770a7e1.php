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
        $__internal_f62e6c60dcd09d3371827553a36fc9b39daa7a71fdb4b079deb62b712d778345 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f62e6c60dcd09d3371827553a36fc9b39daa7a71fdb4b079deb62b712d778345->enter($__internal_f62e6c60dcd09d3371827553a36fc9b39daa7a71fdb4b079deb62b712d778345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Posts/post_add.html.twig"));

        $__internal_d1d5a1f38561a8f12d83e12731e94aef967a0a0a0bbbf94bb2014f3afed56e30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1d5a1f38561a8f12d83e12731e94aef967a0a0a0bbbf94bb2014f3afed56e30->enter($__internal_d1d5a1f38561a8f12d83e12731e94aef967a0a0a0bbbf94bb2014f3afed56e30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Posts/post_add.html.twig"));

        // line 2
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f62e6c60dcd09d3371827553a36fc9b39daa7a71fdb4b079deb62b712d778345->leave($__internal_f62e6c60dcd09d3371827553a36fc9b39daa7a71fdb4b079deb62b712d778345_prof);

        
        $__internal_d1d5a1f38561a8f12d83e12731e94aef967a0a0a0bbbf94bb2014f3afed56e30->leave($__internal_d1d5a1f38561a8f12d83e12731e94aef967a0a0a0bbbf94bb2014f3afed56e30_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4d04b8d79f46c1a598b114ba5c74f6b9addd9875b40dbb31b4ea1539d65e33f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d04b8d79f46c1a598b114ba5c74f6b9addd9875b40dbb31b4ea1539d65e33f4->enter($__internal_4d04b8d79f46c1a598b114ba5c74f6b9addd9875b40dbb31b4ea1539d65e33f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fe5117bbbb3b1b3b5520c979651ffe2bbacc3714f6c39cc96cfb2910c110dcb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe5117bbbb3b1b3b5520c979651ffe2bbacc3714f6c39cc96cfb2910c110dcb4->enter($__internal_fe5117bbbb3b1b3b5520c979651ffe2bbacc3714f6c39cc96cfb2910c110dcb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Добавление поста";
        
        $__internal_fe5117bbbb3b1b3b5520c979651ffe2bbacc3714f6c39cc96cfb2910c110dcb4->leave($__internal_fe5117bbbb3b1b3b5520c979651ffe2bbacc3714f6c39cc96cfb2910c110dcb4_prof);

        
        $__internal_4d04b8d79f46c1a598b114ba5c74f6b9addd9875b40dbb31b4ea1539d65e33f4->leave($__internal_4d04b8d79f46c1a598b114ba5c74f6b9addd9875b40dbb31b4ea1539d65e33f4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_59a6626ca506a80afe88ff0f8a8f7cfff0838d1e6e1e2d8d76f7b7d35657e0dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59a6626ca506a80afe88ff0f8a8f7cfff0838d1e6e1e2d8d76f7b7d35657e0dd->enter($__internal_59a6626ca506a80afe88ff0f8a8f7cfff0838d1e6e1e2d8d76f7b7d35657e0dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c09720b171340bea86c67e0955f74d6fc53fd4763cfd03630ac4700d68da2453 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c09720b171340bea86c67e0955f74d6fc53fd4763cfd03630ac4700d68da2453->enter($__internal_c09720b171340bea86c67e0955f74d6fc53fd4763cfd03630ac4700d68da2453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"flashes\">
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", array(0 => array(0 => "success")), "method"));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 8
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 9
                echo "                <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "\">
                    ";
                // line 10
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    </div>
    <div class=\"content\">
        ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Отправить\" class=\"btn\">
        ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    </div>

    ";
        // line 23
        echo "    ";
        // line 24
        echo "        ";
        // line 25
        echo "        ";
        // line 26
        echo "        ";
        // line 27
        echo "    ";
        // line 28
        echo "    ";
        // line 29
        echo "    ";
        // line 30
        echo "    ";
        // line 31
        echo "

";
        
        $__internal_c09720b171340bea86c67e0955f74d6fc53fd4763cfd03630ac4700d68da2453->leave($__internal_c09720b171340bea86c67e0955f74d6fc53fd4763cfd03630ac4700d68da2453_prof);

        
        $__internal_59a6626ca506a80afe88ff0f8a8f7cfff0838d1e6e1e2d8d76f7b7d35657e0dd->leave($__internal_59a6626ca506a80afe88ff0f8a8f7cfff0838d1e6e1e2d8d76f7b7d35657e0dd_prof);

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
        return array (  138 => 31,  136 => 30,  134 => 29,  132 => 28,  130 => 27,  128 => 26,  126 => 25,  124 => 24,  122 => 23,  116 => 19,  111 => 17,  107 => 16,  103 => 14,  97 => 13,  88 => 10,  83 => 9,  78 => 8,  74 => 7,  71 => 6,  62 => 5,  44 => 3,  34 => 1,  32 => 2,  11 => 1,);
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
{% form_theme form 'bootstrap_3_layout.html.twig' %}
{% block title %}Добавление поста{% endblock %}

{% block body %}
    <div class=\"flashes\">
        {% for label, messages in app.flashes(['success']) %}
            {% for message in messages %}
                <div class=\"alert alert-{{ label }}\">
                    {{ message }}
                </div>
            {% endfor %}
        {% endfor %}
    </div>
    <div class=\"content\">
        {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Отправить\" class=\"btn\">
        {{ form_end(form) }}
    </div>

    {#{{ form_row(form.title) }}#}
    {#<div class=\"form_title\">#}
        {#{{ form_label(form.title) }}#}
        {#{{ form_errors(form.title) }}#}
        {#{{ form_widget(form.title) }}#}
    {#</div>#}
    {#{{ form_row(form.username) }}#}
    {#{{ form_row(form.content) }}#}
    {#<br>#}


{% endblock %}", "@App/Posts/post_add.html.twig", "/var/www/html/symfony/src/AppBundle/Resources/views/Posts/post_add.html.twig");
    }
}
