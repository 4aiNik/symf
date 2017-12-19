<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_bd261761b9df5032b9aa3cb8b0af94d0d155b6dd5a02f66fcea2fc15316666b1 extends Twig_Template
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
        $__internal_ebc2070e19ded9c5beed3880f966739fbe7574d97b9001b1a113c0c1f6e97d9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebc2070e19ded9c5beed3880f966739fbe7574d97b9001b1a113c0c1f6e97d9c->enter($__internal_ebc2070e19ded9c5beed3880f966739fbe7574d97b9001b1a113c0c1f6e97d9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_80cc164b71812823b7ab6a34a5b5079f84c76e978180444738f1aa5d89c4d4bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80cc164b71812823b7ab6a34a5b5079f84c76e978180444738f1aa5d89c4d4bf->enter($__internal_80cc164b71812823b7ab6a34a5b5079f84c76e978180444738f1aa5d89c4d4bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_ebc2070e19ded9c5beed3880f966739fbe7574d97b9001b1a113c0c1f6e97d9c->leave($__internal_ebc2070e19ded9c5beed3880f966739fbe7574d97b9001b1a113c0c1f6e97d9c_prof);

        
        $__internal_80cc164b71812823b7ab6a34a5b5079f84c76e978180444738f1aa5d89c4d4bf->leave($__internal_80cc164b71812823b7ab6a34a5b5079f84c76e978180444738f1aa5d89c4d4bf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
