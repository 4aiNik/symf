<?php

/* @App/index.html.twig */
class __TwigTemplate_1c4a1e1145aed139f1070c8f90e393271453cbcf04cc1701f68dcb39777eecc2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'style' => array($this, 'block_style'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_43e95b95d374dbda4e3df252a5823ab86b17b00d8608bafc980e6989415609fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43e95b95d374dbda4e3df252a5823ab86b17b00d8608bafc980e6989415609fb->enter($__internal_43e95b95d374dbda4e3df252a5823ab86b17b00d8608bafc980e6989415609fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/index.html.twig"));

        $__internal_9ca389576e4a2229d21bcde26f7dfada26374f452d888768ea88fb8e7cbb1dc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ca389576e4a2229d21bcde26f7dfada26374f452d888768ea88fb8e7cbb1dc3->enter($__internal_9ca389576e4a2229d21bcde26f7dfada26374f452d888768ea88fb8e7cbb1dc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/index.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"ru\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Skillup | ";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/style.css"), "html", null, true);
        echo "\">

    <style>";
        // line 12
        $this->displayBlock('style', $context, $blocks);
        echo "</style>

</head>
<body>

";
        // line 17
        $this->displayBlock('body', $context, $blocks);
        // line 18
        echo "


";
        // line 21
        $this->displayBlock('javascript', $context, $blocks);
        // line 22
        echo "
</body>
</html>";
        
        $__internal_43e95b95d374dbda4e3df252a5823ab86b17b00d8608bafc980e6989415609fb->leave($__internal_43e95b95d374dbda4e3df252a5823ab86b17b00d8608bafc980e6989415609fb_prof);

        
        $__internal_9ca389576e4a2229d21bcde26f7dfada26374f452d888768ea88fb8e7cbb1dc3->leave($__internal_9ca389576e4a2229d21bcde26f7dfada26374f452d888768ea88fb8e7cbb1dc3_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_d59d94f4f1b87c0f8d23beba96ed12b0ce69678d8c219ad8106c61529a1e014c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d59d94f4f1b87c0f8d23beba96ed12b0ce69678d8c219ad8106c61529a1e014c->enter($__internal_d59d94f4f1b87c0f8d23beba96ed12b0ce69678d8c219ad8106c61529a1e014c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_13effef18ae9a45ae9beb15284fd230ea6a255503fe66367d32da4342f7f82ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13effef18ae9a45ae9beb15284fd230ea6a255503fe66367d32da4342f7f82ed->enter($__internal_13effef18ae9a45ae9beb15284fd230ea6a255503fe66367d32da4342f7f82ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_13effef18ae9a45ae9beb15284fd230ea6a255503fe66367d32da4342f7f82ed->leave($__internal_13effef18ae9a45ae9beb15284fd230ea6a255503fe66367d32da4342f7f82ed_prof);

        
        $__internal_d59d94f4f1b87c0f8d23beba96ed12b0ce69678d8c219ad8106c61529a1e014c->leave($__internal_d59d94f4f1b87c0f8d23beba96ed12b0ce69678d8c219ad8106c61529a1e014c_prof);

    }

    // line 12
    public function block_style($context, array $blocks = array())
    {
        $__internal_2fb9dab7de681df506d05fd19a5f8efa897f669a524329f681b119fa15d91178 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fb9dab7de681df506d05fd19a5f8efa897f669a524329f681b119fa15d91178->enter($__internal_2fb9dab7de681df506d05fd19a5f8efa897f669a524329f681b119fa15d91178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_592b3f8d3d8930f3cfa546de61ec4ca613245d5f08d3ba3e1d197df7d455a359 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_592b3f8d3d8930f3cfa546de61ec4ca613245d5f08d3ba3e1d197df7d455a359->enter($__internal_592b3f8d3d8930f3cfa546de61ec4ca613245d5f08d3ba3e1d197df7d455a359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        
        $__internal_592b3f8d3d8930f3cfa546de61ec4ca613245d5f08d3ba3e1d197df7d455a359->leave($__internal_592b3f8d3d8930f3cfa546de61ec4ca613245d5f08d3ba3e1d197df7d455a359_prof);

        
        $__internal_2fb9dab7de681df506d05fd19a5f8efa897f669a524329f681b119fa15d91178->leave($__internal_2fb9dab7de681df506d05fd19a5f8efa897f669a524329f681b119fa15d91178_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_99f4d6b393bd51c26515594012277bc34a7702334767db9ad426d23efdc7aa61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99f4d6b393bd51c26515594012277bc34a7702334767db9ad426d23efdc7aa61->enter($__internal_99f4d6b393bd51c26515594012277bc34a7702334767db9ad426d23efdc7aa61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_75e5fc882f84fdee29a22c776bdb44e4e261535518631f721409c9a4980652cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75e5fc882f84fdee29a22c776bdb44e4e261535518631f721409c9a4980652cf->enter($__internal_75e5fc882f84fdee29a22c776bdb44e4e261535518631f721409c9a4980652cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_75e5fc882f84fdee29a22c776bdb44e4e261535518631f721409c9a4980652cf->leave($__internal_75e5fc882f84fdee29a22c776bdb44e4e261535518631f721409c9a4980652cf_prof);

        
        $__internal_99f4d6b393bd51c26515594012277bc34a7702334767db9ad426d23efdc7aa61->leave($__internal_99f4d6b393bd51c26515594012277bc34a7702334767db9ad426d23efdc7aa61_prof);

    }

    // line 21
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_6b48bd143358b0671ff9dadf892c1b522b9a2fc196ea2c2b588a085d89cb65f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b48bd143358b0671ff9dadf892c1b522b9a2fc196ea2c2b588a085d89cb65f0->enter($__internal_6b48bd143358b0671ff9dadf892c1b522b9a2fc196ea2c2b588a085d89cb65f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_1e922292166bdae45fde61a5001d057323b811f0e018bd792c6d7cf3bcf716ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e922292166bdae45fde61a5001d057323b811f0e018bd792c6d7cf3bcf716ee->enter($__internal_1e922292166bdae45fde61a5001d057323b811f0e018bd792c6d7cf3bcf716ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_1e922292166bdae45fde61a5001d057323b811f0e018bd792c6d7cf3bcf716ee->leave($__internal_1e922292166bdae45fde61a5001d057323b811f0e018bd792c6d7cf3bcf716ee_prof);

        
        $__internal_6b48bd143358b0671ff9dadf892c1b522b9a2fc196ea2c2b588a085d89cb65f0->leave($__internal_6b48bd143358b0671ff9dadf892c1b522b9a2fc196ea2c2b588a085d89cb65f0_prof);

    }

    public function getTemplateName()
    {
        return "@App/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 21,  111 => 17,  94 => 12,  77 => 8,  65 => 22,  63 => 21,  58 => 18,  56 => 17,  48 => 12,  43 => 10,  38 => 8,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html lang=\"ru\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Skillup | {% block title %}{% endblock %}</title>
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/app/style.css') }}\">

    <style>{% block style %}{% endblock %}</style>

</head>
<body>

{% block body %}{% endblock %}



{% block javascript %}{% endblock %}

</body>
</html>", "@App/index.html.twig", "/var/www/html/symfony/src/AppBundle/Resources/views/index.html.twig");
    }
}
