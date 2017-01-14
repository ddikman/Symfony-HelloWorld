<?php

/* base.html.twig */
class __TwigTemplate_c6b56aef91f99a389e1a6f47f71cf0ca91dfaf9399112057d815c56c69b075fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_786aa0ed54a887a9e6a4a10da7c9b90ecb512bb23bfd5c07476f14d06e87274e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_786aa0ed54a887a9e6a4a10da7c9b90ecb512bb23bfd5c07476f14d06e87274e->enter($__internal_786aa0ed54a887a9e6a4a10da7c9b90ecb512bb23bfd5c07476f14d06e87274e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_14fb44f923dfffd319819d5e20252979d861407727f271ac06be9c6661941330 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14fb44f923dfffd319819d5e20252979d861407727f271ac06be9c6661941330->enter($__internal_14fb44f923dfffd319819d5e20252979d861407727f271ac06be9c6661941330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_786aa0ed54a887a9e6a4a10da7c9b90ecb512bb23bfd5c07476f14d06e87274e->leave($__internal_786aa0ed54a887a9e6a4a10da7c9b90ecb512bb23bfd5c07476f14d06e87274e_prof);

        
        $__internal_14fb44f923dfffd319819d5e20252979d861407727f271ac06be9c6661941330->leave($__internal_14fb44f923dfffd319819d5e20252979d861407727f271ac06be9c6661941330_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1f9d4ce0acbe808fc5816735135617c42edd246989cb89bd5d70fab168903abe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f9d4ce0acbe808fc5816735135617c42edd246989cb89bd5d70fab168903abe->enter($__internal_1f9d4ce0acbe808fc5816735135617c42edd246989cb89bd5d70fab168903abe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f3a096fd27d2b9704bb42b53f019f973f73809ef859ece296203bc4d58c707f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3a096fd27d2b9704bb42b53f019f973f73809ef859ece296203bc4d58c707f8->enter($__internal_f3a096fd27d2b9704bb42b53f019f973f73809ef859ece296203bc4d58c707f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f3a096fd27d2b9704bb42b53f019f973f73809ef859ece296203bc4d58c707f8->leave($__internal_f3a096fd27d2b9704bb42b53f019f973f73809ef859ece296203bc4d58c707f8_prof);

        
        $__internal_1f9d4ce0acbe808fc5816735135617c42edd246989cb89bd5d70fab168903abe->leave($__internal_1f9d4ce0acbe808fc5816735135617c42edd246989cb89bd5d70fab168903abe_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_72c962e2160f3a47d210dd52bc53e983060b1be7b884822d15e8407ec1eb1556 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72c962e2160f3a47d210dd52bc53e983060b1be7b884822d15e8407ec1eb1556->enter($__internal_72c962e2160f3a47d210dd52bc53e983060b1be7b884822d15e8407ec1eb1556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_740a9f95e8b41d9bebdbd409cf4652a36f7cc3be680b38a1c9071830a1b7e4a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_740a9f95e8b41d9bebdbd409cf4652a36f7cc3be680b38a1c9071830a1b7e4a8->enter($__internal_740a9f95e8b41d9bebdbd409cf4652a36f7cc3be680b38a1c9071830a1b7e4a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_740a9f95e8b41d9bebdbd409cf4652a36f7cc3be680b38a1c9071830a1b7e4a8->leave($__internal_740a9f95e8b41d9bebdbd409cf4652a36f7cc3be680b38a1c9071830a1b7e4a8_prof);

        
        $__internal_72c962e2160f3a47d210dd52bc53e983060b1be7b884822d15e8407ec1eb1556->leave($__internal_72c962e2160f3a47d210dd52bc53e983060b1be7b884822d15e8407ec1eb1556_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_769957e3df055b3f6b450e457c99a8c0277e16580f335ce872110d6c59962585 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_769957e3df055b3f6b450e457c99a8c0277e16580f335ce872110d6c59962585->enter($__internal_769957e3df055b3f6b450e457c99a8c0277e16580f335ce872110d6c59962585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d479d19945cce5285b1a56462058e5924791cc35477b51b3047306b84318a906 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d479d19945cce5285b1a56462058e5924791cc35477b51b3047306b84318a906->enter($__internal_d479d19945cce5285b1a56462058e5924791cc35477b51b3047306b84318a906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d479d19945cce5285b1a56462058e5924791cc35477b51b3047306b84318a906->leave($__internal_d479d19945cce5285b1a56462058e5924791cc35477b51b3047306b84318a906_prof);

        
        $__internal_769957e3df055b3f6b450e457c99a8c0277e16580f335ce872110d6c59962585->leave($__internal_769957e3df055b3f6b450e457c99a8c0277e16580f335ce872110d6c59962585_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_09790b7d42c85abc210dc6472084072d00974cece2e4a3300d55ff97ef17d7f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09790b7d42c85abc210dc6472084072d00974cece2e4a3300d55ff97ef17d7f1->enter($__internal_09790b7d42c85abc210dc6472084072d00974cece2e4a3300d55ff97ef17d7f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7e0fcee8ea74b4aa0038228d62b500f0d76100a71cf6e9f2a992f28e5d08c359 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e0fcee8ea74b4aa0038228d62b500f0d76100a71cf6e9f2a992f28e5d08c359->enter($__internal_7e0fcee8ea74b4aa0038228d62b500f0d76100a71cf6e9f2a992f28e5d08c359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7e0fcee8ea74b4aa0038228d62b500f0d76100a71cf6e9f2a992f28e5d08c359->leave($__internal_7e0fcee8ea74b4aa0038228d62b500f0d76100a71cf6e9f2a992f28e5d08c359_prof);

        
        $__internal_09790b7d42c85abc210dc6472084072d00974cece2e4a3300d55ff97ef17d7f1->leave($__internal_09790b7d42c85abc210dc6472084072d00974cece2e4a3300d55ff97ef17d7f1_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/app/Resources/views/base.html.twig");
    }
}
