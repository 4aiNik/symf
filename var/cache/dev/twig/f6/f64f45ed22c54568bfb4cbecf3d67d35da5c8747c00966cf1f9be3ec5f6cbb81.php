<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_54b6547e40b9ce73ef24dcf5c8031c850416d5d0645041032368b1bc5f84ea31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'checkbox_radio_row' => array($this, 'block_checkbox_radio_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_138bdecd6a024f7e6c5b39ccead46bc4a01baff1249d9a9fda53247bbc9f0aee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_138bdecd6a024f7e6c5b39ccead46bc4a01baff1249d9a9fda53247bbc9f0aee->enter($__internal_138bdecd6a024f7e6c5b39ccead46bc4a01baff1249d9a9fda53247bbc9f0aee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_9f9f5454e30ca504aad3f75ee6a4e093583b671390138c80dae75f36823006b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f9f5454e30ca504aad3f75ee6a4e093583b671390138c80dae75f36823006b8->enter($__internal_9f9f5454e30ca504aad3f75ee6a4e093583b671390138c80dae75f36823006b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 24
        echo "
";
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('radio_row', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('submit_row', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('reset_row', $context, $blocks);
        // line 78
        echo "
";
        // line 79
        $this->displayBlock('form_group_class', $context, $blocks);
        
        $__internal_138bdecd6a024f7e6c5b39ccead46bc4a01baff1249d9a9fda53247bbc9f0aee->leave($__internal_138bdecd6a024f7e6c5b39ccead46bc4a01baff1249d9a9fda53247bbc9f0aee_prof);

        
        $__internal_9f9f5454e30ca504aad3f75ee6a4e093583b671390138c80dae75f36823006b8->leave($__internal_9f9f5454e30ca504aad3f75ee6a4e093583b671390138c80dae75f36823006b8_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_46b8d153df290d8888479ec22f3b8f5d790ebcbe9bd42f1f8117b95ce3cb4bcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46b8d153df290d8888479ec22f3b8f5d790ebcbe9bd42f1f8117b95ce3cb4bcb->enter($__internal_46b8d153df290d8888479ec22f3b8f5d790ebcbe9bd42f1f8117b95ce3cb4bcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_0a538c6dde18e701c3cbb5c3784f27366706f34a5e57b3a371767cc670755cdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a538c6dde18e701c3cbb5c3784f27366706f34a5e57b3a371767cc670755cdd->enter($__internal_0a538c6dde18e701c3cbb5c3784f27366706f34a5e57b3a371767cc670755cdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_0a538c6dde18e701c3cbb5c3784f27366706f34a5e57b3a371767cc670755cdd->leave($__internal_0a538c6dde18e701c3cbb5c3784f27366706f34a5e57b3a371767cc670755cdd_prof);

        
        $__internal_46b8d153df290d8888479ec22f3b8f5d790ebcbe9bd42f1f8117b95ce3cb4bcb->leave($__internal_46b8d153df290d8888479ec22f3b8f5d790ebcbe9bd42f1f8117b95ce3cb4bcb_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_16d97750c2f5e2ce597983a18f6934c83aa9d5c575d2848268e3e2b92c44e8d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16d97750c2f5e2ce597983a18f6934c83aa9d5c575d2848268e3e2b92c44e8d8->enter($__internal_16d97750c2f5e2ce597983a18f6934c83aa9d5c575d2848268e3e2b92c44e8d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_781a1a85e47443fed6608fc89496687fb44d8df827051e143410b8327abde68b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_781a1a85e47443fed6608fc89496687fb44d8df827051e143410b8327abde68b->enter($__internal_781a1a85e47443fed6608fc89496687fb44d8df827051e143410b8327abde68b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        ob_start();
        // line 12
        echo "    ";
        if ((($context["label"] ?? $this->getContext($context, "label")) === false)) {
            // line 13
            echo "        <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
    ";
        } else {
            // line 15
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 16
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_781a1a85e47443fed6608fc89496687fb44d8df827051e143410b8327abde68b->leave($__internal_781a1a85e47443fed6608fc89496687fb44d8df827051e143410b8327abde68b_prof);

        
        $__internal_16d97750c2f5e2ce597983a18f6934c83aa9d5c575d2848268e3e2b92c44e8d8->leave($__internal_16d97750c2f5e2ce597983a18f6934c83aa9d5c575d2848268e3e2b92c44e8d8_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_f4d7854377dd92cd66179266270697b7a4819879c30b78e7efd5e5379f98b8db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4d7854377dd92cd66179266270697b7a4819879c30b78e7efd5e5379f98b8db->enter($__internal_f4d7854377dd92cd66179266270697b7a4819879c30b78e7efd5e5379f98b8db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_7a61f24a1093421f57f317a991d28ad900dbf5bbad895265e57b575cbb592e4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a61f24a1093421f57f317a991d28ad900dbf5bbad895265e57b575cbb592e4f->enter($__internal_7a61f24a1093421f57f317a991d28ad900dbf5bbad895265e57b575cbb592e4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-2";
        
        $__internal_7a61f24a1093421f57f317a991d28ad900dbf5bbad895265e57b575cbb592e4f->leave($__internal_7a61f24a1093421f57f317a991d28ad900dbf5bbad895265e57b575cbb592e4f_prof);

        
        $__internal_f4d7854377dd92cd66179266270697b7a4819879c30b78e7efd5e5379f98b8db->leave($__internal_f4d7854377dd92cd66179266270697b7a4819879c30b78e7efd5e5379f98b8db_prof);

    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_58478bd04ab1d677a0336e3d2a84a6c1959e2004e1828023fa8b60975d0e84ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58478bd04ab1d677a0336e3d2a84a6c1959e2004e1828023fa8b60975d0e84ef->enter($__internal_58478bd04ab1d677a0336e3d2a84a6c1959e2004e1828023fa8b60975d0e84ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_ffd9070ac7b0b6b5fa03e7a8de410d1decb3d505bac70d0937d1bccd879f6946 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffd9070ac7b0b6b5fa03e7a8de410d1decb3d505bac70d0937d1bccd879f6946->enter($__internal_ffd9070ac7b0b6b5fa03e7a8de410d1decb3d505bac70d0937d1bccd879f6946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 28
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 30
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 33
        echo "</div>
";
        // line 34
        echo "</div>";
        
        $__internal_ffd9070ac7b0b6b5fa03e7a8de410d1decb3d505bac70d0937d1bccd879f6946->leave($__internal_ffd9070ac7b0b6b5fa03e7a8de410d1decb3d505bac70d0937d1bccd879f6946_prof);

        
        $__internal_58478bd04ab1d677a0336e3d2a84a6c1959e2004e1828023fa8b60975d0e84ef->leave($__internal_58478bd04ab1d677a0336e3d2a84a6c1959e2004e1828023fa8b60975d0e84ef_prof);

    }

    // line 37
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_60a03a89d8e46a1a02a514fe27e7d910b5b6ecacb6a214dad00493a61e76258c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60a03a89d8e46a1a02a514fe27e7d910b5b6ecacb6a214dad00493a61e76258c->enter($__internal_60a03a89d8e46a1a02a514fe27e7d910b5b6ecacb6a214dad00493a61e76258c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_06b6161f36590df33daba75e7b63207ff5f0d52b6cc81757fa00f4180443fb97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06b6161f36590df33daba75e7b63207ff5f0d52b6cc81757fa00f4180443fb97->enter($__internal_06b6161f36590df33daba75e7b63207ff5f0d52b6cc81757fa00f4180443fb97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 38
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_06b6161f36590df33daba75e7b63207ff5f0d52b6cc81757fa00f4180443fb97->leave($__internal_06b6161f36590df33daba75e7b63207ff5f0d52b6cc81757fa00f4180443fb97_prof);

        
        $__internal_60a03a89d8e46a1a02a514fe27e7d910b5b6ecacb6a214dad00493a61e76258c->leave($__internal_60a03a89d8e46a1a02a514fe27e7d910b5b6ecacb6a214dad00493a61e76258c_prof);

    }

    // line 41
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_9ead35c31e913bda84ec314a59b3b8415ce4f37b1a64bf5dffd022f71bb53f04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ead35c31e913bda84ec314a59b3b8415ce4f37b1a64bf5dffd022f71bb53f04->enter($__internal_9ead35c31e913bda84ec314a59b3b8415ce4f37b1a64bf5dffd022f71bb53f04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_503c5ed85eb0cc111660926ec51820f11a990744e5a1205ddf038be19a5b8349 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_503c5ed85eb0cc111660926ec51820f11a990744e5a1205ddf038be19a5b8349->enter($__internal_503c5ed85eb0cc111660926ec51820f11a990744e5a1205ddf038be19a5b8349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 42
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_503c5ed85eb0cc111660926ec51820f11a990744e5a1205ddf038be19a5b8349->leave($__internal_503c5ed85eb0cc111660926ec51820f11a990744e5a1205ddf038be19a5b8349_prof);

        
        $__internal_9ead35c31e913bda84ec314a59b3b8415ce4f37b1a64bf5dffd022f71bb53f04->leave($__internal_9ead35c31e913bda84ec314a59b3b8415ce4f37b1a64bf5dffd022f71bb53f04_prof);

    }

    // line 45
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_3ecd6034bcd6312fa8b10824aef7b4069b193414fee2d36e614113f2b9164a28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ecd6034bcd6312fa8b10824aef7b4069b193414fee2d36e614113f2b9164a28->enter($__internal_3ecd6034bcd6312fa8b10824aef7b4069b193414fee2d36e614113f2b9164a28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_756e772b7648658b6c5a7b1e4c856bf9149d1452a2204dbc74443775f7c2dac5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_756e772b7648658b6c5a7b1e4c856bf9149d1452a2204dbc74443775f7c2dac5->enter($__internal_756e772b7648658b6c5a7b1e4c856bf9149d1452a2204dbc74443775f7c2dac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 46
        ob_start();
        // line 47
        echo "    <div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">
        <div class=\"";
        // line 48
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 49
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_756e772b7648658b6c5a7b1e4c856bf9149d1452a2204dbc74443775f7c2dac5->leave($__internal_756e772b7648658b6c5a7b1e4c856bf9149d1452a2204dbc74443775f7c2dac5_prof);

        
        $__internal_3ecd6034bcd6312fa8b10824aef7b4069b193414fee2d36e614113f2b9164a28->leave($__internal_3ecd6034bcd6312fa8b10824aef7b4069b193414fee2d36e614113f2b9164a28_prof);

    }

    // line 57
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_1ba4a9b7bc4d5dfd3c566c001cec6e5f3ba955399a7e3c4b89c2db7dca237b30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ba4a9b7bc4d5dfd3c566c001cec6e5f3ba955399a7e3c4b89c2db7dca237b30->enter($__internal_1ba4a9b7bc4d5dfd3c566c001cec6e5f3ba955399a7e3c4b89c2db7dca237b30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_d28def39b0b6e6bab2d0089407fbb97920349db66324e6ece5d677339485a8dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d28def39b0b6e6bab2d0089407fbb97920349db66324e6ece5d677339485a8dc->enter($__internal_d28def39b0b6e6bab2d0089407fbb97920349db66324e6ece5d677339485a8dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 58
        ob_start();
        // line 59
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 60
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 61
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_d28def39b0b6e6bab2d0089407fbb97920349db66324e6ece5d677339485a8dc->leave($__internal_d28def39b0b6e6bab2d0089407fbb97920349db66324e6ece5d677339485a8dc_prof);

        
        $__internal_1ba4a9b7bc4d5dfd3c566c001cec6e5f3ba955399a7e3c4b89c2db7dca237b30->leave($__internal_1ba4a9b7bc4d5dfd3c566c001cec6e5f3ba955399a7e3c4b89c2db7dca237b30_prof);

    }

    // line 68
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_e7f95e3c21da5468d126811840167fe1535954e11b4fc6b7ef1beccb220ffdd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7f95e3c21da5468d126811840167fe1535954e11b4fc6b7ef1beccb220ffdd9->enter($__internal_e7f95e3c21da5468d126811840167fe1535954e11b4fc6b7ef1beccb220ffdd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_a42eb7c7a4374203399fbfeec230cb6b1ba7eab77d235607d9f2ad228043d7e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a42eb7c7a4374203399fbfeec230cb6b1ba7eab77d235607d9f2ad228043d7e5->enter($__internal_a42eb7c7a4374203399fbfeec230cb6b1ba7eab77d235607d9f2ad228043d7e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 69
        ob_start();
        // line 70
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 71
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 72
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_a42eb7c7a4374203399fbfeec230cb6b1ba7eab77d235607d9f2ad228043d7e5->leave($__internal_a42eb7c7a4374203399fbfeec230cb6b1ba7eab77d235607d9f2ad228043d7e5_prof);

        
        $__internal_e7f95e3c21da5468d126811840167fe1535954e11b4fc6b7ef1beccb220ffdd9->leave($__internal_e7f95e3c21da5468d126811840167fe1535954e11b4fc6b7ef1beccb220ffdd9_prof);

    }

    // line 79
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_100f2e644b79cb850f59e4b047f28b44772b9b2aa08791436fd6fafd6075e7ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_100f2e644b79cb850f59e4b047f28b44772b9b2aa08791436fd6fafd6075e7ff->enter($__internal_100f2e644b79cb850f59e4b047f28b44772b9b2aa08791436fd6fafd6075e7ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_a83297f945fdebfaf841878c09fcb6b4f279e6699a53ec94739f539cdbf66e24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a83297f945fdebfaf841878c09fcb6b4f279e6699a53ec94739f539cdbf66e24->enter($__internal_a83297f945fdebfaf841878c09fcb6b4f279e6699a53ec94739f539cdbf66e24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 80
        echo "col-sm-10";
        
        $__internal_a83297f945fdebfaf841878c09fcb6b4f279e6699a53ec94739f539cdbf66e24->leave($__internal_a83297f945fdebfaf841878c09fcb6b4f279e6699a53ec94739f539cdbf66e24_prof);

        
        $__internal_100f2e644b79cb850f59e4b047f28b44772b9b2aa08791436fd6fafd6075e7ff->leave($__internal_100f2e644b79cb850f59e4b047f28b44772b9b2aa08791436fd6fafd6075e7ff_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  390 => 80,  381 => 79,  366 => 73,  362 => 72,  358 => 71,  355 => 70,  353 => 69,  344 => 68,  329 => 62,  325 => 61,  321 => 60,  318 => 59,  316 => 58,  307 => 57,  292 => 51,  288 => 50,  284 => 49,  280 => 48,  273 => 47,  271 => 46,  262 => 45,  252 => 42,  243 => 41,  233 => 38,  224 => 37,  214 => 34,  211 => 33,  209 => 32,  207 => 31,  203 => 30,  201 => 29,  195 => 28,  186 => 27,  176 => 22,  167 => 21,  155 => 16,  152 => 15,  146 => 13,  143 => 12,  141 => 11,  132 => 10,  122 => 5,  120 => 4,  111 => 3,  101 => 79,  98 => 78,  96 => 68,  93 => 67,  91 => 57,  88 => 56,  86 => 45,  83 => 44,  81 => 41,  78 => 40,  76 => 37,  73 => 36,  71 => 27,  68 => 26,  65 => 24,  63 => 21,  60 => 20,  58 => 10,  55 => 9,  52 => 7,  50 => 3,  47 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
{% spaceless %}
    {% if label is same as(false) %}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {% else %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) %}
        {{- parent() -}}
    {% endif %}
{% endspaceless %}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
{##}</div>
{%- endblock form_row %}

{% block checkbox_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock checkbox_row %}

{% block radio_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock radio_row %}

{% block checkbox_radio_row -%}
{% spaceless %}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{% endspaceless %}
{%- endblock checkbox_radio_row %}

{% block submit_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock submit_row %}

{% block reset_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}
", "bootstrap_3_horizontal_layout.html.twig", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_horizontal_layout.html.twig");
    }
}
