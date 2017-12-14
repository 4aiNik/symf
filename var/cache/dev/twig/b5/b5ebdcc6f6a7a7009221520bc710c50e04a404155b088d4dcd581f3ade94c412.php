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
        $__internal_b2a2109a437303fbe18938b0dba8fbe1446de15c8197fbaa8753c7c877ea55ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2a2109a437303fbe18938b0dba8fbe1446de15c8197fbaa8753c7c877ea55ea->enter($__internal_b2a2109a437303fbe18938b0dba8fbe1446de15c8197fbaa8753c7c877ea55ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_3e1386a03e4eaa8d4b79dbb88ad94db1bbc6e76fd6deeaaeb9bcd0ce3dee7eb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e1386a03e4eaa8d4b79dbb88ad94db1bbc6e76fd6deeaaeb9bcd0ce3dee7eb0->enter($__internal_3e1386a03e4eaa8d4b79dbb88ad94db1bbc6e76fd6deeaaeb9bcd0ce3dee7eb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_b2a2109a437303fbe18938b0dba8fbe1446de15c8197fbaa8753c7c877ea55ea->leave($__internal_b2a2109a437303fbe18938b0dba8fbe1446de15c8197fbaa8753c7c877ea55ea_prof);

        
        $__internal_3e1386a03e4eaa8d4b79dbb88ad94db1bbc6e76fd6deeaaeb9bcd0ce3dee7eb0->leave($__internal_3e1386a03e4eaa8d4b79dbb88ad94db1bbc6e76fd6deeaaeb9bcd0ce3dee7eb0_prof);

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
