<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_cf81ec3092be0f0084facd9830a10688cc18b459082fade1c92fda720aeace07 extends Twig_Template
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
        $__internal_f9313f5994e9457b6e3832337a2e5e3ce47076a88522e1abe24bd70a8ca80ac1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9313f5994e9457b6e3832337a2e5e3ce47076a88522e1abe24bd70a8ca80ac1->enter($__internal_f9313f5994e9457b6e3832337a2e5e3ce47076a88522e1abe24bd70a8ca80ac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_e374fd79b30cfe3a9d89ea9fbc70b53cdcccce5a89a25a62be796394f34252ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e374fd79b30cfe3a9d89ea9fbc70b53cdcccce5a89a25a62be796394f34252ef->enter($__internal_e374fd79b30cfe3a9d89ea9fbc70b53cdcccce5a89a25a62be796394f34252ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_f9313f5994e9457b6e3832337a2e5e3ce47076a88522e1abe24bd70a8ca80ac1->leave($__internal_f9313f5994e9457b6e3832337a2e5e3ce47076a88522e1abe24bd70a8ca80ac1_prof);

        
        $__internal_e374fd79b30cfe3a9d89ea9fbc70b53cdcccce5a89a25a62be796394f34252ef->leave($__internal_e374fd79b30cfe3a9d89ea9fbc70b53cdcccce5a89a25a62be796394f34252ef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
