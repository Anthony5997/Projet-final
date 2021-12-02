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

/* trip/search.html.twig */
class __TwigTemplate_4e169d7155bfcd58ac170e8e988238415172b114660ee15b6519b228b25da2c8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trip/search.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trip/search.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "trip/search.html.twig", 1);
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

        echo "Rechercher un trajet";
        
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
        echo "<div class=\"container\">
    <div class=\"row search-section\">
    <div class=\"col-8 mt-5\">
        <form>
            <div class=\"form-row\" style=\"z-index: 30;\">
             <div class=\"col-12 mt-3\">
                <h2 class=\"text-center my-5\" >Rechercher un trajet</h2>
             </div>
                <div class=\"col-md-3 col-sm-6 mt-3\">
                <input name=\"departureSearch\" type=\"text\" class=\"form-control\" placeholder=\"Départ\">
                </div>
                <div class=\"col-md-3 col-sm-6 mt-3\">
                <input name=\"arrivalSearch\" type=\"text\" class=\"form-control\" placeholder=\"Arrivé\">
                </div>
                <div class=\"col-md-3 col-sm-6 mt-3\">
                <input name=\"dateSearch\" type=\"date\" class=\"form-control\" placeholder=\"Arrivé\">
                </div>
                 <div class=\"col-md-3 col-sm-6\">
                    <button class=\"mt-3 button-search col-12\" type=\"submit\"><i style=\"font-weight: 400; font-size: 28px;\"class=\"text-white fas fa-search-location\"></i></button>
                </div>
            </div>
        </form>
    </div>
    <div class=\"col-3\">
          <div class=\"d-flex justify-content-center div-test-search\">
            <img style=\"z-index: 5; width: 100%; padding-top:100px;\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/uploads/custom-pic/search.png"), "html", null, true);
        echo "\">
        </div>
    </div>
    </div>

</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "trip/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 31,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Rechercher un trajet{% endblock %}

{% block body %}
<div class=\"container\">
    <div class=\"row search-section\">
    <div class=\"col-8 mt-5\">
        <form>
            <div class=\"form-row\" style=\"z-index: 30;\">
             <div class=\"col-12 mt-3\">
                <h2 class=\"text-center my-5\" >Rechercher un trajet</h2>
             </div>
                <div class=\"col-md-3 col-sm-6 mt-3\">
                <input name=\"departureSearch\" type=\"text\" class=\"form-control\" placeholder=\"Départ\">
                </div>
                <div class=\"col-md-3 col-sm-6 mt-3\">
                <input name=\"arrivalSearch\" type=\"text\" class=\"form-control\" placeholder=\"Arrivé\">
                </div>
                <div class=\"col-md-3 col-sm-6 mt-3\">
                <input name=\"dateSearch\" type=\"date\" class=\"form-control\" placeholder=\"Arrivé\">
                </div>
                 <div class=\"col-md-3 col-sm-6\">
                    <button class=\"mt-3 button-search col-12\" type=\"submit\"><i style=\"font-weight: 400; font-size: 28px;\"class=\"text-white fas fa-search-location\"></i></button>
                </div>
            </div>
        </form>
    </div>
    <div class=\"col-3\">
          <div class=\"d-flex justify-content-center div-test-search\">
            <img style=\"z-index: 5; width: 100%; padding-top:100px;\" src=\"{{asset('assets/uploads/custom-pic/search.png')}}\">
        </div>
    </div>
    </div>

</div>
{% endblock %}", "trip/search.html.twig", "/shared/httpd/Projet-Final/templates/trip/search.html.twig");
    }
}
