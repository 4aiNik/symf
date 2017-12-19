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
        $__internal_814c19aade9320b74bb9c5755c570e51935fc766796810df6960b14e0b83035e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_814c19aade9320b74bb9c5755c570e51935fc766796810df6960b14e0b83035e->enter($__internal_814c19aade9320b74bb9c5755c570e51935fc766796810df6960b14e0b83035e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_7f3220102b8cd19c9947a72860904901ac40c0dc818edbdd91ce4f286e7b0dc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f3220102b8cd19c9947a72860904901ac40c0dc818edbdd91ce4f286e7b0dc9->enter($__internal_7f3220102b8cd19c9947a72860904901ac40c0dc818edbdd91ce4f286e7b0dc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_814c19aade9320b74bb9c5755c570e51935fc766796810df6960b14e0b83035e->leave($__internal_814c19aade9320b74bb9c5755c570e51935fc766796810df6960b14e0b83035e_prof);

        
        $__internal_7f3220102b8cd19c9947a72860904901ac40c0dc818edbdd91ce4f286e7b0dc9->leave($__internal_7f3220102b8cd19c9947a72860904901ac40c0dc818edbdd91ce4f286e7b0dc9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a2c397873679607162c2293579733e73308d2a197c7301d9e5d0ff0f8e768ceb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2c397873679607162c2293579733e73308d2a197c7301d9e5d0ff0f8e768ceb->enter($__internal_a2c397873679607162c2293579733e73308d2a197c7301d9e5d0ff0f8e768ceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_eace657cd52e6a04c99b74ff490df1b202e68e7457ad1fafc78b675d0e344b02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eace657cd52e6a04c99b74ff490df1b202e68e7457ad1fafc78b675d0e344b02->enter($__internal_eace657cd52e6a04c99b74ff490df1b202e68e7457ad1fafc78b675d0e344b02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_eace657cd52e6a04c99b74ff490df1b202e68e7457ad1fafc78b675d0e344b02->leave($__internal_eace657cd52e6a04c99b74ff490df1b202e68e7457ad1fafc78b675d0e344b02_prof);

        
        $__internal_a2c397873679607162c2293579733e73308d2a197c7301d9e5d0ff0f8e768ceb->leave($__internal_a2c397873679607162c2293579733e73308d2a197c7301d9e5d0ff0f8e768ceb_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_d26984587dbd71d889a901458bd00e07af8a9aa13437c5bfcb6c5a0aa5b21d44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d26984587dbd71d889a901458bd00e07af8a9aa13437c5bfcb6c5a0aa5b21d44->enter($__internal_d26984587dbd71d889a901458bd00e07af8a9aa13437c5bfcb6c5a0aa5b21d44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9534e7f649d66583d0204f23d92a191cb60e1422432deb67847f9d003fc0e5cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9534e7f649d66583d0204f23d92a191cb60e1422432deb67847f9d003fc0e5cb->enter($__internal_9534e7f649d66583d0204f23d92a191cb60e1422432deb67847f9d003fc0e5cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9534e7f649d66583d0204f23d92a191cb60e1422432deb67847f9d003fc0e5cb->leave($__internal_9534e7f649d66583d0204f23d92a191cb60e1422432deb67847f9d003fc0e5cb_prof);

        
        $__internal_d26984587dbd71d889a901458bd00e07af8a9aa13437c5bfcb6c5a0aa5b21d44->leave($__internal_d26984587dbd71d889a901458bd00e07af8a9aa13437c5bfcb6c5a0aa5b21d44_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_d28fbdf830bf0deae957ac5dde9b9335014ec6a1b4ce6a3611615979c0dd8281 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d28fbdf830bf0deae957ac5dde9b9335014ec6a1b4ce6a3611615979c0dd8281->enter($__internal_d28fbdf830bf0deae957ac5dde9b9335014ec6a1b4ce6a3611615979c0dd8281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_762948ba42eb8aa2530a6e70668cd80286fd0dfa4738f0cb31d4a82b8496c592 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_762948ba42eb8aa2530a6e70668cd80286fd0dfa4738f0cb31d4a82b8496c592->enter($__internal_762948ba42eb8aa2530a6e70668cd80286fd0dfa4738f0cb31d4a82b8496c592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_762948ba42eb8aa2530a6e70668cd80286fd0dfa4738f0cb31d4a82b8496c592->leave($__internal_762948ba42eb8aa2530a6e70668cd80286fd0dfa4738f0cb31d4a82b8496c592_prof);

        
        $__internal_d28fbdf830bf0deae957ac5dde9b9335014ec6a1b4ce6a3611615979c0dd8281->leave($__internal_d28fbdf830bf0deae957ac5dde9b9335014ec6a1b4ce6a3611615979c0dd8281_prof);

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
