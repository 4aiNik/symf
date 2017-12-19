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
        $__internal_49d0b0fc4e7303d5dd7b14c4d6a622a05dfbe48665f05592eb74a8dcee9a693b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49d0b0fc4e7303d5dd7b14c4d6a622a05dfbe48665f05592eb74a8dcee9a693b->enter($__internal_49d0b0fc4e7303d5dd7b14c4d6a622a05dfbe48665f05592eb74a8dcee9a693b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_06c140632c7c898de066a8867eb6ca9493ded16ebebeb9232f451662fbd5d88a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06c140632c7c898de066a8867eb6ca9493ded16ebebeb9232f451662fbd5d88a->enter($__internal_06c140632c7c898de066a8867eb6ca9493ded16ebebeb9232f451662fbd5d88a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_49d0b0fc4e7303d5dd7b14c4d6a622a05dfbe48665f05592eb74a8dcee9a693b->leave($__internal_49d0b0fc4e7303d5dd7b14c4d6a622a05dfbe48665f05592eb74a8dcee9a693b_prof);

        
        $__internal_06c140632c7c898de066a8867eb6ca9493ded16ebebeb9232f451662fbd5d88a->leave($__internal_06c140632c7c898de066a8867eb6ca9493ded16ebebeb9232f451662fbd5d88a_prof);

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
