<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_8a862fb6d30ff5910b1b3bef696c4f28b770c900dd3f91037dd793d5bcc44567 extends Twig_Template
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
        $__internal_4a65ddcf729f9c7729ea4b4600967f14ad26bddbb4ec4876cf5b1e80f7c4adde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a65ddcf729f9c7729ea4b4600967f14ad26bddbb4ec4876cf5b1e80f7c4adde->enter($__internal_4a65ddcf729f9c7729ea4b4600967f14ad26bddbb4ec4876cf5b1e80f7c4adde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_a0db7811352a5d8bf6e3e7d0a90d4687f44adaa16b3a5c5165a3f19f0e61f09a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0db7811352a5d8bf6e3e7d0a90d4687f44adaa16b3a5c5165a3f19f0e61f09a->enter($__internal_a0db7811352a5d8bf6e3e7d0a90d4687f44adaa16b3a5c5165a3f19f0e61f09a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_4a65ddcf729f9c7729ea4b4600967f14ad26bddbb4ec4876cf5b1e80f7c4adde->leave($__internal_4a65ddcf729f9c7729ea4b4600967f14ad26bddbb4ec4876cf5b1e80f7c4adde_prof);

        
        $__internal_a0db7811352a5d8bf6e3e7d0a90d4687f44adaa16b3a5c5165a3f19f0e61f09a->leave($__internal_a0db7811352a5d8bf6e3e7d0a90d4687f44adaa16b3a5c5165a3f19f0e61f09a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
