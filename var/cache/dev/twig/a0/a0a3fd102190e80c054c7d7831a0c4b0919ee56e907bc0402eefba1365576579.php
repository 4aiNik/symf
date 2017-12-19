<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_42c2d72bbd734b582b3b64ecd5fe8ba889ec8845c3c70bd605f68e03ed8a4238 extends Twig_Template
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
        $__internal_beaa46aa63e7fc4e5415e40df5395200808af69bebcab385cdc1106611c4eddb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_beaa46aa63e7fc4e5415e40df5395200808af69bebcab385cdc1106611c4eddb->enter($__internal_beaa46aa63e7fc4e5415e40df5395200808af69bebcab385cdc1106611c4eddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_bb1c0f716212759139a3bb8af21fda9f0574b501903b1c3d2c0df45b5d021dda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb1c0f716212759139a3bb8af21fda9f0574b501903b1c3d2c0df45b5d021dda->enter($__internal_bb1c0f716212759139a3bb8af21fda9f0574b501903b1c3d2c0df45b5d021dda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_beaa46aa63e7fc4e5415e40df5395200808af69bebcab385cdc1106611c4eddb->leave($__internal_beaa46aa63e7fc4e5415e40df5395200808af69bebcab385cdc1106611c4eddb_prof);

        
        $__internal_bb1c0f716212759139a3bb8af21fda9f0574b501903b1c3d2c0df45b5d021dda->leave($__internal_bb1c0f716212759139a3bb8af21fda9f0574b501903b1c3d2c0df45b5d021dda_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
