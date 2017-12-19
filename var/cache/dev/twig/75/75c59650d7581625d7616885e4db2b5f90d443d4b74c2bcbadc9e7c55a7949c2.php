<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_cd665b4961e8ff189fad7ba52230790b95be514d9def5f1d7c72958f14873073 extends Twig_Template
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
        $__internal_e6d6dd50ee0e880ad139187cd7e6c87205ac4fa656c7aec1c3173d35aa487cec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6d6dd50ee0e880ad139187cd7e6c87205ac4fa656c7aec1c3173d35aa487cec->enter($__internal_e6d6dd50ee0e880ad139187cd7e6c87205ac4fa656c7aec1c3173d35aa487cec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_549295e332ca9f5b87c6d69644d767e451abe85157652ae3b148d925bb7cf704 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_549295e332ca9f5b87c6d69644d767e451abe85157652ae3b148d925bb7cf704->enter($__internal_549295e332ca9f5b87c6d69644d767e451abe85157652ae3b148d925bb7cf704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_e6d6dd50ee0e880ad139187cd7e6c87205ac4fa656c7aec1c3173d35aa487cec->leave($__internal_e6d6dd50ee0e880ad139187cd7e6c87205ac4fa656c7aec1c3173d35aa487cec_prof);

        
        $__internal_549295e332ca9f5b87c6d69644d767e451abe85157652ae3b148d925bb7cf704->leave($__internal_549295e332ca9f5b87c6d69644d767e451abe85157652ae3b148d925bb7cf704_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
