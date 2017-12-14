<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_2dfd8aa918acdb0aa52d5b841fa5ef084d9174251fd0f26610a58ce9eca8d635 extends Twig_Template
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
        $__internal_5a4f740e9e7ecb5c7e2b760226eae7105cab862f80d46c81ac36b33684d54369 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a4f740e9e7ecb5c7e2b760226eae7105cab862f80d46c81ac36b33684d54369->enter($__internal_5a4f740e9e7ecb5c7e2b760226eae7105cab862f80d46c81ac36b33684d54369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_264fab009dc29b2a384dc69407a9f378a69c820a5cabd5f92cabd8808cd30ce3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_264fab009dc29b2a384dc69407a9f378a69c820a5cabd5f92cabd8808cd30ce3->enter($__internal_264fab009dc29b2a384dc69407a9f378a69c820a5cabd5f92cabd8808cd30ce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_5a4f740e9e7ecb5c7e2b760226eae7105cab862f80d46c81ac36b33684d54369->leave($__internal_5a4f740e9e7ecb5c7e2b760226eae7105cab862f80d46c81ac36b33684d54369_prof);

        
        $__internal_264fab009dc29b2a384dc69407a9f378a69c820a5cabd5f92cabd8808cd30ce3->leave($__internal_264fab009dc29b2a384dc69407a9f378a69c820a5cabd5f92cabd8808cd30ce3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
