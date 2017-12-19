<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_152be14bf245dde0993fee44ab57b03b6f71fae4ee64224036a160eba6407aa6 extends Twig_Template
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
        $__internal_9ca8b313b37047571d2959fcb5ee3e6ae2aecc1afe81a3f17cbd63a39f017e3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ca8b313b37047571d2959fcb5ee3e6ae2aecc1afe81a3f17cbd63a39f017e3b->enter($__internal_9ca8b313b37047571d2959fcb5ee3e6ae2aecc1afe81a3f17cbd63a39f017e3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_4cce4f98ce7debf566c797d696c91f4dbdd0f3ce6bad4256b5e20eb81c193575 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cce4f98ce7debf566c797d696c91f4dbdd0f3ce6bad4256b5e20eb81c193575->enter($__internal_4cce4f98ce7debf566c797d696c91f4dbdd0f3ce6bad4256b5e20eb81c193575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_9ca8b313b37047571d2959fcb5ee3e6ae2aecc1afe81a3f17cbd63a39f017e3b->leave($__internal_9ca8b313b37047571d2959fcb5ee3e6ae2aecc1afe81a3f17cbd63a39f017e3b_prof);

        
        $__internal_4cce4f98ce7debf566c797d696c91f4dbdd0f3ce6bad4256b5e20eb81c193575->leave($__internal_4cce4f98ce7debf566c797d696c91f4dbdd0f3ce6bad4256b5e20eb81c193575_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
