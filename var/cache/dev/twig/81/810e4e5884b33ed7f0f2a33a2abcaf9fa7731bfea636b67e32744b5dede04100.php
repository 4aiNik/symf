<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_23d2a24170420de7d4c3e5aed4a2f763687bcaa704969614733b72bfc477a56d extends Twig_Template
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
        $__internal_1009536a006ee242ab53a88450afe2c929011b673ec542c309547b7d94c57f69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1009536a006ee242ab53a88450afe2c929011b673ec542c309547b7d94c57f69->enter($__internal_1009536a006ee242ab53a88450afe2c929011b673ec542c309547b7d94c57f69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_84017eff3c411508efe11ed3f3038c072c1d763a57db0cf7a602a58340a48985 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84017eff3c411508efe11ed3f3038c072c1d763a57db0cf7a602a58340a48985->enter($__internal_84017eff3c411508efe11ed3f3038c072c1d763a57db0cf7a602a58340a48985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_1009536a006ee242ab53a88450afe2c929011b673ec542c309547b7d94c57f69->leave($__internal_1009536a006ee242ab53a88450afe2c929011b673ec542c309547b7d94c57f69_prof);

        
        $__internal_84017eff3c411508efe11ed3f3038c072c1d763a57db0cf7a602a58340a48985->leave($__internal_84017eff3c411508efe11ed3f3038c072c1d763a57db0cf7a602a58340a48985_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
