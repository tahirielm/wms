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

/* layouts/partials/_nav.html.twig */
class __TwigTemplate_87adf928c74c31503de0f56c7b8f29ab extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layouts/partials/_nav.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layouts/partials/_nav.html.twig"));

        // line 1
        echo "<div class=\"container\">
\t<header class=\"d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom\">
\t\t<a href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        echo "\" class=\"d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none\">
\t\t\t<span class=\"fs-4\">Warehouse Management System</span>
\t\t</a>

\t\t<ul class=\"nav nav-pills\">
\t\t\t";
        // line 8
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "user", [], "any", false, false, false, 8)) {
            // line 9
            echo "\t\t\t\t";
            // line 12
            echo "\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a href=\"";
            // line 13
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
            echo "\" class=\"nav-link link-dark\">Profile</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a href=\"";
            // line 16
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" class=\"nav-link link-dark\">Logout</a>
\t\t\t\t</li>
\t\t\t";
        } else {
            // line 19
            echo "\t\t\t\t";
            // line 22
            echo "\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a href=\"";
            // line 23
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" class=\"nav-link\">Login</a>
\t\t\t\t</li>
\t\t\t";
        }
        // line 26
        echo "\t\t</ul>
\t</header>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "layouts/partials/_nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 26,  79 => 23,  76 => 22,  74 => 19,  68 => 16,  62 => 13,  59 => 12,  57 => 9,  55 => 8,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
\t<header class=\"d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom\">
\t\t<a href=\"{{ path('app_dashboard')}}\" class=\"d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none\">
\t\t\t<span class=\"fs-4\">Warehouse Management System</span>
\t\t</a>

\t\t<ul class=\"nav nav-pills\">
\t\t\t{% if app.user %}
\t\t\t\t{# <li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_dashboard')}}\" class=\"nav-link link-dark\">Home</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li> #}
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a href=\"{{ path('app_profile')}}\" class=\"nav-link link-dark\">Profile</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a href=\"{{ path('app_logout')}}\" class=\"nav-link link-dark\">Logout</a>
\t\t\t\t</li>
\t\t\t{% else %}
\t\t\t\t{# <li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_register')}}\" class=\"nav-link\">Register</a>
\t\t\t\t\t\t\t\t</li> #}
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a href=\"{{ path('app_login')}}\" class=\"nav-link\">Login</a>
\t\t\t\t</li>
\t\t\t{% endif %}
\t\t</ul>
\t</header>
</div>
", "layouts/partials/_nav.html.twig", "C:\\wamp64\\www\\wms\\templates\\layouts\\partials\\_nav.html.twig");
    }
}
