<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_c8948eab21f13e8d1a5944c9aa6a68b35a475a21ebdbde87d9199569f7b41d48 extends Twig_Template
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
        $__internal_9dd616f12d08fb76899faa3c7226ffd85665954ea981e7c931b1fac93a347caa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9dd616f12d08fb76899faa3c7226ffd85665954ea981e7c931b1fac93a347caa->enter($__internal_9dd616f12d08fb76899faa3c7226ffd85665954ea981e7c931b1fac93a347caa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_580c18804f107391df6adef1e85dd96bf717444b26f9a656db6fb8a7df420b64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_580c18804f107391df6adef1e85dd96bf717444b26f9a656db6fb8a7df420b64->enter($__internal_580c18804f107391df6adef1e85dd96bf717444b26f9a656db6fb8a7df420b64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_9dd616f12d08fb76899faa3c7226ffd85665954ea981e7c931b1fac93a347caa->leave($__internal_9dd616f12d08fb76899faa3c7226ffd85665954ea981e7c931b1fac93a347caa_prof);

        
        $__internal_580c18804f107391df6adef1e85dd96bf717444b26f9a656db6fb8a7df420b64->leave($__internal_580c18804f107391df6adef1e85dd96bf717444b26f9a656db6fb8a7df420b64_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
