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
        $__internal_063af054dd54b6a0d98627dc6be76e93f9d591a405ba9fe127c0a986d3c5cb99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_063af054dd54b6a0d98627dc6be76e93f9d591a405ba9fe127c0a986d3c5cb99->enter($__internal_063af054dd54b6a0d98627dc6be76e93f9d591a405ba9fe127c0a986d3c5cb99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_47228b1a69e9fe705b4a9aaf835b0dd4e73f1f88057b1c66d6d090050bed1b2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47228b1a69e9fe705b4a9aaf835b0dd4e73f1f88057b1c66d6d090050bed1b2f->enter($__internal_47228b1a69e9fe705b4a9aaf835b0dd4e73f1f88057b1c66d6d090050bed1b2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_063af054dd54b6a0d98627dc6be76e93f9d591a405ba9fe127c0a986d3c5cb99->leave($__internal_063af054dd54b6a0d98627dc6be76e93f9d591a405ba9fe127c0a986d3c5cb99_prof);

        
        $__internal_47228b1a69e9fe705b4a9aaf835b0dd4e73f1f88057b1c66d6d090050bed1b2f->leave($__internal_47228b1a69e9fe705b4a9aaf835b0dd4e73f1f88057b1c66d6d090050bed1b2f_prof);

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
