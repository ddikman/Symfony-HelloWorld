<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8108f5d1ee36c3878b2175a55b3d302e34d4747217b0f55cddfb625da60cfabe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_743581919bb002c7eee801a6e00d3c0ed2b1bfdd729dee7bfb65cbce045dc500 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_743581919bb002c7eee801a6e00d3c0ed2b1bfdd729dee7bfb65cbce045dc500->enter($__internal_743581919bb002c7eee801a6e00d3c0ed2b1bfdd729dee7bfb65cbce045dc500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_38ee95dfe50d8984b1a6464a3a5dddd17a4493a951eb3775d228bfb8dc7d9b5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38ee95dfe50d8984b1a6464a3a5dddd17a4493a951eb3775d228bfb8dc7d9b5d->enter($__internal_38ee95dfe50d8984b1a6464a3a5dddd17a4493a951eb3775d228bfb8dc7d9b5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_743581919bb002c7eee801a6e00d3c0ed2b1bfdd729dee7bfb65cbce045dc500->leave($__internal_743581919bb002c7eee801a6e00d3c0ed2b1bfdd729dee7bfb65cbce045dc500_prof);

        
        $__internal_38ee95dfe50d8984b1a6464a3a5dddd17a4493a951eb3775d228bfb8dc7d9b5d->leave($__internal_38ee95dfe50d8984b1a6464a3a5dddd17a4493a951eb3775d228bfb8dc7d9b5d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_85c4c14ca56541c628f2509ca43cb280a4b488e5eba6909dcabbde84900f26b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85c4c14ca56541c628f2509ca43cb280a4b488e5eba6909dcabbde84900f26b9->enter($__internal_85c4c14ca56541c628f2509ca43cb280a4b488e5eba6909dcabbde84900f26b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_641d8e037b60db85a0953d03ec98555e4206834b48abdaab36f546017cd9ef29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_641d8e037b60db85a0953d03ec98555e4206834b48abdaab36f546017cd9ef29->enter($__internal_641d8e037b60db85a0953d03ec98555e4206834b48abdaab36f546017cd9ef29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_641d8e037b60db85a0953d03ec98555e4206834b48abdaab36f546017cd9ef29->leave($__internal_641d8e037b60db85a0953d03ec98555e4206834b48abdaab36f546017cd9ef29_prof);

        
        $__internal_85c4c14ca56541c628f2509ca43cb280a4b488e5eba6909dcabbde84900f26b9->leave($__internal_85c4c14ca56541c628f2509ca43cb280a4b488e5eba6909dcabbde84900f26b9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b6756dc1f9b23788ee7d021c551432b030c5eb4cb6507fb4119d61414400dda6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6756dc1f9b23788ee7d021c551432b030c5eb4cb6507fb4119d61414400dda6->enter($__internal_b6756dc1f9b23788ee7d021c551432b030c5eb4cb6507fb4119d61414400dda6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c2d07d87f3444e29d883776a2dc8ccf998317df91081a6f3ca03416ae2e7f712 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2d07d87f3444e29d883776a2dc8ccf998317df91081a6f3ca03416ae2e7f712->enter($__internal_c2d07d87f3444e29d883776a2dc8ccf998317df91081a6f3ca03416ae2e7f712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c2d07d87f3444e29d883776a2dc8ccf998317df91081a6f3ca03416ae2e7f712->leave($__internal_c2d07d87f3444e29d883776a2dc8ccf998317df91081a6f3ca03416ae2e7f712_prof);

        
        $__internal_b6756dc1f9b23788ee7d021c551432b030c5eb4cb6507fb4119d61414400dda6->leave($__internal_b6756dc1f9b23788ee7d021c551432b030c5eb4cb6507fb4119d61414400dda6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f64091277451bca485c0814dede8c5b72a5be60c70c07343a292e37323194644 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f64091277451bca485c0814dede8c5b72a5be60c70c07343a292e37323194644->enter($__internal_f64091277451bca485c0814dede8c5b72a5be60c70c07343a292e37323194644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cb5c8430666a85660b7740491269c577767ed08a724d2662e666e53bc6a4fd4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb5c8430666a85660b7740491269c577767ed08a724d2662e666e53bc6a4fd4b->enter($__internal_cb5c8430666a85660b7740491269c577767ed08a724d2662e666e53bc6a4fd4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_cb5c8430666a85660b7740491269c577767ed08a724d2662e666e53bc6a4fd4b->leave($__internal_cb5c8430666a85660b7740491269c577767ed08a724d2662e666e53bc6a4fd4b_prof);

        
        $__internal_f64091277451bca485c0814dede8c5b72a5be60c70c07343a292e37323194644->leave($__internal_f64091277451bca485c0814dede8c5b72a5be60c70c07343a292e37323194644_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
