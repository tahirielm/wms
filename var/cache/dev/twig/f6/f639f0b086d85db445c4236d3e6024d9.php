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

/* dashboard/index.html.twig */
class __TwigTemplate_8c0b46b9bbce85abc85c26631ff7be35 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">
\t<head>
\t\t<!-- Required meta tags -->
\t\t<meta charset=\"utf-8\">
\t\t<meta
\t\tname=\"viewport\" content=\"width=device-width, initial-scale=1\">

\t\t<!-- Bootstrap CSS -->
\t\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x\" crossorigin=\"anonymous\">


\t\t<title>Gestion stocks</title>
\t</head>
\t<body style=\"background:lightgray;\">

\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"row\">
\t\t\t\t";
        // line 19
        echo twig_include($this->env, $context, "layouts/partials/_nav.html.twig");
        echo "
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-1\">
\t\t\t\t\t\t";
        // line 22
        echo twig_include($this->env, $context, "layouts/partials/_sidebar.html.twig");
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-11\">
\t\t\t\t\t\t<h1 class=\"text-center\">Dashboard</h1>
\t\t\t\t\t\t<main class=\"col-md-9 ms-sm-auto col-lg-10 px-md-4\">
\t\t\t\t\t\t\t<div class=\"row align-items-md-stretch\">
\t\t\t\t\t\t\t\t<div class=\"col-md-4 \">
\t\t\t\t\t\t\t\t\t<div class=\"h-10 p-2 mb-3 text-white bg-info rounded-3\">
\t\t\t\t\t\t\t\t\t\t<h2 class=\"text-center d-flex justify-content-center\">Clients</h2>
\t\t\t\t\t\t\t\t\t\t<h1 class=\"text-center mx-5\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 32
        echo 1;
        echo "
\t\t\t\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-4 \">
\t\t\t\t\t\t\t\t\t<div class=\"h-10 p-2 mb-3 text-white bg-info rounded-3\">
\t\t\t\t\t\t\t\t\t\t<h2 class=\"text-center d-flex justify-content-center\">Suppliers</h2>
\t\t\t\t\t\t\t\t\t\t<h1 class=\"text-center mx-5\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 40
        echo 2;
        echo "
\t\t\t\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row align-items-md-stretch\">
\t\t\t\t\t\t\t\t<div class=\"col-md-4 \">
\t\t\t\t\t\t\t\t\t<div class=\"h-10 p-2 mb-3 text-white bg-secondary rounded-3\">
\t\t\t\t\t\t\t\t\t\t<h2 class=\"text-center d-flex justify-content-center\">Products</h2>
\t\t\t\t\t\t\t\t\t\t<h1 class=\"text-center mx-5\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 50
        echo 3;
        echo "
\t\t\t\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-4 \">
\t\t\t\t\t\t\t\t\t<div class=\"h-10 p-2 mb-3 text-white bg-danger rounded-3\">
\t\t\t\t\t\t\t\t\t\t<h2 class=\"text-center d-flex justify-content-center\">Products in danger</h2>
\t\t\t\t\t\t\t\t\t\t<h1 class=\"text-center mx-5\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 58
        echo 0;
        echo "
\t\t\t\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row align-items-md-stretch\">
\t\t\t\t\t\t\t\t<div class=\"col-md-4 \">
\t\t\t\t\t\t\t\t\t<div class=\"h-10 p-2 mb-3 text-white bg-secondary rounded-3\">
\t\t\t\t\t\t\t\t\t\t<h2 class=\"text-center d-flex justify-content-center\">Vehicles</h2>
\t\t\t\t\t\t\t\t\t\t<h1 class=\"text-center mx-5\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 68
        echo 1;
        echo "
\t\t\t\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-4 \">
\t\t\t\t\t\t\t\t\t<div class=\"h-10 p-2 mb-3 text-white bg-success rounded-3\">
\t\t\t\t\t\t\t\t\t\t<h2 class=\"text-center d-flex justify-content-center\">Vehicles available</h2>
\t\t\t\t\t\t\t\t\t\t<h1 class=\"text-center mx-5\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 76
        echo 0;
        echo "
\t\t\t\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row align-items-md-stretch\">
\t\t\t\t\t\t\t\t<div class=\"col-md-4 \">
\t\t\t\t\t\t\t\t\t<div class=\"h-10 p-2 mb-3 text-white bg-secondary rounded-3\">
\t\t\t\t\t\t\t\t\t\t<h2 class=\"text-center d-flex justify-content-center\">Orders</h2>
\t\t\t\t\t\t\t\t\t\t<h1 class=\"text-center mx-5\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 86
        echo 3;
        echo "
\t\t\t\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-4 \">
\t\t\t\t\t\t\t\t\t<div class=\"h-10 p-2 mb-3 text-white bg-success rounded-3\">
\t\t\t\t\t\t\t\t\t\t<h2 class=\"text-center d-flex justify-content-center\">Orders to be shipped</h2>
\t\t\t\t\t\t\t\t\t\t<h1 class=\"text-center mx-5\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 94
        echo 1;
        echo "
\t\t\t\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</main>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>


\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4\" crossorigin=\"anonymous\"></script>

\t\t";
        // line 109
        echo twig_include($this->env, $context, "layouts/partials/_footer.html.twig");
        echo "

