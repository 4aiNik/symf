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
        $__internal_dd44c6a5e1d9718903d69b557061d6834a7eb30e0e33a1674e9e1a1a7b342ef1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd44c6a5e1d9718903d69b557061d6834a7eb30e0e33a1674e9e1a1a7b342ef1->enter($__internal_dd44c6a5e1d9718903d69b557061d6834a7eb30e0e33a1674e9e1a1a7b342ef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_99fbe865398f5a4fc168238e76d1c176e74bfab13d709bc7469cd024c43d4054 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99fbe865398f5a4fc168238e76d1c176e74bfab13d709bc7469cd024c43d4054->enter($__internal_99fbe865398f5a4fc168238e76d1c176e74bfab13d709bc7469cd024c43d4054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_dd44c6a5e1d9718903d69b557061d6834a7eb30e0e33a1674e9e1a1a7b342ef1->leave($__internal_dd44c6a5e1d9718903d69b557061d6834a7eb30e0e33a1674e9e1a1a7b342ef1_prof);

        
        $__internal_99fbe865398f5a4fc168238e76d1c176e74bfab13d709bc7469cd024c43d4054->leave($__internal_99fbe865398f5a4fc168238e76d1c176e74bfab13d709bc7469cd024c43d4054_prof);

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
