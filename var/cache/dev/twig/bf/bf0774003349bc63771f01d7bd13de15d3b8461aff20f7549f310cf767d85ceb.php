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
        $__internal_ca21080be3992c4645e1456e307c4225b409e81c720e4d763f2346ec90d482df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca21080be3992c4645e1456e307c4225b409e81c720e4d763f2346ec90d482df->enter($__internal_ca21080be3992c4645e1456e307c4225b409e81c720e4d763f2346ec90d482df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_aa46ee86764e65a6eeed8963d9bbb39bf240f9102d619f5847524cb2ea6e0aba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa46ee86764e65a6eeed8963d9bbb39bf240f9102d619f5847524cb2ea6e0aba->enter($__internal_aa46ee86764e65a6eeed8963d9bbb39bf240f9102d619f5847524cb2ea6e0aba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_ca21080be3992c4645e1456e307c4225b409e81c720e4d763f2346ec90d482df->leave($__internal_ca21080be3992c4645e1456e307c4225b409e81c720e4d763f2346ec90d482df_prof);

        
        $__internal_aa46ee86764e65a6eeed8963d9bbb39bf240f9102d619f5847524cb2ea6e0aba->leave($__internal_aa46ee86764e65a6eeed8963d9bbb39bf240f9102d619f5847524cb2ea6e0aba_prof);

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
