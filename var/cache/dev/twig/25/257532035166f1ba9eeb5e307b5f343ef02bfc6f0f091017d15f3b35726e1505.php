<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_2911652c367fa8c463fb5e758f16f977e427495afe595ef7f817423d0a9174a9 extends Twig_Template
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
        $__internal_d8d1810547e7a95c9f902584ec684098dc6956ed0fe539c8e4392c03824a59f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8d1810547e7a95c9f902584ec684098dc6956ed0fe539c8e4392c03824a59f5->enter($__internal_d8d1810547e7a95c9f902584ec684098dc6956ed0fe539c8e4392c03824a59f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_000255751581b2deca46dfc4edbd5e666bf9e48a2df5e5232c708d378436640f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_000255751581b2deca46dfc4edbd5e666bf9e48a2df5e5232c708d378436640f->enter($__internal_000255751581b2deca46dfc4edbd5e666bf9e48a2df5e5232c708d378436640f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_d8d1810547e7a95c9f902584ec684098dc6956ed0fe539c8e4392c03824a59f5->leave($__internal_d8d1810547e7a95c9f902584ec684098dc6956ed0fe539c8e4392c03824a59f5_prof);

        
        $__internal_000255751581b2deca46dfc4edbd5e666bf9e48a2df5e5232c708d378436640f->leave($__internal_000255751581b2deca46dfc4edbd5e666bf9e48a2df5e5232c708d378436640f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
