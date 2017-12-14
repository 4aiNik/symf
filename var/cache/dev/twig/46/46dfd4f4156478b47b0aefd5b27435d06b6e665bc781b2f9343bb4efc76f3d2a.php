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
        $__internal_0dd53d784c08b967838a760f7ca4a1fb39f64cf831554c578acff2d76c2b6467 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dd53d784c08b967838a760f7ca4a1fb39f64cf831554c578acff2d76c2b6467->enter($__internal_0dd53d784c08b967838a760f7ca4a1fb39f64cf831554c578acff2d76c2b6467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_9187973819f80cc47ded520a39d86fa76bb445a76b0c35028974239fd36cfff6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9187973819f80cc47ded520a39d86fa76bb445a76b0c35028974239fd36cfff6->enter($__internal_9187973819f80cc47ded520a39d86fa76bb445a76b0c35028974239fd36cfff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_0dd53d784c08b967838a760f7ca4a1fb39f64cf831554c578acff2d76c2b6467->leave($__internal_0dd53d784c08b967838a760f7ca4a1fb39f64cf831554c578acff2d76c2b6467_prof);

        
        $__internal_9187973819f80cc47ded520a39d86fa76bb445a76b0c35028974239fd36cfff6->leave($__internal_9187973819f80cc47ded520a39d86fa76bb445a76b0c35028974239fd36cfff6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_05b6b6c8e68223d8ed00f55bd1b810d28a4a8edf77f1e3430bb3df5de6bac1d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05b6b6c8e68223d8ed00f55bd1b810d28a4a8edf77f1e3430bb3df5de6bac1d8->enter($__internal_05b6b6c8e68223d8ed00f55bd1b810d28a4a8edf77f1e3430bb3df5de6bac1d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_72138cb9cce9d568b35b2b91d9678ba9425dd388bed1ac93bf2e138f8aafbd19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72138cb9cce9d568b35b2b91d9678ba9425dd388bed1ac93bf2e138f8aafbd19->enter($__internal_72138cb9cce9d568b35b2b91d9678ba9425dd388bed1ac93bf2e138f8aafbd19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_72138cb9cce9d568b35b2b91d9678ba9425dd388bed1ac93bf2e138f8aafbd19->leave($__internal_72138cb9cce9d568b35b2b91d9678ba9425dd388bed1ac93bf2e138f8aafbd19_prof);

        
        $__internal_05b6b6c8e68223d8ed00f55bd1b810d28a4a8edf77f1e3430bb3df5de6bac1d8->leave($__internal_05b6b6c8e68223d8ed00f55bd1b810d28a4a8edf77f1e3430bb3df5de6bac1d8_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_21dbab253367508a7baf656fb906e160b140fda3410aa124fae0564bb1f7f190 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21dbab253367508a7baf656fb906e160b140fda3410aa124fae0564bb1f7f190->enter($__internal_21dbab253367508a7baf656fb906e160b140fda3410aa124fae0564bb1f7f190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_745cd0aa6af23653d0d18e10a716616a82953dd381ce6d12e7a336be0e38e39b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_745cd0aa6af23653d0d18e10a716616a82953dd381ce6d12e7a336be0e38e39b->enter($__internal_745cd0aa6af23653d0d18e10a716616a82953dd381ce6d12e7a336be0e38e39b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_745cd0aa6af23653d0d18e10a716616a82953dd381ce6d12e7a336be0e38e39b->leave($__internal_745cd0aa6af23653d0d18e10a716616a82953dd381ce6d12e7a336be0e38e39b_prof);

        
        $__internal_21dbab253367508a7baf656fb906e160b140fda3410aa124fae0564bb1f7f190->leave($__internal_21dbab253367508a7baf656fb906e160b140fda3410aa124fae0564bb1f7f190_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_92d41aac3913a829b5feae350c3ca55df9acd1c0e3c23f76020d2536ba8155f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92d41aac3913a829b5feae350c3ca55df9acd1c0e3c23f76020d2536ba8155f2->enter($__internal_92d41aac3913a829b5feae350c3ca55df9acd1c0e3c23f76020d2536ba8155f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0d110fc2da009fc3241e7ed92c42f401b2f12c17ae4743fa3f9a28b75e6440c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d110fc2da009fc3241e7ed92c42f401b2f12c17ae4743fa3f9a28b75e6440c3->enter($__internal_0d110fc2da009fc3241e7ed92c42f401b2f12c17ae4743fa3f9a28b75e6440c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0d110fc2da009fc3241e7ed92c42f401b2f12c17ae4743fa3f9a28b75e6440c3->leave($__internal_0d110fc2da009fc3241e7ed92c42f401b2f12c17ae4743fa3f9a28b75e6440c3_prof);

        
        $__internal_92d41aac3913a829b5feae350c3ca55df9acd1c0e3c23f76020d2536ba8155f2->leave($__internal_92d41aac3913a829b5feae350c3ca55df9acd1c0e3c23f76020d2536ba8155f2_prof);

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
