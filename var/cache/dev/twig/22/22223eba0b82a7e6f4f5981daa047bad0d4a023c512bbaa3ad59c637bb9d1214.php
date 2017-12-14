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
        $__internal_597b4d9b92d56586b407c74ab89b3d6c862bbd0df7a82df85086d8a22dd626cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_597b4d9b92d56586b407c74ab89b3d6c862bbd0df7a82df85086d8a22dd626cd->enter($__internal_597b4d9b92d56586b407c74ab89b3d6c862bbd0df7a82df85086d8a22dd626cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_3cd34cc0e1c35cbf87c2fdf0bfaef748ad8d58e5b056f9f4908b09f0fc9123cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cd34cc0e1c35cbf87c2fdf0bfaef748ad8d58e5b056f9f4908b09f0fc9123cd->enter($__internal_3cd34cc0e1c35cbf87c2fdf0bfaef748ad8d58e5b056f9f4908b09f0fc9123cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_597b4d9b92d56586b407c74ab89b3d6c862bbd0df7a82df85086d8a22dd626cd->leave($__internal_597b4d9b92d56586b407c74ab89b3d6c862bbd0df7a82df85086d8a22dd626cd_prof);

        
        $__internal_3cd34cc0e1c35cbf87c2fdf0bfaef748ad8d58e5b056f9f4908b09f0fc9123cd->leave($__internal_3cd34cc0e1c35cbf87c2fdf0bfaef748ad8d58e5b056f9f4908b09f0fc9123cd_prof);

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
