<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_2dfd8aa918acdb0aa52d5b841fa5ef084d9174251fd0f26610a58ce9eca8d635 extends Twig_Template
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
        $__internal_e6dc3afec49ed6a549e20cb5b6bfbfd144db7addaf9386b85bd12c95836f2e2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6dc3afec49ed6a549e20cb5b6bfbfd144db7addaf9386b85bd12c95836f2e2d->enter($__internal_e6dc3afec49ed6a549e20cb5b6bfbfd144db7addaf9386b85bd12c95836f2e2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_3815725c5e0954db6ccbb1c8f6addd43d9068d104ff2dcca87a073cfece877b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3815725c5e0954db6ccbb1c8f6addd43d9068d104ff2dcca87a073cfece877b2->enter($__internal_3815725c5e0954db6ccbb1c8f6addd43d9068d104ff2dcca87a073cfece877b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_e6dc3afec49ed6a549e20cb5b6bfbfd144db7addaf9386b85bd12c95836f2e2d->leave($__internal_e6dc3afec49ed6a549e20cb5b6bfbfd144db7addaf9386b85bd12c95836f2e2d_prof);

        
        $__internal_3815725c5e0954db6ccbb1c8f6addd43d9068d104ff2dcca87a073cfece877b2->leave($__internal_3815725c5e0954db6ccbb1c8f6addd43d9068d104ff2dcca87a073cfece877b2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
