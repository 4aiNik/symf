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
        $__internal_2865cdf384644650b7eaeb420f6051a403fcc89a53aa41b490dd6a32045a59b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2865cdf384644650b7eaeb420f6051a403fcc89a53aa41b490dd6a32045a59b4->enter($__internal_2865cdf384644650b7eaeb420f6051a403fcc89a53aa41b490dd6a32045a59b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_152b8f5f8f75c2e94ecf0f5b86d43c827cfb0702fa9d97737f5a7f85fbb4cad8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_152b8f5f8f75c2e94ecf0f5b86d43c827cfb0702fa9d97737f5a7f85fbb4cad8->enter($__internal_152b8f5f8f75c2e94ecf0f5b86d43c827cfb0702fa9d97737f5a7f85fbb4cad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_2865cdf384644650b7eaeb420f6051a403fcc89a53aa41b490dd6a32045a59b4->leave($__internal_2865cdf384644650b7eaeb420f6051a403fcc89a53aa41b490dd6a32045a59b4_prof);

        
        $__internal_152b8f5f8f75c2e94ecf0f5b86d43c827cfb0702fa9d97737f5a7f85fbb4cad8->leave($__internal_152b8f5f8f75c2e94ecf0f5b86d43c827cfb0702fa9d97737f5a7f85fbb4cad8_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_1df6c4c7686d7b2e24a3583acd137a692b7b679b51d5402bf5d2102e3aaa2691 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1df6c4c7686d7b2e24a3583acd137a692b7b679b51d5402bf5d2102e3aaa2691->enter($__internal_1df6c4c7686d7b2e24a3583acd137a692b7b679b51d5402bf5d2102e3aaa2691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ef0752ebc724fb1512647256c150756e469ecf725df2e9a9b56ac8cec231700d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef0752ebc724fb1512647256c150756e469ecf725df2e9a9b56ac8cec231700d->enter($__internal_ef0752ebc724fb1512647256c150756e469ecf725df2e9a9b56ac8cec231700d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_ef0752ebc724fb1512647256c150756e469ecf725df2e9a9b56ac8cec231700d->leave($__internal_ef0752ebc724fb1512647256c150756e469ecf725df2e9a9b56ac8cec231700d_prof);

        
        $__internal_1df6c4c7686d7b2e24a3583acd137a692b7b679b51d5402bf5d2102e3aaa2691->leave($__internal_1df6c4c7686d7b2e24a3583acd137a692b7b679b51d5402bf5d2102e3aaa2691_prof);

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
