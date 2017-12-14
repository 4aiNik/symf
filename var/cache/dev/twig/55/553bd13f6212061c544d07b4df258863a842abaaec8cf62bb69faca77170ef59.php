<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_102b9f0600ae7dffa1e6cfef2661902e0f33827312a7b37369632ebb95f503d5 extends Twig_Template
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
        $__internal_34e3bd537e1c1914bbe638dbf3d3472847df7ae95299fe3d4e0309dea41d45ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34e3bd537e1c1914bbe638dbf3d3472847df7ae95299fe3d4e0309dea41d45ac->enter($__internal_34e3bd537e1c1914bbe638dbf3d3472847df7ae95299fe3d4e0309dea41d45ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_c25c9d32fb818c079dc6807739a63e7eec6ffc2dfabfb504cbd7ad37cc250f16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c25c9d32fb818c079dc6807739a63e7eec6ffc2dfabfb504cbd7ad37cc250f16->enter($__internal_c25c9d32fb818c079dc6807739a63e7eec6ffc2dfabfb504cbd7ad37cc250f16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_34e3bd537e1c1914bbe638dbf3d3472847df7ae95299fe3d4e0309dea41d45ac->leave($__internal_34e3bd537e1c1914bbe638dbf3d3472847df7ae95299fe3d4e0309dea41d45ac_prof);

        
        $__internal_c25c9d32fb818c079dc6807739a63e7eec6ffc2dfabfb504cbd7ad37cc250f16->leave($__internal_c25c9d32fb818c079dc6807739a63e7eec6ffc2dfabfb504cbd7ad37cc250f16_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
