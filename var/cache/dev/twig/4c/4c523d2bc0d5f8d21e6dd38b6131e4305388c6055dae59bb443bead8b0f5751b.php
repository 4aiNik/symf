<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_2ec95887635f7f9e31f0aed95da2f95113b36e08e59ea8c0977b6c95cb537bd6 extends Twig_Template
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
        $__internal_d3b201ee122288f04414fdcb0123ce1463fa4e78a61c12c096317fea822a0de0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3b201ee122288f04414fdcb0123ce1463fa4e78a61c12c096317fea822a0de0->enter($__internal_d3b201ee122288f04414fdcb0123ce1463fa4e78a61c12c096317fea822a0de0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_d6210b93a2174b733abd7bb7f2f66df5dbc0404a0e544b5a5c23409f24ecdd1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6210b93a2174b733abd7bb7f2f66df5dbc0404a0e544b5a5c23409f24ecdd1d->enter($__internal_d6210b93a2174b733abd7bb7f2f66df5dbc0404a0e544b5a5c23409f24ecdd1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_d3b201ee122288f04414fdcb0123ce1463fa4e78a61c12c096317fea822a0de0->leave($__internal_d3b201ee122288f04414fdcb0123ce1463fa4e78a61c12c096317fea822a0de0_prof);

        
        $__internal_d6210b93a2174b733abd7bb7f2f66df5dbc0404a0e544b5a5c23409f24ecdd1d->leave($__internal_d6210b93a2174b733abd7bb7f2f66df5dbc0404a0e544b5a5c23409f24ecdd1d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
