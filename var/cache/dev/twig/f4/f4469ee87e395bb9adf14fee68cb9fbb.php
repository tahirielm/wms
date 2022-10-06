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

/* inventory/index.html.twig */
class __TwigTemplate_8d7db2adcec85ef33b776e2a3dd287e2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inventory/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inventory/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "inventory/index.html.twig", 1);
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

        echo "Warehouse Management System";
        
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
\t<div class=\"\">
\t\t<h1 class=\"text-center\">Inventories</h1>
\t\t<a
\t\t\tclass=\"btn btn-success\" style=\"float:right;\" href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_inventory_create");
        echo "\">
\t\t\t";
        // line 13
        echo "\t\t\tNew Inventory
\t\t</a>
\t</div>
\t<table class=\"table\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th scope=\"col\">#</th>
\t\t\t\t<th scope=\"col\">Inventory Reference</th>
\t\t\t\t<th scope=\"col\">Inventory Date</th>
\t\t\t\t<th scope=\"col\">User</th>
\t\t\t\t<th scope=\"col\">Actions</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["inventorys"]) || array_key_exists("inventorys", $context) ? $context["inventorys"] : (function () { throw new RuntimeError('Variable "inventorys" does not exist.', 27, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 28
            echo "\t\t\t\t<tr>
\t\t\t\t\t<th scope=\"row\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["inventorys"]) || array_key_exists("inventorys", $context) ? $context["inventorys"] : (function () { throw new RuntimeError('Variable "inventorys" does not exist.', 29, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 29), [], "array", false, false, false, 29), "id", [], "any", false, false, false, 29), "html", null, true);
            echo "</th>
\t\t\t\t\t<td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["inventorys"]) || array_key_exists("inventorys", $context) ? $context["inventorys"] : (function () { throw new RuntimeError('Variable "inventorys" does not exist.', 30, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 30), [], "array", false, false, false, 30), "reference", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 31
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["inventorys"]) || array_key_exists("inventorys", $context) ? $context["inventorys"] : (function () { throw new RuntimeError('Variable "inventorys" does not exist.', 31, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 31), [], "array", false, false, false, 31), "date", [], "any", false, false, false, 31), "Y-m-d"), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["inventorys"]) || array_key_exists("inventorys", $context) ? $context["inventorys"] : (function () { throw new RuntimeError('Variable "inventorys" does not exist.', 32, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 32), [], "array", false, false, false, 32), "user", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_inventory_edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["inventorys"]) || array_key_exists("inventorys", $context) ? $context["inventorys"] : (function () { throw new RuntimeError('Variable "inventorys" does not exist.', 34, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 34), [], "array", false, false, false, 34), "id", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\">Edit</a>
\t\t\t\t\t\t";
            // line 36
            echo "\t\t\t\t\t\t<a class=\"btn btn-danger\" href=\"#\" onclick=\"event.preventDefault(); confirm('Are you sure?') && document.getElementById('js-inventory-delete-form').submit(); \" class=\"btn btn-light\">Delete</a>
\t\t\t\t\t\t<form id=\"js-inventory-delete-form\" action=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_inventory_delete", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["inventorys"]) || array_key_exists("inventorys", $context) ? $context["inventorys"] : (function () { throw new RuntimeError('Variable "inventorys" does not exist.', 37, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 37), [], "array", false, false, false, 37), "id", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\" method=\"post\" style=\"display:none;\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"csrf_token\" value=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("inventory_deletion" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["inventorys"]) || array_key_exists("inventorys", $context) ? $context["inventorys"] : (function () { throw new RuntimeError('Variable "inventorys" does not exist.', 38, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 38), [], "array", false, false, false, 38), "id", [], "any", false, false, false, 38))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_method\" value=\"DELETE\">
\t\t\t\t\t\t</form>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "\t\t</tbody>
\t</table>

</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "inventory/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 44,  162 => 38,  158 => 37,  155 => 36,  151 => 34,  146 => 32,  142 => 31,  138 => 30,  134 => 29,  131 => 28,  114 => 27,  98 => 13,  94 => 11,  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title 'Warehouse Management System' %}


{% block body %}

\t<div class=\"\">
\t\t<h1 class=\"text-center\">Inventories</h1>
\t\t<a
\t\t\tclass=\"btn btn-success\" style=\"float:right;\" href=\"{{ path('app_inventory_create') }}\">
\t\t\t{# <i class=\"fas fa-pencil-alt mt-0\"></i> #}
\t\t\tNew Inventory
\t\t</a>
\t</div>
\t<table class=\"table\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th scope=\"col\">#</th>
\t\t\t\t<th scope=\"col\">Inventory Reference</th>
\t\t\t\t<th scope=\"col\">Inventory Date</th>
\t\t\t\t<th scope=\"col\">User</th>
\t\t\t\t<th scope=\"col\">Actions</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t{% for p in inventorys %}
\t\t\t\t<tr>
\t\t\t\t\t<th scope=\"row\">{{ inventorys[loop.index0].id }}</th>
\t\t\t\t\t<td>{{ inventorys[loop.index0].reference }}</td>
\t\t\t\t\t<td>{{ inventorys[loop.index0].date|date('Y-m-d') }}</td>
\t\t\t\t\t<td>{{ inventorys[loop.index0].user }}</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"{{ path('app_inventory_edit',{id: inventorys[loop.index0].id}) }}\">Edit</a>
\t\t\t\t\t\t{# <a class=\"btn btn-danger\" href=\"{{ path('app_inventory_delete',{id: inventorys[loop.index0].id}) }}\">Delete</a> #}
\t\t\t\t\t\t<a class=\"btn btn-danger\" href=\"#\" onclick=\"event.preventDefault(); confirm('Are you sure?') && document.getElementById('js-inventory-delete-form').submit(); \" class=\"btn btn-light\">Delete</a>
\t\t\t\t\t\t<form id=\"js-inventory-delete-form\" action=\"{{ path('app_inventory_delete',{id: inventorys[loop.index0].id}) }}\" method=\"post\" style=\"display:none;\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"csrf_token\" value=\"{{ csrf_token('inventory_deletion'~ inventorys[loop.index0].id) }}\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_method\" value=\"DELETE\">
\t\t\t\t\t\t</form>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t</tbody>
\t</table>

</div>{% endblock %}
", "inventory/index.html.twig", "C:\\wamp64\\www\\wms\\templates\\inventory\\index.html.twig");
    }
}
