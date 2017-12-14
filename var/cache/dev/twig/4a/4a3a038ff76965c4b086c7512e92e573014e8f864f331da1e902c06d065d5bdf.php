<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_b02dfd81140eb2a24a8fb18cd6332cff44805b1d92cb2302754604add0b319f9 extends Twig_Template
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
        $__internal_c3897cc51830b4ca3a0f2bbf71c6f641af2c94d97450dbc395a59d50dc9a7e42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3897cc51830b4ca3a0f2bbf71c6f641af2c94d97450dbc395a59d50dc9a7e42->enter($__internal_c3897cc51830b4ca3a0f2bbf71c6f641af2c94d97450dbc395a59d50dc9a7e42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_a87e3f31ce32ba79582f96c08e77226118da81499baf6903cd6642af0c7c8f95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a87e3f31ce32ba79582f96c08e77226118da81499baf6903cd6642af0c7c8f95->enter($__internal_a87e3f31ce32ba79582f96c08e77226118da81499baf6903cd6642af0c7c8f95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_c3897cc51830b4ca3a0f2bbf71c6f641af2c94d97450dbc395a59d50dc9a7e42->leave($__internal_c3897cc51830b4ca3a0f2bbf71c6f641af2c94d97450dbc395a59d50dc9a7e42_prof);

        
        $__internal_a87e3f31ce32ba79582f96c08e77226118da81499baf6903cd6642af0c7c8f95->leave($__internal_a87e3f31ce32ba79582f96c08e77226118da81499baf6903cd6642af0c7c8f95_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
