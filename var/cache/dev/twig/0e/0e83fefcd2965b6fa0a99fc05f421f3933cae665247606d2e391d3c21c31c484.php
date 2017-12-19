<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_175b6ce867f5a90d57d065b2e25b22389265e3d6d895c4b5f249ac7ce76d5f66 extends Twig_Template
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
        $__internal_bc4cd5c0b31bebb27aceba02fa58eea14db60cad5d33c5430947da67b5c964df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc4cd5c0b31bebb27aceba02fa58eea14db60cad5d33c5430947da67b5c964df->enter($__internal_bc4cd5c0b31bebb27aceba02fa58eea14db60cad5d33c5430947da67b5c964df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_5644b20130221f8b71298e2a4b3f3c027d82b280381af0704d7f26f1d30773d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5644b20130221f8b71298e2a4b3f3c027d82b280381af0704d7f26f1d30773d1->enter($__internal_5644b20130221f8b71298e2a4b3f3c027d82b280381af0704d7f26f1d30773d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_bc4cd5c0b31bebb27aceba02fa58eea14db60cad5d33c5430947da67b5c964df->leave($__internal_bc4cd5c0b31bebb27aceba02fa58eea14db60cad5d33c5430947da67b5c964df_prof);

        
        $__internal_5644b20130221f8b71298e2a4b3f3c027d82b280381af0704d7f26f1d30773d1->leave($__internal_5644b20130221f8b71298e2a4b3f3c027d82b280381af0704d7f26f1d30773d1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
