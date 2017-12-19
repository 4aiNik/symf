<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_fd9884ea6e69926d08e06aa018a95bc85a683fa90791ffcd74a6d168addbfc0c extends Twig_Template
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
        $__internal_0e8a5ebc13f6173ffea7759a95e69446f3a79affa27c63cd4f86f1f6cf0ce9b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e8a5ebc13f6173ffea7759a95e69446f3a79affa27c63cd4f86f1f6cf0ce9b8->enter($__internal_0e8a5ebc13f6173ffea7759a95e69446f3a79affa27c63cd4f86f1f6cf0ce9b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_ac9e94405bac21cb1ed0b5b52b08e71d7cd329175b218938e0acac9b0f4bce6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac9e94405bac21cb1ed0b5b52b08e71d7cd329175b218938e0acac9b0f4bce6e->enter($__internal_ac9e94405bac21cb1ed0b5b52b08e71d7cd329175b218938e0acac9b0f4bce6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_0e8a5ebc13f6173ffea7759a95e69446f3a79affa27c63cd4f86f1f6cf0ce9b8->leave($__internal_0e8a5ebc13f6173ffea7759a95e69446f3a79affa27c63cd4f86f1f6cf0ce9b8_prof);

        
        $__internal_ac9e94405bac21cb1ed0b5b52b08e71d7cd329175b218938e0acac9b0f4bce6e->leave($__internal_ac9e94405bac21cb1ed0b5b52b08e71d7cd329175b218938e0acac9b0f4bce6e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
