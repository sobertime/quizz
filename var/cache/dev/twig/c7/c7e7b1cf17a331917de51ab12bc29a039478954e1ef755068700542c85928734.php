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

/* home/quiz.html.twig */
class __TwigTemplate_99357f59e134dd9a5a044d127ca33b5d1729229fb55ddf177c044d76ed791bbb extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/quiz.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/quiz.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "user", [], "any", false, false, false, 4)) {
            // line 5
            echo "<h3 style=\"text-align:center;margin-top:2%;margin-bottom:2%;\">Welcome !</h3>
";
        } else {
            // line 7
            echo "<h3 style=\"text-align:center;margin-top:2%;margin-bottom:2%;font-family: 'PT Sans', sans-serif;\">Welcome ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "user", [], "any", false, false, false, 7), "username", [], "any", false, false, false, 7), "html", null, true);
            echo " !</h3>
";
        }
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 10
            echo "<div class=\"card\" style=\"width: 18rem;float:left;margin:0 3.5% 4% 5.5%;text-align:center;\">
  <img src=\"https://www.publicdomainpictures.net/pictures/40000/nahled/question-mark.jpg\" class=\"card-img-top\" alt=\"quizz\">
  <div class=\"card-body\">
    <h5 class=\"card-title\" style=\"font-size:15.5px;font-weight: 600;\">";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "name", [], "any", false, false, false, 13), "html", null, true);
            echo "</h5>
    <a href=\"/quiz/question/";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 14), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 14) - 1) * 10) + 1), "html", null, true);
            echo "\" class=\"btn btn-primary\">Start</a>
  </div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home/quiz.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 18,  84 => 14,  80 => 13,  75 => 10,  71 => 9,  65 => 7,  61 => 5,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends('base.html.twig')%}

{% block body %}
{% if not app.user %}
<h3 style=\"text-align:center;margin-top:2%;margin-bottom:2%;\">Welcome !</h3>
{% else %}
<h3 style=\"text-align:center;margin-top:2%;margin-bottom:2%;font-family: 'PT Sans', sans-serif;\">Welcome {{ app.user.username }} !</h3>
{% endif %}
{% for categorie in categories %}
<div class=\"card\" style=\"width: 18rem;float:left;margin:0 3.5% 4% 5.5%;text-align:center;\">
  <img src=\"https://www.publicdomainpictures.net/pictures/40000/nahled/question-mark.jpg\" class=\"card-img-top\" alt=\"quizz\">
  <div class=\"card-body\">
    <h5 class=\"card-title\" style=\"font-size:15.5px;font-weight: 600;\">{{ categorie.name}}</h5>
    <a href=\"/quiz/question/{{ categorie.id }}/{{ (categorie.id-1)*10+1 }}\" class=\"btn btn-primary\">Start</a>
  </div>
</div>
{% endfor %}


{% endblock %}
", "home/quiz.html.twig", "/home/weijie/MVC_My_Quiz/quiz/templates/home/quiz.html.twig");
    }
}
