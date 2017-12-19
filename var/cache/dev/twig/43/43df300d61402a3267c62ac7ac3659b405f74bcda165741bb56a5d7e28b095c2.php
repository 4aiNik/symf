<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_5f485990e19975f2fc49879b76b3dbef14e71bbc44366a68a96b2e5ff040571b extends Twig_Template
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
        $__internal_1abd47649f973cff38e1df5223ef8c0554bd5251fe5092541511148d489e0e19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1abd47649f973cff38e1df5223ef8c0554bd5251fe5092541511148d489e0e19->enter($__internal_1abd47649f973cff38e1df5223ef8c0554bd5251fe5092541511148d489e0e19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_9164d86e584d602cc1a53674eac9177f42af09c26a33c288851132b955726ca0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9164d86e584d602cc1a53674eac9177f42af09c26a33c288851132b955726ca0->enter($__internal_9164d86e584d602cc1a53674eac9177f42af09c26a33c288851132b955726ca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_1abd47649f973cff38e1df5223ef8c0554bd5251fe5092541511148d489e0e19->leave($__internal_1abd47649f973cff38e1df5223ef8c0554bd5251fe5092541511148d489e0e19_prof);

        
        $__internal_9164d86e584d602cc1a53674eac9177f42af09c26a33c288851132b955726ca0->leave($__internal_9164d86e584d602cc1a53674eac9177f42af09c26a33c288851132b955726ca0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
