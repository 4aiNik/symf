<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_2c98d7dda513a28e40954cf0fe4f994038abd57bf1c7e44dd11bb7e023e5e1e0 extends Twig_Template
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
        $__internal_bddd4ae7e37cb6bbddce51081a3ca37bbc8074ae16fbf9d3b5a529170c3d4b48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bddd4ae7e37cb6bbddce51081a3ca37bbc8074ae16fbf9d3b5a529170c3d4b48->enter($__internal_bddd4ae7e37cb6bbddce51081a3ca37bbc8074ae16fbf9d3b5a529170c3d4b48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_fc34158399b6761285259dd5d5eee8d6c4fa293876b756793b98a363bf28f0a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc34158399b6761285259dd5d5eee8d6c4fa293876b756793b98a363bf28f0a7->enter($__internal_fc34158399b6761285259dd5d5eee8d6c4fa293876b756793b98a363bf28f0a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_bddd4ae7e37cb6bbddce51081a3ca37bbc8074ae16fbf9d3b5a529170c3d4b48->leave($__internal_bddd4ae7e37cb6bbddce51081a3ca37bbc8074ae16fbf9d3b5a529170c3d4b48_prof);

        
        $__internal_fc34158399b6761285259dd5d5eee8d6c4fa293876b756793b98a363bf28f0a7->leave($__internal_fc34158399b6761285259dd5d5eee8d6c4fa293876b756793b98a363bf28f0a7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
