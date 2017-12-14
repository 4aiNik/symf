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
        $__internal_c37858759f781ba24e6ea5f05fa52ab1bb3aeb6102fed01485c9cc9e8e8b81e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c37858759f781ba24e6ea5f05fa52ab1bb3aeb6102fed01485c9cc9e8e8b81e1->enter($__internal_c37858759f781ba24e6ea5f05fa52ab1bb3aeb6102fed01485c9cc9e8e8b81e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_e78221aae9335f6f0d7decd9d862c4ced214741f875a0c45b36b42a68fab2f00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e78221aae9335f6f0d7decd9d862c4ced214741f875a0c45b36b42a68fab2f00->enter($__internal_e78221aae9335f6f0d7decd9d862c4ced214741f875a0c45b36b42a68fab2f00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_c37858759f781ba24e6ea5f05fa52ab1bb3aeb6102fed01485c9cc9e8e8b81e1->leave($__internal_c37858759f781ba24e6ea5f05fa52ab1bb3aeb6102fed01485c9cc9e8e8b81e1_prof);

        
        $__internal_e78221aae9335f6f0d7decd9d862c4ced214741f875a0c45b36b42a68fab2f00->leave($__internal_e78221aae9335f6f0d7decd9d862c4ced214741f875a0c45b36b42a68fab2f00_prof);

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
