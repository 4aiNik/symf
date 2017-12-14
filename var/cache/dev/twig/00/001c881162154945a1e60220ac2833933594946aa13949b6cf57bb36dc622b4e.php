<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_295cf4d1232de5526216ca5e347ec33fadab247a9776f06a354337f61068f495 extends Twig_Template
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
        $__internal_c903a561ff18625787cdc17cb3885b40df5c85f6baf0643721ed020032ceaa43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c903a561ff18625787cdc17cb3885b40df5c85f6baf0643721ed020032ceaa43->enter($__internal_c903a561ff18625787cdc17cb3885b40df5c85f6baf0643721ed020032ceaa43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_07fa033cf317edc8000837891f96c5bba65798da613805cec99549b91c4ceef8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07fa033cf317edc8000837891f96c5bba65798da613805cec99549b91c4ceef8->enter($__internal_07fa033cf317edc8000837891f96c5bba65798da613805cec99549b91c4ceef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_c903a561ff18625787cdc17cb3885b40df5c85f6baf0643721ed020032ceaa43->leave($__internal_c903a561ff18625787cdc17cb3885b40df5c85f6baf0643721ed020032ceaa43_prof);

        
        $__internal_07fa033cf317edc8000837891f96c5bba65798da613805cec99549b91c4ceef8->leave($__internal_07fa033cf317edc8000837891f96c5bba65798da613805cec99549b91c4ceef8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
