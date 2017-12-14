<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_bd261761b9df5032b9aa3cb8b0af94d0d155b6dd5a02f66fcea2fc15316666b1 extends Twig_Template
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
        $__internal_5fefa38c03894918b44193d75a527b8ee9ca75e75c37d2527958d7772a100297 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fefa38c03894918b44193d75a527b8ee9ca75e75c37d2527958d7772a100297->enter($__internal_5fefa38c03894918b44193d75a527b8ee9ca75e75c37d2527958d7772a100297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_f3a42d39b24498619664c654c694ecf481864f2a5ef376ad05963d504d96d927 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3a42d39b24498619664c654c694ecf481864f2a5ef376ad05963d504d96d927->enter($__internal_f3a42d39b24498619664c654c694ecf481864f2a5ef376ad05963d504d96d927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_5fefa38c03894918b44193d75a527b8ee9ca75e75c37d2527958d7772a100297->leave($__internal_5fefa38c03894918b44193d75a527b8ee9ca75e75c37d2527958d7772a100297_prof);

        
        $__internal_f3a42d39b24498619664c654c694ecf481864f2a5ef376ad05963d504d96d927->leave($__internal_f3a42d39b24498619664c654c694ecf481864f2a5ef376ad05963d504d96d927_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
