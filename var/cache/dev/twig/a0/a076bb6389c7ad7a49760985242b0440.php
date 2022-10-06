<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* stockage/create.html.twig */
class __TwigTemplate_542124146d67ded1da86d51159997030 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stockage/create.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stockage/create.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "stockage/create.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "New Stockage";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
\t<div class=\"row\">
\t\t<div class=\"col-md-6 mx-auto\">

\t\t\t<h1>
\t\t\t\tCreate Stockage</h1>

\t\t\t";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formStockages"]) || array_key_exists("formStockages", $context) ? $context["formStockages"] : (function () { throw new RuntimeError('Variable "formStockages" does not exist.', 14, $this->source); })()), 'form_start');
        echo "
\t\t\t";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formStockages"]) || array_key_exists("formStockages", $context) ? $context["formStockages"] : (function () { throw new RuntimeError('Variable "formStockages" does not exist.', 15, $this->source); })()), "reference", [], "any", false, false, false, 15), 'row');
        echo "
\t\t\t";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formStockages"]) || array_key_exists("formStockages", $context) ? $context["formStockages"] : (function () { throw new RuntimeError('Variable "formStockages" does not exist.', 16, $this->source); })()), "receival", [], "any", false, false, false, 16), 'row');
        echo "
\t\t\t<form>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formStockages"]) || array_key_exists("formStockages", $context) ? $context["formStockages"] : (function () { throw new RuntimeError('Variable "formStockages" does not exist.', 20, $this->source); })()), "aisle", [], "any", false, false, false, 20), 'row');
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formStockages"]) || array_key_exists("formStockages", $context) ? $context["formStockages"] : (function () { throw new RuntimeError('Variable "formStockages" does not exist.', 23, $this->source); })()), "shelf", [], "any", false, false, false, 23), 'row');
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formStockages"]) || array_key_exists("formStockages", $context) ? $context["formStockages"] : (function () { throw new RuntimeError('Variable "formStockages" does not exist.', 26, $this->source); })()), "level", [], "any", false, false, false, 26), 'row');
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formStockages"]) || array_key_exists("formStockages", $context) ? $context["formStockages"] : (function () { throw new RuntimeError('Variable "formStockages" does not exist.', 29, $this->source); })()), "place", [], "any", false, false, false, 29), 'row');
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</form>

\t\t\t<input type=\"submit\" value=\"Create Stockage\" class=\"btn btn-primary\">
\t\t\t";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formStockages"]) || array_key_exists("formStockages", $context) ? $context["formStockages"] : (function () { throw new RuntimeError('Variable "formStockages" does not exist.', 35, $this->source); })()), 'form_end');
        echo "

\t\t</div>
\t</div>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "stockage/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 35,  130 => 29,  124 => 26,  118 => 23,  112 => 20,  105 => 16,  101 => 15,  97 => 14,  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title 'New Stockage' %}


{% block body %}

\t<div class=\"row\">
\t\t<div class=\"col-md-6 mx-auto\">

\t\t\t<h1>
\t\t\t\tCreate Stockage</h1>

\t\t\t{{ form_start(formStockages)}}
\t\t\t{{ form_row(formStockages.reference) }}
\t\t\t{{ form_row(formStockages.receival) }}
\t\t\t<form>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t{{ form_row(formStockages.aisle) }}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t{{ form_row(formStockages.shelf) }}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t{{ form_row(formStockages.level) }}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t{{ form_row(formStockages.place) }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</form>

\t\t\t<input type=\"submit\" value=\"Create Stockage\" class=\"btn btn-primary\">
\t\t\t{{ form_end(formStockages)}}

\t\t</div>
\t</div>


{% endblock %}
", "stockage/create.html.twig", "C:\\wamp64\\www\\wms\\templates\\stockage\\create.html.twig");
    }
}
