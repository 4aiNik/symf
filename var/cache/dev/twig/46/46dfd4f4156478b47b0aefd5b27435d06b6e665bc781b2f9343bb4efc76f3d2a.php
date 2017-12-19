<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_40d17f889cda0e9198fdd0de6a45002f4e95d20d7f1dda71b6e52967dec960e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f50cee536785f52409a9e0253ea151b76a3c02ec0a595764af3d0cf7f9f9809e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f50cee536785f52409a9e0253ea151b76a3c02ec0a595764af3d0cf7f9f9809e->enter($__internal_f50cee536785f52409a9e0253ea151b76a3c02ec0a595764af3d0cf7f9f9809e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_88558afcfc1c09099c9123a0301e666dd018ec6e10865d6e28ca96c019b0e878 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88558afcfc1c09099c9123a0301e666dd018ec6e10865d6e28ca96c019b0e878->enter($__internal_88558afcfc1c09099c9123a0301e666dd018ec6e10865d6e28ca96c019b0e878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_f50cee536785f52409a9e0253ea151b76a3c02ec0a595764af3d0cf7f9f9809e->leave($__internal_f50cee536785f52409a9e0253ea151b76a3c02ec0a595764af3d0cf7f9f9809e_prof);

        
        $__internal_88558afcfc1c09099c9123a0301e666dd018ec6e10865d6e28ca96c019b0e878->leave($__internal_88558afcfc1c09099c9123a0301e666dd018ec6e10865d6e28ca96c019b0e878_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3d2427ea5a5a5ba5147a0dc7f4eb3db09c661115d55364ea87f695b3fa7bf101 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d2427ea5a5a5ba5147a0dc7f4eb3db09c661115d55364ea87f695b3fa7bf101->enter($__internal_3d2427ea5a5a5ba5147a0dc7f4eb3db09c661115d55364ea87f695b3fa7bf101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f52eba482d668fdff5421f861f8cb229e333a27c6793b120bc19a2273e91b110 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f52eba482d668fdff5421f861f8cb229e333a27c6793b120bc19a2273e91b110->enter($__internal_f52eba482d668fdff5421f861f8cb229e333a27c6793b120bc19a2273e91b110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_f52eba482d668fdff5421f861f8cb229e333a27c6793b120bc19a2273e91b110->leave($__internal_f52eba482d668fdff5421f861f8cb229e333a27c6793b120bc19a2273e91b110_prof);

        
        $__internal_3d2427ea5a5a5ba5147a0dc7f4eb3db09c661115d55364ea87f695b3fa7bf101->leave($__internal_3d2427ea5a5a5ba5147a0dc7f4eb3db09c661115d55364ea87f695b3fa7bf101_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_2bf8398d366979f9ac989e0dcd7b436ac00853fb94bfec97d96547e1e52eb75c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bf8398d366979f9ac989e0dcd7b436ac00853fb94bfec97d96547e1e52eb75c->enter($__internal_2bf8398d366979f9ac989e0dcd7b436ac00853fb94bfec97d96547e1e52eb75c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d4b2fa50fa4bfe7a13678daf4ac7d71299e6a89a6fd77e9a80550e4522de77a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4b2fa50fa4bfe7a13678daf4ac7d71299e6a89a6fd77e9a80550e4522de77a9->enter($__internal_d4b2fa50fa4bfe7a13678daf4ac7d71299e6a89a6fd77e9a80550e4522de77a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_d4b2fa50fa4bfe7a13678daf4ac7d71299e6a89a6fd77e9a80550e4522de77a9->leave($__internal_d4b2fa50fa4bfe7a13678daf4ac7d71299e6a89a6fd77e9a80550e4522de77a9_prof);

        
        $__internal_2bf8398d366979f9ac989e0dcd7b436ac00853fb94bfec97d96547e1e52eb75c->leave($__internal_2bf8398d366979f9ac989e0dcd7b436ac00853fb94bfec97d96547e1e52eb75c_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_08004c805788ed7f23e18aec30aeab98326f73950d226c90b855220bc6fcd69c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08004c805788ed7f23e18aec30aeab98326f73950d226c90b855220bc6fcd69c->enter($__internal_08004c805788ed7f23e18aec30aeab98326f73950d226c90b855220bc6fcd69c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_786f67b2f5f54bf26dee8c95f160b50d78ca7796f6f4c304ccb7bd7a905102f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_786f67b2f5f54bf26dee8c95f160b50d78ca7796f6f4c304ccb7bd7a905102f6->enter($__internal_786f67b2f5f54bf26dee8c95f160b50d78ca7796f6f4c304ccb7bd7a905102f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_786f67b2f5f54bf26dee8c95f160b50d78ca7796f6f4c304ccb7bd7a905102f6->leave($__internal_786f67b2f5f54bf26dee8c95f160b50d78ca7796f6f4c304ccb7bd7a905102f6_prof);

        
        $__internal_08004c805788ed7f23e18aec30aeab98326f73950d226c90b855220bc6fcd69c->leave($__internal_08004c805788ed7f23e18aec30aeab98326f73950d226c90b855220bc6fcd69c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
