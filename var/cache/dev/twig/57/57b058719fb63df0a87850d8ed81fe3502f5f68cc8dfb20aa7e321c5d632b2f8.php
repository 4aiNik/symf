<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_a2b079f00ea46b0ca523b1c68a813c5faf2b958c961375da2754bf79afa549a0 extends Twig_Template
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
        $__internal_822adbe165a1315095de88ef06dd0ed83a4b64876fc3153692ec83d3edeec660 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_822adbe165a1315095de88ef06dd0ed83a4b64876fc3153692ec83d3edeec660->enter($__internal_822adbe165a1315095de88ef06dd0ed83a4b64876fc3153692ec83d3edeec660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_09f5d0b2b4f7bbca785a85422152209a117dccc8310062565956019169e66c50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09f5d0b2b4f7bbca785a85422152209a117dccc8310062565956019169e66c50->enter($__internal_09f5d0b2b4f7bbca785a85422152209a117dccc8310062565956019169e66c50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_822adbe165a1315095de88ef06dd0ed83a4b64876fc3153692ec83d3edeec660->leave($__internal_822adbe165a1315095de88ef06dd0ed83a4b64876fc3153692ec83d3edeec660_prof);

        
        $__internal_09f5d0b2b4f7bbca785a85422152209a117dccc8310062565956019169e66c50->leave($__internal_09f5d0b2b4f7bbca785a85422152209a117dccc8310062565956019169e66c50_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
