<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_32e3a8b09ed4e8b9ee90d157b50a9da3e653fb7ae8b7dc69517f72419dbfecd7 extends Twig_Template
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
        $__internal_da686c74542b7937803bea3a55ab9cb787bd8624fe4c77a42474c285eaf32ef2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da686c74542b7937803bea3a55ab9cb787bd8624fe4c77a42474c285eaf32ef2->enter($__internal_da686c74542b7937803bea3a55ab9cb787bd8624fe4c77a42474c285eaf32ef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_2f9fd14759c0d4eb3516af3536cc06f8bb1c9793e5f56c408ab7ff33a18ce736 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f9fd14759c0d4eb3516af3536cc06f8bb1c9793e5f56c408ab7ff33a18ce736->enter($__internal_2f9fd14759c0d4eb3516af3536cc06f8bb1c9793e5f56c408ab7ff33a18ce736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_da686c74542b7937803bea3a55ab9cb787bd8624fe4c77a42474c285eaf32ef2->leave($__internal_da686c74542b7937803bea3a55ab9cb787bd8624fe4c77a42474c285eaf32ef2_prof);

        
        $__internal_2f9fd14759c0d4eb3516af3536cc06f8bb1c9793e5f56c408ab7ff33a18ce736->leave($__internal_2f9fd14759c0d4eb3516af3536cc06f8bb1c9793e5f56c408ab7ff33a18ce736_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
