<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_b790b556d58827420fdcc2bef1b5d2eca9c8fb56c50a3e391e0f0475be3dd7f4 extends Twig_Template
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
        $__internal_0f3504e38523bd7753e762cf2e88ea315d85fb4bb1ad56568f864fbd18f5b7c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f3504e38523bd7753e762cf2e88ea315d85fb4bb1ad56568f864fbd18f5b7c8->enter($__internal_0f3504e38523bd7753e762cf2e88ea315d85fb4bb1ad56568f864fbd18f5b7c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_a06d1d5e9cdc4cdd8cd9b5e1ae1ff5a8449880d22c1c7c196d9ba3ae2ae4ec4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a06d1d5e9cdc4cdd8cd9b5e1ae1ff5a8449880d22c1c7c196d9ba3ae2ae4ec4f->enter($__internal_a06d1d5e9cdc4cdd8cd9b5e1ae1ff5a8449880d22c1c7c196d9ba3ae2ae4ec4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_0f3504e38523bd7753e762cf2e88ea315d85fb4bb1ad56568f864fbd18f5b7c8->leave($__internal_0f3504e38523bd7753e762cf2e88ea315d85fb4bb1ad56568f864fbd18f5b7c8_prof);

        
        $__internal_a06d1d5e9cdc4cdd8cd9b5e1ae1ff5a8449880d22c1c7c196d9ba3ae2ae4ec4f->leave($__internal_a06d1d5e9cdc4cdd8cd9b5e1ae1ff5a8449880d22c1c7c196d9ba3ae2ae4ec4f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
