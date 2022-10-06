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

/* posts/show.html.twig */
class __TwigTemplate_9d2485b723f3e3e68e5472ffcffd778f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "posts/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "posts/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "posts/show.html.twig", 1);
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

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        
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
        echo "<div class=\"row\">
<div class=\"col mx-auto\">
<article>
 
<article class=\"bg-white rounded shadow post\">
   <div class=\"mw-100 rounded-top overflow-hidden\">
   ";
        // line 13
        if (twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 13, $this->source); })()), "imageName", [], "any", false, false, false, 13)) {
            // line 14
            echo "      <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 14, $this->source); })())), "squard_med"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 14, $this->source); })()), "title", [], "any", false, false, false, 14), "html", null, true);
            echo "\" class=\"w-100 \">  
      ";
        } else {
            // line 16
            echo "      <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/placeholder.jpg"), "squard_med"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 16, $this->source); })()), "title", [], "any", false, false, false, 16), "html", null, true);
            echo "\" class=\"w-100 \">
      ";
        }
        // line 18
        echo "      </div>
      <h2 class=\"h5 ps-5 pt-3 text-secondary text-muted\">";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 19, $this->source); })()), "title", [], "any", false, false, false, 19), "html", null, true);
        echo "</h2> 
      <p class=\"ps-5 pb-3 text-muted\"><small>Submitted at ";
        // line 20
        echo $this->extensions['Knp\Bundle\TimeBundle\Twig\Extension\TimeExtension']->diff(twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 20, $this->source); })()), "createdAt", [], "any", false, false, false, 20));
        echo " by ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20), "userName", [], "any", false, false, false, 20), "html", null, true);
        echo "</small></p>
      <h3 class=\"h6 ps-5 pt-3 text-secondary text-muted\">";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 21, $this->source); })()), "miniTitle", [], "any", false, false, false, 21), "html", null, true);
        echo "</h3>
      <h3 class=\"h6 ps-5 pt-3 text-secondary text-muted\">";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 22, $this->source); })()), "OneWordPov", [], "any", false, false, false, 22), "html", null, true);
        echo " and ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 22, $this->source); })()), "mark", [], "any", false, false, false, 22), "html", null, true);
        echo "/10 </h3>
      <p class=\"h6 ps-5 pt-3 text-secondary text-muted\">Location : ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 23, $this->source); })()), "location", [], "any", false, false, false, 23), "html", null, true);
        echo "</p>
      <div class=\"ps-5 pt-3 pb-5 pe-5 text-break\">
      ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 25, $this->source); })()), "reviewArticle", [], "any", false, false, false, 25), "html", null, true);
        echo "
      </div>
  ";
        // line 27
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27) == twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27))) {
            // line 28
            echo "     <div class=\"ps-3 pb-3\"> 
<a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_posts_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 29, $this->source); })()), "id", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\" class=\"btn btn-light\">Edit</a> 
<a href=\"#\" onclick=\"event.preventDefault(); confirm('Are you sure?') && document.getElementById('js-post-delete-form').submit(); \" class=\"btn btn-light\">Delete</a>
 </div>
  ";
        }
        // line 33
        echo "  </article>


</div>
</div>



<form id=\"js-post-delete-form\" action=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_posts_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 41, $this->source); })()), "id", [], "any", false, false, false, 41)]), "html", null, true);
        echo "\" method=\"post\" style=\"display:none;\"> 
  <input type=\"hidden\" name=\"csrf_token\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("post_deletion" . twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 42, $this->source); })()), "id", [], "any", false, false, false, 42))), "html", null, true);
        echo "\">
  <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
</form>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "posts/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 42,  169 => 41,  159 => 33,  152 => 29,  149 => 28,  147 => 27,  142 => 25,  137 => 23,  131 => 22,  127 => 21,  121 => 20,  117 => 19,  114 => 18,  106 => 16,  98 => 14,  96 => 13,  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title post.title %}


{% block body %}
<div class=\"row\">
<div class=\"col mx-auto\">
<article>
 
<article class=\"bg-white rounded shadow post\">
   <div class=\"mw-100 rounded-top overflow-hidden\">
   {% if post.imageName %}
      <img src=\"{{  vich_uploader_asset(post) | imagine_filter('squard_med') }}\" alt=\"{{ post.title }}\" class=\"w-100 \">  
      {% else %}
      <img src=\"{{  asset('images/placeholder.jpg') | imagine_filter('squard_med') }}\" alt=\"{{ post.title }}\" class=\"w-100 \">
      {% endif %}
      </div>
      <h2 class=\"h5 ps-5 pt-3 text-secondary text-muted\">{{ post.title }}</h2> 
      <p class=\"ps-5 pb-3 text-muted\"><small>Submitted at {{ post.createdAt|ago }} by {{ post.user.userName }}</small></p>
      <h3 class=\"h6 ps-5 pt-3 text-secondary text-muted\">{{ post.miniTitle }}</h3>
      <h3 class=\"h6 ps-5 pt-3 text-secondary text-muted\">{{ post.OneWordPov }} and {{ post.mark }}/10 </h3>
      <p class=\"h6 ps-5 pt-3 text-secondary text-muted\">Location : {{ post.location }}</p>
      <div class=\"ps-5 pt-3 pb-5 pe-5 text-break\">
      {{ post.reviewArticle }}
      </div>
  {% if app.user== post.user %}
     <div class=\"ps-3 pb-3\"> 
<a href=\"{{  path('app_posts_edit',{id: post.id}) }}\" class=\"btn btn-light\">Edit</a> 
<a href=\"#\" onclick=\"event.preventDefault(); confirm('Are you sure?') && document.getElementById('js-post-delete-form').submit(); \" class=\"btn btn-light\">Delete</a>
 </div>
  {% endif %}
  </article>


</div>
</div>



<form id=\"js-post-delete-form\" action=\"{{  path('app_posts_delete',{id: post.id}) }}\" method=\"post\" style=\"display:none;\"> 
  <input type=\"hidden\" name=\"csrf_token\" value=\"{{ csrf_token('post_deletion'~ post.id) }}\">
  <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
</form>
{% endblock %}", "posts/show.html.twig", "C:\\wamp64\\www\\dwira_blanca_app\\templates\\posts\\show.html.twig");
    }
}
