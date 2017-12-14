<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_e929bec2e6a149b6930b05325c178490343a7a918507da619e91abbae1879c4e extends Twig_Template
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
        $__internal_6efad89acf62c570218b5ca93d45d38f1cfccad8861ae61769f5371ec91e68a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6efad89acf62c570218b5ca93d45d38f1cfccad8861ae61769f5371ec91e68a8->enter($__internal_6efad89acf62c570218b5ca93d45d38f1cfccad8861ae61769f5371ec91e68a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_749c9a9016d819d310f5a175bf5ab89b9324cb9b7e8df6e270a587fdb2920faf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_749c9a9016d819d310f5a175bf5ab89b9324cb9b7e8df6e270a587fdb2920faf->enter($__internal_749c9a9016d819d310f5a175bf5ab89b9324cb9b7e8df6e270a587fdb2920faf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_6efad89acf62c570218b5ca93d45d38f1cfccad8861ae61769f5371ec91e68a8->leave($__internal_6efad89acf62c570218b5ca93d45d38f1cfccad8861ae61769f5371ec91e68a8_prof);

        
        $__internal_749c9a9016d819d310f5a175bf5ab89b9324cb9b7e8df6e270a587fdb2920faf->leave($__internal_749c9a9016d819d310f5a175bf5ab89b9324cb9b7e8df6e270a587fdb2920faf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
