<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_4c54f61988717b350e8df03ba01d18691275efdddf84462d85981f91b3ee8baa extends Twig_Template
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
        $__internal_dae36b001c4d9634acd14907e5191df975cba793de14d20df2eb622da0e58b28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dae36b001c4d9634acd14907e5191df975cba793de14d20df2eb622da0e58b28->enter($__internal_dae36b001c4d9634acd14907e5191df975cba793de14d20df2eb622da0e58b28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_2a65a81591ad13875089459b4e630368752712eaf952158b263a9476470a0217 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a65a81591ad13875089459b4e630368752712eaf952158b263a9476470a0217->enter($__internal_2a65a81591ad13875089459b4e630368752712eaf952158b263a9476470a0217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_dae36b001c4d9634acd14907e5191df975cba793de14d20df2eb622da0e58b28->leave($__internal_dae36b001c4d9634acd14907e5191df975cba793de14d20df2eb622da0e58b28_prof);

        
        $__internal_2a65a81591ad13875089459b4e630368752712eaf952158b263a9476470a0217->leave($__internal_2a65a81591ad13875089459b4e630368752712eaf952158b263a9476470a0217_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
