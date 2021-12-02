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

/* admin/index.html.twig */
class __TwigTemplate_2beaf0d9b5effa00bf0f995df2578abb3e1ef87de9e33d9b6e73128b2490266f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello AdminController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
    <h1>Panneau d'administration</h1>
</div>

     <ul class=\"nav nav-tabs\" role=\"tablist\">
          <li class=\"nav-item\">
                <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#tabs-trip\" role=\"tab\">Derniers utilisateurs inscrit</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" data-toggle=\"tab\" href=\"#tabs-user\" role=\"tab\">Derniers Trajets publier</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" data-toggle=\"tab\" href=\"#tabs-3\" role=\"tab\">Derniers avis laissé</a>
            </li>
        </ul>


        <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tabs-trip\" role=\"tabpanel\">
               <div class=\"container\">
                  Les 20 derniers utilisateurs inscrit
                    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allUser"]) || array_key_exists("allUser", $context) ? $context["allUser"] : (function () { throw new RuntimeError('Variable "allUser" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 33
            echo "                <div class=\"container my-3\">
                        <div>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstName", [], "any", false, false, false, 34), "html", null, true);
            echo "</div>
                        <div>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastName", [], "any", false, false, false, 35), "html", null, true);
            echo "</div>
                        <div>";
            // line 36
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "createdAt", [], "any", false, false, false, 36), "d M Y"), "html", null, true);
            echo "</div>
                </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                </div>
            </div>
            <div class=\"tab-pane\" id=\"tabs-user\" role=\"tabpanel\">
                <div class=\"container profile-section\">
                        Les 20 derniers trajets publié
                    ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allTrip"]) || array_key_exists("allTrip", $context) ? $context["allTrip"] : (function () { throw new RuntimeError('Variable "allTrip" does not exist.', 44, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["trip"]) {
            // line 45
            echo "                    <div class=\"container my-3\">
                        <div>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "departure", [], "any", false, false, false, 46), "html", null, true);
            echo " -> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "arrival", [], "any", false, false, false, 46), "html", null, true);
            echo " le ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "dateOfTrip", [], "any", false, false, false, 46), "d M Y"), "html", null, true);
            echo " </div>
                        <div> à ";
            // line 47
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "startTime", [], "any", false, false, false, 47), "H:i"), "html", null, true);
            echo " </div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trip'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                </div>
            </div>
            <div class=\"tab-pane\" id=\"tabs-3\" role=\"tabpanel\">
                <div class=\"container profile-section\">
           
                </div>
            </div>
        </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 50,  162 => 47,  154 => 46,  151 => 45,  147 => 44,  140 => 39,  131 => 36,  127 => 35,  123 => 34,  120 => 33,  116 => 32,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello AdminController!{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
    <h1>Panneau d'administration</h1>
</div>

     <ul class=\"nav nav-tabs\" role=\"tablist\">
          <li class=\"nav-item\">
                <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#tabs-trip\" role=\"tab\">Derniers utilisateurs inscrit</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" data-toggle=\"tab\" href=\"#tabs-user\" role=\"tab\">Derniers Trajets publier</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" data-toggle=\"tab\" href=\"#tabs-3\" role=\"tab\">Derniers avis laissé</a>
            </li>
        </ul>


        <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tabs-trip\" role=\"tabpanel\">
               <div class=\"container\">
                  Les 20 derniers utilisateurs inscrit
                    {% for user in allUser %}
                <div class=\"container my-3\">
                        <div>{{user.firstName}}</div>
                        <div>{{user.lastName}}</div>
                        <div>{{user.createdAt|date(\"d M Y\")}}</div>
                </div>
                    {% endfor %}
                </div>
            </div>
            <div class=\"tab-pane\" id=\"tabs-user\" role=\"tabpanel\">
                <div class=\"container profile-section\">
                        Les 20 derniers trajets publié
                    {% for trip in allTrip %}
                    <div class=\"container my-3\">
                        <div>{{trip.departure}} -> {{trip.arrival}} le {{trip.dateOfTrip|date(\"d M Y\")}} </div>
                        <div> à {{trip.startTime|date(\"H:i\")}} </div>
                    </div>
                    {% endfor %}
                </div>
            </div>
            <div class=\"tab-pane\" id=\"tabs-3\" role=\"tabpanel\">
                <div class=\"container profile-section\">
           
                </div>
            </div>
        </div>


{% endblock %}
", "admin/index.html.twig", "/shared/httpd/Projet-Final/templates/admin/index.html.twig");
    }
}
