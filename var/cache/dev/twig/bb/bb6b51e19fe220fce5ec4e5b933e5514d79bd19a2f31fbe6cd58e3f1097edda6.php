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
        $__internal_a29eb4fb7ff5f3c9f0bb8eeea2c9b15efa42027281dc7b4a3a14ab2b1cca49aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a29eb4fb7ff5f3c9f0bb8eeea2c9b15efa42027281dc7b4a3a14ab2b1cca49aa->enter($__internal_a29eb4fb7ff5f3c9f0bb8eeea2c9b15efa42027281dc7b4a3a14ab2b1cca49aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_73431c60df407b1984cfab32b02d458fce940bc032bdb0b47496dface8648f0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73431c60df407b1984cfab32b02d458fce940bc032bdb0b47496dface8648f0e->enter($__internal_73431c60df407b1984cfab32b02d458fce940bc032bdb0b47496dface8648f0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_a29eb4fb7ff5f3c9f0bb8eeea2c9b15efa42027281dc7b4a3a14ab2b1cca49aa->leave($__internal_a29eb4fb7ff5f3c9f0bb8eeea2c9b15efa42027281dc7b4a3a14ab2b1cca49aa_prof);

        
        $__internal_73431c60df407b1984cfab32b02d458fce940bc032bdb0b47496dface8648f0e->leave($__internal_73431c60df407b1984cfab32b02d458fce940bc032bdb0b47496dface8648f0e_prof);

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
