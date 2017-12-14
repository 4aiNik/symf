<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_fd9884ea6e69926d08e06aa018a95bc85a683fa90791ffcd74a6d168addbfc0c extends Twig_Template
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
        $__internal_8dd8112d2eb636fd8247c90e76cd7509e2c80e0effcbd7dfd63a50ab849bb8c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8dd8112d2eb636fd8247c90e76cd7509e2c80e0effcbd7dfd63a50ab849bb8c8->enter($__internal_8dd8112d2eb636fd8247c90e76cd7509e2c80e0effcbd7dfd63a50ab849bb8c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_f14c16233da228c546899c9f0297a31c622fc5d401a1e62c6e6caa7865c6dbce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f14c16233da228c546899c9f0297a31c622fc5d401a1e62c6e6caa7865c6dbce->enter($__internal_f14c16233da228c546899c9f0297a31c622fc5d401a1e62c6e6caa7865c6dbce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_8dd8112d2eb636fd8247c90e76cd7509e2c80e0effcbd7dfd63a50ab849bb8c8->leave($__internal_8dd8112d2eb636fd8247c90e76cd7509e2c80e0effcbd7dfd63a50ab849bb8c8_prof);

        
        $__internal_f14c16233da228c546899c9f0297a31c622fc5d401a1e62c6e6caa7865c6dbce->leave($__internal_f14c16233da228c546899c9f0297a31c622fc5d401a1e62c6e6caa7865c6dbce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
