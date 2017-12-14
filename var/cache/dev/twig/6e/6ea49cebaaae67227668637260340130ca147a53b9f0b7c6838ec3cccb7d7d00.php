<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_f52bdca62a5473a7fd94aa25b31fb4737d0bb6c811af47339e502ba9f8d44684 extends Twig_Template
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
        $__internal_21b54e6ffd6d26161cfb5048df63764929844ac2492c29f8c5f9f3709a6a42e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21b54e6ffd6d26161cfb5048df63764929844ac2492c29f8c5f9f3709a6a42e8->enter($__internal_21b54e6ffd6d26161cfb5048df63764929844ac2492c29f8c5f9f3709a6a42e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_c5416c9610b8b2e2a8ad703f2f793b44e4e2aba5950cfcd92e450fbfd0d2ba27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5416c9610b8b2e2a8ad703f2f793b44e4e2aba5950cfcd92e450fbfd0d2ba27->enter($__internal_c5416c9610b8b2e2a8ad703f2f793b44e4e2aba5950cfcd92e450fbfd0d2ba27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_21b54e6ffd6d26161cfb5048df63764929844ac2492c29f8c5f9f3709a6a42e8->leave($__internal_21b54e6ffd6d26161cfb5048df63764929844ac2492c29f8c5f9f3709a6a42e8_prof);

        
        $__internal_c5416c9610b8b2e2a8ad703f2f793b44e4e2aba5950cfcd92e450fbfd0d2ba27->leave($__internal_c5416c9610b8b2e2a8ad703f2f793b44e4e2aba5950cfcd92e450fbfd0d2ba27_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
