<?php

/* @App/index.html.twig */
class __TwigTemplate_1c4a1e1145aed139f1070c8f90e393271453cbcf04cc1701f68dcb39777eecc2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'style' => array($this, 'block_style'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7b84ed7d5d21309427883ce5274b36845ad30a88dcf921d22e73462b9fbd889d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b84ed7d5d21309427883ce5274b36845ad30a88dcf921d22e73462b9fbd889d->enter($__internal_7b84ed7d5d21309427883ce5274b36845ad30a88dcf921d22e73462b9fbd889d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/index.html.twig"));

        $__internal_10fe608fb5d944fe061bfef3c65aec17fd1009636dbc4ee8595d879e4e215263 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10fe608fb5d944fe061bfef3c65aec17fd1009636dbc4ee8595d879e4e215263->enter($__internal_10fe608fb5d944fe061bfef3c65aec17fd1009636dbc4ee8595d879e4e215263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/index.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"ru\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Skillup | ";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <style>";
        // line 9
        $this->displayBlock('style', $context, $blocks);
        echo "</style>
    <style>
        .post {
            border: 1px solid black;
            margin: 5px;
            padding: 5px;
        }
        .created_at {
            color: gray;
        }
    </style>
</head>
<body>

";
        // line 23
        $this->displayBlock('body', $context, $blocks);
        // line 24
        echo "
";
        // line 26
        echo "    ";
        // line 27
        echo "        ";
        // line 28
        echo "        ";
        // line 29
        echo "    ";
        // line 31
        echo "
";
        // line 32
        $this->displayBlock('javascript', $context, $blocks);
        // line 33
        echo "
</body>
</html>";
        
        $__internal_7b84ed7d5d21309427883ce5274b36845ad30a88dcf921d22e73462b9fbd889d->leave($__internal_7b84ed7d5d21309427883ce5274b36845ad30a88dcf921d22e73462b9fbd889d_prof);

        
        $__internal_10fe608fb5d944fe061bfef3c65aec17fd1009636dbc4ee8595d879e4e215263->leave($__internal_10fe608fb5d944fe061bfef3c65aec17fd1009636dbc4ee8595d879e4e215263_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_ad00852a654f861152c3fa4f491e0ed60815a47bcaad9366a51f43f4c6889318 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad00852a654f861152c3fa4f491e0ed60815a47bcaad9366a51f43f4c6889318->enter($__internal_ad00852a654f861152c3fa4f491e0ed60815a47bcaad9366a51f43f4c6889318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_838206340e26f7927f9168a7a8a42573aa2f49cdeaa954d6a649f01e7effd97e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_838206340e26f7927f9168a7a8a42573aa2f49cdeaa954d6a649f01e7effd97e->enter($__internal_838206340e26f7927f9168a7a8a42573aa2f49cdeaa954d6a649f01e7effd97e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_838206340e26f7927f9168a7a8a42573aa2f49cdeaa954d6a649f01e7effd97e->leave($__internal_838206340e26f7927f9168a7a8a42573aa2f49cdeaa954d6a649f01e7effd97e_prof);

        
        $__internal_ad00852a654f861152c3fa4f491e0ed60815a47bcaad9366a51f43f4c6889318->leave($__internal_ad00852a654f861152c3fa4f491e0ed60815a47bcaad9366a51f43f4c6889318_prof);

    }

    // line 9
    public function block_style($context, array $blocks = array())
    {
        $__internal_885a1fdcd7f4e6c2f28b47e57109f9240773ba6f8113e2faf367ca17efd7dbca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_885a1fdcd7f4e6c2f28b47e57109f9240773ba6f8113e2faf367ca17efd7dbca->enter($__internal_885a1fdcd7f4e6c2f28b47e57109f9240773ba6f8113e2faf367ca17efd7dbca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_d980a129df8e3ef75155111ea9c9d346f6ceae4fa29a8034e9bce4b503e7ee65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d980a129df8e3ef75155111ea9c9d346f6ceae4fa29a8034e9bce4b503e7ee65->enter($__internal_d980a129df8e3ef75155111ea9c9d346f6ceae4fa29a8034e9bce4b503e7ee65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        
        $__internal_d980a129df8e3ef75155111ea9c9d346f6ceae4fa29a8034e9bce4b503e7ee65->leave($__internal_d980a129df8e3ef75155111ea9c9d346f6ceae4fa29a8034e9bce4b503e7ee65_prof);

        
        $__internal_885a1fdcd7f4e6c2f28b47e57109f9240773ba6f8113e2faf367ca17efd7dbca->leave($__internal_885a1fdcd7f4e6c2f28b47e57109f9240773ba6f8113e2faf367ca17efd7dbca_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_482f5553b74b1c4d414ceda28c5248e2c9b1bdd316f741fbd9c322b3ff7fa358 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_482f5553b74b1c4d414ceda28c5248e2c9b1bdd316f741fbd9c322b3ff7fa358->enter($__internal_482f5553b74b1c4d414ceda28c5248e2c9b1bdd316f741fbd9c322b3ff7fa358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bd9add8701792d2fe06047c38701aa06d08e3af807d11652536b7c6d41ff1c4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd9add8701792d2fe06047c38701aa06d08e3af807d11652536b7c6d41ff1c4d->enter($__internal_bd9add8701792d2fe06047c38701aa06d08e3af807d11652536b7c6d41ff1c4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bd9add8701792d2fe06047c38701aa06d08e3af807d11652536b7c6d41ff1c4d->leave($__internal_bd9add8701792d2fe06047c38701aa06d08e3af807d11652536b7c6d41ff1c4d_prof);

        
        $__internal_482f5553b74b1c4d414ceda28c5248e2c9b1bdd316f741fbd9c322b3ff7fa358->leave($__internal_482f5553b74b1c4d414ceda28c5248e2c9b1bdd316f741fbd9c322b3ff7fa358_prof);

    }

    // line 32
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_4da1e940a21c4bcdc8c09f6fbb75ac6778dedc8d86f5e9fd127adb32a39e2c80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4da1e940a21c4bcdc8c09f6fbb75ac6778dedc8d86f5e9fd127adb32a39e2c80->enter($__internal_4da1e940a21c4bcdc8c09f6fbb75ac6778dedc8d86f5e9fd127adb32a39e2c80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_004f48d7587fd42af071f9515cd0761c4ac55faeff296e3aa1b5cbb097219700 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_004f48d7587fd42af071f9515cd0761c4ac55faeff296e3aa1b5cbb097219700->enter($__internal_004f48d7587fd42af071f9515cd0761c4ac55faeff296e3aa1b5cbb097219700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_004f48d7587fd42af071f9515cd0761c4ac55faeff296e3aa1b5cbb097219700->leave($__internal_004f48d7587fd42af071f9515cd0761c4ac55faeff296e3aa1b5cbb097219700_prof);

        
        $__internal_4da1e940a21c4bcdc8c09f6fbb75ac6778dedc8d86f5e9fd127adb32a39e2c80->leave($__internal_4da1e940a21c4bcdc8c09f6fbb75ac6778dedc8d86f5e9fd127adb32a39e2c80_prof);

    }

    public function getTemplateName()
    {
        return "@App/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  140 => 32,  123 => 23,  106 => 9,  89 => 8,  77 => 33,  75 => 32,  72 => 31,  70 => 29,  68 => 28,  66 => 27,  64 => 26,  61 => 24,  59 => 23,  42 => 9,  38 => 8,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html lang=\"ru\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Skillup | {% block title %}{% endblock %}</title>
    <style>{% block style %}{% endblock %}</style>
    <style>
        .post {
            border: 1px solid black;
            margin: 5px;
            padding: 5px;
        }
        .created_at {
            color: gray;
        }
    </style>
</head>
<body>

{% block body %}{% endblock %}

{#{% for post in posts %}#}
    {#<div class=\"post\">#}
        {#<p class=\"content\">{{ post.content }}</p>#}
        {#<p class=\"created_at\">{{ post.createdAt|date('d.m.Y H:i:s') }}</p>#}
    {#</div>#}
{#{% endfor %}#}

{% block javascript %}{% endblock %}

</body>
</html>", "@App/index.html.twig", "/var/www/html/symfony/src/AppBundle/Resources/views/index.html.twig");
    }
}
