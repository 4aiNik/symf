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
        $__internal_75318612ab1a4e1e5a88964beeced1b42d4a55fe93a76393718d0ef15ea1a68e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75318612ab1a4e1e5a88964beeced1b42d4a55fe93a76393718d0ef15ea1a68e->enter($__internal_75318612ab1a4e1e5a88964beeced1b42d4a55fe93a76393718d0ef15ea1a68e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_2947c75d768b584f7f3020acd06ce46940783a65810791cd6428ab4cc8ea6e9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2947c75d768b584f7f3020acd06ce46940783a65810791cd6428ab4cc8ea6e9f->enter($__internal_2947c75d768b584f7f3020acd06ce46940783a65810791cd6428ab4cc8ea6e9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_75318612ab1a4e1e5a88964beeced1b42d4a55fe93a76393718d0ef15ea1a68e->leave($__internal_75318612ab1a4e1e5a88964beeced1b42d4a55fe93a76393718d0ef15ea1a68e_prof);

        
        $__internal_2947c75d768b584f7f3020acd06ce46940783a65810791cd6428ab4cc8ea6e9f->leave($__internal_2947c75d768b584f7f3020acd06ce46940783a65810791cd6428ab4cc8ea6e9f_prof);

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
