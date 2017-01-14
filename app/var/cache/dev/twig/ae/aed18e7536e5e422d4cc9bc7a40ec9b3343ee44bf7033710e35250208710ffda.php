<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_67c5fb8b402a0432c64400dc79f563138dbee8a9408c47ac39b373b5fc6a9cd2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_3b5c78e79f7ad85cca010b15f01d93ef349b4e002b8fa6f5cb20226e90113649 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b5c78e79f7ad85cca010b15f01d93ef349b4e002b8fa6f5cb20226e90113649->enter($__internal_3b5c78e79f7ad85cca010b15f01d93ef349b4e002b8fa6f5cb20226e90113649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_55955bf14e6c42c476eafbe28af8db65441f0cbe93451ca492a68495e1819046 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55955bf14e6c42c476eafbe28af8db65441f0cbe93451ca492a68495e1819046->enter($__internal_55955bf14e6c42c476eafbe28af8db65441f0cbe93451ca492a68495e1819046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b5c78e79f7ad85cca010b15f01d93ef349b4e002b8fa6f5cb20226e90113649->leave($__internal_3b5c78e79f7ad85cca010b15f01d93ef349b4e002b8fa6f5cb20226e90113649_prof);

        
        $__internal_55955bf14e6c42c476eafbe28af8db65441f0cbe93451ca492a68495e1819046->leave($__internal_55955bf14e6c42c476eafbe28af8db65441f0cbe93451ca492a68495e1819046_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_84ab34d67a18f8f116e094b8d15df6b5424077eb7f91a14feee6d92860c4af1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84ab34d67a18f8f116e094b8d15df6b5424077eb7f91a14feee6d92860c4af1f->enter($__internal_84ab34d67a18f8f116e094b8d15df6b5424077eb7f91a14feee6d92860c4af1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9fec14e57c0c15c8b35bc7bfdd8133370831cd4ac317c4ae52686984961971bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fec14e57c0c15c8b35bc7bfdd8133370831cd4ac317c4ae52686984961971bb->enter($__internal_9fec14e57c0c15c8b35bc7bfdd8133370831cd4ac317c4ae52686984961971bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_9fec14e57c0c15c8b35bc7bfdd8133370831cd4ac317c4ae52686984961971bb->leave($__internal_9fec14e57c0c15c8b35bc7bfdd8133370831cd4ac317c4ae52686984961971bb_prof);

        
        $__internal_84ab34d67a18f8f116e094b8d15df6b5424077eb7f91a14feee6d92860c4af1f->leave($__internal_84ab34d67a18f8f116e094b8d15df6b5424077eb7f91a14feee6d92860c4af1f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2550322b5018a28f4746af046c3e7a832896aa52b9f8d382abb5a8d8f707beb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2550322b5018a28f4746af046c3e7a832896aa52b9f8d382abb5a8d8f707beb1->enter($__internal_2550322b5018a28f4746af046c3e7a832896aa52b9f8d382abb5a8d8f707beb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9a41b8a1e76d845e675880d468b381994aede0b517ea4a68b596495c04faa15e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a41b8a1e76d845e675880d468b381994aede0b517ea4a68b596495c04faa15e->enter($__internal_9a41b8a1e76d845e675880d468b381994aede0b517ea4a68b596495c04faa15e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_9a41b8a1e76d845e675880d468b381994aede0b517ea4a68b596495c04faa15e->leave($__internal_9a41b8a1e76d845e675880d468b381994aede0b517ea4a68b596495c04faa15e_prof);

        
        $__internal_2550322b5018a28f4746af046c3e7a832896aa52b9f8d382abb5a8d8f707beb1->leave($__internal_2550322b5018a28f4746af046c3e7a832896aa52b9f8d382abb5a8d8f707beb1_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_23ff04192fa6aa5ae1a4b6e34c18c7d909cf2e02a8b9d29c61ff6383a1faf011 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23ff04192fa6aa5ae1a4b6e34c18c7d909cf2e02a8b9d29c61ff6383a1faf011->enter($__internal_23ff04192fa6aa5ae1a4b6e34c18c7d909cf2e02a8b9d29c61ff6383a1faf011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e083180d514daba9c084f012944a059b465131a7abe968a3b2522ed4f4f72abe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e083180d514daba9c084f012944a059b465131a7abe968a3b2522ed4f4f72abe->enter($__internal_e083180d514daba9c084f012944a059b465131a7abe968a3b2522ed4f4f72abe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_e083180d514daba9c084f012944a059b465131a7abe968a3b2522ed4f4f72abe->leave($__internal_e083180d514daba9c084f012944a059b465131a7abe968a3b2522ed4f4f72abe_prof);

        
        $__internal_23ff04192fa6aa5ae1a4b6e34c18c7d909cf2e02a8b9d29c61ff6383a1faf011->leave($__internal_23ff04192fa6aa5ae1a4b6e34c18c7d909cf2e02a8b9d29c61ff6383a1faf011_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
