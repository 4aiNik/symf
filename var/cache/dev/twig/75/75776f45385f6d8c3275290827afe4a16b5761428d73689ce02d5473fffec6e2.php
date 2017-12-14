<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_c23ca9f22ed00e48e7dc54bb4272e9abad87680fc001638199a83a6562b06463 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_97594967d05f4427828673838395b7f399a24c3a9d3c5df9af7a43326cbd489a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97594967d05f4427828673838395b7f399a24c3a9d3c5df9af7a43326cbd489a->enter($__internal_97594967d05f4427828673838395b7f399a24c3a9d3c5df9af7a43326cbd489a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_f4ff6ab1de4a99b108452b75329d1f3db084b074ce0542bba2c5aac947f659f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4ff6ab1de4a99b108452b75329d1f3db084b074ce0542bba2c5aac947f659f9->enter($__internal_f4ff6ab1de4a99b108452b75329d1f3db084b074ce0542bba2c5aac947f659f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_97594967d05f4427828673838395b7f399a24c3a9d3c5df9af7a43326cbd489a->leave($__internal_97594967d05f4427828673838395b7f399a24c3a9d3c5df9af7a43326cbd489a_prof);

        
        $__internal_f4ff6ab1de4a99b108452b75329d1f3db084b074ce0542bba2c5aac947f659f9->leave($__internal_f4ff6ab1de4a99b108452b75329d1f3db084b074ce0542bba2c5aac947f659f9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
