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

/* deliveryorder/edit.html.twig */
class __TwigTemplate_007ade154cc9fc67702ce5432f130199 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "deliveryorder/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "deliveryorder/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "deliveryorder/edit.html.twig", 1);
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

        echo twig_escape_filter($this->env, ("Edit Delivery Order #" . twig_get_attribute($this->env, $this->source, (isset($context["deliveryorder"]) || array_key_exists("deliveryorder", $context) ? $context["deliveryorder"] : (function () { throw new RuntimeError('Variable "deliveryorder" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3)), "html", null, true);
        
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
\t\t\t\tEdit order #";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["deliveryorder"]) || array_key_exists("deliveryorder", $context) ? $context["deliveryorder"] : (function () { throw new RuntimeError('Variable "deliveryorder" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</h1>

\t\t\t";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formEditDeliveryOrders"]) || array_key_exists("formEditDeliveryOrders", $context) ? $context["formEditDeliveryOrders"] : (function () { throw new RuntimeError('Variable "formEditDeliveryOrders" does not exist.', 14, $this->source); })()), 'form_start');
        echo "

\t\t\t";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formEditDeliveryOrders"]) || array_key_exists("formEditDeliveryOrders", $context) ? $context["formEditDeliveryOrders"] : (function () { throw new RuntimeError('Variable "formEditDeliveryOrders" does not exist.', 16, $this->source); })()), 'widget');
        echo "

\t\t\t<input type=\"submit\" value=\"Edit Delivery Order\" class=\"btn btn-primary\">
\t\t\t";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formEditDeliveryOrders"]) || array_key_exists("formEditDeliveryOrders", $context) ? $context["formEditDeliveryOrders"] : (function () { throw new RuntimeError('Variable "formEditDeliveryOrders" does not exist.', 19, $this->source); })()), 'form_end');
        echo "

\t\t</div>
\t</div>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "deliveryorder/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 19,  105 => 16,  100 => 14,  95 => 12,  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title 'Edit Delivery Order #' ~ deliveryorder.id %}


{% block body %}

\t<div class=\"row\">
\t\t<div class=\"col-md-6 mx-auto\">

\t\t\t<h1>
\t\t\t\tEdit order #{{ deliveryorder.id }}</h1>

\t\t\t{{ form_start(formEditDeliveryOrders)}}

\t\t\t{{ form_widget(formEditDeliveryOrders)}}

\t\t\t<input type=\"submit\" value=\"Edit Delivery Order\" class=\"btn btn-primary\">
\t\t\t{{ form_end(formEditDeliveryOrders)}}

\t\t</div>
\t</div>


{% endblock %}
", "deliveryorder/edit.html.twig", "C:\\wamp64\\www\\wms\\templates\\deliveryOrder\\edit.html.twig");
    }
}
