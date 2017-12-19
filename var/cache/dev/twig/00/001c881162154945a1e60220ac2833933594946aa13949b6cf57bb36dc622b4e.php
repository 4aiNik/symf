<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_295cf4d1232de5526216ca5e347ec33fadab247a9776f06a354337f61068f495 extends Twig_Template
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
        $__internal_560202740f9fd611304d66fa19d7a2a117cf09d0e71614f71a5f210c44edfce8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_560202740f9fd611304d66fa19d7a2a117cf09d0e71614f71a5f210c44edfce8->enter($__internal_560202740f9fd611304d66fa19d7a2a117cf09d0e71614f71a5f210c44edfce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_baa456b7337c041a270919fe146a46a19723f1b9bf93f306496f8aa8b2fb990b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baa456b7337c041a270919fe146a46a19723f1b9bf93f306496f8aa8b2fb990b->enter($__internal_baa456b7337c041a270919fe146a46a19723f1b9bf93f306496f8aa8b2fb990b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_560202740f9fd611304d66fa19d7a2a117cf09d0e71614f71a5f210c44edfce8->leave($__internal_560202740f9fd611304d66fa19d7a2a117cf09d0e71614f71a5f210c44edfce8_prof);

        
        $__internal_baa456b7337c041a270919fe146a46a19723f1b9bf93f306496f8aa8b2fb990b->leave($__internal_baa456b7337c041a270919fe146a46a19723f1b9bf93f306496f8aa8b2fb990b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
