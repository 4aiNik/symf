<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_6617c35e4b163bb5fa72e904f99f2d36ff92926e7d3b72951b8daaeb4b58cb94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_945a0e835950403b38ee872a81006d74ae9c7e4ac78be6245011dc6affa31f5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_945a0e835950403b38ee872a81006d74ae9c7e4ac78be6245011dc6affa31f5d->enter($__internal_945a0e835950403b38ee872a81006d74ae9c7e4ac78be6245011dc6affa31f5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_2dccb28b865c05526cf9df779e1a236b11043c23f05fad286d7f0ee6a5b296b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dccb28b865c05526cf9df779e1a236b11043c23f05fad286d7f0ee6a5b296b7->enter($__internal_2dccb28b865c05526cf9df779e1a236b11043c23f05fad286d7f0ee6a5b296b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('date_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('time_widget', $context, $blocks);
        // line 90
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 128
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 132
        echo "
";
        // line 133
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 152
        echo "
";
        // line 153
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 163
        echo "
";
        // line 164
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 174
        echo "
";
        // line 176
        echo "
";
        // line 177
        $this->displayBlock('form_label', $context, $blocks);
        // line 181
        echo "
";
        // line 182
        $this->displayBlock('choice_label', $context, $blocks);
        // line 187
        echo "
";
        // line 188
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 193
        echo "
";
        // line 194
        $this->displayBlock('radio_label', $context, $blocks);
        // line 199
        echo "
";
        // line 200
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 224
        echo "
";
        // line 226
        echo "
";
        // line 227
        $this->displayBlock('form_row', $context, $blocks);
        // line 234
        echo "
";
        // line 235
        $this->displayBlock('button_row', $context, $blocks);
        // line 240
        echo "
";
        // line 241
        $this->displayBlock('choice_row', $context, $blocks);
        // line 245
        echo "
";
        // line 246
        $this->displayBlock('date_row', $context, $blocks);
        // line 250
        echo "
";
        // line 251
        $this->displayBlock('time_row', $context, $blocks);
        // line 255
        echo "
";
        // line 256
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 260
        echo "
";
        // line 261
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 267
        echo "
";
        // line 268
        $this->displayBlock('radio_row', $context, $blocks);
        // line 274
        echo "
";
        // line 276
        echo "
";
        // line 277
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_945a0e835950403b38ee872a81006d74ae9c7e4ac78be6245011dc6affa31f5d->leave($__internal_945a0e835950403b38ee872a81006d74ae9c7e4ac78be6245011dc6affa31f5d_prof);

        
        $__internal_2dccb28b865c05526cf9df779e1a236b11043c23f05fad286d7f0ee6a5b296b7->leave($__internal_2dccb28b865c05526cf9df779e1a236b11043c23f05fad286d7f0ee6a5b296b7_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_2125e2800ad544981a7788135ce020f9d7ae4ef5b61027f6881be3cfe21e393b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2125e2800ad544981a7788135ce020f9d7ae4ef5b61027f6881be3cfe21e393b->enter($__internal_2125e2800ad544981a7788135ce020f9d7ae4ef5b61027f6881be3cfe21e393b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_433a71b2ed6c22512913597fb005d40a840f709e9c8e23b5bb39cbca0b1d5ce4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_433a71b2ed6c22512913597fb005d40a840f709e9c8e23b5bb39cbca0b1d5ce4->enter($__internal_433a71b2ed6c22512913597fb005d40a840f709e9c8e23b5bb39cbca0b1d5ce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_433a71b2ed6c22512913597fb005d40a840f709e9c8e23b5bb39cbca0b1d5ce4->leave($__internal_433a71b2ed6c22512913597fb005d40a840f709e9c8e23b5bb39cbca0b1d5ce4_prof);

        
        $__internal_2125e2800ad544981a7788135ce020f9d7ae4ef5b61027f6881be3cfe21e393b->leave($__internal_2125e2800ad544981a7788135ce020f9d7ae4ef5b61027f6881be3cfe21e393b_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_f49724bda00d8de45776b905413383a022de251425377a4f9e4d94457cf5c490 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f49724bda00d8de45776b905413383a022de251425377a4f9e4d94457cf5c490->enter($__internal_f49724bda00d8de45776b905413383a022de251425377a4f9e4d94457cf5c490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_99802be4191e3dbdc026d4c7978af87d1106ce440b625b77a68e576cc4b2201f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99802be4191e3dbdc026d4c7978af87d1106ce440b625b77a68e576cc4b2201f->enter($__internal_99802be4191e3dbdc026d4c7978af87d1106ce440b625b77a68e576cc4b2201f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_99802be4191e3dbdc026d4c7978af87d1106ce440b625b77a68e576cc4b2201f->leave($__internal_99802be4191e3dbdc026d4c7978af87d1106ce440b625b77a68e576cc4b2201f_prof);

        
        $__internal_f49724bda00d8de45776b905413383a022de251425377a4f9e4d94457cf5c490->leave($__internal_f49724bda00d8de45776b905413383a022de251425377a4f9e4d94457cf5c490_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_9f1e9031521131ca112fa6f467d06cf54b1a21fbdf5075ea617a1abefcad7b8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f1e9031521131ca112fa6f467d06cf54b1a21fbdf5075ea617a1abefcad7b8a->enter($__internal_9f1e9031521131ca112fa6f467d06cf54b1a21fbdf5075ea617a1abefcad7b8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_4c99403f73ee7b258d7b6ff25c55ed59f90119c67ab9436159fac3733fae5d3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c99403f73ee7b258d7b6ff25c55ed59f90119c67ab9436159fac3733fae5d3c->enter($__internal_4c99403f73ee7b258d7b6ff25c55ed59f90119c67ab9436159fac3733fae5d3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_4c99403f73ee7b258d7b6ff25c55ed59f90119c67ab9436159fac3733fae5d3c->leave($__internal_4c99403f73ee7b258d7b6ff25c55ed59f90119c67ab9436159fac3733fae5d3c_prof);

        
        $__internal_9f1e9031521131ca112fa6f467d06cf54b1a21fbdf5075ea617a1abefcad7b8a->leave($__internal_9f1e9031521131ca112fa6f467d06cf54b1a21fbdf5075ea617a1abefcad7b8a_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_325c502726b06e73876efc74a90c285064590fbec70952a22fac65f00014d597 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_325c502726b06e73876efc74a90c285064590fbec70952a22fac65f00014d597->enter($__internal_325c502726b06e73876efc74a90c285064590fbec70952a22fac65f00014d597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_53ceccbd6f200ae6a9b1cd1cc50746905de489abe233af7cd2ace75af4322a93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53ceccbd6f200ae6a9b1cd1cc50746905de489abe233af7cd2ace75af4322a93->enter($__internal_53ceccbd6f200ae6a9b1cd1cc50746905de489abe233af7cd2ace75af4322a93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_b738a601266e6034b805c53cc1b338ef989bf53409f127f23430654126672b33 = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_0ba0e8c81df2ad9110b5d4813bdd0f1a539816cee7cf7fc320f922ca4f1165ae = "{{") && ('' === $__internal_0ba0e8c81df2ad9110b5d4813bdd0f1a539816cee7cf7fc320f922ca4f1165ae || 0 === strpos($__internal_b738a601266e6034b805c53cc1b338ef989bf53409f127f23430654126672b33, $__internal_0ba0e8c81df2ad9110b5d4813bdd0f1a539816cee7cf7fc320f922ca4f1165ae)));
        // line 25
        echo "        ";
        if ( !($context["append"] ?? $this->getContext($context, "append"))) {
            // line 26
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 28
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 29
        if (($context["append"] ?? $this->getContext($context, "append"))) {
            // line 30
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 32
        echo "    </div>";
        
        $__internal_53ceccbd6f200ae6a9b1cd1cc50746905de489abe233af7cd2ace75af4322a93->leave($__internal_53ceccbd6f200ae6a9b1cd1cc50746905de489abe233af7cd2ace75af4322a93_prof);

        
        $__internal_325c502726b06e73876efc74a90c285064590fbec70952a22fac65f00014d597->leave($__internal_325c502726b06e73876efc74a90c285064590fbec70952a22fac65f00014d597_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_3520d106026dcc8f2c860b1d9986618415700ddbe4d38e67320b641082f736a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3520d106026dcc8f2c860b1d9986618415700ddbe4d38e67320b641082f736a3->enter($__internal_3520d106026dcc8f2c860b1d9986618415700ddbe4d38e67320b641082f736a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_35c7c59d6d2e278e3a3816c18b9d6b1b5bdb3f69aef538833fc6c694586b5c9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35c7c59d6d2e278e3a3816c18b9d6b1b5bdb3f69aef538833fc6c694586b5c9a->enter($__internal_35c7c59d6d2e278e3a3816c18b9d6b1b5bdb3f69aef538833fc6c694586b5c9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_35c7c59d6d2e278e3a3816c18b9d6b1b5bdb3f69aef538833fc6c694586b5c9a->leave($__internal_35c7c59d6d2e278e3a3816c18b9d6b1b5bdb3f69aef538833fc6c694586b5c9a_prof);

        
        $__internal_3520d106026dcc8f2c860b1d9986618415700ddbe4d38e67320b641082f736a3->leave($__internal_3520d106026dcc8f2c860b1d9986618415700ddbe4d38e67320b641082f736a3_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_1857bb58aaae318835d1de8d9a51d0a97109be7fc987478c5654c088271eca2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1857bb58aaae318835d1de8d9a51d0a97109be7fc987478c5654c088271eca2f->enter($__internal_1857bb58aaae318835d1de8d9a51d0a97109be7fc987478c5654c088271eca2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_a5500f7c7777e2b1047c8848b296e9087a0dbd8ad273c528404994ea1ef64928 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5500f7c7777e2b1047c8848b296e9087a0dbd8ad273c528404994ea1ef64928->enter($__internal_a5500f7c7777e2b1047c8848b296e9087a0dbd8ad273c528404994ea1ef64928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 43
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 44
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 46
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 47
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 48
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 49
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 50
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 51
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 52
            echo "</div>";
        }
        
        $__internal_a5500f7c7777e2b1047c8848b296e9087a0dbd8ad273c528404994ea1ef64928->leave($__internal_a5500f7c7777e2b1047c8848b296e9087a0dbd8ad273c528404994ea1ef64928_prof);

        
        $__internal_1857bb58aaae318835d1de8d9a51d0a97109be7fc987478c5654c088271eca2f->leave($__internal_1857bb58aaae318835d1de8d9a51d0a97109be7fc987478c5654c088271eca2f_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_136415d6b36a473b8021e821118aaf868e65c0e7ae7e8eb4b683feae325d85ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_136415d6b36a473b8021e821118aaf868e65c0e7ae7e8eb4b683feae325d85ea->enter($__internal_136415d6b36a473b8021e821118aaf868e65c0e7ae7e8eb4b683feae325d85ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_cc4e58b6f0ecad6c666b85cba644807637d98516da044953b274f26ba20681ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc4e58b6f0ecad6c666b85cba644807637d98516da044953b274f26ba20681ab->enter($__internal_cc4e58b6f0ecad6c666b85cba644807637d98516da044953b274f26ba20681ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 57
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 58
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 60
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 61
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 62
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 64
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 65
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 66
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 67
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 69
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 70
                echo "</div>";
            }
        }
        
        $__internal_cc4e58b6f0ecad6c666b85cba644807637d98516da044953b274f26ba20681ab->leave($__internal_cc4e58b6f0ecad6c666b85cba644807637d98516da044953b274f26ba20681ab_prof);

        
        $__internal_136415d6b36a473b8021e821118aaf868e65c0e7ae7e8eb4b683feae325d85ea->leave($__internal_136415d6b36a473b8021e821118aaf868e65c0e7ae7e8eb4b683feae325d85ea_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_e4eb321a7a381cbbfe1b43f123976340f8ec91d7f9eecfcdcf50dbb1c3537358 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4eb321a7a381cbbfe1b43f123976340f8ec91d7f9eecfcdcf50dbb1c3537358->enter($__internal_e4eb321a7a381cbbfe1b43f123976340f8ec91d7f9eecfcdcf50dbb1c3537358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_bd1252f5f859c0ad604fe64fcd918c5a7191d399bdc04152f79c01241d756d95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd1252f5f859c0ad604fe64fcd918c5a7191d399bdc04152f79c01241d756d95->enter($__internal_bd1252f5f859c0ad604fe64fcd918c5a7191d399bdc04152f79c01241d756d95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 76
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 77
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 79
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 80
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 81
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 83
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 84
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 85
                echo "</div>";
            }
        }
        
        $__internal_bd1252f5f859c0ad604fe64fcd918c5a7191d399bdc04152f79c01241d756d95->leave($__internal_bd1252f5f859c0ad604fe64fcd918c5a7191d399bdc04152f79c01241d756d95_prof);

        
        $__internal_e4eb321a7a381cbbfe1b43f123976340f8ec91d7f9eecfcdcf50dbb1c3537358->leave($__internal_e4eb321a7a381cbbfe1b43f123976340f8ec91d7f9eecfcdcf50dbb1c3537358_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_60d2c3b50ec396a25532678288e33994d2792c71f3963e7cea5ec5cd7de95539 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60d2c3b50ec396a25532678288e33994d2792c71f3963e7cea5ec5cd7de95539->enter($__internal_60d2c3b50ec396a25532678288e33994d2792c71f3963e7cea5ec5cd7de95539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_a6b202f6441cccc50059212c615caed75467ef8b221b0315125d73b1bab24762 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6b202f6441cccc50059212c615caed75467ef8b221b0315125d73b1bab24762->enter($__internal_a6b202f6441cccc50059212c615caed75467ef8b221b0315125d73b1bab24762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 91
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 95
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 96
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 97
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 98
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter(($context["table_class"] ?? $this->getContext($context, "table_class")), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 101
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'label');
                echo "</th>";
            }
            // line 102
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'label');
                echo "</th>";
            }
            // line 103
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 104
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'label');
                echo "</th>";
            }
            // line 105
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'label');
                echo "</th>";
            }
            // line 106
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 107
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 108
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 112
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'widget');
                echo "</td>";
            }
            // line 113
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'widget');
                echo "</td>";
            }
            // line 114
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 115
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'widget');
                echo "</td>";
            }
            // line 116
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 117
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 118
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 119
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 123
            if (($context["with_invert"] ?? $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 124
            echo "</div>";
        }
        
        $__internal_a6b202f6441cccc50059212c615caed75467ef8b221b0315125d73b1bab24762->leave($__internal_a6b202f6441cccc50059212c615caed75467ef8b221b0315125d73b1bab24762_prof);

        
        $__internal_60d2c3b50ec396a25532678288e33994d2792c71f3963e7cea5ec5cd7de95539->leave($__internal_60d2c3b50ec396a25532678288e33994d2792c71f3963e7cea5ec5cd7de95539_prof);

    }

    // line 128
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_4c371346d58657bb9cc138798841b55d795be241bc7dc5d74ba54aef7231aa6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c371346d58657bb9cc138798841b55d795be241bc7dc5d74ba54aef7231aa6b->enter($__internal_4c371346d58657bb9cc138798841b55d795be241bc7dc5d74ba54aef7231aa6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_ec3bf1019377b99c5434ab628397fa2b656da4dc5b412d3812ba2aad987248bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec3bf1019377b99c5434ab628397fa2b656da4dc5b412d3812ba2aad987248bc->enter($__internal_ec3bf1019377b99c5434ab628397fa2b656da4dc5b412d3812ba2aad987248bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 129
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 130
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_ec3bf1019377b99c5434ab628397fa2b656da4dc5b412d3812ba2aad987248bc->leave($__internal_ec3bf1019377b99c5434ab628397fa2b656da4dc5b412d3812ba2aad987248bc_prof);

        
        $__internal_4c371346d58657bb9cc138798841b55d795be241bc7dc5d74ba54aef7231aa6b->leave($__internal_4c371346d58657bb9cc138798841b55d795be241bc7dc5d74ba54aef7231aa6b_prof);

    }

    // line 133
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_fb6dba717eb043b5efc7cfc8346fa122bc42d27a8d5e165f8ff92728b70c427f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb6dba717eb043b5efc7cfc8346fa122bc42d27a8d5e165f8ff92728b70c427f->enter($__internal_fb6dba717eb043b5efc7cfc8346fa122bc42d27a8d5e165f8ff92728b70c427f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_3cf07443cdb6e049e9a96000827340a9216342f4b056108767b791e1e56817ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cf07443cdb6e049e9a96000827340a9216342f4b056108767b791e1e56817ca->enter($__internal_3cf07443cdb6e049e9a96000827340a9216342f4b056108767b791e1e56817ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 134
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 136
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 137
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 138
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 142
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 143
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 144
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 145
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 146
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "</div>";
        }
        
        $__internal_3cf07443cdb6e049e9a96000827340a9216342f4b056108767b791e1e56817ca->leave($__internal_3cf07443cdb6e049e9a96000827340a9216342f4b056108767b791e1e56817ca_prof);

        
        $__internal_fb6dba717eb043b5efc7cfc8346fa122bc42d27a8d5e165f8ff92728b70c427f->leave($__internal_fb6dba717eb043b5efc7cfc8346fa122bc42d27a8d5e165f8ff92728b70c427f_prof);

    }

    // line 153
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_c99cea2f086fb7e5a450849109167dfd9cbf3d9fa1d3fd7b9d5d1d749eaf741f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c99cea2f086fb7e5a450849109167dfd9cbf3d9fa1d3fd7b9d5d1d749eaf741f->enter($__internal_c99cea2f086fb7e5a450849109167dfd9cbf3d9fa1d3fd7b9d5d1d749eaf741f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_d2bf914f8c18057c869ea33f72b85a03700015860143754c94dab449539d1edb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2bf914f8c18057c869ea33f72b85a03700015860143754c94dab449539d1edb->enter($__internal_d2bf914f8c18057c869ea33f72b85a03700015860143754c94dab449539d1edb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 154
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 155
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 156
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 158
            echo "<div class=\"checkbox\">";
            // line 159
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 160
            echo "</div>";
        }
        
        $__internal_d2bf914f8c18057c869ea33f72b85a03700015860143754c94dab449539d1edb->leave($__internal_d2bf914f8c18057c869ea33f72b85a03700015860143754c94dab449539d1edb_prof);

        
        $__internal_c99cea2f086fb7e5a450849109167dfd9cbf3d9fa1d3fd7b9d5d1d749eaf741f->leave($__internal_c99cea2f086fb7e5a450849109167dfd9cbf3d9fa1d3fd7b9d5d1d749eaf741f_prof);

    }

    // line 164
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_9374d1286a96f08d5ac36da5ed05218ed5a34d881bf9b32a5a39098792d10220 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9374d1286a96f08d5ac36da5ed05218ed5a34d881bf9b32a5a39098792d10220->enter($__internal_9374d1286a96f08d5ac36da5ed05218ed5a34d881bf9b32a5a39098792d10220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_21ea44abddb6c9c4717b81467580141ff93785d75346fed7a5a20542d605ae11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21ea44abddb6c9c4717b81467580141ff93785d75346fed7a5a20542d605ae11->enter($__internal_21ea44abddb6c9c4717b81467580141ff93785d75346fed7a5a20542d605ae11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 165
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 166
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 167
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 169
            echo "<div class=\"radio\">";
            // line 170
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 171
            echo "</div>";
        }
        
        $__internal_21ea44abddb6c9c4717b81467580141ff93785d75346fed7a5a20542d605ae11->leave($__internal_21ea44abddb6c9c4717b81467580141ff93785d75346fed7a5a20542d605ae11_prof);

        
        $__internal_9374d1286a96f08d5ac36da5ed05218ed5a34d881bf9b32a5a39098792d10220->leave($__internal_9374d1286a96f08d5ac36da5ed05218ed5a34d881bf9b32a5a39098792d10220_prof);

    }

    // line 177
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_4c7416ee5903cc9fa2bc45f89fbb9efadb0e71df2dd213ffce36f00129009068 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c7416ee5903cc9fa2bc45f89fbb9efadb0e71df2dd213ffce36f00129009068->enter($__internal_4c7416ee5903cc9fa2bc45f89fbb9efadb0e71df2dd213ffce36f00129009068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_0b83da75269dfa99b47936169a9e9b14eb1744757d7ad99861f932445b7a83d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b83da75269dfa99b47936169a9e9b14eb1744757d7ad99861f932445b7a83d1->enter($__internal_0b83da75269dfa99b47936169a9e9b14eb1744757d7ad99861f932445b7a83d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 178
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 179
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_0b83da75269dfa99b47936169a9e9b14eb1744757d7ad99861f932445b7a83d1->leave($__internal_0b83da75269dfa99b47936169a9e9b14eb1744757d7ad99861f932445b7a83d1_prof);

        
        $__internal_4c7416ee5903cc9fa2bc45f89fbb9efadb0e71df2dd213ffce36f00129009068->leave($__internal_4c7416ee5903cc9fa2bc45f89fbb9efadb0e71df2dd213ffce36f00129009068_prof);

    }

    // line 182
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_60e3ddc6e554e2d08816ca6452e05c50de927774ace9e4cd468dac54bf3a5c4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60e3ddc6e554e2d08816ca6452e05c50de927774ace9e4cd468dac54bf3a5c4d->enter($__internal_60e3ddc6e554e2d08816ca6452e05c50de927774ace9e4cd468dac54bf3a5c4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_55ae711077419ddd2a1f161fc455809dc132cc3d633e43b5bd42458119499a9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55ae711077419ddd2a1f161fc455809dc132cc3d633e43b5bd42458119499a9a->enter($__internal_55ae711077419ddd2a1f161fc455809dc132cc3d633e43b5bd42458119499a9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 184
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 185
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_55ae711077419ddd2a1f161fc455809dc132cc3d633e43b5bd42458119499a9a->leave($__internal_55ae711077419ddd2a1f161fc455809dc132cc3d633e43b5bd42458119499a9a_prof);

        
        $__internal_60e3ddc6e554e2d08816ca6452e05c50de927774ace9e4cd468dac54bf3a5c4d->leave($__internal_60e3ddc6e554e2d08816ca6452e05c50de927774ace9e4cd468dac54bf3a5c4d_prof);

    }

    // line 188
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_a5ac56a9d95b2edfc64cae37109092a84e06be23057c7244f45297f14b0f2f12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5ac56a9d95b2edfc64cae37109092a84e06be23057c7244f45297f14b0f2f12->enter($__internal_a5ac56a9d95b2edfc64cae37109092a84e06be23057c7244f45297f14b0f2f12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_bbf44c98efcd50d720d6c21fed3ec05ed58ce45ea30c5beac5502961189789d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbf44c98efcd50d720d6c21fed3ec05ed58ce45ea30c5beac5502961189789d7->enter($__internal_bbf44c98efcd50d720d6c21fed3ec05ed58ce45ea30c5beac5502961189789d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 189
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 191
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_bbf44c98efcd50d720d6c21fed3ec05ed58ce45ea30c5beac5502961189789d7->leave($__internal_bbf44c98efcd50d720d6c21fed3ec05ed58ce45ea30c5beac5502961189789d7_prof);

        
        $__internal_a5ac56a9d95b2edfc64cae37109092a84e06be23057c7244f45297f14b0f2f12->leave($__internal_a5ac56a9d95b2edfc64cae37109092a84e06be23057c7244f45297f14b0f2f12_prof);

    }

    // line 194
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_4e0235dec60c62c3630ff58638af43e3a3f39e0ac4550c2775829e91d630daa3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e0235dec60c62c3630ff58638af43e3a3f39e0ac4550c2775829e91d630daa3->enter($__internal_4e0235dec60c62c3630ff58638af43e3a3f39e0ac4550c2775829e91d630daa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_84a651d439ac5a7d6fcfc7559605e6fa34a010f1df5efdd2edfdc1c7ac2ad56f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84a651d439ac5a7d6fcfc7559605e6fa34a010f1df5efdd2edfdc1c7ac2ad56f->enter($__internal_84a651d439ac5a7d6fcfc7559605e6fa34a010f1df5efdd2edfdc1c7ac2ad56f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 195
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 197
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_84a651d439ac5a7d6fcfc7559605e6fa34a010f1df5efdd2edfdc1c7ac2ad56f->leave($__internal_84a651d439ac5a7d6fcfc7559605e6fa34a010f1df5efdd2edfdc1c7ac2ad56f_prof);

        
        $__internal_4e0235dec60c62c3630ff58638af43e3a3f39e0ac4550c2775829e91d630daa3->leave($__internal_4e0235dec60c62c3630ff58638af43e3a3f39e0ac4550c2775829e91d630daa3_prof);

    }

    // line 200
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_ab144e5b19e849056b0bbd949b1623b5a3ea5159b6fdde1989bc03819d01b632 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab144e5b19e849056b0bbd949b1623b5a3ea5159b6fdde1989bc03819d01b632->enter($__internal_ab144e5b19e849056b0bbd949b1623b5a3ea5159b6fdde1989bc03819d01b632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_193581ab666ef142bce636cca025f51d2a5a64c772b74189c75a938a04d44a30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_193581ab666ef142bce636cca025f51d2a5a64c772b74189c75a938a04d44a30->enter($__internal_193581ab666ef142bce636cca025f51d2a5a64c772b74189c75a938a04d44a30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 201
        echo "    ";
        // line 202
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 203
            echo "        ";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 204
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 205
                echo "        ";
            }
            // line 206
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 207
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
                // line 208
                echo "        ";
            }
            // line 209
            echo "        ";
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 210
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 211
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 212
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 213
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 216
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 219
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 220
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 221
            echo "</label>
    ";
        }
        
        $__internal_193581ab666ef142bce636cca025f51d2a5a64c772b74189c75a938a04d44a30->leave($__internal_193581ab666ef142bce636cca025f51d2a5a64c772b74189c75a938a04d44a30_prof);

        
        $__internal_ab144e5b19e849056b0bbd949b1623b5a3ea5159b6fdde1989bc03819d01b632->leave($__internal_ab144e5b19e849056b0bbd949b1623b5a3ea5159b6fdde1989bc03819d01b632_prof);

    }

    // line 227
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_8b282d6710cf1c57b71e32b7c5aee7df8eb079c5086bb16ddcf7b2c1c28bb34c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b282d6710cf1c57b71e32b7c5aee7df8eb079c5086bb16ddcf7b2c1c28bb34c->enter($__internal_8b282d6710cf1c57b71e32b7c5aee7df8eb079c5086bb16ddcf7b2c1c28bb34c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_4a06f653ed8dd624db734f653ab0996d9185db030649d70f8fa3038ba5dee4ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a06f653ed8dd624db734f653ab0996d9185db030649d70f8fa3038ba5dee4ea->enter($__internal_4a06f653ed8dd624db734f653ab0996d9185db030649d70f8fa3038ba5dee4ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 228
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 229
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 230
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 231
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 232
        echo "</div>";
        
        $__internal_4a06f653ed8dd624db734f653ab0996d9185db030649d70f8fa3038ba5dee4ea->leave($__internal_4a06f653ed8dd624db734f653ab0996d9185db030649d70f8fa3038ba5dee4ea_prof);

        
        $__internal_8b282d6710cf1c57b71e32b7c5aee7df8eb079c5086bb16ddcf7b2c1c28bb34c->leave($__internal_8b282d6710cf1c57b71e32b7c5aee7df8eb079c5086bb16ddcf7b2c1c28bb34c_prof);

    }

    // line 235
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_1234dc7b8f8a808480a49e99390cbd774fe0a2a29a1f83ede6722244a99cbc16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1234dc7b8f8a808480a49e99390cbd774fe0a2a29a1f83ede6722244a99cbc16->enter($__internal_1234dc7b8f8a808480a49e99390cbd774fe0a2a29a1f83ede6722244a99cbc16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_ef2a4999383d210b51894fa56b448830eb28a8138467c212b71ec0833f25a9c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef2a4999383d210b51894fa56b448830eb28a8138467c212b71ec0833f25a9c5->enter($__internal_ef2a4999383d210b51894fa56b448830eb28a8138467c212b71ec0833f25a9c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 236
        echo "<div class=\"form-group\">";
        // line 237
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 238
        echo "</div>";
        
        $__internal_ef2a4999383d210b51894fa56b448830eb28a8138467c212b71ec0833f25a9c5->leave($__internal_ef2a4999383d210b51894fa56b448830eb28a8138467c212b71ec0833f25a9c5_prof);

        
        $__internal_1234dc7b8f8a808480a49e99390cbd774fe0a2a29a1f83ede6722244a99cbc16->leave($__internal_1234dc7b8f8a808480a49e99390cbd774fe0a2a29a1f83ede6722244a99cbc16_prof);

    }

    // line 241
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_a77fab432877050bdc452373d3add33ab7c7febd54fd6e9ceee2ee1b415102ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a77fab432877050bdc452373d3add33ab7c7febd54fd6e9ceee2ee1b415102ac->enter($__internal_a77fab432877050bdc452373d3add33ab7c7febd54fd6e9ceee2ee1b415102ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_a5d776b8103f1dd59df478b79cc4412bfa93da28eec80bcc2f9560515918616c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5d776b8103f1dd59df478b79cc4412bfa93da28eec80bcc2f9560515918616c->enter($__internal_a5d776b8103f1dd59df478b79cc4412bfa93da28eec80bcc2f9560515918616c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 242
        $context["force_error"] = true;
        // line 243
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_a5d776b8103f1dd59df478b79cc4412bfa93da28eec80bcc2f9560515918616c->leave($__internal_a5d776b8103f1dd59df478b79cc4412bfa93da28eec80bcc2f9560515918616c_prof);

        
        $__internal_a77fab432877050bdc452373d3add33ab7c7febd54fd6e9ceee2ee1b415102ac->leave($__internal_a77fab432877050bdc452373d3add33ab7c7febd54fd6e9ceee2ee1b415102ac_prof);

    }

    // line 246
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_8127151eddb5af36e8be850fac3d42376b2ff2a6e5ec5af4da31a32486875e66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8127151eddb5af36e8be850fac3d42376b2ff2a6e5ec5af4da31a32486875e66->enter($__internal_8127151eddb5af36e8be850fac3d42376b2ff2a6e5ec5af4da31a32486875e66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_9a13ccd8a94b48c4aee5b737fb59bd1d99ace33b7b3be739f4c2b429c8da6966 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a13ccd8a94b48c4aee5b737fb59bd1d99ace33b7b3be739f4c2b429c8da6966->enter($__internal_9a13ccd8a94b48c4aee5b737fb59bd1d99ace33b7b3be739f4c2b429c8da6966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 247
        $context["force_error"] = true;
        // line 248
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_9a13ccd8a94b48c4aee5b737fb59bd1d99ace33b7b3be739f4c2b429c8da6966->leave($__internal_9a13ccd8a94b48c4aee5b737fb59bd1d99ace33b7b3be739f4c2b429c8da6966_prof);

        
        $__internal_8127151eddb5af36e8be850fac3d42376b2ff2a6e5ec5af4da31a32486875e66->leave($__internal_8127151eddb5af36e8be850fac3d42376b2ff2a6e5ec5af4da31a32486875e66_prof);

    }

    // line 251
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_636202b4fae17bf0ba2d60283cf70cbcc3bfcba3e088792be0892eea927256ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_636202b4fae17bf0ba2d60283cf70cbcc3bfcba3e088792be0892eea927256ed->enter($__internal_636202b4fae17bf0ba2d60283cf70cbcc3bfcba3e088792be0892eea927256ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_b336d7c5698cc1e9bc6772c95e9a2760d3dd5b06ca979f876a861f6ac32339de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b336d7c5698cc1e9bc6772c95e9a2760d3dd5b06ca979f876a861f6ac32339de->enter($__internal_b336d7c5698cc1e9bc6772c95e9a2760d3dd5b06ca979f876a861f6ac32339de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 252
        $context["force_error"] = true;
        // line 253
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_b336d7c5698cc1e9bc6772c95e9a2760d3dd5b06ca979f876a861f6ac32339de->leave($__internal_b336d7c5698cc1e9bc6772c95e9a2760d3dd5b06ca979f876a861f6ac32339de_prof);

        
        $__internal_636202b4fae17bf0ba2d60283cf70cbcc3bfcba3e088792be0892eea927256ed->leave($__internal_636202b4fae17bf0ba2d60283cf70cbcc3bfcba3e088792be0892eea927256ed_prof);

    }

    // line 256
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_0a0f0128e8d63ae8f34739edc669bf5932e5cd01ef4e0e15a7963391ba8b1b1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a0f0128e8d63ae8f34739edc669bf5932e5cd01ef4e0e15a7963391ba8b1b1f->enter($__internal_0a0f0128e8d63ae8f34739edc669bf5932e5cd01ef4e0e15a7963391ba8b1b1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_3cc2c22ab299b1925e15c2c0d217eb46a5e89c157e8f23d6bf5c135ae2e5d5e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cc2c22ab299b1925e15c2c0d217eb46a5e89c157e8f23d6bf5c135ae2e5d5e8->enter($__internal_3cc2c22ab299b1925e15c2c0d217eb46a5e89c157e8f23d6bf5c135ae2e5d5e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 257
        $context["force_error"] = true;
        // line 258
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_3cc2c22ab299b1925e15c2c0d217eb46a5e89c157e8f23d6bf5c135ae2e5d5e8->leave($__internal_3cc2c22ab299b1925e15c2c0d217eb46a5e89c157e8f23d6bf5c135ae2e5d5e8_prof);

        
        $__internal_0a0f0128e8d63ae8f34739edc669bf5932e5cd01ef4e0e15a7963391ba8b1b1f->leave($__internal_0a0f0128e8d63ae8f34739edc669bf5932e5cd01ef4e0e15a7963391ba8b1b1f_prof);

    }

    // line 261
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_7018cd73944e496aa58238d90ef8425709ae8c2d69fdbefde6938c411dd20e30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7018cd73944e496aa58238d90ef8425709ae8c2d69fdbefde6938c411dd20e30->enter($__internal_7018cd73944e496aa58238d90ef8425709ae8c2d69fdbefde6938c411dd20e30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_7f99a7345b67d92a910a7109bb200526f6eb10055a423883848ebf0f9b22e118 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f99a7345b67d92a910a7109bb200526f6eb10055a423883848ebf0f9b22e118->enter($__internal_7f99a7345b67d92a910a7109bb200526f6eb10055a423883848ebf0f9b22e118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 262
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 263
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 264
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 265
        echo "</div>";
        
        $__internal_7f99a7345b67d92a910a7109bb200526f6eb10055a423883848ebf0f9b22e118->leave($__internal_7f99a7345b67d92a910a7109bb200526f6eb10055a423883848ebf0f9b22e118_prof);

        
        $__internal_7018cd73944e496aa58238d90ef8425709ae8c2d69fdbefde6938c411dd20e30->leave($__internal_7018cd73944e496aa58238d90ef8425709ae8c2d69fdbefde6938c411dd20e30_prof);

    }

    // line 268
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_6b0e88d32ee495d40810c5453f26eedec5159e30ad3159b999d7b523a972c9bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b0e88d32ee495d40810c5453f26eedec5159e30ad3159b999d7b523a972c9bc->enter($__internal_6b0e88d32ee495d40810c5453f26eedec5159e30ad3159b999d7b523a972c9bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_31e77c423b9b5c55853698c2ea9cd272494ec71cf820f716d40eae5c5ec1b3e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31e77c423b9b5c55853698c2ea9cd272494ec71cf820f716d40eae5c5ec1b3e1->enter($__internal_31e77c423b9b5c55853698c2ea9cd272494ec71cf820f716d40eae5c5ec1b3e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 269
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 270
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 271
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 272
        echo "</div>";
        
        $__internal_31e77c423b9b5c55853698c2ea9cd272494ec71cf820f716d40eae5c5ec1b3e1->leave($__internal_31e77c423b9b5c55853698c2ea9cd272494ec71cf820f716d40eae5c5ec1b3e1_prof);

        
        $__internal_6b0e88d32ee495d40810c5453f26eedec5159e30ad3159b999d7b523a972c9bc->leave($__internal_6b0e88d32ee495d40810c5453f26eedec5159e30ad3159b999d7b523a972c9bc_prof);

    }

    // line 277
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_82247e0b61351ebf4966f5626c5e2e125d66f2a7d30646224c5535fe267561ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82247e0b61351ebf4966f5626c5e2e125d66f2a7d30646224c5535fe267561ec->enter($__internal_82247e0b61351ebf4966f5626c5e2e125d66f2a7d30646224c5535fe267561ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_696bed0847108ff0b7abbb1af33486b68aaf57e7f2ecdfaf549a9b0ffcee6a72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_696bed0847108ff0b7abbb1af33486b68aaf57e7f2ecdfaf549a9b0ffcee6a72->enter($__internal_696bed0847108ff0b7abbb1af33486b68aaf57e7f2ecdfaf549a9b0ffcee6a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 278
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 279
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 280
            echo "    <ul class=\"list-unstyled\">";
            // line 281
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 282
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 284
            echo "</ul>
    ";
            // line 285
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_696bed0847108ff0b7abbb1af33486b68aaf57e7f2ecdfaf549a9b0ffcee6a72->leave($__internal_696bed0847108ff0b7abbb1af33486b68aaf57e7f2ecdfaf549a9b0ffcee6a72_prof);

        
        $__internal_82247e0b61351ebf4966f5626c5e2e125d66f2a7d30646224c5535fe267561ec->leave($__internal_82247e0b61351ebf4966f5626c5e2e125d66f2a7d30646224c5535fe267561ec_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1139 => 285,  1136 => 284,  1128 => 282,  1124 => 281,  1122 => 280,  1116 => 279,  1114 => 278,  1105 => 277,  1095 => 272,  1093 => 271,  1091 => 270,  1085 => 269,  1076 => 268,  1066 => 265,  1064 => 264,  1062 => 263,  1056 => 262,  1047 => 261,  1037 => 258,  1035 => 257,  1026 => 256,  1016 => 253,  1014 => 252,  1005 => 251,  995 => 248,  993 => 247,  984 => 246,  974 => 243,  972 => 242,  963 => 241,  953 => 238,  951 => 237,  949 => 236,  940 => 235,  930 => 232,  928 => 231,  926 => 230,  924 => 229,  918 => 228,  909 => 227,  897 => 221,  893 => 220,  878 => 219,  874 => 216,  871 => 213,  870 => 212,  869 => 211,  867 => 210,  864 => 209,  861 => 208,  858 => 207,  855 => 206,  852 => 205,  849 => 204,  846 => 203,  843 => 202,  841 => 201,  832 => 200,  822 => 197,  820 => 195,  811 => 194,  801 => 191,  799 => 189,  790 => 188,  780 => 185,  778 => 184,  769 => 182,  759 => 179,  757 => 178,  748 => 177,  737 => 171,  735 => 170,  733 => 169,  730 => 167,  728 => 166,  726 => 165,  717 => 164,  706 => 160,  704 => 159,  702 => 158,  699 => 156,  697 => 155,  695 => 154,  686 => 153,  675 => 149,  669 => 146,  668 => 145,  667 => 144,  663 => 143,  659 => 142,  652 => 138,  651 => 137,  650 => 136,  646 => 135,  644 => 134,  635 => 133,  625 => 130,  623 => 129,  614 => 128,  603 => 124,  599 => 123,  594 => 119,  588 => 118,  582 => 117,  576 => 116,  570 => 115,  564 => 114,  558 => 113,  552 => 112,  547 => 108,  541 => 107,  535 => 106,  529 => 105,  523 => 104,  517 => 103,  511 => 102,  505 => 101,  500 => 98,  497 => 97,  495 => 96,  491 => 95,  489 => 94,  486 => 92,  484 => 91,  475 => 90,  463 => 85,  460 => 84,  450 => 83,  445 => 81,  443 => 80,  441 => 79,  438 => 77,  436 => 76,  427 => 75,  415 => 70,  413 => 69,  411 => 67,  410 => 66,  409 => 65,  408 => 64,  403 => 62,  401 => 61,  399 => 60,  396 => 58,  394 => 57,  385 => 56,  374 => 52,  372 => 51,  370 => 50,  368 => 49,  366 => 48,  362 => 47,  360 => 46,  357 => 44,  355 => 43,  346 => 42,  335 => 38,  333 => 37,  331 => 36,  322 => 35,  312 => 32,  306 => 30,  304 => 29,  302 => 28,  296 => 26,  293 => 25,  291 => 24,  288 => 23,  279 => 22,  269 => 19,  267 => 18,  258 => 17,  248 => 14,  246 => 13,  237 => 12,  227 => 9,  224 => 7,  222 => 6,  213 => 5,  203 => 277,  200 => 276,  197 => 274,  195 => 268,  192 => 267,  190 => 261,  187 => 260,  185 => 256,  182 => 255,  180 => 251,  177 => 250,  175 => 246,  172 => 245,  170 => 241,  167 => 240,  165 => 235,  162 => 234,  160 => 227,  157 => 226,  154 => 224,  152 => 200,  149 => 199,  147 => 194,  144 => 193,  142 => 188,  139 => 187,  137 => 182,  134 => 181,  132 => 177,  129 => 176,  126 => 174,  124 => 164,  121 => 163,  119 => 153,  116 => 152,  114 => 133,  111 => 132,  109 => 128,  107 => 90,  105 => 75,  102 => 74,  100 => 56,  97 => 55,  95 => 42,  92 => 41,  90 => 35,  87 => 34,  85 => 22,  82 => 21,  80 => 17,  77 => 16,  75 => 12,  72 => 11,  70 => 5,  67 => 4,  64 => 2,  14 => 1,);
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

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group\">
        {% set append = money_pattern starts with '{{' %}
        {% if not append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <div class=\"table-responsive\">
                <table class=\"table {{ table_class|default('table-bordered table-condensed table-striped') }}\">
                    <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                    </tbody>
                </table>
            </div>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form.parent %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form.parent %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}
