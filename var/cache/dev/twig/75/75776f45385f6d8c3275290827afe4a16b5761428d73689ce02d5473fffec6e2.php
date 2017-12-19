<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_c23ca9f22ed00e48e7dc54bb4272e9abad87680fc001638199a83a6562b06463 extends Twig_Template
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
        $__internal_3759f84662691b3a2a9a02503a6cbf9ad18173e77fa9d9ea1364352fbf304b2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3759f84662691b3a2a9a02503a6cbf9ad18173e77fa9d9ea1364352fbf304b2e->enter($__internal_3759f84662691b3a2a9a02503a6cbf9ad18173e77fa9d9ea1364352fbf304b2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_15850db49303565e6382335bc642dc2492e7d750401dedcb2ba0f3b3bffdac0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15850db49303565e6382335bc642dc2492e7d750401dedcb2ba0f3b3bffdac0f->enter($__internal_15850db49303565e6382335bc642dc2492e7d750401dedcb2ba0f3b3bffdac0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_3759f84662691b3a2a9a02503a6cbf9ad18173e77fa9d9ea1364352fbf304b2e->leave($__internal_3759f84662691b3a2a9a02503a6cbf9ad18173e77fa9d9ea1364352fbf304b2e_prof);

        
        $__internal_15850db49303565e6382335bc642dc2492e7d750401dedcb2ba0f3b3bffdac0f->leave($__internal_15850db49303565e6382335bc642dc2492e7d750401dedcb2ba0f3b3bffdac0f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
