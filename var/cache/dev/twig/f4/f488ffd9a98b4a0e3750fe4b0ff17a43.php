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

/* layouts/partials/_sidebar.html.twig */
class __TwigTemplate_c11f7c1defcd028124cc85e76415a066 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layouts/partials/_sidebar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layouts/partials/_sidebar.html.twig"));

        // line 1
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "user", [], "any", false, false, false, 1)) {
            // line 2
            echo "\t<div class=\"d-flex flex-column flex-shrink-0 p-3 bg-lightgray\" style=\"width: 280px;\">
\t\t<ul class=\"nav nav-pills flex-column mb-auto\">
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a href=\"#\" class=\"nav-link link-dark\"></br>
\t\t\t</li>
\t\t</a>
\t</li>
\t<li>
\t\t<a href=\"/dashboard\" class=\"nav-link link-dark\">
\t\t\tDashboard
\t\t</a>
\t</li>
\t<li>
\t\t<div class=\"dropdown\">
\t\t\t<a href=\"#\" class=\"nav-link link-dark dropdown-toggle\" id=\"dropdownUser1\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\tEntity
\t\t\t</a>
\t\t\t<ul class=\"dropdown-menu text-small shadow\" aria-labelledby=\"dropdownUser1\">
\t\t\t\t<li>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"/product\">Products</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"/category\">Categories</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"/client\">Clients</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"/supplier\">Suppliers</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"/vehicle\">Vehicles</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</li>
\t<li>
\t\t<div class=\"dropdown\">
\t\t\t<a href=\"#\" class=\"nav-link link-dark dropdown-toggle\" id=\"dropdownUser2\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\tImport
\t\t\t</a>
\t\t\t<ul class=\"dropdown-menu text-small shadow\" aria-labelledby=\"dropdownUser2\">
\t\t\t\t<li>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"/commande\">Orders</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"/receival\">Receivals</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"/stockage\">Stockage</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t\t<div class=\"dropdown\">
\t\t\t<a href=\"#\" class=\"nav-link link-dark dropdown-toggle\" id=\"dropdownUser3\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\tExport
\t\t\t</a>
\t\t\t<ul class=\"dropdown-menu text-small shadow\" aria-labelledby=\"dropdownUser3\">
\t\t\t\t<li>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"/deliveryorder\">Orders</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"/delivery\">Deliveries</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</li>
\t<li>
\t\t<a href=\"/inventory\" class=\"nav-link link-dark\">
\t\t\tInventory
\t\t</a>
\t</li>
</ul></div>";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "layouts/partials/_sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if app.user %}
\t<div class=\"d-flex flex-column flex-shrink-0 p-3 bg-lightgray\" style=\"width: 280px;\">
\t\t<ul class=\"nav nav-pills flex-column mb-auto\">
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a href=\"#\" class=\"nav-link link-dark\"></br>
\t\t\t</li>
\t\t</a>
\t</li>
\t<li>
\t\t<a href=\"/dashboard\" class=\"nav-link link-dark\">
\t\t\tDashboard
\t\t</a>
\t</li>
\t<li>
\t\t<div class=\"dropdown\">
\t\t\t<a href=\"#\" class=\"nav-link link-dark dropdown-toggle\" id=\"dropdownUser1\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\tEntity
\t\t\t</a>
\t\t\t<ul class=\"dropdown-menu text-small shadow\" aria-labelledby=\"dropdownUser1\">
\t\t\t\t<li>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"/product\">Products</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"/category\">Categories</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"/client\">Clients</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"/supplier\">Suppliers</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"/vehicle\">Vehicles</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</li>
\t<li>
\t\t<div class=\"dropdown\">
\t\t\t<a href=\"#\" class=\"nav-link link-dark dropdown-toggle\" id=\"dropdownUser2\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\tImport
\t\t\t</a>
\t\t\t<ul class=\"dropdown-menu text-small shadow\" aria-labelledby=\"dropdownUser2\">
\t\t\t\t<li>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"/commande\">Orders</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"/receival\">Receivals</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"/stockage\">Stockage</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t\t<div class=\"dropdown\">
\t\t\t<a href=\"#\" class=\"nav-link link-dark dropdown-toggle\" id=\"dropdownUser3\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\tExport
\t\t\t</a>
\t\t\t<ul class=\"dropdown-menu text-small shadow\" aria-labelledby=\"dropdownUser3\">
\t\t\t\t<li>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"/deliveryorder\">Orders</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"/delivery\">Deliveries</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</li>
\t<li>
\t\t<a href=\"/inventory\" class=\"nav-link link-dark\">
\t\t\tInventory
\t\t</a>
\t</li>
</ul></div>{% endif %}
", "layouts/partials/_sidebar.html.twig", "C:\\wamp64\\www\\wms\\templates\\layouts\\partials\\_sidebar.html.twig");
    }
}
