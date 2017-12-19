<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_5c060836cae49a47269375db264f99d66a38d16e07ebf891f345d4cc2de7bff2 extends Twig_Template
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
        $__internal_8bd88ea9cf099e992ba76111fe79be923daeec7c4413a43fd16c44c69e04ba79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bd88ea9cf099e992ba76111fe79be923daeec7c4413a43fd16c44c69e04ba79->enter($__internal_8bd88ea9cf099e992ba76111fe79be923daeec7c4413a43fd16c44c69e04ba79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_4df32870d3a09da5e96d9f3bc6042406422a99be8413b3f817176f13df597bd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4df32870d3a09da5e96d9f3bc6042406422a99be8413b3f817176f13df597bd4->enter($__internal_4df32870d3a09da5e96d9f3bc6042406422a99be8413b3f817176f13df597bd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_8bd88ea9cf099e992ba76111fe79be923daeec7c4413a43fd16c44c69e04ba79->leave($__internal_8bd88ea9cf099e992ba76111fe79be923daeec7c4413a43fd16c44c69e04ba79_prof);

        
        $__internal_4df32870d3a09da5e96d9f3bc6042406422a99be8413b3f817176f13df597bd4->leave($__internal_4df32870d3a09da5e96d9f3bc6042406422a99be8413b3f817176f13df597bd4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
