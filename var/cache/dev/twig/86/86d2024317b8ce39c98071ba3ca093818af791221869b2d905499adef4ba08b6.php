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

/* question/show.html.twig */
class __TwigTemplate_93bac55fc787cc564c1bb3e3d3a4ffe35b65cff00df40a77458aa62b6e835e41 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "question/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "question/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div style=\"text-align:center;\">
<div class=\"text-center\">
  <p>Quizz : ";
        // line 5
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["id_question"]) || array_key_exists("id_question", $context) ? $context["id_question"] : (function () { throw new RuntimeError('Variable "id_question" does not exist.', 5, $this->source); })()), "id", [], "any", false, false, false, 5) - ((twig_get_attribute($this->env, $this->source, (isset($context["id_catego"]) || array_key_exists("id_catego", $context) ? $context["id_catego"] : (function () { throw new RuntimeError('Variable "id_catego" does not exist.', 5, $this->source); })()), "id", [], "any", false, false, false, 5) - 1) * 10)), "html", null, true);
        echo " / 10</p>
  <img src=\"/css/okk.png\" class=\"rounded\" alt=\"quizz\"  style=\"height:270px;\">
</div>
<form  action=\"\" method=\"post\">


";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["question_by_catego"]) || array_key_exists("question_by_catego", $context) ? $context["question_by_catego"] : (function () { throw new RuntimeError('Variable "question_by_catego" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 12
            echo "<h3 >";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "question", [], "any", false, false, false, 12), "html", null, true);
            echo "</h3><br>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "

