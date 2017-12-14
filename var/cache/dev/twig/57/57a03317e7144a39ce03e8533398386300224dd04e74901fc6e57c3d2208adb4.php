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
        $__internal_7fbc88ac5f0fa35384810e6e64531b0bfb0e6c4c8a7e601c65f9b6534972b79d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fbc88ac5f0fa35384810e6e64531b0bfb0e6c4c8a7e601c65f9b6534972b79d->enter($__internal_7fbc88ac5f0fa35384810e6e64531b0bfb0e6c4c8a7e601c65f9b6534972b79d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_82512ac72c0da7e57a33000cc05549ed3c252d78154466e907be270c6772e6d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82512ac72c0da7e57a33000cc05549ed3c252d78154466e907be270c6772e6d6->enter($__internal_82512ac72c0da7e57a33000cc05549ed3c252d78154466e907be270c6772e6d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_7fbc88ac5f0fa35384810e6e64531b0bfb0e6c4c8a7e601c65f9b6534972b79d->leave($__internal_7fbc88ac5f0fa35384810e6e64531b0bfb0e6c4c8a7e601c65f9b6534972b79d_prof);

        
        $__internal_82512ac72c0da7e57a33000cc05549ed3c252d78154466e907be270c6772e6d6->leave($__internal_82512ac72c0da7e57a33000cc05549ed3c252d78154466e907be270c6772e6d6_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_496912e736ff3800f3a9e365471d61468f5682a5608f787b2d3c8a93b508d6ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_496912e736ff3800f3a9e365471d61468f5682a5608f787b2d3c8a93b508d6ee->enter($__internal_496912e736ff3800f3a9e365471d61468f5682a5608f787b2d3c8a93b508d6ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_641234c192a9cf6882bfec4bf1571b38ec3ebbb1b30c04e1cd5debc1f5e26ce4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_641234c192a9cf6882bfec4bf1571b38ec3ebbb1b30c04e1cd5debc1f5e26ce4->enter($__internal_641234c192a9cf6882bfec4bf1571b38ec3ebbb1b30c04e1cd5debc1f5e26ce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_641234c192a9cf6882bfec4bf1571b38ec3ebbb1b30c04e1cd5debc1f5e26ce4->leave($__internal_641234c192a9cf6882bfec4bf1571b38ec3ebbb1b30c04e1cd5debc1f5e26ce4_prof);

        
        $__internal_496912e736ff3800f3a9e365471d61468f5682a5608f787b2d3c8a93b508d6ee->leave($__internal_496912e736ff3800f3a9e365471d61468f5682a5608f787b2d3c8a93b508d6ee_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_29946f749e74e55beb2638b3cb9d6a58af4ab3ff08c25d6a1da8933eaf6a1183 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29946f749e74e55beb2638b3cb9d6a58af4ab3ff08c25d6a1da8933eaf6a1183->enter($__internal_29946f749e74e55beb2638b3cb9d6a58af4ab3ff08c25d6a1da8933eaf6a1183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_1fd9c3968273348952600e57edf06a49592ea1b44e106ff1855c76071a00fd20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fd9c3968273348952600e57edf06a49592ea1b44e106ff1855c76071a00fd20->enter($__internal_1fd9c3968273348952600e57edf06a49592ea1b44e106ff1855c76071a00fd20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_1fd9c3968273348952600e57edf06a49592ea1b44e106ff1855c76071a00fd20->leave($__internal_1fd9c3968273348952600e57edf06a49592ea1b44e106ff1855c76071a00fd20_prof);

        
        $__internal_29946f749e74e55beb2638b3cb9d6a58af4ab3ff08c25d6a1da8933eaf6a1183->leave($__internal_29946f749e74e55beb2638b3cb9d6a58af4ab3ff08c25d6a1da8933eaf6a1183_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_9790428026187a074bc1f457e632e83b5d0165245bdd7d2843e4f59b1ee7bda5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9790428026187a074bc1f457e632e83b5d0165245bdd7d2843e4f59b1ee7bda5->enter($__internal_9790428026187a074bc1f457e632e83b5d0165245bdd7d2843e4f59b1ee7bda5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_2a48dc510a05c8d966a49555fdb60a0ad08e41fe65cc5d5823e2badbc0d062b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a48dc510a05c8d966a49555fdb60a0ad08e41fe65cc5d5823e2badbc0d062b8->enter($__internal_2a48dc510a05c8d966a49555fdb60a0ad08e41fe65cc5d5823e2badbc0d062b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_2a48dc510a05c8d966a49555fdb60a0ad08e41fe65cc5d5823e2badbc0d062b8->leave($__internal_2a48dc510a05c8d966a49555fdb60a0ad08e41fe65cc5d5823e2badbc0d062b8_prof);

        
        $__internal_9790428026187a074bc1f457e632e83b5d0165245bdd7d2843e4f59b1ee7bda5->leave($__internal_9790428026187a074bc1f457e632e83b5d0165245bdd7d2843e4f59b1ee7bda5_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_5aed6e0eecc64753c72b259617253f9bbb266d9a723aa9fba959fba54c651e5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5aed6e0eecc64753c72b259617253f9bbb266d9a723aa9fba959fba54c651e5c->enter($__internal_5aed6e0eecc64753c72b259617253f9bbb266d9a723aa9fba959fba54c651e5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_194168422ba8da9688baef6940908137aea8d801b0226f2b34f081b9b3d0fa1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_194168422ba8da9688baef6940908137aea8d801b0226f2b34f081b9b3d0fa1a->enter($__internal_194168422ba8da9688baef6940908137aea8d801b0226f2b34f081b9b3d0fa1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

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
        
        $__internal_194168422ba8da9688baef6940908137aea8d801b0226f2b34f081b9b3d0fa1a->leave($__internal_194168422ba8da9688baef6940908137aea8d801b0226f2b34f081b9b3d0fa1a_prof);

        
        $__internal_5aed6e0eecc64753c72b259617253f9bbb266d9a723aa9fba959fba54c651e5c->leave($__internal_5aed6e0eecc64753c72b259617253f9bbb266d9a723aa9fba959fba54c651e5c_prof);

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
