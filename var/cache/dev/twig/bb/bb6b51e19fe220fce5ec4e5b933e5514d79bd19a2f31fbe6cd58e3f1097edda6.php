<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_90c515f661ba0957029f62e7816d6064d95afb900007341e45d52ce01e9b60ac extends Twig_Template
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
        $__internal_aca1ed28a7135d56a369f57b79da71e1900682542b4edeae09ad4ff3999f2718 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aca1ed28a7135d56a369f57b79da71e1900682542b4edeae09ad4ff3999f2718->enter($__internal_aca1ed28a7135d56a369f57b79da71e1900682542b4edeae09ad4ff3999f2718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_0a394a7744a846a1e237fbdb77fd7244a17461d2bb2175368fe4d0fcab2460e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a394a7744a846a1e237fbdb77fd7244a17461d2bb2175368fe4d0fcab2460e9->enter($__internal_0a394a7744a846a1e237fbdb77fd7244a17461d2bb2175368fe4d0fcab2460e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_aca1ed28a7135d56a369f57b79da71e1900682542b4edeae09ad4ff3999f2718->leave($__internal_aca1ed28a7135d56a369f57b79da71e1900682542b4edeae09ad4ff3999f2718_prof);

        
        $__internal_0a394a7744a846a1e237fbdb77fd7244a17461d2bb2175368fe4d0fcab2460e9->leave($__internal_0a394a7744a846a1e237fbdb77fd7244a17461d2bb2175368fe4d0fcab2460e9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
