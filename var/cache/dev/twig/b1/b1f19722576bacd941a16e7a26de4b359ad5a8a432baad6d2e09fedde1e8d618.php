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
        $__internal_32d8369b0e265cff893f405547d96135eb87b54a1c89f4b2c5e5fa5d65311876 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32d8369b0e265cff893f405547d96135eb87b54a1c89f4b2c5e5fa5d65311876->enter($__internal_32d8369b0e265cff893f405547d96135eb87b54a1c89f4b2c5e5fa5d65311876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_3001acad70b25ff7aabb68a9f98635e892b4da227c8158aa214d60c137151506 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3001acad70b25ff7aabb68a9f98635e892b4da227c8158aa214d60c137151506->enter($__internal_3001acad70b25ff7aabb68a9f98635e892b4da227c8158aa214d60c137151506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_32d8369b0e265cff893f405547d96135eb87b54a1c89f4b2c5e5fa5d65311876->leave($__internal_32d8369b0e265cff893f405547d96135eb87b54a1c89f4b2c5e5fa5d65311876_prof);

        
        $__internal_3001acad70b25ff7aabb68a9f98635e892b4da227c8158aa214d60c137151506->leave($__internal_3001acad70b25ff7aabb68a9f98635e892b4da227c8158aa214d60c137151506_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_43d0c199396f35467d0d8a8ba4ce2842a4b650260ad6bc8b457fab5f6e62ec69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43d0c199396f35467d0d8a8ba4ce2842a4b650260ad6bc8b457fab5f6e62ec69->enter($__internal_43d0c199396f35467d0d8a8ba4ce2842a4b650260ad6bc8b457fab5f6e62ec69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c7e21fbe95d4fd6e74f02f3670cd4389945ecd18eb4832ffbdc4ff584ce47d53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7e21fbe95d4fd6e74f02f3670cd4389945ecd18eb4832ffbdc4ff584ce47d53->enter($__internal_c7e21fbe95d4fd6e74f02f3670cd4389945ecd18eb4832ffbdc4ff584ce47d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c7e21fbe95d4fd6e74f02f3670cd4389945ecd18eb4832ffbdc4ff584ce47d53->leave($__internal_c7e21fbe95d4fd6e74f02f3670cd4389945ecd18eb4832ffbdc4ff584ce47d53_prof);

        
        $__internal_43d0c199396f35467d0d8a8ba4ce2842a4b650260ad6bc8b457fab5f6e62ec69->leave($__internal_43d0c199396f35467d0d8a8ba4ce2842a4b650260ad6bc8b457fab5f6e62ec69_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_242fcec3b4c31ad5e290c177f4b4f1180719afdd4e8038cd602a9ec2dac373a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_242fcec3b4c31ad5e290c177f4b4f1180719afdd4e8038cd602a9ec2dac373a4->enter($__internal_242fcec3b4c31ad5e290c177f4b4f1180719afdd4e8038cd602a9ec2dac373a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8784544452db769a3a556f1a691bda94b17b080d95c909cf51c66e5f2520d995 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8784544452db769a3a556f1a691bda94b17b080d95c909cf51c66e5f2520d995->enter($__internal_8784544452db769a3a556f1a691bda94b17b080d95c909cf51c66e5f2520d995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8784544452db769a3a556f1a691bda94b17b080d95c909cf51c66e5f2520d995->leave($__internal_8784544452db769a3a556f1a691bda94b17b080d95c909cf51c66e5f2520d995_prof);

        
        $__internal_242fcec3b4c31ad5e290c177f4b4f1180719afdd4e8038cd602a9ec2dac373a4->leave($__internal_242fcec3b4c31ad5e290c177f4b4f1180719afdd4e8038cd602a9ec2dac373a4_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b9482caaa72c45281a2580104a3bb5366f34226e1f92b4309784a8665dbd7f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b9482caaa72c45281a2580104a3bb5366f34226e1f92b4309784a8665dbd7f7->enter($__internal_6b9482caaa72c45281a2580104a3bb5366f34226e1f92b4309784a8665dbd7f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_64ef8298333dfdd335777264eea77db3eac370bf130e1a1a8c18617b0118e7ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64ef8298333dfdd335777264eea77db3eac370bf130e1a1a8c18617b0118e7ce->enter($__internal_64ef8298333dfdd335777264eea77db3eac370bf130e1a1a8c18617b0118e7ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_64ef8298333dfdd335777264eea77db3eac370bf130e1a1a8c18617b0118e7ce->leave($__internal_64ef8298333dfdd335777264eea77db3eac370bf130e1a1a8c18617b0118e7ce_prof);

        
        $__internal_6b9482caaa72c45281a2580104a3bb5366f34226e1f92b4309784a8665dbd7f7->leave($__internal_6b9482caaa72c45281a2580104a3bb5366f34226e1f92b4309784a8665dbd7f7_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_118402d6eeb239c63a0e3dc113e2aef799a0022e65b52ff95b329d6d61015d3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_118402d6eeb239c63a0e3dc113e2aef799a0022e65b52ff95b329d6d61015d3c->enter($__internal_118402d6eeb239c63a0e3dc113e2aef799a0022e65b52ff95b329d6d61015d3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_568da23454348199bd3180141d075820408a1509a6157bdd384fb246c6227df2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_568da23454348199bd3180141d075820408a1509a6157bdd384fb246c6227df2->enter($__internal_568da23454348199bd3180141d075820408a1509a6157bdd384fb246c6227df2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_568da23454348199bd3180141d075820408a1509a6157bdd384fb246c6227df2->leave($__internal_568da23454348199bd3180141d075820408a1509a6157bdd384fb246c6227df2_prof);

        
        $__internal_118402d6eeb239c63a0e3dc113e2aef799a0022e65b52ff95b329d6d61015d3c->leave($__internal_118402d6eeb239c63a0e3dc113e2aef799a0022e65b52ff95b329d6d61015d3c_prof);

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
