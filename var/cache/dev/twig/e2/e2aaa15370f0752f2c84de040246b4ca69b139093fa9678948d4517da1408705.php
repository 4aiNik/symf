<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_24f79e9a879a5aff6b292c39a18a31fd6280c85a16d19e23e64a6e0c67930f3a extends Twig_Template
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
        $__internal_ce2a7012673db029d1df305cbbbd52aaf62c9e83e8d1f4e7b25e419831997735 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce2a7012673db029d1df305cbbbd52aaf62c9e83e8d1f4e7b25e419831997735->enter($__internal_ce2a7012673db029d1df305cbbbd52aaf62c9e83e8d1f4e7b25e419831997735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_abcf95ce19997ef5c657377505ac48872d0ebf9c0e23cedd6c2fc006a3b30592 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abcf95ce19997ef5c657377505ac48872d0ebf9c0e23cedd6c2fc006a3b30592->enter($__internal_abcf95ce19997ef5c657377505ac48872d0ebf9c0e23cedd6c2fc006a3b30592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_ce2a7012673db029d1df305cbbbd52aaf62c9e83e8d1f4e7b25e419831997735->leave($__internal_ce2a7012673db029d1df305cbbbd52aaf62c9e83e8d1f4e7b25e419831997735_prof);

        
        $__internal_abcf95ce19997ef5c657377505ac48872d0ebf9c0e23cedd6c2fc006a3b30592->leave($__internal_abcf95ce19997ef5c657377505ac48872d0ebf9c0e23cedd6c2fc006a3b30592_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
