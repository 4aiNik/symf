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
        $__internal_ba8a3303a2ce0114fb988195945df596cf199182b145c68a65c5491e68cffacf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba8a3303a2ce0114fb988195945df596cf199182b145c68a65c5491e68cffacf->enter($__internal_ba8a3303a2ce0114fb988195945df596cf199182b145c68a65c5491e68cffacf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_dce9c7c2663b09e2940079e65ca6b124ec3bd06cbd5338c19f1fa0051c0404d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dce9c7c2663b09e2940079e65ca6b124ec3bd06cbd5338c19f1fa0051c0404d3->enter($__internal_dce9c7c2663b09e2940079e65ca6b124ec3bd06cbd5338c19f1fa0051c0404d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

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
        
        $__internal_ba8a3303a2ce0114fb988195945df596cf199182b145c68a65c5491e68cffacf->leave($__internal_ba8a3303a2ce0114fb988195945df596cf199182b145c68a65c5491e68cffacf_prof);

        
        $__internal_dce9c7c2663b09e2940079e65ca6b124ec3bd06cbd5338c19f1fa0051c0404d3->leave($__internal_dce9c7c2663b09e2940079e65ca6b124ec3bd06cbd5338c19f1fa0051c0404d3_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_68e1b9fd6e0b6aec6541ac4d6326db75ef699c01eb767a43ae91d87b6ee5b9f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68e1b9fd6e0b6aec6541ac4d6326db75ef699c01eb767a43ae91d87b6ee5b9f5->enter($__internal_68e1b9fd6e0b6aec6541ac4d6326db75ef699c01eb767a43ae91d87b6ee5b9f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_37fb9dcb4d999522359f56a76bd890d469f69a0433cfa158bac41ccbaa924e32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37fb9dcb4d999522359f56a76bd890d469f69a0433cfa158bac41ccbaa924e32->enter($__internal_37fb9dcb4d999522359f56a76bd890d469f69a0433cfa158bac41ccbaa924e32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_37fb9dcb4d999522359f56a76bd890d469f69a0433cfa158bac41ccbaa924e32->leave($__internal_37fb9dcb4d999522359f56a76bd890d469f69a0433cfa158bac41ccbaa924e32_prof);

        
        $__internal_68e1b9fd6e0b6aec6541ac4d6326db75ef699c01eb767a43ae91d87b6ee5b9f5->leave($__internal_68e1b9fd6e0b6aec6541ac4d6326db75ef699c01eb767a43ae91d87b6ee5b9f5_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_d9687e2ea8920e80d15cf73aea15b560bd3d4ec339f847084d7089f90042c7c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9687e2ea8920e80d15cf73aea15b560bd3d4ec339f847084d7089f90042c7c0->enter($__internal_d9687e2ea8920e80d15cf73aea15b560bd3d4ec339f847084d7089f90042c7c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_882d3c3adf7829bedf8363604b1900cfbf50ff0394d0f1b69d1d2dd54e57a3f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_882d3c3adf7829bedf8363604b1900cfbf50ff0394d0f1b69d1d2dd54e57a3f9->enter($__internal_882d3c3adf7829bedf8363604b1900cfbf50ff0394d0f1b69d1d2dd54e57a3f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_882d3c3adf7829bedf8363604b1900cfbf50ff0394d0f1b69d1d2dd54e57a3f9->leave($__internal_882d3c3adf7829bedf8363604b1900cfbf50ff0394d0f1b69d1d2dd54e57a3f9_prof);

        
        $__internal_d9687e2ea8920e80d15cf73aea15b560bd3d4ec339f847084d7089f90042c7c0->leave($__internal_d9687e2ea8920e80d15cf73aea15b560bd3d4ec339f847084d7089f90042c7c0_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_9c333b9edbda2f338bcbd8d3fb56ab93708001d51efd900d0300caa0484919f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c333b9edbda2f338bcbd8d3fb56ab93708001d51efd900d0300caa0484919f5->enter($__internal_9c333b9edbda2f338bcbd8d3fb56ab93708001d51efd900d0300caa0484919f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_30842ce77c12d11ec6e9d215cf0f296fcc3df07baf3a1ea7dc066e6f752f6b91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30842ce77c12d11ec6e9d215cf0f296fcc3df07baf3a1ea7dc066e6f752f6b91->enter($__internal_30842ce77c12d11ec6e9d215cf0f296fcc3df07baf3a1ea7dc066e6f752f6b91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-2";
        
        $__internal_30842ce77c12d11ec6e9d215cf0f296fcc3df07baf3a1ea7dc066e6f752f6b91->leave($__internal_30842ce77c12d11ec6e9d215cf0f296fcc3df07baf3a1ea7dc066e6f752f6b91_prof);

        
        $__internal_9c333b9edbda2f338bcbd8d3fb56ab93708001d51efd900d0300caa0484919f5->leave($__internal_9c333b9edbda2f338bcbd8d3fb56ab93708001d51efd900d0300caa0484919f5_prof);

    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_355c9514312e6fbadadc6551f0be40cf9d130ab5f2448e03510be994e27eb07a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_355c9514312e6fbadadc6551f0be40cf9d130ab5f2448e03510be994e27eb07a->enter($__internal_355c9514312e6fbadadc6551f0be40cf9d130ab5f2448e03510be994e27eb07a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_62299c9bc1a3a0d0eff08fa5dc71bcbe2091bcd3b7a3a4d00c2aa4affee0663e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62299c9bc1a3a0d0eff08fa5dc71bcbe2091bcd3b7a3a4d00c2aa4affee0663e->enter($__internal_62299c9bc1a3a0d0eff08fa5dc71bcbe2091bcd3b7a3a4d00c2aa4affee0663e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_62299c9bc1a3a0d0eff08fa5dc71bcbe2091bcd3b7a3a4d00c2aa4affee0663e->leave($__internal_62299c9bc1a3a0d0eff08fa5dc71bcbe2091bcd3b7a3a4d00c2aa4affee0663e_prof);

        
        $__internal_355c9514312e6fbadadc6551f0be40cf9d130ab5f2448e03510be994e27eb07a->leave($__internal_355c9514312e6fbadadc6551f0be40cf9d130ab5f2448e03510be994e27eb07a_prof);

    }

    // line 37
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_6c7bf1647c13dcd7e81d5f8d5a53322a78508600c0786222df9a7148965eacf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c7bf1647c13dcd7e81d5f8d5a53322a78508600c0786222df9a7148965eacf1->enter($__internal_6c7bf1647c13dcd7e81d5f8d5a53322a78508600c0786222df9a7148965eacf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_56ae790f98f88977a59c41298c8f076072da8b4b68ba52414ef408ec97db8be2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56ae790f98f88977a59c41298c8f076072da8b4b68ba52414ef408ec97db8be2->enter($__internal_56ae790f98f88977a59c41298c8f076072da8b4b68ba52414ef408ec97db8be2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 38
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_56ae790f98f88977a59c41298c8f076072da8b4b68ba52414ef408ec97db8be2->leave($__internal_56ae790f98f88977a59c41298c8f076072da8b4b68ba52414ef408ec97db8be2_prof);

        
        $__internal_6c7bf1647c13dcd7e81d5f8d5a53322a78508600c0786222df9a7148965eacf1->leave($__internal_6c7bf1647c13dcd7e81d5f8d5a53322a78508600c0786222df9a7148965eacf1_prof);

    }

    // line 41
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_b207be2b5bb9a37e77c20392b64d658e9cec5f3ba7cf133283fca0e623a70e0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b207be2b5bb9a37e77c20392b64d658e9cec5f3ba7cf133283fca0e623a70e0c->enter($__internal_b207be2b5bb9a37e77c20392b64d658e9cec5f3ba7cf133283fca0e623a70e0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_f672a73254335b4528ea43640680b5b550d9ad65ef7a5606589b67337a2d8e73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f672a73254335b4528ea43640680b5b550d9ad65ef7a5606589b67337a2d8e73->enter($__internal_f672a73254335b4528ea43640680b5b550d9ad65ef7a5606589b67337a2d8e73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 42
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_f672a73254335b4528ea43640680b5b550d9ad65ef7a5606589b67337a2d8e73->leave($__internal_f672a73254335b4528ea43640680b5b550d9ad65ef7a5606589b67337a2d8e73_prof);

        
        $__internal_b207be2b5bb9a37e77c20392b64d658e9cec5f3ba7cf133283fca0e623a70e0c->leave($__internal_b207be2b5bb9a37e77c20392b64d658e9cec5f3ba7cf133283fca0e623a70e0c_prof);

    }

    // line 45
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_df6860be326d88657e6889ad0b4b5e2c46f578953fc0ef266cc985cdeebd1ea2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df6860be326d88657e6889ad0b4b5e2c46f578953fc0ef266cc985cdeebd1ea2->enter($__internal_df6860be326d88657e6889ad0b4b5e2c46f578953fc0ef266cc985cdeebd1ea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_3c8f3960ea865d1334ca288e8ef5d310634e43742b2ebae71abf35fc1ac9fa77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c8f3960ea865d1334ca288e8ef5d310634e43742b2ebae71abf35fc1ac9fa77->enter($__internal_3c8f3960ea865d1334ca288e8ef5d310634e43742b2ebae71abf35fc1ac9fa77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

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
        
        $__internal_3c8f3960ea865d1334ca288e8ef5d310634e43742b2ebae71abf35fc1ac9fa77->leave($__internal_3c8f3960ea865d1334ca288e8ef5d310634e43742b2ebae71abf35fc1ac9fa77_prof);

        
        $__internal_df6860be326d88657e6889ad0b4b5e2c46f578953fc0ef266cc985cdeebd1ea2->leave($__internal_df6860be326d88657e6889ad0b4b5e2c46f578953fc0ef266cc985cdeebd1ea2_prof);

    }

    // line 57
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_896f004dda5196649795c48ac3925175ce8c94788c7c9d34aabc80d7d80cc922 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_896f004dda5196649795c48ac3925175ce8c94788c7c9d34aabc80d7d80cc922->enter($__internal_896f004dda5196649795c48ac3925175ce8c94788c7c9d34aabc80d7d80cc922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_b61f4277b35eee14e48e9b7f755abfc4ce457b9777767d03b0c2e8f75f33a578 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b61f4277b35eee14e48e9b7f755abfc4ce457b9777767d03b0c2e8f75f33a578->enter($__internal_b61f4277b35eee14e48e9b7f755abfc4ce457b9777767d03b0c2e8f75f33a578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_b61f4277b35eee14e48e9b7f755abfc4ce457b9777767d03b0c2e8f75f33a578->leave($__internal_b61f4277b35eee14e48e9b7f755abfc4ce457b9777767d03b0c2e8f75f33a578_prof);

        
        $__internal_896f004dda5196649795c48ac3925175ce8c94788c7c9d34aabc80d7d80cc922->leave($__internal_896f004dda5196649795c48ac3925175ce8c94788c7c9d34aabc80d7d80cc922_prof);

    }

    // line 68
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_7e74fb3e787df28efe4239045336c775f7616c03a12876b6e339d5dff8b68db8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e74fb3e787df28efe4239045336c775f7616c03a12876b6e339d5dff8b68db8->enter($__internal_7e74fb3e787df28efe4239045336c775f7616c03a12876b6e339d5dff8b68db8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_3d29d7d84df066b7da41f405acd442537a9284d47a3e4b13b6b2fcb42585dd4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d29d7d84df066b7da41f405acd442537a9284d47a3e4b13b6b2fcb42585dd4f->enter($__internal_3d29d7d84df066b7da41f405acd442537a9284d47a3e4b13b6b2fcb42585dd4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_3d29d7d84df066b7da41f405acd442537a9284d47a3e4b13b6b2fcb42585dd4f->leave($__internal_3d29d7d84df066b7da41f405acd442537a9284d47a3e4b13b6b2fcb42585dd4f_prof);

        
        $__internal_7e74fb3e787df28efe4239045336c775f7616c03a12876b6e339d5dff8b68db8->leave($__internal_7e74fb3e787df28efe4239045336c775f7616c03a12876b6e339d5dff8b68db8_prof);

    }

    // line 79
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_70b332a374361036a1a98abf8c8f6a672ccbceadc9a56924ef10ccc27a13c3bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70b332a374361036a1a98abf8c8f6a672ccbceadc9a56924ef10ccc27a13c3bd->enter($__internal_70b332a374361036a1a98abf8c8f6a672ccbceadc9a56924ef10ccc27a13c3bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_3c5ccf7115d400f206cb2e784c23c43d931589a305255c49bb66122121be2b7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c5ccf7115d400f206cb2e784c23c43d931589a305255c49bb66122121be2b7d->enter($__internal_3c5ccf7115d400f206cb2e784c23c43d931589a305255c49bb66122121be2b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 80
        echo "col-sm-10";
        
        $__internal_3c5ccf7115d400f206cb2e784c23c43d931589a305255c49bb66122121be2b7d->leave($__internal_3c5ccf7115d400f206cb2e784c23c43d931589a305255c49bb66122121be2b7d_prof);

        
        $__internal_70b332a374361036a1a98abf8c8f6a672ccbceadc9a56924ef10ccc27a13c3bd->leave($__internal_70b332a374361036a1a98abf8c8f6a672ccbceadc9a56924ef10ccc27a13c3bd_prof);

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