\t</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "dashboard/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 109,  165 => 94,  154 => 86,  141 => 76,  130 => 68,  117 => 58,  106 => 50,  93 => 40,  82 => 32,  69 => 22,  63 => 19,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">
\t<head>
\t\t<!-- Required meta tags -->
\t\t<meta charset=\"utf-8\">
\t\t<meta
\t\tname=\"viewport\" content=\"width=device-width, initial-scale=1\">

\t\t<!-- Bootstrap CSS -->
\t\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x\" crossorigin=\"anonymous\">


\t\t<title>Gestion stocks</title>
\t</head>
\t<body style=\"background:lightgray;\">

\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"row\">
\t\t\t\t{{  include('layouts/partials/_nav.html.twig') }}
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-1\">
\t\t\t\t\t\t{{  include('layouts/partials/_sidebar.html.twig') }}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-11\">
\t\t\t\t\t\t<h1 class=\"text-center\">Dashboard</h1>
\t\t\t\t\t\t<main class=\"col-md-9 ms-sm-auto col-lg-10 px-md-4\">
\t\t\t\t\t\t\t<div class=\"row align-items-md-stretch\">
\t\t\t\t\t\t\t\t<div class=\"col-md-4 \">
\t\t\t\t\t\t\t\t\t<div class=\"h-10 p-2 mb-3 text-white bg-info rounded-3\">
\t\t\t\t\t\t\t\t\t\t<h2 class=\"text-center d-flex justify-content-center\">Clients</h2>
\t\t\t\t\t\t\t\t\t\t<h1 class=\"text-center mx-5\">
\t\t\t\t\t\t\t\t\t\t\t{{ 1 }}
\t\t\t\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-4 \">
\t\t\t\t\t\t\t\t\t<div class=\"h-10 p-2 mb-3 text-white bg-info rounded-3\">
\t\t\t\t\t\t\t\t\t\t<h2 class=\"text-center d-flex justify-content-center\">Suppliers</h2>
\t\t\t\t\t\t\t\t\t\t<h1 class=\"text-center mx-5\">
\t\t\t\t\t\t\t\t\t\t\t{{ 2 }}
\t\t\t\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row align-items-md-stretch\">
\t\t\t\t\t\t\t\t<div class=\"col-md-4 \">
\t\t\t\t\t\t\t\t\t<div class=\"h-10 p-2 mb-3 text-white bg-secondary rounded-3\">
\t\t\t\t\t\t\t\t\t\t<h2 class=\"text-center d-flex justify-content-center\">Products</h2>
\t\t\t\t\t\t\t\t\t\t<h1 class=\"text-center mx-5\">
\t\t\t\t\t\t\t\t\t\t\t{{ 3 }}
\t\t\t\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-4 \">
\t\t\t\t\t\t\t\t\t<div class=\"h-10 p-2 mb-3 text-white bg-danger rounded-3\">
\t\t\t\t\t\t\t\t\t\t<h2 class=\"text-center d-flex justify-content-center\">Products in danger</h2>
\t\t\t\t\t\t\t\t\t\t<h1 class=\"text-center mx-5\">
\t\t\t\t\t\t\t\t\t\t\t{{ 0 }}
\t\t\t\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row align-items-md-stretch\">
\t\t\t\t\t\t\t\t<div class=\"col-md-4 \">
\t\t\t\t\t\t\t\t\t<div class=\"h-10 p-2 mb-3 text-white bg-secondary rounded-3\">
\t\t\t\t\t\t\t\t\t\t<h2 class=\"text-center d-flex justify-content-center\">Vehicles</h2>
\t\t\t\t\t\t\t\t\t\t<h1 class=\"text-center mx-5\">
\t\t\t\t\t\t\t\t\t\t\t{{ 1 }}
\t\t\t\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-4 \">
\t\t\t\t\t\t\t\t\t<div class=\"h-10 p-2 mb-3 text-white bg-success rounded-3\">
\t\t\t\t\t\t\t\t\t\t<h2 class=\"text-center d-flex justify-content-center\">Vehicles available</h2>
\t\t\t\t\t\t\t\t\t\t<h1 class=\"text-center mx-5\">
\t\t\t\t\t\t\t\t\t\t\t{{ 0 }}
\t\t\t\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row align-items-md-stretch\">
\t\t\t\t\t\t\t\t<div class=\"col-md-4 \">
\t\t\t\t\t\t\t\t\t<div class=\"h-10 p-2 mb-3 text-white bg-secondary rounded-3\">
\t\t\t\t\t\t\t\t\t\t<h2 class=\"text-center d-flex justify-content-center\">Orders</h2>
\t\t\t\t\t\t\t\t\t\t<h1 class=\"text-center mx-5\">
\t\t\t\t\t\t\t\t\t\t\t{{ 3 }}
\t\t\t\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-4 \">
\t\t\t\t\t\t\t\t\t<div class=\"h-10 p-2 mb-3 text-white bg-success rounded-3\">
\t\t\t\t\t\t\t\t\t\t<h2 class=\"text-center d-flex justify-content-center\">Orders to be shipped</h2>
\t\t\t\t\t\t\t\t\t\t<h1 class=\"text-center mx-5\">
\t\t\t\t\t\t\t\t\t\t\t{{ 1 }}
\t\t\t\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</main>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>


\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4\" crossorigin=\"anonymous\"></script>

\t\t{{  include('layouts/partials/_footer.html.twig') }}

\t</body>
</html>
", "dashboard/index.html.twig", "C:\\wamp64\\www\\wms\\templates\\dashboard\\index.html.twig");
    }
}
