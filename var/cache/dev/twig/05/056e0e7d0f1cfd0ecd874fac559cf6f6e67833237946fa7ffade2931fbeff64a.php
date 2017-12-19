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
        $__internal_7eda20b9194f17edc2b3d15045dfe0895995d4d7e54efc21c32e908cd301dd5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7eda20b9194f17edc2b3d15045dfe0895995d4d7e54efc21c32e908cd301dd5e->enter($__internal_7eda20b9194f17edc2b3d15045dfe0895995d4d7e54efc21c32e908cd301dd5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_b85f1762794287f9a35953775e8002a38b657df9a674343a9152ba56bf39f88b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b85f1762794287f9a35953775e8002a38b657df9a674343a9152ba56bf39f88b->enter($__internal_b85f1762794287f9a35953775e8002a38b657df9a674343a9152ba56bf39f88b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_7eda20b9194f17edc2b3d15045dfe0895995d4d7e54efc21c32e908cd301dd5e->leave($__internal_7eda20b9194f17edc2b3d15045dfe0895995d4d7e54efc21c32e908cd301dd5e_prof);

        
        $__internal_b85f1762794287f9a35953775e8002a38b657df9a674343a9152ba56bf39f88b->leave($__internal_b85f1762794287f9a35953775e8002a38b657df9a674343a9152ba56bf39f88b_prof);

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
