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

/* base.html.twig */
class __TwigTemplate_49f271ef8518b2cbdf8cea317c7c758c53da47cf7a9b8b03a66658f844bef847 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

<head>
  <meta charset=\"UTF-8\">
  <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "</head>

<body>

<nav class=\"navbar navbar-light\" style=\"background-color: #e3f2fd;\">
  <a class=\"navbar-brand\" href=\"/quiz\"style=\"font-size:20px;font-style:italic;\">Quizz</a>
  <div>
    ";
        // line 20
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20)) {
            // line 21
            echo "  <a class=\"navbar-brand\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user");
            echo "\"style=\"font-size:20px;font-style:italic;\">Inscription</a>
    <a class=\"navbar-brand\" href=\"";
            // line 22
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\"style=\"font-size:20px;font-style:italic;\">Login</a>
    ";
        } else {
            // line 24
            echo "    <a class=\"navbar-brand\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil");
            echo "\"style=\"font-size:20px;font-style:italic;\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24), "username", [], "any", false, false, false, 24), "html", null, true);
            echo "</a>
  <a class=\"navbar-brand\" href=\"";
            // line 25
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\"style=\"font-size:20px;font-style:italic;\">Logout</a>
  ";
        }
        // line 27
        echo "</div>
</nav>

";
        // line 30
        $this->displayBlock('body', $context, $blocks);
        // line 31
        echo "</body>

</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Quizz";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "  <link href=\"https://fonts.googleapis.com/css?family=Yeon+Sung&display=swap\" rel=\"stylesheet\">
  <link href=\"https://fonts.googleapis.com/css?family=PT+Sans&display=swap\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" href=\"css/style.css\">
  <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 30
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 30,  126 => 8,  119 => 7,  106 => 6,  96 => 31,  94 => 30,  89 => 27,  84 => 25,  77 => 24,  72 => 22,  67 => 21,  65 => 20,  56 => 13,  54 => 7,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>

<head>
  <meta charset=\"UTF-8\">
  <title>{% block title %}Quizz{% endblock %}</title>
  {% block stylesheets %}
  <link href=\"https://fonts.googleapis.com/css?family=Yeon+Sung&display=swap\" rel=\"stylesheet\">
  <link href=\"https://fonts.googleapis.com/css?family=PT+Sans&display=swap\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" href=\"css/style.css\">
  <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
  {% endblock %}
</head>

<body>

<nav class=\"navbar navbar-light\" style=\"background-color: #e3f2fd;\">
  <a class=\"navbar-brand\" href=\"/quiz\"style=\"font-size:20px;font-style:italic;\">Quizz</a>
  <div>
    {% if not app.user %}
  <a class=\"navbar-brand\" href=\"{{ path('user') }}\"style=\"font-size:20px;font-style:italic;\">Inscription</a>
    <a class=\"navbar-brand\" href=\"{{ path('login') }}\"style=\"font-size:20px;font-style:italic;\">Login</a>
    {% else %}
    <a class=\"navbar-brand\" href=\"{{ path('profil') }}\"style=\"font-size:20px;font-style:italic;\">{{ app.user.username }}</a>
  <a class=\"navbar-brand\" href=\"{{ path('logout') }}\"style=\"font-size:20px;font-style:italic;\">Logout</a>
  {% endif %}
</div>
</nav>

{% block body %}{% endblock %}
</body>

</html>
", "base.html.twig", "/home/weijie/MVC_My_Quiz/quiz/templates/base.html.twig");
    }
}