";
        // line 16
        if (((isset($context["flag"]) || array_key_exists("flag", $context) ? $context["flag"] : (function () { throw new RuntimeError('Variable "flag" does not exist.', 16, $this->source); })()) == 2)) {
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["options_by_question"]) || array_key_exists("options_by_question", $context) ? $context["options_by_question"] : (function () { throw new RuntimeError('Variable "options_by_question" does not exist.', 17, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["options"]) {
                // line 18
                echo "<input type=\"radio\" name=\"options\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["options"], "reponse", [], "any", false, false, false, 18), "html", null, true);
                echo "\" style=\"margin-top: 2%;\" required>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["options"], "reponse", [], "any", false, false, false, 18), "html", null, true);
                echo "<br>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['options'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "<input class=\"btn btn-primary\" type=\"submit\" style=\"margin-top: 2%;\"value=\"ok\"/>
";
        }
        // line 22
        echo "

";
        // line 24
        if (((isset($context["flag"]) || array_key_exists("flag", $context) ? $context["flag"] : (function () { throw new RuntimeError('Variable "flag" does not exist.', 24, $this->source); })()) == 1)) {
            // line 25
            echo "<span class=\"badge badge-success\" style=\"font-size:18px;margin-bottom:2%;\">Correct</span><br>
<strong style=\"color:green;\">";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reponse_1"]) || array_key_exists("reponse_1", $context) ? $context["reponse_1"] : (function () { throw new RuntimeError('Variable "reponse_1" does not exist.', 26, $this->source); })()), "reponse", [], "any", false, false, false, 26), "html", null, true);
            echo " </strong><br>
";
            // line 27
            if (((twig_get_attribute($this->env, $this->source, (isset($context["id_catego"]) || array_key_exists("id_catego", $context) ? $context["id_catego"] : (function () { throw new RuntimeError('Variable "id_catego" does not exist.', 27, $this->source); })()), "id", [], "any", false, false, false, 27) * 10) == twig_get_attribute($this->env, $this->source, (isset($context["id_question"]) || array_key_exists("id_question", $context) ? $context["id_question"] : (function () { throw new RuntimeError('Variable "id_question" does not exist.', 27, $this->source); })()), "id", [], "any", false, false, false, 27))) {
                // line 28
                echo "<a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("quiz");
                echo "\" class=\"btn btn-primary\"style=\"margin-top: 2%;\">home</a>
";
            } else {
                // line 30
                echo "<a href=\"/quiz/question/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["id_catego"]) || array_key_exists("id_catego", $context) ? $context["id_catego"] : (function () { throw new RuntimeError('Variable "id_catego" does not exist.', 30, $this->source); })()), "id", [], "any", false, false, false, 30), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["id_question"]) || array_key_exists("id_question", $context) ? $context["id_question"] : (function () { throw new RuntimeError('Variable "id_question" does not exist.', 30, $this->source); })()), "id", [], "any", false, false, false, 30) + 1), "html", null, true);
                echo "\" class=\"btn btn-primary\"style=\"margin-top: 2%;\">next</a>
";
            }
        }
        // line 33
        echo "

";
        // line 35
        if (((isset($context["flag"]) || array_key_exists("flag", $context) ? $context["flag"] : (function () { throw new RuntimeError('Variable "flag" does not exist.', 35, $this->source); })()) == 0)) {
            // line 36
            echo "<span class=\"badge badge-danger\" style=\"font-size:18px;\">Wrong answer!</span><br>
<p style=\"color:green;margin-top:2%;\">Right Answer is : <strong style=\"color:green;\">";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reponse_1"]) || array_key_exists("reponse_1", $context) ? $context["reponse_1"] : (function () { throw new RuntimeError('Variable "reponse_1" does not exist.', 37, $this->source); })()), "reponse", [], "any", false, false, false, 37), "html", null, true);
            echo "</strong></p>
";
            // line 38
            if (((twig_get_attribute($this->env, $this->source, (isset($context["id_catego"]) || array_key_exists("id_catego", $context) ? $context["id_catego"] : (function () { throw new RuntimeError('Variable "id_catego" does not exist.', 38, $this->source); })()), "id", [], "any", false, false, false, 38) * 10) == twig_get_attribute($this->env, $this->source, (isset($context["id_question"]) || array_key_exists("id_question", $context) ? $context["id_question"] : (function () { throw new RuntimeError('Variable "id_question" does not exist.', 38, $this->source); })()), "id", [], "any", false, false, false, 38))) {
                // line 39
                echo "<a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("quiz");
                echo "\" class=\"btn btn-primary\"style=\"margin-top: 2%;\">home</a>
";
            } else {
                // line 41
                echo "<a href=\"/quiz/question/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["id_catego"]) || array_key_exists("id_catego", $context) ? $context["id_catego"] : (function () { throw new RuntimeError('Variable "id_catego" does not exist.', 41, $this->source); })()), "id", [], "any", false, false, false, 41), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["id_question"]) || array_key_exists("id_question", $context) ? $context["id_question"] : (function () { throw new RuntimeError('Variable "id_question" does not exist.', 41, $this->source); })()), "id", [], "any", false, false, false, 41) + 1), "html", null, true);
                echo "\" class=\"btn btn-primary\"style=\"margin-top: 2%;\">next</a>
";
            }
        }
        // line 44
        echo "
</form>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "question/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 44,  161 => 41,  155 => 39,  153 => 38,  149 => 37,  146 => 36,  144 => 35,  140 => 33,  131 => 30,  125 => 28,  123 => 27,  119 => 26,  116 => 25,  114 => 24,  110 => 22,  106 => 20,  95 => 18,  91 => 17,  89 => 16,  85 => 14,  76 => 12,  72 => 11,  63 => 5,  59 => 3,  52 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
<div style=\"text-align:center;\">
<div class=\"text-center\">
  <p>Quizz : {{ id_question.id - (id_catego.id -1 )*10 }} / 10</p>
  <img src=\"/css/okk.png\" class=\"rounded\" alt=\"quizz\"  style=\"height:270px;\">
</div>
<form  action=\"\" method=\"post\">


{% for question in question_by_catego %}
<h3 >{{ question.question }}</h3><br>
{% endfor %}


{% if flag == 2 %}
{% for options in options_by_question %}
<input type=\"radio\" name=\"options\" value=\"{{ options.reponse }}\" style=\"margin-top: 2%;\" required>{{ options.reponse }}<br>
{% endfor %}
<input class=\"btn btn-primary\" type=\"submit\" style=\"margin-top: 2%;\"value=\"ok\"/>
{% endif %}


{% if flag == 1 %}
<span class=\"badge badge-success\" style=\"font-size:18px;margin-bottom:2%;\">Correct</span><br>
<strong style=\"color:green;\">{{ reponse_1.reponse }} </strong><br>
{% if id_catego.id * 10 == id_question.id %}
<a href=\"{{ path('quiz') }}\" class=\"btn btn-primary\"style=\"margin-top: 2%;\">home</a>
{% else %}
<a href=\"/quiz/question/{{ id_catego.id }}/{{ id_question.id + 1 }}\" class=\"btn btn-primary\"style=\"margin-top: 2%;\">next</a>
{% endif %}
{% endif %}


{% if flag == 0 %}
<span class=\"badge badge-danger\" style=\"font-size:18px;\">Wrong answer!</span><br>
<p style=\"color:green;margin-top:2%;\">Right Answer is : <strong style=\"color:green;\">{{ reponse_1.reponse }}</strong></p>
{% if id_catego.id * 10 == id_question.id %}
<a href=\"{{ path('quiz') }}\" class=\"btn btn-primary\"style=\"margin-top: 2%;\">home</a>
{% else %}
<a href=\"/quiz/question/{{ id_catego.id }}/{{ id_question.id + 1 }}\" class=\"btn btn-primary\"style=\"margin-top: 2%;\">next</a>
{% endif %}
{% endif %}

</form>
</div>
{% endblock %}
", "question/show.html.twig", "/home/weijie/MVC_My_Quiz/quiz/templates/question/show.html.twig");
    }
}
