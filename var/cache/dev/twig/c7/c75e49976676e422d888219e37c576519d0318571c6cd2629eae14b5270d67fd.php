<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_c4d66944aea51659b6b00039ae5048a9ac015d831b9ceab291319131e0ef243d extends Twig_Template
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
        $__internal_63dfaf9102e92566a8c82ce75394fa252ffd9328573c154a79185333fbec7bd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63dfaf9102e92566a8c82ce75394fa252ffd9328573c154a79185333fbec7bd2->enter($__internal_63dfaf9102e92566a8c82ce75394fa252ffd9328573c154a79185333fbec7bd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_ddbd9c692591bbb8c76deb7090fff80789bf60fec992074eaf414cfb320298b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddbd9c692591bbb8c76deb7090fff80789bf60fec992074eaf414cfb320298b2->enter($__internal_ddbd9c692591bbb8c76deb7090fff80789bf60fec992074eaf414cfb320298b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_63dfaf9102e92566a8c82ce75394fa252ffd9328573c154a79185333fbec7bd2->leave($__internal_63dfaf9102e92566a8c82ce75394fa252ffd9328573c154a79185333fbec7bd2_prof);

        
        $__internal_ddbd9c692591bbb8c76deb7090fff80789bf60fec992074eaf414cfb320298b2->leave($__internal_ddbd9c692591bbb8c76deb7090fff80789bf60fec992074eaf414cfb320298b2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
