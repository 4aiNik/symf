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
        $__internal_4950bd813a359d231151d1c9f22254d1b0bc80f5faf9da841350c2e3e69705ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4950bd813a359d231151d1c9f22254d1b0bc80f5faf9da841350c2e3e69705ed->enter($__internal_4950bd813a359d231151d1c9f22254d1b0bc80f5faf9da841350c2e3e69705ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_c1fbc3808dfed2334155381c3fd5408e45df3028b90a0b87b0d065663d3e4c47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1fbc3808dfed2334155381c3fd5408e45df3028b90a0b87b0d065663d3e4c47->enter($__internal_c1fbc3808dfed2334155381c3fd5408e45df3028b90a0b87b0d065663d3e4c47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_4950bd813a359d231151d1c9f22254d1b0bc80f5faf9da841350c2e3e69705ed->leave($__internal_4950bd813a359d231151d1c9f22254d1b0bc80f5faf9da841350c2e3e69705ed_prof);

        
        $__internal_c1fbc3808dfed2334155381c3fd5408e45df3028b90a0b87b0d065663d3e4c47->leave($__internal_c1fbc3808dfed2334155381c3fd5408e45df3028b90a0b87b0d065663d3e4c47_prof);

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
