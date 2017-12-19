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
        $__internal_b52286a4a8acc40b226d57268c539c78e691f02ca00892fdf4f3bb7af1034bfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b52286a4a8acc40b226d57268c539c78e691f02ca00892fdf4f3bb7af1034bfb->enter($__internal_b52286a4a8acc40b226d57268c539c78e691f02ca00892fdf4f3bb7af1034bfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_31f90b711565baa2f822af8ce77e662234c29dd1f9f8b780592d28c9fa481dba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31f90b711565baa2f822af8ce77e662234c29dd1f9f8b780592d28c9fa481dba->enter($__internal_31f90b711565baa2f822af8ce77e662234c29dd1f9f8b780592d28c9fa481dba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_b52286a4a8acc40b226d57268c539c78e691f02ca00892fdf4f3bb7af1034bfb->leave($__internal_b52286a4a8acc40b226d57268c539c78e691f02ca00892fdf4f3bb7af1034bfb_prof);

        
        $__internal_31f90b711565baa2f822af8ce77e662234c29dd1f9f8b780592d28c9fa481dba->leave($__internal_31f90b711565baa2f822af8ce77e662234c29dd1f9f8b780592d28c9fa481dba_prof);

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
