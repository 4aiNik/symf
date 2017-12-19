<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_775d9db8afc98a86adcf98226ce6e6b6996eacc4b800f5c411bd915966d82200 extends Twig_Template
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
        $__internal_41e8bcc3cc1a2ab401106b27a08fae4f2b6f94078007d5a4d4d6f514874fff14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41e8bcc3cc1a2ab401106b27a08fae4f2b6f94078007d5a4d4d6f514874fff14->enter($__internal_41e8bcc3cc1a2ab401106b27a08fae4f2b6f94078007d5a4d4d6f514874fff14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_d0c575c1c0b8ed6418770784177c3327d39a5e90fda68bd79d1c6fa70054497e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0c575c1c0b8ed6418770784177c3327d39a5e90fda68bd79d1c6fa70054497e->enter($__internal_d0c575c1c0b8ed6418770784177c3327d39a5e90fda68bd79d1c6fa70054497e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_41e8bcc3cc1a2ab401106b27a08fae4f2b6f94078007d5a4d4d6f514874fff14->leave($__internal_41e8bcc3cc1a2ab401106b27a08fae4f2b6f94078007d5a4d4d6f514874fff14_prof);

        
        $__internal_d0c575c1c0b8ed6418770784177c3327d39a5e90fda68bd79d1c6fa70054497e->leave($__internal_d0c575c1c0b8ed6418770784177c3327d39a5e90fda68bd79d1c6fa70054497e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
