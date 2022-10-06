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

/* commande/show.html.twig */
class __TwigTemplate_a7967a92fbe1af07d813609651f72717 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "commande/show.html.twig", 1);
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

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 3, $this->source); })()), "reference", [], "any", false, false, false, 3), "html", null, true);
        
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
\t\t\t<article class=\"bg-white rounded shadow\">

\t\t\t\t<h2 class=\"text-center h5 ps-5 pt-3\">Order Reference :
\t\t\t\t\t";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 12, $this->source); })()), "reference", [], "any", false, false, false, 12), "html", null, true);
        echo "</h2>
\t\t\t\t<br>
\t\t\t\t<h3 class=\"h6 ps-5 pt-3\">Date :
\t\t\t\t\t";
        // line 15
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 15, $this->source); })()), "date", [], "any", false, false, false, 15), "Y-m-d"), "html", null, true);
        echo "</h3>
\t\t\t\t<h3 class=\"h6 ps-5 pt-3\">Supplier :
\t\t\t\t\t";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 17, $this->source); })()), "supplier", [], "any", false, false, false, 17), "html", null, true);
        echo "
\t\t\t\t</h3>
\t\t\t\t<h3 class=\"h6 ps-5 pt-3\">Products :
\t\t\t\t</h3>
\t\t\t\t";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 21, $this->source); })()), "products", [], "any", false, false, false, 21));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 22
            echo "\t\t\t\t\t<h3 class=\"text-center h6 ps-5 pt-3\">
\t\t\t\t\t\t";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "nameProduct", [], "any", false, false, false, 23), "html", null, true);
            echo "
\t\t\t\t\t</h3>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "\t\t\t\t<div class=\"ps-3 pb-3\">
\t\t\t\t\t<a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 27, $this->source); })()), "id", [], "any", false, false, false, 27)]), "html", null, true);
        echo "\" class=\"btn btn-success\">Edit</a>
\t\t\t\t\t<a href=\"#\" onclick=\"event.preventDefault(); confirm('Are you sure?') && document.getElementById('js-commande-delete-form').submit(); \" class=\"btn btn-danger\">Delete</a>
\t\t\t\t</div>
\t\t\t</article>
\t\t</div>
\t</div>


\t<form id=\"js-commande-delete-form\" action=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 35, $this->source); })()), "id", [], "any", false, false, false, 35)]), "html", null, true);
        echo "\" method=\"post\" style=\"display:none;\">
\t\t<input type=\"hidden\" name=\"csrf_token\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("commande_deletion" . twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 36, $this->source); })()), "id", [], "any", false, false, false, 36))), "html", null, true);
        echo "\">
\t\t<input type=\"hidden\" name=\"_method\" value=\"DELETE\">
\t</form>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "commande/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 36,  143 => 35,  132 => 27,  129 => 26,  120 => 23,  117 => 22,  113 => 21,  106 => 17,  101 => 15,  95 => 12,  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title commande.reference %}


{% block body %}
\t<div class=\"row\">
\t\t<div class=\"col mx-auto\">
\t\t\t<article class=\"bg-white rounded shadow\">

\t\t\t\t<h2 class=\"text-center h5 ps-5 pt-3\">Order Reference :
\t\t\t\t\t{{ commande.reference }}</h2>
\t\t\t\t<br>
\t\t\t\t<h3 class=\"h6 ps-5 pt-3\">Date :
\t\t\t\t\t{{ commande.date|date('Y-m-d') }}</h3>
\t\t\t\t<h3 class=\"h6 ps-5 pt-3\">Supplier :
\t\t\t\t\t{{ commande.supplier }}
\t\t\t\t</h3>
\t\t\t\t<h3 class=\"h6 ps-5 pt-3\">Products :
\t\t\t\t</h3>
\t\t\t\t{% for p in commande.products %}
\t\t\t\t\t<h3 class=\"text-center h6 ps-5 pt-3\">
\t\t\t\t\t\t{{ p.nameProduct }}
\t\t\t\t\t</h3>
\t\t\t\t{% endfor %}
\t\t\t\t<div class=\"ps-3 pb-3\">
\t\t\t\t\t<a href=\"{{ path('app_commande_edit',{id: commande.id}) }}\" class=\"btn btn-success\">Edit</a>
\t\t\t\t\t<a href=\"#\" onclick=\"event.preventDefault(); confirm('Are you sure?') && document.getElementById('js-commande-delete-form').submit(); \" class=\"btn btn-danger\">Delete</a>
\t\t\t\t</div>
\t\t\t</article>
\t\t</div>
\t</div>


\t<form id=\"js-commande-delete-form\" action=\"{{ path('app_commande_delete',{id: commande.id}) }}\" method=\"post\" style=\"display:none;\">
\t\t<input type=\"hidden\" name=\"csrf_token\" value=\"{{ csrf_token('commande_deletion'~ commande.id) }}\">
\t\t<input type=\"hidden\" name=\"_method\" value=\"DELETE\">
\t</form>
{% endblock %}
", "commande/show.html.twig", "C:\\wamp64\\www\\wms\\templates\\commande\\show.html.twig");
    }
}
