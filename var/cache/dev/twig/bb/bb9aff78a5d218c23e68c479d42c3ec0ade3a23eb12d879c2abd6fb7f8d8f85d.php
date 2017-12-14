<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_d96076d79fbf313c8b8f450a4a206e0c094386269a4623ee5ef26412f5c1406c extends Twig_Template
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
        $__internal_3523e8bbb6b5eb5ec7af8b45e8c0a5fbb375bb1483cff3986a710bbe468435dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3523e8bbb6b5eb5ec7af8b45e8c0a5fbb375bb1483cff3986a710bbe468435dd->enter($__internal_3523e8bbb6b5eb5ec7af8b45e8c0a5fbb375bb1483cff3986a710bbe468435dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_a5e038ce514f2fdb3d85e54bf4feb8d6ea70fae907ffc19a260ff1085b012987 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5e038ce514f2fdb3d85e54bf4feb8d6ea70fae907ffc19a260ff1085b012987->enter($__internal_a5e038ce514f2fdb3d85e54bf4feb8d6ea70fae907ffc19a260ff1085b012987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_3523e8bbb6b5eb5ec7af8b45e8c0a5fbb375bb1483cff3986a710bbe468435dd->leave($__internal_3523e8bbb6b5eb5ec7af8b45e8c0a5fbb375bb1483cff3986a710bbe468435dd_prof);

        
        $__internal_a5e038ce514f2fdb3d85e54bf4feb8d6ea70fae907ffc19a260ff1085b012987->leave($__internal_a5e038ce514f2fdb3d85e54bf4feb8d6ea70fae907ffc19a260ff1085b012987_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
