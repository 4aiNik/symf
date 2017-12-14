<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_cd665b4961e8ff189fad7ba52230790b95be514d9def5f1d7c72958f14873073 extends Twig_Template
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
        $__internal_054986183d76dd2d214e624fe4b6123e70f16f3d7968652ac05545151ebc185b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_054986183d76dd2d214e624fe4b6123e70f16f3d7968652ac05545151ebc185b->enter($__internal_054986183d76dd2d214e624fe4b6123e70f16f3d7968652ac05545151ebc185b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_1a7a9e2ea9a8f4c23129315bc34332c22cd21146a8cdf91e17defffb6db92ea2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a7a9e2ea9a8f4c23129315bc34332c22cd21146a8cdf91e17defffb6db92ea2->enter($__internal_1a7a9e2ea9a8f4c23129315bc34332c22cd21146a8cdf91e17defffb6db92ea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_054986183d76dd2d214e624fe4b6123e70f16f3d7968652ac05545151ebc185b->leave($__internal_054986183d76dd2d214e624fe4b6123e70f16f3d7968652ac05545151ebc185b_prof);

        
        $__internal_1a7a9e2ea9a8f4c23129315bc34332c22cd21146a8cdf91e17defffb6db92ea2->leave($__internal_1a7a9e2ea9a8f4c23129315bc34332c22cd21146a8cdf91e17defffb6db92ea2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
