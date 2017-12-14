<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_41beac728198993731c562523c12cd3b20e7bb3d2627b8faff2ebf8f3db45573 extends Twig_Template
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
        $__internal_73f7995628788410498df1d3410e78991062c76c0a440a5c4320bf2d63568780 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73f7995628788410498df1d3410e78991062c76c0a440a5c4320bf2d63568780->enter($__internal_73f7995628788410498df1d3410e78991062c76c0a440a5c4320bf2d63568780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_80f29774de58ce24d7b7b5b81013adeac51b3f1a01792b4065cedfc3c84713a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80f29774de58ce24d7b7b5b81013adeac51b3f1a01792b4065cedfc3c84713a9->enter($__internal_80f29774de58ce24d7b7b5b81013adeac51b3f1a01792b4065cedfc3c84713a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_73f7995628788410498df1d3410e78991062c76c0a440a5c4320bf2d63568780->leave($__internal_73f7995628788410498df1d3410e78991062c76c0a440a5c4320bf2d63568780_prof);

        
        $__internal_80f29774de58ce24d7b7b5b81013adeac51b3f1a01792b4065cedfc3c84713a9->leave($__internal_80f29774de58ce24d7b7b5b81013adeac51b3f1a01792b4065cedfc3c84713a9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
