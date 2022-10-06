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

/* product/show.html.twig */
class __TwigTemplate_6f83fccfa1507feffb6d5fa3973940c8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/show.html.twig", 1);
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

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 3, $this->source); })()), "nameProduct", [], "any", false, false, false, 3), "html", null, true);
        
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
        echo "\t<div class=\"row\">
\t\t<div class=\"col mx-auto\">
\t\t\t<article>

\t\t\t\t<article class=\"bg-white rounded shadow post\">

\t\t\t\t\t<h2 class=\"h5 ps-5 pt-3 text-secondary text-muted\">";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 13, $this->source); })()), "nameProduct", [], "any", false, false, false, 13), "html", null, true);
        echo "</h2>
\t\t\t\t\t<h2 class=\"h5 ps-5 pt-3 text-secondary text-muted\">";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 14, $this->source); })()), "price", [], "any", false, false, false, 14), "html", null, true);
        echo "</h2>
\t\t\t\t\t<h3 class=\"h6 ps-5 pt-3 text-secondary text-muted\">";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 15, $this->source); })()), "quantityStock", [], "any", false, false, false, 15), "html", null, true);
        echo "</h3>
\t\t\t\t\t<h3 class=\"h6 ps-5 pt-3 text-secondary text-muted\">";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 16, $this->source); })()), "securityStock", [], "any", false, false, false, 16), "html", null, true);
        echo "
\t\t\t\t\t\t<h3 class=\"h6 ps-5 pt-3 text-secondary text-muted\">";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 17, $this->source); })()), "quantitySold", [], "any", false, false, false, 17), "html", null, true);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"ps-3 pb-3\">
\t\t\t\t\t\t\t<a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20)]), "html", null, true);
        echo "\" class=\"btn btn-light\">Edit</a>
\t\t\t\t\t\t\t<a href=\"#\" onclick=\"event.preventDefault(); confirm('Are you sure?') && document.getElementById('js-product-delete-form').submit(); \" class=\"btn btn-light\">Delete</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</article>
\t\t\t\t</div>
\t\t\t</div>


\t\t\t<form id=\"js-product-delete-form\" action=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 28, $this->source); })()), "id", [], "any", false, false, false, 28)]), "html", null, true);
        echo "\" method=\"post\" style=\"display:none;\">
\t\t\t\t<input type=\"hidden\" name=\"csrf_token\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("product_deletion" . twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 29, $this->source); })()), "id", [], "any", false, false, false, 29))), "html", null, true);
        echo "\">
\t\t\t\t<input type=\"hidden\" name=\"_method\" value=\"DELETE\">
\t\t\t</form>
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "product/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 29,  129 => 28,  118 => 20,  112 => 17,  108 => 16,  104 => 15,  100 => 14,  96 => 13,  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title product.nameProduct %}


{% block body %}
\t<div class=\"row\">
\t\t<div class=\"col mx-auto\">
\t\t\t<article>

\t\t\t\t<article class=\"bg-white rounded shadow post\">

\t\t\t\t\t<h2 class=\"h5 ps-5 pt-3 text-secondary text-muted\">{{ product.nameProduct }}</h2>
\t\t\t\t\t<h2 class=\"h5 ps-5 pt-3 text-secondary text-muted\">{{ product.price }}</h2>
\t\t\t\t\t<h3 class=\"h6 ps-5 pt-3 text-secondary text-muted\">{{ product.quantityStock }}</h3>
\t\t\t\t\t<h3 class=\"h6 ps-5 pt-3 text-secondary text-muted\">{{ product.securityStock }}
\t\t\t\t\t\t<h3 class=\"h6 ps-5 pt-3 text-secondary text-muted\">{{ product.quantitySold }}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"ps-3 pb-3\">
\t\t\t\t\t\t\t<a href=\"{{ path('app_product_edit',{id: product.id}) }}\" class=\"btn btn-light\">Edit</a>
\t\t\t\t\t\t\t<a href=\"#\" onclick=\"event.preventDefault(); confirm('Are you sure?') && document.getElementById('js-product-delete-form').submit(); \" class=\"btn btn-light\">Delete</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</article>
\t\t\t\t</div>
\t\t\t</div>


\t\t\t<form id=\"js-product-delete-form\" action=\"{{ path('app_product_delete',{id: product.id}) }}\" method=\"post\" style=\"display:none;\">
\t\t\t\t<input type=\"hidden\" name=\"csrf_token\" value=\"{{ csrf_token('product_deletion'~ product.id) }}\">
\t\t\t\t<input type=\"hidden\" name=\"_method\" value=\"DELETE\">
\t\t\t</form>
\t\t{% endblock %}
", "product/show.html.twig", "C:\\wamp64\\www\\wms\\templates\\product\\show.html.twig");
    }
}
