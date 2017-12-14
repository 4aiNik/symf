<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_1878275fdbc32b660cfbee6afea5d6e15c55adb100b0dbddcb4be415750c22a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_66fb98a083ccf33e809d6f6ac5bf81b705cf5e2afe67717fa00adea9f3a4d219 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66fb98a083ccf33e809d6f6ac5bf81b705cf5e2afe67717fa00adea9f3a4d219->enter($__internal_66fb98a083ccf33e809d6f6ac5bf81b705cf5e2afe67717fa00adea9f3a4d219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_85bd26c1de8a165706531f0f5d06fc5d787416bddce9fe6b031bbbf707eeabb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85bd26c1de8a165706531f0f5d06fc5d787416bddce9fe6b031bbbf707eeabb6->enter($__internal_85bd26c1de8a165706531f0f5d06fc5d787416bddce9fe6b031bbbf707eeabb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66fb98a083ccf33e809d6f6ac5bf81b705cf5e2afe67717fa00adea9f3a4d219->leave($__internal_66fb98a083ccf33e809d6f6ac5bf81b705cf5e2afe67717fa00adea9f3a4d219_prof);

        
        $__internal_85bd26c1de8a165706531f0f5d06fc5d787416bddce9fe6b031bbbf707eeabb6->leave($__internal_85bd26c1de8a165706531f0f5d06fc5d787416bddce9fe6b031bbbf707eeabb6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1a4ca358090177c985209f9f827356a163cd2391609be98795fa23f06d0358de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a4ca358090177c985209f9f827356a163cd2391609be98795fa23f06d0358de->enter($__internal_1a4ca358090177c985209f9f827356a163cd2391609be98795fa23f06d0358de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_966e7bbeb3fb0f73df3d5a0c174244e6c383dcabd0652989354c44600ed17d6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_966e7bbeb3fb0f73df3d5a0c174244e6c383dcabd0652989354c44600ed17d6e->enter($__internal_966e7bbeb3fb0f73df3d5a0c174244e6c383dcabd0652989354c44600ed17d6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_966e7bbeb3fb0f73df3d5a0c174244e6c383dcabd0652989354c44600ed17d6e->leave($__internal_966e7bbeb3fb0f73df3d5a0c174244e6c383dcabd0652989354c44600ed17d6e_prof);

        
        $__internal_1a4ca358090177c985209f9f827356a163cd2391609be98795fa23f06d0358de->leave($__internal_1a4ca358090177c985209f9f827356a163cd2391609be98795fa23f06d0358de_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_13039ac14a8cfa6aaa9161f25b67843bf9f82e99a50b3283f5b66022272c4150 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13039ac14a8cfa6aaa9161f25b67843bf9f82e99a50b3283f5b66022272c4150->enter($__internal_13039ac14a8cfa6aaa9161f25b67843bf9f82e99a50b3283f5b66022272c4150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4997ff493ddf857c0a182ba74c7906ad2b2fe70b9c26408e516641618cab8655 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4997ff493ddf857c0a182ba74c7906ad2b2fe70b9c26408e516641618cab8655->enter($__internal_4997ff493ddf857c0a182ba74c7906ad2b2fe70b9c26408e516641618cab8655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4997ff493ddf857c0a182ba74c7906ad2b2fe70b9c26408e516641618cab8655->leave($__internal_4997ff493ddf857c0a182ba74c7906ad2b2fe70b9c26408e516641618cab8655_prof);

        
        $__internal_13039ac14a8cfa6aaa9161f25b67843bf9f82e99a50b3283f5b66022272c4150->leave($__internal_13039ac14a8cfa6aaa9161f25b67843bf9f82e99a50b3283f5b66022272c4150_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_1088d39508a7ec28206e71df0c429b093fdeaefd8df4f2d6b8a3a237070472c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1088d39508a7ec28206e71df0c429b093fdeaefd8df4f2d6b8a3a237070472c2->enter($__internal_1088d39508a7ec28206e71df0c429b093fdeaefd8df4f2d6b8a3a237070472c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_58f0cc818dbef7c64d8efa21388ebb297c322dca9959bb4bd576c99b24151540 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58f0cc818dbef7c64d8efa21388ebb297c322dca9959bb4bd576c99b24151540->enter($__internal_58f0cc818dbef7c64d8efa21388ebb297c322dca9959bb4bd576c99b24151540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_58f0cc818dbef7c64d8efa21388ebb297c322dca9959bb4bd576c99b24151540->leave($__internal_58f0cc818dbef7c64d8efa21388ebb297c322dca9959bb4bd576c99b24151540_prof);

        
        $__internal_1088d39508a7ec28206e71df0c429b093fdeaefd8df4f2d6b8a3a237070472c2->leave($__internal_1088d39508a7ec28206e71df0c429b093fdeaefd8df4f2d6b8a3a237070472c2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
