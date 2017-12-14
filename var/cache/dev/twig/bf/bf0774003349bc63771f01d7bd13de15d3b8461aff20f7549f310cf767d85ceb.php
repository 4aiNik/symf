<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_1ba13413b4ed4f06f8ac2c03afa72d1213546ef5b2ae1d318b812ffacc9119d1 extends Twig_Template
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
        $__internal_6cb6cbced836d9509715fee545caf2e2f3725d7740f1aec4fe1c7b5ba495beb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cb6cbced836d9509715fee545caf2e2f3725d7740f1aec4fe1c7b5ba495beb6->enter($__internal_6cb6cbced836d9509715fee545caf2e2f3725d7740f1aec4fe1c7b5ba495beb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_3aa3c92a3ee27b4d7ada8ad161e1acd509608f61cc67b8a59e0d266c4580bb1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3aa3c92a3ee27b4d7ada8ad161e1acd509608f61cc67b8a59e0d266c4580bb1e->enter($__internal_3aa3c92a3ee27b4d7ada8ad161e1acd509608f61cc67b8a59e0d266c4580bb1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_6cb6cbced836d9509715fee545caf2e2f3725d7740f1aec4fe1c7b5ba495beb6->leave($__internal_6cb6cbced836d9509715fee545caf2e2f3725d7740f1aec4fe1c7b5ba495beb6_prof);

        
        $__internal_3aa3c92a3ee27b4d7ada8ad161e1acd509608f61cc67b8a59e0d266c4580bb1e->leave($__internal_3aa3c92a3ee27b4d7ada8ad161e1acd509608f61cc67b8a59e0d266c4580bb1e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
