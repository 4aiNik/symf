<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_dc877f7ddd8612200a865db254dea07957d021e8dc53252cc566674c569806b6 extends Twig_Template
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
        $__internal_d2f3f146b3ade0c298f675d8f937f78aff4a356676992089720ddffda77051cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2f3f146b3ade0c298f675d8f937f78aff4a356676992089720ddffda77051cc->enter($__internal_d2f3f146b3ade0c298f675d8f937f78aff4a356676992089720ddffda77051cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_2a63bc04b1ee65b6c48c50c9b2da154a828e6b68449caec6bc14d0f873fda5a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a63bc04b1ee65b6c48c50c9b2da154a828e6b68449caec6bc14d0f873fda5a7->enter($__internal_2a63bc04b1ee65b6c48c50c9b2da154a828e6b68449caec6bc14d0f873fda5a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d2f3f146b3ade0c298f675d8f937f78aff4a356676992089720ddffda77051cc->leave($__internal_d2f3f146b3ade0c298f675d8f937f78aff4a356676992089720ddffda77051cc_prof);

        
        $__internal_2a63bc04b1ee65b6c48c50c9b2da154a828e6b68449caec6bc14d0f873fda5a7->leave($__internal_2a63bc04b1ee65b6c48c50c9b2da154a828e6b68449caec6bc14d0f873fda5a7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
