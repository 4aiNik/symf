<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_693ce7bb96d9146ba67ab268f7a81cdf4f1608e56b661641748f705c7b7a2e1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_398f72405190e955b5894eda78dc16c5245b2a3d249406213dada14f5bd6688b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_398f72405190e955b5894eda78dc16c5245b2a3d249406213dada14f5bd6688b->enter($__internal_398f72405190e955b5894eda78dc16c5245b2a3d249406213dada14f5bd6688b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_a9624b69e474250bf244ba6f430fd96016a410370e229012746d42ad1ebbdf9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9624b69e474250bf244ba6f430fd96016a410370e229012746d42ad1ebbdf9f->enter($__internal_a9624b69e474250bf244ba6f430fd96016a410370e229012746d42ad1ebbdf9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_398f72405190e955b5894eda78dc16c5245b2a3d249406213dada14f5bd6688b->leave($__internal_398f72405190e955b5894eda78dc16c5245b2a3d249406213dada14f5bd6688b_prof);

        
        $__internal_a9624b69e474250bf244ba6f430fd96016a410370e229012746d42ad1ebbdf9f->leave($__internal_a9624b69e474250bf244ba6f430fd96016a410370e229012746d42ad1ebbdf9f_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_e526001e87a0939ddd449d897c7e16e9de9a5454e337dd2a17de941f003e1569 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e526001e87a0939ddd449d897c7e16e9de9a5454e337dd2a17de941f003e1569->enter($__internal_e526001e87a0939ddd449d897c7e16e9de9a5454e337dd2a17de941f003e1569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_406aa4c7242777589a669d2372ec1e90be42909a042c1276cb28d48ccad13f75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_406aa4c7242777589a669d2372ec1e90be42909a042c1276cb28d48ccad13f75->enter($__internal_406aa4c7242777589a669d2372ec1e90be42909a042c1276cb28d48ccad13f75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_406aa4c7242777589a669d2372ec1e90be42909a042c1276cb28d48ccad13f75->leave($__internal_406aa4c7242777589a669d2372ec1e90be42909a042c1276cb28d48ccad13f75_prof);

        
        $__internal_e526001e87a0939ddd449d897c7e16e9de9a5454e337dd2a17de941f003e1569->leave($__internal_e526001e87a0939ddd449d897c7e16e9de9a5454e337dd2a17de941f003e1569_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
