<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_e929bec2e6a149b6930b05325c178490343a7a918507da619e91abbae1879c4e extends Twig_Template
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
        $__internal_d058cb81e27d6a11c9b55959d0c43f03f95e3ebf125866d314202d36119be0c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d058cb81e27d6a11c9b55959d0c43f03f95e3ebf125866d314202d36119be0c1->enter($__internal_d058cb81e27d6a11c9b55959d0c43f03f95e3ebf125866d314202d36119be0c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_2ab1db4c19eb68d5538cef5240f9237af50153ed4eee180c5965d38b2109dcea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ab1db4c19eb68d5538cef5240f9237af50153ed4eee180c5965d38b2109dcea->enter($__internal_2ab1db4c19eb68d5538cef5240f9237af50153ed4eee180c5965d38b2109dcea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_d058cb81e27d6a11c9b55959d0c43f03f95e3ebf125866d314202d36119be0c1->leave($__internal_d058cb81e27d6a11c9b55959d0c43f03f95e3ebf125866d314202d36119be0c1_prof);

        
        $__internal_2ab1db4c19eb68d5538cef5240f9237af50153ed4eee180c5965d38b2109dcea->leave($__internal_2ab1db4c19eb68d5538cef5240f9237af50153ed4eee180c5965d38b2109dcea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
