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
        $__internal_3421e8cc0eb6fe529c8ed7c4bc12f561aea0d6237a5042a6e14a5a8da912d511 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3421e8cc0eb6fe529c8ed7c4bc12f561aea0d6237a5042a6e14a5a8da912d511->enter($__internal_3421e8cc0eb6fe529c8ed7c4bc12f561aea0d6237a5042a6e14a5a8da912d511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_4e4250c4511a341c682efa0361d3e0743192c75513b6df8e3484499d1fd91a2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e4250c4511a341c682efa0361d3e0743192c75513b6df8e3484499d1fd91a2c->enter($__internal_4e4250c4511a341c682efa0361d3e0743192c75513b6df8e3484499d1fd91a2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_3421e8cc0eb6fe529c8ed7c4bc12f561aea0d6237a5042a6e14a5a8da912d511->leave($__internal_3421e8cc0eb6fe529c8ed7c4bc12f561aea0d6237a5042a6e14a5a8da912d511_prof);

        
        $__internal_4e4250c4511a341c682efa0361d3e0743192c75513b6df8e3484499d1fd91a2c->leave($__internal_4e4250c4511a341c682efa0361d3e0743192c75513b6df8e3484499d1fd91a2c_prof);

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
