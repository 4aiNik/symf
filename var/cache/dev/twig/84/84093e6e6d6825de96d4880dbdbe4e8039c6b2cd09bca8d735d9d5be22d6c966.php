<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_b790b556d58827420fdcc2bef1b5d2eca9c8fb56c50a3e391e0f0475be3dd7f4 extends Twig_Template
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
        $__internal_9e7932a43c8a698b2668a9e27a124bdc0f61f857becdf793ffd7315d541a024b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e7932a43c8a698b2668a9e27a124bdc0f61f857becdf793ffd7315d541a024b->enter($__internal_9e7932a43c8a698b2668a9e27a124bdc0f61f857becdf793ffd7315d541a024b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_e587cc6cee810baf5149ce2b92f41654a2f52722352526cda42c46037424c9ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e587cc6cee810baf5149ce2b92f41654a2f52722352526cda42c46037424c9ce->enter($__internal_e587cc6cee810baf5149ce2b92f41654a2f52722352526cda42c46037424c9ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_9e7932a43c8a698b2668a9e27a124bdc0f61f857becdf793ffd7315d541a024b->leave($__internal_9e7932a43c8a698b2668a9e27a124bdc0f61f857becdf793ffd7315d541a024b_prof);

        
        $__internal_e587cc6cee810baf5149ce2b92f41654a2f52722352526cda42c46037424c9ce->leave($__internal_e587cc6cee810baf5149ce2b92f41654a2f52722352526cda42c46037424c9ce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
