<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_64372ec0c3594942c0d4c852b69f635b1becbc9c7e8e1115139c40e559327468 extends Twig_Template
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
        $__internal_eff4e382cfc1e8d11a224edc7bbd4eee79d4159b59da5f850b4f6794d3457e34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eff4e382cfc1e8d11a224edc7bbd4eee79d4159b59da5f850b4f6794d3457e34->enter($__internal_eff4e382cfc1e8d11a224edc7bbd4eee79d4159b59da5f850b4f6794d3457e34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_071a9f47491fa3f6112e9518c4eb12ea40bed8e5b14af8df775865e373e5b3aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_071a9f47491fa3f6112e9518c4eb12ea40bed8e5b14af8df775865e373e5b3aa->enter($__internal_071a9f47491fa3f6112e9518c4eb12ea40bed8e5b14af8df775865e373e5b3aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_eff4e382cfc1e8d11a224edc7bbd4eee79d4159b59da5f850b4f6794d3457e34->leave($__internal_eff4e382cfc1e8d11a224edc7bbd4eee79d4159b59da5f850b4f6794d3457e34_prof);

        
        $__internal_071a9f47491fa3f6112e9518c4eb12ea40bed8e5b14af8df775865e373e5b3aa->leave($__internal_071a9f47491fa3f6112e9518c4eb12ea40bed8e5b14af8df775865e373e5b3aa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
