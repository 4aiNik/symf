<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_589da9bf4712d58ce229ce2f01c52a7859f00baa0fb140d7796a05f5af2b0683 extends Twig_Template
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
        $__internal_1e8274a6c0eb226c10b159c1c0f97d5a122a6ac381b07dba0848851095314467 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e8274a6c0eb226c10b159c1c0f97d5a122a6ac381b07dba0848851095314467->enter($__internal_1e8274a6c0eb226c10b159c1c0f97d5a122a6ac381b07dba0848851095314467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_bcff4a57b765bddd97897f879f5398dbabc5a95c24fbe825ba4e3de5aceab90b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcff4a57b765bddd97897f879f5398dbabc5a95c24fbe825ba4e3de5aceab90b->enter($__internal_bcff4a57b765bddd97897f879f5398dbabc5a95c24fbe825ba4e3de5aceab90b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_1e8274a6c0eb226c10b159c1c0f97d5a122a6ac381b07dba0848851095314467->leave($__internal_1e8274a6c0eb226c10b159c1c0f97d5a122a6ac381b07dba0848851095314467_prof);

        
        $__internal_bcff4a57b765bddd97897f879f5398dbabc5a95c24fbe825ba4e3de5aceab90b->leave($__internal_bcff4a57b765bddd97897f879f5398dbabc5a95c24fbe825ba4e3de5aceab90b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
