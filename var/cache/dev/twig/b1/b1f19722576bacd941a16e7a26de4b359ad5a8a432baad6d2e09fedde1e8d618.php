<?php

/* base.html.twig */
class __TwigTemplate_e7512925d8fb00307cc049a1006d437f3028b1723b810d6e2acede88a13e1891 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_99b3abf9b1be7243f764fb3b542867eb996c0ab6d4285c867c6bcaa78a5254bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99b3abf9b1be7243f764fb3b542867eb996c0ab6d4285c867c6bcaa78a5254bf->enter($__internal_99b3abf9b1be7243f764fb3b542867eb996c0ab6d4285c867c6bcaa78a5254bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_f1214dd64a196c8c2d9211372ecec854801aa0554ba34dbe58c59ee9021b4ef3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1214dd64a196c8c2d9211372ecec854801aa0554ba34dbe58c59ee9021b4ef3->enter($__internal_f1214dd64a196c8c2d9211372ecec854801aa0554ba34dbe58c59ee9021b4ef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_99b3abf9b1be7243f764fb3b542867eb996c0ab6d4285c867c6bcaa78a5254bf->leave($__internal_99b3abf9b1be7243f764fb3b542867eb996c0ab6d4285c867c6bcaa78a5254bf_prof);

        
        $__internal_f1214dd64a196c8c2d9211372ecec854801aa0554ba34dbe58c59ee9021b4ef3->leave($__internal_f1214dd64a196c8c2d9211372ecec854801aa0554ba34dbe58c59ee9021b4ef3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_884ea68b42427fb5438a8937a095f7b3f5e3a4056031b70a02dd651b58771b9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_884ea68b42427fb5438a8937a095f7b3f5e3a4056031b70a02dd651b58771b9b->enter($__internal_884ea68b42427fb5438a8937a095f7b3f5e3a4056031b70a02dd651b58771b9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2d519f1b880be3b2c7684616d01e3bb05ff508ed8c3a20e6772e3339fde379b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d519f1b880be3b2c7684616d01e3bb05ff508ed8c3a20e6772e3339fde379b0->enter($__internal_2d519f1b880be3b2c7684616d01e3bb05ff508ed8c3a20e6772e3339fde379b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2d519f1b880be3b2c7684616d01e3bb05ff508ed8c3a20e6772e3339fde379b0->leave($__internal_2d519f1b880be3b2c7684616d01e3bb05ff508ed8c3a20e6772e3339fde379b0_prof);

        
        $__internal_884ea68b42427fb5438a8937a095f7b3f5e3a4056031b70a02dd651b58771b9b->leave($__internal_884ea68b42427fb5438a8937a095f7b3f5e3a4056031b70a02dd651b58771b9b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c4b66abb53fdf1464762fd31f9fd18d687a5d14eba959177dfe6ad374a8d9f71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4b66abb53fdf1464762fd31f9fd18d687a5d14eba959177dfe6ad374a8d9f71->enter($__internal_c4b66abb53fdf1464762fd31f9fd18d687a5d14eba959177dfe6ad374a8d9f71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3b392979611cf9e850c6cfa115d36e31aeab7853e8bc9d2178c940f8b99f3500 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b392979611cf9e850c6cfa115d36e31aeab7853e8bc9d2178c940f8b99f3500->enter($__internal_3b392979611cf9e850c6cfa115d36e31aeab7853e8bc9d2178c940f8b99f3500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3b392979611cf9e850c6cfa115d36e31aeab7853e8bc9d2178c940f8b99f3500->leave($__internal_3b392979611cf9e850c6cfa115d36e31aeab7853e8bc9d2178c940f8b99f3500_prof);

        
        $__internal_c4b66abb53fdf1464762fd31f9fd18d687a5d14eba959177dfe6ad374a8d9f71->leave($__internal_c4b66abb53fdf1464762fd31f9fd18d687a5d14eba959177dfe6ad374a8d9f71_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1df08c6b0be7f39d4953df528f6d2c0064ca209691ae917234b91cfcaf930044 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1df08c6b0be7f39d4953df528f6d2c0064ca209691ae917234b91cfcaf930044->enter($__internal_1df08c6b0be7f39d4953df528f6d2c0064ca209691ae917234b91cfcaf930044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_96f2e5d1d20e6f0408a11f20ad4b726d22f52a4356cf2aaaa35ed0fbdc03d4d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96f2e5d1d20e6f0408a11f20ad4b726d22f52a4356cf2aaaa35ed0fbdc03d4d7->enter($__internal_96f2e5d1d20e6f0408a11f20ad4b726d22f52a4356cf2aaaa35ed0fbdc03d4d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_96f2e5d1d20e6f0408a11f20ad4b726d22f52a4356cf2aaaa35ed0fbdc03d4d7->leave($__internal_96f2e5d1d20e6f0408a11f20ad4b726d22f52a4356cf2aaaa35ed0fbdc03d4d7_prof);

        
        $__internal_1df08c6b0be7f39d4953df528f6d2c0064ca209691ae917234b91cfcaf930044->leave($__internal_1df08c6b0be7f39d4953df528f6d2c0064ca209691ae917234b91cfcaf930044_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0ba3e09e0a81fa330dddcb221c5d54cc41f05a1de08e4114316c04bd387b2e5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ba3e09e0a81fa330dddcb221c5d54cc41f05a1de08e4114316c04bd387b2e5f->enter($__internal_0ba3e09e0a81fa330dddcb221c5d54cc41f05a1de08e4114316c04bd387b2e5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ec6ad9e1dcee2b7160d269174bbc4b27344981631f7ed56bb04ac54b43d53f40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec6ad9e1dcee2b7160d269174bbc4b27344981631f7ed56bb04ac54b43d53f40->enter($__internal_ec6ad9e1dcee2b7160d269174bbc4b27344981631f7ed56bb04ac54b43d53f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ec6ad9e1dcee2b7160d269174bbc4b27344981631f7ed56bb04ac54b43d53f40->leave($__internal_ec6ad9e1dcee2b7160d269174bbc4b27344981631f7ed56bb04ac54b43d53f40_prof);

        
        $__internal_0ba3e09e0a81fa330dddcb221c5d54cc41f05a1de08e4114316c04bd387b2e5f->leave($__internal_0ba3e09e0a81fa330dddcb221c5d54cc41f05a1de08e4114316c04bd387b2e5f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/symfony/app/Resources/views/base.html.twig");
    }
}
