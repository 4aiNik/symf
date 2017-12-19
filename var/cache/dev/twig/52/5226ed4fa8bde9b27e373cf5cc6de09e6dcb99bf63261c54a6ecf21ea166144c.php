<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_2dcdedd223b97c9b17621841959cc93fc1c3e8c8571995ae49a8abacd3fa01cf extends Twig_Template
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
        $__internal_30e0ccc45b7e703456679d47465ff853c9c8baae5a590cfb0f389abaf98633be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30e0ccc45b7e703456679d47465ff853c9c8baae5a590cfb0f389abaf98633be->enter($__internal_30e0ccc45b7e703456679d47465ff853c9c8baae5a590cfb0f389abaf98633be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_3cd4fef8dbb65d90fb208de0b6c1b399ca29419588f26d0dd2b5878b55a19bea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cd4fef8dbb65d90fb208de0b6c1b399ca29419588f26d0dd2b5878b55a19bea->enter($__internal_3cd4fef8dbb65d90fb208de0b6c1b399ca29419588f26d0dd2b5878b55a19bea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_30e0ccc45b7e703456679d47465ff853c9c8baae5a590cfb0f389abaf98633be->leave($__internal_30e0ccc45b7e703456679d47465ff853c9c8baae5a590cfb0f389abaf98633be_prof);

        
        $__internal_3cd4fef8dbb65d90fb208de0b6c1b399ca29419588f26d0dd2b5878b55a19bea->leave($__internal_3cd4fef8dbb65d90fb208de0b6c1b399ca29419588f26d0dd2b5878b55a19bea_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
