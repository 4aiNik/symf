<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_103e10cc104c0b40daf4b4fe99961f77bd9645f170ff7cb7bad7d4b8e86ad26c extends Twig_Template
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
        $__internal_f133b919e83a5d138cdc6d5782d72c3ba492add394f7228da0ef44f2d337214a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f133b919e83a5d138cdc6d5782d72c3ba492add394f7228da0ef44f2d337214a->enter($__internal_f133b919e83a5d138cdc6d5782d72c3ba492add394f7228da0ef44f2d337214a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_ec04e9107e2e8c23e20064ea40885046ef2f05bf836098ffaa9e1f22a82a57e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec04e9107e2e8c23e20064ea40885046ef2f05bf836098ffaa9e1f22a82a57e6->enter($__internal_ec04e9107e2e8c23e20064ea40885046ef2f05bf836098ffaa9e1f22a82a57e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_f133b919e83a5d138cdc6d5782d72c3ba492add394f7228da0ef44f2d337214a->leave($__internal_f133b919e83a5d138cdc6d5782d72c3ba492add394f7228da0ef44f2d337214a_prof);

        
        $__internal_ec04e9107e2e8c23e20064ea40885046ef2f05bf836098ffaa9e1f22a82a57e6->leave($__internal_ec04e9107e2e8c23e20064ea40885046ef2f05bf836098ffaa9e1f22a82a57e6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
