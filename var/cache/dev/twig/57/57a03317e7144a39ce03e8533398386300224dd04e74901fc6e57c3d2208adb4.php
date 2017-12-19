<?php

/* form_table_layout.html.twig */
class __TwigTemplate_c5def86c74746c0ec34e153f54b6ccdddc0f4cf9b9c2adf4fef6d8954bca903a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form_table_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7038deddd21a1b46427753e2b9e72ae8a27d84a00175db0d7af51ddb9e83e23e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7038deddd21a1b46427753e2b9e72ae8a27d84a00175db0d7af51ddb9e83e23e->enter($__internal_7038deddd21a1b46427753e2b9e72ae8a27d84a00175db0d7af51ddb9e83e23e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_1be4c3e81edd5f62f6c6e4515cbea866556afb12b620a932923321b2a7defa09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1be4c3e81edd5f62f6c6e4515cbea866556afb12b620a932923321b2a7defa09->enter($__internal_1be4c3e81edd5f62f6c6e4515cbea866556afb12b620a932923321b2a7defa09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_7038deddd21a1b46427753e2b9e72ae8a27d84a00175db0d7af51ddb9e83e23e->leave($__internal_7038deddd21a1b46427753e2b9e72ae8a27d84a00175db0d7af51ddb9e83e23e_prof);

        
        $__internal_1be4c3e81edd5f62f6c6e4515cbea866556afb12b620a932923321b2a7defa09->leave($__internal_1be4c3e81edd5f62f6c6e4515cbea866556afb12b620a932923321b2a7defa09_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_addf328d8da1cbf9117daab0e6f37bf0ce3ec3a16e80c1350cbcd26eb91d45c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_addf328d8da1cbf9117daab0e6f37bf0ce3ec3a16e80c1350cbcd26eb91d45c7->enter($__internal_addf328d8da1cbf9117daab0e6f37bf0ce3ec3a16e80c1350cbcd26eb91d45c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_3306ec0577561af80f080637a6516b7f4da8da20a831b0252141091ced035e1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3306ec0577561af80f080637a6516b7f4da8da20a831b0252141091ced035e1f->enter($__internal_3306ec0577561af80f080637a6516b7f4da8da20a831b0252141091ced035e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_3306ec0577561af80f080637a6516b7f4da8da20a831b0252141091ced035e1f->leave($__internal_3306ec0577561af80f080637a6516b7f4da8da20a831b0252141091ced035e1f_prof);

        
        $__internal_addf328d8da1cbf9117daab0e6f37bf0ce3ec3a16e80c1350cbcd26eb91d45c7->leave($__internal_addf328d8da1cbf9117daab0e6f37bf0ce3ec3a16e80c1350cbcd26eb91d45c7_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_56d09a6916fe2275580f1802df074ab59f76f22b2044ea8791d1f857be798b12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56d09a6916fe2275580f1802df074ab59f76f22b2044ea8791d1f857be798b12->enter($__internal_56d09a6916fe2275580f1802df074ab59f76f22b2044ea8791d1f857be798b12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_c4c5db81095f52303c61916f22c7301ed7950076fb93a988e4d4b820548b40c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4c5db81095f52303c61916f22c7301ed7950076fb93a988e4d4b820548b40c2->enter($__internal_c4c5db81095f52303c61916f22c7301ed7950076fb93a988e4d4b820548b40c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_c4c5db81095f52303c61916f22c7301ed7950076fb93a988e4d4b820548b40c2->leave($__internal_c4c5db81095f52303c61916f22c7301ed7950076fb93a988e4d4b820548b40c2_prof);

        
        $__internal_56d09a6916fe2275580f1802df074ab59f76f22b2044ea8791d1f857be798b12->leave($__internal_56d09a6916fe2275580f1802df074ab59f76f22b2044ea8791d1f857be798b12_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_1bf9591227b3b52b4344a433c01b96a5dde4cb06bd6775eb00bbf9ae7a75c84a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bf9591227b3b52b4344a433c01b96a5dde4cb06bd6775eb00bbf9ae7a75c84a->enter($__internal_1bf9591227b3b52b4344a433c01b96a5dde4cb06bd6775eb00bbf9ae7a75c84a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_0832866fb94c949500ece1edb8d7eda0ef4479e02c1b26058dec5f3ade3bf63b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0832866fb94c949500ece1edb8d7eda0ef4479e02c1b26058dec5f3ade3bf63b->enter($__internal_0832866fb94c949500ece1edb8d7eda0ef4479e02c1b26058dec5f3ade3bf63b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_0832866fb94c949500ece1edb8d7eda0ef4479e02c1b26058dec5f3ade3bf63b->leave($__internal_0832866fb94c949500ece1edb8d7eda0ef4479e02c1b26058dec5f3ade3bf63b_prof);

        
        $__internal_1bf9591227b3b52b4344a433c01b96a5dde4cb06bd6775eb00bbf9ae7a75c84a->leave($__internal_1bf9591227b3b52b4344a433c01b96a5dde4cb06bd6775eb00bbf9ae7a75c84a_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_e20e530acd280efdf4b72ce926c4b3ddf12745180d05afe23fc3d2a974aa856c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e20e530acd280efdf4b72ce926c4b3ddf12745180d05afe23fc3d2a974aa856c->enter($__internal_e20e530acd280efdf4b72ce926c4b3ddf12745180d05afe23fc3d2a974aa856c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_a325a0450b92ba3247c8c0b7ef99376fb34fad759a362d106f1ccd8cffc2db64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a325a0450b92ba3247c8c0b7ef99376fb34fad759a362d106f1ccd8cffc2db64->enter($__internal_a325a0450b92ba3247c8c0b7ef99376fb34fad759a362d106f1ccd8cffc2db64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((twig_test_empty($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) && (twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_a325a0450b92ba3247c8c0b7ef99376fb34fad759a362d106f1ccd8cffc2db64->leave($__internal_a325a0450b92ba3247c8c0b7ef99376fb34fad759a362d106f1ccd8cffc2db64_prof);

        
        $__internal_e20e530acd280efdf4b72ce926c4b3ddf12745180d05afe23fc3d2a974aa856c->leave($__internal_e20e530acd280efdf4b72ce926c4b3ddf12745180d05afe23fc3d2a974aa856c_prof);

    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 43,  166 => 42,  164 => 41,  160 => 38,  158 => 37,  155 => 35,  153 => 34,  149 => 33,  140 => 32,  129 => 28,  127 => 27,  124 => 25,  115 => 24,  104 => 20,  102 => 19,  98 => 16,  89 => 15,  78 => 11,  76 => 10,  74 => 9,  71 => 7,  69 => 6,  66 => 4,  57 => 3,  47 => 32,  45 => 24,  43 => 15,  41 => 3,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{%- block form_row -%}
    <tr>
        <td>
            {{- form_label(form) -}}
        </td>
        <td>
            {{- form_errors(form) -}}
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock form_row -%}

{%- block button_row -%}
    <tr>
        <td></td>
        <td>
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock button_row -%}

{%- block hidden_row -%}
    <tr style=\"display: none\">
        <td colspan=\"2\">
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock hidden_row -%}

{%- block form_widget_compound -%}
    <table {{ block('widget_container_attributes') }}>
        {%- if form.parent is empty and errors|length > 0 -%}
        <tr>
            <td colspan=\"2\">
                {{- form_errors(form) -}}
            </td>
        </tr>
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </table>
{%- endblock form_widget_compound -%}
", "form_table_layout.html.twig", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/form_table_layout.html.twig");
    }
}
