<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_3caf6e65f122c85d80570a97d8460867e5eab2af60bd6b4a0da35d6c33fadfda extends Twig_Template
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
        $__internal_565b497cf59ede15a54aa4930d9fd08c28003de2022751274dfe7785b98fae81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_565b497cf59ede15a54aa4930d9fd08c28003de2022751274dfe7785b98fae81->enter($__internal_565b497cf59ede15a54aa4930d9fd08c28003de2022751274dfe7785b98fae81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_8ff04d0358a17a7dd5ad02ebda36da2c3dfa37a7c599eaa460d61339eee92271 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ff04d0358a17a7dd5ad02ebda36da2c3dfa37a7c599eaa460d61339eee92271->enter($__internal_8ff04d0358a17a7dd5ad02ebda36da2c3dfa37a7c599eaa460d61339eee92271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_565b497cf59ede15a54aa4930d9fd08c28003de2022751274dfe7785b98fae81->leave($__internal_565b497cf59ede15a54aa4930d9fd08c28003de2022751274dfe7785b98fae81_prof);

        
        $__internal_8ff04d0358a17a7dd5ad02ebda36da2c3dfa37a7c599eaa460d61339eee92271->leave($__internal_8ff04d0358a17a7dd5ad02ebda36da2c3dfa37a7c599eaa460d61339eee92271_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
