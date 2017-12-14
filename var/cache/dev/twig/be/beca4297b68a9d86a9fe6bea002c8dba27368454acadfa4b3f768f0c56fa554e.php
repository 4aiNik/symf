<?php

/* foundation_5_layout.html.twig */
class __TwigTemplate_d74e587f42409b48045745c886b5d25596f9c5a22994c2df23d0db95d163727f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "foundation_5_layout.html.twig", 1);
        $this->blocks = array(
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
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
            'choice_row' => array($this, 'block_choice_row'),
            'date_row' => array($this, 'block_date_row'),
            'time_row' => array($this, 'block_time_row'),
            'datetime_row' => array($this, 'block_datetime_row'),
            'checkbox_row' => array($this, 'block_checkbox_row'),
            'radio_row' => array($this, 'block_radio_row'),
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9cd3b730706a506fc65f824cab81fe48a1f254bb4abef46731011452072effd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cd3b730706a506fc65f824cab81fe48a1f254bb4abef46731011452072effd6->enter($__internal_9cd3b730706a506fc65f824cab81fe48a1f254bb4abef46731011452072effd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $__internal_aac9326d0906c3c9106ff3d97d1a54ddcfe1855c2acf7520e4ae05c81b394598 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aac9326d0906c3c9106ff3d97d1a54ddcfe1855c2acf7520e4ae05c81b394598->enter($__internal_aac9326d0906c3c9106ff3d97d1a54ddcfe1855c2acf7520e4ae05c81b394598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9cd3b730706a506fc65f824cab81fe48a1f254bb4abef46731011452072effd6->leave($__internal_9cd3b730706a506fc65f824cab81fe48a1f254bb4abef46731011452072effd6_prof);

        
        $__internal_aac9326d0906c3c9106ff3d97d1a54ddcfe1855c2acf7520e4ae05c81b394598->leave($__internal_aac9326d0906c3c9106ff3d97d1a54ddcfe1855c2acf7520e4ae05c81b394598_prof);

    }

    // line 6
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_8874cbbddf76527da3918e91cb554b26466ce8c68f99b93780ea0675fae51741 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8874cbbddf76527da3918e91cb554b26466ce8c68f99b93780ea0675fae51741->enter($__internal_8874cbbddf76527da3918e91cb554b26466ce8c68f99b93780ea0675fae51741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_bbe8cd848e20aca9b73bd624e54a68ac31f90ec21853cabfff978c21e8e4f77f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbe8cd848e20aca9b73bd624e54a68ac31f90ec21853cabfff978c21e8e4f77f->enter($__internal_bbe8cd848e20aca9b73bd624e54a68ac31f90ec21853cabfff978c21e8e4f77f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 7
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 8
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_bbe8cd848e20aca9b73bd624e54a68ac31f90ec21853cabfff978c21e8e4f77f->leave($__internal_bbe8cd848e20aca9b73bd624e54a68ac31f90ec21853cabfff978c21e8e4f77f_prof);

        
        $__internal_8874cbbddf76527da3918e91cb554b26466ce8c68f99b93780ea0675fae51741->leave($__internal_8874cbbddf76527da3918e91cb554b26466ce8c68f99b93780ea0675fae51741_prof);

    }

    // line 13
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_440db9781b1dc12d2a8860dc38e77eb0886cef8ab34d29dba11588ae9b68b45f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_440db9781b1dc12d2a8860dc38e77eb0886cef8ab34d29dba11588ae9b68b45f->enter($__internal_440db9781b1dc12d2a8860dc38e77eb0886cef8ab34d29dba11588ae9b68b45f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_8462145606c851ca2c8ccf014353ce092afacaa0b264d43c24768c1a6e2bc12b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8462145606c851ca2c8ccf014353ce092afacaa0b264d43c24768c1a6e2bc12b->enter($__internal_8462145606c851ca2c8ccf014353ce092afacaa0b264d43c24768c1a6e2bc12b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 14
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 15
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 16
            echo "    ";
        }
        // line 17
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_8462145606c851ca2c8ccf014353ce092afacaa0b264d43c24768c1a6e2bc12b->leave($__internal_8462145606c851ca2c8ccf014353ce092afacaa0b264d43c24768c1a6e2bc12b_prof);

        
        $__internal_440db9781b1dc12d2a8860dc38e77eb0886cef8ab34d29dba11588ae9b68b45f->leave($__internal_440db9781b1dc12d2a8860dc38e77eb0886cef8ab34d29dba11588ae9b68b45f_prof);

    }

    // line 20
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_a3f163fdf34a04c97b4c8b230aa733fe0305d485b05c6352199c3085e1d12bd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3f163fdf34a04c97b4c8b230aa733fe0305d485b05c6352199c3085e1d12bd0->enter($__internal_a3f163fdf34a04c97b4c8b230aa733fe0305d485b05c6352199c3085e1d12bd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_f9014da4ac0f8b9e5e8e90b5c0ddd2a7489bf49ae0cd9a515b06bbd33fea6040 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9014da4ac0f8b9e5e8e90b5c0ddd2a7489bf49ae0cd9a515b06bbd33fea6040->enter($__internal_f9014da4ac0f8b9e5e8e90b5c0ddd2a7489bf49ae0cd9a515b06bbd33fea6040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 21
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " button"))));
        // line 22
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_f9014da4ac0f8b9e5e8e90b5c0ddd2a7489bf49ae0cd9a515b06bbd33fea6040->leave($__internal_f9014da4ac0f8b9e5e8e90b5c0ddd2a7489bf49ae0cd9a515b06bbd33fea6040_prof);

        
        $__internal_a3f163fdf34a04c97b4c8b230aa733fe0305d485b05c6352199c3085e1d12bd0->leave($__internal_a3f163fdf34a04c97b4c8b230aa733fe0305d485b05c6352199c3085e1d12bd0_prof);

    }

    // line 25
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_86bbca9b8380d8ef9438f767cd15da04b567256b89310556beed30118c8141a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86bbca9b8380d8ef9438f767cd15da04b567256b89310556beed30118c8141a8->enter($__internal_86bbca9b8380d8ef9438f767cd15da04b567256b89310556beed30118c8141a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_012c3dafb268ca2d16cf4ccdc67c81324f9201603626c3d2815e15379e41fc08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_012c3dafb268ca2d16cf4ccdc67c81324f9201603626c3d2815e15379e41fc08->enter($__internal_012c3dafb268ca2d16cf4ccdc67c81324f9201603626c3d2815e15379e41fc08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 26
        echo "<div class=\"row collapse\">
        ";
        // line 27
        $context["prepend"] = ("{{" == twig_slice($this->env, ($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), 0, 2));
        // line 28
        echo "        ";
        if ( !($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 29
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">";
            // line 30
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 33
        echo "        <div class=\"small-9 large-10 columns\">";
        // line 34
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 35
        echo "</div>
        ";
        // line 36
        if (($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 37
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">";
            // line 38
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 41
        echo "    </div>";
        
        $__internal_012c3dafb268ca2d16cf4ccdc67c81324f9201603626c3d2815e15379e41fc08->leave($__internal_012c3dafb268ca2d16cf4ccdc67c81324f9201603626c3d2815e15379e41fc08_prof);

        
        $__internal_86bbca9b8380d8ef9438f767cd15da04b567256b89310556beed30118c8141a8->leave($__internal_86bbca9b8380d8ef9438f767cd15da04b567256b89310556beed30118c8141a8_prof);

    }

    // line 44
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_d9b85c6be6b6438273d4e82713726e32c9bb0a2be9b387cff7576c17f0dd5235 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9b85c6be6b6438273d4e82713726e32c9bb0a2be9b387cff7576c17f0dd5235->enter($__internal_d9b85c6be6b6438273d4e82713726e32c9bb0a2be9b387cff7576c17f0dd5235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_4c1316e78a7665e88ffd4a9fd0e6556b997e9b188f5ed026f71806c0126c4ade = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c1316e78a7665e88ffd4a9fd0e6556b997e9b188f5ed026f71806c0126c4ade->enter($__internal_4c1316e78a7665e88ffd4a9fd0e6556b997e9b188f5ed026f71806c0126c4ade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 45
        echo "<div class=\"row collapse\">
        <div class=\"small-9 large-10 columns\">";
        // line 47
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 48
        echo "</div>
        <div class=\"small-3 large-2 columns\">
            <span class=\"postfix\">%</span>
        </div>
    </div>";
        
        $__internal_4c1316e78a7665e88ffd4a9fd0e6556b997e9b188f5ed026f71806c0126c4ade->leave($__internal_4c1316e78a7665e88ffd4a9fd0e6556b997e9b188f5ed026f71806c0126c4ade_prof);

        
        $__internal_d9b85c6be6b6438273d4e82713726e32c9bb0a2be9b387cff7576c17f0dd5235->leave($__internal_d9b85c6be6b6438273d4e82713726e32c9bb0a2be9b387cff7576c17f0dd5235_prof);

    }

    // line 55
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_3523010bb5e4ae0728fc6c3e10ab6aa8d2d57ffcbbf6905a318daac1ad1d1a69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3523010bb5e4ae0728fc6c3e10ab6aa8d2d57ffcbbf6905a318daac1ad1d1a69->enter($__internal_3523010bb5e4ae0728fc6c3e10ab6aa8d2d57ffcbbf6905a318daac1ad1d1a69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_0aa89df9dfcbea15b3ce53f9d325c94efc3d38deca64b35a10ebfed47c4188c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0aa89df9dfcbea15b3ce53f9d325c94efc3d38deca64b35a10ebfed47c4188c2->enter($__internal_0aa89df9dfcbea15b3ce53f9d325c94efc3d38deca64b35a10ebfed47c4188c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 56
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 57
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 59
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 60
            echo "        <div class=\"row\">
            <div class=\"large-7 columns\">";
            // line 61
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 62
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            echo "</div>
        </div>
        <div ";
            // line 64
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            <div class=\"large-7 columns\">";
            // line 65
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 66
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            echo "</div>
        </div>
    ";
        }
        
        $__internal_0aa89df9dfcbea15b3ce53f9d325c94efc3d38deca64b35a10ebfed47c4188c2->leave($__internal_0aa89df9dfcbea15b3ce53f9d325c94efc3d38deca64b35a10ebfed47c4188c2_prof);

        
        $__internal_3523010bb5e4ae0728fc6c3e10ab6aa8d2d57ffcbbf6905a318daac1ad1d1a69->leave($__internal_3523010bb5e4ae0728fc6c3e10ab6aa8d2d57ffcbbf6905a318daac1ad1d1a69_prof);

    }

    // line 71
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_9e3c83e8d763dab18384d0c8cd91cbae657390304cf14243f4cbe3eaa861d994 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e3c83e8d763dab18384d0c8cd91cbae657390304cf14243f4cbe3eaa861d994->enter($__internal_9e3c83e8d763dab18384d0c8cd91cbae657390304cf14243f4cbe3eaa861d994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_ff59975024922812b29872d2b359f6d232896a0b59466417aaef9ea0c177ed61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff59975024922812b29872d2b359f6d232896a0b59466417aaef9ea0c177ed61->enter($__internal_ff59975024922812b29872d2b359f6d232896a0b59466417aaef9ea0c177ed61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 72
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 73
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 75
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 76
            echo "        ";
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 77
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 79
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" => (("<div class=\"large-4 columns\">" .             // line 80
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget')) . "</div>"), "{{ month }}" => (("<div class=\"large-4 columns\">" .             // line 81
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget')) . "</div>"), "{{ day }}" => (("<div class=\"large-4 columns\">" .             // line 82
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')) . "</div>")));
            // line 84
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 85
                echo "            </div>
        ";
            }
            // line 87
            echo "    ";
        }
        
        $__internal_ff59975024922812b29872d2b359f6d232896a0b59466417aaef9ea0c177ed61->leave($__internal_ff59975024922812b29872d2b359f6d232896a0b59466417aaef9ea0c177ed61_prof);

        
        $__internal_9e3c83e8d763dab18384d0c8cd91cbae657390304cf14243f4cbe3eaa861d994->leave($__internal_9e3c83e8d763dab18384d0c8cd91cbae657390304cf14243f4cbe3eaa861d994_prof);

    }

    // line 90
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_45c434a26080d3723787209fe41042b2c8ff4f5731cd8abedaf0b6da6f785841 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45c434a26080d3723787209fe41042b2c8ff4f5731cd8abedaf0b6da6f785841->enter($__internal_45c434a26080d3723787209fe41042b2c8ff4f5731cd8abedaf0b6da6f785841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_a2ad8b04ace80371889e796cee8f1084b240e44b430dd76ac38c73a52a7e1248 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2ad8b04ace80371889e796cee8f1084b240e44b430dd76ac38c73a52a7e1248->enter($__internal_a2ad8b04ace80371889e796cee8f1084b240e44b430dd76ac38c73a52a7e1248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 91
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 95
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 96
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 98
            echo "        ";
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                // line 99
                echo "            <div class=\"large-4 columns\">";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 106
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 116
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            } else {
                // line 121
                echo "            <div class=\"large-6 columns\">";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 128
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            }
            // line 133
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 134
                echo "            </div>
        ";
            }
            // line 136
            echo "    ";
        }
        
        $__internal_a2ad8b04ace80371889e796cee8f1084b240e44b430dd76ac38c73a52a7e1248->leave($__internal_a2ad8b04ace80371889e796cee8f1084b240e44b430dd76ac38c73a52a7e1248_prof);

        
        $__internal_45c434a26080d3723787209fe41042b2c8ff4f5731cd8abedaf0b6da6f785841->leave($__internal_45c434a26080d3723787209fe41042b2c8ff4f5731cd8abedaf0b6da6f785841_prof);

    }

    // line 139
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_35c2af228cac177eb1e661657cbde3da2b45a2df8c866af3b418a2c926b6232b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35c2af228cac177eb1e661657cbde3da2b45a2df8c866af3b418a2c926b6232b->enter($__internal_35c2af228cac177eb1e661657cbde3da2b45a2df8c866af3b418a2c926b6232b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_9dc153cc20b9816f44c123171421f3b4b1803f0954f32093e276f91a7dd9374e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dc153cc20b9816f44c123171421f3b4b1803f0954f32093e276f91a7dd9374e->enter($__internal_9dc153cc20b9816f44c123171421f3b4b1803f0954f32093e276f91a7dd9374e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 140
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 141
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 142
            echo "    ";
        }
        // line 143
        echo "
    ";
        // line 144
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            // line 145
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("style" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "style", array()), "")) : ("")) . " height: auto; background-image: none;"))));
            // line 146
            echo "    ";
        }
        // line 147
        echo "
    ";
        // line 148
        if ((((($context["required"] ?? $this->getContext($context, "required")) && (null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) &&  !($context["placeholder_in_choices"] ?? $this->getContext($context, "placeholder_in_choices"))) &&  !($context["multiple"] ?? $this->getContext($context, "multiple")))) {
            // line 149
            $context["required"] = false;
        }
        // line 151
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\" data-customforms=\"disabled\"";
        }
        echo ">
        ";
        // line 152
        if ( !(null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) {
            // line 153
            echo "<option value=\"\"";
            if ((($context["required"] ?? $this->getContext($context, "required")) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["placeholder"] ?? $this->getContext($context, "placeholder"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? $this->getContext($context, "placeholder")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
            echo "</option>";
        }
        // line 155
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 156
            $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
            // line 157
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 158
            if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                // line 159
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 162
        $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
        // line 163
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 164
        echo "</select>";
        
        $__internal_9dc153cc20b9816f44c123171421f3b4b1803f0954f32093e276f91a7dd9374e->leave($__internal_9dc153cc20b9816f44c123171421f3b4b1803f0954f32093e276f91a7dd9374e_prof);

        
        $__internal_35c2af228cac177eb1e661657cbde3da2b45a2df8c866af3b418a2c926b6232b->leave($__internal_35c2af228cac177eb1e661657cbde3da2b45a2df8c866af3b418a2c926b6232b_prof);

    }

    // line 167
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_eb3da79b5e008421ef716ca5a9c1f53356a8af559ffbd3e4fc3eac3ad604fbff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb3da79b5e008421ef716ca5a9c1f53356a8af559ffbd3e4fc3eac3ad604fbff->enter($__internal_eb3da79b5e008421ef716ca5a9c1f53356a8af559ffbd3e4fc3eac3ad604fbff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_31e842ef526028f8946b337b94fb89f354a32c59ba7eac7f1b52e0bc82dc92e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31e842ef526028f8946b337b94fb89f354a32c59ba7eac7f1b52e0bc82dc92e6->enter($__internal_31e842ef526028f8946b337b94fb89f354a32c59ba7eac7f1b52e0bc82dc92e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 168
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 169
            echo "        <ul class=\"inline-list\">
            ";
            // line 170
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 171
                echo "                <li>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 172
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
                // line 173
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 175
            echo "        </ul>
    ";
        } else {
            // line 177
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 179
                echo "                ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 180
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
                // line 181
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            echo "        </div>
    ";
        }
        
        $__internal_31e842ef526028f8946b337b94fb89f354a32c59ba7eac7f1b52e0bc82dc92e6->leave($__internal_31e842ef526028f8946b337b94fb89f354a32c59ba7eac7f1b52e0bc82dc92e6_prof);

        
        $__internal_eb3da79b5e008421ef716ca5a9c1f53356a8af559ffbd3e4fc3eac3ad604fbff->leave($__internal_eb3da79b5e008421ef716ca5a9c1f53356a8af559ffbd3e4fc3eac3ad604fbff_prof);

    }

    // line 187
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_6f3be2097cf238d7ad9fa4b9a413593a69262ef75c7b55bdb2795ce00d595cb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f3be2097cf238d7ad9fa4b9a413593a69262ef75c7b55bdb2795ce00d595cb0->enter($__internal_6f3be2097cf238d7ad9fa4b9a413593a69262ef75c7b55bdb2795ce00d595cb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_01362b3edb9f3d495e77eb924cd8df27073be8b8c4b431cba030e8734b1e4658 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01362b3edb9f3d495e77eb924cd8df27073be8b8c4b431cba030e8734b1e4658->enter($__internal_01362b3edb9f3d495e77eb924cd8df27073be8b8c4b431cba030e8734b1e4658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 188
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 189
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 190
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 191
            echo "    ";
        }
        // line 192
        echo "    ";
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 193
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 195
            echo "        <div class=\"checkbox\">
            ";
            // line 196
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_01362b3edb9f3d495e77eb924cd8df27073be8b8c4b431cba030e8734b1e4658->leave($__internal_01362b3edb9f3d495e77eb924cd8df27073be8b8c4b431cba030e8734b1e4658_prof);

        
        $__internal_6f3be2097cf238d7ad9fa4b9a413593a69262ef75c7b55bdb2795ce00d595cb0->leave($__internal_6f3be2097cf238d7ad9fa4b9a413593a69262ef75c7b55bdb2795ce00d595cb0_prof);

    }

    // line 201
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_61fd1e3cb8e088dc815ae4d5332f79ce0315fb8742fb38c0bfb60bcebbc58852 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61fd1e3cb8e088dc815ae4d5332f79ce0315fb8742fb38c0bfb60bcebbc58852->enter($__internal_61fd1e3cb8e088dc815ae4d5332f79ce0315fb8742fb38c0bfb60bcebbc58852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_ae88ad38aaa9f8ce9362a7a47ec4db8e4ef25d67d6bc4757300ab66f37c1ffc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae88ad38aaa9f8ce9362a7a47ec4db8e4ef25d67d6bc4757300ab66f37c1ffc6->enter($__internal_ae88ad38aaa9f8ce9362a7a47ec4db8e4ef25d67d6bc4757300ab66f37c1ffc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 202
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 203
        echo "    ";
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 204
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 206
            echo "        ";
            if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
                // line 207
                $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
                // line 208
                echo "        ";
            }
            // line 209
            echo "        <div class=\"radio\">
            ";
            // line 210
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_ae88ad38aaa9f8ce9362a7a47ec4db8e4ef25d67d6bc4757300ab66f37c1ffc6->leave($__internal_ae88ad38aaa9f8ce9362a7a47ec4db8e4ef25d67d6bc4757300ab66f37c1ffc6_prof);

        
        $__internal_61fd1e3cb8e088dc815ae4d5332f79ce0315fb8742fb38c0bfb60bcebbc58852->leave($__internal_61fd1e3cb8e088dc815ae4d5332f79ce0315fb8742fb38c0bfb60bcebbc58852_prof);

    }

    // line 217
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_b064a15cf7b368ccaebce8f97a35c709c02667fa3114333b07ca2c9d5611d85b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b064a15cf7b368ccaebce8f97a35c709c02667fa3114333b07ca2c9d5611d85b->enter($__internal_b064a15cf7b368ccaebce8f97a35c709c02667fa3114333b07ca2c9d5611d85b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_4441c54f1ef228765c45eb89052a9680ba5053f6e3b0e88f0aea99d2645a02ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4441c54f1ef228765c45eb89052a9680ba5053f6e3b0e88f0aea99d2645a02ce->enter($__internal_4441c54f1ef228765c45eb89052a9680ba5053f6e3b0e88f0aea99d2645a02ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 218
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 219
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 220
            echo "    ";
        }
        // line 221
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_4441c54f1ef228765c45eb89052a9680ba5053f6e3b0e88f0aea99d2645a02ce->leave($__internal_4441c54f1ef228765c45eb89052a9680ba5053f6e3b0e88f0aea99d2645a02ce_prof);

        
        $__internal_b064a15cf7b368ccaebce8f97a35c709c02667fa3114333b07ca2c9d5611d85b->leave($__internal_b064a15cf7b368ccaebce8f97a35c709c02667fa3114333b07ca2c9d5611d85b_prof);

    }

    // line 224
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_66753b7ca2ddb5cdf7198e8d1177c9b758b71dd155f38f524bfb562d036b9e23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66753b7ca2ddb5cdf7198e8d1177c9b758b71dd155f38f524bfb562d036b9e23->enter($__internal_66753b7ca2ddb5cdf7198e8d1177c9b758b71dd155f38f524bfb562d036b9e23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_390c505976af26850d27bf3f3a5ef4bad77d1519f5471a6137c3737981b7b810 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_390c505976af26850d27bf3f3a5ef4bad77d1519f5471a6137c3737981b7b810->enter($__internal_390c505976af26850d27bf3f3a5ef4bad77d1519f5471a6137c3737981b7b810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 225
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 226
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 227
            echo "    ";
        }
        // line 228
        echo "    ";
        // line 229
        echo "    ";
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 230
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_390c505976af26850d27bf3f3a5ef4bad77d1519f5471a6137c3737981b7b810->leave($__internal_390c505976af26850d27bf3f3a5ef4bad77d1519f5471a6137c3737981b7b810_prof);

        
        $__internal_66753b7ca2ddb5cdf7198e8d1177c9b758b71dd155f38f524bfb562d036b9e23->leave($__internal_66753b7ca2ddb5cdf7198e8d1177c9b758b71dd155f38f524bfb562d036b9e23_prof);

    }

    // line 233
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_807de8ed8cd00afc3b6e21d003250f7c15a2a13bbbd5c16cc9fee9b15aeb75d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_807de8ed8cd00afc3b6e21d003250f7c15a2a13bbbd5c16cc9fee9b15aeb75d9->enter($__internal_807de8ed8cd00afc3b6e21d003250f7c15a2a13bbbd5c16cc9fee9b15aeb75d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_6a01524e5c31a37c7c5af931c4e60b299d5ecd6e12cfd8aa2175066926275c52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a01524e5c31a37c7c5af931c4e60b299d5ecd6e12cfd8aa2175066926275c52->enter($__internal_6a01524e5c31a37c7c5af931c4e60b299d5ecd6e12cfd8aa2175066926275c52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 234
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_6a01524e5c31a37c7c5af931c4e60b299d5ecd6e12cfd8aa2175066926275c52->leave($__internal_6a01524e5c31a37c7c5af931c4e60b299d5ecd6e12cfd8aa2175066926275c52_prof);

        
        $__internal_807de8ed8cd00afc3b6e21d003250f7c15a2a13bbbd5c16cc9fee9b15aeb75d9->leave($__internal_807de8ed8cd00afc3b6e21d003250f7c15a2a13bbbd5c16cc9fee9b15aeb75d9_prof);

    }

    // line 237
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_56e820db0c777ed7eb4bffa9225c44b61c2b457996c3ac04cbeb6ade51df2769 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56e820db0c777ed7eb4bffa9225c44b61c2b457996c3ac04cbeb6ade51df2769->enter($__internal_56e820db0c777ed7eb4bffa9225c44b61c2b457996c3ac04cbeb6ade51df2769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_956c67e5d2d0303bc41459114e231b81e627e9c81d5ca068167ee7e849708aec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_956c67e5d2d0303bc41459114e231b81e627e9c81d5ca068167ee7e849708aec->enter($__internal_956c67e5d2d0303bc41459114e231b81e627e9c81d5ca068167ee7e849708aec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 238
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_956c67e5d2d0303bc41459114e231b81e627e9c81d5ca068167ee7e849708aec->leave($__internal_956c67e5d2d0303bc41459114e231b81e627e9c81d5ca068167ee7e849708aec_prof);

        
        $__internal_56e820db0c777ed7eb4bffa9225c44b61c2b457996c3ac04cbeb6ade51df2769->leave($__internal_56e820db0c777ed7eb4bffa9225c44b61c2b457996c3ac04cbeb6ade51df2769_prof);

    }

    // line 241
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_afdd76da0804e9bc314c82a73db58c81fbe258f79255f5aba0795aea766781d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afdd76da0804e9bc314c82a73db58c81fbe258f79255f5aba0795aea766781d6->enter($__internal_afdd76da0804e9bc314c82a73db58c81fbe258f79255f5aba0795aea766781d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_56e0c239f7efef61ca2b1bb4c3c5ed75c4794ee174f79c9ad6eb01c9b323d0f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56e0c239f7efef61ca2b1bb4c3c5ed75c4794ee174f79c9ad6eb01c9b323d0f1->enter($__internal_56e0c239f7efef61ca2b1bb4c3c5ed75c4794ee174f79c9ad6eb01c9b323d0f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 242
        if (($context["required"] ?? $this->getContext($context, "required"))) {
            // line 243
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            // line 244
            echo "    ";
        }
        // line 245
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 246
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 247
            echo "    ";
        }
        // line 248
        echo "    ";
        if (array_key_exists("parent_label_class", $context)) {
            // line 249
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
            // line 250
            echo "    ";
        }
        // line 251
        echo "    ";
        if (twig_test_empty(($context["label"] ?? $this->getContext($context, "label")))) {
            // line 252
            if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                // line 253
                $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                 // line 254
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                 // line 255
($context["id"] ?? $this->getContext($context, "id"))));
            } else {
                // line 258
                $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
            }
        }
        // line 261
        echo "    <label";
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
        echo ">
        ";
        // line 262
        echo ($context["widget"] ?? $this->getContext($context, "widget"));
        echo "
        ";
        // line 263
        echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
        echo "
    </label>";
        
        $__internal_56e0c239f7efef61ca2b1bb4c3c5ed75c4794ee174f79c9ad6eb01c9b323d0f1->leave($__internal_56e0c239f7efef61ca2b1bb4c3c5ed75c4794ee174f79c9ad6eb01c9b323d0f1_prof);

        
        $__internal_afdd76da0804e9bc314c82a73db58c81fbe258f79255f5aba0795aea766781d6->leave($__internal_afdd76da0804e9bc314c82a73db58c81fbe258f79255f5aba0795aea766781d6_prof);

    }

    // line 269
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_418b5de44ce777b9274bf468a6b9af866712a3311955cec32b25f743a43b1254 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_418b5de44ce777b9274bf468a6b9af866712a3311955cec32b25f743a43b1254->enter($__internal_418b5de44ce777b9274bf468a6b9af866712a3311955cec32b25f743a43b1254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_c179b02267356c33e659b4169d4f2ea2c93a1fc539e1918ff6ee840d514bfba0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c179b02267356c33e659b4169d4f2ea2c93a1fc539e1918ff6ee840d514bfba0->enter($__internal_c179b02267356c33e659b4169d4f2ea2c93a1fc539e1918ff6ee840d514bfba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 270
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 271
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " error";
        }
        echo "\">
            ";
        // line 272
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        echo "
            ";
        // line 273
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 274
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_c179b02267356c33e659b4169d4f2ea2c93a1fc539e1918ff6ee840d514bfba0->leave($__internal_c179b02267356c33e659b4169d4f2ea2c93a1fc539e1918ff6ee840d514bfba0_prof);

        
        $__internal_418b5de44ce777b9274bf468a6b9af866712a3311955cec32b25f743a43b1254->leave($__internal_418b5de44ce777b9274bf468a6b9af866712a3311955cec32b25f743a43b1254_prof);

    }

    // line 279
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_354e0aad16cbe0d4fad80b5eaa2193b50656fefb71e5ed48d3f8226590218194 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_354e0aad16cbe0d4fad80b5eaa2193b50656fefb71e5ed48d3f8226590218194->enter($__internal_354e0aad16cbe0d4fad80b5eaa2193b50656fefb71e5ed48d3f8226590218194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_df590398390fc7645b11d1a1f3b8ce2c979711a235549e95e98b83b83d57489d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df590398390fc7645b11d1a1f3b8ce2c979711a235549e95e98b83b83d57489d->enter($__internal_df590398390fc7645b11d1a1f3b8ce2c979711a235549e95e98b83b83d57489d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 280
        $context["force_error"] = true;
        // line 281
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_df590398390fc7645b11d1a1f3b8ce2c979711a235549e95e98b83b83d57489d->leave($__internal_df590398390fc7645b11d1a1f3b8ce2c979711a235549e95e98b83b83d57489d_prof);

        
        $__internal_354e0aad16cbe0d4fad80b5eaa2193b50656fefb71e5ed48d3f8226590218194->leave($__internal_354e0aad16cbe0d4fad80b5eaa2193b50656fefb71e5ed48d3f8226590218194_prof);

    }

    // line 284
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_a2e6b3c5f5292a6c77e519e75c940019194dc596f96125dc384841958155ba9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2e6b3c5f5292a6c77e519e75c940019194dc596f96125dc384841958155ba9f->enter($__internal_a2e6b3c5f5292a6c77e519e75c940019194dc596f96125dc384841958155ba9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_ff5b6b626f3f35d6ca0c940da40776b5f9d6142bf8079af405e9df5fea5d9bce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff5b6b626f3f35d6ca0c940da40776b5f9d6142bf8079af405e9df5fea5d9bce->enter($__internal_ff5b6b626f3f35d6ca0c940da40776b5f9d6142bf8079af405e9df5fea5d9bce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 285
        $context["force_error"] = true;
        // line 286
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_ff5b6b626f3f35d6ca0c940da40776b5f9d6142bf8079af405e9df5fea5d9bce->leave($__internal_ff5b6b626f3f35d6ca0c940da40776b5f9d6142bf8079af405e9df5fea5d9bce_prof);

        
        $__internal_a2e6b3c5f5292a6c77e519e75c940019194dc596f96125dc384841958155ba9f->leave($__internal_a2e6b3c5f5292a6c77e519e75c940019194dc596f96125dc384841958155ba9f_prof);

    }

    // line 289
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_a6919bcd743d3696dea8650be195f7d30a4b099c9d7b79eae0ac319fe9c02611 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6919bcd743d3696dea8650be195f7d30a4b099c9d7b79eae0ac319fe9c02611->enter($__internal_a6919bcd743d3696dea8650be195f7d30a4b099c9d7b79eae0ac319fe9c02611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_7f6308a7e52bf3e8061f94580bb96683ceb5cb49f9708ff2dffafee529641d61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f6308a7e52bf3e8061f94580bb96683ceb5cb49f9708ff2dffafee529641d61->enter($__internal_7f6308a7e52bf3e8061f94580bb96683ceb5cb49f9708ff2dffafee529641d61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 290
        $context["force_error"] = true;
        // line 291
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_7f6308a7e52bf3e8061f94580bb96683ceb5cb49f9708ff2dffafee529641d61->leave($__internal_7f6308a7e52bf3e8061f94580bb96683ceb5cb49f9708ff2dffafee529641d61_prof);

        
        $__internal_a6919bcd743d3696dea8650be195f7d30a4b099c9d7b79eae0ac319fe9c02611->leave($__internal_a6919bcd743d3696dea8650be195f7d30a4b099c9d7b79eae0ac319fe9c02611_prof);

    }

    // line 294
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_ec3c97b8fb998e005c2a1b43284589f72402574fc1c9eec3cbf23f48b4b72662 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec3c97b8fb998e005c2a1b43284589f72402574fc1c9eec3cbf23f48b4b72662->enter($__internal_ec3c97b8fb998e005c2a1b43284589f72402574fc1c9eec3cbf23f48b4b72662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_b36630c20a8226c23a54e690aa524b9b902cc6b758d033880e75da6b43bd5e09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b36630c20a8226c23a54e690aa524b9b902cc6b758d033880e75da6b43bd5e09->enter($__internal_b36630c20a8226c23a54e690aa524b9b902cc6b758d033880e75da6b43bd5e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 295
        $context["force_error"] = true;
        // line 296
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_b36630c20a8226c23a54e690aa524b9b902cc6b758d033880e75da6b43bd5e09->leave($__internal_b36630c20a8226c23a54e690aa524b9b902cc6b758d033880e75da6b43bd5e09_prof);

        
        $__internal_ec3c97b8fb998e005c2a1b43284589f72402574fc1c9eec3cbf23f48b4b72662->leave($__internal_ec3c97b8fb998e005c2a1b43284589f72402574fc1c9eec3cbf23f48b4b72662_prof);

    }

    // line 299
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_d3dbf8a61aaeee797a92ecca6cb4c64931b1ccda0ad78c2c8723f209acbe290a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3dbf8a61aaeee797a92ecca6cb4c64931b1ccda0ad78c2c8723f209acbe290a->enter($__internal_d3dbf8a61aaeee797a92ecca6cb4c64931b1ccda0ad78c2c8723f209acbe290a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_dbfd585a83beda0357e87dda2fe826117551f9461191f2ef62c3b2b75c77c496 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbfd585a83beda0357e87dda2fe826117551f9461191f2ef62c3b2b75c77c496->enter($__internal_dbfd585a83beda0357e87dda2fe826117551f9461191f2ef62c3b2b75c77c496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 300
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 301
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " error";
        }
        echo "\">
            ";
        // line 302
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 303
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_dbfd585a83beda0357e87dda2fe826117551f9461191f2ef62c3b2b75c77c496->leave($__internal_dbfd585a83beda0357e87dda2fe826117551f9461191f2ef62c3b2b75c77c496_prof);

        
        $__internal_d3dbf8a61aaeee797a92ecca6cb4c64931b1ccda0ad78c2c8723f209acbe290a->leave($__internal_d3dbf8a61aaeee797a92ecca6cb4c64931b1ccda0ad78c2c8723f209acbe290a_prof);

    }

    // line 308
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_e365414bb8e69aec3c953cfbfff4b8d32720270bc12c38a5304105568fc49985 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e365414bb8e69aec3c953cfbfff4b8d32720270bc12c38a5304105568fc49985->enter($__internal_e365414bb8e69aec3c953cfbfff4b8d32720270bc12c38a5304105568fc49985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_c4035ce0e223332069b458c1c8bae07a043c5fe4bdb0e47239b9c9e9e861399c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4035ce0e223332069b458c1c8bae07a043c5fe4bdb0e47239b9c9e9e861399c->enter($__internal_c4035ce0e223332069b458c1c8bae07a043c5fe4bdb0e47239b9c9e9e861399c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 309
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 310
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " error";
        }
        echo "\">
            ";
        // line 311
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 312
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_c4035ce0e223332069b458c1c8bae07a043c5fe4bdb0e47239b9c9e9e861399c->leave($__internal_c4035ce0e223332069b458c1c8bae07a043c5fe4bdb0e47239b9c9e9e861399c_prof);

        
        $__internal_e365414bb8e69aec3c953cfbfff4b8d32720270bc12c38a5304105568fc49985->leave($__internal_e365414bb8e69aec3c953cfbfff4b8d32720270bc12c38a5304105568fc49985_prof);

    }

    // line 319
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_0384c9d86ba6dd8ff3a3daf919d3e6d8410676cfcf36414a8b9530f83c82f742 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0384c9d86ba6dd8ff3a3daf919d3e6d8410676cfcf36414a8b9530f83c82f742->enter($__internal_0384c9d86ba6dd8ff3a3daf919d3e6d8410676cfcf36414a8b9530f83c82f742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_634372d0d7520f2f1cddddc1c86f75c198dbaf5b2c1336ca4e751c14fef82b67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_634372d0d7520f2f1cddddc1c86f75c198dbaf5b2c1336ca4e751c14fef82b67->enter($__internal_634372d0d7520f2f1cddddc1c86f75c198dbaf5b2c1336ca4e751c14fef82b67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 320
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 321
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "<small class=\"error\">";
            } else {
                echo "<div data-alert class=\"alert-box alert\">";
            }
            // line 322
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 323
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "
            ";
                // line 324
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 326
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "</small>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_634372d0d7520f2f1cddddc1c86f75c198dbaf5b2c1336ca4e751c14fef82b67->leave($__internal_634372d0d7520f2f1cddddc1c86f75c198dbaf5b2c1336ca4e751c14fef82b67_prof);

        
        $__internal_0384c9d86ba6dd8ff3a3daf919d3e6d8410676cfcf36414a8b9530f83c82f742->leave($__internal_0384c9d86ba6dd8ff3a3daf919d3e6d8410676cfcf36414a8b9530f83c82f742_prof);

    }

    public function getTemplateName()
    {
        return "foundation_5_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1078 => 326,  1062 => 324,  1058 => 323,  1041 => 322,  1035 => 321,  1033 => 320,  1024 => 319,  1011 => 312,  1007 => 311,  1001 => 310,  998 => 309,  989 => 308,  976 => 303,  972 => 302,  966 => 301,  963 => 300,  954 => 299,  943 => 296,  941 => 295,  932 => 294,  921 => 291,  919 => 290,  910 => 289,  899 => 286,  897 => 285,  888 => 284,  877 => 281,  875 => 280,  866 => 279,  853 => 274,  849 => 273,  845 => 272,  839 => 271,  836 => 270,  827 => 269,  815 => 263,  811 => 262,  795 => 261,  791 => 258,  788 => 255,  787 => 254,  786 => 253,  784 => 252,  781 => 251,  778 => 250,  775 => 249,  772 => 248,  769 => 247,  767 => 246,  764 => 245,  761 => 244,  758 => 243,  756 => 242,  747 => 241,  737 => 238,  728 => 237,  718 => 234,  709 => 233,  699 => 230,  696 => 229,  694 => 228,  691 => 227,  689 => 226,  687 => 225,  678 => 224,  668 => 221,  665 => 220,  663 => 219,  661 => 218,  652 => 217,  638 => 210,  635 => 209,  632 => 208,  630 => 207,  627 => 206,  621 => 204,  618 => 203,  616 => 202,  607 => 201,  593 => 196,  590 => 195,  584 => 193,  581 => 192,  578 => 191,  576 => 190,  573 => 189,  571 => 188,  562 => 187,  550 => 183,  543 => 181,  541 => 180,  539 => 179,  535 => 178,  530 => 177,  526 => 175,  519 => 173,  517 => 172,  515 => 171,  511 => 170,  508 => 169,  506 => 168,  497 => 167,  487 => 164,  485 => 163,  483 => 162,  477 => 159,  475 => 158,  473 => 157,  471 => 156,  469 => 155,  460 => 153,  458 => 152,  450 => 151,  447 => 149,  445 => 148,  442 => 147,  439 => 146,  437 => 145,  435 => 144,  432 => 143,  429 => 142,  427 => 141,  425 => 140,  416 => 139,  405 => 136,  401 => 134,  398 => 133,  390 => 128,  379 => 121,  371 => 116,  358 => 106,  347 => 99,  344 => 98,  338 => 96,  335 => 95,  332 => 94,  329 => 92,  327 => 91,  318 => 90,  307 => 87,  303 => 85,  301 => 84,  299 => 82,  298 => 81,  297 => 80,  296 => 79,  290 => 77,  287 => 76,  284 => 75,  281 => 73,  279 => 72,  270 => 71,  256 => 66,  252 => 65,  248 => 64,  243 => 62,  239 => 61,  236 => 60,  233 => 59,  230 => 57,  228 => 56,  219 => 55,  205 => 48,  203 => 47,  200 => 45,  191 => 44,  181 => 41,  175 => 38,  172 => 37,  170 => 36,  167 => 35,  165 => 34,  163 => 33,  157 => 30,  154 => 29,  151 => 28,  149 => 27,  146 => 26,  137 => 25,  127 => 22,  125 => 21,  116 => 20,  106 => 17,  103 => 16,  101 => 15,  99 => 14,  90 => 13,  80 => 10,  77 => 9,  75 => 8,  73 => 7,  64 => 6,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"form_div_layout.html.twig\" %}

{# Based on Foundation 5 Doc #}
{# Widgets #}

{% block form_widget_simple -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' button')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"row collapse\">
        {% set prepend = '{{' == money_pattern[0:2] %}
        {% if not prepend %}
            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
        <div class=\"small-9 large-10 columns\">
            {{- block('form_widget_simple') -}}
        </div>
        {% if prepend %}
            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"row collapse\">
        <div class=\"small-9 large-10 columns\">
            {{- block('form_widget_simple') -}}
        </div>
        <div class=\"small-3 large-2 columns\">
            <span class=\"postfix\">%</span>
        </div>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        <div class=\"row\">
            <div class=\"large-7 columns\">{{ form_errors(form.date) }}</div>
            <div class=\"large-5 columns\">{{ form_errors(form.time) }}</div>
        </div>
        <div {{ block('widget_container_attributes') }}>
            <div class=\"large-7 columns\">{{ form_widget(form.date, { datetime: true } ) }}</div>
            <div class=\"large-5 columns\">{{ form_widget(form.time, { datetime: true } ) }}</div>
        </div>
    {% endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        {% if datetime is not defined or not datetime %}
            <div {{ block('widget_container_attributes') }}>
        {% endif %}
        {{- date_pattern|replace({
            '{{ year }}': '<div class=\"large-4 columns\">' ~ form_widget(form.year) ~ '</div>',
            '{{ month }}': '<div class=\"large-4 columns\">' ~ form_widget(form.month) ~ '</div>',
            '{{ day }}': '<div class=\"large-4 columns\">' ~ form_widget(form.day) ~ '</div>',
        })|raw -}}
        {% if datetime is not defined or not datetime %}
            </div>
        {% endif %}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        {% if datetime is not defined or false == datetime %}
            <div {{ block('widget_container_attributes') -}}>
        {% endif %}
        {% if with_seconds %}
            <div class=\"large-4 columns\">{{ form_widget(form.hour) }}</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.minute) }}
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.second) }}
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"large-6 columns\">{{ form_widget(form.hour) }}</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.minute) }}
                    </div>
                </div>
            </div>
        {% endif %}
        {% if datetime is not defined or false == datetime %}
            </div>
        {% endif %}
    {% endif %}
{%- endblock time_widget %}

{% block choice_widget_collapsed -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}

    {% if multiple -%}
        {% set attr = attr|merge({style: (attr.style|default('') ~ ' height: auto; background-image: none;')|trim}) %}
    {% endif %}

    {% if required and placeholder is none and not placeholder_in_choices and not multiple -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\" data-customforms=\"disabled\"{% endif %}>
        {% if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain) }}</option>
        {%- endif %}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {% if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif %}
        {%- endif -%}
        {% set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') %}
        <ul class=\"inline-list\">
            {% for child in form %}
                <li>{{ form_widget(child, {
                        parent_label_class: label_attr.class|default(''),
                    }) }}</li>
            {% endfor %}
        </ul>
    {% else %}
        <div {{ block('widget_container_attributes') }}>
            {% for child in form %}
                {{ form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                }) }}
            {% endfor %}
        </div>
    {% endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {% set parent_label_class = parent_label_class|default('') %}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {% if 'checkbox-inline' in parent_label_class %}
        {{ form_label(form, null, { widget: parent() }) }}
    {% else %}
        <div class=\"checkbox\">
            {{ form_label(form, null, { widget: parent() }) }}
        </div>
    {% endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {% set parent_label_class = parent_label_class|default('') %}
    {% if 'radio-inline' in parent_label_class %}
        {{ form_label(form, null, { widget: parent() }) }}
    {% else %}
        {% if errors|length > 0 -%}
            {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
        {% endif %}
        <div class=\"radio\">
            {{ form_label(form, null, { widget: parent() }) }}
        </div>
    {% endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {% set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) %}
    {{- block('form_label') -}}
{%- endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label -%}
    {% if required %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
    {% endif %}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {% if parent_label_class is defined %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ parent_label_class)|trim}) %}
    {% endif %}
    {% if label is empty %}
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
        {{ widget|raw }}
        {{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}
    </label>
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if (not compound or force_error|default(false)) and not valid %} error{% endif %}\">
            {{ form_label(form) }}
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock form_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if not valid %} error{% endif %}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if not valid %} error{% endif %}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
        {% if form.parent %}<small class=\"error\">{% else %}<div data-alert class=\"alert-box alert\">{% endif %}
        {%- for error in errors -%}
            {{ error.message }}
            {% if not loop.last %}, {% endif %}
        {%- endfor -%}
        {% if form.parent %}</small>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "foundation_5_layout.html.twig", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/foundation_5_layout.html.twig");
    }
}
