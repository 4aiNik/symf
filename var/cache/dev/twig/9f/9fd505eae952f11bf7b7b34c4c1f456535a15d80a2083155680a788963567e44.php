<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_5a3f6cf6086d484b923836b0a12f513cb56c7628150a5bb964f028a5858c76b5 extends Twig_Template
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
        $__internal_7b9de4864e876780bea0bd30aa02568450b1ea2cf8a58fc6afcd1c8986c55de7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b9de4864e876780bea0bd30aa02568450b1ea2cf8a58fc6afcd1c8986c55de7->enter($__internal_7b9de4864e876780bea0bd30aa02568450b1ea2cf8a58fc6afcd1c8986c55de7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_a3539a0ad0939b9b03d3bb5dae6658d14f579e89426349891b7e9f88e96940ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3539a0ad0939b9b03d3bb5dae6658d14f579e89426349891b7e9f88e96940ba->enter($__internal_a3539a0ad0939b9b03d3bb5dae6658d14f579e89426349891b7e9f88e96940ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_7b9de4864e876780bea0bd30aa02568450b1ea2cf8a58fc6afcd1c8986c55de7->leave($__internal_7b9de4864e876780bea0bd30aa02568450b1ea2cf8a58fc6afcd1c8986c55de7_prof);

        
        $__internal_a3539a0ad0939b9b03d3bb5dae6658d14f579e89426349891b7e9f88e96940ba->leave($__internal_a3539a0ad0939b9b03d3bb5dae6658d14f579e89426349891b7e9f88e96940ba_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
