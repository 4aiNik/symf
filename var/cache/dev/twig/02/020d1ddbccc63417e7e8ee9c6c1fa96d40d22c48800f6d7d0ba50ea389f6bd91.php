<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_682a6f2685a1f9a57c3913a162d4f951d6bb029b0554f223078fa00bc8307222 extends Twig_Template
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
        $__internal_ffa22faf14c1185026a4fc53035dd5616b58bdd7681422034153ea1f5e0140d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffa22faf14c1185026a4fc53035dd5616b58bdd7681422034153ea1f5e0140d8->enter($__internal_ffa22faf14c1185026a4fc53035dd5616b58bdd7681422034153ea1f5e0140d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_cc4628dddaa9c9aded33d7876c188c3d40e3d2615651848e8c04f13cd8f2e1bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc4628dddaa9c9aded33d7876c188c3d40e3d2615651848e8c04f13cd8f2e1bf->enter($__internal_cc4628dddaa9c9aded33d7876c188c3d40e3d2615651848e8c04f13cd8f2e1bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_ffa22faf14c1185026a4fc53035dd5616b58bdd7681422034153ea1f5e0140d8->leave($__internal_ffa22faf14c1185026a4fc53035dd5616b58bdd7681422034153ea1f5e0140d8_prof);

        
        $__internal_cc4628dddaa9c9aded33d7876c188c3d40e3d2615651848e8c04f13cd8f2e1bf->leave($__internal_cc4628dddaa9c9aded33d7876c188c3d40e3d2615651848e8c04f13cd8f2e1bf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
