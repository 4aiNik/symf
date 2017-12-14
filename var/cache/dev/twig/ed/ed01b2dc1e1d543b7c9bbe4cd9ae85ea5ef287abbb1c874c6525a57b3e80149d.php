<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_d9f0a8f7487f9d67c4017661dc9ac6bdf13d8bca12e387ec8356865926ebac4c extends Twig_Template
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
        $__internal_5a7ddd395abf5c32c00c153f6366d54c6735d07ada7dbeb6fca435d41a948486 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a7ddd395abf5c32c00c153f6366d54c6735d07ada7dbeb6fca435d41a948486->enter($__internal_5a7ddd395abf5c32c00c153f6366d54c6735d07ada7dbeb6fca435d41a948486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_87921842441e568dcd63e151e6c98d7d2d9528c2b4d7a1858f5f4ed6ca034ecb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87921842441e568dcd63e151e6c98d7d2d9528c2b4d7a1858f5f4ed6ca034ecb->enter($__internal_87921842441e568dcd63e151e6c98d7d2d9528c2b4d7a1858f5f4ed6ca034ecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_5a7ddd395abf5c32c00c153f6366d54c6735d07ada7dbeb6fca435d41a948486->leave($__internal_5a7ddd395abf5c32c00c153f6366d54c6735d07ada7dbeb6fca435d41a948486_prof);

        
        $__internal_87921842441e568dcd63e151e6c98d7d2d9528c2b4d7a1858f5f4ed6ca034ecb->leave($__internal_87921842441e568dcd63e151e6c98d7d2d9528c2b4d7a1858f5f4ed6ca034ecb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
